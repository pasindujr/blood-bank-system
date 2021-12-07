<?php

class Donor_Model extends CI_Model
{

    function registerDonor()
    {
        $birthDate = $this->input->post('donordob');
        $currentDate = date("Y-m-d");
        $age = date_diff(date_create($birthDate), date_create($currentDate));

        $data = array(

            'DonorName' => $this->input->post('donorname'),
            'DonorGender' => $this->input->post('donorgender'),
            'DonorNIC' => $this->input->post('donornic'),
            'DonorDOB' => $this->input->post('donordob'),
            'DonorAge' => $age->format("%y"),
            'DonorWeight' => $this->input->post('donorweight'),
            'DonorMobile' => $this->input->post('donormobile'),
            'DonorBloodType' => $this->input->post('bloodtypes'),

        );

        return $this->db->insert('donors', $data);
        die();
    }

    function viewDonors()
    {
        return $this->db->get('donors');
    }

    function editDonors($donor)
    {
        $query = $this->db->get_where('donors', array('DonorNIC' => $donor));
        return $query->row();
    }

    function updateDonor($data, $donor)
    {
        return $this->db->update('donors', $data, ['DonorNIC' => $donor]);
    }

    function donate($donor) {
        $query = $this->db->get_where('donors', array('DonorID' => $donor));
        return $query->row();
    }

    function savePacket($data)
    {
        return $this->db->insert('packets', $data);
    }
}