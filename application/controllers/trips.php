<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Trips extends CI_Controller {
    var $url = "trips";
    
    public function __construct() {
        parent::__construct();
        $this->load->model('trips_model', 'model');
        $this->load->model('routes_model');
    }

    public function index() {                
        $listdata = $this->model->getTripsList();
        $this->load->template($this->url."/index", array("listdata" => $listdata, 
                                                         "sys_globals" => $GLOBALS["SYS_GLOBALS"]));
    }

    public function add() {
        $result = $this->routes_model->getRouteCmb();
        $routeCmb = array();
        foreach($result as $row){
            $routeCmb[$row["route_id"]] = $row["route_short_name"];
        }
        
        $this->load->template($this->url."/add", ["routeCmb" => $routeCmb ]);
    }

    public function edit($id) {
        $data = $this->model->getTripsRow($id);
        $result = $this->routes_model->getRouteCmb();
        $routeCmb = array();
        foreach($result as $row){
            $routeCmb[$row["route_id"]] = $row["route_short_name"];
        }
        
        $this->load->template($this->url."/edit", ["data" => $data, "routeCmb" => $routeCmb]);
    }

    public function registration() {

        $data = array("route_id" => $this->input->post('route_id'),
                      "service_id" => $this->input->post('service_id'),
                      "trip_headsign" => $this->input->post('trip_headsign'),
                      "direction_id" => $this->input->post('direction_id'),
                      "block_id" => $this->input->post('block_id'), 
                      "shape_id" => $this->input->post('shape_id') );

        if ($this->input->post('trip_id')) {
            $result = $this->model->updateTrips($data, $this->input->post('trip_id'));
            if ($result) {
                Message::add('s', 'Successfully Saved', '/'.$this->url);
            } else {
                Message::add('e', 'Error', '/'.$this->url.'/edit/' . $this->input->post('trip_id'));
            }
        } else {
            $result = $this->model->insertTrips($data);
            if ($result) {
                Message::add('s', 'Successfully Saved', '/'.$this->url);
            } else {
                Message::add('e', 'Error', '/'.$this->url.'/add/');
            }
        }
    }

    public function delete($id) {
        $result = $this->db->delete("trips", array("trip_id" => $id));
        if ($result) {
            Message::add('s', 'Successfully deleted', '/'.$this->url);
        } else {
            Message::add('e', 'Error', '/'.$this->url);
        }
    }

}
