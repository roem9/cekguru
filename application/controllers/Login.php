<?php
    class Login extends CI_CONTROLLER{
        public function __construct(){
            parent::__construct();
            $this->load->model('Admin_model');
            $this->load->helper('form');
        }

        public function index(){
            if($_GET){
                $this->cek_login();
            } else if($_POST){
                $this->cek_login_user();
            } else {
                $data['header'] = 'Login User';
                $data['title'] = 'Login User';
                $this->load->view("templates/header-login", $data);
                $this->load->view("login/login-user");
                $this->load->view("templates/footer");
            }
        }

        public function cek_login_user(){
            $username = $this->input->post("username");
            $password = md5($this->input->post("password", TRUE));
            $cek = $this->Admin_model->get_one("civitas", ["username" => $username, "password" => $password]);
            
            if(!$cek){
                $cek = $this->input->post("password", TRUE);
                $password = substr($cek, 4, 4)."-".substr($cek, 2, 2)."-".substr($cek, 0, 2);
                $cek = $this->Admin_model->get_one("civitas", ["username" => $username, "tgl_lahir" => $password]);
            }

            if($cek){
            $data_session = array(
                    'id' => $cek['id_civitas'],
                    'status' => "login"
                );
                $this->session->set_userdata($data_session);
                redirect(base_url('kelas/'));
            }else{
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><i class="fa fa-times-circle text-danger mr-1"></i>Maaf, kombinasi username dan password salah<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                $data['header'] = 'Login User';
                $data['title'] = 'Login User';
                $this->load->view("templates/header-login", $data);
                $this->load->view("login/login-user");
                $this->load->view("templates/footer");
            }
        }

        function logout_user(){
            $this->session->sess_destroy();
            redirect(base_url("login"));
        }
    }