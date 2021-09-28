<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Admin_log extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model('Log_mod');
            $this->load->helper("url");
            $this->load->library('session');
        }
        public function log_page(){
            $this->load->view('admin_view/log');
        }

        public function log_act(){
            $btn=$this->input->post("log");
            if (isset($btn)) {

                $cap=$this->input->post('g-recaptcha-response');
                if (isset($cap)) {
                    $sKey="6LdjPnUaAAAAAAyce3EithUGNmj5ojHVeohLzQYp";
                    $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$sKey.'&response='.$cap);
                    $rsp = json_decode($response);


                   


                    if ($rsp->success) {
                        $n=$this->input->post('ad_email');
                        $p=$this->input->post('ad_password');
                        $find_d=$this->Log_mod->ses_ad($n,$p);
                        if ($find_d == false) {
                            ?>
                            <script>
                            alert("invalid email & password");
                            window.location = 'admin-login';
                            </script>
                            <?php
                        }
                    }
                    else {
                        ?>
                            <script>
                            alert("Please check recaptcha !");
                            window.location = 'admin-login';
                            </script>
                            <?php
                    }
                    
                }else {
                    ?>
                    <script>
                    alert("Please check recaptcha !");
                    window.location = 'admin-login';
                    </script>
                    <?php
                }
            }
            
        }
        
        
        public function logout_ad(){
            $this->session->unset_userdata("aid");
            redirect(base_url()."admin-login");
        }


    }

?>