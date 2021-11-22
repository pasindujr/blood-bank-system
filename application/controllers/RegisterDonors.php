<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterDonors extends CI_Controller {
	public function index()
	{
		$this->load->view('register_donors');
	}
}