<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Tracer_study extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		//$this->load->model(array('model_dosen', 'model_main'));
		date_default_timezone_set("Asia/Makassar");
		require APPPATH.'libraries/phpmailer/src/Exception.php';
		require APPPATH.'libraries/phpmailer/src/PHPMailer.php';
		require APPPATH.'libraries/phpmailer/src/SMTP.php';
	}
	function _init()
	{
		$this->output->set_template('index');
    }
    public function registrasi()
    {
        $this->load->view("tracer_study/registrasi/index");
    }
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
		//$mail->addReplyTo('xxx@hostdomain.com', ''); //user email

		// Add a recipient
		$mail->addAddress($sendto); //email tujuan pengiriman email

		// Email subject
		$mail->Subject = 'Career Center FEB Unismuh Makassar'; //subject email

		// Set email format to HTML
		$mail->isHTML(true);

		// Email body content
		//$mailContent = "<h1>Career Center FEB Unismuh</h1>
		//	<p>Kode Aktivasi : </p>"; // isi email
		$data['kode'] = "aabbcc";
		$body = $this->load->view('tracer_study/temp_email/email_kode.php', $data, TRUE); 
		$mail->Body = $body;

		// Send email
		if(!$mail->send()){
			$this->session->set_flashdata("email_sent","Email gagal dikirim : ".$mail->ErrorInfo);
			redirect("tracer_study/registrasi");
		}else{
			//$this->session->set_flashdata("email_sent","Email berhasil dikirim. Masuk ke email untuk melihat kode aktivasi anda");
			redirect("tracer_study/aktivasi");
		}

	}
	public function aktivasi()
	{
		$this->load->view("tracer_study/registrasi/aktivasi");
	}
}