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
        $this->form_validation->set_rules('donormobile', 'Donor Mobile', 'required|min_length[9]|max_length[9]');

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

    public function donate($donor)
    {
        $this->load->model('Donor_Model');
        $data['donor'] = $this->Donor_Model->donate($donor);
        $this->load->view('packetregister', $data);
    }

    public function savePacket($packet)
    {
        $donatedDate = $this->input->post('packetdonateddate');
        $expiringDate = date('Y-m-d', strtotime($donatedDate . ' + 42 days'));

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
            redirect(base_url('index.php/staff/donate/') . $packet);
        } else {
            $this->donate($packet);
        }
    }

    public function viewPackets()
    {

        $this->load->Model('Donor_Model');
        $data['packets'] = $this->Donor_Model->viewPackets();
        $this->load->view('viewpackets', $data);
    }

    public function markAsUsed($packet)
    {

        try {

            $packetData = $this->db->get_where('packets', array('PacketID' => $packet));

            foreach ($packetData->result() as $row) {
                $donorID = $row->DonorID;
                $packetDonatedDate = $row->DonatedDate;
            }

            $donorData = $this->db->get_where('donors', array('DonorID' => $donorID));

            foreach ($donorData->result() as $row) {
                $donarName = $row->DonorName;
                $donorMobile = $row->DonorMobile;
            }

            $sid = '';
            $token = '';
            $donorMobile = '+94' . $donorMobile;
            $twilioNumber = '';

            $client = new Twilio\Rest\Client($sid, $token);
            $message = $client->messages->create(
                $donorMobile, array(
                    'from' => $twilioNumber,
                    'body' => 'Thank you ' . $donarName . ' for your blood donation. Your donation which donated in ' . $packetDonatedDate . ', has just saved a life.'
                )
            );

            if ($message->sid) {
                $this->load->Model('Donor_Model');
                $this->Donor_Model->changeStatus($packet);
                redirect('staff/viewpackets');
            }
        } catch (Exception $e) {
            redirect('staff/viewpackets');
            $this->session->set_flashdata('donationerror', 'Something went wrong!');
        }
    }

    public function getAccount($staff)
    {
        $this->load->model('Staff_Model');
        $data['staff'] = $this->Staff_Model->getStaff($staff);
        $this->load->view('editstaffaccount', $data);
    }

    public function updateAccount($staff)
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
            redirect(base_url('index.php/staff/getaccount/' . $staff));
        } else {
            $this->getAccount($staff);
        }

    }


}