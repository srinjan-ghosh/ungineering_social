<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Status_update extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); /* connect to database stablish database connection */
    }

}
