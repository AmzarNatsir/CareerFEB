<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_tracer extends CI_Model {
	
	public function __construct(){
		$this->load->database();		
    }
    //get master data
    function get_provinsi()
    {
        return $this->db->get("mst_provinsi")->result_array();
    }
    function get_kabupaten($id_provinsi)
    {
        return $this->db->where("id_provinsi", $id_provinsi)->get("mst_kabupaten")->result_array();
    }
    function get_kecamatan($id_kabupaten)
    {
        return $this->db->where("id_kabupaten", $id_kabupaten)->get("mst_kecamatan")->result_array();
    }
    function get_kelurahan($id_kacamatan)
    {
        return $this->db->where("id_kecamatan", $id_kacamatan)->get("mst_kelurahan")->result_array();
    }
    //
    function insert_otp($data)
    {
        $this->db->insert("cc_alumni", $data);
        //return $this->db->insert_id();
    }
    function cek_akun($id)
    {
        return $this->db->where("nim", $id)->get("cc_alumni")->row();
    }
}