<?php 
class Pages extends CI_Controller {

	public function index() 
	{
		$this->load->view('templates/header');
		$this->load->view('templates/banner');
		$this->load->view('templates/details');
		$this->load->view('templates/footer');
	}
} 
?>