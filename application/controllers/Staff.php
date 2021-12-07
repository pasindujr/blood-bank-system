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
        $this->session->unset_userdata('isStaffLoggedIn');
        redirect('home/login');
        $this->session->unset_flashdata('errorstaff');

    }

    public function viewDonors()
    {

        $this->load->Model('Donor_Model');
        $data['donors'] = $this->Donor_Model->viewDonors();
        $this->load->view('viewdonors', $data);
    }

    public function editDonors($donor)
    {
        $this->load->model('Donor_Model');
        $data['donor'] = $this->Donor_Model->editDonors($donor);
        $this->load->view('editdonors', $data);
    }

    public function updateDonor($donor)
    {

        $birthDate = $this->input->post('donordob');
        $currentDate = date("Y-m-d");
        $age = date_diff(date_create($birthDate), date_create($currentDate));

        $this->form_validation->set_rules('donorname', 'Donor Name', 'required');
        $this->form_validation->set_rules('donornic', 'Donor NIC', 'required');
        $this->form_validation->set_rules('donordob', 'Donor DOB', 'required');
        $this->form_validation->set_rules('donorweight', 'Donor Weight', 'required');
        $this->form_validation->set_rules('donormobile', 'Donor Mobile', 'required');

        if ($this->form_validation->run()) {
            $data = [
                'DonorName' => $this->input->post('donorname'),
                'DonorNIC' => $this->input->post('donornic'),
                'DonorDOB' => $this->input->post('donordob'),
                'DonorAge' => $age->format("%y"),
                'DonorWeight' => $this->input->post('donorweight'),
                'DonorMobile' => $this->input->post('donormobile'),
            ];
            $this->load->model('Donor_Model');
            $data['donor'] = $this->Donor_Model->updateDonor($data, $donor);
            $this->session->set_flashdata('donorupdated', 'Donor detailed updated successfully!');
            redirect(base_url('index.php/staff/viewdonors'));
        } else {
            $this->editDonors($donor);
        }


    }

    public function donate($donor) {
        $this->load->model('Donor_Model');
        $data['donor'] = $this->Donor_Model->donate($donor);
        $this->load->view('packetregister', $data);
    }

    public function savePacket($packet) {
        $donatedDate = $this->input->post('packetdonateddate');
        $expiringDate = date('Y-m-d', strtotime($donatedDate. ' + 42 days'));

        $this->form_validation->set_rules('packetdonateddate', 'Donated Date', 'required');

        if ($this->form_validation->run()) {
            $data = [
                'DonorID' => $this->input->post('donorid'),
                'DonatedDate' => $this->input->post('packetdonateddate'),
                'ExpiringDate' => $expiringDate,
                'BloodType' => $this->input->post('bloodtype'),
                'isAvailable' => True,
                'comments' => $this->input->post('comments'),
            ];
            $this->load->model('Donor_Model');
            $data['donor'] = $this->Donor_Model->savePacket($data);
            $this->session->set_flashdata('packetsaved', 'Donation successful!');
            redirect(base_url('index.php/staff/donate/'). $packet);
        } else {
            $this->donate($packet);
        }
    }
}