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
		$this->db->where('tracer IS NULL');
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
            $this->session->set_flashdata("konfirm_login", "Maaf, Nama Email atau Password yang anda masukkan salah. Atau anda telah mengisi quisioner");
            redirect("tracer_study/login");
        }
	}
	public function quisioner()
	{
		$this->model_security->get_security_tracer_cc();
		$data['provinsi'] = $this->model_tracer->get_provinsi();
		$this->load->view("tracer_study/quisioner/index", $data);
	}
	public function tampilkan_kabupaten()
	{
		$id_provinsi = $this->uri->segment(3);
		$result = $this->model_tracer->get_kabupaten($id_provinsi);

		$html_view = "<option></option>";
		foreach($result as $kab) {
			$html_view .= "<option value=".$kab['id'].">".$kab['nama_kabupaten']."</option>";
		}
		echo $html_view;
	}
	public function tampilkan_kecamatan()
	{
		$id_kabupaten = $this->uri->segment(3);
		$result = $this->model_tracer->get_kecamatan($id_kabupaten);

		$html_view = "<option></option>";
		foreach($result as $kec) {
			$html_view .= "<option value=".$kec['id'].">".$kec['nama_kecamatan']."</option>";
		}
		echo $html_view;
	}
	public function tampilkan_kelurahan()
	{
		$id_kecamatan = $this->uri->segment(3);
		$result = $this->model_tracer->get_kelurahan($id_kecamatan);

		$html_view = "<option></option>";
		foreach($result as $kel) {
			$html_view .= "<option value=".$kel['id'].">".$kel['nama_kelurahan']."</option>";
		}
		echo $html_view;
	}
	public function simpan_tracer()
	{
		$this->model_security->get_security_tracer_cc();
		//update profil
		$id_alumni = $this->session->userdata("idalumnicc");
		$profil['tempat_lahir'] = $this->input->post("inp_tempat_lahir");
		$profil['tgl_lahir'] = $this->input->post("inp_tanggal_lahir");
		$profil['jenkel'] = $this->input->post("pil_jenkel");
		$profil['domisili'] = $this->input->post("inp_alamat");
		$profil['id_prov_domisili'] = $this->input->post("pil_provinsi");
		$profil['id_kab_domisi'] = $this->input->post("pil_kabupaten");
		$profil['id_kec_domisili'] = $this->input->post("pil_kecamatan");
		$profil['id_kel_domisili'] = $this->input->post("pil_kelurahan");
		$profil['no_telepon'] = $this->input->post("inp_kontak");
		$profil['tahun_lulus'] = $this->input->post("pil_tahun_lulus");
		$profil['tracer'] = 1; //update tabel tracer = telah mengisi quisioner ts
		$this->model_tracer->update_data_alumni($id_alumni, $profil);
		//simpan quisioner
		$quis['id_alumni_cc'] = $id_alumni;
		$quis['q_no_1'] = $this->input->post("pil_kerja");
		//checkbox
		if(empty($this->input->post("pil_1_1[]")))
		{
			$pilihan_1_1=NULL;
		} else {
			$pilihan_1_1=implode(",", $this->input->post("pil_1_1[]"));
		}
		$quis['q_no_1_1'] = $pilihan_1_1;
		//radio
		$quis['q_no_1_2'] = $this->input->post("pil_1_2");
		$quis['q_no_1_3'] = $this->input->post("pil_1_3");
		$quis['q_no_1_4'] = $this->input->post("pil_1_4");
		$quis['q_no_1_5'] = $this->input->post("pil_1_5");
		$quis['q_no_1_6'] = $this->input->post("pil_1_6");
		//checkbox
		if(empty($this->input->post("pil_1_7[]")))
		{
			$pilihan_1_7=NULL;
		} else {
			$pilihan_1_7=implode(",", $this->input->post("pil_1_7[]"));
		}
		$quis['q_no_1_7'] = $pilihan_1_7;
		//radio
		$quis['q_no_1_8'] = $this->input->post("pil_1_8");
		$quis['q_no_1_9'] = $this->input->post("pil_1_9");
		$quis['q_no_1_10'] = $this->input->post("pil_1_10");
		$quis['q_no_1_11'] = $this->input->post("pil_1_11");
		$quis['q_no_1_12_1'] = $this->input->post("pil_1_12_1");
		$quis['q_no_1_12_2'] = $this->input->post("pil_1_12_2");
		$quis['q_no_1_12_3'] = $this->input->post("pil_1_12_3");
		$quis['q_no_1_12_4'] = $this->input->post("pil_1_12_4");
		$quis['q_no_1_12_5'] = $this->input->post("pil_1_12_5");
		$quis['q_no_1_12_6'] = $this->input->post("pil_1_12_6");
		$quis['q_no_1_12_7'] = $this->input->post("pil_1_12_7");
		$quis['q_no_1_12_8'] = $this->input->post("pil_1_12_8");
		$quis['q_no_1_12_9'] = $this->input->post("pil_1_12_9");
		$quis['q_no_1_12_10'] = $this->input->post("pil_1_12_10");
		$quis['q_no_1_12_11'] = $this->input->post("pil_1_12_11");
		$quis['q_no_1_12_12'] = $this->input->post("pil_1_12_12");
		$quis['q_no_1_12_13'] = $this->input->post("pil_1_12_13");
		$quis['q_no_1_12_14'] = $this->input->post("pil_1_12_14");
		$quis['q_no_1_13_1'] = $this->input->post("pil_1_13_1");
		$quis['q_no_1_13_2'] = $this->input->post("pil_1_13_2");
		$quis['q_no_1_14_1'] = $this->input->post("pil_1_14_1");
		$quis['q_no_1_14_2'] = $this->input->post("pil_1_14_2");
		$quis['q_no_1_14_3'] = $this->input->post("pil_1_14_3");
		$quis['q_no_1_14_4'] = $this->input->post("pil_1_14_4");
		$quis['q_no_1_14_5'] = $this->input->post("pil_1_14_5");
		$quis['q_no_1_14_6'] = $this->input->post("pil_1_14_6");
		$quis['q_no_1_14_7'] = $this->input->post("pil_1_14_7");
		$quis['q_no_1_14_8'] = $this->input->post("pil_1_14_8");
		$quis['q_no_1_14_9'] = $this->input->post("pil_1_14_9");
		$quis['q_no_1_14_10'] = $this->input->post("pil_1_14_10");
		$quis['q_no_1_14_11'] = $this->input->post("pil_1_14_11");
		$quis['q_no_1_14_12'] = $this->input->post("pil_1_14_12");
		$quis['q_no_1_14_13'] = $this->input->post("pil_1_14_13");
		$quis['q_no_1_14_14'] = $this->input->post("pil_1_14_14");
		//checkbox
		if(empty($this->input->post("pil_2_1[]")))
		{
			$pilihan_2_1=NULL;
		} else {
			$pilihan_2_1=implode(",", $this->input->post("pil_2_1[]"));
		}
		$quis['q_no_2_1'] = $pilihan_2_1;
		if(empty($this->input->post("pil_2_2[]")))
		{
			$pilihan_2_2=NULL;
		} else {
			$pilihan_2_2=implode(",", $this->input->post("pil_2_2[]"));
		}
		$quis['q_no_2_2'] = $pilihan_2_2;
		//radio
		$quis['q_no_2_3'] = $this->input->post("pil_2_3");
		$quis['q_no_2_4'] = $this->input->post("pil_2_4");
		//checkbox
		if(empty($this->input->post("pil_2_5[]")))
		{
			$pilihan_2_5=NULL;
		} else {
			$pilihan_2_5=implode(",", $this->input->post("pil_2_5[]"));
		}
		$quis['q_no_2_5'] = $pilihan_2_5;
		//radio
		$quis['q_no_2_6_1'] = $this->input->post("pil_2_6_1");
		$quis['q_no_2_6_2'] = $this->input->post("pil_2_6_2");
		$quis['q_no_2_6_3'] = $this->input->post("pil_2_6_3");
		$quis['q_no_2_6_4'] = $this->input->post("pil_2_6_4");
		$quis['q_no_2_6_5'] = $this->input->post("pil_2_6_5");
		$quis['q_no_2_6_6'] = $this->input->post("pil_2_6_6");
		$quis['q_no_2_6_7'] = $this->input->post("pil_2_6_7");
		$quis['q_no_2_6_8'] = $this->input->post("pil_2_6_8");
		$quis['q_no_3_1'] = $this->input->post("pil_3_1");
		$quis['q_no_3_2_1'] = $this->input->post("pil_3_2_1");
		$quis['q_no_3_2_2'] = $this->input->post("pil_3_2_2");
		$quis['q_no_3_2_3'] = $this->input->post("pil_3_2_3");
		$quis['q_no_3_2_4'] = $this->input->post("pil_3_2_4");
		$quis['q_no_3_2_5'] = $this->input->post("pil_3_2_5");
		//checkbos
		if(empty($this->input->post("pil_4[]")))
		{
			$pilihan_4=NULL;
		} else {
			$pilihan_4=implode(",", $this->input->post("pil_4[]"));
		}
		$quis['q_no_4'] = $pilihan_4;
		$this->model_tracer->insert_tracer_study($quis);

		redirect("tracer_study/terima_kasih");
	}
	public function terima_kasih()
	{
		$this->load->view('tracer_study/quisioner/terima_kasih');
	}
	public function keluar_log()
	{
		$this->session->sess_destroy();
		redirect("tracer_study/login");
	}
	public function keluar_ke_home()
	{
		$this->session->sess_destroy();
		redirect("");
	}
	public function hasil()
	{
		$this->_init();
		$this->load->view('home/hasil_tracer/index');
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