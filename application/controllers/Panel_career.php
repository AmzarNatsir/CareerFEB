<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;

class Panel_career extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model(array('model_security', 'model_tracer', 'model_panel'));
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
    //manajemen kegiatan
    public function manaj_kegiatan()
    {
        $this->model_security->get_security_panel_cc();
        $this->_init();
        $id_user = $this->session->userdata("idalumni");
        $data['kegiatan_bulan_ini'] = $this->model_panel->get_kegiatan_bulan_ini($id_user);
        $this->load->view("panel_career/kegiatan/index", $data);
    }
    public function manaj_kegiatan_baru()
    {
        $this->model_security->get_security_panel_cc();
        $this->_init();
        $data['kategori_kegiatan'] = $this->model_panel->get_kategori_kegiatan();
        $this->load->view("panel_career/kegiatan/add", $data);
    }
    public function manaj_kegiatan_simpan()
    {
        $this->model_security->get_security_panel_cc();
        $ada_file = $this->input->post("upload_gambar");
        $id_user = $this->session->userdata("idalumni");
        $data['id_user'] = $id_user;
        $data['id_kategori'] = $this->input->post("pil_kategori");
        $data['judul_kegiatan'] = trim($this->input->post("inp_nama"));
        $data['deskripsi'] = trim($this->input->post("inp_deskripsi"));
        $data['ada_file'] = $ada_file;
        if($ada_file==1){
            if(!empty($_FILES["inp_gambar"]["name"]))
            {
                $nm_fl = time().date('dmY');
                $fl = $this->upload_gambar($nm_fl, "inp_gambar", "kegiatan");
                if ($fl != false) 
                {
                    $smp_file = $fl;
                    $data['file_gambar'] = $smp_file;
                }
            }
        }
        $data['tgl_posting'] = date("Y-m-d");
        $data['tampilkan'] = 1; //informasi ditampilkan
        $data['pengunjung'] = 0;
        $this->model_panel->insert_data_kegiatan($data);
        $this->session->set_flashdata("konfirm", "Data berhasil disimpan");
        redirect("panel_career/manaj_kegiatan_baru");
    }
    private function upload_gambar($nm_file, $inp_nama, $folder)
	{
		$config['upload_path'] = 'assets/upload/'.$folder.'/';
		$config['allowed_types'] = 'jpg|jpeg|jpg|png';
		$config['file_name'] = $nm_file;
		$config['remove_spaces'] = TRUE;
        $config['overwrite'] = TRUE;
	    $filename = $config['file_name'];

		$this->load->library('upload');
	    $this->upload->initialize($config);

	    if ( ! $this->upload->do_upload($inp_nama))
	    {
	        $error = array('error' => $this->upload->display_errors());
	        //print_r($error);
	        return false;
	    }
	    else
	    {
	        $data = array('upload_data' => $this->upload->data());
	       	return $filename.$data['upload_data']['file_ext'];
	    }
	}
    public function logout()
    {
        $this->session->sess_destroy();
		redirect("");
    }
}