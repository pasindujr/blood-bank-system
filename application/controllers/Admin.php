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

    public function editStaff($staff)
    {
        $this->load->model('Staff_Model');
        $data['staff'] = $this->Staff_Model->editStaff($staff);
        $this->load->view('editstaff', $data);
    }

    public function updateStaff($staff)
    {

        $this->form_validation->set_rules('staffname', 'Staff Name', 'required');
        $this->form_validation->set_rules('staffusername', 'Staff Username');
        $this->form_validation->set_rules('staffdesignation', 'Staff Designation', 'required');
        $this->form_validation->set_rules('staffnic', 'NIC', 'required');

        if ($this->form_validation->run()) {
            $data = [

                'StaffName' => $this->input->post('staffname'),
                'StaffUserName' => $this->input->post('staffusername'),
                'StaffDesignation' => $this->input->post('staffdesignation'),
                'StaffNIC' => $this->input->post('staffnic'),

            ];
            $this->load->Model('Staff_Model');
            $data['staff'] = $this->Staff_Model->updateStaff($data, $staff);
            $this->session->set_flashdata('staffupdated', 'Staff detailed updated successfully!');
            redirect(base_url('index.php/admin/viewstaff'));
        } else {
            $this->editStaff($staff);
        }

    }

    public function adminLogout()
    {
        $this->session->unset_userdata('adminUserName');
        $this->session->unset_userdata('isLoggedIn');
        redirect('admin/index');
        $this->session->unset_flashdata('erroradmin');

    }
}