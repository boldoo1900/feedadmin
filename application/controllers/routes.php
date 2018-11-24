<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Routes extends CI_Controller {
    var $url = "routes";
    
    public function __construct() {
        parent::__construct();
        $this->load->model('routes_model', 'model');
        $this->load->model('agency_model');
    }

    public function index() {
        $listdata = $this->model->getRouteList();
        $this->load->template($this->url."/index", array("listdata" => $listdata));
    }

    public function add() {
        
        $result = $this->agency_model->getAgencyList();
        $agencyCmb = null;
        foreach($result as $row){
            $agencyCmb[$row["agency_id"]] = $row["agency_name"];
        }
        
        $this->load->template($this->url."/add", ["sys_globals" => $GLOBALS["SYS_GLOBALS"], 
                                                  "agencyCmb" => $agencyCmb ]);
    }

    public function edit($id) {
        
        $result = $this->agency_model->getAgencyList();
        $agencyCmb = null;
        foreach($result as $row){
            $agencyCmb[$row["agency_id"]] = $row["agency_name"];
        }
        
        $data = $this->model->getRouteRow(intval($id));
        $this->load->template($this->url."/edit", ["data" => $data, 
                                                   "sys_globals" => $GLOBALS["SYS_GLOBALS"], 
                                                   "agencyCmb" => $agencyCmb]);
    }

    public function registration() {

        $data = array("agency_id" => $this->input->post('agency_id'),
                      "route_short_name" => $this->input->post('route_short_name'),
                      "route_long_name" => $this->input->post('route_long_name'),
                      "route_desc" => $this->input->post('route_desc'),
                      "route_type" => $this->input->post('route_type'),
                      "route_url" => $this->input->post('route_url'), 
                      "route_color" => $this->input->post('route_color'),
                      "route_text_color" => $this->input->post('route_text_color') );

        if ($this->input->post('route_id')) {
            $result = $this->model->updateRoute($data, $this->input->post('route_id'));
            if ($result) {
                Message::add('s', 'Successfully Saved', '/'.$this->url);
            } else {
                Message::add('e', 'Error', '/'.$this->url.'/edit/' . $this->input->post('agency_id'));
            }
        } else {
            $result = $this->model->insertRoute($data);
            if ($result) {
                Message::add('s', 'Successfully Saved', '/'.$this->url);
            } else {
                Message::add('e', 'Error', '/'.$this->url.'/add/');
            }
        }
    }

    public function delete($id) {
        $result = $this->db->delete("routes", array("route_id" => $id));
        if ($result) {
            Message::add('s', 'Successfully deleted', '/'.$this->url);
        } else {
            Message::add('e', 'Error', '/'.$this->url);
        }
    }

}
