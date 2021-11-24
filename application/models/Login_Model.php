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
}