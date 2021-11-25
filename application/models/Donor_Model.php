<?php

class Donor_Model extends CI_Model {

    function registerDonor() {

        $data = array(

            'DonorName' => $this->input->post('donorname'),
            'DonorGender' => $this->input->post('donorgender'),
            'DonorNIC' => $this->input->post('donornic'),
            'DonorDOB' => $this->input->post('donordob'),
            'DonorWeight' => $this->input->post('donorweight'),
            'DonorMobile' => $this->input->post('donormobile'),
            'DonorBloodType' => $this->input->post('bloodtypes'),

        );

        return $this->db->insert('donors', $data);
        die();
    }
}