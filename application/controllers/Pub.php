<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    class Pub extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->helper('url','string');
            $this->load->model('Pub_model');
        }
        // view create account
        public function cr_use(){
            $this->load->view('user_view/user-ins');
        }
        // ins user account
        public function ins_u_data(){

                $cap=$this->input->post('g-recaptcha-response');
                if (isset($cap)) {
                    $sKey="6LdjPnUaAAAAAAyce3EithUGNmj5ojHVeohLzQYp";
                    $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$sKey.'&response='.$cap);
                    $rsp = json_decode($response);
                    if ($rsp->success) {
            
                        $u_n=$this->input->post('u_name');
                        $u_e=$this->input->post('e_email');
                        $u_gen=$this->input->post('u_gen');
                        $u_ag=$this->input->post('u_agree');


                        $srarus='deactive';
                        $st='deactivate';
                        $u_ot=mt_rand(100000,999999);

                        $u_pass=$this->input->post('u_password');
                        $pasw = password_hash($u_pass, PASSWORD_BCRYPT);



                        $config = Array( 
                            'protocol' => 'smtp', 
                            'smtp_host' => 'ssl://smtp.googlemail.com', 
                            'smtp_port' => 465, 
                            'smtp_user' => 'examspaper.official@gmail.com', 
                            'smtp_pass' => 'Ep@79201',
                            'newlin'  => "\r\n",
                            'charset' => 'utf-8',
                            'smtp_timeout' =>'7',
                        );
                        $this->load->library('email', $config); 
                        $this->email->set_newline("\r\n");
                        $this->email->from('examspaper.official@gmail.com', 'examspaper.in');
                        $this->email->to($u_e);
                        $this->email->subject($u_ot.' Is your examspaper OTP code '); 
                        $this->email->message( "Hi ".$u_n."\n".'You can enter this code to verification to examspaper:-'.$u_ot);
                        if (!$this->email->send()) {
                        show_error($this->email->print_debugger()); }
                        else {
                            $w=array(
                                'u_name'=>$u_n,
                                'u_email'=>$u_e,
                                'u_gender'=>$u_gen,
                                'user_agree'=>$u_ag,
                                'u_password'=>$pasw,
                                'u_token'=>$u_ot,
                                'u_ststus'=>$st,
                            );
                            $ins_us=$this->Pub_model->ins_useacc($w,$u_e);
                            if ($ins_us == TRUE) {
                                $da=$this->Pub_model->user_em($u_e);
                                $w=array(
                                    'data'=>$da
                                );
                                $this->load->view('user_view/ver',$w);
                                
                            } else {
                                ?>
                                <script>
                                alert("email already exist...");
                                window.location = 'create-account';
                                </script>
                                <?php
                                
                            }
                            
                            
                        }
                    }
                }
        }
        // user otp
        public function otp_v(){
           $uid=$this->input->post('u_id');
           $o_num=$this->input->post('u_num');
           $ac='activate';
           $w=array(
               'u_ststus'=>$ac
           );
           $this->Pub_model->opt_upd($uid,$o_num,$w);
           redirect(base_url().'login');
        }
        // user forget email
        public function f_u_email(){
            $u_ot=mt_rand(100000,999999);
            $ue=$this->input->post('u_email');
            $act='deactivate';

                        $config = Array( 
                            'protocol' => 'smtp', 
                            'smtp_host' => 'ssl://smtp.googlemail.com', 
                            'smtp_port' => 465, 
                            'smtp_user' => 'examspaper.official@gmail.com', 
                            'smtp_pass' => 'Ep@79201',
                            'newlin'  => "\r\n",
                            'charset' => 'utf-8',
                            'smtp_timeout' =>'7',
                        );
                        $this->load->library('email', $config); 
                        $this->email->set_newline("\r\n");
                        $this->email->from('examspaper.official@gmail.com', 'examspaper.in');
                        $this->email->to($ue);
                        $this->email->subject($u_ot.' Is your examspaper OTP code '); 
                        $this->email->message('You can enter this code to verification to examspaper:-'.$u_ot);
                        if (!$this->email->send()) {
                        show_error($this->email->print_debugger()); }
                        else {

            
            $o=array(
                'u_token'=>$u_ot,
                'u_ststus'=>$act
            );
            $find_d=$this->Pub_model->f_user_email($ue,$o);
            if ($find_d == TRUE) {
                $ro=$this->Pub_model->f_u_data($ue);
                $w=array(
                    'data'=>$ro,

                );
                
            $this->load->view('user_view/ver-otp',$w);
                
            } else {
                ?>
                <script>
                alert("email not exist...");
                window.location = 'forgot-account';
                </script>
                <?php
            }
        }

        }
        // verifi otp
        public function m_otp(){
            $u_id=$this->input->post('u_id');
            $u_o=$this->input->post('u_num');
            $ac='activate';
            $w=array(
                'u_ststus'=>$ac
            );
            $find_d=$this->Pub_model->var_otp($u_id,$u_o,$w);

            if ($find_d == TRUE) {
                $ro=$this->Pub_model->f_p_data($u_id);
                $z=array(
                    'data'=>$ro,

                );
                $this->load->view('user_view/ne-password',$z);
                
            } else {
                ?>
                <script>
                alert("invalid otp");
                window.location = 'forgot-account';
                </script>
                <?php
            }
            
        }

        // update password
        public function up_pass(){
            $u_e=$this->input->post('u_id');
            $u_u_pass=$this->input->post('new_password');
            $pasw = password_hash($u_u_pass, PASSWORD_BCRYPT);
            $w=array(
                'u_password'=>$pasw
            );
            $this->Pub_model->update_p($w,$u_e);
            redirect(base_url().'login');

        }



        // not found page
        public function page_err(){
            $this->load->view('errors/html/error_404');
        }
        // view forgot email
        public function em_for(){
            $this->load->view('user_view/forgot-email');
        }






    }
    

?>