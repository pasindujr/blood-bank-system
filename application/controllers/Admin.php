<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $this->load->view('adminlogin');
    }

    public function home()
    {
        $this->load->view('staffregister');
    }

    public function viewStaff()
    {
        $this->load->Model('Staff_Model');
        $data['staff'] = $this->Staff_Model->viewStaff();
        $this->load->view('viewstaff', $data);
    }

    public function adminLogout()
    {
        $this->session->unset_userdata('adminUserName');
        $this->session->unset_userdata('isLoggedIn');
        redirect('admin/index');
        $this->session->unset_flashdata('erroradmin');

    }
}