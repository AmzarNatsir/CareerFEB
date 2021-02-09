<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

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
    
	public function index()
	{
        $this->_init();
		$this->load->view('home/profil');
	}

    public function visi_misi()
    {
        $this->_init();
		$this->load->view('home/visi_misi');
    }
    public function struktur()
    {
        $this->_init();
		$this->load->view('home/struktur');
    }
}
