<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {
	public function login()
	{
		$this->load->view('stafflogin');
	}

	public function registerDonor() 
	{
		$this->load->view('register_donors');
	}
}