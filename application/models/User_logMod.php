<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class User_logMod extends CI_Model{
        public function __construct(){
            parent::__construct();
            $this->load->database();
        }

        public function ver_lo($ue,$tex){
            $this->db->where('u_email',$ue);
            $q=$this->db->get('user_t');
            $r=$q->result();
            if(count($r)>0){
                    $has = $r[0]->u_passwor;
                    if(password_verify($tex, $has)){
                        $this->session->set_userdata("uid",$r[0]->user_id);
                        $this->session->set_userdata('u_name',$r[0]->u_name);
                        redirect(base_url().'profile');
                    } else {
                        return false;
                    }
                

                
            }
        }



        






    }

?>