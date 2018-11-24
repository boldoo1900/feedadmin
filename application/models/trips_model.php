<?php

class Trips_model extends CI_Model {
    
    public function getTripsList() {
        $result = $this->db->query('select a.*, b.route_short_name from trips a inner join routes b on b.route_id = a.route_id ')->result_array();
        return $result;
    }

    public function getTripsRow($id){
        $result = $this->db->query('select * from trips where trip_id =? limit 1', array($id))->row_array();
        return $result;
    }
    
    public function getTripscmb(){
        $result = $this->db->query('select * from trips')->result_array();
        return $result;
    }
    
    public function updateTrips($data, $id){
        $this->db->where("trip_id", $id);
        $result = $this->db->update("trips", $data);
        
        return $result;
    }
    
    public function insertTrips($data){
        $this->db->set($data);
        $result = $this->db->insert("trips");
        
        return $result;
    }
}
