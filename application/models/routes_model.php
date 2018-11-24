<?php

class Routes_model extends CI_Model {
    
    public function getRouteList() {
        $result = $this->db->query('select a.*, b.agency_name from routes a inner join agency b on a.agency_id = b.agency_id')->result_array();
        return $result;
    }

    public function getRouteRow($id){
        $result = $this->db->query('select * from routes where route_id =? limit 1', array($id))->row_array();
        return $result;
    }
    
    public function getRouteCmb(){
        $result = $this->db->query('select * from routes')->result_array();
        return $result;
    }
    
    public function updateRoute($data, $id){
        $this->db->where("route_id", $id);
        $result = $this->db->update("routes", $data);
        
        return $result;
    }
    
    public function insertRoute($data){
        $this->db->set($data);
        $result = $this->db->insert("routes");
        
        return $result;
    }
}
