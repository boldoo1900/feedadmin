<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Stops extends CI_Controller {
    var $url = "stops";
    
    public function __construct() {
        parent::__construct();
        $this->load->model('stops_model', 'model');
    }

    public function index() {                
        $listdata = $this->model->getStopsList();
        $this->load->template($this->url."/index", array("listdata" => $listdata, 
                                                         "sys_globals" => $GLOBALS["SYS_GLOBALS"]));
    }

    public function add() {
        $this->load->template($this->url."/add", ["sys_globals" => $GLOBALS["SYS_GLOBALS"] ]);
    }

    public function edit($id) {
        $data = $this->model->getStopsRow($id);
        $this->load->template($this->url."/edit", ["data" => $data, 
                                                   "sys_globals" => $GLOBALS["SYS_GLOBALS"]]);
    }

    public function registration() {

        $data = array("stop_name" => $this->input->post('stop_name'),
                      "stop_desc" => $this->input->post('stop_desc'),
                      "stop_lat" => $this->input->post('stop_lat'),
                      "stop_lon" => $this->input->post('stop_lon'),
                      "zone_id" => $this->input->post('zone_id'), 
                      "stop_url" => $this->input->post('stop_url') );

        if ($this->input->post('stop_id')) {
            $result = $this->model->updateStops($data, $this->input->post('stop_id'));
            if ($result) {
                Message::add('s', 'Successfully Saved', '/'.$this->url);
            } else {
                Message::add('e', 'Error', '/'.$this->url.'/edit/' . $this->input->post('stop_id'));
            }
        } else {
            $result = $this->model->insertStops($data);
            if ($result) {
                Message::add('s', 'Successfully Saved', '/'.$this->url);
            } else {
                Message::add('e', 'Error', '/'.$this->url.'/add/');
            }
        }
    }

    public function delete($id) {
        $result = $this->db->delete("stops", array("stop_id" => $id));
        if ($result) {
            Message::add('s', 'Successfully deleted', '/'.$this->url);
        } else {
            Message::add('e', 'Error', '/'.$this->url);
        }
    }

}
