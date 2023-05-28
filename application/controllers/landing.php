<?php

/**
 * 
 */
class Landing extends CI_Controller
{
	
	public function index()
	{

			$this->load->view('templates/header');
			$this->load->view('landing');
			$this->load->view('templates/footer');
	}
}