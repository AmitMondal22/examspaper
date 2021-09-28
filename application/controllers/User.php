<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class User extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('Use_p_mod');
            $this->load->library('session');

            $user_id=$this->session->userdata("uid");
            if(!isset($user_id)){
                redirect(base_url()."login");
            }
        }

        public function test_v(){
            $u_i=$this->session->userdata("uid");
            $ro=$this->Use_p_mod->pro_sel($u_i);
            $in_d=$this->Use_p_mod->se_insti();
            $y=$this->Use_p_mod->y_sel();
            $atr=$this->Use_p_mod->u_str();
            $ql_quastio=$this->Use_p_mod->all_u_qu($u_i);
            $ins_type=$this->Use_p_mod->ins_type();
            $u_d=array(
                'use_daat'=>$ro,
                'ins_data'=>$in_d,
                 'y_row'=>$y,
                 'u_str'=>$atr,
                 'all_quas'=>$ql_quastio,
                 'in_typ'=> $ins_type
            );
            $this->load->view('user_view/prof-use', $u_d);
        }
        public function user_pro_upd(){
            $u_id=$this->input->post('u_id');
            $u_n=$this->input->post('u_name');
            $u_stu=$this->input->post('u_study');
            $u_w=$this->input->post('u_workin');
            $u_lin=$this->input->post('u_livin');
            $u_m=$this->input->post('um_no');
            $conf = array(
                'upload_path'=>'./user_pictur',
                'allowed_types'=>'png|jpg|jpeg',
                'max_size'=>50000,
                'file_name'=> substr(md5(time()), 0, 28),
            );
            $this->load->library('upload',$conf);
            if (!$this->upload->do_upload("u_pro")) {
                $w=array(
                    "u_name"=>$u_n,
                    "studied_at"=>$u_stu,
                    "work_at"=>$u_w,
                    "lives_in"=>$u_lin,
                    "mobile_no"=>$u_m
 
                );
                $this->Use_p_mod->update_u_profil($w,$u_id);

             } else {
                $fd=$this->upload->data();
               $fn=$fd['file_name'];
               $w=array(
                   "u_name"=>$u_n,
                   "u_img"=>$fn,
                   "studied_at"=>$u_stu,
                   "work_at"=>$u_w,
                   "lives_in"=>$u_lin,
                   "mobile_no"=>$u_m

               );
               
               $this->Use_p_mod->update_u_profil($w,$u_id);

             }
             
             redirect(base_url()."profile");
        }


        public function upd_quastion(){
            $adm_user_id=$this->input->post('u_id');
            $u_id=$this->input->post('univer_id');
            $st_id=$this->input->post('stream_id');
            $y_id=$this->input->post('year_id');
            $sunj_nam=$this->input->post('sub_name');
            //$this->input->post('quas_upd');
            $p_date=date('d-m-y h:i:s A');
            $pu="deactive";
            $conf = array(
                'upload_path'=>'./all_file/quastion_paper/',
                'allowed_types'=>'pdf',
                'max_size'=>50000,
                'file_name'=> substr(md5(time()), 0, 28),
            );
            $this->load->library('upload',$conf);
            if (!$this->upload->do_upload("quas_upd")) {
                echo $this->upload->display_errors();
             } else {
                $fd=$this->upload->data();
               $fn=$fd['file_name'];
               $enc_ins=array(
                'subject_name'=>$sunj_nam,
                'q_post_date'=>$p_date,
                'q_file'=>$fn,
                'institute_id'=>$u_id,
                'year_id'=>$y_id,
                'stream_id'=>$st_id,
                'publish'=>$pu,
                'user_id'=>$adm_user_id
               );
               $this->Use_p_mod->ins_quastio($enc_ins);
               redirect(base_url()."profile#page1");
             }
        }

        public function isn_inst(){
            $i_nam=$this->input->post('ins_name');
            $ins_type=$this->input->post('typ_inst');
            $w=array(
                'institute_name'=>$i_nam,
                'institute_type_id'=>$ins_type
            );
            $find_d=$this->Use_p_mod->add_ind($ins_type,$i_nam,$w);
            if ($find_d == TRUE) {
                redirect(base_url()."profile#page1");
            } else {
                ?>
                <script>
                alert("This institute alrady exists");
                window.location = 'profile#page1';
                </script>
                <?php
            }
        }
        public function ins_str(){
            $in_name=$this->input->post('ins_name');
            $w=array(
                'stream_name'=>$in_name
            );
            $find_d=$this->Use_p_mod->add_str($w,$in_name);
            if ($find_d == TRUE) {
                redirect(base_url()."profile#page1");
            } else {
                ?>
                <script>
                alert("This institute alrady exists");
                window.location = 'profile#page1';
                </script>
                <?php
            }
        }


        public function upd_qu_u($q_id){
            $in_d=$this->Use_p_mod->se_insti();
            $y=$this->Use_p_mod->y_sel();
            $atr=$this->Use_p_mod->u_str();
            $ins_type=$this->Use_p_mod->ins_type();
            $a_qua=$this->Use_p_mod->selquastion($q_id);
            $u_d=array(
                'ins_data'=>$in_d,
                 'y_row'=>$y,
                 'u_str'=>$atr,
                 'in_typ'=> $ins_type,
                 'a_qu'=>$a_qua
            );
            $this->load->view('user_view/user-updquastion',$u_d);
        }

        public function upd_dave(){
            $q_id = $this->input->post('qu_id');
            $u_id = $this->input->post('univer_id');
            $str_id = $this->input->post('stream_id');
            $y_id = $this->input->post('year_id');
            $sub = $this->input->post('sub_name');

            $p_date=date('d-m-y h:i:s A');
            $pu="deactive";
            $conf = array(
                'upload_path'=>'./all_file/quastion_paper/',
                'allowed_types'=>'pdf',
                'max_size'=>50000,
                'file_name'=> substr(md5(time()), 0, 28),
            );
            $this->load->library('upload',$conf);
            if (!$this->upload->do_upload("quas_upd")) {
               
               $enc_ins=array(
                'subject_name'=>$sub,
                'q_post_date'=>$p_date,
                'institute_id'=>$u_id,
                'year_id'=>$y_id,
                'stream_id'=>$str_id,
                'publish'=>$pu,
               );
               $this->Use_p_mod->upd_quastion_user($q_id ,$enc_ins);
               redirect(base_url()."profile#page1");
             } else {
                $fd=$this->upload->data();
               $fn=$fd['file_name'];
               $enc_ins=array(
                'subject_name'=>$sub,
                'q_post_date'=>$p_date,
                'institute_id'=>$u_id,
                'year_id'=>$y_id,
                'stream_id'=>$str_id,
                'publish'=>$pu,
                'q_file'=>$fn,
               );
               $this->Use_p_mod->upd_quastion_user($q_id ,$enc_ins);
               redirect(base_url()."profile#page1");
             }


        }
    }
    
?>