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
                        $response = $this->Login_Model->loginAdmin();

                        if($response != false) {

                                $adminData = array (
                                        'adminUserName' => $response->AdminUserName,
                                        'isLoggedIn' => True
                                );
                                
                                $this->session->set_userdata($adminData);
                                redirect('Admin/home');

                        } else {
                                $this->session->set_flashdata('erroradmin','Wrong Credentials');
                                redirect('Admin/index');
                        }
                        
                }

	}

    
}