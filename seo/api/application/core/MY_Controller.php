<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct() {
        
        parent::__construct();

        $myArr = array('user_type' => "ADMIN","name"=>"RockStar Singh", 'user_id' => "1");
        $this->session->set_userdata($myArr);
        if (!$this->session->userdata('user_id')) {
            $this->output->set_status_header('401');
        }
    }

}
