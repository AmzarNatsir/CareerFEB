<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_tracer extends CI_Model {
	
	public function __construct(){
		$this->load->database();		
    }

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