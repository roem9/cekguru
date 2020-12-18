<?php 
class Materi extends CI_CONTROLLER{
    public function __construct(){
        parent::__construct();
        $this->load->model("Arab_model");
        $this->load->model("Admin_model");
        $this->load->model("Hifdzi1_model");
        ini_set('xdebug.var_display_max_depth', '10');
        ini_set('xdebug.var_display_max_children', '256');
        ini_set('xdebug.var_display_max_data', '1024');
        if($this->session->userdata('status') != "login"){
            $this->session->set_flashdata('login', 'Maaf, Anda harus login terlebih dahulu');
            redirect(base_url("login"));
        }
    }

    public function program($materi){
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
        
        if($materi == MD5("Hifdzi 1")){
            $hifdzi1 = $this->Hifdzi1_model->kata();
            $tema = $this->Hifdzi1_model->tema();
            if($_GET){
                if(!empty($_GET['tema'])){
                    
                    // pertemuan
                        $kelas = $this->searchForId("Hifdzi 1", $data['kelas']);
                        $per = $this->Admin_model->get_all("materi_kelas", ["id_kelas" => $kelas]);
                        $pertemuan = [];
                        foreach ($per as $i => $per) {
                            $pertemuan[$i] = $per['materi'];
                        }
                    // pertemuan

                    if($_GET['tema'] == MD5('Pertemuan 1')){
                        $data['back'] = "";
                        if (in_array("Pertemuan 2", $pertemuan))
                            $data['next'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 2");
                        else
                            $data['next'] = "";

                        $data['title'] = 'Pertemuan 1';
                        $data['materi'] = 'Materi Pertemuan 1';

                        $i = 1;
                        foreach ($tema as $materi) {
                            
                            if(MD5($materi['pertemuan']) == $_GET['tema']){
                                // jumlah kosa kata
                                    $j = 0;
                                    foreach ($hifdzi1 as $kata) {
                                        if($kata['tema'] == $materi['tema']){
                                            $mufrodat[$j] = $kata;
                                            $j++;
                                        }
                                    }
                                $data['mufrodat'][$i] = $this->latihan("latihan_hifdzi_1", $id, $materi['tema'], $materi['title_arab'], $materi['title'], COUNT($mufrodat));
                                $i++;
                            }
                        }
                    } else if($_GET['tema'] == MD5('Pertemuan 2')){
                        
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 1");
                        if (in_array("Pertemuan 3", $pertemuan))
                            $data['next'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 3");
                        else
                            $data['next'] = "";

                        $data['title'] = 'Pertemuan 2';
                        $data['materi'] = 'Materi Pertemuan 2';
                        $data['mufrodat'][0]['mufrodat'] = 100;
                        $data['mufrodat'][1] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 6","حُرُوْفُ إِنَّ وَ أَخَوَاتُهَا", "Huruf Inna dan Saudaranya", 6);
                        $data['mufrodat'][2] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 7","حُرُوْفُ النَّوَاصِبِ", "Huruf Nashob", 6);
                        $data['mufrodat'][3] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 8","حُرُوْفُ الْجَوَازِمِ", "Huruf Jazm", 5);
                        $data['mufrodat'][4] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 9","حَرْفُ التَّوْكِيْدِ", "Huruf Taukid", 1);
                        $data['mufrodat'][5] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 10","حُرُوْفُ اْلإِسْتِقْبَالِ", "Huruf Istiqbal", 2);
                        $data['mufrodat'][6] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 11","حُرُوْفُ اْلعَطْفِ", "Huruf Athof", 9);
                        $data['mufrodat'][7] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 12","حُرُوْفُ النَّافِي", "Huruf Nafi", 2);
                        $data['mufrodat'][8] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 13","حُرُوْفُ اْلإِسْتِفْهَامِ", "Huruf Istifham", 2);
                    } else if($_GET['tema'] == MD5('Pertemuan 3')){

                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 2");
                        if (in_array("Pertemuan 4", $pertemuan))
                            $data['next'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 4");
                        else
                            $data['next'] = "";

                        $data['title'] = 'Pertemuan 3';
                        $data['materi'] = 'Materi Pertemuan 3';
                        $data['mufrodat'][0]['mufrodat'] = 100;
                        $data['mufrodat'][1] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 14","عَدَدٌ", "Satuan", 10);
                        $data['mufrodat'][2] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 15","عَدَدٌ", "Belasan", 9);
                        $data['mufrodat'][3] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 16","عَدَدٌ", "Puluhan", 8);
                        $data['mufrodat'][4] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 17","عَدَدٌ", "Ratusan", 9);
                        $data['mufrodat'][5] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 18","عَدَدٌ", "21-29", 9);
                        $data['mufrodat'][6] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 19","عَدَدٌ", "31-39", 9);
                        $data['mufrodat'][7] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 20","عَدَدٌ", "41-49", 9);
                        $data['mufrodat'][8] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 21","عَدَدٌ", "51-59", 9);
                        $data['mufrodat'][9] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 22","عَدَدٌ", "61-69", 9);
                        $data['mufrodat'][10] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 23","عَدَدٌ", "71-79", 9);
                        $data['mufrodat'][11] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 24","عَدَدٌ", "81-89", 9);
                        $data['mufrodat'][12] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 25","عَدَدٌ", "91-99", 9);
                    } else if($_GET['tema'] == MD5('Pertemuan 4')){
                        
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 3");
                        if (in_array("Pertemuan 5", $pertemuan))
                            $data['next'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 5");
                        else
                            $data['next'] = "";

                        $data['title'] = 'Pertemuan 4';
                        $data['materi'] = 'Materi Pertemuan 4';
                        $data['mufrodat'][0]['mufrodat'] = 100;
                        $data['mufrodat'][1] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 26","ظُرُوْفُ الْمَكَانِ", "Keterangan Tempat", 10);
                        $data['mufrodat'][2] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 27","ظُرُوْفُ الزَّمَانِ", "Keterangan Waktu Bag. 1", 8);
                        $data['mufrodat'][3] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 28","ظُرُوْفُ الزَّمَانِ", "Keterangan Waktu Bag. 2", 8);
                        $data['mufrodat'][4] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 29","ظُرُوْفُ الزَّمَانِ", "Keterangan Waktu Bag. 3", 6);
                    } else if($_GET['tema'] == MD5('Pertemuan 5')){
                        
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 4");
                        if (in_array("Pertemuan 6", $pertemuan))
                            $data['next'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 6");
                        else
                            $data['next'] = "";

                        $data['title'] = 'Pertemuan 5';
                        $data['materi'] = 'Materi Pertemuan 5';
                        $data['mufrodat'][0]['mufrodat'] = 100;
                        $data['mufrodat'][1] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 30","أَعْضَاءُ الْبَدَنِ", "Anggota Tubuh Bag. 1", 8);
                        $data['mufrodat'][2] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 31","أَعْضَاءُ الْبَدَنِ", "Anggota Tubuh Bag. 2", 8);
                        $data['mufrodat'][3] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 32","أَعْضَاءُ الْبَدَنِ", "Anggota Tubuh Bag. 3", 8);
                        $data['mufrodat'][4] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 33","أَعْضَاءُ الْبَدَنِ", "Anggota Tubuh Bag. 4", 8);
                        $data['mufrodat'][5] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 34","أَعْضَاءُ الْبَدَنِ", "Anggota Tubuh Bag. 5", 8);
                        $data['mufrodat'][6] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 35","أَعْضَاءُ الْبَدَنِ", "Anggota Tubuh Bag. 6", 6);
                        $data['mufrodat'][7] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 36","أَعْضَاءُ الْبَدَنِ", "Anggota Tubuh Bag. 7", 5);
                    } else if($_GET['tema'] == MD5('Pertemuan 6')){
                        
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 5");
                        if (in_array("Pertemuan 7", $pertemuan))
                            $data['next'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 7");
                        else
                            $data['next'] = "";
                            
                        $data['title'] = 'Pertemuan 6';
                        $data['materi'] = 'Materi Pertemuan 6';
                        $data['mufrodat'][0]['mufrodat'] = 100;
                        $data['mufrodat'][1] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 37","الأَفْعَالُ عَنْ أَعْضَاءِ الْبَدَنِ", "Pekerjaan Tentang Anggota Tubuh Bag. 1", 5);
                        $data['mufrodat'][2] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 38","الأَفْعَالُ عَنْ أَعْضَاءِ الْبَدَنِ", "Pekerjaan Tentang Anggota Tubuh Bag. 2", 5);
                        $data['mufrodat'][3] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 39","الأَفْعَالُ عَنْ أَعْضَاءِ الْبَدَنِ", "Pekerjaan Tentang Anggota Tubuh Bag. 3", 5);
                        $data['mufrodat'][4] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 40","الأَفْعَالُ عَنْ أَعْضَاءِ الْبَدَنِ", "Pekerjaan Tentang Anggota Tubuh Bag. 4", 5);
                        $data['mufrodat'][5] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 41","الأَفْعَالُ عَنْ أَعْضَاءِ الْبَدَنِ", "Pekerjaan Tentang Anggota Tubuh Bag. 5", 4);
                        $data['mufrodat'][6] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 42","الأُسْرَةُ", "Keluarga Bag. 1", 9);
                        $data['mufrodat'][7] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 43","الأُسْرَةُ", "Keluarga Bag. 2", 9);
                        $data['mufrodat'][8] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 44","الأُسْرَةُ", "Keluarga Bag. 3", 8);
                        $data['mufrodat'][9] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 45","الأُسْرَةُ", "Keluarga Bag. 4", 8);
                    } else if($_GET['tema'] == MD5('Pertemuan 7')){

                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 6");
                        if (in_array("Pertemuan 8", $pertemuan))
                            $data['next'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 8");
                        else
                            $data['next'] = "";

                        $data['title'] = 'Pertemuan 7';
                        $data['materi'] = 'Materi Pertemuan 7';
                        $data['mufrodat'][0]['mufrodat'] = 100;
                        $data['mufrodat'][1] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 46","اْلأَفْعَالُ عَنِ اْلأُسْرَةِ", "Pekerjaan Tentang Keluarga Bag. 1", 6);
                        $data['mufrodat'][2] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 47","اْلأَفْعَالُ عَنِ اْلأُسْرَةِ", "Pekerjaan Tentang Keluarga Bag. 2", 6);
                        $data['mufrodat'][3] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 48","اْلأَفْعَالُ عَنِ اْلأُسْرَةِ", "Pekerjaan Tentang Keluarga Bag. 3", 6);
                        $data['mufrodat'][4] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 49","اْلأَفْعَالُ عَنِ اْلأُسْرَةِ", "Pekerjaan Tentang Keluarga Bag. 4", 6);
                    } else if($_GET['tema'] == MD5('Pertemuan 8')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 7");
                        if (in_array("Pertemuan 9", $pertemuan))
                            $data['next'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 9");
                        else
                            $data['next'] = "";
                            
                        $data['title'] = 'Pertemuan 8';
                        $data['materi'] = 'Materi Pertemuan 8';
                        $data['mufrodat'][0]['mufrodat'] = 100;
                        $data['mufrodat'][1] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 50","أَخْلاَقُ اْلإِنْسَانِ", "Akhlak Manusia Bag. 1", 8);
                        $data['mufrodat'][2] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 51","أَخْلاَقُ اْلإِنْسَانِ", "Akhlak Manusia Bag. 2", 8);
                        $data['mufrodat'][3] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 52","أَخْلاَقُ اْلإِنْسَانِ", "Akhlak Manusia Bag. 3", 8);
                        $data['mufrodat'][4] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 53","أَخْلاَقُ اْلإِنْسَانِ", "Akhlak Manusia Bag. 4", 8);
                        $data['mufrodat'][5] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 54","أَخْلاَقُ اْلإِنْسَانِ", "Akhlak Manusia Bag. 5", 8);
                    } else if($_GET['tema'] == MD5('Pertemuan 9')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 8");
                        if (in_array("Pertemuan 10", $pertemuan))
                            $data['next'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 10");
                        else
                            $data['next'] = "";
                            
                        $data['title'] = 'Pertemuan 9';
                        $data['materi'] = 'Materi Pertemuan 9';
                        $data['mufrodat'][0]['mufrodat'] = 100;
                        $data['mufrodat'][1] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 55","أَخْلاَقُ اْلإِنْسَانِ", "Akhlak Manusia Bag. 1", 8);
                        $data['mufrodat'][2] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 56","أَخْلاَقُ اْلإِنْسَانِ", "Akhlak Manusia Bag. 2", 8);
                        $data['mufrodat'][3] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 57","أَخْلاَقُ اْلإِنْسَانِ", "Akhlak Manusia Bag. 3", 7);
                        $data['mufrodat'][4] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 58","أَخْلاَقُ اْلإِنْسَانِ", "Akhlak Manusia Bag. 4", 7);
                        $data['mufrodat'][5] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 59","أَخْلاَقُ اْلإِنْسَانِ", "Akhlak Manusia Bag. 5", 7);
                        $data['mufrodat'][6] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 60","أَخْلاَقُ اْلإِنْسَانِ", "Akhlak Manusia Bag. 6", 7);
                    } else if($_GET['tema'] == MD5('Pertemuan 10')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 9");
                        if (in_array("Pertemuan 11", $pertemuan))
                            $data['next'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 11");
                        else
                            $data['next'] = "";

                        $data['title'] = 'Pertemuan 10';
                        $data['materi'] = 'Materi Pertemuan 10';
                        $data['mufrodat'][0]['mufrodat'] = 100;
                        $data['mufrodat'][1] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 61","آثَاثُ اْلبَيْتِ", "Perlengkapan Rumah Bag. 1", 8);
                        $data['mufrodat'][2] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 62","آثَاثُ اْلبَيْتِ", "Perlengkapan Rumah Bag. 2", 8);
                        $data['mufrodat'][3] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 63","آثَاثُ اْلبَيْتِ", "Perlengkapan Rumah Bag. 3", 8);
                        $data['mufrodat'][4] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 64","آثَاثُ اْلبَيْتِ", "Perlengkapan Rumah Bag. 4", 7);
                        $data['mufrodat'][5] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 65","آثَاثُ اْلبَيْتِ", "Perlengkapan Rumah Bag. 5", 7);
                    } else if($_GET['tema'] == MD5('Pertemuan 11')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 10");
                        if (in_array("Pertemuan 12", $pertemuan))
                            $data['next'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 12");
                        else
                            $data['next'] = "";
                            
                        $data['title'] = 'Pertemuan 11';
                        $data['materi'] = 'Materi Pertemuan 11';
                        $data['mufrodat'][0]['mufrodat'] = 100;
                        $data['mufrodat'][1] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 66","اْلأَفْعَالُ عَنْ آثَاثِ اْلبَيْتِ", "Pekerjaan Tentang Perkakas Rumah Bag. 1", 7);
                        $data['mufrodat'][2] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 67","اْلأَفْعَالُ عَنْ آثَاثِ اْلبَيْتِ", "Pekerjaan Tentang Perkakas Rumah Bag. 2", 6);
                        $data['mufrodat'][3] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 68","اْلأَفْعَالُ عَنْ آثَاثِ اْلبَيْتِ", "Pekerjaan Tentang Perkakas Rumah Bag. 3", 6);
                        $data['mufrodat'][4] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 69","الأَلْوَانُ", "Warna-warna Bag. 1", 6);
                        $data['mufrodat'][5] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 70","الأَلْوَانُ", "Warna-warna Bag. 2", 6);
                        $data['mufrodat'][6] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 71","الصِّفَاتُ", "Sifat Bag. 1", 8);
                        $data['mufrodat'][7] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 72","الصِّفَاتُ", "Sifat Bag. 2", 7);
                    } else if($_GET['tema'] == MD5('Pertemuan 12')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 11");
                        if (in_array("Pertemuan 13", $pertemuan))
                            $data['next'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 13");
                        else
                            $data['next'] = "";
                            
                        $data['title'] = 'Pertemuan 12';
                        $data['materi'] = 'Materi Pertemuan 12';
                        $data['mufrodat'][0]['mufrodat'] = 100;
                        $data['mufrodat'][1] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 73","الصِّفَاتُ", "Sifat Bag. 1", 8);
                        $data['mufrodat'][2] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 74","الصِّفَاتُ", "Sifat Bag. 2", 8);
                        $data['mufrodat'][3] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 75","الصِّفَاتُ", "Sifat Bag. 3", 7);
                        $data['mufrodat'][4] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 76","الصِّفَاتُ", "Sifat Bag. 4", 7);
                    } else if($_GET['tema'] == MD5('Pertemuan 13')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 12");
                        if (in_array("Pertemuan 14", $pertemuan))
                            $data['next'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 14");
                        else
                            $data['next'] = "";
                            
                        $data['title'] = 'Pertemuan 13';
                        $data['materi'] = 'Materi Pertemuan 13';
                        $data['mufrodat'][0]['mufrodat'] = 100;
                        $data['mufrodat'][1] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 77","مَلَابِسُ وَ جَوَاهِرُ", "Pakaian dan Perhiasan Bag. 1", 8);
                        $data['mufrodat'][2] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 78","مَلَابِسُ وَ جَوَاهِرُ", "Pakaian dan Perhiasan Bag. 2", 7);
                        $data['mufrodat'][3] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 79","مَلَابِسُ وَ جَوَاهِرُ", "Pakaian dan Perhiasan Bag. 3", 7);
                        $data['mufrodat'][4] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 80","مَلَابِسُ وَ جَوَاهِرُ", "Pakaian dan Perhiasan Bag. 4", 7);
                        $data['mufrodat'][5] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 81","مَلَابِسُ وَ جَوَاهِرُ", "Pakaian dan Perhiasan Bag. 5", 7);
                        $data['mufrodat'][6] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 82","اْلأَفْعَالُ عَنِ الْمَلَابِس", "Pekerjaan Tentang Pakaian Bag. 1", 5);
                        $data['mufrodat'][7] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 83","اْلأَفْعَالُ عَنِ الْمَلَابِس", "Pekerjaan Tentang Pakaian Bag. 2", 5);
                        $data['mufrodat'][8] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 84","غُرْفَةُ النَّوْمِ", "Kamar Tidur Bag. 1", 8);
                        $data['mufrodat'][9] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 85","غُرْفَةُ النَّوْمِ", "Kamar Tidur Bag. 2", 8);
                    } else if($_GET['tema'] == MD5('Pertemuan 14')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 13");
                        if (in_array("Pertemuan 15", $pertemuan))
                            $data['next'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 15");
                        else
                            $data['next'] = "";

                        $data['title'] = 'Pertemuan 14';
                        $data['materi'] = 'Materi Pertemuan 14';
                        $data['mufrodat'][0]['mufrodat'] = 100;
                        $data['mufrodat'][1] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 86","اْلأَفْعَالُ عَنْ غُرْفَةِ النَّوْمِ", "Pekerjaan Tentang Kamar Tidur", 7);
                        $data['mufrodat'][2] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 87","الْمَطْبَخُ", "Dapur Bag. 1", 9);
                        $data['mufrodat'][3] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 88","الْمَطْبَخُ", "Dapur Bag. 2", 8);
                        $data['mufrodat'][4] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 89","الْمَطْبَخُ", "Dapur Bag. 3", 8);
                    } else if($_GET['tema'] == MD5('Pertemuan 15')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 14");
                        if (in_array("Pertemuan 16", $pertemuan))
                            $data['next'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 16");
                        else
                            $data['next'] = "";

                        $data['title'] = 'Pertemuan 15';
                        $data['materi'] = 'Materi Pertemuan 15';
                        $data['mufrodat'][0]['mufrodat'] = 100;
                        $data['mufrodat'][1] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 90","اْلأَفْعَالُ عَنِ الْمَطْبَخ", "Pekerjaan Tentang Dapur Bag. 1", 8);
                        $data['mufrodat'][2] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 91","اْلأَفْعَالُ عَنِ الْمَطْبَخ", "Pekerjaan Tentang Dapur Bag. 2", 7);
                        $data['mufrodat'][3] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 92","الطُّعُوْمُ", "Rasa-rasa Bag. 1", 6);
                        $data['mufrodat'][4] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 93","الطُّعُوْمُ", "Rasa-rasa Bag. 2", 6);
                    } else if($_GET['tema'] == MD5('Pertemuan 16')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 15");
                        if (in_array("Pertemuan 17", $pertemuan))
                            $data['next'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 17");
                        else
                            $data['next'] = "";

                        $data['title'] = 'Pertemuan 16';
                        $data['materi'] = 'Materi Pertemuan 16';
                        $data['mufrodat'][0]['mufrodat'] = 100;
                        $data['mufrodat'][1] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 94","الحَمَّامُ", "Kamar Mandi Bag. 1", 10);
                        $data['mufrodat'][2] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 95","الحَمَّامُ", "Kamar Mandi Bag. 2", 9);
                        $data['mufrodat'][3] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 96","اْلأَفْعَالُ عَنِ الْحَمَّام", "Pekerjaan Tentang Kamar Mandi Bag. 1", 7);
                        $data['mufrodat'][4] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 97","اْلأَفْعَالُ عَنِ الْحَمَّام", "Pekerjaan Tentang Kamar Mandi Bag. 2", 7);
                    } else if($_GET['tema'] == MD5('Pertemuan 17')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 16");
                        if (in_array("Pertemuan 18", $pertemuan))
                            $data['next'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 18");
                        else
                            $data['next'] = "";

                        $data['title'] = 'Pertemuan 17';
                        $data['materi'] = 'Materi Pertemuan 17';
                        $data['mufrodat'][0]['mufrodat'] = 100;
                        $data['mufrodat'][1] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 98","المَدْرَسَةُ", "Sekolah Bag. 1", 7);
                        $data['mufrodat'][2] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 99","المَدْرَسَةُ", "Sekolah Bag. 2", 7);
                        $data['mufrodat'][3] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 100","المَدْرَسَةُ", "Sekolah Bag. 3", 7);
                        $data['mufrodat'][4] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 101","المَدْرَسَةُ", "Sekolah Bag. 4", 7);
                        $data['mufrodat'][5] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 102","المَدْرَسَةُ", "Sekolah Bag. 5", 7);
                    } else if($_GET['tema'] == MD5('Pertemuan 18')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 17");
                        if (in_array("Pertemuan 19", $pertemuan))
                            $data['next'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 19");
                        else
                            $data['next'] = "";
                            
                        $data['title'] = 'Pertemuan 18';
                        $data['materi'] = 'Materi Pertemuan 18';
                        $data['mufrodat'][0]['mufrodat'] = 100;
                        $data['mufrodat'][1] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 103","المَدْرَسَةُ", "Sekolah Bag. 1", 6);
                        $data['mufrodat'][2] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 104","المَدْرَسَةُ", "Sekolah Bag. 2", 6);
                        $data['mufrodat'][3] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 105","لأَفْعَالُ عَنِ الْمَدْرَسَةِ", "Pekerjaan Tentang Sekolah Bag. 1", 7);
                        $data['mufrodat'][4] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 106","لأَفْعَالُ عَنِ الْمَدْرَسَةِ", "Pekerjaan Tentang Sekolah Bag. 1", 6);
                        $data['mufrodat'][5] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 107","لأَفْعَالُ عَنِ الْمَدْرَسَةِ", "Pekerjaan Tentang Sekolah Bag. 1", 6);
                        $data['mufrodat'][6] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 108","الْمَرْكُوْبَاتُ", "Kendaraan-kendaraan Bag. 1", 8);
                        $data['mufrodat'][7] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 109","الْمَرْكُوْبَاتُ", "Kendaraan-kendaraan Bag. 2", 8);
                        $data['mufrodat'][8] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 110","الْمَرْكُوْبَاتُ", "Kendaraan-kendaraan Bag. 3", 8);
                        $data['mufrodat'][9] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 111","الْمَرْكُوْبَاتُ", "Kendaraan-kendaraan Bag. 4", 8);
                    } else if($_GET['tema'] == MD5('Pertemuan 19')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 18");
                        if (in_array("Pertemuan 20", $pertemuan))
                            $data['next'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 20");
                        else
                            $data['next'] = "";

                        $data['title'] = 'Pertemuan 19';
                        $data['materi'] = 'Materi Pertemuan 19';
                        $data['mufrodat'][0]['mufrodat'] = 100;
                        $data['mufrodat'][1] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 112","اْلأَفْعَالُ عَنِ الْمَرْكُوْبَات", "Pekerjaan Tentang Kendaraan", 5);
                        $data['mufrodat'][2] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 113","الْمُسْتَشْفَى", "Rumah Sakit Bag. 1", 6);
                        $data['mufrodat'][3] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 114","الْمُسْتَشْفَى", "Rumah Sakit Bag. 2", 6);
                        $data['mufrodat'][4] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 115","أَسْمَاءُ الْحَيَوَانَاتِ", "Nama-nama Hewan Bag. 1", 8);
                        $data['mufrodat'][5] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 116","أَسْمَاءُ الْحَيَوَانَاتِ", "Nama-nama Hewan Bag. 2", 8);
                        $data['mufrodat'][6] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 117","أَسْمَاءُ الْحَيَوَانَاتِ", "Nama-nama Hewan Bag. 3", 7);
                        $data['mufrodat'][7] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 118","أَسْمَاءُ الْحَيَوَانَاتِ", "Nama-nama Hewan Bag. 4", 7);
                    } else if($_GET['tema'] == MD5('Pertemuan 20')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 19");
                        if (in_array("Pertemuan 21", $pertemuan))
                            $data['next'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 21");
                        else
                            $data['next'] = "";
                            
                        $data['title'] = 'Pertemuan 20';
                        $data['materi'] = 'Materi Pertemuan 20';
                        $data['mufrodat'][0]['mufrodat'] = 100;
                        $data['mufrodat'][1] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 119","أَسْمَاءُ الْحَيَوَانَاتِ", "Nama-nama Hewan Bag. 1", 8);
                        $data['mufrodat'][2] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 120","أَسْمَاءُ الْحَيَوَانَاتِ", "Nama-nama Hewan Bag. 2", 9);
                        $data['mufrodat'][3] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 121","أَسْمَاءُ اْلفَوَاكِهِ", "Nama-nama Buah Bag. 1", 7);
                        $data['mufrodat'][4] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 122","أَسْمَاءُ اْلفَوَاكِهِ", "Nama-nama Buah Bag. 2", 7);
                        $data['mufrodat'][5] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 123","أَسْمَاءُ اْلفَوَاكِهِ", "Nama-nama Buah Bag. 3", 7);
                        $data['mufrodat'][6] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 124","اْلأَفْعَالُ عَنِ اْلفَوَاكِهِ", "Pekerjaan Tentang Buah", 7);
                    } else if($_GET['tema'] == MD5('Pertemuan 21')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 20");
                        if (in_array("Pertemuan 22", $pertemuan))
                            $data['next'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 22");
                        else
                            $data['next'] = "";

                        $data['title'] = 'Pertemuan 21';
                        $data['materi'] = 'Materi Pertemuan 21';
                        $data['mufrodat'][0]['mufrodat'] = 100;
                        $data['mufrodat'][1] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 125","أَسْمَاءُ الْمَكَانِ", "Nama-nama Tempat Bag. 1", 8);
                        $data['mufrodat'][2] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 126","أَسْمَاءُ الْمَكَانِ", "Nama-nama Tempat Bag. 2", 8);
                        $data['mufrodat'][3] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 127","أَسْمَاءُ الْمَكَانِ", "Nama-nama Tempat Bag. 3", 8);
                        $data['mufrodat'][4] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 128","أَسْمَاءُ الْمَكَانِ", "Nama-nama Tempat Bag. 4", 8);
                        $data['mufrodat'][5] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 129","أَسْمَاءُ الْمَكَانِ", "Nama-nama Tempat Bag. 5", 8);
                        $data['mufrodat'][6] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 130","أَسْمَاءُ الْمَكَانِ", "Nama-nama Tempat Bag. 6", 6);
                        $data['mufrodat'][7] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 131","اْلأَفْعَالُ عَنِ الْمَكَانِ", "Pekerjaan Tentang Tempat Bag. 1", 5);
                        $data['mufrodat'][8] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 132","اْلأَفْعَالُ عَنِ الْمَكَانِ", "Pekerjaan Tentang Tempat Bag. 2", 5);
                    } else if($_GET['tema'] == MD5('Pertemuan 22')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 21");
                        if (in_array("Pertemuan 23", $pertemuan))
                            $data['next'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 23");
                        else
                            $data['next'] = "";

                        $data['title'] = 'Pertemuan 22';
                        $data['materi'] = 'Materi Pertemuan 22';
                        $data['mufrodat'][0]['mufrodat'] = 100;
                        $data['mufrodat'][1] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 133","العَالَمُ", "Alam Semesta Bag. 1", 9);
                        $data['mufrodat'][2] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 134","العَالَمُ", "Alam Semesta Bag. 2", 8);
                        $data['mufrodat'][3] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 135","العَالَمُ", "Alam Semesta Bag. 3", 8);
                        $data['mufrodat'][4] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 136","العَالَمُ", "Alam Semesta Bag. 4", 8);
                    } else if($_GET['tema'] == MD5('Pertemuan 23')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 22");
                        if (in_array("Pertemuan 24", $pertemuan))
                            $data['next'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 24");
                        else
                            $data['next'] = "";

                        $data['title'] = 'Pertemuan 23';
                        $data['materi'] = 'Materi Pertemuan 23';
                        $data['mufrodat'][0]['mufrodat'] = 100;
                        $data['mufrodat'][1] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 137","الْمِهْنَةُ", "Profesi Bag. 1", 7);
                        $data['mufrodat'][2] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 138","الْمِهْنَةُ", "Profesi Bag. 2", 7);
                        $data['mufrodat'][3] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 139","الْمِهْنَةُ", "Profesi Bag. 3", 7);
                        $data['mufrodat'][4] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 140","الْمِهْنَةُ", "Profesi Bag. 4", 7);
                        $data['mufrodat'][5] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 141","الْمِهْنَةُ", "Profesi Bag. 5", 7);
                    } else if($_GET['tema'] == MD5('Pertemuan 24')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 23");
                        if (in_array("Pertemuan 25", $pertemuan))
                            $data['next'] = "materi/program/".MD5("Hifdzi 1")."?tema=".MD5("Pertemuan 25");
                        else
                            $data['next'] = "";

                        $data['next'] = "";
                        $data['title'] = 'Pertemuan 24';
                        $data['materi'] = 'Materi Pertemuan 24';
                        $data['mufrodat'][0]['mufrodat'] = 100;
                        $data['mufrodat'][1] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 142","الْمِهْنَةُ", "Profesi Bag. 1", 7);
                        $data['mufrodat'][2] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 143","الْمِهْنَةُ", "Profesi Bag. 2", 8);
                        $data['mufrodat'][3] = $this->latihan("latihan_hifdzi_1", $id, "Mufrodat 144","الفَصْلُ", "Musim", 6);
                    }
    
                    $this->load->view("templates/header-user", $data);
                    $this->load->view("hifdzi_1/index-mufrodat", $data);
                    $this->load->view("templates/footer-user", $data);
    
                } else if(!empty($_GET['id'])){
                    if($_GET['id'] == MD5('Mufrodat 1')){
                        $data['back'] = "";
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 2");
                        $data['tema'] = "Pertemuan 1";
                        $data['materi'] = "Mufrodat 1";
                        $data['title'] = "Kata Tanya Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 1");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مَا",
                                "arti" => "Apa",
                                "huruf" => array_unique(["مَ","ا"])
                            ],
                            [
                                "kata_arab" => "مَنْ",
                                "arti" => "Siapa",
                                "huruf" => array_unique(["مَ","نْ"])
                            ],
                            [
                                "kata_arab" => "مَاذَا",
                                "arti" => "Apa yang",
                                "huruf" => array_unique(["مَ","ا","ذَ","ا"])
                            ],
                            [
                                "kata_arab" => "لِمَاذَا",
                                "arti" => "Kenapa",
                                "huruf" => array_unique(["لِ","مَ","ا","ذَ","ا"])
                            ],
                            [
                                "kata_arab" => "مِمَّ",
                                "arti" => "Dari apa",
                                "huruf" => array_unique(["مِ","مَّ"])
                            ],
                            [
                                "kata_arab" => "بِمَاذَا",
                                "arti" => "Dengan apa",
                                "huruf" => array_unique(["بِ","مَ","ا","ذَ","ا"])
                            ],
                            [
                                "kata_arab" => "لِأَيِّ شَيْئٍ",
                                "arti" => "Untuk apa",
                                "huruf" => array_unique(["لِ","أَ","يِّ","_","شَ","يْ","ئٍ"])
                            ],
                            [
                                "kata_arab" => "مَعَ مَنْ",
                                "arti" => "Dengan siapa",
                                "huruf" => array_unique(["مَ","عَ","_","مَ","نْ"])
                            ],
                            [
                                "kata_arab" => "لِمَنْ",
                                "arti" => "Milik siapa",
                                "huruf" => array_unique(["لِ","مَ","نْ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 2')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 1");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 3");
                        $data['tema'] = "Pertemuan 1";
                        $data['materi'] = "Mufrodat 2";
                        $data['title'] = "Kata Tanya Bag. 2";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 2");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَيْنَ",
                                "arti" => "Dimana",
                                "huruf" => array_unique(["أَ","يْ","نَ"])
                            ],
                            [
                                "kata_arab" => "إِلَى أَيْنَ",
                                "arti" => "Mau kemana",
                                "huruf" => array_unique(["إِ","لَ","ى","_","أَ","يْ","نَ"])
                            ],
                            [
                                "kata_arab" => "مِنْ أَيْنَ",
                                "arti" => "Darimana",
                                "huruf" => array_unique(["مِ","نْ","_","أَ","يْ","نَ"])
                            ],
                            [
                                "kata_arab" => "كَيْفَ",
                                "arti" => "Bagaimana",
                                "huruf" => array_unique(["كَ","يْ","فَ"])
                            ],
                            [
                                "kata_arab" => "مَتَى",
                                "arti" => "Kapan",
                                "huruf" => array_unique(["مَ","تَ","ى"])
                            ],
                            [
                                "kata_arab" => "كَمْ",
                                "arti" => "Berapa (jumlah)",
                                "huruf" => array_unique(["كَ","مْ"])
                            ],
                            [
                                "kata_arab" => "بِكَمْ",
                                "arti" => "Berapa (harga)",
                                "huruf" => array_unique(["بِ","كَ","مْ"])
                            ],
                            [
                                "kata_arab" => "هَلْ / أَ",
                                "arti" => "Apakah",
                                "huruf" => array_unique(["هَ","لْ"])
                            ],
                            [
                                "kata_arab" => "أَيُّ",
                                "arti" => "Yang mana",
                                "huruf" => array_unique(["أَ","يُّ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 3')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 2");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 4");
                        $data['tema'] = "Pertemuan 1";
                        $data['materi'] = "Mufrodat 3";
                        $data['title'] = "Huruf Jar";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 3");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "بِ",
                                "arti" => "Dengan",
                                "huruf" => array_unique(["بِ","كَ","لِـ","لَـ"])
                            ],
                            [
                                "kata_arab" => "كَ",
                                "arti" => "Seperti",
                                "huruf" => array_unique(["بِ","كَ","لِـ","لَـ"])
                            ],
                            [
                                "kata_arab" => "لِـ",
                                "arti" => "Untuk",
                                "huruf" => array_unique(["لَـ","عَ","فِ","ي"])
                            ],
                            [
                                "kata_arab" => "لَـ",
                                "arti" => "Untuk",
                                "huruf" => array_unique(["لَـ","عَ","فِ","ي"])
                            ],
                            [
                                "kata_arab" => "إِلَى",
                                "arti" => "Kepada",
                                "huruf" => array_unique(["إِ","لَ","ى","فِ"])
                            ],
                            [
                                "kata_arab" => "عَلَى",
                                "arti" => "Diatas",
                                "huruf" => array_unique(["عَ","لَ","ى","فِ"])
                            ],
                            [
                                "kata_arab" => "مِنْ",
                                "arti" => "Dari",
                                "huruf" => array_unique(["مِ","نْ","حَ","تَّ","ى"])
                            ],
                            [
                                "kata_arab" => "فِي",
                                "arti" => "Didalam",
                                "huruf" => array_unique(["فِ","ي","حَ","تَّ"])
                            ],
                            [
                                "kata_arab" => "عَنْ",
                                "arti" => "Dari",
                                "huruf" => array_unique(["عَ","نْ","حَ","تَّ"])
                            ],
                            [
                                "kata_arab" => "حَتَّى",
                                "arti" => "Hingga",
                                "huruf" => array_unique(["حَ","تَّ","ى","عَ","نْ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 4')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 3");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 5");
                        $data['tema'] = "Pertemuan 1";
                        $data['materi'] = "Mufrodat 4";
                        $data['title'] = "Huruf Nidaa";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 4");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "يَا",
                                "arti" => "Hai",
                                "huruf" => array_unique(["يَ","ا","أَ","يُّ","هَ","ا","أَ","يَّ","تُ","هَ","ا"])
                            ],
                            [
                                "kata_arab" => "أَيُّهَا",
                                "arti" => "Wahai (Lk)",
                                "huruf" => array_unique(["أَ","يُّ","هَ","ا","أَ","يَّ","تُ","هَ","ا"])
                            ],
                            [
                                "kata_arab" => "أَيَّتُهَا",
                                "arti" => "Wahai (Pr)",
                                "huruf" => array_unique(["أَ","يُّ","هَ","ا","أَ","يَّ","تُ","هَ","ا"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 5')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 4");
                        $data['next'] = "";
                        $data['tema'] = "Pertemuan 1";
                        $data['materi'] = "Mufrodat 5";
                        $data['title'] = "Huruf Istisna";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 5");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "إِلَّا",
                                "arti" => "Kecuali",
                                "huruf" => array_unique(["إِ","لَّ","ا","يَ","ا"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 6')){
                        $data['back'] = "";
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 7");
                        $data['tema'] = "Pertemuan 2";
                        $data['materi'] = "Mufrodat 6";
                        $data['title'] = "Huruf Inna dan Saudaranya";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 6");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "إِنَّ",
                                "arti" => "Sesungguhnya",
                                "huruf" => array_unique(["إِ","نَّ","نَّ","كَ","نَّ"])
                            ],
                            [
                                "kata_arab" => "أَنَّ",
                                "arti" => "Sesungguhnya ",
                                "huruf" => array_unique(["إِ","نَّ","أَ","نَّ","كَ","أَ","نَّ"])
                            ],
                            [
                                "kata_arab" => "كَأَنَّ",
                                "arti" => "Seakan-akan",
                                "huruf" => array_unique(["إِ","نَّ","أَ","نَّ","كَ","أَ","نَّ"])
                            ],
                            [
                                "kata_arab" => "لَكِنَّ",
                                "arti" => "Akan tetapi",
                                "huruf" => array_unique(["لَ","كِ","نَّ","لَ","عَ","لَّ","لَ","يْ","تَ"])
                            ],
                            [
                                "kata_arab" => "لَعَلَّ",
                                "arti" => "Semoga, supaya",
                                "huruf" => array_unique(["لَ","كِ","نَّ","لَ","عَ","لَّ","لَ","يْ","تَ"])
                            ],
                            [
                                "kata_arab" => "لَيْتَ",
                                "arti" => "Andaikan",
                                "huruf" => array_unique(["لَ","كِ","نَّ","لَ","عَ","لَّ","لَ","يْ","تَ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 7')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 6");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 8");
                        $data['tema'] = "Pertemuan 2";
                        $data['materi'] = "Mufrodat 7";
                        $data['title'] = "Huruf Nashob";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 7");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَنْ",
                                "arti"	=> "Hendaknya",
                                "huruf" => array_unique(["أَ","نْ","لَ","نْ","إِ","ذَ","نْ","كَ","يْ","لِ","حَ","تَّ","ى"])
                            ],
                            [
                                "kata_arab" => "لَنْ",
                                "arti"	=> "Tidak akan",
                                "huruf" => array_unique(["أَ","نْ","لَ","نْ","إِ","ذَ","نْ","كَ","يْ","لِ","حَ","تَّ","ى"])
                            ],
                            [
                                "kata_arab" => "إِذَنْ",
                                "arti"	=> "Kalau demikian",
                                "huruf" => array_unique(["أَ","نْ","لَ","نْ","إِ","ذَ","نْ","كَ","يْ","لِ","حَ","تَّ","ى"])
                            ],
                            [
                                "kata_arab" => "كَيْ",
                                "arti"	=> "Supaya",
                                "huruf" => array_unique(["أَ","نْ","لَ","نْ","إِ","ذَ","نْ","كَ","يْ","حَ","تَّ","ى"])
                            ],
                            [
                                "kata_arab" => "لِ",
                                "arti"	=> "Supaya",
                                "huruf" => array_unique(["أَ","نْ","لَ","نْ","إِ","ذَ","نْ","كَ","يْ","لِ","حَ","تَّ","ى"])
                            ],
                            [
                                "kata_arab" => "حَتَّى",
                                "arti"	=> "Sehingga",
                                "huruf" => array_unique(["أَ","نْ","لَ","نْ","إِ","ذَ","نْ","كَ","يْ","لِ","حَ","تَّ","ى"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 8')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 7");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 9");
                        $data['tema'] = "Pertemuan 2";
                        $data['materi'] = "Mufrodat 8";
                        $data['title'] = "Huruf Jazm";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 8");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "لَمْ",
                                "arti" => "Tidak",
                                "huruf" => array_unique(["لَ","مْ","لِ","لَ","ا","إِ","نْ"])
                            ],
                            [
                                "kata_arab" => "لَمَّا",
                                "arti" => "Tidak",
                                "huruf" => array_unique(["لَ","مَّ","ا","لِ","لَ","ا","إِ","نْ"])
                            ],
                            [
                                "kata_arab" => "لِ",
                                "arti" => "Hendaklah",
                                "huruf" => array_unique(["لَ","مْ","لَ","مَّ","ا","لِ","لَ","ا","إِ","نْ"])
                            ],
                            [
                                "kata_arab" => "لَا",
                                "arti" => "Janganlah",
                                "huruf" => array_unique(["لَ","مْ","لَ","مَّ","ا","لِ","لَ","ا","إِ","نْ"])
                            ],
                            [
                                "kata_arab" => "إِنْ",
                                "arti" => "Jika",
                                "huruf" => array_unique(["لَ","مْ","لَ","مَّ","ا","لِ","لَ","ا","إِ","نْ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 9')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 8");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 10");
                        $data['tema'] = "Pertemuan 2";
                        $data['materi'] = "Mufrodat 9";
                        $data['title'] = "Huruf Taukid";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 9");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "قَدْ",
                                "arti" => "Sungguh",
                                "huruf" => array_unique(["قَ","دْ","لَ","مْ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 10')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 9");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 11");
                        $data['tema'] = "Pertemuan 2";
                        $data['materi'] = "Mufrodat 10";
                        $data['title'] = "Huruf Istiqbal";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 10");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سَ",
                                "arti" => "Akan",
                                "huruf" => array_unique(["سَ","دْ","لَ","قَ","مْ"])
                            ],
                            [
                                "kata_arab" => "سَوْفَ",
                                "arti" => "Akan",
                                "huruf" => array_unique(["سَ","وْ","فَ","دْ","لَ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 11')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 10");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 12");
                        $data['tema'] = "Pertemuan 2";
                        $data['materi'] = "Mufrodat 11";
                        $data['title'] = "Huruf Athof";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 11");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "وَ",
                                "arti" => "Dan",
                                "huruf" => array_unique(["وَ","أَ","وْ","فَ","أَ","مْ"])
                            ],
                            [
                                "kata_arab" => "أَوْ",
                                "arti" => "Atau",
                                "huruf" => array_unique(["وَ","أَ","وْ","فَ","أَ"])
                            ],
                            [
                                "kata_arab" => "فَ",
                                "arti" => "Lalu",
                                "huruf" => array_unique(["وَ","أَ","وْ","فَ","أَ","مْ"])
                            ],
                            [
                                "kata_arab" => "أَمْ",
                                "arti" => "Atau",
                                "huruf" => array_unique(["وَ","أَ","وْ","فَ","أَ","مْ"])
                            ],
                            [
                                "kata_arab" => "إِمَّا",
                                "arti" => "Atau",
                                "huruf" => array_unique(["إِ","مَّ","ا","ثُ","مَّ","بَ","لْ","حَ","تَّ","ى","لَ","كِ","نْ"])
                            ],
                            [
                                "kata_arab" => "ثُمَّ",
                                "arti" => "Kemudian",
                                "huruf" => array_unique(["إِ","مَّ","ا","ثُ","مَّ","بَ","لْ","حَ","تَّ","ى","لَ","كِ","نْ"])
                            ],
                            [
                                "kata_arab" => "بَلْ",
                                "arti" => "Bahkan",
                                "huruf" => array_unique(["إِ","مَّ","ا","ثُ","مَّ","بَ","لْ","حَ","تَّ","ى","لَ","كِ","نْ"])
                            ],
                            [
                                "kata_arab" => "حَتَّى",
                                "arti" => "Sehingga",
                                "huruf" => array_unique(["إِ","مَّ","ا","ثُ","مَّ","بَ","لْ","حَ","تَّ","ى","لَ","كِ","نْ"])
                            ],
                            [
                                "kata_arab" => "لَكِنْ",
                                "arti" => "Tetapi",
                                "huruf" => array_unique(["إِ","مَّ","ا","ثُ","مَّ","بَ","لْ","حَ","تَّ","ى","لَ","كِ","نْ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 12')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 11");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 13");
                        $data['tema'] = "Pertemuan 2";
                        $data['materi'] = "Mufrodat 12";
                        $data['title'] = "Huruf Nafi";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 12");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "لَا",
                                "arti" => "Tidak",
                                "huruf" => array_unique(["لَ","ا","وْ","فَ","أَ","حَ"])
                            ],
                            [
                                "kata_arab" => "مَا",
                                "arti" => "Tidak",
                                "huruf" => array_unique(["مَ","ا","وْ","فَ","أَ","حَ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 13')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 12");
                        $data['next'] = "";
                        $data['tema'] = "Pertemuan 2";
                        $data['materi'] = "Mufrodat 13";
                        $data['title'] = "Huruf Istifham";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 13");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "هَلْ",
                                "arti" => "Apakah",
                                "huruf" => array_unique(["هَ","لْ","لَ","ا","وْ","فَ","حَ"])
                            ],
                            [
                                "kata_arab" => "أَ",
                                "arti" => "Apakah",
                                "huruf" => array_unique(["أَ","لَ","ا","وْ","فَ","أَ","حَ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 14')){
                        $data['back'] = "";
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 15");
                        $data['tema'] = "Pertemuan 3";
                        $data['materi'] = "Mufrodat 14";
                        $data['title'] = "Bilangan";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 14");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "وَاحِدٌ",
                                "arti" => "1",
                                "huruf" => array_unique(["وَ","ا","حِ","دٌ"])
                            ],
                            [
                                "kata_arab" => "اِثْنَانِ",
                                "arti" => "2",
                                "huruf" => array_unique(["اِ","ثْ","نَ","ا","نِ"])
                            ],
                            [
                                "kata_arab" => "ثَلَاثَةٌ",
                                "arti" => "3",
                                "huruf" => array_unique(["ثَ","لَ","ا","ثَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "أَرْبَعَةٌ",
                                "arti" => "4",
                                "huruf" => array_unique(["أَ","رْ","بَ","عَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "خَمْسَةٌ",
                                "arti" => "5",
                                "huruf" => array_unique(["خَ","مْ","سَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سِتَّةٌ",
                                "arti" => "6",
                                "huruf" => array_unique(["سِ","تَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَبْعَةٌ",
                                "arti" => "7",
                                "huruf" => array_unique(["سَ","بْ","عَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "ثَمَانِيَةٌ",
                                "arti" => "8",
                                "huruf" => array_unique(["ثَ","مَ","ا","نِ","يَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "تِسْعَةٌ",
                                "arti" => "9",
                                "huruf" => array_unique(["تِ","سْ","عَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "عَشَرَةٌ",
                                "arti" => "10",
                                "huruf" => array_unique(["عَ","شَ","رَ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 15')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 14");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 16");
                        $data['tema'] = "Pertemuan 3";
                        $data['materi'] = "Mufrodat 15";
                        $data['title'] = "Bilangan";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 15");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَحَدَ عَشَرَ",
                                "arti" => "11",
                                "huruf"=> array_unique(["أَ","حَ","دَ","_","عَ","شَ","رَ"])
                            ],
                            [
                                "kata_arab" => "اِثْنَا عَشَرَ",
                                "arti" => "12",
                                "huruf"=> array_unique(["اِ","ثْ","نَ","ا","_","عَ","شَ","رَ"])
                            ],
                            [
                                "kata_arab" => "ثَلَاثَةَ عَشَرَ",
                                "arti" => "13",
                                "huruf"=> array_unique(["ثَ","لَ","ا","ثَ","ةَ","_","عَ","شَ","رَ"])
                            ],
                            [
                                "kata_arab" => "أَرْبَعَةَ عَشَرَ",
                                "arti" => "14",
                                "huruf"=> array_unique(["أَ","رْ","بَ","عَ","ةَ","_","عَ","شَ","رَ"])
                            ],
                            [
                                "kata_arab" => "خَمْسَةَ عَشَرَ",
                                "arti" => "15",
                                "huruf"=> array_unique(["خَ","مْ","سَ","ةَ","_","عَ","شَ","رَ"])
                            ],
                            [
                                "kata_arab" => "سِتَّةَ عَشَرَ",
                                "arti" => "16",
                                "huruf"=> array_unique(["سِ","تَّ","ةَ","_","عَ","شَ","رَ"])
                            ],
                            [
                                "kata_arab" => "سَبْعَةَ عَشَرَ",
                                "arti" => "17",
                                "huruf"=> array_unique(["سَ","بْ","عَ","ةَ","_","عَ","شَ","رَ"])
                            ],
                            [
                                "kata_arab" => "ثَمَانِيَةَ عَشَرَ",
                                "arti" => "18",
                                "huruf"=> array_unique(["ثَ","مَ","ا","نِ","يَ","ةَ","_","عَ","شَ","رَ"])
                            ],
                            [
                                "kata_arab" => "تِسْعَةَ عَشَرَ",
                                "arti" => "19",
                                "huruf"=> array_unique(["تِ","سْ","عَ","ةَ","_","عَ","شَ","رَ"])
                            ],
                            [
                                "kata_arab" => "عِشْرُوْنَ",
                                "arti" => "20",
                                "huruf"=> array_unique(["عِ","شْ","رُ","وْ","نَ"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 16')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 15");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 17");
                        $data['tema'] = "Pertemuan 3";
                        $data['materi'] = "Mufrodat 16";
                        $data['title'] = "Bilangan";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 16");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "عِشْرُوْنَ",
                                "arti" => "20",
                                "huruf" => array_unique(["عِ","شْ","رُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "ثَلَاثُوْنَ",
                                "arti" => "30",
                                "huruf" => array_unique(["ثَ","لَ","ا","ثُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "أَرْبَعُوْنَ",
                                "arti" => "40",
                                "huruf" => array_unique(["أَ","رْ","بَ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "خَمْسُوْنَ",
                                "arti" => "50",
                                "huruf" => array_unique(["خَ","مْ","سُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "سِتُّوْنَ",
                                "arti" => "60",
                                "huruf" => array_unique(["سِ","تُّ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "سَبْعُوْنَ",
                                "arti" => "70",
                                "huruf" => array_unique(["سَ","بْ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "ثَمَانُوْنَ",
                                "arti" => "80",
                                "huruf" => array_unique(["ثَ","مَ","ا","نُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "تِسْعُوْنَ",
                                "arti" => "90",
                                "huruf" => array_unique(["تِ","سْ","عُ","وْ","نَ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 17')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 16");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 18");
                        $data['tema'] = "Pertemuan 3";
                        $data['materi'] = "Mufrodat 17";
                        $data['title'] = "Bilangan";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 17");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مِائَةٌ",
                                "arti" => "100",
                                "huruf" => array_unique(["مِ","ا","ئَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مِائَتَانِ",
                                "arti" => "200",
                                "huruf" => array_unique(["مِ","ا","ئَ","تَ","ا","نِ"])
                            ],
                            [
                                "kata_arab" => "ثَلَاثُمِائَةٍ",
                                "arti" => "300",
                                "huruf" => array_unique(["ثَ","لَ","ا","ثُ","مِ","ا","ئَ","ةٍ"])
                            ],
                            [
                                "kata_arab" => "أَرْبَعُمِائَةٍ",
                                "arti" => "400",
                                "huruf" => array_unique(["أَ","رْ","بَ","عُ","مِ","ا","ئَ","ةٍ"])
                            ],
                            [
                                "kata_arab" => "خَمْسُمِائَةٍ",
                                "arti" => "500",
                                "huruf" => array_unique(["خَ","مْ","سُ","مِ","ا","ئَ","ةٍ"])
                            ],
                            [
                                "kata_arab" => "سِتُّمِائَةٍ",
                                "arti" => "600",
                                "huruf" => array_unique(["سِ","تُّ","مِ","ا","ئَ","ةٍ"])
                            ],
                            [
                                "kata_arab" => "سَبْعُمِائَةٍ",
                                "arti" => "700",
                                "huruf" => array_unique(["سَ","بْ","عُ","مِ","ا","ئَ","ةٍ"])
                            ],
                            [
                                "kata_arab" => "ثَمَانُمِائَةٍ",
                                "arti" => "800",
                                "huruf" => array_unique(["ثَ","مَ","ا","نُ","مِ","ا","ئَ","ةٍ"])
                            ],
                            [
                                "kata_arab" => "تِسْعُمِائَةٍ",
                                "arti" => "900",
                                "huruf" => array_unique(["تِ","سْ","عُ","مِ","ا","ئَ","ةٍ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 18')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 17");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 19");
                        $data['tema'] = "Pertemuan 3";
                        $data['materi'] = "Mufrodat 18";
                        $data['title'] = "Bilangan";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 18");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "وَاحِدٌ وَ عِشْرُوْنَ",
                                "arti" => "21",
                                "huruf" => array_unique(["وَ","ا","حِ","دٌ","_","وَ","_","عِ","شْ","رُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "اِثْنَانِ وَ عِشْرُوْنَ",
                                "arti" => "22",
                                "huruf" => array_unique(["اِ","ثْ","نَ","ا","نِ","_","وَ","عِ","شْ","رُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "ثَلَاثَةٌ وَ عِشْرُوْنَ",
                                "arti" => "23",
                                "huruf" => array_unique(["ثَ","لَ","ا","ثَ","ةٌ","_","وَ","_","عِ","شْ","رُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "أَرْبَعَةٌ وَ عِشْرُوْنَ",
                                "arti" => "24",
                                "huruf" => array_unique(["أَ","رْ","بَ","عَ","ةٌ","_","وَ","_","عِ","شْ","رُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "خَمْسَةٌ وَ عِشْرُوْنَ",
                                "arti" => "25",
                                "huruf" => array_unique(["خَ","مْ","سَ","ةٌ","_","وَ","عِ","شْ","رُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "سِتَّةٌ وَ عِشْرُوْنَ",
                                "arti" => "26",
                                "huruf" => array_unique(["سِ","تَّ","ةٌ","_","وَ","_","عِ","شْ","رُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "سَبْعَةٌ وَ عِشْرُوْنَ",
                                "arti" => "27",
                                "huruf" => array_unique(["سَ","بْ","عَ","ةٌ","_","وَ","_","عِ","شْ","رُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "ثَمَانِيَةٌ وَ عِشْرُوْنَ",
                                "arti" => "28",
                                "huruf" => array_unique(["ثَ","مَ","ا","نِ","يَ","ةٌ","_","وَ","_","عِ","شْ","رُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "تِسْعَةٌ وَ عِشْرُوْنَ",
                                "arti" => "29",
                                "huruf" => array_unique(["تِ","سْ","عَ","ةٌ","_","وَ","_","عِ","شْ","رُ","وْ","نَ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 19')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 18");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 20");
                        $data['tema'] = "Pertemuan 3";
                        $data['materi'] = "Mufrodat 19";
                        $data['title'] = "Bilangan";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 19");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "وَاحِدٌ وَ ثَلَاثُوْنَ",
                                "arti" => "31",
                                "huruf" => array_unique(["وَ","ا","حِ","دٌ","_","وَ","_","ثَ","لَ","ا","ثُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "اِثْنَانِ وَ ثَلَاثُوْنَ",
                                "arti" => "32",
                                "huruf" => array_unique(["اِ","ثْ","نَ","ا","نِ","_","وَ","_","ثَ","لَ","ا","ثُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "ثَلَاثَةٌ وَ ثَلَاثُوْنَ",
                                "arti" => "33",
                                "huruf" => array_unique(["ثَ","لَ","ا","ثَ","ةٌ","_","وَ","_","ثَ","لَ","ا","ثُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "أَرْبَعَةٌ وَ ثَلَاثُوْنَ",
                                "arti" => "34",
                                "huruf" => array_unique(["أَ","رْ","بَ","عَ","ةٌ","_","وَ","_","ثَ","لَ","ا","ثُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "خَمْسَةٌ وَ ثَلَاثُوْنَ",
                                "arti" => "35",
                                "huruf" => array_unique(["خَ","مْ","سَ","ةٌ","_","وَ","ثَ","لَ","ا","ثُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "سِتَّةٌ وَ ثَلَاثُوْنَ",
                                "arti" => "36",
                                "huruf" => array_unique(["سِ","تَّ","ةٌ","_","وَ","ثَ","لَ","ا","ثُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "سَبْعَةٌ وَ ثَلَاثُوْنَ",
                                "arti" => "37",
                                "huruf" => array_unique(["سَ","بْ","عَ","ةٌ","_","وَ","ثَ","لَ","ا","ثُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "ثَمَانِيَةٌ وَ ثَلَاثُوْنَ",
                                "arti" => "38",
                                "huruf" => array_unique(["ثَ","مَ","ا","نِ","يَ","ةٌ","_","وَ","ثَ","لَ","ا","ثُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "تِسْعَةٌ وَ ثَلَاثُوْنَ",
                                "arti" => "39",
                                "huruf" => array_unique(["تِ","سْ","عَ","ةٌ","_","وَ","ثَ","لَ","ا","ثُ","وْ","نَ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 20')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 19");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 21");
                        $data['tema'] = "Pertemuan 3";
                        $data['materi'] = "Mufrodat 20";
                        $data['title'] = "Bilangan";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 20");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "وَاحِدٌ وَ أَرْبَعُوْنَ",
                                "arti" => "41",
                                "huruf" => array_unique(["وَ","ا","حِ","دٌ","_","وَ","أَ","رْ","بَ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "اِثْنَانِ وَ أَرْبَعُوْنَ",
                                "arti" => "42",
                                "huruf" => array_unique(["اِ","ثْ","نَ","ا","نِ","_","وَ","أَ","رْ","بَ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "ثَلَاثَةٌ وَ أَرْبَعُوْنَ",
                                "arti" => "43",
                                "huruf" => array_unique(["ثَ","لَ","ا","ثَ","ةٌ","_","وَ","أَ","رْ","بَ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "أَرْبَعَةٌ وَ أَرْبَعُوْنَ",
                                "arti" => "44",
                                "huruf" => array_unique(["أَ","رْ","بَ","عَ","ةٌ","_","وَ","أَ","رْ","بَ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "خَمْسَةٌ وَ أَرْبَعُوْنَ",
                                "arti" => "45",
                                "huruf" => array_unique(["خَ","مْ","سَ","ةٌ","_","وَ","أَ","رْ","بَ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "سِتَّةٌ وَ أَرْبَعُوْنَ",
                                "arti" => "46",
                                "huruf" => array_unique(["سِ","تَّ","ةٌ","_","وَ","أَ","رْ","بَ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "سَبْعَةٌ وَ أَرْبَعُوْنَ",
                                "arti" => "47",
                                "huruf" => array_unique(["سَ","بْ","عَ","ةٌ","_","وَ","أَ","رْ","بَ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "ثَمَانِيَةٌ وَ أَرْبَعُوْنَ",
                                "arti" => "48",
                                "huruf" => array_unique(["ثَ","مَ","ا","نِ","يَ","ةٌ","_","وَ","أَ","رْ","بَ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "تِسْعَةٌ وَ أَرْبَعُوْنَ",
                                "arti" => "49",
                                "huruf" => array_unique(["تِ","سْ","عَ","ةٌ","_","وَ","أَ","رْ","بَ","عُ","وْ","نَ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 21')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 20");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 22");
                        $data['tema'] = "Pertemuan 3";
                        $data['materi'] = "Mufrodat 21";
                        $data['title'] = "Bilangan";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 21");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "وَاحِدٌ وَ خَمْسُوْنَ",
                                "arti" => "51",
                                "huruf" => array_unique(["وَ","ا","حِ","دٌ","_","وَ","خَ","مْ","سُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "اِثْنَانِ وَ خَمْسُوْنَ",
                                "arti" => "52",
                                "huruf" => array_unique(["اِ","ثْ","نَ","ا","نِ","_","وَ","خَ","مْ","سُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "ثَلَاثَةٌ وَ خَمْسُوْنَ",
                                "arti" => "53",
                                "huruf" => array_unique(["ثَ","لَ","ا","ثَ","ةٌ","_","وَ","خَ","مْ","سُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "أَرْبَعَةٌ وَ خَمْسُوْنَ",
                                "arti" => "54",
                                "huruf" => array_unique(["أَ","رْ","بَ","عَ","ةٌ","_","وَ","خَ","مْ","سُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "خَمْسَةٌ وَ خَمْسُوْنَ",
                                "arti" => "55",
                                "huruf" => array_unique(["خَ","مْ","سَ","ةٌ","_","وَ","خَ","مْ","سُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "سِتَّةٌ وَ خَمْسُوْنَ",
                                "arti" => "56",
                                "huruf" => array_unique(["سِ","تَّ","ةٌ","_","وَ","خَ","مْ","سُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "سَبْعَةٌ وَ خَمْسُوْنَ",
                                "arti" => "57",
                                "huruf" => array_unique(["سَ","بْ","عَ","ةٌ","_","وَ","خَ","مْ","سُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "ثَمَانِيَةٌ وَ خَمْسُوْنَ",
                                "arti" => "58",
                                "huruf" => array_unique(["ثَ","مَ","ا","نِ","يَ","ةٌ","_","وَ","خَ","مْ","سُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "تِسْعَةٌ وَ خَمْسُوْنَ",
                                "arti" => "59",
                                "huruf" => array_unique(["تِ","سْ","عَ","ةٌ","_","وَ","خَ","مْ","سُ","وْ","نَ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 22')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 21");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 23");
                        $data['tema'] = "Pertemuan 3";
                        $data['materi'] = "Mufrodat 22";
                        $data['title'] = "Bilangan";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 22");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "وَاحِدٌ وَ سِتُّوْنَ",
                                "arti" => "61",
                                "huruf" => array_unique(["وَ","ا","حِ","دٌ","_","وَ","سِ","تُّ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "اِثْنَانِ وَ سِتُّوْنَ",
                                "arti" => "62",
                                "huruf" => array_unique(["اِ","ثْ","نَ","ا","نِ","_","وَ","سِ","تُّ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "ثَلَاثَةٌ وَ سِتُّوْنَ",
                                "arti" => "63",
                                "huruf" => array_unique(["ثَ","لَ","ا","ثَ","ةٌ","_","وَ","سِ","تُّ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "أَرْبَعَةٌ وَ سِتُّوْنَ",
                                "arti" => "64",
                                "huruf" => array_unique(["أَ","رْ","بَ","عَ","ةٌ","_","وَ","سِ","تُّ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "خَمْسَةٌ وَ سِتُّوْنَ",
                                "arti" => "65",
                                "huruf" => array_unique(["خَ","مْ","سَ","ةٌ","_","وَ","سِ","تُّ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "سِتَّةٌ وَ سِتُّوْنَ",
                                "arti" => "66",
                                "huruf" => array_unique(["سِ","تَّ","ةٌ","_","وَ","سِ","تُّ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "سَبْعَةٌ وَ سِتُّوْنَ",
                                "arti" => "67",
                                "huruf" => array_unique(["سَ","بْ","عَ","ةٌ","_","وَ","سِ","تُّ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "ثَمَانِيَةٌ وَ سِتُّوْنَ",
                                "arti" => "68",
                                "huruf" => array_unique(["ثَ","مَ","ا","نِ","يَ","ةٌ","_","وَ","سِ","تُّ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "تِسْعَةٌ وَ سِتُّوْنَ",
                                "arti" => "69",
                                "huruf" => array_unique(["تِ","سْ","عَ","ةٌ","_","وَ","سِ","تُّ","وْ","نَ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 23')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 22");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 24");
                        $data['tema'] = "Pertemuan 3";
                        $data['materi'] = "Mufrodat 23";
                        $data['title'] = "Bilangan";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 23");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "وَاحِدٌ وَ سَبْعُوْنَ",
                                "arti" => "71",
                                "huruf" => array_unique(["وَ","ا","حِ","دٌ","_","وَ","سَ","بْ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "اِثْنَانِ وَ سَبْعُوْنَ",
                                "arti" => "72",
                                "huruf" => array_unique(["اِ","ثْ","نَ","ا","نِ","_","وَ","سَ","بْ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "ثَلَاثَةٌ وَ سَبْعُوْنَ",
                                "arti" => "73",
                                "huruf" => array_unique(["ثَ","لَ","ا","ثَ","ةٌ","_","وَ","سَ","بْ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "أَرْبَعَةٌ وَ سَبْعُوْنَ",
                                "arti" => "74",
                                "huruf" => array_unique(["أَ","رْ","بَ","عَ","ةٌ","_","وَ","سَ","بْ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "خَمْسَةٌ وَ سَبْعُوْنَ",
                                "arti" => "75",
                                "huruf" => array_unique(["خَ","مْ","سَ","ةٌ","_","وَ","سَ","بْ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "سِتَّةٌ وَ سَبْعُوْنَ",
                                "arti" => "76",
                                "huruf" => array_unique(["سِ","تَّ","ةٌ","_","وَ","سَ","بْ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "سَبْعَةٌ وَ سَبْعُوْنَ",
                                "arti" => "77",
                                "huruf" => array_unique(["سَ","بْ","عَ","ةٌ","_","وَ","سَ","بْ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "ثَمَانِيَةٌ وَ سَبْعُوْنَ",
                                "arti" => "78",
                                "huruf" => array_unique(["ثَ","مَ","ا","نِ","يَ","ةٌ","_","وَ","سَ","بْ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "تِسْعَةٌ وَ سَبْعُوْنَ",
                                "arti" => "79",
                                "huruf" => array_unique(["تِ","سْ","عَ","ةٌ","_","وَ","سَ","بْ","عُ","وْ","نَ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 24')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 23");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 25");
                        $data['tema'] = "Pertemuan 3";
                        $data['materi'] = "Mufrodat 24";
                        $data['title'] = "Bilangan";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 24");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "وَاحِدٌ وَ ثَمَانُوْنَ",
                                "arti" => "81",
                                "huruf" => array_unique(["وَ","ا","حِ","دٌ","_","وَ","ثَ","مَ","ا","نُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "اِثْنَانِ وَ ثَمَانُوْنَ",
                                "arti" => "82",
                                "huruf" => array_unique(["اِ","ثْ","نَ","ا","نِ","_","وَ","ثَ","مَ","ا","نُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "ثَلَاثَةٌ وَ ثَمَانُوْنَ",
                                "arti" => "83",
                                "huruf" => array_unique(["ثَ","لَ","ا","ثَ","ةٌ","_","وَ","ثَ","مَ","ا","نُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "أَرْبَعَةٌ وَ ثَمَانُوْنَ",
                                "arti" => "84",
                                "huruf" => array_unique(["أَ","رْ","بَ","عَ","ةٌ","_","وَ","ثَ","مَ","ا","نُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "خَمْسَةٌ وَ ثَمَانُوْنَ",
                                "arti" => "85",
                                "huruf" => array_unique(["خَ","مْ","سَ","ةٌ","_","وَ","ثَ","مَ","ا","نُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "سِتَّةٌ وَ ثَمَانُوْنَ",
                                "arti" => "86",
                                "huruf" => array_unique(["سِ","تَّ","ةٌ","_","وَ","ثَ","مَ","ا","نُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "سَبْعَةٌ وَ ثَمَانُوْنَ",
                                "arti" => "87",
                                "huruf" => array_unique(["سَ","بْ","عَ","ةٌ","_","وَ","ثَ","مَ","ا","نُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "ثَمَانِيَةٌ وَ ثَمَانُوْنَ",
                                "arti" => "88",
                                "huruf" => array_unique(["ثَ","مَ","ا","نِ","يَ","ةٌ","_","وَ","ثَ","مَ","ا","نُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "تِسْعَةٌ وَ ثَمَانُوْنَ",
                                "arti" => "89",
                                "huruf" => array_unique(["تِ","سْ","عَ","ةٌ","_","وَ","ثَ","مَ","ا","نُ","وْ","نَ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 25')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 24");
                        $data['next'] = "";
                        $data['tema'] = "Pertemuan 3";
                        $data['materi'] = "Mufrodat 25";
                        $data['title'] = "Bilangan";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 25");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "وَاحِدٌ وَ تِسْعُوْنَ",
                                "arti" => "91",
                                "huruf" => array_unique(["وَ","ا","حِ","دٌ","_","وَ","تِ","سْ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "اِثْنَانِ وَ تِسْعُوْنَ",
                                "arti" => "92",
                                "huruf" => array_unique(["اِ","ثْ","نَ","ا","نِ","_","وَ","تِ","سْ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "ثَلَاثَةٌ وَ تِسْعُوْنَ",
                                "arti" => "93",
                                "huruf" => array_unique(["ثَ","لَ","ا","ثَ","ةٌ","_","وَ","تِ","سْ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "أَرْبَعَةٌ وَ تِسْعُوْنَ",
                                "arti" => "94",
                                "huruf" => array_unique(["أَ","رْ","بَ","عَ","ةٌ","_","وَ","تِ","سْ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "خَمْسَةٌ وَ تِسْعُوْنَ",
                                "arti" => "95",
                                "huruf" => array_unique(["خَ","مْ","سَ","ةٌ","_","وَ","تِ","سْ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "سِتَّةٌ وَ تِسْعُوْنَ",
                                "arti" => "96",
                                "huruf" => array_unique(["سِ","تَّ","ةٌ","_","وَ","تِ","سْ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "سَبْعَةٌ وَ تِسْعُوْنَ",
                                "arti" => "97",
                                "huruf" => array_unique(["سَ","بْ","عَ","ةٌ","_","وَ","تِ","سْ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "ثَمَانِيَةٌ وَ تِسْعُوْنَ",
                                "arti" => "98",
                                "huruf" => array_unique(["ثَ","مَ","ا","نِ","يَ","ةٌ","_","وَ","تِ","سْ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "تِسْعَةٌ وَ تِسْعُوْنَ",
                                "arti" => "99",
                                "huruf" => array_unique(["تِ","سْ","عَ","ةٌ","_","وَ","تِ","سْ","عُ","وْ","نَ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 26')){
                        $data['back'] = "";
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 27");
                        $data['tema'] = "Pertemuan 4";
                        $data['materi'] = "Mufrodat 26";
                        $data['title'] = "Keterangan Tempat";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 26");
                        $data['mufrodat'] =[
                            [
                                "kata_arab" => "أَمَامَ",
                                "arti" => "Di depan",
                                "huruf" => array_unique(["أَ","مَ","ا","مَ"])
                            ],
                            [
                                "kata_arab" => "وَرَاءَ / خَلْفَ",
                                "arti" => "Di belakang",
                                "huruf" => array_unique(["وَ","رَ","ا","ءَ"])
                            ],
                            [
                                "kata_arab" => "فَوْقَ / عَلَى",
                                "arti" => "Di atas",
                                "huruf" => array_unique(["فَ","وْ","قَ"])
                            ],
                            [
                                "kata_arab" => "تَحْتَ",
                                "arti" => "Di bawah",
                                "huruf" => array_unique(["تَ","حْ","تَ"])
                            ],
                            [
                                "kata_arab" => "دَاخِلَ",
                                "arti" => "Di dalam",
                                "huruf" => array_unique(["دَ","ا","خِ","لَ"])
                            ],
                            [
                                "kata_arab" => "خَارِجَ",
                                "arti" => "Di luar",
                                "huruf" => array_unique(["خَ","ا","رِ","جَ"])
                            ],
                            [
                                "kata_arab" => "بَيْنَ",
                                "arti" => "Di antara",
                                "huruf" => array_unique(["بَ","يْ","نَ"])
                            ],
                            [
                                "kata_arab" => "جَانِبَ",
                                "arti" => "Di samping",
                                "huruf" => array_unique(["جَ","ا","نِ","بَ"])
                            ],
                            [
                                "kata_arab" => "هُنَا",
                                "arti" => "Di sini",
                                "huruf" => array_unique(["هُ","نَ","ا","كَ"])
                            ],
                            [
                                "kata_arab" => "هُنَاكَ",
                                "arti" => "Di sana",
                                "huruf" => array_unique(["هُ","نَ","ا","كَ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 27')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 26");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 28");
                        $data['tema'] = "Pertemuan 4";
                        $data['materi'] = "Mufrodat 27";
                        $data['title'] = "Keterangan Waktu Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 27");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "اَلْيَوْمَ",
                                "arti" => "Hari ini",
                                "huruf" => array_unique(["اَلْ","يَ","وْ","مَ"])
                            ],
                            [
                                "kata_arab" => "اَلْآنَ",
                                "arti" => "Sekarang",
                                "huruf" => array_unique(["اَلْ","آ","نَ"])
                            ],
                            [
                                "kata_arab" => "قَبْلَ",
                                "arti" => "Sebelum",
                                "huruf" => array_unique(["قَ","بْ","لَ"])
                            ],
                            [
                                "kata_arab" => "بَعْدَ",
                                "arti" => "Setelah",
                                "huruf" => array_unique(["بَ","عْ","دَ"])
                            ],
                            [
                                "kata_arab" => "غَدًا",
                                "arti" => "Besok",
                                "huruf" => array_unique(["غَ","دً","ا"])
                            ],
                            [
                                "kata_arab" => "بَعْدَ الْغَدِّ",
                                "arti" => "Besok lusa",
                                "huruf" => array_unique(["بَ","عْ","دَ","_","الْ","غَ","دِّ"])
                            ],
                            [
                                "kata_arab" => "بِالْأَمْسِ",
                                "arti" => "Kemarin",
                                "huruf" => array_unique(["بِ","الْ","أَ","مْ","سِ"])
                            ],
                            [
                                "kata_arab" => "أَوَّلَ الْأَمْسِ",
                                "arti" => "Kemarin lusa",
                                "huruf" => array_unique(["أَ","وَّ","لَ","_","الْ","أَ","مْ","سِ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 28')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 27");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 29");
                        $data['tema'] = "Pertemuan 4";
                        $data['materi'] = "Mufrodat 28";
                        $data['title'] = "Keterangan Waktu Bag. 2";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 28");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "صَبَاحًا",
                                "arti" => "Pagi",
                                "huruf" => array_unique(["صَ","بَ","ا","حً","ا"])
                            ],
                            [
                                "kata_arab" => "نَهَارًا",
                                "arti" => "Siang",
                                "huruf" => array_unique(["نَ","هَ","ا","رً","ا"])
                            ],
                            [
                                "kata_arab" => "مَسَاءً",
                                "arti" => "Sore",
                                "huruf" => array_unique(["مَ","سَ","ا","ءً"])
                            ],
                            [
                                "kata_arab" => "لَيْلًا",
                                "arti" => "Malam",
                                "huruf" => array_unique(["لَ","يْ","لً","ا"])
                            ],
                            [
                                "kata_arab" => "لَاحِقًا",
                                "arti" => "Nanti",
                                "huruf" => array_unique(["لَ","ا","حِ","قً","ا"])
                            ],
                            [
                                "kata_arab" => "آنِفًا",
                                "arti" => "Barusan",
                                "huruf" => array_unique(["آ","نِ","فً","ا"])
                            ],
                            [
                                "kata_arab" => "حَدِيْثًا",
                                "arti" => "Barusan",
                                "huruf" => array_unique(["حَ","دِ","يْ","ثً","ا"])
                            ],
                            [
                                "kata_arab" => "بَعْدَ قَلِيْلٍ",
                                "arti" => "Sebentar lagi",
                                "huruf" => array_unique(["بَ","عْ","دَ","_","قَ","لِ","يْ","لٍ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 29')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 28");
                        $data['next'] = "";
                        $data['tema'] = "Pertemuan 4";
                        $data['materi'] = "Mufrodat 29";
                        $data['title'] = "Keterangan Waktu Bag. 3";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 29");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "اَلْأُسْبُوْعُ الْمَاضِى",
                                "arti" => "Minggu lalu",
                                "huruf" => array_unique(["اَلْ","أُ","سْ","بُ","وْ","عُ","_","الْ","مَ","ضِ","ى","ا"])
                            ],
                            [
                                "kata_arab" => "اَلْأُسْبُوْعُ الْقَادِمُ",
                                "arti" => "Minggu depan",
                                "huruf" => array_unique(["اَلْ","أُ","سْ","بُ","وْ","عُ","_","الْ","قَ","ا","دِ","مُ"])
                            ],
                            [
                                "kata_arab" => "اَلشَّهْرُ الْمَاضِى",
                                "arti" => "Bulan lalu",
                                "huruf" => array_unique(["اَل","شَّ","هْ","رُ","_","الْ","مَ","ا","ضِ","ى"])
                            ],
                            [
                                "kata_arab" => "اَلشَّهْرُ الْقَادِمُ",
                                "arti" => "Bulan depan",
                                "huruf" => array_unique(["اَل","شَّ","هْ","رُ","_","الْ","قَ","ا","دِ","مُ"])
                            ],
                            [
                                "kata_arab" => "اَلسَّنَةُ الْمَاضِيَةُ",
                                "arti" => "Tahun lalu",
                                "huruf" => array_unique(["اَل","سَّ","نَ","ةُ","_","الْ","مَ","ا","ضِ","يَ","ةُ"])
                            ],
                            [
                                "kata_arab" => "اَلسَّنَةُ الْقَادِمَةُ",
                                "arti" => "Tahun depan",
                                "huruf" => array_unique(["اَل","سَّ","نَ","ةُ","_","الْ","قَ","ا","دِ","مَ","ةُ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 30')){
                        $data['back'] = "";
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 31");
                        $data['tema'] = "Pertemuan 5";
                        $data['materi'] = "Mufrodat 30";
                        $data['title'] = "Anggota Tubuh Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 30");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "عَقْلٌ",
                                "arti" => "Akal",
                                "huruf" => array_unique(["عَ","قْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "رَأْسٌ",
                                "arti" => "Kepala",
                                "huruf" => array_unique(["رَ","أْ","سٌ"])
                            ],
                            [
                                "kata_arab" => "وَجْهٌ",
                                "arti" => "Wajah",
                                "huruf" => array_unique(["وَ","جْ","هٌ"])
                            ],
                            [
                                "kata_arab" => "شَعْرٌ",
                                "arti" => "Rambut",
                                "huruf" => array_unique(["شَ","عْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "جَبْهَةٌ",
                                "arti" => "Kening",
                                "huruf" => array_unique(["جَ","بْ","هَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "أُذُنٌ",
                                "arti" => "Telinga",
                                "huruf" => array_unique(["أُ","ذُ","نٌ"])
                            ],
                            [
                                "kata_arab" => "عَارِضٌ",
                                "arti" => "Jambang",
                                "huruf" => array_unique(["عَ","ا","رِ","ضٌ"])
                            ],
                            [
                                "kata_arab" => "عَيْنٌ",
                                "arti" => "Mata",
                                "huruf" => array_unique(["عَ","يْ","نٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 31')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 30");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 32");
                        $data['tema'] = "Pertemuan 5";
                        $data['materi'] = "Mufrodat 31";
                        $data['title'] = "Anggota Tubuh Bag. 2";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 31");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَنْفٌ",
                                "arti" => "Hidung",
                                "huruf" => array_unique(["أَ","نْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "خَدٌّ",
                                "arti" => "Pipi",
                                "huruf" => array_unique(["سِ","نٌّ","خَ","دٌّ"])
                            ],
                            [
                                "kata_arab" => "سِنٌّ",
                                "arti" => "Gigi",
                                "huruf" => array_unique(["سِ","نٌّ","خَ","دٌّ"])
                            ],
                            [
                                "kata_arab" => "حَاجِبٌ",
                                "arti" => "Alis",
                                "huruf" => array_unique(["حَ","ا","جِ","بٌ"])
                            ],
                            [
                                "kata_arab" => "هُدْبٌ",
                                "arti" => "Bulu mata",
                                "huruf" => array_unique(["هُ","دْ","بٌ","فَ","مٌّ"])
                            ],
                            [
                                "kata_arab" => "فَمٌّ",
                                "arti" => "Mulut",
                                "huruf" => array_unique(["هُ","دْ","بٌ","فَ","مٌّ"])
                            ],
                            [
                                "kata_arab" => "لِسَانٌ",
                                "arti" => "Lisan",
                                "huruf" => array_unique(["لِ","سَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "شَارِبٌ",
                                "arti" => "Kumis",
                                "huruf" => array_unique(["شَ","ا","رِ","بٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 32')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 31");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 33");
                        $data['tema'] = "Pertemuan 5";
                        $data['materi'] = "Mufrodat 32";
                        $data['title'] = "Anggota Tubuh Bag. 3";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 32");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "لِحْيَةٌ",
                                "arti" => "Jenggot",
                                "huruf" => array_unique(["لِ","حْ","يَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "دَمْعٌ",
                                "arti" => "Air mata",
                                "huruf" => array_unique(["دَ","مْ","عٌ"])
                            ],
                            [
                                "kata_arab" => "ذَقَنٌ",
                                "arti" => "Dagu",
                                "huruf" => array_unique(["ذَ","قَ","نٌ"])
                            ],
                            [
                                "kata_arab" => "شَفَةٌ",
                                "arti" => "Bibir",
                                "huruf" => array_unique(["شَ","فَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "شَفَةٌ عُلْيَا",
                                "arti" => "Bibir atas",
                                "huruf" => array_unique(["شَ","فَ","ةٌ","_","عُ","لْ","يَ","ا"])
                            ],
                            [
                                "kata_arab" => "شَفَةٌ سُفْلَى",
                                "arti" => "Bibir bawah",
                                "huruf" => array_unique(["شَ","فَ","ةٌ","_","سُ","فْ","لَ","ى"])
                            ],
                            [
                                "kata_arab" => "مُخٌّ",
                                "arti" => "Otak",
                                "huruf" => array_unique(["مُ","خٌّ","عُ","نُ","قٌ"])
                            ],
                            [
                                "kata_arab" => "عُنُقٌ",
                                "arti" => "Leher",
                                "huruf" => array_unique(["مُ","خٌّ","عُ","نُ","قٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 33')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 32");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 34");
                        $data['tema'] = "Pertemuan 5";
                        $data['materi'] = "Mufrodat 33";
                        $data['title'] = "Anggota Tubuh Bag. 4";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 33");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "بَدَنٌ",
                                "arti" => "Badan",
                                "huruf" => array_unique(["يَ","دٌ","بَ","دَ","نٌ"])
                            ],
                            [
                                "kata_arab" => "يَدٌ",
                                "arti" => "Tangan",
                                "huruf" => array_unique(["يَ","دٌ","بَ","دَ","نٌ"])
                            ],
                            [
                                "kata_arab" => "ذِرَاعٌ",
                                "arti" => "Satu lengan",
                                "huruf" => array_unique(["ذِ","رَ","ا","عٌ"])
                            ],
                            [
                                "kata_arab" => "بَطْنٌ",
                                "arti" => "Perut",
                                "huruf" => array_unique(["بَ","طْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "حَقْوٌ",
                                "arti" => "Pinggang",
                                "huruf" => array_unique(["حَ","قْ","وٌ"])
                            ],
                            [
                                "kata_arab" => "كَتِفٌ",
                                "arti" => "Pundak",
                                "huruf" => array_unique(["كَ","تِ","فٌ"])
                            ],
                            [
                                "kata_arab" => "ظَهْرٌ",
                                "arti" => "Punggung",
                                "huruf" => array_unique(["ظَ","هْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "صَدْرٌ",
                                "arti" => "Hati",
                                "huruf" => array_unique(["صَ","دْ","رٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 34')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 33");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 35");
                        $data['tema'] = "Pertemuan 5";
                        $data['materi'] = "Mufrodat 34";
                        $data['title'] = "Anggota Tubuh Bag. 5";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 34");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سُرَّةٌ",
                                "arti" => "Pusar",
                                "huruf" => array_unique(["سُ","رَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "رُكْبَةٌ",
                                "arti" => "Lutut",
                                "huruf" => array_unique(["رُ","كْ","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مِرْفَقٌ",
                                "arti" => "Siku",
                                "huruf" => array_unique(["مِ","رْ","فَ","قٌ"])
                            ],
                            [
                                "kata_arab" => "إِبْطٌ",
                                "arti" => "Ketiak",
                                "huruf" => array_unique(["إِ","بْ","طٌ"])
                            ],
                            [
                                "kata_arab" => "رِجْلٌ",
                                "arti" => "Kaki",
                                "huruf" => array_unique(["رِ","جْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "فَـخِذٌ",
                                "arti" => "Paha",
                                "huruf" => array_unique(["فَ","خِ","ذٌ"])
                            ],
                            [
                                "kata_arab" => "سَاقٌّ",
                                "arti" => "Betis",
                                "huruf" => array_unique(["سَ","ا","قٌّ"])
                            ],
                            [
                                "kata_arab" => "قَدَمٌ",
                                "arti" => "Kaki",
                                "huruf" => array_unique(["قَ","دَ","مٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 35')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 34");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 36");
                        $data['tema'] = "Pertemuan 5";
                        $data['materi'] = "Mufrodat 35";
                        $data['title'] = "Anggota Tubuh Bag. 6";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 35");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "كَعْبٌ",
                                "arti" => "Mata kaki",
                                "huruf" => array_unique(["كَ","عْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "كَاحِلٌ",
                                "arti" => "Pergelangan kaki",
                                "huruf" => array_unique(["كَ","ا","حِ","لٌ"])
                            ],
                            [
                                "kata_arab" => "عَقِبٌ",
                                "arti" => "Tumit",
                                "huruf" => array_unique(["عَ","قِ","بٌ"])
                            ],
                            [
                                "kata_arab" => "ظُفْرٌ",
                                "arti" => "Kuku",
                                "huruf" => array_unique(["ظُ","فْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مَسَامٌ",
                                "arti" => "Pori-pori",
                                "huruf" => array_unique(["مَ","سَ","ا","مٌ"])
                            ],
                            [
                                "kata_arab" => "شَامَةٌ",
                                "arti" => "Tahi lalat",
                                "huruf" => array_unique(["شَ","ا","مَ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 36')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 35");
                        $data['next'] = "";
                        $data['tema'] = "Pertemuan 5";
                        $data['materi'] = "Mufrodat 36";
                        $data['title'] = "Anggota Tubuh Bag. 7";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 36");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "إِبْهَامٌ",
                                "arti" => "Ibu jari",
                                "huruf" => array_unique(["إِ","بْ","هَ","ا","مٌ"])
                            ],
                            [
                                "kata_arab" => "سَبَابَةٌ",
                                "arti" => "Jari telunjuk",
                                "huruf" => array_unique(["سَ","بَ","ا","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "وُسْطَى",
                                "arti" => "Jari tengah",
                                "huruf" => array_unique(["وُ","سْ","طَ","ى"])
                            ],
                            [
                                "kata_arab" => "بِنْصِرٌ",
                                "arti" => "Jari manis",
                                "huruf" => array_unique(["بِ","نْ","صِ","رٌ"])
                            ],
                            [
                                "kata_arab" => "خِنْصِرٌ",
                                "arti" => "Jari kelingking",
                                "huruf" => array_unique(["خِ","نْ","صِ","رٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 37')){
                        $data['back'] = "";
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 38");
                        $data['tema'] = "Pertemuan 6";
                        $data['materi'] = "Mufrodat 37";
                        $data['title'] = "Pekerjaan Tentang Anggota Tubuh Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 37");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "نَظَرَ-يَنْظُرُ-نَظْرًا",
                                "arti" => "Melihat",
                                "huruf" => array_unique(["نَ","ظَ","رَ","-","يَ","نْ","ظُ","رُ","-","نَ","ظْ","رً","ا"])
                            ],
                            [
                                "kata_arab" => "سَـمِعَ-يَسْمَعُ-سَـمْعًا",
                                "arti" => "Mendengar",
                                "huruf" => array_unique(["سَ","مِ","عَ","-","يَ","سْ","مَ","عُ","-","سَ","مْ","عً","ا"])
                            ],
                            [
                                "kata_arab" => "شَمَّ-يَشُمُّ-شَـمًّا",
                                "arti" => "Mencium (hidung)",
                                "huruf" => array_unique(["شَ","مَّ","-","يَ","شُ","مُّ","-","شَ","مًّ","ا"])
                            ],
                            [
                                "kata_arab" => "قَبَّلَ-يُقَبِّلُ-تَقْبِيْلاً",
                                "arti" => "Mencium (bibir)",
                                "huruf" => array_unique(["قَ","بَّ","لَ","-","يُ","قَ","بِّ","لُ","-","تَ","قْ","بِ","يْ","لاً"])
                            ],
                            [
                                "kata_arab" => "حَسَّ-يَـحُسُّ-حَسًّا",
                                "arti" => "Merasakan",
                                "huruf" => array_unique(["حَ","سَّ","-","يَ","حُ","سُّ","-","حَ","سًّ","ا"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 38')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 37");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 39");
                        $data['tema'] = "Pertemuan 6";
                        $data['materi'] = "Mufrodat 38";
                        $data['title'] = "Pekerjaan Tentang Anggota Tubuh Bag. 2";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 38");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "ضَرَبَ-يَضْرِبُ-ضَرْبًا",
                                "arti" => "Memukul",
                                "huruf" => array_unique(["ضَ","رَ","بَ","-","يَ","ضْ","رِ","بُ","-","ضَ","رْ","بً","ا"])
                            ],
                            [
                                "kata_arab" => "أَخَذَ-يَأْخُذُ-أَخْذًا",
                                "arti" => "Mengambil",
                                "huruf" => array_unique(["أَ","خَ","ذَ","-","يَ","أْ","خُ","ذُ","-","أَ","خْ","ذً","ا"])
                            ],
                            [
                                "kata_arab" => "قَرَصَ-يَقْرُصُ-قَرْصًا",
                                "arti" => "Mencubit",
                                "huruf" => array_unique(["قَ","رَ","صَ","-","يَ","قْ","رُ","صُ","-","قَ","رْ","صً","ا"])
                            ],
                            [
                                "kata_arab" => "بَصَقَ-يَبْصُقُ-بَصْقٌ",
                                "arti" => "Meludah",
                                "huruf" => array_unique(["بَ","صَ","قَ","-","يَ","بْ","صُ","قُ","-","بَ","صْ","قٌ"])
                            ],
                            [
                                "kata_arab" => "تَنَفَّسَ-يَتَنَفَّسُ-تَنَفُّسًا",
                                "arti" => "Bernafas",
                                "huruf" => array_unique(["تَ","نَ","فَّ","سَ","-","يَ","تَ","نَ","فَّ","سُ","-","تَ","نَ","فُّ","سً","ا"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 39')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 38");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 40");
                        $data['tema'] = "Pertemuan 6";
                        $data['materi'] = "Mufrodat 39";
                        $data['title'] = "Pekerjaan Tentang Anggota Tubuh Bag. 3";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 39");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "رَفَسَ-يَرْفُسُ-رَفْسًا",
                                "arti" => "Menendang",
                                "huruf" => array_unique(["رَ","فَ","سَ","-","يَ","رْ","فُ","سُ","-","رَ","فْ","سً","ا"])
                            ],
                            [
                                "kata_arab" => "لَمَسَ-يَلْمِسُ-لَمْسًا",
                                "arti" => "Menyentuh",
                                "huruf" => array_unique(["لَ","مَ","سَ","-","يَ","لْ","مِ","سُ","-","لَ","مْ","سً","ا"])
                            ],
                            [
                                "kata_arab" => "تَفَكَّرَ-يَتَفَكَّرُ-تَفَكُّرًا",
                                "arti" => "Memikirkan",
                                "huruf" => array_unique(["تَ","فَ","كَّ","رَ","-","يَ","تَ","فَ","كَّ","رُ","-","تَ","فَ","كُّ","رً","ا"])
                            ],
                            [
                                "kata_arab" => "كَتَبَ-يَكْتُبُ-كِتَابَةً",
                                "arti" => "Menulis",
                                "huruf" => array_unique(["كَ","تَ","بَ","-","يَ","كْ","تُ","بُ","-","كِ","تَ","ا","بَ","ةً"])
                            ],
                            [
                                "kata_arab" => "قَرَأَ-يَقْرَأُ-قِرَاءَةً",
                                "arti" => "Membaca",
                                "huruf" => array_unique(["قَ","رَ","أَ","-","يَ","قْ","رَ","أُ","-","قِ","رَ","ا","ءَ","ةً"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 40')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 39");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 41");
                        $data['tema'] = "Pertemuan 6";
                        $data['materi'] = "Mufrodat 40";
                        $data['title'] = "Pekerjaan Tentang Anggota Tubuh Bag. 4";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 40");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "فَكَّرَ-يُفَكِّرُ-تَفْكِيْرًا",
                                "arti" => "Memikirkan",
                                "huruf" => array_unique(["فَ","كَّ","رَ","-","يُ","فَ","كِّ","رُ","-","تَ","فْ","كِ","يْ","رً","ا"])
                            ],
                            [
                                "kata_arab" => "تَلاَ-يَتْلُو-تِلاَوَةً",
                                "arti" => "Membaca",
                                "huruf" => array_unique(["تَ","لاَ","-","يَ","تْ","لُ","و","-","تِ","لاَ","وَ","ةً"])
                            ],
                            [
                                "kata_arab" => "حَكَّ-يَحِكُّ-حِكًّا",
                                "arti" => "Menggaruk",
                                "huruf" => array_unique(["حَ","كَّ","-","يَ","حِ","كُّ","-","حِ","كًّ","ا"])
                            ],
                            [
                                "kata_arab" => "دَلَّكَ-يُدَلِّكُ-تَدْلِيْكًا",
                                "arti" => "Memijat",
                                "huruf" => array_unique(["دَ","لَّ","كَ","-","يُ","دَ","لِّ","كُ","-","تَ","دْ","لِ","يْ","كً","ا"])
                            ],
                            [
                                "kata_arab" => "نَفَخَ-يَنْفَخُ-نَفْخًا",
                                "arti" => "Meniup",
                                "huruf" => array_unique(["نَ","فَ","خَ","-","يَ","نْ","فَ","خُ","-","نَ","فْ","خً","ا"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 41')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 40");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 42");
                        $data['tema'] = "Pertemuan 6";
                        $data['materi'] = "Mufrodat 41";
                        $data['title'] = "Pekerjaan Tentang Anggota Tubuh Bag. 5";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 41");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "تَأَمَّلَ-يَتَأَمَّلُ-تَأَمُّلاً",
                                "arti" => "Berangan-angan",
                                "huruf" => array_unique(["تَ","أَ","مَّ","لَ","-","يَ","تَ","أَ","مَّ","لُ","-","تَ","أَ","مُّ","لاً"])
                            ],
                            [
                                "kata_arab" => "مَشَطَ-يَـمْشُطُ-مَشْطًا",
                                "arti" => "Menyisir",
                                "huruf" => array_unique(["مَ","شَ","طَ","-","يَ","مْ","شُ","طُ","-","مَ","شْ","طً","ا"])
                            ],
                            [
                                "kata_arab" => "قَالَ-يَقُوْلُ-قَوْلاً",
                                "arti" => "Berkata",
                                "huruf" => array_unique(["قَ","ا","لَ","-","يَ","قُ","وْ","لُ","-","قَ","وْ","لاً"])
                            ],
                            [
                                "kata_arab" => "تَكَلَّمَ-يَتَكَلَّمُ-تَكَلُّماً",
                                "arti" => "Berbicara",
                                "huruf" => array_unique(["تَ","كَ","لَّ","مَ","-","يَ","تَ","كَ","لَّ","مُ","-","تَ","كَ","لُّ","ماً"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 42')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 41");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 43");
                        $data['tema'] = "Pertemuan 6";
                        $data['materi'] = "Mufrodat 42";
                        $data['title'] = "Keluarga Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 42");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَبٌ / وَالِدٌ",
                                "arti" => "Ayah",
                                "huruf" => array_unique(["أَ","بٌ","أُ","مٌّ"])
                            ],
                            [
                                "kata_arab" => "أُمٌّ / وَالِدَةٌ",
                                "arti" => "Ibu",
                                "huruf" => array_unique(["أَ","بٌ","أُ","مٌّ"])
                            ],
                            [
                                "kata_arab" => "جَدٌّ",
                                "arti" => "Kakek",
                                "huruf" => array_unique(["جَ","دٌّ","جَ","دَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "جَدَّةٌ",
                                "arti" => "Nenek",
                                "huruf" => array_unique(["جَ","دٌّ","جَ","دَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "زَوْجٌ",
                                "arti" => "Suami",
                                "huruf" => array_unique(["زَ","وْ","جٌ","زَ","وْ","جَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "زَوْجَةٌ",
                                "arti" => "Istri",
                                "huruf" => array_unique(["زَ","وْ","جٌ","زَ","وْ","جَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "اِبْنٌ",
                                "arti" => "Anak (lk)",
                                "huruf" => array_unique(["اِ","بْ","نٌ","بِ","نْ","تٌ"])
                            ],
                            [
                                "kata_arab" => "بِنْتٌ",
                                "arti" => "Anak (pr)",
                                "huruf" => array_unique(["اِ","بْ","نٌ","بِ","نْ","تٌ"])
                            ],
                            [
                                "kata_arab" => "حَفِيْدٌ",
                                "arti" => "Cucu (lk)",
                                "huruf" => array_unique(["حَ","فِ","يْ","دٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 43')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 42");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 44");
                        $data['tema'] = "Pertemuan 6";
                        $data['materi'] = "Mufrodat 43";
                        $data['title'] = "Keluarga Bag. 2";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 43");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "حَفِيْدَةٌ",
                                "arti" => "Cucu (pr)",
                                "huruf" => array_unique(["حَ","فِ","يْ","دَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "عَمٌّ",
                                "arti" => "Paman (dr Bapak)",
                                "huruf" => array_unique(["عَ","مٌّ","عَ","مَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "عَمَّةٌ",
                                "arti" => "Bibi (dr Bapak)",
                                "huruf" => array_unique(["عَ","مٌّ","عَ","مَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "خَالٌ",
                                "arti" => "Paman (dr Ibu)",
                                "huruf" => array_unique(["خَ","ا","لٌ","خَ","ا","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "خَالَةٌ",
                                "arti" => "Bibi (dr Ibu)",
                                "huruf" => array_unique(["خَ","ا","لٌ","خَ","ا","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "أَخٌ",
                                "arti" => "Saudara (lk)",
                                "huruf" => array_unique(["أَ","خٌ","أُ","خْ","تٌ"])
                            ],
                            [
                                "kata_arab" => "أُخْتٌ",
                                "arti" => "Saudara (pr)",
                                "huruf" => array_unique(["أَ","خٌ","أُ","خْ","تٌ"])
                            ],
                            [
                                "kata_arab" => "أَخٌ كَبِيْرٌ",
                                "arti" => "Kakak (lk)",
                                "huruf" => array_unique(["أَ","خٌ","_","كَ","بِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "أَخٌ صَغِيْرٌ",
                                "arti" => "Adik (lk)",
                                "huruf" => array_unique(["أَ","خٌ","_","صَ","غِ","يْ","رٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 44')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 43");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 45");
                        $data['tema'] = "Pertemuan 6";
                        $data['materi'] = "Mufrodat 44";
                        $data['title'] = "Keluarga Bag. 3";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 44");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أُخْتٌ كَبِيْرَةٌ",
                                "arti" => "Kakak (pr)",
                                "huruf" => array_unique(["أُ","خْ","تٌ","_","كَ","بِ","يْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "أُخْتٌ صَغِيْرَةٌ",
                                "arti" => "Adik (pr)",
                                "huruf" => array_unique(["أُ","خْ","تٌ","_","صَ","غِ","يْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "أَخٌ شَقِيْقٌ",
                                "arti" => "Saudara (lk) kandung",
                                "huruf" => array_unique(["أَ","خٌ","_","شَ","قِ","يْ","قٌ"])
                            ],
                            [
                                "kata_arab" => "أُخْتٌ شَقِيْقَةٌ",
                                "arti" => "Saudara (pr) kandung",
                                "huruf" => array_unique(["أُ","خْ","تٌ","_","شَ","قِ","يْ","قَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "رَبِيْبٌ",
                                "arti" => "Anak tiri (lk)",
                                "huruf" => array_unique(["رَ","بِ","يْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "رَبِيْبَةٌ",
                                "arti" => "Anak tiri (pr)",
                                "huruf" => array_unique(["رَ","بِ","يْ","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "عَزَبٌ",
                                "arti" => "Bujang",
                                "huruf" => array_unique(["عَ","زَ","بٌ"])
                            ],
                            [
                                "kata_arab" => "عَذْرَاءُ",
                                "arti" => "Seorang perawan",
                                "huruf" => array_unique(["عَ","ذْ","رَ","ا","ءُ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 45')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 44");
                        $data['next'] = "";
                        $data['tema'] = "Pertemuan 6";
                        $data['materi'] = "Mufrodat 45";
                        $data['title'] = "Keluarga Bag. 4";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 45");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَرْمَلٌ",
                                "arti" => "Duda",
                                "huruf" => array_unique(["أَ","رْ","مَ","لٌ","أَ","رْ","مَ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "أَرْمَلَةٌ",
                                "arti" => "Janda",
                                "huruf" => array_unique(["أَ","رْ","مَ","لٌ","أَ","رْ","مَ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "خَتَنٌ",
                                "arti" => "Menantu (lk)",
                                "huruf" => array_unique(["خَ","تَ","نٌ","خَ","تَ","نَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "خَتَنَةٌ",
                                "arti" => "Menantu (pr)",
                                "huruf" => array_unique(["خَ","تَ","نٌ","خَ","تَ","نَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "حَمٌ",
                                "arti" => "Mertua (lk)",
                                "huruf" => array_unique(["حَ","مٌ","حَ","مَ","ا","ةٌ"])
                            ],
                            [
                                "kata_arab" => "حَمَاةٌ",
                                "arti" => "Mertua (pr)",
                                "huruf" => array_unique(["حَ","مٌ","حَ","مَ","ا","ةٌ"])
                            ],
                            [
                                "kata_arab" => "فَتَى / شَابٌّ",
                                "arti" => "Pemuda",
                                "huruf" => array_unique(["شَ","ا","بٌّ","شَ","ا","بَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "فَتَاةٌ / شَابَّةٌ",
                                "arti" => "Pemudi",
                                "huruf" => array_unique(["شَ","ا","بٌّ","شَ","ا","بَّ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 46')){
                        $data['back'] = "";
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 47");
                        $data['tema'] = "Pertemuan 7";
                        $data['materi'] = "Mufrodat 46";
                        $data['title'] = "Pekerjaan Tentang Keluarga Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 46");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "رَبَّي-يُرَبِّي-تَرْبِيَّةً",
                                "arti" => "Mendidik",
                                "huruf" => array_unique(["رَ","بَّ","ي","-","يُ","رَ","بِّ","ي","-","تَ","رْ","بِ","يَّ","ةً"])
                            ],
                            [
                                "kata_arab" => "حَضَنَ-يَحْضُنُ-حَضَانَةً",
                                "arti" => "Mengasuh",
                                "huruf" => array_unique(["حَ","ضَ","نَ","-","يَ","حْ","ضُ","نُ","-","حَ","ضَ","ا","نَ","ةً"])
                            ],
                            [
                                "kata_arab" => "أَحَبَّ-يُحِبُّ-مَحَبَّةً",
                                "arti" => "Menyukai",
                                "huruf" => array_unique(["أَ","حَ","بَّ","-","يُ","حِ","بُّ","-","مَ","حَ","بَّ","ةً"])
                            ],
                            [
                                "kata_arab" => "رَحِمَ-يَرْحَمُ-رَحْمَةً",
                                "arti" => "Menyayangi",
                                "huruf" => array_unique(["رَ","حِ","مَ","-","يَ","رْ","حَ","مُ","-","رَ","حْ","مَ","ةً"])
                            ],
                            [
                                "kata_arab" => "اِحْتَرَمَ-يَحْتَرِمُ-اِحْتِرَامًا",
                                "arti" => "Menghormati",
                                "huruf" => array_unique(["اِ","حْ","تَ","رَ","مَ","-","يَ","حْ","تَ","رِ","مُ","-","اِ","حْ","تِ","رَ","ا","مً","ا"])
                            ],
                            [
                                "kata_arab" => "جَرَحَ-يَجْرَحُ-جَرْحًا",
                                "arti" => "Melukai",
                                "huruf" => array_unique(["جَ","رَ","حَ","-","يَ","جْ","رَ","حُ","-","جَ","رْ","حً","ا"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 47')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 46");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 48");
                        $data['tema'] = "Pertemuan 7";
                        $data['materi'] = "Mufrodat 47";
                        $data['title'] = "Pekerjaan Tentang Keluarga Bag. 2";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 47");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَهَانَ-يُهِيْنُ-إِهَانَةً",
                                "arti" => "Menghina",
                                "huruf" => array_unique(["أَ","هَ","ا","نَ","-","يُ","هِ","يْ","نُ","-","إِ","هَ","ا","نَ","ةً"])
                            ],
                            [
                                "kata_arab" => "دَعَا-يَدْعُو-دَعْوَةً",
                                "arti" => "Mengajak",
                                "huruf" => array_unique(["دَ","عَ","ا","-","يَ","دْ","عُ","و","-","دَ","عْ","وَ","ةً"])
                            ],
                            [
                                "kata_arab" => "أَمَرَ-يَأْمُرُ-أَمْرًا",
                                "arti" => "Memerintah",
                                "huruf" => array_unique(["أَ","مَ","رَ","-","يَ","أْ","مُ","رُ","-","أَ","مْ","رً","ا"])
                            ],
                            [
                                "kata_arab" => "رَضِعَ-يَرْضَعُ-رَضَاعَةً",
                                "arti" => "Menyusui",
                                "huruf" => array_unique(["رَ","ضِ","عَ","-","يَ","رْ","ضَ","عُ","-","رَ","ضَ","ا","عَ","ةً"])
                            ],
                            [
                                "kata_arab" => "أَرْضَعَ-يُرْضِعُ-إِرْضَاعًا",
                                "arti" => "Menyusui",
                                "huruf" => array_unique(["أَ","رْ","ضَ","عَ","-","يُ","رْ","ضِ","عُ","-","إِ","رْ","ضَ","ا","عً","ا"])
                            ],
                            [
                                "kata_arab" => "نَصَحَ-يَنْصَحُ-نَصِيْحَةً",
                                "arti" => "Menasehati",
                                "huruf" => array_unique(["نَ","صَ","حَ","-","يَ","نْ","صَ","حُ","-","نَ","صِ","يْ","حَ","ةً"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 48')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 47");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 49");
                        $data['tema'] = "Pertemuan 7";
                        $data['materi'] = "Mufrodat 48";
                        $data['title'] = "Pekerjaan Tentang Keluarga Bag. 3";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 48");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "نَصَرَ-يَنْصُرُ-نَصْرًا",
                                "arti" => "Menolong",
                                "huruf" => array_unique(["نَ","صَ","رَ","-","يَ","نْ","صُ","رُ","-","نَ","صْ","رً","ا"])
                            ],
                            [
                                "kata_arab" => "بَلَغَ-يَبْلُغُ-بُلُوغًا",
                                "arti" => "Menyampaikan",
                                "huruf" => array_unique(["بَ","لَ","غَ","-","يَ","بْ","لُ","غُ","-","بُ","لُ","و","غً","ا"])
                            ],
                            [
                                "kata_arab" => "مَزَحَ-يَـمْزَحُ-مِزَاحًا",
                                "arti" => "Bercanda",
                                "huruf" => array_unique(["مَ","زَ","حَ","-","يَ","مْ","زَ","حُ","-","مِ","زَ","ا","حً","ا"])
                            ],
                            [
                                "kata_arab" => "اِعْتَرَفَ-يَعْتَرِفُ-اِعْتِرَافًا",
                                "arti" => "Mengakui",
                                "huruf" => array_unique(["اِ","عْ","تَ","رَ","فَ","-","يَ","عْ","تَ","رِ","فُ","-","اِ","عْ","تِ","رَ","ا","فً","ا"])
                            ],
                            [
                                "kata_arab" => "رَجَى-يَرْجُو-رَجَاءً",
                                "arti" => "Mengharapkan",
                                "huruf" => array_unique(["رَ","جَ","ى","-","يَ","رْ","جُ","و","-","رَ","جَ","ا","ءً"])
                            ],
                            [
                                "kata_arab" => "صَارَ-يَصِيْرُ-صَيْرًا",
                                "arti" => "Menjadi",
                                "huruf" => array_unique(["صَ","ا","رَ","-","يَ","صِ","يْ","رُ","-","صَ","يْ","رً","ا"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 49')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 48");
                        $data['next'] = "";
                        $data['tema'] = "Pertemuan 7";
                        $data['materi'] = "Mufrodat 49";
                        $data['title'] = "Pekerjaan Tentang Keluarga Bag. 4";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 49");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "اِحْتَاجَ-يَـحْتَاجُ-اِحْتِيَاجًا",
                                "arti" => "Membutuhkan",
                                "huruf" => array_unique(["اِ","حْ","تَ","ا","جَ","-","يَ","حْ","تَ","ا","جُ","-","اِ","حْ","تِ","يَ","ا","جً","ا"])
                            ],
                            [
                                "kata_arab" => "قَلَقَ-يَقْلَقُ-قَلَقًا",
                                "arti" => "Galau",
                                "huruf" => array_unique(["قَ","لَ","قَ","-","يَ","قْ","لَ","قُ","-","قَ","لَ","قً","ا"])
                            ],
                            [
                                "kata_arab" => "كَلَّفَ-يُكَلِّفُ-تَكْلِيْفًا",
                                "arti" => "Memaksa",
                                "huruf" => array_unique(["كَ","لَّ","فَ","-","يُ","كَ","لِّ","فُ","-","تَ","كْ","لِ","يْ","فً","ا"])
                            ],
                            [
                                "kata_arab" => "صَاحَ-يَصِيْحُ-صَيْحًا",
                                "arti" => "Berteriak",
                                "huruf" => array_unique(["صَ","ا","حَ","-","يَ","صِ","يْ","حُ","-","صَ","يْ","حً","ا"])
                            ],
                            [
                                "kata_arab" => "ضَـحِكَ-يَضْحَكُ-ضَـحْكًا",
                                "arti" => "Tertawa",
                                "huruf" => array_unique(["ضَ","حِ","كَ","-","يَ","ضْ","حَ","كُ","-","ضَ","حْ","كً","ا"])
                            ],
                            [
                                "kata_arab" => "سَكَتَ-يَسْكُتُ-سُكُوْتًا",
                                "arti" => "Diam",
                                "huruf" => array_unique(["سَ","كَ","تَ","-","يَ","سْ","كُ","تُ","سُ","وْ","تً","ا"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 50')){
                        $data['back'] = "";
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 51");
                        $data['tema'] = "Pertemuan 8";
                        $data['materi'] = "Mufrodat 50";
                        $data['title'] = "Akhlak Manusia Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 50");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مُتَوَاضِعٌ",
                                "arti" => "Rendah hati",
                                "huruf" => array_unique(["مُ","تَ","وَ","ا","ضِ","عٌ"])
                            ],
                            [
                                "kata_arab" => "حَكِيْمٌ",
                                "arti" => "Bijaksana",
                                "huruf" => array_unique(["حَ","كِ","يْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "صَابِرٌ",
                                "arti" => "Sabar",
                                "huruf" => array_unique(["صَ","ا","بِ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مُتَوَحِّشٌ",
                                "arti" => "Liar",
                                "huruf" => array_unique(["مُ","تَ","وَ","حِّ","شٌ"])
                            ],
                            [
                                "kata_arab" => "مُتَكَبِّرٌ",
                                "arti" => "Sombong",
                                "huruf" => array_unique(["مُ","تَ","كَ","بِّ","رٌ"])
                            ],
                            [
                                "kata_arab" => "غَضْبَانُ",
                                "arti" => "Marah",
                                "huruf" => array_unique(["غَ","ضْ","بَ","ا","نُ"])
                            ],
                            [
                                "kata_arab" => "مِغْنَاجٌ",
                                "arti" => "Genit",
                                "huruf" => array_unique(["مِ","غْ","نَ","ا","جٌ"])
                            ],
                            [
                                "kata_arab" => "نَهَّامٌ",
                                "arti" => "Rakus",
                                "huruf" => array_unique(["نَ","هَّ","ا","مٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 51')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 50");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 52");
                        $data['tema'] = "Pertemuan 8";
                        $data['materi'] = "Mufrodat 51";
                        $data['title'] = "Akhlak Manusia Bag. 2";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 51");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَمِيْنٌ",
                                "arti" => "Dipercaya",
                                "huruf" => array_unique(["أَ","مِ","يْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "صَادِقٌ",
                                "arti" => "Orang jujur",
                                "huruf" => array_unique(["صَ","ا","دِ","قٌ"])
                            ],
                            [
                                "kata_arab" => "كَاذِبٌ",
                                "arti" => "Pembohong",
                                "huruf" => array_unique(["كَ","ا","ذِ","بٌ"])
                            ],
                            [
                                "kata_arab" => "مُجْتَهِدٌ",
                                "arti" => "Bersungguh-sungguh",
                                "huruf" => array_unique(["مُ","جْ","تَ","هِ","دٌ"])
                            ],
                            [
                                "kata_arab" => "كَسْلَانٌ",
                                "arti" => "Malas",
                                "huruf" => array_unique(["كَ","سْ","لَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "حَسُوْدٌ",
                                "arti" => "Dengki",
                                "huruf" => array_unique(["حَ","سُ","وْ","دٌ"])
                            ],
                            [
                                "kata_arab" => "سَـخِيٌّ",
                                "arti" => "Dermawan",
                                "huruf" => array_unique(["سَ","خِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "بَخِيْلٌ",
                                "arti" => "Pelit",
                                "huruf" => array_unique(["بَ","خِ","يْ","لٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 52')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 51");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 53");
                        $data['tema'] = "Pertemuan 8";
                        $data['materi'] = "Mufrodat 52";
                        $data['title'] = "Akhlak Manusia Bag. 3";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 52");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "شُـجَاعٌ",
                                "arti" => "Berani",
                                "huruf" => array_unique(["شُ","جَ","ا","عٌ"])
                            ],
                            [
                                "kata_arab" => "جَبَّانٌ",
                                "arti" => "Penakut",
                                "huruf" => array_unique(["جَ","بَّ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "أَنِيْسٌ",
                                "arti" => "Ramah",
                                "huruf" => array_unique(["أَ","نِ","يْ","سٌ"])
                            ],
                            [
                                "kata_arab" => "مُشَاغِبٌ",
                                "arti" => "Nakal",
                                "huruf" => array_unique(["مُ","شَ","ا","غِ","بٌ"])
                            ],
                            [
                                "kata_arab" => "لَطِيْفٌ",
                                "arti" => "Imut",
                                "huruf" => array_unique(["لَ","طِ","يْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "جَمِيْلٌ",
                                "arti" => "Indah",
                                "huruf" => array_unique(["جَ","مِ","يْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "جَمِيْلَةٌ",
                                "arti" => "Cantik",
                                "huruf" => array_unique(["جَ","مِ","يْ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مَرَحٌ",
                                "arti" => "Ceria",
                                "huruf" => array_unique(["مَ","رَ","حٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 53')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 52");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 54");
                        $data['tema'] = "Pertemuan 8";
                        $data['materi'] = "Mufrodat 53";
                        $data['title'] = "Akhlak Manusia Bag. 4";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 53");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَنِيْقٌ",
                                "arti" => "Anggun",
                                "huruf" => array_unique(["أَ","نِ","يْ","قٌ"])
                            ],
                            [
                                "kata_arab" => "مُهْمِلٌ",
                                "arti" => "Ceroboh",
                                "huruf" => array_unique(["مُ","هْ","مِ","لٌ"])
                            ],
                            [
                                "kata_arab" => "خَشِنٌ",
                                "arti" => "Kasar",
                                "huruf" => array_unique(["خَ","شِ","نٌ"])
                            ],
                            [
                                "kata_arab" => "حَقُوْدٌ",
                                "arti" => "Pendengki",
                                "huruf" => array_unique(["حَ","قُ","وْ","دٌ"])
                            ],
                            [
                                "kata_arab" => "ثَرْثَارٌ",
                                "arti" => "Cerewet",
                                "huruf" => array_unique(["ثَ","رْ","ثَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "شَهِيْرٌ",
                                "arti" => "Terkenal",
                                "huruf" => array_unique(["شَ","هِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "عَاطِفِيٌّ",
                                "arti" => "Romantis",
                                "huruf" => array_unique(["عَ","ا","طِ","فِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "سَكُوْتٌ",
                                "arti" => "Pendiam",
                                "huruf" => array_unique(["سَ","كُ","وْ","تٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 54')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 53");
                        $data['next'] = "";
                        $data['tema'] = "Pertemuan 8";
                        $data['materi'] = "Mufrodat 54";
                        $data['title'] = "Akhlak Manusia Bag. 5";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 54");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مُدَلَّعٌ",
                                "arti" => "Manja",
                                "huruf" => array_unique(["مُ","دَ","لَّ","عٌ"])
                            ],
                            [
                                "kata_arab" => "أَنَانِيٌّ",
                                "arti" => "Egois",
                                "huruf" => array_unique(["أَ","نَ","ا","نِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "مُتَعَنِّتٌ",
                                "arti" => "Bandel",
                                "huruf" => array_unique(["مُ","تَ","عَ","نِّ","تٌ"])
                            ],
                            [
                                "kata_arab" => "حَسَّاسٌ",
                                "arti" => "Baperan",
                                "huruf" => array_unique(["حَ","سَّ","ا","سٌ"])
                            ],
                            [
                                "kata_arab" => "رَحُوْمٌ",
                                "arti" => "Penyayang",
                                "huruf" => array_unique(["رَ","حُ","وْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "مَاهِرٌ",
                                "arti" => "Pandai",
                                "huruf" => array_unique(["مَ","ا","هِ","رٌ"])
                            ],
                            [
                                "kata_arab" => "جَاهِلٌ",
                                "arti" => "Bodoh",
                                "huruf" => array_unique(["جَ","ا","هِ","لٌ"])
                            ],
                            [
                                "kata_arab" => "ذَكِيٌّ",
                                "arti" => "Cerdas",
                                "huruf" => array_unique(["ذَ","كِ","يٌّ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 55')){
                        $data['back'] = "";
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 56");
                        $data['tema'] = "Pertemuan 9";
                        $data['materi'] = "Mufrodat 55";
                        $data['title'] = "Akhlak Manusia Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 55");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "غَبِيٌّ",
                                "arti" => "Dungu",
                                "huruf" => array_unique(["غَ","بِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "طَفْشَانُ",
                                "arti" => "Sumpek",
                                "huruf" => array_unique(["طَ","فْ","شَ","ا","نُ"])
                            ],
                            [
                                "kata_arab" => "نَعْسَانُ",
                                "arti" => "Ngantuk",
                                "huruf" => array_unique(["نَ","عْ","سَ","ا","نُ"])
                            ],
                            [
                                "kata_arab" => "تَعْبَانُ",
                                "arti" => "Lelah",
                                "huruf" => array_unique(["تَ","عْ","بَ","ا","نُ"])
                            ],
                            [
                                "kata_arab" => "جَوْعَانُ",
                                "arti" => "Laper",
                                "huruf" => array_unique(["جَ","وْ","عَ","ا","نُ"])
                            ],
                            [
                                "kata_arab" => "عَطْشَانُ",
                                "arti" => "Haus",
                                "huruf" => array_unique(["عَ","طْ","شَ","ا","نُ"])
                            ],
                            [
                                "kata_arab" => "مَجْنُوْنٌ",
                                "arti" => "Gila",
                                "huruf" => array_unique(["مَ","جْ","نُ","وْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "أَصَمٌّ",
                                "arti" => "Tuli",
                                "huruf" => array_unique(["أَ","صَ","مٌّ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 56')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 55");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 57");
                        $data['tema'] = "Pertemuan 9";
                        $data['materi'] = "Mufrodat 56";
                        $data['title'] = "Akhlak Manusia Bag. 2";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 56");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَعْمَى",
                                "arti" => "Buta",
                                "huruf" => array_unique(["أَ","عْ","مَ","ى"])
                            ],
                            [
                                "kata_arab" => "أَبْكَمٌ",
                                "arti" => "Bisu",
                                "huruf" => array_unique(["أَ","بْ","كَ","مٌ"])
                            ],
                            [
                                "kata_arab" => "أَدْرَدُ",
                                "arti" => "Ompong",
                                "huruf" => array_unique(["أَ","دْ","رَ","دُ"])
                            ],
                            [
                                "kata_arab" => "غَنِيٌّ",
                                "arti" => "Kaya",
                                "huruf" => array_unique(["غَ","نِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "شَامِلٌ",
                                "arti" => "Sempurna",
                                "huruf" => array_unique(["شَ","ا","مِ","لٌ"])
                            ],
                            [
                                "kata_arab" => "بَسِيْطٌ",
                                "arti" => "Sederhana",
                                "huruf" => array_unique(["بَ","سِ","يْ","طٌ"])
                            ],
                            [
                                "kata_arab" => "مُبَذِّرٌ",
                                "arti" => "Mubadzir",
                                "huruf" => array_unique(["مُ","بَ","ذِّ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مُقْتَصِدٌ",
                                "arti" => "Hemat",
                                "huruf" => array_unique(["مُ","قْ","تَ","صِ","دٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 57')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 56");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 58");
                        $data['tema'] = "Pertemuan 9";
                        $data['materi'] = "Mufrodat 57";
                        $data['title'] = "Akhlak Manusia Bag. 3";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 57");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "عَادِلٌ",
                                "arti" => "Adil",
                                "huruf" => array_unique(["عَ","ا","دِ","لٌ"])
                            ],
                            [
                                "kata_arab" => "جَائِرٌ",
                                "arti" => "Tidak adil",
                                "huruf" => array_unique(["جَ","ا","ئِ","رٌ"])
                            ],
                            [
                                "kata_arab" => "قَوِيٌّ",
                                "arti" => "Kuat",
                                "huruf" => array_unique(["قَ","وِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "ضَعِيْفٌ",
                                "arti" => "Lemah",
                                "huruf" => array_unique(["ضَ","عِ","يْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "عَجُوْزٌ",
                                "arti" => "Tua",
                                "huruf" => array_unique(["عَ","جُ","وْ","زٌ"])
                            ],
                            [
                                "kata_arab" => "سَعِيْدٌ",
                                "arti" => "Senang",
                                "huruf" => array_unique(["سَ","عِ","يْ","دٌ"])
                            ],
                            [
                                "kata_arab" => "مَحْمُوْدٌ",
                                "arti" => "Baik",
                                "huruf" => array_unique(["مَ","حْ","مُ","وْ","دٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 58')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 57");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 59");
                        $data['tema'] = "Pertemuan 9";
                        $data['materi'] = "Mufrodat 58";
                        $data['title'] = "Akhlak Manusia Bag. 4";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 58");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مَذْمُوْمٌ",
                                "arti" => "Buruk",
                                "huruf" => array_unique(["مَ","ذْ","مُ","وْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "رَابِـحٌ",
                                "arti" => "Beruntung",
                                "huruf" => array_unique(["رَ","ا","بِ","حٌ"])
                            ],
                            [
                                "kata_arab" => "خَاسِرٌ",
                                "arti" => "Merugi",
                                "huruf" => array_unique(["خَ","ا","سِ","رٌ"])
                            ],
                            [
                                "kata_arab" => "سَـمِيْنٌ",
                                "arti" => "Gemuk",
                                "huruf" => array_unique(["سَ","مِ","يْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "هَزِيْلٌ",
                                "arti" => "Kurus",
                                "huruf" => array_unique(["هَ","زِ","يْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "مَشْغُوْلٌ",
                                "arti" => "Sibuk",
                                "huruf" => array_unique(["مَ","شْ","غُ","وْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "عَاطِلٌ",
                                "arti" => "Nganggur",
                                "huruf" => array_unique(["عَ","ا","طِ","لٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 59')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 58");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 60");
                        $data['tema'] = "Pertemuan 9";
                        $data['materi'] = "Mufrodat 59";
                        $data['title'] = "Akhlak Manusia Bag. 5";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 59");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "صِحَّةٌ",
                                "arti" => "Sehat",
                                "huruf" => array_unique(["صِ","حَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مَرِيْضٌ",
                                "arti" => "Sakit",
                                "huruf" => array_unique(["مَ","رِ","يْ","ضٌ"])
                            ],
                            [
                                "kata_arab" => "صَحِيْحٌ",
                                "arti" => "Benar",
                                "huruf" => array_unique(["صَ","حِ","يْ","حٌ"])
                            ],
                            [
                                "kata_arab" => "مُخْطِئٌ",
                                "arti" => "Salah",
                                "huruf" => array_unique(["مُ","خْ","طِ","ئٌ"])
                            ],
                            [
                                "kata_arab" => "فَائِزٌ",
                                "arti" => "Juara",
                                "huruf" => array_unique(["فَ","ا","ئِ","زٌ"])
                            ],
                            [
                                "kata_arab" => "مَغْلُوْبٌ",
                                "arti" => "Kalah",
                                "huruf" => array_unique(["مَ","غْ","لُ","وْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "وَاثِقٌ بِالنَّفْسِ",
                                "arti" => "Percaya diri",
                                "huruf" => array_unique(["وَ","ا","ثِ","قٌ","_","بِ","ال","نَّ","فْ","سِ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 60')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 59");
                        $data['next'] = "";
                        $data['tema'] = "Pertemuan 9";
                        $data['materi'] = "Mufrodat 60";
                        $data['title'] = "Akhlak Manusia Bag. 6";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 60");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مُسْتَعْجِلٌ",
                                "arti" => "Buru-buru",
                                "huruf" => array_unique(["مُ","سْ","تَ","عْ","جِ","لٌ"])
                            ],
                            [
                                "kata_arab" => "جَادٌّ",
                                "arti" => "Sungguh-sungguh",
                                "huruf" => array_unique(["جَ","ا","دٌّ"])
                            ],
                            [
                                "kata_arab" => "مُحْبِطٌ",
                                "arti" => "Frustasi",
                                "huruf" => array_unique(["مُ","حْ","بِ","طٌ"])
                            ],
                            [
                                "kata_arab" => "فُضُوْلِيٌّ",
                                "arti" => "Kepo",
                                "huruf" => array_unique(["فُ","ضُ","وْ","لِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "مُتَفَهِّمٌ",
                                "arti" => "Pengertian",
                                "huruf" => array_unique(["مُ","تَ","فَ","هِّ","مٌ"])
                            ],
                            [
                                "kata_arab" => "مُبَالِغٌ",
                                "arti" => "Lebay",
                                "huruf" => array_unique(["مُ","بَ","ا","لِ","غٌ"])
                            ],
                            [
                                "kata_arab" => "قَالِقٌ",
                                "arti" => "Galau",
                                "huruf" => array_unique(["قَ","ا","لِ","قٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 61')){
                        $data['back'] = "";
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 62");
                        $data['tema'] = "Pertemuan 10";
                        $data['materi'] = "Mufrodat 61";
                        $data['title'] = "Perlengkapan Rumah Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 61");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "جِدَارٌ",
                                "arti" => "Dinding",
                                "huruf" => array_unique(["جِ","دَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "سُوْرٌ",
                                "arti" => "Pagar",
                                "huruf" => array_unique(["سُ","وْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "صُوْرَةٌ",
                                "arti" => "Gambar",
                                "huruf" => array_unique(["صُ","وْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَاعَةٌ",
                                "arti" => "Jam",
                                "huruf" => array_unique(["سَ","ا","عَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَاعَةُ الْجِدَارِ",
                                "arti" => "Jam dinding",
                                "huruf" => array_unique(["سَ","ا","عَ","ةُ","_","الْ","جِ","دَ","ا","رِ"])
                            ],
                            [
                                "kata_arab" => "طَاوِلَةٌ",
                                "arti" => "Meja",
                                "huruf" => array_unique(["طَ","ا","وِ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "كُرْسِيٌّ",
                                "arti" => "Kursi",
                                "huruf" => array_unique(["كُ","رْ","سِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "خِزَانَةٌ",
                                "arti" => "Lemari",
                                "huruf" => array_unique(["خِ","زَ","ا","نَ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 62')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 61");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 63");
                        $data['tema'] = "Pertemuan 10";
                        $data['materi'] = "Mufrodat 62";
                        $data['title'] = "Perlengkapan Rumah Bag. 2";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 62");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "دَوْلَبٌ",
                                "arti" => "Lemari bufet",
                                "huruf" => array_unique(["دَ","وْ","لَ","بٌ"])
                            ],
                            [
                                "kata_arab" => "مِرْوَحَةٌ",
                                "arti" => "Kipas angin",
                                "huruf" => array_unique(["مِ","رْ","وَ","حَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "بَابٌ",
                                "arti" => "Pintu",
                                "huruf" => array_unique(["بَ","ا","بٌ"])
                            ],
                            [
                                "kata_arab" => "نَافِذَةٌ",
                                "arti" => "Jendela",
                                "huruf" => array_unique(["نَ","ا","فِ","ذَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "غُرْفَةٌ",
                                "arti" => "Kamar",
                                "huruf" => array_unique(["غُ","رْ","فَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "شُرْفَةٌ",
                                "arti" => "Teras",
                                "huruf" => array_unique(["شُ","رْ","فَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَاحَةٌ",
                                "arti" => "Halaman",
                                "huruf" => array_unique(["سَ","ا","حَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "أَرِيْكَةٌ",
                                "arti" => "Sofa",
                                "huruf" => array_unique(["أَ","رِ","يْ","كَ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 63')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 62");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 64");
                        $data['tema'] = "Pertemuan 10";
                        $data['materi'] = "Mufrodat 63";
                        $data['title'] = "Perlengkapan Rumah Bag. 3";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 63");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مِكْنَسَةٌ",
                                "arti" => "Sapu",
                                "huruf" => array_unique(["مِ","كْ","نَ","سَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "جَالُوْنٌ",
                                "arti" => "Galon",
                                "huruf" => array_unique(["جَ","ا","لُ","وْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "بِلاَطٌ",
                                "arti" => "Lantai",
                                "huruf" => array_unique(["بِ","لاَ","طٌ"])
                            ],
                            [
                                "kata_arab" => "بِسَاطٌ",
                                "arti" => "Karpet",
                                "huruf" => array_unique(["بِ","سَ","ا","طٌ"])
                            ],
                            [
                                "kata_arab" => "حَصِيْرَةٌ",
                                "arti" => "Keset",
                                "huruf" => array_unique(["حَ","صِ","يْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مِصْبَاحٌ",
                                "arti" => "Lampu",
                                "huruf" => array_unique(["مِ","صْ","بَ","ا","حٌ"])
                            ],
                            [
                                "kata_arab" => "سِلْكٌ",
                                "arti" => "Kabel",
                                "huruf" => array_unique(["سِ","لْ","كٌ"])
                            ],
                            [
                                "kata_arab" => "مَنْفَضَّةُ السَّجَائِرِ",
                                "arti" => "Asbak",
                                "huruf" => array_unique(["مَ","نْ","فَ","ضَّ","ةُ","_","ال","سَّ","جَ","ا","ئِ","رِ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 64')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 63");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 65");
                        $data['tema'] = "Pertemuan 10";
                        $data['materi'] = "Mufrodat 64";
                        $data['title'] = "Perlengkapan Rumah Bag. 4";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 64");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "تَقْوِيْمٌ",
                                "arti" => "Kalender",
                                "huruf" => array_unique(["تَ","قْ","وِ","يْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "ثَلاَّجَةٌ",
                                "arti" => "Kulkas",
                                "huruf" => array_unique(["ثَ","لاَّ","جَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سُلَّمٌ",
                                "arti" => "Tangga",
                                "huruf" => array_unique(["سُ","لَّ","مٌ"])
                            ],
                            [
                                "kata_arab" => "شَمْعٌ",
                                "arti" => "Lilin",
                                "huruf" => array_unique(["شَ","مْ","عٌ"])
                            ],
                            [
                                "kata_arab" => "مِفْتَاحٌ",
                                "arti" => "Kunci",
                                "huruf" => array_unique(["مِ","فْ","تَ","ا","حٌ"])
                            ],
                            [
                                "kata_arab" => "قُفْلٌ",
                                "arti" => "Gembok",
                                "huruf" => array_unique(["قُ","فْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "تِلْفَازٌ",
                                "arti" => "Televisi",
                                "huruf" => array_unique(["تِ","لْ","فَ","ا","زٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 65')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 64");
                        $data['next'] = "";
                        $data['tema'] = "Pertemuan 10";
                        $data['materi'] = "Mufrodat 65";
                        $data['title'] = "Perlengkapan Rumah Bag. 5";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 65");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "بَوَّابَةٌ",
                                "arti" => "Gerbang",
                                "huruf" => array_unique(["بَ","وَّ","ا","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَقْفٌ",
                                "arti" => "Atap",
                                "huruf" => array_unique(["سَ","قْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "مِكْوَاةٌ",
                                "arti" => "Setrika",
                                "huruf" => array_unique(["مِ","كْ","وَ","ا","ةٌ"])
                            ],
                            [
                                "kata_arab" => "خُوْذَةٌ",
                                "arti" => "Helm",
                                "huruf" => array_unique(["خُ","وْ","ذَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "عُلْبَةٌ",
                                "arti" => "Kotak",
                                "huruf" => array_unique(["عُ","لْ","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "رَفٌّ",
                                "arti" => "Rak",
                                "huruf" => array_unique(["رَفٌّ"])
                            ],
                            [
                                "kata_arab" => "زُقَاقٌ",
                                "arti" => "Gang",
                                "huruf" => array_unique(["زُقَاقٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 66')){
                        $data['back'] = "";
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 67");
                        $data['tema'] = "Pertemuan 11";
                        $data['materi'] = "Mufrodat 66";
                        $data['title'] = "Pekerjaan Tentang Perkakas Rumah Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 66");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "كَنَسَ-يَكْنُسُ-كَنْسًا",
                                "arti" => "Menyapu",
                                "huruf" => array_unique(["كَ","نَ","سَ","-","يَ","كْ","نُ","سُ","-","كَ","نْ","سً","ا"])
                            ],
                            [
                                "kata_arab" => "نَظَّفَ-يُنَظِّفُ-تَنْظِيْفًا",
                                "arti" => "Membersihkan",
                                "huruf" => array_unique(["نَ","ظَّ","فَ","-","يُ","نَ","ظِّ","فُ","-","تَ","نْ","ظِ","يْ","فً","ا"])
                            ],
                            [
                                "kata_arab" => "وَسَّـخَ-يُوَسِّـخُ-تَوْسِيْخًا",
                                "arti" => "Mengotori",
                                "huruf" => array_unique(["وَ","سَّ","خَ","-","يُ","وَ","سِّ","خُ","-","تَ","وْ","سِ","يْ","خً","ا"])
                            ],
                            [
                                "kata_arab" => "دَخَّنَ-يُدَخِّنُ-تَدْخِيْنًا",
                                "arti" => "Merokok",
                                "huruf" => array_unique(["دَ","خَّ","نَ","-","يُ","دَ","خِّ","نُ","-","تَ","دْ","خِ","يْ","نً","ا"])
                            ],
                            [
                                "kata_arab" => "جَلَسَ-يَجْلِسُ-جُلُوْسًا",
                                "arti" => "Duduk",
                                "huruf" => array_unique(["جَ","لَ","سَ","-","يَ","جْ","لِ","سُ","-","جُ","لُ","وْ","سً","ا"])
                            ],
                            [
                                "kata_arab" => "دَخَلَ-يَدْخُلُ-دُخُوْلاً",
                                "arti" => "Masuk",
                                "huruf" => array_unique(["دَ","خَ","لَ","-","يَ","دْ","خُ","لُ","-","دُ","خُ","وْ","لاً"])
                            ],
                            [
                                "kata_arab" => "قَامَ-يَقُوْمُ-قِيَامًا",
                                "arti" => "Berdiri",
                                "huruf" => array_unique(["قَ","ا","مَ","-","يَ","قُ","وْ","مُ","-","قِ","يَ","ا","مً","ا"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 67')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 66");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 68");
                        $data['tema'] = "Pertemuan 11";
                        $data['materi'] = "Mufrodat 67";
                        $data['title'] = "Pekerjaan Tentang Perkakas Rumah Bag. 2";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 67");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "قَعَدَ-يَقْعُدُ-قُعُودًا",
                                "arti" => "Duduk",
                                "huruf" => array_unique(["قَ","عَ","دَ","-","يَ","قْ","عُ","دُ","-","قُ","عُ","و","دً","ا"])
                            ],
                            [
                                "kata_arab" => "خَرَجَ-يَخْرُجُ-خُرُوْجًا",
                                "arti" => "Keluar",
                                "huruf" => array_unique(["خَ","رَ","جَ","-","يَ","خْ","رُ","جُ","-","خُ","رُ","وْ","جً","ا"])
                            ],
                            [
                                "kata_arab" => "وَضَعَ-يَضَعُ-وَضْعًا",
                                "arti" => "Meletakkan",
                                "huruf" => array_unique(["وَ","ضَ","عَ","-","يَ","ضَ","عُ","-","وَ","ضْ","عً","ا"])
                            ],
                            [
                                "kata_arab" => "بَدَّلَ-يُبَدِّلُ-تَبْدِيْلًا",
                                "arti" => "Mengganti",
                                "huruf" => array_unique(["بَ","دَّ","لَ","-","يُ","بَ","دِّ","لُ","-","تَ","بْ","دِ","يْ","لًا"])
                            ],
                            [
                                "kata_arab" => "أَشْعَلَ-يُشْعِلُ-إِشْعَالاً",
                                "arti" => "Menyalakan",
                                "huruf" => array_unique(["أَ","شْ","عَ","لَ","-","يُ","شْ","عِ","لُ","-","إِ","شْ","عَ","ا","لاً"])
                            ],
                            [
                                "kata_arab" => "أَطْفَأَ-يُطْفِئُ-إِطْفَاءً",
                                "arti" => "Mematikan",
                                "huruf" => array_unique(["أَ","طْ","فَ","أَ","-","يُ","طْ","فِ","ئُ","-","إِ","طْ","فَ","ا","ءً"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 68')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 67");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 69");
                        $data['tema'] = "Pertemuan 11";
                        $data['materi'] = "Mufrodat 68";
                        $data['title'] = "Pekerjaan Tentang Perkakas Rumah Bag. 3";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 68");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "صَعِدَ-يَصْعَدُ-صُعُوْدًا",
                                "arti" => "Menaiki",
                                "huruf" => array_unique(["صَ","عِ","دَ","-","يَ","صْ","عَ","دُ","-","صُ","عُ","وْ","دً","ا"])
                            ],
                            [
                                "kata_arab" => "نَزَلَ-يَنْزِلُ-نُزُوْلاً",
                                "arti" => "Turun",
                                "huruf" => array_unique(["نَ","زَ","لَ","-","يَ","نْ","زِ","لُ","-","نُ","زُ","وْ","لاً"])
                            ],
                            [
                                "kata_arab" => "شَاهَدَ-يُشَاهِدُ-مُشَاهَدَةً",
                                "arti" => "Menonton",
                                "huruf" => array_unique(["شَ","ا","هَ","دَ","-","يُ","شَ","ا","هِ","دُ","-","مُ","شَ","ا","هَ","دَ","ةً"])
                            ],
                            [
                                "kata_arab" => "هَـجَرَ-يَهْجُرُ-هَـجْرًا",
                                "arti" => "Hijrah",
                                "huruf" => array_unique(["هَ","جَ","رَ","-","يَ","هْ","جُ","رُ","-","هَ","جْ","رً","ا"])
                            ],
                            [
                                "kata_arab" => "فَضَّلَ-يُفَضِّلُ-تَفْضِيْلاً",
                                "arti" => "Memilih",
                                "huruf" => array_unique(["فَ","ضَّ","لَ","-","يُ","فَ","ضِّ","لُ","-","تَ","فْ","ضِ","يْ","لاً"])
                            ],
                            [
                                "kata_arab" => "وَاجَهَ-يُوَاجِهُ-مُوَاجَهَةً",
                                "arti" => "Melaksanakan",
                                "huruf" => array_unique(["وَ","ا","جَ","هَ","-","يُ","وَ","ا","جِ","هُ","-","مُ","وَ","ا","جَ","هَ","ةً"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 69')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 68");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 70");
                        $data['tema'] = "Pertemuan 11";
                        $data['materi'] = "Mufrodat 69";
                        $data['title'] = "Warna-warna Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 69");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَسْوَدُ",
                                "arti" => "Hitam",
                                "huruf" => array_unique(["أَ","سْ","وَ","دُ"])
                            ],
                            [
                                "kata_arab" => "أَبْيَضُ",
                                "arti" => "Putih",
                                "huruf" => array_unique(["أَ","بْ","يَ","ضُ"])
                            ],
                            [
                                "kata_arab" => "أَحْمَرُ",
                                "arti" => "Merah",
                                "huruf" => array_unique(["أَ","حْ","مَ","رُ"])
                            ],
                            [
                                "kata_arab" => "أَحْمَرُ وَرْدِيٌّ",
                                "arti" => "Pink",
                                "huruf" => array_unique(["أَ","حْ","مَ","رُ","_","وَ","رْ","دِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "أَصْفَرُ",
                                "arti" => "Kuning",
                                "huruf" => array_unique(["أَ","صْ","فَ","رُ"])
                            ],
                            [
                                "kata_arab" => "أَزْرَقُ",
                                "arti" => "Biru",
                                "huruf" => array_unique(["أَ","زْ","رَ","قُ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 70')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 69");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 71");
                        $data['tema'] = "Pertemuan 11";
                        $data['materi'] = "Mufrodat 70";
                        $data['title'] = "Warna-warna Bag. 2";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 70");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَخْضَرُ",
                                "arti" => "Hijau",
                                "huruf" => array_unique(["أَ","خْ","ضَ","رُ"])
                            ],
                            [
                                "kata_arab" => "أَسْـمَرُ",
                                "arti" => "Coklat",
                                "huruf" => array_unique(["أَ","سْ","مَ","رُ"])
                            ],
                            [
                                "kata_arab" => "رَمَادِيٌّ",
                                "arti" => "Abu-abu",
                                "huruf" => array_unique(["رَ","مَ","ا","دِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "بُرْتُقَالِيٌّ",
                                "arti" => "Orange",
                                "huruf" => array_unique(["بُ","رْ","تُ","قَ","ا","لِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "بَنَفْسَجِيُّ",
                                "arti" => "Ungu",
                                "huruf" => array_unique(["بَ","نَ","فْ","سَ","جِ","يُّ"])
                            ],
                            [
                                "kata_arab" => "ذَهَبِيٌّ",
                                "arti" => "Emas",
                                "huruf" => array_unique(["ذَ","هَ","بِ","يٌّ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 71')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 70");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 72");
                        $data['tema'] = "Pertemuan 11";
                        $data['materi'] = "Mufrodat 71";
                        $data['title'] = "Sifat Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 71");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "كَبِيْرٌ",
                                "arti" => "Besar",
                                "huruf" => array_unique(["كَ","بِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "صَغِيْرٌ",
                                "arti" => "Kecil",
                                "huruf" => array_unique(["صَ","غِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "طَوِيْلٌ",
                                "arti" => "Panjang",
                                "huruf" => array_unique(["طَ","وِ","يْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "قَصِيْرٌ",
                                "arti" => "Pendek",
                                "huruf" => array_unique(["قَ","صِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "وَاسِعٌ",
                                "arti" => "Luas",
                                "huruf" => array_unique(["وَ","ا","سِ","عٌ"])
                            ],
                            [
                                "kata_arab" => "ضَيِّقٌ",
                                "arti" => "Sempit",
                                "huruf" => array_unique(["ضَ","يِّ","قٌ"])
                            ],
                            [
                                "kata_arab" => "عَـمِيْقٌ",
                                "arti" => "Dalam",
                                "huruf" => array_unique(["عَ","مِ","يْ","قٌ"])
                            ],
                            [
                                "kata_arab" => "ضَـحْلٌ",
                                "arti" => "Dangkal",
                                "huruf" => array_unique(["ضَ","حْ","لٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 72')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 71");
                        $data['next'] = "";
                        $data['tema'] = "Pertemuan 11";
                        $data['materi'] = "Mufrodat 72";
                        $data['title'] = "Sifat Bag. 2";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 72");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "كَثِيْرٌ",
                                "arti" => "Banyak",
                                "huruf" => array_unique(["كَ","ثِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "قَلِيْلٌ",
                                "arti" => "Sedikit",
                                "huruf" => array_unique(["قَ","لِ","يْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "نَظِيْفٌ",
                                "arti" => "Bersih",
                                "huruf" => array_unique(["نَ","ظِ","يْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "وَسِـخٌ",
                                "arti" => "Kotor",
                                "huruf" => array_unique(["وَ","سِ","خٌ"])
                            ],
                            [
                                "kata_arab" => "رَخِيْصٌ",
                                "arti" => "Murah",
                                "huruf" => array_unique(["رَ","خِ","يْ","صٌ"])
                            ],
                            [
                                "kata_arab" => "غَالٍ",
                                "arti" => "Mahal",
                                "huruf" => array_unique(["غَ","ا","لٍ"])
                            ],
                            [
                                "kata_arab" => "غَلِيْظٌ",
                                "arti" => "Tebal",
                                "huruf" => array_unique(["غَ","لِ","يْ","ظٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 73')){
                        $data['back'] = "";
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 74");
                        $data['tema'] = "Pertemuan 12";
                        $data['materi'] = "Mufrodat 73";
                        $data['title'] = "Sifat Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 73");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "رَقِيْقٌ",
                                "arti" => "Tipis",
                                "huruf" => array_unique(["رَ","قِ","يْ","قٌ"])
                            ],
                            [
                                "kata_arab" => "رَطْبٌ",
                                "arti" => "Basah",
                                "huruf" => array_unique(["رَ","طْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "يَابِسٌ",
                                "arti" => "Kering",
                                "huruf" => array_unique(["يَ","ا","بِ","سٌ"])
                            ],
                            [
                                "kata_arab" => "جَامِدٌ",
                                "arti" => "Beku",
                                "huruf" => array_unique(["جَ","ا","مِ","دٌ"])
                            ],
                            [
                                "kata_arab" => "مَائِعٌ",
                                "arti" => "Cair",
                                "huruf" => array_unique(["مَ","ا","ئِ","عٌ"])
                            ],
                            [
                                "kata_arab" => "نَاعِمٌ",
                                "arti" => "Lembut",
                                "huruf" => array_unique(["نَ","ا","عِ","مٌ"])
                            ],
                            [
                                "kata_arab" => "خَشِنٌ",
                                "arti" => "Kasar",
                                "huruf" => array_unique(["خَ","شِ","نٌ"])
                            ],
                            [
                                "kata_arab" => "قَرِيْبٌ",
                                "arti" => "Dekat",
                                "huruf" => array_unique(["قَ","رِ","يْ","بٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 74')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 73");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 75");
                        $data['tema'] = "Pertemuan 12";
                        $data['materi'] = "Mufrodat 74";
                        $data['title'] = "Sifat Bag. 2";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 74");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "بَعِيْدٌ",
                                "arti" => "Jauh",
                                "huruf" => array_unique(["بَ","عِ","يْ","دٌ"])
                            ],
                            [
                                "kata_arab" => "صَافٍ",
                                "arti" => "Bersih",
                                "huruf" => array_unique(["صَ","ا","فٍ"])
                            ],
                            [
                                "kata_arab" => "كَدِرٌ",
                                "arti" => "Keruh",
                                "huruf" => array_unique(["كَ","دِ","رٌ"])
                            ],
                            [
                                "kata_arab" => "سَرِيْعٌ",
                                "arti" => "Cepat",
                                "huruf" => array_unique(["سَ","رِ","يْ","عٌ"])
                            ],
                            [
                                "kata_arab" => "بَطِيْئٌ",
                                "arti" => "Lambat",
                                "huruf" => array_unique(["بَ","طِ","يْ","ئٌ"])
                            ],
                            [
                                "kata_arab" => "صَعْبٌ",
                                "arti" => "Susah",
                                "huruf" => array_unique(["صَ","عْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "سَهْلٌ",
                                "arti" => "Mudah",
                                "huruf" => array_unique(["سَ","هْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "ثَقِيْلٌ",
                                "arti" => "Berat",
                                "huruf" => array_unique(["ثَ","قِ","يْ","لٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 75')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 74");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 76");
                        $data['tema'] = "Pertemuan 12";
                        $data['materi'] = "Mufrodat 75";
                        $data['title'] = "Sifat Bag. 3";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 75");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "خَفِيْفٌ",
                                "arti" => "Ringan",
                                "huruf" => array_unique(["خَ","فِ","يْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "كَامِلٌ",
                                "arti" => "Sempurna",
                                "huruf" => array_unique(["كَ","ا","مِ","لٌ"])
                            ],
                            [
                                "kata_arab" => "نَاقِصٌ",
                                "arti" => "Kurang",
                                "huruf" => array_unique(["نَ","ا","قِ","صٌ"])
                            ],
                            [
                                "kata_arab" => "مُنِيْرٌ",
                                "arti" => "Terang",
                                "huruf" => array_unique(["مُ","نِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مُظْلِمٌ",
                                "arti" => "Gelap",
                                "huruf" => array_unique(["مُ","ظْ","لِ","مٌ"])
                            ],
                            [
                                "kata_arab" => "آمِنٌ",
                                "arti" => "Aman",
                                "huruf" => array_unique(["آ","مِ","نٌ"])
                            ],
                            [
                                "kata_arab" => "خَطِيْرٌ",
                                "arti" => "Mengkhawatirkan",
                                "huruf" => array_unique(["خَ","طِ","يْ","رٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 76')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 75");
                        $data['next'] = "";
                        $data['tema'] = "Pertemuan 12";
                        $data['materi'] = "Mufrodat 76";
                        $data['title'] = "Sifat Bag. 4";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 76");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "لاَئِقٌ",
                                "arti" => "Cocok",
                                "huruf" => array_unique(["لاَ","ئِ","قٌ"])
                            ],
                            [
                                "kata_arab" => "حَيٌّ",
                                "arti" => "Hidup",
                                "huruf" => array_unique(["حَ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "مَيِّتٌ",
                                "arti" => "Mati",
                                "huruf" => array_unique(["مَ","يِّ","تٌ"])
                            ],
                            [
                                "kata_arab" => "مَفْتُوْحٌ",
                                "arti" => "Terbuka",
                                "huruf" => array_unique(["مَ","فْ","تُ","وْ","حٌ"])
                            ],
                            [
                                "kata_arab" => "مُغْلَقٌ",
                                "arti" => "Tertutup",
                                "huruf" => array_unique(["مُ","غْ","لَ","قٌ"])
                            ],
                            [
                                "kata_arab" => "أَصْلِيٌّ",
                                "arti" => "Asli",
                                "huruf" => array_unique(["أَ","صْ","لِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "زَائِفٌ",
                                "arti" => "Palsu",
                                "huruf" => array_unique(["زَ","ا","ئِ","فٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 77')){
                        $data['back'] = "";
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 78");
                        $data['tema'] = "Pertemuan 13";
                        $data['materi'] = "Mufrodat 77";
                        $data['title'] = "Pakaian dan Perhiasan Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 77");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "ثَوْبٌ",
                                "arti" => "Pakaian",
                                "huruf" => array_unique(["ثَ","وْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "قَـمِيْصٌ",
                                "arti" => "Kemeja",
                                "huruf" => array_unique(["قَ","مِ","يْ","صٌ"])
                            ],
                            [
                                "kata_arab" => "بَنْطَلُوْنٌ",
                                "arti" => "Celana Panjang",
                                "huruf" => array_unique(["بَ","نْ","طَ","لُ","وْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "سِرْوَالٌ",
                                "arti" => "Celana Pendek",
                                "huruf" => array_unique(["سِ","رْ","وَ","ا","لٌ"])
                            ],
                            [
                                "kata_arab" => "خِمَارٌ",
                                "arti" => "Kerudung",
                                "huruf" => array_unique(["خِ","مَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "قَلَنْسُوَةٌ",
                                "arti" => "Peci",
                                "huruf" => array_unique(["قَ","لَ","نْ","سُ","وَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "فَانِلَةٌ",
                                "arti" => "Kaos",
                                "huruf" => array_unique(["فَ","ا","نِ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "حَرِيْرٌ",
                                "arti" => "Sutra",
                                "huruf" => array_unique(["حَ","رِ","يْ","رٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 78')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 77");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 79");
                        $data['tema'] = "Pertemuan 13";
                        $data['materi'] = "Mufrodat 78";
                        $data['title'] = "Pakaian dan Perhiasan Bag. 2";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 78");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "جَوْرَبٌ",
                                "arti" => "Kaos Kaki",
                                "huruf" => array_unique(["جَ","وْ","رَ","بٌ"])
                            ],
                            [
                                "kata_arab" => "تَنُّوْرَةٌ",
                                "arti" => "Rok",
                                "huruf" => array_unique(["تَ","نُّ","وْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "لِفَاعٌ",
                                "arti" => "Selendang",
                                "huruf" => array_unique(["لِ","فَ","ا","عٌ"])
                            ],
                            [
                                "kata_arab" => "صُدْرِيَّةٌ",
                                "arti" => "BH",
                                "huruf" => array_unique(["صُ","دْ","رِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "عِمَامَةٌ",
                                "arti" => "Sorban",
                                "huruf" => array_unique(["عِ","مَ","ا","مَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "إِزَارٌ",
                                "arti" => "Sarung",
                                "huruf" => array_unique(["إِ","زَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "جَاكِيْتٌ",
                                "arti" => "Jaket",
                                "huruf" => array_unique(["جَ","ا","كِ","يْ","تٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 79')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 78");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 80");
                        $data['tema'] = "Pertemuan 13";
                        $data['materi'] = "Mufrodat 79";
                        $data['title'] = "Pakaian dan Perhiasan Bag. 3";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 79");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "كِسَاءٌ",
                                "arti" => "Jas",
                                "huruf" => array_unique(["كِ","سَ","ا","ءٌ"])
                            ],
                            [
                                "kata_arab" => "مِعْطَفٌ",
                                "arti" => "Jas hujan",
                                "huruf" => array_unique(["مِ","عْ","طَ","فٌ"])
                            ],
                            [
                                "kata_arab" => "قُبَّعَةٌ",
                                "arti" => "Topi",
                                "huruf" => array_unique(["قُ","بَّ","عَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مِظَلَّةٌ",
                                "arti" => "Payung",
                                "huruf" => array_unique(["مِ","ظَ","لَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سِرْوَالٌ دَاخِلِيٌّ",
                                "arti" => "Celana dalam",
                                "huruf" => array_unique(["سِ","رْ","وَ","ا","لٌ","_","دَ","ا","خِ","لِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "نَعْلٌ",
                                "arti" => "Sendal",
                                "huruf" => array_unique(["نَ","عْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "حِذَاءٌ",
                                "arti" => "Sepatu",
                                "huruf" => array_unique(["حِ","ذَ","ا","ءٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 80')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 79");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 81");
                        $data['tema'] = "Pertemuan 13";
                        $data['materi'] = "Mufrodat 80";
                        $data['title'] = "Pakaian dan Perhiasan Bag. 4";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 80");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "لِبَاسٌ رَسْمِيٌّ",
                                "arti" => "Pakaian resmi",
                                "huruf" => array_unique(["لِ","بَ","ا","سٌ","_","رَ","سْ","مِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "مِنْشَفَةٌ",
                                "arti" => "Handuk",
                                "huruf" => array_unique(["مِ","نْ","شَ","فَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "قِطَانٌ",
                                "arti" => "Sabuk",
                                "huruf" => array_unique(["قِ","طَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "زِرٌّ",
                                "arti" => "Kancing",
                                "huruf" => array_unique(["زِ","رٌّ","جَ","يْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "جَيْبٌ",
                                "arti" => "Saku",
                                "huruf" => array_unique(["زِ","رٌّ","جَ","يْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "خَيْطٌ",
                                "arti" => "Benang",
                                "huruf" => array_unique(["خَ","يْ","طٌ"])
                            ],
                            [
                                "kata_arab" => "إِبْرَةٌ",
                                "arti" => "Jarum",
                                "huruf" => array_unique(["إِ","بْ","رَ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 81')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 80");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 82");
                        $data['tema'] = "Pertemuan 13";
                        $data['materi'] = "Mufrodat 81";
                        $data['title'] = "Pakaian dan Perhiasan Bag. 5";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 81");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "رَبْطَةٌ",
                                "arti" => "Perban",
                                "huruf" => array_unique(["رَ","بْ","طَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سِوَارٌ",
                                "arti" => "Gelang",
                                "huruf" => array_unique(["سِ","وَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "قِلَادَةٌ",
                                "arti" => "Kalung",
                                "huruf" => array_unique(["قِ","لَ","ا","دَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "قُرْطٌ",
                                "arti" => "Anting-anting",
                                "huruf" => array_unique(["قُ","رْ","طٌ"])
                            ],
                            [
                                "kata_arab" => "خَاتَمٌ",
                                "arti" => "Cincin",
                                "huruf" => array_unique(["خَ","ا","تَ","مٌ"])
                            ],
                            [
                                "kata_arab" => "ذَهَبٌ",
                                "arti" => "Emas",
                                "huruf" => array_unique(["ذَ","هَ","بٌ","فِ","ضَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "فِضَّةٌ",
                                "arti" => "Perak",
                                "huruf" => array_unique(["ذَ","هَ","بٌ","فِ","ضَّ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 82')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 81");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 83");
                        $data['tema'] = "Pertemuan 13";
                        $data['materi'] = "Mufrodat 82";
                        $data['title'] = "Pekerjaan Tentang Pakaian Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 82");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "لَبِسَ-يَلْبَسُ-لُبْسًا",
                                "arti" => "Memakai (pakaian)",
                                "huruf" => array_unique(["لَ","بِ","سَ","-","يَ","لْ","بَ","سُ","-","لُ","بْ","سً","ا"])
                            ],
                            [
                                "kata_arab" => "اِسْتَعْمَلَ-يَسْتَعْمِلُ-اِسْتِعْمَالًا",
                                "arti" => "Memakai",
                                "huruf" => array_unique(["اِ","سْ","تَ","عْ","مَ","لَ","-","يَ","سْ","تَ","عْ","مِ","لُ","-","اِ","سْ","تِ","عْ","مَ","ا","لً","ا"])
                            ],
                            [
                                "kata_arab" => "طَوَى-يَطْوِي-طَيًّا",
                                "arti" => "Melipat",
                                "huruf" => array_unique(["طَ","وَ","ى","-","يَ","طْ","وِ","ي","-","طَ","يًّ","ا"])
                            ],
                            [
                                "kata_arab" => "كَوَى-يَكْوِي-كَوًّا",
                                "arti" => "Menyetrika",
                                "huruf" => array_unique(["كَ","وَ","ى","-","يَ","كْ","وِ","ي","-","كَ","وًّ","ا"])
                            ],
                            [
                                "kata_arab" => "رَتَّبَ-يُرَتِّبُ-تَرْتِيْبًا",
                                "arti" => "Merapikan",
                                "huruf" => array_unique(["رَ","تَّ","بَ","-","يُ","رَ","تِّ","بُ","-","تَ","رْ","تِ","يْ","بً","ا"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 83')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 82");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 84");
                        $data['tema'] = "Pertemuan 13";
                        $data['materi'] = "Mufrodat 83";
                        $data['title'] = "Pekerjaan Tentang Pakaian Bag. 2";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 83");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "طَوَّلَ-يُطَوِّلُ-تَطْوِيْلًا",
                                "arti" => "Memanjangkan",
                                "huruf" => array_unique(["طَ","وَّ","لَ","-","يُ","طَ","وِّ","لُ","-","تَ","طْ","وِ","يْ","لً","ا"])
                            ],
                            [
                                "kata_arab" => "قَصَّرَ-يُقَصِّرُ-تَقْصِيْرًا",
                                "arti" => "Memendekkan",
                                "huruf" => array_unique(["قَ","صَّ","رَ","-","يُ","قَ","صِّ","رُ","تَ","قْ","صِ","يْ","رً","ا"])
                            ],
                            [
                                "kata_arab" => "كَبَّرَ-يُكَبِّرُ-تَكْبِيْرًا",
                                "arti" => "Membesarkan",
                                "huruf" => array_unique(["كَ","بَّ","رَ","-","يُ","كَ","بِّ","رُ","-","تَ","كْ","بِ","يْ","رً","ا"])
                            ],
                            [
                                "kata_arab" => "صَغَّرَ-يُصَغِّرُ-تَصْغِيْرًا",
                                "arti" => "Mengecilkan",
                                "huruf" => array_unique(["صَ","غَّ","رَ","-","يُ","صَ","غِّ","رُ","-","تَ","صْ","غِ","يْ","رً","ا"])
                            ],
                            [
                                "kata_arab" => "خَاطَ-يَخِيْطُ-خَيْطًا",
                                "arti" => "Menjahit",
                                "huruf" => array_unique(["خَ","ا","طَ","-","يَ","خِ","يْ","طُ","-","خَ","يْ","طً","ا"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 84')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 83");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 85");
                        $data['tema'] = "Pertemuan 13";
                        $data['materi'] = "Mufrodat 84";
                        $data['title'] = "Kamar Tidur Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 84");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سَرِيْرٌ",
                                "arti" => "Ranjang",
                                "huruf" => array_unique(["سَ","رِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مُلَاءَةُ السَّرِيْرِ",
                                "arti" => "Seprei",
                                "huruf" => array_unique(["مُ","لَا","ءَ","ةُ","_","ال","سَّ","رِ","يْ","رِ"])
                            ],
                            [
                                "kata_arab" => "فِرَاشٌ",
                                "arti" => "Kasur",
                                "huruf" => array_unique(["فِ","رَ","ا","شٌ"])
                            ],
                            [
                                "kata_arab" => "وِسَادَةٌ",
                                "arti" => "Bantal",
                                "huruf" => array_unique(["وِ","سَ","ا","دَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "وِسَادَةٌ مُسْتَطِيْلَةٌ",
                                "arti" => "Guling",
                                "huruf" => array_unique(["وِ","سَ","ا","دَ","ةٌ","_","مُ","سْ","تَ","طِ","يْ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "لِـحَافٌ",
                                "arti" => "Selimut",
                                "huruf" => array_unique(["لِ","حَ","ا","فٌ"])
                            ],
                            [
                                "kata_arab" => "حَصِيْرٌ",
                                "arti" => "Tikar",
                                "huruf" => array_unique(["حَ","صِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "سَـجَّادَةٌ",
                                "arti" => "Sajadah",
                                "huruf" => array_unique(["سَ","جَّ","ا","دَ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 85')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 84");
                        $data['next'] = "";
                        $data['tema'] = "Pertemuan 13";
                        $data['materi'] = "Mufrodat 85";
                        $data['title'] = "Kamar Tidur Bag. 2";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 85");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مِرْآةٌ",
                                "arti" => "Cermin",
                                "huruf" => array_unique(["مِ","رْ","آ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مُشْطٌ",
                                "arti" => "Sisir",
                                "huruf" => array_unique(["مُ","شْ","طٌ"])
                            ],
                            [
                                "kata_arab" => "مَسْحُوْقٌ",
                                "arti" => "Bedak",
                                "huruf" => array_unique(["مَ","سْ","حُ","وْ","قٌ"])
                            ],
                            [
                                "kata_arab" => "قُطْنٌ",
                                "arti" => "Kapas",
                                "huruf" => array_unique(["قُ","طْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "قَطِيْفَةٌ",
                                "arti" => "Beludru",
                                "huruf" => array_unique(["قَ","طِ","يْ","فَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "نَامُوْسِيَّةٌ",
                                "arti" => "Kelambu",
                                "huruf" => array_unique(["نَ","ا","مُ","وْ","سِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "اَلسَّاعَةُ الْمُنَبِّهَةُ",
                                "arti" => "Jam beker",
                                "huruf" => array_unique(["اَل","سَّ","ا","عَ","ةُ","_","الْ","مُ","نَ","بِّ","هَ","ةُ"])
                            ],
                            [
                                "kata_arab" => "جَوَّالٌ",
                                "arti" => "HP",
                                "huruf" => array_unique(["جَ","وَّ","ا","لٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 86')){
                        $data['back'] = "";
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 87");
                        $data['tema'] = "Pertemuan 14";
                        $data['materi'] = "Mufrodat 86";
                        $data['title'] = "Pekerjaan Tentang Kamar Tidur";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 86");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "نَامَ-يَنَامُ-نَوْمًا",
                                "arti" => "Tidur",
                                "huruf" => array_unique(["نَ","ا","مَ","-","يَ","نَ","ا","مُ","-","نَ","وْ","مً","ا"])
                            ],
                            [
                                "kata_arab" => "اِسْتَلْقَى-يَسْتَلْقِى-اِسْتِلْقَاءً",
                                "arti" => "Rebahan",
                                "huruf" => array_unique(["اِ","سْ","تَ","لْ","قَ","ى","-","يَ","سْ","تَ","لْ","قِ","ى","-","اِ","سْ","تِ","لْ","قَ","ا","ءً"])
                            ],
                            [
                                "kata_arab" => "خَرْخَرَ-يُخَرْخِرُ-خَرْخَرَةً",
                                "arti" => "Mengorok",
                                "huruf" => array_unique(["خَ","رْ","خَ","رَ","-","يُ","خَ","رْ","خِ","رُ","-","خَ","رْ","خَ","رَ","ةً"])
                            ],
                            [
                                "kata_arab" => "هَذَا-يَهْذِي-هَذْيًا",
                                "arti" => "Mengigau",
                                "huruf" => array_unique(["هَ","ذَ","ا","-","يَ","هْ","ذِ","ي","-","هَ","ذْ","يً","ا"])
                            ],
                            [
                                "kata_arab" => "سَالَ-يَسِيْلُ-سَيْلًا لُعَابُهُ",
                                "arti" => "Mengalir Iler",
                                "huruf" => array_unique(["سَ","ا","لَ","-","يَ","سِ","يْ","لُ","-","سَ","يْ","لًا","_","لُ","عَ","ا","بُ","هُ"])
                            ],
                            [
                                "kata_arab" => "قَرْفَصَ-يُقَرْفِصُ-قَرْفَصَةً",
                                "arti" => "Mencubit",
                                "huruf" => array_unique(["قَ","رْ","فَ","صَ","-","يُ","قَ","رْ","فِ","صُ","-","قَ","رْ","فَ","صَ","ةً"])
                            ],
                            [
                                "kata_arab" => "تَرَبَّعَ-يَتَرَبَّعُ-تَرَبُّعًا",
                                "arti" => "Duduk bersila",
                                "huruf" => array_unique(["تَ","رَ","بَّ","عَ","-","يَ","تَ","رَ","بَّ","عُ","-","تَ","رَ","بُّ","عً","ا"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 87')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 86");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 88");
                        $data['tema'] = "Pertemuan 14";
                        $data['materi'] = "Mufrodat 87";
                        $data['title'] = "Dapur Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 87");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مَوْقِدٌ",
                                "arti" => "Kompor",
                                "huruf" => array_unique(["مَ","وْ","قِ","دٌ"])
                            ],
                            [
                                "kata_arab" => "قِدْرٌ",
                                "arti" => "Panci",
                                "huruf" => array_unique(["قِ","دْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مِقْلاَةٌ",
                                "arti" => "Kompor",
                                "huruf" => array_unique(["مِ","قْ","لاَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مَائِدَةٌ",
                                "arti" => "Meja makan",
                                "huruf" => array_unique(["مَ","ا","ئِ","دَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "إِبْرِيْقٌ",
                                "arti" => "Teko",
                                "huruf" => array_unique(["إِ","بْ","رِ","يْ","قٌ"])
                            ],
                            [
                                "kata_arab" => "كُوْبٌ",
                                "arti" => "Gelas",
                                "huruf" => array_unique(["كُ","وْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "صَحْنٌ",
                                "arti" => "Piring",
                                "huruf" => array_unique(["صَ","حْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "قَصْعَةٌ",
                                "arti" => "Mangkok",
                                "huruf" => array_unique(["قَ","صْ","عَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "طَبَقٌ",
                                "arti" => "Nampan",
                                "huruf" => array_unique(["طَ","بَ","قٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 88')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 87");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 89");
                        $data['tema'] = "Pertemuan 14";
                        $data['materi'] = "Mufrodat 88";
                        $data['title'] = "Dapur Bag. 2";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 88");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "فِنْجَانٌ",
                                "arti" => "Cangkir",
                                "huruf" => array_unique(["فِ","نْ","جَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "مِلْعَقَةٌ",
                                "arti" => "Sendok",
                                "huruf" => array_unique(["مِ","لْ","عَ","قَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "كُوْزٌ",
                                "arti" => "Teko",
                                "huruf" => array_unique(["كُ","وْ","زٌ"])
                            ],
                            [
                                "kata_arab" => "قَارُوْرَةٌ",
                                "arti" => "Botol",
                                "huruf" => array_unique(["قَ","ا","رُ","وْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مِلْعَقَةُ الشَّايِ",
                                "arti" => "Sendok Teh",
                                "huruf" => array_unique(["مِ","لْ","عَ","قَ","ةُ","_","ال","شَّ","ا","يِ"])
                            ],
                            [
                                "kata_arab" => "مِلْعَقَةُ الرُّزِّ",
                                "arti" => "Sendok Nasi",
                                "huruf" => array_unique(["مِ","لْ","عَ","قَ","ةُ","_","ال","رُّ","زِّ"])
                            ],
                            [
                                "kata_arab" => "مِلْعَقَةُ الْمَرَقِ",
                                "arti" => "Sendok kuah",
                                "huruf" => array_unique(["مِ","لْ","عَ","قَ","ةُ","_","الْ","مَ","رَ","قِ"])
                            ],
                            [
                                "kata_arab" => "شَوْكَةٌ",
                                "arti" => "Garpu",
                                "huruf" => array_unique(["شَ","وْ","كَ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 89')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 88");
                        $data['next'] = "";
                        $data['tema'] = "Pertemuan 14";
                        $data['materi'] = "Mufrodat 89";
                        $data['title'] = "Dapur Bag. 3";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 89");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "رَفُّ الصُّحُوْنِ",
                                "arti" => "Rak piring",
                                "huruf" => array_unique(["رَ","فُّ","_","ال","صُّ","حُ","وْ","نِ"])
                            ],
                            [
                                "kata_arab" => "تِرْمُسٌ",
                                "arti" => "Termos",
                                "huruf" => array_unique(["تِ","رْ","مُ","سٌ"])
                            ],
                            [
                                "kata_arab" => "كِبْرِيْتٌ",
                                "arti" => "Korek",
                                "huruf" => array_unique(["كِ","بْ","رِ","يْ","تٌ"])
                            ],
                            [
                                "kata_arab" => "وَلَّاعَةٌ",
                                "arti" => "Korek gas",
                                "huruf" => array_unique(["وَ","لَّ","ا","عَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "غَازٌ",
                                "arti" => "Gas",
                                "huruf" => array_unique(["رُ","زٌّ","غَ","ا","زٌ","مَ","ا","ءٌ"])
                            ],
                            [
                                "kata_arab" => "سِكِّيْنٌ",
                                "arti" => "Pisau",
                                "huruf" => array_unique(["سِ","كِّ","يْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "مَاءٌ",
                                "arti" => "Air",
                                "huruf" => array_unique(["رُ","زٌّ","غَ","ا","زٌ","مَ","ا","ءٌ"])
                            ],
                            [
                                "kata_arab" => "رُزٌّ",
                                "arti" => "Nasi",
                                "huruf" => array_unique(["رُ","زٌّ","غَ","ا","زٌ","مَ","ا","ءٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 90')){
                        $data['back'] = "";
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 91");
                        $data['tema'] = "Pertemuan 15";
                        $data['materi'] = "Mufrodat 90";
                        $data['title'] = "Pekerjaan Tentang Dapur Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 90");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَكَلَ-يَأْكُلُ-أَكْلاً",
                                "arti" => "Makan",
                                "huruf" => array_unique(["أَ","كَ","لَ","-","يَ","أْ","كُ","لُ","-","أَ","كْ","لاً"])
                            ],
                            [
                                "kata_arab" => "شَرِبَ-يَشْرَبُ-شُرْبًا",
                                "arti" => "Minum",
                                "huruf" => array_unique(["شَ","رِ","بَ","-","يَ","شْ","رَ","بُ","-","شُ","رْ","بً","ا"])
                            ],
                            [
                                "kata_arab" => "طَبَخَ-يَطْبَخُ-طَبْخًا",
                                "arti" => "Memasak",
                                "huruf" => array_unique(["طَ","بَ","خَ","-","يَ","طْ","بَ","خُ","-","طَ","بْ","خً","ا"])
                            ],
                            [
                                "kata_arab" => "قَلَى-يَقْلِى-قَلْيًا",
                                "arti" => "Menggoreng",
                                "huruf" => array_unique(["قَ","لَ","ى","-","يَ","قْ","لِ","ى","-","قَ","لْ","يً","ا"])
                            ],
                            [
                                "kata_arab" => "شَوَى-يَشْوِى-شَوَاءً",
                                "arti" => "Memanggang",
                                "huruf" => array_unique(["شَ","وَ","ى","-","يَ","شْ","وِ","ى","-","شَ","وَ","ا","ءً"])
                            ],
                            [
                                "kata_arab" => "لَـحِسَ-يَلْحَسُ-لَحْسًا",
                                "arti" => "Menjilat",
                                "huruf" => array_unique(["لَ","حِ","سَ","-","يَ","لْ","حَ","سُ","-","لَ","حْ","سً","ا"])
                            ],
                            [
                                "kata_arab" => "بَلَعَ-يَبْلَعُ-بَلْعًا",
                                "arti" => "Menelan",
                                "huruf" => array_unique(["بَ","لَ","عَ","-","يَ","بْ","لَ","عُ","-","بَ","لْ","عً","ا"])
                            ],
                            [
                                "kata_arab" => "مَضَغَ-يَـمْضَغُ-مَضْغَا",
                                "arti" => "Mengunyah",
                                "huruf" => array_unique(["مَ","ضَ","غَ","-","يَ","مْ","ضَ","غُ","-","مَ","ضْ","غَ","ا"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 91')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 90");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 92");
                        $data['tema'] = "Pertemuan 15";
                        $data['materi'] = "Mufrodat 91";
                        $data['title'] = "Pekerjaan Tentang Dapur Bag. 2";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 91");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "عَضَّ-يَعَضُّ-عَضًّا",
                                "arti" => "Mengigit",
                                "huruf" => array_unique(["عَ","ضَّ","-","يَ","عَ","ضُّ","-","عَ","ضًّ","ا"])
                            ],
                            [
                                "kata_arab" => "تَذَوَّقَ-يَتَذَوَّقُ-تَذَوُّقًا",
                                "arti" => "Mencicipi",
                                "huruf" => array_unique(["تَ","ذَ","وَّ","قَ","-","يَ","تَ","ذَ","وَّ","قُ","-","تَ","ذَ","وُّ","قً","ا"])
                            ],
                            [
                                "kata_arab" => "شَرَّحَ-يُشَرِّحُ-تَشْرِيْحًا",
                                "arti" => "Mengiris",
                                "huruf" => array_unique(["شَ","رَّ","حَ","-","يُ","شَ","رِّ","حُ","-","تَ","شْ","رِ","يْ","حً","ا"])
                            ],
                            [
                                "kata_arab" => "قَشَّرَ-يُقَشِّرُ-تَقْشِيْرًا",
                                "arti" => "Mengupas",
                                "huruf" => array_unique(["قَ","شَّ","رَ","-","يُ","قَ","شِّ","رُ","-","تَ","قْ","شِ","يْ","رً","ا"])
                            ],
                            [
                                "kata_arab" => "قَطَعَ-يَقْطَعُ-قَطْعًا",
                                "arti" => "Memotong",
                                "huruf" => array_unique(["قَ","طَ","عَ","-","يَ","قْ","طَ","عُ","-","قَ","طْ","عً","ا"])
                            ],
                            [
                                "kata_arab" => "اِنْقَطَعَ-يَنْقَطِعُ-اِنْقِطَاعًا",
                                "arti" => "Terpotong",
                                "huruf" => array_unique(["اِ","نْ","قَ","طَ","عَ","-","يَ","نْ","قَ","طِ","عُ","-","اِ","نْ","قِ","طَ","ا","عً","ا"])
                            ],
                            [
                                "kata_arab" => "هَيَّأَ-يُهَيِّءُ-تَهْيِيْئًا",
                                "arti" => "Menghidangkan",
                                "huruf" => array_unique(["هَ","يَّ","أَ","-","يُ","هَ","يِّ","ءُ","-","تَ","هْ","يِ","يْ","ئً","ا"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 92')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 91");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 93");
                        $data['tema'] = "Pertemuan 15";
                        $data['materi'] = "Mufrodat 92";
                        $data['title'] = "Rasa-rasa Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 92");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "طَعْمٌ",
                                "arti" => "Rasa",
                                "huruf" => array_unique(["طَ","عْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "حُلْوٌ",
                                "arti" => "Manis",
                                "huruf" => array_unique(["حُ","لْ","وٌ"])
                            ],
                            [
                                "kata_arab" => "مَالِـحٌ",
                                "arti" => "Asin",
                                "huruf" => array_unique(["مَ","ا","لِ","حٌ"])
                            ],
                            [
                                "kata_arab" => "مُرٌّ",
                                "arti" => "Pahit",
                                "huruf" => array_unique(["حَ","رٌّ","مُ","رٌّ"])
                            ],
                            [
                                "kata_arab" => "حَرٌّ",
                                "arti" => "Panas",
                                "huruf" => array_unique(["حَ","رٌّ","مُ","رٌّ"])
                            ],
                            [
                                "kata_arab" => "بَارِدٌ",
                                "arti" => "Dingin",
                                "huruf" => array_unique(["بَ","ا","رِ","دٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 93')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 92");
                        $data['next'] = "";
                        $data['tema'] = "Pertemuan 15";
                        $data['materi'] = "Mufrodat 93";
                        $data['title'] = "Rasa-rasa Bag. 2";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 93");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "حِرِّيْفٌ",
                                "arti" => "Pedas",
                                "huruf" => array_unique(["حِ","رِّ","يْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "حَامِضٌ",
                                "arti" => "Asam",
                                "huruf" => array_unique(["حَ","ا","مِ","ضٌ"])
                            ],
                            [
                                "kata_arab" => "مَبْلُوْلٌ",
                                "arti" => "Basah",
                                "huruf" => array_unique(["مَ","بْ","لُ","وْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "جَافٌّ",
                                "arti" => "Kering",
                                "huruf" => array_unique(["جَ","ا","فٌّ","دَ","ا","فِ","ئٌ"])
                            ],
                            [
                                "kata_arab" => "دَافِئٌ",
                                "arti" => "Hangat",
                                "huruf" => array_unique(["جَ","ا","فٌّ","دَ","ا","فِ","ئٌ"])
                            ],
                            [
                                "kata_arab" => "رَيَّانٌ",
                                "arti" => "Segar",
                                "huruf" => array_unique(["رَ","يَّ","ا","نٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 94')){
                        $data['back'] = "";
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 95");
                        $data['tema'] = "Pertemuan 16";
                        $data['materi'] = "Mufrodat 94";
                        $data['title'] = "Kamar Mandi Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 94");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "بِرْكَةٌ",
                                "arti" => "Bak Mandi",
                                "huruf" => array_unique(["بِ","رْ","كَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مِرْحَاضٌ",
                                "arti" => "Toilet",
                                "huruf" => array_unique(["مِ","رْ","حَ","ا","ضٌ"])
                            ],
                            [
                                "kata_arab" => "مَاءٌ",
                                "arti" => "Air",
                                "huruf" => array_unique(["مَ","ا","ءٌ","بِ","رْ","كَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "صَابُوْنٌ",
                                "arti" => "Sabun",
                                "huruf" => array_unique(["صَ","ا","بُ","وْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "شَامْبُو",
                                "arti" => "Sampo",
                                "huruf" => array_unique(["شَ","ا","مْ","بُ","و"])
                            ],
                            // [
                            //     "kata_arab" => "فِرْجَوْنٌ",
                            //     "arti" => "Sikat",
                            //     "huruf" => array_unique(["فِ","رْ","جَ","وْ","نٌ"])
                            // ],
                            [
                                "kata_arab" => "مَعْجُوْنٌ",
                                "arti" => "Odol",
                                "huruf" => array_unique(["مَ","عْ","جُ","وْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "فُرْشَةٌ",
                                "arti" => "Sikat",
                                "huruf" => array_unique(["فُ","رْ","شَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مِنْشَفَةٌ",
                                "arti" => "Handuk",
                                "huruf" => array_unique(["مِ","نْ","شَ","فَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مِعْلاَقٌ",
                                "arti" => "Gantungan",
                                "huruf" => array_unique(["مِ","عْ","لاَ","قٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 95')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 94");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 96");
                        $data['tema'] = "Pertemuan 16";
                        $data['materi'] = "Mufrodat 95";
                        $data['title'] = "Kamar Mandi Bag. 2";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 95");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "دَلْوٌ",
                                "arti" => "Ember",
                                "huruf" => array_unique(["دَ","لْ","وٌ"])
                            ],
                            [
                                "kata_arab" => "مِغْرَفَةٌ",
                                "arti" => "Gayung",
                                "huruf" => array_unique(["مِ","غْ","رَ","فَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "حَنَفِيَّةٌ",
                                "arti" => "Keran",
                                "huruf" => array_unique(["حَ","نَ","فِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "أُنْبُوْبَةٌ",
                                "arti" => "Pipa",
                                "huruf" => array_unique(["أُ","نْ","بُ","وْ","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "طُلُنْبَةٌ",
                                "arti" => "Pompa",
                                "huruf" => array_unique(["طُ","لُ","نْ","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "خُرْطُوْمٌ",
                                "arti" => "Selang",
                                "huruf" => array_unique(["خُ","رْ","طُ","وْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "مَنْبَعٌ",
                                "arti" => "Sumber air",
                                "huruf" => array_unique(["مَ","نْ","بَ","عٌ"])
                            ],
                            [
                                "kata_arab" => "بِئْرٌ",
                                "arti" => "Sumur",
                                "huruf" => array_unique(["بِ","ئْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مِيْزَابٌ",
                                "arti" => "Hanger",
                                "huruf" => array_unique(["مِ","يْ","زَ","ا","بٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 96')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 95");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 97");
                        $data['tema'] = "Pertemuan 16";
                        $data['materi'] = "Mufrodat 96";
                        $data['title'] = "Pekerjaan Tentang Kamar Mandi Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 96");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "اِغْتَسَلَ-يَغْتَسِلُ-اِغْتِسَالًا",
                                "arti" => "Mandi",
                                "huruf" => array_unique(["اِ","غْ","تَ","سَ","لَ","-","يَ","غْ","تَ","سِ","لُ","-","اِ","غْ","تِ","سَ","ا","لً","ا"])
                            ],
                            [
                                "kata_arab" => "غَسَلَ-يَغْسِلُ-غَسْلاً",
                                "arti" => "Membasuh",
                                "huruf" => array_unique(["غَ","سَ","لَ","-","يَ","غْ","سِ","لُ","-","غَ","سْ","لاً"])
                            ],
                            [
                                "kata_arab" => "سَوَّكَ-يُسَوِّكُ-تَسْوِيْكًا",
                                "arti" => "Menyikat gigi",
                                "huruf" => array_unique(["سَ","وَّ","كَ","-","يُ","سَ","وِّ","كُ","-","تَ","سْ","وِ","يْ","كً","ا"])
                            ],
                            [
                                "kata_arab" => "حَفَّ-يَحُفُّ-حَفًّا",
                                "arti" => "Menggosok",
                                "huruf" => array_unique(["حَ","فَّ","-","يَ","حُ","فُّ","-","حَ","فًّ","ا"])
                            ],
                            [
                                "kata_arab" => "طَرَحَ-يَطْرَحُ-طَرْحًا",
                                "arti" => "Membuang",
                                "huruf" => array_unique(["طَ","رَ","حَ","-","يَ","طْ","رَ","حُ","-","طَ","رْ","حً","ا"])
                            ],
                            [
                                "kata_arab" => "رَمَى-يَرْمِى-رَمْيًا",
                                "arti" => "Melempar",
                                "huruf" => array_unique(["رَ","مَ","ى","-","يَ","رْ","مِ","ى","-","رَ","مْ","يً","ا"])
                            ],
                            [
                                "kata_arab" => "وَضَعَ-يَضَعُ-وَضْعًا",
                                "arti" => "Meletakkan",
                                "huruf" => array_unique(["وَ","ضَ","عَ","-","يَ","ضَ","عُ","-","وَ","ضْ","عً","ا"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 97')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 96");
                        $data['next'] = "";
                        $data['tema'] = "Pertemuan 16";
                        $data['materi'] = "Mufrodat 97";
                        $data['title'] = "Pekerjaan Tentang Kamar Mandi Bag. 2";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 97");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "بَالَ-يَبُوْلُ-بَوْلًا",
                                "arti" => "BAK",
                                "huruf" => array_unique(["بَ","ا","لَ","-","يَ","بُ","وْ","لُ","-","بَ","وْ","لً","ا"])
                            ],
                            [
                                "kata_arab" => "تَغَوَّطَ-يَتَغَوَّطُ-تَغَوُّطًا",
                                "arti" => "BAB",
                                "huruf" => array_unique(["تَ","غَ","وَّ","طَ","-","يَ","تَ","غَ","وَّ","طُ","-","تَ","غَ","وُّ","طً","ا"])
                            ],
                            [
                                "kata_arab" => "فَتَحَ-يَفْتَحُ-فَتْحًا",
                                "arti" => "Membuka",
                                "huruf" => array_unique(["فَ","تَ","حَ","-","يَ","فْ","تَ","حُ","-","فَ","تْ","حً","ا"])
                            ],
                            [
                                "kata_arab" => "غَلَقَ-يَغْلِقُ-غَلْقًا",
                                "arti" => "Menutup",
                                "huruf" => array_unique(["غَ","لَ","قَ","-","يَ","غْ","لِ","قُ","-","غَ","لْ","قً","ا"])
                            ],
                            [
                                "kata_arab" => "ضَغَطَ-يَضْغَطُ-ضَغْطًا",
                                "arti" => "Memeras",
                                "huruf" => array_unique(["ضَ","غَ","طَ","-","يَ","ضْ","غَ","طُ","-","ضَ","غْ","طً","ا"])
                            ],
                            [
                                "kata_arab" => "لَوَّثَ-يُلَوِّثُ-تَلْوِيْثًا",
                                "arti" => "Mencemari",
                                "huruf" => array_unique(["لَ","وَّ","ثَ","-","يُ","لَ","وِّ","ثُ","-","تَ","لْ","وِ","يْ","ثً","ا"])
                            ],
                            [
                                "kata_arab" => "سَبَحَ-يَسْبَحُ-سِبَاحَةً",
                                "arti" => "Berenang",
                                "huruf" => array_unique(["سَ","بَ","حَ","-","يَ","سْ","بَ","حُ","-","سِ","بَ","ا","حَ","ةً"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 98')){
                        $data['back'] = "";
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 99");
                        $data['tema'] = "Pertemuan 17";
                        $data['materi'] = "Mufrodat 98";
                        $data['title'] = "Sekolah Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 98");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مَدْرَسَةٌ حُكُوْمِيَّةٌ",
                                "arti" => "Sekolah negeri",
                                "huruf" => array_unique(["مَ","دْ","رَ","سَ","ةٌ","_","حُ","كُ","وْ","مِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مَدْرَسَةٌ أَهْلِيَّةٌ",
                                "arti" => "Sekolah swasta",
                                "huruf" => array_unique(["مَ","دْ","رَ","سَ","ةٌ","_","أَ","هْ","لِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "رَئِيْسُ الْمَدْرَسَةِ",
                                "arti" => "Kepala sekolah",
                                "huruf" => array_unique(["رَ","ئِ","يْ","سُ","_","الْ","مَ","دْ","رَ","سَ","ةِ"])
                            ],
                            [
                                "kata_arab" => "وَلِيُّ الْفَصْلِ",
                                "arti" => "Wali kelas",
                                "huruf" => array_unique(["وَ","لِ","يُّ","_","الْ","فَ","صْ","لِ"])
                            ],
                            [
                                "kata_arab" => "وَلِيُّ الطَّالِبِ",
                                "arti" => "Wali murid",
                                "huruf" => array_unique(["وَ","لِ","يُّ","_","ال","طَّ","ا","لِ","بِ"])
                            ],
                            [
                                "kata_arab" => "فَصْلٌ",
                                "arti" => "Kelas",
                                "huruf" => array_unique(["فَ","صْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "مَعْهَدٌ",
                                "arti" => "Pondok",
                                "huruf" => array_unique(["مَ","عْ","هَ","دٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 99')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 98");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 100");
                        $data['tema'] = "Pertemuan 17";
                        $data['materi'] = "Mufrodat 99";
                        $data['title'] = "Sekolah Bag. 2";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 99");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "إِدَارَةٌ",
                                "arti" => "Kantor",
                                "huruf" => array_unique(["إِ","دَ","ا","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "عَمُوْدٌ",
                                "arti" => "Tiang",
                                "huruf" => array_unique(["عَ","مُ","وْ","دٌ"])
                            ],
                            [
                                "kata_arab" => "عَلَمٌ",
                                "arti" => "Bendera",
                                "huruf" => array_unique(["عَ","لَ","مٌ"])
                            ],
                            [
                                "kata_arab" => "مُدَرِّسٌ",
                                "arti" => "Guru (lk)",
                                "huruf" => array_unique(["مُ","دَ","رِّ","سٌ"])
                            ],
                            [
                                "kata_arab" => "مُدَرِّسَةٌ",
                                "arti" => "Guru (pr)",
                                "huruf" => array_unique(["مُ","دَ","رِّ","سَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "تِلْمِيْذٌ",
                                "arti" => "Siswa",
                                "huruf" => array_unique(["تِ","لْ","مِ","يْ","ذٌ"])
                            ],
                            [
                                "kata_arab" => "تِلْمِيْذَةٌ",
                                "arti" => "Siswi",
                                "huruf" => array_unique(["تِ","لْ","مِ","يْ","ذَ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 100')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 99");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 101");
                        $data['tema'] = "Pertemuan 17";
                        $data['materi'] = "Mufrodat 100";
                        $data['title'] = "Sekolah Bag. 3";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 100");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "نُقُوْدٌ",
                                "arti" => "Uang",
                                "huruf" => array_unique(["نُ","قُ","وْ","دٌ"])
                            ],
                            [
                                "kata_arab" => "مَصْرُوْفُ الْجَيْبِ",
                                "arti" => "Uang saku",
                                "huruf" => array_unique(["مَ","صْ","رُ","وْ","فُ","_","الْ","جَ","يْ","بِ"])
                            ],
                            [
                                "kata_arab" => "طَالِبٌ جَامِعِيٌّ",
                                "arti" => "Mahasiswa",
                                "huruf" => array_unique(["طَ","ا","لِ","بٌ","_","جَ","ا","مِ","عِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "مِنْحَةٌ دِرَاسِيَّةٌ",
                                "arti" => "Beasiswa",
                                "huruf" => array_unique(["مِ","نْ","حَ","ةٌ","_","دِ","رَ","ا","سِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مُحَاضِرٌ",
                                "arti" => "Dosen",
                                "huruf" => array_unique(["مُ","حَ","ا","ضِ","رٌ"])
                            ],
                            [
                                "kata_arab" => "كُلِّيَّةٌ",
                                "arti" => "Fakultas",
                                "huruf" => array_unique(["كُ","لِّ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "قِسْمٌ",
                                "arti" => "Jurusan",
                                "huruf" => array_unique(["قِ","سْ","مٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 101')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 100");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 102");
                        $data['tema'] = "Pertemuan 17";
                        $data['materi'] = "Mufrodat 101";
                        $data['title'] = "Sekolah Bag. 4";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 101");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سَبُّوْرَةٌ",
                                "arti" => "Papan tulis",
                                "huruf" => array_unique(["سَ","بُّ","وْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "حِبْرٌ",
                                "arti" => "Tinta",
                                "huruf" => array_unique(["حِ","بْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "قَلَمُ السَّبُّوْرَةِ",
                                "arti" => "Spidol",
                                "huruf" => array_unique(["قَ","لَ","مُ","_","ال","سَّ","بُّ","وْ","رَ","ةِ"])
                            ],
                            [
                                "kata_arab" => "كِـتَابٌ",
                                "arti" => "Buku",
                                "huruf" => array_unique(["كِ","تَ","ا","بٌ"])
                            ],
                            [
                                "kata_arab" => "دَفْتَرٌ",
                                "arti" => "Buku tulis",
                                "huruf" => array_unique(["دَ","فْ","تَ","رٌ"])
                            ],
                            [
                                "kata_arab" => "قَلَمٌ",
                                "arti" => "Bulpoin",
                                "huruf" => array_unique(["قَ","لَ","مٌ"])
                            ],
                            [
                                "kata_arab" => "مِـمْسَحَةٌ",
                                "arti" => "Penghapus",
                                "huruf" => array_unique(["مِ","مْ","سَ","حَ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 102')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 101");
                        $data['next'] = "";
                        $data['tema'] = "Pertemuan 17";
                        $data['materi'] = "Mufrodat 102";
                        $data['title'] = "Sekolah Bag. 5";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 102");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "قَلَمُ الرَّصَاصِ",
                                "arti" => "Pensil",
                                "huruf" => array_unique(["قَ","لَ","مُ","_","ال","رَّ","صَ","ا","صِ"])
                            ],
                            [
                                "kata_arab" => "شَهَادَةٌ",
                                "arti" => "Sertifikat",
                                "huruf" => array_unique(["شَ","هَ","ا","دَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "كُرَّةٌ أَرْضِيَّةٌ",
                                "arti" => "Globe",
                                "huruf" => array_unique(["كُ","رَّ","ةٌ","_","أَ","رْ","ضِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "خَرِيْطَةٌ",
                                "arti" => "Peta",
                                "huruf" => array_unique(["خَ","رِ","يْ","طَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "رَوْضَةُ الْأَطْفَالِ",
                                "arti" => "Taman anak-anak",
                                "huruf" => array_unique(["رَ","وْ","ضَ","ةُ","_","الْ","أَ","طْ","فَ","ا","لِ"])
                            ],
                            [
                                "kata_arab" => "مَدْرَسَةٌ إِبْتِدَائِيَّةٌ",
                                "arti" => "Sekolah dasar",
                                "huruf" => array_unique(["مَ","دْ","رَ","سَ","ةٌ","_","إِ","بْ","تِ","دَ","ا","ئِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مَدْرَسَةٌ مُتَوَسِّطَةٌ",
                                "arti" => "SMP",
                                "huruf" => array_unique(["مَ","دْ","رَ","سَ","ةٌ","_","مُ","تَ","وَ","سِّ","طَ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 103')){
                        $data['back'] = "";
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 104");
                        $data['tema'] = "Pertemuan 18";
                        $data['materi'] = "Mufrodat 103";
                        $data['title'] = "Sekolah Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 103");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مَدْرَسَةٌ ثَانَوِيَّةٌ",
                                "arti" => "SMA",
                                "huruf" => array_unique(["مَ","دْ","رَ","سَ","ةٌ","_","ثَ","ا","نَ","وِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "جَامِعَةٌ",
                                "arti" => "Universitas",
                                "huruf" => array_unique(["جَ","ا","مِ","عَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مَكْتَبَةٌ",
                                "arti" => "Perpustakaan",
                                "huruf" => array_unique(["مَ","كْ","تَ","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "صُوْرَةٌ",
                                "arti" => "Gambar",
                                "huruf" => array_unique(["صُ","وْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "خَتْمٌ",
                                "arti" => "Stempel",
                                "huruf" => array_unique(["خَ","تْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "تَوْقِيْعٌ",
                                "arti" => "Tanda tangan",
                                "huruf" => array_unique(["تَ","وْ","قِ","يْ","عٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 104')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 103");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 105");
                        $data['tema'] = "Pertemuan 18";
                        $data['materi'] = "Mufrodat 104";
                        $data['title'] = "Sekolah Bag. 2";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 104");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "نَشْرَةٌ",
                                "arti" => "Brosur",
                                "huruf" => array_unique(["نَ","شْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "نَتِيْجَةٌ",
                                "arti" => "Nilai",
                                "huruf" => array_unique(["نَ","تِ","يْ","جَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "إِمْتِحَانٌ",
                                "arti" => "Ulangan",
                                "huruf" => array_unique(["إِ","مْ","تِ","حَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "إِمْتِحَانٌ تَحْرِيْرِيٌّ",
                                "arti" => "Ujian tulis",
                                "huruf" => array_unique(["إِ","مْ","تِ","حَ","ا","نٌ","_","تَ","حْ","رِ","يْ","رِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "إِمْتِحَانٌ شَفَوِيٌّ",
                                "arti" => "Ujian lisan",
                                "huruf" => array_unique(["إِ","مْ","تِ","حَ","ا","نٌ","_","شَ","فَ","وِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "لَـجْنَةُ الْإِمْتِحَانِ",
                                "arti" => "Panitia ujian",
                                "huruf" => array_unique(["لَ","جْ","نَ","ةُ","_","الْ","إِ","مْ","تِ","حَ","ا","نِ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 105')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 104");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 106");
                        $data['tema'] = "Pertemuan 18";
                        $data['materi'] = "Mufrodat 105";
                        $data['title'] = "Pekerjaan Tentang Sekolah Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 105");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "ذَهَبَ-يَذْهَبُ-ذَهَابًا",
                                "arti" => "Pergi",
                                "huruf" => array_unique(["ذَ","هَ","بَ","-","يَ","ذْ","هَ","بُ","-","ذَ","هَ","ا","بً","ا"])
                            ],
                            [
                                "kata_arab" => "رَجَعَ-يَرْجِعُ-رُجُوْعًا",
                                "arti" => "Pulang",
                                "huruf" => array_unique(["رَ","جَ","عَ","-","يَ","رْ","جِ","عُ","-","رُ","جُ","وْ","عً","ا"])
                            ],
                            [
                                "kata_arab" => "عَلَّمَ-يُعَلِّمُ-تَعْلِيْمًا",
                                "arti" => "Mengajari",
                                "huruf" => array_unique(["عَ","لَّ","مَ","-","يُ","عَ","لِّ","مُ","-","تَ","عْ","لِ","يْ","مً","ا"])
                            ],
                            [
                                "kata_arab" => "تَعَلَّمَ-يَتَعَلَّمُ-تَعَلُّمًا",
                                "arti" => "Belajar",
                                "huruf" => array_unique(["تَ","عَ","لَّ","مَ","-","يَ","تَ","عَ","لَّ","مُ","-","تَ","عَ","لُّ","مً","ا"])
                            ],
                            [
                                "kata_arab" => "أَيَّدَ-يُؤَيِّدُ-تَأْيِيْدًا",
                                "arti" => "Meyakinkan",
                                "huruf" => array_unique(["أَ","يَّ","دَ","-","يُ","ؤَ","يِّ","دُ","-","تَ","أْ","يِ","يْ","دً","ا"])
                            ],
                            [
                                "kata_arab" => "مَثَّلَ-يُـمَثِّلُ-تَـمْثِيْلًا",
                                "arti" => "Menirukan",
                                "huruf" => array_unique(["مَ","ثَّ","لَ","-","يُ","مَ","ثِّ","لُ","-","تَ","مْ","ثِ","يْ","لً","ا"])
                            ],
                            [
                                "kata_arab" => "مَرَّنَ-يُـمَرِّنُ-تَـمْرِيْنًا",
                                "arti" => "Melatih",
                                "huruf" => array_unique(["مَ","رَّ","نَ","-","يُ","مَ","رِّ","نُ","-","تَ","مْ","رِ","يْ","نً","ا"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 106')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 105");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 107");
                        $data['tema'] = "Pertemuan 18";
                        $data['materi'] = "Mufrodat 106";
                        $data['title'] = "Pekerjaan Tentang Sekolah Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 106");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "اِمْتَحَنَ-يَـمْتَحِنُ-اِمْتِحَانًا",
                                "arti" => "Ujian",
                                "huruf" => array_unique(["اِ","مْ","تَ","حَ","نَ","-","يَ","مْ","تَ","حِ","نُ","-","اِ","مْ","تِ","حَ","ا","نً","ا"])
                            ],
                            [
                                "kata_arab" => "اَفَادَ-يُفِيْدُ-إِفَادَةً",
                                "arti" => "Memberi manfaat",
                                "huruf" => array_unique(["اَ","فَ","ا","دَ","-","يُ","فِ","يْ","دُ","-","إِ","فَ","ا","دَ","ةً"])
                            ],
                            [
                                "kata_arab" => "عَمِلَ-يَعْمَلُ-عَمَلاً",
                                "arti" => "Melakukan",
                                "huruf" => array_unique(["عَ","مِ","لَ","-","يَ","عْ","مَ","لُ","-","عَ","مَ","لاً"])
                            ],
                            [
                                "kata_arab" => "فَهِمَ-يَفْهَمُ-فَهْمًا",
                                "arti" => "Memahami",
                                "huruf" => array_unique(["فَ","هِ","مَ","-","يَ","فْ","هَ","مُ","-","فَ","هْ","مً","ا"])
                            ],
                            [
                                "kata_arab" => "عَلِمَ-يَعْلَمُ-عِلْمًا",
                                "arti" => "Mengetahui",
                                "huruf" => array_unique(["عَ","لِ","مَ","-","يَ","عْ","لَ","مُ","-","عِ","لْ","مً","ا"])
                            ],
                            [
                                "kata_arab" => "عَرَفَ-يَعْرِفُ-مَعْرِفَةً",
                                "arti" => "Mengetahui",
                                "huruf" => array_unique(["عَ","رَ","فَ","-","يَ","عْ","رِ","فُ","-","مَ","عْ","رِ","فَ","ةً"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 107')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 106");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 108");
                        $data['tema'] = "Pertemuan 18";
                        $data['materi'] = "Mufrodat 107";
                        $data['title'] = "Pekerjaan Tentang Sekolah Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 107");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "صَنَعَ-يَصْنَعُ-صِنَاعَةً",
                                "arti" => "Membuat",
                                "huruf" => array_unique(["صَ","نَ","عَ","-","يَ","صْ","نَ","عُ","-","صِ","نَ","ا","عَ","ةً"])
                            ],
                            [
                                "kata_arab" => "جَرَّبَ-يُجَرِّبُ-تَجْرِيْبًا",
                                "arti" => "Mencoba",
                                "huruf" => array_unique(["جَ","رَّ","بَ","-","يُ","جَ","رِّ","بُ","-","تَ","جْ","رِ","يْ","بً","ا"])
                            ],
                            [
                                "kata_arab" => "فَتَّشَ-يُفَتِّشُ-تَفْتِيْشًا",
                                "arti" => "Memeriksa",
                                "huruf" => array_unique(["فَ","تَّ","شَ","-","يُ","فَ","تِّ","شُ","-","تَ","فْ","تِ","يْ","شً","ا"])
                            ],
                            [
                                "kata_arab" => "كَتَبَ-يَكْتُبُ-كِـتَابَةً",
                                "arti" => "Menulis",
                                "huruf" => array_unique(["كَ","تَ","بَ","-","يَ","كْ","تُ","بُ","-","كِ","تَ","ا","بَ","ةً"])
                            ],
                            [
                                "kata_arab" => "رَسَمَ-يَرْسُمُ-رَسْـمًا",
                                "arti" => "Menggambar",
                                "huruf" => array_unique(["رَ","سَ","مَ","-","يَ","رْ","سُ","مُ","-","رَ","سْ","مً","ا"])
                            ],
                            [
                                "kata_arab" => "سَـجَّلَ-يُسَجِّلُ-تَسْجِيْلًا",
                                "arti" => "Mendaftar",
                                "huruf" => array_unique(["سَ","جَّ","لَ","-","يُ","سَ","جِّ","لُ","-","تَ","سْ","جِ","يْ","لً","ا"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 108')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 107");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 109");
                        $data['tema'] = "Pertemuan 18";
                        $data['materi'] = "Mufrodat 108";
                        $data['title'] = "Kendaraan-kendaraan Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 108");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "دَرَّاجَةٌ",
                                "arti" => "Sepeda",
                                "huruf" => array_unique(["دَ","رَّ","ا","جَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "دَرَّاجَةٌ نَارِيَّةٌ",
                                "arti" => "Sepeda Motor",
                                "huruf" => array_unique(["دَ","رَّ","ا","جَ","ةٌ","_","نَ","ا","رِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَيَّارَةٌ",
                                "arti" => "Mobil",
                                "huruf" => array_unique(["سَ","يَّ","ا","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَيَّارَةُ السِّبَاقِ",
                                "arti" => "Mobil balap",
                                "huruf" => array_unique(["سَ","يَّ","ا","رَ","ةُ","_","ال","سِّ","بَ","ا","قِ"])
                            ],
                            [
                                "kata_arab" => "سَيَّارَةُ الرُّكَّابِ",
                                "arti" => "Mobil umum",
                                "huruf" => array_unique(["سَ","يَّ","ا","رَ","ةُ","_","ال","رُّ","كَّ","ا","بِ"])
                            ],
                            [
                                "kata_arab" => "حَافِلَةٌ",
                                "arti" => "Bis",
                                "huruf" => array_unique(["حَ","ا","فِ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "شَاحِنَةٌ",
                                "arti" => "Truk",
                                "huruf" => array_unique(["شَ","ا","حِ","نَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "بِتْشَا",
                                "arti" => "Becak",
                                "huruf" => array_unique(["بِ","تْ","شَ","ا"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 109')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 108");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 110");
                        $data['tema'] = "Pertemuan 18";
                        $data['materi'] = "Mufrodat 109";
                        $data['title'] = "Kendaraan-kendaraan Bag. 2";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 109");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "عَرَبَةٌ",
                                "arti" => "Gerobak",
                                "huruf" => array_unique(["عَ","رَ","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "بَاخِرَةٌ",
                                "arti" => "Kapal uap",
                                "huruf" => array_unique(["بَ","ا","خِ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَفِيْنَةٌ",
                                "arti" => "Kapal",
                                "huruf" => array_unique(["سَ","فِ","يْ","نَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَفِيْنَةٌ شِرَاعِيَّةٌ",
                                "arti" => "Perahu layar",
                                "huruf" => array_unique(["سَ","فِ","يْ","نَ","ةٌ","_","شِ","رَ","ا","عِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "تَكْسِى",
                                "arti" => "Taksi",
                                "huruf" => array_unique(["تَ","كْ","سِ","ى"])
                            ],
                            [
                                "kata_arab" => "قِطَارٌ",
                                "arti" => "Kereta api",
                                "huruf" => array_unique(["قِ","طَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "قَاطِرَةٌ",
                                "arti" => "Lokomotif",
                                "huruf" => array_unique(["قَ","ا","طِ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "طَائِرَةٌ",
                                "arti" => "Pesawat",
                                "huruf" => array_unique(["طَ","ا","ئِ","رَ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 110')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 109");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 111");
                        $data['tema'] = "Pertemuan 18";
                        $data['materi'] = "Mufrodat 110";
                        $data['title'] = "Kendaraan-kendaraan Bag. 3";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 110");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "دَبَّابَةٌ",
                                "arti" => "Tank",
                                "huruf" => array_unique(["دَ","بَّ","ا","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "زَوْرَقٌ",
                                "arti" => "Sampan",
                                "huruf" => array_unique(["زَ","وْ","رَ","قٌ"])
                            ],
                            [
                                "kata_arab" => "مِقْوَدٌ",
                                "arti" => "Setir",
                                "huruf" => array_unique(["مِ","قْ","وَ","دٌ"])
                            ],
                            [
                                "kata_arab" => "فَرْمَلَةٌ",
                                "arti" => "Rem",
                                "huruf" => array_unique(["فَ","رْ","مَ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "عَـجَلَةٌ",
                                "arti" => "Roda",
                                "huruf" => array_unique(["عَ","جَ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "بِنْزِيْنٌ",
                                "arti" => "Bensin",
                                "huruf" => array_unique(["بِ","نْ","زِ","يْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "إِشَارَةُ الْمُرُوْرِ",
                                "arti" => "Lampu lalu lintas",
                                "huruf" => array_unique(["إِ","شَ","ا","رَ","ةُ","_","الْ","مُ","رُ","وْ","رِ"])
                            ],
                            [
                                "kata_arab" => "تَذْكِرَةٌ",
                                "arti" => "Tiket",
                                "huruf" => array_unique(["تَ","ذْ","كِ","رَ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 111')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 110");
                        $data['next'] = "";
                        $data['tema'] = "Pertemuan 18";
                        $data['materi'] = "Mufrodat 111";
                        $data['title'] = "Kendaraan-kendaraan Bag. 4";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 111");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "تَأْشِيْرَةٌ",
                                "arti" => "Visa",
                                "huruf" => array_unique(["تَ","أْ","شِ","يْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "جَوَازُ السَّفَرِ",
                                "arti" => "Paspor",
                                "huruf" => array_unique(["جَ","وَ","ا","زُ","_","ال","سَّ","فَ","رِ"])
                            ],
                            [
                                "kata_arab" => "أُجْرَةٌ",
                                "arti" => "Tarif",
                                "huruf" => array_unique(["أُ","جْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "دُوَارُ الْبَرِّ",
                                "arti" => "Mabuk darat",
                                "huruf" => array_unique(["دُ","وَ","ا","رُ","_","الْ","بَ","رِّ"])
                            ],
                            [
                                "kata_arab" => "دُوَارُ الْبَحْرِ",
                                "arti" => "Mabuk laut",
                                "huruf" => array_unique(["دُ","وَ","ا","رُ","_","الْ","بَ","حْ","رِ"])
                            ],
                            [
                                "kata_arab" => "هَدَايَا السَّفَرِ",
                                "arti" => "Oleh-oleh",
                                "huruf" => array_unique(["هَ","دَ","ا","يَ","ا","_","ال","سَّ","فَ","رِ"])
                            ],
                            [
                                "kata_arab" => "مَصَارِيْفُ السَّفَرِ",
                                "arti" => "Biaya perjalanan",
                                "huruf" => array_unique(["مَ","صَ","ا","رِ","يْ","فُ","_","ال","سَّ","فَ","رِ"])
                            ],
                            [
                                "kata_arab" => "مَسَافَةُ السَّفَرِ",
                                "arti" => "Jarak perjalanan",
                                "huruf" => array_unique(["مَ","سَ","ا","فَ","ةُ","_","ال","سَّ","فَ","رِ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 112')){
                        $data['back'] = "";
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 113");
                        $data['tema'] = "Pertemuan 19";
                        $data['materi'] = "Mufrodat 112";
                        $data['title'] = "Pekerjaan Tentang Kendaraan";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 112");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "قَادَ-يَقُودُ-قِيَادَةً",
                                "arti" => "Menyetir",
                                "huruf" => array_unique(["قَ","ا","دَ","-","يَ","قُ","و","دُ","-","قِ","يَ","ا","دَ","ةً"])
                            ],
                            [
                                "kata_arab" => "رَكِبَ-يَرْكَبُ-رُكُوْبًا",
                                "arti" => "Mengendarai",
                                "huruf" => array_unique(["رَ","كِ","بَ","-","يَ","رْ","كَ","بُ","-","رُ","كُ","وْ","بً","ا"])
                            ],
                            [
                                "kata_arab" => "رَدِفَ-يَرْدَفُ-رَدْفًا",
                                "arti" => "Membonceng",
                                "huruf" => array_unique(["رَ","دِ","فَ","-","يَ","رْ","دَ","فُ","-","رَ","دْ","فً","ا"])
                            ],
                            [
                                "kata_arab" => "فَرْمَلَ-يُفَرْمِلُ-فَرْمَلَةً",
                                "arti" => "Mengerem",
                                "huruf" => array_unique(["فَ","رْ","مَ","لَ","-","يُ","فَ","رْ","مِ","لُ","-","فَ","رْ","مَ","لَ","ةً"])
                            ],
                            [
                                "kata_arab" => "تَوَقَّفَ-يَتَوَقَّفُ-تَوَقُّفًا",
                                "arti" => "Berhenti",
                                "huruf" => array_unique(["تَ","وَ","قَّ","فَ","-","يَ","تَ","وَ","قَّ","فُ","-","تَ","وَ","قُّ","فً","ا"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 113')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 112");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 114");
                        $data['tema'] = "Pertemuan 19";
                        $data['materi'] = "Mufrodat 113";
                        $data['title'] = "Rumah Sakit Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 113");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "طَبِيْبٌ",
                                "arti" => "Dokter (lk)",
                                "huruf" => array_unique(["طَ","بِ","يْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "طَبِيْبَةٌ",
                                "arti" => "Dokter (pr)",
                                "huruf" => array_unique(["طَ","بِ","يْ","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مُـمَرِّضٌ",
                                "arti" => "Perawat",
                                "huruf" => array_unique(["مُ","مَ","رِّ","ضٌ"])
                            ],
                            [
                                "kata_arab" => "مَرِيْضٌ",
                                "arti" => "Pasien",
                                "huruf" => array_unique(["مَ","رِ","يْ","ضٌ"])
                            ],
                            [
                                "kata_arab" => "طَبِيْبٌ اِخْتِصَاصِيٌّ",
                                "arti" => "Dokter speasialis",
                                "huruf" => array_unique(["طَ","بِ","يْ","بٌ","_","اِ","خْ","تِ","صَ","ا","صِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "طَبِيْبُ الْأَسْنَانِ",
                                "arti" => "Dokter gigi",
                                "huruf" => array_unique(["طَ","بِ","يْ","بُ","_","الْ","أَ","سْ","نَ","ا","نِ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 114')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 113");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 115");
                        $data['tema'] = "Pertemuan 19";
                        $data['materi'] = "Mufrodat 114";
                        $data['title'] = "Rumah Sakit Bag. 2";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 114");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "طَبِيْبُ الْجَرَاحِ",
                                "arti" => "Dokter Bedah",
                                "huruf" => array_unique(["طَ","بِ","يْ","بُ","_","الْ","جَ","رَ","ا","حِ"])
                            ],
                            [
                                "kata_arab" => "طَبِيْبٌ بَيْطَرِيٌّ",
                                "arti" => "Dokter hewan",
                                "huruf" => array_unique(["طَ","بِ","يْ","بٌ","_","بَ","يْ","طَ","رِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "دَوَاءٌ",
                                "arti" => "Obat",
                                "huruf" => array_unique(["دَ","وَ","ا","ءٌ","دَ","ا","ءٌ"])
                            ],
                            [
                                "kata_arab" => "دَاءٌ",
                                "arti" => "Penyebab",
                                "huruf" => array_unique(["دَ","وَ","ا","ءٌ","دَ","ا","ءٌ"])
                            ],
                            [
                                "kata_arab" => "سَيَّارَةُ الْإِسْعَافِ",
                                "arti" => "Mobil Ambulan",
                                "huruf" => array_unique(["سَ","يَّ","ا","رَ","ةُ","_","الْ","إِ","سْ","عَ","ا","فِ"])
                            ],
                            [
                                "kata_arab" => "مِيْزَانُ الْحَرَارَةِ",
                                "arti" => "Termometer",
                                "huruf" => array_unique(["مِ","يْ","زَ","ا","نُ","_","الْ","حَ","رَ","ا","رَ","ةِ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 115')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 114");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 116");
                        $data['tema'] = "Pertemuan 19";
                        $data['materi'] = "Mufrodat 115";
                        $data['title'] = "Nama-nama Hewan Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 115");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "كَلْبٌ",
                                "arti" => "Anjing",
                                "huruf" => array_unique(["قِ","طٌّ","كَ","لْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "قِطٌّ",
                                "arti" => "Kucing",
                                "huruf" => array_unique(["قِ","طٌّ","كَ","لْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "أَرْنَبٌ",
                                "arti" => "Kelinci",
                                "huruf" => array_unique(["أَ","رْ","نَ","بٌ"])
                            ],
                            [
                                "kata_arab" => "فَأْرٌ",
                                "arti" => "Tikus",
                                "huruf" => array_unique(["فَ","أْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "ثَوْرٌ",
                                "arti" => "Banteng",
                                "huruf" => array_unique(["ثَ","وْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "خَرُوْفٌ",
                                "arti" => "biri-biri",
                                "huruf" => array_unique(["خَ","رُ","وْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "خِنْزِيْرٌ",
                                "arti" => "Babi",
                                "huruf" => array_unique(["خِ","نْ","زِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "بَقَرٌ",
                                "arti" => "Sapi",
                                "huruf" => array_unique(["بَ","قَ","رٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 116')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 115");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 117");
                        $data['tema'] = "Pertemuan 19";
                        $data['materi'] = "Mufrodat 116";
                        $data['title'] = "Nama-nama Hewan Bag. 2";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 116");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "جَامُوْسٌ",
                                "arti" => "Kerbau",
                                "huruf" => array_unique(["جَ","ا","مُ","وْ","سٌ"])
                            ],
                            [
                                "kata_arab" => "حِصَانٌ",
                                "arti" => "Kuda",
                                "huruf" => array_unique(["حِ","صَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "دَجَاجٌ",
                                "arti" => "Ayam",
                                "huruf" => array_unique(["دَ","جَ","ا","جٌ"])
                            ],
                            [
                                "kata_arab" => "غَنَمٌ",
                                "arti" => "Kambing",
                                "huruf" => array_unique(["غَ","نَ","مٌ"])
                            ],
                            [
                                "kata_arab" => "زَرَافَةٌ",
                                "arti" => "Jerapah",
                                "huruf" => array_unique(["زَ","رَ","ا","فَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "نَحْلٌ",
                                "arti" => "Lebah",
                                "huruf" => array_unique(["نَ","حْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "ضِفْدَاعٌ",
                                "arti" => "Kodok",
                                "huruf" => array_unique(["ضِ","فْ","دَ","ا","عٌ"])
                            ],
                            [
                                "kata_arab" => "قُنْفُذٌ",
                                "arti" => "Landak",
                                "huruf" => array_unique(["قُ","نْ","فُ","ذٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 117')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 116");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 118");
                        $data['tema'] = "Pertemuan 19";
                        $data['materi'] = "Mufrodat 117";
                        $data['title'] = "Nama-nama Hewan Bag. 3";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 117");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سَرَطَانُ الْبَحْرِ",
                                "arti" => "Kepiting laut",
                                "huruf" => array_unique(["سَ","رَ","طَ","ا","نُ","_","الْ","بَ","حْ","رِ"])
                            ],
                            [
                                "kata_arab" => "كَرْكَدَّانٌ",
                                "arti" => "Badak",
                                "huruf" => array_unique(["كَ","رْ","كَ","دَّ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "نَمِرٌ",
                                "arti" => "Harimau",
                                "huruf" => array_unique(["نَ","مِ","رٌ"])
                            ],
                            [
                                "kata_arab" => "ذِئْبٌ",
                                "arti" => "Serigala",
                                "huruf" => array_unique(["ذِ","ئْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "سِنْجَابٌ",
                                "arti" => "Tupai",
                                "huruf" => array_unique(["سِ","نْ","جَ","ا","بٌ"])
                            ],
                            [
                                "kata_arab" => "أَسَدٌ",
                                "arti" => "Singa",
                                "huruf" => array_unique(["أَ","سَ","دٌ"])
                            ],
                            [
                                "kata_arab" => "فَرَسٌ",
                                "arti" => "Kuda betina",
                                "huruf" => array_unique(["فَ","رَ","سٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 118')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 117");
                        $data['next'] = "";
                        $data['tema'] = "Pertemuan 19";
                        $data['materi'] = "Mufrodat 118";
                        $data['title'] = "Nama-nama Hewan Bag. 4";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 118");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "حِمَارٌ",
                                "arti" => "Keledai",
                                "huruf" => array_unique(["حِ","مَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "حِمَارُ الزَّرَدِ",
                                "arti" => "Zebra",
                                "huruf" => array_unique(["حِ","مَ","ا","رُ","_","ال","زَّ","رَ","دِ"])
                            ],
                            [
                                "kata_arab" => "ثَعْبَانٌ",
                                "arti" => "Ular",
                                "huruf" => array_unique(["ثَ","عْ","بَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "وَرَلٌ",
                                "arti" => "Kadal",
                                "huruf" => array_unique(["وَ","رَ","لٌ"])
                            ],
                            [
                                "kata_arab" => "قَـمْلٌ",
                                "arti" => "Kutu",
                                "huruf" => array_unique(["قَ","مْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "ضَبٌّ",
                                "arti" => "Biawak",
                                "huruf" => array_unique(["ضَ","بٌّ"])
                            ],
                            [
                                "kata_arab" => "حِرْبَاءٌ",
                                "arti" => "Bunglon",
                                "huruf" => array_unique(["حِ","رْ","بَ","ا","ءٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 119')){
                        $data['back'] = "";
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 120");
                        $data['tema'] = "Pertemuan 20";
                        $data['materi'] = "Mufrodat 119";
                        $data['title'] = "Nama-nama Hewan Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 119");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "تِـمْسَاحٌ",
                                "arti" => "Buaya",
                                "huruf" => array_unique(["تِ","مْ","سَ","ا","حٌ"])
                            ],
                            [
                                "kata_arab" => "أَنْقَلِيْسُ",
                                "arti" => "Belut",
                                "huruf" => array_unique(["أَ","نْ","قَ","لِ","يْ","سُ"])
                            ],
                            [
                                "kata_arab" => "دُبٌّ",
                                "arti" => "Beruang",
                                "huruf" => array_unique(["دُ","بٌّ"])
                            ],
                            [
                                "kata_arab" => "جُدْجُدٌ",
                                "arti" => "Jangkrik",
                                "huruf" => array_unique(["جُ","دْ","جُ","دٌ"])
                            ],
                            [
                                "kata_arab" => "وَزَغَةٌ",
                                "arti" => "Cecak",
                                "huruf" => array_unique(["وَ","زَ","غَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "فِيْلٌ",
                                "arti" => "Gajah",
                                "huruf" => array_unique(["فِ","يْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "نَـمْلٌ",
                                "arti" => "Semut",
                                "huruf" => array_unique(["نَ","مْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "نَـمْلَةٌ بَيْضَاءُ",
                                "arti" => "Rayap",
                                "huruf" => array_unique(["نَ","مْ","لَ","ةٌ","_","بَ","يْ","ضَ","ا","ءُ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 120')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 119");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 121");
                        $data['tema'] = "Pertemuan 20";
                        $data['materi'] = "Mufrodat 120";
                        $data['title'] = "Nama-nama Hewan Bag. 2";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 120");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "بَعُوْضَةٌ",
                                "arti" => "Nyamuk",
                                "huruf" => array_unique(["بَ","عُ","وْ","ضَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "خُفَاشٌ",
                                "arti" => "Kelelawar",
                                "huruf" => array_unique(["خُ","فَ","ا","شٌ"])
                            ],
                            [
                                "kata_arab" => "جَمَلٌ",
                                "arti" => "Unta",
                                "huruf" => array_unique(["جَ","مَ","لٌ"])
                            ],
                            [
                                "kata_arab" => "غَزَالٌ",
                                "arti" => "Kijang",
                                "huruf" => array_unique(["غَ","زَ","ا","لٌ"])
                            ],
                            [
                                "kata_arab" => "قِرْدٌ",
                                "arti" => "Monyet",
                                "huruf" => array_unique(["قِ","رْ","دٌ"])
                            ],
                            [
                                "kata_arab" => "إِنْسَانُ اْلغَابِ",
                                "arti" => "Orang utan",
                                "huruf" => array_unique(["إِ","نْ","سَ","ا","نُ","_","اْل","غَ","ا","بِ"])
                            ],
                            [
                                "kata_arab" => "عَقْرَبٌ",
                                "arti" => "Kalajengking",
                                "huruf" => array_unique(["عَ","قْ","رَ","بٌ"])
                            ],
                            [
                                "kata_arab" => "حُنْفَسَاءُ",
                                "arti" => "Kumbang",
                                "huruf" => array_unique(["حُ","نْ","فَ","سَ","ا","ءُ"])
                            ],
                            [
                                "kata_arab" => "جَرَادٌ",
                                "arti" => "Belalang",
                                "huruf" => array_unique(["جَ","رَ","ا","دٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 121')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 120");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 122");
                        $data['tema'] = "Pertemuan 20";
                        $data['materi'] = "Mufrodat 121";
                        $data['title'] = "Nama-nama Buah Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 121");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "تُفَّاحٌ",
                                "arti" => "Apel",
                                "huruf" => array_unique(["تُ","فَّ","ا","حٌ"])
                            ],
                            [
                                "kata_arab" => "عِنَبٌ",
                                "arti" => "Anggur",
                                "huruf" => array_unique(["عِ","نَ","بٌ"])
                            ],
                            [
                                "kata_arab" => "كُـمِثْرَى",
                                "arti" => "Pir",
                                "huruf" => array_unique(["كُ","مِ","ثْ","رَ","ى"])
                            ],
                            [
                                "kata_arab" => "مَوْزٌ",
                                "arti" => "Pisang",
                                "huruf" => array_unique(["مَ","وْ","زٌ"])
                            ],
                            [
                                "kata_arab" => "بَابَايَا",
                                "arti" => "Pepaya",
                                "huruf" => array_unique(["بَ","ا","بَ","ا","يَ","ا"])
                            ],
                            [
                                "kata_arab" => "مَنْجَا",
                                "arti" => "Mangga",
                                "huruf" => array_unique(["مَ","نْ","جَ","ا"])
                            ],
                            [
                                "kata_arab" => "جَوْزُ الْهِنْدِ",
                                "arti" => "Asam",
                                "huruf" => array_unique(["جَ","وْ","زُ","_","الْ","هِ","نْ","دِ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 122')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 121");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 123");
                        $data['tema'] = "Pertemuan 20";
                        $data['materi'] = "Mufrodat 122";
                        $data['title'] = "Nama-nama Buah Bag. 2";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 122");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "اَفُوْكَادُو",
                                "arti" => "Alpukat",
                                "huruf" => array_unique(["اَ","فُ","وْ","كَ","ا","دُ","و"])
                            ],
                            [
                                "kata_arab" => "شَـمَامٌ",
                                "arti" => "Blewa",
                                "huruf" => array_unique(["شَ","مَ","ا","مٌ"])
                            ],
                            [
                                "kata_arab" => "بِطِّيْخٌ",
                                "arti" => "Semangka",
                                "huruf" => array_unique(["بِ","طِّ","يْ","خٌ"])
                            ],
                            [
                                "kata_arab" => "بُرْتُقَالٌ",
                                "arti" => "Jeruk",
                                "huruf" => array_unique(["بُ","رْ","تُ","قَ","ا","لٌ"])
                            ],
                            [
                                "kata_arab" => "تَـمْرٌ",
                                "arti" => "Kurma",
                                "huruf" => array_unique(["تَ","مْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "فَرَاوِلَةٌ",
                                "arti" => "Strobery",
                                "huruf" => array_unique(["فَ","رَ","ا","وِ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "رُمَّانٌ",
                                "arti" => "Delima",
                                "huruf" => array_unique(["رُ","مَّ","ا","نٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 123')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 122");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 124");
                        $data['tema'] = "Pertemuan 20";
                        $data['materi'] = "Mufrodat 123";
                        $data['title'] = "Nama-nama Buah Bag. 3";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 123");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "فَاكِهَةُ التِّنِيْنَ",
                                "arti" => "Buah tin",
                                "huruf" => array_unique(["فَ","ا","كِ","هَ","ةُ","_","ال","تِّ","نِ","يْ","نَ"])
                            ],
                            [
                                "kata_arab" => "أَنَانَاسُ",
                                "arti" => "Nanas",
                                "huruf" => array_unique(["أَ","نَ","ا","نَ","ا","سُ"])
                            ],
                            [
                                "kata_arab" => "رَمْبُوْتَانْ",
                                "arti" => "Rambutan",
                                "huruf" => array_unique(["رَ","مْ","بُ","وْ","تَ","ا","نْ"])
                            ],
                            [
                                "kata_arab" => "دُوْرِيَانْ",
                                "arti" => "Durian",
                                "huruf" => array_unique(["دُ","وْ","رِ","يَ","ا","نْ"])
                            ],
                            [
                                "kata_arab" => "طَمَاطِمُ",
                                "arti" => "Tomat",
                                "huruf" => array_unique(["طَ","مَ","ا","طِ","مُ"])
                            ],
                            [
                                "kata_arab" => "جَوَّافَةٌ",
                                "arti" => "Jambu",
                                "huruf" => array_unique(["جَ","وَّ","ا","فَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "ذُرَّةٌ",
                                "arti" => "Jagung",
                                "huruf" => array_unique(["ذُ","رَّ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 124')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 123");
                        $data['next'] = "";
                        $data['tema'] = "Pertemuan 20";
                        $data['materi'] = "Mufrodat 124";
                        $data['title'] = "Pekerjaan Tentang Buah";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 124");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "حَصَدَ-يَحْصُدُ-حَصَادًا",
                                "arti" => "Memanem",
                                "huruf" => array_unique(["حَ","صَ","دَ","-","يَ","حْ","صُ","دُ","-","حَ","صَ","ا","دً","ا"])
                            ],
                            [
                                "kata_arab" => "زَرَعَ-يَزْرَعُ-زَرْعًا / زِرَاعَةً",
                                "arti" => "Menanam",
                                "huruf" => array_unique(["زَ","رَ","عَ","-","يَ","زْ","رَ","عُ","-","زَ","رْ","عً","ا"])
                            ],
                            [
                                "kata_arab" => "تَحَفَّظَ-يَـتَحَفَّظُ-تَحَفُّظًا",
                                "arti" => "Merawat",
                                "huruf" => array_unique(["تَ","حَ","فَّ","ظَ","-","يَ","تَ","حَ","فَّ","ظُ","-","تَ","حَ","فُّ","ظً","ا"])
                            ],
                            [
                                "kata_arab" => "قَطَفَ-يَقْطِفُ-قَطْفًا",
                                "arti" => "Memetik",
                                "huruf" => array_unique(["قَ","طَ","فَ","-","يَ","قْ","طِ","فُ","-","قَ","طْ","فً","ا"])
                            ],
                            [
                                "kata_arab" => "سَـمَّدَ-يُسَمِّدُ-تَسْمِيْدًا",
                                "arti" => "Memupuk",
                                "huruf" => array_unique(["سَ","مَّ","دَ","-","يُ","سَ","مِّ","دُ","-","تَ","سْ","مِ","يْ","دً","ا"])
                            ],
                            [
                                "kata_arab" => "عَزَقَ-يَعْزِقُ-عَزْقًا",
                                "arti" => "Mencangkul",
                                "huruf" => array_unique(["عَ","زَ","قَ","-","يَ","عْ","زِ","قُ","-","عَ","زْ","قً","ا"])
                            ],
                            [
                                "kata_arab" => "حَرَثَ-يَحْرُثُ-حَرْثًا",
                                "arti" => "Mengolah",
                                "huruf" => array_unique(["حَ","رَ","ثَ","-","يَ","حْ","رُ","ثُ","-","حَ","رْ","ثً","ا"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 125')){
                        $data['back'] = "";
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 126");
                        $data['tema'] = "Pertemuan 21";
                        $data['materi'] = "Mufrodat 125";
                        $data['title'] = "Nama-nama Tempat Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 125");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مَطْبَخٌ",
                                "arti" => "Dapur",
                                "huruf" => array_unique(["مَ","طْ","بَ","خٌ"])
                            ],
                            [
                                "kata_arab" => "صَيْدَلِيَّةٌ",
                                "arti" => "Apotek",
                                "huruf" => array_unique(["صَ","يْ","دَ","لِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "بَنْكٌ",
                                "arti" => "Bank",
                                "huruf" => array_unique(["بَ","نْ","كٌ"])
                            ],
                            [
                                "kata_arab" => "مَصْنَعٌ",
                                "arti" => "Pabrik",
                                "huruf" => array_unique(["مَ","صْ","نَ","عٌ"])
                            ],
                            [
                                "kata_arab" => "سُوْقٌ",
                                "arti" => "Pasar",
                                "huruf" => array_unique(["سُ","وْ","قٌ"])
                            ],
                            [
                                "kata_arab" => "مَوْلٌ",
                                "arti" => "Mall",
                                "huruf" => array_unique(["مَ","وْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "مَوْقِفُ السَّيَّارَةِ",
                                "arti" => "Terminal",
                                "huruf" => array_unique(["مَ","وْ","قِ","فُ","_","ال","سَّ","يَّ","ا","رَ","ةِ"])
                            ],
                            [
                                "kata_arab" => "مَـحَطَّةُ الْقِطَارِ",
                                "arti" => "Stasiun Kereta",
                                "huruf" => array_unique(["مَ","حَ","طَّ","ةُ","_","الْ","قِ","طَ","ا","رِ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 126')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 125");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 127");
                        $data['tema'] = "Pertemuan 21";
                        $data['materi'] = "Mufrodat 126";
                        $data['title'] = "Nama-nama Tempat Bag. 2";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 126");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مَـحَطَّةُ الْبِنْزِيْنِ",
                                "arti" => "Pom bensin",
                                "huruf" => array_unique(["مَ","حَ","طَّ","ةُ","_","الْ","بِ","نْ","زِ","يْ","نِ"])
                            ],
                            [
                                "kata_arab" => "مَطَارٌ",
                                "arti" => "Bandara",
                                "huruf" => array_unique(["مَ","طَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "مِيْنَاءٌ",
                                "arti" => "Pelabuhan",
                                "huruf" => array_unique(["مِ","يْ","نَ","ا","ءٌ"])
                            ],
                            [
                                "kata_arab" => "مُسْتَوْدَعٌ",
                                "arti" => "Gudang",
                                "huruf" => array_unique(["مُ","سْ","تَ","وْ","دَ","عٌ"])
                            ],
                            [
                                "kata_arab" => "مَكْتَبَةٌ",
                                "arti" => "Perpustakaan",
                                "huruf" => array_unique(["مَ","كْ","تَ","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "فُنْدُقٌ",
                                "arti" => "Hotel",
                                "huruf" => array_unique(["فُ","نْ","دُ","قٌ"])
                            ],
                            [
                                "kata_arab" => "مَقْهَى",
                                "arti" => "Warung kopi",
                                "huruf" => array_unique(["مَ","قْ","هَ","ى"])
                            ],
                            [
                                "kata_arab" => "مَـمْلَكَةٌ",
                                "arti" => "Kerajaan",
                                "huruf" => array_unique(["مَ","مْ","لَ","كَ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 127')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 126");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 128");
                        $data['tema'] = "Pertemuan 21";
                        $data['materi'] = "Mufrodat 127";
                        $data['title'] = "Nama-nama Tempat Bag. 3";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 127");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مَـحْكَـمَةٌ",
                                "arti" => "Pengadilan",
                                "huruf" => array_unique(["مَ","حْ","كَ","مَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "حَبْسٌ",
                                "arti" => "Penjara",
                                "huruf" => array_unique(["حَ","بْ","سٌ"])
                            ],
                            [
                                "kata_arab" => "دَوْرَةٌ",
                                "arti" => "Kursusan",
                                "huruf" => array_unique(["دَ","وْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "إِدَارَةٌ",
                                "arti" => "Kantor",
                                "huruf" => array_unique(["إِ","دَ","ا","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "حَانُوْتٌ",
                                "arti" => "Warung",
                                "huruf" => array_unique(["حَ","ا","نُ","وْ","تٌ"])
                            ],
                            [
                                "kata_arab" => "مَقْصَفٌّ",
                                "arti" => "Kantin",
                                "huruf" => array_unique(["مَ","قْ","صَ","فٌّ"])
                            ],
                            [
                                "kata_arab" => "دُكَّانٌ",
                                "arti" => "Toko",
                                "huruf" => array_unique(["دُ","كَّ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "شَارِعٌ",
                                "arti" => "Jalan",
                                "huruf" => array_unique(["شَ","ا","رِ","عٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 128')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 127");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 129");
                        $data['tema'] = "Pertemuan 21";
                        $data['materi'] = "Mufrodat 128";
                        $data['title'] = "Nama-nama Tempat Bag. 4";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 128");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مَتْحَفٌ",
                                "arti" => "Museum",
                                "huruf" => array_unique(["مَ","تْ","حَ","فٌ"])
                            ],
                            [
                                "kata_arab" => "مَعْمَلٌ",
                                "arti" => "Laboratorium",
                                "huruf" => array_unique(["مَ","عْ","مَ","لٌ"])
                            ],
                            [
                                "kata_arab" => "مَطْعَمٌ",
                                "arti" => "Restauran",
                                "huruf" => array_unique(["مَ","طْ","عَ","مٌ"])
                            ],
                            [
                                "kata_arab" => "حَدِيْقَةٌ",
                                "arti" => "Kebun",
                                "huruf" => array_unique(["حَ","دِ","يْ","قَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "بُسْتَانٌ",
                                "arti" => "Kebun",
                                "huruf" => array_unique(["بُ","سْ","تَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "مَزْرَعَةٌ",
                                "arti" => "Sawah",
                                "huruf" => array_unique(["مَ","زْ","رَ","عَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "حُـجْرَةٌ",
                                "arti" => "Kamar",
                                "huruf" => array_unique(["حُ","جْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "شُرْفَةٌ",
                                "arti" => "Teras",
                                "huruf" => array_unique(["شُ","رْ","فَ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 129')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 128");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 130");
                        $data['tema'] = "Pertemuan 21";
                        $data['materi'] = "Mufrodat 129";
                        $data['title'] = "Nama-nama Tempat Bag. 5";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 129");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مَسْكَنٌ",
                                "arti" => "Asrama",
                                "huruf" => array_unique(["مَ","سْ","كَ","نٌ"])
                            ],
                            [
                                "kata_arab" => "شَقَّةٌ",
                                "arti" => "Apartemen",
                                "huruf" => array_unique(["شَ","قَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مَقْبَرَةٌ",
                                "arti" => "Pemakaman",
                                "huruf" => array_unique(["مَ","قْ","بَ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مَسْجِدٌ",
                                "arti" => "Masjid",
                                "huruf" => array_unique(["مَ","سْ","جِ","دٌ"])
                            ],
                            [
                                "kata_arab" => "مَعْهَدٌ",
                                "arti" => "Pesantren",
                                "huruf" => array_unique(["مَ","عْ","هَ","دٌ"])
                            ],
                            [
                                "kata_arab" => "مَدْرَسَةٌ",
                                "arti" => "Sekolah",
                                "huruf" => array_unique(["مَ","دْ","رَ","سَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "جَامِعَةٌ",
                                "arti" => "Universitas",
                                "huruf" => array_unique(["جَ","ا","مِ","عَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "كَنِيْسَةٌ",
                                "arti" => "Gereja",
                                "huruf" => array_unique(["كَ","نِ","يْ","سَ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 130')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 129");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 131");
                        $data['tema'] = "Pertemuan 21";
                        $data['materi'] = "Mufrodat 130";
                        $data['title'] = "Nama-nama Tempat Bag. 6";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 130");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "هَيْكَلٌ",
                                "arti" => "Candi",
                                "huruf" => array_unique(["هَ","يْ","كَ","لٌ"])
                            ],
                            [
                                "kata_arab" => "قَصْرٌ",
                                "arti" => "Istana",
                                "huruf" => array_unique(["قَ","صْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "كُوْخٌ",
                                "arti" => "Gubuk",
                                "huruf" => array_unique(["كُ","وْ","خٌ"])
                            ],
                            [
                                "kata_arab" => "حَظِيْرَةٌ",
                                "arti" => "Kandang",
                                "huruf" => array_unique(["حَ","ظِ","يْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مَيْدَانُ الْمَدِيْنَةِ",
                                "arti" => "Lapangan kota",
                                "huruf" => array_unique(["مَ","يْ","دَ","ا","نُ","_","الْ","مَ","دِ","يْ","نَ","ةِ"])
                            ],
                            [
                                "kata_arab" => "بُرْجٌ",
                                "arti" => "Menara",
                                "huruf" => array_unique(["بُ","رْ","جٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 131')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 130");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 132");
                        $data['tema'] = "Pertemuan 21";
                        $data['materi'] = "Mufrodat 131";
                        $data['title'] = "Pekerjaan Tentang Tempat Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 131");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "جَاءَ-يَـجِيْئُ-مَـجِيْئًا",
                                "arti" => "Datang",
                                "huruf" => array_unique(["جَ","ا","ءَ","-","يَ","جِ","يْ","ئُ","-","مَ","جِ","يْ","ئً","ا"])
                            ],
                            [
                                "kata_arab" => "أَتَى-يَأْتِي-اِتْيَانًا",
                                "arti" => "Datang",
                                "huruf" => array_unique(["أَ","تَ","ى","-","يَ","أْ","تِ","ي","-","اِ","تْ","يَ","ا","نً","ا"])
                            ],
                            [
                                "kata_arab" => "حَضَرَ-يَـحْضُرُ-حُضُورًا",
                                "arti" => "Hadir",
                                "huruf" => array_unique(["حَ","ضَ","رَ","-","يَ","حْ","ضُ","رُ","-","حُ","ضُ","و","رً","ا"])
                            ],
                            [
                                "kata_arab" => "طَلَبَ-يَطْلُبُ-طَلَبًا",
                                "arti" => "Meminta",
                                "huruf" => array_unique(["طَ","لَ","بَ","-","يَ","طْ","لُ","بُ","-","طَ","لَ","بً","ا"])
                            ],
                            [
                                "kata_arab" => "سَكَنَ-يَسْكُنُ-سُكُوْنًا",
                                "arti" => "Tinggal",
                                "huruf" => array_unique(["سَ","كَ","نَ","-","يَ","سْ","كُ","نُ","-","سُ","كُ","وْ","نً","ا"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 132')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 131");
                        $data['next'] = "";
                        $data['tema'] = "Pertemuan 21";
                        $data['materi'] = "Mufrodat 132";
                        $data['title'] = "Pekerjaan Tentang Tempat Bag. 2";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 132");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "بَاتَ-يَبِيْتُ-بَيْتًا",
                                "arti" => "Menginap",
                                "huruf" => array_unique(["بَ","ا","تَ","-","يَ","بِ","يْ","تُ","-","بَ","يْ","تً","ا"])
                            ],
                            [
                                "kata_arab" => "بَنَى-يَبْنِي-بِنَاءً",
                                "arti" => "Membangun",
                                "huruf" => array_unique(["بَ","نَ","ى","-","يَ","بْ","نِ","ي","-","بِ","نَ","ا","ءً"])
                            ],
                            [
                                "kata_arab" => "أَصْلَحَ-يُصْلِحُ-إِصْلَاحًا",
                                "arti" => "Memperbaiki",
                                "huruf" => array_unique(["أَ","صْ","لَ","حَ","-","يُ","صْ","لِ","حُ","-","إِ","صْ","لَ","ا","حً","ا"])
                            ],
                            [
                                "kata_arab" => "سَافَرَ-يُسَافِرُ-مُسَافَرَةً",
                                "arti" => "Berpergian",
                                "huruf" => array_unique(["سَ","ا","فَ","رَ","-","يُ","سَ","ا","فِ","رُ","-","مُ","سَ","ا","فَ","رَ","ةً"])
                            ],
                            [
                                "kata_arab" => "عَاشَ-يَعِيْشُ-عَيْشًا",
                                "arti" => "Hidup",
                                "huruf" => array_unique(["عَ","ا","شَ","-","يَ","عِ","يْ","شُ","-","عَ","يْ","شً","ا"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 133')){
                        $data['back'] = "";
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 134");
                        $data['tema'] = "Pertemuan 22";
                        $data['materi'] = "Mufrodat 133";
                        $data['title'] = "Alam Semesta Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 133");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "شَـمْسٌ",
                                "arti" => "Matahari",
                                "huruf" => array_unique(["شَ","مْ","سٌ"])
                            ],
                            [
                                "kata_arab" => "قَـمَرٌ",
                                "arti" => "Bulan",
                                "huruf" => array_unique(["قَ","مَ","رٌ"])
                            ],
                            [
                                "kata_arab" => "جَبَلٌ",
                                "arti" => "Gunung",
                                "huruf" => array_unique(["جَ","بَ","لٌ"])
                            ],
                            [
                                "kata_arab" => "بَـحْرٌ",
                                "arti" => "Laut",
                                "huruf" => array_unique(["بَ","حْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "سَـمَاءٌ",
                                "arti" => "Langit",
                                "huruf" => array_unique(["سَ","مَ","ا","ءٌ"])
                            ],
                            [
                                "kata_arab" => "نَـجْمٌ",
                                "arti" => "Bintang",
                                "huruf" => array_unique(["نَ","جْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "كَوْكَبٌ",
                                "arti" => "Planet",
                                "huruf" => array_unique(["كَ","وْ","كَ","بٌ"])
                            ],
                            [
                                "kata_arab" => "جَوٌّ",
                                "arti" => "Udara",
                                "huruf" => array_unique(["جَ","وٌّ"])
                            ],
                            [
                                "kata_arab" => "قَوْسُ قُزَحٍ",
                                "arti" => "Pelangi",
                                "huruf" => array_unique(["قَ","وْ","سُ","_","قُ","زَ","حٍ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 134')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 133");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 135");
                        $data['tema'] = "Pertemuan 22";
                        $data['materi'] = "Mufrodat 134";
                        $data['title'] = "Alam Semesta Bag. 2";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 134");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَرْضٌ",
                                "arti" => "Bumi",
                                "huruf" => array_unique(["أَ","رْ","ضٌ"])
                            ],
                            [
                                "kata_arab" => "رَمْلٌ",
                                "arti" => "Pasir",
                                "huruf" => array_unique(["رَ","مْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "وَحْلٌ",
                                "arti" => "Lumpur",
                                "huruf" => array_unique(["وَ","حْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "حَصْبَاءُ",
                                "arti" => "Kerikil",
                                "huruf" => array_unique(["حَ","صْ","بَ","ا","ءُ"])
                            ],
                            [
                                "kata_arab" => "صَـحْرَاءُ",
                                "arti" => "Padang pasir",
                                "huruf" => array_unique(["صَ","حْ","رَ","ا","ءُ"])
                            ],
                            [
                                "kata_arab" => "حَـجَرٌ",
                                "arti" => "Batu",
                                "huruf" => array_unique(["حَ","جَ","رٌ"])
                            ],
                            [
                                "kata_arab" => "قِـمَّةُ الْـجَبَلِ",
                                "arti" => "Puncak gunung",
                                "huruf" => array_unique(["قِ","مَّ","ةُ","_","الْ","جَ","بَ","لِ"])
                            ],
                            [
                                "kata_arab" => "جُرُفٌ",
                                "arti" => "Tebing",
                                "huruf" => array_unique(["جُ","رُ","فٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 135')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 134");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 136");
                        $data['tema'] = "Pertemuan 22";
                        $data['materi'] = "Mufrodat 135";
                        $data['title'] = "Alam Semesta Bag. 3";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 135");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "شِعْبٌ",
                                "arti" => "Lembah",
                                "huruf" => array_unique(["شِ","عْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "سَدِيْمٌ",
                                "arti" => "Kabut",
                                "huruf" => array_unique(["سَ","دِ","يْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "غَيْمٌ",
                                "arti" => "Awan",
                                "huruf" => array_unique(["غَ","يْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "مَوْجٌ",
                                "arti" => "Ombak",
                                "huruf" => array_unique(["مَ","وْ","جٌ"])
                            ],
                            [
                                "kata_arab" => "جَزِيْرَةٌ",
                                "arti" => "Pulau",
                                "huruf" => array_unique(["جَ","زِ","يْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "غَابَةٌ",
                                "arti" => "Hutan",
                                "huruf" => array_unique(["غَ","ا","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "غَارٌ",
                                "arti" => "Gua",
                                "huruf" => array_unique(["غَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "ثَلْجٌ",
                                "arti" => "Salju",
                                "huruf" => array_unique(["ثَ","لْ","جٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 136')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 135");
                        $data['next'] = "";
                        $data['tema'] = "Pertemuan 22";
                        $data['materi'] = "Mufrodat 136";
                        $data['title'] = "Alam Semesta Bag. 4";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 136");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "هَضْبَةٌ",
                                "arti" => "Bukit",
                                "huruf" => array_unique(["هَ","ضْ","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "بُـخَارٌ",
                                "arti" => "Uap",
                                "huruf" => array_unique(["بُ","خَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "دُخَانٌ",
                                "arti" => "Asap",
                                "huruf" => array_unique(["دُ","خَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "شَلَالٌ",
                                "arti" => "Air terjun",
                                "huruf" => array_unique(["شَ","لَ","ا","لٌ"])
                            ],
                            [
                                "kata_arab" => "نَهْرٌ",
                                "arti" => "Sungai",
                                "huruf" => array_unique(["نَ","هْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "سَيْلٌ",
                                "arti" => "Banjir",
                                "huruf" => array_unique(["سَ","يْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "شَاطِئٌ",
                                "arti" => "Pantai",
                                "huruf" => array_unique(["شَ","ا","طِ","ئٌ"])
                            ],
                            [
                                "kata_arab" => "قَارَةٌ",
                                "arti" => "Benua",
                                "huruf" => array_unique(["قَ","ا","رَ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 137')){
                        $data['back'] = "";
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 138");
                        $data['tema'] = "Pertemuan 23";
                        $data['materi'] = "Mufrodat 137";
                        $data['title'] = "Profesi Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 137");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مُعَلِّمٌ",
                                "arti" => "Guru",
                                "huruf" => array_unique(["مُ","عَ","لِّ","مٌ"])
                            ],
                            [
                                "kata_arab" => "مُـحَاضِرٌ",
                                "arti" => "Dosen",
                                "huruf" => array_unique(["مُ","حَ","ا","ضِ","رٌ"])
                            ],
                            [
                                "kata_arab" => "طَالِبٌ",
                                "arti" => "Siswa",
                                "huruf" => array_unique(["طَ","ا","لِ","بٌ"])
                            ],
                            [
                                "kata_arab" => "طَبِيْبٌ",
                                "arti" => "Dokter",
                                "huruf" => array_unique(["طَ","بِ","يْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "مُـمَرِّضٌ",
                                "arti" => "Suster",
                                "huruf" => array_unique(["مُ","مَ","رِّ","ضٌ"])
                            ],
                            [
                                "kata_arab" => "جُنْدٌ",
                                "arti" => "Tentara",
                                "huruf" => array_unique(["جُ","نْ","دٌ"])
                            ],
                            [
                                "kata_arab" => "شُرْطِيٌّ",
                                "arti" => "Polisi",
                                "huruf" => array_unique(["شُ","رْ","طِ","يٌّ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 138')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 137");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 139");
                        $data['tema'] = "Pertemuan 23";
                        $data['materi'] = "Mufrodat 138";
                        $data['title'] = "Profesi Bag. 2";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 138");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مُـخْتَطِفٌ",
                                "arti" => "Perampok",
                                "huruf" => array_unique(["مُ","خْ","تَ","طِ","فٌ"])
                            ],
                            [
                                "kata_arab" => "سَارِقٌ",
                                "arti" => "Pencuri",
                                "huruf" => array_unique(["سَ","ا","رِ","قٌ"])
                            ],
                            [
                                "kata_arab" => "مُـحَامٍ",
                                "arti" => "Pengacara",
                                "huruf" => array_unique(["مُ","حَ","ا","مٍ"])
                            ],
                            [
                                "kata_arab" => "قَاطِعُ الطَّرِيْقِ",
                                "arti" => "Begal",
                                "huruf" => array_unique(["قَ","ا","طِ","عُ","_","ال","طَّ","رِ","يْ","قِ"])
                            ],
                            [
                                "kata_arab" => "قَاضٍ",
                                "arti" => "Hakim",
                                "huruf" => array_unique(["قَ","ا","ضٍ"])
                            ],
                            [
                                "kata_arab" => "مُدِيْرٌ",
                                "arti" => "Direktur",
                                "huruf" => array_unique(["مُ","دِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مُغَنٍّى",
                                "arti" => "Penyanyi",
                                "huruf" => array_unique(["مُ","غَ","نٍّ","ى"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 139')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 138");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 140");
                        $data['tema'] = "Pertemuan 23";
                        $data['materi'] = "Mufrodat 139";
                        $data['title'] = "Profesi Bag. 3";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 139");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "فَلَّاحٌ",
                                "arti" => "Petani",
                                "huruf" => array_unique(["فَ","لَّ","ا","حٌ"])
                            ],
                            [
                                "kata_arab" => "صَيَّادُ السَّمَكِ",
                                "arti" => "Pencari ikan",
                                "huruf" => array_unique(["صَ","يَّ","ا","دُ","_","ال","سَّ","مَ","كِ"])
                            ],
                            [
                                "kata_arab" => "صَيَّادٌ",
                                "arti" => "Pemburu",
                                "huruf" => array_unique(["صَ","يَّ","ا","دٌ"])
                            ],
                            [
                                "kata_arab" => "بَـحَّارٌ",
                                "arti" => "Pelaut",
                                "huruf" => array_unique(["بَ","حَّ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "نَـجَّارٌ",
                                "arti" => "Tukang kayu",
                                "huruf" => array_unique(["نَ","جَّ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "مِيْكَانِيْكٌ",
                                "arti" => "Mekanik",
                                "huruf" => array_unique(["مِ","يْ","كَ","ا","نِ","يْ","كٌ"])
                            ],
                            [
                                "kata_arab" => "بُسْتَانِيٌّ",
                                "arti" => "Tukang kebun",
                                "huruf" => array_unique(["بُ","سْ","تَ","ا","نِ","يٌّ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 140')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 139");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 141");
                        $data['tema'] = "Pertemuan 23";
                        $data['materi'] = "Mufrodat 140";
                        $data['title'] = "Profesi Bag. 4";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 140");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "حَلَّاقٌ",
                                "arti" => "Tukang cukur",
                                "huruf" => array_unique(["حَ","لَّ","ا","قٌ"])
                            ],
                            [
                                "kata_arab" => "مُصَوِّرٌ",
                                "arti" => "Fotografer",
                                "huruf" => array_unique(["مُ","صَ","وِّ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مُشَعْوِذٌ",
                                "arti" => "Pesulap",
                                "huruf" => array_unique(["مُ","شَ","عْ","وِ","ذٌ"])
                            ],
                            [
                                "kata_arab" => "بَائِعٌ",
                                "arti" => "Penjual",
                                "huruf" => array_unique(["بَ","ا","ئِ","عٌ"])
                            ],
                            [
                                "kata_arab" => "مُضِيْفٌ",
                                "arti" => "Pramugara",
                                "huruf" => array_unique(["مُ","ضِ","يْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "مُضِيْفَةٌ",
                                "arti" => "Pramugari",
                                "huruf" => array_unique(["مُ","ضِ","يْ","فَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مُهَنْدِسٌ",
                                "arti" => "Insinyur",
                                "huruf" => array_unique(["مُ","هَ","نْ","دِ","سٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 141')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 140");
                        $data['next'] = "";
                        $data['tema'] = "Pertemuan 23";
                        $data['materi'] = "Mufrodat 141";
                        $data['title'] = "Profesi Bag. 5";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 141");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مُهَنْدِسٌ مِعْمَارِيٌّ",
                                "arti" => "Arsitek",
                                "huruf" => array_unique(["مُ","هَ","نْ","دِ","سٌ","_","مِ","عْ","مَ","ا","رِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "سَائِقٌ",
                                "arti" => "Sopir",
                                "huruf" => array_unique(["سَ","ا","ئِ","قٌ"])
                            ],
                            [
                                "kata_arab" => "مُـخْبِرٌ",
                                "arti" => "Reporter",
                                "huruf" => array_unique(["مُ","خْ","بِ","رٌ"])
                            ],
                            [
                                "kata_arab" => "خَيَّاطٌ",
                                "arti" => "Penjahit",
                                "huruf" => array_unique(["خَ","يَّ","ا","طٌ"])
                            ],
                            [
                                "kata_arab" => "طَيَّارٌ",
                                "arti" => "Pilot",
                                "huruf" => array_unique(["طَ","يَّ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "رَسَّامٌ",
                                "arti" => "Pelukis",
                                "huruf" => array_unique(["رَ","سَّ","ا","مٌ"])
                            ],
                            [
                                "kata_arab" => "عُـمَّالٌ",
                                "arti" => "Karyawan",
                                "huruf" => array_unique(["عُ","مَّ","ا","لٌ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 142')){
                        $data['back'] = "";
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 143");
                        $data['tema'] = "Pertemuan 24";
                        $data['materi'] = "Mufrodat 142";
                        $data['title'] = "Profesi Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 142");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "عَالِمٌ",
                                "arti" => "Ilmuan",
                                "huruf" => array_unique(["عَ","ا","لِ","مٌ"])
                            ],
                            [
                                "kata_arab" => "خَادِمٌ",
                                "arti" => "Pelayan",
                                "huruf" => array_unique(["خَ","ا","دِ","مٌ"])
                            ],
                            [
                                "kata_arab" => "نَادِلٌ",
                                "arti" => "Pramusaji",
                                "huruf" => array_unique(["نَ","ا","دِ","لٌ"])
                            ],
                            [
                                "kata_arab" => "مُوَظَّفٌ",
                                "arti" => "Pegawai",
                                "huruf" => array_unique(["مُ","وَ","ظَّ","فٌ"])
                            ],
                            [
                                "kata_arab" => "رِيَاضِيٌّ",
                                "arti" => "Atlit",
                                "huruf" => array_unique(["رِ","يَ","ا","ضِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "رَئِيْسٌ",
                                "arti" => "Ketua",
                                "huruf" => array_unique(["رَ","ئِ","يْ","سٌ"])
                            ],
                            [
                                "kata_arab" => "آمِنُ الصُّنْدُوْقِ",
                                "arti" => "Bendahara",
                                "huruf" => array_unique(["آ","مِ","نُ","_","ال","صُّ","نْ","دُ","وْ","قِ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 143')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 142");
                        $data['next'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 144");
                        $data['tema'] = "Pertemuan 24";
                        $data['materi'] = "Mufrodat 143";
                        $data['title'] = "Profesi Bag. 2";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 143");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سِكْرِتِيْرٌ",
                                "arti" => "Sekretaris",
                                "huruf" => array_unique(["سِ","كْ","رِ","تِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مُـمَثِّلٌ",
                                "arti" => "Artis",
                                "huruf" => array_unique(["مُ","مَ","ثِّ","لٌ"])
                            ],
                            [
                                "kata_arab" => "مُهَرِّجٌ",
                                "arti" => "Pelawak",
                                "huruf" => array_unique(["مُ","هَ","رِّ","جٌ"])
                            ],
                            [
                                "kata_arab" => "رَقَّاصٌ",
                                "arti" => "Penari",
                                "huruf" => array_unique(["رَ","قَّ","ا","صٌ"])
                            ],
                            [
                                "kata_arab" => "رَئِيْسُ الْجُـمْهُوْرِيَّةِ",
                                "arti" => "Presiden",
                                "huruf" => array_unique(["رَ","ئِ","يْ","سُ","_","الْ","جُ","مْ","هُ","وْ","رِ","يَّ","ةِ"])
                            ],
                            [
                                "kata_arab" => "نَائِبُ رَئِيْسِ الْجُـمْهُوْرِيَّةِ",
                                "arti" => "Wakil presiden",
                                "huruf" => array_unique(["نَ","ا","ئِ","بُ","_","رَ","ئِ","يْ","سِ","_","الْ","جُ","مْ","هُ","وْ","رِ","يَّ","ةِ"])
                            ],
                            [
                                "kata_arab" => "وَزِيْرٌ",
                                "arti" => "Menteri",
                                "huruf" => array_unique(["وَ","زِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مَـجْلِسُ النَّوَابِ",
                                "arti" => "DPR",
                                "huruf" => array_unique(["مَ","جْ","لِ","سُ","_","ال","نَّ","وَ","ا","بِ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 144')){
                        $data['back'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 143");
                        $data['next'] = "";
                        $data['tema'] = "Pertemuan 24";
                        $data['materi'] = "Mufrodat 144";
                        $data['title'] = "Musim";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 144");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "فَصْلُ الْـمَطَرِ",
                                "arti" => "Musim hujan",
                                "huruf" => array_unique(["فَ","صْ","لُ","_","الْ","مَ","طَ","رِ"])
                            ],
                            [
                                "kata_arab" => "فَصْلُ الْجَفَافِ",
                                "arti" => "Musim kemarau",
                                "huruf" => array_unique(["فَ","صْ","لُ","_","الْ","جَ","فَ","ا","فِ"])
                            ],
                            [
                                "kata_arab" => "فَصْلُ الصَّيْفِ",
                                "arti" => "Musim panas",
                                "huruf" => array_unique(["فَ","صْ","لُ","_","ال","صَّ","يْ","فِ"])
                            ],
                            [
                                "kata_arab" => "فَصْلُ الشِّتَاءِ",
                                "arti" => "Musim dingin",
                                "huruf" => array_unique(["فَ","صْ","لُ","_","ال","شِّ","تَ","ا","ءِ"])
                            ],
                            [
                                "kata_arab" => "فَصْلُ الْـخَرِيْفِ",
                                "arti" => "Musim gugur",
                                "huruf" => array_unique(["فَ","صْ","لُ","_","الْ","خَ","رِ","يْ","فِ"])
                            ],
                            [
                                "kata_arab" => "فَصْلُ الرَّبِيْعِ",
                                "arti" => "Musim semi",
                                "huruf" => array_unique(["فَ","صْ","لُ","_","ال","رَّ","بِ","يْ","عِ"])
                            ],
                        ];
                    }
                    
                    // view
                        $this->load->view("templates/header-user", $data);
                        $this->load->view("hifdzi_1/menu-mufrodat", $data);
                        $this->load->view("templates/footer-user", $data);
                    // view
    
                } else if (!empty($_GET['latihan'])) {
                    $urut = $_GET['i'];
                    if($_GET['latihan'] == MD5('Mufrodat 1')){
                        $data['materi'] = "Mufrodat 1";
                        $data['tema'] = "Pertemuan 1";
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 1");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مَا",
                                "arti" => "Apa",
                                "huruf" => array_unique(["مَ","ا"])
                            ],
                            [
                                "kata_arab" => "مَنْ",
                                "arti" => "Siapa",
                                "huruf" => array_unique(["مَ","نْ"])
                            ],
                            [
                                "kata_arab" => "مَاذَا",
                                "arti" => "Apa yang",
                                "huruf" => array_unique(["مَ","ا","ذَ","ا"])
                            ],
                            [
                                "kata_arab" => "لِمَاذَا",
                                "arti" => "Kenapa",
                                "huruf" => array_unique(["لِ","مَ","ا","ذَ","ا"])
                            ],
                            [
                                "kata_arab" => "مِمَّ",
                                "arti" => "Dari apa",
                                "huruf" => array_unique(["مِ","مَّ"])
                            ],
                            [
                                "kata_arab" => "بِمَاذَا",
                                "arti" => "Dengan apa",
                                "huruf" => array_unique(["بِ","مَ","ا","ذَ","ا"])
                            ],
                            [
                                "kata_arab" => "لِأَيِّ شَيْئٍ",
                                "arti" => "Untuk apa",
                                "huruf" => array_unique(["لِ","أَ","يِّ","_","شَ","يْ","ئٍ"])
                            ],
                            [
                                "kata_arab" => "مَعَ مَنْ",
                                "arti" => "Dengan siapa",
                                "huruf" => array_unique(["مَ","عَ","_","مَ","نْ"])
                            ],
                            [
                                "kata_arab" => "لِمَنْ",
                                "arti" => "Milik siapa",
                                "huruf" => array_unique(["لِ","مَ","نْ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 2')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 2");
                        $data['materi'] = "Mufrodat 2";
                        $data['tema'] = "Pertemuan 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَيْنَ",
                                "arti" => "Dimana",
                                "huruf" => array_unique(["أَ","يْ","نَ"])
                            ],
                            [
                                "kata_arab" => "إِلَى أَيْنَ",
                                "arti" => "Mau kemana",
                                "huruf" => array_unique(["إِ","لَ","ى","_","أَ","يْ","نَ"])
                            ],
                            [
                                "kata_arab" => "مِنْ أَيْنَ",
                                "arti" => "Darimana",
                                "huruf" => array_unique(["مِ","نْ","_","أَ","يْ","نَ"])
                            ],
                            [
                                "kata_arab" => "كَيْفَ",
                                "arti" => "Bagaimana",
                                "huruf" => array_unique(["كَ","يْ","فَ"])
                            ],
                            [
                                "kata_arab" => "مَتَى",
                                "arti" => "Kapan",
                                "huruf" => array_unique(["مَ","تَ","ى"])
                            ],
                            [
                                "kata_arab" => "كَمْ",
                                "arti" => "Berapa (jumlah)",
                                "huruf" => array_unique(["كَ","مْ"])
                            ],
                            [
                                "kata_arab" => "بِكَمْ",
                                "arti" => "Berapa (harga)",
                                "huruf" => array_unique(["بِ","كَ","مْ"])
                            ],
                            [
                                "kata_arab" => "هَلْ",
                                "arti" => "Apakah",
                                "huruf" => array_unique(["هَ","لْ"])
                            ],
                            [
                                "kata_arab" => "أَيُّ",
                                "arti" => "Yang mana",
                                "huruf" => array_unique(["أَ","يُّ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 3')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 3");
                        $data['materi'] = "Mufrodat 3";
                        $data['tema'] = "Pertemuan 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "بِ",
                                "arti" => "Dengan",
                                "huruf" => array_unique(["بِ","كَ","لِـ","لَـ"])
                            ],
                            [
                                "kata_arab" => "كَ",
                                "arti" => "Seperti",
                                "huruf" => array_unique(["بِ","كَ","لِـ","لَـ"])
                            ],
                            // [
                            //     "kata_arab" => "لِـ",
                            //     "arti" => "Untuk",
                            //     "huruf" => array_unique(["لَـ","عَ","فِ","ي"])
                            // ],
                            [
                                "kata_arab" => "لَـ",
                                "arti" => "Untuk",
                                "huruf" => array_unique(["لَـ","عَ","فِ","ي"])
                            ],
                            [
                                "kata_arab" => "إِلَى",
                                "arti" => "Kepada",
                                "huruf" => array_unique(["إِ","لَ","ى","فِ"])
                            ],
                            [
                                "kata_arab" => "عَلَى",
                                "arti" => "Diatas",
                                "huruf" => array_unique(["عَ","لَ","ى","فِ"])
                            ],
                            [
                                "kata_arab" => "مِنْ",
                                "arti" => "Dari",
                                "huruf" => array_unique(["مِ","نْ","حَ","تَّ","ى"])
                            ],
                            [
                                "kata_arab" => "فِي",
                                "arti" => "Didalam",
                                "huruf" => array_unique(["فِ","ي","حَ","تَّ"])
                            ],
                            // [
                            //     "kata_arab" => "عَنْ",
                            //     "arti" => "Dari",
                            //     "huruf" => array_unique(["عَ","نْ","حَ","تَّ"])
                            // ],
                            [
                                "kata_arab" => "حَتَّى",
                                "arti" => "Hingga",
                                "huruf" => array_unique(["حَ","تَّ","ى","عَ","نْ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 4')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 4");
                        $data['materi'] = "Mufrodat 4";
                        $data['tema'] = "Pertemuan 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "يَا",
                                "arti" => "Hai",
                                "huruf" => array_unique(["يَ","ا","أَ","يُّ","هَ","ا","أَ","يَّ","تُ","هَ","ا"])
                            ],
                            [
                                "kata_arab" => "أَيُّهَا",
                                "arti" => "Wahai (Lk)",
                                "huruf" => array_unique(["أَ","يُّ","هَ","ا","أَ","يَّ","تُ","هَ","ا"])
                            ],
                            [
                                "kata_arab" => "أَيَّتُهَا",
                                "arti" => "Wahai (Pr)",
                                "huruf" => array_unique(["أَ","يُّ","هَ","ا","أَ","يَّ","تُ","هَ","ا"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 5')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 5");
                        $data['materi'] = "Mufrodat 5";
                        $data['tema'] = "Pertemuan 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "إِلَّا",
                                "arti" => "Kecuali",
                                "huruf" => array_unique(["إِ","لَّ","ا","يَ","ا"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 6')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 6");
                        $data['materi'] = "Mufrodat 6";
                        $data['tema'] = "Pertemuan 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "إِنَّ",
                                "arti" => "Sesungguhnya",
                                "huruf" => array_unique(["إِ","نَّ","نَّ","كَ","نَّ"])
                            ],
                            // [
                            //     "kata_arab" => "أَنَّ",
                            //     "arti" => "Sesungguhnya ",
                            //     "huruf" => array_unique(["إِ","نَّ","أَ","نَّ","كَ","أَ","نَّ"])
                            // ],
                            [
                                "kata_arab" => "كَأَنَّ",
                                "arti" => "Seakan-akan",
                                "huruf" => array_unique(["إِ","نَّ","أَ","نَّ","كَ","أَ","نَّ"])
                            ],
                            [
                                "kata_arab" => "لَكِنَّ",
                                "arti" => "Akan tetapi",
                                "huruf" => array_unique(["لَ","كِ","نَّ","لَ","عَ","لَّ","لَ","يْ","تَ"])
                            ],
                            [
                                "kata_arab" => "لَعَلَّ",
                                "arti" => "Semoga, supaya",
                                "huruf" => array_unique(["لَ","كِ","نَّ","لَ","عَ","لَّ","لَ","يْ","تَ"])
                            ],
                            [
                                "kata_arab" => "لَيْتَ",
                                "arti" => "Andaikan",
                                "huruf" => array_unique(["لَ","كِ","نَّ","لَ","عَ","لَّ","لَ","يْ","تَ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 7')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 7");
                        $data['materi'] = "Mufrodat 7";
                        $data['tema'] = "Pertemuan 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَنْ",
                                "arti"	=> "Hendaknya",
                                "huruf" => array_unique(["أَ","نْ","لَ","نْ","إِ","ذَ","نْ","كَ","يْ","لِ","حَ","تَّ","ى"])
                            ],
                            [
                                "kata_arab" => "لَنْ",
                                "arti"	=> "Tidak akan",
                                "huruf" => array_unique(["أَ","نْ","لَ","نْ","إِ","ذَ","نْ","كَ","يْ","لِ","حَ","تَّ","ى"])
                            ],
                            [
                                "kata_arab" => "إِذَنْ",
                                "arti"	=> "Kalau demikian",
                                "huruf" => array_unique(["أَ","نْ","لَ","نْ","إِ","ذَ","نْ","كَ","يْ","لِ","حَ","تَّ","ى"])
                            ],
                            [
                                "kata_arab" => "كَيْ",
                                "arti"	=> "Supaya",
                                "huruf" => array_unique(["أَ","نْ","لَ","نْ","إِ","ذَ","نْ","كَ","يْ","حَ","تَّ","ى"])
                            ],
                            // [
                            //     "kata_arab" => "لِ",
                            //     "arti"	=> "Supaya",
                            //     "huruf" => array_unique(["أَ","نْ","لَ","نْ","إِ","ذَ","نْ","كَ","يْ","لِ","حَ","تَّ","ى"])
                            // ],
                            [
                                "kata_arab" => "حَتَّى",
                                "arti"	=> "Sehingga",
                                "huruf" => array_unique(["أَ","نْ","لَ","نْ","إِ","ذَ","نْ","كَ","يْ","لِ","حَ","تَّ","ى"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 8')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 8");
                        $data['materi'] = "Mufrodat 8";
                        $data['tema'] = "Pertemuan 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "لَمْ",
                                "arti" => "Tidak",
                                "huruf" => array_unique(["لَ","مْ","لِ","لَ","ا","إِ","نْ"])
                            ],
                            // [
                            //     "kata_arab" => "لَمَّا",
                            //     "arti" => "Tidak",
                            //     "huruf" => array_unique(["لَ","مَّ","ا","لِ","لَ","ا","إِ","نْ"])
                            // ],
                            [
                                "kata_arab" => "لِ",
                                "arti" => "Hendaklah",
                                "huruf" => array_unique(["لَ","مْ","لَ","مَّ","ا","لِ","لَ","ا","إِ","نْ"])
                            ],
                            [
                                "kata_arab" => "لَا",
                                "arti" => "Janganlah",
                                "huruf" => array_unique(["لَ","مْ","لَ","مَّ","ا","لِ","لَ","ا","إِ","نْ"])
                            ],
                            [
                                "kata_arab" => "إِنْ",
                                "arti" => "Jika",
                                "huruf" => array_unique(["لَ","مْ","لَ","مَّ","ا","لِ","لَ","ا","إِ","نْ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 9')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 9");
                        $data['materi'] = "Mufrodat 9";
                        $data['tema'] = "Pertemuan 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "قَدْ",
                                "arti" => "Sungguh",
                                "huruf" => array_unique(["قَ","دْ","لَ","مْ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 10')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 10");
                        $data['materi'] = "Mufrodat 10";
                        $data['tema'] = "Pertemuan 2";
                        $data['mufrodat'] = [
                            // [
                            //     "kata_arab" => "سَ",
                            //     "arti" => "Akan",
                            //     "huruf" => array_unique(["سَ","دْ","لَ","قَ","مْ"])
                            // ],
                            [
                                "kata_arab" => "سَوْفَ",
                                "arti" => "Akan",
                                "huruf" => array_unique(["سَ","وْ","فَ","دْ","لَ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 11')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 11");
                        $data['materi'] = "Mufrodat 11";
                        $data['tema'] = "Pertemuan 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "وَ",
                                "arti" => "Dan",
                                "huruf" => array_unique(["وَ","أَ","وْ","فَ","أَ","مْ"])
                            ],
                            [
                                "kata_arab" => "أَوْ",
                                "arti" => "Atau",
                                "huruf" => array_unique(["وَ","أَ","وْ","فَ","أَ"])
                            ],
                            [
                                "kata_arab" => "فَ",
                                "arti" => "Lalu",
                                "huruf" => array_unique(["وَ","أَ","وْ","فَ","أَ","مْ"])
                            ],
                            // [
                            //     "kata_arab" => "أَمْ",
                            //     "arti" => "Atau",
                            //     "huruf" => array_unique(["وَ","أَ","وْ","فَ","أَ","مْ"])
                            // ],
                            // [
                            //     "kata_arab" => "إِمَّا",
                            //     "arti" => "Atau",
                            //     "huruf" => array_unique(["إِ","مَّ","ا","ثُ","مَّ","بَ","لْ","حَ","تَّ","ى","لَ","كِ","نْ"])
                            // ],
                            [
                                "kata_arab" => "ثُمَّ",
                                "arti" => "Kemudian",
                                "huruf" => array_unique(["إِ","مَّ","ا","ثُ","مَّ","بَ","لْ","حَ","تَّ","ى","لَ","كِ","نْ"])
                            ],
                            [
                                "kata_arab" => "بَلْ",
                                "arti" => "Bahkan",
                                "huruf" => array_unique(["إِ","مَّ","ا","ثُ","مَّ","بَ","لْ","حَ","تَّ","ى","لَ","كِ","نْ"])
                            ],
                            [
                                "kata_arab" => "حَتَّى",
                                "arti" => "Sehingga",
                                "huruf" => array_unique(["إِ","مَّ","ا","ثُ","مَّ","بَ","لْ","حَ","تَّ","ى","لَ","كِ","نْ"])
                            ],
                            [
                                "kata_arab" => "لَكِنْ",
                                "arti" => "Tetapi",
                                "huruf" => array_unique(["إِ","مَّ","ا","ثُ","مَّ","بَ","لْ","حَ","تَّ","ى","لَ","كِ","نْ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 12')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 12");
                        $data['materi'] = "Mufrodat 12";
                        $data['tema'] = "Pertemuan 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "لَا",
                                "arti" => "Tidak",
                                "huruf" => array_unique(["لَ","ا","وْ","فَ","أَ","حَ"])
                            ],
                            // [
                            //     "kata_arab" => "مَا",
                            //     "arti" => "Tidak",
                            //     "huruf" => array_unique(["مَ","ا","وْ","فَ","أَ","حَ"])
                            // ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 13')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 13");
                        $data['materi'] = "Mufrodat 13";
                        $data['tema'] = "Pertemuan 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "هَلْ",
                                "arti" => "Apakah",
                                "huruf" => array_unique(["هَ","لْ","لَ","ا","وْ","فَ","حَ"])
                            ],
                            // [
                            //     "kata_arab" => "أَ",
                            //     "arti" => "Apakah",
                            //     "huruf" => array_unique(["أَ","لَ","ا","وْ","فَ","أَ","حَ"])
                            // ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 14')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 14");
                        $data['tema'] = "Pertemuan 3";
                        $data['materi'] = "Mufrodat 14";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "وَاحِدٌ",
                                "arti" => "1",
                                "huruf" => array_unique(["وَ","ا","حِ","دٌ"])
                            ],
                            [
                                "kata_arab" => "اِثْنَانِ",
                                "arti" => "2",
                                "huruf" => array_unique(["اِ","ثْ","نَ","ا","نِ"])
                            ],
                            [
                                "kata_arab" => "ثَلَاثَةٌ",
                                "arti" => "3",
                                "huruf" => array_unique(["ثَ","لَ","ا","ثَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "أَرْبَعَةٌ",
                                "arti" => "4",
                                "huruf" => array_unique(["أَ","رْ","بَ","عَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "خَمْسَةٌ",
                                "arti" => "5",
                                "huruf" => array_unique(["خَ","مْ","سَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سِتَّةٌ",
                                "arti" => "6",
                                "huruf" => array_unique(["سِ","تَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَبْعَةٌ",
                                "arti" => "7",
                                "huruf" => array_unique(["سَ","بْ","عَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "ثَمَانِيَةٌ",
                                "arti" => "8",
                                "huruf" => array_unique(["ثَ","مَ","ا","نِ","يَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "تِسْعَةٌ",
                                "arti" => "9",
                                "huruf" => array_unique(["تِ","سْ","عَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "عَشَرَةٌ",
                                "arti" => "10",
                                "huruf" => array_unique(["عَ","شَ","رَ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 15')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 15");
                        $data['tema'] = "Pertemuan 3";
                        $data['materi'] = "Mufrodat 15";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَحَدَ عَشَرَ",
                                "arti" => "11",
                                "huruf"=> array_unique(["أَ","حَ","دَ","_","عَ","شَ","رَ"])
                            ],
                            [
                                "kata_arab" => "اِثْنَا عَشَرَ",
                                "arti" => "12",
                                "huruf"=> array_unique(["اِ","ثْ","نَ","ا","_","عَ","شَ","رَ"])
                            ],
                            [
                                "kata_arab" => "ثَلَاثَةَ عَشَرَ",
                                "arti" => "13",
                                "huruf"=> array_unique(["ثَ","لَ","ا","ثَ","ةَ","_","عَ","شَ","رَ"])
                            ],
                            [
                                "kata_arab" => "أَرْبَعَةَ عَشَرَ",
                                "arti" => "14",
                                "huruf"=> array_unique(["أَ","رْ","بَ","عَ","ةَ","_","عَ","شَ","رَ"])
                            ],
                            [
                                "kata_arab" => "خَمْسَةَ عَشَرَ",
                                "arti" => "15",
                                "huruf"=> array_unique(["خَ","مْ","سَ","ةَ","_","عَ","شَ","رَ"])
                            ],
                            [
                                "kata_arab" => "سِتَّةَ عَشَرَ",
                                "arti" => "16",
                                "huruf"=> array_unique(["سِ","تَّ","ةَ","_","عَ","شَ","رَ"])
                            ],
                            [
                                "kata_arab" => "سَبْعَةَ عَشَرَ",
                                "arti" => "17",
                                "huruf"=> array_unique(["سَ","بْ","عَ","ةَ","_","عَ","شَ","رَ"])
                            ],
                            [
                                "kata_arab" => "ثَمَانِيَةَ عَشَرَ",
                                "arti" => "18",
                                "huruf"=> array_unique(["ثَ","مَ","ا","نِ","يَ","ةَ","_","عَ","شَ","رَ"])
                            ],
                            [
                                "kata_arab" => "تِسْعَةَ عَشَرَ",
                                "arti" => "19",
                                "huruf"=> array_unique(["تِ","سْ","عَ","ةَ","_","عَ","شَ","رَ"])
                            ],
                            [
                                "kata_arab" => "عِشْرُوْنَ",
                                "arti" => "20",
                                "huruf"=> array_unique(["عِ","شْ","رُ","وْ","نَ"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 16')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 16");
                        $data['tema'] = "Pertemuan 3";
                        $data['materi'] = "Mufrodat 16";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "عِشْرُوْنَ",
                                "arti" => "20",
                                "huruf" => array_unique(["عِ","شْ","رُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "ثَلَاثُوْنَ",
                                "arti" => "30",
                                "huruf" => array_unique(["ثَ","لَ","ا","ثُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "أَرْبَعُوْنَ",
                                "arti" => "40",
                                "huruf" => array_unique(["أَ","رْ","بَ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "خَمْسُوْنَ",
                                "arti" => "50",
                                "huruf" => array_unique(["خَ","مْ","سُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "سِتُّوْنَ",
                                "arti" => "60",
                                "huruf" => array_unique(["سِ","تُّ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "سَبْعُوْنَ",
                                "arti" => "70",
                                "huruf" => array_unique(["سَ","بْ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "ثَمَانُوْنَ",
                                "arti" => "80",
                                "huruf" => array_unique(["ثَ","مَ","ا","نُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "تِسْعُوْنَ",
                                "arti" => "90",
                                "huruf" => array_unique(["تِ","سْ","عُ","وْ","نَ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 17')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 17");
                        $data['tema'] = "Pertemuan 3";
                        $data['materi'] = "Mufrodat 17";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مِائَةٌ",
                                "arti" => "100",
                                "huruf" => array_unique(["مِ","ا","ئَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مِائَتَانِ",
                                "arti" => "200",
                                "huruf" => array_unique(["مِ","ا","ئَ","تَ","ا","نِ"])
                            ],
                            [
                                "kata_arab" => "ثَلَاثُمِائَةٍ",
                                "arti" => "300",
                                "huruf" => array_unique(["ثَ","لَ","ا","ثُ","مِ","ا","ئَ","ةٍ"])
                            ],
                            [
                                "kata_arab" => "أَرْبَعُمِائَةٍ",
                                "arti" => "400",
                                "huruf" => array_unique(["أَ","رْ","بَ","عُ","مِ","ا","ئَ","ةٍ"])
                            ],
                            [
                                "kata_arab" => "خَمْسُمِائَةٍ",
                                "arti" => "500",
                                "huruf" => array_unique(["خَ","مْ","سُ","مِ","ا","ئَ","ةٍ"])
                            ],
                            [
                                "kata_arab" => "سِتُّمِائَةٍ",
                                "arti" => "600",
                                "huruf" => array_unique(["سِ","تُّ","مِ","ا","ئَ","ةٍ"])
                            ],
                            [
                                "kata_arab" => "سَبْعُمِائَةٍ",
                                "arti" => "700",
                                "huruf" => array_unique(["سَ","بْ","عُ","مِ","ا","ئَ","ةٍ"])
                            ],
                            [
                                "kata_arab" => "ثَمَانُمِائَةٍ",
                                "arti" => "800",
                                "huruf" => array_unique(["ثَ","مَ","ا","نُ","مِ","ا","ئَ","ةٍ"])
                            ],
                            [
                                "kata_arab" => "تِسْعُمِائَةٍ",
                                "arti" => "900",
                                "huruf" => array_unique(["تِ","سْ","عُ","مِ","ا","ئَ","ةٍ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 18')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 18");
                        $data['tema'] = "Pertemuan 3";
                        $data['materi'] = "Mufrodat 18";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "وَاحِدٌ وَ عِشْرُوْنَ",
                                "arti" => "21",
                                "huruf" => array_unique(["وَ","ا","حِ","دٌ","_","وَ","_","عِ","شْ","رُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "اِثْنَانِ وَ عِشْرُوْنَ",
                                "arti" => "22",
                                "huruf" => array_unique(["اِ","ثْ","نَ","ا","نِ","_","وَ","عِ","شْ","رُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "ثَلَاثَةٌ وَ عِشْرُوْنَ",
                                "arti" => "23",
                                "huruf" => array_unique(["ثَ","لَ","ا","ثَ","ةٌ","_","وَ","_","عِ","شْ","رُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "أَرْبَعَةٌ وَ عِشْرُوْنَ",
                                "arti" => "24",
                                "huruf" => array_unique(["أَ","رْ","بَ","عَ","ةٌ","_","وَ","_","عِ","شْ","رُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "خَمْسَةٌ وَ عِشْرُوْنَ",
                                "arti" => "25",
                                "huruf" => array_unique(["خَ","مْ","سَ","ةٌ","_","وَ","عِ","شْ","رُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "سِتَّةٌ وَ عِشْرُوْنَ",
                                "arti" => "26",
                                "huruf" => array_unique(["سِ","تَّ","ةٌ","_","وَ","_","عِ","شْ","رُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "سَبْعَةٌ وَ عِشْرُوْنَ",
                                "arti" => "27",
                                "huruf" => array_unique(["سَ","بْ","عَ","ةٌ","_","وَ","_","عِ","شْ","رُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "ثَمَانِيَةٌ وَ عِشْرُوْنَ",
                                "arti" => "28",
                                "huruf" => array_unique(["ثَ","مَ","ا","نِ","يَ","ةٌ","_","وَ","_","عِ","شْ","رُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "تِسْعَةٌ وَ عِشْرُوْنَ",
                                "arti" => "29",
                                "huruf" => array_unique(["تِ","سْ","عَ","ةٌ","_","وَ","_","عِ","شْ","رُ","وْ","نَ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 19')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 19");
                        $data['tema'] = "Pertemuan 3";
                        $data['materi'] = "Mufrodat 19";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "وَاحِدٌ وَ ثَلَاثُوْنَ",
                                "arti" => "31",
                                "huruf" => array_unique(["وَ","ا","حِ","دٌ","_","وَ","_","ثَ","لَ","ا","ثُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "اِثْنَانِ وَ ثَلَاثُوْنَ",
                                "arti" => "32",
                                "huruf" => array_unique(["اِ","ثْ","نَ","ا","نِ","_","وَ","_","ثَ","لَ","ا","ثُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "ثَلَاثَةٌ وَ ثَلَاثُوْنَ",
                                "arti" => "33",
                                "huruf" => array_unique(["ثَ","لَ","ا","ثَ","ةٌ","_","وَ","_","ثَ","لَ","ا","ثُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "أَرْبَعَةٌ وَ ثَلَاثُوْنَ",
                                "arti" => "34",
                                "huruf" => array_unique(["أَ","رْ","بَ","عَ","ةٌ","_","وَ","_","ثَ","لَ","ا","ثُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "خَمْسَةٌ وَ ثَلَاثُوْنَ",
                                "arti" => "35",
                                "huruf" => array_unique(["خَ","مْ","سَ","ةٌ","_","وَ","ثَ","لَ","ا","ثُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "سِتَّةٌ وَ ثَلَاثُوْنَ",
                                "arti" => "36",
                                "huruf" => array_unique(["سِ","تَّ","ةٌ","_","وَ","ثَ","لَ","ا","ثُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "سَبْعَةٌ وَ ثَلَاثُوْنَ",
                                "arti" => "37",
                                "huruf" => array_unique(["سَ","بْ","عَ","ةٌ","_","وَ","ثَ","لَ","ا","ثُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "ثَمَانِيَةٌ وَ ثَلَاثُوْنَ",
                                "arti" => "38",
                                "huruf" => array_unique(["ثَ","مَ","ا","نِ","يَ","ةٌ","_","وَ","ثَ","لَ","ا","ثُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "تِسْعَةٌ وَ ثَلَاثُوْنَ",
                                "arti" => "39",
                                "huruf" => array_unique(["تِ","سْ","عَ","ةٌ","_","وَ","ثَ","لَ","ا","ثُ","وْ","نَ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 20')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 20");
                        $data['tema'] = "Pertemuan 3";
                        $data['materi'] = "Mufrodat 20";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "وَاحِدٌ وَ أَرْبَعُوْنَ",
                                "arti" => "41",
                                "huruf" => array_unique(["وَ","ا","حِ","دٌ","_","وَ","أَ","رْ","بَ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "اِثْنَانِ وَ أَرْبَعُوْنَ",
                                "arti" => "42",
                                "huruf" => array_unique(["اِ","ثْ","نَ","ا","نِ","_","وَ","أَ","رْ","بَ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "ثَلَاثَةٌ وَ أَرْبَعُوْنَ",
                                "arti" => "43",
                                "huruf" => array_unique(["ثَ","لَ","ا","ثَ","ةٌ","_","وَ","أَ","رْ","بَ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "أَرْبَعَةٌ وَ أَرْبَعُوْنَ",
                                "arti" => "44",
                                "huruf" => array_unique(["أَ","رْ","بَ","عَ","ةٌ","_","وَ","أَ","رْ","بَ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "خَمْسَةٌ وَ أَرْبَعُوْنَ",
                                "arti" => "45",
                                "huruf" => array_unique(["خَ","مْ","سَ","ةٌ","_","وَ","أَ","رْ","بَ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "سِتَّةٌ وَ أَرْبَعُوْنَ",
                                "arti" => "46",
                                "huruf" => array_unique(["سِ","تَّ","ةٌ","_","وَ","أَ","رْ","بَ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "سَبْعَةٌ وَ أَرْبَعُوْنَ",
                                "arti" => "47",
                                "huruf" => array_unique(["سَ","بْ","عَ","ةٌ","_","وَ","أَ","رْ","بَ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "ثَمَانِيَةٌ وَ أَرْبَعُوْنَ",
                                "arti" => "48",
                                "huruf" => array_unique(["ثَ","مَ","ا","نِ","يَ","ةٌ","_","وَ","أَ","رْ","بَ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "تِسْعَةٌ وَ أَرْبَعُوْنَ",
                                "arti" => "49",
                                "huruf" => array_unique(["تِ","سْ","عَ","ةٌ","_","وَ","أَ","رْ","بَ","عُ","وْ","نَ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 21')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 21");
                        $data['tema'] = "Pertemuan 3";
                        $data['materi'] = "Mufrodat 21";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "وَاحِدٌ وَ خَمْسُوْنَ",
                                "arti" => "51",
                                "huruf" => array_unique(["وَ","ا","حِ","دٌ","_","وَ","خَ","مْ","سُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "اِثْنَانِ وَ خَمْسُوْنَ",
                                "arti" => "52",
                                "huruf" => array_unique(["اِ","ثْ","نَ","ا","نِ","_","وَ","خَ","مْ","سُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "ثَلَاثَةٌ وَ خَمْسُوْنَ",
                                "arti" => "53",
                                "huruf" => array_unique(["ثَ","لَ","ا","ثَ","ةٌ","_","وَ","خَ","مْ","سُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "أَرْبَعَةٌ وَ خَمْسُوْنَ",
                                "arti" => "54",
                                "huruf" => array_unique(["أَ","رْ","بَ","عَ","ةٌ","_","وَ","خَ","مْ","سُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "خَمْسَةٌ وَ خَمْسُوْنَ",
                                "arti" => "55",
                                "huruf" => array_unique(["خَ","مْ","سَ","ةٌ","_","وَ","خَ","مْ","سُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "سِتَّةٌ وَ خَمْسُوْنَ",
                                "arti" => "56",
                                "huruf" => array_unique(["سِ","تَّ","ةٌ","_","وَ","خَ","مْ","سُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "سَبْعَةٌ وَ خَمْسُوْنَ",
                                "arti" => "57",
                                "huruf" => array_unique(["سَ","بْ","عَ","ةٌ","_","وَ","خَ","مْ","سُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "ثَمَانِيَةٌ وَ خَمْسُوْنَ",
                                "arti" => "58",
                                "huruf" => array_unique(["ثَ","مَ","ا","نِ","يَ","ةٌ","_","وَ","خَ","مْ","سُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "تِسْعَةٌ وَ خَمْسُوْنَ",
                                "arti" => "59",
                                "huruf" => array_unique(["تِ","سْ","عَ","ةٌ","_","وَ","خَ","مْ","سُ","وْ","نَ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 22')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 22");
                        $data['tema'] = "Pertemuan 3";
                        $data['materi'] = "Mufrodat 22";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "وَاحِدٌ وَ سِتُّوْنَ",
                                "arti" => "61",
                                "huruf" => array_unique(["وَ","ا","حِ","دٌ","_","وَ","سِ","تُّ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "اِثْنَانِ وَ سِتُّوْنَ",
                                "arti" => "62",
                                "huruf" => array_unique(["اِ","ثْ","نَ","ا","نِ","_","وَ","سِ","تُّ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "ثَلَاثَةٌ وَ سِتُّوْنَ",
                                "arti" => "63",
                                "huruf" => array_unique(["ثَ","لَ","ا","ثَ","ةٌ","_","وَ","سِ","تُّ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "أَرْبَعَةٌ وَ سِتُّوْنَ",
                                "arti" => "64",
                                "huruf" => array_unique(["أَ","رْ","بَ","عَ","ةٌ","_","وَ","سِ","تُّ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "خَمْسَةٌ وَ سِتُّوْنَ",
                                "arti" => "65",
                                "huruf" => array_unique(["خَ","مْ","سَ","ةٌ","_","وَ","سِ","تُّ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "سِتَّةٌ وَ سِتُّوْنَ",
                                "arti" => "66",
                                "huruf" => array_unique(["سِ","تَّ","ةٌ","_","وَ","سِ","تُّ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "سَبْعَةٌ وَ سِتُّوْنَ",
                                "arti" => "67",
                                "huruf" => array_unique(["سَ","بْ","عَ","ةٌ","_","وَ","سِ","تُّ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "ثَمَانِيَةٌ وَ سِتُّوْنَ",
                                "arti" => "68",
                                "huruf" => array_unique(["ثَ","مَ","ا","نِ","يَ","ةٌ","_","وَ","سِ","تُّ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "تِسْعَةٌ وَ سِتُّوْنَ",
                                "arti" => "69",
                                "huruf" => array_unique(["تِ","سْ","عَ","ةٌ","_","وَ","سِ","تُّ","وْ","نَ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 23')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 23");
                        $data['tema'] = "Pertemuan 3";
                        $data['materi'] = "Mufrodat 23";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "وَاحِدٌ وَ سَبْعُوْنَ",
                                "arti" => "71",
                                "huruf" => array_unique(["وَ","ا","حِ","دٌ","_","وَ","سَ","بْ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "اِثْنَانِ وَ سَبْعُوْنَ",
                                "arti" => "72",
                                "huruf" => array_unique(["اِ","ثْ","نَ","ا","نِ","_","وَ","سَ","بْ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "ثَلَاثَةٌ وَ سَبْعُوْنَ",
                                "arti" => "73",
                                "huruf" => array_unique(["ثَ","لَ","ا","ثَ","ةٌ","_","وَ","سَ","بْ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "أَرْبَعَةٌ وَ سَبْعُوْنَ",
                                "arti" => "74",
                                "huruf" => array_unique(["أَ","رْ","بَ","عَ","ةٌ","_","وَ","سَ","بْ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "خَمْسَةٌ وَ سَبْعُوْنَ",
                                "arti" => "75",
                                "huruf" => array_unique(["خَ","مْ","سَ","ةٌ","_","وَ","سَ","بْ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "سِتَّةٌ وَ سَبْعُوْنَ",
                                "arti" => "76",
                                "huruf" => array_unique(["سِ","تَّ","ةٌ","_","وَ","سَ","بْ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "سَبْعَةٌ وَ سَبْعُوْنَ",
                                "arti" => "77",
                                "huruf" => array_unique(["سَ","بْ","عَ","ةٌ","_","وَ","سَ","بْ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "ثَمَانِيَةٌ وَ سَبْعُوْنَ",
                                "arti" => "78",
                                "huruf" => array_unique(["ثَ","مَ","ا","نِ","يَ","ةٌ","_","وَ","سَ","بْ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "تِسْعَةٌ وَ سَبْعُوْنَ",
                                "arti" => "79",
                                "huruf" => array_unique(["تِ","سْ","عَ","ةٌ","_","وَ","سَ","بْ","عُ","وْ","نَ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 24')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 24");
                        $data['tema'] = "Pertemuan 3";
                        $data['materi'] = "Mufrodat 24";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "وَاحِدٌ وَ ثَمَانُوْنَ",
                                "arti" => "81",
                                "huruf" => array_unique(["وَ","ا","حِ","دٌ","_","وَ","ثَ","مَ","ا","نُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "اِثْنَانِ وَ ثَمَانُوْنَ",
                                "arti" => "82",
                                "huruf" => array_unique(["اِ","ثْ","نَ","ا","نِ","_","وَ","ثَ","مَ","ا","نُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "ثَلَاثَةٌ وَ ثَمَانُوْنَ",
                                "arti" => "83",
                                "huruf" => array_unique(["ثَ","لَ","ا","ثَ","ةٌ","_","وَ","ثَ","مَ","ا","نُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "أَرْبَعَةٌ وَ ثَمَانُوْنَ",
                                "arti" => "84",
                                "huruf" => array_unique(["أَ","رْ","بَ","عَ","ةٌ","_","وَ","ثَ","مَ","ا","نُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "خَمْسَةٌ وَ ثَمَانُوْنَ",
                                "arti" => "85",
                                "huruf" => array_unique(["خَ","مْ","سَ","ةٌ","_","وَ","ثَ","مَ","ا","نُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "سِتَّةٌ وَ ثَمَانُوْنَ",
                                "arti" => "86",
                                "huruf" => array_unique(["سِ","تَّ","ةٌ","_","وَ","ثَ","مَ","ا","نُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "سَبْعَةٌ وَ ثَمَانُوْنَ",
                                "arti" => "87",
                                "huruf" => array_unique(["سَ","بْ","عَ","ةٌ","_","وَ","ثَ","مَ","ا","نُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "ثَمَانِيَةٌ وَ ثَمَانُوْنَ",
                                "arti" => "88",
                                "huruf" => array_unique(["ثَ","مَ","ا","نِ","يَ","ةٌ","_","وَ","ثَ","مَ","ا","نُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "تِسْعَةٌ وَ ثَمَانُوْنَ",
                                "arti" => "89",
                                "huruf" => array_unique(["تِ","سْ","عَ","ةٌ","_","وَ","ثَ","مَ","ا","نُ","وْ","نَ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 25')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 25");
                        $data['tema'] = "Pertemuan 3";
                        $data['materi'] = "Mufrodat 25";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "وَاحِدٌ وَ تِسْعُوْنَ",
                                "arti" => "91",
                                "huruf" => array_unique(["وَ","ا","حِ","دٌ","_","وَ","تِ","سْ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "اِثْنَانِ وَ تِسْعُوْنَ",
                                "arti" => "92",
                                "huruf" => array_unique(["اِ","ثْ","نَ","ا","نِ","_","وَ","تِ","سْ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "ثَلَاثَةٌ وَ تِسْعُوْنَ",
                                "arti" => "93",
                                "huruf" => array_unique(["ثَ","لَ","ا","ثَ","ةٌ","_","وَ","تِ","سْ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "أَرْبَعَةٌ وَ تِسْعُوْنَ",
                                "arti" => "94",
                                "huruf" => array_unique(["أَ","رْ","بَ","عَ","ةٌ","_","وَ","تِ","سْ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "خَمْسَةٌ وَ تِسْعُوْنَ",
                                "arti" => "95",
                                "huruf" => array_unique(["خَ","مْ","سَ","ةٌ","_","وَ","تِ","سْ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "سِتَّةٌ وَ تِسْعُوْنَ",
                                "arti" => "96",
                                "huruf" => array_unique(["سِ","تَّ","ةٌ","_","وَ","تِ","سْ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "سَبْعَةٌ وَ تِسْعُوْنَ",
                                "arti" => "97",
                                "huruf" => array_unique(["سَ","بْ","عَ","ةٌ","_","وَ","تِ","سْ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "ثَمَانِيَةٌ وَ تِسْعُوْنَ",
                                "arti" => "98",
                                "huruf" => array_unique(["ثَ","مَ","ا","نِ","يَ","ةٌ","_","وَ","تِ","سْ","عُ","وْ","نَ"])
                            ],
                            [
                                "kata_arab" => "تِسْعَةٌ وَ تِسْعُوْنَ",
                                "arti" => "99",
                                "huruf" => array_unique(["تِ","سْ","عَ","ةٌ","_","وَ","تِ","سْ","عُ","وْ","نَ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 26')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 26");
                        $data['tema'] = "Pertemuan 4";
                        $data['materi'] = "Mufrodat 26";
                        $data['mufrodat'] =[
                            [
                                "kata_arab" => "أَمَامَ",
                                "arti" => "Di depan",
                                "huruf" => array_unique(["أَ","مَ","ا","مَ"])
                            ],
                            [
                                "kata_arab" => "وَرَاءَ",
                                "arti" => "Di belakang",
                                "huruf" => array_unique(["وَ","رَ","ا","ءَ"])
                            ],
                            [
                                "kata_arab" => "فَوْقَ",
                                "arti" => "Di atas",
                                "huruf" => array_unique(["فَ","وْ","قَ"])
                            ],
                            [
                                "kata_arab" => "تَحْتَ",
                                "arti" => "Di bawah",
                                "huruf" => array_unique(["تَ","حْ","تَ"])
                            ],
                            [
                                "kata_arab" => "دَاخِلَ",
                                "arti" => "Di dalam",
                                "huruf" => array_unique(["دَ","ا","خِ","لَ"])
                            ],
                            [
                                "kata_arab" => "خَارِجَ",
                                "arti" => "Di luar",
                                "huruf" => array_unique(["خَ","ا","رِ","جَ"])
                            ],
                            [
                                "kata_arab" => "بَيْنَ",
                                "arti" => "Di antara",
                                "huruf" => array_unique(["بَ","يْ","نَ"])
                            ],
                            [
                                "kata_arab" => "جَانِبَ",
                                "arti" => "Di samping",
                                "huruf" => array_unique(["جَ","ا","نِ","بَ"])
                            ],
                            [
                                "kata_arab" => "هُنَا",
                                "arti" => "Di sini",
                                "huruf" => array_unique(["هُ","نَ","ا","كَ"])
                            ],
                            [
                                "kata_arab" => "هُنَاكَ",
                                "arti" => "Di sana",
                                "huruf" => array_unique(["هُ","نَ","ا","كَ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 27')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 27");
                        $data['tema'] = "Pertemuan 4";
                        $data['materi'] = "Mufrodat 27";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "اَلْيَوْمَ",
                                "arti" => "Hari ini",
                                "huruf" => array_unique(["اَلْ","يَ","وْ","مَ"])
                            ],
                            [
                                "kata_arab" => "اَلْآنَ",
                                "arti" => "Sekarang",
                                "huruf" => array_unique(["اَلْ","آ","نَ"])
                            ],
                            [
                                "kata_arab" => "قَبْلَ",
                                "arti" => "Sebelum",
                                "huruf" => array_unique(["قَ","بْ","لَ"])
                            ],
                            [
                                "kata_arab" => "بَعْدَ",
                                "arti" => "Setelah",
                                "huruf" => array_unique(["بَ","عْ","دَ"])
                            ],
                            [
                                "kata_arab" => "غَدًا",
                                "arti" => "Besok",
                                "huruf" => array_unique(["غَ","دً","ا"])
                            ],
                            [
                                "kata_arab" => "بَعْدَ الْغَدِّ",
                                "arti" => "Besok lusa",
                                "huruf" => array_unique(["بَ","عْ","دَ","_","الْ","غَ","دِّ"])
                            ],
                            [
                                "kata_arab" => "بِالْأَمْسِ",
                                "arti" => "Kemarin",
                                "huruf" => array_unique(["بِ","الْ","أَ","مْ","سِ"])
                            ],
                            [
                                "kata_arab" => "أَوَّلَ الْأَمْسِ",
                                "arti" => "Kemarin lusa",
                                "huruf" => array_unique(["أَ","وَّ","لَ","_","الْ","أَ","مْ","سِ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 28')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 28");
                        $data['tema'] = "Pertemuan 4";
                        $data['materi'] = "Mufrodat 28";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "صَبَاحًا",
                                "arti" => "Pagi",
                                "huruf" => array_unique(["صَ","بَ","ا","حً","ا"])
                            ],
                            [
                                "kata_arab" => "نَهَارًا",
                                "arti" => "Siang",
                                "huruf" => array_unique(["نَ","هَ","ا","رً","ا"])
                            ],
                            [
                                "kata_arab" => "مَسَاءً",
                                "arti" => "Sore",
                                "huruf" => array_unique(["مَ","سَ","ا","ءً"])
                            ],
                            [
                                "kata_arab" => "لَيْلًا",
                                "arti" => "Malam",
                                "huruf" => array_unique(["لَ","يْ","لً","ا"])
                            ],
                            [
                                "kata_arab" => "لَاحِقًا",
                                "arti" => "Nanti",
                                "huruf" => array_unique(["لَ","ا","حِ","قً","ا"])
                            ],
                            [
                                "kata_arab" => "آنِفًا",
                                "arti" => "Barusan",
                                "huruf" => array_unique(["آ","نِ","فً","ا"])
                            ],
                            // [
                            //     "kata_arab" => "حَدِيْثًا",
                            //     "arti" => "Barusan",
                            //     "huruf" => array_unique(["حَ","دِ","يْ","ثً","ا"])
                            // ],
                            [
                                "kata_arab" => "بَعْدَ قَلِيْلٍ",
                                "arti" => "Sebentar lagi",
                                "huruf" => array_unique(["بَ","عْ","دَ","_","قَ","لِ","يْ","لٍ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 29')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 29");
                        $data['tema'] = "Pertemuan 4";
                        $data['materi'] = "Mufrodat 29";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "اَلْأُسْبُوْعُ الْمَاضِى",
                                "arti" => "Minggu lalu",
                                "huruf" => array_unique(["اَلْ","أُ","سْ","بُ","وْ","عُ","_","الْ","مَ","ضِ","ى","ا"])
                            ],
                            [
                                "kata_arab" => "اَلْأُسْبُوْعُ الْقَادِمُ",
                                "arti" => "Minggu depan",
                                "huruf" => array_unique(["اَلْ","أُ","سْ","بُ","وْ","عُ","_","الْ","قَ","ا","دِ","مُ"])
                            ],
                            [
                                "kata_arab" => "اَلشَّهْرُ الْمَاضِى",
                                "arti" => "Bulan lalu",
                                "huruf" => array_unique(["اَل","شَّ","هْ","رُ","_","الْ","مَ","ا","ضِ","ى"])
                            ],
                            [
                                "kata_arab" => "اَلشَّهْرُ الْقَادِمُ",
                                "arti" => "Bulan depan",
                                "huruf" => array_unique(["اَل","شَّ","هْ","رُ","_","الْ","قَ","ا","دِ","مُ"])
                            ],
                            [
                                "kata_arab" => "اَلسَّنَةُ الْمَاضِيَةُ",
                                "arti" => "Tahun lalu",
                                "huruf" => array_unique(["اَل","سَّ","نَ","ةُ","_","الْ","مَ","ا","ضِ","يَ","ةُ"])
                            ],
                            [
                                "kata_arab" => "اَلسَّنَةُ الْقَادِمَةُ",
                                "arti" => "Tahun depan",
                                "huruf" => array_unique(["اَل","سَّ","نَ","ةُ","_","الْ","قَ","ا","دِ","مَ","ةُ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 30')){
                        
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 30");
                        $data['tema'] = "Pertemuan 5";
                        $data['materi'] = "Mufrodat 30";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "عَقْلٌ",
                                "arti" => "Akal",
                                "huruf" => array_unique(["عَ","قْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "رَأْسٌ",
                                "arti" => "Kepala",
                                "huruf" => array_unique(["رَ","أْ","سٌ"])
                            ],
                            [
                                "kata_arab" => "وَجْهٌ",
                                "arti" => "Wajah",
                                "huruf" => array_unique(["وَ","جْ","هٌ"])
                            ],
                            [
                                "kata_arab" => "شَعْرٌ",
                                "arti" => "Rambut",
                                "huruf" => array_unique(["شَ","عْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "جَبْهَةٌ",
                                "arti" => "Kening",
                                "huruf" => array_unique(["جَ","بْ","هَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "أُذُنٌ",
                                "arti" => "Telinga",
                                "huruf" => array_unique(["أُ","ذُ","نٌ"])
                            ],
                            [
                                "kata_arab" => "عَارِضٌ",
                                "arti" => "Jambang",
                                "huruf" => array_unique(["عَ","ا","رِ","ضٌ"])
                            ],
                            [
                                "kata_arab" => "عَيْنٌ",
                                "arti" => "Mata",
                                "huruf" => array_unique(["عَ","يْ","نٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 31')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 31");
                        $data['tema'] = "Pertemuan 5";
                        $data['materi'] = "Mufrodat 31";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَنْفٌ",
                                "arti" => "Hidung",
                                "huruf" => array_unique(["أَ","نْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "خَدٌّ",
                                "arti" => "Pipi",
                                "huruf" => array_unique(["سِ","نٌّ","خَ","دٌّ"])
                            ],
                            [
                                "kata_arab" => "سِنٌّ",
                                "arti" => "Gigi",
                                "huruf" => array_unique(["سِ","نٌّ","خَ","دٌّ"])
                            ],
                            [
                                "kata_arab" => "حَاجِبٌ",
                                "arti" => "Alis",
                                "huruf" => array_unique(["حَ","ا","جِ","بٌ"])
                            ],
                            [
                                "kata_arab" => "هُدْبٌ",
                                "arti" => "Bulu mata",
                                "huruf" => array_unique(["هُ","دْ","بٌ","فَ","مٌّ"])
                            ],
                            [
                                "kata_arab" => "فَمٌّ",
                                "arti" => "Mulut",
                                "huruf" => array_unique(["هُ","دْ","بٌ","فَ","مٌّ"])
                            ],
                            [
                                "kata_arab" => "لِسَانٌ",
                                "arti" => "Lisan",
                                "huruf" => array_unique(["لِ","سَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "شَارِبٌ",
                                "arti" => "Kumis",
                                "huruf" => array_unique(["شَ","ا","رِ","بٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 32')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 32");
                        $data['tema'] = "Pertemuan 5";
                        $data['materi'] = "Mufrodat 32";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "لِحْيَةٌ",
                                "arti" => "Jenggot",
                                "huruf" => array_unique(["لِ","حْ","يَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "دَمْعٌ",
                                "arti" => "Air mata",
                                "huruf" => array_unique(["دَ","مْ","عٌ"])
                            ],
                            [
                                "kata_arab" => "ذَقَنٌ",
                                "arti" => "Dagu",
                                "huruf" => array_unique(["ذَ","قَ","نٌ"])
                            ],
                            [
                                "kata_arab" => "شَفَةٌ",
                                "arti" => "Bibir",
                                "huruf" => array_unique(["شَ","فَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "شَفَةٌ عُلْيَا",
                                "arti" => "Bibir atas",
                                "huruf" => array_unique(["شَ","فَ","ةٌ","_","عُ","لْ","يَ","ا"])
                            ],
                            [
                                "kata_arab" => "شَفَةٌ سُفْلَى",
                                "arti" => "Bibir bawah",
                                "huruf" => array_unique(["شَ","فَ","ةٌ","_","سُ","فْ","لَ","ى"])
                            ],
                            [
                                "kata_arab" => "مُخٌّ",
                                "arti" => "Otak",
                                "huruf" => array_unique(["مُ","خٌّ","عُ","نُ","قٌ"])
                            ],
                            [
                                "kata_arab" => "عُنُقٌ",
                                "arti" => "Leher",
                                "huruf" => array_unique(["مُ","خٌّ","عُ","نُ","قٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 33')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 33");
                        $data['tema'] = "Pertemuan 5";
                        $data['materi'] = "Mufrodat 33";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "بَدَنٌ",
                                "arti" => "Badan",
                                "huruf" => array_unique(["يَ","دٌ","بَ","دَ","نٌ"])
                            ],
                            [
                                "kata_arab" => "يَدٌ",
                                "arti" => "Tangan",
                                "huruf" => array_unique(["يَ","دٌ","بَ","دَ","نٌ"])
                            ],
                            [
                                "kata_arab" => "ذِرَاعٌ",
                                "arti" => "Satu lengan",
                                "huruf" => array_unique(["ذِ","رَ","ا","عٌ"])
                            ],
                            [
                                "kata_arab" => "بَطْنٌ",
                                "arti" => "Perut",
                                "huruf" => array_unique(["بَ","طْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "حَقْوٌ",
                                "arti" => "Pinggang",
                                "huruf" => array_unique(["حَ","قْ","وٌ"])
                            ],
                            [
                                "kata_arab" => "كَتِفٌ",
                                "arti" => "Pundak",
                                "huruf" => array_unique(["كَ","تِ","فٌ"])
                            ],
                            [
                                "kata_arab" => "ظَهْرٌ",
                                "arti" => "Punggung",
                                "huruf" => array_unique(["ظَ","هْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "صَدْرٌ",
                                "arti" => "Hati",
                                "huruf" => array_unique(["صَ","دْ","رٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 34')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 34");
                        $data['tema'] = "Pertemuan 5";
                        $data['materi'] = "Mufrodat 34";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سُرَّةٌ",
                                "arti" => "Pusar",
                                "huruf" => array_unique(["سُ","رَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "رُكْبَةٌ",
                                "arti" => "Lutut",
                                "huruf" => array_unique(["رُ","كْ","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مِرْفَقٌ",
                                "arti" => "Siku",
                                "huruf" => array_unique(["مِ","رْ","فَ","قٌ"])
                            ],
                            [
                                "kata_arab" => "إِبْطٌ",
                                "arti" => "Ketiak",
                                "huruf" => array_unique(["إِ","بْ","طٌ"])
                            ],
                            [
                                "kata_arab" => "رِجْلٌ",
                                "arti" => "Kaki",
                                "huruf" => array_unique(["رِ","جْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "فَخِذٌ",
                                "arti" => "Paha",
                                "huruf" => array_unique(["فَ","خِ","ذٌ"])
                            ],
                            [
                                "kata_arab" => "سَاقٌّ",
                                "arti" => "Betis",
                                "huruf" => array_unique(["سَ","ا","قٌّ"])
                            ],
                            // [
                            //     "kata_arab" => "قَدَمٌ",
                            //     "arti" => "Kaki",
                            //     "huruf" => array_unique(["قَ","دَ","مٌ"])
                            // ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 35')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 35");
                        $data['tema'] = "Pertemuan 5";
                        $data['materi'] = "Mufrodat 35";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "كَعْبٌ",
                                "arti" => "Mata kaki",
                                "huruf" => array_unique(["كَ","عْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "كَاحِلٌ",
                                "arti" => "Pergelangan kaki",
                                "huruf" => array_unique(["كَ","ا","حِ","لٌ"])
                            ],
                            [
                                "kata_arab" => "عَقِبٌ",
                                "arti" => "Tumit",
                                "huruf" => array_unique(["عَ","قِ","بٌ"])
                            ],
                            [
                                "kata_arab" => "ظُفْرٌ",
                                "arti" => "Kuku",
                                "huruf" => array_unique(["ظُ","فْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مَسَامٌ",
                                "arti" => "Pori-pori",
                                "huruf" => array_unique(["مَ","سَ","ا","مٌ"])
                            ],
                            [
                                "kata_arab" => "شَامَةٌ",
                                "arti" => "Tahi lalat",
                                "huruf" => array_unique(["شَ","ا","مَ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 36')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 36");
                        $data['tema'] = "Pertemuan 5";
                        $data['materi'] = "Mufrodat 36";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "إِبْهَامٌ",
                                "arti" => "Ibu jari",
                                "huruf" => array_unique(["إِ","بْ","هَ","ا","مٌ"])
                            ],
                            [
                                "kata_arab" => "سَبَابَةٌ",
                                "arti" => "Jari telunjuk",
                                "huruf" => array_unique(["سَ","بَ","ا","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "وُسْطَى",
                                "arti" => "Jari tengah",
                                "huruf" => array_unique(["وُ","سْ","طَ","ى"])
                            ],
                            [
                                "kata_arab" => "بِنْصِرٌ",
                                "arti" => "Jari manis",
                                "huruf" => array_unique(["بِ","نْ","صِ","رٌ"])
                            ],
                            [
                                "kata_arab" => "خِنْصِرٌ",
                                "arti" => "Jari kelingking",
                                "huruf" => array_unique(["خِ","نْ","صِ","رٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 37')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 37");
                        $data['tema'] = "Pertemuan 6";
                        $data['materi'] = "Mufrodat 37";
                        $data['title'] = "Pekerjaan Tentang Anggota Tubuh Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 37");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "نَظَرَ-يَنْظُرُ-نَظْرًا",
                                "arti" => "Melihat",
                                "huruf" => array_unique(["نَ","ظَ","رَ","-","يَ","نْ","ظُ","رُ","-","نَ","ظْ","رً","ا"])
                            ],
                            [
                                "kata_arab" => "سَمِعَ-يَسْمَعُ-سَمْعًا",
                                "arti" => "Mendengar",
                                "huruf" => array_unique(["سَ","مِ","عَ","-","يَ","سْ","مَ","عُ","-","سَ","مْ","عً","ا"])
                            ],
                            [
                                "kata_arab" => "شَمَّ-يَشُمُّ-شَمًّا",
                                "arti" => "Mencium (hidung)",
                                "huruf" => array_unique(["شَ","مَّ","-","يَ","شُ","مُّ","-","شَ","مًّ","ا"])
                            ],
                            [
                                "kata_arab" => "قَبَّلَ-يُقَبِّلُ-تَقْبِيْلاً",
                                "arti" => "Mencium (bibir)",
                                "huruf" => array_unique(["قَ","بَّ","لَ","-","يُ","قَ","بِّ","لُ","-","تَ","قْ","بِ","يْ","لاً"])
                            ],
                            [
                                "kata_arab" => "حَسَّ-يَحُسُّ-حَسًّا",
                                "arti" => "Merasakan",
                                "huruf" => array_unique(["حَ","سَّ","-","يَ","حُ","سُّ","-","حَ","سًّ","ا"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 38')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 38");
                        $data['tema'] = "Pertemuan 6";
                        $data['materi'] = "Mufrodat 38";
                        $data['title'] = "Pekerjaan Tentang Anggota Tubuh Bag. 2";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 38");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "ضَرَبَ-يَضْرِبُ-ضَرْبًا",
                                "arti" => "Memukul",
                                "huruf" => array_unique(["ضَ","رَ","بَ","-","يَ","ضْ","رِ","بُ","-","ضَ","رْ","بً","ا"])
                            ],
                            [
                                "kata_arab" => "أَخَذَ-يَأْخُذُ-أَخْذًا",
                                "arti" => "Mengambil",
                                "huruf" => array_unique(["أَ","خَ","ذَ","-","يَ","أْ","خُ","ذُ","-","أَ","خْ","ذً","ا"])
                            ],
                            [
                                "kata_arab" => "قَرَصَ-يَقْرُصُ-قَرْصًا",
                                "arti" => "Mencubit",
                                "huruf" => array_unique(["قَ","رَ","صَ","-","يَ","قْ","رُ","صُ","-","قَ","رْ","صً","ا"])
                            ],
                            [
                                "kata_arab" => "بَصَقَ-يَبْصُقُ-بَصْقٌ",
                                "arti" => "Meludah",
                                "huruf" => array_unique(["بَ","صَ","قَ","-","يَ","بْ","صُ","قُ","-","بَ","صْ","قٌ"])
                            ],
                            [
                                "kata_arab" => "تَنَفَّسَ-يَتَنَفَّسُ-تَنَفُّسًا",
                                "arti" => "Bernafas",
                                "huruf" => array_unique(["تَ","نَ","فَّ","سَ","-","يَ","تَ","نَ","فَّ","سُ","-","تَ","نَ","فُّ","سً","ا"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 39')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 39");
                        $data['tema'] = "Pertemuan 6";
                        $data['materi'] = "Mufrodat 39";
                        $data['title'] = "Pekerjaan Tentang Anggota Tubuh Bag. 3";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 39");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "رَفَسَ-يَرْفُسُ-رَفْسًا",
                                "arti" => "Menendang",
                                "huruf" => array_unique(["رَ","فَ","سَ","-","يَ","رْ","فُ","سُ","-","رَ","فْ","سً","ا"])
                            ],
                            [
                                "kata_arab" => "لَمَسَ-يَلْمِسُ-لَمْسًا",
                                "arti" => "Menyentuh",
                                "huruf" => array_unique(["لَ","مَ","سَ","-","يَ","لْ","مِ","سُ","-","لَ","مْ","سً","ا"])
                            ],
                            [
                                "kata_arab" => "تَفَكَّرَ-يَتَفَكَّرُ-تَفَكُّرًا",
                                "arti" => "Memikirkan",
                                "huruf" => array_unique(["تَ","فَ","كَّ","رَ","-","يَ","تَ","فَ","كَّ","رُ","-","تَ","فَ","كُّ","رً","ا"])
                            ],
                            [
                                "kata_arab" => "كَتَبَ-يَكْتُبُ-كِتَابَةً",
                                "arti" => "Menulis",
                                "huruf" => array_unique(["كَ","تَ","بَ","-","يَ","كْ","تُ","بُ","-","كِ","تَ","ا","بَ","ةً"])
                            ],
                            [
                                "kata_arab" => "قَرَأَ-يَقْرَأُ-قِرَاءَةً",
                                "arti" => "Membaca",
                                "huruf" => array_unique(["قَ","رَ","أَ","-","يَ","قْ","رَ","أُ","-","قِ","رَ","ا","ءَ","ةً"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 40')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 40");
                        $data['tema'] = "Pertemuan 6";
                        $data['materi'] = "Mufrodat 40";
                        $data['title'] = "Pekerjaan Tentang Anggota Tubuh Bag. 4";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 40");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "فَكَّرَ-يُفَكِّرُ-تَفْكِيْرًا",
                                "arti" => "Memikirkan",
                                "huruf" => array_unique(["فَ","كَّ","رَ","-","يُ","فَ","كِّ","رُ","-","تَ","فْ","كِ","يْ","رً","ا"])
                            ],
                            [
                                "kata_arab" => "تَلاَ-يَتْلُو-تِلاَوَةً",
                                "arti" => "Membaca",
                                "huruf" => array_unique(["تَ","لاَ","-","يَ","تْ","لُ","و","-","تِ","لاَ","وَ","ةً"])
                            ],
                            [
                                "kata_arab" => "حَكَّ-يَحِكُّ-حِكًّا",
                                "arti" => "Menggaruk",
                                "huruf" => array_unique(["حَ","كَّ","-","يَ","حِ","كُّ","-","حِ","كًّ","ا"])
                            ],
                            [
                                "kata_arab" => "دَلَّكَ-يُدَلِّكُ-تَدْلِيْكًا",
                                "arti" => "Memijat",
                                "huruf" => array_unique(["دَ","لَّ","كَ","-","يُ","دَ","لِّ","كُ","-","تَ","دْ","لِ","يْ","كً","ا"])
                            ],
                            [
                                "kata_arab" => "نَفَخَ-يَنْفَخُ-نَفْخًا",
                                "arti" => "Meniup",
                                "huruf" => array_unique(["نَ","فَ","خَ","-","يَ","نْ","فَ","خُ","-","نَ","فْ","خً","ا"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 41')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 41");
                        $data['tema'] = "Pertemuan 6";
                        $data['materi'] = "Mufrodat 41";
                        $data['title'] = "Pekerjaan Tentang Anggota Tubuh Bag. 5";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 41");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "تَأَمَّلَ-يَتَأَمَّلُ-تَأَمُّلاً",
                                "arti" => "Berangan-angan",
                                "huruf" => array_unique(["تَ","أَ","مَّ","لَ","-","يَ","تَ","أَ","مَّ","لُ","-","تَ","أَ","مُّ","لاً"])
                            ],
                            [
                                "kata_arab" => "مَشَطَ-يَمْشُطُ-مَشْطًا",
                                "arti" => "Menyisir",
                                "huruf" => array_unique(["مَ","شَ","طَ","-","يَ","مْ","شُ","طُ","-","مَ","شْ","طً","ا"])
                            ],
                            [
                                "kata_arab" => "قَالَ-يَقُوْلُ-قَوْلاً",
                                "arti" => "Berkata",
                                "huruf" => array_unique(["قَ","ا","لَ","-","يَ","قُ","وْ","لُ","-","قَ","وْ","لاً"])
                            ],
                            [
                                "kata_arab" => "تَكَلَّمَ-يَتَكَلَّمُ-تَكَلُّماً",
                                "arti" => "Berbicara",
                                "huruf" => array_unique(["تَ","كَ","لَّ","مَ","-","يَ","تَ","كَ","لَّ","مُ","-","تَ","كَ","لُّ","ماً"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 42')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 42");
                    
                        $data['tema'] = "Pertemuan 6";
                        $data['materi'] = "Mufrodat 42";
                        $data['title'] = "Keluarga Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 42");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَبٌ",
                                "arti" => "Ayah",
                                "huruf" => array_unique(["أَ","بٌ","أُ","مٌّ"])
                            ],
                            [
                                "kata_arab" => "أُمٌّ",
                                "arti" => "Ibu",
                                "huruf" => array_unique(["أَ","بٌ","أُ","مٌّ"])
                            ],
                            [
                                "kata_arab" => "جَدٌّ",
                                "arti" => "Kakek",
                                "huruf" => array_unique(["جَ","دٌّ","جَ","دَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "جَدَّةٌ",
                                "arti" => "Nenek",
                                "huruf" => array_unique(["جَ","دٌّ","جَ","دَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "زَوْجٌ",
                                "arti" => "Suami",
                                "huruf" => array_unique(["زَ","وْ","جٌ","زَ","وْ","جَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "زَوْجَةٌ",
                                "arti" => "Istri",
                                "huruf" => array_unique(["زَ","وْ","جٌ","زَ","وْ","جَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "اِبْنٌ",
                                "arti" => "Anak (lk)",
                                "huruf" => array_unique(["اِ","بْ","نٌ","بِ","نْ","تٌ"])
                            ],
                            [
                                "kata_arab" => "بِنْتٌ",
                                "arti" => "Anak (pr)",
                                "huruf" => array_unique(["اِ","بْ","نٌ","بِ","نْ","تٌ"])
                            ],
                            [
                                "kata_arab" => "حَفِيْدٌ",
                                "arti" => "Cucu (lk)",
                                "huruf" => array_unique(["حَ","فِ","يْ","دٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 43')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 43");
                    
                        $data['tema'] = "Pertemuan 6";
                        $data['materi'] = "Mufrodat 43";
                        $data['title'] = "Keluarga Bag. 2";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 43");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "حَفِيْدَةٌ",
                                "arti" => "Cucu (pr)",
                                "huruf" => array_unique(["حَ","فِ","يْ","دَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "عَمٌّ",
                                "arti" => "Paman (dr Bapak)",
                                "huruf" => array_unique(["عَ","مٌّ","عَ","مَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "عَمَّةٌ",
                                "arti" => "Bibi (dr Bapak)",
                                "huruf" => array_unique(["عَ","مٌّ","عَ","مَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "خَالٌ",
                                "arti" => "Paman (dr Ibu)",
                                "huruf" => array_unique(["خَ","ا","لٌ","خَ","ا","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "خَالَةٌ",
                                "arti" => "Bibi (dr Ibu)",
                                "huruf" => array_unique(["خَ","ا","لٌ","خَ","ا","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "أَخٌ",
                                "arti" => "Saudara (lk)",
                                "huruf" => array_unique(["أَ","خٌ","أُ","خْ","تٌ"])
                            ],
                            [
                                "kata_arab" => "أُخْتٌ",
                                "arti" => "Saudara (pr)",
                                "huruf" => array_unique(["أَ","خٌ","أُ","خْ","تٌ"])
                            ],
                            [
                                "kata_arab" => "أَخٌ كَبِيْرٌ",
                                "arti" => "Kakak (lk)",
                                "huruf" => array_unique(["أَ","خٌ","_","كَ","بِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "أَخٌ صَغِيْرٌ",
                                "arti" => "Adik (lk)",
                                "huruf" => array_unique(["أَ","خٌ","_","صَ","غِ","يْ","رٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 44')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 44");
                    
                        $data['tema'] = "Pertemuan 6";
                        $data['materi'] = "Mufrodat 44";
                        $data['title'] = "Keluarga Bag. 3";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 44");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أُخْتٌ كَبِيْرَةٌ",
                                "arti" => "Kakak (pr)",
                                "huruf" => array_unique(["أُ","خْ","تٌ","_","كَ","بِ","يْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "أُخْتٌ صَغِيْرَةٌ",
                                "arti" => "Adik (pr)",
                                "huruf" => array_unique(["أُ","خْ","تٌ","_","صَ","غِ","يْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "أَخٌ شَقِيْقٌ",
                                "arti" => "Saudara (lk) kandung",
                                "huruf" => array_unique(["أَ","خٌ","_","شَ","قِ","يْ","قٌ"])
                            ],
                            [
                                "kata_arab" => "أُخْتٌ شَقِيْقَةٌ",
                                "arti" => "Saudara (pr) kandung",
                                "huruf" => array_unique(["أُ","خْ","تٌ","_","شَ","قِ","يْ","قَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "رَبِيْبٌ",
                                "arti" => "Anak tiri (lk)",
                                "huruf" => array_unique(["رَ","بِ","يْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "رَبِيْبَةٌ",
                                "arti" => "Anak tiri (pr)",
                                "huruf" => array_unique(["رَ","بِ","يْ","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "عَزَبٌ",
                                "arti" => "Bujang",
                                "huruf" => array_unique(["عَ","زَ","بٌ"])
                            ],
                            [
                                "kata_arab" => "عَذْرَاءُ",
                                "arti" => "Seorang perawan",
                                "huruf" => array_unique(["عَ","ذْ","رَ","ا","ءُ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 45')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 45");
                        $data['tema'] = "Pertemuan 6";
                        $data['materi'] = "Mufrodat 45";
                        $data['title'] = "Keluarga Bag. 4";
                        $data['latihan'] = $this->latihan_mufrodat("latihan_hifdzi_1", $id, "Mufrodat 45");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَرْمَلٌ",
                                "arti" => "Duda",
                                "huruf" => array_unique(["أَ","رْ","مَ","لٌ","أَ","رْ","مَ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "أَرْمَلَةٌ",
                                "arti" => "Janda",
                                "huruf" => array_unique(["أَ","رْ","مَ","لٌ","أَ","رْ","مَ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "خَتَنٌ",
                                "arti" => "Menantu (lk)",
                                "huruf" => array_unique(["خَ","تَ","نٌ","خَ","تَ","نَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "خَتَنَةٌ",
                                "arti" => "Menantu (pr)",
                                "huruf" => array_unique(["خَ","تَ","نٌ","خَ","تَ","نَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "حَمٌ",
                                "arti" => "Mertua (lk)",
                                "huruf" => array_unique(["حَ","مٌ","حَ","مَ","ا","ةٌ"])
                            ],
                            [
                                "kata_arab" => "حَمَاةٌ",
                                "arti" => "Mertua (pr)",
                                "huruf" => array_unique(["حَ","مٌ","حَ","مَ","ا","ةٌ"])
                            ],
                            [
                                "kata_arab" => "شَابٌّ",
                                "arti" => "Pemuda",
                                "huruf" => array_unique(["شَ","ا","بٌّ","شَ","ا","بَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "شَابَّةٌ",
                                "arti" => "Pemudi",
                                "huruf" => array_unique(["شَ","ا","بٌّ","شَ","ا","بَّ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 46')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 46");
                        $data['tema'] = "Pertemuan 7";
                        $data['materi'] = "Mufrodat 46";
                        $data['title'] = "Pekerjaan Tentang Keluarga Bag. 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "رَبَّي-يُرَبِّي-تَرْبِيَّةً",
                                "arti" => "Mendidik",
                                "huruf" => array_unique(["رَ","بَّ","ي","-","يُ","رَ","بِّ","ي","-","تَ","رْ","بِ","يَّ","ةً"])
                            ],
                            [
                                "kata_arab" => "حَضَنَ-يَحْضُنُ-حَضَانَةً",
                                "arti" => "Mengasuh",
                                "huruf" => array_unique(["حَ","ضَ","نَ","-","يَ","حْ","ضُ","نُ","-","حَ","ضَ","ا","نَ","ةً"])
                            ],
                            [
                                "kata_arab" => "أَحَبَّ-يُحِبُّ-مَحَبَّةً",
                                "arti" => "Menyukai",
                                "huruf" => array_unique(["أَ","حَ","بَّ","-","يُ","حِ","بُّ","-","مَ","حَ","بَّ","ةً"])
                            ],
                            [
                                "kata_arab" => "رَحِمَ-يَرْحَمُ-رَحْمَةً",
                                "arti" => "Menyayangi",
                                "huruf" => array_unique(["رَ","حِ","مَ","-","يَ","رْ","حَ","مُ","-","رَ","حْ","مَ","ةً"])
                            ],
                            [
                                "kata_arab" => "اِحْتَرَمَ-يَحْتَرِمُ-اِحْتِرَامًا",
                                "arti" => "Menghormati",
                                "huruf" => array_unique(["اِ","حْ","تَ","رَ","مَ","-","يَ","حْ","تَ","رِ","مُ","-","اِ","حْ","تِ","رَ","ا","مً","ا"])
                            ],
                            [
                                "kata_arab" => "جَرَحَ-يَجْرَحُ-جَرْحًا",
                                "arti" => "Melukai",
                                "huruf" => array_unique(["جَ","رَ","حَ","-","يَ","جْ","رَ","حُ","-","جَ","رْ","حً","ا"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 47')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 47");
                        $data['tema'] = "Pertemuan 7";
                        $data['materi'] = "Mufrodat 47";
                        $data['title'] = "Pekerjaan Tentang Keluarga Bag. 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَهَانَ-يُهِيْنُ-إِهَانَةً",
                                "arti" => "Menghina",
                                "huruf" => array_unique(["أَ","هَ","ا","نَ","-","يُ","هِ","يْ","نُ","-","إِ","هَ","ا","نَ","ةً"])
                            ],
                            [
                                "kata_arab" => "دَعَا-يَدْعُو-دَعْوَةً",
                                "arti" => "Mengajak",
                                "huruf" => array_unique(["دَ","عَ","ا","-","يَ","دْ","عُ","و","-","دَ","عْ","وَ","ةً"])
                            ],
                            [
                                "kata_arab" => "أَمَرَ-يَأْمُرُ-أَمْرًا",
                                "arti" => "Memerintah",
                                "huruf" => array_unique(["أَ","مَ","رَ","-","يَ","أْ","مُ","رُ","-","أَ","مْ","رً","ا"])
                            ],
                            // [
                            //     "kata_arab" => "رَضِعَ-يَرْضَعُ-رَضَاعَةً",
                            //     "arti" => "Menyusui",
                            //     "huruf" => array_unique(["رَ","ضِ","عَ","-","يَ","رْ","ضَ","عُ","-","رَ","ضَ","ا","عَ","ةً"])
                            // ],
                            [
                                "kata_arab" => "أَرْضَعَ-يُرْضِعُ-إِرْضَاعًا",
                                "arti" => "Menyusui",
                                "huruf" => array_unique(["أَ","رْ","ضَ","عَ","-","يُ","رْ","ضِ","عُ","-","إِ","رْ","ضَ","ا","عً","ا"])
                            ],
                            [
                                "kata_arab" => "نَصَحَ-يَنْصَحُ-نَصِيْحَةً",
                                "arti" => "Menasehati",
                                "huruf" => array_unique(["نَ","صَ","حَ","-","يَ","نْ","صَ","حُ","-","نَ","صِ","يْ","حَ","ةً"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 48')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 48");
                        $data['tema'] = "Pertemuan 7";
                        $data['materi'] = "Mufrodat 48";
                        $data['title'] = "Pekerjaan Tentang Keluarga Bag. 3";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "نَصَرَ-يَنْصُرُ-نَصْرًا",
                                "arti" => "Menolong",
                                "huruf" => array_unique(["نَ","صَ","رَ","-","يَ","نْ","صُ","رُ","-","نَ","صْ","رً","ا"])
                            ],
                            [
                                "kata_arab" => "بَلَغَ-يَبْلُغُ-بُلُوغًا",
                                "arti" => "Menyampaikan",
                                "huruf" => array_unique(["بَ","لَ","غَ","-","يَ","بْ","لُ","غُ","-","بُ","لُ","و","غً","ا"])
                            ],
                            [
                                "kata_arab" => "مَزَحَ-يَمْزَحُ-مِزَاحًا",
                                "arti" => "Bercanda",
                                "huruf" => array_unique(["مَ","زَ","حَ","-","يَ","مْ","زَ","حُ","-","مِ","زَ","ا","حً","ا"])
                            ],
                            [
                                "kata_arab" => "اِعْتَرَفَ-يَعْتَرِفُ-اِعْتِرَافًا",
                                "arti" => "Mengakui",
                                "huruf" => array_unique(["اِ","عْ","تَ","رَ","فَ","-","يَ","عْ","تَ","رِ","فُ","-","اِ","عْ","تِ","رَ","ا","فً","ا"])
                            ],
                            [
                                "kata_arab" => "رَجَى-يَرْجُو-رَجَاءً",
                                "arti" => "Mengharapkan",
                                "huruf" => array_unique(["رَ","جَ","ى","-","يَ","رْ","جُ","و","-","رَ","جَ","ا","ءً"])
                            ],
                            [
                                "kata_arab" => "صَارَ-يَصِيْرُ-صَيْرًا",
                                "arti" => "Menjadi",
                                "huruf" => array_unique(["صَ","ا","رَ","-","يَ","صِ","يْ","رُ","-","صَ","يْ","رً","ا"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 49')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 49");
                        $data['tema'] = "Pertemuan 7";
                        $data['materi'] = "Mufrodat 49";
                        $data['title'] = "Pekerjaan Tentang Keluarga Bag. 4";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "اِحْتَاجَ-يَحْتَاجُ-اِحْتِيَاجًا",
                                "arti" => "Membutuhkan",
                                "huruf" => array_unique(["اِ","حْ","تَ","ا","جَ","-","يَ","حْ","تَ","ا","جُ","-","اِ","حْ","تِ","يَ","ا","جً","ا"])
                            ],
                            [
                                "kata_arab" => "قَلَقَ-يَقْلَقُ-قَلَقًا",
                                "arti" => "Galau",
                                "huruf" => array_unique(["قَ","لَ","قَ","-","يَ","قْ","لَ","قُ","-","قَ","لَ","قً","ا"])
                            ],
                            [
                                "kata_arab" => "كَلَّفَ-يُكَلِّفُ-تَكْلِيْفًا",
                                "arti" => "Memaksa",
                                "huruf" => array_unique(["كَ","لَّ","فَ","-","يُ","كَ","لِّ","فُ","-","تَ","كْ","لِ","يْ","فً","ا"])
                            ],
                            [
                                "kata_arab" => "صَاحَ-يَصِيْحُ-صَيْحًا",
                                "arti" => "Berteriak",
                                "huruf" => array_unique(["صَ","ا","حَ","-","يَ","صِ","يْ","حُ","-","صَ","يْ","حً","ا"])
                            ],
                            [
                                "kata_arab" => "ضَحِكَ-يَضْحَكُ-ضَحْكًا",
                                "arti" => "Tertawa",
                                "huruf" => array_unique(["ضَ","حِ","كَ","-","يَ","ضْ","حَ","كُ","-","ضَ","حْ","كً","ا"])
                            ],
                            [
                                "kata_arab" => "سَكَتَ-يَسْكُتُ-سُكُوْتًا",
                                "arti" => "Diam",
                                "huruf" => array_unique(["سَ","كَ","تَ","-","يَ","سْ","كُ","تُ","سُ","وْ","تً","ا"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 50')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 50");
                        $data['tema'] = "Pertemuan 8";
                        $data['materi'] = "Mufrodat 50";
                        $data['title'] = "Akhlak Manusia Bag. 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مُتَوَاضِعٌ",
                                "arti" => "Rendah hati",
                                "huruf" => array_unique(["مُ","تَ","وَ","ا","ضِ","عٌ"])
                            ],
                            [
                                "kata_arab" => "حَكِيْمٌ",
                                "arti" => "Bijaksana",
                                "huruf" => array_unique(["حَ","كِ","يْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "صَابِرٌ",
                                "arti" => "Sabar",
                                "huruf" => array_unique(["صَ","ا","بِ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مُتَوَحِّشٌ",
                                "arti" => "Liar",
                                "huruf" => array_unique(["مُ","تَ","وَ","حِّ","شٌ"])
                            ],
                            [
                                "kata_arab" => "مُتَكَبِّرٌ",
                                "arti" => "Sombong",
                                "huruf" => array_unique(["مُ","تَ","كَ","بِّ","رٌ"])
                            ],
                            [
                                "kata_arab" => "غَضْبَانُ",
                                "arti" => "Marah",
                                "huruf" => array_unique(["غَ","ضْ","بَ","ا","نُ"])
                            ],
                            [
                                "kata_arab" => "مِغْنَاجٌ",
                                "arti" => "Genit",
                                "huruf" => array_unique(["مِ","غْ","نَ","ا","جٌ"])
                            ],
                            [
                                "kata_arab" => "نَهَّامٌ",
                                "arti" => "Rakus",
                                "huruf" => array_unique(["نَ","هَّ","ا","مٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 51')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 51");
                        $data['tema'] = "Pertemuan 8";
                        $data['materi'] = "Mufrodat 51";
                        $data['title'] = "Akhlak Manusia Bag. 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَمِيْنٌ",
                                "arti" => "Dipercaya",
                                "huruf" => array_unique(["أَ","مِ","يْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "صَادِقٌ",
                                "arti" => "Jujur",
                                "huruf" => array_unique(["صَ","ا","دِ","قٌ"])
                            ],
                            [
                                "kata_arab" => "كَاذِبٌ",
                                "arti" => "Pembohong",
                                "huruf" => array_unique(["كَ","ا","ذِ","بٌ"])
                            ],
                            [
                                "kata_arab" => "مُجْتَهِدٌ",
                                "arti" => "Bersungguh-sungguh",
                                "huruf" => array_unique(["مُ","جْ","تَ","هِ","دٌ"])
                            ],
                            [
                                "kata_arab" => "كَسْلَانٌ",
                                "arti" => "Malas",
                                "huruf" => array_unique(["كَ","سْ","لَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "حَسُوْدٌ",
                                "arti" => "Dengki",
                                "huruf" => array_unique(["حَ","سُ","وْ","دٌ"])
                            ],
                            [
                                "kata_arab" => "سَخِيٌّ",
                                "arti" => "Dermawan",
                                "huruf" => array_unique(["سَ","خِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "بَخِيْلٌ",
                                "arti" => "Pelit",
                                "huruf" => array_unique(["بَ","خِ","يْ","لٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 52')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 52");
                        $data['tema'] = "Pertemuan 8";
                        $data['materi'] = "Mufrodat 52";
                        $data['title'] = "Akhlak Manusia Bag. 3";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "شُجَاعٌ",
                                "arti" => "Berani",
                                "huruf" => array_unique(["شُ","جَ","ا","عٌ"])
                            ],
                            [
                                "kata_arab" => "جَبَّانٌ",
                                "arti" => "Penakut",
                                "huruf" => array_unique(["جَ","بَّ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "أَنِيْسٌ",
                                "arti" => "Ramah",
                                "huruf" => array_unique(["أَ","نِ","يْ","سٌ"])
                            ],
                            [
                                "kata_arab" => "مُشَاغِبٌ",
                                "arti" => "Nakal",
                                "huruf" => array_unique(["مُ","شَ","ا","غِ","بٌ"])
                            ],
                            [
                                "kata_arab" => "لَطِيْفٌ",
                                "arti" => "Imut",
                                "huruf" => array_unique(["لَ","طِ","يْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "جَمِيْلٌ",
                                "arti" => "Indah",
                                "huruf" => array_unique(["جَ","مِ","يْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "جَمِيْلَةٌ",
                                "arti" => "Cantik",
                                "huruf" => array_unique(["جَ","مِ","يْ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مَرَحٌ",
                                "arti" => "Ceria",
                                "huruf" => array_unique(["مَ","رَ","حٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 53')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 53");
                        $data['tema'] = "Pertemuan 8";
                        $data['materi'] = "Mufrodat 53";
                        $data['title'] = "Akhlak Manusia Bag. 4";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَنِيْقٌ",
                                "arti" => "Anggun",
                                "huruf" => array_unique(["أَ","نِ","يْ","قٌ"])
                            ],
                            [
                                "kata_arab" => "مُهْمِلٌ",
                                "arti" => "Ceroboh",
                                "huruf" => array_unique(["مُ","هْ","مِ","لٌ"])
                            ],
                            [
                                "kata_arab" => "خَشِنٌ",
                                "arti" => "Kasar",
                                "huruf" => array_unique(["خَ","شِ","نٌ"])
                            ],
                            [
                                "kata_arab" => "حَقُوْدٌ",
                                "arti" => "Pendengki",
                                "huruf" => array_unique(["حَ","قُ","وْ","دٌ"])
                            ],
                            [
                                "kata_arab" => "ثَرْثَارٌ",
                                "arti" => "Cerewet",
                                "huruf" => array_unique(["ثَ","رْ","ثَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "شَهِيْرٌ",
                                "arti" => "Terkenal",
                                "huruf" => array_unique(["شَ","هِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "عَاطِفِيٌّ",
                                "arti" => "Romantis",
                                "huruf" => array_unique(["عَ","ا","طِ","فِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "سَكُوْتٌ",
                                "arti" => "Pendiam",
                                "huruf" => array_unique(["سَ","كُ","وْ","تٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 54')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 54");
                        $data['tema'] = "Pertemuan 8";
                        $data['materi'] = "Mufrodat 54";
                        $data['title'] = "Akhlak Manusia Bag. 5";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مُدَلَّعٌ",
                                "arti" => "Manja",
                                "huruf" => array_unique(["مُ","دَ","لَّ","عٌ"])
                            ],
                            [
                                "kata_arab" => "أَنَانِيٌّ",
                                "arti" => "Egois",
                                "huruf" => array_unique(["أَ","نَ","ا","نِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "مُتَعَنِّتٌ",
                                "arti" => "Bandel",
                                "huruf" => array_unique(["مُ","تَ","عَ","نِّ","تٌ"])
                            ],
                            [
                                "kata_arab" => "حَسَّاسٌ",
                                "arti" => "Baperan",
                                "huruf" => array_unique(["حَ","سَّ","ا","سٌ"])
                            ],
                            [
                                "kata_arab" => "رَحُوْمٌ",
                                "arti" => "Penyayang",
                                "huruf" => array_unique(["رَ","حُ","وْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "مَاهِرٌ",
                                "arti" => "Pandai",
                                "huruf" => array_unique(["مَ","ا","هِ","رٌ"])
                            ],
                            [
                                "kata_arab" => "جَاهِلٌ",
                                "arti" => "Bodoh",
                                "huruf" => array_unique(["جَ","ا","هِ","لٌ"])
                            ],
                            [
                                "kata_arab" => "ذَكِيٌّ",
                                "arti" => "Cerdas",
                                "huruf" => array_unique(["ذَ","كِ","يٌّ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 55')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 55");
                        $data['tema'] = "Pertemuan 9";
                        $data['materi'] = "Mufrodat 55";
                        $data['title'] = "Akhlak Manusia Bag. 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "غَبِيٌّ",
                                "arti" => "Dungu",
                                "huruf" => array_unique(["غَ","بِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "طَفْشَانُ",
                                "arti" => "Sumpek",
                                "huruf" => array_unique(["طَ","فْ","شَ","ا","نُ"])
                            ],
                            [
                                "kata_arab" => "نَعْسَانُ",
                                "arti" => "Ngantuk",
                                "huruf" => array_unique(["نَ","عْ","سَ","ا","نُ"])
                            ],
                            [
                                "kata_arab" => "تَعْبَانُ",
                                "arti" => "Lelah",
                                "huruf" => array_unique(["تَ","عْ","بَ","ا","نُ"])
                            ],
                            [
                                "kata_arab" => "جَوْعَانُ",
                                "arti" => "Laper",
                                "huruf" => array_unique(["جَ","وْ","عَ","ا","نُ"])
                            ],
                            [
                                "kata_arab" => "عَطْشَانُ",
                                "arti" => "Haus",
                                "huruf" => array_unique(["عَ","طْ","شَ","ا","نُ"])
                            ],
                            [
                                "kata_arab" => "مَجْنُوْنٌ",
                                "arti" => "Gila",
                                "huruf" => array_unique(["مَ","جْ","نُ","وْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "أَصَمٌّ",
                                "arti" => "Tuli",
                                "huruf" => array_unique(["أَ","صَ","مٌّ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 56')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 56");
                        $data['tema'] = "Pertemuan 9";
                        $data['materi'] = "Mufrodat 56";
                        $data['title'] = "Akhlak Manusia Bag. 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَعْمَى",
                                "arti" => "Buta",
                                "huruf" => array_unique(["أَ","عْ","مَ","ى"])
                            ],
                            [
                                "kata_arab" => "أَبْكَمٌ",
                                "arti" => "Bisu",
                                "huruf" => array_unique(["أَ","بْ","كَ","مٌ"])
                            ],
                            [
                                "kata_arab" => "أَدْرَدُ",
                                "arti" => "Ompong",
                                "huruf" => array_unique(["أَ","دْ","رَ","دُ"])
                            ],
                            [
                                "kata_arab" => "غَنِيٌّ",
                                "arti" => "Kaya",
                                "huruf" => array_unique(["غَ","نِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "شَامِلٌ",
                                "arti" => "Sempurna",
                                "huruf" => array_unique(["شَ","ا","مِ","لٌ"])
                            ],
                            [
                                "kata_arab" => "بَسِيْطٌ",
                                "arti" => "Sederhana",
                                "huruf" => array_unique(["بَ","سِ","يْ","طٌ"])
                            ],
                            [
                                "kata_arab" => "مُبَذِّرٌ",
                                "arti" => "Mubadzir",
                                "huruf" => array_unique(["مُ","بَ","ذِّ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مُقْتَصِدٌ",
                                "arti" => "Hemat",
                                "huruf" => array_unique(["مُ","قْ","تَ","صِ","دٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 57')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 57");
                        $data['tema'] = "Pertemuan 9";
                        $data['materi'] = "Mufrodat 57";
                        $data['title'] = "Akhlak Manusia Bag. 3";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "عَادِلٌ",
                                "arti" => "Adil",
                                "huruf" => array_unique(["عَ","ا","دِ","لٌ"])
                            ],
                            [
                                "kata_arab" => "جَائِرٌ",
                                "arti" => "Tidak adil",
                                "huruf" => array_unique(["جَ","ا","ئِ","رٌ"])
                            ],
                            [
                                "kata_arab" => "قَوِيٌّ",
                                "arti" => "Kuat",
                                "huruf" => array_unique(["قَ","وِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "ضَعِيْفٌ",
                                "arti" => "Lemah",
                                "huruf" => array_unique(["ضَ","عِ","يْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "عَجُوْزٌ",
                                "arti" => "Tua",
                                "huruf" => array_unique(["عَ","جُ","وْ","زٌ"])
                            ],
                            [
                                "kata_arab" => "سَعِيْدٌ",
                                "arti" => "Senang",
                                "huruf" => array_unique(["سَ","عِ","يْ","دٌ"])
                            ],
                            [
                                "kata_arab" => "مَحْمُوْدٌ",
                                "arti" => "Baik",
                                "huruf" => array_unique(["مَ","حْ","مُ","وْ","دٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 58')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 58");
                        $data['tema'] = "Pertemuan 9";
                        $data['materi'] = "Mufrodat 58";
                        $data['title'] = "Akhlak Manusia Bag. 4";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مَذْمُوْمٌ",
                                "arti" => "Buruk",
                                "huruf" => array_unique(["مَ","ذْ","مُ","وْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "رَابِحٌ",
                                "arti" => "Beruntung",
                                "huruf" => array_unique(["رَ","ا","بِ","حٌ"])
                            ],
                            [
                                "kata_arab" => "خَاسِرٌ",
                                "arti" => "Merugi",
                                "huruf" => array_unique(["خَ","ا","سِ","رٌ"])
                            ],
                            [
                                "kata_arab" => "سَمِيْنٌ",
                                "arti" => "Gemuk",
                                "huruf" => array_unique(["سَ","مِ","يْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "هَزِيْلٌ",
                                "arti" => "Kurus",
                                "huruf" => array_unique(["هَ","زِ","يْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "مَشْغُوْلٌ",
                                "arti" => "Sibuk",
                                "huruf" => array_unique(["مَ","شْ","غُ","وْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "عَاطِلٌ",
                                "arti" => "Nganggur",
                                "huruf" => array_unique(["عَ","ا","طِ","لٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 59')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 59");
                        $data['tema'] = "Pertemuan 9";
                        $data['materi'] = "Mufrodat 59";
                        $data['title'] = "Akhlak Manusia Bag. 5";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "صِحَّةٌ",
                                "arti" => "Sehat",
                                "huruf" => array_unique(["صِ","حَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مَرِيْضٌ",
                                "arti" => "Sakit",
                                "huruf" => array_unique(["مَ","رِ","يْ","ضٌ"])
                            ],
                            [
                                "kata_arab" => "صَحِيْحٌ",
                                "arti" => "Benar",
                                "huruf" => array_unique(["صَ","حِ","يْ","حٌ"])
                            ],
                            [
                                "kata_arab" => "مُخْطِئٌ",
                                "arti" => "Salah",
                                "huruf" => array_unique(["مُ","خْ","طِ","ئٌ"])
                            ],
                            [
                                "kata_arab" => "فَائِزٌ",
                                "arti" => "Juara",
                                "huruf" => array_unique(["فَ","ا","ئِ","زٌ"])
                            ],
                            [
                                "kata_arab" => "مَغْلُوْبٌ",
                                "arti" => "Kalah",
                                "huruf" => array_unique(["مَ","غْ","لُ","وْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "وَاثِقٌ بِالنَّفْسِ",
                                "arti" => "Percaya diri",
                                "huruf" => array_unique(["وَ","ا","ثِ","قٌ","_","بِ","ال","نَّ","فْ","سِ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 60')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 60");
                        $data['tema'] = "Pertemuan 9";
                        $data['materi'] = "Mufrodat 60";
                        $data['title'] = "Akhlak Manusia Bag. 6";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مُسْتَعْجِلٌ",
                                "arti" => "Buru-buru",
                                "huruf" => array_unique(["مُ","سْ","تَ","عْ","جِ","لٌ"])
                            ],
                            [
                                "kata_arab" => "جَادٌّ",
                                "arti" => "Sungguh-sungguh",
                                "huruf" => array_unique(["جَ","ا","دٌّ"])
                            ],
                            [
                                "kata_arab" => "مُحْبِطٌ",
                                "arti" => "Frustasi",
                                "huruf" => array_unique(["مُ","حْ","بِ","طٌ"])
                            ],
                            [
                                "kata_arab" => "فُضُوْلِيٌّ",
                                "arti" => "Kepo",
                                "huruf" => array_unique(["فُ","ضُ","وْ","لِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "مُتَفَهِّمٌ",
                                "arti" => "Pengertian",
                                "huruf" => array_unique(["مُ","تَ","فَ","هِّ","مٌ"])
                            ],
                            [
                                "kata_arab" => "مُبَالِغٌ",
                                "arti" => "Lebay",
                                "huruf" => array_unique(["مُ","بَ","ا","لِ","غٌ"])
                            ],
                            [
                                "kata_arab" => "قَالِقٌ",
                                "arti" => "Galau",
                                "huruf" => array_unique(["قَ","ا","لِ","قٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 61')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 61");
                        $data['tema'] = "Pertemuan 10";
                        $data['materi'] = "Mufrodat 61";
                        $data['title'] = "Perlengkapan Rumah Bag. 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "جِدَارٌ",
                                "arti" => "Dinding",
                                "huruf" => array_unique(["جِ","دَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "سُوْرٌ",
                                "arti" => "Pagar",
                                "huruf" => array_unique(["سُ","وْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "صُوْرَةٌ",
                                "arti" => "Gambar",
                                "huruf" => array_unique(["صُ","وْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَاعَةٌ",
                                "arti" => "Jam",
                                "huruf" => array_unique(["سَ","ا","عَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَاعَةُ الْجِدَارِ",
                                "arti" => "Jam dinding",
                                "huruf" => array_unique(["سَ","ا","عَ","ةُ","_","الْ","جِ","دَ","ا","رِ"])
                            ],
                            [
                                "kata_arab" => "طَاوِلَةٌ",
                                "arti" => "Meja",
                                "huruf" => array_unique(["طَ","ا","وِ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "كُرْسِيٌّ",
                                "arti" => "Kursi",
                                "huruf" => array_unique(["كُ","رْ","سِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "خِزَانَةٌ",
                                "arti" => "Lemari",
                                "huruf" => array_unique(["خِ","زَ","ا","نَ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 62')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 62");
                        $data['tema'] = "Pertemuan 10";
                        $data['materi'] = "Mufrodat 62";
                        $data['title'] = "Perlengkapan Rumah Bag. 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "دَوْلَبٌ",
                                "arti" => "Lemari bufet",
                                "huruf" => array_unique(["دَ","وْ","لَ","بٌ"])
                            ],
                            [
                                "kata_arab" => "مِرْوَحَةٌ",
                                "arti" => "Kipas angin",
                                "huruf" => array_unique(["مِ","رْ","وَ","حَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "بَابٌ",
                                "arti" => "Pintu",
                                "huruf" => array_unique(["بَ","ا","بٌ"])
                            ],
                            [
                                "kata_arab" => "نَافِذَةٌ",
                                "arti" => "Jendela",
                                "huruf" => array_unique(["نَ","ا","فِ","ذَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "غُرْفَةٌ",
                                "arti" => "Kamar",
                                "huruf" => array_unique(["غُ","رْ","فَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "شُرْفَةٌ",
                                "arti" => "Teras",
                                "huruf" => array_unique(["شُ","رْ","فَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَاحَةٌ",
                                "arti" => "Halaman",
                                "huruf" => array_unique(["سَ","ا","حَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "أَرِيْكَةٌ",
                                "arti" => "Sofa",
                                "huruf" => array_unique(["أَ","رِ","يْ","كَ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 63')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 63");
                        $data['tema'] = "Pertemuan 10";
                        $data['materi'] = "Mufrodat 63";
                        $data['title'] = "Perlengkapan Rumah Bag. 3";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مِكْنَسَةٌ",
                                "arti" => "Sapu",
                                "huruf" => array_unique(["مِ","كْ","نَ","سَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "جَالُوْنٌ",
                                "arti" => "Galon",
                                "huruf" => array_unique(["جَ","ا","لُ","وْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "بِلاَطٌ",
                                "arti" => "Lantai",
                                "huruf" => array_unique(["بِ","لاَ","طٌ"])
                            ],
                            [
                                "kata_arab" => "بِسَاطٌ",
                                "arti" => "Karpet",
                                "huruf" => array_unique(["بِ","سَ","ا","طٌ"])
                            ],
                            [
                                "kata_arab" => "حَصِيْرَةٌ",
                                "arti" => "Keset",
                                "huruf" => array_unique(["حَ","صِ","يْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مِصْبَاحٌ",
                                "arti" => "Lampu",
                                "huruf" => array_unique(["مِ","صْ","بَ","ا","حٌ"])
                            ],
                            [
                                "kata_arab" => "سِلْكٌ",
                                "arti" => "Kabel",
                                "huruf" => array_unique(["سِ","لْ","كٌ"])
                            ],
                            [
                                "kata_arab" => "مَنْفَضَّةُ السَّجَائِرِ",
                                "arti" => "Asbak",
                                "huruf" => array_unique(["مَ","نْ","فَ","ضَّ","ةُ","_","ال","سَّ","جَ","ا","ئِ","رِ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 64')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 64");
                        $data['tema'] = "Pertemuan 10";
                        $data['materi'] = "Mufrodat 64";
                        $data['title'] = "Perlengkapan Rumah Bag. 4";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "تَقْوِيْمٌ",
                                "arti" => "Kalender",
                                "huruf" => array_unique(["تَ","قْ","وِ","يْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "ثَلاَّجَةٌ",
                                "arti" => "Kulkas",
                                "huruf" => array_unique(["ثَ","لاَّ","جَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سُلَّمٌ",
                                "arti" => "Tangga",
                                "huruf" => array_unique(["سُ","لَّ","مٌ"])
                            ],
                            [
                                "kata_arab" => "شَمْعٌ",
                                "arti" => "Lilin",
                                "huruf" => array_unique(["شَ","مْ","عٌ"])
                            ],
                            [
                                "kata_arab" => "مِفْتَاحٌ",
                                "arti" => "Kunci",
                                "huruf" => array_unique(["مِ","فْ","تَ","ا","حٌ"])
                            ],
                            [
                                "kata_arab" => "قُفْلٌ",
                                "arti" => "Gembok",
                                "huruf" => array_unique(["قُ","فْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "تِلْفَازٌ",
                                "arti" => "Televisi",
                                "huruf" => array_unique(["تِ","لْ","فَ","ا","زٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 65')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 65");
                        $data['tema'] = "Pertemuan 10";
                        $data['materi'] = "Mufrodat 65";
                        $data['title'] = "Perlengkapan Rumah Bag. 5";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "بَوَّابَةٌ",
                                "arti" => "Gerbang",
                                "huruf" => array_unique(["بَ","وَّ","ا","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَقْفٌ",
                                "arti" => "Atap",
                                "huruf" => array_unique(["سَ","قْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "مِكْوَاةٌ",
                                "arti" => "Setrika",
                                "huruf" => array_unique(["مِ","كْ","وَ","ا","ةٌ"])
                            ],
                            [
                                "kata_arab" => "خُوْذَةٌ",
                                "arti" => "Helm",
                                "huruf" => array_unique(["خُ","وْ","ذَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "عُلْبَةٌ",
                                "arti" => "Kotak",
                                "huruf" => array_unique(["عُ","لْ","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "رَفٌّ",
                                "arti" => "Rak",
                                "huruf" => array_unique(["رَ","فٌّ"])
                            ],
                            [
                                "kata_arab" => "زُقَاقٌ",
                                "arti" => "Gang",
                                "huruf" => array_unique(["زُ","قَ","ا","قٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 66')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 66");
                        $data['tema'] = "Pertemuan 11";
                        $data['materi'] = "Mufrodat 66";
                        $data['title'] = "Pekerjaan Tentang Perkakas Rumah Bag. 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "كَنَسَ-يَكْنُسُ-كَنْسًا",
                                "arti" => "Menyapu",
                                "huruf" => array_unique(["كَ","نَ","سَ","-","يَ","كْ","نُ","سُ","-","كَ","نْ","سً","ا"])
                            ],
                            [
                                "kata_arab" => "نَظَّفَ-يُنَظِّفُ-تَنْظِيْفًا",
                                "arti" => "Membersihkan",
                                "huruf" => array_unique(["نَ","ظَّ","فَ","-","يُ","نَ","ظِّ","فُ","-","تَ","نْ","ظِ","يْ","فً","ا"])
                            ],
                            [
                                "kata_arab" => "وَسَّخَ-يُوَسِّخُ-تَوْسِيْخًا",
                                "arti" => "Mengotori",
                                "huruf" => array_unique(["وَ","سَّ","خَ","-","يُ","وَ","سِّ","خُ","-","تَ","وْ","سِ","يْ","خً","ا"])
                            ],
                            [
                                "kata_arab" => "دَخَّنَ-يُدَخِّنُ-تَدْخِيْنًا",
                                "arti" => "Merokok",
                                "huruf" => array_unique(["دَ","خَّ","نَ","-","يُ","دَ","خِّ","نُ","-","تَ","دْ","خِ","يْ","نً","ا"])
                            ],
                            [
                                "kata_arab" => "جَلَسَ-يَجْلِسُ-جُلُوْسًا",
                                "arti" => "Duduk",
                                "huruf" => array_unique(["جَ","لَ","سَ","-","يَ","جْ","لِ","سُ","-","جُ","لُ","وْ","سً","ا"])
                            ],
                            [
                                "kata_arab" => "دَخَلَ-يَدْخُلُ-دُخُوْلاً",
                                "arti" => "Masuk",
                                "huruf" => array_unique(["دَ","خَ","لَ","-","يَ","دْ","خُ","لُ","-","دُ","خُ","وْ","لاً"])
                            ],
                            [
                                "kata_arab" => "قَامَ-يَقُوْمُ-قِيَامًا",
                                "arti" => "Berdiri",
                                "huruf" => array_unique(["قَ","ا","مَ","-","يَ","قُ","وْ","مُ","-","قِ","يَ","ا","مً","ا"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 67')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 67");
                        $data['tema'] = "Pertemuan 11";
                        $data['materi'] = "Mufrodat 67";
                        $data['title'] = "Pekerjaan Tentang Perkakas Rumah Bag. 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "قَعَدَ-يَقْعُدُ-قُعُودًا",
                                "arti" => "Duduk",
                                "huruf" => array_unique(["قَ","عَ","دَ","-","يَ","قْ","عُ","دُ","-","قُ","عُ","و","دً","ا"])
                            ],
                            [
                                "kata_arab" => "خَرَجَ-يَخْرُجُ-خُرُوْجًا",
                                "arti" => "Keluar",
                                "huruf" => array_unique(["خَ","رَ","جَ","-","يَ","خْ","رُ","جُ","-","خُ","رُ","وْ","جً","ا"])
                            ],
                            [
                                "kata_arab" => "وَضَعَ-يَضَعُ-وَضْعًا",
                                "arti" => "Meletakkan",
                                "huruf" => array_unique(["وَ","ضَ","عَ","-","يَ","ضَ","عُ","-","وَ","ضْ","عً","ا"])
                            ],
                            [
                                "kata_arab" => "بَدَّلَ-يُبَدِّلُ-تَبْدِيْلًا",
                                "arti" => "Mengganti",
                                "huruf" => array_unique(["بَ","دَّ","لَ","-","يُ","بَ","دِّ","لُ","-","تَ","بْ","دِ","يْ","لًا"])
                            ],
                            [
                                "kata_arab" => "أَشْعَلَ-يُشْعِلُ-إِشْعَالاً",
                                "arti" => "Menyalakan",
                                "huruf" => array_unique(["أَ","شْ","عَ","لَ","-","يُ","شْ","عِ","لُ","-","إِ","شْ","عَ","ا","لاً"])
                            ],
                            [
                                "kata_arab" => "أَطْفَأَ-يُطْفِئُ-إِطْفَاءً",
                                "arti" => "Mematikan",
                                "huruf" => array_unique(["أَ","طْ","فَ","أَ","-","يُ","طْ","فِ","ئُ","-","إِ","طْ","فَ","ا","ءً"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 68')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 68");
                        $data['tema'] = "Pertemuan 11";
                        $data['materi'] = "Mufrodat 68";
                        $data['title'] = "Pekerjaan Tentang Perkakas Rumah Bag. 3";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "صَعِدَ-يَصْعَدُ-صُعُوْدًا",
                                "arti" => "Menaiki",
                                "huruf" => array_unique(["صَ","عِ","دَ","-","يَ","صْ","عَ","دُ","-","صُ","عُ","وْ","دً","ا"])
                            ],
                            [
                                "kata_arab" => "نَزَلَ-يَنْزِلُ-نُزُوْلاً",
                                "arti" => "Turun",
                                "huruf" => array_unique(["نَ","زَ","لَ","-","يَ","نْ","زِ","لُ","-","نُ","زُ","وْ","لاً"])
                            ],
                            [
                                "kata_arab" => "شَاهَدَ-يُشَاهِدُ-مُشَاهَدَةً",
                                "arti" => "Menonton",
                                "huruf" => array_unique(["شَ","ا","هَ","دَ","-","يُ","شَ","ا","هِ","دُ","-","مُ","شَ","ا","هَ","دَ","ةً"])
                            ],
                            [
                                "kata_arab" => "هَجَرَ-يَهْجُرُ-هَجْرًا",
                                "arti" => "Hijrah",
                                "huruf" => array_unique(["هَ","جَ","رَ","-","يَ","هْ","جُ","رُ","-","هَ","جْ","رً","ا"])
                            ],
                            [
                                "kata_arab" => "فَضَّلَ-يُفَضِّلُ-تَفْضِيْلاً",
                                "arti" => "Memilih",
                                "huruf" => array_unique(["فَ","ضَّ","لَ","-","يُ","فَ","ضِّ","لُ","-","تَ","فْ","ضِ","يْ","لاً"])
                            ],
                            [
                                "kata_arab" => "وَاجَهَ-يُوَاجِهُ-مُوَاجَهَةً",
                                "arti" => "Melaksanakan",
                                "huruf" => array_unique(["وَ","ا","جَ","هَ","-","يُ","وَ","ا","جِ","هُ","-","مُ","وَ","ا","جَ","هَ","ةً"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 69')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 69");
                        $data['tema'] = "Pertemuan 11";
                        $data['materi'] = "Mufrodat 69";
                        $data['title'] = "Warna-warna Bag. 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَسْوَدُ",
                                "arti" => "Hitam",
                                "huruf" => array_unique(["أَ","سْ","وَ","دُ"])
                            ],
                            [
                                "kata_arab" => "أَبْيَضُ",
                                "arti" => "Putih",
                                "huruf" => array_unique(["أَ","بْ","يَ","ضُ"])
                            ],
                            [
                                "kata_arab" => "أَحْمَرُ",
                                "arti" => "Merah",
                                "huruf" => array_unique(["أَ","حْ","مَ","رُ"])
                            ],
                            [
                                "kata_arab" => "أَحْمَرُ وَرْدِيٌّ",
                                "arti" => "Pink",
                                "huruf" => array_unique(["أَ","حْ","مَ","رُ","_","وَ","رْ","دِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "أَصْفَرُ",
                                "arti" => "Kuning",
                                "huruf" => array_unique(["أَ","صْ","فَ","رُ"])
                            ],
                            [
                                "kata_arab" => "أَزْرَقُ",
                                "arti" => "Biru",
                                "huruf" => array_unique(["أَ","زْ","رَ","قُ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 70')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 70");
                        $data['tema'] = "Pertemuan 11";
                        $data['materi'] = "Mufrodat 70";
                        $data['title'] = "Warna-warna Bag. 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَخْضَرُ",
                                "arti" => "Hijau",
                                "huruf" => array_unique(["أَ","خْ","ضَ","رُ"])
                            ],
                            [
                                "kata_arab" => "أَسْمَرُ",
                                "arti" => "Coklat",
                                "huruf" => array_unique(["أَ","سْ","مَ","رُ"])
                            ],
                            [
                                "kata_arab" => "رَمَادِيٌّ",
                                "arti" => "Abu-abu",
                                "huruf" => array_unique(["رَ","مَ","ا","دِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "بُرْتُقَالِيٌّ",
                                "arti" => "Orange",
                                "huruf" => array_unique(["بُ","رْ","تُ","قَ","ا","لِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "بَنَفْسَجِيُّ",
                                "arti" => "Ungu",
                                "huruf" => array_unique(["بَ","نَ","فْ","سَ","جِ","يُّ"])
                            ],
                            [
                                "kata_arab" => "ذَهَبِيٌّ",
                                "arti" => "Emas",
                                "huruf" => array_unique(["ذَ","هَ","بِ","يٌّ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 71')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 71");
                        $data['tema'] = "Pertemuan 11";
                        $data['materi'] = "Mufrodat 71";
                        $data['title'] = "Sifat Bag. 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "كَبِيْرٌ",
                                "arti" => "Besar",
                                "huruf" => array_unique(["كَ","بِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "صَغِيْرٌ",
                                "arti" => "Kecil",
                                "huruf" => array_unique(["صَ","غِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "طَوِيْلٌ",
                                "arti" => "Panjang",
                                "huruf" => array_unique(["طَ","وِ","يْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "قَصِيْرٌ",
                                "arti" => "Pendek",
                                "huruf" => array_unique(["قَ","صِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "وَاسِعٌ",
                                "arti" => "Luas",
                                "huruf" => array_unique(["وَ","ا","سِ","عٌ"])
                            ],
                            [
                                "kata_arab" => "ضَيِّقٌ",
                                "arti" => "Sempit",
                                "huruf" => array_unique(["ضَ","يِّ","قٌ"])
                            ],
                            [
                                "kata_arab" => "عَمِيْقٌ",
                                "arti" => "Dalam",
                                "huruf" => array_unique(["عَ","مِ","يْ","قٌ"])
                            ],
                            [
                                "kata_arab" => "ضَحْلٌ",
                                "arti" => "Dangkal",
                                "huruf" => array_unique(["ضَ","حْ","لٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 72')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 72");
                        $data['tema'] = "Pertemuan 11";
                        $data['materi'] = "Mufrodat 72";
                        $data['title'] = "Sifat Bag. 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "كَثِيْرٌ",
                                "arti" => "Banyak",
                                "huruf" => array_unique(["كَ","ثِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "قَلِيْلٌ",
                                "arti" => "Sedikit",
                                "huruf" => array_unique(["قَ","لِ","يْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "نَظِيْفٌ",
                                "arti" => "Bersih",
                                "huruf" => array_unique(["نَ","ظِ","يْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "وَسِخٌ",
                                "arti" => "Kotor",
                                "huruf" => array_unique(["وَ","سِ","خٌ"])
                            ],
                            [
                                "kata_arab" => "رَخِيْصٌ",
                                "arti" => "Murah",
                                "huruf" => array_unique(["رَ","خِ","يْ","صٌ"])
                            ],
                            [
                                "kata_arab" => "غَالٍ",
                                "arti" => "Mahal",
                                "huruf" => array_unique(["غَ","ا","لٍ"])
                            ],
                            [
                                "kata_arab" => "غَلِيْظٌ",
                                "arti" => "Tebal",
                                "huruf" => array_unique(["غَ","لِ","يْ","ظٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 73')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 73");
                        $data['tema'] = "Pertemuan 12";
                        $data['materi'] = "Mufrodat 73";
                        $data['title'] = "Sifat Bag. 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "رَقِيْقٌ",
                                "arti" => "Tipis",
                                "huruf" => array_unique(["رَ","قِ","يْ","قٌ"])
                            ],
                            [
                                "kata_arab" => "رَطْبٌ",
                                "arti" => "Basah",
                                "huruf" => array_unique(["رَ","طْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "يَابِسٌ",
                                "arti" => "Kering",
                                "huruf" => array_unique(["يَ","ا","بِ","سٌ"])
                            ],
                            [
                                "kata_arab" => "جَامِدٌ",
                                "arti" => "Beku",
                                "huruf" => array_unique(["جَ","ا","مِ","دٌ"])
                            ],
                            [
                                "kata_arab" => "مَائِعٌ",
                                "arti" => "Cair",
                                "huruf" => array_unique(["مَ","ا","ئِ","عٌ"])
                            ],
                            [
                                "kata_arab" => "نَاعِمٌ",
                                "arti" => "Lembut",
                                "huruf" => array_unique(["نَ","ا","عِ","مٌ"])
                            ],
                            [
                                "kata_arab" => "خَشِنٌ",
                                "arti" => "Kasar",
                                "huruf" => array_unique(["خَ","شِ","نٌ"])
                            ],
                            [
                                "kata_arab" => "قَرِيْبٌ",
                                "arti" => "Dekat",
                                "huruf" => array_unique(["قَ","رِ","يْ","بٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 74')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 74");
                        $data['tema'] = "Pertemuan 12";
                        $data['materi'] = "Mufrodat 74";
                        $data['title'] = "Sifat Bag. 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "بَعِيْدٌ",
                                "arti" => "Jauh",
                                "huruf" => array_unique(["بَ","عِ","يْ","دٌ"])
                            ],
                            [
                                "kata_arab" => "صَافٍ",
                                "arti" => "Bersih",
                                "huruf" => array_unique(["صَ","ا","فٍ"])
                            ],
                            [
                                "kata_arab" => "كَدِرٌ",
                                "arti" => "Keruh",
                                "huruf" => array_unique(["كَ","دِ","رٌ"])
                            ],
                            [
                                "kata_arab" => "سَرِيْعٌ",
                                "arti" => "Cepat",
                                "huruf" => array_unique(["سَ","رِ","يْ","عٌ"])
                            ],
                            [
                                "kata_arab" => "بَطِيْئٌ",
                                "arti" => "Lambat",
                                "huruf" => array_unique(["بَ","طِ","يْ","ئٌ"])
                            ],
                            [
                                "kata_arab" => "صَعْبٌ",
                                "arti" => "Susah",
                                "huruf" => array_unique(["صَ","عْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "سَهْلٌ",
                                "arti" => "Mudah",
                                "huruf" => array_unique(["سَ","هْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "ثَقِيْلٌ",
                                "arti" => "Berat",
                                "huruf" => array_unique(["ثَ","قِ","يْ","لٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 75')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 75");
                        $data['tema'] = "Pertemuan 12";
                        $data['materi'] = "Mufrodat 75";
                        $data['title'] = "Sifat Bag. 3";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "خَفِيْفٌ",
                                "arti" => "Ringan",
                                "huruf" => array_unique(["خَ","فِ","يْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "كَامِلٌ",
                                "arti" => "Sempurna",
                                "huruf" => array_unique(["كَ","ا","مِ","لٌ"])
                            ],
                            [
                                "kata_arab" => "نَاقِصٌ",
                                "arti" => "Kurang",
                                "huruf" => array_unique(["نَ","ا","قِ","صٌ"])
                            ],
                            [
                                "kata_arab" => "مُنِيْرٌ",
                                "arti" => "Terang",
                                "huruf" => array_unique(["مُ","نِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مُظْلِمٌ",
                                "arti" => "Gelap",
                                "huruf" => array_unique(["مُ","ظْ","لِ","مٌ"])
                            ],
                            [
                                "kata_arab" => "آمِنٌ",
                                "arti" => "Aman",
                                "huruf" => array_unique(["آ","مِ","نٌ"])
                            ],
                            [
                                "kata_arab" => "خَطِيْرٌ",
                                "arti" => "Mengkhawatirkan",
                                "huruf" => array_unique(["خَ","طِ","يْ","رٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 76')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 76");
                        $data['tema'] = "Pertemuan 12";
                        $data['materi'] = "Mufrodat 76";
                        $data['title'] = "Sifat Bag. 4";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "لاَئِقٌ",
                                "arti" => "Cocok",
                                "huruf" => array_unique(["لاَ","ئِ","قٌ"])
                            ],
                            [
                                "kata_arab" => "حَيٌّ",
                                "arti" => "Hidup",
                                "huruf" => array_unique(["حَ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "مَيِّتٌ",
                                "arti" => "Mati",
                                "huruf" => array_unique(["مَ","يِّ","تٌ"])
                            ],
                            [
                                "kata_arab" => "مَفْتُوْحٌ",
                                "arti" => "Terbuka",
                                "huruf" => array_unique(["مَ","فْ","تُ","وْ","حٌ"])
                            ],
                            [
                                "kata_arab" => "مُغْلَقٌ",
                                "arti" => "Tertutup",
                                "huruf" => array_unique(["مُ","غْ","لَ","قٌ"])
                            ],
                            [
                                "kata_arab" => "أَصْلِيٌّ",
                                "arti" => "Asli",
                                "huruf" => array_unique(["أَ","صْ","لِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "زَائِفٌ",
                                "arti" => "Palsu",
                                "huruf" => array_unique(["زَ","ا","ئِ","فٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 77')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 77");
                        $data['tema'] = "Pertemuan 13";
                        $data['materi'] = "Mufrodat 77";
                        $data['title'] = "Pakaian dan Perhiasan Bag. 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "ثَوْبٌ",
                                "arti" => "Pakaian",
                                "huruf" => array_unique(["ثَ","وْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "قَمِيْصٌ",
                                "arti" => "Kemeja",
                                "huruf" => array_unique(["قَ","مِ","يْ","صٌ"])
                            ],
                            [
                                "kata_arab" => "بَنْطَلُوْنٌ",
                                "arti" => "Celana Panjang",
                                "huruf" => array_unique(["بَ","نْ","طَ","لُ","وْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "سِرْوَالٌ",
                                "arti" => "Celana Pendek",
                                "huruf" => array_unique(["سِ","رْ","وَ","ا","لٌ"])
                            ],
                            [
                                "kata_arab" => "خِمَارٌ",
                                "arti" => "Kerudung",
                                "huruf" => array_unique(["خِ","مَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "قَلَنْسُوَةٌ",
                                "arti" => "Peci",
                                "huruf" => array_unique(["قَ","لَ","نْ","سُ","وَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "فَانِلَةٌ",
                                "arti" => "Kaos",
                                "huruf" => array_unique(["فَ","ا","نِ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "حَرِيْرٌ",
                                "arti" => "Sutra",
                                "huruf" => array_unique(["حَ","رِ","يْ","رٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 78')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 78");
                        $data['tema'] = "Pertemuan 13";
                        $data['materi'] = "Mufrodat 78";
                        $data['title'] = "Pakaian dan Perhiasan Bag. 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "جَوْرَبٌ",
                                "arti" => "Kaos Kaki",
                                "huruf" => array_unique(["جَ","وْ","رَ","بٌ"])
                            ],
                            [
                                "kata_arab" => "تَنُّوْرَةٌ",
                                "arti" => "Rok",
                                "huruf" => array_unique(["تَ","نُّ","وْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "لِفَاعٌ",
                                "arti" => "Selendang",
                                "huruf" => array_unique(["لِ","فَ","ا","عٌ"])
                            ],
                            [
                                "kata_arab" => "صُدْرِيَّةٌ",
                                "arti" => "BH",
                                "huruf" => array_unique(["صُ","دْ","رِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "عِمَامَةٌ",
                                "arti" => "Sorban",
                                "huruf" => array_unique(["عِ","مَ","ا","مَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "إِزَارٌ",
                                "arti" => "Sarung",
                                "huruf" => array_unique(["إِ","زَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "جَاكِيْتٌ",
                                "arti" => "Jaket",
                                "huruf" => array_unique(["جَ","ا","كِ","يْ","تٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 79')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 79");
                        $data['tema'] = "Pertemuan 13";
                        $data['materi'] = "Mufrodat 79";
                        $data['title'] = "Pakaian dan Perhiasan Bag. 3";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "كِسَاءٌ",
                                "arti" => "Jas",
                                "huruf" => array_unique(["كِ","سَ","ا","ءٌ"])
                            ],
                            [
                                "kata_arab" => "مِعْطَفٌ",
                                "arti" => "Jas hujan",
                                "huruf" => array_unique(["مِ","عْ","طَ","فٌ"])
                            ],
                            [
                                "kata_arab" => "قُبَّعَةٌ",
                                "arti" => "Topi",
                                "huruf" => array_unique(["قُ","بَّ","عَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مِظَلَّةٌ",
                                "arti" => "Payung",
                                "huruf" => array_unique(["مِ","ظَ","لَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سِرْوَالٌ دَاخِلِيٌّ",
                                "arti" => "Celana dalam",
                                "huruf" => array_unique(["سِ","رْ","وَ","ا","لٌ","_","دَ","ا","خِ","لِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "نَعْلٌ",
                                "arti" => "Sendal",
                                "huruf" => array_unique(["نَ","عْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "حِذَاءٌ",
                                "arti" => "Sepatu",
                                "huruf" => array_unique(["حِ","ذَ","ا","ءٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 80')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 80");
                        $data['tema'] = "Pertemuan 13";
                        $data['materi'] = "Mufrodat 80";
                        $data['title'] = "Pakaian dan Perhiasan Bag. 4";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "لِبَاسٌ رَسْمِيٌّ",
                                "arti" => "Pakaian resmi",
                                "huruf" => array_unique(["لِ","بَ","ا","سٌ","_","رَ","سْ","مِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "مِنْشَفَةٌ",
                                "arti" => "Handuk",
                                "huruf" => array_unique(["مِ","نْ","شَ","فَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "قِطَانٌ",
                                "arti" => "Sabuk",
                                "huruf" => array_unique(["قِ","طَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "زِرٌّ",
                                "arti" => "Kancing",
                                "huruf" => array_unique(["زِ","رٌّ","جَ","يْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "جَيْبٌ",
                                "arti" => "Saku",
                                "huruf" => array_unique(["زِ","رٌّ","جَ","يْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "خَيْطٌ",
                                "arti" => "Benang",
                                "huruf" => array_unique(["خَ","يْ","طٌ"])
                            ],
                            [
                                "kata_arab" => "إِبْرَةٌ",
                                "arti" => "Jarum",
                                "huruf" => array_unique(["إِ","بْ","رَ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 81')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 81");
                        $data['tema'] = "Pertemuan 13";
                        $data['materi'] = "Mufrodat 81";
                        $data['title'] = "Pakaian dan Perhiasan Bag. 5";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "رَبْطَةٌ",
                                "arti" => "Perban",
                                "huruf" => array_unique(["رَ","بْ","طَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سِوَارٌ",
                                "arti" => "Gelang",
                                "huruf" => array_unique(["سِ","وَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "قِلَادَةٌ",
                                "arti" => "Kalung",
                                "huruf" => array_unique(["قِ","لَ","ا","دَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "قُرْطٌ",
                                "arti" => "Anting-anting",
                                "huruf" => array_unique(["قُ","رْ","طٌ"])
                            ],
                            [
                                "kata_arab" => "خَاتَمٌ",
                                "arti" => "Cincin",
                                "huruf" => array_unique(["خَ","ا","تَ","مٌ"])
                            ],
                            [
                                "kata_arab" => "ذَهَبٌ",
                                "arti" => "Emas",
                                "huruf" => array_unique(["ذَ","هَ","بٌ","فِ","ضَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "فِضَّةٌ",
                                "arti" => "Perak",
                                "huruf" => array_unique(["ذَ","هَ","بٌ","فِ","ضَّ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 82')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 82");
                        $data['tema'] = "Pertemuan 13";
                        $data['materi'] = "Mufrodat 82";
                        $data['title'] = "Pekerjaan Tentang Pakaian Bag. 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "لَبِسَ-يَلْبَسُ-لُبْسًا",
                                "arti" => "Memakai (pakaian)",
                                "huruf" => array_unique(["لَ","بِ","سَ","-","يَ","لْ","بَ","سُ","-","لُ","بْ","سً","ا"])
                            ],
                            [
                                "kata_arab" => "اِسْتَعْمَلَ-يَسْتَعْمِلُ-اِسْتِعْمَالًا",
                                "arti" => "Memakai",
                                "huruf" => array_unique(["اِ","سْ","تَ","عْ","مَ","لَ","-","يَ","سْ","تَ","عْ","مِ","لُ","-","اِ","سْ","تِ","عْ","مَ","ا","لً","ا"])
                            ],
                            [
                                "kata_arab" => "طَوَى-يَطْوِي-طَيًّا",
                                "arti" => "Melipat",
                                "huruf" => array_unique(["طَ","وَ","ى","-","يَ","طْ","وِ","ي","-","طَ","يًّ","ا"])
                            ],
                            [
                                "kata_arab" => "كَوَى-يَكْوِي-كَوًّا",
                                "arti" => "Menyetrika",
                                "huruf" => array_unique(["كَ","وَ","ى","-","يَ","كْ","وِ","ي","-","كَ","وًّ","ا"])
                            ],
                            [
                                "kata_arab" => "رَتَّبَ-يُرَتِّبُ-تَرْتِيْبًا",
                                "arti" => "Merapikan",
                                "huruf" => array_unique(["رَ","تَّ","بَ","-","يُ","رَ","تِّ","بُ","-","تَ","رْ","تِ","يْ","بً","ا"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 83')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 83");
                        $data['tema'] = "Pertemuan 13";
                        $data['materi'] = "Mufrodat 83";
                        $data['title'] = "Pekerjaan Tentang Pakaian Bag. 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "طَوَّلَ-يُطَوِّلُ-تَطْوِيْلًا",
                                "arti" => "Memanjangkan",
                                "huruf" => array_unique(["طَ","وَّ","لَ","-","يُ","طَ","وِّ","لُ","-","تَ","طْ","وِ","يْ","لً","ا"])
                            ],
                            [
                                "kata_arab" => "قَصَّرَ-يُقَصِّرُ-تَقْصِيْرًا",
                                "arti" => "Memendekkan",
                                "huruf" => array_unique(["قَ","صَّ","رَ","-","يُ","قَ","صِّ","رُ","تَ","قْ","صِ","يْ","رً","ا"])
                            ],
                            [
                                "kata_arab" => "كَبَّرَ-يُكَبِّرُ-تَكْبِيْرًا",
                                "arti" => "Membesarkan",
                                "huruf" => array_unique(["كَ","بَّ","رَ","-","يُ","كَ","بِّ","رُ","-","تَ","كْ","بِ","يْ","رً","ا"])
                            ],
                            [
                                "kata_arab" => "صَغَّرَ-يُصَغِّرُ-تَصْغِيْرًا",
                                "arti" => "Mengecilkan",
                                "huruf" => array_unique(["صَ","غَّ","رَ","-","يُ","صَ","غِّ","رُ","-","تَ","صْ","غِ","يْ","رً","ا"])
                            ],
                            [
                                "kata_arab" => "خَاطَ-يَخِيْطُ-خَيْطًا",
                                "arti" => "Menjahit",
                                "huruf" => array_unique(["خَ","ا","طَ","-","يَ","خِ","يْ","طُ","-","خَ","يْ","طً","ا"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 84')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 84");
                        $data['tema'] = "Pertemuan 13";
                        $data['materi'] = "Mufrodat 84";
                        $data['title'] = "Kamar Tidur Bag. 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سَرِيْرٌ",
                                "arti" => "Ranjang",
                                "huruf" => array_unique(["سَ","رِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مُلَاءَةُ السَّرِيْرِ",
                                "arti" => "Seprei",
                                "huruf" => array_unique(["مُ","لَا","ءَ","ةُ","_","ال","سَّ","رِ","يْ","رِ"])
                            ],
                            [
                                "kata_arab" => "فِرَاشٌ",
                                "arti" => "Kasur",
                                "huruf" => array_unique(["فِ","رَ","ا","شٌ"])
                            ],
                            [
                                "kata_arab" => "وِسَادَةٌ",
                                "arti" => "Bantal",
                                "huruf" => array_unique(["وِ","سَ","ا","دَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "وِسَادَةٌ مُسْتَطِيْلَةٌ",
                                "arti" => "Guling",
                                "huruf" => array_unique(["وِ","سَ","ا","دَ","ةٌ","_","مُ","سْ","تَ","طِ","يْ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "لِحَافٌ",
                                "arti" => "Selimut",
                                "huruf" => array_unique(["لِ","حَ","ا","فٌ"])
                            ],
                            [
                                "kata_arab" => "حَصِيْرٌ",
                                "arti" => "Tikar",
                                "huruf" => array_unique(["حَ","صِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "سَجَّادَةٌ",
                                "arti" => "Sajadah",
                                "huruf" => array_unique(["سَ","جَّ","ا","دَ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 85')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 85");
                        $data['tema'] = "Pertemuan 13";
                        $data['materi'] = "Mufrodat 85";
                        $data['title'] = "Kamar Tidur Bag. 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مِرْآةٌ",
                                "arti" => "Cermin",
                                "huruf" => array_unique(["مِ","رْ","آ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مُشْطٌ",
                                "arti" => "Sisir",
                                "huruf" => array_unique(["مُ","شْ","طٌ"])
                            ],
                            [
                                "kata_arab" => "مَسْحُوْقٌ",
                                "arti" => "Bedak",
                                "huruf" => array_unique(["مَ","سْ","حُ","وْ","قٌ"])
                            ],
                            [
                                "kata_arab" => "قُطْنٌ",
                                "arti" => "Kapas",
                                "huruf" => array_unique(["قُ","طْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "قَطِيْفَةٌ",
                                "arti" => "Beludru",
                                "huruf" => array_unique(["قَ","طِ","يْ","فَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "نَامُوْسِيَّةٌ",
                                "arti" => "Kelambu",
                                "huruf" => array_unique(["نَ","ا","مُ","وْ","سِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "اَلسَّاعَةُ الْمُنَبِّهَةُ",
                                "arti" => "Jam beker",
                                "huruf" => array_unique(["اَل","سَّ","ا","عَ","ةُ","_","الْ","مُ","نَ","بِّ","هَ","ةُ"])
                            ],
                            [
                                "kata_arab" => "جَوَّالٌ",
                                "arti" => "HP",
                                "huruf" => array_unique(["جَ","وَّ","ا","لٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 86')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 86");
                        $data['tema'] = "Pertemuan 14";
                        $data['materi'] = "Mufrodat 86";
                        $data['title'] = "Pekerjaan Tentang Kamar Tidur";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "نَامَ-يَنَامُ-نَوْمًا",
                                "arti" => "Tidur",
                                "huruf" => array_unique(["نَ","ا","مَ","-","يَ","نَ","ا","مُ","-","نَ","وْ","مً","ا"])
                            ],
                            [
                                "kata_arab" => "اِسْتَلْقَى-يَسْتَلْقِى-اِسْتِلْقَاءً",
                                "arti" => "Rebahan",
                                "huruf" => array_unique(["اِ","سْ","تَ","لْ","قَ","ى","-","يَ","سْ","تَ","لْ","قِ","ى","-","اِ","سْ","تِ","لْ","قَ","ا","ءً"])
                            ],
                            [
                                "kata_arab" => "خَرْخَرَ-يُخَرْخِرُ-خَرْخَرَةً",
                                "arti" => "Mengorok",
                                "huruf" => array_unique(["خَ","رْ","خَ","رَ","-","يُ","خَ","رْ","خِ","رُ","-","خَ","رْ","خَ","رَ","ةً"])
                            ],
                            [
                                "kata_arab" => "هَذَا-يَهْذِي-هَذْيًا",
                                "arti" => "Mengigau",
                                "huruf" => array_unique(["هَ","ذَ","ا","-","يَ","هْ","ذِ","ي","-","هَ","ذْ","يً","ا"])
                            ],
                            [
                                "kata_arab" => "سَالَ-يَسِيْلُ-سَيْلًا لُعَابُهُ",
                                "arti" => "Mengalir Iler",
                                "huruf" => array_unique(["سَ","ا","لَ","-","يَ","سِ","يْ","لُ","-","سَ","يْ","لًا","_","لُ","عَ","ا","بُ","هُ"])
                            ],
                            [
                                "kata_arab" => "قَرْفَصَ-يُقَرْفِصُ-قَرْفَصَةً",
                                "arti" => "Mencubit",
                                "huruf" => array_unique(["قَ","رْ","فَ","صَ","-","يُ","قَ","رْ","فِ","صُ","-","قَ","رْ","فَ","صَ","ةً"])
                            ],
                            [
                                "kata_arab" => "تَرَبَّعَ-يَتَرَبَّعُ-تَرَبُّعًا",
                                "arti" => "Duduk bersila",
                                "huruf" => array_unique(["تَ","رَ","بَّ","عَ","-","يَ","تَ","رَ","بَّ","عُ","-","تَ","رَ","بُّ","عً","ا"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 87')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 87");
                        $data['tema'] = "Pertemuan 14";
                        $data['materi'] = "Mufrodat 87";
                        $data['title'] = "Dapur Bag. 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مَوْقِدٌ",
                                "arti" => "Kompor",
                                "huruf" => array_unique(["مَ","وْ","قِ","دٌ"])
                            ],
                            [
                                "kata_arab" => "قِدْرٌ",
                                "arti" => "Panci",
                                "huruf" => array_unique(["قِ","دْ","رٌ"])
                            ],
                            // [
                            //     "kata_arab" => "مِقْلاَةٌ",
                            //     "arti" => "Kompor",
                            //     "huruf" => array_unique(["مِ","قْ","لاَ","ةٌ"])
                            // ],
                            [
                                "kata_arab" => "مَائِدَةٌ",
                                "arti" => "Meja makan",
                                "huruf" => array_unique(["مَ","ا","ئِ","دَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "إِبْرِيْقٌ",
                                "arti" => "Teko",
                                "huruf" => array_unique(["إِ","بْ","رِ","يْ","قٌ"])
                            ],
                            [
                                "kata_arab" => "كُوْبٌ",
                                "arti" => "Gelas",
                                "huruf" => array_unique(["كُ","وْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "صَحْنٌ",
                                "arti" => "Piring",
                                "huruf" => array_unique(["صَ","حْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "قَصْعَةٌ",
                                "arti" => "Mangkok",
                                "huruf" => array_unique(["قَ","صْ","عَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "طَبَقٌ",
                                "arti" => "Nampan",
                                "huruf" => array_unique(["طَ","بَ","قٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 88')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 88");
                        $data['tema'] = "Pertemuan 14";
                        $data['materi'] = "Mufrodat 88";
                        $data['title'] = "Dapur Bag. 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "فِنْجَانٌ",
                                "arti" => "Cangkir",
                                "huruf" => array_unique(["فِ","نْ","جَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "مِلْعَقَةٌ",
                                "arti" => "Sendok",
                                "huruf" => array_unique(["مِ","لْ","عَ","قَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "كُوْزٌ",
                                "arti" => "Teko",
                                "huruf" => array_unique(["كُ","وْ","زٌ"])
                            ],
                            [
                                "kata_arab" => "قَارُوْرَةٌ",
                                "arti" => "Botol",
                                "huruf" => array_unique(["قَ","ا","رُ","وْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مِلْعَقَةُ الشَّايِ",
                                "arti" => "Sendok Teh",
                                "huruf" => array_unique(["مِ","لْ","عَ","قَ","ةُ","_","ال","شَّ","ا","يِ"])
                            ],
                            [
                                "kata_arab" => "مِلْعَقَةُ الرُّزِّ",
                                "arti" => "Sendok Nasi",
                                "huruf" => array_unique(["مِ","لْ","عَ","قَ","ةُ","_","ال","رُّ","زِّ"])
                            ],
                            [
                                "kata_arab" => "مِلْعَقَةُ الْمَرَقِ",
                                "arti" => "Sendok kuah",
                                "huruf" => array_unique(["مِ","لْ","عَ","قَ","ةُ","_","الْ","مَ","رَ","قِ"])
                            ],
                            [
                                "kata_arab" => "شَوْكَةٌ",
                                "arti" => "Garpu",
                                "huruf" => array_unique(["شَ","وْ","كَ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 89')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 89");
                        $data['tema'] = "Pertemuan 14";
                        $data['materi'] = "Mufrodat 89";
                        $data['title'] = "Dapur Bag. 3";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "رَفُّ الصُّحُوْنِ",
                                "arti" => "Rak piring",
                                "huruf" => array_unique(["رَ","فُّ","_","ال","صُّ","حُ","وْ","نِ"])
                            ],
                            [
                                "kata_arab" => "تِرْمُسٌ",
                                "arti" => "Termos",
                                "huruf" => array_unique(["تِ","رْ","مُ","سٌ"])
                            ],
                            [
                                "kata_arab" => "كِبْرِيْتٌ",
                                "arti" => "Korek",
                                "huruf" => array_unique(["كِ","بْ","رِ","يْ","تٌ"])
                            ],
                            [
                                "kata_arab" => "وَلَّاعَةٌ",
                                "arti" => "Korek gas",
                                "huruf" => array_unique(["وَ","لَّ","ا","عَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "غَازٌ",
                                "arti" => "Gas",
                                "huruf" => array_unique(["رُ","زٌّ","غَ","ا","زٌ","مَ","ا","ءٌ"])
                            ],
                            [
                                "kata_arab" => "سِكِّيْنٌ",
                                "arti" => "Pisau",
                                "huruf" => array_unique(["سِ","كِّ","يْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "مَاءٌ",
                                "arti" => "Air",
                                "huruf" => array_unique(["رُ","زٌّ","غَ","ا","زٌ","مَ","ا","ءٌ"])
                            ],
                            [
                                "kata_arab" => "رُزٌّ",
                                "arti" => "Nasi",
                                "huruf" => array_unique(["رُ","زٌّ","غَ","ا","زٌ","مَ","ا","ءٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 90')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 90");
                        $data['tema'] = "Pertemuan 15";
                        $data['materi'] = "Mufrodat 90";
                        $data['title'] = "Pekerjaan Tentang Dapur Bag. 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَكَلَ-يَأْكُلُ-أَكْلاً",
                                "arti" => "Makan",
                                "huruf" => array_unique(["أَ","كَ","لَ","-","يَ","أْ","كُ","لُ","-","أَ","كْ","لاً"])
                            ],
                            [
                                "kata_arab" => "شَرِبَ-يَشْرَبُ-شُرْبًا",
                                "arti" => "Minum",
                                "huruf" => array_unique(["شَ","رِ","بَ","-","يَ","شْ","رَ","بُ","-","شُ","رْ","بً","ا"])
                            ],
                            [
                                "kata_arab" => "طَبَخَ-يَطْبَخُ-طَبْخًا",
                                "arti" => "Memasak",
                                "huruf" => array_unique(["طَ","بَ","خَ","-","يَ","طْ","بَ","خُ","-","طَ","بْ","خً","ا"])
                            ],
                            [
                                "kata_arab" => "قَلَى-يَقْلِى-قَلْيًا",
                                "arti" => "Menggoreng",
                                "huruf" => array_unique(["قَ","لَ","ى","-","يَ","قْ","لِ","ى","-","قَ","لْ","يً","ا"])
                            ],
                            [
                                "kata_arab" => "شَوَى-يَشْوِى-شَوَاءً",
                                "arti" => "Memanggang",
                                "huruf" => array_unique(["شَ","وَ","ى","-","يَ","شْ","وِ","ى","-","شَ","وَ","ا","ءً"])
                            ],
                            [
                                "kata_arab" => "لَحِسَ-يَلْحَسُ-لَحْسًا",
                                "arti" => "Menjilat",
                                "huruf" => array_unique(["لَ","حِ","سَ","-","يَ","لْ","حَ","سُ","-","لَ","حْ","سً","ا"])
                            ],
                            [
                                "kata_arab" => "بَلَعَ-يَبْلَعُ-بَلْعًا",
                                "arti" => "Menelan",
                                "huruf" => array_unique(["بَ","لَ","عَ","-","يَ","بْ","لَ","عُ","-","بَ","لْ","عً","ا"])
                            ],
                            [
                                "kata_arab" => "مَضَغَ-يَمْضَغُ-مَضْغَا",
                                "arti" => "Mengunyah",
                                "huruf" => array_unique(["مَ","ضَ","غَ","-","يَ","مْ","ضَ","غُ","-","مَ","ضْ","غَ","ا"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 91')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 91");
                        $data['tema'] = "Pertemuan 15";
                        $data['materi'] = "Mufrodat 91";
                        $data['title'] = "Pekerjaan Tentang Dapur Bag. 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "عَضَّ-يَعَضُّ-عَضًّا",
                                "arti" => "Mengigit",
                                "huruf" => array_unique(["عَ","ضَّ","-","يَ","عَ","ضُّ","-","عَ","ضًّ","ا"])
                            ],
                            [
                                "kata_arab" => "تَذَوَّقَ-يَتَذَوَّقُ-تَذَوُّقًا",
                                "arti" => "Mencicipi",
                                "huruf" => array_unique(["تَ","ذَ","وَّ","قَ","-","يَ","تَ","ذَ","وَّ","قُ","-","تَ","ذَ","وُّ","قً","ا"])
                            ],
                            [
                                "kata_arab" => "شَرَّحَ-يُشَرِّحُ-تَشْرِيْحًا",
                                "arti" => "Mengiris",
                                "huruf" => array_unique(["شَ","رَّ","حَ","-","يُ","شَ","رِّ","حُ","-","تَ","شْ","رِ","يْ","حً","ا"])
                            ],
                            [
                                "kata_arab" => "قَشَّرَ-يُقَشِّرُ-تَقْشِيْرًا",
                                "arti" => "Mengupas",
                                "huruf" => array_unique(["قَ","شَّ","رَ","-","يُ","قَ","شِّ","رُ","-","تَ","قْ","شِ","يْ","رً","ا"])
                            ],
                            [
                                "kata_arab" => "قَطَعَ-يَقْطَعُ-قَطْعًا",
                                "arti" => "Memotong",
                                "huruf" => array_unique(["قَ","طَ","عَ","-","يَ","قْ","طَ","عُ","-","قَ","طْ","عً","ا"])
                            ],
                            [
                                "kata_arab" => "اِنْقَطَعَ-يَنْقَطِعُ-اِنْقِطَاعًا",
                                "arti" => "Terpotong",
                                "huruf" => array_unique(["اِ","نْ","قَ","طَ","عَ","-","يَ","نْ","قَ","طِ","عُ","-","اِ","نْ","قِ","طَ","ا","عً","ا"])
                            ],
                            [
                                "kata_arab" => "هَيَّأَ-يُهَيِّءُ-تَهْيِيْئًا",
                                "arti" => "Menghidangkan",
                                "huruf" => array_unique(["هَ","يَّ","أَ","-","يُ","هَ","يِّ","ءُ","-","تَ","هْ","يِ","يْ","ئً","ا"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 92')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 92");
                        $data['tema'] = "Pertemuan 15";
                        $data['materi'] = "Mufrodat 92";
                        $data['title'] = "Rasa-rasa Bag. 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "طَعْمٌ",
                                "arti" => "Rasa",
                                "huruf" => array_unique(["طَ","عْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "حُلْوٌ",
                                "arti" => "Manis",
                                "huruf" => array_unique(["حُ","لْ","وٌ"])
                            ],
                            [
                                "kata_arab" => "مَالِحٌ",
                                "arti" => "Asin",
                                "huruf" => array_unique(["مَ","ا","لِ","حٌ"])
                            ],
                            [
                                "kata_arab" => "مُرٌّ",
                                "arti" => "Pahit",
                                "huruf" => array_unique(["حَ","رٌّ","مُ","رٌّ"])
                            ],
                            [
                                "kata_arab" => "حَرٌّ",
                                "arti" => "Panas",
                                "huruf" => array_unique(["حَ","رٌّ","مُ","رٌّ"])
                            ],
                            [
                                "kata_arab" => "بَارِدٌ",
                                "arti" => "Dingin",
                                "huruf" => array_unique(["بَ","ا","رِ","دٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 93')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 93");
                        $data['tema'] = "Pertemuan 15";
                        $data['materi'] = "Mufrodat 93";
                        $data['title'] = "Rasa-rasa Bag. 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "حِرِّيْفٌ",
                                "arti" => "Pedas",
                                "huruf" => array_unique(["حِ","رِّ","يْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "حَامِضٌ",
                                "arti" => "Asam",
                                "huruf" => array_unique(["حَ","ا","مِ","ضٌ"])
                            ],
                            [
                                "kata_arab" => "مَبْلُوْلٌ",
                                "arti" => "Basah",
                                "huruf" => array_unique(["مَ","بْ","لُ","وْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "جَافٌّ",
                                "arti" => "Kering",
                                "huruf" => array_unique(["جَ","ا","فٌّ","دَ","ا","فِ","ئٌ"])
                            ],
                            [
                                "kata_arab" => "دَافِئٌ",
                                "arti" => "Hangat",
                                "huruf" => array_unique(["جَ","ا","فٌّ","دَ","ا","فِ","ئٌ"])
                            ],
                            [
                                "kata_arab" => "رَيَّانٌ",
                                "arti" => "Segar",
                                "huruf" => array_unique(["رَ","يَّ","ا","نٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 94')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 94");
                        $data['tema'] = "Pertemuan 16";
                        $data['materi'] = "Mufrodat 94";
                        $data['title'] = "Kamar Mandi Bag. 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "بِرْكَةٌ",
                                "arti" => "Bak Mandi",
                                "huruf" => array_unique(["بِ","رْ","كَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مِرْحَاضٌ",
                                "arti" => "Toilet",
                                "huruf" => array_unique(["مِ","رْ","حَ","ا","ضٌ"])
                            ],
                            [
                                "kata_arab" => "مَاءٌ",
                                "arti" => "Air",
                                "huruf" => array_unique(["مَ","ا","ءٌ","بِ","رْ","كَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "صَابُوْنٌ",
                                "arti" => "Sabun",
                                "huruf" => array_unique(["صَ","ا","بُ","وْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "شَامْبُو",
                                "arti" => "Sampo",
                                "huruf" => array_unique(["شَ","ا","مْ","بُ","و"])
                            ],
                            // [
                            //     "kata_arab" => "فِرْجَوْنٌ",
                            //     "arti" => "Sikat",
                            //     "huruf" => array_unique(["فِ","رْ","جَ","وْ","نٌ"])
                            // ],
                            [
                                "kata_arab" => "مَعْجُوْنٌ",
                                "arti" => "Odol",
                                "huruf" => array_unique(["مَ","عْ","جُ","وْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "فُرْشَةٌ",
                                "arti" => "Sikat",
                                "huruf" => array_unique(["فُ","رْ","شَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مِنْشَفَةٌ",
                                "arti" => "Handuk",
                                "huruf" => array_unique(["مِ","نْ","شَ","فَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مِعْلاَقٌ",
                                "arti" => "Gantungan",
                                "huruf" => array_unique(["مِ","عْ","لاَ","قٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 95')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 95");
                        $data['tema'] = "Pertemuan 16";
                        $data['materi'] = "Mufrodat 95";
                        $data['title'] = "Kamar Mandi Bag. 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "دَلْوٌ",
                                "arti" => "Ember",
                                "huruf" => array_unique(["دَ","لْ","وٌ"])
                            ],
                            [
                                "kata_arab" => "مِغْرَفَةٌ",
                                "arti" => "Gayung",
                                "huruf" => array_unique(["مِ","غْ","رَ","فَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "حَنَفِيَّةٌ",
                                "arti" => "Keran",
                                "huruf" => array_unique(["حَ","نَ","فِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "أُنْبُوْبَةٌ",
                                "arti" => "Pipa",
                                "huruf" => array_unique(["أُ","نْ","بُ","وْ","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "طُلُنْبَةٌ",
                                "arti" => "Pompa",
                                "huruf" => array_unique(["طُ","لُ","نْ","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "خُرْطُوْمٌ",
                                "arti" => "Selang",
                                "huruf" => array_unique(["خُ","رْ","طُ","وْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "مَنْبَعٌ",
                                "arti" => "Sumber air",
                                "huruf" => array_unique(["مَ","نْ","بَ","عٌ"])
                            ],
                            [
                                "kata_arab" => "بِئْرٌ",
                                "arti" => "Sumur",
                                "huruf" => array_unique(["بِ","ئْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مِيْزَابٌ",
                                "arti" => "Hanger",
                                "huruf" => array_unique(["مِ","يْ","زَ","ا","بٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 96')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 96");
                        $data['tema'] = "Pertemuan 16";
                        $data['materi'] = "Mufrodat 96";
                        $data['title'] = "Pekerjaan Tentang Kamar Mandi Bag. 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "اِغْتَسَلَ-يَغْتَسِلُ-اِغْتِسَالًا",
                                "arti" => "Mandi",
                                "huruf" => array_unique(["اِ","غْ","تَ","سَ","لَ","-","يَ","غْ","تَ","سِ","لُ","-","اِ","غْ","تِ","سَ","ا","لً","ا"])
                            ],
                            [
                                "kata_arab" => "غَسَلَ-يَغْسِلُ-غَسْلاً",
                                "arti" => "Membasuh",
                                "huruf" => array_unique(["غَ","سَ","لَ","-","يَ","غْ","سِ","لُ","-","غَ","سْ","لاً"])
                            ],
                            [
                                "kata_arab" => "سَوَّكَ-يُسَوِّكُ-تَسْوِيْكًا",
                                "arti" => "Menyikat gigi",
                                "huruf" => array_unique(["سَ","وَّ","كَ","-","يُ","سَ","وِّ","كُ","-","تَ","سْ","وِ","يْ","كً","ا"])
                            ],
                            [
                                "kata_arab" => "حَفَّ-يَحُفُّ-حَفًّا",
                                "arti" => "Menggosok",
                                "huruf" => array_unique(["حَ","فَّ","-","يَ","حُ","فُّ","-","حَ","فًّ","ا"])
                            ],
                            [
                                "kata_arab" => "طَرَحَ-يَطْرَحُ-طَرْحًا",
                                "arti" => "Membuang",
                                "huruf" => array_unique(["طَ","رَ","حَ","-","يَ","طْ","رَ","حُ","-","طَ","رْ","حً","ا"])
                            ],
                            [
                                "kata_arab" => "رَمَى-يَرْمِى-رَمْيًا",
                                "arti" => "Melempar",
                                "huruf" => array_unique(["رَ","مَ","ى","-","يَ","رْ","مِ","ى","-","رَ","مْ","يً","ا"])
                            ],
                            [
                                "kata_arab" => "وَضَعَ-يَضَعُ-وَضْعًا",
                                "arti" => "Meletakkan",
                                "huruf" => array_unique(["وَ","ضَ","عَ","-","يَ","ضَ","عُ","-","وَ","ضْ","عً","ا"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 97')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 97");
                        $data['tema'] = "Pertemuan 16";
                        $data['materi'] = "Mufrodat 97";
                        $data['title'] = "Pekerjaan Tentang Kamar Mandi Bag. 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "بَالَ-يَبُوْلُ-بَوْلًا",
                                "arti" => "BAK",
                                "huruf" => array_unique(["بَ","ا","لَ","-","يَ","بُ","وْ","لُ","-","بَ","وْ","لً","ا"])
                            ],
                            [
                                "kata_arab" => "تَغَوَّطَ-يَتَغَوَّطُ-تَغَوُّطًا",
                                "arti" => "BAB",
                                "huruf" => array_unique(["تَ","غَ","وَّ","طَ","-","يَ","تَ","غَ","وَّ","طُ","-","تَ","غَ","وُّ","طً","ا"])
                            ],
                            [
                                "kata_arab" => "فَتَحَ-يَفْتَحُ-فَتْحًا",
                                "arti" => "Membuka",
                                "huruf" => array_unique(["فَ","تَ","حَ","-","يَ","فْ","تَ","حُ","-","فَ","تْ","حً","ا"])
                            ],
                            [
                                "kata_arab" => "غَلَقَ-يَغْلِقُ-غَلْقًا",
                                "arti" => "Menutup",
                                "huruf" => array_unique(["غَ","لَ","قَ","-","يَ","غْ","لِ","قُ","-","غَ","لْ","قً","ا"])
                            ],
                            [
                                "kata_arab" => "ضَغَطَ-يَضْغَطُ-ضَغْطًا",
                                "arti" => "Memeras",
                                "huruf" => array_unique(["ضَ","غَ","طَ","-","يَ","ضْ","غَ","طُ","-","ضَ","غْ","طً","ا"])
                            ],
                            [
                                "kata_arab" => "لَوَّثَ-يُلَوِّثُ-تَلْوِيْثًا",
                                "arti" => "Mencemari",
                                "huruf" => array_unique(["لَ","وَّ","ثَ","-","يُ","لَ","وِّ","ثُ","-","تَ","لْ","وِ","يْ","ثً","ا"])
                            ],
                            [
                                "kata_arab" => "سَبَحَ-يَسْبَحُ-سِبَاحَةً",
                                "arti" => "Berenang",
                                "huruf" => array_unique(["سَ","بَ","حَ","-","يَ","سْ","بَ","حُ","-","سِ","بَ","ا","حَ","ةً"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 98')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 98");
                        $data['tema'] = "Pertemuan 17";
                        $data['materi'] = "Mufrodat 98";
                        $data['title'] = "Sekolah Bag. 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مَدْرَسَةٌ حُكُوْمِيَّةٌ",
                                "arti" => "Sekolah negeri",
                                "huruf" => array_unique(["مَ","دْ","رَ","سَ","ةٌ","_","حُ","كُ","وْ","مِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مَدْرَسَةٌ أَهْلِيَّةٌ",
                                "arti" => "Sekolah swasta",
                                "huruf" => array_unique(["مَ","دْ","رَ","سَ","ةٌ","_","أَ","هْ","لِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "رَئِيْسُ الْمَدْرَسَةِ",
                                "arti" => "Kepala sekolah",
                                "huruf" => array_unique(["رَ","ئِ","يْ","سُ","_","الْ","مَ","دْ","رَ","سَ","ةِ"])
                            ],
                            [
                                "kata_arab" => "وَلِيُّ الْفَصْلِ",
                                "arti" => "Wali kelas",
                                "huruf" => array_unique(["وَ","لِ","يُّ","_","الْ","فَ","صْ","لِ"])
                            ],
                            [
                                "kata_arab" => "وَلِيُّ الطَّالِبِ",
                                "arti" => "Wali murid",
                                "huruf" => array_unique(["وَ","لِ","يُّ","_","ال","طَّ","ا","لِ","بِ"])
                            ],
                            [
                                "kata_arab" => "فَصْلٌ",
                                "arti" => "Kelas",
                                "huruf" => array_unique(["فَ","صْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "مَعْهَدٌ",
                                "arti" => "Pondok",
                                "huruf" => array_unique(["مَ","عْ","هَ","دٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 99')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 99");
                        $data['tema'] = "Pertemuan 17";
                        $data['materi'] = "Mufrodat 99";
                        $data['title'] = "Sekolah Bag. 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "إِدَارَةٌ",
                                "arti" => "Kantor",
                                "huruf" => array_unique(["إِ","دَ","ا","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "عَمُوْدٌ",
                                "arti" => "Tiang",
                                "huruf" => array_unique(["عَ","مُ","وْ","دٌ"])
                            ],
                            [
                                "kata_arab" => "عَلَمٌ",
                                "arti" => "Bendera",
                                "huruf" => array_unique(["عَ","لَ","مٌ"])
                            ],
                            [
                                "kata_arab" => "مُدَرِّسٌ",
                                "arti" => "Guru (lk)",
                                "huruf" => array_unique(["مُ","دَ","رِّ","سٌ"])
                            ],
                            [
                                "kata_arab" => "مُدَرِّسَةٌ",
                                "arti" => "Guru (pr)",
                                "huruf" => array_unique(["مُ","دَ","رِّ","سَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "تِلْمِيْذٌ",
                                "arti" => "Siswa",
                                "huruf" => array_unique(["تِ","لْ","مِ","يْ","ذٌ"])
                            ],
                            [
                                "kata_arab" => "تِلْمِيْذَةٌ",
                                "arti" => "Siswi",
                                "huruf" => array_unique(["تِ","لْ","مِ","يْ","ذَ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 100')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 100");
                        $data['tema'] = "Pertemuan 17";
                        $data['materi'] = "Mufrodat 100";
                        $data['title'] = "Sekolah Bag. 3";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "نُقُوْدٌ",
                                "arti" => "Uang",
                                "huruf" => array_unique(["نُ","قُ","وْ","دٌ"])
                            ],
                            [
                                "kata_arab" => "مَصْرُوْفُ الْجَيْبِ",
                                "arti" => "Uang saku",
                                "huruf" => array_unique(["مَ","صْ","رُ","وْ","فُ","_","الْ","جَ","يْ","بِ"])
                            ],
                            [
                                "kata_arab" => "طَالِبٌ جَامِعِيٌّ",
                                "arti" => "Mahasiswa",
                                "huruf" => array_unique(["طَ","ا","لِ","بٌ","_","جَ","ا","مِ","عِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "مِنْحَةٌ دِرَاسِيَّةٌ",
                                "arti" => "Beasiswa",
                                "huruf" => array_unique(["مِ","نْ","حَ","ةٌ","_","دِ","رَ","ا","سِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مُحَاضِرٌ",
                                "arti" => "Dosen",
                                "huruf" => array_unique(["مُ","حَ","ا","ضِ","رٌ"])
                            ],
                            [
                                "kata_arab" => "كُلِّيَّةٌ",
                                "arti" => "Fakultas",
                                "huruf" => array_unique(["كُ","لِّ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "قِسْمٌ",
                                "arti" => "Jurusan",
                                "huruf" => array_unique(["قِ","سْ","مٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 101')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 101");
                        $data['tema'] = "Pertemuan 17";
                        $data['materi'] = "Mufrodat 101";
                        $data['title'] = "Sekolah Bag. 4";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سَبُّوْرَةٌ",
                                "arti" => "Papan tulis",
                                "huruf" => array_unique(["سَ","بُّ","وْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "حِبْرٌ",
                                "arti" => "Tinta",
                                "huruf" => array_unique(["حِ","بْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "قَلَمُ السَّبُّوْرَةِ",
                                "arti" => "Spidol",
                                "huruf" => array_unique(["قَ","لَ","مُ","_","ال","سَّ","بُّ","وْ","رَ","ةِ"])
                            ],
                            [
                                "kata_arab" => "كِتَابٌ",
                                "arti" => "Buku",
                                "huruf" => array_unique(["كِ","تَ","ا","بٌ"])
                            ],
                            [
                                "kata_arab" => "دَفْتَرٌ",
                                "arti" => "Buku tulis",
                                "huruf" => array_unique(["دَ","فْ","تَ","رٌ"])
                            ],
                            [
                                "kata_arab" => "قَلَمٌ",
                                "arti" => "Bulpoin",
                                "huruf" => array_unique(["قَ","لَ","مٌ"])
                            ],
                            [
                                "kata_arab" => "مِمْسَحَةٌ",
                                "arti" => "Penghapus",
                                "huruf" => array_unique(["مِ","مْ","سَ","حَ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 102')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 102");
                        $data['tema'] = "Pertemuan 17";
                        $data['materi'] = "Mufrodat 102";
                        $data['title'] = "Sekolah Bag. 5";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "قَلَمُ الرَّصَاصِ",
                                "arti" => "Pensil",
                                "huruf" => array_unique(["قَ","لَ","مُ","_","ال","رَّ","صَ","ا","صِ"])
                            ],
                            [
                                "kata_arab" => "شَهَادَةٌ",
                                "arti" => "Sertifikat",
                                "huruf" => array_unique(["شَ","هَ","ا","دَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "كُرَّةٌ أَرْضِيَّةٌ",
                                "arti" => "Globe",
                                "huruf" => array_unique(["كُ","رَّ","ةٌ","_","أَ","رْ","ضِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "خَرِيْطَةٌ",
                                "arti" => "Peta",
                                "huruf" => array_unique(["خَ","رِ","يْ","طَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "رَوْضَةُ الْأَطْفَالِ",
                                "arti" => "Taman anak-anak",
                                "huruf" => array_unique(["رَ","وْ","ضَ","ةُ","_","الْ","أَ","طْ","فَ","ا","لِ"])
                            ],
                            [
                                "kata_arab" => "مَدْرَسَةٌ إِبْتِدَائِيَّةٌ",
                                "arti" => "Sekolah dasar",
                                "huruf" => array_unique(["مَ","دْ","رَ","سَ","ةٌ","_","إِ","بْ","تِ","دَ","ا","ئِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مَدْرَسَةٌ مُتَوَسِّطَةٌ",
                                "arti" => "SMP",
                                "huruf" => array_unique(["مَ","دْ","رَ","سَ","ةٌ","_","مُ","تَ","وَ","سِّ","طَ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 103')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 103");
                        $data['tema'] = "Pertemuan 18";
                        $data['materi'] = "Mufrodat 103";
                        $data['title'] = "Sekolah Bag. 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مَدْرَسَةٌ ثَانَوِيَّةٌ",
                                "arti" => "SMA",
                                "huruf" => array_unique(["مَ","دْ","رَ","سَ","ةٌ","_","ثَ","ا","نَ","وِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "جَامِعَةٌ",
                                "arti" => "Universitas",
                                "huruf" => array_unique(["جَ","ا","مِ","عَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مَكْتَبَةٌ",
                                "arti" => "Perpustakaan",
                                "huruf" => array_unique(["مَ","كْ","تَ","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "صُوْرَةٌ",
                                "arti" => "Gambar",
                                "huruf" => array_unique(["صُ","وْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "خَتْمٌ",
                                "arti" => "Stempel",
                                "huruf" => array_unique(["خَ","تْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "تَوْقِيْعٌ",
                                "arti" => "Tanda tangan",
                                "huruf" => array_unique(["تَ","وْ","قِ","يْ","عٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 104')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 104");
                        $data['tema'] = "Pertemuan 18";
                        $data['materi'] = "Mufrodat 104";
                        $data['title'] = "Sekolah Bag. 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "نَشْرَةٌ",
                                "arti" => "Brosur",
                                "huruf" => array_unique(["نَ","شْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "نَتِيْجَةٌ",
                                "arti" => "Nilai",
                                "huruf" => array_unique(["نَ","تِ","يْ","جَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "إِمْتِحَانٌ",
                                "arti" => "Ulangan",
                                "huruf" => array_unique(["إِ","مْ","تِ","حَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "إِمْتِحَانٌ تَحْرِيْرِيٌّ",
                                "arti" => "Ujian tulis",
                                "huruf" => array_unique(["إِ","مْ","تِ","حَ","ا","نٌ","_","تَ","حْ","رِ","يْ","رِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "إِمْتِحَانٌ شَفَوِيٌّ",
                                "arti" => "Ujian lisan",
                                "huruf" => array_unique(["إِ","مْ","تِ","حَ","ا","نٌ","_","شَ","فَ","وِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "لَجْنَةُ الْإِمْتِحَانِ",
                                "arti" => "Panitia ujian",
                                "huruf" => array_unique(["لَ","جْ","نَ","ةُ","_","الْ","إِ","مْ","تِ","حَ","ا","نِ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 105')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 105");
                        $data['tema'] = "Pertemuan 18";
                        $data['materi'] = "Mufrodat 105";
                        $data['title'] = "Pekerjaan Tentang Sekolah Bag. 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "ذَهَبَ-يَذْهَبُ-ذَهَابًا",
                                "arti" => "Pergi",
                                "huruf" => array_unique(["ذَ","هَ","بَ","-","يَ","ذْ","هَ","بُ","-","ذَ","هَ","ا","بً","ا"])
                            ],
                            [
                                "kata_arab" => "رَجَعَ-يَرْجِعُ-رُجُوْعًا",
                                "arti" => "Pulang",
                                "huruf" => array_unique(["رَ","جَ","عَ","-","يَ","رْ","جِ","عُ","-","رُ","جُ","وْ","عً","ا"])
                            ],
                            [
                                "kata_arab" => "عَلَّمَ-يُعَلِّمُ-تَعْلِيْمًا",
                                "arti" => "Mengajari",
                                "huruf" => array_unique(["عَ","لَّ","مَ","-","يُ","عَ","لِّ","مُ","-","تَ","عْ","لِ","يْ","مً","ا"])
                            ],
                            [
                                "kata_arab" => "تَعَلَّمَ-يَتَعَلَّمُ-تَعَلُّمًا",
                                "arti" => "Belajar",
                                "huruf" => array_unique(["تَ","عَ","لَّ","مَ","-","يَ","تَ","عَ","لَّ","مُ","-","تَ","عَ","لُّ","مً","ا"])
                            ],
                            [
                                "kata_arab" => "أَيَّدَ-يُؤَيِّدُ-تَأْيِيْدًا",
                                "arti" => "Meyakinkan",
                                "huruf" => array_unique(["أَ","يَّ","دَ","-","يُ","ؤَ","يِّ","دُ","-","تَ","أْ","يِ","يْ","دً","ا"])
                            ],
                            [
                                "kata_arab" => "مَثَّلَ-يُمَثِّلُ-تَمْثِيْلًا",
                                "arti" => "Menirukan",
                                "huruf" => array_unique(["مَ","ثَّ","لَ","-","يُ","مَ","ثِّ","لُ","-","تَ","مْ","ثِ","يْ","لً","ا"])
                            ],
                            [
                                "kata_arab" => "مَرَّنَ-يُمَرِّنُ-تَمْرِيْنًا",
                                "arti" => "Melatih",
                                "huruf" => array_unique(["مَ","رَّ","نَ","-","يُ","مَ","رِّ","نُ","-","تَ","مْ","رِ","يْ","نً","ا"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 106')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 106");
                        $data['tema'] = "Pertemuan 18";
                        $data['materi'] = "Mufrodat 106";
                        $data['title'] = "Pekerjaan Tentang Sekolah Bag. 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "اِمْتَحَنَ-يَمْتَحِنُ-اِمْتِحَانًا",
                                "arti" => "Ujian",
                                "huruf" => array_unique(["اِ","مْ","تَ","حَ","نَ","-","يَ","مْ","تَ","حِ","نُ","-","اِ","مْ","تِ","حَ","ا","نً","ا"])
                            ],
                            [
                                "kata_arab" => "اَفَادَ-يُفِيْدُ-إِفَادَةً",
                                "arti" => "Memberi manfaat",
                                "huruf" => array_unique(["اَ","فَ","ا","دَ","-","يُ","فِ","يْ","دُ","-","إِ","فَ","ا","دَ","ةً"])
                            ],
                            [
                                "kata_arab" => "عَمِلَ-يَعْمَلُ-عَمَلاً",
                                "arti" => "Melakukan",
                                "huruf" => array_unique(["عَ","مِ","لَ","-","يَ","عْ","مَ","لُ","-","عَ","مَ","لاً"])
                            ],
                            [
                                "kata_arab" => "فَهِمَ-يَفْهَمُ-فَهْمًا",
                                "arti" => "Memahami",
                                "huruf" => array_unique(["فَ","هِ","مَ","-","يَ","فْ","هَ","مُ","-","فَ","هْ","مً","ا"])
                            ],
                            [
                                "kata_arab" => "عَلِمَ-يَعْلَمُ-عِلْمًا",
                                "arti" => "Mengetahui",
                                "huruf" => array_unique(["عَ","لِ","مَ","-","يَ","عْ","لَ","مُ","-","عِ","لْ","مً","ا"])
                            ],
                            // [
                            //     "kata_arab" => "عَرَفَ-يَعْرِفُ-مَعْرِفَةً",
                            //     "arti" => "Mengetahui",
                            //     "huruf" => array_unique(["عَ","رَ","فَ","-","يَ","عْ","رِ","فُ","-","مَ","عْ","رِ","فَ","ةً"])
                            // ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 107')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 107");
                        $data['tema'] = "Pertemuan 18";
                        $data['materi'] = "Mufrodat 107";
                        $data['title'] = "Pekerjaan Tentang Sekolah Bag. 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "صَنَعَ-يَصْنَعُ-صِنَاعَةً",
                                "arti" => "Membuat",
                                "huruf" => array_unique(["صَ","نَ","عَ","-","يَ","صْ","نَ","عُ","-","صِ","نَ","ا","عَ","ةً"])
                            ],
                            [
                                "kata_arab" => "جَرَّبَ-يُجَرِّبُ-تَجْرِيْبًا",
                                "arti" => "Mencoba",
                                "huruf" => array_unique(["جَ","رَّ","بَ","-","يُ","جَ","رِّ","بُ","-","تَ","جْ","رِ","يْ","بً","ا"])
                            ],
                            [
                                "kata_arab" => "فَتَّشَ-يُفَتِّشُ-تَفْتِيْشًا",
                                "arti" => "Memeriksa",
                                "huruf" => array_unique(["فَ","تَّ","شَ","-","يُ","فَ","تِّ","شُ","-","تَ","فْ","تِ","يْ","شً","ا"])
                            ],
                            [
                                "kata_arab" => "كَتَبَ-يَكْتُبُ-كِتَابَةً",
                                "arti" => "Menulis",
                                "huruf" => array_unique(["كَ","تَ","بَ","-","يَ","كْ","تُ","بُ","-","كِ","تَ","ا","بَ","ةً"])
                            ],
                            [
                                "kata_arab" => "رَسَمَ-يَرْسُمُ-رَسْمًا",
                                "arti" => "Menggambar",
                                "huruf" => array_unique(["رَ","سَ","مَ","-","يَ","رْ","سُ","مُ","-","رَ","سْ","مً","ا"])
                            ],
                            [
                                "kata_arab" => "سَجَّلَ-يُسَجِّلُ-تَسْجِيْلًا",
                                "arti" => "Mendaftar",
                                "huruf" => array_unique(["سَ","جَّ","لَ","-","يُ","سَ","جِّ","لُ","-","تَ","سْ","جِ","يْ","لً","ا"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 108')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 108");
                        $data['tema'] = "Pertemuan 18";
                        $data['materi'] = "Mufrodat 108";
                        $data['title'] = "Kendaraan-kendaraan Bag. 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "دَرَّاجَةٌ",
                                "arti" => "Sepeda",
                                "huruf" => array_unique(["دَ","رَّ","ا","جَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "دَرَّاجَةٌ نَارِيَّةٌ",
                                "arti" => "Sepeda Motor",
                                "huruf" => array_unique(["دَ","رَّ","ا","جَ","ةٌ","_","نَ","ا","رِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَيَّارَةٌ",
                                "arti" => "Mobil",
                                "huruf" => array_unique(["سَ","يَّ","ا","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَيَّارَةُ السِّبَاقِ",
                                "arti" => "Mobil balap",
                                "huruf" => array_unique(["سَ","يَّ","ا","رَ","ةُ","_","ال","سِّ","بَ","ا","قِ"])
                            ],
                            [
                                "kata_arab" => "سَيَّارَةُ الرُّكَّابِ",
                                "arti" => "Mobil umum",
                                "huruf" => array_unique(["سَ","يَّ","ا","رَ","ةُ","_","ال","رُّ","كَّ","ا","بِ"])
                            ],
                            [
                                "kata_arab" => "حَافِلَةٌ",
                                "arti" => "Bis",
                                "huruf" => array_unique(["حَ","ا","فِ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "شَاحِنَةٌ",
                                "arti" => "Truk",
                                "huruf" => array_unique(["شَ","ا","حِ","نَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "بِتْشَا",
                                "arti" => "Becak",
                                "huruf" => array_unique(["بِ","تْ","شَ","ا"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 109')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 109");
                        $data['tema'] = "Pertemuan 18";
                        $data['materi'] = "Mufrodat 109";
                        $data['title'] = "Kendaraan-kendaraan Bag. 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "عَرَبَةٌ",
                                "arti" => "Gerobak",
                                "huruf" => array_unique(["عَ","رَ","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "بَاخِرَةٌ",
                                "arti" => "Kapal uap",
                                "huruf" => array_unique(["بَ","ا","خِ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَفِيْنَةٌ",
                                "arti" => "Kapal",
                                "huruf" => array_unique(["سَ","فِ","يْ","نَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "سَفِيْنَةٌ شِرَاعِيَّةٌ",
                                "arti" => "Perahu layar",
                                "huruf" => array_unique(["سَ","فِ","يْ","نَ","ةٌ","_","شِ","رَ","ا","عِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "تَكْسِى",
                                "arti" => "Taksi",
                                "huruf" => array_unique(["تَ","كْ","سِ","ى"])
                            ],
                            [
                                "kata_arab" => "قِطَارٌ",
                                "arti" => "Kereta api",
                                "huruf" => array_unique(["قِ","طَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "قَاطِرَةٌ",
                                "arti" => "Lokomotif",
                                "huruf" => array_unique(["قَ","ا","طِ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "طَائِرَةٌ",
                                "arti" => "Pesawat",
                                "huruf" => array_unique(["طَ","ا","ئِ","رَ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 110')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 110");
                        $data['tema'] = "Pertemuan 18";
                        $data['materi'] = "Mufrodat 110";
                        $data['title'] = "Kendaraan-kendaraan Bag. 3";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "دَبَّابَةٌ",
                                "arti" => "Tank",
                                "huruf" => array_unique(["دَ","بَّ","ا","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "زَوْرَقٌ",
                                "arti" => "Sampan",
                                "huruf" => array_unique(["زَ","وْ","رَ","قٌ"])
                            ],
                            [
                                "kata_arab" => "مِقْوَدٌ",
                                "arti" => "Setir",
                                "huruf" => array_unique(["مِ","قْ","وَ","دٌ"])
                            ],
                            [
                                "kata_arab" => "فَرْمَلَةٌ",
                                "arti" => "Rem",
                                "huruf" => array_unique(["فَ","رْ","مَ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "عَجَلَةٌ",
                                "arti" => "Roda",
                                "huruf" => array_unique(["عَ","جَ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "بِنْزِيْنٌ",
                                "arti" => "Bensin",
                                "huruf" => array_unique(["بِ","نْ","زِ","يْ","نٌ"])
                            ],
                            [
                                "kata_arab" => "إِشَارَةُ الْمُرُوْرِ",
                                "arti" => "Lampu lalu lintas",
                                "huruf" => array_unique(["إِ","شَ","ا","رَ","ةُ","_","الْ","مُ","رُ","وْ","رِ"])
                            ],
                            [
                                "kata_arab" => "تَذْكِرَةٌ",
                                "arti" => "Tiket",
                                "huruf" => array_unique(["تَ","ذْ","كِ","رَ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 111')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 111");
                        $data['tema'] = "Pertemuan 18";
                        $data['materi'] = "Mufrodat 111";
                        $data['title'] = "Kendaraan-kendaraan Bag. 4";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "تَأْشِيْرَةٌ",
                                "arti" => "Visa",
                                "huruf" => array_unique(["تَ","أْ","شِ","يْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "جَوَازُ السَّفَرِ",
                                "arti" => "Paspor",
                                "huruf" => array_unique(["جَ","وَ","ا","زُ","_","ال","سَّ","فَ","رِ"])
                            ],
                            [
                                "kata_arab" => "أُجْرَةٌ",
                                "arti" => "Tarif",
                                "huruf" => array_unique(["أُ","جْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "دُوَارُ الْبَرِّ",
                                "arti" => "Mabuk darat",
                                "huruf" => array_unique(["دُ","وَ","ا","رُ","_","الْ","بَ","رِّ"])
                            ],
                            [
                                "kata_arab" => "دُوَارُ الْبَحْرِ",
                                "arti" => "Mabuk laut",
                                "huruf" => array_unique(["دُ","وَ","ا","رُ","_","الْ","بَ","حْ","رِ"])
                            ],
                            [
                                "kata_arab" => "هَدَايَا السَّفَرِ",
                                "arti" => "Oleh-oleh",
                                "huruf" => array_unique(["هَ","دَ","ا","يَ","ا","_","ال","سَّ","فَ","رِ"])
                            ],
                            [
                                "kata_arab" => "مَصَارِيْفُ السَّفَرِ",
                                "arti" => "Biaya perjalanan",
                                "huruf" => array_unique(["مَ","صَ","ا","رِ","يْ","فُ","_","ال","سَّ","فَ","رِ"])
                            ],
                            [
                                "kata_arab" => "مَسَافَةُ السَّفَرِ",
                                "arti" => "Jarak perjalanan",
                                "huruf" => array_unique(["مَ","سَ","ا","فَ","ةُ","_","ال","سَّ","فَ","رِ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 112')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 112");
                        $data['tema'] = "Pertemuan 19";
                        $data['materi'] = "Mufrodat 112";
                        $data['title'] = "Pekerjaan Tentang Kendaraan";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "قَادَ-يَقُودُ-قِيَادَةً",
                                "arti" => "Menyetir",
                                "huruf" => array_unique(["قَ","ا","دَ","-","يَ","قُ","و","دُ","-","قِ","يَ","ا","دَ","ةً"])
                            ],
                            [
                                "kata_arab" => "رَكِبَ-يَرْكَبُ-رُكُوْبًا",
                                "arti" => "Mengendarai",
                                "huruf" => array_unique(["رَ","كِ","بَ","-","يَ","رْ","كَ","بُ","-","رُ","كُ","وْ","بً","ا"])
                            ],
                            [
                                "kata_arab" => "رَدِفَ-يَرْدَفُ-رَدْفًا",
                                "arti" => "Membonceng",
                                "huruf" => array_unique(["رَ","دِ","فَ","-","يَ","رْ","دَ","فُ","-","رَ","دْ","فً","ا"])
                            ],
                            [
                                "kata_arab" => "فَرْمَلَ-يُفَرْمِلُ-فَرْمَلَةً",
                                "arti" => "Mengerem",
                                "huruf" => array_unique(["فَ","رْ","مَ","لَ","-","يُ","فَ","رْ","مِ","لُ","-","فَ","رْ","مَ","لَ","ةً"])
                            ],
                            [
                                "kata_arab" => "تَوَقَّفَ-يَتَوَقَّفُ-تَوَقُّفًا",
                                "arti" => "Berhenti",
                                "huruf" => array_unique(["تَ","وَ","قَّ","فَ","-","يَ","تَ","وَ","قَّ","فُ","-","تَ","وَ","قُّ","فً","ا"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 113')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 113");
                        $data['tema'] = "Pertemuan 19";
                        $data['materi'] = "Mufrodat 113";
                        $data['title'] = "Rumah Sakit Bag. 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "طَبِيْبٌ",
                                "arti" => "Dokter (lk)",
                                "huruf" => array_unique(["طَ","بِ","يْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "طَبِيْبَةٌ",
                                "arti" => "Dokter (pr)",
                                "huruf" => array_unique(["طَ","بِ","يْ","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مُمَرِّضٌ",
                                "arti" => "Perawat",
                                "huruf" => array_unique(["مُ","مَ","رِّ","ضٌ"])
                            ],
                            [
                                "kata_arab" => "مَرِيْضٌ",
                                "arti" => "Pasien",
                                "huruf" => array_unique(["مَ","رِ","يْ","ضٌ"])
                            ],
                            [
                                "kata_arab" => "طَبِيْبٌ اِخْتِصَاصِيٌّ",
                                "arti" => "Dokter speasialis",
                                "huruf" => array_unique(["طَ","بِ","يْ","بٌ","_","اِ","خْ","تِ","صَ","ا","صِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "طَبِيْبُ الْأَسْنَانِ",
                                "arti" => "Dokter gigi",
                                "huruf" => array_unique(["طَ","بِ","يْ","بُ","_","الْ","أَ","سْ","نَ","ا","نِ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 114')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 114");
                        $data['tema'] = "Pertemuan 19";
                        $data['materi'] = "Mufrodat 114";
                        $data['title'] = "Rumah Sakit Bag. 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "طَبِيْبُ الْجَرَاحِ",
                                "arti" => "Dokter Bedah",
                                "huruf" => array_unique(["طَ","بِ","يْ","بُ","_","الْ","جَ","رَ","ا","حِ"])
                            ],
                            [
                                "kata_arab" => "طَبِيْبٌ بَيْطَرِيٌّ",
                                "arti" => "Dokter hewan",
                                "huruf" => array_unique(["طَ","بِ","يْ","بٌ","_","بَ","يْ","طَ","رِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "دَوَاءٌ",
                                "arti" => "Obat",
                                "huruf" => array_unique(["دَ","وَ","ا","ءٌ","دَ","ا","ءٌ"])
                            ],
                            [
                                "kata_arab" => "دَاءٌ",
                                "arti" => "Penyebab",
                                "huruf" => array_unique(["دَ","وَ","ا","ءٌ","دَ","ا","ءٌ"])
                            ],
                            [
                                "kata_arab" => "سَيَّارَةُ الْإِسْعَافِ",
                                "arti" => "Mobil Ambulan",
                                "huruf" => array_unique(["سَ","يَّ","ا","رَ","ةُ","_","الْ","إِ","سْ","عَ","ا","فِ"])
                            ],
                            [
                                "kata_arab" => "مِيْزَانُ الْحَرَارَةِ",
                                "arti" => "Termometer",
                                "huruf" => array_unique(["مِ","يْ","زَ","ا","نُ","_","الْ","حَ","رَ","ا","رَ","ةِ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 115')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 115");
                        $data['tema'] = "Pertemuan 19";
                        $data['materi'] = "Mufrodat 115";
                        $data['title'] = "Nama-nama Hewan Bag. 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "كَلْبٌ",
                                "arti" => "Anjing",
                                "huruf" => array_unique(["قِ","طٌّ","كَ","لْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "قِطٌّ",
                                "arti" => "Kucing",
                                "huruf" => array_unique(["قِ","طٌّ","كَ","لْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "أَرْنَبٌ",
                                "arti" => "Kelinci",
                                "huruf" => array_unique(["أَ","رْ","نَ","بٌ"])
                            ],
                            [
                                "kata_arab" => "فَأْرٌ",
                                "arti" => "Tikus",
                                "huruf" => array_unique(["فَ","أْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "ثَوْرٌ",
                                "arti" => "Banteng",
                                "huruf" => array_unique(["ثَ","وْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "خَرُوْفٌ",
                                "arti" => "biri-biri",
                                "huruf" => array_unique(["خَ","رُ","وْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "خِنْزِيْرٌ",
                                "arti" => "Babi",
                                "huruf" => array_unique(["خِ","نْ","زِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "بَقَرٌ",
                                "arti" => "Sapi",
                                "huruf" => array_unique(["بَ","قَ","رٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 116')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 116");
                        $data['tema'] = "Pertemuan 19";
                        $data['materi'] = "Mufrodat 116";
                        $data['title'] = "Nama-nama Hewan Bag. 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "جَامُوْسٌ",
                                "arti" => "Kerbau",
                                "huruf" => array_unique(["جَ","ا","مُ","وْ","سٌ"])
                            ],
                            [
                                "kata_arab" => "حِصَانٌ",
                                "arti" => "Kuda",
                                "huruf" => array_unique(["حِ","صَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "دَجَاجٌ",
                                "arti" => "Ayam",
                                "huruf" => array_unique(["دَ","جَ","ا","جٌ"])
                            ],
                            [
                                "kata_arab" => "غَنَمٌ",
                                "arti" => "Kambing",
                                "huruf" => array_unique(["غَ","نَ","مٌ"])
                            ],
                            [
                                "kata_arab" => "زَرَافَةٌ",
                                "arti" => "Jerapah",
                                "huruf" => array_unique(["زَ","رَ","ا","فَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "نَحْلٌ",
                                "arti" => "Lebah",
                                "huruf" => array_unique(["نَ","حْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "ضِفْدَاعٌ",
                                "arti" => "Kodok",
                                "huruf" => array_unique(["ضِ","فْ","دَ","ا","عٌ"])
                            ],
                            [
                                "kata_arab" => "قُنْفُذٌ",
                                "arti" => "Landak",
                                "huruf" => array_unique(["قُ","نْ","فُ","ذٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 117')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 117");
                        $data['tema'] = "Pertemuan 19";
                        $data['materi'] = "Mufrodat 117";
                        $data['title'] = "Nama-nama Hewan Bag. 3";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سَرَطَانُ الْبَحْرِ",
                                "arti" => "Kepiting laut",
                                "huruf" => array_unique(["سَ","رَ","طَ","ا","نُ","_","الْ","بَ","حْ","رِ"])
                            ],
                            [
                                "kata_arab" => "كَرْكَدَّانٌ",
                                "arti" => "Badak",
                                "huruf" => array_unique(["كَ","رْ","كَ","دَّ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "نَـمِرٌ",
                                "arti" => "Harimau",
                                "huruf" => array_unique(["نَ","مِ","رٌ"])
                            ],
                            [
                                "kata_arab" => "ذِئْبٌ",
                                "arti" => "Serigala",
                                "huruf" => array_unique(["ذِ","ئْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "سِنْجَابٌ",
                                "arti" => "Tupai",
                                "huruf" => array_unique(["سِ","نْ","جَ","ا","بٌ"])
                            ],
                            [
                                "kata_arab" => "أَسَدٌ",
                                "arti" => "Singa",
                                "huruf" => array_unique(["أَ","سَ","دٌ"])
                            ],
                            [
                                "kata_arab" => "فَرَسٌ",
                                "arti" => "Kuda betina",
                                "huruf" => array_unique(["فَ","رَ","سٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 118')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 118");
                        $data['tema'] = "Pertemuan 19";
                        $data['materi'] = "Mufrodat 118";
                        $data['title'] = "Nama-nama Hewan Bag. 4";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "حِمَارٌ",
                                "arti" => "Keledai",
                                "huruf" => array_unique(["حِ","مَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "حِمَارُ الزَّرَدِ",
                                "arti" => "Zebra",
                                "huruf" => array_unique(["حِ","مَ","ا","رُ","_","ال","زَّ","رَ","دِ"])
                            ],
                            [
                                "kata_arab" => "ثَعْبَانٌ",
                                "arti" => "Ular",
                                "huruf" => array_unique(["ثَ","عْ","بَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "وَرَلٌ",
                                "arti" => "Kadal",
                                "huruf" => array_unique(["وَ","رَ","لٌ"])
                            ],
                            [
                                "kata_arab" => "قَمْلٌ",
                                "arti" => "Kutu",
                                "huruf" => array_unique(["قَ","مْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "ضَبٌّ",
                                "arti" => "Biawak",
                                "huruf" => array_unique(["ضَ","بٌّ"])
                            ],
                            [
                                "kata_arab" => "حِرْبَاءٌ",
                                "arti" => "Bunglon",
                                "huruf" => array_unique(["حِ","رْ","بَ","ا","ءٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 119')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 119");
                        $data['tema'] = "Pertemuan 20";
                        $data['materi'] = "Mufrodat 119";
                        $data['title'] = "Nama-nama Hewan Bag. 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "تِمْسَاحٌ",
                                "arti" => "Buaya",
                                "huruf" => array_unique(["تِ","مْ","سَ","ا","حٌ"])
                            ],
                            [
                                "kata_arab" => "أَنْقَلِيْسُ",
                                "arti" => "Belut",
                                "huruf" => array_unique(["أَ","نْ","قَ","لِ","يْ","سُ"])
                            ],
                            [
                                "kata_arab" => "دُبٌّ",
                                "arti" => "Beruang",
                                "huruf" => array_unique(["دُ","بٌّ"])
                            ],
                            [
                                "kata_arab" => "جُدْجُدٌ",
                                "arti" => "Jangkrik",
                                "huruf" => array_unique(["جُ","دْ","جُ","دٌ"])
                            ],
                            [
                                "kata_arab" => "وَزَغَةٌ",
                                "arti" => "Cecak",
                                "huruf" => array_unique(["وَ","زَ","غَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "فِيْلٌ",
                                "arti" => "Gajah",
                                "huruf" => array_unique(["فِ","يْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "نَمْلٌ",
                                "arti" => "Semut",
                                "huruf" => array_unique(["نَ","مْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "نَمْلَةٌ بَيْضَاءُ",
                                "arti" => "Rayap",
                                "huruf" => array_unique(["نَ","مْ","لَ","ةٌ","_","بَ","يْ","ضَ","ا","ءُ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 120')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 120");
                        $data['tema'] = "Pertemuan 20";
                        $data['materi'] = "Mufrodat 120";
                        $data['title'] = "Nama-nama Hewan Bag. 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "بَعُوْضَةٌ",
                                "arti" => "Nyamuk",
                                "huruf" => array_unique(["بَ","عُ","وْ","ضَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "خُفَاشٌ",
                                "arti" => "Kelelawar",
                                "huruf" => array_unique(["خُ","فَ","ا","شٌ"])
                            ],
                            [
                                "kata_arab" => "جَمَلٌ",
                                "arti" => "Unta",
                                "huruf" => array_unique(["جَ","مَ","لٌ"])
                            ],
                            [
                                "kata_arab" => "غَزَالٌ",
                                "arti" => "Kijang",
                                "huruf" => array_unique(["غَ","زَ","ا","لٌ"])
                            ],
                            [
                                "kata_arab" => "قِرْدٌ",
                                "arti" => "Monyet",
                                "huruf" => array_unique(["قِ","رْ","دٌ"])
                            ],
                            [
                                "kata_arab" => "إِنْسَانُ اْلغَابِ",
                                "arti" => "Orang utan",
                                "huruf" => array_unique(["إِ","نْ","سَ","ا","نُ","_","اْل","غَ","ا","بِ"])
                            ],
                            [
                                "kata_arab" => "عَقْرَبٌ",
                                "arti" => "Kalajengking",
                                "huruf" => array_unique(["عَ","قْ","رَ","بٌ"])
                            ],
                            [
                                "kata_arab" => "حُنْفَسَاءُ",
                                "arti" => "Kumbang",
                                "huruf" => array_unique(["حُ","نْ","فَ","سَ","ا","ءُ"])
                            ],
                            [
                                "kata_arab" => "جَرَادٌ",
                                "arti" => "Belalang",
                                "huruf" => array_unique(["جَ","رَ","ا","دٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 121')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 121");
                        $data['tema'] = "Pertemuan 20";
                        $data['materi'] = "Mufrodat 121";
                        $data['title'] = "Nama-nama Buah Bag. 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "تُفَّاحٌ",
                                "arti" => "Apel",
                                "huruf" => array_unique(["تُ","فَّ","ا","حٌ"])
                            ],
                            [
                                "kata_arab" => "عِنَبٌ",
                                "arti" => "Anggur",
                                "huruf" => array_unique(["عِ","نَ","بٌ"])
                            ],
                            [
                                "kata_arab" => "كُمِثْرَى",
                                "arti" => "Pir",
                                "huruf" => array_unique(["كُ","مِ","ثْ","رَ","ى"])
                            ],
                            [
                                "kata_arab" => "مَوْزٌ",
                                "arti" => "Pisang",
                                "huruf" => array_unique(["مَ","وْ","زٌ"])
                            ],
                            [
                                "kata_arab" => "بَابَايَا",
                                "arti" => "Pepaya",
                                "huruf" => array_unique(["بَ","ا","بَ","ا","يَ","ا"])
                            ],
                            [
                                "kata_arab" => "مَنْجَا",
                                "arti" => "Mangga",
                                "huruf" => array_unique(["مَ","نْ","جَ","ا"])
                            ],
                            [
                                "kata_arab" => "جَوْزُ الْهِنْدِ",
                                "arti" => "Asam",
                                "huruf" => array_unique(["جَ","وْ","زُ","_","الْ","هِ","نْ","دِ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 122')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 122");
                        $data['tema'] = "Pertemuan 20";
                        $data['materi'] = "Mufrodat 122";
                        $data['title'] = "Nama-nama Buah Bag. 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "اَفُوْكَادُو",
                                "arti" => "Alpukat",
                                "huruf" => array_unique(["اَ","فُ","وْ","كَ","ا","دُ","و"])
                            ],
                            [
                                "kata_arab" => "شَمَامٌ",
                                "arti" => "Blewa",
                                "huruf" => array_unique(["شَ","مَ","ا","مٌ"])
                            ],
                            [
                                "kata_arab" => "بِطِّيْخٌ",
                                "arti" => "Semangka",
                                "huruf" => array_unique(["بِ","طِّ","يْ","خٌ"])
                            ],
                            [
                                "kata_arab" => "بُرْتُقَالٌ",
                                "arti" => "Jeruk",
                                "huruf" => array_unique(["بُ","رْ","تُ","قَ","ا","لٌ"])
                            ],
                            [
                                "kata_arab" => "تَمْرٌ",
                                "arti" => "Kurma",
                                "huruf" => array_unique(["تَ","مْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "فَرَاوِلَةٌ",
                                "arti" => "Strobery",
                                "huruf" => array_unique(["فَ","رَ","ا","وِ","لَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "رُمَّانٌ",
                                "arti" => "Delima",
                                "huruf" => array_unique(["رُ","مَّ","ا","نٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 123')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 123");
                        $data['tema'] = "Pertemuan 20";
                        $data['materi'] = "Mufrodat 123";
                        $data['title'] = "Nama-nama Buah Bag. 3";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "فَاكِهَةُ التِّنِيْنَ",
                                "arti" => "Buah tin",
                                "huruf" => array_unique(["فَ","ا","كِ","هَ","ةُ","_","ال","تِّ","نِ","يْ","نَ"])
                            ],
                            [
                                "kata_arab" => "أَنَانَاسُ",
                                "arti" => "Nanas",
                                "huruf" => array_unique(["أَ","نَ","ا","نَ","ا","سُ"])
                            ],
                            [
                                "kata_arab" => "رَمْبُوْتَانْ",
                                "arti" => "Rambutan",
                                "huruf" => array_unique(["رَ","مْ","بُ","وْ","تَ","ا","نْ"])
                            ],
                            [
                                "kata_arab" => "دُوْرِيَانْ",
                                "arti" => "Durian",
                                "huruf" => array_unique(["دُ","وْ","رِ","يَ","ا","نْ"])
                            ],
                            [
                                "kata_arab" => "طَمَاطِمُ",
                                "arti" => "Tomat",
                                "huruf" => array_unique(["طَ","مَ","ا","طِ","مُ"])
                            ],
                            [
                                "kata_arab" => "جَوَّافَةٌ",
                                "arti" => "Jambu",
                                "huruf" => array_unique(["جَ","وَّ","ا","فَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "ذُرَّةٌ",
                                "arti" => "Jagung",
                                "huruf" => array_unique(["ذُ","رَّ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 124')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 124");
                        $data['tema'] = "Pertemuan 20";
                        $data['materi'] = "Mufrodat 124";
                        $data['title'] = "Pekerjaan Tentang Buah";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "حَصَدَ-يَحْصُدُ-حَصَادًا",
                                "arti" => "Memanem",
                                "huruf" => array_unique(["حَ","صَ","دَ","-","يَ","حْ","صُ","دُ","-","حَ","صَ","ا","دً","ا"])
                            ],
                            [
                                "kata_arab" => "زَرَعَ-يَزْرَعُ-زَرْعًا",
                                "arti" => "Menanam",
                                "huruf" => array_unique(["زَ","رَ","عَ","-","يَ","زْ","رَ","عُ","-","زَ","رْ","عً","ا"])
                            ],
                            [
                                "kata_arab" => "تَحَفَّظَ-يَتَحَفَّظُ-تَحَفُّظًا",
                                "arti" => "Merawat",
                                "huruf" => array_unique(["تَ","حَ","فَّ","ظَ","-","يَ","تَ","حَ","فَّ","ظُ","-","تَ","حَ","فُّ","ظً","ا"])
                            ],
                            [
                                "kata_arab" => "قَطَفَ-يَقْطِفُ-قَطْفًا",
                                "arti" => "Memetik",
                                "huruf" => array_unique(["قَ","طَ","فَ","-","يَ","قْ","طِ","فُ","-","قَ","طْ","فً","ا"])
                            ],
                            [
                                "kata_arab" => "سَمَّدَ-يُسَمِّدُ-تَسْمِيْدًا",
                                "arti" => "Memupuk",
                                "huruf" => array_unique(["سَ","مَّ","دَ","-","يُ","سَ","مِّ","دُ","-","تَ","سْ","مِ","يْ","دً","ا"])
                            ],
                            [
                                "kata_arab" => "عَزَقَ-يَعْزِقُ-عَزْقًا",
                                "arti" => "Mencangkul",
                                "huruf" => array_unique(["عَ","زَ","قَ","-","يَ","عْ","زِ","قُ","-","عَ","زْ","قً","ا"])
                            ],
                            [
                                "kata_arab" => "حَرَثَ-يَحْرُثُ-حَرْثًا",
                                "arti" => "Mengolah",
                                "huruf" => array_unique(["حَ","رَ","ثَ","-","يَ","حْ","رُ","ثُ","-","حَ","رْ","ثً","ا"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 125')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 125");
                        $data['tema'] = "Pertemuan 21";
                        $data['materi'] = "Mufrodat 125";
                        $data['title'] = "Nama-nama Tempat Bag. 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مَطْبَخٌ",
                                "arti" => "Dapur",
                                "huruf" => array_unique(["مَ","طْ","بَ","خٌ"])
                            ],
                            [
                                "kata_arab" => "صَيْدَلِيَّةٌ",
                                "arti" => "Apotek",
                                "huruf" => array_unique(["صَ","يْ","دَ","لِ","يَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "بَنْكٌ",
                                "arti" => "Bank",
                                "huruf" => array_unique(["بَ","نْ","كٌ"])
                            ],
                            [
                                "kata_arab" => "مَصْنَعٌ",
                                "arti" => "Pabrik",
                                "huruf" => array_unique(["مَ","صْ","نَ","عٌ"])
                            ],
                            [
                                "kata_arab" => "سُوْقٌ",
                                "arti" => "Pasar",
                                "huruf" => array_unique(["سُ","وْ","قٌ"])
                            ],
                            [
                                "kata_arab" => "مَوْلٌ",
                                "arti" => "Mall",
                                "huruf" => array_unique(["مَ","وْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "مَوْقِفُ السَّيَّارَةِ",
                                "arti" => "Terminal",
                                "huruf" => array_unique(["مَ","وْ","قِ","فُ","_","ال","سَّ","يَّ","ا","رَ","ةِ"])
                            ],
                            [
                                "kata_arab" => "مَحَطَّةُ الْقِطَارِ",
                                "arti" => "Stasiun Kereta",
                                "huruf" => array_unique(["مَ","حَ","طَّ","ةُ","_","الْ","قِ","طَ","ا","رِ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 126')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 126");
                        $data['tema'] = "Pertemuan 21";
                        $data['materi'] = "Mufrodat 126";
                        $data['title'] = "Nama-nama Tempat Bag. 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مَحَطَّةُ الْبِنْزِيْنِ",
                                "arti" => "Pom bensin",
                                "huruf" => array_unique(["مَ","حَ","طَّ","ةُ","_","الْ","بِ","نْ","زِ","يْ","نِ"])
                            ],
                            [
                                "kata_arab" => "مَطَارٌ",
                                "arti" => "Bandara",
                                "huruf" => array_unique(["مَ","طَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "مِيْنَاءٌ",
                                "arti" => "Pelabuhan",
                                "huruf" => array_unique(["مِ","يْ","نَ","ا","ءٌ"])
                            ],
                            [
                                "kata_arab" => "مُسْتَوْدَعٌ",
                                "arti" => "Gudang",
                                "huruf" => array_unique(["مُ","سْ","تَ","وْ","دَ","عٌ"])
                            ],
                            [
                                "kata_arab" => "مَكْتَبَةٌ",
                                "arti" => "Perpustakaan",
                                "huruf" => array_unique(["مَ","كْ","تَ","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "فُنْدُقٌ",
                                "arti" => "Hotel",
                                "huruf" => array_unique(["فُ","نْ","دُ","قٌ"])
                            ],
                            [
                                "kata_arab" => "مَقْهَى",
                                "arti" => "Warung kopi",
                                "huruf" => array_unique(["مَ","قْ","هَ","ى"])
                            ],
                            [
                                "kata_arab" => "مَمْلَكَةٌ",
                                "arti" => "Kerajaan",
                                "huruf" => array_unique(["مَ","مْ","لَ","كَ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 127')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 127");
                        $data['tema'] = "Pertemuan 21";
                        $data['materi'] = "Mufrodat 127";
                        $data['title'] = "Nama-nama Tempat Bag. 3";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مَحْكَمَةٌ",
                                "arti" => "Pengadilan",
                                "huruf" => array_unique(["مَ","حْ","كَ","مَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "حَبْسٌ",
                                "arti" => "Penjara",
                                "huruf" => array_unique(["حَ","بْ","سٌ"])
                            ],
                            [
                                "kata_arab" => "دَوْرَةٌ",
                                "arti" => "Kursusan",
                                "huruf" => array_unique(["دَ","وْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "إِدَارَةٌ",
                                "arti" => "Kantor",
                                "huruf" => array_unique(["إِ","دَ","ا","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "حَانُوْتٌ",
                                "arti" => "Warung",
                                "huruf" => array_unique(["حَ","ا","نُ","وْ","تٌ"])
                            ],
                            [
                                "kata_arab" => "مَقْصَفٌّ",
                                "arti" => "Kantin",
                                "huruf" => array_unique(["مَ","قْ","صَ","فٌّ"])
                            ],
                            [
                                "kata_arab" => "دُكَّانٌ",
                                "arti" => "Toko",
                                "huruf" => array_unique(["دُ","كَّ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "شَارِعٌ",
                                "arti" => "Jalan",
                                "huruf" => array_unique(["شَ","ا","رِ","عٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 128')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 128");
                        $data['tema'] = "Pertemuan 21";
                        $data['materi'] = "Mufrodat 128";
                        $data['title'] = "Nama-nama Tempat Bag. 4";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مَتْحَفٌ",
                                "arti" => "Museum",
                                "huruf" => array_unique(["مَ","تْ","حَ","فٌ"])
                            ],
                            [
                                "kata_arab" => "مَعْمَلٌ",
                                "arti" => "Laboratorium",
                                "huruf" => array_unique(["مَ","عْ","مَ","لٌ"])
                            ],
                            [
                                "kata_arab" => "مَطْعَمٌ",
                                "arti" => "Restauran",
                                "huruf" => array_unique(["مَ","طْ","عَ","مٌ"])
                            ],
                            [
                                "kata_arab" => "حَدِيْقَةٌ",
                                "arti" => "Kebun",
                                "huruf" => array_unique(["حَ","دِ","يْ","قَ","ةٌ"])
                            ],
                            // [
                            //     "kata_arab" => "بُسْتَانٌ",
                            //     "arti" => "Kebun",
                            //     "huruf" => array_unique(["بُ","سْ","تَ","ا","نٌ"])
                            // ],
                            [
                                "kata_arab" => "مَزْرَعَةٌ",
                                "arti" => "Sawah",
                                "huruf" => array_unique(["مَ","زْ","رَ","عَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "حُجْرَةٌ",
                                "arti" => "Kamar",
                                "huruf" => array_unique(["حُ","جْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "شُرْفَةٌ",
                                "arti" => "Teras",
                                "huruf" => array_unique(["شُ","رْ","فَ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 129')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 129");
                        $data['tema'] = "Pertemuan 21";
                        $data['materi'] = "Mufrodat 129";
                        $data['title'] = "Nama-nama Tempat Bag. 5";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مَسْكَنٌ",
                                "arti" => "Asrama",
                                "huruf" => array_unique(["مَ","سْ","كَ","نٌ"])
                            ],
                            [
                                "kata_arab" => "شَقَّةٌ",
                                "arti" => "Apartemen",
                                "huruf" => array_unique(["شَ","قَّ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مَقْبَرَةٌ",
                                "arti" => "Pemakaman",
                                "huruf" => array_unique(["مَ","قْ","بَ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مَسْجِدٌ",
                                "arti" => "Masjid",
                                "huruf" => array_unique(["مَ","سْ","جِ","دٌ"])
                            ],
                            [
                                "kata_arab" => "مَعْهَدٌ",
                                "arti" => "Pesantren",
                                "huruf" => array_unique(["مَ","عْ","هَ","دٌ"])
                            ],
                            [
                                "kata_arab" => "مَدْرَسَةٌ",
                                "arti" => "Sekolah",
                                "huruf" => array_unique(["مَ","دْ","رَ","سَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "جَامِعَةٌ",
                                "arti" => "Universitas",
                                "huruf" => array_unique(["جَ","ا","مِ","عَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "كَنِيْسَةٌ",
                                "arti" => "Gereja",
                                "huruf" => array_unique(["كَ","نِ","يْ","سَ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 130')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 130");
                        $data['tema'] = "Pertemuan 21";
                        $data['materi'] = "Mufrodat 130";
                        $data['title'] = "Nama-nama Tempat Bag. 6";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "هَيْكَلٌ",
                                "arti" => "Candi",
                                "huruf" => array_unique(["هَ","يْ","كَ","لٌ"])
                            ],
                            [
                                "kata_arab" => "قَصْرٌ",
                                "arti" => "Istana",
                                "huruf" => array_unique(["قَ","صْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "كُوْخٌ",
                                "arti" => "Gubuk",
                                "huruf" => array_unique(["كُ","وْ","خٌ"])
                            ],
                            [
                                "kata_arab" => "حَظِيْرَةٌ",
                                "arti" => "Kandang",
                                "huruf" => array_unique(["حَ","ظِ","يْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مَيْدَانُ الْمَدِيْنَةِ",
                                "arti" => "Lapangan kota",
                                "huruf" => array_unique(["مَ","يْ","دَ","ا","نُ","_","الْ","مَ","دِ","يْ","نَ","ةِ"])
                            ],
                            [
                                "kata_arab" => "بُرْجٌ",
                                "arti" => "Menara",
                                "huruf" => array_unique(["بُ","رْ","جٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 131')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 131");
                        $data['tema'] = "Pertemuan 21";
                        $data['materi'] = "Mufrodat 131";
                        $data['title'] = "Pekerjaan Tentang Tempat Bag. 1";
                        $data['mufrodat'] = [
                            // [
                            //     "kata_arab" => "جَاءَ-يَجِيْئُ-مَجِيْئًا",
                            //     "arti" => "Datang",
                            //     "huruf" => array_unique(["جَ","ا","ءَ","-","يَ","جِ","يْ","ئُ","-","مَ","جِ","يْ","ئً","ا"])
                            // ],
                            [
                                "kata_arab" => "أَتَى-يَأْتِي-اِتْيَانًا",
                                "arti" => "Datang",
                                "huruf" => array_unique(["أَ","تَ","ى","-","يَ","أْ","تِ","ي","-","اِ","تْ","يَ","ا","نً","ا"])
                            ],
                            [
                                "kata_arab" => "حَضَرَ-يَحْضُرُ-حُضُورًا",
                                "arti" => "Hadir",
                                "huruf" => array_unique(["حَ","ضَ","رَ","-","يَ","حْ","ضُ","رُ","-","حُ","ضُ","و","رً","ا"])
                            ],
                            [
                                "kata_arab" => "طَلَبَ-يَطْلُبُ-طَلَبًا",
                                "arti" => "Meminta",
                                "huruf" => array_unique(["طَ","لَ","بَ","-","يَ","طْ","لُ","بُ","-","طَ","لَ","بً","ا"])
                            ],
                            [
                                "kata_arab" => "سَكَنَ-يَسْكُنُ-سُكُوْنًا",
                                "arti" => "Tinggal",
                                "huruf" => array_unique(["سَ","كَ","نَ","-","يَ","سْ","كُ","نُ","-","سُ","كُ","وْ","نً","ا"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 132')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 132");
                        $data['tema'] = "Pertemuan 21";
                        $data['materi'] = "Mufrodat 132";
                        $data['title'] = "Pekerjaan Tentang Tempat Bag. 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "بَاتَ-يَبِيْتُ-بَيْتًا",
                                "arti" => "Menginap",
                                "huruf" => array_unique(["بَ","ا","تَ","-","يَ","بِ","يْ","تُ","-","بَ","يْ","تً","ا"])
                            ],
                            [
                                "kata_arab" => "بَنَى-يَبْنِي-بِنَاءً",
                                "arti" => "Membangun",
                                "huruf" => array_unique(["بَ","نَ","ى","-","يَ","بْ","نِ","ي","-","بِ","نَ","ا","ءً"])
                            ],
                            [
                                "kata_arab" => "أَصْلَحَ-يُصْلِحُ-إِصْلَاحًا",
                                "arti" => "Memperbaiki",
                                "huruf" => array_unique(["أَ","صْ","لَ","حَ","-","يُ","صْ","لِ","حُ","-","إِ","صْ","لَ","ا","حً","ا"])
                            ],
                            [
                                "kata_arab" => "سَافَرَ-يُسَافِرُ-مُسَافَرَةً",
                                "arti" => "Berpergian",
                                "huruf" => array_unique(["سَ","ا","فَ","رَ","-","يُ","سَ","ا","فِ","رُ","-","مُ","سَ","ا","فَ","رَ","ةً"])
                            ],
                            [
                                "kata_arab" => "عَاشَ-يَعِيْشُ-عَيْشًا",
                                "arti" => "Hidup",
                                "huruf" => array_unique(["عَ","ا","شَ","-","يَ","عِ","يْ","شُ","-","عَ","يْ","شً","ا"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 133')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 133");
                        $data['tema'] = "Pertemuan 22";
                        $data['materi'] = "Mufrodat 133";
                        $data['title'] = "Alam Semesta Bag. 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "شَمْسٌ",
                                "arti" => "Matahari",
                                "huruf" => array_unique(["شَ","مْ","سٌ"])
                            ],
                            [
                                "kata_arab" => "قَمَرٌ",
                                "arti" => "Bulan",
                                "huruf" => array_unique(["قَ","مَ","رٌ"])
                            ],
                            [
                                "kata_arab" => "جَبَلٌ",
                                "arti" => "Gunung",
                                "huruf" => array_unique(["جَ","بَ","لٌ"])
                            ],
                            [
                                "kata_arab" => "بَحْرٌ",
                                "arti" => "Laut",
                                "huruf" => array_unique(["بَ","حْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "سَمَاءٌ",
                                "arti" => "Langit",
                                "huruf" => array_unique(["سَ","مَ","ا","ءٌ"])
                            ],
                            [
                                "kata_arab" => "نَجْمٌ",
                                "arti" => "Bintang",
                                "huruf" => array_unique(["نَ","جْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "كَوْكَبٌ",
                                "arti" => "Planet",
                                "huruf" => array_unique(["كَ","وْ","كَ","بٌ"])
                            ],
                            [
                                "kata_arab" => "جَوٌّ",
                                "arti" => "Udara",
                                "huruf" => array_unique(["جَ","وٌّ"])
                            ],
                            [
                                "kata_arab" => "قَوْسُ قُزَحٍ",
                                "arti" => "Pelangi",
                                "huruf" => array_unique(["قَ","وْ","سُ","_","قُ","زَ","حٍ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 134')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 134");
                        $data['tema'] = "Pertemuan 22";
                        $data['materi'] = "Mufrodat 134";
                        $data['title'] = "Alam Semesta Bag. 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "أَرْضٌ",
                                "arti" => "Bumi",
                                "huruf" => array_unique(["أَ","رْ","ضٌ"])
                            ],
                            [
                                "kata_arab" => "رَمْلٌ",
                                "arti" => "Pasir",
                                "huruf" => array_unique(["رَ","مْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "وَحْلٌ",
                                "arti" => "Lumpur",
                                "huruf" => array_unique(["وَ","حْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "حَصْبَاءُ",
                                "arti" => "Kerikil",
                                "huruf" => array_unique(["حَ","صْ","بَ","ا","ءُ"])
                            ],
                            [
                                "kata_arab" => "صَحْرَاءُ",
                                "arti" => "Padang pasir",
                                "huruf" => array_unique(["صَ","حْ","رَ","ا","ءُ"])
                            ],
                            [
                                "kata_arab" => "حَجَرٌ",
                                "arti" => "Batu",
                                "huruf" => array_unique(["حَ","جَ","رٌ"])
                            ],
                            [
                                "kata_arab" => "قِمَّةُ الْجَبَلِ",
                                "arti" => "Puncak gunung",
                                "huruf" => array_unique(["قِ","مَّ","ةُ","_","الْ","جَ","بَ","لِ"])
                            ],
                            [
                                "kata_arab" => "جُرُفٌ",
                                "arti" => "Tebing",
                                "huruf" => array_unique(["جُ","رُ","فٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 135')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 135");
                        $data['tema'] = "Pertemuan 22";
                        $data['materi'] = "Mufrodat 135";
                        $data['title'] = "Alam Semesta Bag. 3";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "شِعْبٌ",
                                "arti" => "Lembah",
                                "huruf" => array_unique(["شِ","عْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "سَدِيْمٌ",
                                "arti" => "Kabut",
                                "huruf" => array_unique(["سَ","دِ","يْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "غَيْمٌ",
                                "arti" => "Awan",
                                "huruf" => array_unique(["غَ","يْ","مٌ"])
                            ],
                            [
                                "kata_arab" => "مَوْجٌ",
                                "arti" => "Ombak",
                                "huruf" => array_unique(["مَ","وْ","جٌ"])
                            ],
                            [
                                "kata_arab" => "جَزِيْرَةٌ",
                                "arti" => "Pulau",
                                "huruf" => array_unique(["جَ","زِ","يْ","رَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "غَابَةٌ",
                                "arti" => "Hutan",
                                "huruf" => array_unique(["غَ","ا","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "غَارٌ",
                                "arti" => "Gua",
                                "huruf" => array_unique(["غَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "ثَلْجٌ",
                                "arti" => "Salju",
                                "huruf" => array_unique(["ثَ","لْ","جٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 136')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 136");
                        $data['tema'] = "Pertemuan 22";
                        $data['materi'] = "Mufrodat 136";
                        $data['title'] = "Alam Semesta Bag. 4";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "هَضْبَةٌ",
                                "arti" => "Bukit",
                                "huruf" => array_unique(["هَ","ضْ","بَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "بُخَارٌ",
                                "arti" => "Uap",
                                "huruf" => array_unique(["بُ","خَ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "دُخَانٌ",
                                "arti" => "Asap",
                                "huruf" => array_unique(["دُ","خَ","ا","نٌ"])
                            ],
                            [
                                "kata_arab" => "شَلَالٌ",
                                "arti" => "Air terjun",
                                "huruf" => array_unique(["شَ","لَ","ا","لٌ"])
                            ],
                            [
                                "kata_arab" => "نَهْرٌ",
                                "arti" => "Sungai",
                                "huruf" => array_unique(["نَ","هْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "سَيْلٌ",
                                "arti" => "Banjir",
                                "huruf" => array_unique(["سَ","يْ","لٌ"])
                            ],
                            [
                                "kata_arab" => "شَاطِئٌ",
                                "arti" => "Pantai",
                                "huruf" => array_unique(["شَ","ا","طِ","ئٌ"])
                            ],
                            [
                                "kata_arab" => "قَارَةٌ",
                                "arti" => "Benua",
                                "huruf" => array_unique(["قَ","ا","رَ","ةٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 137')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 137");
                        $data['tema'] = "Pertemuan 23";
                        $data['materi'] = "Mufrodat 137";
                        $data['title'] = "Profesi Bag. 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مُعَلِّمٌ",
                                "arti" => "Guru",
                                "huruf" => array_unique(["مُ","عَ","لِّ","مٌ"])
                            ],
                            [
                                "kata_arab" => "مُحَاضِرٌ",
                                "arti" => "Dosen",
                                "huruf" => array_unique(["مُ","حَ","ا","ضِ","رٌ"])
                            ],
                            [
                                "kata_arab" => "طَالِبٌ",
                                "arti" => "Siswa",
                                "huruf" => array_unique(["طَ","ا","لِ","بٌ"])
                            ],
                            [
                                "kata_arab" => "طَبِيْبٌ",
                                "arti" => "Dokter",
                                "huruf" => array_unique(["طَ","بِ","يْ","بٌ"])
                            ],
                            [
                                "kata_arab" => "مُمَرِّضٌ",
                                "arti" => "Suster",
                                "huruf" => array_unique(["مُ","مَ","رِّ","ضٌ"])
                            ],
                            [
                                "kata_arab" => "جُنْدٌ",
                                "arti" => "Tentara",
                                "huruf" => array_unique(["جُ","نْ","دٌ"])
                            ],
                            [
                                "kata_arab" => "شُرْطِيٌّ",
                                "arti" => "Polisi",
                                "huruf" => array_unique(["شُ","رْ","طِ","يٌّ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 138')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 138");
                        $data['tema'] = "Pertemuan 23";
                        $data['materi'] = "Mufrodat 138";
                        $data['title'] = "Profesi Bag. 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مُخْتَطِفٌ",
                                "arti" => "Perampok",
                                "huruf" => array_unique(["مُ","خْ","تَ","طِ","فٌ"])
                            ],
                            [
                                "kata_arab" => "سَارِقٌ",
                                "arti" => "Pencuri",
                                "huruf" => array_unique(["سَ","ا","رِ","قٌ"])
                            ],
                            [
                                "kata_arab" => "مُحَامٍ",
                                "arti" => "Pengacara",
                                "huruf" => array_unique(["مُ","حَ","ا","مٍ"])
                            ],
                            [
                                "kata_arab" => "قَاطِعُ الطَّرِيْقِ",
                                "arti" => "Begal",
                                "huruf" => array_unique(["قَ","ا","طِ","عُ","_","ال","طَّ","رِ","يْ","قِ"])
                            ],
                            [
                                "kata_arab" => "قَاضٍ",
                                "arti" => "Hakim",
                                "huruf" => array_unique(["قَ","ا","ضٍ"])
                            ],
                            [
                                "kata_arab" => "مُدِيْرٌ",
                                "arti" => "Direktur",
                                "huruf" => array_unique(["مُ","دِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مُغَنٍّى",
                                "arti" => "Penyanyi",
                                "huruf" => array_unique(["مُ","غَ","نٍّ","ى"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 139')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 139");
                        $data['tema'] = "Pertemuan 23";
                        $data['materi'] = "Mufrodat 139";
                        $data['title'] = "Profesi Bag. 3";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "فَلَّاحٌ",
                                "arti" => "Petani",
                                "huruf" => array_unique(["فَ","لَّ","ا","حٌ"])
                            ],
                            [
                                "kata_arab" => "صَيَّادُ السَّمَكِ",
                                "arti" => "Pencari ikan",
                                "huruf" => array_unique(["صَ","يَّ","ا","دُ","_","ال","سَّ","مَ","كِ"])
                            ],
                            [
                                "kata_arab" => "صَيَّادٌ",
                                "arti" => "Pemburu",
                                "huruf" => array_unique(["صَ","يَّ","ا","دٌ"])
                            ],
                            [
                                "kata_arab" => "بَحَّارٌ",
                                "arti" => "Pelaut",
                                "huruf" => array_unique(["بَ","حَّ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "نَجَّارٌ",
                                "arti" => "Tukang kayu",
                                "huruf" => array_unique(["نَ","جَّ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "مِيْكَانِيْكٌ",
                                "arti" => "Mekanik",
                                "huruf" => array_unique(["مِ","يْ","كَ","ا","نِ","يْ","كٌ"])
                            ],
                            [
                                "kata_arab" => "بُسْتَانِيٌّ",
                                "arti" => "Tukang kebun",
                                "huruf" => array_unique(["بُ","سْ","تَ","ا","نِ","يٌّ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 140')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 140");
                        $data['tema'] = "Pertemuan 23";
                        $data['materi'] = "Mufrodat 140";
                        $data['title'] = "Profesi Bag. 4";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "حَلَّاقٌ",
                                "arti" => "Tukang cukur",
                                "huruf" => array_unique(["حَ","لَّ","ا","قٌ"])
                            ],
                            [
                                "kata_arab" => "مُصَوِّرٌ",
                                "arti" => "Fotografer",
                                "huruf" => array_unique(["مُ","صَ","وِّ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مُشَعْوِذٌ",
                                "arti" => "Pesulap",
                                "huruf" => array_unique(["مُ","شَ","عْ","وِ","ذٌ"])
                            ],
                            [
                                "kata_arab" => "بَائِعٌ",
                                "arti" => "Penjual",
                                "huruf" => array_unique(["بَ","ا","ئِ","عٌ"])
                            ],
                            [
                                "kata_arab" => "مُضِيْفٌ",
                                "arti" => "Pramugara",
                                "huruf" => array_unique(["مُ","ضِ","يْ","فٌ"])
                            ],
                            [
                                "kata_arab" => "مُضِيْفَةٌ",
                                "arti" => "Pramugari",
                                "huruf" => array_unique(["مُ","ضِ","يْ","فَ","ةٌ"])
                            ],
                            [
                                "kata_arab" => "مُهَنْدِسٌ",
                                "arti" => "Insinyur",
                                "huruf" => array_unique(["مُ","هَ","نْ","دِ","سٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 141')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 141");
                        $data['tema'] = "Pertemuan 23";
                        $data['materi'] = "Mufrodat 141";
                        $data['title'] = "Profesi Bag. 5";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "مُهَنْدِسٌ مِعْمَارِيٌّ",
                                "arti" => "Arsitek",
                                "huruf" => array_unique(["مُ","هَ","نْ","دِ","سٌ","_","مِ","عْ","مَ","ا","رِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "سَائِقٌ",
                                "arti" => "Sopir",
                                "huruf" => array_unique(["سَ","ا","ئِ","قٌ"])
                            ],
                            [
                                "kata_arab" => "مُخْبِرٌ",
                                "arti" => "Reporter",
                                "huruf" => array_unique(["مُ","خْ","بِ","رٌ"])
                            ],
                            [
                                "kata_arab" => "خَيَّاطٌ",
                                "arti" => "Penjahit",
                                "huruf" => array_unique(["خَ","يَّ","ا","طٌ"])
                            ],
                            [
                                "kata_arab" => "طَيَّارٌ",
                                "arti" => "Pilot",
                                "huruf" => array_unique(["طَ","يَّ","ا","رٌ"])
                            ],
                            [
                                "kata_arab" => "رَسَّامٌ",
                                "arti" => "Pelukis",
                                "huruf" => array_unique(["رَ","سَّ","ا","مٌ"])
                            ],
                            [
                                "kata_arab" => "عُمَّالٌ",
                                "arti" => "Karyawan",
                                "huruf" => array_unique(["عُ","مَّ","ا","لٌ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 142')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 142");
                        $data['tema'] = "Pertemuan 24";
                        $data['materi'] = "Mufrodat 142";
                        $data['title'] = "Profesi Bag. 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "عَالِمٌ",
                                "arti" => "Ilmuan",
                                "huruf" => array_unique(["عَ","ا","لِ","مٌ"])
                            ],
                            [
                                "kata_arab" => "خَادِمٌ",
                                "arti" => "Pelayan",
                                "huruf" => array_unique(["خَ","ا","دِ","مٌ"])
                            ],
                            [
                                "kata_arab" => "نَادِلٌ",
                                "arti" => "Pramusaji",
                                "huruf" => array_unique(["نَ","ا","دِ","لٌ"])
                            ],
                            [
                                "kata_arab" => "مُوَظَّفٌ",
                                "arti" => "Pegawai",
                                "huruf" => array_unique(["مُ","وَ","ظَّ","فٌ"])
                            ],
                            [
                                "kata_arab" => "رِيَاضِيٌّ",
                                "arti" => "Atlit",
                                "huruf" => array_unique(["رِ","يَ","ا","ضِ","يٌّ"])
                            ],
                            [
                                "kata_arab" => "رَئِيْسٌ",
                                "arti" => "Ketua",
                                "huruf" => array_unique(["رَ","ئِ","يْ","سٌ"])
                            ],
                            [
                                "kata_arab" => "آمِنُ الصُّنْدُوْقِ",
                                "arti" => "Bendahara",
                                "huruf" => array_unique(["آ","مِ","نُ","_","ال","صُّ","نْ","دُ","وْ","قِ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 143')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 143");
                        $data['tema'] = "Pertemuan 24";
                        $data['materi'] = "Mufrodat 143";
                        $data['title'] = "Profesi Bag. 2";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "سِكْرِتِيْرٌ",
                                "arti" => "Sekretaris",
                                "huruf" => array_unique(["سِ","كْ","رِ","تِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مُمَثِّلٌ",
                                "arti" => "Artis",
                                "huruf" => array_unique(["مُ","مَ","ثِّ","لٌ"])
                            ],
                            [
                                "kata_arab" => "مُهَرِّجٌ",
                                "arti" => "Pelawak",
                                "huruf" => array_unique(["مُ","هَ","رِّ","جٌ"])
                            ],
                            [
                                "kata_arab" => "رَقَّاصٌ",
                                "arti" => "Penari",
                                "huruf" => array_unique(["رَ","قَّ","ا","صٌ"])
                            ],
                            [
                                "kata_arab" => "رَئِيْسُ الْجُمْهُوْرِيَّةِ",
                                "arti" => "Presiden",
                                "huruf" => array_unique(["رَ","ئِ","يْ","سُ","_","الْ","جُ","مْ","هُ","وْ","رِ","يَّ","ةِ"])
                            ],
                            [
                                "kata_arab" => "نَائِبُ رَئِيْسِ الْجُمْهُوْرِيَّةِ",
                                "arti" => "Wakil presiden",
                                "huruf" => array_unique(["نَ","ا","ئِ","بُ","_","رَ","ئِ","يْ","سِ","_","الْ","جُ","مْ","هُ","وْ","رِ","يَّ","ةِ"])
                            ],
                            [
                                "kata_arab" => "وَزِيْرٌ",
                                "arti" => "Menteri",
                                "huruf" => array_unique(["وَ","زِ","يْ","رٌ"])
                            ],
                            [
                                "kata_arab" => "مَجْلِسُ النَّوَابِ",
                                "arti" => "DPR",
                                "huruf" => array_unique(["مَ","جْ","لِ","سُ","_","ال","نَّ","وَ","ا","بِ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 144')){
                        $data['redirect'] = "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 144");
                        $data['tema'] = "Pertemuan 24";
                        $data['materi'] = "Mufrodat 144";
                        $data['title'] = "Musim";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "فَصْلُ الْمَطَرِ",
                                "arti" => "Musim hujan",
                                "huruf" => array_unique(["فَ","صْ","لُ","_","الْ","مَ","طَ","رِ"])
                            ],
                            [
                                "kata_arab" => "فَصْلُ الْجَفَافِ",
                                "arti" => "Musim kemarau",
                                "huruf" => array_unique(["فَ","صْ","لُ","_","الْ","جَ","فَ","ا","فِ"])
                            ],
                            [
                                "kata_arab" => "فَصْلُ الصَّيْفِ",
                                "arti" => "Musim panas",
                                "huruf" => array_unique(["فَ","صْ","لُ","_","ال","صَّ","يْ","فِ"])
                            ],
                            [
                                "kata_arab" => "فَصْلُ الشِّتَاءِ",
                                "arti" => "Musim dingin",
                                "huruf" => array_unique(["فَ","صْ","لُ","_","ال","شِّ","تَ","ا","ءِ"])
                            ],
                            [
                                "kata_arab" => "فَصْلُ الْخَرِيْفِ",
                                "arti" => "Musim gugur",
                                "huruf" => array_unique(["فَ","صْ","لُ","_","الْ","خَ","رِ","يْ","فِ"])
                            ],
                            [
                                "kata_arab" => "فَصْلُ الرَّبِيْعِ",
                                "arti" => "Musim semi",
                                "huruf" => array_unique(["فَ","صْ","لُ","_","ال","رَّ","بِ","يْ","عِ"])
                            ],
                        ];
                    }
                    

                    // view
                        foreach ($data['mufrodat'] as $i => $kata) {
                            if($urut == 1){
                                $data['title'] = "Latihan 1";
                                $data['kata'][$i] = $kata['kata_arab'];
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
                            if($_GET['latihan'] == MD5('Murojaah')){
                                $this->load->view("latihan/murojaahmufrodat-1", $data);
                            } else {
                                $this->load->view("hifdzi_1/latihan-mufrodat-1", $data);
                            }
                        } else if($urut == 2){
                            if($_GET['latihan'] == MD5('Murojaah')){
                                $this->load->view("latihan/murojaahmufrodat-2", $data);
                            } else {
                                $this->load->view("hifdzi_1/latihan-mufrodat-2", $data);
                            }
                        } else if($urut == 3){
                            if($_GET['latihan'] == MD5('Murojaah')){
                                $this->load->view("latihan/murojaahmufrodat-3", $data);
                            } else {
                                $this->load->view("hifdzi_1/latihan-mufrodat-3", $data);
                            }
                        }
                        $this->load->view("templates/footer-user", $data);
                    // view
                } else if (!empty($_GET['materi'])){
                    if($_GET['materi'] == MD5('Pertemuan 1')){
                        $data['title'] = "Materi Pertemuan 1";
                        $data['label_redirect'] = "Pertemuan 1";
                        $data['redirect'] = "?tema=".MD5("Pertemuan 1");
                        $data['image'][0] = "hifdzi_1/1.1.jpeg";
                        $data['image'][1] = "hifdzi_1/1.2.jpeg";
                    } else if($_GET['materi'] == MD5('Pertemuan 2')){
                        $data['title'] = "Materi Pertemuan 2";
                        $data['label_redirect'] = "Pertemuan 2";
                        $data['redirect'] = "?tema=".MD5("Pertemuan 2");
                        $data['image'][0] = "hifdzi_1/2.1.jpeg";
                        $data['image'][1] = "hifdzi_1/2.2.jpeg";
                        $data['image'][2] = "hifdzi_1/2.3.jpeg";
                    } else if($_GET['materi'] == MD5('Pertemuan 3')){
                        $data['title'] = "Materi Pertemuan 3";
                        $data['label_redirect'] = "Pertemuan 3";
                        $data['redirect'] = "?tema=".MD5("Pertemuan 3");
                        $data['image'][0] = "hifdzi_1/3.1.jpeg";
                        $data['image'][1] = "hifdzi_1/3.2.jpeg";
                        $data['image'][2] = "hifdzi_1/3.3.jpeg";
                        $data['image'][3] = "hifdzi_1/3.4.jpeg";
                    } else if($_GET['materi'] == MD5('Pertemuan 4')){
                        $data['title'] = "Materi Pertemuan 4";
                        $data['label_redirect'] = "Pertemuan 4";
                        $data['redirect'] = "?tema=".MD5("Pertemuan 4");
                        $data['image'][0] = "hifdzi_1/4.1.jpeg";
                        $data['image'][1] = "hifdzi_1/4.2.jpeg";
                    } else if($_GET['materi'] == MD5('Pertemuan 5')){
                        $data['title'] = "Materi Pertemuan 5";
                        $data['label_redirect'] = "Pertemuan 5";
                        $data['redirect'] = "?tema=".MD5("Pertemuan 5");
                        $data['image'][0] = "hifdzi_1/5.1.jpeg";
                        $data['image'][1] = "hifdzi_1/5.2.jpeg";
                        $data['image'][2] = "hifdzi_1/5.3.jpeg";
                    } else if($_GET['materi'] == MD5('Pertemuan 6')){
                        $data['title'] = "Materi Pertemuan 6";
                        $data['label_redirect'] = "Pertemuan 6";
                        $data['redirect'] = "?tema=".MD5("Pertemuan 6");
                        $data['image'][0] = "hifdzi_1/6.1.jpeg";
                        $data['image'][1] = "hifdzi_1/6.2.jpeg";
                        $data['image'][2] = "hifdzi_1/6.3.jpeg";
                        $data['image'][3] = "hifdzi_1/6.4.jpeg";
                    } else if($_GET['materi'] == MD5('Pertemuan 7')){
                        $data['title'] = "Materi Pertemuan 7";
                        $data['label_redirect'] = "Pertemuan 7";
                        $data['redirect'] = "?tema=".MD5("Pertemuan 7");
                        $data['image'][0] = "hifdzi_1/7.1.jpeg";
                        $data['image'][1] = "hifdzi_1/7.2.jpeg";
                    } else if($_GET['materi'] == MD5('Pertemuan 8')){
                        $data['title'] = "Materi Pertemuan 8";
                        $data['label_redirect'] = "Pertemuan 8";
                        $data['redirect'] = "?tema=".MD5("Pertemuan 8");
                        $data['image'][0] = "hifdzi_1/8.1.jpeg";
                        $data['image'][1] = "hifdzi_1/8.2.jpeg";
                    } else if($_GET['materi'] == MD5('Pertemuan 9')){
                        $data['title'] = "Materi Pertemuan 9";
                        $data['label_redirect'] = "Pertemuan 9";
                        $data['redirect'] = "?tema=".MD5("Pertemuan 9");
                        $data['image'][0] = "hifdzi_1/9.1.jpeg";
                        $data['image'][1] = "hifdzi_1/9.2.jpeg";
                        $data['image'][2] = "hifdzi_1/9.3.jpeg";
                    } else if($_GET['materi'] == MD5('Pertemuan 10')){
                        $data['title'] = "Materi Pertemuan 10";
                        $data['label_redirect'] = "Pertemuan 10";
                        $data['redirect'] = "?tema=".MD5("Pertemuan 10");
                        $data['image'][0] = "hifdzi_1/10.1.jpeg";
                        $data['image'][1] = "hifdzi_1/10.2.jpeg";
                    } else if($_GET['materi'] == MD5('Pertemuan 11')){
                        $data['title'] = "Materi Pertemuan 11";
                        $data['label_redirect'] = "Pertemuan 11";
                        $data['redirect'] = "?tema=".MD5("Pertemuan 11");
                        $data['image'][0] = "hifdzi_1/11.1.jpeg";
                        $data['image'][1] = "hifdzi_1/11.2.jpeg";
                        $data['image'][2] = "hifdzi_1/11.3.jpeg";
                    } else if($_GET['materi'] == MD5('Pertemuan 12')){
                        $data['title'] = "Materi Pertemuan 12";
                        $data['label_redirect'] = "Pertemuan 12";
                        $data['redirect'] = "?tema=".MD5("Pertemuan 12");
                        $data['image'][0] = "hifdzi_1/12.1.jpeg";
                        $data['image'][1] = "hifdzi_1/12.2.jpeg";
                    } else if($_GET['materi'] == MD5('Pertemuan 13')){
                        $data['title'] = "Materi Pertemuan 13";
                        $data['label_redirect'] = "Pertemuan 13";
                        $data['redirect'] = "?tema=".MD5("Pertemuan 13");
                        $data['image'][0] = "hifdzi_1/13.1.jpeg";
                        $data['image'][1] = "hifdzi_1/13.2.jpeg";
                        $data['image'][2] = "hifdzi_1/13.3.jpeg";
                        $data['image'][3] = "hifdzi_1/13.4.jpeg";
                    } else if($_GET['materi'] == MD5('Pertemuan 14')){
                        $data['title'] = "Materi Pertemuan 14";
                        $data['label_redirect'] = "Pertemuan 14";
                        $data['redirect'] = "?tema=".MD5("Pertemuan 14");
                        $data['image'][0] = "hifdzi_1/14.1.jpeg";
                        $data['image'][1] = "hifdzi_1/14.2.jpeg";
                        $data['image'][2] = "hifdzi_1/14.3.jpeg";
                    } else if($_GET['materi'] == MD5('Pertemuan 15')){
                        $data['title'] = "Materi Pertemuan 15";
                        $data['label_redirect'] = "Pertemuan 15";
                        $data['redirect'] = "?tema=".MD5("Pertemuan 15");
                        $data['image'][0] = "hifdzi_1/15.1.jpeg";
                        $data['image'][1] = "hifdzi_1/15.2.jpeg";
                    } else if($_GET['materi'] == MD5('Pertemuan 16')){
                        $data['title'] = "Materi Pertemuan 16";
                        $data['label_redirect'] = "Pertemuan 16";
                        $data['redirect'] = "?tema=".MD5("Pertemuan 16");
                        $data['image'][0] = "hifdzi_1/16.1.jpeg";
                        $data['image'][1] = "hifdzi_1/16.2.jpeg";
                    } else if($_GET['materi'] == MD5('Pertemuan 17')){
                        $data['title'] = "Materi Pertemuan 17";
                        $data['label_redirect'] = "Pertemuan 17";
                        $data['redirect'] = "?tema=".MD5("Pertemuan 17");
                        $data['image'][0] = "hifdzi_1/17.1.jpeg";
                        $data['image'][1] = "hifdzi_1/17.2.jpeg";
                    } else if($_GET['materi'] == MD5('Pertemuan 18')){
                        $data['title'] = "Materi Pertemuan 18";
                        $data['label_redirect'] = "Pertemuan 18";
                        $data['redirect'] = "?tema=".MD5("Pertemuan 18");
                        $data['image'][0] = "hifdzi_1/18.1.jpeg";
                        $data['image'][1] = "hifdzi_1/18.2.jpeg";
                        $data['image'][2] = "hifdzi_1/18.3.jpeg";
                        $data['image'][3] = "hifdzi_1/18.4.jpeg";
                    } else if($_GET['materi'] == MD5('Pertemuan 19')){
                        $data['title'] = "Materi Pertemuan 19";
                        $data['label_redirect'] = "Pertemuan 19";
                        $data['redirect'] = "?tema=".MD5("Pertemuan 19");
                        $data['image'][0] = "hifdzi_1/19.1.jpeg";
                        $data['image'][1] = "hifdzi_1/19.2.jpeg";
                        $data['image'][2] = "hifdzi_1/19.3.jpeg";
                        $data['image'][3] = "hifdzi_1/19.4.jpeg";
                    } else if($_GET['materi'] == MD5('Pertemuan 20')){
                        $data['title'] = "Materi Pertemuan 20";
                        $data['label_redirect'] = "Pertemuan 20";
                        $data['redirect'] = "?tema=".MD5("Pertemuan 20");
                        $data['image'][0] = "hifdzi_1/20.1.jpeg";
                        $data['image'][1] = "hifdzi_1/20.2.jpeg";
                        $data['image'][2] = "hifdzi_1/20.3.jpeg";
                        $data['image'][3] = "hifdzi_1/20.4.jpeg";
                    } else if($_GET['materi'] == MD5('Pertemuan 21')){
                        $data['title'] = "Materi Pertemuan 21";
                        $data['label_redirect'] = "Pertemuan 21";
                        $data['redirect'] = "?tema=".MD5("Pertemuan 21");
                        $data['image'][0] = "hifdzi_1/21.1.jpeg";
                        $data['image'][1] = "hifdzi_1/21.2.jpeg";
                        $data['image'][2] = "hifdzi_1/21.3.jpeg";
                        $data['image'][3] = "hifdzi_1/21.4.jpeg";
                    } else if($_GET['materi'] == MD5('Pertemuan 22')){
                        $data['title'] = "Materi Pertemuan 22";
                        $data['label_redirect'] = "Pertemuan 22";
                        $data['redirect'] = "?tema=".MD5("Pertemuan 22");
                        $data['image'][0] = "hifdzi_1/22.1.jpeg";
                        $data['image'][1] = "hifdzi_1/22.2.jpeg";
                    } else if($_GET['materi'] == MD5('Pertemuan 23')){
                        $data['title'] = "Materi Pertemuan 23";
                        $data['label_redirect'] = "Pertemuan 23";
                        $data['redirect'] = "?tema=".MD5("Pertemuan 23");
                        $data['image'][0] = "hifdzi_1/23.1.jpeg";
                        $data['image'][1] = "hifdzi_1/23.2.jpeg";
                    } else if($_GET['materi'] == MD5('Pertemuan 24')){
                        $data['title'] = "Materi Pertemuan 24";
                        $data['label_redirect'] = "Pertemuan 24";
                        $data['redirect'] = "?tema=".MD5("Pertemuan 24");
                        $data['image'][0] = "hifdzi_1/24.1.jpeg";
                        $data['image'][1] = "hifdzi_1/24.2.jpeg";
                    }
                    
                    // view
                        $this->load->view("templates/header-user", $data);
                        $this->load->view("hifdzi_1/menu-foto", $data);
                        $this->load->view("templates/footer-user", $data);
                    // view
                }
            } else {
                $data['title'] = "Materi Hifdzi I";
                $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);

                // pertemuan
                    $kelas = $this->searchForId("Hifdzi 1", $data['kelas']);
                    $per = $this->Admin_model->get_all("materi_kelas", ["id_kelas" => $kelas]);
                    $pertemuan = [];
                    foreach ($per as $i => $per) {
                        $pertemuan[$i] = $per['materi'];
                    }
                // pertemuan
    
                // Tema
                    $data['tema'][0]['mufrodat'] = 100;

                    $pert = array_unique(array_column($hifdzi1, 'pertemuan'));
                    $data['mufrodat'][0]['mufrodat'] = 100;
                    $i = 1;
                    foreach ($pert as $pert) {

                        // jumlah kosa kata
                            $j = 0;
                            foreach ($hifdzi1 as $kata) {
                                if($kata['pertemuan'] == $pert){
                                    $data['mufrodat'][$j] = $kata;
                                    $j++;
                                }
                            }
                        
                        // jumlah latihan
                            $latihan = array_unique(array_column($data['mufrodat'], 'tema'));

                        $data['tema'][$i] = $this->tema("latihan_hifdzi_1", $id, $pert, $pert, $pert, COUNT($data['mufrodat']), COUNT($latihan), $pertemuan);
                        $i++;
                    }
                // Tema
    
                $this->load->view("templates/header-user", $data);
                $this->load->view("hifdzi_1/index-tema", $data);
                $this->load->view("templates/footer-user", $data);
            }
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

        public function latihan($table, $id, $latihan, $title, $title_arti, $count){
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
            $datas['title_arti'] = $title_arti;
            $datas['latihan'] = $latihan;
            $datas['count'] = $count;
            
            return $datas;
        }

        public function latihan_mufrodat($table, $id, $materi) {
            $data[0] = $this->Admin_model->get_one($table, ["id_user" => $id, "materi" => $materi, "latihan" => "Latihan 1"]);
            $data[1] = $this->Admin_model->get_one($table, ["id_user" => $id, "materi" => $materi, "latihan" => "Latihan 2"]);
            $data[2] = $this->Admin_model->get_one($table, ["id_user" => $id, "materi" => $materi, "latihan" => "Latihan 3"]);

            return $data;
        }
    // get

    // add
        public function add_latihan(){
            $id = $this->session->userdata('id');
            $redirect = $this->input->post("redirect", TRUE);
            $latihan = $this->input->post("latihan", TRUE);
            $materi = $this->input->post("materi", TRUE);
            $tema = $this->input->post("tema", TRUE);
            $table = $this->input->post("table", TRUE);

            $cek = $this->Admin_model->get_one($table, ["id_user" => $id, "latihan" => $latihan, "materi" => $materi]);

            if(!$cek){
                $data = [
                    "latihan" => $latihan,
                    "id_user" => $id,
                    "materi" => $materi,
                    "tema" => $tema
                ];
                $this->Admin_model->add_data($table, $data);
            }

            redirect($redirect);
        }
}