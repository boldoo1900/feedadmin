<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Stoptimes extends CI_Controller {
    var $url = "stoptimes";
    
    public function __construct() {
        parent::__construct();
        $this->load->model('stoptimes_model', 'model');
        $this->load->model('trips_model');
        $this->load->model('stops_model');
    }

    public function index() {
        $title = "Stop times";
        $listdata = $this->model->getStoptimesList();
        $this->load->template($this->url."/index", array("listdata" => $listdata, "title"=>$title));
    }

    public function add() {
        $tripsCmb = $stopsCmb = array();
        $resultT = $this->trips_model->getTripscmb();
        $resultS = $this->stops_model->getStopscmb();
        foreach($resultT as $row){
            $tripsCmb[$row["trip_id"]] = $row["trip_headsign"];
        }      
        
        foreach($resultS as $row){
            $stopsCmb[$row["stop_id"]] = $row["stop_name"];
        }
        
        $this->load->template($this->url."/add", ["tripsCmb"=>$tripsCmb, "stopsCmb"=>$stopsCmb ]);
    }

    public function edit($id) {
        $tripsCmb = $stopsCmb = array();
        $resultT = $this->trips_model->getTripscmb();
        $resultS = $this->stops_model->getStopscmb();
        foreach($resultT as $row){
            $tripsCmb[$row["trip_id"]] = $row["trip_headsign"];
        }      
        
        foreach($resultS as $row){
            $stopsCmb[$row["stop_id"]] = $row["stop_name"];
        }
        
        $data = $this->model->getStoptimesRow($id);
        $this->load->template($this->url."/edit", ["data" => $data, 
                                                   "tripsCmb"=>$tripsCmb, 
                                                   "stopsCmb"=>$stopsCmb]);
    }

    public function registration() {

        $data = array("trip_id" => $this->input->post('trip_id'),
                      "stop_id" => $this->input->post('stop_id'),
                      "arrival_time" => $this->input->post('arrival_time'),
                      "departure_time" => $this->input->post('departure_time'),
                      "stop_sequence" => $this->input->post('stop_sequence'), 
                      "stop_headsign" => $this->input->post('stop_headsign'),
                      "pickup_type" => $this->input->post('pickup_type'),
                      "drop_off_type" => $this->input->post('drop_off_type'),
                      "shape_dist_traveled" => $this->input->post('shape_dist_traveled') );

        if ($this->input->post('stoptime_id')) {
            $result = $this->model->updateStoptimes($data, $this->input->post('stoptime_id'));
            if ($result) {
                Message::add('s', 'Successfully Saved', '/'.$this->url);
            } else {
                Message::add('e', 'Error', '/'.$this->url.'/edit/' . $this->input->post('stoptime_id'));
            }
        } else {
            $result = $this->model->insertStoptimes($data);
            if ($result) {
                Message::add('s', 'Successfully Saved', '/'.$this->url);
            } else {
                Message::add('e', 'Error', '/'.$this->url.'/add/');
            }
        }
    }

    public function delete($id) {
        $result = $this->db->delete("stop_times", array("stoptime_id" => $id));
        if ($result) {
            Message::add('s', 'Successfully deleted', '/'.$this->url);
        } else {
            Message::add('e', 'Error', '/'.$this->url);
        }
    }

}
