<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); /* connect to database stablish database connection */
    }

    public function get_data() {
        $query = $this->db->query("SELECT * FROM users;");
        /*foreach ($query->result() as $row) {
            
        }*/
        return $query->result();
    }
    public function get_data_of_users($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('users');
        return $query->row_array();
    }
    public function insert_data($data) {
        $this->db->insert('users', $data);   
    }
    public function update_data_of_user($id,$data){
        $this->db->where('id',$id);
        $query_result = $this->db->update('users',$data);
        return $query_result;
    }
}
