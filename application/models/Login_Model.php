<?php

class Login_Model extends CI_Model {

    function loginAdmin() {

        $adminUserName = $this->input->post('adminusername');
        $adminPassword = $this->input->post('adminpassword');

        $this->db->where('AdminUserName', $adminUserName);
        $this->db->where('AdminPassword', $adminPassword);
        $response = $this->db->get('admins');

        if($response->num_rows() == 1) {
            return $response->row(0);

        } else {
            
            return false;
        }
        
    }

    function loginStaff() {
        $staffUserName = $this->input->post('staffusername');
        $staffPassword = sha1($this->input->post('staffpassword'));

        $this->db->where('StaffUserName', $staffUserName);
        $this->db->where('StaffPassword', $staffPassword);
        $response = $this->db->get('staff');

        if($response->num_rows() == 1) {
            return $response->row(0);

        } else {
            
            return false;
        }
    }
}