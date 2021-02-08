<?php
$this->load->view('home/_partial/header');
$this->load->view('home/_partial/sidebar');
$this->load->view('home/_partial/top');
$this->load->get_section('sidebar');
$this->load->get_section('theme-switcher');
echo $output;
$this->load->view('home/_partial/footer');
?>