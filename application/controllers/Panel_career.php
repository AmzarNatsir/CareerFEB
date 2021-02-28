<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;

class Panel_career extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model(array('model_security', 'model_tracer'));
		date_default_timezone_set("Asia/Makassar");
	}
	function _init()
	{
		$this->output->set_template_panel('index');
    }
    public function index()
    {
        $this->load->view("panel_career/login");
    }
    public function proses_login()
	{
		$usr = $this->input->post("alumniemail");
		$psw = MD5(trim($this->input->post("inppassword")));
		$this->db->where("email", $usr);
		$this->db->where("passwd", $psw);
		$this->db->where("status_akun", 1);
		$this->db->where('tracer', 1);
		$result = $this->db->get('cc_alumni')->row();
        if(!empty($result->id))
        {
            $sess = array(
                "idalumni"=>$result->id,
                "nmalumni"=>$result->nama_lengkap,
                "nimalumni"=>$result->nim,
				"emailalumni"=>$result->email,
				"prodialumni"=>$result->id_prodi
            );
            $this->session->set_userdata($sess);
            redirect("panel_career/home");
        }
        else{
            $this->session->set_flashdata("konfirm_login", "Maaf, Nama Email atau Password yang anda masukkan salah. Atau anda belum berpartisipasi mengisi quisioner. Atau belum melakukan registrasi");
            redirect("panel_career");
        }
	}
    public function home()
    {
        $this->model_security->get_security_panel_cc();
        $this->_init();
        $this->load->view("panel_career/index");
    }

    public function logout()
    {
        $this->session->sess_destroy();
		redirect("");
    }
}