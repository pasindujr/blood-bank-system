<?php

class Staff_Model extends CI_Model
{

    function registerStaff()
    {

        $data = array(

            'StaffName' => $this->input->post('staffname'),
            'StaffUserName' => $this->input->post('staffusername'),
            'StaffPassword' => sha1($this->input->post('staffpassword')),
            'StaffDesignation' => $this->input->post('staffdesignation'),
            'StaffNIC' => $this->input->post('staffnic'),

        );

        return $this->db->insert('staff', $data);
        die();
    }

    function viewStaff()
    {
        return $this->db->get('staff');
    }

    function editStaff($staff)
    {
        $query = $this->db->get_where('staff', array('StaffUserName' => $staff));
        return $query->row();
    }

    function updateStaff($data, $staff)
    {
        return $this->db->update('staff', $data, ['StaffUserName' => $staff]);
    }
}