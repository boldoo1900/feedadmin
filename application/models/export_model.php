<?php

class Export_model extends CI_Model {
    
    public function getTripsList() {
        $result = $this->db->query('select a.*, b.route_short_name from trips a inner join routes b on b.route_id = a.route_id ')->result_array();
        return $result;
    }

    public function getData($tablename) {
        $result = $this->db->query('select * from '.$tablename)->result_array();
        return $result;
    }
    
}
