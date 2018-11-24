<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar extends CI_Controller {
    var $url = "calendar";
    
    public function __construct() {
        parent::__construct();
        $this->load->model('calendar_model', 'model');
        
    }

    public function index() {                
        $listdata = $this->model->getCalendarList();
        $this->load->template($this->url."/index", array("listdata" => $listdata, 
                                                         "sys_globals" => $GLOBALS["SYS_GLOBALS"]));
    }

    public function add() {
        $this->load->template($this->url."/add", ["sys_globals" => $GLOBALS["SYS_GLOBALS"] ]);
    }

    public function edit($id) {
        $data = $this->model->getCalendarRow($id);
        $this->load->template($this->url."/edit", ["data" => $data, 
                                                   "sys_globals" => $GLOBALS["SYS_GLOBALS"]]);
    }

    public function registration() {

        $data = array("service_id" => $this->input->post('service_id'),
                      "monday" => $this->input->post('monday'),
                      "tuesday" => $this->input->post('tuesday'),
                      "wednesday" => $this->input->post('wednesday'),
                      "thursday" => $this->input->post('thursday'),
                      "friday" => $this->input->post('friday'), 
                      "saturday" => $this->input->post('saturday'),
                      "sunday" => $this->input->post('sunday'),
                      "start_date" => $this->input->post('start_date'),
                      "end_date" => $this->input->post('end_date') );

        if ($this->input->post('action') == "edit") {
            $result = $this->model->updateCalendar($data, $this->input->post('service_id'));
            if ($result) {
                Message::add('s', 'Successfully Saved', '/'.$this->url);
            } else {
                Message::add('e', 'Error', '/'.$this->url.'/edit/' . $this->input->post('service_id'));
            }
        } else {
            $result = $this->model->insertCalendar($data);
            if ($result) {
                Message::add('s', 'Successfully Saved', '/'.$this->url);
            } else {
                Message::add('e', 'Error', '/'.$this->url.'/add/');
            }
        }
    }

    public function delete($id) {
        $result = $this->db->delete("calendar", array("service_id" => $id));
        if ($result) {
            Message::add('s', 'Successfully deleted', '/'.$this->url);
        } else {
            Message::add('e', 'Error', '/'.$this->url);
        }
    }

}
