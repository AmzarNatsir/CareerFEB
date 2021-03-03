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
        $data['kegiatan_bulan_ini'] = $this->model_panel->get_kegiatan_all($id_user);
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
        $arr_tgl_1 = explode("-", $this->input->post('tgl_star'));
		$arr_tgl_2 = explode("-", $this->input->post('tgl_end'));
		$tgl_awal = $arr_tgl_1[2]."-".$arr_tgl_1[1]."-".$arr_tgl_1[0];
		$tgl_akhir = $arr_tgl_2[2]."-".$arr_tgl_2[1]."-".$arr_tgl_2[0];
        $data['id_user'] = $id_user;
        $data['id_kategori'] = $this->input->post("pil_kategori");
        $data['judul_kegiatan'] = trim($this->input->post("inp_nama"));
        $data['deskripsi'] = trim($this->input->post("inp_deskripsi"));
        $data['pelaksana'] = trim($this->input->post("inp_pelaksana"));
        $data['tgl_awal'] = $tgl_awal;
        $data['tgl_akhir'] = $tgl_akhir;
        $data['tempat'] = trim($this->input->post("inp_tempat"));
        $data['sumber_link'] = trim($this->input->post("inp_sumber"));
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
    public function manaj_kegiatan_edit()
    {
        $this->model_security->get_security_panel_cc();
        $id_tabel = encrypt_decrypt('decrypt', $this->uri->segment(3));
        $result = $this->model_panel->get_profil_kegiatan($id_tabel);
        if(empty($result->id))
        {
            redirect("panel_career/manaj_kegiatan");
        } else {
            $this->_init();
            $data['kategori_kegiatan'] = $this->model_panel->get_kategori_kegiatan();
            $data['res'] = $result;
            $this->load->view("panel_career/kegiatan/edit", $data);
        }
    } 
    public function manaj_kegiatan_rubah()
    {
        $this->model_security->get_security_panel_cc();
        $ada_file = $this->input->post("upload_gambar");
        $id_user = $this->session->userdata("idalumni");
        $id_tabel = $this->input->post("id_tabel");
        $arr_tgl_1 = explode("-", $this->input->post('tgl_star'));
		$arr_tgl_2 = explode("-", $this->input->post('tgl_end'));
		$tgl_awal = $arr_tgl_1[2]."-".$arr_tgl_1[1]."-".$arr_tgl_1[0];
		$tgl_akhir = $arr_tgl_2[2]."-".$arr_tgl_2[1]."-".$arr_tgl_2[0];
        if($ada_file==1) {
            if(!empty($_FILES["inp_gambar"]["name"]))
            {
                $nm_fl = time().date('dmY');
                $fl = $this->upload_gambar($nm_fl, "inp_gambar", "kegiatan");
                if ($fl != false) 
                {
                    $smp_file = $fl;
                    $data['file_gambar'] = $smp_file;
                    $data['id_kategori'] = $this->input->post("pil_kategori");
                    $data['judul_kegiatan'] = trim($this->input->post("inp_nama"));
                    $data['deskripsi'] = trim($this->input->post("inp_deskripsi"));
                    $data['pelaksana'] = trim($this->input->post("inp_pelaksana"));
                    $data['tgl_awal'] = $tgl_awal;
                    $data['tgl_akhir'] = $tgl_akhir;
                    $data['tempat'] = trim($this->input->post("inp_tempat"));
                    $data['sumber_link'] = trim($this->input->post("inp_sumber"));
                    $data['ada_file'] = $ada_file;
                    $data['tampilkan'] = $this->input->post("tampilkan_info");
                    $this->model_panel->remove_gambar_kegiatan($id_tabel);
                    $this->model_panel->update_data_kegiatan($id_tabel, $data);
                }
            } else {
                $data['id_kategori'] = $this->input->post("pil_kategori");
                $data['judul_kegiatan'] = trim($this->input->post("inp_nama"));
                $data['deskripsi'] = trim($this->input->post("inp_deskripsi"));
                $data['pelaksana'] = trim($this->input->post("inp_pelaksana"));
                $data['tgl_awal'] = $tgl_awal;
                $data['tgl_akhir'] = $tgl_akhir;
                $data['tempat'] = trim($this->input->post("inp_tempat"));
                $data['sumber_link'] = trim($this->input->post("inp_sumber"));
                $data['ada_file'] = $ada_file;
                $data['tampilkan'] = $this->input->post("tampilkan_info");
                $this->model_panel->update_data_kegiatan($id_tabel, $data);
            }
        } else {
            $data['id_kategori'] = $this->input->post("pil_kategori");
            $data['judul_kegiatan'] = trim($this->input->post("inp_nama"));
            $data['deskripsi'] = trim($this->input->post("inp_deskripsi"));
            $data['pelaksana'] = trim($this->input->post("inp_pelaksana"));
            $data['tgl_awal'] = $tgl_awal;
            $data['tgl_akhir'] = $tgl_akhir;
            $data['tempat'] = trim($this->input->post("inp_tempat"));
            $data['sumber_link'] = trim($this->input->post("inp_sumber"));
            $data['ada_file'] = $ada_file;
            $data['file_gambar'] = NULL;
            $data['tampilkan'] = $this->input->post("tampilkan_info");
            $this->model_panel->remove_gambar_kegiatan($id_tabel);
            $this->model_panel->update_data_kegiatan($id_tabel, $data);
        }
        $this->session->set_flashdata("konfirm", "Perubahan Data berhasil disimpan");
        redirect("panel_career/manaj_kegiatan");
    }
    public function manaj_kegiatan_hapus()
    {
        $this->model_security->get_security_panel_cc();
        $id_tabel = encrypt_decrypt('decrypt', $this->uri->segment(3));
        $this->model_panel->remove_gambar_kegiatan($id_tabel);
        $this->model_panel->delete_data_kegiatan($id_tabel);
        $this->session->set_flashdata("konfirm", "Data berhasil dihapus");
        redirect("panel_career/manaj_kegiatan");
    }
    //manajemen lowongan kerja
    public function manaj_loker()
    {
        $this->model_security->get_security_panel_cc();
        $this->_init();
        $id_user = $this->session->userdata("idalumni");
        $data['loker_list'] = $this->model_panel->get_loker_all($id_user);
        $this->load->view("panel_career/loker/index", $data);
    }
    public function manaj_loker_baru()
    {
        $this->model_security->get_security_panel_cc();
        $this->_init();
        $data['kategori_loker'] = $this->model_panel->get_kategori_loker();
        $data['provinsi'] = $this->model_tracer->get_provinsi();
        $this->load->view("panel_career/loker/add", $data);
    }
    public function manaj_loker_simpan()
    {
        $this->model_security->get_security_panel_cc();
        $ada_file = $this->input->post("upload_gambar");
        $id_user = $this->session->userdata("idalumni");
        $arr_tgl_1 = explode("-", $this->input->post('tgl_star'));
		$arr_tgl_2 = explode("-", $this->input->post('tgl_end'));
		$tgl_awal = $arr_tgl_1[2]."-".$arr_tgl_1[1]."-".$arr_tgl_1[0];
		$tgl_akhir = $arr_tgl_2[2]."-".$arr_tgl_2[1]."-".$arr_tgl_2[0];
        $data['id_user'] = $id_user;
        $data['id_kategori'] = $this->input->post("pil_kategori");
        $data['nama_perusahaan'] = trim($this->input->post("inp_nama_perusahaan"));
        $data['deskripsi'] = trim($this->input->post("inp_deskripsi"));
        $data['alamat'] = trim($this->input->post("inp_alamat_perusahaan"));
        $data['id_provinsi'] = trim($this->input->post("pil_provinsi"));
        $data['id_kabupaten'] = trim($this->input->post("pil_kabupaten"));
        $data['kontak_person'] = trim($this->input->post("inp_kontak_person"));
        $data['tgl_mulai'] = $tgl_awal;
        $data['tgl_akhir'] = $tgl_akhir;
        $data['sumber_link'] = trim($this->input->post("inp_sumber"));
        $data['ada_file'] = $ada_file;
        if($ada_file==1){
            if(!empty($_FILES["inp_gambar"]["name"]))
            {
                $nm_fl = time().date('dmY');
                $fl = $this->upload_gambar($nm_fl, "inp_gambar", "loker");
                if ($fl != false) 
                {
                    $smp_file = $fl;
                    $data['file_lampiran'] = $smp_file;
                }
            }
        }
        $data['tgl_posting'] = date("Y-m-d");
        $data['tampilkan'] = 1; //informasi ditampilkan
        $data['pengunjung'] = 0;
        $this->model_panel->insert_data_loker($data);
        $this->session->set_flashdata("konfirm", "Data berhasil disimpan");
        redirect("panel_career/manaj_loker_baru");
    }
    public function manaj_loker_edit()
    {
        $this->model_security->get_security_panel_cc();
        $id_tabel = encrypt_decrypt('decrypt', $this->uri->segment(3));
        $result = $this->model_panel->get_profil_loker($id_tabel);
        if(empty($result->id))
        {
            redirect("panel_career/manaj_loker");
        } else {
            $this->_init();
            $data['kategori_loker'] = $this->model_panel->get_kategori_loker();
            $data['provinsi'] = $this->model_tracer->get_provinsi();
            $data['kabupaten'] = $this->model_tracer->get_kabupaten($result->id_provinsi);
            $data['res'] = $result;
            $this->load->view("panel_career/loker/edit", $data);
        }
    } 
    public function manaj_loker_rubah()
    {
        $this->model_security->get_security_panel_cc();
        $ada_file = $this->input->post("upload_gambar");
        $id_user = $this->session->userdata("idalumni");
        $id_tabel = $this->input->post("id_tabel");
        $arr_tgl_1 = explode("-", $this->input->post('tgl_star'));
		$arr_tgl_2 = explode("-", $this->input->post('tgl_end'));
		$tgl_awal = $arr_tgl_1[2]."-".$arr_tgl_1[1]."-".$arr_tgl_1[0];
		$tgl_akhir = $arr_tgl_2[2]."-".$arr_tgl_2[1]."-".$arr_tgl_2[0];
        if($ada_file==1) {
            if(!empty($_FILES["inp_gambar"]["name"]))
            {
                $nm_fl = time().date('dmY');
                $fl = $this->upload_gambar($nm_fl, "inp_gambar", "loker");
                if ($fl != false) 
                {
                    $smp_file = $fl;
                    $data['file_lampiran'] = $smp_file;
                    $data['id_kategori'] = $this->input->post("pil_kategori");
                    $data['nama_perusahaan'] = trim($this->input->post("inp_nama_perusahaan"));
                    $data['deskripsi'] = trim($this->input->post("inp_deskripsi"));
                    $data['alamat'] = trim($this->input->post("inp_alamat_perusahaan"));
                    $data['id_provinsi'] = trim($this->input->post("pil_provinsi"));
                    $data['id_kabupaten'] = trim($this->input->post("pil_kabupaten"));
                    $data['kontak_person'] = trim($this->input->post("inp_kontak_person"));
                    $data['tgl_mulai'] = $tgl_awal;
                    $data['tgl_akhir'] = $tgl_akhir;
                    $data['sumber_link'] = trim($this->input->post("inp_sumber"));
                    $data['ada_file'] = $ada_file;
                    $data['tampilkan'] = $this->input->post("tampilkan_info");
                    $this->model_panel->remove_gambar_loker($id_tabel);
                    $this->model_panel->update_data_loker($id_tabel, $data);
                }
            } else {
                $data['id_kategori'] = $this->input->post("pil_kategori");
                $data['nama_perusahaan'] = trim($this->input->post("inp_nama_perusahaan"));
                $data['deskripsi'] = trim($this->input->post("inp_deskripsi"));
                $data['alamat'] = trim($this->input->post("inp_alamat_perusahaan"));
                $data['id_provinsi'] = trim($this->input->post("pil_provinsi"));
                $data['id_kabupaten'] = trim($this->input->post("pil_kabupaten"));
                $data['kontak_person'] = trim($this->input->post("inp_kontak_person"));
                $data['tgl_mulai'] = $tgl_awal;
                $data['tgl_akhir'] = $tgl_akhir;
                $data['sumber_link'] = trim($this->input->post("inp_sumber"));
                $data['ada_file'] = $ada_file;
                $data['tampilkan'] = $this->input->post("tampilkan_info");
                $this->model_panel->update_data_loker($id_tabel, $data);
            }
        } else {
            $data['id_kategori'] = $this->input->post("pil_kategori");
            $data['nama_perusahaan'] = trim($this->input->post("inp_nama_perusahaan"));
            $data['deskripsi'] = trim($this->input->post("inp_deskripsi"));
            $data['alamat'] = trim($this->input->post("inp_alamat_perusahaan"));
            $data['id_provinsi'] = trim($this->input->post("pil_provinsi"));
            $data['id_kabupaten'] = trim($this->input->post("pil_kabupaten"));
            $data['kontak_person'] = trim($this->input->post("inp_kontak_person"));
            $data['tgl_mulai'] = $tgl_awal;
            $data['tgl_akhir'] = $tgl_akhir;
            $data['sumber_link'] = trim($this->input->post("inp_sumber"));
            $data['ada_file'] = $ada_file;
            $data['file_lampiran'] = NULL;
            $data['tampilkan'] = $this->input->post("tampilkan_info");
            $this->model_panel->remove_gambar_loker($id_tabel);
            $this->model_panel->update_data_loker($id_tabel, $data);
        }
        $this->session->set_flashdata("konfirm", "Perubahan Data berhasil disimpan");
        redirect("panel_career/manaj_loker");
    }
    public function manaj_loker_hapus()
    {
        $this->model_security->get_security_panel_cc();
        $id_tabel = encrypt_decrypt('decrypt', $this->uri->segment(3));
        $this->model_panel->remove_gambar_loker($id_tabel);
        $this->model_panel->delete_data_loker($id_tabel);
        $this->session->set_flashdata("konfirm", "Data berhasil dihapus");
        redirect("panel_career/manaj_loker");
    }
    //upload file
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