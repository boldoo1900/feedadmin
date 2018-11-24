<?php

class Stoptimes_model extends CI_Model {
    
    public function getStoptimesList() {
        $result = $this->db->query('select a.*, b.trip_headsign, c.stop_name
                                        from stop_times a 
                                    inner join trips b on b.trip_id = a.trip_id
                                    inner join stops c on c.stop_id = a.stop_id')->result_array();
        return $result;
    }

    public function getStoptimesRow($id){
        $result = $this->db->query('select * from stop_times where stoptime_id =? limit 1', array($id))->row_array();
        return $result;
    }
    
    public function updateStoptimes($data, $id){
        $this->db->where("stoptime_id", $id);
        $result = $this->db->update("stop_times", $data);
        
        return $result;
    }
    
    public function insertStoptimes($data){
        $this->db->set($data);
        $result = $this->db->insert("stop_times");
        
        return $result;
    }
}
