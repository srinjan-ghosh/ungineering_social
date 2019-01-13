<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Status_update extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); /* connect to database stablish database connection */
    }
    public function insert_data($data){
         $this->db->insert('status_updates', $data);   
    }
    public function get_statuses($user_id) {
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('status_updates');
        return $query->result_array();
    }

}
