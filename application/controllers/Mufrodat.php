<?php 
class Mufrodat extends CI_CONTROLLER{
    public function __construct(){
        parent::__construct();
        $this->load->model("Arab_model");
        $this->load->model("Admin_model");
        ini_set('xdebug.var_display_max_depth', '10');
        ini_set('xdebug.var_display_max_children', '256');
        ini_set('xdebug.var_display_max_data', '1024');
        if($this->session->userdata('status') != "login"){
            $this->session->set_flashdata('login', 'Maaf, Anda harus login terlebih dahulu');
            redirect(base_url("login"));
        }
    }

    public function index(){
        $id = $this->session->userdata('id');
        $data['listmurojaah'] = $this->Admin_model->get_all("murojaah", ["id_user" => $id]);
        $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);
        $data['murojaah'] = [];
        $data['arti'] = [];
        $murojaah = $this->Admin_model->get_all("murojaah", ["id_user" => $id]);

        foreach ($murojaah as $i => $arab) {
            $data['murojaah'][$i] = $arab['kata_arab'];
        }

        foreach ($murojaah as $i => $arab) {
            $data['arti'][$i] = $arab['arti'];
        }

        // var_dump($data['murojaah']);
        // exit();

        if($_GET){
            if(!empty($_GET['tema'])){
                if($_GET['tema'] == MD5('Pertemuan 1')){
                    $data['title'] = 'Pertemuan 1';
                    $data['materi'] = 'Materi Pertemuan 1';
                    $data['mufrodat'][0]['mufrodat'] = 100;
                    $data['mufrodat'][1] = $this->latihan($id, "Mufrodat 1","كَلِمَاتُ الْإِسْتِفْهَامِ", "Kata Tanya Bag. 1", 9);
                    $data['mufrodat'][2] = $this->latihan($id, "Mufrodat 2","كَلِمَاتُ الْإِسْتِفْهَامِ", "Kata Tanya Bag. 2", 9);
                    $data['mufrodat'][3] = $this->latihan($id, "Mufrodat 3","حُرُوْفُ الْجَرِّ", "Huruf Jar", 10);
                    $data['mufrodat'][4] = $this->latihan($id, "Mufrodat 4","حُرُوْفُ النِّدَاءِ", "Huruf Nidaa", 3);
                    $data['mufrodat'][5] = $this->latihan($id, "Mufrodat 5","حُرُوْفُ الْإِسْتِثْنَاءِ", "Huruf Istisna", 1);
                    $data['evaluasi']['status'] = $this->tema($id, "Pertemuan 1","Pertemuan 1", "Pertemuan 1", 32, 5);
                    $data['evaluasi']['link'] = "http://bit.ly/Hifdzipertemuan1";
                }

                $this->load->view("templates/header-user", $data);
                $this->load->view("pelajaran/index-mufrodat", $data);
                $this->load->view("templates/footer-user", $data);

            } else if(!empty($_GET['id'])){
                // 1 - 50
                    if($_GET['id'] == MD5('Mufrodat 1')){
                        $data['back'] = "";
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 2");
                        $data['tema'] = "Pertemuan 1";
                        $data['materi'] = "Mufrodat 1";
                        $data['title'] = "Kata Tanya Bag. 1";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 1");
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
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 1");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 3");
                        $data['tema'] = "Pertemuan 1";
                        $data['materi'] = "Mufrodat 2";
                        $data['title'] = "Kata Tanya Bag. 2";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 2");
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
                                "arti" => "Berapa",
                                "huruf" => array_unique(["كَ","مْ"])
                            ],
                            [
                                "kata_arab" => "بِكَمْ",
                                "arti" => "Berapa",
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
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 2");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 4");
                        $data['tema'] = "Pertemuan 1";
                        $data['materi'] = "Mufrodat 3";
                        $data['title'] = "Huruf Jar";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 3");
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
                                "huruf" => array_unique(["لَـ","عَ","فِ","ي","لِـ"])
                            ],
                            [
                                "kata_arab" => "لَـ",
                                "arti" => "Untuk",
                                "huruf" => array_unique(["لَـ","عَ","فِ","ي","لِـ"])
                            ],
                            [
                                "kata_arab" => "إِلَى",
                                "arti" => "Kepada",
                                "huruf" => array_unique(["إِ","لَ","ى","فِ","ي"])
                            ],
                            [
                                "kata_arab" => "عَلَى",
                                "arti" => "Diatas",
                                "huruf" => array_unique(["عَ","لَ","ى","فِ","ي"])
                            ],
                            [
                                "kata_arab" => "مِنْ",
                                "arti" => "Dari",
                                "huruf" => array_unique(["مِ","نْ","حَ","تَّ","ى",])
                            ],
                            [
                                "kata_arab" => "فِي",
                                "arti" => "Didalam",
                                "huruf" => array_unique(["فِ","ي","حَ","تَّ","ى",])
                            ],
                            [
                                "kata_arab" => "عَنْ",
                                "arti" => "Dari",
                                "huruf" => array_unique(["عَ","نْ","حَ","تَّ","ى",])
                            ],
                            [
                                "kata_arab" => "حَتَّى",
                                "arti" => "Hingga",
                                "huruf" => array_unique(["حَ","تَّ","ى","عَ","نْ"])
                            ],
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat 4')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 3");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 5");
                        $data['tema'] = "Pertemuan 1";
                        $data['materi'] = "Mufrodat 4";
                        $data['title'] = "Huruf Nidaa";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 4");
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
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 4");
                        $data['next'] = "";
                        $data['tema'] = "Pertemuan 1";
                        $data['materi'] = "Mufrodat 5";
                        $data['title'] = "Huruf Istisna";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat 5");
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "إِلَّا",
                                "arti" => "Kecuali",
                                "huruf" => array_unique(["إِ","لَّ","ا","يَ","ا"])
                            ]
                        ];
                    } else if($_GET['id'] == MD5('Mufrodat  ')){
                        $data['back'] = "mufrodat?id=".MD5("Mufrodat 2");
                        $data['next'] = "mufrodat?id=".MD5("Mufrodat 4");
                        $data['tema'] = "Pertemuan 1";
                        $data['materi'] = "Mufrodat  ";
                        $data['title'] = "Huruf Jar";
                        $data['latihan'] = $this->latihan_mufrodat($id, "Mufrodat  ");
                        $data['mufrodat'] = [
                        ];
                    }
                // 1 - 50
                
                // view
                    $this->load->view("templates/header-user", $data);
                    $this->load->view("pelajaran/menu-mufrodat", $data);
                    $this->load->view("templates/footer-user", $data);
                // view

            } else if (!empty($_GET['latihan'])) {
                $urut = $_GET['i'];
                // 1 - 50
                    if($_GET['latihan'] == MD5('Mufrodat 1')){
                        $data['materi'] = "Mufrodat 1";
                        $data['tema'] = "Pertemuan 1";
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 1");
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
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 2");
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
                                "arti" => "Berapa",
                                "huruf" => array_unique(["كَ","مْ"])
                            ],
                            [
                                "kata_arab" => "بِكَمْ",
                                "arti" => "Berapa",
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
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 3");
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
                            [
                                "kata_arab" => "لِـ",
                                "arti" => "Untuk",
                                "huruf" => array_unique(["لَـ","عَ","فِ","ي","لِـ"])
                            ],
                            [
                                "kata_arab" => "لَـ",
                                "arti" => "Untuk",
                                "huruf" => array_unique(["لَـ","عَ","فِ","ي","لِـ"])
                            ],
                            [
                                "kata_arab" => "إِلَى",
                                "arti" => "Kepada",
                                "huruf" => array_unique(["إِ","لَ","ى","فِ","ي"])
                            ],
                            [
                                "kata_arab" => "عَلَى",
                                "arti" => "Diatas",
                                "huruf" => array_unique(["عَ","لَ","ى","فِ","ي"])
                            ],
                            [
                                "kata_arab" => "مِنْ",
                                "arti" => "Dari",
                                "huruf" => array_unique(["مِ","نْ","حَ","تَّ","ى",])
                            ],
                            [
                                "kata_arab" => "فِي",
                                "arti" => "Didalam",
                                "huruf" => array_unique(["فِ","ي","حَ","تَّ","ى",])
                            ],
                            [
                                "kata_arab" => "عَنْ",
                                "arti" => "Dari",
                                "huruf" => array_unique(["عَ","نْ","حَ","تَّ","ى",])
                            ],
                            [
                                "kata_arab" => "حَتَّى",
                                "arti" => "Hingga",
                                "huruf" => array_unique(["حَ","تَّ","ى","عَ","نْ"])
                            ],
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat 4')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 4");
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
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat 5");
                        $data['materi'] = "Mufrodat 5";
                        $data['tema'] = "Pertemuan 1";
                        $data['mufrodat'] = [
                            [
                                "kata_arab" => "إِلَّا",
                                "arti" => "Kecuali",
                                "huruf" => array_unique(["إِ","لَّ","ا","يَ","ا"])
                            ]
                        ];
                    } else if($_GET['latihan'] == MD5('Mufrodat ')){
                        $data['redirect'] = "mufrodat?id=".MD5("Mufrodat ");
                        $data['materi'] = "Mufrodat ";
                        $data['tema'] = "Pertemuan 1";
                        $data['mufrodat'] = [
                        ];
                    }
                // 1 - 50

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
                            $this->load->view("latihan/mufrodat-1", $data);
                        }
                    } else if($urut == 2){
                        if($_GET['latihan'] == MD5('Murojaah')){
                            $this->load->view("latihan/murojaahmufrodat-2", $data);
                        } else {
                            $this->load->view("latihan/mufrodat-2", $data);
                        }
                    } else if($urut == 3){
                        if($_GET['latihan'] == MD5('Murojaah')){
                            $this->load->view("latihan/murojaahmufrodat-3", $data);
                        } else {
                            $this->load->view("latihan/mufrodat-3", $data);
                        }
                    }
                    $this->load->view("templates/footer-user", $data);
                // view
            } else if (!empty($_GET['materi'])){
                if($_GET['materi'] == MD5('Pertemuan 1')){
                    $data['title'] = "Materi Pertemuan 1";
                    $data['label_redirect'] = "Pertemuan 1";
                    $data['redirect'] = "mufrodat?tema=".MD5("Pertemuan 1");
                    $data['image'][0] = "1.1.jpeg";
                    $data['image'][1] = "1.2.jpeg";
                }
                
                // view
                    $this->load->view("templates/header-user", $data);
                    $this->load->view("pelajaran/menu-foto", $data);
                    $this->load->view("templates/footer-user", $data);
                // view
            }
        } else {
            $data['title'] = "Materi Hifdzi I";
            $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);

            // Tema
                $data['tema'][0]['mufrodat'] = 100;
                $data['tema'][1] = $this->tema($id, "Pertemuan 1","Pertemuan 1", "Pertemuan 1", 32, 5);
            // Tema

            $this->load->view("templates/header-user", $data);
            $this->load->view("pelajaran/index-tema", $data);
            $this->load->view("templates/footer-user", $data);
        }
    }

    public function listmurojaah(){
        $id = $this->session->userdata('id');
        $data['user'] = $this->Admin_model->get_one("user", ["id_user" => $id]);
        $data['mufrodat'] = $this->Admin_model->get_all("murojaah", ["id_user" => $id]);
        $data['title'] = "Murojaah Mufrodat";
        // view
            $this->load->view("templates/header-user", $data);
            $this->load->view("pelajaran/menu-murojaah", $data);
            $this->load->view("templates/footer-user", $data);
        // view
    }

    // add
        public function murojaah(){
            $id = $this->session->userdata('id');
            $data = [
                "id_user" => $id,
                "kata_arab" => $this->input->post("kata_arab", TRUE),
                "arti" => $this->input->post("arti", TRUE),
                "huruf" => $this->input->post("huruf", TRUE)
            ];

            
            if($this->input->post("add")){
                $result = $this->Admin_model->add_data("murojaah", $data);
                if($result){
                    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fa fa-check-circle text-success mr-1"></i> Berhasil menambahkan kata ke list murojaah<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                }
            } else if($this->input->post("remove")){
                $result = $this->Admin_model->delete_data("murojaah", ["kata_arab" => $data['kata_arab'], "arti" => $data['arti']]);
                if($result){
                    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fa fa-check-circle text-success mr-1"></i> Berhasil mengeluarkan kata dari list murojaah<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                }
            }
            redirect($_SERVER['HTTP_REFERER']);
        }

        public function add_mufrodat(){
            $id = $this->session->userdata('id');
            $redirect = $this->input->post("redirect", TRUE);
            $latihan = $this->input->post("latihan", TRUE);
            $materi = $this->input->post("materi", TRUE);
            $tema = $this->input->post("tema", TRUE);

            if($redirect == "Murojaah"){
                redirect(base_url("murojaah/listmurojaah"));
            } else {
                $cek = $this->Admin_model->get_one("mufrodat", ["id_user" => $id, "latihan" => $latihan, "materi" => $materi]);
    
                $data = [
                    "latihan" => $latihan,
                    "id_user" => $id,
                    "materi" => $materi,
                    "tema" => $tema
                ];
                
                if(!$cek)
                    $this->Admin_model->add_data("mufrodat", $data);
    
                redirect($redirect);
            }
        }

        public function tema($id, $tema, $title, $title_arti, $total, $tot_latihan){
            $latihan = $this->Admin_model->get_all("mufrodat", ["id_user" => $id, "tema" => $tema], "waktu", "DESC");
            if($latihan){
                $datas['mufrodat'] = COUNT($latihan) / ($tot_latihan * 3) * 100;
                $datas['tgl'] = $latihan[0]['waktu'];
            } else {
                $datas['mufrodat'] = 0;
                $datas['tgl'] = "";
            }
            
            $datas['title'] = $title;
            $datas['title_arti'] = $title_arti;
            $datas['count'] = $total;
            return $datas;
        }

        public function latihan($id, $latihan, $title, $title_arti, $count){
            $data['dasar_1'] = 0;
            $latihan1 = $this->Admin_model->get_one("mufrodat", ["id_user" => $id, "materi" => $latihan, "latihan" => "Latihan 1"]);
            $latihan2 = $this->Admin_model->get_one("mufrodat", ["id_user" => $id, "materi" => $latihan, "latihan" => "Latihan 2"]);
            $latihan3 = $this->Admin_model->get_one("mufrodat", ["id_user" => $id, "materi" => $latihan, "latihan" => "Latihan 3"]);
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

            $datas['mufrodat'] = $data['dasar_1'] / 3* 100;
            $datas['tgl'] = $tgl[0];
            $datas['title'] = $title;
            $datas['title_arti'] = $title_arti;
            $datas['latihan'] = $latihan;
            $datas['count'] = $count;
            
            return $datas;
        }

        public function latihan_mufrodat($id, $materi) {
            $data[0] = $this->Admin_model->get_one("mufrodat", ["id_user" => $id, "materi" => $materi, "latihan" => "Latihan 1"]);
            $data[1] = $this->Admin_model->get_one("mufrodat", ["id_user" => $id, "materi" => $materi, "latihan" => "Latihan 2"]);
            $data[2] = $this->Admin_model->get_one("mufrodat", ["id_user" => $id, "materi" => $materi, "latihan" => "Latihan 3"]);

            return $data;
        }
    // add
}