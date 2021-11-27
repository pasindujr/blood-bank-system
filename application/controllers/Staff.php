<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Staff extends CI_Controller
{


    public function registerDonor()
    {
        $this->load->view('register_donors');
    }

    public function staffLogout()
    {
        $this->session->unset_userdata('staffUserName');
        $this->session->unset_userdata('isLoggedIn');
        redirect('home/login');
        $this->session->unset_flashdata('errorstaff');

    }

    public function viewDonors()
    {

        $this->load->Model('Donor_Model');
        $data['donors'] = $this->Donor_Model->viewDonors();
        $this->load->view('viewdonors',$data);
    }
}