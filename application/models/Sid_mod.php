<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sid_mod extends  CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function selins_id(){
        $q=$this->db->get('institute_table');
        return $q->result();
    }
    
    public function year_id(){
        $q=$this->db->get('year_t');
        return $q->result();
    }
    public function str_id(){
        $q=$this->db->get('stream');
        return $q->result();
    }
}
?>