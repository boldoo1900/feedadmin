<?php

class Calendar_model extends CI_Model {
    
    public function getCalendarList() {
        $result = $this->db->query('select * from calendar')->result_array();
        return $result;
    }

    public function getCalendarRow($id){
        $result = $this->db->query('select * from calendar where service_id =? limit 1', array($id))->row_array();
        return $result;
    }
    
    public function updateCalendar($data, $id){
        $this->db->where("service_id", $id);
        $result = $this->db->update("calendar", $data);
        
        return $result;
    }
    
    public function insertCalendar($data){
        $this->db->set($data);
        $result = $this->db->insert("calendar");
        
        return $result;
    }
}
