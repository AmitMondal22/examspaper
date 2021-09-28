<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Use_p_mod extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function pro_sel($us_id){
        $this->db->where("user_id",$us_id);
        $q=$this->db->get("user_t");
        return $r=$q->result();
    }

    public function update_u_profil($u_d,$uid){
        $this->db->where('user_id',$uid);
        $this->db->update('user_t',$u_d);
    }

    public function se_insti(){
        $this->db->order_by("institute_name");
        $q=$this->db->get("institute_table");
        return $r=$q->result();
    }
    public function y_sel(){
        $this->db->order_by("year_t.year", "desc");
        $q=$this->db->get("year_t");
        return $r=$q->result();
    }
    public function u_str(){
        $this->db->order_by("stream.stream_name");
        $q=$this->db->get("stream");
        return $r=$q->result();
    }
    public function all_u_qu($ui){
        //$this->db->where("user_id",$ui);
        $this->db->select("sub_q_file.*,institute_table.institute_name,year_t.year,stream.stream_name")->from("sub_q_file")->join("institute_table","institute_table.institute_id=sub_q_file.institute_id")->join("year_t","year_t.year_id=sub_q_file.year_id")->join("stream","stream.stream_id=sub_q_file.stream_id")->where("sub_q_file.user_id",$ui);

        $this->db->order_by("sub_q_file.sq_id","desc");
        $qbigData=$this->db->get();
        return $row=$qbigData->result();

    }



    public function ins_quastio($data){
        $this->db->insert('sub_q_file',$data);

    }


    public function ins_type(){
        $this->db->order_by("institute_type_table.institute_type");
        $q=$this->db->get('institute_type_table');
        return $q->result();
    }
    public function add_ind($instype,$inam,$data){
        $this->db->where('institute_name',$inam);
        $this->db->where('institute_type_id',$instype);
        $q=$this->db->get('institute_table');
            $r=$q->result();
            if (count($r)>0) {
                return false;
            } else {
                $this->db->insert('institute_table',$data);
                return true;
            }

    }
    public function add_str($data,$inname){
        $this->db->where('stream_name',$inname);
        $q=$this->db->get('stream');
            $r=$q->result();
            if (count($r)>0) {
                return false;
            } else {
                $this->db->insert('stream',$data);
                return true;
            }
    }


    public function selquastion($qid){
        $this->db->select("sub_q_file.*,institute_table.institute_name,year_t.year,stream.stream_name")->from("sub_q_file")->join("institute_table","institute_table.institute_id=sub_q_file.institute_id")->join("year_t","year_t.year_id=sub_q_file.year_id")->join("stream","stream.stream_id=sub_q_file.stream_id")->where("sub_q_file.sq_id",$qid);
        $q=$this->db->get();
        return $q->result();
    }


    public function upd_quastion_user($qid ,$data){
        $this->db->where("sq_id",$qid);
        $this->db->update('sub_q_file',$data);

    }

}


?>