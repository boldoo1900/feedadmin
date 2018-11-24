<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Export extends CI_Controller {

    var $url = "export";
    var $fileDir = "assets/uploads/";
    var $fileColumns = array("agency" => "agency_id,agency_name,agency_url,agency_timezone",
        "routes" => "route_id,agency_id,route_short_name,route_long_name,route_desc,route_type,route_url,route_color,route_text_color",
        "calendar" => "service_id,monday,tuesday,wednesday,thursday,friday,saturday,sunday,start_date,end_date",
        "stops" => "stop_id,stop_name,stop_desc,stop_lat,stop_lon,zone_id,stop_url",
        "stop_times" => "trip_id,arrival_time,departure_time,stop_id,stop_sequence,stop_headsign,pickup_type,drop_off_type,shape_dist_traveled",
        "trips" => "route_id,service_id,trip_id,trip_headsign,direction_id,block_id,shape_id");

    public function __construct() {
        parent::__construct();
        $this->load->model('export_model', 'model');
    }

    public function index() {
        $files = scandir($this->fileDir);
        unset($files[0]);
        unset($files[1]);

        $this->load->template($this->url . "/index", array("files" => $files));
    }

    public function add() {
        $this->load->template($this->url . "/add");
    }

    public function prepzip() {
        if (!$this->input->post("filenames")) {
            redirect($this->url);
        }

        // file creation
        foreach ($this->input->post("filenames") as $row) {
            $data = $this->model->getData($row);

            //write file
            $file = fopen($this->fileDir . $row . ".txt", "w") or die("Unable to open file!");
            fwrite($file, $this->fileColumns[$row] . "\n");

            foreach ($data as $subRow) {
                fwrite($file, implode(",", $subRow). "\n");
            }
            fclose($file);
        }

        //zip creation
        $zip = new ZipArchive();
        $filename = time() . "_gtfs.zip";

        if ($zip->open($this->fileDir . "/" . $filename, ZipArchive::CREATE) == TRUE) {
            foreach ($this->input->post("filenames") as $row) {
                $zip->addFile($this->fileDir.$row . ".txt", $row . ".txt");
            }
            
            $zip->close();
        }
        
        //delete temporary files
        foreach ($this->input->post("filenames") as $row) {
            if (file_exists($this->fileDir . $row . ".txt")) {
                unlink($this->fileDir . $row . ".txt");
            }
        }
        
        Message::add('s', 'Zip file successfully created', '/' . $this->url);
    }

    public function download($id) {
        $filename = $this->fileDir . $id;
        File::fileDownload($id, $filename);
    }

    public function delete($id) {
        $filename = $this->fileDir . $id;
        if (file_exists($filename)) {
            unlink($filename);
            Message::add('s', 'File successfully deleted', '/' . $this->url);
        }
    }

}
