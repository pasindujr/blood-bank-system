<?php

class Insight extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('url', 'html', 'form'));
    }

    public function insddex()
    {
        $this->load->view('insight');
    }

    public function index()
    {
        $this->load->Model('Insight_Model');
        $data['donorcount'] = $this->Insight_Model->donorCount();

        $this->load->Model('Insight_Model');
        $data['packetcount'] = $this->Insight_Model->packetCount();

        $this->load->view('insight', $data);
    }


    public function bloodTypesChart()
    {

    }
}