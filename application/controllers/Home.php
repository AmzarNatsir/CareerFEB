<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model(array('model_dashboard'));
		date_default_timezone_set("Asia/Makassar");
	}
	function _init()
	{
		$this->output->set_template('index');
    }
    
	public function index()
	{
        $this->_init();
		$data['all_kegiatan'] =$this->model_dashboard->get_kegiatan_home();
		$data['all_loker'] = $this->model_dashboard->get_loker_home();
		$this->load->view('home/index', $data);
	}
	public function hasil_tracer_study()
	{
		$this->_init();
		$data['resp_1'] = $this->model_dashboard->get_responden_per_prodi(1);
		$data['resp_2'] = $this->model_dashboard->get_responden_per_prodi(2);
		$data['resp_3'] = $this->model_dashboard->get_responden_per_prodi(3);
		$data['resp_4'] = $this->model_dashboard->get_responden_per_prodi(4);
		$data['resp_5'] = $this->model_dashboard->get_responden_per_prodi(5);
		$this->load->view('home/hasil_tracer/index', $data);
	}
}
