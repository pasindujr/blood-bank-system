<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validate_Donors extends CI_Controller {

    public function register() {
        $this->form_validation->set_rules('donorname', 'Donor Name', 'required');
        $this->form_validation->set_rules('donornic', 'Donor NIC', 'required|is_unique[donors.donorNIC]');
        $this->form_validation->set_rules('donordob', 'Donor DOB', 'required');
        $this->form_validation->set_rules('donorweight', 'Donor Weight', 'required');
        $this->form_validation->set_rules('donormobile', 'Donor Mobile', 'required');

        if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('register_donors.php');
                }
                else
                {
                        $this->load->model('Donor');
                        $response = $this->Donor->registerUser();

                        if($response) {
                                $this->session->set_flashdata('msg','Donor Registered Successfully');
                                redirect('Staff/registerDonor');
                        } else {
                                $this->session->set_flashdata('msg','Something went wrong');
                                redirect('Staff/registerDonor');
                        }

                        die();
                }
    }

}