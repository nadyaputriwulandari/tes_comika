<?php

/**
 * 
 */
class Kelas extends CI_Controller
{
	
	public function index()
	{

			$this->load->view('templates/header');
			$this->load->view('kelas');
			$this->load->view('templates/footer');
	}
}