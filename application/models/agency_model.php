<?php

class Agency_model extends CI_Model {
    
    public function getAgencyList() {
        $result = $this->db->query('select * from agency')->result_array();
        return $result;
    }

    public function getAgencyRow($id){
        $result = $this->db->query('select * from agency where agency_id =? limit 1', array($id))->row_array();
        return $result;
    }
    
    public function updateAgency($data, $id){
        $this->db->where("agency_id", $id);
        $result = $this->db->update("agency", $data);
        
        return $result;
    }
    
    public function insertAgency($data){
        $this->db->set($data);
        $result = $this->db->insert("agency");
        
        return $result;
    }
}
