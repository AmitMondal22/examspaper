<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Log_mod extends CI_Model{
       
        public function __construct(){
            parent::__construct();
            $this->load->database();
        }
        

        public function ses_ad($nam,$a_pass){
            $this->db->where('a_email',$nam);
            $this->db->where('a_password',$a_pass);
            $aData=$this->db->get('admin_user');
            $r=$aData->result();
            if(count($r)>0){
	    	
                $this->session->set_userdata("aid",$r[0]->admin_id);
                $this->session->set_userdata('a_name',$r[0]->a_name);
                redirect(base_url().'all-quastions');
    
            }else {
                return false;
            }
        }
    }


?>
