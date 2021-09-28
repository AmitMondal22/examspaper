<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Side_map extends CI_Controller{
        public function __construct(){
            parent::__construct();   
            //$this->load->database();
            $this->load->model('Sid_mod');
            $this->load->helper('xml');
        }

        public function sid(){
            $this->load->helper('url');
            $ins_i=$this->Sid_mod->selins_id();
            $y_id=$this->Sid_mod->year_id();
            $s_id=$this->Sid_mod->str_id();
            $w=array(
                'i_id'=>$ins_i,
                'r_year'=>$y_id,
                'r_str'=>$s_id
            );
            $this->load->view('sitemap/side',$w);
        }
    }
   
?>