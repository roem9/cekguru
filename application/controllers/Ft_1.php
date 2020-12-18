<?php 
class Ft_1 extends CI_CONTROLLER{
    public function __construct(){
        parent::__construct();
        $this->load->model("Arab_model");
        $this->load->model("Admin_model");
        // $this->load->model("Materi_model");
        $this->load->model("Ft1_model");
        ini_set('xdebug.var_display_max_depth', '10');
        ini_set('xdebug.var_display_max_children', '256');
        ini_set('xdebug.var_display_max_data', '1024');
        if($this->session->userdata('status') != "login"){
            $this->session->set_flashdata('login', 'Maaf, Anda harus login terlebih dahulu');
            redirect(base_url("login"));
        }

        
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

        if(!in_array("Full Time 1", $data['program'])){
            redirect(base_url("profil"));
        }
    }

    public function mufrodat(){
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
        
        $materi = $this->Ft1_model->tema();
        $kata = $this->Ft1_model->kata();
        $bab = $this->Ft1_model->bab();

        if(!empty($_GET['id'])){
            $i = 0;
            foreach ($kata as $kata) {
                if(MD5($kata['tema']) == $_GET['id']){
                    $data['mufrodat'][$i] = $kata;
                    $i++;
                }
            }

            foreach ($materi as $materi) {
                if(MD5($materi['tema']) == $_GET['id']){
                    $tema = $materi;
                }
            }
            
            $data['back'] = $tema['back'];
            $data['next'] = $tema['next'];

            $data['level'] = "ft_1";
            $data['tema'] = "Full Time 1";
            $data['materi'] = $tema['tema'];
            $data['title'] = $tema['title_arab'];
            $data['latihan'] = $this->latihan_mufrodat("latihan_ft_1", $id, MD5($data['materi']));
            
            $this->load->view("templates/header-user", $data);
            $this->load->view("comp/mufrodat/menu-mufrodat", $data);
            $this->load->view("templates/footer-user", $data);

        } else if(!empty($_GET['tema'])){
            
            $sub = [];
            foreach ($materi as $i => $materi) {
                if(MD5($materi['bab']) == $_GET['tema']){
                    $sub[] = $materi['tema'];
                }
            }

            foreach ($kata as $i => $kata) {
                if(in_array($kata['tema'], $sub)){
                    $data['mufrodat'][$i] = $kata;
                }
            }

            foreach ($bab as $bab) {
                if(MD5($bab['bab']) == $_GET['tema']){
                    $sub = $bab;
                }
            }
            
            $data['tema'] = "Full Time 1";
            $data['materi'] = $sub['bab'];
            $data['title'] = $sub['title'];
            $data['title_arti'] = $sub['title_arti'];
            $data['next'] = $sub['next'];
            $data['back'] = $sub['back'];
            
            $this->load->view("templates/header-user", $data);
            $this->load->view("ft_1/menu-mufrodat-tema", $data);
            $this->load->view("templates/footer-user", $data);
        } elseif(!empty($_GET['latihan'])) {
            if($_POST['data']){
                $urut = $_GET['i'];
                foreach ($kata as $i => $kata) {
                    if(in_array($kata['id'], $_POST['data'])){
                        if($urut == 1){
                            // if($kata['status'] == "on"){
                                $data['mufrodat'][$i] = $kata;
                            // }
                        } else {
                            $data['mufrodat'][$i] = $kata;
                        }
                    }
                }
            } else {
                redirect("ft_1/mufrodat");
            }

            foreach ($materi as $materi) {
                if(MD5($materi['tema']) == $_GET['latihan']){
                    $tema = $materi;
                }
            }
            
            $data['materi'] = $tema['tema'];
            $data['tema'] = "Level 1";
            $data['table'] = "latihan_ft_1";
            $data['redirect'] = "ft_1/mufrodat?id=".MD5($tema['tema']);
            
            // view
                foreach ($data['mufrodat'] as $i => $kata) {
                    if($urut == 1){
                        $data['title'] = "Latihan 1";
                        $data['kata'][$i]['arab'] = $kata['kata_arab'];
                        $data['kata'][$i]['arti'] = $kata['arti'];
                    }
                    elseif($urut == 2){
                        $data['title'] = "Latihan 2";
                        $data['kata'][$i] = $kata['arti'];
                    }
                    else if($urut == 3){
                        $data['title'] = "Latihan 3";
                        $data['kata'][$i] = $kata['arti'];
                    }
                }
                shuffle($data['kata']);
                shuffle($data['mufrodat']);
                $this->load->view("templates/header-user", $data);
                if($urut == 1){
                    $this->load->view("comp/latihan-mufrodat/latihan-mufrodat-1", $data);
                } else if($urut == 2){
                    $this->load->view("comp/latihan-mufrodat/latihan-mufrodat-2", $data);
                } else if($urut == 3){
                    $this->load->view("comp/latihan-mufrodat/latihan-mufrodat-3", $data);
                }
                
                $this->load->view("templates/footer-user", $data);
            // view

        } elseif(!empty($_GET['latihan_tema'])) {
            
            $urut = $_GET['i'];
            
            $sub = [];
            foreach ($materi as $i => $materi) {
                if(MD5($materi['bab']) == $_GET['latihan_tema']){
                    $sub[] = $materi['tema'];
                }
            }

            foreach ($kata as $i => $kata) {
                if(in_array($kata['tema'], $sub)){
                    if($urut == 1){
                        // if($kata['status'] == "on"){
                            $data['mufrodat'][$i] = $kata;
                        // }
                    } else {
                        $data['mufrodat'][$i] = $kata;
                    }
                }
            }
            
            $data['materi'] = "tema";
            $data['tema'] = "Level 1";
            $data['table'] = "latihan_ft_1";
            $data['redirect'] = "ft_1/mufrodat?tema=" . $_GET['latihan_tema'];
            
            // view
                foreach ($data['mufrodat'] as $i => $kata) {
                    if($urut == 1){
                        $data['title'] = "Latihan 1";
                        $data['kata'][$i]['arab'] = $kata['kata_arab'];
                        $data['kata'][$i]['arti'] = $kata['arti'];
                    }
                    elseif($urut == 2){
                        $data['title'] = "Latihan 2";
                        $data['kata'][$i] = $kata['arti'];
                    }
                    else if($urut == 3){
                        $data['title'] = "Latihan 3";
                        $data['kata'][$i] = $kata['arti'];
                    }
                }
                shuffle($data['kata']);
                shuffle($data['mufrodat']);
                $this->load->view("templates/header-user", $data);
                if($urut == 1){
                    $this->load->view("comp/latihan-mufrodat/latihan-mufrodat-1", $data);
                } else if($urut == 2){
                    $this->load->view("comp/latihan-mufrodat/latihan-mufrodat-2", $data);
                } else if($urut == 3){
                    $this->load->view("comp/latihan-mufrodat/latihan-mufrodat-3", $data);
                }
                
                $this->load->view("templates/footer-user", $data);
            // view

        } else {
            $data['title'] = 'Mufrodat Full Time 1';
            $i = 1;
            // foreach ($materi as $materi) {
            //     $data['mufrodat'][$i] = $this->latihan("latihan_ft_1", $id, $materi['tema'], $materi['title_arab'], $materi['kata']);
            //     $i++;
            // }
            
            $data['tema'] = [];

            foreach ($bab as $i => $bab) {
                $data['tema'][$i] = $bab;
                $data['tema'][$i]['kemajuan'] = $this->latihan_bab($bab['bab'], $id);
            }
            
            $this->load->view("templates/header-user", $data);
            // $this->load->view("ft_1/index-mufrodat", $data);
            $this->load->view("ft_1/index-tema", $data);
            $this->load->view("templates/footer-user", $data);
            // var_dump($materi);
        }
            // var_dump($data);
    }

    public function qowaid(){
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
        
        if(!empty($_GET['id'])){
            if($_GET['id'] == MD5("Mudzakkar & Muannats")){
                $data['title'] = "Mudzakkar & Muannats";
                
                $this->load->view("templates/header-user", $data);
                $this->load->view("ft_1/qowaid/muannats_mudzakkar", $data);
                $this->load->view("templates/footer-user", $data);
            } else if($_GET['id'] == MD5("Mufrod & Mutsanna")){
                $data['title'] = "Mufrod & Mutsanna";
                
                $this->load->view("templates/header-user", $data);
                $this->load->view("ft_1/qowaid/mufrod_mutsanna", $data);
                $this->load->view("templates/footer-user", $data);
            } else if($_GET['id'] == MD5("Jamak Mudzakkar & Muannats Salim")){
                $data['title'] = "Jamak Mudzakkar & Muannats Salim";
                
                $this->load->view("templates/header-user", $data);
                $this->load->view("ft_1/qowaid/mudzakkar_muannats_salim", $data);
                $this->load->view("templates/footer-user", $data);
            } else if($_GET['id'] == MD5("Jamak Taksir")){
                $data['title'] = "Jamak Taksir";
                
                $this->load->view("templates/header-user", $data);
                $this->load->view("ft_1/qowaid/jamak_taksir", $data);
                $this->load->view("templates/footer-user", $data);
            } else if($_GET['id'] == MD5("Dhomir Munfashil")){
                $data['title'] = "Dhomir Munfashil";
                
                $data['mufrodat'] = $this->Ft1_model->dhomir_munfashil();
                $this->load->view("templates/header-user", $data);
                $this->load->view("ft_1/qowaid/dhomir_munfashil", $data);
                $this->load->view("templates/footer-user", $data);
            } else if($_GET['id'] == MD5("Dhomir Muttashil")){
                $data['title'] = "Dhomir Muttashil";
                
                $data['mufrodat'] = $this->Ft1_model->dhomir_muttashil();
                $this->load->view("templates/header-user", $data);
                $this->load->view("ft_1/qowaid/dhomir_muttashil", $data);
                $this->load->view("templates/footer-user", $data);
            } else if($_GET['id'] == MD5("Fiil Madhi")){
                $data['title'] = "Fiil Madhi";
                
                $data['mufrodat'] = $this->Ft1_model->dhomir_muttashil();
                $this->load->view("templates/header-user", $data);
                $this->load->view("ft_1/qowaid/fiil_madhi", $data);
                $this->load->view("templates/footer-user", $data);
            } else if($_GET['id'] == MD5("Fiil Mudhori")){
                $data['title'] = "Fiil Mudhori";
                
                $data['mufrodat'] = $this->Ft1_model->dhomir_muttashil();
                $this->load->view("templates/header-user", $data);
                $this->load->view("ft_1/qowaid/fiil_mudhori", $data);
                $this->load->view("templates/footer-user", $data);
            } else if($_GET['id'] == MD5("Fiil Amr")){
                $data['title'] = "Fiil Amr";
                
                $data['mufrodat'] = $this->Ft1_model->dhomir_muttashil();
                $this->load->view("templates/header-user", $data);
                $this->load->view("ft_1/qowaid/fiil_amr", $data);
                $this->load->view("templates/footer-user", $data);
            } else if($_GET['id'] == MD5("Huruf")){
                $data['title'] = "Huruf";
                
                $data['mufrodat'] = $this->Ft1_model->dhomir_muttashil();
                $this->load->view("templates/header-user", $data);
                $this->load->view("ft_1/qowaid/huruf", $data);
                $this->load->view("templates/footer-user", $data);
            } else if($_GET['id'] == MD5("Jar Majrur")){
                $data['title'] = "Jar Majrur";
                
                $data['mufrodat'] = $this->Ft1_model->dhomir_muttashil();
                $this->load->view("templates/header-user", $data);
                $this->load->view("ft_1/qowaid/jar_majrur", $data);
                $this->load->view("templates/footer-user", $data);
            } else if($_GET['id'] == MD5("Dhorof Madhruf")){
                $data['title'] = "Dhorof Madhruf";
                
                $data['mufrodat'] = $this->Ft1_model->dhomir_muttashil();
                $this->load->view("templates/header-user", $data);
                $this->load->view("ft_1/qowaid/dhorof_madhruf", $data);
                $this->load->view("templates/footer-user", $data);
            } else if($_GET['id'] == MD5("Mausuf Sifat")){
                $data['title'] = "Mausuf Sifat";
                
                $data['mufrodat'] = $this->Ft1_model->dhomir_muttashil();
                $this->load->view("templates/header-user", $data);
                $this->load->view("ft_1/qowaid/mausuf_sifat", $data);
                $this->load->view("templates/footer-user", $data);
            } else if($_GET['id'] == MD5("Isyarah Musyar Ilaih")){
                $data['title'] = "Isyarah Musyar Ilaih";
                
                $data['mufrodat'] = $this->Ft1_model->dhomir_muttashil();
                $this->load->view("templates/header-user", $data);
                $this->load->view("ft_1/qowaid/isyarah_musyar_ilaih", $data);
                $this->load->view("templates/footer-user", $data);
            } else if($_GET['id'] == MD5("Idhafah")){
                $data['title'] = "Idhafah";
                
                $data['mufrodat'] = $this->Ft1_model->dhomir_muttashil();
                $this->load->view("templates/header-user", $data);
                $this->load->view("ft_1/qowaid/idhafah", $data);
                $this->load->view("templates/footer-user", $data);
            } else if($_GET['id'] == MD5("Mausul")){
                $data['title'] = "Mausul";
                
                $data['mufrodat'] = $this->Ft1_model->dhomir_muttashil();
                $this->load->view("templates/header-user", $data);
                $this->load->view("ft_1/qowaid/mausul", $data);
                $this->load->view("templates/footer-user", $data);
            } else if($_GET['id'] == MD5("Isim Nakirah & Marifat")){
                $data['title'] = "Isim Nakirah & Marifat";
                
                $data['mufrodat'] = $this->Ft1_model->dhomir_muttashil();
                $this->load->view("templates/header-user", $data);
                $this->load->view("ft_1/qowaid/nakirah_marifat", $data);
                $this->load->view("templates/footer-user", $data);
            } else if($_GET['id'] == MD5("Jumlah")){
                $data['title'] = "Jumlah";
                
                $data['mufrodat'] = $this->Ft1_model->dhomir_muttashil();
                $this->load->view("templates/header-user", $data);
                $this->load->view("ft_1/qowaid/jumlah", $data);
                $this->load->view("templates/footer-user", $data);
            }
        } else if(!empty($_GET['ln'])){
            if($_GET['ln'] == MD5("Mudzakkar & Muannats")){
                $data['pesan'] = "Tentukan jenis kata benda dari kata-kata berikut ini";
                $urut = $_GET['i'];
                $data['title'] = "Latihan " . $urut;
                $kata = $this->Ft1_model->mudzakkar_muannats();
                $data['redirect'] = "ft_1/qowaid/?id=" . MD5("Mudzakkar & Muannats");
                $data['soal'] = "arab";
                $data['spasi'] = "off";
    
                foreach ($kata as $i => $kata) {
                    if($kata['latihan'] == $urut){
                        $data['mufrodat'][$i] = $kata;
                    }
                }      
       
                shuffle($data['mufrodat']);
                $data['kata'] = ["مُذَكَّرٌ", "مُؤَنَّثٌ"];
                
                $this->load->view("templates/header-user", $data);
                $this->load->view("comp/latihan/latihan-pg", $data);
                $this->load->view("templates/footer-user", $data);
            } else if($_GET['ln'] == MD5("Mufrod & Mutsanna")){
                $urut = $_GET['i'];
                $latihan = $_GET['j'];
                $data['title'] = "Latihan " . $urut;
                $kata = $this->Ft1_model->mufrod_mutsanna();
                $data['redirect'] = "ft_1/qowaid/?id=" . MD5("Mufrod & Mutsanna");
    
                foreach ($kata as $i => $kata) {
                    if($kata['latihan'] == $urut){
                        $data['mufrodat'][$i] = $kata;
                    }
                }      
                
                shuffle($data['mufrodat']);
                $this->load->view("templates/header-user", $data);
                if($latihan == 1){
                    $data['pesan'] = "Pilihlah kata yang sesuai dengan perubahan kata-kata berikut sesuai dengan perintah di dalam kurung";
                    $this->load->view("comp/latihan/latihan-pilihan", $data);
                } else{
                    $data['pesan'] = "Isilah form dengan kata yang sesuai dengan perubahan kata-kata berikut sesuai dengan perintah di dalam kurung";
                    $this->load->view("comp/latihan/latihan-ketik", $data);
                }

                $this->load->view("templates/footer-user", $data);

            } else if($_GET['ln'] == MD5("Jamak Mudzakkar & Muannats Salim")){
                $urut = $_GET['i'];
                $latihan = $_GET['j'];
                $data['title'] = "Latihan " . $urut;
                $kata = $this->Ft1_model->mudzakkar_muannats_salim();
                $data['redirect'] = "ft_1/qowaid/?id=" . MD5("Jamak Mudzakkar & Muannats Salim");
    
                foreach ($kata as $i => $kata) {
                    if($kata['latihan'] == $urut){
                        $data['mufrodat'][$i] = $kata;
                    }
                }      
                
                shuffle($data['mufrodat']);
                $this->load->view("templates/header-user", $data);
                if($latihan == 1){
                    $data['pesan'] = "Pilihlah kata yang sesuai dengan perubahan kata-kata berikut sesuai dengan perintah di dalam kurung";
                    $this->load->view("comp/latihan/latihan-pilihan", $data);
                } else{
                    $data['pesan'] = "Isilah form dengan kata yang sesuai dengan perubahan kata-kata berikut sesuai dengan perintah di dalam kurung";
                    $this->load->view("comp/latihan/latihan-ketik", $data);
                }

                $this->load->view("templates/footer-user", $data);
            } else if($_GET['ln'] == MD5("Dhomir Munfashil")){
                $urut = $_GET['i'];
                
                $data['mufrodat'] = $this->Ft1_model->dhomir_munfashil();
                
                $data['materi'] = "Dhomir Munfashil";
                $data['tema'] = "Level 1";
                $data['table'] = "latihan_ft_1";
                $data['redirect'] = "ft_1/qowaid?id=".MD5("Dhomir Munfashil");
                
                // view
                foreach ($data['mufrodat'] as $i => $kata) {
                    if($urut == 1){
                        $data['title'] = "Latihan 1";
                        $data['kata'][$i]['arab'] = $kata['kata_arab'];
                        $data['kata'][$i]['arti'] = $kata['arti'];
                    }
                    elseif($urut == 2){
                        $data['title'] = "Latihan 2";
                        $data['kata'][$i] = $kata['arti'];
                    }
                    else if($urut == 3){
                        $data['title'] = "Latihan 3";
                        $data['kata'][$i] = $kata['arti'];
                    }
                }
                    shuffle($data['kata']);
                    shuffle($data['mufrodat']);
                    $this->load->view("templates/header-user", $data);
                    if($urut == 1){
                        $this->load->view("comp/latihan-mufrodat/latihan-mufrodat-1", $data);
                        // $this->load->view("ft_1/qowaid/latihan/latihan-hafalan-1", $data);
                    } else if($urut == 2){
                        $this->load->view("comp/latihan-mufrodat/latihan-mufrodat-2", $data);
                        // $this->load->view("ft_1/qowaid/latihan/latihan-hafalan-2", $data);
                    } else if($urut == 3){
                        $this->load->view("comp/latihan-mufrodat/latihan-mufrodat-3", $data);
                        // $this->load->view("ft_1/qowaid/latihan/latihan-hafalan-3", $data);
                    }
                    $this->load->view("templates/footer-user", $data);
                // view
            } else if($_GET['ln'] == MD5("Dhomir Muttashil")){
                $urut = $_GET['i'];
                
                $data['mufrodat'] = $this->Ft1_model->dhomir_muttashil();
                
                $data['materi'] = "Dhomir Muttashil";
                $data['tema'] = "Level 1";
                $data['table'] = "latihan_ft_1";
                $data['redirect'] = "ft_1/qowaid?id=".MD5("Dhomir Muttashil");
                
                // view
                    foreach ($data['mufrodat'] as $i => $kata) {
                        if($urut == 1){
                            $data['title'] = "Latihan 1";
                            $data['kata'][$i]['arab'] = $kata['kata_arab'];
                            $data['kata'][$i]['arti'] = $kata['arti'];
                        }
                        elseif($urut == 2){
                            $data['title'] = "Latihan 2";
                            $data['kata'][$i] = $kata['arti'];
                        }
                        else if($urut == 3){
                            $data['title'] = "Latihan 3";
                            $data['kata'][$i] = $kata['arti'];
                        }
                    }
                    shuffle($data['kata']);
                    shuffle($data['mufrodat']);
                    if($urut == 1){
                        $this->load->view("comp/latihan-mufrodat/latihan-mufrodat-1", $data);
                        // $this->load->view("ft_1/qowaid/latihan/latihan-hafalan-1", $data);
                    } else if($urut == 2){
                        $this->load->view("comp/latihan-mufrodat/latihan-mufrodat-2", $data);
                        // $this->load->view("ft_1/qowaid/latihan/latihan-hafalan-2", $data);
                    } else if($urut == 3){
                        $this->load->view("comp/latihan-mufrodat/latihan-mufrodat-3", $data);
                        // $this->load->view("ft_1/qowaid/latihan/latihan-hafalan-3", $data);
                    }
                    $this->load->view("templates/footer-user", $data);
                // view
            } else if($_GET['ln'] == MD5("Dhomir Muttashil Milki")){
                $urut = $_GET['i'];
                $latihan = $_GET['j'];
                $data['title'] = "Latihan " . $urut;
                $kata = $this->Ft1_model->dhomir_muttashil_milki();
                $data['redirect'] = "ft_1/qowaid/?id=" . MD5("Dhomir Muttashil");
                $data['soal'] = "arab";
                $data['spasi'] = "off";
    
                foreach ($kata as $i => $kata) {
                    if($kata['latihan'] == $urut){
                        $data['mufrodat'][$i] = $kata;
                    }
                }      
                
                // var_dump($data['mufrodat']);
                // exit();

                shuffle($data['mufrodat']);
                $this->load->view("templates/header-user", $data);
                if($latihan == 1){
                    $data['pesan'] = "Pilihlah jawaban yang sesuai dengan soal";
                    $this->load->view("comp/latihan/latihan-pilihan", $data);
                } else{
                    $data['pesan'] = "Isilah form dengan jawaban yang sesuai dengan soal";
                    $this->load->view("comp/latihan/latihan-ketik", $data);
                }

                $this->load->view("templates/footer-user", $data);
            
            } else if($_GET['ln'] == MD5("Dhomir Muttashil Maful")){
                $urut = $_GET['i'];
                $latihan = $_GET['j'];
                $data['title'] = "Latihan " . $urut;
                $kata = $this->Ft1_model->dhomir_muttashil_maful();
                $data['redirect'] = "ft_1/qowaid/?id=" . MD5("Dhomir Muttashil");
                $data['soal'] = "arab";
                $data['spasi'] = "off";
    
                foreach ($kata as $i => $kata) {
                    if($kata['latihan'] == $urut){
                        $data['mufrodat'][$i] = $kata;
                    }
                }      
                
                // var_dump($data['mufrodat']);
                // exit();

                shuffle($data['mufrodat']);
                $this->load->view("templates/header-user", $data);
                if($latihan == 1){
                    $data['pesan'] = "Pilihlah jawaban yang sesuai dengan soal";
                    $this->load->view("comp/latihan/latihan-pilihan", $data);
                } else{
                    $data['pesan'] = "Isilah form dengan jawaban yang sesuai dengan soal";
                    $this->load->view("comp/latihan/latihan-ketik", $data);
                }

                $this->load->view("templates/footer-user", $data);        
            } else if($_GET['ln'] == MD5("Fiil Madhi")){
                $urut = $_GET['i'];
                $latihan = $_GET['j'];
                $data['title'] = "Latihan " . $urut;
                $kata = $this->Ft1_model->fiil_madhi();
                $data['redirect'] = "ft_1/qowaid/?id=" . MD5("Fiil Madhi");
                $data['soal'] = "arab";
                $data['spasi'] = "off";
    
                foreach ($kata as $i => $kata) {
                    if($kata['latihan'] == $urut){
                        $data['mufrodat'][$i] = $kata;
                    }
                }      
                
                // var_dump($data['mufrodat']);
                // exit();

                shuffle($data['mufrodat']);
                $this->load->view("templates/header-user", $data);
                if($latihan == 1){
                    $data['pesan'] = "Pilihlah jawaban yang sesuai dengan soal";
                    $this->load->view("comp/latihan/latihan-pilihan", $data);
                } else{
                    $data['pesan'] = "Isilah form dengan jawaban yang sesuai dengan soal";
                    $this->load->view("comp/latihan/latihan-ketik", $data);
                }

                $this->load->view("templates/footer-user", $data);
            
            } else if($_GET['ln'] == MD5("Fiil Mudhori")){
                $urut = $_GET['i'];
                $latihan = $_GET['j'];
                $data['title'] = "Latihan " . $urut;
                $kata = $this->Ft1_model->fiil_mudhori();
                $data['redirect'] = "ft_1/qowaid/?id=" . MD5("Fiil Mudhori");
                $data['soal'] = "arab";
                $data['spasi'] = "off";
    
                foreach ($kata as $i => $kata) {
                    if($kata['latihan'] == $urut){
                        $data['mufrodat'][$i] = $kata;
                    }
                }      
                
                // var_dump($data['mufrodat']);
                // exit();

                shuffle($data['mufrodat']);
                $this->load->view("templates/header-user", $data);
                if($latihan == 1){
                    $data['pesan'] = "Pilihlah jawaban yang sesuai dengan soal";
                    $this->load->view("comp/latihan/latihan-pilihan", $data);
                } else{
                    $data['pesan'] = "Isilah form dengan jawaban yang sesuai dengan soal";
                    $this->load->view("comp/latihan/latihan-ketik", $data);
                }

                $this->load->view("templates/footer-user", $data);
            
            } else if($_GET['ln'] == MD5("Fiil Amr")){
                $urut = $_GET['i'];
                $latihan = $_GET['j'];
                $data['title'] = "Latihan " . $urut;
                $kata = $this->Ft1_model->fiil_amr();
                $data['redirect'] = "ft_1/qowaid/?id=" . MD5("Fiil Amr");
                $data['soal'] = "arab";
                $data['spasi'] = "off";
    
                foreach ($kata as $i => $kata) {
                    if($kata['latihan'] == $urut){
                        $data['mufrodat'][$i] = $kata;
                    }
                }      
                
                // var_dump($data['mufrodat']);
                // exit();

                shuffle($data['mufrodat']);
                $this->load->view("templates/header-user", $data);
                if($latihan == 1){
                    $data['pesan'] = "Pilihlah jawaban yang sesuai dengan soal";
                    $this->load->view("comp/latihan/latihan-pilihan", $data);
                } else{
                    $data['pesan'] = "Isilah form dengan jawaban yang sesuai dengan soal";
                    $this->load->view("comp/latihan/latihan-ketik", $data);
                }

                $this->load->view("templates/footer-user", $data);
            } else if($_GET['ln'] == MD5("Jar Majrur")){
                $urut = $_GET['i'];
                $data['title'] = "Latihan " . $urut;
                $kata = $this->Ft1_model->jar_majrur();
                $data['redirect'] = "ft_1/qowaid/?id=" . MD5("Jar Majrur");
                $data['soal'] = "indo";
                $data['spasi'] = "on";
    
                foreach ($kata as $i => $kata) {
                    if($kata['latihan'] == $urut){
                        $data['mufrodat'][$i] = $kata;
                    }
                }      

                shuffle($data['mufrodat']);
                $this->load->view("templates/header-user", $data);
                $data['pesan'] = "Ketiklah terjemahan bahasa Arab dari kata-kata berikut ini";
                // $this->load->view("ft_1/qowaid/latihan/latihan-syibhul-jumlah-1", $data);
                $this->load->view("comp/latihan/latihan-ketik", $data);
                $this->load->view("templates/footer-user", $data);
            } else if($_GET['ln'] == MD5("Dhorof Madhruf")){
                $urut = $_GET['i'];
                $data['title'] = "Latihan " . $urut;
                $kata = $this->Ft1_model->dhorof_madhruf();
                $data['redirect'] = "ft_1/qowaid/?id=" . MD5("Dhorof Madhruf");
                $data['soal'] = "indo";
                $data['spasi'] = "on";
    
                foreach ($kata as $i => $kata) {
                    if($kata['latihan'] == $urut){
                        $data['mufrodat'][$i] = $kata;
                    }
                }      
                
                // var_dump($data['mufrodat']);
                // exit();

                shuffle($data['mufrodat']);
                $this->load->view("templates/header-user", $data);
                $data['pesan'] = "Ketiklah terjemahan bahasa Arab dari kata-kata berikut ini";
                // $this->load->view("ft_1/qowaid/latihan/latihan-syibhul-jumlah-1", $data);
                $this->load->view("comp/latihan/latihan-ketik", $data);

                $this->load->view("templates/footer-user", $data);
            } else if($_GET['ln'] == MD5("Mausuf Sifat")){
                $urut = $_GET['i'];
                $data['title'] = "Latihan " . $urut;
                $kata = $this->Ft1_model->mausuf_sifat();
                $data['redirect'] = "ft_1/qowaid/?id=" . MD5("Mausuf Sifat");
    
                foreach ($kata as $i => $kata) {
                    if($kata['latihan'] == $urut){
                        $data['mufrodat'][$i] = $kata;
                    }
                }      
                
                // var_dump($data['mufrodat']);
                // exit();

                shuffle($data['mufrodat']);
                $this->load->view("templates/header-user", $data);
                $data['pesan'] = "Pilihlah sifat yang sesuai dengan mausuf dengan menekan tombol di bawah form kemudian tekan tombol <b>simpan</b>";
                $this->load->view("ft_1/qowaid/latihan/latihan-mufrod-mutsanna-jamak-1", $data);

                $this->load->view("templates/footer-user", $data);
            } else if($_GET['ln'] == MD5("Isyarah Musyar Ilaih")){
                $urut = $_GET['i'];
                $data['title'] = "Latihan " . $urut;
                $kata = $this->Ft1_model->isyarah_musyar();
                $data['redirect'] = "ft_1/qowaid/?id=" . MD5("Isyarah Musyar Ilaih");
    
                foreach ($kata as $i => $kata) {
                    if($kata['latihan'] == $urut){
                        $data['mufrodat'][$i] = $kata;
                    }
                }      
                
                // var_dump($data['mufrodat']);
                // exit();

                shuffle($data['mufrodat']);
                $this->load->view("templates/header-user", $data);
                $data['pesan'] = "Pilihlah musyar ilaih yang sesuai dengan isyarah dengan menekan tombol di bawah form kemudian tekan tombol <b>simpan</b>";
                $this->load->view("ft_1/qowaid/latihan/latihan-mufrod-mutsanna-jamak-1", $data);

                $this->load->view("templates/footer-user", $data);
            } else if($_GET['ln'] == MD5("Idhafah")){
                $urut = $_GET['i'];
                $data['title'] = "Latihan " . $urut;
                $kata = $this->Ft1_model->idhafah();
                $data['redirect'] = "ft_1/qowaid/?id=" . MD5("Idhafah");
    
                foreach ($kata as $i => $kata) {
                    if($kata['latihan'] == $urut){
                        $data['mufrodat'][$i] = $kata;
                    }
                }      
                
                // var_dump($data['mufrodat']);
                // exit();

                shuffle($data['mufrodat']);
                $this->load->view("templates/header-user", $data);
                $data['pesan'] = "Susunlah Idhafah yang sesuai dengan menekan tombol di bawah form kemudian tekan tombol <b>simpan</b>";
                $this->load->view("ft_1/qowaid/latihan/latihan-susun-kata-arab", $data);

                $this->load->view("templates/footer-user", $data);
            } else if($_GET['ln'] == MD5("Mausul")){
                $urut = $_GET['i'];
                $data['title'] = "Latihan " . $urut;
                $kata = $this->Ft1_model->mausul();
                $data['redirect'] = "ft_1/qowaid/?id=" . MD5("Mausul");
    
                foreach ($kata as $i => $kata) {
                    if($kata['latihan'] == $urut){
                        $data['mufrodat'][$i] = $kata;
                    }
                }      
                
                // var_dump($data['mufrodat']);
                // exit();

                shuffle($data['mufrodat']);
                $this->load->view("templates/header-user", $data);
                $data['pesan'] = "Pilihlah kata yang sesuai dengan isim mausul dengan menekan tombol di bawah form kemudian tekan tombol <b>simpan</b>";
                $this->load->view("ft_1/qowaid/latihan/latihan-mufrod-mutsanna-jamak-1", $data);

                $this->load->view("templates/footer-user", $data);
            } else if($_GET['ln'] == MD5("Isim Nakirah & Marifat")){
                $data['pesan'] = "Tentukan kejelasan dari isim berikut ini kemudian tekan tombol simpan";
                $urut = $_GET['i'];
                $data['title'] = "Latihan " . $urut;
                $kata = $this->Ft1_model->nakirah_marifat();
                $data['redirect'] = "ft_1/qowaid/?id=" . MD5("Isim Nakirah & Marifat");
    
                foreach ($kata as $i => $kata) {
                    if($kata['latihan'] == $urut){
                        $data['mufrodat'][$i] = $kata;
                    }
                }      
       
                shuffle($data['mufrodat']);
                $data['kata'] = ["النَّكِرَةُ", "الْمَعْرِفَةُ"];
                
                $this->load->view("templates/header-user", $data);
                $this->load->view("comp/latihan/latihan-pg", $data);
                $this->load->view("templates/footer-user", $data);
            } else if($_GET['ln'] == MD5("Jumlah")){
                $data['pesan'] = "Pilihlah jenis dari kalimat berikut kemudian tekan tombol simpan";
                $urut = $_GET['i'];
                $data['title'] = "Latihan " . $urut;
                $kata = $this->Ft1_model->jumlah();
                $data['redirect'] = "ft_1/qowaid/?id=" . MD5("Jumlah");
    
                foreach ($kata as $i => $kata) {
                    if($kata['latihan'] == $urut){
                        $data['mufrodat'][$i] = $kata;
                    }
                }      
       
                shuffle($data['mufrodat']);
                $data['kata'] = ["جُمْلَةٌ اِسْمِيَّةٌ", "جُمْلَةٌ فِعْلِيَّةٌ"];
                
                $this->load->view("templates/header-user", $data);
                $this->load->view("comp/latihan/latihan-pg", $data);
                $this->load->view("templates/footer-user", $data);
            }
        } else {

            $data['title'] = "Qowaid Full Time 1";
            $this->load->view("templates/header-user", $data);
            $this->load->view("ft_1/qowaid/index-materi", $data);
            $this->load->view("templates/footer-user", $data);
        }
    }

    // search
        public function searchForId($program, $array) {
            foreach ($array as $key => $val) {
                if ($val['program'] == $program) {
                    return $val['id_kelas'];
                }
            }
            return null;
        }
    // search

    // get
        public function latihan_bab($bab, $id){
            $tema = $this->Ft1_model->tema();
            $data['tema'] = [];
            $presentasi = 0;
            foreach ($tema as $i => $tema) {
                if($tema['bab'] == $bab){
                    $data['tema'][$i] = $this->latihan("latihan_ft_1", $id, $tema['tema'], $tema['title_arab'], $tema['kata']);
                    $presentasi += $data['tema'][$i]['mufrodat'];
                }
            }

            // $kemajuan = $presentasi / COUNT($data['tema']);
            $kemajuan = 0;

            return $kemajuan;
        }

        public function tema($table, $id, $tema, $title, $title_arti, $total, $tot_latihan, $array){
            $latihan = $this->Admin_model->get_all($table, ["id_user" => $id, "tema" => $tema], "waktu", "DESC");
            if($latihan){
                $datas['mufrodat'] = COUNT($latihan) / ($tot_latihan * 3) * 100;
                $datas['tgl'] = $latihan[0]['waktu'];
            } else {
                $datas['mufrodat'] = 0;
                $datas['tgl'] = "";
            }
            
            if (in_array($title, $array))
                $datas['status'] = "on";
            else
                $datas['status'] = "off";

            $datas['title'] = $title;
            $datas['title_arti'] = $title_arti;
            $datas['count'] = $total;
            return $datas;
        }

        public function latihan($table, $id, $latihan, $title, $count){
            $data['dasar_1'] = 0;
            $latihan1 = $this->Admin_model->get_one($table, ["id_user" => $id, "materi" => $latihan, "latihan" => "Latihan 1"]);
            $latihan2 = $this->Admin_model->get_one($table, ["id_user" => $id, "materi" => $latihan, "latihan" => "Latihan 2"]);
            $latihan3 = $this->Admin_model->get_one($table, ["id_user" => $id, "materi" => $latihan, "latihan" => "Latihan 3"]);
            if($latihan1)
                $data['dasar_1'] ++;
            if($latihan2)
                $data['dasar_1'] ++;
            if($latihan3)
                $data['dasar_1'] ++;
            
            // tgl
                $tgl = [$latihan1['waktu'],$latihan2['waktu'],$latihan3['waktu']];
                rsort($tgl);
                $data['tgl'][1] = $tgl[0];
            // tgl

            $datas['mufrodat'] = $data['dasar_1'] / 3 * 100;
            $datas['tgl'] = $tgl[0];
            $datas['title'] = $title;
            $datas['latihan'] = $latihan;
            $datas['count'] = $count;
            
            return $datas;
        }

        public function latihan_mufrodat($table, $id, $materi) {
            $data[0] = $this->Admin_model->get_one($table, ["id_user" => $id, "MD5(materi)" => $materi, "latihan" => "Latihan 1"]);
            $data[1] = $this->Admin_model->get_one($table, ["id_user" => $id, "MD5(materi)" => $materi, "latihan" => "Latihan 2"]);
            $data[2] = $this->Admin_model->get_one($table, ["id_user" => $id, "MD5(materi)" => $materi, "latihan" => "Latihan 3"]);

            return $data;
        }

        public function get_tema(){
            $id_user = $this->session->userdata('id');
            $id = $this->input->post("id");
            $tema = $this->Ft1_model->tema();
            $bab = $this->Ft1_model->bab();

            $i = 0;
            foreach ($tema as $tema) {
                if($tema['bab'] == $id){
                    $data['tema'][$i] = $tema;
                    $data['tema'][$i]['tema'] = MD5($tema['tema']);
                    $kemajuan = $this->latihan("latihan_ft_1", $id_user, $tema['tema'], $tema['title_arab'], $tema['kata']);
                    $data['tema'][$i]['kemajuan'] = $kemajuan['mufrodat'];
                    $i++;
                }
            }
            
            foreach ($bab as $bab) {
                if($bab['bab'] == $id){
                    $data['bab'] = $bab;
                    $data['link'] = MD5($bab['bab']);
                }
            }


            echo json_encode($data);
            // var_dump($cek);
        }
    // get

    // add
        public function add_latihan(){
            $id = $this->session->userdata('id');
            $redirect = $this->input->post("redirect", TRUE);
            $latihan = $this->input->post("latihan", TRUE);
            $materi = $this->input->post("materi", TRUE);
            $table = $this->input->post("table", TRUE);

            $cek = $this->Admin_model->get_one($table, ["id_user" => $id, "latihan" => $latihan, "materi" => $materi]);

            if(!$cek){
                $data = [
                    "latihan" => $latihan,
                    "id_user" => $id,
                    "materi" => $materi
                ];
                $this->Admin_model->add_data($table, $data);
            }

            redirect($redirect);
        }
}