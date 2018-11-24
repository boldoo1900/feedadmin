<?php

class Stops_model extends CI_Model {
    
    public function getStopsList() {
        $result = $this->db->query('select * from stops')->result_array();
        return $result;
    }

    public function getStopsRow($id){
        $result = $this->db->query('select * from stops where stop_id =? limit 1', array($id))->row_array();
        return $result;
    }
    
    public function getStopscmb() {
        $result = $this->db->query('select * from stops')->result_array();
        return $result;
    }
    
    public function updateStops($data, $id){
        $this->db->where("stop_id", $id);
        $result = $this->db->update("stops", $data);
        
        return $result;
    }
    
    public function insertStops($data){
        $this->db->set($data);
        $result = $this->db->insert("stops");
        
        return $result;
    }
}
