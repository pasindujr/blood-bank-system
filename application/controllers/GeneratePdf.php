<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GeneratePdf extends CI_Controller
{

    function index()
    {

        $this->load->Model('Insight_Model');
        $data['donorcount'] = $this->Insight_Model->donorCount();
        $data['packetcount'] = $this->Insight_Model->packetCount();
        $data['packetChartData'] = $this->bloodTypesChart();
        $data['genderChartData'] = $this->genderCountsChart();
        $this->load->view('insight', $data);

        $this->load->library('pdf');
        $html = $this->load->view('insightpdf', [], true);
        $this->pdf->createPDF($html, 'insightpdf', false);
    }

    public function bloodTypesChart()
    {
        $query = " SELECT BloodType as blood_type, COUNT(PacketID) as packetcount FROM packets WHERE isAvailable = 1 GROUP BY blood_type";

        $packetChartData = [];
        $blood_types = $this->db->query($query)->result_array();

        foreach ($blood_types as $row) {
            $packetChartData['packetLabel'][] = $row['blood_type'];
            $packetChartData['packetData'][] = $row['packetcount'];
        }
        return $packetChartData;
    }

    public function genderCountsChart()
    {
        $query = " SELECT DonorGender as donor_gender, COUNT(DonorID) as donor_count FROM donors GROUP BY donor_gender";

        $genderChartData = [];
        $genderCount = $this->db->query($query)->result_array();

        foreach ($genderCount as $row) {
            $genderChartData['genderLabel'][] = $row['donor_gender'];
            $genderChartData['genderData'][] = $row['donor_count'];
        }
        return $genderChartData;

    }
}

?>