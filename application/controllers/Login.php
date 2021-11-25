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

        public function staffLogin() {

                $this->form_validation->set_rules('staffusername', 'Staff Username', 'required');
                $this->form_validation->set_rules('staffpassword', 'Staff Password', 'required');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('stafflogin.php');
                }
                else
                {
                        $this->load->model('Login_Model');
                        $response = $this->Login_Model->loginStaff();

                        if($response != false) {

                                $staffData = array (
                                        'staffUserName' => $response->StaffUserName,
                                        'isLoggedIn' => True
                                );
                                
                                $this->session->set_userdata($staffData);
                                redirect('staff/registerDonor');

                        } else {
                                $this->session->set_flashdata('errorstaff','<div class="alert alert-danger" role="alert">
                                Wrong Credentials!
                              </div>');
                                redirect('home/login');
                        }
                        
                }
        }
    
}