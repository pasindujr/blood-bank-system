<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function adminLogin() {

		$this->form_validation->set_rules('adminusername', 'Admin Username', 'required');
        $this->form_validation->set_rules('adminpassword', 'Admin Password', 'required');

        if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('adminlogin.php');
                }
                else
                {
                        $this->load->model('Login_Model');
                        $this->Login_Model->loginAdmin();
                        
                }

	}

    
}