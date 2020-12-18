<?php
class Ibarah extends CI_CONTROLLER{
    public function __construct(){
        parent::__construct();
        $this->load->model('Arab_model');
        $this->load->model('Admin_model');
        $this->load->model('Ibarah_model');
        if($this->session->userdata('status') != "login"){
            $this->session->set_flashdata('login', 'Maaf, Anda harus login terlebih dahulu');
			redirect(base_url("login"));
		}
    }

    public function awwal(){
        $id = $this->session->userdata('id');
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
        
        $tema = $this->Ibarah_model->tema();
        $kalimat = $this->Ibarah_model->kalimat();

        if(!empty($_GET['id'])){
            $i = 0;
            $data['mufrodat'] = [];
            foreach ($kalimat as $kalimat) {
                if(MD5($kalimat['tema']) == $_GET['id']){
                    $data['mufrodat'][$i] = $kalimat;
                    $i++;
                }
            }

            foreach ($tema as $materi) {
                if(MD5($materi['id']) == $_GET['id']){
                    $tema = $materi;
                }
            }
            
            $data['back'] = $tema['back'];
            $data['next'] = $tema['next'];

            $data['tema'] = "Ibarah Yaumiyah 1";
            $data['materi'] = $tema['tema_in'];
            $data['title'] = $tema['tema_in'];
            // $data['latihan'] = $this->latihan_mufrodat("latihan_ft_1", $id, MD5($data['materi']));
            $data['latihan'][0] = "";
            $data['latihan'][1] = "";
            $data['latihan'][2] = "";
            
            $this->load->view("templates/header-user", $data);
            $this->load->view("ibarah/menu-mufrodat", $data);
            $this->load->view("templates/footer-user", $data);

        } elseif(!empty($_GET['latihan'])) {
            if($_POST['data']){
                $urut = $_GET['i'];
                foreach ($kalimat as $i => $kalimat) {
                    if(in_array($kalimat['id'], $_POST['data'])){
                        if($urut == 1){
                            if($kalimat['status'] == "on"){
                                $data['mufrodat'][$i] = $kalimat;
                            }
                        } else {
                            $data['mufrodat'][$i] = $kalimat;
                        }
                    }
                }
            } else {
                redirect("ibarah/awwal");
            }

            // var_dump($tema);
            // exit();

            foreach ($tema as $materi) {
                if(MD5($materi['id']) == $_GET['latihan']){
                    $tema = $materi;
                }
            }
            
            $data['materi'] = $tema['tema_in'];
            $data['tema'] = "Level 1";
            $data['table'] = "latihan_ft_1";
            $data['redirect'] = "ibarah/awwal?id=".MD5($tema['id']);
            
            // view
                foreach ($data['mufrodat'] as $i => $kata) {
                    if($urut == 1){
                        $data['title'] = "Latihan 1";
                        $data['kata'][$i] = $kata['kata_indo'];
                    }
                    elseif($urut == 2){
                        $data['title'] = "Latihan 2";
                        $data['kata'][$i] = $kata['kata_arab'];
                    }
                }
                shuffle($data['kata']);
                shuffle($data['mufrodat']);
                $this->load->view("templates/header-user", $data);
                if($urut == 1){
                    if($_GET['latihan'] == MD5('Murojaah')){
                        $this->load->view("latihan/murojaahmufrodat-1", $data);
                    } else {
                        $this->load->view("ibarah/latihan-mufrodat-1", $data);
                    }
                } else if($urut == 2){
                    if($_GET['latihan'] == MD5('Murojaah')){
                        $this->load->view("latihan/murojaahmufrodat-3", $data);
                    } else {
                        $this->load->view("ibarah/latihan-mufrodat-2", $data);
                    }
                }
                $this->load->view("templates/footer-user", $data);
            // view

        } else {
            $data['title'] = 'Ibarah Yaumiyah';
            $data['tema'] = [];
    
            foreach ($tema as $i => $bab) {
                $data['tema'][$i] = $bab;
                // $data['tema'][$i]['kemajuan'] = $this->latihan_bab($bab['buku'], $bab['id'], $id);
                $data['tema'][$i]['kemajuan'] = 0;
            }
            
            // var_dump($data);
            // exit();
            $this->load->view("templates/header-user", $data);
            // $this->load->view("ft_1/index-mufrodat", $data);
            $this->load->view("ibarah/awwal/index-tema", $data);
            $this->load->view("templates/footer-user", $data);
        }
    }

    public function latihan_bab($buku, $bag, $id){
        $tema = $this->Ibarah_model->tema();
        $data['tema'] = [];
        $presentasi = 0;
        foreach ($tema as $i => $tema) {
            if($tema['bab'] == $bab){
                $data['tema'][$i] = $this->latihan("ibarah", $id, $buku, $bag, $tema['kata']);
                $presentasi += $data['tema'][$i]['mufrodat'];
            }
        }

        $kemajuan = $presentasi / COUNT($data['tema']);

        return $kemajuan;
    }

    public function latihan($table, $id, $latihan, $title){
        $data['dasar_1'] = 0;
        $latihan1 = $this->Admin_model->get_one($table, ["id_user" => $id, "materi" => $latihan, "latihan" => "Latihan 1"]);
        $latihan2 = $this->Admin_model->get_one($table, ["id_user" => $id, "materi" => $latihan, "latihan" => "Latihan 2"]);

        if($latihan1)
            $data['dasar_1'] ++;
        if($latihan2)
            $data['dasar_1'] ++;
        
        // tgl
            $tgl = [$latihan1['waktu'],$latihan2['waktu']];
            rsort($tgl);
            $data['tgl'][1] = $tgl[0];
        // tgl

        $datas['mufrodat'] = $data['dasar_1'] / 2 * 100;
        $datas['tgl'] = $tgl[0];
        $datas['title'] = $title;
        $datas['latihan'] = $latihan;
        
        return $datas;
    }
}