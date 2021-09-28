<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Admin extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('Admin_model');
            date_default_timezone_set("Asia/kolkata");


            $this->load->library('session');
            $admin_id=$this->session->userdata("aid");
            if(!isset($admin_id)){
                redirect(base_url()."admin-login");
            }
        }
        public function blank(){
            $this->load->view('admin_view/blank');
        }

        // lod & select year page
        public function ad_year(){
            $r=$this->Admin_model->se_year();
            $selar=array(
                "row"=>$r
            );
            $this->load->view('admin_view/add-year',$selar);
        }
        // add year
        public function ins_q_year(){
            $btn=$this->input->post('sub_tear');
            if (isset($btn)) {
                $yea=$this->input->post('q_yer');
                $yarr=array(
                    'year'=>$yea
                );
                $this->Admin_model->year_ins($yarr);
                redirect(base_url()."insert-year");
            }
        }
        // upd select year
        public function edi_year($ye_id){
            $q=$this->Admin_model->ediyear($ye_id);
            $sl_y=array(
                "row"=>$q
            );
            $this->load->view("admin_view/update-year",$sl_y);
        }
        // year update submeit
        public function yupd_sub(){
            $yi=$this->input->post('y_id');
            $yy=$this->input->post('q_yer');
            $u_y=array(
                'year'=>$yy
            );
            $this->Admin_model->upd_year($u_y,$yi);
            redirect(base_url()."insert-year");
        }



        // select stream
        public function s_stream(){
            $res=$this->Admin_model->sel_str();
            $sarr=array(
                "row"=>$res
            );
            $this->load->view('admin_view/stream',$sarr);
        }
        // add stream
        public function ins_strem(){
            $btn=$this->input->post('sub');
            if (isset($btn)) {
                $str=$this->input->post('q_stream');
                $stArr=array(
                    'stream_name'=>$str
                );
                $this->Admin_model->str_ins($stArr);
                redirect(base_url()."insert-stream");
            }
        }
        // edit select 
        public function edit_stream($str_id){
           $res=$this->Admin_model->editstr($str_id);
           $su=array(
               "roj"=>$res
           );
           $this->load->view('admin_view/stream_update',$su);

        }
        // update stream
        public function upd_str(){
            $st_id=$this->input->post('str_id');
            $str=$this->input->post('q_stream');
            echo $usarr=array(
                "stream_name"=>$str
            );
            $this->Admin_model->updstr($usarr,$st_id);
            redirect(base_url()."insert-stream");
        }
        // delete stream 
        public function str_del($s_id){
            $this->Admin_model->str_del($s_id);
            redirect(base_url()."insert-stream");
        }




        //institute select view
        public function inst_ins(){
            $rs=$this->Admin_model->insti_sel();
            //ins type
            $ins_type=$this->Admin_model->sel_inst_ty();
            $s_inst=array(
                'row'=>$rs,
                'sel_type'=>$ins_type
            );
            
            $this->load->view('admin_view/institute',$s_inst);
        }
        // institute insert
        public function insti_ins(){
            $ins_n=$this->input->post('institute');
            $type_id=$this->input->post('ins_type');
            $inst_a=array(
                "institute_name"=>$ins_n,
                "institute_type_id"=>$type_id
            );
            $this->Admin_model->institu_inser($inst_a);
            redirect(base_url()."all-institute");
        }
        //institute update select
        public function upd_insti($inst_id){
            $ro=$this->Admin_model->sele_insid($inst_id);
            $in_type=$this->Admin_model->sel_inst_ty();
            $in_idarr=array(
                "row"=>$ro,
                "ins_all"=>$in_type
            );
            $this->load->view('admin_view/institute-update',$in_idarr);
        }
        //institute update
        public function insti_upd(){
           $i_id= $this->input->post('insti_id');
           $i_ina= $this->input->post('institute');
           $ins_typ_id= $this->input->post('ins_typ');
           $i_data=array(
               'institute_name'=>$i_ina,
               'institute_type_id'=>$ins_typ_id
           );
           $this->Admin_model->upd_insti($i_data,$i_id);
           redirect(base_url()."all-institute");
        }
        //institute delete
        public function indti_dele($in_id){
            $this->Admin_model->institu_del($in_id);
            redirect(base_url()."all-institute");
        }



        //select type insti
        public function ins_type(){
            $z=$this->Admin_model->sel_inst_ty();
            $sel_ar=array(
                "t_data"=>$z
            );
            $this->load->view('admin_view/institute-type',$sel_ar);
        }
        //ins type insti
        public function insti_ty(){
            $it_n=$this->input->post('typ_insti');
            $uta=array(
                "institute_type"=>$it_n
            );
            $this->Admin_model->sel_instty($uta);
            redirect(base_url()."institute-type");
        }
        //select type insti id
        public function e_insti_type($id_t_in){
            $z=$this->Admin_model->sel_insti_type($id_t_in);
            $w=array(
                'srow'=>$z
            );
            $this->load->view('admin_view/institute-type-update',$w);
        }
        //update type insti
        public function in_ty_u(){
            $u_id=$this->input->post('id_typ_insti');
            $it_n=$this->input->post('typ_insti');
            $uta=array(
                "institute_type"=>$it_n
            );
            $this->Admin_model->sel_in_update($uta,$u_id);
            redirect(base_url()."institute-type");
        }
        




        // quastion select dropdown list view
        public function qu_ins(){
            $institu_data=$this->Admin_model->insti_sel();
            $stream=$this->Admin_model->sel_str();
            $year=$this->Admin_model->se_year();
            // $ins_type=$this->Admin_model->sel_inst_ty();
            $e_cap=array(
                'institu'=>$institu_data,
                'str'=>$stream,
                'year_all'=>$year
            );

            $this->load->view('admin_view/add-quastion',$e_cap);
        }
        // quastion submait
        public function ins_quartion(){
            $u_id=$this->input->post('univer_id');
            $st_id=$this->input->post('stream_id');
            $y_id=$this->input->post('year_id');
            $sunj_nam=$this->input->post('sub_name');
            $p_date=date('d-m-y h:i:s A');
            $pu="deactive";

            $adm_user_id=$this->session->userdata('aid');
            
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
                'admin_id'=>$adm_user_id
               );
               $this->Admin_model->ins_quastio($enc_ins);
               redirect(base_url()."all-quastions");
            }
            
        }
        //allquastion select
        public function select_all_quastion(){
            $datz=$this->Admin_model->select_auat();
            $w=array(
                "a_dataz"=>$datz
            );
            $this->load->view('admin_view/select-quastion',$w);
        }

        // aprove all quastion
        public function select_quastion_activ(){
            $datz=$this->Admin_model->select_auat();
            $w=array(
                "a_dataz"=>$datz
            );
            $this->load->view('admin_view/select-quastion-activ',$w);
        }
        
        // not aprove quastion
        public function select_quastion_deactiv(){
            $datz=$this->Admin_model->select_auat();
            $w=array(
                "a_dataz"=>$datz
            );
            $this->load->view('admin_view/select-quastion-deactiv',$w);
        }


        //post quastion
        public function publish_active(){
            $q_u_id=$this->input->post('qust_id');
            $publ=$this->input->post('publi');
            if (isset($publ)) {
                $pubData="active";
            } else {
                $pubData="deactive";
            }

            $w=array(
                'publish'=>$pubData
            );
            $this->Admin_model->upd_publish($w,$q_u_id);
            redirect(base_url()."all-quastions");
        }
        //delete quastion
        public function del_quastion($q_id){
            $this->Admin_model->quastion_del($q_id);
            redirect(base_url()."all-quastions");
        }



        //update quastion select
        public function sel_u_quastion($q_u_id){
            $institu_data=$this->Admin_model->insti_sel();
            $stream=$this->Admin_model->sel_str();
            $year=$this->Admin_model->se_year();
            $r=$this->Admin_model->sel_u_q($q_u_id);
            $data=array(
                'institu'=>$institu_data,
                'str'=>$stream,
                'year_all'=>$year,
                'se_date'=>$r
            );
            $this->load->view('admin_view/update-quas',$data);
        }




        //update quastion
        public function upDateQ(){
            $q_id=$this->input->post('a_u_id');
            $u_id=$this->input->post('univer_id');
            $st_id=$this->input->post('stream_id');
            $y_id=$this->input->post('year_id');
            $sunj_nam=$this->input->post('sub_name');
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
                    'subject_name'=>$sunj_nam,
                    'q_post_date'=>$p_date,
                    'institute_id'=>$u_id,
                    'year_id'=>$y_id,
                    'stream_id'=>$st_id,
                    'publish'=>$pu
                   );
                   $this->Admin_model->upd_quastion($enc_ins,$q_id);
                   redirect(base_url()."all-quastions");
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
                'publish'=>$pu
               );
               $this->Admin_model->upd_quastion($enc_ins,$q_id);
               redirect(base_url()."quastions");
            }
        }

        
        
        public function conta_li(){
            $a=$this->Admin_model->con_da();
            $w=array(
                'dAta'=>$a
            );
            $this->load->view('admin_view/contact-list',$w);
        }
        
        public function user_u(){
            $r=$this->Admin_model->sel_allUser();
            $w=array(
                'row'=>$r
            );
            $this->load->view('admin_view/all-user',$w);
        }


        








    }
    

?>