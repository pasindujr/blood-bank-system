<?php

class Insight_Model extends CI_Model
{
    function donorCount()
    {
        return $this->db->count_all('donors');
    }

    function packetCount()
    {
        $this->db->select('PacketID');
        $this->db->from('packets');
        $this->db->where('isAvailable = 1');
        return $this->db->count_all_results();
    }
}