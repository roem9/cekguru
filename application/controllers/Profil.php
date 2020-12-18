<?php
class Profil extends CI_CONTROLLER{
    public function __construct(){
        parent::__construct();
        $this->load->model('Arab_model');
        $this->load->model('Admin_model');
        if($this->session->userdata('status') != "login"){
            $this->session->set_flashdata('login', 'Maaf, Anda harus login terlebih dahulu');
			redirect(base_url("login"));
		}
    }

    public function index(){
        $id = $this->session->userdata("id");
        $data['title'] = "Profil";
        $data['user'] = $this->Admin_model->get_one("civitas", ["id_civitas" => $id]);

        // var_dump($data['user']);
        // exit();

        $this->load->view("templates/header-user", $data);
        $this->load->view("profil/index", $data);
        $this->load->view("templates/footer-user", $data);
    }

    // edit
        public function edit_user_by_id(){
            $id = $this->input->post("id_user");
            $data = [
                "nama" => $this->input->post("nama", TRUE),
                "jk" => $this->input->post("jk", TRUE),
                "tgl_lahir" => $this->input->post("tgl_lahir", TRUE)
            ];
            $this->Admin_model->edit_data("user", ["id_user" => $id], $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Berhasil merubah profil Anda<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect($_SERVER['HTTP_REFERER']);
        }

        public function edit_password(){
            $id = $this->input->post("id");
            $data = [
                "password" => MD5($this->input->post("password", TRUE))
            ];

            $this->Admin_model->edit_data("user", ["MD5(id_user)" => $id], $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fa fa-check-circle mr-1 text-success"></i>Berhasil mengubah data Login Anda<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect($_SERVER['HTTP_REFERER']);
        }
        
        // public function edit_password(){
        //     $id = $this->input->post("id");
        //     $username = $this->input->post("username");
        //     $cek = $this->Admin_model->get_one("user", ["username" => $username]);
        //     $data = [
        //         "password" => MD5($this->input->post("password", TRUE)),
        //         "username" => $username
        //     ];

        //     if($cek){
        //         if(MD5($cek['id_user']) == $id){
        //             $this->Admin_model->edit_data("user", ["MD5(id_user)" => $id], $data);
        //             $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fa fa-check-circle mr-1 text-success"></i>Berhasil mengubah data Login Anda<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        //         } else {
        //             $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><i class="fa fa-times-circle mr-1 text-danger"></i>Gagal mengubah data Login Anda, username Anda telah digunakan<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        //         }
        //     } else {
        //         $this->Admin_model->edit_data("user", ["MD5(id_user)" => $id], $data);
        //         $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fa fa-check-circle mr-1 text-success"></i>Berhasil mengubah data Login Anda<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        //     }
        //     redirect($_SERVER['HTTP_REFERER']);
        // }
    // edit

    public function get_user_by_id(){
        $id = $this->input->post("id");
        $data = $this->Arab_model->get_user_by_id($id);
        echo json_encode($data);
    }

    public function get_kata_user_by_id_user(){
        $id = $this->input->post("id");
        $data = $this->Arab_model->get_kata_user_by_id_user($id);
        foreach ($data as $i => $kata) {
            if($kata['latihan'] == 2){
                $data[$i]['tema'] = $kata['tema'];
                $data[$i]['kata'] = $kata['kata'];
            }
        }
        echo json_encode($data);
    }
}