<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tracer_study extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		//$this->load->model(array('model_dosen', 'model_main'));
		date_default_timezone_set("Asia/Makassar");
	}
	function _init()
	{
		$this->output->set_template('index');
    }
    public function registrasi()
    {
        $this->load->view("tracer_study/registrasi/index");
    }
}