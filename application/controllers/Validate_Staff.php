<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validate_Staff extends CI_Controller {

    public function register() {
        $this->form_validation->set_rules('staffname', 'Staff Name', 'required');
        $this->form_validation->set_rules('staffusername', 'Staff Username', 'required|is_unique[staff.StaffUserName]');
        $this->form_validation->set_rules('staffpassword', 'Password', 'required');
        $this->form_validation->set_rules('staffdesignation', 'Staff Designation', 'required');
        $this->form_validation->set_rules('staffnic', 'NIC', 'required');

        if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('staffregister.php');
                }
                else
                {
                        $this->load->model('Staff_Model');
                        $response = $this->Staff_Model->registerStaff();

                        if($response) {
                                $this->session->set_flashdata('stafferror','<div class="alert alert-success" role="alert">
                                Staff Registered Successfully!
                              </div>');
                                redirect('admin/home');
                        } else {
                                $this->session->set_flashdata('stafferror','<div class="alert alert-danger" role="alert">
                                Something went wrong.
                              </div>');
                                redirect('admin/home');
                        }

                        die();
                }
    }

}