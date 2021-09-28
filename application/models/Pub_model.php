<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    class Pub_model extends CI_Model{
        public function __construct(){
            parent::__construct();
            $this->load->database();
        }
        
        public function ins_useacc($u_data,$u_em){
            $this->db->where("u_email",$u_em);
            $q=$this->db->get('user_t');
            $r=$q->result();
            if (count($r)>0) {
                return false;
            } else {
                $this->db->insert('user_t',$u_data);
                return true;
            }
            
            
        }
        public function user_em($g){
            $this->db->where('u_email',$g);
            $q=$this->db->get("user_t");
            return $r=$q->result();
        }

        public function opt_upd($u_d,$o,$ac){
            $this->db->where('user_id',$u_d);
            $this->db->where('u_token',$o);
            $this->db->update('user_t',$ac);
        }


        public function f_user_email($u_e,$u_otp){
            $this->db->where('u_email',$u_e);
            $q=$this->db->get('user_t');
            $r=$q->result();
            if (count($r)>0) {
                $this->db->where('u_email',$u_e);
                $this->db->update('user_t',$u_otp);
                return true;
            } else {
                return false;
            } 
            
        }
        public function f_u_data($u_e){
            $this->db->where('u_email',$u_e);
            $q=$this->db->get('user_t');
            return $r=$q->result();
        }

       
        
        public function var_otp($uid,$uo,$ac){
            $this->db->where('user_id',$uid);
            $this->db->where('u_token',$uo);
            $q=$this->db->get('user_t');
            $r=$q->result();
            if (count($r)>0) {
                $this->db->where('user_id',$uid);
                $this->db->update('user_t',$ac);
                return true;
            } else {
                return false;
            }
            
        }
        public function f_p_data($uid){
            $this->db->where('user_id',$uid);
            $q=$this->db->get('user_t');
            return $r=$q->result();
        }


        // updatepassword
        public function update_p($data,$ue){
            $this->db->where("u_email",$ue);
            $this->db->update('user_t',$data);
        }


        
    }

?>