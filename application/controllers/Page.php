<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    class Page extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('Page_mod');
            date_default_timezone_set("Asia/kolkata");



            $this->load->library('session');

        }
        // home page data
        public function i_page(){
            $a=$this->Page_mod->main_p();
            $b=$this->Page_mod->sele_all_ins();
            $w=array(
                't_ins'=>$a,
                'data'=>$b
            );
            $this->load->view('home',$w);
        }


        //about page
        public function abu(){
            $this->load->view('abou');
        }
        //contact page
        public function con(){
            $this->load->view('cont');
        }
        public function contact_sub(){
            $btn=$this->input->post('consub');

             if (isset($btn)) {

                $cap=$this->input->post('g-recaptcha-response');
                if (isset($cap)) {
                    $sKey="6LdjPnUaAAAAAAyce3EithUGNmj5ojHVeohLzQYp";
                    $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$sKey.'&response='.$cap);
                    $rsp = json_decode($response);
                    if ($rsp->success) {
                        $n=$this->input->post('name');
                        $e=$this->input->post('email');
                        $t=$this->input->post('title');
                        $s=$this->input->post('subject');
                        $t_d=date('d-m-YY h:i:s A');
                        $c_arr=array(
                            'name'=>$n,
                            'email'=>$e,
                            'title'=>$t,
                            'subject'=>$s,
                            'date_time'=>$t_d
                        );
                        $this->Page_mod->contact_add($c_arr);
                        
                    }else{
                        echo '<script>alert("Please check i am not a robot")</script>';
                    } 
                }
            }




           
        }


        //institute page
        public function ins_ti_select($ins_id){
            //$ins_id=$this->input->post('institute');
            $y_s=$this->Page_mod->year_sel();

            $fin_str=$this->Page_mod->ins_stream_id($ins_id);
            //$ste_cal=$this->Page_mod->ins_stream_id_cal($ins_id);

            $ins_na=$this->Page_mod->ins_name($ins_id);

            $stream=$this->Page_mod->streamselect();
            $w= array(
                'ye_a'=>$y_s,
                'str'=>$fin_str,
                //'cal_y'=>$ste_cal,
                'head'=>$ins_na,
                'institute_id'=>$ins_id,
                'str_eam'=>$stream
            );
            $this->load->view('school',$w);
        }


        //quastion page
        public function a_quastion($inst_id,$y_id,$stream_id){
            $n=$this->Page_mod->ins_ins($inst_id);
            $p=$this->Page_mod->sel_str($stream_id);
            $q=$this->Page_mod->year_page($y_id);
            $m=$this->Page_mod->sele_quastion($inst_id,$y_id,$stream_id);
            
            $w=array(
                'quasti'=>$m,
                'insNa'=>$n,
                'stre'=>$p,
                'ye'=>$q
            );


            $this->load->view('all-quastion',$w);
        }


        public function tram(){
            $this->load->view('policy');
        }
        public function cooki(){
            $this->load->view('co_policy');
        }




    }
?>