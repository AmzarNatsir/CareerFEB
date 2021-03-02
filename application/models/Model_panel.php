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
}