<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_security extends CI_Model 
{
    
    function get_security_tracer_cc()
    {
        $key_tracer = $this->session->userdata("idalumnicc");
        if(empty($key_tracer))
        {
            $this->session->sess_destroy();
            redirect("tracer_study/login");
        }
    }	
}