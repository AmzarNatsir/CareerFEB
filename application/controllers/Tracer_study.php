<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Tracer_study extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model(array('model_tracer', 'model_security'));
		date_default_timezone_set("Asia/Makassar");
		//require APPPATH.'libraries/phpmailer/src/Exception.php';
		//require APPPATH.'libraries/phpmailer/src/PHPMailer.php';
		//require APPPATH.'libraries/phpmailer/src/SMTP.php';
	}
	function _init()
	{
		$this->output->set_template('index');
    }
    public function registrasi()
    {
        $this->load->view("tracer_study/registrasi/index");
    }
	public function periksa_akun()
	{
		$nim = $this->input->post("kode");
		$res = $this->model_tracer->cek_akun($nim);
		if(empty($res->id)) {
			$err = 1; //Akun Baru
			$data = "";
		} else {
			$err = 2; //Akun Sudah Ada
			$nama = $res->nama_lengkap;
			$email = $res->email;
			$data = $res->nama_lengkap."#".$res->email."#".$res->tracer;
		}
		echo $err."-".$data;
	}
	public function simpan_registrasi()
	{
		$insert['nama_lengkap'] = $this->input->post("inp_nama");
		$insert['nim'] = $this->input->post("inp_nim");
		$insert['id_prodi'] = $this->input->post("id_prodi");
		$insert['email'] = $this->input->post("alumniemail");
		$insert['passwd'] = MD5(trim($this->input->post("inppassword")));
		$insert['tgl_registrasi'] = date("Y-m-d");
		$insert['status_akun'] = 1; //status akun aktif
		$this->model_tracer->insert_otp($insert);
		$this->session->set_flashdata("registrasi_info","Data anda berhasil disimpan. Silahkan login untuk mengisi kuisioner tracer study");
		redirect("tracer_study/login");
	}
	public function login()
	{
		//$this->model_security->get_security_reg_cc();
		$this->load->view("tracer_study/registrasi/login");
	}
	public function proses_login()
	{
		$usr = $this->input->post("alumniemail");
		$psw = MD5(trim($this->input->post("inppassword")));
		$this->db->where("email", $usr);
		$this->db->where("passwd", $psw);
		$this->db->where("status_akun", 1);
		$result = $this->db->get('cc_alumni')->row();
        if(!empty($result->id))
        {
            $sess = array(
                "idalumnicc"=>$result->id,
                "nmalumnicc"=>$result->nama_lengkap,
                "nimalumnicc"=>$result->nim,
				"emailalumnicc"=>$result->email,
				"prodialumnicc"=>$result->id_prodi
            );
            $this->session->set_userdata($sess);
            redirect("tracer_study/quisioner");
        }
        else{
            $this->session->set_flashdata("konfirm_login", "Maaf, Nama Email atau Password yang anda masukkan salah.");
            redirect("tracer_study/login");
        }
	}
	public function quisioner()
	{
		//$this->model_security->get_security_tracer_cc();
		$this->load->view("tracer_study/quisioner/index");
	}
	public function keluar_log()
	{
		$this->session->sess_destroy();
		redirect("tracer_study/login");
	}
	/*
	public function kirim_kode_aktivasi()
	{
		$sendto = $this->input->post("alumniemail");
		$response = false;
        $mail = new PHPMailer();
		// SMTP configuration
		$mail->isSMTP();
		$mail->Host     = 'mail.feb.unismuh.ac.id'; //sesuaikan sesuai nama domain hosting/server yang digunakan
		$mail->SMTPAuth = true;
		$mail->Username = 'info@feb.unismuh.ac.id'; // user email
		$mail->Password = 'f3k0n.c0m'; // password email
		$mail->SMTPSecure = 'ssl';
		$mail->Port     = 465;
		$mail->setFrom('info@feb.unismuh.ac.id', 'Career Center FEB Unismuh Makassar'); // user email
		// Add a recipient
		$mail->addAddress($sendto); //email tujuan pengiriman email
		// Email subject
		$mail->Subject = 'Proses Aktivasi Akun Career Center'; //subject email
		// Set email format to HTML
		$mail->isHTML(true);
		$kode_otp = rand(1000, 999999);

		$insert['email'] = $sendto;
		$insert['otp'] = $kode_otp;
		$insert['tgl_registrasi'] = date("Y-m-d");

		$data['kode'] = $kode_otp;
		$body = $this->load->view('tracer_study/temp_email/email_kode.php', $data, TRUE); 
		$mail->Body = $body;
		// Send email
		if(!$mail->send()){
			$this->session->set_flashdata("email_sent","Email gagal dikirim : ".$mail->ErrorInfo);
			redirect("tracer_study/registrasi");
		}else{
			$id_cc = $this->model_tracer->insert_otp($insert);
			$sess_cc = array(
                "cc_id_sess"=>$id_cc,
                "cc_email_sess"=>$sendto
            );
			//$this->session->unset_userdata($sess_cc);
            $this->session->set_userdata($sess_cc);
			redirect("tracer_study/aktivasi");
		}
	}
	public function aktivasi()
	{
		$this->model_security->get_security_reg_cc();
		$this->load->view("tracer_study/registrasi/aktivasi");
	}
	*/
}