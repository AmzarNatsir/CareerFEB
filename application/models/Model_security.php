<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_security extends CI_Model 
{
    
    function get_security_reg_cc()
    {
        $key_cc = $this->session->userdata("cc_id_sess");
        if(empty($key_cc))
        {
            $this->session->sess_destroy();
            redirect("tracer_study/registrasi");
        }
    }	
}