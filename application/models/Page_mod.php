<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Page_mod extends CI_Model{
        public function __construct(){
            parent::__construct();
            $this->load->database();
        }
        //homepage institute type
        public function main_p(){
            $q=$this->db->order_by("institute_type_table.institute_type", "asc")->get('institute_type_table');
            return $rs=$q->result();
        }
        // home institute
        public function sele_all_ins(){
           $this->db->select('institute_table.*,institute_type_table.*')->from('institute_table')->join('institute_type_table','institute_type_table.institute_type_id = institute_table.institute_type_id');

           $this->db->order_by("institute_table.institute_name", "asc");

           $q=$this->db->get();
          
            return $r=$q->result();
        }




        //school-page year
        public function year_sel(){
            $z=$this->db->order_by("year_t.year","DESC")->get('year_t');
            return $rs=$z->result();
        }
        //select subject
        public function ins_stream_id($inid){
            
            $this->db->select('stream.*,sub_q_file.*')->from('sub_q_file')->join('stream','stream.stream_id = sub_q_file.stream_id')->where("sub_q_file.institute_id='$inid'");
            $this->db->order_by("stream.stream_name", "asc");
            //$this->db->group_by("sub_q_file.stream_id");
            $dAt=$this->db->get();

            return $ro=$dAt->result();

        }
         //select subject
        //  public function ins_stream_id_cal($inid){
            
        //     $this->db->select('stream.*,sub_q_file.*')->from('sub_q_file')->join('stream','stream.stream_id = sub_q_file.stream_id')->where("sub_q_file.institute_id='$inid'");
        //     $this->db->order_by("stream.stream_name", "asc");
        //     $this->db->group_by("sub_q_file.stream_id");
        //     $dAt=$this->db->get();

        //     return $ro=$dAt->result();

        // }

        public function streamselect(){
            $z=$this->db->get('stream');
            return $r=$z->result();
        }

        public function ins_name($inid){
            $this->db->where('institute_id',$inid);
            $d=$this->db->get('institute_table');
            return $iData=$d->result();
        }


        public function sele_quastion($instid,$yid,$streamid){
            $this->db->where('institute_id',$instid);
            $this->db->where('year_id',$yid);
            $this->db->where('stream_id',$streamid);
            $q=$this->db->get('sub_q_file');
            return $r=$q->result();
        }

         public function ins_ins($instid){
            $this->db->where('institute_id',$instid);
            $q=$this->db->get('institute_table');
            return $z=$q->result();
        }

        public function sel_str($streamid){
            $this->db->where('stream_id',$streamid);
            $q=$this->db->get('stream');
            return $o=$q->result();
        }
        public function year_page($yid){
            $this->db->where('year_id',$yid);
            $r=$this->db->get('year_t');
            return $p=$r->result();
        }




        public function contact_add($carr){
            $this->db->insert('contact_public',$carr);
        }





    }

?>