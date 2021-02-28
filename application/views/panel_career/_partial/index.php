<?php
$this->load->view('panel_career/_partial/header');
$this->load->view('panel_career/_partial/sidebar');
$this->load->view('panel_career/_partial/top');
$this->load->get_section('sidebar');
$this->load->get_section('theme-switcher');
echo $output;
$this->load->view('panel_career/_partial/footer');
?>