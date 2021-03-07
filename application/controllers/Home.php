<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model(array('model_panel'));
		date_default_timezone_set("Asia/Makassar");
	}
	function _init()
	{
		$this->output->set_template('index');
    }
    
	public function index()
	{
        $this->_init();
		$data['all_kegiatan'] =$this->model_panel->get_kegiatan_home();
		$data['all_loker'] = $this->model_panel->get_loker_home();
		$this->load->view('home/index', $data);
	}
}
