<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Agency extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('agency_model', 'model');
    }

    public function index() {

        $listdata = $this->model->getAgencyList();
        $this->load->template("agency/index", array("listdata" => $listdata));
    }

    public function add() {
        $this->load->template("agency/add", ["timezone" => $GLOBALS["SYS_GLOBALS"]]);
    }

    public function edit($id) {
        $data = $this->model->getAgencyRow(intval($id));
        $this->load->template("agency/edit", ["data" => $data, "timezone" => $GLOBALS["SYS_GLOBALS"]]);
    }

    public function registration() {

        $data = array("agency_name" => $this->input->post('agency_name'),
            "agency_url" => $this->input->post('agency_url'),
            "agency_timezone" => $this->input->post('agency_timezone'));

        if ($this->input->post('agency_id')) {
            $result = $this->model->updateAgency($data, $this->input->post('agency_id'));
            if ($result) {
                Message::add('s', 'Successfully Saved', '/agency');
            } else {
                Message::add('e', 'Error', '/agency/edit/' . $this->input->post('agency_id'));
            }
        } else {
            $result = $this->model->insertAgency($data);
            if ($result) {
                Message::add('s', 'Successfully Saved', '/agency');
            } else {
                Message::add('e', 'Error', '/agency/add/');
            }
        }
    }

    public function delete($id) {
        $result = $this->db->delete("agency", array("agency_id" => $id));
        if ($result) {
            Message::add('s', 'Successfully deleted', '/agency');
        } else {
            Message::add('e', 'Error', '/agency/');
        }
    }

}
