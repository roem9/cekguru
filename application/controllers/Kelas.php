<?php
class Kelas extends CI_CONTROLLER{
    public function __construct(){
        parent::__construct();
        $this->load->model('Arab_model');
        $this->load->model('Admin_model');
        if($this->session->userdata('status') != "login"){
            $this->session->set_flashdata('login', 'Maaf, Anda harus login terlebih dahulu');
            redirect(base_url("login"));
        }
    }

    public function input(){
        $peserta = $this->Admin_model->get_all("kelas_user", ["id_kelas" => "1", "id_user" => "11"]);
        foreach ($peserta as $peserta) {
            for ($i=1; $i < 25; $i++) { 
                $pertemuan = "Pertemuan ".$i;
                $data = [
                    "id_kelas" => 1,
                    "id_user" => $peserta['id_user'],
                    "pertemuan" => $pertemuan,
                    "latihan" => "Harian",
                    "nilai" => 100,
                ];

                $this->Admin_model->add_data("latihan_hifdzi_1", $data);
            }
            
            for ($i=1; $i < 25; $i++) { 
                $pertemuan = "Pertemuan ".$i;
                $data = [
                    "id_kelas" => 1,
                    "id_user" => $peserta['id_user'],
                    "pertemuan" => $pertemuan,
                    "latihan" => "Hafalan",
                    "nilai" => 100,
                ];

                $this->Admin_model->add_data("latihan_hifdzi_1", $data);
            }
            
            for ($i=1; $i < 25; $i++) { 
                $pertemuan = "Pertemuan ".$i;
                $data = [
                    "id_kelas" => 1,
                    "id_user" => $peserta['id_user'],
                    "pertemuan" => $pertemuan,
                    "latihan" => "Tambahan",
                    "nilai" => 100,
                ];

                $this->Admin_model->add_data("latihan_hifdzi_1", $data);
            }
            
            for ($i=1; $i < 5; $i++) { 
                $pertemuan = "Ujian Pekan ".$i;
                $data = [
                    "id_kelas" => 1,
                    "id_user" => $peserta['id_user'],
                    "pertemuan" => $pertemuan,
                    "latihan" => "Form",
                    "nilai" => 100,
                ];

                $this->Admin_model->add_data("latihan_hifdzi_1", $data);
            }
            
            for ($i=1; $i < 5; $i++) { 
                $pertemuan = "Ujian Pekan ".$i;
                $data = [
                    "id_kelas" => 1,
                    "id_user" => $peserta['id_user'],
                    "pertemuan" => $pertemuan,
                    "latihan" => "Input",
                    "nilai" => 100,
                ];

                $this->Admin_model->add_data("latihan_hifdzi_1", $data);
            }

            
            $data = [
                "id_kelas" => 1,
                "id_user" => $peserta['id_user'],
                "pertemuan" => "Ujian Pertengahan",
                "latihan" => "Input",
                "nilai" => 100,
            ];

            $this->Admin_model->add_data("latihan_hifdzi_1", $data);
            
            $data = [
                "id_kelas" => 1,
                "id_user" => $peserta['id_user'],
                "pertemuan" => "Ujian Akhir",
                "latihan" => "Form",
                "nilai" => 100,
            ];

            $this->Admin_model->add_data("latihan_hifdzi_1", $data);
            
            $data = [
                "id_kelas" => 1,
                "id_user" => $peserta['id_user'],
                "pertemuan" => "Ujian Akhir",
                "latihan" => "Input",
                "nilai" => 100,
            ];

            $this->Admin_model->add_data("latihan_hifdzi_1", $data);
        }

        echo "sukses";
    }

    public function index(){
        $id = $this->session->userdata("id");
        $data['title'] = "List Kelas";
        
        // kelas & program
            $data['kelas'] = [];
            $kelas = $this->Admin_model->get_all("kelas", ["id_civitas" => $id]);
            foreach ($kelas as $i => $kelas) {
                $data['kelas'][$i] = $kelas;
                $data['kelas'][$i]['peserta'] = COUNT($this->Admin_model->get_all("kelas_user", ["id_kelas" => $kelas['id_kelas']]));
            }
        // kelas & program

        $this->load->view("templates/header-user", $data);
        $this->load->view("kelas/index", $data);
        $this->load->view("templates/footer-user", $data);
    }

    public function ajax_list(){
        $id = $this->session->userdata("id");
        $data = [];
        $kelas = $this->Admin_model->get_all("kelas", ["id_civitas" => $id]);
        foreach ($kelas as $i => $kelas) {
            $data['kelas'][$i] = $kelas;
            $data['kelas'][$i]['peserta'] = COUNT($this->Admin_model->get_all("kelas_user", ["id_kelas" => $kelas['id_kelas']]));
            $data['kelas'][$i]['pertemuan'] = COUNT($this->Admin_model->get_all("materi_kelas", ["id_kelas" => $kelas['id_kelas']]));
            $data['kelas'][$i]['link'] = md5($kelas['id_kelas']);
        }

        echo json_encode($data);
    }
    
    public function ajax_one(){
        $id_kelas = $this->input->post("id_kelas");
        $data = [];
        // $kelas = $this->Admin_model->get_one("kelas", ["MD5(id_kelas)" => $id_kelas]);
        // foreach ($kelas as $i => $kelas) {
            $data['kelas'] = $this->Admin_model->get_one("kelas", ["MD5(id_kelas)" => $id_kelas]);
            $data['kelas']['peserta'] = COUNT($this->Admin_model->get_all("kelas_user", ["MD5(id_kelas)" => $id_kelas]));
            $data['kelas']['pertemuan'] = $this->Admin_model->get_all("materi_kelas", ["MD5(id_kelas)" => $id_kelas], "id");
            $data['kelas']['link'] = $id_kelas;
            $data['faq'] = $this->Admin_model->get_all("faq", ["md5(id_kelas)" => $id_kelas]);

            $peserta = $this->Admin_model->get_all("kelas_user", ["md5(id_kelas)" => $id_kelas]);
            foreach ($peserta as $i => $peserta) {
                $detail = $this->Admin_model->get_one("user", ["id_user" => $peserta['id_user']]);
                $data['peserta'][$i] = $detail;
            }
        // }

        echo json_encode($data);
    }

    public function detail($id_kelas){
        $data['kelas'] = $this->Admin_model->get_one("kelas", ["MD5(id_kelas)" => $id_kelas]);
        $data['title'] = $data['kelas']['nama_kelas'];
        $data['link'] = $id_kelas;

        $this->load->view("templates/header-user", $data);
        $this->load->view("kelas/detail", $data);
        $this->load->view("templates/footer-user", $data);
    }

    public function ajax_detail(){
        $id_kelas = $this->input->post('id_kelas');
        $peserta = $this->Admin_model->get_all("kelas_user", ["md5(id_kelas)" => $id_kelas]);
        foreach ($peserta as $i => $peserta) {
            $data['peserta'][$i] = $this->Admin_model->get_one("user", ["id_user" => $peserta['id_user']]);
        }

        echo json_encode($data);
    }

    public function ajax_pertemuan(){
        $id_kelas = $this->input->post("id_kelas");
        $pertemuan = $this->input->post("pertemuan");

        $data['absen'] = [];

        $kelas = $this->Admin_model->get_one("kelas", ["md5(id_kelas)" => $id_kelas]);
        $listpeserta = $this->Admin_model->get_all("kelas_user", ["md5(id_kelas)" => $id_kelas]);
        foreach ($listpeserta as $i => $peserta) {
            $hadir = $this->Admin_model->get_one("presensi_peserta", ["md5(id_kelas)" => $id_kelas, "id_user" => $peserta['id_user'], "pertemuan" => $pertemuan]);
            if(!isset($hadir)){
                $detail = $this->Admin_model->get_one("user", ["id_user" => $peserta['id_user']]);
                $data['absen'][$i] = $detail;
                $data['absen'][$i]['pesan'] = "https://wa.me/62".substr($detail['no_hp'], 1)."?text=Anda%20belum%20mengisi%20kehadiran%20di%20kelas%20".str_replace("#", "%23", str_replace(" ", "%20", $kelas['nama_kelas']))."%20".str_replace(" ", "%20", $pertemuan)."%2C%20silahkan%20isi%20kehadiran%20sebelum%20jam%2021%3A00%20melalui%20member%20area%20pada%20link%20".base_url();
            }
        }

        usort($data['absen'], function($a, $b) {
            return $a['nama'] <=> $b['nama'];
        });

        $data['latihan'] = [];
        $i = 0;
        foreach ($listpeserta as $peserta) {
            $harian = $this->Admin_model->get_one("latihan_hifdzi_1", ["md5(id_kelas)" => $id_kelas, "id_user" => $peserta['id_user'], "pertemuan" => $pertemuan, "latihan" => "Harian", "nilai !=" => 0]);
            $hafalan = $this->Admin_model->get_one("latihan_hifdzi_1", ["md5(id_kelas)" => $id_kelas, "id_user" => $peserta['id_user'], "pertemuan" => $pertemuan, "latihan" => "Hafalan", "nilai !=" => 0]);
            $tambahan = $this->Admin_model->get_one("latihan_hifdzi_1", ["md5(id_kelas)" => $id_kelas, "id_user" => $peserta['id_user'], "pertemuan" => $pertemuan, "latihan" => "Tambahan", "nilai !=" => 0]);

            if(!isset($harian) || !isset($hafalan) || !isset($tambahan)){
                $detail = $this->Admin_model->get_one("user", ["id_user" => $peserta['id_user']]);
                $data['latihan'][$i] = $detail;
                
                $pesan = "";

                if(!isset($harian)){
                    $pesan .= "-%20latihan%20harian%0A";
                }

                if(!isset($hafalan)){
                    $pesan .= "-%20latihan%20hafalan%0A";
                }
                
                if(!isset($tambahan)){
                    $pesan .= "-%20latihan%20tambahan%0A";
                }

                $data['latihan'][$i]['pesan'] = "https://wa.me/62".substr($detail['no_hp'], 1)."?text=Anda%20belum%20mengerjakan%20latihan%20di%20kelas%20".str_replace("#", "%23", str_replace(" ", "%20", $kelas['nama_kelas']))."%20".str_replace(" ", "%20", $pertemuan).".%20latihan%20yang%20belum%20Anda%20kerjakan%20adalah%20sebagai%20berikut%20%3A%0A".$pesan;

                $i++;
            }
        }

        echo json_encode($data);
    }

    // edit 
        public function list_pertemuan(){
            $id = $this->input->post("id_kelas");
            $pert = $this->input->post("pertemuan");
            
            // delete list
                $this->Admin_model->delete_data("materi_kelas", ["id_kelas" => $id]);
            // delete list

            if($pert){
                foreach ($pert as $pert) {
                    $data = [
                        "materi" => $pert,
                        "id_kelas" => $id
                    ];

                    $this->Admin_model->add_data("materi_kelas", $data);
                }
            }

            echo json_encode("1");
        }
        
        public function on_absen(){
            $data = [
                "id_kelas" => $this->input->post("id_kelas"),
                "materi" => $this->input->post("pertemuan"),
            ];
            $this->Admin_model->edit_data("materi_kelas", $data, ["absen" => 1]);
            echo json_encode($data['id_kelas']);
        }
        
        public function off_absen(){
            $data = [
                "id_kelas" => $this->input->post("id_kelas"),
                "materi" => $this->input->post("pertemuan"),
            ];
            $this->Admin_model->edit_data("materi_kelas", $data, ["absen" => 0]);
            echo json_encode($data['id_kelas']);
        }
    // edit 

    // get 
        public function get_detail_kelas(){
            $id = $this->input->post("id");
            $data = $this->Admin_model->get_one("kelas", ["id_kelas" => $id]);
            
            // $data['pertemuan'] = $this->Admin_model->get_all("materi_kelas", ["id_kelas" => $id]);
            $data['jumpeserta'] = COUNT($this->Admin_model->get_all("kelas_user", ["id_kelas" => $id]));
            $per = $this->Admin_model->get_all("materi_kelas", ["id_kelas" => $id]);
            foreach ($per as $i => $per) {
                $data['pertemuan'][$i] = $per;
                $data['pertemuan'][$i]['hadir'] = $this->Admin_model->get_all("presensi_peserta", ["id_kelas" => $id, "pertemuan" => $per['materi']]);
            }

            $data['absen'] = $this->Admin_model->get_all("materi_kelas", ["id_kelas" => $id, "absen" => 0]);
            $peserta = $this->Admin_model->get_all("kelas_user", ["id_kelas" => $id]);
            foreach ($peserta as $i => $peserta) {
                $data['peserta'][$i] = $this->Admin_model->get_one("user", ["id_user" => $peserta['id_user']]);
            }

            $data['ujian'] = $this->Admin_model->get_all("ujian_kelas", ["id_kelas" => $id]);

            echo json_encode($data);
        }

        
        public function get_detail_peserta(){
            $id_user = $this->input->post("id");
            $id = $this->input->post("id_kelas");
            $kelas = $this->Admin_model->get_one("kelas", ["id_kelas" => $id]);
            $data['peserta'] = $this->Admin_model->get_one("user", ["id_user" => $id_user]);
            
            $data['pertemuan'] = $this->Admin_model->get_all("materi_kelas", ["id_kelas" => $id], "id");

            // nilai tugas harian 
                foreach ($data['pertemuan'] as $i => $pertemuan) {
                    $data['nilai'][$i]['pertemuan'] = $pertemuan['materi'];
                    $nilai = $this->Admin_model->get_one("latihan_hifdzi_1", ["id_kelas" => $id, "id_user" => $id_user, "pertemuan" => $pertemuan['materi'], "latihan" => "Harian"]);
                    if($nilai) {
                        $data['nilai'][$i]['nilai'] = $nilai['nilai'];
                    } else {
                        $data['nilai'][$i]['nilai'] = 0;
                    }
                }
            // nilai tugas harian 
            
            // nilai tugas tambahan
                foreach ($data['pertemuan'] as $i => $pertemuan) {
                    $data['nilai_tambahan'][$i]['pertemuan'] = $pertemuan['materi'];
                    $nilai = $this->Admin_model->get_one("latihan_hifdzi_1", ["id_kelas" => $id, "id_user" => $id_user, "pertemuan" => $pertemuan['materi'], "latihan" => "Tambahan"]);
                    if($nilai) {
                        $data['nilai_tambahan'][$i]['nilai'] = $nilai['nilai'];
                    } else {
                        $data['nilai_tambahan'][$i]['nilai'] = 0;
                    }
                }
            // nilai tugas tambahan
            
            // nilai tugas hafalan
                foreach ($data['pertemuan'] as $i => $pertemuan) {
                    $data['nilai_hafalan'][$i]['pertemuan'] = $pertemuan['materi'];
                    $nilai = $this->Admin_model->get_one("latihan_hifdzi_1", ["id_kelas" => $id, "id_user" => $id_user, "pertemuan" => $pertemuan['materi'], "latihan" => "Hafalan"]);
                    if($nilai) {
                        $data['nilai_hafalan'][$i]['nilai'] = $nilai['nilai'];
                    } else {
                        $data['nilai_hafalan'][$i]['nilai'] = 0;
                    }
                }
            // nilai tugas hafalan

            // nilai ujian
                $nilai = $this->Admin_model->get_one("latihan_hifdzi_1", ["id_kelas" => $id, "id_user" => $id_user, "pertemuan" => "Ujian Pekan 1", "latihan" => "Form"]);
                if($nilai){$data['ujian'][0] = $nilai['nilai'];} else {$data['ujian'][0] = 0;};
                $nilai = $this->Admin_model->get_one("latihan_hifdzi_1", ["id_kelas" => $id, "id_user" => $id_user, "pertemuan" => "Ujian Pekan 1", "latihan" => "Input"]);
                if($nilai){$data['ujian'][1] = $nilai['nilai'];} else {$data['ujian'][1] = 0;};
                $nilai = $this->Admin_model->get_one("latihan_hifdzi_1", ["id_kelas" => $id, "id_user" => $id_user, "pertemuan" => "Ujian Pekan 2", "latihan" => "Form"]);
                if($nilai){$data['ujian'][2] = $nilai['nilai'];} else {$data['ujian'][2] = 0;};
                $nilai = $this->Admin_model->get_one("latihan_hifdzi_1", ["id_kelas" => $id, "id_user" => $id_user, "pertemuan" => "Ujian Pekan 2", "latihan" => "Input"]);
                if($nilai){$data['ujian'][3] = $nilai['nilai'];} else {$data['ujian'][3] = 0;};
                $nilai = $this->Admin_model->get_one("latihan_hifdzi_1", ["id_kelas" => $id, "id_user" => $id_user, "pertemuan" => "Ujian Pertengahan", "latihan" => "Input"]);
                if($nilai){$data['ujian'][4] = $nilai['nilai'];} else {$data['ujian'][4] = 0;};
                $nilai = $this->Admin_model->get_one("latihan_hifdzi_1", ["id_kelas" => $id, "id_user" => $id_user, "pertemuan" => "Ujian Pekan 3", "latihan" => "Form"]);
                if($nilai){$data['ujian'][5] = $nilai['nilai'];} else {$data['ujian'][5] = 0;};
                $nilai = $this->Admin_model->get_one("latihan_hifdzi_1", ["id_kelas" => $id, "id_user" => $id_user, "pertemuan" => "Ujian Pekan 3", "latihan" => "Input"]);
                if($nilai){$data['ujian'][6] = $nilai['nilai'];} else {$data['ujian'][6] = 0;};
                $nilai = $this->Admin_model->get_one("latihan_hifdzi_1", ["id_kelas" => $id, "id_user" => $id_user, "pertemuan" => "Ujian Pekan 4", "latihan" => "Form"]);
                if($nilai){$data['ujian'][7] = $nilai['nilai'];} else {$data['ujian'][7] = 0;};
                $nilai = $this->Admin_model->get_one("latihan_hifdzi_1", ["id_kelas" => $id, "id_user" => $id_user, "pertemuan" => "Ujian Pekan 4", "latihan" => "Input"]);
                if($nilai){$data['ujian'][8] = $nilai['nilai'];} else {$data['ujian'][8] = 0;};
                $nilai = $this->Admin_model->get_one("latihan_hifdzi_1", ["id_kelas" => $id, "id_user" => $id_user, "pertemuan" => "Ujian Akhir", "latihan" => "Form"]);
                if($nilai){$data['ujian'][9] = $nilai['nilai'];} else {$data['ujian'][9] = 0;};
                $nilai = $this->Admin_model->get_one("latihan_hifdzi_1", ["id_kelas" => $id, "id_user" => $id_user, "pertemuan" => "Ujian Akhir", "latihan" => "Input"]);
                if($nilai){$data['ujian'][10] = $nilai['nilai'];} else {$data['ujian'][10] = 0;};
            // nilai ujian

            $data['absen'] = $this->Admin_model->get_all("presensi_peserta", ["id_kelas" => $id, "id_user" => $id_user]);
            // $peserta = $this->Admin_model->get_all("kelas_user", ["id_kelas" => $id]);
            // foreach ($peserta as $i => $peserta) {
            //     $data['peserta'][$i] = $this->Admin_model->get_one("user", ["id_user" => $peserta['id_user']]);
            // }
            echo json_encode($data);
        }

        public function get_nilai(){
            $id_kelas = $this->input->post("id_kelas");
            $latihan = $this->input->post("latihan");
            $pertemuan = $this->input->post("pertemuan");

            $peserta = $this->Admin_model->get_all("kelas_user", ["md5(id_kelas)" => $id_kelas]);
            foreach ($peserta as $i => $peserta) {
                $data['peserta'][$i] = $this->Admin_model->get_one("user", ["id_user" => $peserta['id_user']]);
                
                if($pertemuan){
                    $nilai = $this->Admin_model->get_one("latihan_hifdzi_1", ["md5(id_kelas)" => $id_kelas, "id_user" => $peserta['id_user'], "pertemuan" => $pertemuan, "latihan" => $latihan]);
                } else {
                    $nilai = $this->Admin_model->get_one("latihan_hifdzi_1", ["md5(id_kelas)" => $id_kelas, "id_user" => $peserta['id_user'], "pertemuan" => $latihan, "latihan" => "Input"]);
                }

                if($nilai){
                    $data['peserta'][$i]['id_nilai'] = $nilai['id'];
                    $data['peserta'][$i]['nilai'] = $nilai['nilai'];
                } else {
                    $data['peserta'][$i]['id_nilai'] = "-";
                    $data['peserta'][$i]['nilai'] = 0;
                }
            }

            echo json_encode($data);
        }

        public function get_sertifikat(){
            $id_kelas = $this->input->post("id_kelas");

            $data['kelas'] = $this->Admin_model->get_one("kelas", ["id_kelas" => $id_kelas]);
            $peserta = $this->Admin_model->get_all("kelas_user", ["id_kelas" => $id_kelas]);
            foreach ($peserta as $i => $peserta) {
                $data['peserta'][$i] = $this->Admin_model->get_one("user", ["id_user" => $peserta['id_user']]);
                $data['peserta'][$i]['sertifikat'] = $peserta['sertifikat'];
                $data['peserta'][$i]['id_sertifikat'] = $peserta['id'];
            }

            usort($data['peserta'], function($a, $b) {
                return $a['nama'] <=> $b['nama'];
            });

            echo json_encode($data);
        }
    // get 

    // sertifikat 
        public function add_sertifikat(){
            $id_sertifikat = $this->input->post("id_sertifikat");
            $data = $this->Admin_model->get_one("kelas_user", ["id" => $id_sertifikat]);
            $this->Admin_model->edit_data("kelas_user", ["id" => $id_sertifikat], ["sertifikat" => "1"]);
            echo json_encode($data['id_kelas']);
        }
        
        public function delete_sertifikat(){
            $id_sertifikat = $this->input->post("id_sertifikat");
            $data = $this->Admin_model->get_one("kelas_user", ["id" => $id_sertifikat]);
            $this->Admin_model->edit_data("kelas_user", ["id" => $id_sertifikat], ["sertifikat" => "0"]);
            echo json_encode($data['id_kelas']);
        }
    // sertifikat 

    // faq 
        public function get_faq(){
            $id = $this->input->post("id");
            $data = $this->Admin_model->get_one("faq", ["id" => $id]);

            echo json_encode($data);
        }

        public function delete_faq(){
            $id = $this->input->post("id");
            $data['kelas'] = $this->Admin_model->get_one("faq", ["id" => $id]);
            $this->Admin_model->delete_data("faq", ["id" => $id]);

            echo json_encode($data);
        }

        public function edit_faq(){
            $id = $this->input->post("id");
            $soal = $this->input->post("soal");
            $jawaban = $this->input->post("jawaban");

            $data = [
                "soal" => $soal,
                "jawaban" => $jawaban
            ];

            $this->Admin_model->edit_data("faq", ["id" => $id], $data);
            echo json_encode("1");
        }

        public function add_faq(){
            $id_kelas = $this->input->post("id_kelas");
            $soal = $this->input->post("soal");
            $jawaban = $this->input->post("jawaban");

            $data = [
                "id_kelas" => $id_kelas,
                "soal" => $soal,
                "jawaban" => $jawaban,
            ];

            $this->Admin_model->add_data("faq", $data);
            echo json_encode("1");
        }
    // faq 

    // add 
        public function add_pertemuan(){
            $data = [
                "id_kelas" => $this->input->post("id_kelas"),
                "materi" => $this->input->post("pertemuan"),
            ];
            $this->Admin_model->add_data("materi_kelas", $data);
            echo json_encode($data['id_kelas']);
        } 
         

        public function add_ujian(){
            $data = [
                "id_kelas" => $this->input->post("id_kelas"),
                "materi" => $this->input->post("pertemuan"),
            ];
            $this->Admin_model->add_data("ujian_kelas", $data);
            echo json_encode($data['id_kelas']);
        }

        public function input_nilai(){
            $id_kelas =  $this->input->post("id_kelas");
            $latihan =  $this->input->post("latihan");
            $pertemuan =  $this->input->post("pertemuan");
            
            if($pertemuan == "") {
                $pertemuan = $latihan;
                $latihan = "Input";
            }

            $data =  $this->input->post("data");

            $kelas = $this->Admin_model->get_one("kelas", ["md5(id_kelas)" => $id_kelas]);

            foreach ($data as $i => $peserta) {
                $split = explode("|", $peserta[0]);
                if($split[1] == "-"){
                    $data = [
                        "id_kelas" => $kelas['id_kelas'],
                        "id_user" => $split[0],
                        "pertemuan" => $pertemuan,
                        "latihan" => $latihan,
                        "nilai" => $peserta[1]
                    ];

                    $this->Admin_model->add_data("latihan_hifdzi_1", $data);
                } else {
                    $data = [
                        "nilai" => $peserta[1]
                    ];

                    $this->Admin_model->edit_data("latihan_hifdzi_1", ["id" => $split[1]], $data);
                }
            }

            echo json_encode("1");
        }
    // add 

    // delete 
        public function delete_pertemuan(){
            $data = [
                "id_kelas" => $this->input->post("id_kelas"),
                "materi" => $this->input->post("pertemuan"),
            ];
            $this->Admin_model->delete_data("materi_kelas", $data);
            
            $data = [
                "id_kelas" => $this->input->post("id_kelas"),
                "pertemuan" => $this->input->post("pertemuan"),
            ];
            $this->Admin_model->delete_data("presensi_peserta", $data);
            echo json_encode($data['id_kelas']);
        }
         
        public function delete_ujian(){
            $data = [
                "id_kelas" => $this->input->post("id_kelas"),
                "materi" => $this->input->post("pertemuan"),
            ];
            $this->Admin_model->delete_data("ujian_kelas", $data);
            echo json_encode($data['id_kelas']);
        }
    // delete 
}