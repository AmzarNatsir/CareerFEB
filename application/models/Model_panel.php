<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_panel extends CI_Model {
	
	public function __construct(){
		$this->load->database();		
    }
    //get master data
    function get_kategori_kegiatan()
    {
        return $this->db->get("cc_mst_kategori_kegiatan")->result_array();
    }
    function get_kategori_informasi()
    {
        return $this->db->get("cc_mst_kategori_informasi")->result_array();
    }
    function get_kategori_loker()
    {
        return $this->db->get("cc_mst_kategori_job")->result_array();
    }
    //profil user
    function get_profil_user($id)
    {
        $this->db->select("a.*, b.nama_provinsi, c.nama_kabupaten, d.nama_kecamatan, e.nama_kelurahan, 
        (select mst_provinsi.nama_provinsi from mst_provinsi where a.id_prov_instansi=mst_provinsi.id) as provinsi_instansi, 
        (select mst_kabupaten.nama_kabupaten from mst_kabupaten where a.id_kab_instansi=mst_kabupaten.id) as kabupaten_instansi, 
        (select mst_kecamatan.nama_kecamatan from mst_kecamatan where a.id_kec_instansi=mst_kecamatan.id) as kecamatan_instansi,
        (select mst_kelurahan.nama_kelurahan from mst_kelurahan where a.id_kel_instansi=mst_kelurahan.id) as kelurahan_instansi
        ")
                ->from("cc_alumni a")
                ->from("mst_provinsi b")
                ->from("mst_kabupaten c")
                ->from("mst_kecamatan d")
                ->from("mst_kelurahan e")
                ->where("a.id_prov_domisili=b.id")
                ->where("a.id_kab_domisi=c.id")
                ->where("a.id_kec_domisili=d.id")
                ->where("a.id_kel_domisili=e.id");
        return $this->db->where("a.id", $id)->get("cc_alumni")->row();
    }
    public function update_data_profil($id, $data)
    {
        $this->db->where("id", $id)->update("cc_alumni", $data);
    }
    function remove_photo_profil($id)
    {
        $this->db->select("foto");
        $this->db->from("cc_alumni");
        $this->db->where('id', $id);
        $res = $this->db->get();
        $img = $res->row();
        if(!empty($img->foto))
        {
            unlink(FCPATH.'assets/upload/profil/'.$img->foto);
        }
    }
    //kegiatan
    function insert_data_kegiatan($data)
    {
        $this->db->insert("cc_kegiatan", $data);
    }
    function update_data_kegiatan($id, $data)
    {
        $this->db->where("id", $id)->update("cc_kegiatan", $data);
    }
    function delete_data_kegiatan($id)
    {
        $this->db->where("id", $id)->delete("cc_kegiatan");
    }
    function get_kegiatan_all($id_user)
    {
        return $this->db->select("a.*, b.nama_kategori")
                ->from("cc_kegiatan a")
                ->from("cc_mst_kategori_kegiatan b")
                ->where("a.id_kategori=b.id")
                ->where("a.id_user", $id_user)
                ->order_by("a.tgl_posting", "desc")->get()->result_array();
        
    }
    function get_kegiatan_home()
    {
        return $this->db->select("a.*, b.nama_kategori, c.nama_lengkap")
            ->from("cc_kegiatan a")
            ->from("cc_mst_kategori_kegiatan b")
            ->from("cc_alumni c")
            ->where("a.id_kategori=b.id")
            ->where("a.id_kategori=b.id")
            ->where("a.id_user=c.id")
            ->where("a.tampilkan", 1)
            ->order_by("a.tgl_posting", "desc")->get()->result_array();
    }
    function get_profil_kegiatan($id)
    {
        return $this->db->where("id", $id)->get("cc_kegiatan")->row();
    }
    function remove_gambar_kegiatan($id)
    {
        $this->db->select("file_gambar");
        $this->db->from("cc_kegiatan");
        $this->db->where('id', $id);
        $res = $this->db->get();
        $img = $res->row();
        if(!empty($img->file_gambar))
        {
            unlink(FCPATH.'assets/upload/kegiatan/'.$img->file_gambar);
        }
    }
    //loker
    function insert_data_loker($data)
    {
        $this->db->insert("cc_loker", $data);
    }
    function update_data_loker($id, $data)
    {
        $this->db->where("id", $id)->update("cc_loker", $data);
    }
    function delete_data_loker($id)
    {
        $this->db->where("id", $id)->delete("cc_loker");
    }
    function get_loker_all($id_user)
    {
        return $this->db->select("a.*, b.nama_kategori, c.nama_provinsi, d.nama_kabupaten")
                ->from("cc_loker a")
                ->from("cc_mst_kategori_job b")
                ->from("mst_provinsi c")
                ->from("mst_kabupaten d")
                ->where("a.id_kategori=b.id")
                ->where("a.id_provinsi=c.id")
                ->where("a.id_kabupaten=d.id")
                ->where("a.id_user", $id_user)
                ->order_by("a.tgl_posting", "desc")->get()->result_array();
        
    }
    function get_loker_home()
    {
        return $this->db->select("a.*, b.nama_kategori, c.nama_provinsi, d.nama_kabupaten")
                ->from("cc_loker a")
                ->from("cc_mst_kategori_job b")
                ->from("mst_provinsi c")
                ->from("mst_kabupaten d")
                ->where("a.id_kategori=b.id")
                ->where("a.id_provinsi=c.id")
                ->where("a.id_kabupaten=d.id")
                ->where("a.tampilkan", 1)
                ->order_by("a.tgl_posting", "desc")->get()->result_array();
        
    }
    function get_profil_loker($id)
    {
        return $this->db->where("id", $id)->get("cc_loker")->row();
    }
    function remove_gambar_loker($id)
    {
        $this->db->select("file_lampiran");
        $this->db->from("cc_loker");
        $this->db->where('id', $id);
        $res = $this->db->get();
        $img = $res->row();
        if(!empty($img->file_lampiran))
        {
            unlink(FCPATH.'assets/upload/loker/'.$img->file_lampiran);
        }
    }
}