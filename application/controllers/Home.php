<?php
class Home extends CI_CONTROLLER{
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('status') != "login" && !empty($this->session->userdata('id'))){
            $this->session->set_flashdata('login', 'Maaf, Anda harus login terlebih dahulu');
            redirect(base_url("login"));
		}
    }

    public function index(){
        redirect(base_url("login"));
    }
}