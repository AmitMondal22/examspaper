<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Admin_model extends CI_Model{
        public function __construct(){
            parent::__construct();
            $this->load->database();

        }
        // add year
        public function year_ins($y){
            $this->db->insert('year_t',$y);
        }
        // select year page
        public function se_year(){
            $q=$this->db->get("year_t");
            return $rs=$q->result();
        }
        // upd select year
        public function ediyear($yid){
            $this->db->where("year_id",$yid);
            $q=$this->db->get("year_t");
            return $r=$q->result();
        }
        // year update submeit
        public function upd_year($udata,$yeid){
            $this->db->where('year_id',$yeid);
            $this->db->update('year_t',$udata);
        }

        // add stream
        public function str_ins($s){
            $this->db->insert('stream',$s);
        }
        // select stream
        public function sel_str(){
            $q=$this->db->get('stream');
            return $rs=$q->result();
        }
         // edit select 
        public function editstr($sid){
            $this->db->where('stream_id',$sid);
            $q=$this->db->get('stream');
            return $rs=$q->result();
        }
        // update stream
        public function updstr($data,$sid){
            $this->db->where('stream_id',$sid);
            $this->db->update('stream',$data);
        }
        // delete stream 
        public function str_del($sid){
            $this->db->where('stream_id',$sid);
            $this->db->delete('stream');
        }

        // institute insert
        public function institu_inser($ina){
            $this->db->insert('institute_table',$ina);
        }
        //institute select
        public function insti_sel(){
            $ab=$this->db->select("institute_type_table.*,institute_table.*")->from("institute_table")->join("institute_type_table","institute_type_table.institute_type_id = institute_table.institute_type_id")->get();

            // $this->db->select("product.product_name,bill_temp.*")->from("bill_temp")->join("product","product.product_id=bill_temp.p_id")->where("bill_temp.c_id='$cid'")->get();
            // ->where("institute_table.institute_type_id = institute_type_table.institute_type_id")
            
            // $q=$this->db->get('institute_table');
            return $r=$ab->result();
        }
        //institute update selects
        public function sele_insid($inid){
            $this->db->where('institute_id',$inid);
            $q=$this->db->get('institute_table');
            return $r=$q->result();
        }
        //institute update
        public function upd_insti($idat,$iid){
            $this->db->where('institute_id',$iid);
            $this->db->update('institute_table',$idat);
        }
        //institute delete
        public function institu_del($inid){
            $this->db->where('institute_id',$inid);
            $this->db->delete('institute_table');
        }



        //select type insti
        public function sel_inst_ty(){
           $q= $this->db->get('institute_type_table');
           return $r=$q->result();
        }
        //ins type insti
        public function sel_instty($uta){
            $this->db->insert('institute_type_table',$uta);
        }
        //select type insti id
        public function sel_insti_type($idtin){
            $this->db->where('institute_type_id',$idtin);
            $q=$this->db->get('institute_type_table');
            return $r=$q->result();
        }
        //update type insti
        public function sel_in_update($data,$uid){
            $this->db->where('institute_type_id',$uid);
            $this->db->update('institute_type_table',$data);
        }

        // quastion submait
        public function ins_quastio($data){
            $this->db->insert('sub_q_file',$data);

        }
        //allquastiomn
        public function select_auat(){
            $this->db->select("sub_q_file.*,institute_table.institute_name,year_t.year,stream.stream_name")->from("sub_q_file")->join("institute_table","institute_table.institute_id=sub_q_file.institute_id")->join("year_t","year_t.year_id=sub_q_file.year_id")->join("stream","stream.stream_id=sub_q_file.stream_id");

            $this->db->order_by("sub_q_file.sq_id","desc");
            $qbigData=$this->db->get();
            

            return $row=$qbigData->result();
        }


        //verifi quastion (post)
        public function upd_publish($daTa,$quid){
            $this->db->where('sq_id',$quid);
            $this->db->update('sub_q_file',$daTa);
        }

        //del quastion
        public function quastion_del($qid){
            $this->db->where('sq_id',$qid);
            $row=$this->db->get('sub_q_file');
            $r=$row->result();
            foreach ($r as $d) {
                unlink('./all_file/quastion_paper/'.$r->q_file);
            }
            $this->db->where('sq_id',$qid);
            $this->db->delete('sub_q_file');
        }
        

        // //select quastion update
        public function sel_u_q($quid){
            $this->db->where('sq_id',$quid);
            $this->db->select("sub_q_file.*,institute_table.institute_name,year_t.year,stream.stream_name")->from("sub_q_file")->join("institute_table","institute_table.institute_id=sub_q_file.institute_id")->join("year_t","year_t.year_id=sub_q_file.year_id")->join("stream","stream.stream_id=sub_q_file.stream_id");

            $q=$this->db->get();
            
            return $r=$q->result();
        }
        public function upd_quastion($data,$qid){
            $this->db->where('sq_id',$qid);
            $this->db->update('sub_q_file',$data);

        }


        //contact data
        public function con_da(){
            $this->db->order_by("contact_public.id","desc");
            $q=$this->db->get('contact_public');
            return $r=$q->result();
        }

        public function sel_allUser(){
            $this->db->order_by("user_t.user_id","desc");
            $q=$this->db->get('user_t');
            return $r=$q->result();
        }


    }
?>
<!-- ->where("institute_table.institute_id=sub_q_file.institute_id,year_t.year_id=sub_q_file.year_id,stream.stream_id=sub_q_file.stream_id,user_t.user_id=sub_q_file.user_id,admin_user.admin_id=sub_q_file.admin_id") -->