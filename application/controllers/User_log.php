<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    class User_log extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('User_logMod');
        $this->load->library('session');
    }
    public function view_log(){
        $user_id=$this->session->userdata("uid");
            if(isset($user_id)){
                redirect(base_url()."profile");
            }else{
                $this->load->view('user_view/log_use');
            }
        
    }
    public function l_vere(){
        $e=$this->input->post('u_email');
        $p=$this->input->post('u_password');
        $find_d=$this->User_logMod->ver_lo($e,$p);
        if ($find_d == false) {
            ?>
            <script>
            alert("invalid email & password");
            window.location = 'login';
            </script>
            <?php
        }
        
    }


    public function logout_us(){
        $this->session->unset_userdata("uid");
        redirect(base_url()."login");
    }


}
?>