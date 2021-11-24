<?php

class Login_Model extends CI_Model {

    function loginAdmin() {

        $adminUserName = $this->input->post('adminusername');
        $adminPassword = $this->input->post('adminpassowrd');

        $this->db->where('AdminUserName', $adminUserName);
        $this->db->where('AdminPassword', $adminPassword);
        $response = $this->db->get('admins');

        if($response->num_rows() == 0) {
            print_r($response);
            die();
        } else {
            echo "Something went wrong";
            die();
        }
        
    }
}