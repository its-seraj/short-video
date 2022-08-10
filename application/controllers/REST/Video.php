<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('Model_video');
    }

    public function get(){
        $get_data = $this->input->get();

        $result = $this->Model_video->get($get_data);
        for($i = 0; $i < count($result); $i++){
            $result[$i]['path'] = VIDEO_PATH . $result[$i]['name'];
        }
        $result = json_encode($result);

        echo $result;
    }
}