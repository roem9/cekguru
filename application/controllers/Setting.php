<?php
class Setting extends CI_CONTROLLER{
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
        $data['title'] = "Pengaturan";
        $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);
        
        // kelas & program
            $data['kelas'] = [];
            $data['program'] = [];
            $kelas = $this->Admin_model->get_all("kelas_user", ["id_user" => $id]);
            foreach ($kelas as $i => $kelas) {
                $data['kelas'][$i] = $this->Admin_model->get_one("kelas", ["id_kelas" => $kelas['id_kelas']]);
                $data['program'][$i] = $data['kelas'][$i]['program'];
            }
        // kelas & program

        $this->load->view("templates/header-user", $data);
        $this->load->view("profil/setting", $data);
        $this->load->view("templates/footer-user", $data);
    }

    // edit
        public function edit_password(){
            $id = $this->input->post("id");
            $data = [
                "password" => MD5($this->input->post("password", TRUE))
            ];

            $this->Admin_model->edit_data("user", ["MD5(id_user)" => $id], $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fa fa-check-circle mr-1 text-success"></i>Berhasil mengubah password Anda<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect($_SERVER['HTTP_REFERER']);
        }
    // edit
}