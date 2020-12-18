<?php
    class Hifdzi1_model extends CI_MODEL{
        public function kata(){
            $data = [
                // per_1
                    // 1 - 9
                        [
                            "id" => "1",
                            "tema" => "Mufrodat 1",
                            "kata" => "مَا",
                            "kata_arab" => "مَا",
                            "arti" => "Apa",
                            "huruf" => array_unique(["مَ","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 1"
                        ],
                        [
                            "id" => "2",
                            "tema" => "Mufrodat 1",
                            "kata" => "مَنْ",
                            "kata_arab" => "مَنْ",
                            "arti" => "Siapa",
                            "huruf" => array_unique(["مَ","نْ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 1"
                        ],
                        [
                            "id" => "3",
                            "tema" => "Mufrodat 1",
                            "kata" => "مَاذَا",
                            "kata_arab" => "مَاذَا",
                            "arti" => "Apa yang",
                            "huruf" => array_unique(["مَ","ا","ذَ","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 1"
                        ],
                        [
                            "id" => "4",
                            "tema" => "Mufrodat 1",
                            "kata" => "لِـمَاذَا",
                            "kata_arab" => "لِمَاذَا",
                            "arti" => "Kenapa",
                            "huruf" => array_unique(["لِ","مَ","ا","ذَ","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 1"
                        ],
                        [
                            "id" => "5",
                            "tema" => "Mufrodat 1",
                            "kata" => "مِمَّ",
                            "kata_arab" => "مِمَّ",
                            "arti" => "Dari apa",
                            "huruf" => array_unique(["مِ","مَّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 1"
                        ],
                        [
                            "id" => "6",
                            "tema" => "Mufrodat 1",
                            "kata" => "بِـمَاذَا",
                            "kata_arab" => "بِمَاذَا",
                            "arti" => "Dengan apa",
                            "huruf" => array_unique(["بِ","مَ","ا","ذَ","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 1"
                        ],
                        [
                            "id" => "7",
                            "tema" => "Mufrodat 1",
                            "kata" => "لِأَيِّ شَيْئٍ",
                            "kata_arab" => "لِأَيِّ شَيْئٍ",
                            "arti" => "Untuk apa",
                            "huruf" => array_unique(["لِ","أَ","يِّ","_","شَ","يْ","ئٍ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 1"
                        ],
                        [
                            "id" => "8",
                            "tema" => "Mufrodat 1",
                            "kata" => "مَعَ مَنْ",
                            "kata_arab" => "مَعَ مَنْ",
                            "arti" => "Dengan siapa",
                            "huruf" => array_unique(["مَ","عَ","_","مَ","نْ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 1"
                        ],
                        [
                            "id" => "9",
                            "tema" => "Mufrodat 1",
                            "kata" => "لِمَنْ",
                            "kata_arab" => "لِمَنْ",
                            "arti" => "Milik siapa",
                            "huruf" => array_unique(["لِ","مَ","نْ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 1"
                        ],
                    

                    // 10 - 18
                        [
                            "id" => "10",
                            "tema" => "Mufrodat 2",
                            "kata" => "أَيْنَ",
                            "kata_arab" => "أَيْنَ",
                            "arti" => "Dimana",
                            "huruf" => array_unique(["أَ","يْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 1"
                        ],
                        [
                            "id" => "11",
                            "tema" => "Mufrodat 2",
                            "kata" => "إِلَى أَيْنَ",
                            "kata_arab" => "إِلَى أَيْنَ",
                            "arti" => "Mau kemana",
                            "huruf" => array_unique(["إِ","لَ","ى","_","أَ","يْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 1"
                        ],
                        [
                            "id" => "12",
                            "tema" => "Mufrodat 2",
                            "kata" => "مِنْ أَيْنَ",
                            "kata_arab" => "مِنْ أَيْنَ",
                            "arti" => "Darimana",
                            "huruf" => array_unique(["مِ","نْ","_","أَ","يْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 1"
                        ],
                        [
                            "id" => "13",
                            "tema" => "Mufrodat 2",
                            "kata" => "كَيْفَ",
                            "kata_arab" => "كَيْفَ",
                            "arti" => "Bagaimana",
                            "huruf" => array_unique(["كَ","يْ","فَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 1"
                        ],
                        [
                            "id" => "14",
                            "tema" => "Mufrodat 2",
                            "kata" => "مَتَى",
                            "kata_arab" => "مَتَى",
                            "arti" => "Kapan",
                            "huruf" => array_unique(["مَ","تَ","ى"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 1"
                        ],
                        [
                            "id" => "15",
                            "tema" => "Mufrodat 2",
                            "kata" => "كَمْ",
                            "kata_arab" => "كَمْ",
                            "arti" => "Berapa (jumlah)",
                            "huruf" => array_unique(["كَ","مْ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 1"
                        ],
                        [
                            "id" => "16",
                            "tema" => "Mufrodat 2",
                            "kata" => "بِكَمْ",
                            "kata_arab" => "بِكَمْ",
                            "arti" => "Berapa (harga)",
                            "huruf" => array_unique(["بِ","كَ","مْ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 1"
                        ],
                        [
                            "id" => "17",
                            "tema" => "Mufrodat 2",
                            "kata" => "هَلْ / أَ",
                            "kata_arab" => "هَلْ",
                            "arti" => "Apakah",
                            "huruf" => array_unique(["هَ","لْ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 1"
                        ],
                        [
                            "id" => "18",
                            "tema" => "Mufrodat 2",
                            "kata" => "أَيُّ",
                            "kata_arab" => "أَيُّ",
                            "arti" => "Yang mana",
                            "huruf" => array_unique(["أَ","يُّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 1"
                        ],
                    
                    // 19-28
                        [
                            "id" => "19",
                            "tema" => "Mufrodat 3",
                            "kata" => "بِ",
                            "kata_arab" => "بِ",
                            "arti" => "Dengan",
                            "huruf" => array_unique(["بِ","كَ","لِـ","لَـ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 1"
                        ],
                        [
                            "id" => "20",
                            "tema" => "Mufrodat 3",
                            "kata" => "كَ",
                            "kata_arab" => "كَ",
                            "arti" => "Seperti",
                            "huruf" => array_unique(["بِ","كَ","لِـ","لَـ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 1"
                        ],
                        [
                            "id" => "21",
                            "tema" => "Mufrodat 3",
                            "kata" => "لِـ",
                            "kata_arab" => "لِـ",
                            "arti" => "Untuk",
                            "huruf" => array_unique(["لَـ","عَ","فِ","ي"]),
                            "status" => "off",
                            "pertemuan" => "Pertemuan 1"
                        ],
                        [
                            "id" => "22",
                            "tema" => "Mufrodat 3",
                            "kata" => "لَـ",
                            "kata_arab" => "لَـ",
                            "arti" => "Untuk",
                            "huruf" => array_unique(["لَـ","عَ","فِ","ي"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 1"
                        ],
                        [
                            "id" => "23",
                            "tema" => "Mufrodat 3",
                            "kata" => "إِلَى",
                            "kata_arab" => "إِلَى",
                            "arti" => "Kepada",
                            "huruf" => array_unique(["إِ","لَ","ى","فِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 1"
                        ],
                        [
                            "id" => "24",
                            "tema" => "Mufrodat 3",
                            "kata" => "عَلَى",
                            "kata_arab" => "عَلَى",
                            "arti" => "Diatas",
                            "huruf" => array_unique(["عَ","لَ","ى","فِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 1"
                        ],
                        [
                            "id" => "25",
                            "tema" => "Mufrodat 3",
                            "kata" => "مِنْ",
                            "kata_arab" => "مِنْ",
                            "arti" => "Dari",
                            "huruf" => array_unique(["مِ","نْ","حَ","تَّ","ى"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 1"
                        ],
                        [
                            "id" => "26",
                            "tema" => "Mufrodat 3",
                            "kata" => "فِي",
                            "kata_arab" => "فِي",
                            "arti" => "Didalam",
                            "huruf" => array_unique(["فِ","ي","حَ","تَّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 1"
                        ],
                        [
                            "id" => "27",
                            "tema" => "Mufrodat 3",
                            "kata" => "عَنْ",
                            "kata_arab" => "عَنْ",
                            "arti" => "Dari",
                            "huruf" => array_unique(["عَ","نْ","حَ","تَّ"]),
                            "status" => "off",
                            "pertemuan" => "Pertemuan 1"
                        ],
                        [
                            "id" => "28",
                            "tema" => "Mufrodat 3",
                            "kata" => "حَتَّى",
                            "kata_arab" => "حَتَّى",
                            "arti" => "Hingga",
                            "huruf" => array_unique(["حَ","تَّ","ى","عَ","نْ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 1"
                        ],
                    
                    // 29-31
                        [
                            "id" => "29",
                            "tema" => "Mufrodat 4",
                            "kata" => "يَا",
                            "kata_arab" => "يَا",
                            "arti" => "Hai",
                            "huruf" => array_unique(["يَ","ا","أَ","يُّ","هَ","ا","أَ","يَّ","تُ","هَ","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 1"
                        ],
                        [
                            "id" => "30",
                            "tema" => "Mufrodat 4",
                            "kata" => "أَيُّهَا",
                            "kata_arab" => "أَيُّهَا",
                            "arti" => "Wahai (Lk)",
                            "huruf" => array_unique(["أَ","يُّ","هَ","ا","أَ","يَّ","تُ","هَ","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 1"
                        ],
                        [
                            "id" => "31",
                            "tema" => "Mufrodat 4",
                            "kata" => "أَيَّتُهَا",
                            "kata_arab" => "أَيَّتُهَا",
                            "arti" => "Wahai (Pr)",
                            "huruf" => array_unique(["أَ","يُّ","هَ","ا","أَ","يَّ","تُ","هَ","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 1"
                        ],

                    // 32
                        [
                            "id" => "32",
                            "tema" => "Mufrodat 5",
                            "kata" => "إِلَّا",
                            "kata_arab" => "إِلَّا",
                            "arti" => "Kecuali",
                            "huruf" => array_unique(["إِ","لَّ","ا","يَ","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 1"
                        ],
                
                // per_2
                    // 33-38
                        
                        [
                            "id" => "33",
                            "tema" => "Mufrodat 6",
                            "kata" => "إِنَّ",
                            "kata_arab" => "إِنَّ",
                            "arti" => "Sesungguhnya",
                            "huruf" => array_unique(["إِ","نَّ","نَّ","كَ","نَّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 2"
                        ],
                        [
                            "id" => "34",
                            "tema" => "Mufrodat 6",
                            "kata" => "أَنَّ",
                            "kata_arab" => "أَنَّ",
                            "arti" => "Sesungguhnya ",
                            "huruf" => array_unique(["إِ","نَّ","أَ","نَّ","كَ","أَ","نَّ"]),
                            "status" => "off",
                            "pertemuan" => "Pertemuan 2"
                        ],
                        [
                            "id" => "35",
                            "tema" => "Mufrodat 6",
                            "kata" => "كَأَنَّ",
                            "kata_arab" => "كَأَنَّ",
                            "arti" => "Seakan-akan",
                            "huruf" => array_unique(["إِ","نَّ","أَ","نَّ","كَ","أَ","نَّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 2"
                        ],
                        [
                            "id" => "36",
                            "tema" => "Mufrodat 6",
                            "kata" => "لَكِنَّ",
                            "kata_arab" => "لَكِنَّ",
                            "arti" => "Akan tetapi",
                            "huruf" => array_unique(["لَ","كِ","نَّ","لَ","عَ","لَّ","لَ","يْ","تَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 2"
                        ],
                        [
                            "id" => "37",
                            "tema" => "Mufrodat 6",
                            "kata" => "لَعَلَّ",
                            "kata_arab" => "لَعَلَّ",
                            "arti" => "Semoga, supaya",
                            "huruf" => array_unique(["لَ","كِ","نَّ","لَ","عَ","لَّ","لَ","يْ","تَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 2"
                        ],
                        [
                            "id" => "38",
                            "tema" => "Mufrodat 6",
                            "kata" => "لَيْتَ",
                            "kata_arab" => "لَيْتَ",
                            "arti" => "Andaikan",
                            "huruf" => array_unique(["لَ","كِ","نَّ","لَ","عَ","لَّ","لَ","يْ","تَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 2"
                        ],
                    
                    // 39-44
                        [
                            "id" => "39",
                            "tema" => "Mufrodat 7",
                            "kata" => "أَنْ",
                            "kata_arab" => "أَنْ",
                            "arti"	=> "Hendaknya",
                            "huruf" => array_unique(["أَ","نْ","لَ","نْ","إِ","ذَ","نْ","كَ","يْ","لِ","حَ","تَّ","ى"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 2"
                        ],
                        [
                            "id" => "40",
                            "tema" => "Mufrodat 7",
                            "kata" => "لَنْ",
                            "kata_arab" => "لَنْ",
                            "arti"	=> "Tidak akan",
                            "huruf" => array_unique(["أَ","نْ","لَ","نْ","إِ","ذَ","نْ","كَ","يْ","لِ","حَ","تَّ","ى"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 2"
                        ],
                        [
                            "id" => "41",
                            "tema" => "Mufrodat 7",
                            "kata" => "إِذَنْ",
                            "kata_arab" => "إِذَنْ",
                            "arti"	=> "Kalau demikian",
                            "huruf" => array_unique(["أَ","نْ","لَ","نْ","إِ","ذَ","نْ","كَ","يْ","لِ","حَ","تَّ","ى"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 2"
                        ],
                        [
                            "id" => "42",
                            "tema" => "Mufrodat 7",
                            "kata" => "كَيْ",
                            "kata_arab" => "كَيْ",
                            "arti"	=> "Supaya",
                            "huruf" => array_unique(["أَ","نْ","لَ","نْ","إِ","ذَ","نْ","كَ","يْ","حَ","تَّ","ى"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 2"
                        ],
                        [
                            "id" => "43",
                            "tema" => "Mufrodat 7",
                            "kata" => "لِ",
                            "kata_arab" => "لِ",
                            "arti"	=> "Supaya",
                            "huruf" => array_unique(["أَ","نْ","لَ","نْ","إِ","ذَ","نْ","كَ","يْ","لِ","حَ","تَّ","ى"]),
                            "status" => "off",
                            "pertemuan" => "Pertemuan 2"
                        ],
                        [
                            "id" => "44",
                            "tema" => "Mufrodat 7",
                            "kata" => "حَتَّى",
                            "kata_arab" => "حَتَّى",
                            "arti"	=> "Sehingga",
                            "huruf" => array_unique(["أَ","نْ","لَ","نْ","إِ","ذَ","نْ","كَ","يْ","لِ","حَ","تَّ","ى"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 2"
                        ],

                    // 45-49
                        [
                            "id" => "45",
                            "tema" => "Mufrodat 8",
                            "kata" => "لَمْ",
                            "kata_arab" => "لَمْ",
                            "arti" => "Tidak",
                            "huruf" => array_unique(["لَ","مْ","لِ","لَ","ا","إِ","نْ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 2"
                        ],
                        [
                            "id" => "46",
                            "tema" => "Mufrodat 8",
                            "kata" => "لَمَّا",
                            "kata_arab" => "لَمَّا",
                            "arti" => "Tidak",
                            "huruf" => array_unique(["لَ","مَّ","ا","لِ","لَ","ا","إِ","نْ"]),
                            "status" => "off",
                            "pertemuan" => "Pertemuan 2"
                        ],
                        [
                            "id" => "47",
                            "tema" => "Mufrodat 8",
                            "kata" => "لِ",
                            "kata_arab" => "لِ",
                            "arti" => "Hendaklah",
                            "huruf" => array_unique(["لَ","مْ","لَ","مَّ","ا","لِ","لَ","ا","إِ","نْ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 2"
                        ],
                        [
                            "id" => "48",
                            "tema" => "Mufrodat 8",
                            "kata" => "لَا",
                            "kata_arab" => "لَا",
                            "arti" => "Janganlah",
                            "huruf" => array_unique(["لَ","مْ","لَ","مَّ","ا","لِ","لَ","ا","إِ","نْ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 2"
                        ],
                        [
                            "id" => "49",
                            "tema" => "Mufrodat 8",
                            "kata" => "إِنْ",
                            "kata_arab" => "إِنْ",
                            "arti" => "Jika",
                            "huruf" => array_unique(["لَ","مْ","لَ","مَّ","ا","لِ","لَ","ا","إِ","نْ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 2"
                        ],
                    
                    // 50
                        [
                            "id" => "50",
                            "tema" => "Mufrodat 9",
                            "kata" => "قَدْ",
                            "kata_arab" => "قَدْ",
                            "arti" => "Sungguh",
                            "huruf" => array_unique(["قَ","دْ","مْ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 2"
                        ],
                    
                    // 51-52
                        [
                            "id" => "51",
                            "tema" => "Mufrodat 10",
                            "kata" => "سَ",
                            "kata_arab" => "سَ",
                            "arti" => "Akan",
                            "huruf" => array_unique(["سَ","دْ","لَ","قَ","مْ"]),
                            "status" => "off",
                            "pertemuan" => "Pertemuan 2"
                        ],
                        [
                            "id" => "52",
                            "tema" => "Mufrodat 10",
                            "kata" => "سَوْفَ",
                            "kata_arab" => "سَوْفَ",
                            "arti" => "Akan",
                            "huruf" => array_unique(["سَ","وْ","فَ","دْ","لَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 2"
                        ],

                    // 53-61
                        [
                            "id" => "53",
                            "tema" => "Mufrodat 11",
                            "kata" => "وَ",
                            "kata_arab" => "وَ",
                            "arti" => "Dan",
                            "huruf" => array_unique(["وَ","أَ","وْ","فَ","أَ","مْ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 2"
                        ],
                        [
                            "id" => "54",
                            "tema" => "Mufrodat 11",
                            "kata" => "أَوْ",
                            "kata_arab" => "أَوْ",
                            "arti" => "Atau",
                            "huruf" => array_unique(["وَ","أَ","وْ","فَ","أَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 2"
                        ],
                        [
                            "id" => "55",
                            "tema" => "Mufrodat 11",
                            "kata" => "فَ",
                            "kata_arab" => "فَ",
                            "arti" => "Lalu",
                            "huruf" => array_unique(["وَ","أَ","وْ","فَ","أَ","مْ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 2"
                        ],
                        [
                            "id" => "56",
                            "tema" => "Mufrodat 11",
                            "kata" => "أَمْ",
                            "kata_arab" => "أَمْ",
                            "arti" => "Atau",
                            "huruf" => array_unique(["وَ","أَ","وْ","فَ","أَ","مْ"]),
                            "status" => "off",
                            "pertemuan" => "Pertemuan 2"
                        ],
                        [
                            "id" => "57",
                            "tema" => "Mufrodat 11",
                            "kata" => "إِمَّا",
                            "kata_arab" => "إِمَّا",
                            "arti" => "Atau",
                            "huruf" => array_unique(["إِ","مَّ","ا","ثُ","مَّ","بَ","لْ","حَ","تَّ","ى","لَ","كِ","نْ"]),
                            "status" => "off",
                            "pertemuan" => "Pertemuan 2"
                        ],
                        [
                            "id" => "58",
                            "tema" => "Mufrodat 11",
                            "kata" => "ثُمَّ",
                            "kata_arab" => "ثُمَّ",
                            "arti" => "Kemudian",
                            "huruf" => array_unique(["إِ","مَّ","ا","ثُ","مَّ","بَ","لْ","حَ","تَّ","ى","لَ","كِ","نْ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 2"
                        ],
                        [
                            "id" => "59",
                            "tema" => "Mufrodat 11",
                            "kata" => "بَلْ",
                            "kata_arab" => "بَلْ",
                            "arti" => "Bahkan",
                            "huruf" => array_unique(["إِ","مَّ","ا","ثُ","مَّ","بَ","لْ","حَ","تَّ","ى","لَ","كِ","نْ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 2"
                        ],
                        [
                            "id" => "60",
                            "tema" => "Mufrodat 11",
                            "kata" => "حَتَّى",
                            "kata_arab" => "حَتَّى",
                            "arti" => "Sehingga",
                            "huruf" => array_unique(["إِ","مَّ","ا","ثُ","مَّ","بَ","لْ","حَ","تَّ","ى","لَ","كِ","نْ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 2"
                        ],
                        [
                            "id" => "61",
                            "tema" => "Mufrodat 11",
                            "kata" => "لَكِنْ",
                            "kata_arab" => "لَكِنْ",
                            "arti" => "Tetapi",
                            "huruf" => array_unique(["إِ","مَّ","ا","ثُ","مَّ","بَ","لْ","حَ","تَّ","ى","لَ","كِ","نْ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 2"
                        ],
                    
                    // 62-63
                        [
                            "id" => "62",
                            "tema" => "Mufrodat 12",
                            "kata" => "لَا",
                            "kata_arab" => "لَا",
                            "arti" => "Tidak",
                            "huruf" => array_unique(["لَ","ا","وْ","فَ","أَ","حَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 2"
                        ],
                        [
                            "id" => "63",
                            "tema" => "Mufrodat 12",
                            "kata" => "مَا",
                            "kata_arab" => "مَا",
                            "arti" => "Tidak",
                            "huruf" => array_unique(["مَ","ا","وْ","فَ","أَ","حَ"]),
                            "status" => "off",
                            "pertemuan" => "Pertemuan 2"
                        ],

                    // 64-65
                        [
                            "id" => "64",
                            "tema" => "Mufrodat 13",
                            "kata" => "هَلْ",
                            "kata_arab" => "هَلْ",
                            "arti" => "Apakah",
                            "huruf" => array_unique(["هَ","لْ","لَ","ا","وْ","فَ","حَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 2"
                        ],
                        [
                            "id" => "65",
                            "tema" => "Mufrodat 13",
                            "kata" => "أَ",
                            "kata_arab" => "أَ",
                            "arti" => "Apakah",
                            "huruf" => array_unique(["أَ","لَ","ا","وْ","فَ","أَ","حَ"]),
                            "status" => "off",
                            "pertemuan" => "Pertemuan 2"
                        ],
                
                // per_3
                    // 66-75
                        [
                            "id" => "66",
                            "tema" => "Mufrodat 14",
                            "kata" => "وَاحِدٌ",
                            "kata_arab" => "وَاحِدٌ",
                            "arti" => "1",
                            "huruf" => array_unique(["وَ","ا","حِ","دٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "67",
                            "tema" => "Mufrodat 14",
                            "kata" => "اِثْنَانِ",
                            "kata_arab" => "اِثْنَانِ",
                            "arti" => "2",
                            "huruf" => array_unique(["اِ","ثْ","نَ","ا","نِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "68",
                            "tema" => "Mufrodat 14",
                            "kata" => "ثَلَاثَةٌ",
                            "kata_arab" => "ثَلَاثَةٌ",
                            "arti" => "3",
                            "huruf" => array_unique(["ثَ","لَ","ا","ثَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "69",
                            "tema" => "Mufrodat 14",
                            "kata" => "أَرْبَعَةٌ",
                            "kata_arab" => "أَرْبَعَةٌ",
                            "arti" => "4",
                            "huruf" => array_unique(["أَ","رْ","بَ","عَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "70",
                            "tema" => "Mufrodat 14",
                            "kata" => "خَمْسَةٌ",
                            "kata_arab" => "خَمْسَةٌ",
                            "arti" => "5",
                            "huruf" => array_unique(["خَ","مْ","سَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "71",
                            "tema" => "Mufrodat 14",
                            "kata" => "سِتَّةٌ",
                            "kata_arab" => "سِتَّةٌ",
                            "arti" => "6",
                            "huruf" => array_unique(["سِ","تَّ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "72",
                            "tema" => "Mufrodat 14",
                            "kata" => "سَبْعَةٌ",
                            "kata_arab" => "سَبْعَةٌ",
                            "arti" => "7",
                            "huruf" => array_unique(["سَ","بْ","عَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "73",
                            "tema" => "Mufrodat 14",
                            "kata" => "ثَمَانِيَةٌ",
                            "kata_arab" => "ثَمَانِيَةٌ",
                            "arti" => "8",
                            "huruf" => array_unique(["ثَ","مَ","ا","نِ","يَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "74",
                            "tema" => "Mufrodat 14",
                            "kata" => "تِسْعَةٌ",
                            "kata_arab" => "تِسْعَةٌ",
                            "arti" => "9",
                            "huruf" => array_unique(["تِ","سْ","عَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "75",
                            "tema" => "Mufrodat 14",
                            "kata" => "عَشَرَةٌ",
                            "kata_arab" => "عَشَرَةٌ",
                            "arti" => "10",
                            "huruf" => array_unique(["عَ","شَ","رَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],

                    // 76-85
                        [
                            "id" => "76",
                            "tema" => "Mufrodat 15",
                            "kata" => "أَحَدَ عَشَرَ",
                            "kata_arab" => "أَحَدَ عَشَرَ",
                            "arti" => "11",
                            "huruf"=> array_unique(["أَ","حَ","دَ","_","عَ","شَ","رَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "77",
                            "tema" => "Mufrodat 15",
                            "kata" => "اِثْنَا عَشَرَ",
                            "kata_arab" => "اِثْنَا عَشَرَ",
                            "arti" => "12",
                            "huruf"=> array_unique(["اِ","ثْ","نَ","ا","_","عَ","شَ","رَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "78",
                            "tema" => "Mufrodat 15",
                            "kata" => "ثَلَاثَةَ عَشَرَ",
                            "kata_arab" => "ثَلَاثَةَ عَشَرَ",
                            "arti" => "13",
                            "huruf"=> array_unique(["ثَ","لَ","ا","ثَ","ةَ","_","عَ","شَ","رَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "79",
                            "tema" => "Mufrodat 15",
                            "kata" => "أَرْبَعَةَ عَشَرَ",
                            "kata_arab" => "أَرْبَعَةَ عَشَرَ",
                            "arti" => "14",
                            "huruf"=> array_unique(["أَ","رْ","بَ","عَ","ةَ","_","عَ","شَ","رَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "80",
                            "tema" => "Mufrodat 15",
                            "kata" => "خَمْسَةَ عَشَرَ",
                            "kata_arab" => "خَمْسَةَ عَشَرَ",
                            "arti" => "15",
                            "huruf"=> array_unique(["خَ","مْ","سَ","ةَ","_","عَ","شَ","رَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "81",
                            "tema" => "Mufrodat 15",
                            "kata" => "سِتَّةَ عَشَرَ",
                            "kata_arab" => "سِتَّةَ عَشَرَ",
                            "arti" => "16",
                            "huruf"=> array_unique(["سِ","تَّ","ةَ","_","عَ","شَ","رَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "82",
                            "tema" => "Mufrodat 15",
                            "kata" => "سَبْعَةَ عَشَرَ",
                            "kata_arab" => "سَبْعَةَ عَشَرَ",
                            "arti" => "17",
                            "huruf"=> array_unique(["سَ","بْ","عَ","ةَ","_","عَ","شَ","رَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "83",
                            "tema" => "Mufrodat 15",
                            "kata" => "ثَمَانِيَةَ عَشَرَ",
                            "kata_arab" => "ثَمَانِيَةَ عَشَرَ",
                            "arti" => "18",
                            "huruf"=> array_unique(["ثَ","مَ","ا","نِ","يَ","ةَ","_","عَ","شَ","رَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "84",
                            "tema" => "Mufrodat 15",
                            "kata" => "تِسْعَةَ عَشَرَ",
                            "kata_arab" => "تِسْعَةَ عَشَرَ",
                            "arti" => "19",
                            "huruf"=> array_unique(["تِ","سْ","عَ","ةَ","_","عَ","شَ","رَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "85",
                            "tema" => "Mufrodat 15",
                            "kata" => "عِشْرُوْنَ",
                            "kata_arab" => "عِشْرُوْنَ",
                            "arti" => "20",
                            "huruf"=> array_unique(["عِ","شْ","رُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                    
                    // 86-93
                        [
                            "id" => "86",
                            "tema" => "Mufrodat 16",
                            "kata" => "عِشْرُوْنَ",
                            "kata_arab" => "عِشْرُوْنَ",
                            "arti" => "20",
                            "huruf" => array_unique(["عِ","شْ","رُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "87",
                            "tema" => "Mufrodat 16",
                            "kata" => "ثَلَاثُوْنَ",
                            "kata_arab" => "ثَلَاثُوْنَ",
                            "arti" => "30",
                            "huruf" => array_unique(["ثَ","لَ","ا","ثُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "88",
                            "tema" => "Mufrodat 16",
                            "kata" => "أَرْبَعُوْنَ",
                            "kata_arab" => "أَرْبَعُوْنَ",
                            "arti" => "40",
                            "huruf" => array_unique(["أَ","رْ","بَ","عُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "89",
                            "tema" => "Mufrodat 16",
                            "kata" => "خَمْسُوْنَ",
                            "kata_arab" => "خَمْسُوْنَ",
                            "arti" => "50",
                            "huruf" => array_unique(["خَ","مْ","سُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "90",
                            "tema" => "Mufrodat 16",
                            "kata" => "سِتُّوْنَ",
                            "kata_arab" => "سِتُّوْنَ",
                            "arti" => "60",
                            "huruf" => array_unique(["سِ","تُّ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "91",
                            "tema" => "Mufrodat 16",
                            "kata" => "سَبْعُوْنَ",
                            "kata_arab" => "سَبْعُوْنَ",
                            "arti" => "70",
                            "huruf" => array_unique(["سَ","بْ","عُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "92",
                            "tema" => "Mufrodat 16",
                            "kata" => "ثَمَانُوْنَ",
                            "kata_arab" => "ثَمَانُوْنَ",
                            "arti" => "80",
                            "huruf" => array_unique(["ثَ","مَ","ا","نُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "93",
                            "tema" => "Mufrodat 16",
                            "kata" => "تِسْعُوْنَ",
                            "kata_arab" => "تِسْعُوْنَ",
                            "arti" => "90",
                            "huruf" => array_unique(["تِ","سْ","عُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],

                    // 94-102
                        [
                            "id" => "94",
                            "tema" => "Mufrodat 17",
                            "kata" => "مِائَةٌ",
                            "kata_arab" => "مِائَةٌ",
                            "arti" => "100",
                            "huruf" => array_unique(["مِ","ا","ئَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "95",
                            "tema" => "Mufrodat 17",
                            "kata" => "مِائَتَانِ",
                            "kata_arab" => "مِائَتَانِ",
                            "arti" => "200",
                            "huruf" => array_unique(["مِ","ا","ئَ","تَ","ا","نِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "96",
                            "tema" => "Mufrodat 17",
                            "kata" => "ثَلَاثُمِائَةٍ",
                            "kata_arab" => "ثَلَاثُمِائَةٍ",
                            "arti" => "300",
                            "huruf" => array_unique(["ثَ","لَ","ا","ثُ","مِ","ا","ئَ","ةٍ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "97",
                            "tema" => "Mufrodat 17",
                            "kata" => "أَرْبَعُمِائَةٍ",
                            "kata_arab" => "أَرْبَعُمِائَةٍ",
                            "arti" => "400",
                            "huruf" => array_unique(["أَ","رْ","بَ","عُ","مِ","ا","ئَ","ةٍ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "98",
                            "tema" => "Mufrodat 17",
                            "kata" => "خَمْسُمِائَةٍ",
                            "kata_arab" => "خَمْسُمِائَةٍ",
                            "arti" => "500",
                            "huruf" => array_unique(["خَ","مْ","سُ","مِ","ا","ئَ","ةٍ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "99",
                            "tema" => "Mufrodat 17",
                            "kata" => "سِتُّمِائَةٍ",
                            "kata_arab" => "سِتُّمِائَةٍ",
                            "arti" => "600",
                            "huruf" => array_unique(["سِ","تُّ","مِ","ا","ئَ","ةٍ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "100",
                            "tema" => "Mufrodat 17",
                            "kata" => "سَبْعُمِائَةٍ",
                            "kata_arab" => "سَبْعُمِائَةٍ",
                            "arti" => "700",
                            "huruf" => array_unique(["سَ","بْ","عُ","مِ","ا","ئَ","ةٍ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "101",
                            "tema" => "Mufrodat 17",
                            "kata" => "ثَمَانُمِائَةٍ",
                            "kata_arab" => "ثَمَانُمِائَةٍ",
                            "arti" => "800",
                            "huruf" => array_unique(["ثَ","مَ","ا","نُ","مِ","ا","ئَ","ةٍ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "102",
                            "tema" => "Mufrodat 17",
                            "kata" => "تِسْعُمِائَةٍ",
                            "kata_arab" => "تِسْعُمِائَةٍ",
                            "arti" => "900",
                            "huruf" => array_unique(["تِ","سْ","عُ","مِ","ا","ئَ","ةٍ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],

                    // 103-111
                        [
                            "id" => "103",
                            "tema" => "Mufrodat 18",
                            "kata" => "وَاحِدٌ وَ عِشْرُوْنَ",
                            "kata_arab" => "وَاحِدٌ وَ عِشْرُوْنَ",
                            "arti" => "21",
                            "huruf" => array_unique(["وَ","ا","حِ","دٌ","_","وَ","_","عِ","شْ","رُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "104",
                            "tema" => "Mufrodat 18",
                            "kata" => "اِثْنَانِ وَ عِشْرُوْنَ",
                            "kata_arab" => "اِثْنَانِ وَ عِشْرُوْنَ",
                            "arti" => "22",
                            "huruf" => array_unique(["اِ","ثْ","نَ","ا","نِ","_","وَ","عِ","شْ","رُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "105",
                            "tema" => "Mufrodat 18",
                            "kata" => "ثَلَاثَةٌ وَ عِشْرُوْنَ",
                            "kata_arab" => "ثَلَاثَةٌ وَ عِشْرُوْنَ",
                            "arti" => "23",
                            "huruf" => array_unique(["ثَ","لَ","ا","ثَ","ةٌ","_","وَ","_","عِ","شْ","رُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "106",
                            "tema" => "Mufrodat 18",
                            "kata" => "أَرْبَعَةٌ وَ عِشْرُوْنَ",
                            "kata_arab" => "أَرْبَعَةٌ وَ عِشْرُوْنَ",
                            "arti" => "24",
                            "huruf" => array_unique(["أَ","رْ","بَ","عَ","ةٌ","_","وَ","_","عِ","شْ","رُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "107",
                            "tema" => "Mufrodat 18",
                            "kata" => "خَمْسَةٌ وَ عِشْرُوْنَ",
                            "kata_arab" => "خَمْسَةٌ وَ عِشْرُوْنَ",
                            "arti" => "25",
                            "huruf" => array_unique(["خَ","مْ","سَ","ةٌ","_","وَ","عِ","شْ","رُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "108",
                            "tema" => "Mufrodat 18",
                            "kata" => "سِتَّةٌ وَ عِشْرُوْنَ",
                            "kata_arab" => "سِتَّةٌ وَ عِشْرُوْنَ",
                            "arti" => "26",
                            "huruf" => array_unique(["سِ","تَّ","ةٌ","_","وَ","_","عِ","شْ","رُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "109",
                            "tema" => "Mufrodat 18",
                            "kata" => "سَبْعَةٌ وَ عِشْرُوْنَ",
                            "kata_arab" => "سَبْعَةٌ وَ عِشْرُوْنَ",
                            "arti" => "27",
                            "huruf" => array_unique(["سَ","بْ","عَ","ةٌ","_","وَ","_","عِ","شْ","رُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "110",
                            "tema" => "Mufrodat 18",
                            "kata" => "ثَمَانِيَةٌ وَ عِشْرُوْنَ",
                            "kata_arab" => "ثَمَانِيَةٌ وَ عِشْرُوْنَ",
                            "arti" => "28",
                            "huruf" => array_unique(["ثَ","مَ","ا","نِ","يَ","ةٌ","_","وَ","_","عِ","شْ","رُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "111",
                            "tema" => "Mufrodat 18",
                            "kata" => "تِسْعَةٌ وَ عِشْرُوْنَ",
                            "kata_arab" => "تِسْعَةٌ وَ عِشْرُوْنَ",
                            "arti" => "29",
                            "huruf" => array_unique(["تِ","سْ","عَ","ةٌ","_","وَ","_","عِ","شْ","رُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                    
                    // 112-120
                        [
                            "id" => "112",
                            "tema" => "Mufrodat 19",
                            "kata" => "وَاحِدٌ وَ ثَلَاثُوْنَ",
                            "kata_arab" => "وَاحِدٌ وَ ثَلَاثُوْنَ",
                            "arti" => "31",
                            "huruf" => array_unique(["وَ","ا","حِ","دٌ","_","وَ","_","ثَ","لَ","ا","ثُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "113",
                            "tema" => "Mufrodat 19",
                            "kata" => "اِثْنَانِ وَ ثَلَاثُوْنَ",
                            "kata_arab" => "اِثْنَانِ وَ ثَلَاثُوْنَ",
                            "arti" => "32",
                            "huruf" => array_unique(["اِ","ثْ","نَ","ا","نِ","_","وَ","_","ثَ","لَ","ا","ثُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "114",
                            "tema" => "Mufrodat 19",
                            "kata" => "ثَلَاثَةٌ وَ ثَلَاثُوْنَ",
                            "kata_arab" => "ثَلَاثَةٌ وَ ثَلَاثُوْنَ",
                            "arti" => "33",
                            "huruf" => array_unique(["ثَ","لَ","ا","ثَ","ةٌ","_","وَ","_","ثَ","لَ","ا","ثُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "115",
                            "tema" => "Mufrodat 19",
                            "kata" => "أَرْبَعَةٌ وَ ثَلَاثُوْنَ",
                            "kata_arab" => "أَرْبَعَةٌ وَ ثَلَاثُوْنَ",
                            "arti" => "34",
                            "huruf" => array_unique(["أَ","رْ","بَ","عَ","ةٌ","_","وَ","_","ثَ","لَ","ا","ثُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "116",
                            "tema" => "Mufrodat 19",
                            "kata" => "خَمْسَةٌ وَ ثَلَاثُوْنَ",
                            "kata_arab" => "خَمْسَةٌ وَ ثَلَاثُوْنَ",
                            "arti" => "35",
                            "huruf" => array_unique(["خَ","مْ","سَ","ةٌ","_","وَ","ثَ","لَ","ا","ثُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "117",
                            "tema" => "Mufrodat 19",
                            "kata" => "سِتَّةٌ وَ ثَلَاثُوْنَ",
                            "kata_arab" => "سِتَّةٌ وَ ثَلَاثُوْنَ",
                            "arti" => "36",
                            "huruf" => array_unique(["سِ","تَّ","ةٌ","_","وَ","ثَ","لَ","ا","ثُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "118",
                            "tema" => "Mufrodat 19",
                            "kata" => "سَبْعَةٌ وَ ثَلَاثُوْنَ",
                            "kata_arab" => "سَبْعَةٌ وَ ثَلَاثُوْنَ",
                            "arti" => "37",
                            "huruf" => array_unique(["سَ","بْ","عَ","ةٌ","_","وَ","ثَ","لَ","ا","ثُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "119",
                            "tema" => "Mufrodat 19",
                            "kata" => "ثَمَانِيَةٌ وَ ثَلَاثُوْنَ",
                            "kata_arab" => "ثَمَانِيَةٌ وَ ثَلَاثُوْنَ",
                            "arti" => "38",
                            "huruf" => array_unique(["ثَ","مَ","ا","نِ","يَ","ةٌ","_","وَ","ثَ","لَ","ا","ثُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "120",
                            "tema" => "Mufrodat 19",
                            "kata" => "تِسْعَةٌ وَ ثَلَاثُوْنَ",
                            "kata_arab" => "تِسْعَةٌ وَ ثَلَاثُوْنَ",
                            "arti" => "39",
                            "huruf" => array_unique(["تِ","سْ","عَ","ةٌ","_","وَ","ثَ","لَ","ا","ثُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],

                    // 121-129
                        [
                            "id" => "121",
                            "tema" => "Mufrodat 20",
                            "kata" => "وَاحِدٌ وَ أَرْبَعُوْنَ",
                            "kata_arab" => "وَاحِدٌ وَ أَرْبَعُوْنَ",
                            "arti" => "41",
                            "huruf" => array_unique(["وَ","ا","حِ","دٌ","_","وَ","أَ","رْ","بَ","عُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "122",
                            "tema" => "Mufrodat 20",
                            "kata" => "اِثْنَانِ وَ أَرْبَعُوْنَ",
                            "kata_arab" => "اِثْنَانِ وَ أَرْبَعُوْنَ",
                            "arti" => "42",
                            "huruf" => array_unique(["اِ","ثْ","نَ","ا","نِ","_","وَ","أَ","رْ","بَ","عُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "123",
                            "tema" => "Mufrodat 20",
                            "kata" => "ثَلَاثَةٌ وَ أَرْبَعُوْنَ",
                            "kata_arab" => "ثَلَاثَةٌ وَ أَرْبَعُوْنَ",
                            "arti" => "43",
                            "huruf" => array_unique(["ثَ","لَ","ا","ثَ","ةٌ","_","وَ","أَ","رْ","بَ","عُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "124",
                            "tema" => "Mufrodat 20",
                            "kata" => "أَرْبَعَةٌ وَ أَرْبَعُوْنَ",
                            "kata_arab" => "أَرْبَعَةٌ وَ أَرْبَعُوْنَ",
                            "arti" => "44",
                            "huruf" => array_unique(["أَ","رْ","بَ","عَ","ةٌ","_","وَ","أَ","رْ","بَ","عُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "125",
                            "tema" => "Mufrodat 20",
                            "kata" => "خَمْسَةٌ وَ أَرْبَعُوْنَ",
                            "kata_arab" => "خَمْسَةٌ وَ أَرْبَعُوْنَ",
                            "arti" => "45",
                            "huruf" => array_unique(["خَ","مْ","سَ","ةٌ","_","وَ","أَ","رْ","بَ","عُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "126",
                            "tema" => "Mufrodat 20",
                            "kata" => "سِتَّةٌ وَ أَرْبَعُوْنَ",
                            "kata_arab" => "سِتَّةٌ وَ أَرْبَعُوْنَ",
                            "arti" => "46",
                            "huruf" => array_unique(["سِ","تَّ","ةٌ","_","وَ","أَ","رْ","بَ","عُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "127",
                            "tema" => "Mufrodat 20",
                            "kata" => "سَبْعَةٌ وَ أَرْبَعُوْنَ",
                            "kata_arab" => "سَبْعَةٌ وَ أَرْبَعُوْنَ",
                            "arti" => "47",
                            "huruf" => array_unique(["سَ","بْ","عَ","ةٌ","_","وَ","أَ","رْ","بَ","عُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "128",
                            "tema" => "Mufrodat 20",
                            "kata" => "ثَمَانِيَةٌ وَ أَرْبَعُوْنَ",
                            "kata_arab" => "ثَمَانِيَةٌ وَ أَرْبَعُوْنَ",
                            "arti" => "48",
                            "huruf" => array_unique(["ثَ","مَ","ا","نِ","يَ","ةٌ","_","وَ","أَ","رْ","بَ","عُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "129",
                            "tema" => "Mufrodat 20",
                            "kata" => "تِسْعَةٌ وَ أَرْبَعُوْنَ",
                            "kata_arab" => "تِسْعَةٌ وَ أَرْبَعُوْنَ",
                            "arti" => "49",
                            "huruf" => array_unique(["تِ","سْ","عَ","ةٌ","_","وَ","أَ","رْ","بَ","عُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],

                    // 130-138
                        [
                            "id" => "130",
                            "tema" => "Mufrodat 21",
                            "kata" => "وَاحِدٌ وَ خَمْسُوْنَ",
                            "kata_arab" => "وَاحِدٌ وَ خَمْسُوْنَ",
                            "arti" => "51",
                            "huruf" => array_unique(["وَ","ا","حِ","دٌ","_","وَ","خَ","مْ","سُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "131",
                            "tema" => "Mufrodat 21",
                            "kata" => "اِثْنَانِ وَ خَمْسُوْنَ",
                            "kata_arab" => "اِثْنَانِ وَ خَمْسُوْنَ",
                            "arti" => "52",
                            "huruf" => array_unique(["اِ","ثْ","نَ","ا","نِ","_","وَ","خَ","مْ","سُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "132",
                            "tema" => "Mufrodat 21",
                            "kata" => "ثَلَاثَةٌ وَ خَمْسُوْنَ",
                            "kata_arab" => "ثَلَاثَةٌ وَ خَمْسُوْنَ",
                            "arti" => "53",
                            "huruf" => array_unique(["ثَ","لَ","ا","ثَ","ةٌ","_","وَ","خَ","مْ","سُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "133",
                            "tema" => "Mufrodat 21",
                            "kata" => "أَرْبَعَةٌ وَ خَمْسُوْنَ",
                            "kata_arab" => "أَرْبَعَةٌ وَ خَمْسُوْنَ",
                            "arti" => "54",
                            "huruf" => array_unique(["أَ","رْ","بَ","عَ","ةٌ","_","وَ","خَ","مْ","سُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "134",
                            "tema" => "Mufrodat 21",
                            "kata" => "خَمْسَةٌ وَ خَمْسُوْنَ",
                            "kata_arab" => "خَمْسَةٌ وَ خَمْسُوْنَ",
                            "arti" => "55",
                            "huruf" => array_unique(["خَ","مْ","سَ","ةٌ","_","وَ","خَ","مْ","سُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "135",
                            "tema" => "Mufrodat 21",
                            "kata" => "سِتَّةٌ وَ خَمْسُوْنَ",
                            "kata_arab" => "سِتَّةٌ وَ خَمْسُوْنَ",
                            "arti" => "56",
                            "huruf" => array_unique(["سِ","تَّ","ةٌ","_","وَ","خَ","مْ","سُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "136",
                            "tema" => "Mufrodat 21",
                            "kata" => "سَبْعَةٌ وَ خَمْسُوْنَ",
                            "kata_arab" => "سَبْعَةٌ وَ خَمْسُوْنَ",
                            "arti" => "57",
                            "huruf" => array_unique(["سَ","بْ","عَ","ةٌ","_","وَ","خَ","مْ","سُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "137",
                            "tema" => "Mufrodat 21",
                            "kata" => "ثَمَانِيَةٌ وَ خَمْسُوْنَ",
                            "kata_arab" => "ثَمَانِيَةٌ وَ خَمْسُوْنَ",
                            "arti" => "58",
                            "huruf" => array_unique(["ثَ","مَ","ا","نِ","يَ","ةٌ","_","وَ","خَ","مْ","سُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "138",
                            "tema" => "Mufrodat 21",
                            "kata" => "تِسْعَةٌ وَ خَمْسُوْنَ",
                            "kata_arab" => "تِسْعَةٌ وَ خَمْسُوْنَ",
                            "arti" => "59",
                            "huruf" => array_unique(["تِ","سْ","عَ","ةٌ","_","وَ","خَ","مْ","سُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],

                    // 139-147
                        [
                            "id" => "139",
                            "tema" => "Mufrodat 22",
                            "kata" => "وَاحِدٌ وَ سِتُّوْنَ",
                            "kata_arab" => "وَاحِدٌ وَ سِتُّوْنَ",
                            "arti" => "61",
                            "huruf" => array_unique(["وَ","ا","حِ","دٌ","_","وَ","سِ","تُّ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "140",
                            "tema" => "Mufrodat 22",
                            "kata" => "اِثْنَانِ وَ سِتُّوْنَ",
                            "kata_arab" => "اِثْنَانِ وَ سِتُّوْنَ",
                            "arti" => "62",
                            "huruf" => array_unique(["اِ","ثْ","نَ","ا","نِ","_","وَ","سِ","تُّ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "141",
                            "tema" => "Mufrodat 22",
                            "kata" => "ثَلَاثَةٌ وَ سِتُّوْنَ",
                            "kata_arab" => "ثَلَاثَةٌ وَ سِتُّوْنَ",
                            "arti" => "63",
                            "huruf" => array_unique(["ثَ","لَ","ا","ثَ","ةٌ","_","وَ","سِ","تُّ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "142",
                            "tema" => "Mufrodat 22",
                            "kata" => "أَرْبَعَةٌ وَ سِتُّوْنَ",
                            "kata_arab" => "أَرْبَعَةٌ وَ سِتُّوْنَ",
                            "arti" => "64",
                            "huruf" => array_unique(["أَ","رْ","بَ","عَ","ةٌ","_","وَ","سِ","تُّ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "143",
                            "tema" => "Mufrodat 22",
                            "kata" => "خَمْسَةٌ وَ سِتُّوْنَ",
                            "kata_arab" => "خَمْسَةٌ وَ سِتُّوْنَ",
                            "arti" => "65",
                            "huruf" => array_unique(["خَ","مْ","سَ","ةٌ","_","وَ","سِ","تُّ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "144",
                            "tema" => "Mufrodat 22",
                            "kata" => "سِتَّةٌ وَ سِتُّوْنَ",
                            "kata_arab" => "سِتَّةٌ وَ سِتُّوْنَ",
                            "arti" => "66",
                            "huruf" => array_unique(["سِ","تَّ","ةٌ","_","وَ","سِ","تُّ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "145",
                            "tema" => "Mufrodat 22",
                            "kata" => "سَبْعَةٌ وَ سِتُّوْنَ",
                            "kata_arab" => "سَبْعَةٌ وَ سِتُّوْنَ",
                            "arti" => "67",
                            "huruf" => array_unique(["سَ","بْ","عَ","ةٌ","_","وَ","سِ","تُّ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "146",
                            "tema" => "Mufrodat 22",
                            "kata" => "ثَمَانِيَةٌ وَ سِتُّوْنَ",
                            "kata_arab" => "ثَمَانِيَةٌ وَ سِتُّوْنَ",
                            "arti" => "68",
                            "huruf" => array_unique(["ثَ","مَ","ا","نِ","يَ","ةٌ","_","وَ","سِ","تُّ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "147",
                            "tema" => "Mufrodat 22",
                            "kata" => "تِسْعَةٌ وَ سِتُّوْنَ",
                            "kata_arab" => "تِسْعَةٌ وَ سِتُّوْنَ",
                            "arti" => "69",
                            "huruf" => array_unique(["تِ","سْ","عَ","ةٌ","_","وَ","سِ","تُّ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],

                    // 148-156
                        [
                            "id" => "148",
                            "tema" => "Mufrodat 23",
                            "kata" => "وَاحِدٌ وَ سَبْعُوْنَ",
                            "kata_arab" => "وَاحِدٌ وَ سَبْعُوْنَ",
                            "arti" => "71",
                            "huruf" => array_unique(["وَ","ا","حِ","دٌ","_","وَ","سَ","بْ","عُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "149",
                            "tema" => "Mufrodat 23",
                            "kata" => "اِثْنَانِ وَ سَبْعُوْنَ",
                            "kata_arab" => "اِثْنَانِ وَ سَبْعُوْنَ",
                            "arti" => "72",
                            "huruf" => array_unique(["اِ","ثْ","نَ","ا","نِ","_","وَ","سَ","بْ","عُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "150",
                            "tema" => "Mufrodat 23",
                            "kata" => "ثَلَاثَةٌ وَ سَبْعُوْنَ",
                            "kata_arab" => "ثَلَاثَةٌ وَ سَبْعُوْنَ",
                            "arti" => "73",
                            "huruf" => array_unique(["ثَ","لَ","ا","ثَ","ةٌ","_","وَ","سَ","بْ","عُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "151",
                            "tema" => "Mufrodat 23",
                            "kata" => "أَرْبَعَةٌ وَ سَبْعُوْنَ",
                            "kata_arab" => "أَرْبَعَةٌ وَ سَبْعُوْنَ",
                            "arti" => "74",
                            "huruf" => array_unique(["أَ","رْ","بَ","عَ","ةٌ","_","وَ","سَ","بْ","عُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "152",
                            "tema" => "Mufrodat 23",
                            "kata" => "خَمْسَةٌ وَ سَبْعُوْنَ",
                            "kata_arab" => "خَمْسَةٌ وَ سَبْعُوْنَ",
                            "arti" => "75",
                            "huruf" => array_unique(["خَ","مْ","سَ","ةٌ","_","وَ","سَ","بْ","عُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "153",
                            "tema" => "Mufrodat 23",
                            "kata" => "سِتَّةٌ وَ سَبْعُوْنَ",
                            "kata_arab" => "سِتَّةٌ وَ سَبْعُوْنَ",
                            "arti" => "76",
                            "huruf" => array_unique(["سِ","تَّ","ةٌ","_","وَ","سَ","بْ","عُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "154",
                            "tema" => "Mufrodat 23",
                            "kata" => "سَبْعَةٌ وَ سَبْعُوْنَ",
                            "kata_arab" => "سَبْعَةٌ وَ سَبْعُوْنَ",
                            "arti" => "77",
                            "huruf" => array_unique(["سَ","بْ","عَ","ةٌ","_","وَ","سَ","بْ","عُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "155",
                            "tema" => "Mufrodat 23",
                            "kata" => "ثَمَانِيَةٌ وَ سَبْعُوْنَ",
                            "kata_arab" => "ثَمَانِيَةٌ وَ سَبْعُوْنَ",
                            "arti" => "78",
                            "huruf" => array_unique(["ثَ","مَ","ا","نِ","يَ","ةٌ","_","وَ","سَ","بْ","عُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "156",
                            "tema" => "Mufrodat 23",
                            "kata" => "تِسْعَةٌ وَ سَبْعُوْنَ",
                            "kata_arab" => "تِسْعَةٌ وَ سَبْعُوْنَ",
                            "arti" => "79",
                            "huruf" => array_unique(["تِ","سْ","عَ","ةٌ","_","وَ","سَ","بْ","عُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],

                    // 157-165
                        [
                            "id" => "157",
                            "tema" => "Mufrodat 24",
                            "kata" => "وَاحِدٌ وَ ثَمَانُوْنَ",
                            "kata_arab" => "وَاحِدٌ وَ ثَمَانُوْنَ",
                            "arti" => "81",
                            "huruf" => array_unique(["وَ","ا","حِ","دٌ","_","وَ","ثَ","مَ","ا","نُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "158",
                            "tema" => "Mufrodat 24",
                            "kata" => "اِثْنَانِ وَ ثَمَانُوْنَ",
                            "kata_arab" => "اِثْنَانِ وَ ثَمَانُوْنَ",
                            "arti" => "82",
                            "huruf" => array_unique(["اِ","ثْ","نَ","ا","نِ","_","وَ","ثَ","مَ","ا","نُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "159",
                            "tema" => "Mufrodat 24",
                            "kata" => "ثَلَاثَةٌ وَ ثَمَانُوْنَ",
                            "kata_arab" => "ثَلَاثَةٌ وَ ثَمَانُوْنَ",
                            "arti" => "83",
                            "huruf" => array_unique(["ثَ","لَ","ا","ثَ","ةٌ","_","وَ","ثَ","مَ","ا","نُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "160",
                            "tema" => "Mufrodat 24",
                            "kata" => "أَرْبَعَةٌ وَ ثَمَانُوْنَ",
                            "kata_arab" => "أَرْبَعَةٌ وَ ثَمَانُوْنَ",
                            "arti" => "84",
                            "huruf" => array_unique(["أَ","رْ","بَ","عَ","ةٌ","_","وَ","ثَ","مَ","ا","نُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "161",
                            "tema" => "Mufrodat 24",
                            "kata" => "خَمْسَةٌ وَ ثَمَانُوْنَ",
                            "kata_arab" => "خَمْسَةٌ وَ ثَمَانُوْنَ",
                            "arti" => "85",
                            "huruf" => array_unique(["خَ","مْ","سَ","ةٌ","_","وَ","ثَ","مَ","ا","نُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "162",
                            "tema" => "Mufrodat 24",
                            "kata" => "سِتَّةٌ وَ ثَمَانُوْنَ",
                            "kata_arab" => "سِتَّةٌ وَ ثَمَانُوْنَ",
                            "arti" => "86",
                            "huruf" => array_unique(["سِ","تَّ","ةٌ","_","وَ","ثَ","مَ","ا","نُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "163",
                            "tema" => "Mufrodat 24",
                            "kata" => "سَبْعَةٌ وَ ثَمَانُوْنَ",
                            "kata_arab" => "سَبْعَةٌ وَ ثَمَانُوْنَ",
                            "arti" => "87",
                            "huruf" => array_unique(["سَ","بْ","عَ","ةٌ","_","وَ","ثَ","مَ","ا","نُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "164",
                            "tema" => "Mufrodat 24",
                            "kata" => "ثَمَانِيَةٌ وَ ثَمَانُوْنَ",
                            "kata_arab" => "ثَمَانِيَةٌ وَ ثَمَانُوْنَ",
                            "arti" => "88",
                            "huruf" => array_unique(["ثَ","مَ","ا","نِ","يَ","ةٌ","_","وَ","ثَ","مَ","ا","نُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "165",
                            "tema" => "Mufrodat 24",
                            "kata" => "تِسْعَةٌ وَ ثَمَانُوْنَ",
                            "kata_arab" => "تِسْعَةٌ وَ ثَمَانُوْنَ",
                            "arti" => "89",
                            "huruf" => array_unique(["تِ","سْ","عَ","ةٌ","_","وَ","ثَ","مَ","ا","نُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],

                    // 166-174
                        [
                            "id" => "166",
                            "tema" => "Mufrodat 25",
                            "kata" => "وَاحِدٌ وَ تِسْعُوْنَ",
                            "kata_arab" => "وَاحِدٌ وَ تِسْعُوْنَ",
                            "arti" => "91",
                            "huruf" => array_unique(["وَ","ا","حِ","دٌ","_","وَ","تِ","سْ","عُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "167",
                            "tema" => "Mufrodat 25",
                            "kata" => "اِثْنَانِ وَ تِسْعُوْنَ",
                            "kata_arab" => "اِثْنَانِ وَ تِسْعُوْنَ",
                            "arti" => "92",
                            "huruf" => array_unique(["اِ","ثْ","نَ","ا","نِ","_","وَ","تِ","سْ","عُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "168",
                            "tema" => "Mufrodat 25",
                            "kata" => "ثَلَاثَةٌ وَ تِسْعُوْنَ",
                            "kata_arab" => "ثَلَاثَةٌ وَ تِسْعُوْنَ",
                            "arti" => "93",
                            "huruf" => array_unique(["ثَ","لَ","ا","ثَ","ةٌ","_","وَ","تِ","سْ","عُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "169",
                            "tema" => "Mufrodat 25",
                            "kata" => "أَرْبَعَةٌ وَ تِسْعُوْنَ",
                            "kata_arab" => "أَرْبَعَةٌ وَ تِسْعُوْنَ",
                            "arti" => "94",
                            "huruf" => array_unique(["أَ","رْ","بَ","عَ","ةٌ","_","وَ","تِ","سْ","عُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "170",
                            "tema" => "Mufrodat 25",
                            "kata" => "خَمْسَةٌ وَ تِسْعُوْنَ",
                            "kata_arab" => "خَمْسَةٌ وَ تِسْعُوْنَ",
                            "arti" => "95",
                            "huruf" => array_unique(["خَ","مْ","سَ","ةٌ","_","وَ","تِ","سْ","عُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "171",
                            "tema" => "Mufrodat 25",
                            "kata" => "سِتَّةٌ وَ تِسْعُوْنَ",
                            "kata_arab" => "سِتَّةٌ وَ تِسْعُوْنَ",
                            "arti" => "96",
                            "huruf" => array_unique(["سِ","تَّ","ةٌ","_","وَ","تِ","سْ","عُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "172",
                            "tema" => "Mufrodat 25",
                            "kata" => "سَبْعَةٌ وَ تِسْعُوْنَ",
                            "kata_arab" => "سَبْعَةٌ وَ تِسْعُوْنَ",
                            "arti" => "97",
                            "huruf" => array_unique(["سَ","بْ","عَ","ةٌ","_","وَ","تِ","سْ","عُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "173",
                            "tema" => "Mufrodat 25",
                            "kata" => "ثَمَانِيَةٌ وَ تِسْعُوْنَ",
                            "kata_arab" => "ثَمَانِيَةٌ وَ تِسْعُوْنَ",
                            "arti" => "98",
                            "huruf" => array_unique(["ثَ","مَ","ا","نِ","يَ","ةٌ","_","وَ","تِ","سْ","عُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                        [
                            "id" => "174",
                            "tema" => "Mufrodat 25",
                            "kata" => "تِسْعَةٌ وَ تِسْعُوْنَ",
                            "kata_arab" => "تِسْعَةٌ وَ تِسْعُوْنَ",
                            "arti" => "99",
                            "huruf" => array_unique(["تِ","سْ","عَ","ةٌ","_","وَ","تِ","سْ","عُ","وْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 3"
                        ],
                
                // per_4
                    // 175-184
                        [
                            "id" => "175",
                            "tema" => "Mufrodat 26",
                            "kata" => "أَمَامَ",
                            "kata_arab" => "أَمَامَ",
                            "arti" => "Di depan",
                            "huruf" => array_unique(["أَ","مَ","ا","مَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 4"
                        ],
                        [
                            "id" => "176",
                            "tema" => "Mufrodat 26",
                            "kata" => "وَرَاءَ / خَلْفَ",
                            "kata_arab" => "وَرَاءَ",
                            "arti" => "Di belakang",
                            "huruf" => array_unique(["وَ","رَ","ا","ءَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 4"
                        ],
                        [
                            "id" => "177",
                            "tema" => "Mufrodat 26",
                            "kata" => "فَوْقَ / عَلَى",
                            "kata_arab" => "فَوْقَ",
                            "arti" => "Di atas",
                            "huruf" => array_unique(["فَ","وْ","قَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 4"
                        ],
                        [
                            "id" => "178",
                            "tema" => "Mufrodat 26",
                            "kata" => "تَحْتَ",
                            "kata_arab" => "تَحْتَ",
                            "arti" => "Di bawah",
                            "huruf" => array_unique(["تَ","حْ","تَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 4"
                        ],
                        [
                            "id" => "179",
                            "tema" => "Mufrodat 26",
                            "kata" => "دَاخِلَ",
                            "kata_arab" => "دَاخِلَ",
                            "arti" => "Di dalam",
                            "huruf" => array_unique(["دَ","ا","خِ","لَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 4"
                        ],
                        [
                            "id" => "180",
                            "tema" => "Mufrodat 26",
                            "kata" => "خَارِجَ",
                            "kata_arab" => "خَارِجَ",
                            "arti" => "Di luar",
                            "huruf" => array_unique(["خَ","ا","رِ","جَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 4"
                        ],
                        [
                            "id" => "181",
                            "tema" => "Mufrodat 26",
                            "kata" => "بَيْنَ",
                            "kata_arab" => "بَيْنَ",
                            "arti" => "Di antara",
                            "huruf" => array_unique(["بَ","يْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 4"
                        ],
                        [
                            "id" => "182",
                            "tema" => "Mufrodat 26",
                            "kata" => "جَانِبَ",
                            "kata_arab" => "جَانِبَ",
                            "arti" => "Di samping",
                            "huruf" => array_unique(["جَ","ا","نِ","بَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 4"
                        ],
                        [
                            "id" => "183",
                            "tema" => "Mufrodat 26",
                            "kata" => "هُنَا",
                            "kata_arab" => "هُنَا",
                            "arti" => "Di sini",
                            "huruf" => array_unique(["هُ","نَ","ا","كَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 4"
                        ],
                        [
                            "id" => "184",
                            "tema" => "Mufrodat 26",
                            "kata" => "هُنَاكَ",
                            "kata_arab" => "هُنَاكَ",
                            "arti" => "Di sana",
                            "huruf" => array_unique(["هُ","نَ","ا","كَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 4"
                        ],

                    // 185-192
                        [
                            "id" => "185",
                            "tema" => "Mufrodat 27",
                            "kata" => "اَلْيَوْمَ",
                            "kata_arab" => "اَلْيَوْمَ",
                            "arti" => "Hari ini",
                            "huruf" => array_unique(["اَلْ","يَ","وْ","مَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 4"
                        ],
                        [
                            "id" => "186",
                            "tema" => "Mufrodat 27",
                            "kata" => "اَلْآنَ",
                            "kata_arab" => "اَلْآنَ",
                            "arti" => "Sekarang",
                            "huruf" => array_unique(["اَلْ","آ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 4"
                        ],
                        [
                            "id" => "187",
                            "tema" => "Mufrodat 27",
                            "kata" => "قَبْلَ",
                            "kata_arab" => "قَبْلَ",
                            "arti" => "Sebelum",
                            "huruf" => array_unique(["قَ","بْ","لَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 4"
                        ],
                        [
                            "id" => "188",
                            "tema" => "Mufrodat 27",
                            "kata" => "بَعْدَ",
                            "kata_arab" => "بَعْدَ",
                            "arti" => "Setelah",
                            "huruf" => array_unique(["بَ","عْ","دَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 4"
                        ],
                        [
                            "id" => "189",
                            "tema" => "Mufrodat 27",
                            "kata" => "غَدًا",
                            "kata_arab" => "غَدًا",
                            "arti" => "Besok",
                            "huruf" => array_unique(["غَ","دً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 4"
                        ],
                        [
                            "id" => "190",
                            "tema" => "Mufrodat 27",
                            "kata" => "بَعْدَ الْغَدِّ",
                            "kata_arab" => "بَعْدَ الْغَدِّ",
                            "arti" => "Besok lusa",
                            "huruf" => array_unique(["بَ","عْ","دَ","_","الْ","غَ","دِّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 4"
                        ],
                        [
                            "id" => "191",
                            "tema" => "Mufrodat 27",
                            "kata" => "بِالْأَمْسِ",
                            "kata_arab" => "بِالْأَمْسِ",
                            "arti" => "Kemarin",
                            "huruf" => array_unique(["بِ","الْ","أَ","مْ","سِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 4"
                        ],
                        [
                            "id" => "192",
                            "tema" => "Mufrodat 27",
                            "kata" => "أَوَّلَ الْأَمْسِ",
                            "kata_arab" => "أَوَّلَ الْأَمْسِ",
                            "arti" => "Kemarin lusa",
                            "huruf" => array_unique(["أَ","وَّ","لَ","_","الْ","أَ","مْ","سِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 4"
                        ],
                    
                    // 193-200
                        [
                            "id" => "193",
                            "tema" => "Mufrodat 28",
                            "kata" => "صَبَاحًا",
                            "kata_arab" => "صَبَاحًا",
                            "arti" => "Pagi",
                            "huruf" => array_unique(["صَ","بَ","ا","حً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 4"
                        ],
                        [
                            "id" => "194",
                            "tema" => "Mufrodat 28",
                            "kata" => "نَهَارًا",
                            "kata_arab" => "نَهَارًا",
                            "arti" => "Siang",
                            "huruf" => array_unique(["نَ","هَ","ا","رً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 4"
                        ],
                        [
                            "id" => "195",
                            "tema" => "Mufrodat 28",
                            "kata" => "مَسَاءً",
                            "kata_arab" => "مَسَاءً",
                            "arti" => "Sore",
                            "huruf" => array_unique(["مَ","سَ","ا","ءً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 4"
                        ],
                        [
                            "id" => "196",
                            "tema" => "Mufrodat 28",
                            "kata" => "لَيْلًا",
                            "kata_arab" => "لَيْلًا",
                            "arti" => "Malam",
                            "huruf" => array_unique(["لَ","يْ","لً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 4"
                        ],
                        [
                            "id" => "197",
                            "tema" => "Mufrodat 28",
                            "kata" => "لَاحِقًا",
                            "kata_arab" => "لَاحِقًا",
                            "arti" => "Nanti",
                            "huruf" => array_unique(["لَ","ا","حِ","قً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 4"
                        ],
                        [
                            "id" => "198",
                            "tema" => "Mufrodat 28",
                            "kata" => "آنِفًا",
                            "kata_arab" => "آنِفًا",
                            "arti" => "Tadi",
                            "huruf" => array_unique(["آ","نِ","فً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 4"
                        ],
                        [
                            "id" => "199",
                            "tema" => "Mufrodat 28",
                            "kata" => "حَدِيْثًا",
                            "kata_arab" => "حَدِيْثًا",
                            "arti" => "Barusan",
                            "huruf" => array_unique(["حَ","دِ","يْ","ثً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 4"
                        ],
                        [
                            "id" => "200",
                            "tema" => "Mufrodat 28",
                            "kata" => "بَعْدَ قَلِيْلٍ",
                            "kata_arab" => "بَعْدَ قَلِيْلٍ",
                            "arti" => "Sebentar lagi",
                            "huruf" => array_unique(["بَ","عْ","دَ","_","قَ","لِ","يْ","لٍ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 4"
                        ],
                    
                    // 201-206
                        [
                            "id" => "201",
                            "tema" => "Mufrodat 29",
                            "kata" => "اَلْأُسْبُوْعُ الْمَاضِى",
                            "kata_arab" => "اَلْأُسْبُوْعُ الْمَاضِى",
                            "arti" => "Minggu lalu",
                            "huruf" => array_unique(["اَلْ","أُ","سْ","بُ","وْ","عُ","_","الْ","مَ","ضِ","ى","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 4"
                        ],
                        [
                            "id" => "202",
                            "tema" => "Mufrodat 29",
                            "kata" => "اَلْأُسْبُوْعُ الْقَادِمُ",
                            "kata_arab" => "اَلْأُسْبُوْعُ الْقَادِمُ",
                            "arti" => "Minggu depan",
                            "huruf" => array_unique(["اَلْ","أُ","سْ","بُ","وْ","عُ","_","الْ","قَ","ا","دِ","مُ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 4"
                        ],
                        [
                            "id" => "203",
                            "tema" => "Mufrodat 29",
                            "kata" => "اَلشَّهْرُ الْمَاضِى",
                            "kata_arab" => "اَلشَّهْرُ الْمَاضِى",
                            "arti" => "Bulan lalu",
                            "huruf" => array_unique(["اَل","شَّ","هْ","رُ","_","الْ","مَ","ا","ضِ","ى"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 4"
                        ],
                        [
                            "id" => "204",
                            "tema" => "Mufrodat 29",
                            "kata" => "اَلشَّهْرُ الْقَادِمُ",
                            "kata_arab" => "اَلشَّهْرُ الْقَادِمُ",
                            "arti" => "Bulan depan",
                            "huruf" => array_unique(["اَل","شَّ","هْ","رُ","_","الْ","قَ","ا","دِ","مُ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 4"
                        ],
                        [
                            "id" => "205",
                            "tema" => "Mufrodat 29",
                            "kata" => "اَلسَّنَةُ الْمَاضِيَةُ",
                            "kata_arab" => "اَلسَّنَةُ الْمَاضِيَةُ",
                            "arti" => "Tahun lalu",
                            "huruf" => array_unique(["اَل","سَّ","نَ","ةُ","_","الْ","مَ","ا","ضِ","يَ","ةُ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 4"
                        ],
                        [
                            "id" => "206",
                            "tema" => "Mufrodat 29",
                            "kata" => "اَلسَّنَةُ الْقَادِمَةُ",
                            "kata_arab" => "اَلسَّنَةُ الْقَادِمَةُ",
                            "arti" => "Tahun depan",
                            "huruf" => array_unique(["اَل","سَّ","نَ","ةُ","_","الْ","قَ","ا","دِ","مَ","ةُ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 4"
                        ],

                // per_5
                    // 207-214
                        [
                            "id" => "207",
                            "tema" => "Mufrodat 30",
                            "kata" => "عَقْلٌ",
                            "kata_arab" => "عَقْلٌ",
                            "arti" => "Akal",
                            "huruf" => array_unique(["عَ","قْ","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "208",
                            "tema" => "Mufrodat 30",
                            "kata" => "رَأْسٌ",
                            "kata_arab" => "رَأْسٌ",
                            "arti" => "Kepala",
                            "huruf" => array_unique(["رَ","أْ","سٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "209",
                            "tema" => "Mufrodat 30",
                            "kata" => "وَجْهٌ",
                            "kata_arab" => "وَجْهٌ",
                            "arti" => "Wajah",
                            "huruf" => array_unique(["وَ","جْ","هٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "210",
                            "tema" => "Mufrodat 30",
                            "kata" => "شَعْرٌ",
                            "kata_arab" => "شَعْرٌ",
                            "arti" => "Rambut",
                            "huruf" => array_unique(["شَ","عْ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "211",
                            "tema" => "Mufrodat 30",
                            "kata" => "جَبْهَةٌ",
                            "kata_arab" => "جَبْهَةٌ",
                            "arti" => "Kening",
                            "huruf" => array_unique(["جَ","بْ","هَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "212",
                            "tema" => "Mufrodat 30",
                            "kata" => "أُذُنٌ",
                            "kata_arab" => "أُذُنٌ",
                            "arti" => "Telinga",
                            "huruf" => array_unique(["أُ","ذُ","نٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "213",
                            "tema" => "Mufrodat 30",
                            "kata" => "عَارِضٌ",
                            "kata_arab" => "عَارِضٌ",
                            "arti" => "Jambang",
                            "huruf" => array_unique(["عَ","ا","رِ","ضٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "214",
                            "tema" => "Mufrodat 30",
                            "kata" => "عَيْنٌ",
                            "kata_arab" => "عَيْنٌ",
                            "arti" => "Mata",
                            "huruf" => array_unique(["عَ","يْ","نٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                    
                    // 215-222
                        [
                            "id" => "215",
                            "tema" => "Mufrodat 31",
                            "kata" => "أَنْفٌ",
                            "kata_arab" => "أَنْفٌ",
                            "arti" => "Hidung",
                            "huruf" => array_unique(["أَ","نْ","فٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "216",
                            "tema" => "Mufrodat 31",
                            "kata" => "خَدٌّ",
                            "kata_arab" => "خَدٌّ",
                            "arti" => "Pipi",
                            "huruf" => array_unique(["سِ","نٌّ","خَ","دٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "217",
                            "tema" => "Mufrodat 31",
                            "kata" => "سِنٌّ",
                            "kata_arab" => "سِنٌّ",
                            "arti" => "Gigi",
                            "huruf" => array_unique(["سِ","نٌّ","خَ","دٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "218",
                            "tema" => "Mufrodat 31",
                            "kata" => "حَاجِبٌ",
                            "kata_arab" => "حَاجِبٌ",
                            "arti" => "Alis",
                            "huruf" => array_unique(["حَ","ا","جِ","بٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "219",
                            "tema" => "Mufrodat 31",
                            "kata" => "هُدْبٌ",
                            "kata_arab" => "هُدْبٌ",
                            "arti" => "Bulu mata",
                            "huruf" => array_unique(["هُ","دْ","بٌ","فَ","مٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "220",
                            "tema" => "Mufrodat 31",
                            "kata" => "فَمٌّ",
                            "kata_arab" => "فَمٌّ",
                            "arti" => "Mulut",
                            "huruf" => array_unique(["هُ","دْ","بٌ","فَ","مٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "221",
                            "tema" => "Mufrodat 31",
                            "kata" => "لِسَانٌ",
                            "kata_arab" => "لِسَانٌ",
                            "arti" => "Lisan",
                            "huruf" => array_unique(["لِ","سَ","ا","نٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "222",
                            "tema" => "Mufrodat 31",
                            "kata" => "شَارِبٌ",
                            "kata_arab" => "شَارِبٌ",
                            "arti" => "Kumis",
                            "huruf" => array_unique(["شَ","ا","رِ","بٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],

                    // 223-230
                        [
                            "id" => "223",
                            "tema" => "Mufrodat 32",
                            "kata" => "لِحْيَةٌ",
                            "kata_arab" => "لِحْيَةٌ",
                            "arti" => "Jenggot",
                            "huruf" => array_unique(["لِ","حْ","يَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "224",
                            "tema" => "Mufrodat 32",
                            "kata" => "دَمْعٌ",
                            "kata_arab" => "دَمْعٌ",
                            "arti" => "Air mata",
                            "huruf" => array_unique(["دَ","مْ","عٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "225",
                            "tema" => "Mufrodat 32",
                            "kata" => "ذَقَنٌ",
                            "kata_arab" => "ذَقَنٌ",
                            "arti" => "Dagu",
                            "huruf" => array_unique(["ذَ","قَ","نٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "226",
                            "tema" => "Mufrodat 32",
                            "kata" => "شَفَةٌ",
                            "kata_arab" => "شَفَةٌ",
                            "arti" => "Bibir",
                            "huruf" => array_unique(["شَ","فَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "227",
                            "tema" => "Mufrodat 32",
                            "kata" => "شَفَةٌ عُلْيَا",
                            "kata_arab" => "شَفَةٌ عُلْيَا",
                            "arti" => "Bibir atas",
                            "huruf" => array_unique(["شَ","فَ","ةٌ","_","عُ","لْ","يَ","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "228",
                            "tema" => "Mufrodat 32",
                            "kata" => "شَفَةٌ سُفْلَى",
                            "kata_arab" => "شَفَةٌ سُفْلَى",
                            "arti" => "Bibir bawah",
                            "huruf" => array_unique(["شَ","فَ","ةٌ","_","سُ","فْ","لَ","ى"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "229",
                            "tema" => "Mufrodat 32",
                            "kata" => "مُخٌّ",
                            "kata_arab" => "مُخٌّ",
                            "arti" => "Otak",
                            "huruf" => array_unique(["مُ","خٌّ","عُ","نُ","قٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "230",
                            "tema" => "Mufrodat 32",
                            "kata" => "عُنُقٌ",
                            "kata_arab" => "عُنُقٌ",
                            "arti" => "Leher",
                            "huruf" => array_unique(["مُ","خٌّ","عُ","نُ","قٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],

                    // 231-238
                        [
                            "id" => "231",
                            "tema" => "Mufrodat 33",
                            "kata" => "بَدَنٌ",
                            "kata_arab" => "بَدَنٌ",
                            "arti" => "Badan",
                            "huruf" => array_unique(["يَ","دٌ","بَ","دَ","نٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "232",
                            "tema" => "Mufrodat 33",
                            "kata" => "يَدٌ",
                            "kata_arab" => "يَدٌ",
                            "arti" => "Tangan",
                            "huruf" => array_unique(["يَ","دٌ","بَ","دَ","نٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "233",
                            "tema" => "Mufrodat 33",
                            "kata" => "ذِرَاعٌ",
                            "kata_arab" => "ذِرَاعٌ",
                            "arti" => "Lengan",
                            "huruf" => array_unique(["ذِ","رَ","ا","عٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "234",
                            "tema" => "Mufrodat 33",
                            "kata" => "بَطْنٌ",
                            "kata_arab" => "بَطْنٌ",
                            "arti" => "Perut",
                            "huruf" => array_unique(["بَ","طْ","نٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "235",
                            "tema" => "Mufrodat 33",
                            "kata" => "حَقْوٌ",
                            "kata_arab" => "حَقْوٌ",
                            "arti" => "Pinggang",
                            "huruf" => array_unique(["حَ","قْ","وٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "236",
                            "tema" => "Mufrodat 33",
                            "kata" => "كَتِفٌ",
                            "kata_arab" => "كَتِفٌ",
                            "arti" => "Pundak",
                            "huruf" => array_unique(["كَ","تِ","فٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "237",
                            "tema" => "Mufrodat 33",
                            "kata" => "ظَهْرٌ",
                            "kata_arab" => "ظَهْرٌ",
                            "arti" => "Punggung",
                            "huruf" => array_unique(["ظَ","هْ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "238",
                            "tema" => "Mufrodat 33",
                            "kata" => "صَدْرٌ",
                            "kata_arab" => "صَدْرٌ",
                            "arti" => "Dada",
                            "huruf" => array_unique(["صَ","دْ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        
                    // 239-246
                        [
                            "id" => "239",
                            "tema" => "Mufrodat 34",
                            "kata" => "سُرَّةٌ",
                            "kata_arab" => "سُرَّةٌ",
                            "arti" => "Pusar",
                            "huruf" => array_unique(["سُ","رَّ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "240",
                            "tema" => "Mufrodat 34",
                            "kata" => "رُكْبَةٌ",
                            "kata_arab" => "رُكْبَةٌ",
                            "arti" => "Lutut",
                            "huruf" => array_unique(["رُ","كْ","بَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "241",
                            "tema" => "Mufrodat 34",
                            "kata" => "مِرْفَقٌ",
                            "kata_arab" => "مِرْفَقٌ",
                            "arti" => "Siku",
                            "huruf" => array_unique(["مِ","رْ","فَ","قٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "242",
                            "tema" => "Mufrodat 34",
                            "kata" => "إِبْطٌ",
                            "kata_arab" => "إِبْطٌ",
                            "arti" => "Ketiak",
                            "huruf" => array_unique(["إِ","بْ","طٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "243",
                            "tema" => "Mufrodat 34",
                            "kata" => "رِجْلٌ",
                            "kata_arab" => "رِجْلٌ",
                            "arti" => "Kaki",
                            "huruf" => array_unique(["رِ","جْ","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "244",
                            "tema" => "Mufrodat 34",
                            "kata" => "فَخِذٌ",
                            "kata_arab" => "فَخِذٌ",
                            "arti" => "Paha",
                            "huruf" => array_unique(["فَ","خِ","ذٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "245",
                            "tema" => "Mufrodat 34",
                            "kata" => "سَاقٌّ",
                            "kata_arab" => "سَاقٌّ",
                            "arti" => "Betis",
                            "huruf" => array_unique(["سَ","ا","قٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "246",
                            "tema" => "Mufrodat 34",
                            "kata" => "قَدَمٌ",
                            "kata_arab" => "قَدَمٌ",
                            "arti" => "Telapk kaki",
                            "huruf" => array_unique(["قَ","دَ","مٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],

                    // 247-252
                        [
                            "id" => "247",
                            "tema" => "Mufrodat 35",
                            "kata" => "كَعْبٌ",
                            "kata_arab" => "كَعْبٌ",
                            "arti" => "Mata kaki",
                            "huruf" => array_unique(["كَ","عْ","بٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "248",
                            "tema" => "Mufrodat 35",
                            "kata" => "كَاحِلٌ",
                            "kata_arab" => "كَاحِلٌ",
                            "arti" => "Pergelangan kaki",
                            "huruf" => array_unique(["كَ","ا","حِ","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "249",
                            "tema" => "Mufrodat 35",
                            "kata" => "عَقِبٌ",
                            "kata_arab" => "عَقِبٌ",
                            "arti" => "Tumit",
                            "huruf" => array_unique(["عَ","قِ","بٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "250",
                            "tema" => "Mufrodat 35",
                            "kata" => "ظُفْرٌ",
                            "kata_arab" => "ظُفْرٌ",
                            "arti" => "Kuku",
                            "huruf" => array_unique(["ظُ","فْ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "251",
                            "tema" => "Mufrodat 35",
                            "kata" => "مَسَامٌ",
                            "kata_arab" => "مَسَامٌ",
                            "arti" => "Pori-pori",
                            "huruf" => array_unique(["مَ","سَ","ا","مٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "252",
                            "tema" => "Mufrodat 35",
                            "kata" => "شَامَةٌ",
                            "kata_arab" => "شَامَةٌ",
                            "arti" => "Tahi lalat",
                            "huruf" => array_unique(["شَ","ا","مَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        
                    // 253-257
                        [
                            "id" => "253",
                            "tema" => "Mufrodat 36",
                            "kata" => "إِبْهَامٌ",
                            "kata_arab" => "إِبْهَامٌ",
                            "arti" => "Ibu jari",
                            "huruf" => array_unique(["إِ","بْ","هَ","ا","مٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "254",
                            "tema" => "Mufrodat 36",
                            "kata" => "سَبَابَةٌ",
                            "kata_arab" => "سَبَابَةٌ",
                            "arti" => "Jari telunjuk",
                            "huruf" => array_unique(["سَ","بَ","ا","بَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "255",
                            "tema" => "Mufrodat 36",
                            "kata" => "وُسْطَى",
                            "kata_arab" => "وُسْطَى",
                            "arti" => "Jari tengah",
                            "huruf" => array_unique(["وُ","سْ","طَ","ى"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "256",
                            "tema" => "Mufrodat 36",
                            "kata" => "بِنْصِرٌ",
                            "kata_arab" => "بِنْصِرٌ",
                            "arti" => "Jari manis",
                            "huruf" => array_unique(["بِ","نْ","صِ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        [
                            "id" => "257",
                            "tema" => "Mufrodat 36",
                            "kata" => "خِنْصِرٌ",
                            "kata_arab" => "خِنْصِرٌ",
                            "arti" => "Jari kelingking",
                            "huruf" => array_unique(["خِ","نْ","صِ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 5"
                        ],
                        
                // per_6
                    // 258-262
                        [
                            "id" => "258",
                            "tema" => "Mufrodat 37",
                            "kata" => "نَظَرَ-يَنْظُرُ-نَظْرًا",
                            "kata_arab" => "نَظَرَ-يَنْظُرُ-نَظْرًا",
                            "arti" => "Melihat",
                            "huruf" => array_unique(["نَ","ظَ","رَ","-","يَ","نْ","ظُ","رُ","-","نَ","ظْ","رً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "259",
                            "tema" => "Mufrodat 37",
                            "kata" => "سَمِعَ-يَسْمَعُ-سَمْعًا",
                            "kata_arab" => "سَمِعَ-يَسْمَعُ-سَمْعًا",
                            "arti" => "Mendengar",
                            "huruf" => array_unique(["سَ","مِ","عَ","-","يَ","سْ","مَ","عُ","-","سَ","مْ","عً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "260",
                            "tema" => "Mufrodat 37",
                            "kata" => "شَمَّ-يَشُمُّ-شَمًّا",
                            "kata_arab" => "شَمَّ-يَشُمُّ-شَمًّا",
                            "arti" => "Mencium (hidung)",
                            "huruf" => array_unique(["شَ","مَّ","-","يَ","شُ","مُّ","-","شَ","مًّ","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "261",
                            "tema" => "Mufrodat 37",
                            "kata" => "قَبَّلَ-يُقَبِّلُ-تَقْبِيْلاً",
                            "kata_arab" => "قَبَّلَ-يُقَبِّلُ-تَقْبِيْلاً",
                            "arti" => "Mencium (bibir)",
                            "huruf" => array_unique(["قَ","بَّ","لَ","-","يُ","قَ","بِّ","لُ","-","تَ","قْ","بِ","يْ","لاً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "262",
                            "tema" => "Mufrodat 37",
                            "kata" => "حَسَّ-يَحُسُّ-حَسًّا",
                            "kata_arab" => "حَسَّ-يَحُسُّ-حَسًّا",
                            "arti" => "Merasakan",
                            "huruf" => array_unique(["حَ","سَّ","-","يَ","حُ","سُّ","-","حَ","سًّ","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        
                    // 263-267
                        [
                            "id" => "263",
                            "tema" => "Mufrodat 38",
                            "kata" => "ضَرَبَ-يَضْرِبُ-ضَرْبًا",
                            "kata_arab" => "ضَرَبَ-يَضْرِبُ-ضَرْبًا",
                            "arti" => "Memukul",
                            "huruf" => array_unique(["ضَ","رَ","بَ","-","يَ","ضْ","رِ","بُ","-","ضَ","رْ","بً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "264",
                            "tema" => "Mufrodat 38",
                            "kata" => "أَخَذَ-يَأْخُذُ-أَخْذًا",
                            "kata_arab" => "أَخَذَ-يَأْخُذُ-أَخْذًا",
                            "arti" => "Mengambil",
                            "huruf" => array_unique(["أَ","خَ","ذَ","-","يَ","أْ","خُ","ذُ","-","أَ","خْ","ذً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "265",
                            "tema" => "Mufrodat 38",
                            "kata" => "قَرَصَ-يَقْرُصُ-قَرْصًا",
                            "kata_arab" => "قَرَصَ-يَقْرُصُ-قَرْصًا",
                            "arti" => "Mencubit",
                            "huruf" => array_unique(["قَ","رَ","صَ","-","يَ","قْ","رُ","صُ","-","قَ","رْ","صً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "266",
                            "tema" => "Mufrodat 38",
                            "kata" => "بَصَقَ-يَبْصُقُ-بَصْقٌ",
                            "kata_arab" => "بَصَقَ-يَبْصُقُ-بَصْقٌ",
                            "arti" => "Meludah",
                            "huruf" => array_unique(["بَ","صَ","قَ","-","يَ","بْ","صُ","قُ","-","بَ","صْ","قٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "267",
                            "tema" => "Mufrodat 38",
                            "kata" => "تَنَفَّسَ-يَتَنَفَّسُ-تَنَفُّسًا",
                            "kata_arab" => "تَنَفَّسَ-يَتَنَفَّسُ-تَنَفُّسًا",
                            "arti" => "Bernafas",
                            "huruf" => array_unique(["تَ","نَ","فَّ","سَ","-","يَ","تَ","نَ","فَّ","سُ","-","تَ","نَ","فُّ","سً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        
                    // 268-272
                        [
                            "id" => "268",
                            "tema" => "Mufrodat 39",
                            "kata" => "رَفَسَ-يَرْفُسُ-رَفْسًا",
                            "kata_arab" => "رَفَسَ-يَرْفُسُ-رَفْسًا",
                            "arti" => "Menendang",
                            "huruf" => array_unique(["رَ","فَ","سَ","-","يَ","رْ","فُ","سُ","-","رَ","فْ","سً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "269",
                            "tema" => "Mufrodat 39",
                            "kata" => "لَمَسَ-يَلْمِسُ-لَمْسًا",
                            "kata_arab" => "لَمَسَ-يَلْمِسُ-لَمْسًا",
                            "arti" => "Menyentuh",
                            "huruf" => array_unique(["لَ","مَ","سَ","-","يَ","لْ","مِ","سُ","-","لَ","مْ","سً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "270",
                            "tema" => "Mufrodat 39",
                            "kata" => "تَفَكَّرَ-يَتَفَكَّرُ-تَفَكُّرًا",
                            "kata_arab" => "تَفَكَّرَ-يَتَفَكَّرُ-تَفَكُّرًا",
                            "arti" => "Memikirkan",
                            "huruf" => array_unique(["تَ","فَ","كَّ","رَ","-","يَ","تَ","فَ","كَّ","رُ","-","تَ","فَ","كُّ","رً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "271",
                            "tema" => "Mufrodat 39",
                            "kata" => "كَتَبَ-يَكْتُبُ-كِتَابَةً",
                            "kata_arab" => "كَتَبَ-يَكْتُبُ-كِتَابَةً",
                            "arti" => "Menulis",
                            "huruf" => array_unique(["كَ","تَ","بَ","-","يَ","كْ","تُ","بُ","-","كِ","تَ","ا","بَ","ةً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "272",
                            "tema" => "Mufrodat 39",
                            "kata" => "قَرَأَ-يَقْرَأُ-قِرَاءَةً",
                            "kata_arab" => "قَرَأَ-يَقْرَأُ-قِرَاءَةً",
                            "arti" => "Membaca",
                            "huruf" => array_unique(["قَ","رَ","أَ","-","يَ","قْ","رَ","أُ","-","قِ","رَ","ا","ءَ","ةً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        
                    // 273-277
                        [
                            "id" => "273",
                            "tema" => "Mufrodat 40",
                            "kata" => "فَكَّرَ-يُفَكِّرُ-تَفْكِيْرًا",
                            "kata_arab" => "فَكَّرَ-يُفَكِّرُ-تَفْكِيْرًا",
                            "arti" => "Memikirkan",
                            "huruf" => array_unique(["فَ","كَّ","رَ","-","يُ","فَ","كِّ","رُ","-","تَ","فْ","كِ","يْ","رً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "274",
                            "tema" => "Mufrodat 40",
                            "kata" => "تَلاَ-يَتْلُو-تِلاَوَةً",
                            "kata_arab" => "تَلاَ-يَتْلُو-تِلاَوَةً",
                            "arti" => "Membaca",
                            "huruf" => array_unique(["تَ","لاَ","-","يَ","تْ","لُ","و","-","تِ","لاَ","وَ","ةً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "275",
                            "tema" => "Mufrodat 40",
                            "kata" => "حَكَّ-يَحِكُّ-حِكًّا",
                            "kata_arab" => "حَكَّ-يَحِكُّ-حِكًّا",
                            "arti" => "Menggaruk",
                            "huruf" => array_unique(["حَ","كَّ","-","يَ","حِ","كُّ","-","حِ","كًّ","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "276",
                            "tema" => "Mufrodat 40",
                            "kata" => "دَلَّكَ-يُدَلِّكُ-تَدْلِيْكًا",
                            "kata_arab" => "دَلَّكَ-يُدَلِّكُ-تَدْلِيْكًا",
                            "arti" => "Memijat",
                            "huruf" => array_unique(["دَ","لَّ","كَ","-","يُ","دَ","لِّ","كُ","-","تَ","دْ","لِ","يْ","كً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "277",
                            "tema" => "Mufrodat 40",
                            "kata" => "نَفَخَ-يَنْفَخُ-نَفْخًا",
                            "kata_arab" => "نَفَخَ-يَنْفَخُ-نَفْخًا",
                            "arti" => "Meniup",
                            "huruf" => array_unique(["نَ","فَ","خَ","-","يَ","نْ","فَ","خُ","-","نَ","فْ","خً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        
                    // 278-281
                        [
                            "id" => "278",
                            "tema" => "Mufrodat 41",
                            "kata" => "تَأَمَّلَ-يَتَأَمَّلُ-تَأَمُّلاً",
                            "kata_arab" => "تَأَمَّلَ-يَتَأَمَّلُ-تَأَمُّلاً",
                            "arti" => "Berangan-angan",
                            "huruf" => array_unique(["تَ","أَ","مَّ","لَ","-","يَ","تَ","أَ","مَّ","لُ","-","تَ","أَ","مُّ","لاً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "279",
                            "tema" => "Mufrodat 41",
                            "kata" => "مَشَطَ-يَمْشُطُ-مَشْطًا",
                            "kata_arab" => "مَشَطَ-يَمْشُطُ-مَشْطًا",
                            "arti" => "Menyisir",
                            "huruf" => array_unique(["مَ","شَ","طَ","-","يَ","مْ","شُ","طُ","-","مَ","شْ","طً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "280",
                            "tema" => "Mufrodat 41",
                            "kata" => "قَالَ-يَقُوْلُ-قَوْلاً",
                            "kata_arab" => "قَالَ-يَقُوْلُ-قَوْلاً",
                            "arti" => "Berkata",
                            "huruf" => array_unique(["قَ","ا","لَ","-","يَ","قُ","وْ","لُ","-","قَ","وْ","لاً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "281",
                            "tema" => "Mufrodat 41",
                            "kata" => "تَكَلَّمَ-يَتَكَلَّمُ-تَكَلُّماً",
                            "kata_arab" => "تَكَلَّمَ-يَتَكَلَّمُ-تَكَلُّماً",
                            "arti" => "Berbicara",
                            "huruf" => array_unique(["تَ","كَ","لَّ","مَ","-","يَ","تَ","كَ","لَّ","مُ","-","تَ","كَ","لُّ","ماً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        
                    // 282-290
                        [
                            "id" => "282",
                            "tema" => "Mufrodat 42",
                            "kata" => "أَبٌ / وَالِدٌ",
                            "kata_arab" => "أَبٌ",
                            "arti" => "Ayah",
                            "huruf" => array_unique(["أَ","بٌ","أُ","مٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "283",
                            "tema" => "Mufrodat 42",
                            "kata" => "أُمٌّ / وَالِدَةٌ",
                            "kata_arab" => "أُمٌّ",
                            "arti" => "Ibu",
                            "huruf" => array_unique(["أَ","بٌ","أُ","مٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "284",
                            "tema" => "Mufrodat 42",
                            "kata" => "جَدٌّ",
                            "kata_arab" => "جَدٌّ",
                            "arti" => "Kakek",
                            "huruf" => array_unique(["جَ","دٌّ","جَ","دَّ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "285",
                            "tema" => "Mufrodat 42",
                            "kata" => "جَدَّةٌ",
                            "kata_arab" => "جَدَّةٌ",
                            "arti" => "Nenek",
                            "huruf" => array_unique(["جَ","دٌّ","جَ","دَّ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "286",
                            "tema" => "Mufrodat 42",
                            "kata" => "زَوْجٌ",
                            "kata_arab" => "زَوْجٌ",
                            "arti" => "Suami",
                            "huruf" => array_unique(["زَ","وْ","جٌ","زَ","وْ","جَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "287",
                            "tema" => "Mufrodat 42",
                            "kata" => "زَوْجَةٌ",
                            "kata_arab" => "زَوْجَةٌ",
                            "arti" => "Istri",
                            "huruf" => array_unique(["زَ","وْ","جٌ","زَ","وْ","جَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "288",
                            "tema" => "Mufrodat 42",
                            "kata" => "اِبْنٌ",
                            "kata_arab" => "اِبْنٌ",
                            "arti" => "Anak (lk)",
                            "huruf" => array_unique(["اِ","بْ","نٌ","بِ","نْ","تٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "289",
                            "tema" => "Mufrodat 42",
                            "kata" => "بِنْتٌ",
                            "kata_arab" => "بِنْتٌ",
                            "arti" => "Anak (pr)",
                            "huruf" => array_unique(["اِ","بْ","نٌ","بِ","نْ","تٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "290",
                            "tema" => "Mufrodat 42",
                            "kata" => "حَفِيْدٌ",
                            "kata_arab" => "حَفِيْدٌ",
                            "arti" => "Cucu (lk)",
                            "huruf" => array_unique(["حَ","فِ","يْ","دٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        
                    // 291-299
                        [
                            "id" => "291",
                            "tema" => "Mufrodat 43",
                            "kata" => "حَفِيْدَةٌ",
                            "kata_arab" => "حَفِيْدَةٌ",
                            "arti" => "Cucu (pr)",
                            "huruf" => array_unique(["حَ","فِ","يْ","دَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "292",
                            "tema" => "Mufrodat 43",
                            "kata" => "عَمٌّ",
                            "kata_arab" => "عَمٌّ",
                            "arti" => "Paman (dr Bapak)",
                            "huruf" => array_unique(["عَ","مٌّ","عَ","مَّ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "293",
                            "tema" => "Mufrodat 43",
                            "kata" => "عَمَّةٌ",
                            "kata_arab" => "عَمَّةٌ",
                            "arti" => "Bibi (dr Bapak)",
                            "huruf" => array_unique(["عَ","مٌّ","عَ","مَّ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "294",
                            "tema" => "Mufrodat 43",
                            "kata" => "خَالٌ",
                            "kata_arab" => "خَالٌ",
                            "arti" => "Paman (dr Ibu)",
                            "huruf" => array_unique(["خَ","ا","لٌ","خَ","ا","لَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "295",
                            "tema" => "Mufrodat 43",
                            "kata" => "خَالَةٌ",
                            "kata_arab" => "خَالَةٌ",
                            "arti" => "Bibi (dr Ibu)",
                            "huruf" => array_unique(["خَ","ا","لٌ","خَ","ا","لَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "296",
                            "tema" => "Mufrodat 43",
                            "kata" => "أَخٌ",
                            "kata_arab" => "أَخٌ",
                            "arti" => "Saudara (lk)",
                            "huruf" => array_unique(["أَ","خٌ","أُ","خْ","تٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "297",
                            "tema" => "Mufrodat 43",
                            "kata" => "أُخْتٌ",
                            "kata_arab" => "أُخْتٌ",
                            "arti" => "Saudara (pr)",
                            "huruf" => array_unique(["أَ","خٌ","أُ","خْ","تٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "298",
                            "tema" => "Mufrodat 43",
                            "kata" => "أَخٌ كَبِيْرٌ",
                            "kata_arab" => "أَخٌ كَبِيْرٌ",
                            "arti" => "Kakak (lk)",
                            "huruf" => array_unique(["أَ","خٌ","_","كَ","بِ","يْ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "299",
                            "tema" => "Mufrodat 43",
                            "kata" => "أَخٌ صَغِيْرٌ",
                            "kata_arab" => "أَخٌ صَغِيْرٌ",
                            "arti" => "Adik (lk)",
                            "huruf" => array_unique(["أَ","خٌ","_","صَ","غِ","يْ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        
                    // 300-307
                        [
                            "id" => "300",
                            "tema" => "Mufrodat 44",
                            "kata" => "أُخْتٌ كَبِيْرَةٌ",
                            "kata_arab" => "أُخْتٌ كَبِيْرَةٌ",
                            "arti" => "Kakak (pr)",
                            "huruf" => array_unique(["أُ","خْ","تٌ","_","كَ","بِ","يْ","رَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "301",
                            "tema" => "Mufrodat 44",
                            "kata" => "أُخْتٌ صَغِيْرَةٌ",
                            "kata_arab" => "أُخْتٌ صَغِيْرَةٌ",
                            "arti" => "Adik (pr)",
                            "huruf" => array_unique(["أُ","خْ","تٌ","_","صَ","غِ","يْ","رَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "302",
                            "tema" => "Mufrodat 44",
                            "kata" => "أَخٌ شَقِيْقٌ",
                            "kata_arab" => "أَخٌ شَقِيْقٌ",
                            "arti" => "Saudara (lk) kandung",
                            "huruf" => array_unique(["أَ","خٌ","_","شَ","قِ","يْ","قٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "303",
                            "tema" => "Mufrodat 44",
                            "kata" => "أُخْتٌ شَقِيْقَةٌ",
                            "kata_arab" => "أُخْتٌ شَقِيْقَةٌ",
                            "arti" => "Saudara (pr) kandung",
                            "huruf" => array_unique(["أُ","خْ","تٌ","_","شَ","قِ","يْ","قَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "304",
                            "tema" => "Mufrodat 44",
                            "kata" => "رَبِيْبٌ",
                            "kata_arab" => "رَبِيْبٌ",
                            "arti" => "Anak tiri (lk)",
                            "huruf" => array_unique(["رَ","بِ","يْ","بٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "305",
                            "tema" => "Mufrodat 44",
                            "kata" => "رَبِيْبَةٌ",
                            "kata_arab" => "رَبِيْبَةٌ",
                            "arti" => "Anak tiri (pr)",
                            "huruf" => array_unique(["رَ","بِ","يْ","بَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "306",
                            "tema" => "Mufrodat 44",
                            "kata" => "عَزَبٌ",
                            "kata_arab" => "عَزَبٌ",
                            "arti" => "Bujang",
                            "huruf" => array_unique(["عَ","زَ","بٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "307",
                            "tema" => "Mufrodat 44",
                            "kata" => "عَذْرَاءُ",
                            "kata_arab" => "عَذْرَاءُ",
                            "arti" => "Seorang perawan",
                            "huruf" => array_unique(["عَ","ذْ","رَ","ا","ءُ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        
                    // 308-315
                        [
                            "id" => "308",
                            "tema" => "Mufrodat 45",
                            "kata" => "أَرْمَلٌ",
                            "kata_arab" => "أَرْمَلٌ",
                            "arti" => "Duda",
                            "huruf" => array_unique(["أَ","رْ","مَ","لٌ","أَ","رْ","مَ","لَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "309",
                            "tema" => "Mufrodat 45",
                            "kata" => "أَرْمَلَةٌ",
                            "kata_arab" => "أَرْمَلَةٌ",
                            "arti" => "Janda",
                            "huruf" => array_unique(["أَ","رْ","مَ","لٌ","أَ","رْ","مَ","لَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "310",
                            "tema" => "Mufrodat 45",
                            "kata" => "خَتَنٌ",
                            "kata_arab" => "خَتَنٌ",
                            "arti" => "Menantu (lk)",
                            "huruf" => array_unique(["خَ","تَ","نٌ","خَ","تَ","نَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "311",
                            "tema" => "Mufrodat 45",
                            "kata" => "خَتَنَةٌ",
                            "kata_arab" => "خَتَنَةٌ",
                            "arti" => "Menantu (pr)",
                            "huruf" => array_unique(["خَ","تَ","نٌ","خَ","تَ","نَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "312",
                            "tema" => "Mufrodat 45",
                            "kata" => "حَمٌ",
                            "kata_arab" => "حَمٌ",
                            "arti" => "Mertua (lk)",
                            "huruf" => array_unique(["حَ","مٌ","حَ","مَ","ا","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "313",
                            "tema" => "Mufrodat 45",
                            "kata" => "حَمَاةٌ",
                            "kata_arab" => "حَمَاةٌ",
                            "arti" => "Mertua (pr)",
                            "huruf" => array_unique(["حَ","مٌ","حَ","مَ","ا","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "314",
                            "tema" => "Mufrodat 45",
                            "kata" => "فَتَى / شَابٌّ",
                            "kata_arab" => "شَابٌّ",
                            "arti" => "Pemuda",
                            "huruf" => array_unique(["شَ","ا","بٌّ","شَ","ا","بَّ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                        [
                            "id" => "315",
                            "tema" => "Mufrodat 45",
                            "kata" => "فَتَاةٌ / شَابَّةٌ",
                            "kata_arab" => "شَابَّةٌ",
                            "arti" => "Pemudi",
                            "huruf" => array_unique(["شَ","ا","بٌّ","شَ","ا","بَّ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 6"
                        ],
                
                // per_7
                    // 316-321
                        [
                            "id" => "316",
                            "tema" => "Mufrodat 46",
                            "kata" => "رَبَّي-يُرَبِّي-تَرْبِيَّةً",
                            "kata_arab" => "رَبَّي-يُرَبِّي-تَرْبِيَّةً",
                            "arti" => "Mendidik",
                            "huruf" => array_unique(["رَ","بَّ","ي","-","يُ","رَ","بِّ","ي","-","تَ","رْ","بِ","يَّ","ةً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 7"
                        ],
                        [
                            "id" => "317",
                            "tema" => "Mufrodat 46",
                            "kata" => "حَضَنَ-يَحْضُنُ-حَضَانَةً",
                            "kata_arab" => "حَضَنَ-يَحْضُنُ-حَضَانَةً",
                            "arti" => "Mengasuh",
                            "huruf" => array_unique(["حَ","ضَ","نَ","-","يَ","حْ","ضُ","نُ","-","حَ","ضَ","ا","نَ","ةً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 7"
                        ],
                        [
                            "id" => "318",
                            "tema" => "Mufrodat 46",
                            "kata" => "أَحَبَّ-يُحِبُّ-مَحَبَّةً",
                            "kata_arab" => "أَحَبَّ-يُحِبُّ-مَحَبَّةً",
                            "arti" => "Menyukai",
                            "huruf" => array_unique(["أَ","حَ","بَّ","-","يُ","حِ","بُّ","-","مَ","حَ","بَّ","ةً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 7"
                        ],
                        [
                            "id" => "319",
                            "tema" => "Mufrodat 46",
                            "kata" => "رَحِمَ-يَرْحَمُ-رَحْمَةً",
                            "kata_arab" => "رَحِمَ-يَرْحَمُ-رَحْمَةً",
                            "arti" => "Menyayangi",
                            "huruf" => array_unique(["رَ","حِ","مَ","-","يَ","رْ","حَ","مُ","-","رَ","حْ","مَ","ةً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 7"
                        ],
                        [
                            "id" => "320",
                            "tema" => "Mufrodat 46",
                            "kata" => "اِحْتَرَمَ-يَحْتَرِمُ-اِحْتِرَامًا",
                            "kata_arab" => "اِحْتَرَمَ-يَحْتَرِمُ-اِحْتِرَامًا",
                            "arti" => "Menghormati",
                            "huruf" => array_unique(["اِ","حْ","تَ","رَ","مَ","-","يَ","حْ","تَ","رِ","مُ","-","اِ","حْ","تِ","رَ","ا","مً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 7"
                        ],
                        [
                            "id" => "321",
                            "tema" => "Mufrodat 46",
                            "kata" => "جَرَحَ-يَجْرَحُ-جَرْحًا",
                            "kata_arab" => "جَرَحَ-يَجْرَحُ-جَرْحًا",
                            "arti" => "Melukai",
                            "huruf" => array_unique(["جَ","رَ","حَ","-","يَ","جْ","رَ","حُ","-","جَ","رْ","حً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 7"
                        ],
                        
                    // 322-327
                        [
                            "id" => "322",
                            "tema" => "Mufrodat 47",
                            "kata" => "أَهَانَ-يُهِيْنُ-إِهَانَةً",
                            "kata_arab" => "أَهَانَ-يُهِيْنُ-إِهَانَةً",
                            "arti" => "Menghina",
                            "huruf" => array_unique(["أَ","هَ","ا","نَ","-","يُ","هِ","يْ","نُ","-","إِ","هَ","ا","نَ","ةً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 7"
                        ],
                        [
                            "id" => "323",
                            "tema" => "Mufrodat 47",
                            "kata" => "دَعَا-يَدْعُو-دَعْوَةً",
                            "kata_arab" => "دَعَا-يَدْعُو-دَعْوَةً",
                            "arti" => "Mengajak",
                            "huruf" => array_unique(["دَ","عَ","ا","-","يَ","دْ","عُ","و","-","دَ","عْ","وَ","ةً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 7"
                        ],
                        [
                            "id" => "324",
                            "tema" => "Mufrodat 47",
                            "kata" => "أَمَرَ-يَأْمُرُ-أَمْرًا",
                            "kata_arab" => "أَمَرَ-يَأْمُرُ-أَمْرًا",
                            "arti" => "Memerintah",
                            "huruf" => array_unique(["أَ","مَ","رَ","-","يَ","أْ","مُ","رُ","-","أَ","مْ","رً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 7"
                        ],
                        [
                            "id" => "325",
                            "tema" => "Mufrodat 47",
                            "kata" => "رَضِعَ-يَرْضَعُ-رَضَاعَةً",
                            "kata_arab" => "رَضِعَ-يَرْضَعُ-رَضَاعَةً",
                            "arti" => "Menyusu",
                            "huruf" => array_unique(["رَ","ضِ","عَ","-","يَ","رْ","ضَ","عُ","-","رَ","ضَ","ا","عَ","ةً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 7"
                        ],
                        [
                            "id" => "326",
                            "tema" => "Mufrodat 47",
                            "kata" => "أَرْضَعَ-يُرْضِعُ-إِرْضَاعًا",
                            "kata_arab" => "أَرْضَعَ-يُرْضِعُ-إِرْضَاعًا",
                            "arti" => "Menyusui",
                            "huruf" => array_unique(["أَ","رْ","ضَ","عَ","-","يُ","رْ","ضِ","عُ","-","إِ","رْ","ضَ","ا","عً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 7"
                        ],
                        [
                            "id" => "327",
                            "tema" => "Mufrodat 47",
                            "kata" => "نَصَحَ-يَنْصَحُ-نَصِيْحَةً",
                            "kata_arab" => "نَصَحَ-يَنْصَحُ-نَصِيْحَةً",
                            "arti" => "Menasehati",
                            "huruf" => array_unique(["نَ","صَ","حَ","-","يَ","نْ","صَ","حُ","-","نَ","صِ","يْ","حَ","ةً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 7"
                        ],

                    // 328-333
                        [
                            "id" => "328",
                            "tema" => "Mufrodat 48",
                            "kata" => "نَصَرَ-يَنْصُرُ-نَصْرًا",
                            "kata_arab" => "نَصَرَ-يَنْصُرُ-نَصْرًا",
                            "arti" => "Menolong",
                            "huruf" => array_unique(["نَ","صَ","رَ","-","يَ","نْ","صُ","رُ","-","نَ","صْ","رً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 7"
                        ],
                        [
                            "id" => "329",
                            "tema" => "Mufrodat 48",
                            "kata" => "بَلَغَ-يَبْلُغُ-بُلُوغًا",
                            "kata_arab" => "بَلَغَ-يَبْلُغُ-بُلُوغًا",
                            "arti" => "Menyampaikan",
                            "huruf" => array_unique(["بَ","لَ","غَ","-","يَ","بْ","لُ","غُ","-","بُ","لُ","و","غً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 7"
                        ],
                        [
                            "id" => "330",
                            "tema" => "Mufrodat 48",
                            "kata" => "مَزَحَ-يَمْزَحُ-مِزَاحًا",
                            "kata_arab" => "مَزَحَ-يَمْزَحُ-مِزَاحًا",
                            "arti" => "Bercanda",
                            "huruf" => array_unique(["مَ","زَ","حَ","-","يَ","مْ","زَ","حُ","-","مِ","زَ","ا","حً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 7"
                        ],
                        [
                            "id" => "331",
                            "tema" => "Mufrodat 48",
                            "kata" => "اِعْتَرَفَ-يَعْتَرِفُ-اِعْتِرَافًا",
                            "kata_arab" => "اِعْتَرَفَ-يَعْتَرِفُ-اِعْتِرَافًا",
                            "arti" => "Mengakui",
                            "huruf" => array_unique(["اِ","عْ","تَ","رَ","فَ","-","يَ","عْ","تَ","رِ","فُ","-","اِ","عْ","تِ","رَ","ا","فً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 7"
                        ],
                        [
                            "id" => "332",
                            "tema" => "Mufrodat 48",
                            "kata" => "رَجَى-يَرْجُو-رَجَاءً",
                            "kata_arab" => "رَجَى-يَرْجُو-رَجَاءً",
                            "arti" => "Mengharapkan",
                            "huruf" => array_unique(["رَ","جَ","ى","-","يَ","رْ","جُ","و","-","رَ","جَ","ا","ءً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 7"
                        ],
                        [
                            "id" => "333",
                            "tema" => "Mufrodat 48",
                            "kata" => "صَارَ-يَصِيْرُ-صَيْرًا",
                            "kata_arab" => "صَارَ-يَصِيْرُ-صَيْرًا",
                            "arti" => "Menjadi",
                            "huruf" => array_unique(["صَ","ا","رَ","-","يَ","صِ","يْ","رُ","-","صَ","يْ","رً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 7"
                        ],
                        
                    // 334-339
                        [
                            "id" => "334",
                            "tema" => "Mufrodat 49",
                            "kata" => "اِحْتَاجَ-يَحْتَاجُ-اِحْتِيَاجًا",
                            "kata_arab" => "اِحْتَاجَ-يَحْتَاجُ-اِحْتِيَاجًا",
                            "arti" => "Membutuhkan",
                            "huruf" => array_unique(["اِ","حْ","تَ","ا","جَ","-","يَ","حْ","تَ","ا","جُ","-","اِ","حْ","تِ","يَ","ا","جً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 7"
                        ],
                        [
                            "id" => "335",
                            "tema" => "Mufrodat 49",
                            "kata" => "قَلَقَ-يَقْلَقُ-قَلَقًا",
                            "kata_arab" => "قَلَقَ-يَقْلَقُ-قَلَقًا",
                            "arti" => "Galau",
                            "huruf" => array_unique(["قَ","لَ","قَ","-","يَ","قْ","لَ","قُ","-","قَ","لَ","قً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 7"
                        ],
                        [
                            "id" => "336",
                            "tema" => "Mufrodat 49",
                            "kata" => "كَلَّفَ-يُكَلِّفُ-تَكْلِيْفًا",
                            "kata_arab" => "كَلَّفَ-يُكَلِّفُ-تَكْلِيْفًا",
                            "arti" => "Memaksa",
                            "huruf" => array_unique(["كَ","لَّ","فَ","-","يُ","كَ","لِّ","فُ","-","تَ","كْ","لِ","يْ","فً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 7"
                        ],
                        [
                            "id" => "337",
                            "tema" => "Mufrodat 49",
                            "kata" => "صَاحَ-يَصِيْحُ-صَيْحًا",
                            "kata_arab" => "صَاحَ-يَصِيْحُ-صَيْحًا",
                            "arti" => "Berteriak",
                            "huruf" => array_unique(["صَ","ا","حَ","-","يَ","صِ","يْ","حُ","-","صَ","يْ","حً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 7"
                        ],
                        [
                            "id" => "338",
                            "tema" => "Mufrodat 49",
                            "kata" => "ضَحِكَ-يَضْحَكُ-ضَحْكًا",
                            "kata_arab" => "ضَحِكَ-يَضْحَكُ-ضَحْكًا",
                            "arti" => "Tertawa",
                            "huruf" => array_unique(["ضَ","حِ","كَ","-","يَ","ضْ","حَ","كُ","-","ضَ","حْ","كً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 7"
                        ],
                        [
                            "id" => "339",
                            "tema" => "Mufrodat 49",
                            "kata" => "سَكَتَ-يَسْكُتُ-سُكُوْتًا",
                            "kata_arab" => "سَكَتَ-يَسْكُتُ-سُكُوْتًا",
                            "arti" => "Diam",
                            "huruf" => array_unique(["سَ","كَ","تَ","-","يَ","سْ","كُ","تُ","سُ","وْ","تً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 7"
                        ],
                
                // per_8
                    // 340-347
                        [
                            "id" => "340",
                            "tema" => "Mufrodat 50",
                            "kata" => "مُتَوَاضِعٌ",
                            "kata_arab" => "مُتَوَاضِعٌ",
                            "arti" => "Rendah hati",
                            "huruf" => array_unique(["مُ","تَ","وَ","ا","ضِ","عٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        [
                            "id" => "341",
                            "tema" => "Mufrodat 50",
                            "kata" => "حَكِيْمٌ",
                            "kata_arab" => "حَكِيْمٌ",
                            "arti" => "Bijaksana",
                            "huruf" => array_unique(["حَ","كِ","يْ","مٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        [
                            "id" => "342",
                            "tema" => "Mufrodat 50",
                            "kata" => "صَابِرٌ",
                            "kata_arab" => "صَابِرٌ",
                            "arti" => "Sabar",
                            "huruf" => array_unique(["صَ","ا","بِ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        [
                            "id" => "343",
                            "tema" => "Mufrodat 50",
                            "kata" => "مُتَوَحِّشٌ",
                            "kata_arab" => "مُتَوَحِّشٌ",
                            "arti" => "Liar",
                            "huruf" => array_unique(["مُ","تَ","وَ","حِّ","شٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        [
                            "id" => "344",
                            "tema" => "Mufrodat 50",
                            "kata" => "مُتَكَبِّرٌ",
                            "kata_arab" => "مُتَكَبِّرٌ",
                            "arti" => "Sombong",
                            "huruf" => array_unique(["مُ","تَ","كَ","بِّ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        [
                            "id" => "345",
                            "tema" => "Mufrodat 50",
                            "kata" => "غَضْبَانُ",
                            "kata_arab" => "غَضْبَانُ",
                            "arti" => "Marah",
                            "huruf" => array_unique(["غَ","ضْ","بَ","ا","نُ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        [
                            "id" => "346",
                            "tema" => "Mufrodat 50",
                            "kata" => "مِغْنَاجٌ",
                            "kata_arab" => "مِغْنَاجٌ",
                            "arti" => "Genit",
                            "huruf" => array_unique(["مِ","غْ","نَ","ا","جٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        [
                            "id" => "347",
                            "tema" => "Mufrodat 50",
                            "kata" => "نَهَّامٌ",
                            "kata_arab" => "نَهَّامٌ",
                            "arti" => "Rakus",
                            "huruf" => array_unique(["نَ","هَّ","ا","مٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        
                    // 348-355
                        [
                            "id" => "348",
                            "tema" => "Mufrodat 51",
                            "kata" => "أَمِيْنٌ",
                            "kata_arab" => "أَمِيْنٌ",
                            "arti" => "Dipercaya",
                            "huruf" => array_unique(["أَ","مِ","يْ","نٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        [
                            "id" => "349",
                            "tema" => "Mufrodat 51",
                            "kata" => "صَادِقٌ",
                            "kata_arab" => "صَادِقٌ",
                            "arti" => "Jujur",
                            "huruf" => array_unique(["صَ","ا","دِ","قٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        [
                            "id" => "350",
                            "tema" => "Mufrodat 51",
                            "kata" => "كَاذِبٌ",
                            "kata_arab" => "كَاذِبٌ",
                            "arti" => "Pembohong",
                            "huruf" => array_unique(["كَ","ا","ذِ","بٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        [
                            "id" => "351",
                            "tema" => "Mufrodat 51",
                            "kata" => "مُجْتَهِدٌ",
                            "kata_arab" => "مُجْتَهِدٌ",
                            "arti" => "Bersungguh-sungguh",
                            "huruf" => array_unique(["مُ","جْ","تَ","هِ","دٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        [
                            "id" => "352",
                            "tema" => "Mufrodat 51",
                            "kata" => "كَسْلَانٌ",
                            "kata_arab" => "كَسْلَانٌ",
                            "arti" => "Malas",
                            "huruf" => array_unique(["كَ","سْ","لَ","ا","نٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        [
                            "id" => "353",
                            "tema" => "Mufrodat 51",
                            "kata" => "حَسُوْدٌ",
                            "kata_arab" => "حَسُوْدٌ",
                            "arti" => "Dengki",
                            "huruf" => array_unique(["حَ","سُ","وْ","دٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        [
                            "id" => "354",
                            "tema" => "Mufrodat 51",
                            "kata" => "سَخِيٌّ",
                            "kata_arab" => "سَخِيٌّ",
                            "arti" => "Dermawan",
                            "huruf" => array_unique(["سَ","خِ","يٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        [
                            "id" => "355",
                            "tema" => "Mufrodat 51",
                            "kata" => "بَخِيْلٌ",
                            "kata_arab" => "بَخِيْلٌ",
                            "arti" => "Pelit",
                            "huruf" => array_unique(["بَ","خِ","يْ","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        
                    // 356-363
                        [
                            "id" => "356",
                            "tema" => "Mufrodat 52",
                            "kata" => "شُجَاعٌ",
                            "kata_arab" => "شُجَاعٌ",
                            "arti" => "Berani",
                            "huruf" => array_unique(["شُ","جَ","ا","عٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        [
                            "id" => "357",
                            "tema" => "Mufrodat 52",
                            "kata" => "جَبَّانٌ",
                            "kata_arab" => "جَبَّانٌ",
                            "arti" => "Penakut",
                            "huruf" => array_unique(["جَ","بَّ","ا","نٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        [
                            "id" => "358",
                            "tema" => "Mufrodat 52",
                            "kata" => "أَنِيْسٌ",
                            "kata_arab" => "أَنِيْسٌ",
                            "arti" => "Ramah",
                            "huruf" => array_unique(["أَ","نِ","يْ","سٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        [
                            "id" => "359",
                            "tema" => "Mufrodat 52",
                            "kata" => "مُشَاغِبٌ",
                            "kata_arab" => "مُشَاغِبٌ",
                            "arti" => "Nakal",
                            "huruf" => array_unique(["مُ","شَ","ا","غِ","بٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        [
                            "id" => "360",
                            "tema" => "Mufrodat 52",
                            "kata" => "لَطِيْفٌ",
                            "kata_arab" => "لَطِيْفٌ",
                            "arti" => "Imut",
                            "huruf" => array_unique(["لَ","طِ","يْ","فٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        [
                            "id" => "361",
                            "tema" => "Mufrodat 52",
                            "kata" => "جَمِيْلٌ",
                            "kata_arab" => "جَمِيْلٌ",
                            "arti" => "Indah",
                            "huruf" => array_unique(["جَ","مِ","يْ","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        [
                            "id" => "362",
                            "tema" => "Mufrodat 52",
                            "kata" => "جَمِيْلَةٌ",
                            "kata_arab" => "جَمِيْلَةٌ",
                            "arti" => "Cantik",
                            "huruf" => array_unique(["جَ","مِ","يْ","لَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        [
                            "id" => "363",
                            "tema" => "Mufrodat 52",
                            "kata" => "مَرَحٌ",
                            "kata_arab" => "مَرَحٌ",
                            "arti" => "Ceria",
                            "huruf" => array_unique(["مَ","رَ","حٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        
                    // 364-371
                        [
                            "id" => "364",
                            "tema" => "Mufrodat 53",
                            "kata" => "أَنِيْقٌ",
                            "kata_arab" => "أَنِيْقٌ",
                            "arti" => "Anggun",
                            "huruf" => array_unique(["أَ","نِ","يْ","قٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        [
                            "id" => "365",
                            "tema" => "Mufrodat 53",
                            "kata" => "مُهْمِلٌ",
                            "kata_arab" => "مُهْمِلٌ",
                            "arti" => "Ceroboh",
                            "huruf" => array_unique(["مُ","هْ","مِ","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        [
                            "id" => "366",
                            "tema" => "Mufrodat 53",
                            "kata" => "خَشِنٌ",
                            "kata_arab" => "خَشِنٌ",
                            "arti" => "Kasar",
                            "huruf" => array_unique(["خَ","شِ","نٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        [
                            "id" => "367",
                            "tema" => "Mufrodat 53",
                            "kata" => "حَقُوْدٌ",
                            "kata_arab" => "حَقُوْدٌ",
                            "arti" => "Pendengki",
                            "huruf" => array_unique(["حَ","قُ","وْ","دٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        [
                            "id" => "368",
                            "tema" => "Mufrodat 53",
                            "kata" => "ثَرْثَارٌ",
                            "kata_arab" => "ثَرْثَارٌ",
                            "arti" => "Cerewet",
                            "huruf" => array_unique(["ثَ","رْ","ثَ","ا","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        [
                            "id" => "369",
                            "tema" => "Mufrodat 53",
                            "kata" => "شَهِيْرٌ",
                            "kata_arab" => "شَهِيْرٌ",
                            "arti" => "Terkenal",
                            "huruf" => array_unique(["شَ","هِ","يْ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        [
                            "id" => "370",
                            "tema" => "Mufrodat 53",
                            "kata" => "عَاطِفِيٌّ",
                            "kata_arab" => "عَاطِفِيٌّ",
                            "arti" => "Romantis",
                            "huruf" => array_unique(["عَ","ا","طِ","فِ","يٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        [
                            "id" => "371",
                            "tema" => "Mufrodat 53",
                            "kata" => "سَكُوْتٌ",
                            "kata_arab" => "سَكُوْتٌ",
                            "arti" => "Pendiam",
                            "huruf" => array_unique(["سَ","كُ","وْ","تٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        
                    // 372-379
                        [
                            "id" => "372",
                            "tema" => "Mufrodat 54",
                            "kata" => "مُدَلَّعٌ",
                            "kata_arab" => "مُدَلَّعٌ",
                            "arti" => "Manja",
                            "huruf" => array_unique(["مُ","دَ","لَّ","عٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        [
                            "id" => "373",
                            "tema" => "Mufrodat 54",
                            "kata" => "أَنَانِيٌّ",
                            "kata_arab" => "أَنَانِيٌّ",
                            "arti" => "Egois",
                            "huruf" => array_unique(["أَ","نَ","ا","نِ","يٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        [
                            "id" => "374",
                            "tema" => "Mufrodat 54",
                            "kata" => "مُتَعَنِّتٌ",
                            "kata_arab" => "مُتَعَنِّتٌ",
                            "arti" => "Bandel",
                            "huruf" => array_unique(["مُ","تَ","عَ","نِّ","تٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        [
                            "id" => "375",
                            "tema" => "Mufrodat 54",
                            "kata" => "حَسَّاسٌ",
                            "kata_arab" => "حَسَّاسٌ",
                            "arti" => "Baperan",
                            "huruf" => array_unique(["حَ","سَّ","ا","سٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        [
                            "id" => "376",
                            "tema" => "Mufrodat 54",
                            "kata" => "رَحُوْمٌ",
                            "kata_arab" => "رَحُوْمٌ",
                            "arti" => "Penyayang",
                            "huruf" => array_unique(["رَ","حُ","وْ","مٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        [
                            "id" => "377",
                            "tema" => "Mufrodat 54",
                            "kata" => "مَاهِرٌ",
                            "kata_arab" => "مَاهِرٌ",
                            "arti" => "Pandai",
                            "huruf" => array_unique(["مَ","ا","هِ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        [
                            "id" => "378",
                            "tema" => "Mufrodat 54",
                            "kata" => "جَاهِلٌ",
                            "kata_arab" => "جَاهِلٌ",
                            "arti" => "Bodoh",
                            "huruf" => array_unique(["جَ","ا","هِ","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                        [
                            "id" => "379",
                            "tema" => "Mufrodat 54",
                            "kata" => "ذَكِيٌّ",
                            "kata_arab" => "ذَكِيٌّ",
                            "arti" => "Cerdas",
                            "huruf" => array_unique(["ذَ","كِ","يٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 8"
                        ],
                
                // per_9
                    // 380-387
                        [
                            "id" => "380",
                            "tema" => "Mufrodat 55",
                            "kata" => "غَبِيٌّ",
                            "kata_arab" => "غَبِيٌّ",
                            "arti" => "Dungu",
                            "huruf" => array_unique(["غَ","بِ","يٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        [
                            "id" => "381",
                            "tema" => "Mufrodat 55",
                            "kata" => "طَفْشَانُ",
                            "kata_arab" => "طَفْشَانُ",
                            "arti" => "Sumpek",
                            "huruf" => array_unique(["طَ","فْ","شَ","ا","نُ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        [
                            "id" => "382",
                            "tema" => "Mufrodat 55",
                            "kata" => "نَعْسَانُ",
                            "kata_arab" => "نَعْسَانُ",
                            "arti" => "Ngantuk",
                            "huruf" => array_unique(["نَ","عْ","سَ","ا","نُ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        [
                            "id" => "383",
                            "tema" => "Mufrodat 55",
                            "kata" => "تَعْبَانُ",
                            "kata_arab" => "تَعْبَانُ",
                            "arti" => "Lelah",
                            "huruf" => array_unique(["تَ","عْ","بَ","ا","نُ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        [
                            "id" => "384",
                            "tema" => "Mufrodat 55",
                            "kata" => "جَوْعَانُ",
                            "kata_arab" => "جَوْعَانُ",
                            "arti" => "Laper",
                            "huruf" => array_unique(["جَ","وْ","عَ","ا","نُ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        [
                            "id" => "385",
                            "tema" => "Mufrodat 55",
                            "kata" => "عَطْشَانُ",
                            "kata_arab" => "عَطْشَانُ",
                            "arti" => "Haus",
                            "huruf" => array_unique(["عَ","طْ","شَ","ا","نُ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        [
                            "id" => "386",
                            "tema" => "Mufrodat 55",
                            "kata" => "مَجْنُوْنٌ",
                            "kata_arab" => "مَجْنُوْنٌ",
                            "arti" => "Gila",
                            "huruf" => array_unique(["مَ","جْ","نُ","وْ","نٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        [
                            "id" => "387",
                            "tema" => "Mufrodat 55",
                            "kata" => "أَصَمٌّ",
                            "kata_arab" => "أَصَمٌّ",
                            "arti" => "Tuli",
                            "huruf" => array_unique(["أَ","صَ","مٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        
                    // 388-395
                        [
                            "id" => "388",
                            "tema" => "Mufrodat 56",
                            "kata" => "أَعْمَى",
                            "kata_arab" => "أَعْمَى",
                            "arti" => "Buta",
                            "huruf" => array_unique(["أَ","عْ","مَ","ى"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        [
                            "id" => "389",
                            "tema" => "Mufrodat 56",
                            "kata" => "أَبْكَمٌ",
                            "kata_arab" => "أَبْكَمٌ",
                            "arti" => "Bisu",
                            "huruf" => array_unique(["أَ","بْ","كَ","مٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        [
                            "id" => "390",
                            "tema" => "Mufrodat 56",
                            "kata" => "أَدْرَدُ",
                            "kata_arab" => "أَدْرَدُ",
                            "arti" => "Ompong",
                            "huruf" => array_unique(["أَ","دْ","رَ","دُ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        [
                            "id" => "391",
                            "tema" => "Mufrodat 56",
                            "kata" => "غَنِيٌّ",
                            "kata_arab" => "غَنِيٌّ",
                            "arti" => "Kaya",
                            "huruf" => array_unique(["غَ","نِ","يٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        [
                            "id" => "392",
                            "tema" => "Mufrodat 56",
                            "kata" => "شَامِلٌ",
                            "kata_arab" => "شَامِلٌ",
                            "arti" => "Sempurna",
                            "huruf" => array_unique(["شَ","ا","مِ","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        [
                            "id" => "393",
                            "tema" => "Mufrodat 56",
                            "kata" => "بَسِيْطٌ",
                            "kata_arab" => "بَسِيْطٌ",
                            "arti" => "Sederhana",
                            "huruf" => array_unique(["بَ","سِ","يْ","طٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        [
                            "id" => "394",
                            "tema" => "Mufrodat 56",
                            "kata" => "مُبَذِّرٌ",
                            "kata_arab" => "مُبَذِّرٌ",
                            "arti" => "Mubadzir",
                            "huruf" => array_unique(["مُ","بَ","ذِّ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        [
                            "id" => "395",
                            "tema" => "Mufrodat 56",
                            "kata" => "مُقْتَصِدٌ",
                            "kata_arab" => "مُقْتَصِدٌ",
                            "arti" => "Hemat",
                            "huruf" => array_unique(["مُ","قْ","تَ","صِ","دٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        
                    // 396-402
                        [
                            "id" => "396",
                            "tema" => "Mufrodat 57",
                            "kata" => "عَادِلٌ",
                            "kata_arab" => "عَادِلٌ",
                            "arti" => "Adil",
                            "huruf" => array_unique(["عَ","ا","دِ","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        [
                            "id" => "397",
                            "tema" => "Mufrodat 57",
                            "kata" => "جَائِرٌ",
                            "kata_arab" => "جَائِرٌ",
                            "arti" => "Tidak adil",
                            "huruf" => array_unique(["جَ","ا","ئِ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        [
                            "id" => "398",
                            "tema" => "Mufrodat 57",
                            "kata" => "قَوِيٌّ",
                            "kata_arab" => "قَوِيٌّ",
                            "arti" => "Kuat",
                            "huruf" => array_unique(["قَ","وِ","يٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        [
                            "id" => "399",
                            "tema" => "Mufrodat 57",
                            "kata" => "ضَعِيْفٌ",
                            "kata_arab" => "ضَعِيْفٌ",
                            "arti" => "Lemah",
                            "huruf" => array_unique(["ضَ","عِ","يْ","فٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        [
                            "id" => "400",
                            "tema" => "Mufrodat 57",
                            "kata" => "عَجُوْزٌ",
                            "kata_arab" => "عَجُوْزٌ",
                            "arti" => "Tua",
                            "huruf" => array_unique(["عَ","جُ","وْ","زٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        [
                            "id" => "401",
                            "tema" => "Mufrodat 57",
                            "kata" => "سَعِيْدٌ",
                            "kata_arab" => "سَعِيْدٌ",
                            "arti" => "Senang",
                            "huruf" => array_unique(["سَ","عِ","يْ","دٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        [
                            "id" => "402",
                            "tema" => "Mufrodat 57",
                            "kata" => "مَحْمُوْدٌ",
                            "kata_arab" => "مَحْمُوْدٌ",
                            "arti" => "Baik",
                            "huruf" => array_unique(["مَ","حْ","مُ","وْ","دٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        
                    // 403-409
                        [
                            "id" => "403",
                            "tema" => "Mufrodat 58",
                            "kata" => "مَذْمُوْمٌ",
                            "kata_arab" => "مَذْمُوْمٌ",
                            "arti" => "Buruk",
                            "huruf" => array_unique(["مَ","ذْ","مُ","وْ","مٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        [
                            "id" => "404",
                            "tema" => "Mufrodat 58",
                            "kata" => "رَابِحٌ",
                            "kata_arab" => "رَابِحٌ",
                            "arti" => "Beruntung",
                            "huruf" => array_unique(["رَ","ا","بِ","حٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        [
                            "id" => "405",
                            "tema" => "Mufrodat 58",
                            "kata" => "خَاسِرٌ",
                            "kata_arab" => "خَاسِرٌ",
                            "arti" => "Merugi",
                            "huruf" => array_unique(["خَ","ا","سِ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        [
                            "id" => "406",
                            "tema" => "Mufrodat 58",
                            "kata" => "سَمِيْنٌ",
                            "kata_arab" => "سَمِيْنٌ",
                            "arti" => "Gemuk",
                            "huruf" => array_unique(["سَ","مِ","يْ","نٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        [
                            "id" => "407",
                            "tema" => "Mufrodat 58",
                            "kata" => "هَزِيْلٌ",
                            "kata_arab" => "هَزِيْلٌ",
                            "arti" => "Kurus",
                            "huruf" => array_unique(["هَ","زِ","يْ","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        [
                            "id" => "408",
                            "tema" => "Mufrodat 58",
                            "kata" => "مَشْغُوْلٌ",
                            "kata_arab" => "مَشْغُوْلٌ",
                            "arti" => "Sibuk",
                            "huruf" => array_unique(["مَ","شْ","غُ","وْ","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        [
                            "id" => "409",
                            "tema" => "Mufrodat 58",
                            "kata" => "عَاطِلٌ",
                            "kata_arab" => "عَاطِلٌ",
                            "arti" => "Nganggur",
                            "huruf" => array_unique(["عَ","ا","طِ","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        
                    // 410-416
                        [
                            "id" => "410",
                            "tema" => "Mufrodat 59",
                            "kata" => "صِحَّةٌ",
                            "kata_arab" => "صِحَّةٌ",
                            "arti" => "Sehat",
                            "huruf" => array_unique(["صِ","حَّ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        [
                            "id" => "411",
                            "tema" => "Mufrodat 59",
                            "kata" => "مَرِيْضٌ",
                            "kata_arab" => "مَرِيْضٌ",
                            "arti" => "Sakit",
                            "huruf" => array_unique(["مَ","رِ","يْ","ضٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        [
                            "id" => "412",
                            "tema" => "Mufrodat 59",
                            "kata" => "صَحِيْحٌ",
                            "kata_arab" => "صَحِيْحٌ",
                            "arti" => "Benar",
                            "huruf" => array_unique(["صَ","حِ","يْ","حٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        [
                            "id" => "413",
                            "tema" => "Mufrodat 59",
                            "kata" => "مُخْطِئٌ",
                            "kata_arab" => "مُخْطِئٌ",
                            "arti" => "Salah",
                            "huruf" => array_unique(["مُ","خْ","طِ","ئٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        [
                            "id" => "414",
                            "tema" => "Mufrodat 59",
                            "kata" => "فَائِزٌ",
                            "kata_arab" => "فَائِزٌ",
                            "arti" => "Juara",
                            "huruf" => array_unique(["فَ","ا","ئِ","زٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        [
                            "id" => "415",
                            "tema" => "Mufrodat 59",
                            "kata" => "مَغْلُوْبٌ",
                            "kata_arab" => "مَغْلُوْبٌ",
                            "arti" => "Kalah",
                            "huruf" => array_unique(["مَ","غْ","لُ","وْ","بٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        [
                            "id" => "416",
                            "tema" => "Mufrodat 59",
                            "kata" => "وَاثِقٌ بِالنَّفْسِ",
                            "kata_arab" => "وَاثِقٌ بِالنَّفْسِ",
                            "arti" => "Percaya diri",
                            "huruf" => array_unique(["وَ","ا","ثِ","قٌ","_","بِ","ال","نَّ","فْ","سِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        
                    // 417-423
                        [
                            "id" => "417",
                            "tema" => "Mufrodat 60",
                            "kata" => "مُسْتَعْجِلٌ",
                            "kata_arab" => "مُسْتَعْجِلٌ",
                            "arti" => "Buru-buru",
                            "huruf" => array_unique(["مُ","سْ","تَ","عْ","جِ","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        [
                            "id" => "418",
                            "tema" => "Mufrodat 60",
                            "kata" => "جَادٌّ",
                            "kata_arab" => "جَادٌّ",
                            "arti" => "Sungguh-sungguh",
                            "huruf" => array_unique(["جَ","ا","دٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        [
                            "id" => "419",
                            "tema" => "Mufrodat 60",
                            "kata" => "مُحْبِطٌ",
                            "kata_arab" => "مُحْبِطٌ",
                            "arti" => "Frustasi",
                            "huruf" => array_unique(["مُ","حْ","بِ","طٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        [
                            "id" => "420",
                            "tema" => "Mufrodat 60",
                            "kata" => "فُضُوْلِيٌّ",
                            "kata_arab" => "فُضُوْلِيٌّ",
                            "arti" => "Kepo",
                            "huruf" => array_unique(["فُ","ضُ","وْ","لِ","يٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        [
                            "id" => "421",
                            "tema" => "Mufrodat 60",
                            "kata" => "مُتَفَهِّمٌ",
                            "kata_arab" => "مُتَفَهِّمٌ",
                            "arti" => "Pengertian",
                            "huruf" => array_unique(["مُ","تَ","فَ","هِّ","مٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        [
                            "id" => "422",
                            "tema" => "Mufrodat 60",
                            "kata" => "مُبَالِغٌ",
                            "kata_arab" => "مُبَالِغٌ",
                            "arti" => "Lebay",
                            "huruf" => array_unique(["مُ","بَ","ا","لِ","غٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                        [
                            "id" => "423",
                            "tema" => "Mufrodat 60",
                            "kata" => "قَالِقٌ",
                            "kata_arab" => "قَالِقٌ",
                            "arti" => "Galau",
                            "huruf" => array_unique(["قَ","ا","لِ","قٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 9"
                        ],
                
                // per_10
                    // 424-431
                        [
                            "id" => "424",
                            "tema" => "Mufrodat 61",
                            "kata" => "جِدَارٌ",
                            "kata_arab" => "جِدَارٌ",
                            "arti" => "Dinding",
                            "huruf" => array_unique(["جِ","دَ","ا","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 10"
                        ],
                        [
                            "id" => "425",
                            "tema" => "Mufrodat 61",
                            "kata" => "سُوْرٌ",
                            "kata_arab" => "سُوْرٌ",
                            "arti" => "Pagar",
                            "huruf" => array_unique(["سُ","وْ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 10"
                        ],
                        [
                            "id" => "426",
                            "tema" => "Mufrodat 61",
                            "kata" => "صُوْرَةٌ",
                            "kata_arab" => "صُوْرَةٌ",
                            "arti" => "Gambar",
                            "huruf" => array_unique(["صُ","وْ","رَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 10"
                        ],
                        [
                            "id" => "427",
                            "tema" => "Mufrodat 61",
                            "kata" => "سَاعَةٌ",
                            "kata_arab" => "سَاعَةٌ",
                            "arti" => "Jam",
                            "huruf" => array_unique(["سَ","ا","عَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 10"
                        ],
                        [
                            "id" => "428",
                            "tema" => "Mufrodat 61",
                            "kata" => "سَاعَةُ الْجِدَارِ",
                            "kata_arab" => "سَاعَةُ الْجِدَارِ",
                            "arti" => "Jam dinding",
                            "huruf" => array_unique(["سَ","ا","عَ","ةُ","_","الْ","جِ","دَ","ا","رِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 10"
                        ],
                        [
                            "id" => "429",
                            "tema" => "Mufrodat 61",
                            "kata" => "طَاوِلَةٌ",
                            "kata_arab" => "طَاوِلَةٌ",
                            "arti" => "Meja",
                            "huruf" => array_unique(["طَ","ا","وِ","لَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 10"
                        ],
                        [
                            "id" => "430",
                            "tema" => "Mufrodat 61",
                            "kata" => "كُرْسِيٌّ",
                            "kata_arab" => "كُرْسِيٌّ",
                            "arti" => "Kursi",
                            "huruf" => array_unique(["كُ","رْ","سِ","يٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 10"
                        ],
                        [
                            "id" => "431",
                            "tema" => "Mufrodat 61",
                            "kata" => "خِزَانَةٌ",
                            "kata_arab" => "خِزَانَةٌ",
                            "arti" => "Lemari",
                            "huruf" => array_unique(["خِ","زَ","ا","نَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 10"
                        ],
                        
                    // 432-439
                        [
                            "id" => "432",
                            "tema" => "Mufrodat 62",
                            "kata" => "دَوْلَبٌ",
                            "kata_arab" => "دَوْلَبٌ",
                            "arti" => "Lemari bufet",
                            "huruf" => array_unique(["دَ","وْ","لَ","بٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 10"
                        ],
                        [
                            "id" => "433",
                            "tema" => "Mufrodat 62",
                            "kata" => "مِرْوَحَةٌ",
                            "kata_arab" => "مِرْوَحَةٌ",
                            "arti" => "Kipas angin",
                            "huruf" => array_unique(["مِ","رْ","وَ","حَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 10"
                        ],
                        [
                            "id" => "434",
                            "tema" => "Mufrodat 62",
                            "kata" => "بَابٌ",
                            "kata_arab" => "بَابٌ",
                            "arti" => "Pintu",
                            "huruf" => array_unique(["بَ","ا","بٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 10"
                        ],
                        [
                            "id" => "435",
                            "tema" => "Mufrodat 62",
                            "kata" => "نَافِذَةٌ",
                            "kata_arab" => "نَافِذَةٌ",
                            "arti" => "Jendela",
                            "huruf" => array_unique(["نَ","ا","فِ","ذَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 10"
                        ],
                        [
                            "id" => "436",
                            "tema" => "Mufrodat 62",
                            "kata" => "غُرْفَةٌ",
                            "kata_arab" => "غُرْفَةٌ",
                            "arti" => "Kamar",
                            "huruf" => array_unique(["غُ","رْ","فَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 10"
                        ],
                        [
                            "id" => "437",
                            "tema" => "Mufrodat 62",
                            "kata" => "شُرْفَةٌ",
                            "kata_arab" => "شُرْفَةٌ",
                            "arti" => "Teras",
                            "huruf" => array_unique(["شُ","رْ","فَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 10"
                        ],
                        [
                            "id" => "438",
                            "tema" => "Mufrodat 62",
                            "kata" => "سَاحَةٌ",
                            "kata_arab" => "سَاحَةٌ",
                            "arti" => "Halaman",
                            "huruf" => array_unique(["سَ","ا","حَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 10"
                        ],
                        [
                            "id" => "439",
                            "tema" => "Mufrodat 62",
                            "kata" => "أَرِيْكَةٌ",
                            "kata_arab" => "أَرِيْكَةٌ",
                            "arti" => "Sofa",
                            "huruf" => array_unique(["أَ","رِ","يْ","كَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 10"
                        ],
                        
                    // 440-447
                        [
                            "id" => "440",
                            "tema" => "Mufrodat 63",
                            "kata" => "مِكْنَسَةٌ",
                            "kata_arab" => "مِكْنَسَةٌ",
                            "arti" => "Sapu",
                            "huruf" => array_unique(["مِ","كْ","نَ","سَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 10"
                        ],
                        [
                            "id" => "441",
                            "tema" => "Mufrodat 63",
                            "kata" => "جَالُوْنٌ",
                            "kata_arab" => "جَالُوْنٌ",
                            "arti" => "Galon",
                            "huruf" => array_unique(["جَ","ا","لُ","وْ","نٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 10"
                        ],
                        [
                            "id" => "442",
                            "tema" => "Mufrodat 63",
                            "kata" => "بِلاَطٌ",
                            "kata_arab" => "بِلاَطٌ",
                            "arti" => "Lantai",
                            "huruf" => array_unique(["بِ","لاَ","طٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 10"
                        ],
                        [
                            "id" => "443",
                            "tema" => "Mufrodat 63",
                            "kata" => "بِسَاطٌ",
                            "kata_arab" => "بِسَاطٌ",
                            "arti" => "Karpet",
                            "huruf" => array_unique(["بِ","سَ","ا","طٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 10"
                        ],
                        [
                            "id" => "444",
                            "tema" => "Mufrodat 63",
                            "kata" => "حَصِيْرَةٌ",
                            "kata_arab" => "حَصِيْرَةٌ",
                            "arti" => "Keset",
                            "huruf" => array_unique(["حَ","صِ","يْ","رَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 10"
                        ],
                        [
                            "id" => "445",
                            "tema" => "Mufrodat 63",
                            "kata" => "مِصْبَاحٌ",
                            "kata_arab" => "مِصْبَاحٌ",
                            "arti" => "Lampu",
                            "huruf" => array_unique(["مِ","صْ","بَ","ا","حٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 10"
                        ],
                        [
                            "id" => "446",
                            "tema" => "Mufrodat 63",
                            "kata" => "سِلْكٌ",
                            "kata_arab" => "سِلْكٌ",
                            "arti" => "Kabel",
                            "huruf" => array_unique(["سِ","لْ","كٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 10"
                        ],
                        [
                            "id" => "447",
                            "tema" => "Mufrodat 63",
                            "kata" => "مَنْفَضَّةُ السَّجَائِرِ",
                            "kata_arab" => "مَنْفَضَّةُ السَّجَائِرِ",
                            "arti" => "Asbak",
                            "huruf" => array_unique(["مَ","نْ","فَ","ضَّ","ةُ","_","ال","سَّ","جَ","ا","ئِ","رِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 10"
                        ],
                        
                    // 448-454
                        [
                            "id" => "448",
                            "tema" => "Mufrodat 64",
                            "kata" => "تَقْوِيْمٌ",
                            "kata_arab" => "تَقْوِيْمٌ",
                            "arti" => "Kalender",
                            "huruf" => array_unique(["تَ","قْ","وِ","يْ","مٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 10"
                        ],
                        [
                            "id" => "449",
                            "tema" => "Mufrodat 64",
                            "kata" => "ثَلاَّجَةٌ",
                            "kata_arab" => "ثَلاَّجَةٌ",
                            "arti" => "Kulkas",
                            "huruf" => array_unique(["ثَ","لاَّ","جَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 10"
                        ],
                        [
                            "id" => "450",
                            "tema" => "Mufrodat 64",
                            "kata" => "سُلَّمٌ",
                            "kata_arab" => "سُلَّمٌ",
                            "arti" => "Tangga",
                            "huruf" => array_unique(["سُ","لَّ","مٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 10"
                        ],
                        [
                            "id" => "451",
                            "tema" => "Mufrodat 64",
                            "kata" => "شَمْعٌ",
                            "kata_arab" => "شَمْعٌ",
                            "arti" => "Lilin",
                            "huruf" => array_unique(["شَ","مْ","عٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 10"
                        ],
                        [
                            "id" => "452",
                            "tema" => "Mufrodat 64",
                            "kata" => "مِفْتَاحٌ",
                            "kata_arab" => "مِفْتَاحٌ",
                            "arti" => "Kunci",
                            "huruf" => array_unique(["مِ","فْ","تَ","ا","حٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 10"
                        ],
                        [
                            "id" => "453",
                            "tema" => "Mufrodat 64",
                            "kata" => "قُفْلٌ",
                            "kata_arab" => "قُفْلٌ",
                            "arti" => "Gembok",
                            "huruf" => array_unique(["قُ","فْ","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 10"
                        ],
                        [
                            "id" => "454",
                            "tema" => "Mufrodat 64",
                            "kata" => "تِلْفَازٌ",
                            "kata_arab" => "تِلْفَازٌ",
                            "arti" => "Televisi",
                            "huruf" => array_unique(["تِ","لْ","فَ","ا","زٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 10"
                        ],
                        
                    // 455-461
                        [
                            "id" => "455",
                            "tema" => "Mufrodat 65",
                            "kata" => "بَوَّابَةٌ",
                            "kata_arab" => "بَوَّابَةٌ",
                            "arti" => "Gerbang",
                            "huruf" => array_unique(["بَ","وَّ","ا","بَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 10"
                        ],
                        [
                            "id" => "456",
                            "tema" => "Mufrodat 65",
                            "kata" => "سَقْفٌ",
                            "kata_arab" => "سَقْفٌ",
                            "arti" => "Atap",
                            "huruf" => array_unique(["سَ","قْ","فٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 10"
                        ],
                        [
                            "id" => "457",
                            "tema" => "Mufrodat 65",
                            "kata" => "مِكْوَاةٌ",
                            "kata_arab" => "مِكْوَاةٌ",
                            "arti" => "Setrika",
                            "huruf" => array_unique(["مِ","كْ","وَ","ا","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 10"
                        ],
                        [
                            "id" => "458",
                            "tema" => "Mufrodat 65",
                            "kata" => "خُوْذَةٌ",
                            "kata_arab" => "خُوْذَةٌ",
                            "arti" => "Helm",
                            "huruf" => array_unique(["خُ","وْ","ذَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 10"
                        ],
                        [
                            "id" => "459",
                            "tema" => "Mufrodat 65",
                            "kata" => "عُلْبَةٌ",
                            "kata_arab" => "عُلْبَةٌ",
                            "arti" => "Kotak",
                            "huruf" => array_unique(["عُ","لْ","بَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 10"
                        ],
                        [
                            "id" => "460",
                            "tema" => "Mufrodat 65",
                            "kata" => "رَفٌّ",
                            "kata_arab" => "رَفٌّ",
                            "arti" => "Rak",
                            "huruf" => array_unique(["رَ","فٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 10"
                        ],
                        [
                            "id" => "461",
                            "tema" => "Mufrodat 65",
                            "kata" => "زُقَاقٌ",
                            "kata_arab" => "زُقَاقٌ",
                            "arti" => "Gang",
                            "huruf" => array_unique(["زُ","قَ","ا","قٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 10"
                        ],

                // per_11
                    // 462-468
                        [
                            "id" => "462",
                            "tema" => "Mufrodat 66",
                            "kata" => "كَنَسَ-يَكْنُسُ-كَنْسًا",
                            "kata_arab" => "كَنَسَ-يَكْنُسُ-كَنْسًا",
                            "arti" => "Menyapu",
                            "huruf" => array_unique(["كَ","نَ","سَ","-","يَ","كْ","نُ","سُ","-","كَ","نْ","سً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "463",
                            "tema" => "Mufrodat 66",
                            "kata" => "نَظَّفَ-يُنَظِّفُ-تَنْظِيْفًا",
                            "kata_arab" => "نَظَّفَ-يُنَظِّفُ-تَنْظِيْفًا",
                            "arti" => "Membersihkan",
                            "huruf" => array_unique(["نَ","ظَّ","فَ","-","يُ","نَ","ظِّ","فُ","-","تَ","نْ","ظِ","يْ","فً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "464",
                            "tema" => "Mufrodat 66",
                            "kata" => "وَسَّخَ-يُوَسِّخُ-تَوْسِيْخًا",
                            "kata_arab" => "وَسَّخَ-يُوَسِّخُ-تَوْسِيْخًا",
                            "arti" => "Mengotori",
                            "huruf" => array_unique(["وَ","سَّ","خَ","-","يُ","وَ","سِّ","خُ","-","تَ","وْ","سِ","يْ","خً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "465",
                            "tema" => "Mufrodat 66",
                            "kata" => "دَخَّنَ-يُدَخِّنُ-تَدْخِيْنًا",
                            "kata_arab" => "دَخَّنَ-يُدَخِّنُ-تَدْخِيْنًا",
                            "arti" => "Merokok",
                            "huruf" => array_unique(["دَ","خَّ","نَ","-","يُ","دَ","خِّ","نُ","-","تَ","دْ","خِ","يْ","نً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "466",
                            "tema" => "Mufrodat 66",
                            "kata" => "جَلَسَ-يَجْلِسُ-جُلُوْسًا",
                            "kata_arab" => "جَلَسَ-يَجْلِسُ-جُلُوْسًا",
                            "arti" => "Duduk",
                            "huruf" => array_unique(["جَ","لَ","سَ","-","يَ","جْ","لِ","سُ","-","جُ","لُ","وْ","سً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "467",
                            "tema" => "Mufrodat 66",
                            "kata" => "دَخَلَ-يَدْخُلُ-دُخُوْلاً",
                            "kata_arab" => "دَخَلَ-يَدْخُلُ-دُخُوْلاً",
                            "arti" => "Masuk",
                            "huruf" => array_unique(["دَ","خَ","لَ","-","يَ","دْ","خُ","لُ","-","دُ","خُ","وْ","لاً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "468",
                            "tema" => "Mufrodat 66",
                            "kata" => "قَامَ-يَقُوْمُ-قِيَامًا",
                            "kata_arab" => "قَامَ-يَقُوْمُ-قِيَامًا",
                            "arti" => "Berdiri",
                            "huruf" => array_unique(["قَ","ا","مَ","-","يَ","قُ","وْ","مُ","-","قِ","يَ","ا","مً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        
                    // 469-474
                        [
                            "id" => "469",
                            "tema" => "Mufrodat 67",
                            "kata" => "قَعَدَ-يَقْعُدُ-قُعُودًا",
                            "kata_arab" => "قَعَدَ-يَقْعُدُ-قُعُودًا",
                            "arti" => "Duduk",
                            "huruf" => array_unique(["قَ","عَ","دَ","-","يَ","قْ","عُ","دُ","-","قُ","عُ","و","دً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "470",
                            "tema" => "Mufrodat 67",
                            "kata" => "خَرَجَ-يَخْرُجُ-خُرُوْجًا",
                            "kata_arab" => "خَرَجَ-يَخْرُجُ-خُرُوْجًا",
                            "arti" => "Keluar",
                            "huruf" => array_unique(["خَ","رَ","جَ","-","يَ","خْ","رُ","جُ","-","خُ","رُ","وْ","جً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "471",
                            "tema" => "Mufrodat 67",
                            "kata" => "وَضَعَ-يَضَعُ-وَضْعًا",
                            "kata_arab" => "وَضَعَ-يَضَعُ-وَضْعًا",
                            "arti" => "Meletakkan",
                            "huruf" => array_unique(["وَ","ضَ","عَ","-","يَ","ضَ","عُ","-","وَ","ضْ","عً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "472",
                            "tema" => "Mufrodat 67",
                            "kata" => "بَدَّلَ-يُبَدِّلُ-تَبْدِيْلًا",
                            "kata_arab" => "بَدَّلَ-يُبَدِّلُ-تَبْدِيْلًا",
                            "arti" => "Mengganti",
                            "huruf" => array_unique(["بَ","دَّ","لَ","-","يُ","بَ","دِّ","لُ","-","تَ","بْ","دِ","يْ","لًا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "473",
                            "tema" => "Mufrodat 67",
                            "kata" => "أَشْعَلَ-يُشْعِلُ-إِشْعَالاً",
                            "kata_arab" => "أَشْعَلَ-يُشْعِلُ-إِشْعَالاً",
                            "arti" => "Menyalakan",
                            "huruf" => array_unique(["أَ","شْ","عَ","لَ","-","يُ","شْ","عِ","لُ","-","إِ","شْ","عَ","ا","لاً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "474",
                            "tema" => "Mufrodat 67",
                            "kata" => "أَطْفَأَ-يُطْفِئُ-إِطْفَاءً",
                            "kata_arab" => "أَطْفَأَ-يُطْفِئُ-إِطْفَاءً",
                            "arti" => "Mematikan",
                            "huruf" => array_unique(["أَ","طْ","فَ","أَ","-","يُ","طْ","فِ","ئُ","-","إِ","طْ","فَ","ا","ءً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        
                    // 475-480
                        [
                            "id" => "475",
                            "tema" => "Mufrodat 68",
                            "kata" => "صَعِدَ-يَصْعَدُ-صُعُوْدًا",
                            "kata_arab" => "صَعِدَ-يَصْعَدُ-صُعُوْدًا",
                            "arti" => "Menaiki",
                            "huruf" => array_unique(["صَ","عِ","دَ","-","يَ","صْ","عَ","دُ","-","صُ","عُ","وْ","دً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "476",
                            "tema" => "Mufrodat 68",
                            "kata" => "نَزَلَ-يَنْزِلُ-نُزُوْلاً",
                            "kata_arab" => "نَزَلَ-يَنْزِلُ-نُزُوْلاً",
                            "arti" => "Turun",
                            "huruf" => array_unique(["نَ","زَ","لَ","-","يَ","نْ","زِ","لُ","-","نُ","زُ","وْ","لاً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "477",
                            "tema" => "Mufrodat 68",
                            "kata" => "شَاهَدَ-يُشَاهِدُ-مُشَاهَدَةً",
                            "kata_arab" => "شَاهَدَ-يُشَاهِدُ-مُشَاهَدَةً",
                            "arti" => "Menonton",
                            "huruf" => array_unique(["شَ","ا","هَ","دَ","-","يُ","شَ","ا","هِ","دُ","-","مُ","شَ","ا","هَ","دَ","ةً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "478",
                            "tema" => "Mufrodat 68",
                            "kata" => "هَجَرَ-يَهْجُرُ-هَجْرًا",
                            "kata_arab" => "هَجَرَ-يَهْجُرُ-هَجْرًا",
                            "arti" => "Hijrah",
                            "huruf" => array_unique(["هَ","جَ","رَ","-","يَ","هْ","جُ","رُ","-","هَ","جْ","رً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "479",
                            "tema" => "Mufrodat 68",
                            "kata" => "فَضَّلَ-يُفَضِّلُ-تَفْضِيْلاً",
                            "kata_arab" => "فَضَّلَ-يُفَضِّلُ-تَفْضِيْلاً",
                            "arti" => "Memilih",
                            "huruf" => array_unique(["فَ","ضَّ","لَ","-","يُ","فَ","ضِّ","لُ","-","تَ","فْ","ضِ","يْ","لاً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "480",
                            "tema" => "Mufrodat 68",
                            "kata" => "وَاجَهَ-يُوَاجِهُ-مُوَاجَهَةً",
                            "kata_arab" => "وَاجَهَ-يُوَاجِهُ-مُوَاجَهَةً",
                            "arti" => "Melaksanakan",
                            "huruf" => array_unique(["وَ","ا","جَ","هَ","-","يُ","وَ","ا","جِ","هُ","-","مُ","وَ","ا","جَ","هَ","ةً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        
                    // 481-486
                        [
                            "id" => "481",
                            "tema" => "Mufrodat 69",
                            "kata" => "أَسْوَدُ",
                            "kata_arab" => "أَسْوَدُ",
                            "arti" => "Hitam",
                            "huruf" => array_unique(["أَ","سْ","وَ","دُ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "482",
                            "tema" => "Mufrodat 69",
                            "kata" => "أَبْيَضُ",
                            "kata_arab" => "أَبْيَضُ",
                            "arti" => "Putih",
                            "huruf" => array_unique(["أَ","بْ","يَ","ضُ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "483",
                            "tema" => "Mufrodat 69",
                            "kata" => "أَحْمَرُ",
                            "kata_arab" => "أَحْمَرُ",
                            "arti" => "Merah",
                            "huruf" => array_unique(["أَ","حْ","مَ","رُ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "484",
                            "tema" => "Mufrodat 69",
                            "kata" => "أَحْمَرُ وَرْدِيٌّ",
                            "kata_arab" => "أَحْمَرُ وَرْدِيٌّ",
                            "arti" => "Pink",
                            "huruf" => array_unique(["أَ","حْ","مَ","رُ","_","وَ","رْ","دِ","يٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "485",
                            "tema" => "Mufrodat 69",
                            "kata" => "أَصْفَرُ",
                            "kata_arab" => "أَصْفَرُ",
                            "arti" => "Kuning",
                            "huruf" => array_unique(["أَ","صْ","فَ","رُ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "486",
                            "tema" => "Mufrodat 69",
                            "kata" => "أَزْرَقُ",
                            "kata_arab" => "أَزْرَقُ",
                            "arti" => "Biru",
                            "huruf" => array_unique(["أَ","زْ","رَ","قُ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        
                    // 487-492
                        [
                            "id" => "487",
                            "tema" => "Mufrodat 70",
                            "kata" => "أَخْضَرُ",
                            "kata_arab" => "أَخْضَرُ",
                            "arti" => "Hijau",
                            "huruf" => array_unique(["أَ","خْ","ضَ","رُ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "488",
                            "tema" => "Mufrodat 70",
                            "kata" => "أَسْمَرُ",
                            "kata_arab" => "أَسْمَرُ",
                            "arti" => "Coklat",
                            "huruf" => array_unique(["أَ","سْ","مَ","رُ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "489",
                            "tema" => "Mufrodat 70",
                            "kata" => "رَمَادِيٌّ",
                            "kata_arab" => "رَمَادِيٌّ",
                            "arti" => "Abu-abu",
                            "huruf" => array_unique(["رَ","مَ","ا","دِ","يٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "490",
                            "tema" => "Mufrodat 70",
                            "kata" => "بُرْتُقَالِيٌّ",
                            "kata_arab" => "بُرْتُقَالِيٌّ",
                            "arti" => "Orange",
                            "huruf" => array_unique(["بُ","رْ","تُ","قَ","ا","لِ","يٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "491",
                            "tema" => "Mufrodat 70",
                            "kata" => "بَنَفْسَجِيُّ",
                            "kata_arab" => "بَنَفْسَجِيُّ",
                            "arti" => "Ungu",
                            "huruf" => array_unique(["بَ","نَ","فْ","سَ","جِ","يُّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "492",
                            "tema" => "Mufrodat 70",
                            "kata" => "ذَهَبِيٌّ",
                            "kata_arab" => "ذَهَبِيٌّ",
                            "arti" => "Emas",
                            "huruf" => array_unique(["ذَ","هَ","بِ","يٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        
                    // 493-500
                        [
                            "id" => "493",
                            "tema" => "Mufrodat 71",
                            "kata" => "كَبِيْرٌ",
                            "kata_arab" => "كَبِيْرٌ",
                            "arti" => "Besar",
                            "huruf" => array_unique(["كَ","بِ","يْ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "494",
                            "tema" => "Mufrodat 71",
                            "kata" => "صَغِيْرٌ",
                            "kata_arab" => "صَغِيْرٌ",
                            "arti" => "Kecil",
                            "huruf" => array_unique(["صَ","غِ","يْ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "495",
                            "tema" => "Mufrodat 71",
                            "kata" => "طَوِيْلٌ",
                            "kata_arab" => "طَوِيْلٌ",
                            "arti" => "Panjang",
                            "huruf" => array_unique(["طَ","وِ","يْ","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "496",
                            "tema" => "Mufrodat 71",
                            "kata" => "قَصِيْرٌ",
                            "kata_arab" => "قَصِيْرٌ",
                            "arti" => "Pendek",
                            "huruf" => array_unique(["قَ","صِ","يْ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "497",
                            "tema" => "Mufrodat 71",
                            "kata" => "وَاسِعٌ",
                            "kata_arab" => "وَاسِعٌ",
                            "arti" => "Luas",
                            "huruf" => array_unique(["وَ","ا","سِ","عٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "498",
                            "tema" => "Mufrodat 71",
                            "kata" => "ضَيِّقٌ",
                            "kata_arab" => "ضَيِّقٌ",
                            "arti" => "Sempit",
                            "huruf" => array_unique(["ضَ","يِّ","قٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "499",
                            "tema" => "Mufrodat 71",
                            "kata" => "عَمِيْقٌ",
                            "kata_arab" => "عَمِيْقٌ",
                            "arti" => "Dalam",
                            "huruf" => array_unique(["عَ","مِ","يْ","قٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "500",
                            "tema" => "Mufrodat 71",
                            "kata" => "ضَحْلٌ",
                            "kata_arab" => "ضَحْلٌ",
                            "arti" => "Dangkal",
                            "huruf" => array_unique(["ضَ","حْ","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        
                    // 501-507
                        [
                            "id" => "501",
                            "tema" => "Mufrodat 72",
                            "kata" => "كَثِيْرٌ",
                            "kata_arab" => "كَثِيْرٌ",
                            "arti" => "Banyak",
                            "huruf" => array_unique(["كَ","ثِ","يْ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "502",
                            "tema" => "Mufrodat 72",
                            "kata" => "قَلِيْلٌ",
                            "kata_arab" => "قَلِيْلٌ",
                            "arti" => "Sedikit",
                            "huruf" => array_unique(["قَ","لِ","يْ","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "503",
                            "tema" => "Mufrodat 72",
                            "kata" => "نَظِيْفٌ",
                            "kata_arab" => "نَظِيْفٌ",
                            "arti" => "Bersih",
                            "huruf" => array_unique(["نَ","ظِ","يْ","فٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "504",
                            "tema" => "Mufrodat 72",
                            "kata" => "وَسِخٌ",
                            "kata_arab" => "وَسِخٌ",
                            "arti" => "Kotor",
                            "huruf" => array_unique(["وَ","سِ","خٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "505",
                            "tema" => "Mufrodat 72",
                            "kata" => "رَخِيْصٌ",
                            "kata_arab" => "رَخِيْصٌ",
                            "arti" => "Murah",
                            "huruf" => array_unique(["رَ","خِ","يْ","صٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "506",
                            "tema" => "Mufrodat 72",
                            "kata" => "غَالٍ",
                            "kata_arab" => "غَالٍ",
                            "arti" => "Mahal",
                            "huruf" => array_unique(["غَ","ا","لٍ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],
                        [
                            "id" => "507",
                            "tema" => "Mufrodat 72",
                            "kata" => "غَلِيْظٌ",
                            "kata_arab" => "غَلِيْظٌ",
                            "arti" => "Tebal",
                            "huruf" => array_unique(["غَ","لِ","يْ","ظٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 11"
                        ],

                // per_12
                    // 508-515
                        [
                            "id" => "508",
                            "tema" => "Mufrodat 73",
                            "kata" => "رَقِيْقٌ",
                            "kata_arab" => "رَقِيْقٌ",
                            "arti" => "Tipis",
                            "huruf" => array_unique(["رَ","قِ","يْ","قٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 12"
                        ],
                        [
                            "id" => "509",
                            "tema" => "Mufrodat 73",
                            "kata" => "رَطْبٌ",
                            "kata_arab" => "رَطْبٌ",
                            "arti" => "Basah",
                            "huruf" => array_unique(["رَ","طْ","بٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 12"
                        ],
                        [
                            "id" => "510",
                            "tema" => "Mufrodat 73",
                            "kata" => "يَابِسٌ",
                            "kata_arab" => "يَابِسٌ",
                            "arti" => "Kering",
                            "huruf" => array_unique(["يَ","ا","بِ","سٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 12"
                        ],
                        [
                            "id" => "511",
                            "tema" => "Mufrodat 73",
                            "kata" => "جَامِدٌ",
                            "kata_arab" => "جَامِدٌ",
                            "arti" => "Beku",
                            "huruf" => array_unique(["جَ","ا","مِ","دٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 12"
                        ],
                        [
                            "id" => "512",
                            "tema" => "Mufrodat 73",
                            "kata" => "مَائِعٌ",
                            "kata_arab" => "مَائِعٌ",
                            "arti" => "Cair",
                            "huruf" => array_unique(["مَ","ا","ئِ","عٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 12"
                        ],
                        [
                            "id" => "513",
                            "tema" => "Mufrodat 73",
                            "kata" => "نَاعِمٌ",
                            "kata_arab" => "نَاعِمٌ",
                            "arti" => "Lembut",
                            "huruf" => array_unique(["نَ","ا","عِ","مٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 12"
                        ],
                        [
                            "id" => "514",
                            "tema" => "Mufrodat 73",
                            "kata" => "خَشِنٌ",
                            "kata_arab" => "خَشِنٌ",
                            "arti" => "Kasar",
                            "huruf" => array_unique(["خَ","شِ","نٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 12"
                        ],
                        [
                            "id" => "515",
                            "tema" => "Mufrodat 73",
                            "kata" => "قَرِيْبٌ",
                            "kata_arab" => "قَرِيْبٌ",
                            "arti" => "Dekat",
                            "huruf" => array_unique(["قَ","رِ","يْ","بٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 12"
                        ],
                    
                    // 516-523
                        [
                            "id" => "516",
                            "tema" => "Mufrodat 74",
                            "kata" => "بَعِيْدٌ",
                            "kata_arab" => "بَعِيْدٌ",
                            "arti" => "Jauh",
                            "huruf" => array_unique(["بَ","عِ","يْ","دٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 12"
                        ],
                        [
                            "id" => "517",
                            "tema" => "Mufrodat 74",
                            "kata" => "صَافٍ",
                            "kata_arab" => "صَافٍ",
                            "arti" => "Bersih",
                            "huruf" => array_unique(["صَ","ا","فٍ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 12"
                        ],
                        [
                            "id" => "518",
                            "tema" => "Mufrodat 74",
                            "kata" => "كَدِرٌ",
                            "kata_arab" => "كَدِرٌ",
                            "arti" => "Keruh",
                            "huruf" => array_unique(["كَ","دِ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 12"
                        ],
                        [
                            "id" => "519",
                            "tema" => "Mufrodat 74",
                            "kata" => "سَرِيْعٌ",
                            "kata_arab" => "سَرِيْعٌ",
                            "arti" => "Cepat",
                            "huruf" => array_unique(["سَ","رِ","يْ","عٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 12"
                        ],
                        [
                            "id" => "520",
                            "tema" => "Mufrodat 74",
                            "kata" => "بَطِيْئٌ",
                            "kata_arab" => "بَطِيْئٌ",
                            "arti" => "Lambat",
                            "huruf" => array_unique(["بَ","طِ","يْ","ئٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 12"
                        ],
                        [
                            "id" => "521",
                            "tema" => "Mufrodat 74",
                            "kata" => "صَعْبٌ",
                            "kata_arab" => "صَعْبٌ",
                            "arti" => "Susah",
                            "huruf" => array_unique(["صَ","عْ","بٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 12"
                        ],
                        [
                            "id" => "522",
                            "tema" => "Mufrodat 74",
                            "kata" => "سَهْلٌ",
                            "kata_arab" => "سَهْلٌ",
                            "arti" => "Mudah",
                            "huruf" => array_unique(["سَ","هْ","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 12"
                        ],
                        [
                            "id" => "523",
                            "tema" => "Mufrodat 74",
                            "kata" => "ثَقِيْلٌ",
                            "kata_arab" => "ثَقِيْلٌ",
                            "arti" => "Berat",
                            "huruf" => array_unique(["ثَ","قِ","يْ","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 12"
                        ],
                        
                    // 524-530
                        [
                            "id" => "524",
                            "tema" => "Mufrodat 75",
                            "kata" => "خَفِيْفٌ",
                            "kata_arab" => "خَفِيْفٌ",
                            "arti" => "Ringan",
                            "huruf" => array_unique(["خَ","فِ","يْ","فٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 12"
                        ],
                        [
                            "id" => "525",
                            "tema" => "Mufrodat 75",
                            "kata" => "كَامِلٌ",
                            "kata_arab" => "كَامِلٌ",
                            "arti" => "Sempurna",
                            "huruf" => array_unique(["كَ","ا","مِ","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 12"
                        ],
                        [
                            "id" => "526",
                            "tema" => "Mufrodat 75",
                            "kata" => "نَاقِصٌ",
                            "kata_arab" => "نَاقِصٌ",
                            "arti" => "Kurang",
                            "huruf" => array_unique(["نَ","ا","قِ","صٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 12"
                        ],
                        [
                            "id" => "527",
                            "tema" => "Mufrodat 75",
                            "kata" => "مُنِيْرٌ",
                            "kata_arab" => "مُنِيْرٌ",
                            "arti" => "Terang",
                            "huruf" => array_unique(["مُ","نِ","يْ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 12"
                        ],
                        [
                            "id" => "528",
                            "tema" => "Mufrodat 75",
                            "kata" => "مُظْلِمٌ",
                            "kata_arab" => "مُظْلِمٌ",
                            "arti" => "Gelap",
                            "huruf" => array_unique(["مُ","ظْ","لِ","مٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 12"
                        ],
                        [
                            "id" => "529",
                            "tema" => "Mufrodat 75",
                            "kata" => "آمِنٌ",
                            "kata_arab" => "آمِنٌ",
                            "arti" => "Aman",
                            "huruf" => array_unique(["آ","مِ","نٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 12"
                        ],
                        [
                            "id" => "530",
                            "tema" => "Mufrodat 75",
                            "kata" => "خَطِيْرٌ",
                            "kata_arab" => "خَطِيْرٌ",
                            "arti" => "Mengkhawatirkan",
                            "huruf" => array_unique(["خَ","طِ","يْ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 12"
                        ],
                        
                    // 531-537
                        [
                            "id" => "531",
                            "tema" => "Mufrodat 76",
                            "kata" => "لاَئِقٌ",
                            "kata_arab" => "لاَئِقٌ",
                            "arti" => "Cocok",
                            "huruf" => array_unique(["لاَ","ئِ","قٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 12"
                        ],
                        [
                            "id" => "532",
                            "tema" => "Mufrodat 76",
                            "kata" => "حَيٌّ",
                            "kata_arab" => "حَيٌّ",
                            "arti" => "Hidup",
                            "huruf" => array_unique(["حَ","يٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 12"
                        ],
                        [
                            "id" => "533",
                            "tema" => "Mufrodat 76",
                            "kata" => "مَيِّتٌ",
                            "kata_arab" => "مَيِّتٌ",
                            "arti" => "Mati",
                            "huruf" => array_unique(["مَ","يِّ","تٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 12"
                        ],
                        [
                            "id" => "534",
                            "tema" => "Mufrodat 76",
                            "kata" => "مَفْتُوْحٌ",
                            "kata_arab" => "مَفْتُوْحٌ",
                            "arti" => "Terbuka",
                            "huruf" => array_unique(["مَ","فْ","تُ","وْ","حٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 12"
                        ],
                        [
                            "id" => "535",
                            "tema" => "Mufrodat 76",
                            "kata" => "مُغْلَقٌ",
                            "kata_arab" => "مُغْلَقٌ",
                            "arti" => "Tertutup",
                            "huruf" => array_unique(["مُ","غْ","لَ","قٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 12"
                        ],
                        [
                            "id" => "536",
                            "tema" => "Mufrodat 76",
                            "kata" => "أَصْلِيٌّ",
                            "kata_arab" => "أَصْلِيٌّ",
                            "arti" => "Asli",
                            "huruf" => array_unique(["أَ","صْ","لِ","يٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 12"
                        ],
                        [
                            "id" => "537",
                            "tema" => "Mufrodat 76",
                            "kata" => "زَائِفٌ",
                            "kata_arab" => "زَائِفٌ",
                            "arti" => "Palsu",
                            "huruf" => array_unique(["زَ","ا","ئِ","فٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 12"
                        ],
                
                // per_13
                    // 538-545
                        [
                            "id" => "538",
                            "tema" => "Mufrodat 77",
                            "kata" => "ثَوْبٌ",
                            "kata_arab" => "ثَوْبٌ",
                            "arti" => "Pakaian",
                            "huruf" => array_unique(["ثَ","وْ","بٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "539",
                            "tema" => "Mufrodat 77",
                            "kata" => "قَمِيْصٌ",
                            "kata_arab" => "قَمِيْصٌ",
                            "arti" => "Kemeja",
                            "huruf" => array_unique(["قَ","مِ","يْ","صٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "540",
                            "tema" => "Mufrodat 77",
                            "kata" => "بَنْطَلُوْنٌ",
                            "kata_arab" => "بَنْطَلُوْنٌ",
                            "arti" => "Celana Panjang",
                            "huruf" => array_unique(["بَ","نْ","طَ","لُ","وْ","نٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "541",
                            "tema" => "Mufrodat 77",
                            "kata" => "سِرْوَالٌ",
                            "kata_arab" => "سِرْوَالٌ",
                            "arti" => "Celana Pendek",
                            "huruf" => array_unique(["سِ","رْ","وَ","ا","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "542",
                            "tema" => "Mufrodat 77",
                            "kata" => "خِمَارٌ",
                            "kata_arab" => "خِمَارٌ",
                            "arti" => "Kerudung",
                            "huruf" => array_unique(["خِ","مَ","ا","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "543",
                            "tema" => "Mufrodat 77",
                            "kata" => "قَلَنْسُوَةٌ",
                            "kata_arab" => "قَلَنْسُوَةٌ",
                            "arti" => "Peci",
                            "huruf" => array_unique(["قَ","لَ","نْ","سُ","وَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "544",
                            "tema" => "Mufrodat 77",
                            "kata" => "فَانِلَةٌ",
                            "kata_arab" => "فَانِلَةٌ",
                            "arti" => "Kaos",
                            "huruf" => array_unique(["فَ","ا","نِ","لَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "545",
                            "tema" => "Mufrodat 77",
                            "kata" => "حَرِيْرٌ",
                            "kata_arab" => "حَرِيْرٌ",
                            "arti" => "Sutra",
                            "huruf" => array_unique(["حَ","رِ","يْ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        
                    // 546-552
                        [
                            "id" => "546",
                            "tema" => "Mufrodat 78",
                            "kata" => "جَوْرَبٌ",
                            "kata_arab" => "جَوْرَبٌ",
                            "arti" => "Kaos Kaki",
                            "huruf" => array_unique(["جَ","وْ","رَ","بٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "547",
                            "tema" => "Mufrodat 78",
                            "kata" => "تَنُّوْرَةٌ",
                            "kata_arab" => "تَنُّوْرَةٌ",
                            "arti" => "Rok",
                            "huruf" => array_unique(["تَ","نُّ","وْ","رَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "548",
                            "tema" => "Mufrodat 78",
                            "kata" => "لِفَاعٌ",
                            "kata_arab" => "لِفَاعٌ",
                            "arti" => "Selendang",
                            "huruf" => array_unique(["لِ","فَ","ا","عٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "549",
                            "tema" => "Mufrodat 78",
                            "kata" => "صُدْرِيَّةٌ",
                            "kata_arab" => "صُدْرِيَّةٌ",
                            "arti" => "BH",
                            "huruf" => array_unique(["صُ","دْ","رِ","يَّ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "550",
                            "tema" => "Mufrodat 78",
                            "kata" => "عِمَامَةٌ",
                            "kata_arab" => "عِمَامَةٌ",
                            "arti" => "Sorban",
                            "huruf" => array_unique(["عِ","مَ","ا","مَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "551",
                            "tema" => "Mufrodat 78",
                            "kata" => "إِزَارٌ",
                            "kata_arab" => "إِزَارٌ",
                            "arti" => "Sarung",
                            "huruf" => array_unique(["إِ","زَ","ا","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "552",
                            "tema" => "Mufrodat 78",
                            "kata" => "جَاكِيْتٌ",
                            "kata_arab" => "جَاكِيْتٌ",
                            "arti" => "Jaket",
                            "huruf" => array_unique(["جَ","ا","كِ","يْ","تٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        
                    // 553-559
                        [
                            "id" => "553",
                            "tema" => "Mufrodat 79",
                            "kata" => "كِسَاءٌ",
                            "kata_arab" => "كِسَاءٌ",
                            "arti" => "Jas",
                            "huruf" => array_unique(["كِ","سَ","ا","ءٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "554",
                            "tema" => "Mufrodat 79",
                            "kata" => "مِعْطَفٌ",
                            "kata_arab" => "مِعْطَفٌ",
                            "arti" => "Jas hujan",
                            "huruf" => array_unique(["مِ","عْ","طَ","فٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "555",
                            "tema" => "Mufrodat 79",
                            "kata" => "قُبَّعَةٌ",
                            "kata_arab" => "قُبَّعَةٌ",
                            "arti" => "Topi",
                            "huruf" => array_unique(["قُ","بَّ","عَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "556",
                            "tema" => "Mufrodat 79",
                            "kata" => "مِظَلَّةٌ",
                            "kata_arab" => "مِظَلَّةٌ",
                            "arti" => "Payung",
                            "huruf" => array_unique(["مِ","ظَ","لَّ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "557",
                            "tema" => "Mufrodat 79",
                            "kata" => "سِرْوَالٌ دَاخِلِيٌّ",
                            "kata_arab" => "سِرْوَالٌ دَاخِلِيٌّ",
                            "arti" => "Celana dalam",
                            "huruf" => array_unique(["سِ","رْ","وَ","ا","لٌ","_","دَ","ا","خِ","لِ","يٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "558",
                            "tema" => "Mufrodat 79",
                            "kata" => "نَعْلٌ",
                            "kata_arab" => "نَعْلٌ",
                            "arti" => "Sendal",
                            "huruf" => array_unique(["نَ","عْ","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "559",
                            "tema" => "Mufrodat 79",
                            "kata" => "حِذَاءٌ",
                            "kata_arab" => "حِذَاءٌ",
                            "arti" => "Sepatu",
                            "huruf" => array_unique(["حِ","ذَ","ا","ءٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        
                    // 560-566
                        [
                            "id" => "560",
                            "tema" => "Mufrodat 80",
                            "kata" => "لِبَاسٌ رَسْمِيٌّ",
                            "kata_arab" => "لِبَاسٌ رَسْمِيٌّ",
                            "arti" => "Pakaian resmi",
                            "huruf" => array_unique(["لِ","بَ","ا","سٌ","_","رَ","سْ","مِ","يٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "561",
                            "tema" => "Mufrodat 80",
                            "kata" => "مِنْشَفَةٌ",
                            "kata_arab" => "مِنْشَفَةٌ",
                            "arti" => "Handuk",
                            "huruf" => array_unique(["مِ","نْ","شَ","فَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "562",
                            "tema" => "Mufrodat 80",
                            "kata" => "قِطَانٌ",
                            "kata_arab" => "قِطَانٌ",
                            "arti" => "Sabuk",
                            "huruf" => array_unique(["قِ","طَ","ا","نٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "563",
                            "tema" => "Mufrodat 80",
                            "kata" => "زِرٌّ",
                            "kata_arab" => "زِرٌّ",
                            "arti" => "Kancing",
                            "huruf" => array_unique(["زِ","رٌّ","جَ","يْ","بٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "564",
                            "tema" => "Mufrodat 80",
                            "kata" => "جَيْبٌ",
                            "kata_arab" => "جَيْبٌ",
                            "arti" => "Saku",
                            "huruf" => array_unique(["زِ","رٌّ","جَ","يْ","بٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "565",
                            "tema" => "Mufrodat 80",
                            "kata" => "خَيْطٌ",
                            "kata_arab" => "خَيْطٌ",
                            "arti" => "Benang",
                            "huruf" => array_unique(["خَ","يْ","طٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "566",
                            "tema" => "Mufrodat 80",
                            "kata" => "إِبْرَةٌ",
                            "kata_arab" => "إِبْرَةٌ",
                            "arti" => "Jarum",
                            "huruf" => array_unique(["إِ","بْ","رَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        
                    // 567-573
                        [
                            "id" => "567",
                            "tema" => "Mufrodat 81",
                            "kata" => "رَبْطَةٌ",
                            "kata_arab" => "رَبْطَةٌ",
                            "arti" => "Perban",
                            "huruf" => array_unique(["رَ","بْ","طَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "568",
                            "tema" => "Mufrodat 81",
                            "kata" => "سِوَارٌ",
                            "kata_arab" => "سِوَارٌ",
                            "arti" => "Gelang",
                            "huruf" => array_unique(["سِ","وَ","ا","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "569",
                            "tema" => "Mufrodat 81",
                            "kata" => "قِلَادَةٌ",
                            "kata_arab" => "قِلَادَةٌ",
                            "arti" => "Kalung",
                            "huruf" => array_unique(["قِ","لَ","ا","دَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "570",
                            "tema" => "Mufrodat 81",
                            "kata" => "قُرْطٌ",
                            "kata_arab" => "قُرْطٌ",
                            "arti" => "Anting-anting",
                            "huruf" => array_unique(["قُ","رْ","طٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "571",
                            "tema" => "Mufrodat 81",
                            "kata" => "خَاتَمٌ",
                            "kata_arab" => "خَاتَمٌ",
                            "arti" => "Cincin",
                            "huruf" => array_unique(["خَ","ا","تَ","مٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "572",
                            "tema" => "Mufrodat 81",
                            "kata" => "ذَهَبٌ",
                            "kata_arab" => "ذَهَبٌ",
                            "arti" => "Emas",
                            "huruf" => array_unique(["ذَ","هَ","بٌ","فِ","ضَّ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "573",
                            "tema" => "Mufrodat 81",
                            "kata" => "فِضَّةٌ",
                            "kata_arab" => "فِضَّةٌ",
                            "arti" => "Perak",
                            "huruf" => array_unique(["ذَ","هَ","بٌ","فِ","ضَّ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        
                    // 574-578
                        [
                            "id" => "574",
                            "tema" => "Mufrodat 82",
                            "kata" => "لَبِسَ-يَلْبَسُ-لُبْسًا",
                            "kata_arab" => "لَبِسَ-يَلْبَسُ-لُبْسًا",
                            "arti" => "Memakai (pakaian)",
                            "huruf" => array_unique(["لَ","بِ","سَ","-","يَ","لْ","بَ","سُ","-","لُ","بْ","سً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "575",
                            "tema" => "Mufrodat 82",
                            "kata" => "اِسْتَعْمَلَ-يَسْتَعْمِلُ-اِسْتِعْمَالًا",
                            "kata_arab" => "اِسْتَعْمَلَ-يَسْتَعْمِلُ-اِسْتِعْمَالًا",
                            "arti" => "Memakai",
                            "huruf" => array_unique(["اِ","سْ","تَ","عْ","مَ","لَ","-","يَ","سْ","تَ","عْ","مِ","لُ","-","اِ","سْ","تِ","عْ","مَ","ا","لً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "576",
                            "tema" => "Mufrodat 82",
                            "kata" => "طَوَى-يَطْوِي-طَيًّا",
                            "kata_arab" => "طَوَى-يَطْوِي-طَيًّا",
                            "arti" => "Melipat",
                            "huruf" => array_unique(["طَ","وَ","ى","-","يَ","طْ","وِ","ي","-","طَ","يًّ","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "577",
                            "tema" => "Mufrodat 82",
                            "kata" => "كَوَى-يَكْوِي-كَوًّا",
                            "kata_arab" => "كَوَى-يَكْوِي-كَوًّا",
                            "arti" => "Menyetrika",
                            "huruf" => array_unique(["كَ","وَ","ى","-","يَ","كْ","وِ","ي","-","كَ","وًّ","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "578",
                            "tema" => "Mufrodat 82",
                            "kata" => "رَتَّبَ-يُرَتِّبُ-تَرْتِيْبًا",
                            "kata_arab" => "رَتَّبَ-يُرَتِّبُ-تَرْتِيْبًا",
                            "arti" => "Merapikan",
                            "huruf" => array_unique(["رَ","تَّ","بَ","-","يُ","رَ","تِّ","بُ","-","تَ","رْ","تِ","يْ","بً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        
                    // 579-583
                        [
                            "id" => "579",
                            "tema" => "Mufrodat 83",
                            "kata" => "طَوَّلَ-يُطَوِّلُ-تَطْوِيْلًا",
                            "kata_arab" => "طَوَّلَ-يُطَوِّلُ-تَطْوِيْلًا",
                            "arti" => "Memanjangkan",
                            "huruf" => array_unique(["طَ","وَّ","لَ","-","يُ","طَ","وِّ","لُ","-","تَ","طْ","وِ","يْ","لً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "580",
                            "tema" => "Mufrodat 83",
                            "kata" => "قَصَّرَ-يُقَصِّرُ-تَقْصِيْرًا",
                            "kata_arab" => "قَصَّرَ-يُقَصِّرُ-تَقْصِيْرًا",
                            "arti" => "Memendekkan",
                            "huruf" => array_unique(["قَ","صَّ","رَ","-","يُ","قَ","صِّ","رُ","تَ","قْ","صِ","يْ","رً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "581",
                            "tema" => "Mufrodat 83",
                            "kata" => "كَبَّرَ-يُكَبِّرُ-تَكْبِيْرًا",
                            "kata_arab" => "كَبَّرَ-يُكَبِّرُ-تَكْبِيْرًا",
                            "arti" => "Membesarkan",
                            "huruf" => array_unique(["كَ","بَّ","رَ","-","يُ","كَ","بِّ","رُ","-","تَ","كْ","بِ","يْ","رً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "582",
                            "tema" => "Mufrodat 83",
                            "kata" => "صَغَّرَ-يُصَغِّرُ-تَصْغِيْرًا",
                            "kata_arab" => "صَغَّرَ-يُصَغِّرُ-تَصْغِيْرًا",
                            "arti" => "Mengecilkan",
                            "huruf" => array_unique(["صَ","غَّ","رَ","-","يُ","صَ","غِّ","رُ","-","تَ","صْ","غِ","يْ","رً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "583",
                            "tema" => "Mufrodat 83",
                            "kata" => "خَاطَ-يَخِيْطُ-خَيْطًا",
                            "kata_arab" => "خَاطَ-يَخِيْطُ-خَيْطًا",
                            "arti" => "Menjahit",
                            "huruf" => array_unique(["خَ","ا","طَ","-","يَ","خِ","يْ","طُ","-","خَ","يْ","طً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        
                    // 584-591
                        [
                            "id" => "584",
                            "tema" => "Mufrodat 84",
                            "kata" => "سَرِيْرٌ",
                            "kata_arab" => "سَرِيْرٌ",
                            "arti" => "Ranjang",
                            "huruf" => array_unique(["سَ","رِ","يْ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "585",
                            "tema" => "Mufrodat 84",
                            "kata" => "مُلَاءَةُ السَّرِيْرِ",
                            "kata_arab" => "مُلَاءَةُ السَّرِيْرِ",
                            "arti" => "Seprei",
                            "huruf" => array_unique(["مُ","لَا","ءَ","ةُ","_","ال","سَّ","رِ","يْ","رِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "586",
                            "tema" => "Mufrodat 84",
                            "kata" => "فِرَاشٌ",
                            "kata_arab" => "فِرَاشٌ",
                            "arti" => "Kasur",
                            "huruf" => array_unique(["فِ","رَ","ا","شٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "587",
                            "tema" => "Mufrodat 84",
                            "kata" => "وِسَادَةٌ",
                            "kata_arab" => "وِسَادَةٌ",
                            "arti" => "Bantal",
                            "huruf" => array_unique(["وِ","سَ","ا","دَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "588",
                            "tema" => "Mufrodat 84",
                            "kata" => "وِسَادَةٌ مُسْتَطِيْلَةٌ",
                            "kata_arab" => "وِسَادَةٌ مُسْتَطِيْلَةٌ",
                            "arti" => "Guling",
                            "huruf" => array_unique(["وِ","سَ","ا","دَ","ةٌ","_","مُ","سْ","تَ","طِ","يْ","لَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "589",
                            "tema" => "Mufrodat 84",
                            "kata" => "لِحَافٌ",
                            "kata_arab" => "لِحَافٌ",
                            "arti" => "Selimut",
                            "huruf" => array_unique(["لِ","حَ","ا","فٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "590",
                            "tema" => "Mufrodat 84",
                            "kata" => "حَصِيْرٌ",
                            "kata_arab" => "حَصِيْرٌ",
                            "arti" => "Tikar",
                            "huruf" => array_unique(["حَ","صِ","يْ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "591",
                            "tema" => "Mufrodat 84",
                            "kata" => "سَجَّادَةٌ",
                            "kata_arab" => "سَجَّادَةٌ",
                            "arti" => "Sajadah",
                            "huruf" => array_unique(["سَ","جَّ","ا","دَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        
                    // 592-599
                        [
                            "id" => "592",
                            "tema" => "Mufrodat 85",
                            "kata" => "مِرْآةٌ",
                            "kata_arab" => "مِرْآةٌ",
                            "arti" => "Cermin",
                            "huruf" => array_unique(["مِ","رْ","آ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "593",
                            "tema" => "Mufrodat 85",
                            "kata" => "مُشْطٌ",
                            "kata_arab" => "مُشْطٌ",
                            "arti" => "Sisir",
                            "huruf" => array_unique(["مُ","شْ","طٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "594",
                            "tema" => "Mufrodat 85",
                            "kata" => "مَسْحُوْقٌ",
                            "kata_arab" => "مَسْحُوْقٌ",
                            "arti" => "Bedak",
                            "huruf" => array_unique(["مَ","سْ","حُ","وْ","قٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "595",
                            "tema" => "Mufrodat 85",
                            "kata" => "قُطْنٌ",
                            "kata_arab" => "قُطْنٌ",
                            "arti" => "Kapas",
                            "huruf" => array_unique(["قُ","طْ","نٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "596",
                            "tema" => "Mufrodat 85",
                            "kata" => "قَطِيْفَةٌ",
                            "kata_arab" => "قَطِيْفَةٌ",
                            "arti" => "Beludru",
                            "huruf" => array_unique(["قَ","طِ","يْ","فَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "597",
                            "tema" => "Mufrodat 85",
                            "kata" => "نَامُوْسِيَّةٌ",
                            "kata_arab" => "نَامُوْسِيَّةٌ",
                            "arti" => "Kelambu",
                            "huruf" => array_unique(["نَ","ا","مُ","وْ","سِ","يَّ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "598",
                            "tema" => "Mufrodat 85",
                            "kata" => "اَلسَّاعَةُ الْمُنَبِّهَةُ",
                            "kata_arab" => "اَلسَّاعَةُ الْمُنَبِّهَةُ",
                            "arti" => "Jam beker",
                            "huruf" => array_unique(["اَل","سَّ","ا","عَ","ةُ","_","الْ","مُ","نَ","بِّ","هَ","ةُ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],
                        [
                            "id" => "599",
                            "tema" => "Mufrodat 85",
                            "kata" => "جَوَّالٌ",
                            "kata_arab" => "جَوَّالٌ",
                            "arti" => "HP",
                            "huruf" => array_unique(["جَ","وَّ","ا","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 13"
                        ],

                // per_14
                    // 600-606
                        [
                            "id" => "600",
                            "tema" => "Mufrodat 86",
                            "kata" => "نَامَ-يَنَامُ-نَوْمًا",
                            "kata_arab" => "نَامَ-يَنَامُ-نَوْمًا",
                            "arti" => "Tidur",
                            "huruf" => array_unique(["نَ","ا","مَ","-","يَ","نَ","ا","مُ","-","نَ","وْ","مً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 14"
                        ],
                        [
                            "id" => "601",
                            "tema" => "Mufrodat 86",
                            "kata" => "اِسْتَلْقَى-يَسْتَلْقِى-اِسْتِلْقَاءً",
                            "kata_arab" => "اِسْتَلْقَى-يَسْتَلْقِى-اِسْتِلْقَاءً",
                            "arti" => "Rebahan",
                            "huruf" => array_unique(["اِ","سْ","تَ","لْ","قَ","ى","-","يَ","سْ","تَ","لْ","قِ","ى","-","اِ","سْ","تِ","لْ","قَ","ا","ءً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 14"
                        ],
                        [
                            "id" => "602",
                            "tema" => "Mufrodat 86",
                            "kata" => "خَرْخَرَ-يُخَرْخِرُ-خَرْخَرَةً",
                            "kata_arab" => "خَرْخَرَ-يُخَرْخِرُ-خَرْخَرَةً",
                            "arti" => "Mengorok",
                            "huruf" => array_unique(["خَ","رْ","خَ","رَ","-","يُ","خَ","رْ","خِ","رُ","-","خَ","رْ","خَ","رَ","ةً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 14"
                        ],
                        [
                            "id" => "603",
                            "tema" => "Mufrodat 86",
                            "kata" => "هَذَا-يَهْذِي-هَذْيًا",
                            "kata_arab" => "هَذَا-يَهْذِي-هَذْيًا",
                            "arti" => "Mengigau",
                            "huruf" => array_unique(["هَ","ذَ","ا","-","يَ","هْ","ذِ","ي","-","هَ","ذْ","يً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 14"
                        ],
                        [
                            "id" => "604",
                            "tema" => "Mufrodat 86",
                            "kata" => "سَالَ-يَسِيْلُ-سَيْلًا لُعَابُهُ",
                            "kata_arab" => "سَالَ-يَسِيْلُ-سَيْلًا لُعَابُهُ",
                            "arti" => "Mengalir Iler",
                            "huruf" => array_unique(["سَ","ا","لَ","-","يَ","سِ","يْ","لُ","-","سَ","يْ","لًا","_","لُ","عَ","ا","بُ","هُ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 14"
                        ],
                        [
                            "id" => "605",
                            "tema" => "Mufrodat 86",
                            "kata" => "قَرْفَصَ-يُقَرْفِصُ-قَرْفَصَةً",
                            "kata_arab" => "قَرْفَصَ-يُقَرْفِصُ-قَرْفَصَةً",
                            "arti" => "Mencubit",
                            "huruf" => array_unique(["قَ","رْ","فَ","صَ","-","يُ","قَ","رْ","فِ","صُ","-","قَ","رْ","فَ","صَ","ةً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 14"
                        ],
                        [
                            "id" => "606",
                            "tema" => "Mufrodat 86",
                            "kata" => "تَرَبَّعَ-يَتَرَبَّعُ-تَرَبُّعًا",
                            "kata_arab" => "تَرَبَّعَ-يَتَرَبَّعُ-تَرَبُّعًا",
                            "arti" => "Duduk bersila",
                            "huruf" => array_unique(["تَ","رَ","بَّ","عَ","-","يَ","تَ","رَ","بَّ","عُ","-","تَ","رَ","بُّ","عً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 14"
                        ],
                        
                    // 607-615
                        [
                            "id" => "607",
                            "tema" => "Mufrodat 87",
                            "kata" => "مَوْقِدٌ",
                            "kata_arab" => "مَوْقِدٌ",
                            "arti" => "Kompor",
                            "huruf" => array_unique(["مَ","وْ","قِ","دٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 14"
                        ],
                        [
                            "id" => "608",
                            "tema" => "Mufrodat 87",
                            "kata" => "قِدْرٌ",
                            "kata_arab" => "قِدْرٌ",
                            "arti" => "Panci",
                            "huruf" => array_unique(["قِ","دْ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 14"
                        ],
                        [
                            "id" => "609",
                            "tema" => "Mufrodat 87",
                            "kata" => "مِقْلاَةٌ",
                            "kata_arab" => "مِقْلاَةٌ",
                            "arti" => "Kompor",
                            "huruf" => array_unique(["مِ","قْ","لاَ","ةٌ"]),
                            "status" => "off",
                            "pertemuan" => "Pertemuan 14"
                        ],
                        [
                            "id" => "610",
                            "tema" => "Mufrodat 87",
                            "kata" => "مَائِدَةٌ",
                            "kata_arab" => "مَائِدَةٌ",
                            "arti" => "Meja makan",
                            "huruf" => array_unique(["مَ","ا","ئِ","دَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 14"
                        ],
                        [
                            "id" => "611",
                            "tema" => "Mufrodat 87",
                            "kata" => "إِبْرِيْقٌ",
                            "kata_arab" => "إِبْرِيْقٌ",
                            "arti" => "Teko",
                            "huruf" => array_unique(["إِ","بْ","رِ","يْ","قٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 14"
                        ],
                        [
                            "id" => "612",
                            "tema" => "Mufrodat 87",
                            "kata" => "كُوْبٌ",
                            "kata_arab" => "كُوْبٌ",
                            "arti" => "Gelas",
                            "huruf" => array_unique(["كُ","وْ","بٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 14"
                        ],
                        [
                            "id" => "613",
                            "tema" => "Mufrodat 87",
                            "kata" => "صَحْنٌ",
                            "kata_arab" => "صَحْنٌ",
                            "arti" => "Piring",
                            "huruf" => array_unique(["صَ","حْ","نٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 14"
                        ],
                        [
                            "id" => "614",
                            "tema" => "Mufrodat 87",
                            "kata" => "قَصْعَةٌ",
                            "kata_arab" => "قَصْعَةٌ",
                            "arti" => "Mangkok",
                            "huruf" => array_unique(["قَ","صْ","عَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 14"
                        ],
                        [
                            "id" => "615",
                            "tema" => "Mufrodat 87",
                            "kata" => "طَبَقٌ",
                            "kata_arab" => "طَبَقٌ",
                            "arti" => "Nampan",
                            "huruf" => array_unique(["طَ","بَ","قٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 14"
                        ],
                        
                    // 616-623
                        [
                            "id" => "616",
                            "tema" => "Mufrodat 88",
                            "kata" => "فِنْجَانٌ",
                            "kata_arab" => "فِنْجَانٌ",
                            "arti" => "Cangkir",
                            "huruf" => array_unique(["فِ","نْ","جَ","ا","نٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 14"
                        ],
                        [
                            "id" => "617",
                            "tema" => "Mufrodat 88",
                            "kata" => "مِلْعَقَةٌ",
                            "kata_arab" => "مِلْعَقَةٌ",
                            "arti" => "Sendok",
                            "huruf" => array_unique(["مِ","لْ","عَ","قَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 14"
                        ],
                        [
                            "id" => "618",
                            "tema" => "Mufrodat 88",
                            "kata" => "كُوْزٌ",
                            "kata_arab" => "كُوْزٌ",
                            "arti" => "Teko",
                            "huruf" => array_unique(["كُ","وْ","زٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 14"
                        ],
                        [
                            "id" => "619",
                            "tema" => "Mufrodat 88",
                            "kata" => "قَارُوْرَةٌ",
                            "kata_arab" => "قَارُوْرَةٌ",
                            "arti" => "Botol",
                            "huruf" => array_unique(["قَ","ا","رُ","وْ","رَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 14"
                        ],
                        [
                            "id" => "620",
                            "tema" => "Mufrodat 88",
                            "kata" => "مِلْعَقَةُ الشَّايِ",
                            "kata_arab" => "مِلْعَقَةُ الشَّايِ",
                            "arti" => "Sendok Teh",
                            "huruf" => array_unique(["مِ","لْ","عَ","قَ","ةُ","_","ال","شَّ","ا","يِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 14"
                        ],
                        [
                            "id" => "621",
                            "tema" => "Mufrodat 88",
                            "kata" => "مِلْعَقَةُ الرُّزِّ",
                            "kata_arab" => "مِلْعَقَةُ الرُّزِّ",
                            "arti" => "Sendok Nasi",
                            "huruf" => array_unique(["مِ","لْ","عَ","قَ","ةُ","_","ال","رُّ","زِّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 14"
                        ],
                        [
                            "id" => "622",
                            "tema" => "Mufrodat 88",
                            "kata" => "مِلْعَقَةُ الْمَرَقِ",
                            "kata_arab" => "مِلْعَقَةُ الْمَرَقِ",
                            "arti" => "Sendok kuah",
                            "huruf" => array_unique(["مِ","لْ","عَ","قَ","ةُ","_","الْ","مَ","رَ","قِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 14"
                        ],
                        [
                            "id" => "623",
                            "tema" => "Mufrodat 88",
                            "kata" => "شَوْكَةٌ",
                            "kata_arab" => "شَوْكَةٌ",
                            "arti" => "Garpu",
                            "huruf" => array_unique(["شَ","وْ","كَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 14"
                        ],
                        
                    // 624-631
                        [
                            "id" => "624",
                            "tema" => "Mufrodat 89",
                            "kata" => "رَفُّ الصُّحُوْنِ",
                            "kata_arab" => "رَفُّ الصُّحُوْنِ",
                            "arti" => "Rak piring",
                            "huruf" => array_unique(["رَ","فُّ","_","ال","صُّ","حُ","وْ","نِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 14"
                        ],
                        [
                            "id" => "625",
                            "tema" => "Mufrodat 89",
                            "kata" => "تِرْمُسٌ",
                            "kata_arab" => "تِرْمُسٌ",
                            "arti" => "Termos",
                            "huruf" => array_unique(["تِ","رْ","مُ","سٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 14"
                        ],
                        [
                            "id" => "626",
                            "tema" => "Mufrodat 89",
                            "kata" => "كِبْرِيْتٌ",
                            "kata_arab" => "كِبْرِيْتٌ",
                            "arti" => "Korek",
                            "huruf" => array_unique(["كِ","بْ","رِ","يْ","تٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 14"
                        ],
                        [
                            "id" => "627",
                            "tema" => "Mufrodat 89",
                            "kata" => "وَلَّاعَةٌ",
                            "kata_arab" => "وَلَّاعَةٌ",
                            "arti" => "Korek gas",
                            "huruf" => array_unique(["وَ","لَّ","ا","عَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 14"
                        ],
                        [
                            "id" => "628",
                            "tema" => "Mufrodat 89",
                            "kata" => "غَازٌ",
                            "kata_arab" => "غَازٌ",
                            "arti" => "Gas",
                            "huruf" => array_unique(["رُ","زٌّ","غَ","ا","زٌ","مَ","ا","ءٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 14"
                        ],
                        [
                            "id" => "629",
                            "tema" => "Mufrodat 89",
                            "kata" => "سِكِّيْنٌ",
                            "kata_arab" => "سِكِّيْنٌ",
                            "arti" => "Pisau",
                            "huruf" => array_unique(["سِ","كِّ","يْ","نٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 14"
                        ],
                        [
                            "id" => "630",
                            "tema" => "Mufrodat 89",
                            "kata" => "مَاءٌ",
                            "kata_arab" => "مَاءٌ",
                            "arti" => "Air",
                            "huruf" => array_unique(["رُ","زٌّ","غَ","ا","زٌ","مَ","ا","ءٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 14"
                        ],
                        [
                            "id" => "631",
                            "tema" => "Mufrodat 89",
                            "kata" => "رُزٌّ",
                            "kata_arab" => "رُزٌّ",
                            "arti" => "Nasi",
                            "huruf" => array_unique(["رُ","زٌّ","غَ","ا","زٌ","مَ","ا","ءٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 14"
                        ],
                
                // per_15
                    // 632-639
                        [
                            "id" => "632",
                            "tema" => "Mufrodat 90",
                            "kata" => "أَكَلَ-يَأْكُلُ-أَكْلاً",
                            "kata_arab" => "أَكَلَ-يَأْكُلُ-أَكْلاً",
                            "arti" => "Makan",
                            "huruf" => array_unique(["أَ","كَ","لَ","-","يَ","أْ","كُ","لُ","-","أَ","كْ","لاً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 15"
                        ],
                        [
                            "id" => "633",
                            "tema" => "Mufrodat 90",
                            "kata" => "شَرِبَ-يَشْرَبُ-شُرْبًا",
                            "kata_arab" => "شَرِبَ-يَشْرَبُ-شُرْبًا",
                            "arti" => "Minum",
                            "huruf" => array_unique(["شَ","رِ","بَ","-","يَ","شْ","رَ","بُ","-","شُ","رْ","بً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 15"
                        ],
                        [
                            "id" => "634",
                            "tema" => "Mufrodat 90",
                            "kata" => "طَبَخَ-يَطْبَخُ-طَبْخًا",
                            "kata_arab" => "طَبَخَ-يَطْبَخُ-طَبْخًا",
                            "arti" => "Memasak",
                            "huruf" => array_unique(["طَ","بَ","خَ","-","يَ","طْ","بَ","خُ","-","طَ","بْ","خً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 15"
                        ],
                        [
                            "id" => "635",
                            "tema" => "Mufrodat 90",
                            "kata" => "قَلَى-يَقْلِى-قَلْيًا",
                            "kata_arab" => "قَلَى-يَقْلِى-قَلْيًا",
                            "arti" => "Menggoreng",
                            "huruf" => array_unique(["قَ","لَ","ى","-","يَ","قْ","لِ","ى","-","قَ","لْ","يً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 15"
                        ],
                        [
                            "id" => "636",
                            "tema" => "Mufrodat 90",
                            "kata" => "شَوَى-يَشْوِى-شَوَاءً",
                            "kata_arab" => "شَوَى-يَشْوِى-شَوَاءً",
                            "arti" => "Memanggang",
                            "huruf" => array_unique(["شَ","وَ","ى","-","يَ","شْ","وِ","ى","-","شَ","وَ","ا","ءً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 15"
                        ],
                        [
                            "id" => "637",
                            "tema" => "Mufrodat 90",
                            "kata" => "لَحِسَ-يَلْحَسُ-لَحْسًا",
                            "kata_arab" => "لَحِسَ-يَلْحَسُ-لَحْسًا",
                            "arti" => "Menjilat",
                            "huruf" => array_unique(["لَ","حِ","سَ","-","يَ","لْ","حَ","سُ","-","لَ","حْ","سً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 15"
                        ],
                        [
                            "id" => "638",
                            "tema" => "Mufrodat 90",
                            "kata" => "بَلَعَ-يَبْلَعُ-بَلْعًا",
                            "kata_arab" => "بَلَعَ-يَبْلَعُ-بَلْعًا",
                            "arti" => "Menelan",
                            "huruf" => array_unique(["بَ","لَ","عَ","-","يَ","بْ","لَ","عُ","-","بَ","لْ","عً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 15"
                        ],
                        [
                            "id" => "639",
                            "tema" => "Mufrodat 90",
                            "kata" => "مَضَغَ-يَمْضَغُ-مَضْغَا",
                            "kata_arab" => "مَضَغَ-يَمْضَغُ-مَضْغَا",
                            "arti" => "Mengunyah",
                            "huruf" => array_unique(["مَ","ضَ","غَ","-","يَ","مْ","ضَ","غُ","-","مَ","ضْ","غَ","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 15"
                        ],
                        
                    // 640-646
                        [
                            "id" => "640",
                            "tema" => "Mufrodat 91",
                            "kata" => "عَضَّ-يَعَضُّ-عَضًّا",
                            "kata_arab" => "عَضَّ-يَعَضُّ-عَضًّا",
                            "arti" => "Mengigit",
                            "huruf" => array_unique(["عَ","ضَّ","-","يَ","عَ","ضُّ","-","عَ","ضًّ","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 15"
                        ],
                        [
                            "id" => "641",
                            "tema" => "Mufrodat 91",
                            "kata" => "تَذَوَّقَ-يَتَذَوَّقُ-تَذَوُّقًا",
                            "kata_arab" => "تَذَوَّقَ-يَتَذَوَّقُ-تَذَوُّقًا",
                            "arti" => "Mencicipi",
                            "huruf" => array_unique(["تَ","ذَ","وَّ","قَ","-","يَ","تَ","ذَ","وَّ","قُ","-","تَ","ذَ","وُّ","قً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 15"
                        ],
                        [
                            "id" => "642",
                            "tema" => "Mufrodat 91",
                            "kata" => "شَرَّحَ-يُشَرِّحُ-تَشْرِيْحًا",
                            "kata_arab" => "شَرَّحَ-يُشَرِّحُ-تَشْرِيْحًا",
                            "arti" => "Mengiris",
                            "huruf" => array_unique(["شَ","رَّ","حَ","-","يُ","شَ","رِّ","حُ","-","تَ","شْ","رِ","يْ","حً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 15"
                        ],
                        [
                            "id" => "643",
                            "tema" => "Mufrodat 91",
                            "kata" => "قَشَّرَ-يُقَشِّرُ-تَقْشِيْرًا",
                            "kata_arab" => "قَشَّرَ-يُقَشِّرُ-تَقْشِيْرًا",
                            "arti" => "Mengupas",
                            "huruf" => array_unique(["قَ","شَّ","رَ","-","يُ","قَ","شِّ","رُ","-","تَ","قْ","شِ","يْ","رً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 15"
                        ],
                        [
                            "id" => "644",
                            "tema" => "Mufrodat 91",
                            "kata" => "قَطَعَ-يَقْطَعُ-قَطْعًا",
                            "kata_arab" => "قَطَعَ-يَقْطَعُ-قَطْعًا",
                            "arti" => "Memotong",
                            "huruf" => array_unique(["قَ","طَ","عَ","-","يَ","قْ","طَ","عُ","-","قَ","طْ","عً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 15"
                        ],
                        [
                            "id" => "645",
                            "tema" => "Mufrodat 91",
                            "kata" => "اِنْقَطَعَ-يَنْقَطِعُ-اِنْقِطَاعًا",
                            "kata_arab" => "اِنْقَطَعَ-يَنْقَطِعُ-اِنْقِطَاعًا",
                            "arti" => "Terpotong",
                            "huruf" => array_unique(["اِ","نْ","قَ","طَ","عَ","-","يَ","نْ","قَ","طِ","عُ","-","اِ","نْ","قِ","طَ","ا","عً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 15"
                        ],
                        [
                            "id" => "646",
                            "tema" => "Mufrodat 91",
                            "kata" => "هَيَّأَ-يُهَيِّءُ-تَهْيِيْئًا",
                            "kata_arab" => "هَيَّأَ-يُهَيِّءُ-تَهْيِيْئًا",
                            "arti" => "Menghidangkan",
                            "huruf" => array_unique(["هَ","يَّ","أَ","-","يُ","هَ","يِّ","ءُ","-","تَ","هْ","يِ","يْ","ئً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 15"
                        ],
                        
                    // 647-652
                        [
                            "id" => "647",
                            "tema" => "Mufrodat 92",
                            "kata" => "طَعْمٌ",
                            "kata_arab" => "طَعْمٌ",
                            "arti" => "Rasa",
                            "huruf" => array_unique(["طَ","عْ","مٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 15"
                        ],
                        [
                            "id" => "648",
                            "tema" => "Mufrodat 92",
                            "kata" => "حُلْوٌ",
                            "kata_arab" => "حُلْوٌ",
                            "arti" => "Manis",
                            "huruf" => array_unique(["حُ","لْ","وٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 15"
                        ],
                        [
                            "id" => "649",
                            "tema" => "Mufrodat 92",
                            "kata" => "مَالِحٌ",
                            "kata_arab" => "مَالِحٌ",
                            "arti" => "Asin",
                            "huruf" => array_unique(["مَ","ا","لِ","حٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 15"
                        ],
                        [
                            "id" => "650",
                            "tema" => "Mufrodat 92",
                            "kata" => "مُرٌّ",
                            "kata_arab" => "مُرٌّ",
                            "arti" => "Pahit",
                            "huruf" => array_unique(["حَ","رٌّ","مُ","رٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 15"
                        ],
                        [
                            "id" => "651",
                            "tema" => "Mufrodat 92",
                            "kata" => "حَرٌّ",
                            "kata_arab" => "حَرٌّ",
                            "arti" => "Panas",
                            "huruf" => array_unique(["حَ","رٌّ","مُ","رٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 15"
                        ],
                        [
                            "id" => "652",
                            "tema" => "Mufrodat 92",
                            "kata" => "بَارِدٌ",
                            "kata_arab" => "بَارِدٌ",
                            "arti" => "Dingin",
                            "huruf" => array_unique(["بَ","ا","رِ","دٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 15"
                        ],
                        
                    // 653-658
                        [
                            "id" => "653",
                            "tema" => "Mufrodat 93",
                            "kata" => "حِرِّيْفٌ",
                            "kata_arab" => "حِرِّيْفٌ",
                            "arti" => "Pedas",
                            "huruf" => array_unique(["حِ","رِّ","يْ","فٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 15"
                        ],
                        [
                            "id" => "654",
                            "tema" => "Mufrodat 93",
                            "kata" => "حَامِضٌ",
                            "kata_arab" => "حَامِضٌ",
                            "arti" => "Asam",
                            "huruf" => array_unique(["حَ","ا","مِ","ضٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 15"
                        ],
                        [
                            "id" => "655",
                            "tema" => "Mufrodat 93",
                            "kata" => "مَبْلُوْلٌ",
                            "kata_arab" => "مَبْلُوْلٌ",
                            "arti" => "Basah",
                            "huruf" => array_unique(["مَ","بْ","لُ","وْ","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 15"
                        ],
                        [
                            "id" => "656",
                            "tema" => "Mufrodat 93",
                            "kata" => "جَافٌّ",
                            "kata_arab" => "جَافٌّ",
                            "arti" => "Kering",
                            "huruf" => array_unique(["جَ","ا","فٌّ","دَ","ا","فِ","ئٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 15"
                        ],
                        [
                            "id" => "657",
                            "tema" => "Mufrodat 93",
                            "kata" => "دَافِئٌ",
                            "kata_arab" => "دَافِئٌ",
                            "arti" => "Hangat",
                            "huruf" => array_unique(["جَ","ا","فٌّ","دَ","ا","فِ","ئٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 15"
                        ],
                        [
                            "id" => "658",
                            "tema" => "Mufrodat 93",
                            "kata" => "رَيَّانٌ",
                            "kata_arab" => "رَيَّانٌ",
                            "arti" => "Segar",
                            "huruf" => array_unique(["رَ","يَّ","ا","نٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 15"
                        ],
                        
                // per_16
                    // 659-668
                        [
                            "id" => "659",
                            "tema" => "Mufrodat 94",
                            "kata" => "بِرْكَةٌ",
                            "kata_arab" => "بِرْكَةٌ",
                            "arti" => "Bak Mandi",
                            "huruf" => array_unique(["بِ","رْ","كَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 16"
                        ],
                        [
                            "id" => "660",
                            "tema" => "Mufrodat 94",
                            "kata" => "مِرْحَاضٌ",
                            "kata_arab" => "مِرْحَاضٌ",
                            "arti" => "Toilet",
                            "huruf" => array_unique(["مِ","رْ","حَ","ا","ضٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 16"
                        ],
                        [
                            "id" => "661",
                            "tema" => "Mufrodat 94",
                            "kata" => "مَاءٌ",
                            "kata_arab" => "مَاءٌ",
                            "arti" => "Air",
                            "huruf" => array_unique(["مَ","ا","ءٌ","بِ","رْ","كَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 16"
                        ],
                        [
                            "id" => "662",
                            "tema" => "Mufrodat 94",
                            "kata" => "صَابُوْنٌ",
                            "kata_arab" => "صَابُوْنٌ",
                            "arti" => "Sabun",
                            "huruf" => array_unique(["صَ","ا","بُ","وْ","نٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 16"
                        ],
                        [
                            "id" => "663",
                            "tema" => "Mufrodat 94",
                            "kata" => "شَامْبُو",
                            "kata_arab" => "شَامْبُو",
                            "arti" => "Sampo",
                            "huruf" => array_unique(["شَ","ا","مْ","بُ","و"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 16"
                        ],
                        [
                            "id" => "664",
                            "tema" => "Mufrodat 94",
                            "kata" => "فِرْجَوْنٌ",
                            "kata_arab" => "فِرْجَوْنٌ",
                            "arti" => "Sikat",
                            "huruf" => array_unique(["فِ","رْ","جَ","وْ","نٌ"]),
                            "status" => "off",
                            "pertemuan" => "Pertemuan 16"
                        ],
                        [
                            "id" => "665",
                            "tema" => "Mufrodat 94",
                            "kata" => "مَعْجُوْنٌ",
                            "kata_arab" => "مَعْجُوْنٌ",
                            "arti" => "Odol",
                            "huruf" => array_unique(["مَ","عْ","جُ","وْ","نٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 16"
                        ],
                        [
                            "id" => "666",
                            "tema" => "Mufrodat 94",
                            "kata" => "فُرْشَةٌ",
                            "kata_arab" => "فُرْشَةٌ",
                            "arti" => "Sikat",
                            "huruf" => array_unique(["فُ","رْ","شَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 16"
                        ],
                        [
                            "id" => "667",
                            "tema" => "Mufrodat 94",
                            "kata" => "مِنْشَفَةٌ",
                            "kata_arab" => "مِنْشَفَةٌ",
                            "arti" => "Handuk",
                            "huruf" => array_unique(["مِ","نْ","شَ","فَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 16"
                        ],
                        [
                            "id" => "668",
                            "tema" => "Mufrodat 94",
                            "kata" => "مِعْلاَقٌ",
                            "kata_arab" => "مِعْلاَقٌ",
                            "arti" => "Gantungan",
                            "huruf" => array_unique(["مِ","عْ","لاَ","قٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 16"
                        ],
                        
                    // 669-677
                        [
                            "id" => "669",
                            "tema" => "Mufrodat 95",
                            "kata" => "دَلْوٌ",
                            "kata_arab" => "دَلْوٌ",
                            "arti" => "Ember",
                            "huruf" => array_unique(["دَ","لْ","وٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 16"
                        ],
                        [
                            "id" => "670",
                            "tema" => "Mufrodat 95",
                            "kata" => "مِغْرَفَةٌ",
                            "kata_arab" => "مِغْرَفَةٌ",
                            "arti" => "Gayung",
                            "huruf" => array_unique(["مِ","غْ","رَ","فَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 16"
                        ],
                        [
                            "id" => "671",
                            "tema" => "Mufrodat 95",
                            "kata" => "حَنَفِيَّةٌ",
                            "kata_arab" => "حَنَفِيَّةٌ",
                            "arti" => "Keran",
                            "huruf" => array_unique(["حَ","نَ","فِ","يَّ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 16"
                        ],
                        [
                            "id" => "672",
                            "tema" => "Mufrodat 95",
                            "kata" => "أُنْبُوْبَةٌ",
                            "kata_arab" => "أُنْبُوْبَةٌ",
                            "arti" => "Pipa",
                            "huruf" => array_unique(["أُ","نْ","بُ","وْ","بَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 16"
                        ],
                        [
                            "id" => "673",
                            "tema" => "Mufrodat 95",
                            "kata" => "طُلُنْبَةٌ",
                            "kata_arab" => "طُلُنْبَةٌ",
                            "arti" => "Pompa",
                            "huruf" => array_unique(["طُ","لُ","نْ","بَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 16"
                        ],
                        [
                            "id" => "674",
                            "tema" => "Mufrodat 95",
                            "kata" => "خُرْطُوْمٌ",
                            "kata_arab" => "خُرْطُوْمٌ",
                            "arti" => "Selang",
                            "huruf" => array_unique(["خُ","رْ","طُ","وْ","مٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 16"
                        ],
                        [
                            "id" => "675",
                            "tema" => "Mufrodat 95",
                            "kata" => "مَنْبَعٌ",
                            "kata_arab" => "مَنْبَعٌ",
                            "arti" => "Sumber air",
                            "huruf" => array_unique(["مَ","نْ","بَ","عٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 16"
                        ],
                        [
                            "id" => "676",
                            "tema" => "Mufrodat 95",
                            "kata" => "بِئْرٌ",
                            "kata_arab" => "بِئْرٌ",
                            "arti" => "Sumur",
                            "huruf" => array_unique(["بِ","ئْ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 16"
                        ],
                        [
                            "id" => "677",
                            "tema" => "Mufrodat 95",
                            "kata" => "مِيْزَابٌ",
                            "kata_arab" => "مِيْزَابٌ",
                            "arti" => "Hanger",
                            "huruf" => array_unique(["مِ","يْ","زَ","ا","بٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 16"
                        ],
                        
                    // 678-684
                        [
                            "id" => "678",
                            "tema" => "Mufrodat 96",
                            "kata" => "اِغْتَسَلَ-يَغْتَسِلُ-اِغْتِسَالًا",
                            "kata_arab" => "اِغْتَسَلَ-يَغْتَسِلُ-اِغْتِسَالًا",
                            "arti" => "Mandi",
                            "huruf" => array_unique(["اِ","غْ","تَ","سَ","لَ","-","يَ","غْ","تَ","سِ","لُ","-","اِ","غْ","تِ","سَ","ا","لً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 16"
                        ],
                        [
                            "id" => "679",
                            "tema" => "Mufrodat 96",
                            "kata" => "غَسَلَ-يَغْسِلُ-غَسْلاً",
                            "kata_arab" => "غَسَلَ-يَغْسِلُ-غَسْلاً",
                            "arti" => "Membasuh",
                            "huruf" => array_unique(["غَ","سَ","لَ","-","يَ","غْ","سِ","لُ","-","غَ","سْ","لاً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 16"
                        ],
                        [
                            "id" => "680",
                            "tema" => "Mufrodat 96",
                            "kata" => "سَوَّكَ-يُسَوِّكُ-تَسْوِيْكًا",
                            "kata_arab" => "سَوَّكَ-يُسَوِّكُ-تَسْوِيْكًا",
                            "arti" => "Menyikat gigi",
                            "huruf" => array_unique(["سَ","وَّ","كَ","-","يُ","سَ","وِّ","كُ","-","تَ","سْ","وِ","يْ","كً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 16"
                        ],
                        [
                            "id" => "681",
                            "tema" => "Mufrodat 96",
                            "kata" => "حَفَّ-يَحُفُّ-حَفًّا",
                            "kata_arab" => "حَفَّ-يَحُفُّ-حَفًّا",
                            "arti" => "Menggosok",
                            "huruf" => array_unique(["حَ","فَّ","-","يَ","حُ","فُّ","-","حَ","فًّ","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 16"
                        ],
                        [
                            "id" => "682",
                            "tema" => "Mufrodat 96",
                            "kata" => "طَرَحَ-يَطْرَحُ-طَرْحًا",
                            "kata_arab" => "طَرَحَ-يَطْرَحُ-طَرْحًا",
                            "arti" => "Membuang",
                            "huruf" => array_unique(["طَ","رَ","حَ","-","يَ","طْ","رَ","حُ","-","طَ","رْ","حً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 16"
                        ],
                        [
                            "id" => "683",
                            "tema" => "Mufrodat 96",
                            "kata" => "رَمَى-يَرْمِى-رَمْيًا",
                            "kata_arab" => "رَمَى-يَرْمِى-رَمْيًا",
                            "arti" => "Melempar",
                            "huruf" => array_unique(["رَ","مَ","ى","-","يَ","رْ","مِ","ى","-","رَ","مْ","يً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 16"
                        ],
                        [
                            "id" => "684",
                            "tema" => "Mufrodat 96",
                            "kata" => "وَضَعَ-يَضَعُ-وَضْعًا",
                            "kata_arab" => "وَضَعَ-يَضَعُ-وَضْعًا",
                            "arti" => "Meletakkan",
                            "huruf" => array_unique(["وَ","ضَ","عَ","-","يَ","ضَ","عُ","-","وَ","ضْ","عً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 16"
                        ],
                        
                    // 685-691
                        [
                            "id" => "685",
                            "tema" => "Mufrodat 97",
                            "kata" => "بَالَ-يَبُوْلُ-بَوْلًا",
                            "kata_arab" => "بَالَ-يَبُوْلُ-بَوْلًا",
                            "arti" => "BAK",
                            "huruf" => array_unique(["بَ","ا","لَ","-","يَ","بُ","وْ","لُ","-","بَ","وْ","لً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 16"
                        ],
                        [
                            "id" => "686",
                            "tema" => "Mufrodat 97",
                            "kata" => "تَغَوَّطَ-يَتَغَوَّطُ-تَغَوُّطًا",
                            "kata_arab" => "تَغَوَّطَ-يَتَغَوَّطُ-تَغَوُّطًا",
                            "arti" => "BAB",
                            "huruf" => array_unique(["تَ","غَ","وَّ","طَ","-","يَ","تَ","غَ","وَّ","طُ","-","تَ","غَ","وُّ","طً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 16"
                        ],
                        [
                            "id" => "687",
                            "tema" => "Mufrodat 97",
                            "kata" => "فَتَحَ-يَفْتَحُ-فَتْحًا",
                            "kata_arab" => "فَتَحَ-يَفْتَحُ-فَتْحًا",
                            "arti" => "Membuka",
                            "huruf" => array_unique(["فَ","تَ","حَ","-","يَ","فْ","تَ","حُ","-","فَ","تْ","حً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 16"
                        ],
                        [
                            "id" => "688",
                            "tema" => "Mufrodat 97",
                            "kata" => "غَلَقَ-يَغْلِقُ-غَلْقًا",
                            "kata_arab" => "غَلَقَ-يَغْلِقُ-غَلْقًا",
                            "arti" => "Menutup",
                            "huruf" => array_unique(["غَ","لَ","قَ","-","يَ","غْ","لِ","قُ","-","غَ","لْ","قً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 16"
                        ],
                        [
                            "id" => "689",
                            "tema" => "Mufrodat 97",
                            "kata" => "ضَغَطَ-يَضْغَطُ-ضَغْطًا",
                            "kata_arab" => "ضَغَطَ-يَضْغَطُ-ضَغْطًا",
                            "arti" => "Memeras",
                            "huruf" => array_unique(["ضَ","غَ","طَ","-","يَ","ضْ","غَ","طُ","-","ضَ","غْ","طً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 16"
                        ],
                        [
                            "id" => "690",
                            "tema" => "Mufrodat 97",
                            "kata" => "لَوَّثَ-يُلَوِّثُ-تَلْوِيْثًا",
                            "kata_arab" => "لَوَّثَ-يُلَوِّثُ-تَلْوِيْثًا",
                            "arti" => "Mencemari",
                            "huruf" => array_unique(["لَ","وَّ","ثَ","-","يُ","لَ","وِّ","ثُ","-","تَ","لْ","وِ","يْ","ثً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 16"
                        ],
                        [
                            "id" => "691",
                            "tema" => "Mufrodat 97",
                            "kata" => "سَبَحَ-يَسْبَحُ-سِبَاحَةً",
                            "kata_arab" => "سَبَحَ-يَسْبَحُ-سِبَاحَةً",
                            "arti" => "Berenang",
                            "huruf" => array_unique(["سَ","بَ","حَ","-","يَ","سْ","بَ","حُ","-","سِ","بَ","ا","حَ","ةً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 16"
                        ],

                // per_17
                    // 692-698
                        [
                            "id" => "692",
                            "tema" => "Mufrodat 98",
                            "kata" => "مَدْرَسَةٌ حُكُوْمِيَّةٌ",
                            "kata_arab" => "مَدْرَسَةٌ حُكُوْمِيَّةٌ",
                            "arti" => "Sekolah negeri",
                            "huruf" => array_unique(["مَ","دْ","رَ","سَ","ةٌ","_","حُ","كُ","وْ","مِ","يَّ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 17"
                        ],
                        [
                            "id" => "693",
                            "tema" => "Mufrodat 98",
                            "kata" => "مَدْرَسَةٌ أَهْلِيَّةٌ",
                            "kata_arab" => "مَدْرَسَةٌ أَهْلِيَّةٌ",
                            "arti" => "Sekolah swasta",
                            "huruf" => array_unique(["مَ","دْ","رَ","سَ","ةٌ","_","أَ","هْ","لِ","يَّ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 17"
                        ],
                        [
                            "id" => "694",
                            "tema" => "Mufrodat 98",
                            "kata" => "رَئِيْسُ الْمَدْرَسَةِ",
                            "kata_arab" => "رَئِيْسُ الْمَدْرَسَةِ",
                            "arti" => "Kepala sekolah",
                            "huruf" => array_unique(["رَ","ئِ","يْ","سُ","_","الْ","مَ","دْ","رَ","سَ","ةِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 17"
                        ],
                        [
                            "id" => "695",
                            "tema" => "Mufrodat 98",
                            "kata" => "وَلِيُّ الْفَصْلِ",
                            "kata_arab" => "وَلِيُّ الْفَصْلِ",
                            "arti" => "Wali kelas",
                            "huruf" => array_unique(["وَ","لِ","يُّ","_","الْ","فَ","صْ","لِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 17"
                        ],
                        [
                            "id" => "696",
                            "tema" => "Mufrodat 98",
                            "kata" => "وَلِيُّ الطَّالِبِ",
                            "kata_arab" => "وَلِيُّ الطَّالِبِ",
                            "arti" => "Wali murid",
                            "huruf" => array_unique(["وَ","لِ","يُّ","_","ال","طَّ","ا","لِ","بِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 17"
                        ],
                        [
                            "id" => "697",
                            "tema" => "Mufrodat 98",
                            "kata" => "فَصْلٌ",
                            "kata_arab" => "فَصْلٌ",
                            "arti" => "Kelas",
                            "huruf" => array_unique(["فَ","صْ","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 17"
                        ],
                        [
                            "id" => "698",
                            "tema" => "Mufrodat 98",
                            "kata" => "مَعْهَدٌ",
                            "kata_arab" => "مَعْهَدٌ",
                            "arti" => "Pondok",
                            "huruf" => array_unique(["مَ","عْ","هَ","دٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 17"
                        ],
                        
                    // 699-705
                        [
                            "id" => "699",
                            "tema" => "Mufrodat 99",
                            "kata" => "إِدَارَةٌ",
                            "kata_arab" => "إِدَارَةٌ",
                            "arti" => "Kantor",
                            "huruf" => array_unique(["إِ","دَ","ا","رَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 17"
                        ],
                        [
                            "id" => "700",
                            "tema" => "Mufrodat 99",
                            "kata" => "عَمُوْدٌ",
                            "kata_arab" => "عَمُوْدٌ",
                            "arti" => "Tiang",
                            "huruf" => array_unique(["عَ","مُ","وْ","دٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 17"
                        ],
                        [
                            "id" => "701",
                            "tema" => "Mufrodat 99",
                            "kata" => "عَلَمٌ",
                            "kata_arab" => "عَلَمٌ",
                            "arti" => "Bendera",
                            "huruf" => array_unique(["عَ","لَ","مٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 17"
                        ],
                        [
                            "id" => "702",
                            "tema" => "Mufrodat 99",
                            "kata" => "مُدَرِّسٌ",
                            "kata_arab" => "مُدَرِّسٌ",
                            "arti" => "Guru (lk)",
                            "huruf" => array_unique(["مُ","دَ","رِّ","سٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 17"
                        ],
                        [
                            "id" => "703",
                            "tema" => "Mufrodat 99",
                            "kata" => "مُدَرِّسَةٌ",
                            "kata_arab" => "مُدَرِّسَةٌ",
                            "arti" => "Guru (pr)",
                            "huruf" => array_unique(["مُ","دَ","رِّ","سَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 17"
                        ],
                        [
                            "id" => "704",
                            "tema" => "Mufrodat 99",
                            "kata" => "تِلْمِيْذٌ",
                            "kata_arab" => "تِلْمِيْذٌ",
                            "arti" => "Siswa",
                            "huruf" => array_unique(["تِ","لْ","مِ","يْ","ذٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 17"
                        ],
                        [
                            "id" => "705",
                            "tema" => "Mufrodat 99",
                            "kata" => "تِلْمِيْذَةٌ",
                            "kata_arab" => "تِلْمِيْذَةٌ",
                            "arti" => "Siswi",
                            "huruf" => array_unique(["تِ","لْ","مِ","يْ","ذَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 17"
                        ],
                        
                    // 706-712
                        [
                            "id" => "706",
                            "tema" => "Mufrodat 100",
                            "kata" => "نُقُوْدٌ",
                            "kata_arab" => "نُقُوْدٌ",
                            "arti" => "Uang",
                            "huruf" => array_unique(["نُ","قُ","وْ","دٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 17"
                        ],
                        [
                            "id" => "707",
                            "tema" => "Mufrodat 100",
                            "kata" => "مَصْرُوْفُ الْجَيْبِ",
                            "kata_arab" => "مَصْرُوْفُ الْجَيْبِ",
                            "arti" => "Uang saku",
                            "huruf" => array_unique(["مَ","صْ","رُ","وْ","فُ","_","الْ","جَ","يْ","بِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 17"
                        ],
                        [
                            "id" => "708",
                            "tema" => "Mufrodat 100",
                            "kata" => "طَالِبٌ جَامِعِيٌّ",
                            "kata_arab" => "طَالِبٌ جَامِعِيٌّ",
                            "arti" => "Mahasiswa",
                            "huruf" => array_unique(["طَ","ا","لِ","بٌ","_","جَ","ا","مِ","عِ","يٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 17"
                        ],
                        [
                            "id" => "709",
                            "tema" => "Mufrodat 100",
                            "kata" => "مِنْحَةٌ دِرَاسِيَّةٌ",
                            "kata_arab" => "مِنْحَةٌ دِرَاسِيَّةٌ",
                            "arti" => "Beasiswa",
                            "huruf" => array_unique(["مِ","نْ","حَ","ةٌ","_","دِ","رَ","ا","سِ","يَّ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 17"
                        ],
                        [
                            "id" => "710",
                            "tema" => "Mufrodat 100",
                            "kata" => "مُحَاضِرٌ",
                            "kata_arab" => "مُحَاضِرٌ",
                            "arti" => "Dosen",
                            "huruf" => array_unique(["مُ","حَ","ا","ضِ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 17"
                        ],
                        [
                            "id" => "711",
                            "tema" => "Mufrodat 100",
                            "kata" => "كُلِّيَّةٌ",
                            "kata_arab" => "كُلِّيَّةٌ",
                            "arti" => "Fakultas",
                            "huruf" => array_unique(["كُ","لِّ","يَّ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 17"
                        ],
                        [
                            "id" => "712",
                            "tema" => "Mufrodat 100",
                            "kata" => "قِسْمٌ",
                            "kata_arab" => "قِسْمٌ",
                            "arti" => "Jurusan",
                            "huruf" => array_unique(["قِ","سْ","مٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 17"
                        ],
                        
                    // 713-719
                        [
                            "id" => "713",
                            "tema" => "Mufrodat 101",
                            "kata" => "سَبُّوْرَةٌ",
                            "kata_arab" => "سَبُّوْرَةٌ",
                            "arti" => "Papan tulis",
                            "huruf" => array_unique(["سَ","بُّ","وْ","رَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 17"
                        ],
                        [
                            "id" => "714",
                            "tema" => "Mufrodat 101",
                            "kata" => "حِبْرٌ",
                            "kata_arab" => "حِبْرٌ",
                            "arti" => "Tinta",
                            "huruf" => array_unique(["حِ","بْ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 17"
                        ],
                        [
                            "id" => "715",
                            "tema" => "Mufrodat 101",
                            "kata" => "قَلَمُ السَّبُّوْرَةِ",
                            "kata_arab" => "قَلَمُ السَّبُّوْرَةِ",
                            "arti" => "Spidol",
                            "huruf" => array_unique(["قَ","لَ","مُ","_","ال","سَّ","بُّ","وْ","رَ","ةِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 17"
                        ],
                        [
                            "id" => "716",
                            "tema" => "Mufrodat 101",
                            "kata" => "كِتَابٌ",
                            "kata_arab" => "كِتَابٌ",
                            "arti" => "Buku",
                            "huruf" => array_unique(["كِ","تَ","ا","بٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 17"
                        ],
                        [
                            "id" => "717",
                            "tema" => "Mufrodat 101",
                            "kata" => "دَفْتَرٌ",
                            "kata_arab" => "دَفْتَرٌ",
                            "arti" => "Buku tulis",
                            "huruf" => array_unique(["دَ","فْ","تَ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 17"
                        ],
                        [
                            "id" => "718",
                            "tema" => "Mufrodat 101",
                            "kata" => "قَلَمٌ",
                            "kata_arab" => "قَلَمٌ",
                            "arti" => "Bulpoin",
                            "huruf" => array_unique(["قَ","لَ","مٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 17"
                        ],
                        [
                            "id" => "719",
                            "tema" => "Mufrodat 101",
                            "kata" => "مِمْسَحَةٌ",
                            "kata_arab" => "مِمْسَحَةٌ",
                            "arti" => "Penghapus",
                            "huruf" => array_unique(["مِ","مْ","سَ","حَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 17"
                        ],
                        
                    // 720-726
                        [
                            "id" => "720",
                            "tema" => "Mufrodat 102",
                            "kata" => "قَلَمُ الرَّصَاصِ",
                            "kata_arab" => "قَلَمُ الرَّصَاصِ",
                            "arti" => "Pensil",
                            "huruf" => array_unique(["قَ","لَ","مُ","_","ال","رَّ","صَ","ا","صِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 17"
                        ],
                        [
                            "id" => "721",
                            "tema" => "Mufrodat 102",
                            "kata" => "شَهَادَةٌ",
                            "kata_arab" => "شَهَادَةٌ",
                            "arti" => "Sertifikat",
                            "huruf" => array_unique(["شَ","هَ","ا","دَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 17"
                        ],
                        [
                            "id" => "722",
                            "tema" => "Mufrodat 102",
                            "kata" => "كُرَّةٌ أَرْضِيَّةٌ",
                            "kata_arab" => "كُرَّةٌ أَرْضِيَّةٌ",
                            "arti" => "Globe",
                            "huruf" => array_unique(["كُ","رَّ","ةٌ","_","أَ","رْ","ضِ","يَّ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 17"
                        ],
                        [
                            "id" => "723",
                            "tema" => "Mufrodat 102",
                            "kata" => "خَرِيْطَةٌ",
                            "kata_arab" => "خَرِيْطَةٌ",
                            "arti" => "Peta",
                            "huruf" => array_unique(["خَ","رِ","يْ","طَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 17"
                        ],
                        [
                            "id" => "724",
                            "tema" => "Mufrodat 102",
                            "kata" => "رَوْضَةُ الْأَطْفَالِ",
                            "kata_arab" => "رَوْضَةُ الْأَطْفَالِ",
                            "arti" => "Taman anak-anak",
                            "huruf" => array_unique(["رَ","وْ","ضَ","ةُ","_","الْ","أَ","طْ","فَ","ا","لِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 17"
                        ],
                        [
                            "id" => "725",
                            "tema" => "Mufrodat 102",
                            "kata" => "مَدْرَسَةٌ إِبْتِدَائِيَّةٌ",
                            "kata_arab" => "مَدْرَسَةٌ إِبْتِدَائِيَّةٌ",
                            "arti" => "Sekolah dasar",
                            "huruf" => array_unique(["مَ","دْ","رَ","سَ","ةٌ","_","إِ","بْ","تِ","دَ","ا","ئِ","يَّ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 17"
                        ],
                        [
                            "id" => "726",
                            "tema" => "Mufrodat 102",
                            "kata" => "مَدْرَسَةٌ مُتَوَسِّطَةٌ",
                            "kata_arab" => "مَدْرَسَةٌ مُتَوَسِّطَةٌ",
                            "arti" => "SMP",
                            "huruf" => array_unique(["مَ","دْ","رَ","سَ","ةٌ","_","مُ","تَ","وَ","سِّ","طَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 17"
                        ],

                // per_18
                    // 727-732
                        [
                            "id" => "727",
                            "tema" => "Mufrodat 103",
                            "kata" => "مَدْرَسَةٌ ثَانَوِيَّةٌ",
                            "kata_arab" => "مَدْرَسَةٌ ثَانَوِيَّةٌ",
                            "arti" => "SMA",
                            "huruf" => array_unique(["مَ","دْ","رَ","سَ","ةٌ","_","ثَ","ا","نَ","وِ","يَّ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "728",
                            "tema" => "Mufrodat 103",
                            "kata" => "جَامِعَةٌ",
                            "kata_arab" => "جَامِعَةٌ",
                            "arti" => "Universitas",
                            "huruf" => array_unique(["جَ","ا","مِ","عَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "729",
                            "tema" => "Mufrodat 103",
                            "kata" => "مَكْتَبَةٌ",
                            "kata_arab" => "مَكْتَبَةٌ",
                            "arti" => "Perpustakaan",
                            "huruf" => array_unique(["مَ","كْ","تَ","بَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "730",
                            "tema" => "Mufrodat 103",
                            "kata" => "صُوْرَةٌ",
                            "kata_arab" => "صُوْرَةٌ",
                            "arti" => "Gambar",
                            "huruf" => array_unique(["صُ","وْ","رَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "731",
                            "tema" => "Mufrodat 103",
                            "kata" => "خَتْمٌ",
                            "kata_arab" => "خَتْمٌ",
                            "arti" => "Stempel",
                            "huruf" => array_unique(["خَ","تْ","مٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "732",
                            "tema" => "Mufrodat 103",
                            "kata" => "تَوْقِيْعٌ",
                            "kata_arab" => "تَوْقِيْعٌ",
                            "arti" => "Tanda tangan",
                            "huruf" => array_unique(["تَ","وْ","قِ","يْ","عٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        
                    // 733-738
                        [
                            "id" => "733",
                            "tema" => "Mufrodat 104",
                            "kata" => "نَشْرَةٌ",
                            "kata_arab" => "نَشْرَةٌ",
                            "arti" => "Brosur",
                            "huruf" => array_unique(["نَ","شْ","رَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "734",
                            "tema" => "Mufrodat 104",
                            "kata" => "نَتِيْجَةٌ",
                            "kata_arab" => "نَتِيْجَةٌ",
                            "arti" => "Nilai",
                            "huruf" => array_unique(["نَ","تِ","يْ","جَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "735",
                            "tema" => "Mufrodat 104",
                            "kata" => "إِمْتِحَانٌ",
                            "kata_arab" => "إِمْتِحَانٌ",
                            "arti" => "Ulangan",
                            "huruf" => array_unique(["إِ","مْ","تِ","حَ","ا","نٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "736",
                            "tema" => "Mufrodat 104",
                            "kata" => "إِمْتِحَانٌ تَحْرِيْرِيٌّ",
                            "kata_arab" => "إِمْتِحَانٌ تَحْرِيْرِيٌّ",
                            "arti" => "Ujian tulis",
                            "huruf" => array_unique(["إِ","مْ","تِ","حَ","ا","نٌ","_","تَ","حْ","رِ","يْ","رِ","يٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "737",
                            "tema" => "Mufrodat 104",
                            "kata" => "إِمْتِحَانٌ شَفَوِيٌّ",
                            "kata_arab" => "إِمْتِحَانٌ شَفَوِيٌّ",
                            "arti" => "Ujian lisan",
                            "huruf" => array_unique(["إِ","مْ","تِ","حَ","ا","نٌ","_","شَ","فَ","وِ","يٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "738",
                            "tema" => "Mufrodat 104",
                            "kata" => "لَجْنَةُ الْإِمْتِحَانِ",
                            "kata_arab" => "لَجْنَةُ الْإِمْتِحَانِ",
                            "arti" => "Panitia ujian",
                            "huruf" => array_unique(["لَ","جْ","نَ","ةُ","_","الْ","إِ","مْ","تِ","حَ","ا","نِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        
                    // 739-745
                        [
                            "id" => "739",
                            "tema" => "Mufrodat 105",
                            "kata" => "ذَهَبَ-يَذْهَبُ-ذَهَابًا",
                            "kata_arab" => "ذَهَبَ-يَذْهَبُ-ذَهَابًا",
                            "arti" => "Pergi",
                            "huruf" => array_unique(["ذَ","هَ","بَ","-","يَ","ذْ","هَ","بُ","-","ذَ","هَ","ا","بً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "740",
                            "tema" => "Mufrodat 105",
                            "kata" => "رَجَعَ-يَرْجِعُ-رُجُوْعًا",
                            "kata_arab" => "رَجَعَ-يَرْجِعُ-رُجُوْعًا",
                            "arti" => "Pulang",
                            "huruf" => array_unique(["رَ","جَ","عَ","-","يَ","رْ","جِ","عُ","-","رُ","جُ","وْ","عً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "741",
                            "tema" => "Mufrodat 105",
                            "kata" => "عَلَّمَ-يُعَلِّمُ-تَعْلِيْمًا",
                            "kata_arab" => "عَلَّمَ-يُعَلِّمُ-تَعْلِيْمًا",
                            "arti" => "Mengajari",
                            "huruf" => array_unique(["عَ","لَّ","مَ","-","يُ","عَ","لِّ","مُ","-","تَ","عْ","لِ","يْ","مً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "742",
                            "tema" => "Mufrodat 105",
                            "kata" => "تَعَلَّمَ-يَتَعَلَّمُ-تَعَلُّمًا",
                            "kata_arab" => "تَعَلَّمَ-يَتَعَلَّمُ-تَعَلُّمًا",
                            "arti" => "Belajar",
                            "huruf" => array_unique(["تَ","عَ","لَّ","مَ","-","يَ","تَ","عَ","لَّ","مُ","-","تَ","عَ","لُّ","مً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "743",
                            "tema" => "Mufrodat 105",
                            "kata" => "أَيَّدَ-يُؤَيِّدُ-تَأْيِيْدًا",
                            "kata_arab" => "أَيَّدَ-يُؤَيِّدُ-تَأْيِيْدًا",
                            "arti" => "Meyakinkan",
                            "huruf" => array_unique(["أَ","يَّ","دَ","-","يُ","ؤَ","يِّ","دُ","-","تَ","أْ","يِ","يْ","دً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "744",
                            "tema" => "Mufrodat 105",
                            "kata" => "مَثَّلَ-يُمَثِّلُ-تَمْثِيْلًا",
                            "kata_arab" => "مَثَّلَ-يُمَثِّلُ-تَمْثِيْلًا",
                            "arti" => "Menirukan",
                            "huruf" => array_unique(["مَ","ثَّ","لَ","-","يُ","مَ","ثِّ","لُ","-","تَ","مْ","ثِ","يْ","لً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "745",
                            "tema" => "Mufrodat 105",
                            "kata" => "مَرَّنَ-يُمَرِّنُ-تَمْرِيْنًا",
                            "kata_arab" => "مَرَّنَ-يُمَرِّنُ-تَمْرِيْنًا",
                            "arti" => "Melatih",
                            "huruf" => array_unique(["مَ","رَّ","نَ","-","يُ","مَ","رِّ","نُ","-","تَ","مْ","رِ","يْ","نً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        
                    // 746-751
                        [
                            "id" => "746",
                            "tema" => "Mufrodat 106",
                            "kata" => "اِمْتَحَنَ-يَمْتَحِنُ-اِمْتِحَانًا",
                            "kata_arab" => "اِمْتَحَنَ-يَمْتَحِنُ-اِمْتِحَانًا",
                            "arti" => "Ujian",
                            "huruf" => array_unique(["اِ","مْ","تَ","حَ","نَ","-","يَ","مْ","تَ","حِ","نُ","-","اِ","مْ","تِ","حَ","ا","نً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "747",
                            "tema" => "Mufrodat 106",
                            "kata" => "اَفَادَ-يُفِيْدُ-إِفَادَةً",
                            "kata_arab" => "اَفَادَ-يُفِيْدُ-إِفَادَةً",
                            "arti" => "Memberi manfaat",
                            "huruf" => array_unique(["اَ","فَ","ا","دَ","-","يُ","فِ","يْ","دُ","-","إِ","فَ","ا","دَ","ةً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "748",
                            "tema" => "Mufrodat 106",
                            "kata" => "عَمِلَ-يَعْمَلُ-عَمَلاً",
                            "kata_arab" => "عَمِلَ-يَعْمَلُ-عَمَلاً",
                            "arti" => "Melakukan",
                            "huruf" => array_unique(["عَ","مِ","لَ","-","يَ","عْ","مَ","لُ","-","عَ","مَ","لاً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "749",
                            "tema" => "Mufrodat 106",
                            "kata" => "فَهِمَ-يَفْهَمُ-فَهْمًا",
                            "kata_arab" => "فَهِمَ-يَفْهَمُ-فَهْمًا",
                            "arti" => "Memahami",
                            "huruf" => array_unique(["فَ","هِ","مَ","-","يَ","فْ","هَ","مُ","-","فَ","هْ","مً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "750",
                            "tema" => "Mufrodat 106",
                            "kata" => "عَلِمَ-يَعْلَمُ-عِلْمًا",
                            "kata_arab" => "عَلِمَ-يَعْلَمُ-عِلْمًا",
                            "arti" => "Mengetahui",
                            "huruf" => array_unique(["عَ","لِ","مَ","-","يَ","عْ","لَ","مُ","-","عِ","لْ","مً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "751",
                            "tema" => "Mufrodat 106",
                            "kata" => "عَرَفَ-يَعْرِفُ-مَعْرِفَةً",
                            "kata_arab" => "عَرَفَ-يَعْرِفُ-مَعْرِفَةً",
                            "arti" => "Mengetahui",
                            "huruf" => array_unique(["عَ","رَ","فَ","-","يَ","عْ","رِ","فُ","-","مَ","عْ","رِ","فَ","ةً"]),
                            "status" => "off",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        
                    // 752-757
                        [
                            "id" => "752",
                            "tema" => "Mufrodat 107",
                            "kata" => "صَنَعَ-يَصْنَعُ-صِنَاعَةً",
                            "kata_arab" => "صَنَعَ-يَصْنَعُ-صِنَاعَةً",
                            "arti" => "Membuat",
                            "huruf" => array_unique(["صَ","نَ","عَ","-","يَ","صْ","نَ","عُ","-","صِ","نَ","ا","عَ","ةً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "753",
                            "tema" => "Mufrodat 107",
                            "kata" => "جَرَّبَ-يُجَرِّبُ-تَجْرِيْبًا",
                            "kata_arab" => "جَرَّبَ-يُجَرِّبُ-تَجْرِيْبًا",
                            "arti" => "Mencoba",
                            "huruf" => array_unique(["جَ","رَّ","بَ","-","يُ","جَ","رِّ","بُ","-","تَ","جْ","رِ","يْ","بً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "754",
                            "tema" => "Mufrodat 107",
                            "kata" => "فَتَّشَ-يُفَتِّشُ-تَفْتِيْشًا",
                            "kata_arab" => "فَتَّشَ-يُفَتِّشُ-تَفْتِيْشًا",
                            "arti" => "Memeriksa",
                            "huruf" => array_unique(["فَ","تَّ","شَ","-","يُ","فَ","تِّ","شُ","-","تَ","فْ","تِ","يْ","شً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "755",
                            "tema" => "Mufrodat 107",
                            "kata" => "كَتَبَ-يَكْتُبُ-كِتَابَةً",
                            "kata_arab" => "كَتَبَ-يَكْتُبُ-كِتَابَةً",
                            "arti" => "Menulis",
                            "huruf" => array_unique(["كَ","تَ","بَ","-","يَ","كْ","تُ","بُ","-","كِ","تَ","ا","بَ","ةً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "756",
                            "tema" => "Mufrodat 107",
                            "kata" => "رَسَمَ-يَرْسُمُ-رَسْمًا",
                            "kata_arab" => "رَسَمَ-يَرْسُمُ-رَسْمًا",
                            "arti" => "Menggambar",
                            "huruf" => array_unique(["رَ","سَ","مَ","-","يَ","رْ","سُ","مُ","-","رَ","سْ","مً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "757",
                            "tema" => "Mufrodat 107",
                            "kata" => "سَجَّلَ-يُسَجِّلُ-تَسْجِيْلًا",
                            "kata_arab" => "سَجَّلَ-يُسَجِّلُ-تَسْجِيْلًا",
                            "arti" => "Mendaftar",
                            "huruf" => array_unique(["سَ","جَّ","لَ","-","يُ","سَ","جِّ","لُ","-","تَ","سْ","جِ","يْ","لً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        
                    // 758-765
                        [
                            "id" => "758",
                            "tema" => "Mufrodat 108",
                            "kata" => "دَرَّاجَةٌ",
                            "kata_arab" => "دَرَّاجَةٌ",
                            "arti" => "Sepeda",
                            "huruf" => array_unique(["دَ","رَّ","ا","جَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "759",
                            "tema" => "Mufrodat 108",
                            "kata" => "دَرَّاجَةٌ نَارِيَّةٌ",
                            "kata_arab" => "دَرَّاجَةٌ نَارِيَّةٌ",
                            "arti" => "Sepeda Motor",
                            "huruf" => array_unique(["دَ","رَّ","ا","جَ","ةٌ","_","نَ","ا","رِ","يَّ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "760",
                            "tema" => "Mufrodat 108",
                            "kata" => "سَيَّارَةٌ",
                            "kata_arab" => "سَيَّارَةٌ",
                            "arti" => "Mobil",
                            "huruf" => array_unique(["سَ","يَّ","ا","رَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "761",
                            "tema" => "Mufrodat 108",
                            "kata" => "سَيَّارَةُ السِّبَاقِ",
                            "kata_arab" => "سَيَّارَةُ السِّبَاقِ",
                            "arti" => "Mobil balap",
                            "huruf" => array_unique(["سَ","يَّ","ا","رَ","ةُ","_","ال","سِّ","بَ","ا","قِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "762",
                            "tema" => "Mufrodat 108",
                            "kata" => "سَيَّارَةُ الرُّكَّابِ",
                            "kata_arab" => "سَيَّارَةُ الرُّكَّابِ",
                            "arti" => "Mobil umum",
                            "huruf" => array_unique(["سَ","يَّ","ا","رَ","ةُ","_","ال","رُّ","كَّ","ا","بِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "763",
                            "tema" => "Mufrodat 108",
                            "kata" => "حَافِلَةٌ",
                            "kata_arab" => "حَافِلَةٌ",
                            "arti" => "Bis",
                            "huruf" => array_unique(["حَ","ا","فِ","لَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "764",
                            "tema" => "Mufrodat 108",
                            "kata" => "شَاحِنَةٌ",
                            "kata_arab" => "شَاحِنَةٌ",
                            "arti" => "Truk",
                            "huruf" => array_unique(["شَ","ا","حِ","نَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "765",
                            "tema" => "Mufrodat 108",
                            "kata" => "بِتْشَا",
                            "kata_arab" => "بِتْشَا",
                            "arti" => "Becak",
                            "huruf" => array_unique(["بِ","تْ","شَ","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        
                    // 766-773
                        [
                            "id" => "766",
                            "tema" => "Mufrodat 109",
                            "kata" => "عَرَبَةٌ",
                            "kata_arab" => "عَرَبَةٌ",
                            "arti" => "Gerobak",
                            "huruf" => array_unique(["عَ","رَ","بَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "767",
                            "tema" => "Mufrodat 109",
                            "kata" => "بَاخِرَةٌ",
                            "kata_arab" => "بَاخِرَةٌ",
                            "arti" => "Kapal uap",
                            "huruf" => array_unique(["بَ","ا","خِ","رَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "768",
                            "tema" => "Mufrodat 109",
                            "kata" => "سَفِيْنَةٌ",
                            "kata_arab" => "سَفِيْنَةٌ",
                            "arti" => "Kapal",
                            "huruf" => array_unique(["سَ","فِ","يْ","نَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "769",
                            "tema" => "Mufrodat 109",
                            "kata" => "سَفِيْنَةٌ شِرَاعِيَّةٌ",
                            "kata_arab" => "سَفِيْنَةٌ شِرَاعِيَّةٌ",
                            "arti" => "Perahu layar",
                            "huruf" => array_unique(["سَ","فِ","يْ","نَ","ةٌ","_","شِ","رَ","ا","عِ","يَّ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "770",
                            "tema" => "Mufrodat 109",
                            "kata" => "تَكْسِى",
                            "kata_arab" => "تَكْسِى",
                            "arti" => "Taksi",
                            "huruf" => array_unique(["تَ","كْ","سِ","ى"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "771",
                            "tema" => "Mufrodat 109",
                            "kata" => "قِطَارٌ",
                            "kata_arab" => "قِطَارٌ",
                            "arti" => "Kereta api",
                            "huruf" => array_unique(["قِ","طَ","ا","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "772",
                            "tema" => "Mufrodat 109",
                            "kata" => "قَاطِرَةٌ",
                            "kata_arab" => "قَاطِرَةٌ",
                            "arti" => "Lokomotif",
                            "huruf" => array_unique(["قَ","ا","طِ","رَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "773",
                            "tema" => "Mufrodat 109",
                            "kata" => "طَائِرَةٌ",
                            "kata_arab" => "طَائِرَةٌ",
                            "arti" => "Pesawat",
                            "huruf" => array_unique(["طَ","ا","ئِ","رَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        
                    // 774-781
                        [
                            "id" => "774",
                            "tema" => "Mufrodat 110",
                            "kata" => "دَبَّابَةٌ",
                            "kata_arab" => "دَبَّابَةٌ",
                            "arti" => "Tank",
                            "huruf" => array_unique(["دَ","بَّ","ا","بَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "775",
                            "tema" => "Mufrodat 110",
                            "kata" => "زَوْرَقٌ",
                            "kata_arab" => "زَوْرَقٌ",
                            "arti" => "Sampan",
                            "huruf" => array_unique(["زَ","وْ","رَ","قٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "776",
                            "tema" => "Mufrodat 110",
                            "kata" => "مِقْوَدٌ",
                            "kata_arab" => "مِقْوَدٌ",
                            "arti" => "Setir",
                            "huruf" => array_unique(["مِ","قْ","وَ","دٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "777",
                            "tema" => "Mufrodat 110",
                            "kata" => "فَرْمَلَةٌ",
                            "kata_arab" => "فَرْمَلَةٌ",
                            "arti" => "Rem",
                            "huruf" => array_unique(["فَ","رْ","مَ","لَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "778",
                            "tema" => "Mufrodat 110",
                            "kata" => "عَجَلَةٌ",
                            "kata_arab" => "عَجَلَةٌ",
                            "arti" => "Roda",
                            "huruf" => array_unique(["عَ","جَ","لَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "779",
                            "tema" => "Mufrodat 110",
                            "kata" => "بِنْزِيْنٌ",
                            "kata_arab" => "بِنْزِيْنٌ",
                            "arti" => "Bensin",
                            "huruf" => array_unique(["بِ","نْ","زِ","يْ","نٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "780",
                            "tema" => "Mufrodat 110",
                            "kata" => "إِشَارَةُ الْمُرُوْرِ",
                            "kata_arab" => "إِشَارَةُ الْمُرُوْرِ",
                            "arti" => "Lampu lalu lintas",
                            "huruf" => array_unique(["إِ","شَ","ا","رَ","ةُ","_","الْ","مُ","رُ","وْ","رِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "781",
                            "tema" => "Mufrodat 110",
                            "kata" => "تَذْكِرَةٌ",
                            "kata_arab" => "تَذْكِرَةٌ",
                            "arti" => "Tiket",
                            "huruf" => array_unique(["تَ","ذْ","كِ","رَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        
                    // 782-789
                        [
                            "id" => "782",
                            "tema" => "Mufrodat 111",
                            "kata" => "تَأْشِيْرَةٌ",
                            "kata_arab" => "تَأْشِيْرَةٌ",
                            "arti" => "Visa",
                            "huruf" => array_unique(["تَ","أْ","شِ","يْ","رَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "783",
                            "tema" => "Mufrodat 111",
                            "kata" => "جَوَازُ السَّفَرِ",
                            "kata_arab" => "جَوَازُ السَّفَرِ",
                            "arti" => "Paspor",
                            "huruf" => array_unique(["جَ","وَ","ا","زُ","_","ال","سَّ","فَ","رِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "784",
                            "tema" => "Mufrodat 111",
                            "kata" => "أُجْرَةٌ",
                            "kata_arab" => "أُجْرَةٌ",
                            "arti" => "Tarif",
                            "huruf" => array_unique(["أُ","جْ","رَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "785",
                            "tema" => "Mufrodat 111",
                            "kata" => "دُوَارُ الْبَرِّ",
                            "kata_arab" => "دُوَارُ الْبَرِّ",
                            "arti" => "Mabuk darat",
                            "huruf" => array_unique(["دُ","وَ","ا","رُ","_","الْ","بَ","رِّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "786",
                            "tema" => "Mufrodat 111",
                            "kata" => "دُوَارُ الْبَحْرِ",
                            "kata_arab" => "دُوَارُ الْبَحْرِ",
                            "arti" => "Mabuk laut",
                            "huruf" => array_unique(["دُ","وَ","ا","رُ","_","الْ","بَ","حْ","رِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "787",
                            "tema" => "Mufrodat 111",
                            "kata" => "هَدَايَا السَّفَرِ",
                            "kata_arab" => "هَدَايَا السَّفَرِ",
                            "arti" => "Oleh-oleh",
                            "huruf" => array_unique(["هَ","دَ","ا","يَ","ا","_","ال","سَّ","فَ","رِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "788",
                            "tema" => "Mufrodat 111",
                            "kata" => "مَصَارِيْفُ السَّفَرِ",
                            "kata_arab" => "مَصَارِيْفُ السَّفَرِ",
                            "arti" => "Biaya perjalanan",
                            "huruf" => array_unique(["مَ","صَ","ا","رِ","يْ","فُ","_","ال","سَّ","فَ","رِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        [
                            "id" => "789",
                            "tema" => "Mufrodat 111",
                            "kata" => "مَسَافَةُ السَّفَرِ",
                            "kata_arab" => "مَسَافَةُ السَّفَرِ",
                            "arti" => "Jarak perjalanan",
                            "huruf" => array_unique(["مَ","سَ","ا","فَ","ةُ","_","ال","سَّ","فَ","رِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 18"
                        ],
                        
                // per_19
                    // 790-794
                        [
                            "id" => "790",
                            "tema" => "Mufrodat 112",
                            "kata" => "قَادَ-يَقُودُ-قِيَادَةً",
                            "kata_arab" => "قَادَ-يَقُودُ-قِيَادَةً",
                            "arti" => "Menyetir",
                            "huruf" => array_unique(["قَ","ا","دَ","-","يَ","قُ","و","دُ","-","قِ","يَ","ا","دَ","ةً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "791",
                            "tema" => "Mufrodat 112",
                            "kata" => "رَكِبَ-يَرْكَبُ-رُكُوْبًا",
                            "kata_arab" => "رَكِبَ-يَرْكَبُ-رُكُوْبًا",
                            "arti" => "Mengendarai",
                            "huruf" => array_unique(["رَ","كِ","بَ","-","يَ","رْ","كَ","بُ","-","رُ","كُ","وْ","بً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "792",
                            "tema" => "Mufrodat 112",
                            "kata" => "رَدِفَ-يَرْدَفُ-رَدْفًا",
                            "kata_arab" => "رَدِفَ-يَرْدَفُ-رَدْفًا",
                            "arti" => "Membonceng",
                            "huruf" => array_unique(["رَ","دِ","فَ","-","يَ","رْ","دَ","فُ","-","رَ","دْ","فً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "793",
                            "tema" => "Mufrodat 112",
                            "kata" => "فَرْمَلَ-يُفَرْمِلُ-فَرْمَلَةً",
                            "kata_arab" => "فَرْمَلَ-يُفَرْمِلُ-فَرْمَلَةً",
                            "arti" => "Mengerem",
                            "huruf" => array_unique(["فَ","رْ","مَ","لَ","-","يُ","فَ","رْ","مِ","لُ","-","فَ","رْ","مَ","لَ","ةً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "794",
                            "tema" => "Mufrodat 112",
                            "kata" => "تَوَقَّفَ-يَتَوَقَّفُ-تَوَقُّفًا",
                            "kata_arab" => "تَوَقَّفَ-يَتَوَقَّفُ-تَوَقُّفًا",
                            "arti" => "Berhenti",
                            "huruf" => array_unique(["تَ","وَ","قَّ","فَ","-","يَ","تَ","وَ","قَّ","فُ","-","تَ","وَ","قُّ","فً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        
                    // 795-900
                        [
                            "id" => "795",
                            "tema" => "Mufrodat 113",
                            "kata" => "طَبِيْبٌ",
                            "kata_arab" => "طَبِيْبٌ",
                            "arti" => "Dokter (lk)",
                            "huruf" => array_unique(["طَ","بِ","يْ","بٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "796",
                            "tema" => "Mufrodat 113",
                            "kata" => "طَبِيْبَةٌ",
                            "kata_arab" => "طَبِيْبَةٌ",
                            "arti" => "Dokter (pr)",
                            "huruf" => array_unique(["طَ","بِ","يْ","بَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "797",
                            "tema" => "Mufrodat 113",
                            "kata" => "مُمَرِّضٌ",
                            "kata_arab" => "مُمَرِّضٌ",
                            "arti" => "Perawat",
                            "huruf" => array_unique(["مُ","مَ","رِّ","ضٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "798",
                            "tema" => "Mufrodat 113",
                            "kata" => "مَرِيْضٌ",
                            "kata_arab" => "مَرِيْضٌ",
                            "arti" => "Pasien",
                            "huruf" => array_unique(["مَ","رِ","يْ","ضٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "799",
                            "tema" => "Mufrodat 113",
                            "kata" => "طَبِيْبٌ اِخْتِصَاصِيٌّ",
                            "kata_arab" => "طَبِيْبٌ اِخْتِصَاصِيٌّ",
                            "arti" => "Dokter speasialis",
                            "huruf" => array_unique(["طَ","بِ","يْ","بٌ","_","اِ","خْ","تِ","صَ","ا","صِ","يٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "800",
                            "tema" => "Mufrodat 113",
                            "kata" => "طَبِيْبُ الْأَسْنَانِ",
                            "kata_arab" => "طَبِيْبُ الْأَسْنَانِ",
                            "arti" => "Dokter gigi",
                            "huruf" => array_unique(["طَ","بِ","يْ","بُ","_","الْ","أَ","سْ","نَ","ا","نِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        
                    // 801-806
                        [
                            "id" => "801",
                            "tema" => "Mufrodat 114",
                            "kata" => "طَبِيْبُ الْجَرَاحِ",
                            "kata_arab" => "طَبِيْبُ الْجَرَاحِ",
                            "arti" => "Dokter Bedah",
                            "huruf" => array_unique(["طَ","بِ","يْ","بُ","_","الْ","جَ","رَ","ا","حِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "802",
                            "tema" => "Mufrodat 114",
                            "kata" => "طَبِيْبٌ بَيْطَرِيٌّ",
                            "kata_arab" => "طَبِيْبٌ بَيْطَرِيٌّ",
                            "arti" => "Dokter hewan",
                            "huruf" => array_unique(["طَ","بِ","يْ","بٌ","_","بَ","يْ","طَ","رِ","يٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "803",
                            "tema" => "Mufrodat 114",
                            "kata" => "دَوَاءٌ",
                            "kata_arab" => "دَوَاءٌ",
                            "arti" => "Obat",
                            "huruf" => array_unique(["دَ","وَ","ا","ءٌ","دَ","ا","ءٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "804",
                            "tema" => "Mufrodat 114",
                            "kata" => "دَاءٌ",
                            "kata_arab" => "دَاءٌ",
                            "arti" => "Penyebab",
                            "huruf" => array_unique(["دَ","وَ","ا","ءٌ","دَ","ا","ءٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "805",
                            "tema" => "Mufrodat 114",
                            "kata" => "سَيَّارَةُ الْإِسْعَافِ",
                            "kata_arab" => "سَيَّارَةُ الْإِسْعَافِ",
                            "arti" => "Mobil Ambulan",
                            "huruf" => array_unique(["سَ","يَّ","ا","رَ","ةُ","_","الْ","إِ","سْ","عَ","ا","فِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "806",
                            "tema" => "Mufrodat 114",
                            "kata" => "مِيْزَانُ الْحَرَارَةِ",
                            "kata_arab" => "مِيْزَانُ الْحَرَارَةِ",
                            "arti" => "Termometer",
                            "huruf" => array_unique(["مِ","يْ","زَ","ا","نُ","_","الْ","حَ","رَ","ا","رَ","ةِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        
                    // 807-814
                        [
                            "id" => "807",
                            "tema" => "Mufrodat 115",
                            "kata" => "كَلْبٌ",
                            "kata_arab" => "كَلْبٌ",
                            "arti" => "Anjing",
                            "huruf" => array_unique(["قِ","طٌّ","كَ","لْ","بٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "808",
                            "tema" => "Mufrodat 115",
                            "kata" => "قِطٌّ",
                            "kata_arab" => "قِطٌّ",
                            "arti" => "Kucing",
                            "huruf" => array_unique(["قِ","طٌّ","كَ","لْ","بٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "809",
                            "tema" => "Mufrodat 115",
                            "kata" => "أَرْنَبٌ",
                            "kata_arab" => "أَرْنَبٌ",
                            "arti" => "Kelinci",
                            "huruf" => array_unique(["أَ","رْ","نَ","بٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "810",
                            "tema" => "Mufrodat 115",
                            "kata" => "فَأْرٌ",
                            "kata_arab" => "فَأْرٌ",
                            "arti" => "Tikus",
                            "huruf" => array_unique(["فَ","أْ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "811",
                            "tema" => "Mufrodat 115",
                            "kata" => "ثَوْرٌ",
                            "kata_arab" => "ثَوْرٌ",
                            "arti" => "Banteng",
                            "huruf" => array_unique(["ثَ","وْ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "812",
                            "tema" => "Mufrodat 115",
                            "kata" => "خَرُوْفٌ",
                            "kata_arab" => "خَرُوْفٌ",
                            "arti" => "biri-biri",
                            "huruf" => array_unique(["خَ","رُ","وْ","فٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "813",
                            "tema" => "Mufrodat 115",
                            "kata" => "خِنْزِيْرٌ",
                            "kata_arab" => "خِنْزِيْرٌ",
                            "arti" => "Babi",
                            "huruf" => array_unique(["خِ","نْ","زِ","يْ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "814",
                            "tema" => "Mufrodat 115",
                            "kata" => "بَقَرٌ",
                            "kata_arab" => "بَقَرٌ",
                            "arti" => "Sapi",
                            "huruf" => array_unique(["بَ","قَ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        
                    // 815-822
                        [
                            "id" => "815",
                            "tema" => "Mufrodat 116",
                            "kata" => "جَامُوْسٌ",
                            "kata_arab" => "جَامُوْسٌ",
                            "arti" => "Kerbau",
                            "huruf" => array_unique(["جَ","ا","مُ","وْ","سٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "816",
                            "tema" => "Mufrodat 116",
                            "kata" => "حِصَانٌ",
                            "kata_arab" => "حِصَانٌ",
                            "arti" => "Kuda",
                            "huruf" => array_unique(["حِ","صَ","ا","نٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "817",
                            "tema" => "Mufrodat 116",
                            "kata" => "دَجَاجٌ",
                            "kata_arab" => "دَجَاجٌ",
                            "arti" => "Ayam",
                            "huruf" => array_unique(["دَ","جَ","ا","جٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "818",
                            "tema" => "Mufrodat 116",
                            "kata" => "غَنَمٌ",
                            "kata_arab" => "غَنَمٌ",
                            "arti" => "Kambing",
                            "huruf" => array_unique(["غَ","نَ","مٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "819",
                            "tema" => "Mufrodat 116",
                            "kata" => "زَرَافَةٌ",
                            "kata_arab" => "زَرَافَةٌ",
                            "arti" => "Jerapah",
                            "huruf" => array_unique(["زَ","رَ","ا","فَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "820",
                            "tema" => "Mufrodat 116",
                            "kata" => "نَحْلٌ",
                            "kata_arab" => "نَحْلٌ",
                            "arti" => "Lebah",
                            "huruf" => array_unique(["نَ","حْ","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "821",
                            "tema" => "Mufrodat 116",
                            "kata" => "ضِفْدَاعٌ",
                            "kata_arab" => "ضِفْدَاعٌ",
                            "arti" => "Kodok",
                            "huruf" => array_unique(["ضِ","فْ","دَ","ا","عٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "822",
                            "tema" => "Mufrodat 116",
                            "kata" => "قُنْفُذٌ",
                            "kata_arab" => "قُنْفُذٌ",
                            "arti" => "Landak",
                            "huruf" => array_unique(["قُ","نْ","فُ","ذٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        
                    // 823-829
                        [
                            "id" => "823",
                            "tema" => "Mufrodat 117",
                            "kata" => "سَرَطَانُ الْبَحْرِ",
                            "kata_arab" => "سَرَطَانُ الْبَحْرِ",
                            "arti" => "Kepiting laut",
                            "huruf" => array_unique(["سَ","رَ","طَ","ا","نُ","_","الْ","بَ","حْ","رِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "824",
                            "tema" => "Mufrodat 117",
                            "kata" => "كَرْكَدَّانٌ",
                            "kata_arab" => "كَرْكَدَّانٌ",
                            "arti" => "Badak",
                            "huruf" => array_unique(["كَ","رْ","كَ","دَّ","ا","نٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "825",
                            "tema" => "Mufrodat 117",
                            "kata" => "نَـمِرٌ",
                            "kata_arab" => "نَـمِرٌ",
                            "arti" => "Harimau",
                            "huruf" => array_unique(["نَ","مِ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "826",
                            "tema" => "Mufrodat 117",
                            "kata" => "ذِئْبٌ",
                            "kata_arab" => "ذِئْبٌ",
                            "arti" => "Serigala",
                            "huruf" => array_unique(["ذِ","ئْ","بٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "827",
                            "tema" => "Mufrodat 117",
                            "kata" => "سِنْجَابٌ",
                            "kata_arab" => "سِنْجَابٌ",
                            "arti" => "Tupai",
                            "huruf" => array_unique(["سِ","نْ","جَ","ا","بٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "828",
                            "tema" => "Mufrodat 117",
                            "kata" => "أَسَدٌ",
                            "kata_arab" => "أَسَدٌ",
                            "arti" => "Singa",
                            "huruf" => array_unique(["أَ","سَ","دٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "829",
                            "tema" => "Mufrodat 117",
                            "kata" => "فَرَسٌ",
                            "kata_arab" => "فَرَسٌ",
                            "arti" => "Kuda betina",
                            "huruf" => array_unique(["فَ","رَ","سٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        
                    // 830-836
                        [
                            "id" => "830",
                            "tema" => "Mufrodat 118",
                            "kata" => "حِمَارٌ",
                            "kata_arab" => "حِمَارٌ",
                            "arti" => "Keledai",
                            "huruf" => array_unique(["حِ","مَ","ا","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "831",
                            "tema" => "Mufrodat 118",
                            "kata" => "حِمَارُ الزَّرَدِ",
                            "kata_arab" => "حِمَارُ الزَّرَدِ",
                            "arti" => "Zebra",
                            "huruf" => array_unique(["حِ","مَ","ا","رُ","_","ال","زَّ","رَ","دِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "832",
                            "tema" => "Mufrodat 118",
                            "kata" => "ثَعْبَانٌ",
                            "kata_arab" => "ثَعْبَانٌ",
                            "arti" => "Ular",
                            "huruf" => array_unique(["ثَ","عْ","بَ","ا","نٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "833",
                            "tema" => "Mufrodat 118",
                            "kata" => "وَرَلٌ",
                            "kata_arab" => "وَرَلٌ",
                            "arti" => "Kadal",
                            "huruf" => array_unique(["وَ","رَ","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "834",
                            "tema" => "Mufrodat 118",
                            "kata" => "قَمْلٌ",
                            "kata_arab" => "قَمْلٌ",
                            "arti" => "Kutu",
                            "huruf" => array_unique(["قَ","مْ","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "835",
                            "tema" => "Mufrodat 118",
                            "kata" => "ضَبٌّ",
                            "kata_arab" => "ضَبٌّ",
                            "arti" => "Biawak",
                            "huruf" => array_unique(["ضَ","بٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        [
                            "id" => "836",
                            "tema" => "Mufrodat 118",
                            "kata" => "حِرْبَاءٌ",
                            "kata_arab" => "حِرْبَاءٌ",
                            "arti" => "Bunglon",
                            "huruf" => array_unique(["حِ","رْ","بَ","ا","ءٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 19"
                        ],
                        
                // per_20
                    // 837-844
                        [
                            "id" => "837",
                            "tema" => "Mufrodat 119",
                            "kata" => "تِمْسَاحٌ",
                            "kata_arab" => "تِمْسَاحٌ",
                            "arti" => "Buaya",
                            "huruf" => array_unique(["تِ","مْ","سَ","ا","حٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "838",
                            "tema" => "Mufrodat 119",
                            "kata" => "أَنْقَلِيْسُ",
                            "kata_arab" => "أَنْقَلِيْسُ",
                            "arti" => "Belut",
                            "huruf" => array_unique(["أَ","نْ","قَ","لِ","يْ","سُ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "839",
                            "tema" => "Mufrodat 119",
                            "kata" => "دُبٌّ",
                            "kata_arab" => "دُبٌّ",
                            "arti" => "Beruang",
                            "huruf" => array_unique(["دُ","بٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "840",
                            "tema" => "Mufrodat 119",
                            "kata" => "جُدْجُدٌ",
                            "kata_arab" => "جُدْجُدٌ",
                            "arti" => "Jangkrik",
                            "huruf" => array_unique(["جُ","دْ","جُ","دٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "841",
                            "tema" => "Mufrodat 119",
                            "kata" => "وَزَغَةٌ",
                            "kata_arab" => "وَزَغَةٌ",
                            "arti" => "Cecak",
                            "huruf" => array_unique(["وَ","زَ","غَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "842",
                            "tema" => "Mufrodat 119",
                            "kata" => "فِيْلٌ",
                            "kata_arab" => "فِيْلٌ",
                            "arti" => "Gajah",
                            "huruf" => array_unique(["فِ","يْ","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "843",
                            "tema" => "Mufrodat 119",
                            "kata" => "نَمْلٌ",
                            "kata_arab" => "نَمْلٌ",
                            "arti" => "Semut",
                            "huruf" => array_unique(["نَ","مْ","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "844",
                            "tema" => "Mufrodat 119",
                            "kata" => "نَمْلَةٌ بَيْضَاءُ",
                            "kata_arab" => "نَمْلَةٌ بَيْضَاءُ",
                            "arti" => "Rayap",
                            "huruf" => array_unique(["نَ","مْ","لَ","ةٌ","_","بَ","يْ","ضَ","ا","ءُ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        
                    // 845-853
                        [
                            "id" => "845",
                            "tema" => "Mufrodat 120",
                            "kata" => "بَعُوْضَةٌ",
                            "kata_arab" => "بَعُوْضَةٌ",
                            "arti" => "Nyamuk",
                            "huruf" => array_unique(["بَ","عُ","وْ","ضَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "846",
                            "tema" => "Mufrodat 120",
                            "kata" => "خُفَاشٌ",
                            "kata_arab" => "خُفَاشٌ",
                            "arti" => "Kelelawar",
                            "huruf" => array_unique(["خُ","فَ","ا","شٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "847",
                            "tema" => "Mufrodat 120",
                            "kata" => "جَمَلٌ",
                            "kata_arab" => "جَمَلٌ",
                            "arti" => "Unta",
                            "huruf" => array_unique(["جَ","مَ","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "848",
                            "tema" => "Mufrodat 120",
                            "kata" => "غَزَالٌ",
                            "kata_arab" => "غَزَالٌ",
                            "arti" => "Kijang",
                            "huruf" => array_unique(["غَ","زَ","ا","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "849",
                            "tema" => "Mufrodat 120",
                            "kata" => "قِرْدٌ",
                            "kata_arab" => "قِرْدٌ",
                            "arti" => "Monyet",
                            "huruf" => array_unique(["قِ","رْ","دٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "850",
                            "tema" => "Mufrodat 120",
                            "kata" => "إِنْسَانُ اْلغَابِ",
                            "kata_arab" => "إِنْسَانُ اْلغَابِ",
                            "arti" => "Orang utan",
                            "huruf" => array_unique(["إِ","نْ","سَ","ا","نُ","_","اْل","غَ","ا","بِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "851",
                            "tema" => "Mufrodat 120",
                            "kata" => "عَقْرَبٌ",
                            "kata_arab" => "عَقْرَبٌ",
                            "arti" => "Kalajengking",
                            "huruf" => array_unique(["عَ","قْ","رَ","بٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "852",
                            "tema" => "Mufrodat 120",
                            "kata" => "حُنْفَسَاءُ",
                            "kata_arab" => "حُنْفَسَاءُ",
                            "arti" => "Kumbang",
                            "huruf" => array_unique(["حُ","نْ","فَ","سَ","ا","ءُ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "853",
                            "tema" => "Mufrodat 120",
                            "kata" => "جَرَادٌ",
                            "kata_arab" => "جَرَادٌ",
                            "arti" => "Belalang",
                            "huruf" => array_unique(["جَ","رَ","ا","دٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        
                    // 854-860
                        [
                            "id" => "854",
                            "tema" => "Mufrodat 121",
                            "kata" => "تُفَّاحٌ",
                            "kata_arab" => "تُفَّاحٌ",
                            "arti" => "Apel",
                            "huruf" => array_unique(["تُ","فَّ","ا","حٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "855",
                            "tema" => "Mufrodat 121",
                            "kata" => "عِنَبٌ",
                            "kata_arab" => "عِنَبٌ",
                            "arti" => "Anggur",
                            "huruf" => array_unique(["عِ","نَ","بٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "856",
                            "tema" => "Mufrodat 121",
                            "kata" => "كُمِثْرَى",
                            "kata_arab" => "كُمِثْرَى",
                            "arti" => "Pir",
                            "huruf" => array_unique(["كُ","مِ","ثْ","رَ","ى"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "857",
                            "tema" => "Mufrodat 121",
                            "kata" => "مَوْزٌ",
                            "kata_arab" => "مَوْزٌ",
                            "arti" => "Pisang",
                            "huruf" => array_unique(["مَ","وْ","زٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "858",
                            "tema" => "Mufrodat 121",
                            "kata" => "بَابَايَا",
                            "kata_arab" => "بَابَايَا",
                            "arti" => "Pepaya",
                            "huruf" => array_unique(["بَ","ا","بَ","ا","يَ","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "859",
                            "tema" => "Mufrodat 121",
                            "kata" => "مَنْجَا",
                            "kata_arab" => "مَنْجَا",
                            "arti" => "Mangga",
                            "huruf" => array_unique(["مَ","نْ","جَ","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "860",
                            "tema" => "Mufrodat 121",
                            "kata" => "جَوْزُ الْهِنْدِ",
                            "kata_arab" => "جَوْزُ الْهِنْدِ",
                            "arti" => "Asam",
                            "huruf" => array_unique(["جَ","وْ","زُ","_","الْ","هِ","نْ","دِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        
                    // 861-867
                        [
                            "id" => "861",
                            "tema" => "Mufrodat 122",
                            "kata" => "اَفُوْكَادُو",
                            "kata_arab" => "اَفُوْكَادُو",
                            "arti" => "Alpukat",
                            "huruf" => array_unique(["اَ","فُ","وْ","كَ","ا","دُ","و"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "862",
                            "tema" => "Mufrodat 122",
                            "kata" => "شَمَامٌ",
                            "kata_arab" => "شَمَامٌ",
                            "arti" => "Blewa",
                            "huruf" => array_unique(["شَ","مَ","ا","مٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "863",
                            "tema" => "Mufrodat 122",
                            "kata" => "بِطِّيْخٌ",
                            "kata_arab" => "بِطِّيْخٌ",
                            "arti" => "Semangka",
                            "huruf" => array_unique(["بِ","طِّ","يْ","خٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "864",
                            "tema" => "Mufrodat 122",
                            "kata" => "بُرْتُقَالٌ",
                            "kata_arab" => "بُرْتُقَالٌ",
                            "arti" => "Jeruk",
                            "huruf" => array_unique(["بُ","رْ","تُ","قَ","ا","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "865",
                            "tema" => "Mufrodat 122",
                            "kata" => "تَمْرٌ",
                            "kata_arab" => "تَمْرٌ",
                            "arti" => "Kurma",
                            "huruf" => array_unique(["تَ","مْ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "866",
                            "tema" => "Mufrodat 122",
                            "kata" => "فَرَاوِلَةٌ",
                            "kata_arab" => "فَرَاوِلَةٌ",
                            "arti" => "Strobery",
                            "huruf" => array_unique(["فَ","رَ","ا","وِ","لَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "867",
                            "tema" => "Mufrodat 122",
                            "kata" => "رُمَّانٌ",
                            "kata_arab" => "رُمَّانٌ",
                            "arti" => "Delima",
                            "huruf" => array_unique(["رُ","مَّ","ا","نٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        
                    // 868-874
                        [
                            "id" => "868",
                            "tema" => "Mufrodat 123",
                            "kata" => "فَاكِهَةُ التِّنِيْنَ",
                            "kata_arab" => "فَاكِهَةُ التِّنِيْنَ",
                            "arti" => "Buah tin",
                            "huruf" => array_unique(["فَ","ا","كِ","هَ","ةُ","_","ال","تِّ","نِ","يْ","نَ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "869",
                            "tema" => "Mufrodat 123",
                            "kata" => "أَنَانَاسُ",
                            "kata_arab" => "أَنَانَاسُ",
                            "arti" => "Nanas",
                            "huruf" => array_unique(["أَ","نَ","ا","نَ","ا","سُ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "870",
                            "tema" => "Mufrodat 123",
                            "kata" => "رَمْبُوْتَانْ",
                            "kata_arab" => "رَمْبُوْتَانْ",
                            "arti" => "Rambutan",
                            "huruf" => array_unique(["رَ","مْ","بُ","وْ","تَ","ا","نْ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "871",
                            "tema" => "Mufrodat 123",
                            "kata" => "دُوْرِيَانْ",
                            "kata_arab" => "دُوْرِيَانْ",
                            "arti" => "Durian",
                            "huruf" => array_unique(["دُ","وْ","رِ","يَ","ا","نْ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "872",
                            "tema" => "Mufrodat 123",
                            "kata" => "طَمَاطِمُ",
                            "kata_arab" => "طَمَاطِمُ",
                            "arti" => "Tomat",
                            "huruf" => array_unique(["طَ","مَ","ا","طِ","مُ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "873",
                            "tema" => "Mufrodat 123",
                            "kata" => "جَوَّافَةٌ",
                            "kata_arab" => "جَوَّافَةٌ",
                            "arti" => "Jambu",
                            "huruf" => array_unique(["جَ","وَّ","ا","فَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "874",
                            "tema" => "Mufrodat 123",
                            "kata" => "ذُرَّةٌ",
                            "kata_arab" => "ذُرَّةٌ",
                            "arti" => "Jagung",
                            "huruf" => array_unique(["ذُ","رَّ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        
                    // 875-881
                        [
                            "id" => "875",
                            "tema" => "Mufrodat 124",
                            "kata" => "حَصَدَ-يَحْصُدُ-حَصَادًا",
                            "kata_arab" => "حَصَدَ-يَحْصُدُ-حَصَادًا",
                            "arti" => "Memanem",
                            "huruf" => array_unique(["حَ","صَ","دَ","-","يَ","حْ","صُ","دُ","-","حَ","صَ","ا","دً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "876",
                            "tema" => "Mufrodat 124",
                            "kata" => "زَرَعَ-يَزْرَعُ-زَرْعًا / زِرَاعَةً",
                            "kata_arab" => "زَرَعَ-يَزْرَعُ-زَرْعًا",
                            "arti" => "Menanam",
                            "huruf" => array_unique(["زَ","رَ","عَ","-","يَ","زْ","رَ","عُ","-","زَ","رْ","عً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "877",
                            "tema" => "Mufrodat 124",
                            "kata" => "تَحَفَّظَ-يَتَحَفَّظُ-تَحَفُّظًا",
                            "kata_arab" => "تَحَفَّظَ-يَتَحَفَّظُ-تَحَفُّظًا",
                            "arti" => "Merawat",
                            "huruf" => array_unique(["تَ","حَ","فَّ","ظَ","-","يَ","تَ","حَ","فَّ","ظُ","-","تَ","حَ","فُّ","ظً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "878",
                            "tema" => "Mufrodat 124",
                            "kata" => "قَطَفَ-يَقْطِفُ-قَطْفًا",
                            "kata_arab" => "قَطَفَ-يَقْطِفُ-قَطْفًا",
                            "arti" => "Memetik",
                            "huruf" => array_unique(["قَ","طَ","فَ","-","يَ","قْ","طِ","فُ","-","قَ","طْ","فً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "879",
                            "tema" => "Mufrodat 124",
                            "kata" => "سَمَّدَ-يُسَمِّدُ-تَسْمِيْدًا",
                            "kata_arab" => "سَمَّدَ-يُسَمِّدُ-تَسْمِيْدًا",
                            "arti" => "Memupuk",
                            "huruf" => array_unique(["سَ","مَّ","دَ","-","يُ","سَ","مِّ","دُ","-","تَ","سْ","مِ","يْ","دً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "880",
                            "tema" => "Mufrodat 124",
                            "kata" => "عَزَقَ-يَعْزِقُ-عَزْقًا",
                            "kata_arab" => "عَزَقَ-يَعْزِقُ-عَزْقًا",
                            "arti" => "Mencangkul",
                            "huruf" => array_unique(["عَ","زَ","قَ","-","يَ","عْ","زِ","قُ","-","عَ","زْ","قً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],
                        [
                            "id" => "881",
                            "tema" => "Mufrodat 124",
                            "kata" => "حَرَثَ-يَحْرُثُ-حَرْثًا",
                            "kata_arab" => "حَرَثَ-يَحْرُثُ-حَرْثًا",
                            "arti" => "Mengolah",
                            "huruf" => array_unique(["حَ","رَ","ثَ","-","يَ","حْ","رُ","ثُ","-","حَ","رْ","ثً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 20"
                        ],

                // per_21
                    // 882-889
                        [
                            "id" => "882",
                            "tema" => "Mufrodat 125",
                            "kata" => "مَطْبَخٌ",
                            "kata_arab" => "مَطْبَخٌ",
                            "arti" => "Dapur",
                            "huruf" => array_unique(["مَ","طْ","بَ","خٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "883",
                            "tema" => "Mufrodat 125",
                            "kata" => "صَيْدَلِيَّةٌ",
                            "kata_arab" => "صَيْدَلِيَّةٌ",
                            "arti" => "Apotek",
                            "huruf" => array_unique(["صَ","يْ","دَ","لِ","يَّ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "884",
                            "tema" => "Mufrodat 125",
                            "kata" => "بَنْكٌ",
                            "kata_arab" => "بَنْكٌ",
                            "arti" => "Bank",
                            "huruf" => array_unique(["بَ","نْ","كٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "885",
                            "tema" => "Mufrodat 125",
                            "kata" => "مَصْنَعٌ",
                            "kata_arab" => "مَصْنَعٌ",
                            "arti" => "Pabrik",
                            "huruf" => array_unique(["مَ","صْ","نَ","عٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "886",
                            "tema" => "Mufrodat 125",
                            "kata" => "سُوْقٌ",
                            "kata_arab" => "سُوْقٌ",
                            "arti" => "Pasar",
                            "huruf" => array_unique(["سُ","وْ","قٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "887",
                            "tema" => "Mufrodat 125",
                            "kata" => "مَوْلٌ",
                            "kata_arab" => "مَوْلٌ",
                            "arti" => "Mall",
                            "huruf" => array_unique(["مَ","وْ","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "888",
                            "tema" => "Mufrodat 125",
                            "kata" => "مَوْقِفُ السَّيَّارَةِ",
                            "kata_arab" => "مَوْقِفُ السَّيَّارَةِ",
                            "arti" => "Terminal",
                            "huruf" => array_unique(["مَ","وْ","قِ","فُ","_","ال","سَّ","يَّ","ا","رَ","ةِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "889",
                            "tema" => "Mufrodat 125",
                            "kata" => "مَحَطَّةُ الْقِطَارِ",
                            "kata_arab" => "مَحَطَّةُ الْقِطَارِ",
                            "arti" => "Stasiun Kereta",
                            "huruf" => array_unique(["مَ","حَ","طَّ","ةُ","_","الْ","قِ","طَ","ا","رِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        
                    // 890-897
                        [
                            "id" => "890",
                            "tema" => "Mufrodat 126",
                            "kata" => "مَحَطَّةُ الْبِنْزِيْنِ",
                            "kata_arab" => "مَحَطَّةُ الْبِنْزِيْنِ",
                            "arti" => "Pom bensin",
                            "huruf" => array_unique(["مَ","حَ","طَّ","ةُ","_","الْ","بِ","نْ","زِ","يْ","نِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "891",
                            "tema" => "Mufrodat 126",
                            "kata" => "مَطَارٌ",
                            "kata_arab" => "مَطَارٌ",
                            "arti" => "Bandara",
                            "huruf" => array_unique(["مَ","طَ","ا","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "892",
                            "tema" => "Mufrodat 126",
                            "kata" => "مِيْنَاءٌ",
                            "kata_arab" => "مِيْنَاءٌ",
                            "arti" => "Pelabuhan",
                            "huruf" => array_unique(["مِ","يْ","نَ","ا","ءٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "893",
                            "tema" => "Mufrodat 126",
                            "kata" => "مُسْتَوْدَعٌ",
                            "kata_arab" => "مُسْتَوْدَعٌ",
                            "arti" => "Gudang",
                            "huruf" => array_unique(["مُ","سْ","تَ","وْ","دَ","عٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "894",
                            "tema" => "Mufrodat 126",
                            "kata" => "مَكْتَبَةٌ",
                            "kata_arab" => "مَكْتَبَةٌ",
                            "arti" => "Perpustakaan",
                            "huruf" => array_unique(["مَ","كْ","تَ","بَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "895",
                            "tema" => "Mufrodat 126",
                            "kata" => "فُنْدُقٌ",
                            "kata_arab" => "فُنْدُقٌ",
                            "arti" => "Hotel",
                            "huruf" => array_unique(["فُ","نْ","دُ","قٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "896",
                            "tema" => "Mufrodat 126",
                            "kata" => "مَقْهَى",
                            "kata_arab" => "مَقْهَى",
                            "arti" => "Warung kopi",
                            "huruf" => array_unique(["مَ","قْ","هَ","ى"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "897",
                            "tema" => "Mufrodat 126",
                            "kata" => "مَمْلَكَةٌ",
                            "kata_arab" => "مَمْلَكَةٌ",
                            "arti" => "Kerajaan",
                            "huruf" => array_unique(["مَ","مْ","لَ","كَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        
                    // 898-905
                        [
                            "id" => "898",
                            "tema" => "Mufrodat 127",
                            "kata" => "مَحْكَمَةٌ",
                            "kata_arab" => "مَحْكَمَةٌ",
                            "arti" => "Pengadilan",
                            "huruf" => array_unique(["مَ","حْ","كَ","مَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "899",
                            "tema" => "Mufrodat 127",
                            "kata" => "حَبْسٌ",
                            "kata_arab" => "حَبْسٌ",
                            "arti" => "Penjara",
                            "huruf" => array_unique(["حَ","بْ","سٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "900",
                            "tema" => "Mufrodat 127",
                            "kata" => "دَوْرَةٌ",
                            "kata_arab" => "دَوْرَةٌ",
                            "arti" => "Kursusan",
                            "huruf" => array_unique(["دَ","وْ","رَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "901",
                            "tema" => "Mufrodat 127",
                            "kata" => "إِدَارَةٌ",
                            "kata_arab" => "إِدَارَةٌ",
                            "arti" => "Kantor",
                            "huruf" => array_unique(["إِ","دَ","ا","رَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "902",
                            "tema" => "Mufrodat 127",
                            "kata" => "حَانُوْتٌ",
                            "kata_arab" => "حَانُوْتٌ",
                            "arti" => "Warung",
                            "huruf" => array_unique(["حَ","ا","نُ","وْ","تٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "903",
                            "tema" => "Mufrodat 127",
                            "kata" => "مَقْصَفٌّ",
                            "kata_arab" => "مَقْصَفٌّ",
                            "arti" => "Kantin",
                            "huruf" => array_unique(["مَ","قْ","صَ","فٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "904",
                            "tema" => "Mufrodat 127",
                            "kata" => "دُكَّانٌ",
                            "kata_arab" => "دُكَّانٌ",
                            "arti" => "Toko",
                            "huruf" => array_unique(["دُ","كَّ","ا","نٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "905",
                            "tema" => "Mufrodat 127",
                            "kata" => "شَارِعٌ",
                            "kata_arab" => "شَارِعٌ",
                            "arti" => "Jalan",
                            "huruf" => array_unique(["شَ","ا","رِ","عٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        
                    // 906-913
                        [
                            "id" => "906",
                            "tema" => "Mufrodat 128",
                            "kata" => "مَتْحَفٌ",
                            "kata_arab" => "مَتْحَفٌ",
                            "arti" => "Museum",
                            "huruf" => array_unique(["مَ","تْ","حَ","فٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "907",
                            "tema" => "Mufrodat 128",
                            "kata" => "مَعْمَلٌ",
                            "kata_arab" => "مَعْمَلٌ",
                            "arti" => "Laboratorium",
                            "huruf" => array_unique(["مَ","عْ","مَ","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "908",
                            "tema" => "Mufrodat 128",
                            "kata" => "مَطْعَمٌ",
                            "kata_arab" => "مَطْعَمٌ",
                            "arti" => "Restauran",
                            "huruf" => array_unique(["مَ","طْ","عَ","مٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "909",
                            "tema" => "Mufrodat 128",
                            "kata" => "حَدِيْقَةٌ",
                            "kata_arab" => "حَدِيْقَةٌ",
                            "arti" => "Kebun",
                            "huruf" => array_unique(["حَ","دِ","يْ","قَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "910",
                            "tema" => "Mufrodat 128",
                            "kata" => "بُسْتَانٌ",
                            "kata_arab" => "بُسْتَانٌ",
                            "arti" => "Kebun",
                            "huruf" => array_unique(["بُ","سْ","تَ","ا","نٌ"]),
                            "status" => "off",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "911",
                            "tema" => "Mufrodat 128",
                            "kata" => "مَزْرَعَةٌ",
                            "kata_arab" => "مَزْرَعَةٌ",
                            "arti" => "Sawah",
                            "huruf" => array_unique(["مَ","زْ","رَ","عَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "912",
                            "tema" => "Mufrodat 128",
                            "kata" => "حُجْرَةٌ",
                            "kata_arab" => "حُجْرَةٌ",
                            "arti" => "Kamar",
                            "huruf" => array_unique(["حُ","جْ","رَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "913",
                            "tema" => "Mufrodat 128",
                            "kata" => "شُرْفَةٌ",
                            "kata_arab" => "شُرْفَةٌ",
                            "arti" => "Teras",
                            "huruf" => array_unique(["شُ","رْ","فَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        
                    // 914-921
                        [
                            "id" => "914",
                            "tema" => "Mufrodat 129",
                            "kata" => "مَسْكَنٌ",
                            "kata_arab" => "مَسْكَنٌ",
                            "arti" => "Asrama",
                            "huruf" => array_unique(["مَ","سْ","كَ","نٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "915",
                            "tema" => "Mufrodat 129",
                            "kata" => "شَقَّةٌ",
                            "kata_arab" => "شَقَّةٌ",
                            "arti" => "Apartemen",
                            "huruf" => array_unique(["شَ","قَّ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "916",
                            "tema" => "Mufrodat 129",
                            "kata" => "مَقْبَرَةٌ",
                            "kata_arab" => "مَقْبَرَةٌ",
                            "arti" => "Pemakaman",
                            "huruf" => array_unique(["مَ","قْ","بَ","رَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "917",
                            "tema" => "Mufrodat 129",
                            "kata" => "مَسْجِدٌ",
                            "kata_arab" => "مَسْجِدٌ",
                            "arti" => "Masjid",
                            "huruf" => array_unique(["مَ","سْ","جِ","دٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "918",
                            "tema" => "Mufrodat 129",
                            "kata" => "مَعْهَدٌ",
                            "kata_arab" => "مَعْهَدٌ",
                            "arti" => "Pesantren",
                            "huruf" => array_unique(["مَ","عْ","هَ","دٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "919",
                            "tema" => "Mufrodat 129",
                            "kata" => "مَدْرَسَةٌ",
                            "kata_arab" => "مَدْرَسَةٌ",
                            "arti" => "Sekolah",
                            "huruf" => array_unique(["مَ","دْ","رَ","سَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "920",
                            "tema" => "Mufrodat 129",
                            "kata" => "جَامِعَةٌ",
                            "kata_arab" => "جَامِعَةٌ",
                            "arti" => "Universitas",
                            "huruf" => array_unique(["جَ","ا","مِ","عَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "921",
                            "tema" => "Mufrodat 129",
                            "kata" => "كَنِيْسَةٌ",
                            "kata_arab" => "كَنِيْسَةٌ",
                            "arti" => "Gereja",
                            "huruf" => array_unique(["كَ","نِ","يْ","سَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                    
                    // 922-927
                        [
                            "id" => "922",
                            "tema" => "Mufrodat 130",
                            "kata" => "هَيْكَلٌ",
                            "kata_arab" => "هَيْكَلٌ",
                            "arti" => "Candi",
                            "huruf" => array_unique(["هَ","يْ","كَ","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "923",
                            "tema" => "Mufrodat 130",
                            "kata" => "قَصْرٌ",
                            "kata_arab" => "قَصْرٌ",
                            "arti" => "Istana",
                            "huruf" => array_unique(["قَ","صْ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "924",
                            "tema" => "Mufrodat 130",
                            "kata" => "كُوْخٌ",
                            "kata_arab" => "كُوْخٌ",
                            "arti" => "Gubuk",
                            "huruf" => array_unique(["كُ","وْ","خٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "925",
                            "tema" => "Mufrodat 130",
                            "kata" => "حَظِيْرَةٌ",
                            "kata_arab" => "حَظِيْرَةٌ",
                            "arti" => "Kandang",
                            "huruf" => array_unique(["حَ","ظِ","يْ","رَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "926",
                            "tema" => "Mufrodat 130",
                            "kata" => "مَيْدَانُ الْمَدِيْنَةِ",
                            "kata_arab" => "مَيْدَانُ الْمَدِيْنَةِ",
                            "arti" => "Lapangan kota",
                            "huruf" => array_unique(["مَ","يْ","دَ","ا","نُ","_","الْ","مَ","دِ","يْ","نَ","ةِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "927",
                            "tema" => "Mufrodat 130",
                            "kata" => "بُرْجٌ",
                            "kata_arab" => "بُرْجٌ",
                            "arti" => "Menara",
                            "huruf" => array_unique(["بُ","رْ","جٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        
                    // 928-932
                        [
                            "id" => "928",
                            "tema" => "Mufrodat 131",
                            "kata" => "جَاءَ-يَجِيْئُ-مَجِيْئًا",
                            "kata_arab" => "جَاءَ-يَجِيْئُ-مَجِيْئًا",
                            "arti" => "Datang",
                            "huruf" => array_unique(["جَ","ا","ءَ","-","يَ","جِ","يْ","ئُ","-","مَ","جِ","يْ","ئً","ا"]),
                            "status" => "off",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "929",
                            "tema" => "Mufrodat 131",
                            "kata" => "أَتَى-يَأْتِي-اِتْيَانًا",
                            "kata_arab" => "أَتَى-يَأْتِي-اِتْيَانًا",
                            "arti" => "Datang",
                            "huruf" => array_unique(["أَ","تَ","ى","-","يَ","أْ","تِ","ي","-","اِ","تْ","يَ","ا","نً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "930",
                            "tema" => "Mufrodat 131",
                            "kata" => "حَضَرَ-يَحْضُرُ-حُضُورًا",
                            "kata_arab" => "حَضَرَ-يَحْضُرُ-حُضُورًا",
                            "arti" => "Hadir",
                            "huruf" => array_unique(["حَ","ضَ","رَ","-","يَ","حْ","ضُ","رُ","-","حُ","ضُ","و","رً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "931",
                            "tema" => "Mufrodat 131",
                            "kata" => "طَلَبَ-يَطْلُبُ-طَلَبًا",
                            "kata_arab" => "طَلَبَ-يَطْلُبُ-طَلَبًا",
                            "arti" => "Meminta",
                            "huruf" => array_unique(["طَ","لَ","بَ","-","يَ","طْ","لُ","بُ","-","طَ","لَ","بً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "932",
                            "tema" => "Mufrodat 131",
                            "kata" => "سَكَنَ-يَسْكُنُ-سُكُوْنًا",
                            "kata_arab" => "سَكَنَ-يَسْكُنُ-سُكُوْنًا",
                            "arti" => "Tinggal",
                            "huruf" => array_unique(["سَ","كَ","نَ","-","يَ","سْ","كُ","نُ","-","سُ","كُ","وْ","نً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        
                    // 933-937
                        [
                            "id" => "933",
                            "tema" => "Mufrodat 132",
                            "kata" => "بَاتَ-يَبِيْتُ-بَيْتًا",
                            "kata_arab" => "بَاتَ-يَبِيْتُ-بَيْتًا",
                            "arti" => "Menginap",
                            "huruf" => array_unique(["بَ","ا","تَ","-","يَ","بِ","يْ","تُ","-","بَ","يْ","تً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "934",
                            "tema" => "Mufrodat 132",
                            "kata" => "بَنَى-يَبْنِي-بِنَاءً",
                            "kata_arab" => "بَنَى-يَبْنِي-بِنَاءً",
                            "arti" => "Membangun",
                            "huruf" => array_unique(["بَ","نَ","ى","-","يَ","بْ","نِ","ي","-","بِ","نَ","ا","ءً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "935",
                            "tema" => "Mufrodat 132",
                            "kata" => "أَصْلَحَ-يُصْلِحُ-إِصْلَاحًا",
                            "kata_arab" => "أَصْلَحَ-يُصْلِحُ-إِصْلَاحًا",
                            "arti" => "Memperbaiki",
                            "huruf" => array_unique(["أَ","صْ","لَ","حَ","-","يُ","صْ","لِ","حُ","-","إِ","صْ","لَ","ا","حً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "936",
                            "tema" => "Mufrodat 132",
                            "kata" => "سَافَرَ-يُسَافِرُ-مُسَافَرَةً",
                            "kata_arab" => "سَافَرَ-يُسَافِرُ-مُسَافَرَةً",
                            "arti" => "Berpergian",
                            "huruf" => array_unique(["سَ","ا","فَ","رَ","-","يُ","سَ","ا","فِ","رُ","-","مُ","سَ","ا","فَ","رَ","ةً"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],
                        [
                            "id" => "937",
                            "tema" => "Mufrodat 132",
                            "kata" => "عَاشَ-يَعِيْشُ-عَيْشًا",
                            "kata_arab" => "عَاشَ-يَعِيْشُ-عَيْشًا",
                            "arti" => "Hidup",
                            "huruf" => array_unique(["عَ","ا","شَ","-","يَ","عِ","يْ","شُ","-","عَ","يْ","شً","ا"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 21"
                        ],

                // per_22
                    // 938-946
                        [
                            "id" => "938",
                            "tema" => "Mufrodat 133",
                            "kata" => "شَمْسٌ",
                            "kata_arab" => "شَمْسٌ",
                            "arti" => "Matahari",
                            "huruf" => array_unique(["شَ","مْ","سٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 22"
                        ],
                        [
                            "id" => "939",
                            "tema" => "Mufrodat 133",
                            "kata" => "قَمَرٌ",
                            "kata_arab" => "قَمَرٌ",
                            "arti" => "Bulan",
                            "huruf" => array_unique(["قَ","مَ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 22"
                        ],
                        [
                            "id" => "940",
                            "tema" => "Mufrodat 133",
                            "kata" => "جَبَلٌ",
                            "kata_arab" => "جَبَلٌ",
                            "arti" => "Gunung",
                            "huruf" => array_unique(["جَ","بَ","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 22"
                        ],
                        [
                            "id" => "941",
                            "tema" => "Mufrodat 133",
                            "kata" => "بَحْرٌ",
                            "kata_arab" => "بَحْرٌ",
                            "arti" => "Laut",
                            "huruf" => array_unique(["بَ","حْ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 22"
                        ],
                        [
                            "id" => "942",
                            "tema" => "Mufrodat 133",
                            "kata" => "سَمَاءٌ",
                            "kata_arab" => "سَمَاءٌ",
                            "arti" => "Langit",
                            "huruf" => array_unique(["سَ","مَ","ا","ءٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 22"
                        ],
                        [
                            "id" => "943",
                            "tema" => "Mufrodat 133",
                            "kata" => "نَجْمٌ",
                            "kata_arab" => "نَجْمٌ",
                            "arti" => "Bintang",
                            "huruf" => array_unique(["نَ","جْ","مٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 22"
                        ],
                        [
                            "id" => "944",
                            "tema" => "Mufrodat 133",
                            "kata" => "كَوْكَبٌ",
                            "kata_arab" => "كَوْكَبٌ",
                            "arti" => "Planet",
                            "huruf" => array_unique(["كَ","وْ","كَ","بٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 22"
                        ],
                        [
                            "id" => "945",
                            "tema" => "Mufrodat 133",
                            "kata" => "جَوٌّ",
                            "kata_arab" => "جَوٌّ",
                            "arti" => "Udara",
                            "huruf" => array_unique(["جَ","وٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 22"
                        ],
                        [
                            "id" => "946",
                            "tema" => "Mufrodat 133",
                            "kata" => "قَوْسُ قُزَحٍ",
                            "kata_arab" => "قَوْسُ قُزَحٍ",
                            "arti" => "Pelangi",
                            "huruf" => array_unique(["قَ","وْ","سُ","_","قُ","زَ","حٍ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 22"
                        ],
                    
                    // 947-954
                        [
                            "id" => "947",
                            "tema" => "Mufrodat 134",
                            "kata" => "أَرْضٌ",
                            "kata_arab" => "أَرْضٌ",
                            "arti" => "Bumi",
                            "huruf" => array_unique(["أَ","رْ","ضٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 22"
                        ],
                        [
                            "id" => "948",
                            "tema" => "Mufrodat 134",
                            "kata" => "رَمْلٌ",
                            "kata_arab" => "رَمْلٌ",
                            "arti" => "Pasir",
                            "huruf" => array_unique(["رَ","مْ","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 22"
                        ],
                        [
                            "id" => "949",
                            "tema" => "Mufrodat 134",
                            "kata" => "وَحْلٌ",
                            "kata_arab" => "وَحْلٌ",
                            "arti" => "Lumpur",
                            "huruf" => array_unique(["وَ","حْ","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 22"
                        ],
                        [
                            "id" => "950",
                            "tema" => "Mufrodat 134",
                            "kata" => "حَصْبَاءُ",
                            "kata_arab" => "حَصْبَاءُ",
                            "arti" => "Kerikil",
                            "huruf" => array_unique(["حَ","صْ","بَ","ا","ءُ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 22"
                        ],
                        [
                            "id" => "951",
                            "tema" => "Mufrodat 134",
                            "kata" => "صَحْرَاءُ",
                            "kata_arab" => "صَحْرَاءُ",
                            "arti" => "Padang pasir",
                            "huruf" => array_unique(["صَ","حْ","رَ","ا","ءُ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 22"
                        ],
                        [
                            "id" => "952",
                            "tema" => "Mufrodat 134",
                            "kata" => "حَجَرٌ",
                            "kata_arab" => "حَجَرٌ",
                            "arti" => "Batu",
                            "huruf" => array_unique(["حَ","جَ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 22"
                        ],
                        [
                            "id" => "953",
                            "tema" => "Mufrodat 134",
                            "kata" => "قِمَّةُ الْجَبَلِ",
                            "kata_arab" => "قِمَّةُ الْجَبَلِ",
                            "arti" => "Puncak gunung",
                            "huruf" => array_unique(["قِ","مَّ","ةُ","_","الْ","جَ","بَ","لِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 22"
                        ],
                        [
                            "id" => "954",
                            "tema" => "Mufrodat 134",
                            "kata" => "جُرُفٌ",
                            "kata_arab" => "جُرُفٌ",
                            "arti" => "Tebing",
                            "huruf" => array_unique(["جُ","رُ","فٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 22"
                        ],
                    
                    // 955-962
                        [
                            "id" => "955",
                            "tema" => "Mufrodat 135",
                            "kata" => "شِعْبٌ",
                            "kata_arab" => "شِعْبٌ",
                            "arti" => "Lembah",
                            "huruf" => array_unique(["شِ","عْ","بٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 22"
                        ],
                        [
                            "id" => "956",
                            "tema" => "Mufrodat 135",
                            "kata" => "سَدِيْمٌ",
                            "kata_arab" => "سَدِيْمٌ",
                            "arti" => "Kabut",
                            "huruf" => array_unique(["سَ","دِ","يْ","مٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 22"
                        ],
                        [
                            "id" => "957",
                            "tema" => "Mufrodat 135",
                            "kata" => "غَيْمٌ",
                            "kata_arab" => "غَيْمٌ",
                            "arti" => "Awan",
                            "huruf" => array_unique(["غَ","يْ","مٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 22"
                        ],
                        [
                            "id" => "958",
                            "tema" => "Mufrodat 135",
                            "kata" => "مَوْجٌ",
                            "kata_arab" => "مَوْجٌ",
                            "arti" => "Ombak",
                            "huruf" => array_unique(["مَ","وْ","جٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 22"
                        ],
                        [
                            "id" => "959",
                            "tema" => "Mufrodat 135",
                            "kata" => "جَزِيْرَةٌ",
                            "kata_arab" => "جَزِيْرَةٌ",
                            "arti" => "Pulau",
                            "huruf" => array_unique(["جَ","زِ","يْ","رَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 22"
                        ],
                        [
                            "id" => "960",
                            "tema" => "Mufrodat 135",
                            "kata" => "غَابَةٌ",
                            "kata_arab" => "غَابَةٌ",
                            "arti" => "Hutan",
                            "huruf" => array_unique(["غَ","ا","بَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 22"
                        ],
                        [
                            "id" => "961",
                            "tema" => "Mufrodat 135",
                            "kata" => "غَارٌ",
                            "kata_arab" => "غَارٌ",
                            "arti" => "Gua",
                            "huruf" => array_unique(["غَ","ا","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 22"
                        ],
                        [
                            "id" => "962",
                            "tema" => "Mufrodat 135",
                            "kata" => "ثَلْجٌ",
                            "kata_arab" => "ثَلْجٌ",
                            "arti" => "Salju",
                            "huruf" => array_unique(["ثَ","لْ","جٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 22"
                        ],
                    
                    // 963-970
                        [
                            "id" => "963",
                            "tema" => "Mufrodat 136",
                            "kata" => "هَضْبَةٌ",
                            "kata_arab" => "هَضْبَةٌ",
                            "arti" => "Bukit",
                            "huruf" => array_unique(["هَ","ضْ","بَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 22"
                        ],
                        [
                            "id" => "964",
                            "tema" => "Mufrodat 136",
                            "kata" => "بُخَارٌ",
                            "kata_arab" => "بُخَارٌ",
                            "arti" => "Uap",
                            "huruf" => array_unique(["بُ","خَ","ا","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 22"
                        ],
                        [
                            "id" => "965",
                            "tema" => "Mufrodat 136",
                            "kata" => "دُخَانٌ",
                            "kata_arab" => "دُخَانٌ",
                            "arti" => "Asap",
                            "huruf" => array_unique(["دُ","خَ","ا","نٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 22"
                        ],
                        [
                            "id" => "966",
                            "tema" => "Mufrodat 136",
                            "kata" => "شَلَالٌ",
                            "kata_arab" => "شَلَالٌ",
                            "arti" => "Air terjun",
                            "huruf" => array_unique(["شَ","لَ","ا","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 22"
                        ],
                        [
                            "id" => "967",
                            "tema" => "Mufrodat 136",
                            "kata" => "نَهْرٌ",
                            "kata_arab" => "نَهْرٌ",
                            "arti" => "Sungai",
                            "huruf" => array_unique(["نَ","هْ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 22"
                        ],
                        [
                            "id" => "968",
                            "tema" => "Mufrodat 136",
                            "kata" => "سَيْلٌ",
                            "kata_arab" => "سَيْلٌ",
                            "arti" => "Banjir",
                            "huruf" => array_unique(["سَ","يْ","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 22"
                        ],
                        [
                            "id" => "969",
                            "tema" => "Mufrodat 136",
                            "kata" => "شَاطِئٌ",
                            "kata_arab" => "شَاطِئٌ",
                            "arti" => "Pantai",
                            "huruf" => array_unique(["شَ","ا","طِ","ئٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 22"
                        ],
                        [
                            "id" => "970",
                            "tema" => "Mufrodat 136",
                            "kata" => "قَارَةٌ",
                            "kata_arab" => "قَارَةٌ",
                            "arti" => "Benua",
                            "huruf" => array_unique(["قَ","ا","رَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 22"
                        ],

                // per_23
                    // 971-977
                        [
                            "id" => "971",
                            "tema" => "Mufrodat 137",
                            "kata" => "مُعَلِّمٌ",
                            "kata_arab" => "مُعَلِّمٌ",
                            "arti" => "Guru",
                            "huruf" => array_unique(["مُ","عَ","لِّ","مٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 23"
                        ],
                        [
                            "id" => "972",
                            "tema" => "Mufrodat 137",
                            "kata" => "مُحَاضِرٌ",
                            "kata_arab" => "مُحَاضِرٌ",
                            "arti" => "Dosen",
                            "huruf" => array_unique(["مُ","حَ","ا","ضِ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 23"
                        ],
                        [
                            "id" => "973",
                            "tema" => "Mufrodat 137",
                            "kata" => "طَالِبٌ",
                            "kata_arab" => "طَالِبٌ",
                            "arti" => "Siswa",
                            "huruf" => array_unique(["طَ","ا","لِ","بٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 23"
                        ],
                        [
                            "id" => "974",
                            "tema" => "Mufrodat 137",
                            "kata" => "طَبِيْبٌ",
                            "kata_arab" => "طَبِيْبٌ",
                            "arti" => "Dokter",
                            "huruf" => array_unique(["طَ","بِ","يْ","بٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 23"
                        ],
                        [
                            "id" => "975",
                            "tema" => "Mufrodat 137",
                            "kata" => "مُمَرِّضٌ",
                            "kata_arab" => "مُمَرِّضٌ",
                            "arti" => "Suster",
                            "huruf" => array_unique(["مُ","مَ","رِّ","ضٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 23"
                        ],
                        [
                            "id" => "976",
                            "tema" => "Mufrodat 137",
                            "kata" => "جُنْدٌ",
                            "kata_arab" => "جُنْدٌ",
                            "arti" => "Tentara",
                            "huruf" => array_unique(["جُ","نْ","دٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 23"
                        ],
                        [
                            "id" => "977",
                            "tema" => "Mufrodat 137",
                            "kata" => "شُرْطِيٌّ",
                            "kata_arab" => "شُرْطِيٌّ",
                            "arti" => "Polisi",
                            "huruf" => array_unique(["شُ","رْ","طِ","يٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 23"
                        ],
                    
                    // 978-984
                        [
                            "id" => "978",
                            "tema" => "Mufrodat 138",
                            "kata" => "مُخْتَطِفٌ",
                            "kata_arab" => "مُخْتَطِفٌ",
                            "arti" => "Perampok",
                            "huruf" => array_unique(["مُ","خْ","تَ","طِ","فٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 23"
                        ],
                        [
                            "id" => "979",
                            "tema" => "Mufrodat 138",
                            "kata" => "سَارِقٌ",
                            "kata_arab" => "سَارِقٌ",
                            "arti" => "Pencuri",
                            "huruf" => array_unique(["سَ","ا","رِ","قٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 23"
                        ],
                        [
                            "id" => "980",
                            "tema" => "Mufrodat 138",
                            "kata" => "مُحَامٍ",
                            "kata_arab" => "مُحَامٍ",
                            "arti" => "Pengacara",
                            "huruf" => array_unique(["مُ","حَ","ا","مٍ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 23"
                        ],
                        [
                            "id" => "981",
                            "tema" => "Mufrodat 138",
                            "kata" => "قَاطِعُ الطَّرِيْقِ",
                            "kata_arab" => "قَاطِعُ الطَّرِيْقِ",
                            "arti" => "Begal",
                            "huruf" => array_unique(["قَ","ا","طِ","عُ","_","ال","طَّ","رِ","يْ","قِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 23"
                        ],
                        [
                            "id" => "982",
                            "tema" => "Mufrodat 138",
                            "kata" => "قَاضٍ",
                            "kata_arab" => "قَاضٍ",
                            "arti" => "Hakim",
                            "huruf" => array_unique(["قَ","ا","ضٍ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 23"
                        ],
                        [
                            "id" => "983",
                            "tema" => "Mufrodat 138",
                            "kata" => "مُدِيْرٌ",
                            "kata_arab" => "مُدِيْرٌ",
                            "arti" => "Direktur",
                            "huruf" => array_unique(["مُ","دِ","يْ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 23"
                        ],
                        [
                            "id" => "984",
                            "tema" => "Mufrodat 138",
                            "kata" => "مُغَنٍّى",
                            "kata_arab" => "مُغَنٍّى",
                            "arti" => "Penyanyi",
                            "huruf" => array_unique(["مُ","غَ","نٍّ","ى"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 23"
                        ],
                        
                    // 985-991
                        [
                            "id" => "985",
                            "tema" => "Mufrodat 139",
                            "kata" => "فَلَّاحٌ",
                            "kata_arab" => "فَلَّاحٌ",
                            "arti" => "Petani",
                            "huruf" => array_unique(["فَ","لَّ","ا","حٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 23"
                        ],
                        [
                            "id" => "986",
                            "tema" => "Mufrodat 139",
                            "kata" => "صَيَّادُ السَّمَكِ",
                            "kata_arab" => "صَيَّادُ السَّمَكِ",
                            "arti" => "Pencari ikan",
                            "huruf" => array_unique(["صَ","يَّ","ا","دُ","_","ال","سَّ","مَ","كِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 23"
                        ],
                        [
                            "id" => "987",
                            "tema" => "Mufrodat 139",
                            "kata" => "صَيَّادٌ",
                            "kata_arab" => "صَيَّادٌ",
                            "arti" => "Pemburu",
                            "huruf" => array_unique(["صَ","يَّ","ا","دٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 23"
                        ],
                        [
                            "id" => "988",
                            "tema" => "Mufrodat 139",
                            "kata" => "بَحَّارٌ",
                            "kata_arab" => "بَحَّارٌ",
                            "arti" => "Pelaut",
                            "huruf" => array_unique(["بَ","حَّ","ا","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 23"
                        ],
                        [
                            "id" => "989",
                            "tema" => "Mufrodat 139",
                            "kata" => "نَجَّارٌ",
                            "kata_arab" => "نَجَّارٌ",
                            "arti" => "Tukang kayu",
                            "huruf" => array_unique(["نَ","جَّ","ا","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 23"
                        ],
                        [
                            "id" => "990",
                            "tema" => "Mufrodat 139",
                            "kata" => "مِيْكَانِيْكٌ",
                            "kata_arab" => "مِيْكَانِيْكٌ",
                            "arti" => "Mekanik",
                            "huruf" => array_unique(["مِ","يْ","كَ","ا","نِ","يْ","كٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 23"
                        ],
                        [
                            "id" => "991",
                            "tema" => "Mufrodat 139",
                            "kata" => "بُسْتَانِيٌّ",
                            "kata_arab" => "بُسْتَانِيٌّ",
                            "arti" => "Tukang kebun",
                            "huruf" => array_unique(["بُ","سْ","تَ","ا","نِ","يٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 23"
                        ],
                        
                    // 992-998
                        [
                            "id" => "992",
                            "tema" => "Mufrodat 140",
                            "kata" => "حَلَّاقٌ",
                            "kata_arab" => "حَلَّاقٌ",
                            "arti" => "Tukang cukur",
                            "huruf" => array_unique(["حَ","لَّ","ا","قٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 23"
                        ],
                        [
                            "id" => "993",
                            "tema" => "Mufrodat 140",
                            "kata" => "مُصَوِّرٌ",
                            "kata_arab" => "مُصَوِّرٌ",
                            "arti" => "Fotografer",
                            "huruf" => array_unique(["مُ","صَ","وِّ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 23"
                        ],
                        [
                            "id" => "994",
                            "tema" => "Mufrodat 140",
                            "kata" => "مُشَعْوِذٌ",
                            "kata_arab" => "مُشَعْوِذٌ",
                            "arti" => "Pesulap",
                            "huruf" => array_unique(["مُ","شَ","عْ","وِ","ذٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 23"
                        ],
                        [
                            "id" => "995",
                            "tema" => "Mufrodat 140",
                            "kata" => "بَائِعٌ",
                            "kata_arab" => "بَائِعٌ",
                            "arti" => "Penjual",
                            "huruf" => array_unique(["بَ","ا","ئِ","عٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 23"
                        ],
                        [
                            "id" => "996",
                            "tema" => "Mufrodat 140",
                            "kata" => "مُضِيْفٌ",
                            "kata_arab" => "مُضِيْفٌ",
                            "arti" => "Pramugara",
                            "huruf" => array_unique(["مُ","ضِ","يْ","فٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 23"
                        ],
                        [
                            "id" => "997",
                            "tema" => "Mufrodat 140",
                            "kata" => "مُضِيْفَةٌ",
                            "kata_arab" => "مُضِيْفَةٌ",
                            "arti" => "Pramugari",
                            "huruf" => array_unique(["مُ","ضِ","يْ","فَ","ةٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 23"
                        ],
                        [
                            "id" => "998",
                            "tema" => "Mufrodat 140",
                            "kata" => "مُهَنْدِسٌ",
                            "kata_arab" => "مُهَنْدِسٌ",
                            "arti" => "Insinyur",
                            "huruf" => array_unique(["مُ","هَ","نْ","دِ","سٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 23"
                        ],
                    
                    // 999-1005
                        [
                            "id" => "999",
                            "tema" => "Mufrodat 141",
                            "kata" => "مُهَنْدِسٌ مِعْمَارِيٌّ",
                            "kata_arab" => "مُهَنْدِسٌ مِعْمَارِيٌّ",
                            "arti" => "Arsitek",
                            "huruf" => array_unique(["مُ","هَ","نْ","دِ","سٌ","_","مِ","عْ","مَ","ا","رِ","يٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 23"
                        ],
                        [
                            "id" => "1000",
                            "tema" => "Mufrodat 141",
                            "kata" => "سَائِقٌ",
                            "kata_arab" => "سَائِقٌ",
                            "arti" => "Sopir",
                            "huruf" => array_unique(["سَ","ا","ئِ","قٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 23"
                        ],
                        [
                            "id" => "1001",
                            "tema" => "Mufrodat 141",
                            "kata" => "مُخْبِرٌ",
                            "kata_arab" => "مُخْبِرٌ",
                            "arti" => "Reporter",
                            "huruf" => array_unique(["مُ","خْ","بِ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 23"
                        ],
                        [
                            "id" => "1002",
                            "tema" => "Mufrodat 141",
                            "kata" => "خَيَّاطٌ",
                            "kata_arab" => "خَيَّاطٌ",
                            "arti" => "Penjahit",
                            "huruf" => array_unique(["خَ","يَّ","ا","طٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 23"
                        ],
                        [
                            "id" => "1003",
                            "tema" => "Mufrodat 141",
                            "kata" => "طَيَّارٌ",
                            "kata_arab" => "طَيَّارٌ",
                            "arti" => "Pilot",
                            "huruf" => array_unique(["طَ","يَّ","ا","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 23"
                        ],
                        [
                            "id" => "1004",
                            "tema" => "Mufrodat 141",
                            "kata" => "رَسَّامٌ",
                            "kata_arab" => "رَسَّامٌ",
                            "arti" => "Pelukis",
                            "huruf" => array_unique(["رَ","سَّ","ا","مٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 23"
                        ],
                        [
                            "id" => "1005",
                            "tema" => "Mufrodat 141",
                            "kata" => "عُمَّالٌ",
                            "kata_arab" => "عُمَّالٌ",
                            "arti" => "Karyawan",
                            "huruf" => array_unique(["عُ","مَّ","ا","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 23"
                        ],

                // per_24
                    // 1006-1012
                        [
                            "id" => "1006",
                            "tema" => "Mufrodat 142",
                            "kata" => "عَالِمٌ",
                            "kata_arab" => "عَالِمٌ",
                            "arti" => "Ilmuan",
                            "huruf" => array_unique(["عَ","ا","لِ","مٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 24"
                        ],
                        [
                            "id" => "1007",
                            "tema" => "Mufrodat 142",
                            "kata" => "خَادِمٌ",
                            "kata_arab" => "خَادِمٌ",
                            "arti" => "Pelayan",
                            "huruf" => array_unique(["خَ","ا","دِ","مٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 24"
                        ],
                        [
                            "id" => "1008",
                            "tema" => "Mufrodat 142",
                            "kata" => "نَادِلٌ",
                            "kata_arab" => "نَادِلٌ",
                            "arti" => "Pramusaji",
                            "huruf" => array_unique(["نَ","ا","دِ","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 24"
                        ],
                        [
                            "id" => "1009",
                            "tema" => "Mufrodat 142",
                            "kata" => "مُوَظَّفٌ",
                            "kata_arab" => "مُوَظَّفٌ",
                            "arti" => "Pegawai",
                            "huruf" => array_unique(["مُ","وَ","ظَّ","فٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 24"
                        ],
                        [
                            "id" => "1010",
                            "tema" => "Mufrodat 142",
                            "kata" => "رِيَاضِيٌّ",
                            "kata_arab" => "رِيَاضِيٌّ",
                            "arti" => "Atlit",
                            "huruf" => array_unique(["رِ","يَ","ا","ضِ","يٌّ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 24"
                        ],
                        [
                            "id" => "1011",
                            "tema" => "Mufrodat 142",
                            "kata" => "رَئِيْسٌ",
                            "kata_arab" => "رَئِيْسٌ",
                            "arti" => "Ketua",
                            "huruf" => array_unique(["رَ","ئِ","يْ","سٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 24"
                        ],
                        [
                            "id" => "1012",
                            "tema" => "Mufrodat 142",
                            "kata" => "آمِنُ الصُّنْدُوْقِ",
                            "kata_arab" => "آمِنُ الصُّنْدُوْقِ",
                            "arti" => "Bendahara",
                            "huruf" => array_unique(["آ","مِ","نُ","_","ال","صُّ","نْ","دُ","وْ","قِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 24"
                        ],
                    
                    // 1013-1020
                        [
                            "id" => "1013",
                            "tema" => "Mufrodat 143",
                            "kata" => "سِكْرِتِيْرٌ",
                            "kata_arab" => "سِكْرِتِيْرٌ",
                            "arti" => "Sekretaris",
                            "huruf" => array_unique(["سِ","كْ","رِ","تِ","يْ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 24"
                        ],
                        [
                            "id" => "1014",
                            "tema" => "Mufrodat 143",
                            "kata" => "مُمَثِّلٌ",
                            "kata_arab" => "مُمَثِّلٌ",
                            "arti" => "Artis",
                            "huruf" => array_unique(["مُ","مَ","ثِّ","لٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 24"
                        ],
                        [
                            "id" => "1015",
                            "tema" => "Mufrodat 143",
                            "kata" => "مُهَرِّجٌ",
                            "kata_arab" => "مُهَرِّجٌ",
                            "arti" => "Pelawak",
                            "huruf" => array_unique(["مُ","هَ","رِّ","جٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 24"
                        ],
                        [
                            "id" => "1016",
                            "tema" => "Mufrodat 143",
                            "kata" => "رَقَّاصٌ",
                            "kata_arab" => "رَقَّاصٌ",
                            "arti" => "Penari",
                            "huruf" => array_unique(["رَ","قَّ","ا","صٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 24"
                        ],
                        [
                            "id" => "1017",
                            "tema" => "Mufrodat 143",
                            "kata" => "رَئِيْسُ الْجُمْهُوْرِيَّةِ",
                            "kata_arab" => "رَئِيْسُ الْجُمْهُوْرِيَّةِ",
                            "arti" => "Presiden",
                            "huruf" => array_unique(["رَ","ئِ","يْ","سُ","_","الْ","جُ","مْ","هُ","وْ","رِ","يَّ","ةِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 24"
                        ],
                        [
                            "id" => "1018",
                            "tema" => "Mufrodat 143",
                            "kata" => "نَائِبُ رَئِيْسِ الْجُمْهُوْرِيَّةِ",
                            "kata_arab" => "نَائِبُ رَئِيْسِ الْجُمْهُوْرِيَّةِ",
                            "arti" => "Wakil presiden",
                            "huruf" => array_unique(["نَ","ا","ئِ","بُ","_","رَ","ئِ","يْ","سِ","_","الْ","جُ","مْ","هُ","وْ","رِ","يَّ","ةِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 24"
                        ],
                        [
                            "id" => "1019",
                            "tema" => "Mufrodat 143",
                            "kata" => "وَزِيْرٌ",
                            "kata_arab" => "وَزِيْرٌ",
                            "arti" => "Menteri",
                            "huruf" => array_unique(["وَ","زِ","يْ","رٌ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 24"
                        ],
                        [
                            "id" => "1020",
                            "tema" => "Mufrodat 143",
                            "kata" => "مَجْلِسُ النَّوَابِ",
                            "kata_arab" => "مَجْلِسُ النَّوَابِ",
                            "arti" => "DPR",
                            "huruf" => array_unique(["مَ","جْ","لِ","سُ","_","ال","نَّ","وَ","ا","بِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 24"
                        ],

                    // 1021-1026
                        [
                            "id" => "1021",
                            "tema" => "Mufrodat 144",
                            "kata" => "فَصْلُ الْمَطَرِ",
                            "kata_arab" => "فَصْلُ الْمَطَرِ",
                            "arti" => "Musim hujan",
                            "huruf" => array_unique(["فَ","صْ","لُ","_","الْ","مَ","طَ","رِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 24"
                        ],
                        [
                            "id" => "1022",
                            "tema" => "Mufrodat 144",
                            "kata" => "فَصْلُ الْجَفَافِ",
                            "kata_arab" => "فَصْلُ الْجَفَافِ",
                            "arti" => "Musim kemarau",
                            "huruf" => array_unique(["فَ","صْ","لُ","_","الْ","جَ","فَ","ا","فِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 24"
                        ],
                        [
                            "id" => "1023",
                            "tema" => "Mufrodat 144",
                            "kata" => "فَصْلُ الصَّيْفِ",
                            "kata_arab" => "فَصْلُ الصَّيْفِ",
                            "arti" => "Musim panas",
                            "huruf" => array_unique(["فَ","صْ","لُ","_","ال","صَّ","يْ","فِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 24"
                        ],
                        [
                            "id" => "1024",
                            "tema" => "Mufrodat 144",
                            "kata" => "فَصْلُ الشِّتَاءِ",
                            "kata_arab" => "فَصْلُ الشِّتَاءِ",
                            "arti" => "Musim dingin",
                            "huruf" => array_unique(["فَ","صْ","لُ","_","ال","شِّ","تَ","ا","ءِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 24"
                        ],
                        [
                            "id" => "1025",
                            "tema" => "Mufrodat 144",
                            "kata" => "فَصْلُ الْخَرِيْفِ",
                            "kata_arab" => "فَصْلُ الْخَرِيْفِ",
                            "arti" => "Musim gugur",
                            "huruf" => array_unique(["فَ","صْ","لُ","_","الْ","خَ","رِ","يْ","فِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 24"
                        ],
                        [
                            "id" => "1026",
                            "tema" => "Mufrodat 144",
                            "kata" => "فَصْلُ الرَّبِيْعِ",
                            "kata_arab" => "فَصْلُ الرَّبِيْعِ",
                            "arti" => "Musim semi",
                            "huruf" => array_unique(["فَ","صْ","لُ","_","ال","رَّ","بِ","يْ","عِ"]),
                            "status" => "on",
                            "pertemuan" => "Pertemuan 24"
                        ],
                //
            ];
            return $data;
        }

        public function tema(){
            $data = [
                // per_1
                    [
                        "tema" => "Mufrodat 1",
                        "back" => "",
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 2"),
                        "title_arab" => "كَلِمَاتُ الْإِسْتِفْهَامِ",
                        "title" => "Kata Tanya Bag. 1",
                        "pertemuan" => "Pertemuan 1"
                    ],
                    [
                        "tema" => "Mufrodat 2",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 1"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 3"),
                        "title_arab" => "كَلِمَاتُ الْإِسْتِفْهَامِ",
                        "title" => "Kata Tanya Bag. 2",
                        "pertemuan" => "Pertemuan 1"
                    ],
                    [
                        "tema" => "Mufrodat 3",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 2"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 4"),
                        "title_arab" => "حُرُوْفُ الْجَرِّ",
                        "title" => "Huruf Jar",
                        "pertemuan" => "Pertemuan 1"
                    ],
                    [
                        "tema" => "Mufrodat 4",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 3"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 5"),
                        "title_arab" => "حُرُوْفُ النِّدَاءِ",
                        "title" => "Huruf Nidaa",
                        "pertemuan" => "Pertemuan 1"
                    ],
                    [
                        "tema" => "Mufrodat 5",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 4"),
                        "next" => "",
                        "title_arab" => "حُرُوْفُ الْإِسْتِثْنَاءِ",
                        "title" => "Huruf Istisna",
                        "pertemuan" => "Pertemuan 1"
                    ],

                // per_2
                    [
                        "tema" => "Mufrodat 6",
                        "back" => "",
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 7"),
                        "title_arab" => "حُرُوْفُ إِنَّ وَ أَخَوَاتُهَا",
                        "title" => "Huruf Inna dan Saudaranya",
                        "pertemuan" => "Pertemuan 2"
                    ],
                    [
                        "tema" => "Mufrodat 7",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 6"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 8"),
                        "title_arab" => "حُرُوْفُ النَّوَاصِبِ",
                        "title" => "Huruf Nashob",
                        "pertemuan" => "Pertemuan 2"
                    ],
                    [
                        "tema" => "Mufrodat 8",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 7"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 9"),
                        "title_arab" => "حُرُوْفُ الْجَوَازِمِ",
                        "title" => "Huruf Jazm",
                        "pertemuan" => "Pertemuan 2"
                    ],
                    [
                        "tema" => "Mufrodat 9",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 8"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 10"),
                        "title_arab" => "حَرْفُ التَّوْكِيْدِ",
                        "title" => "Huruf Taukid",
                        "pertemuan" => "Pertemuan 2"
                    ],
                    [
                        "tema" => "Mufrodat 10",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 9"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 11"),
                        "title_arab" => "حُرُوْفُ اْلإِسْتِقْبَالِ",
                        "title" => "Huruf Istiqbal",
                        "pertemuan" => "Pertemuan 2"
                    ],
                    [
                        "tema" => "Mufrodat 11",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 10"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 12"),
                        "title_arab" => "حُرُوْفُ اْلعَطْفِ",
                        "title" => "Huruf Athof",
                        "pertemuan" => "Pertemuan 2"
                    ],
                    [
                        "tema" => "Mufrodat 12",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 11"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 13"),
                        "title_arab" => "حُرُوْفُ النَّافِي",
                        "title" => "Huruf Nafi",
                        "pertemuan" => "Pertemuan 2"
                    ],
                    [
                        "tema" => "Mufrodat 13",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 12"),
                        "next" => "",
                        "title_arab" => "حُرُوْفُ اْلإِسْتِفْهَامِ",
                        "title" => "Huruf Istifham",
                        "pertemuan" => "Pertemuan 2"
                    ],

                // per_3
                    [
                        "tema" => "Mufrodat 14",
                        "back" => "",
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 15"),
                        "title_arab" => "عَدَدٌ",
                        "title" => "Satuan",
                        "pertemuan" => "Pertemuan 3"
                    ],
                    [
                        "tema" => "Mufrodat 15",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 14"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 16"),
                        "title_arab" => "عَدَدٌ",
                        "title" => "Belasan",
                        "pertemuan" => "Pertemuan 3"
                    ],
                    [
                        "tema" => "Mufrodat 16",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 15"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 17"),
                        "title_arab" => "عَدَدٌ",
                        "title" => "Puluhan",
                        "pertemuan" => "Pertemuan 3"
                    ],
                    [
                        "tema" => "Mufrodat 17",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 16"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 18"),
                        "title_arab" => "عَدَدٌ",
                        "title" => "Ratusan",
                        "pertemuan" => "Pertemuan 3"
                    ],
                    [
                        "tema" => "Mufrodat 18",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 17"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 19"),
                        "title_arab" => "عَدَدٌ",
                        "title" => "21-29",
                        "pertemuan" => "Pertemuan 3"
                    ],
                    [
                        "tema" => "Mufrodat 19",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 18"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 20"),
                        "title_arab" => "عَدَدٌ",
                        "title" => "31-39",
                        "pertemuan" => "Pertemuan 3"
                    ],
                    [
                        "tema" => "Mufrodat 20",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 19"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 21"),
                        "title_arab" => "عَدَدٌ",
                        "title" => "41-49",
                        "pertemuan" => "Pertemuan 3"
                    ],
                    [
                        "tema" => "Mufrodat 21",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 20"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 22"),
                        "title_arab" => "عَدَدٌ",
                        "title" => "51-59",
                        "pertemuan" => "Pertemuan 3"
                    ],
                    [
                        "tema" => "Mufrodat 22",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 21"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 23"),
                        "title_arab" => "عَدَدٌ",
                        "title" => "61-69",
                        "pertemuan" => "Pertemuan 3"
                    ],
                    [
                        "tema" => "Mufrodat 23",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 22"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 24"),
                        "title_arab" => "عَدَدٌ",
                        "title" => "71-79",
                        "pertemuan" => "Pertemuan 3"
                    ],
                    [
                        "tema" => "Mufrodat 24",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 23"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 25"),
                        "title_arab" => "عَدَدٌ",
                        "title" => "81-89",
                        "pertemuan" => "Pertemuan 3"
                    ],
                    [
                        "tema" => "Mufrodat 25",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 24"),
                        "next" => "",
                        "title_arab" => "عَدَدٌ",
                        "title" => "91-99",
                        "pertemuan" => "Pertemuan 3"
                    ],
                
                // per_4
                    [
                        "tema" => "Mufrodat 26",
                        "back" => "",
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 27"),
                        "title_arab" => "ظُرُوْفُ الْمَكَانِ",
                        "title" => "Keterangan Tempat",
                        "pertemuan" => "Pertemuan 4"
                    ],
                    [
                        "tema" => "Mufrodat 27",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 26"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 28"),
                        "title_arab" => "ظُرُوْفُ الزَّمَانِ",
                        "title" => "Keterangan Waktu Bag. 1",
                        "pertemuan" => "Pertemuan 4"
                    ],
                    [
                        "tema" => "Mufrodat 28",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 27"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 29"),
                        "title_arab" => "ظُرُوْفُ الزَّمَانِ",
                        "title" => "Keterangan Waktu Bag. 2",
                        "pertemuan" => "Pertemuan 4"
                    ],
                    [
                        "tema" => "Mufrodat 29",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 28"),
                        "next" => "",
                        "title_arab" => "ظُرُوْفُ الزَّمَانِ",
                        "title" => "Keterangan Waktu Bag. 3",
                        "pertemuan" => "Pertemuan 4"
                    ],
                
                // per_5
                    [
                        "tema" => "Mufrodat 30",
                        "back" => "",
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 31"),
                        "title_arab" => "أَعْضَاءُ الْبَدَنِ",
                        "title" => "Anggota Tubuh Bag. 1",
                        "pertemuan" => "Pertemuan 5"
                    ],
                    [
                        "tema" => "Mufrodat 31",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 30"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 32"),
                        "title_arab" => "أَعْضَاءُ الْبَدَنِ",
                        "title" => "Anggota Tubuh Bag. 2",
                        "pertemuan" => "Pertemuan 5"
                    ],
                    [
                        "tema" => "Mufrodat 32",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 31"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 33"),
                        "title_arab" => "أَعْضَاءُ الْبَدَنِ",
                        "title" => "Anggota Tubuh Bag. 3",
                        "pertemuan" => "Pertemuan 5"
                    ],
                    [
                        "tema" => "Mufrodat 33",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 32"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 34"),
                        "title_arab" => "أَعْضَاءُ الْبَدَنِ",
                        "title" => "Anggota Tubuh Bag. 4",
                        "pertemuan" => "Pertemuan 5"
                    ],
                    [
                        "tema" => "Mufrodat 34",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 33"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 35"),
                        "title_arab" => "أَعْضَاءُ الْبَدَنِ",
                        "title" => "Anggota Tubuh Bag. 5",
                        "pertemuan" => "Pertemuan 5"
                    ],
                    [
                        "tema" => "Mufrodat 35",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 34"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 36"),
                        "title_arab" => "أَعْضَاءُ الْبَدَنِ",
                        "title" => "Anggota Tubuh Bag. 6",
                        "pertemuan" => "Pertemuan 5"
                    ],
                    [
                        "tema" => "Mufrodat 36",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 35"),
                        "next" => "",
                        "title_arab" => "أَعْضَاءُ الْبَدَنِ",
                        "title" => "Anggota Tubuh Bag. 7",
                        "pertemuan" => "Pertemuan 5"
                    ],
                
                // per_6
                    [
                        "tema" => "Mufrodat 37",
                        "back" => "",
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 38"),
                        "title_arab" => "الأَفْعَالُ عَنْ أَعْضَاءِ الْبَدَنِ",
                        "title" => "Pekerjaan Tentang Anggota Tubuh Bag. 1",
                        "pertemuan" => "Pertemuan 6"
                    ],
                    [
                        "tema" => "Mufrodat 38",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 37"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 39"),
                        "title_arab" => "الأَفْعَالُ عَنْ أَعْضَاءِ الْبَدَنِ",
                        "title" => "Pekerjaan Tentang Anggota Tubuh Bag. 2",
                        "pertemuan" => "Pertemuan 6"
                    ],
                    [
                        "tema" => "Mufrodat 39",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 38"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 40"),
                        "title_arab" => "الأَفْعَالُ عَنْ أَعْضَاءِ الْبَدَنِ",
                        "title" => "Pekerjaan Tentang Anggota Tubuh Bag. 3",
                        "pertemuan" => "Pertemuan 6"
                    ],
                    [
                        "tema" => "Mufrodat 40",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 39"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 41"),
                        "title_arab" => "الأَفْعَالُ عَنْ أَعْضَاءِ الْبَدَنِ",
                        "title" => "Pekerjaan Tentang Anggota Tubuh Bag. 4",
                        "pertemuan" => "Pertemuan 6"
                    ],
                    [
                        "tema" => "Mufrodat 41",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 40"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 42"),
                        "title_arab" => "الأَفْعَالُ عَنْ أَعْضَاءِ الْبَدَنِ",
                        "title" => "Pekerjaan Tentang Anggota Tubuh Bag. 5",
                        "pertemuan" => "Pertemuan 6"
                    ],
                    [
                        "tema" => "Mufrodat 42",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 41"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 43"),
                        "title_arab" => "الأُسْرَةُ",
                        "title" => "Keluarga Bag. 1",
                        "pertemuan" => "Pertemuan 6"
                    ],
                    [
                        "tema" => "Mufrodat 43",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 42"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 44"),
                        "title_arab" => "الأُسْرَةُ",
                        "title" => "Keluarga Bag. 2",
                        "pertemuan" => "Pertemuan 6"
                    ],
                    [
                        "tema" => "Mufrodat 44",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 43"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 45"),
                        "title_arab" => "الأُسْرَةُ",
                        "title" => "Keluarga Bag. 3",
                        "pertemuan" => "Pertemuan 6"
                    ],
                    [
                        "tema" => "Mufrodat 45",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 44"),
                        "next" => "",
                        "title_arab" => "الأُسْرَةُ",
                        "title" => "Keluarga Bag. 4",
                        "pertemuan" => "Pertemuan 6"
                    ],

                // per_7
                    [
                        "tema" => "Mufrodat 46",
                        "back" => "",
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 47"),
                        "title_arab" => "اْلأَفْعَالُ عَنِ اْلأُسْرَةِ",
                        "title" => "Pekerjaan Tentang Keluarga Bag. 1",
                        "pertemuan" => "Pertemuan 7"
                    ],
                    [
                        "tema" => "Mufrodat 47",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 46"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 48"),
                        "title_arab" => "اْلأَفْعَالُ عَنِ اْلأُسْرَةِ",
                        "title" => "Pekerjaan Tentang Keluarga Bag. 2",
                        "pertemuan" => "Pertemuan 7"
                    ],
                    [
                        "tema" => "Mufrodat 48",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 47"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 49"),
                        "title_arab" => "اْلأَفْعَالُ عَنِ اْلأُسْرَةِ",
                        "title" => "Pekerjaan Tentang Keluarga Bag. 3",
                        "pertemuan" => "Pertemuan 7"
                    ],
                    [
                        "tema" => "Mufrodat 49",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 48"),
                        "next" => "",
                        "title_arab" => "اْلأَفْعَالُ عَنِ اْلأُسْرَةِ",
                        "title" => "Pekerjaan Tentang Keluarga Bag. 4",
                        "pertemuan" => "Pertemuan 7"
                    ],

                // per_8
                    [
                        "tema" => "Mufrodat 50",
                        "back" => "",
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 51"),
                        "title_arab" => "أَخْلاَقُ اْلإِنْسَانِ",
                        "title" => "Akhlak Manusia Bag. 1",
                        "pertemuan" => "Pertemuan 8"
                    ],
                    [
                        "tema" => "Mufrodat 51",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 50"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 52"),
                        "title_arab" => "أَخْلاَقُ اْلإِنْسَانِ",
                        "title" => "Akhlak Manusia Bag. 2",
                        "pertemuan" => "Pertemuan 8"
                    ],
                    [
                        "tema" => "Mufrodat 52",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 51"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 53"),
                        "title_arab" => "أَخْلاَقُ اْلإِنْسَانِ",
                        "title" => "Akhlak Manusia Bag. 3",
                        "pertemuan" => "Pertemuan 8"
                    ],
                    [
                        "tema" => "Mufrodat 53",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 52"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 54"),
                        "title_arab" => "أَخْلاَقُ اْلإِنْسَانِ",
                        "title" => "Akhlak Manusia Bag. 4",
                        "pertemuan" => "Pertemuan 8"
                    ],
                    [
                        "tema" => "Mufrodat 54",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 53"),
                        "next" => "",
                        "title_arab" => "أَخْلاَقُ اْلإِنْسَانِ",
                        "title" => "Akhlak Manusia Bag. 5",
                        "pertemuan" => "Pertemuan 8"
                    ],

                // per_9
                    [
                        "tema" => "Mufrodat 55",
                        "back" => "",
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 56"),
                        "title_arab" => "أَخْلاَقُ اْلإِنْسَانِ",
                        "title" => "Akhlak Manusia Bag. 1",
                        "pertemuan" => "Pertemuan 9"
                    ],
                    [
                        "tema" => "Mufrodat 56",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 55"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 57"),
                        "title_arab" => "أَخْلاَقُ اْلإِنْسَانِ",
                        "title" => "Akhlak Manusia Bag. 2",
                        "pertemuan" => "Pertemuan 9"
                    ],
                    [
                        "tema" => "Mufrodat 57",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 56"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 58"),
                        "title_arab" => "أَخْلاَقُ اْلإِنْسَانِ",
                        "title" => "Akhlak Manusia Bag. 3",
                        "pertemuan" => "Pertemuan 9"
                    ],
                    [
                        "tema" => "Mufrodat 58",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 57"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 59"),
                        "title_arab" => "أَخْلاَقُ اْلإِنْسَانِ",
                        "title" => "Akhlak Manusia Bag. 4",
                        "pertemuan" => "Pertemuan 9"
                    ],
                    [
                        "tema" => "Mufrodat 59",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 58"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 60"),
                        "title_arab" => "أَخْلاَقُ اْلإِنْسَانِ",
                        "title" => "Akhlak Manusia Bag. 5",
                        "pertemuan" => "Pertemuan 9"
                    ],
                    [
                        "tema" => "Mufrodat 60",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 59"),
                        "next" => "",
                        "title_arab" => "أَخْلاَقُ اْلإِنْسَانِ",
                        "title" => "Akhlak Manusia Bag. 6",
                        "pertemuan" => "Pertemuan 9"
                    ],

                // per_10
                    [
                        "tema" => "Mufrodat 61",
                        "back" => "",
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 62"),
                        "title_arab" => "آثَاثُ اْلبَيْتِ",
                        "title" => "Perlengkapan Rumah Bag. 1",
                        "pertemuan" => "Pertemuan 10"
                    ],
                    [
                        "tema" => "Mufrodat 62",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 61"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 63"),
                        "title_arab" => "آثَاثُ اْلبَيْتِ",
                        "title" => "Perlengkapan Rumah Bag. 2",
                        "pertemuan" => "Pertemuan 10"
                    ],
                    [
                        "tema" => "Mufrodat 63",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 62"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 64"),
                        "title_arab" => "آثَاثُ اْلبَيْتِ",
                        "title" => "Perlengkapan Rumah Bag. 3",
                        "pertemuan" => "Pertemuan 10"
                    ],
                    [
                        "tema" => "Mufrodat 64",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 63"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 65"),
                        "title_arab" => "آثَاثُ اْلبَيْتِ",
                        "title" => "Perlengkapan Rumah Bag. 4",
                        "pertemuan" => "Pertemuan 10"
                    ],
                    [
                        "tema" => "Mufrodat 65",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 64"),
                        "next" => "",
                        "title_arab" => "آثَاثُ اْلبَيْتِ",
                        "title" => "Perlengkapan Rumah Bag. 5",
                        "pertemuan" => "Pertemuan 10"
                    ],

                // per_11
                    [
                        "tema" => "Mufrodat 66",
                        "back" => "",
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 67"),
                        "title_arab" => "اْلأَفْعَالُ عَنْ آثَاثِ اْلبَيْتِ",
                        "title" => "Pekerjaan Tentang Perkakas Rumah Bag. 1",
                        "pertemuan" => "Pertemuan 11"
                    ],
                    [
                        "tema" => "Mufrodat 67",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 66"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 68"),
                        "title_arab" => "اْلأَفْعَالُ عَنْ آثَاثِ اْلبَيْتِ",
                        "title" => "Pekerjaan Tentang Perkakas Rumah Bag. 2",
                        "pertemuan" => "Pertemuan 11"
                    ],
                    [
                        "tema" => "Mufrodat 68",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 67"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 69"),
                        "title_arab" => "اْلأَفْعَالُ عَنْ آثَاثِ اْلبَيْتِ",
                        "title" => "Pekerjaan Tentang Perkakas Rumah Bag. 3",
                        "pertemuan" => "Pertemuan 11"
                    ],
                    [
                        "tema" => "Mufrodat 69",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 68"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 70"),
                        "title_arab" => "الأَلْوَانُ",
                        "title" => "Warna-warna Bag. 1",
                        "pertemuan" => "Pertemuan 11"
                    ],
                    [
                        "tema" => "Mufrodat 70",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 69"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 71"),
                        "title_arab" => "الأَلْوَانُ",
                        "title" => "Warna-warna Bag. 2",
                        "pertemuan" => "Pertemuan 11"
                    ],
                    [
                        "tema" => "Mufrodat 71",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 70"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 72"),
                        "title_arab" => "الصِّفَاتُ",
                        "title" => "Sifat Bag. 1",
                        "pertemuan" => "Pertemuan 11"
                    ],
                    [
                        "tema" => "Mufrodat 72",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 71"),
                        "next" => "",
                        "title_arab" => "الصِّفَاتُ",
                        "title" => "Sifat Bag. 2",
                        "pertemuan" => "Pertemuan 11"
                    ],

                // per_12
                    [
                        "tema" => "Mufrodat 73",
                        "back" => "",
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 74"),
                        "title_arab" => "الصِّفَاتُ",
                        "title" => "Sifat Bag. 1",
                        "pertemuan" => "Pertemuan 12"
                    ],
                    [
                        "tema" => "Mufrodat 74",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 73"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 75"),
                        "title_arab" => "الصِّفَاتُ",
                        "title" => "Sifat Bag. 2",
                        "pertemuan" => "Pertemuan 12"
                    ],
                    [
                        "tema" => "Mufrodat 75",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 74"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 76"),
                        "title_arab" => "الصِّفَاتُ",
                        "title" => "Sifat Bag. 3",
                        "pertemuan" => "Pertemuan 12"
                    ],
                    [
                        "tema" => "Mufrodat 76",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 75"),
                        "next" => "",
                        "title_arab" => "الصِّفَاتُ",
                        "title" => "Sifat Bag. 4",
                        "pertemuan" => "Pertemuan 12"
                    ],

                // per_13
                    [
                        "tema" => "Mufrodat 77",
                        "back" => "",
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 78"),
                        "title_arab" => "مَلَابِسُ وَ جَوَاهِرُ",
                        "title" => "Pakaian dan Perhiasan Bag. 1",
                        "pertemuan" => "Pertemuan 13"
                    ],
                    [
                        "tema" => "Mufrodat 78",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 77"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 79"),
                        "title_arab" => "مَلَابِسُ وَ جَوَاهِرُ",
                        "title" => "Pakaian dan Perhiasan Bag. 2",
                        "pertemuan" => "Pertemuan 13"
                    ],
                    [
                        "tema" => "Mufrodat 79",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 78"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 80"),
                        "title_arab" => "مَلَابِسُ وَ جَوَاهِرُ",
                        "title" => "Pakaian dan Perhiasan Bag. 3",
                        "pertemuan" => "Pertemuan 13"
                    ],
                    [
                        "tema" => "Mufrodat 80",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 79"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 81"),
                        "title_arab" => "مَلَابِسُ وَ جَوَاهِرُ",
                        "title" => "Pakaian dan Perhiasan Bag. 4",
                        "pertemuan" => "Pertemuan 13"
                    ],
                    [
                        "tema" => "Mufrodat 81",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 80"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 82"),
                        "title_arab" => "مَلَابِسُ وَ جَوَاهِرُ",
                        "title" => "Pakaian dan Perhiasan Bag. 5",
                        "pertemuan" => "Pertemuan 13"
                    ],
                    [
                        "tema" => "Mufrodat 82",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 81"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 83"),
                        "title_arab" => "اْلأَفْعَالُ عَنِ الْمَلَابِس",
                        "title" => "Pekerjaan Tentang Pakaian Bag. 1",
                        "pertemuan" => "Pertemuan 13"
                    ],
                    [
                        "tema" => "Mufrodat 83",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 82"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 84"),
                        "title_arab" => "اْلأَفْعَالُ عَنِ الْمَلَابِس",
                        "title" => "Pekerjaan Tentang Pakaian Bag. 2",
                        "pertemuan" => "Pertemuan 13"
                    ],
                    [
                        "tema" => "Mufrodat 84",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 83"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 85"),
                        "title_arab" => "غُرْفَةُ النَّوْمِ",
                        "title" => "Kamar Tidur Bag. 1",
                        "pertemuan" => "Pertemuan 13"
                    ],
                    [
                        "tema" => "Mufrodat 85",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 84"),
                        "next" => "",
                        "title_arab" => "غُرْفَةُ النَّوْمِ",
                        "title" => "Kamar Tidur Bag. 2",
                        "pertemuan" => "Pertemuan 13"
                    ],

                // per_14
                    [
                        "tema" => "Mufrodat 86",
                        "back" => "",
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 87"),
                        "title_arab" => "اْلأَفْعَالُ عَنْ غُرْفَةِ النَّوْمِ",
                        "title" => "Pekerjaan Tentang Kamar Tidur",
                        "pertemuan" => "Pertemuan 14"
                    ],
                    [
                        "tema" => "Mufrodat 87",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 86"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 88"),
                        "title_arab" => "الْمَطْبَخُ",
                        "title" => "Dapur Bag. 1",
                        "pertemuan" => "Pertemuan 14"
                    ],
                    [
                        "tema" => "Mufrodat 88",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 87"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 89"),
                        "title_arab" => "الْمَطْبَخُ",
                        "title" => "Dapur Bag. 2",
                        "pertemuan" => "Pertemuan 14"
                    ],
                    [
                        "tema" => "Mufrodat 89",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 88"),
                        "next" => "",
                        "title_arab" => "الْمَطْبَخُ",
                        "title" => "Dapur Bag. 3",
                        "pertemuan" => "Pertemuan 14"
                    ],

                // per_15
                    [
                        "tema" => "Mufrodat 90",
                        "back" => "",
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 91"),
                        "title_arab" => "اْلأَفْعَالُ عَنِ الْمَطْبَخ",
                        "title" => "Pekerjaan Tentang Dapur Bag. 1",
                        "pertemuan" => "Pertemuan 15"
                    ],
                    [
                        "tema" => "Mufrodat 91",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 90"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 92"),
                        "title_arab" => "اْلأَفْعَالُ عَنِ الْمَطْبَخ",
                        "title" => "Pekerjaan Tentang Dapur Bag. 2",
                        "pertemuan" => "Pertemuan 15"
                    ],
                    [
                        "tema" => "Mufrodat 92",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 91"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 93"),
                        "title_arab" => "الطُّعُوْمُ",
                        "title" => "Rasa-rasa Bag. 1",
                        "pertemuan" => "Pertemuan 15"
                    ],
                    [
                        "tema" => "Mufrodat 93",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 92"),
                        "next" => "",
                        "title_arab" => "الطُّعُوْمُ",
                        "title" => "Rasa-rasa Bag. 2",
                        "pertemuan" => "Pertemuan 15"
                    ],

                // per_16
                    [
                        "tema" => "Mufrodat 94",
                        "back" => "",
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 95"),
                        "title_arab" => "الحَمَّامُ",
                        "title" => "Kamar Mandi Bag. 1",
                        "pertemuan" => "Pertemuan 16"
                    ],
                    [
                        "tema" => "Mufrodat 95",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 94"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 96"),
                        "title_arab" => "الحَمَّامُ",
                        "title" => "Kamar Mandi Bag. 2",
                        "pertemuan" => "Pertemuan 16"
                    ],
                    [
                        "tema" => "Mufrodat 96",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 95"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 97"),
                        "title_arab" => "اْلأَفْعَالُ عَنِ الْحَمَّام",
                        "title" => "Pekerjaan Tentang Kamar Mandi Bag. 1",
                        "pertemuan" => "Pertemuan 16"
                    ],
                    [
                        "tema" => "Mufrodat 97",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 96"),
                        "next" => "",
                        "title_arab" => "اْلأَفْعَالُ عَنِ الْحَمَّام",
                        "title" => "Pekerjaan Tentang Kamar Mandi Bag. 2",
                        "pertemuan" => "Pertemuan 16"
                    ],

                // per_17
                    [
                        "tema" => "Mufrodat 98",
                        "back" => "",
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 99"),
                        "title_arab" => "المَدْرَسَةُ",
                        "title" => "Sekolah Bag. 1",
                        "pertemuan" => "Pertemuan 17"
                    ],
                    [
                        "tema" => "Mufrodat 99",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 98"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 100"),
                        "title_arab" => "المَدْرَسَةُ",
                        "title" => "Sekolah Bag. 2",
                        "pertemuan" => "Pertemuan 17"
                    ],
                    [
                        "tema" => "Mufrodat 100",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 99"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 101"),
                        "title_arab" => "المَدْرَسَةُ",
                        "title" => "Sekolah Bag. 3",
                        "pertemuan" => "Pertemuan 17"
                    ],
                    [
                        "tema" => "Mufrodat 101",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 100"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 102"),
                        "title_arab" => "المَدْرَسَةُ",
                        "title" => "Sekolah Bag. 4",
                        "pertemuan" => "Pertemuan 17"
                    ],
                    [
                        "tema" => "Mufrodat 102",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 101"),
                        "next" => "",
                        "title_arab" => "المَدْرَسَةُ",
                        "title" => "Sekolah Bag. 5",
                        "pertemuan" => "Pertemuan 17"
                    ],

                // per_18
                    [
                        "tema" => "Mufrodat 103",
                        "back" => "",
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 104"),
                        "title_arab" => "المَدْرَسَةُ",
                        "title" => "Sekolah Bag. 1",
                        "pertemuan" => "Pertemuan 18"
                    ],
                    [
                        "tema" => "Mufrodat 104",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 103"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 105"),
                        "title_arab" => "المَدْرَسَةُ",
                        "title" => "Sekolah Bag. 2",
                        "pertemuan" => "Pertemuan 18"
                    ],
                    [
                        "tema" => "Mufrodat 105",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 104"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 106"),
                        "title_arab" => "لأَفْعَالُ عَنِ الْمَدْرَسَةِ",
                        "title" => "Pekerjaan Tentang Sekolah Bag. 1",
                        "pertemuan" => "Pertemuan 18"
                    ],
                    [
                        "tema" => "Mufrodat 106",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 105"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 107"),
                        "title_arab" => "لأَفْعَالُ عَنِ الْمَدْرَسَةِ",
                        "title" => "Pekerjaan Tentang Sekolah Bag. 1",
                        "pertemuan" => "Pertemuan 18"
                    ],
                    [
                        "tema" => "Mufrodat 107",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 106"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 108"),
                        "title_arab" => "لأَفْعَالُ عَنِ الْمَدْرَسَةِ",
                        "title" => "Pekerjaan Tentang Sekolah Bag. 1",
                        "pertemuan" => "Pertemuan 18"
                    ],
                    [
                        "tema" => "Mufrodat 108",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 107"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 109"),
                        "title_arab" => "الْمَرْكُوْبَاتُ",
                        "title" => "Kendaraan-kendaraan Bag. 1",
                        "pertemuan" => "Pertemuan 18"
                    ],
                    [
                        "tema" => "Mufrodat 109",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 108"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 110"),
                        "title_arab" => "الْمَرْكُوْبَاتُ",
                        "title" => "Kendaraan-kendaraan Bag. 2",
                        "pertemuan" => "Pertemuan 18"
                    ],
                    [
                        "tema" => "Mufrodat 110",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 109"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 111"),
                        "title_arab" => "الْمَرْكُوْبَاتُ",
                        "title" => "Kendaraan-kendaraan Bag. 3",
                        "pertemuan" => "Pertemuan 18"
                    ],
                    [
                        "tema" => "Mufrodat 111",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 110"),
                        "next" => "",
                        "title_arab" => "الْمَرْكُوْبَاتُ",
                        "title" => "Kendaraan-kendaraan Bag. 4",
                        "pertemuan" => "Pertemuan 18"
                    ],

                // per_19
                    [
                        "tema" => "Mufrodat 112",
                        "back" => "",
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 113"),
                        "title_arab" => "اْلأَفْعَالُ عَنِ الْمَرْكُوْبَات",
                        "title" => "Pekerjaan Tentang Kendaraan",
                        "pertemuan" => "Pertemuan 19"
                    ],
                    [
                        "tema" => "Mufrodat 113",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 112"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 114"),
                        "title_arab" => "الْمُسْتَشْفَى",
                        "title" => "Rumah Sakit Bag. 1",
                        "pertemuan" => "Pertemuan 19"
                    ],
                    [
                        "tema" => "Mufrodat 114",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 113"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 115"),
                        "title_arab" => "الْمُسْتَشْفَى",
                        "title" => "Rumah Sakit Bag. 2",
                        "pertemuan" => "Pertemuan 19"
                    ],
                    [
                        "tema" => "Mufrodat 115",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 114"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 116"),
                        "title_arab" => "أَسْمَاءُ الْحَيَوَانَاتِ",
                        "title" => "Nama-nama Hewan Bag. 1",
                        "pertemuan" => "Pertemuan 19"
                    ],
                    [
                        "tema" => "Mufrodat 116",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 115"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 117"),
                        "title_arab" => "أَسْمَاءُ الْحَيَوَانَاتِ",
                        "title" => "Nama-nama Hewan Bag. 2",
                        "pertemuan" => "Pertemuan 19"
                    ],
                    [
                        "tema" => "Mufrodat 117",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 116"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 118"),
                        "title_arab" => "أَسْمَاءُ الْحَيَوَانَاتِ",
                        "title" => "Nama-nama Hewan Bag. 3",
                        "pertemuan" => "Pertemuan 19"
                    ],
                    [
                        "tema" => "Mufrodat 118",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 117"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 119"),
                        "title_arab" => "أَسْمَاءُ الْحَيَوَانَاتِ",
                        "title" => "Nama-nama Hewan Bag. 4",
                        "pertemuan" => "Pertemuan 19"
                    ],

                // per_20
                    [
                        "tema" => "Mufrodat 119",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 118"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 120"),
                        "title_arab" => "أَسْمَاءُ الْحَيَوَانَاتِ",
                        "title" => "Nama-nama Hewan Bag. 1",
                        "pertemuan" => "Pertemuan 20"
                    ],
                    [
                        "tema" => "Mufrodat 120",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 119"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 121"),
                        "title_arab" => "أَسْمَاءُ الْحَيَوَانَاتِ",
                        "title" => "Nama-nama Hewan Bag. 2",
                        "pertemuan" => "Pertemuan 20"
                    ],
                    [
                        "tema" => "Mufrodat 121",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 120"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 122"),
                        "title_arab" => "أَسْمَاءُ اْلفَوَاكِهِ",
                        "title" => "Nama-nama Buah Bag. 1",
                        "pertemuan" => "Pertemuan 20"
                    ],
                    [
                        "tema" => "Mufrodat 122",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 121"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 123"),
                        "title_arab" => "أَسْمَاءُ اْلفَوَاكِهِ",
                        "title" => "Nama-nama Buah Bag. 2",
                        "pertemuan" => "Pertemuan 20"
                    ],
                    [
                        "tema" => "Mufrodat 123",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 122"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 124"),
                        "title_arab" => "أَسْمَاءُ اْلفَوَاكِهِ",
                        "title" => "Nama-nama Buah Bag. 3",
                        "pertemuan" => "Pertemuan 20"
                    ],
                    [
                        "tema" => "Mufrodat 124",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 123"),
                        "next" => "",
                        "title_arab" => "اْلأَفْعَالُ عَنِ اْلفَوَاكِهِ",
                        "title" => "Pekerjaan Tentang Buah",
                        "pertemuan" => "Pertemuan 20"
                    ],

                // per_21
                    [
                        "tema" => "Mufrodat 125",
                        "back" => "",
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 126"),
                        "title_arab" => "أَسْمَاءُ الْمَكَانِ",
                        "title" => "Nama-nama Tempat Bag. 1",
                        "pertemuan" => "Pertemuan 21"
                    ],
                    [
                        "tema" => "Mufrodat 126",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 125"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 127"),
                        "title_arab" => "أَسْمَاءُ الْمَكَانِ",
                        "title" => "Nama-nama Tempat Bag. 2",
                        "pertemuan" => "Pertemuan 21"
                    ],
                    [
                        "tema" => "Mufrodat 127",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 126"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 128"),
                        "title_arab" => "أَسْمَاءُ الْمَكَانِ",
                        "title" => "Nama-nama Tempat Bag. 3",
                        "pertemuan" => "Pertemuan 21"
                    ],
                    [
                        "tema" => "Mufrodat 128",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 127"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 129"),
                        "title_arab" => "أَسْمَاءُ الْمَكَانِ",
                        "title" => "Nama-nama Tempat Bag. 4",
                        "pertemuan" => "Pertemuan 21"
                    ],
                    [
                        "tema" => "Mufrodat 129",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 128"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 130"),
                        "title_arab" => "أَسْمَاءُ الْمَكَانِ",
                        "title" => "Nama-nama Tempat Bag. 5",
                        "pertemuan" => "Pertemuan 21"
                    ],
                    [
                        "tema" => "Mufrodat 130",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 129"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 131"),
                        "title_arab" => "أَسْمَاءُ الْمَكَانِ",
                        "title" => "Nama-nama Tempat Bag. 6",
                        "pertemuan" => "Pertemuan 21"
                    ],
                    [
                        "tema" => "Mufrodat 131",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 130"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 132"),
                        "title_arab" => "اْلأَفْعَالُ عَنِ الْمَكَانِ",
                        "title" => "Pekerjaan Tentang Tempat Bag. 1",
                        "pertemuan" => "Pertemuan 21"
                    ],
                    [
                        "tema" => "Mufrodat 132",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 131"),
                        "next" => "",
                        "title_arab" => "اْلأَفْعَالُ عَنِ الْمَكَانِ",
                        "title" => "Pekerjaan Tentang Tempat Bag. 2",
                        "pertemuan" => "Pertemuan 21"
                    ],

                // per_22
                    [
                        "tema" => "Mufrodat 133",
                        "back" => "",
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 134"),
                        "title_arab" => "العَالَمُ",
                        "title" => "Alam Semesta Bag. 1",
                        "pertemuan" => "Pertemuan 22"
                    ],
                    [
                        "tema" => "Mufrodat 134",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 133"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 135"),
                        "title_arab" => "العَالَمُ",
                        "title" => "Alam Semesta Bag. 2",
                        "pertemuan" => "Pertemuan 22"
                    ],
                    [
                        "tema" => "Mufrodat 135",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 134"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 136"),
                        "title_arab" => "العَالَمُ",
                        "title" => "Alam Semesta Bag. 3",
                        "pertemuan" => "Pertemuan 22"
                    ],
                    [
                        "tema" => "Mufrodat 136",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 135"),
                        "next" => "",
                        "title_arab" => "العَالَمُ",
                        "title" => "Alam Semesta Bag. 4",
                        "pertemuan" => "Pertemuan 22"
                    ],

                // per_23
                    [
                        "tema" => "Mufrodat 137",
                        "back" => "",
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 138"),
                        "title_arab" => "الْمِهْنَةُ",
                        "title" => "Profesi Bag. 1",
                        "pertemuan" => "Pertemuan 23"
                    ],
                    [
                        "tema" => "Mufrodat 138",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 137"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 139"),
                        "title_arab" => "الْمِهْنَةُ",
                        "title" => "Profesi Bag. 2",
                        "pertemuan" => "Pertemuan 23"
                    ],
                    [
                        "tema" => "Mufrodat 139",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 138"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 140"),
                        "title_arab" => "الْمِهْنَةُ",
                        "title" => "Profesi Bag. 3",
                        "pertemuan" => "Pertemuan 23"
                    ],
                    [
                        "tema" => "Mufrodat 140",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 139"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 141"),
                        "title_arab" => "الْمِهْنَةُ",
                        "title" => "Profesi Bag. 4",
                        "pertemuan" => "Pertemuan 23"
                    ],
                    [
                        "tema" => "Mufrodat 141",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 140"),
                        "next" => "",
                        "title_arab" => "الْمِهْنَةُ",
                        "title" => "Profesi Bag. 5",
                        "pertemuan" => "Pertemuan 23"
                    ],

                // per_24
                    [
                        "tema" => "Mufrodat 142",
                        "back" => "",
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 143"),
                        "title_arab" => "الْمِهْنَةُ",
                        "title" => "Profesi Bag. 1",
                        "pertemuan" => "Pertemuan 24"
                    ],
                    [
                        "tema" => "Mufrodat 143",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 142"),
                        "next" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 144"),
                        "title_arab" => "الْمِهْنَةُ",
                        "title" => "Profesi Bag. 2",
                        "pertemuan" => "Pertemuan 24"
                    ],
                    [
                        "tema" => "Mufrodat 144",
                        "back" => "materi/program/".MD5("Hifdzi 1")."?id=".MD5("Mufrodat 143"),
                        "next" => "",
                        "title_arab" => "الفَصْلُ",
                        "title" => "Musim",
                        "pertemuan" => "Pertemuan 24"
                    ],
                // 
            ];

            return $data;
        }
    }
    