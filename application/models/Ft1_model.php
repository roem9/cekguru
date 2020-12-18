<?php
    class Ft1_model extends CI_MODEL{
        public function kata(){
            $data = [
                // 1-9
                    $this->data_kata("1", "Mufrodat 1", "مَا", "مَا", "Apa"),
                    $this->data_kata("2", "Mufrodat 1", "مَنْ", "مَنْ", "Siapa"),
                    $this->data_kata("3", "Mufrodat 1", "مَاذَا", "مَاذَا", "Apa"),
                    $this->data_kata("4", "Mufrodat 1", "لِـمَاذَا", "لِمَاذَا", "Kenapa"),
                    $this->data_kata("5", "Mufrodat 1", "مِمَّ", "مِمَّ", "Dari apa"),
                    $this->data_kata("6", "Mufrodat 1", "بِـمَاذَا", "بِمَاذَا", "Dengan apa"),
                    $this->data_kata("7", "Mufrodat 1", "لِأَيِّ شَـيْـئٍ", "لِأَيِّ شَيْئٍ", "Untuk apa"),
                    $this->data_kata("8", "Mufrodat 1", "مَعَ مَنْ", "مَعَ مَنْ", "Bersama siapa"),
                    $this->data_kata("9", "Mufrodat 1", "لِـمَنْ", "لِمَنْ", "Untuk siapa"),
                    $this->data_kata("10", "Mufrodat 1", "أَيْنَ", "أَيْنَ", "Dimana"),
                    $this->data_kata("11", "Mufrodat 1", "إِلَـى أَيْنَ", "إِلَى أَيْنَ", "Kemana"),
                    $this->data_kata("12", "Mufrodat 1", "مِنْ أَيْنَ", "مِنْ أَيْنَ", "Darimana"),  

                    $this->data_kata("13", "Mufrodat 2", "كَيْفَ", "كَيْفَ", "Bagaimana"),
                    $this->data_kata("14", "Mufrodat 2", "مَتَـى", "مَتَى", "Kapan"),
                    $this->data_kata("15", "Mufrodat 2", "كَـمْ", "كَمْ", "Berapa"),
                    $this->data_kata("16", "Mufrodat 2", "بِكَـمْ", "بِكَمْ", "Berapa (harga)"),
                    $this->data_kata("17", "Mufrodat 2", "هَلْ / أَ", "هَلْ", "Apakah"),
                    $this->data_kata("18", "Mufrodat 2", "أَيُّ", "أَيُّ", "Yang mana"),
                    
                    $this->data_kata("19", "Mufrodat 3", "أَمَامَ", "أَمَامَ", "Didepan"),
                    $this->data_kata("20", "Mufrodat 3", "وَرَاءَ / خَلْفَ", "وَرَاءَ", "Dibelakang"),
                    $this->data_kata("21", "Mufrodat 3", "فَـوْقَ / عَلَـى", "فَوْقَ", "Diatas"),
                    $this->data_kata("22", "Mufrodat 3", "تَـحْـتَ", "تَحْتَ", "Dibawah"),
                    $this->data_kata("23", "Mufrodat 3", "دَاخِـلَ", "دَاخِلَ", "Didalam"),
                    $this->data_kata("24", "Mufrodat 3", "خَارِجَ", "خَارِجَ", "Diluar"),
                    $this->data_kata("25", "Mufrodat 3", "بَـيْـنَ", "بَيْنَ", "Diantara"),
                    $this->data_kata("26", "Mufrodat 3", "جَانِبَ", "جَانِبَ", "Disamping"),
                    $this->data_kata("27", "Mufrodat 3", "هُنَا", "هُنَا", "Disini"),
                    $this->data_kata("28", "Mufrodat 3", "هُنَاكَ", "هُنَاكَ", "Disana"),

                    $this->data_kata("29", "Mufrodat 4", "الْـيَـوْمَ", "الْيَوْمَ", "Hari ini"),
                    $this->data_kata("30", "Mufrodat 4", "الْآنَ", "الْآنَ", "Sekarang"),
                    $this->data_kata("31", "Mufrodat 4", "قَـبْـلَ", "قَبْلَ", "Sebelum"),
                    $this->data_kata("32", "Mufrodat 4", "بَـعْـدَ", "بَعْدَ", "Sesudah"),
                    $this->data_kata("33", "Mufrodat 4", "غَـدًا", "غَدًا", "Besok"),
                    $this->data_kata("34", "Mufrodat 4", "بَـعْـدَ الْـغَـدِّ", "بَعْدَ الْغَدِّ", "Besok lusa"),
                    $this->data_kata("35", "Mufrodat 4", "بِالْأَمْـسِ", "بِالْأَمْسِ", "Kemarin"),
                    $this->data_kata("36", "Mufrodat 4", "أَوَّلَ الْأَمْسِ", "أَوَّلَ الْأَمْسِ", "Kemarin lusa"),
                    $this->data_kata("37", "Mufrodat 4", "صَبَاحًا", "صَبَاحًا", "Pagi"),
                    $this->data_kata("38", "Mufrodat 4", "نَـهَارًا", "نَهَارًا", "Siang"),
                    $this->data_kata("39", "Mufrodat 4", "مَـسَاءً", "مَسَاءً", "Sore"),

                    $this->data_kata("40", "Mufrodat 5", "لَـيْـلًا", "لَيْلًا", "Malam"),
                    $this->data_kata("41", "Mufrodat 5", "لَاحِـقًا", "لَاحِقًا", "Nanti"),
                    $this->data_kata("42", "Mufrodat 5", "آنِـفًا", "آنِفًا", "Tadi"),
                    $this->data_kata("43", "Mufrodat 5", "حَـدِيْـثًا", "حَدِيْثًا", "Baru saja"),
                    $this->data_kata("44", "Mufrodat 5", "بَـعْـدَ قَـلِـيْـلٍ", "بَعْدَ قَلِيْلٍ", "Sebentar lagi"),
                    $this->data_kata("45", "Mufrodat 5", "الْأُسْـبُـوْعُ الْمَاضِـى", "الْأُسْبُوْعُ الْمَاضِى", "Minggu lalu"),
                    $this->data_kata("46", "Mufrodat 5", "الْأُسْـبُـوْعُ الْآتِى", "الْأُسْبُوْعُ الْآتِى", "Minggu depan"),
                    $this->data_kata("47", "Mufrodat 5", "الشَّـهْـرُ الْـمَاضِـى", "الشَّهْرُ الْمَاضِى", "Bulan lalu"),
                    $this->data_kata("48", "Mufrodat 5", "الشَّـهْـرُ الْآتِى", "الشَّهْرُ الْآتِى", "Bulan depan"),
                    $this->data_kata("49", "Mufrodat 5", "السَّـنَـةُ الْـمَاضِـيَـةُ", "السَّنَةُ الْمَاضِيَةُ", "Tahun lalu"),
                    $this->data_kata("50", "Mufrodat 5", "السَّـنَـةُ الْآتِـيَـةُ", "السَّنَةُ الْآتِيَةُ", "Tahun depan"),
                    
                    $this->data_kata("51", "Mufrodat 6", "عَـقْـلٌ", "عَقْلٌ", "Akal"),
                    $this->data_kata("52", "Mufrodat 6", "رَأْسٌ", "رَأْسٌ", "Kepala"),
                    $this->data_kata("53", "Mufrodat 6", "وَجْـهٌ", "وَجْهٌ", "Wajah"),
                    $this->data_kata("54", "Mufrodat 6", "شَـعْـرٌ", "شَعْرٌ", "Rambut"),
                    $this->data_kata("55", "Mufrodat 6", "جَـبْـهَـةٌ", "جَبْهَةٌ", "Dahi"),
                    $this->data_kata("56", "Mufrodat 6", "أُذُنٌ", "أُذُنٌ", "Telinga"),
                    $this->data_kata("57", "Mufrodat 6", "عَارِضٌ", "عَارِضٌ", "Jambang"),
                    $this->data_kata("58", "Mufrodat 6", "عَـيْـنٌ", "عَيْنٌ", "Mata"),
                    $this->data_kata("59", "Mufrodat 6", "أَنْـفٌ", "أَنْفٌ", "Hidung"),
                    $this->data_kata("60", "Mufrodat 6", "خَـدٌّ", "خَدٌّ", "Pipi"),
                    $this->data_kata("61", "Mufrodat 6", "سِـنٌّ", "سِنٌّ", "Gigi"),
                    $this->data_kata("62", "Mufrodat 6", "حَاجِـبٌ", "حَاجِبٌ", "Alis"),

                    $this->data_kata("63", "Mufrodat 7", "هُـدْبٌ", "هُدْبٌ", "Bulu mata"),
                    $this->data_kata("64", "Mufrodat 7", "فَـمٌّ", "فَمٌّ", "Mulut"),
                    $this->data_kata("65", "Mufrodat 7", "لِـسَانٌ", "لِسَانٌ", "Lisan"),
                    $this->data_kata("66", "Mufrodat 7", "شَارِبٌ", "شَارِبٌ", "Kumis"),
                    $this->data_kata("67", "Mufrodat 7", "لِـحْـيَـةٌ", "لِحْيَةٌ", "Jenggot"),
                    $this->data_kata("68", "Mufrodat 7", "دَمْـعَـةٌ", "دَمْعَةٌ", "Air mata"),
                    $this->data_kata("69", "Mufrodat 7", "ذَقَـنٌ", "ذَقَنٌ", "Dagu"),
                    $this->data_kata("70", "Mufrodat 7", "شَـفَـةٌ", "شَفَةٌ", "Bibir"),
                    $this->data_kata("71", "Mufrodat 7", "شَـفَـةٌ عُـلْـيَا", "شَفَةٌ عُلْيَا", "Bibir atas"),
                    $this->data_kata("72", "Mufrodat 7", "شَـفَـةٌ سُـفْـلَـى", "شَفَةٌ سُفْلَى", "Bibir bawah"),
                    $this->data_kata("73", "Mufrodat 7", "مُـخٌّ", "مُخٌّ", "Otak"),
                    $this->data_kata("74", "Mufrodat 7", "عُـنُـقٌ", "عُنُقٌ", "Leher"),
                    $this->data_kata("75", "Mufrodat 7", "جِـسْـمٌ", "جِسْمٌ", "Badan"),
                    $this->data_kata("76", "Mufrodat 7", "يَـدٌ", "يَدٌ", "Tangan"),
                    $this->data_kata("77", "Mufrodat 7", "ذِرَاعٌ", "ذِرَاعٌ", "Lengan"),

                    $this->data_kata("78", "Mufrodat 8", "بَـطْـنٌ", "بَطْنٌ", "Perut"),
                    $this->data_kata("79", "Mufrodat 8", "حَـقْـوٌ", "حَقْوٌ", "Pinggang"),
                    $this->data_kata("80", "Mufrodat 8", "كَـتِـفٌ", "كَتِفٌ", "Pundak"),
                    $this->data_kata("81", "Mufrodat 8", "ظَـهْـرٌ", "ظَهْرٌ", "Punggung"),
                    $this->data_kata("82", "Mufrodat 8", "صَـدْرٌ", "صَدْرٌ", "Dada"),
                    $this->data_kata("83", "Mufrodat 8", "ثَـدْيٌ", "ثَدْيٌ", "Payudara"),
                    $this->data_kata("84", "Mufrodat 8", "حَـلَـمَـةُ الثَّـدْيِ", "حَلَمَةُ الثَّدْيِ", "Puting payudara"),
                    $this->data_kata("85", "Mufrodat 8", "سُـرَّةٌ", "سُرَّةٌ", "Pusar"),
                    $this->data_kata("86", "Mufrodat 8", "رُكْـبَـةٌ", "رُكْبَةٌ", "Lutut"),
                    $this->data_kata("87", "Mufrodat 8", "مِـرْفَـقٌ", "مِرْفَقٌ", "Siku"),
                    $this->data_kata("88", "Mufrodat 8", "رِجْـلٌ", "رِجْلٌ", "Kaki"),
                    $this->data_kata("89", "Mufrodat 8", "فَـخِـذٌ", "فَخِذٌ", "Paha"),
                    $this->data_kata("90", "Mufrodat 8", "إِبْـطٌ", "إِبْطٌ", "Ketiak"),
                    $this->data_kata("91", "Mufrodat 8", "قَـدَمٌ", "قَدَمٌ", "Telapak kaki"),
                    $this->data_kata("92", "Mufrodat 8", "كَـعْـبٌ", "كَعْبٌ", "Mata kaki"),

                    $this->data_kata("93", "Mufrodat 9", "سَاقٌّ", "سَاقٌّ", "Betis"),
                    $this->data_kata("94", "Mufrodat 9", "ظُـفْـرٌ", "ظُفْرٌ", "Kuku"),
                    $this->data_kata("95", "Mufrodat 9", "إِبْـهَامٌ", "إِبْهَامٌ", "Ibu jari"),
                    $this->data_kata("96", "Mufrodat 9", "سَـبَابَـةٌ", "سَبَابَةٌ", "Telunjuk"),
                    $this->data_kata("97", "Mufrodat 9", "وُسْـطَـى", "وُسْطَى", "Jari tengah"),
                    $this->data_kata("98", "Mufrodat 9", "بِـنْـصِـرٌ", "بِنْصِرٌ", "Jari manis"),
                    $this->data_kata("99", "Mufrodat 9", "خِـنْـصِـرٌ", "خِنْصِرٌ", "Jari kelingking"),
                    $this->data_kata("100", "Mufrodat 9", "مَـسَامٌ", "مَسَامٌ", "Pori-pori"),
                    $this->data_kata("101", "Mufrodat 9", "عَـقِـبٌ", "عَقِبٌ", "Tumit"),
                    $this->data_kata("102", "Mufrodat 9", "شَامَـةٌ", "شَامَةٌ", "Tahi lalat"),

                    $this->data_kata("103", "Mufrodat 10", "رُوْحٌ", "رُوْحٌ", "Ruh"),
                    $this->data_kata("104", "Mufrodat 10", "لَـحْـمٌ", "لَحْمٌ", "Daging"),
                    $this->data_kata("105", "Mufrodat 10", "عَـظْـمٌ", "عَظْمٌ", "Tulang"),
                    $this->data_kata("106", "Mufrodat 10", "شَـحْـمٌ", "شَحْمٌ", "Lemak"),
                    $this->data_kata("107", "Mufrodat 10", "دَمٌ", "دَمٌ", "Darah"),
                    $this->data_kata("108", "Mufrodat 10", "قَـيْـحٌ", "قَيْحٌ", "Nanah"),
                    $this->data_kata("109", "Mufrodat 10", "مَـعْـيٌ", "مَعْيٌ", "Usus"),
                    $this->data_kata("110", "Mufrodat 10", "مَـعْـيٌ غَـلِـيْـظٌ", "مَعْيٌ غَلِيْظٌ", "Usus besar"),
                    $this->data_kata("111", "Mufrodat 10", "مَـعْـيٌ رَقِـيْـقٌ", "مَعْيٌ رَقِيْقٌ", "Usus halus"),
                    $this->data_kata("112", "Mufrodat 10", "رِئَـةٌ", "رِئَةٌ", "Paru-paru"),
                    $this->data_kata("113", "Mufrodat 10", "قَـلْـبٌ", "قَلْبٌ", "Jantung"),
                    $this->data_kata("114", "Mufrodat 10", "كَـبِـدٌ", "كَبِدٌ", "Hati"),

                    $this->data_kata("115", "Mufrodat 11", "عَـضَـلَـةٌ", "عَضَلَةٌ", "Otot"),
                    $this->data_kata("116", "Mufrodat 11", "بَـوْلٌ", "بَوْلٌ", "Kencing"),
                    $this->data_kata("117", "Mufrodat 11", "غَائِـطٌ", "غَائِطٌ", "Tahi"),
                    $this->data_kata("118", "Mufrodat 11", "ضُـرَاطٌ", "ضُرَاطٌ", "Kentut (suara)"),
                    $this->data_kata("119", "Mufrodat 11", "فُـسَاءٌ", "فُسَاءٌ", "Kentut (t.suara)"),
                    $this->data_kata("120", "Mufrodat 11", "نَـفْـسٌ", "نَفْسٌ", "Jiwa"),
                    $this->data_kata("121", "Mufrodat 11", "بُـصَاقٌ", "بُصَاقٌ", "Ludah"),
                    $this->data_kata("122", "Mufrodat 11", "عَـرَقٌ", "عَرَقٌ", "Keringat"),
                    $this->data_kata("123", "Mufrodat 11", "عِـرْقٌ", "عِرْقٌ", "Urat"),
                    $this->data_kata("124", "Mufrodat 11", "شَـرَيَانٌ", "شَرَيَانٌ", "Pembuluh"),
                    $this->data_kata("125", "Mufrodat 11", "عَـصَـبٌ", "عَصَبٌ", "Saraf"),
                    $this->data_kata("126", "Mufrodat 11", "ضِـلْـعٌ", "ضِلْعٌ", "Tulang rusuk"),

                    $this->data_kata("127", "Mufrodat 12", "أَخَـذَ - يَأْخُـذُ - أَخْـذًا", "أَخَذَ-يَأْخُذُ-أَخْذًا", "Mengambil"),
                    $this->data_kata("128", "Mufrodat 12", "أَسَّـسَ - يُـؤَسِّـسُ - تَأْسِـيْـسًا", "أَسَّسَ-يُؤَسِّسُ-تَأْسِيْسًا", "Merintis"),
                    $this->data_kata("129", "Mufrodat 12", "اِلْـتَـفَـتَ - يَـلْـتَـفِـتُ - اِلْـتِـفَاتًا", "اِلْتَفَتَ-يَلْتَفِتُ-اِلْتِفَاتًا", "Menoleh"),
                    $this->data_kata("130", "Mufrodat 12", "اِنْـتَـقَـلَ - يَـنْـتَـقِـلُ - اِنْـتِـقَالًا", "اِنْتَقَلَ-يَنْتَقِلُ-اِنْتِقَالًا", "Pindah"),
                    $this->data_kata("131", "Mufrodat 12", "بَـصَـقَ - يَـبْـصُـقُ - بَـصْـقًا", "بَصَقَ-يَبْصُقُ-بَصْقًا", "Meludah"),
                    $this->data_kata("132", "Mufrodat 12", "بَـكَـى - يَـبْـكِـي - بُـكَاءً", "بَكَى-يَبْكِي-بُكَاءً", "Menangis"),
                    $this->data_kata("133", "Mufrodat 12", "تَأَمَّـلَ - يَـتَأَمَّـلُ - تَأَمُّـلًا", "تَأَمَّلَ-يَتَأَمَّلُ-تَأَمُّلًا",  "Berangan-angan"),
                    $this->data_kata("134", "Mufrodat 12", "تَـبَـسَّـمَ - يَـتَـبَـسَّـمُ - تَـبَـسُّـمًا", "تَبَسَّمَ-يَتَبَسَّمُ-تَبَسُّمًا", "Tersenyum"),
                    $this->data_kata("135", "Mufrodat 12", "تَـحَـرَّكَ - يَـتَـحَـرَّكُ - تَـحَـرُّكًا", "تَحَرَّكَ-يَتَحَرَّكُ-تَحَرُّكًا", "Bergerak"),
                    $this->data_kata("136", "Mufrodat 12", "تَـذَكَّـرَ - يَـتَـذَكَّـرُ - تَـذَكُّـرًا", "تَذَكَّرَ-يَتَذَكَّرُ-تَذَكُّرًا", "Mengingat"),
                    $this->data_kata("137", "Mufrodat 12", "تَـفَـكَّـرَ - يَـتَـفَـكَّـرُ - تَـفَـكُّـرًا", "تَفَكَّرَ-يَتَفَكَّرُ-تَفَكُّرًا", "Memikirkan"),
                    $this->data_kata("138", "Mufrodat 12", "تَـكَـلَّـمَ - يَـتَـكَـلَّـمُ - تَـكَـلُّـمًا", "تَكَلَّمَ-يَتَكَلَّمُ-تَكَلُّمًا", "Berbicara"),

                    $this->data_kata("139", "Mufrodat 13", "تَـلَا - يَـتْـلُـو - تِـلَاوَةً", "تَلَا-يَتْلُو-تِلَاوَةً", "Bertilawah"),
                    $this->data_kata("140", "Mufrodat 13", "تَـنَـفَّـسَ - يَـتَـنَـفَّـسُ - تَـنَـفُّـسًا", "تَنَفَّسَ-يَتَنَفَّسُ-تَنَفُّسًا", "Bernafas"),
                    $this->data_kata("141", "Mufrodat 13", "حَـرَّكَ - يُـحَـرِّكُ - تَـحْـرِيْـكًا", "حَرَّكَ-يُحَرِّكُ-تَحْرِيْكًا", "Menggerakkan"),
                    $this->data_kata("142", "Mufrodat 13", "حَـسَّ - يَـحُـسُّ - حَـسًّا", "حَسَّ-يَحُسُّ-حَسًّا", "Menyentuh"),
                    $this->data_kata("143", "Mufrodat 13", "حَـكَّ - يَـحِـكُّ - حِـكًّا", "حَكَّ-يَحِكُّ-حِكًّا", "Menggaruk"),
                    $this->data_kata("144", "Mufrodat 13", "خَافَ - يَـخَافُ - خَـوْفًا", "خَافَ-يَخَافُ-خَوْفًا", "Takut"),
                    $this->data_kata("145", "Mufrodat 13", "دَلَّـكَ - يُـدَلِّـكُ - تَـدْلِـيْـكًا", "دَلَّكَ-يُدَلِّكُ-تَدْلِيْكًا", "Memijat"),
                    $this->data_kata("146", "Mufrodat 13", "ذَكَرَ-يَذْكُرُ-ذِكْرًا", "ذَكَرَ-يَذْكُرُ-ذِكْرًا", "Menyebut"),
                    $this->data_kata("147", "Mufrodat 13", "رَفَسَ-يَرْفُسُ-رَفْسًا", "رَفَسَ-يَرْفُسُ-رَفْسًا", "Menendang"),
                    $this->data_kata("148", "Mufrodat 13", "سَـمِـعَ - يَـسْـمَـعُ - سَـمْـعًا", "سَمِعَ-يَسْمَعُ-سَمْعًا", "Mendengar"),
                    $this->data_kata("149", "Mufrodat 13", "شَـمَّ - يَـشُـمُّ - شَـمًّا", "شَمَّ-يَشُمُّ-شَمًّا", "Mencium (bau)"),
                    $this->data_kata("150", "Mufrodat 13", "ضَـحِـكَ - يَـضْـحَـكُ - ضَـحْـكًا", "ضَحِكَ-يَضْحَكُ-ضَحْكًا", "Tertawa"),
                    $this->data_kata("151", "Mufrodat 13", "ضَـرَبَ - يَـضْـرِبُ - ضَـرْبًا", "ضَرَبَ-يَضْرِبُ-ضَرْبًا", "Memukul"),
                    $this->data_kata("152", "Mufrodat 13", "ضَـرَطَ - يَـضْـرِطُ - ضُـرَاطًا", "ضَرَطَ-يَضْرِطُ-ضُرَاطًا", "Kentut (suara)"),
                    $this->data_kata("153", "Mufrodat 13", "غَـضَّ - يَـغُـضُّ - غَـضًّا", "غَضَّ-يَغُضُّ-غَضًّا", "Memejamkan"),

                    $this->data_kata("154", "Mufrodat 14", "فَـسَا - يَـفْـسُـو - فُـسَاءً", "فَسَا-يَفْسُو-فُسَاءً", "Kentut"),
                    $this->data_kata("155", "Mufrodat 14", "فَـكَّـرَ - يُـفَـكِّـرُ - تَـفْـكِـيْـرًا", "فَكَّرَ-يُفَكِّرُ-تَفْكِيْرًا", "Berfikir"),
                    $this->data_kata("156", "Mufrodat 14", "قَالَ - يَـقُـوْلُ - قَـوْلًا", "قَالَ-يَقُوْلُ-قَوْلًا", "Berkata"),
                    $this->data_kata("157", "Mufrodat 14", "قَـبَّـلَ - يُـقَـبِّـلُ - تَـقْـبِـيْلًا", "قَبَّلَ-يُقَبِّلُ-تَقْبِيْلًا", "Mencium"),
                    $this->data_kata("158", "Mufrodat 14", "قَـرَأَ - يَـقْـرَأُ - قِـرَائَـةً", "قَرَأَ-يَقْرَأُ-قِرَائَةً", "Membaca"),
                    $this->data_kata("159", "Mufrodat 14", "قَـرَصَ - يَـقْـرُصُ -قَـرْصًا", "قَرَصَ-يَقْرُصُ-قَرْصًا", "Mencubit"),
                    $this->data_kata("160", "Mufrodat 14", "قَـرْفَـصَ - يُـقَـرْفِـصُ - قَـرْفَـصَـةً", "قَرْفَصَ-يُقَرْفِصُ-قَرْفَصَةً", "Jongkok"),
                    $this->data_kata("161", "Mufrodat 14", "كَـتَـبَ - يَـكْـتُـبُ - كِـتَابَـةً", "كَتَبَ-يَكْتُبُ-كِتَابَةً", "Menulis"),
                    $this->data_kata("162", "Mufrodat 14", "لَـمَـسَ - يَـلْـمِـسُ - لَـمْـسًا", "لَمَسَ-يَلْمِسُ-لَمْسًا", "Menyentuh"),
                    $this->data_kata("163", "Mufrodat 14", "مَـشَـطَ - يَـمْـشُـطُ - مَـشْـطًا", "مَشَطَ-يَمْشُطُ-مَشْطًا", "Menyisir"),
                    $this->data_kata("164", "Mufrodat 14", "نَـسِـيَ - يَـنْـسَـى - نِـسْـيَانًا", "نَسِيَ-يَنْسَى-نِسْيَانًا", "Lupa"),
                    $this->data_kata("165", "Mufrodat 14", "نَـظَـرَ - يَـنْـظُـرُ - نَـظْـرًا", "نَظَرَ-يَنْظُرُ-نَظْرًا", "Melihat"),
                    $this->data_kata("166", "Mufrodat 14", "نَـفَـخَ - يَـنْـفَـخُ - نَـفْـحًا", "نَفَخَ-يَنْفَخُ-نَفْحًا", "Meniup"),
                    $this->data_kata("167", "Mufrodat 14", "نَـفَـخَ - يَـنْـفَـخُ - نَـفْـخًا", "نَفَخَ-يَنْفَخُ-نَفْخًا", "Bernafas"),
                    $this->data_kata("168", "Mufrodat 14", "نَـقَـلَ - يَـنْـقُـلُ - نَـقْـلًا", "نَقَلَ-يَنْقُلُ-نَقْلًا", "Memindahkan"),

                    $this->data_kata("169", "Mufrodat 15", "هَـمَـسَ - يَـهْـمِـسُ - هَـمْـسًا", "هَمَسَ-يَهْمِسُ-هَمْسًا", "Berbisik"),

                    $this->data_kata("170", "Mufrodat 16", "أَبٌ / وَالِـدٌ", "وَالِدٌ", "Bapak "),
                    $this->data_kata("171", "Mufrodat 16", "أُمٌّ / وَالِدَةٌ", "وَالِدَةٌ", "Ibu"),
                    $this->data_kata("172", "Mufrodat 16", "جَـدٌّ", "جَدٌّ", "Kakek"),
                    $this->data_kata("173", "Mufrodat 16", "جَـدَّةٌ", "جَدَّةٌ", "Nenek"),
                    $this->data_kata("174", "Mufrodat 16", "زَوْجٌ", "زَوْجٌ", "Suami"),
                    $this->data_kata("175", "Mufrodat 16", "زَوْجَـةٌ", "زَوْجَةٌ", "Istri"),
                    $this->data_kata("176", "Mufrodat 16", "إِبْـنٌ", "إِبْنٌ", "Anak (lk)"),
                    $this->data_kata("177", "Mufrodat 16", "بِـنْـتٌ", "بِنْتٌ", "Anak (pr)"),
                    $this->data_kata("178", "Mufrodat 16", "حَـفِـيْـدٌ", "حَفِيْدٌ", "Cucu (lk)"),
                    $this->data_kata("179", "Mufrodat 16", "حَـفِـيْـدَةٌ", "حَفِيْدَةٌ", "Cucu (pr)"),
                    $this->data_kata("180", "Mufrodat 16", "عَـمٌّ", "عَمٌّ", "Paman dr ayah"),
                    $this->data_kata("181", "Mufrodat 16", "عَـمَّـةٌ", "عَمَّةٌ", "Bibi dari ayah"),

                    $this->data_kata("182", "Mufrodat 17", "خَالٌ", "خَالٌ", "Paman dr ibu"),
                    $this->data_kata("183", "Mufrodat 17", "خَالَـةٌ", "خَالَةٌ", "Bibi dr ibu"),
                    $this->data_kata("184", "Mufrodat 17", "أَخٌ", "أَخٌ", "Saudara (lk)"),
                    $this->data_kata("185", "Mufrodat 17", "أُخْـتٌ", "أُخْتٌ", "Saudara (pr)"),
                    $this->data_kata("186", "Mufrodat 17", "أَخٌ كَـبِـيْـرٌ", "أَخٌ كَبِيْرٌ", "Kakak (lk)"),
                    $this->data_kata("187", "Mufrodat 17", "أَخٌ صَـغِـيْـرٌ", "أَخٌ صَغِيْرٌ", "Adik (lk)"),
                    $this->data_kata("188", "Mufrodat 17", "أُخْـتٌ كَـبِـيْـرَةٌ", "أُخْتٌ كَبِيْرَةٌ", "Kakak (pr)"),
                    $this->data_kata("189", "Mufrodat 17", "أُخْـتٌ صَـغِـيْـرَةٌ", "أُخْتٌ صَغِيْرَةٌ", "Adik (pr)"),
                    $this->data_kata("190", "Mufrodat 17", "أَخٌ شَـقِـيْـقٌ", "أَخٌ شَقِيْقٌ", "Saudara (lk) kandung"),
                    $this->data_kata("191", "Mufrodat 17", "أُخْـتٌ شَـقِـيْـقَـةٌ", "أُخْتٌ شَقِيْقَةٌ", "Saudara (pr) kandung"),
                    $this->data_kata("192", "Mufrodat 17", "رَبِـيْـبٌ", "رَبِيْبٌ", "Anak tiri (lk)"),
                    $this->data_kata("193", "Mufrodat 17", "رَبِـيْـبَـةٌ", "رَبِيْبَةٌ", "Anak tiri (pr)"),
                    $this->data_kata("194", "Mufrodat 17", "عَـزَبٌ", "عَزَبٌ", "Perjaka"),
                    $this->data_kata("195", "Mufrodat 17", "عَـذْرَاءُ", "عَذْرَاءُ", "Gadis"),
                    $this->data_kata("196", "Mufrodat 17", "أَرْمَـلٌ", "أَرْمَلٌ", "Duda"),

                    $this->data_kata("197", "Mufrodat 18", "أَرْمَـلَـةٌ", "أَرْمَلَةٌ", "Janda"),
                    $this->data_kata("198", "Mufrodat 18", "صِـهْـرٌ", "صِهْرٌ", "Menantu (lk)"),
                    $this->data_kata("199", "Mufrodat 18", "صِـهْـرَةٌ", "صِهْرَةٌ", "Menantu (pr)"),
                    $this->data_kata("200", "Mufrodat 18", "حَـمٌ", "حَمٌ", "Mertua (lk)"),
                    $this->data_kata("201", "Mufrodat 18", "حَـمَاةٌ", "حَمَاةٌ", "Mertua (pr)"),
                    $this->data_kata("202", "Mufrodat 18", "فَـتَـى / شَابٌّ", "شَابٌّ", "Pemuda"),
                    $this->data_kata("203", "Mufrodat 18", "فَـتَاةٌ / شَابَّةٌ", "شَابَّةٌ", "Pemudi"),

                    $this->data_kata("204", "Mufrodat 19", "رَبَّـي - يُـرَبِّـي - تَـرْبِـيَّـةً", "رَبَّي-يُرَبِّي-تَرْبِيَّةً", "Mendidik "),
                    $this->data_kata("205", "Mufrodat 19", "حَـضَـنَ - يَـحْـضُـنُ - حَـضَانَـةً", "حَضَنَ-يَحْضُنُ-حَضَانَةً", "Mengasuh"),
                    $this->data_kata("206", "Mufrodat 19", "أَحَـبَّ - يُـحِـبُّ - مَـحَـبَّـةً", "أَحَبَّ-يُحِبُّ-مَحَبَّةً", "Mencintai "),
                    $this->data_kata("207", "Mufrodat 19", "رَحِـمَ - يَـرْحَـمُ - رَحْـمَـةً", "رَحِمَ-يَرْحَمُ-رَحْمَةً", "Menyayangi"),
                    $this->data_kata("208", "Mufrodat 19", "اِحْـتَـرَمَ - يَـحْـتَـرِمُ - اِحْـتِـرَامًا", "اِحْتَرَمَ-يَحْتَرِمُ-اِحْتِرَامًا", "Menghormati"),
                    $this->data_kata("209", "Mufrodat 19", "جَـرَحَ - يَـجْـرَحُ - جَـرْحًا", "جَرَحَ-يَجْرَحُ-جَرْحًا", "Melukai"),
                    $this->data_kata("210", "Mufrodat 19", "أَهَانَ - يُـهِـيْـنُ - إِهَانَـةً", "أَهَانَ-يُهِيْنُ-إِهَانَةً", "Menghina"),
                    $this->data_kata("211", "Mufrodat 19", "دَعَا - يَـدْعُـو - دَعْـوَةً", "دَعَا-يَدْعُو-دَعْوَةً", "Mengajak/ Memanggil"),
                    $this->data_kata("212", "Mufrodat 19", "أَمَـرَ - يَأْمُـرُ - أَمْـرًا", "أَمَرَ-يَأْمُرُ-أَمْرًا", "Memerintah "),
                    $this->data_kata("213", "Mufrodat 19", "رَضِـعَ - يَـرْضَـعُ - رَضَاعَـةً", "رَضِعَ-يَرْضَعُ-رَضَاعَةً", "Menyusu"),
                    $this->data_kata("214", "Mufrodat 19", "أَرْضَـعَ - يُـرْضِـعُ - إِرْضَاعًا", "أَرْضَعَ-يُرْضِعُ-إِرْضَاعًا", "Menyusui"),
                    $this->data_kata("215", "Mufrodat 19", "نَـصَـحَ - يَـنْـصَـحُ - نَـصِـيْـحَـةً", "نَصَحَ-يَنْصَحُ-نَصِيْحَةً", "Menasehati"),

                    $this->data_kata("216", "Mufrodat 20", "نَـصَـرَ - يَـنْـصُـرُ - نَـصْـرًا", "نَصَرَ-يَنْصُرُ-نَصْرًا", "Menolong"),
                    $this->data_kata("217", "Mufrodat 20", "بَلَغَ - يَبْلُغُ - بُلُوغًا", "بَلَغَ-يَبْلُغُ-بُلُوغًا", "Sampai "),
                    $this->data_kata("218", "Mufrodat 20", "مَزَحَ - يَمْزَحُ - مِزَاحًا", "مَزَحَ-يَمْزَحُ-مِزَاحًا", "Bercanda "),
                    $this->data_kata("219", "Mufrodat 20", "اِعْـتَـرَفَ - يَـعْـتَـرِفُ - اِعْـتِـرَافًا", "اِعْتَرَفَ-يَعْتَرِفُ-اِعْتِرَافًا", "Mengakui "),
                    $this->data_kata("220", "Mufrodat 20", "رَجَـى - يَـرْجُـو - رَجَاءً", "رَجَى-يَرْجُو-رَجَاءً", "Berharap"),
                    $this->data_kata("221", "Mufrodat 20", "صَارَ - يَـصِـيْـرُ - صَـيْـرًا", "صَارَ-يَصِيْرُ-صَيْرًا", "Menjadi"),
                    $this->data_kata("222", "Mufrodat 20", "اِحْـتَاجَ - يَـحْـتَاجُ - اِحْـتِـيَاجًا", "اِحْتَاجَ-يَحْتَاجُ-اِحْتِيَاجًا", "Butuh"),
                    $this->data_kata("223", "Mufrodat 20", "قَـلَـقَ - يَـقْـلَـقُ - قَـلَـقًا", "قَلَقَ-يَقْلَقُ-قَلَقًا", "Galau"),
                    $this->data_kata("224", "Mufrodat 20", "كَـلَّـفَ - يُـكَـلِّـفُ - تَـكْـلِـيْـفًا", "كَلَّفَ-يُكَلِّفُ-تَكْلِيْفًا", "Membebani "),
                    $this->data_kata("225", "Mufrodat 20", "صَاحَ - يَـصِـيْـحُ - صَـيْـحًا", "صَاحَ-يَصِيْحُ-صَيْحًا", "Berteriak"),
                    $this->data_kata("226", "Mufrodat 20", "ضَـحِـكَ - يَـضْـحَـكُ -ضَـحْـكًا", "ضَحِكَ-يَضْحَكُ-ضَحْكًا", "Tertawa"),
                    $this->data_kata("227", "Mufrodat 20", "سَـكَـتَ - يَـسْـكُـتُ - سُـكُـوْتًا", "سَكَتَ-يَسْكُتُ-سُكُوْتًا", "Diam"),

                    $this->data_kata("228", "Mufrodat 21", "مُـتَـوَاضِـعٌ", "مُتَوَاضِعٌ", "Rendah hati"),
                    $this->data_kata("229", "Mufrodat 21", "حَـكِـيْـمٌ", "حَكِيْمٌ", "Bijaksana"),
                    $this->data_kata("230", "Mufrodat 21", "صَابِـرٌ", "صَابِرٌ", "Penyabar"),
                    $this->data_kata("231", "Mufrodat 21", "مُـتَـوَحِّـشٌ", "مُتَوَحِّشٌ", "Kejam"),
                    $this->data_kata("232", "Mufrodat 21", "مُـتَـكَـبِّـرٌ", "مُتَكَبِّرٌ", "Sombong"),
                    $this->data_kata("233", "Mufrodat 21", "غَـضْـبَانُ", "غَضْبَانُ", "Pemarah "),
                    $this->data_kata("234", "Mufrodat 21", "مِـغْـنَاجٌ", "مِغْنَاجٌ", "Genit"),
                    $this->data_kata("235", "Mufrodat 21", "نَـهَّامٌ", "نَهَّامٌ", "Rakus"),
                    $this->data_kata("236", "Mufrodat 21", "أَمِـيْـنٌ", "أَمِيْنٌ", "Dapat dipercaya"),
                    $this->data_kata("237", "Mufrodat 21", "صَادِقٌ", "صَادِقٌ", "Jujur"),
                    $this->data_kata("238", "Mufrodat 21", "كَاذِبٌ", "كَاذِبٌ", "Pembohong"),
                    $this->data_kata("239", "Mufrodat 21", "مُـجْـتَـهِـدٌ", "مُجْتَهِدٌ", "Sungguh-sungguh"),

                    $this->data_kata("240", "Mufrodat 22", "كَـسْـلَانٌ", "كَسْلَانٌ", "Malas"),
                    $this->data_kata("241", "Mufrodat 22", "حَـسُـوْدٌ", "حَسُوْدٌ", "Dengki"),
                    $this->data_kata("242", "Mufrodat 22", "سَـخِـيٌّ", "سَخِيٌّ", "Dermawan"),
                    $this->data_kata("243", "Mufrodat 22", "بَـخِـيْـلٌ", "بَخِيْلٌ", "Pelit"),
                    $this->data_kata("244", "Mufrodat 22", "شُـجَاعٌ", "شُجَاعٌ", "Berani"),
                    $this->data_kata("245", "Mufrodat 22", "جَـبَّانٌ", "جَبَّانٌ", "Penakut"),
                    $this->data_kata("246", "Mufrodat 22", "أَنِـيْـسٌ", "أَنِيْسٌ", "Ramah"),
                    $this->data_kata("247", "Mufrodat 22", "مُـشَاغِـبٌ", "مُشَاغِبٌ", "Nakal"),
                    $this->data_kata("248", "Mufrodat 22", "لَـطِـيْـفٌ", "لَطِيْفٌ", "Imut"),
                    $this->data_kata("249", "Mufrodat 22", "جَـمِـيْـلٌ", "جَمِيْلٌ", "Ganteng"),
                    $this->data_kata("250", "Mufrodat 22", "جَـمِـيْـلَـةٌ", "جَمِيْلَةٌ", "Cantik"),
                    $this->data_kata("251", "Mufrodat 22", "مَـرَحٌ", "مَرَحٌ", "Periang"),
                    $this->data_kata("252", "Mufrodat 22", "أَنِـيْـقٌ", "أَنِيْقٌ", "Anggun"),
                    $this->data_kata("253", "Mufrodat 22", "مُـهْـمِـلٌ", "مُهْمِلٌ", "Cuek"),
                    $this->data_kata("254", "Mufrodat 22", "خَـشِـنٌ", "خَشِنٌ", "Kasar"),

                    $this->data_kata("255", "Mufrodat 23", "حَـقُـوْدٌ", "حَقُوْدٌ", "Dengki"),
                    $this->data_kata("256", "Mufrodat 23", "ثَـرْثَارٌ", "ثَرْثَارٌ", "Cerewet"),
                    $this->data_kata("257", "Mufrodat 23", "شَـهِـيْـرٌ", "شَهِيْرٌ", "Terkenal "),
                    $this->data_kata("258", "Mufrodat 23", "عَاطِـفِـيٌّ", "عَاطِفِيٌّ", "Romantis "),
                    $this->data_kata("259", "Mufrodat 23", "كَـتُـوْمٌ", "كَتُوْمٌ", "Pendiam"),
                    $this->data_kata("260", "Mufrodat 23", "دَلُّـوْعٌ", "دَلُّوْعٌ", "Manja"),
                    $this->data_kata("261", "Mufrodat 23", "أَنَانِـيٌّ", "أَنَانِيٌّ", "Egois "),
                    $this->data_kata("262", "Mufrodat 23", "مُـتَـعَـنِّـتٌ", "مُتَعَنِّتٌ", "Bandel"),
                    $this->data_kata("263", "Mufrodat 23", "حَـسَّاسٌ", "حَسَّاسٌ", "Penyentuh"),
                    $this->data_kata("264", "Mufrodat 23", "حَـنِـيْـنٌ", "حَنِيْنٌ", "Penyayang"),
                    $this->data_kata("265", "Mufrodat 23", "مَاهِـرٌ", "مَاهِرٌ", "Pintar"),
                    $this->data_kata("266", "Mufrodat 23", "جَاهِـلٌ", "جَاهِلٌ", "Bodoh"),
                    $this->data_kata("267", "Mufrodat 23", "ذَكِـيٌّ", "ذَكِيٌّ", "Cerdas"),
                    $this->data_kata("268", "Mufrodat 23", "غَـبِـيٌّ", "غَبِيٌّ", "Tolol "),
                    $this->data_kata("269", "Mufrodat 23", "طَـفْـشَانُ", "طَفْشَانُ", "Jenuh"),

                    $this->data_kata("270", "Mufrodat 24", "نَـعْـسَانُ", "نَعْسَانُ", "Ngantuk "),
                    $this->data_kata("271", "Mufrodat 24", "تَـعْـبَانُ", "تَعْبَانُ", "Capek"),
                    $this->data_kata("272", "Mufrodat 24", "جَـوْعَانُ", "جَوْعَانُ", "Lapar"),
                    $this->data_kata("273", "Mufrodat 24", "عَـطْـشَانُ", "عَطْشَانُ", "Haus"),
                    $this->data_kata("274", "Mufrodat 24", "مَـجْـنُـوْنٌ", "مَجْنُوْنٌ", "Gila"),
                    $this->data_kata("275", "Mufrodat 24", "أَصَـمٌّ", "أَصَمٌّ", "Tuli"),
                    $this->data_kata("276", "Mufrodat 24", "أَعْـمَـى", "أَعْمَى", "Buta"),
                    $this->data_kata("277", "Mufrodat 24", "أَبْـكَـمٌ", "أَبْكَمٌ", "Bisu"),
                    $this->data_kata("278", "Mufrodat 24", "قَـزَمٌ", "قَزَمٌ", "Kerdil "),
                    $this->data_kata("279", "Mufrodat 24", "أَصْـلَـعُ", "أَصْلَعُ", "Botak"),
                    $this->data_kata("280", "Mufrodat 24", "عَـدِيْـمُ السِّـنِّ", "عَدِيْمُ السِّنِّ", "Ompong"),
                    $this->data_kata("281", "Mufrodat 24", "مِـسْـكِـيْـنٌ", "مِسْكِيْنٌ", "Miskin "),
                    $this->data_kata("282", "Mufrodat 24", "غَـنِـيٌّ", "غَنِيٌّ", "Kaya"),
                    $this->data_kata("283", "Mufrodat 24", "مِـثَالِـيٌّ", "مِثَالِيٌّ", "Sempurna"),
                    $this->data_kata("284", "Mufrodat 24", "بَـسِـيْـطٌ", "بَسِيْطٌ", "Sederhana"),

                    $this->data_kata("285", "Mufrodat 25", "مُـبَـذِّرٌ", "مُبَذِّرٌ", "Boros"),
                    $this->data_kata("286", "Mufrodat 25", "مُـقْـتَـصِـدٌ", "مُقْتَصِدٌ", "Hemat"),
                    $this->data_kata("287", "Mufrodat 25", "عَادِلٌ", "عَادِلٌ", "Adil"),
                    $this->data_kata("288", "Mufrodat 25", "غَـيْـرُ عَادِلٍ", "غَيْرُ عَادِلٍ", "Tidak adil"),
                    $this->data_kata("289", "Mufrodat 25", "قَـوِيٌّ", "قَوِيٌّ", "Kuat"),
                    $this->data_kata("290", "Mufrodat 25", "ضَـعِـيْـفٌ", "ضَعِيْفٌ", "Lemah"),
                    $this->data_kata("291", "Mufrodat 25", "عَـجُـوْزٌ", "عَجُوْزٌ", "Tua"),
                    $this->data_kata("292", "Mufrodat 25", "سَـعِـيْـدٌ", "سَعِيْدٌ", "Bahagia"),
                    $this->data_kata("293", "Mufrodat 25", "شَـقِـيٌّ", "شَقِيٌّ", "Sengsara"),
                    $this->data_kata("294", "Mufrodat 25", "مَـحْـمُـوْدٌ", "مَحْمُوْدٌ", "Terpuji"),
                    $this->data_kata("295", "Mufrodat 25", "مَـذْمُـوْمٌ", "مَذْمُوْمٌ", "Tercela"),
                    $this->data_kata("296", "Mufrodat 25", "رَابِـحٌ", "رَابِحٌ", "Untung"),
                    $this->data_kata("297", "Mufrodat 25", "خَاسِـرٌ", "خَاسِرٌ", "Rugi"),
                    $this->data_kata("298", "Mufrodat 25", "سَـمِـيْـنٌ", "سَمِيْنٌ", "Gendut"),
                    $this->data_kata("299", "Mufrodat 25", "هَـزِيْـلٌ", "هَزِيْلٌ", "Kurus"),

                    $this->data_kata("300", "Mufrodat 26", "مَـشْـغُـوْلٌ", "مَشْغُوْلٌ", "Repot"),
                    $this->data_kata("301", "Mufrodat 26", "عَاطِـلٌ", "عَاطِلٌ", "Nganggur"),
                    $this->data_kata("302", "Mufrodat 26", "صِـحَّـةٌ", "صِحَّةٌ", "Sehat"),
                    $this->data_kata("303", "Mufrodat 26", "مَـرِيْـضٌ", "مَرِيْضٌ", "Sakit"),
                    $this->data_kata("304", "Mufrodat 26", "صَـحِـيْـحٌ", "صَحِيْحٌ", "Sehat"),
                    $this->data_kata("305", "Mufrodat 26", "مُـخْـطِـئٌ", "مُخْطِئٌ", "Salah"),
                    $this->data_kata("306", "Mufrodat 26", "فَائِـزٌ", "فَائِزٌ", "Menang"),
                    $this->data_kata("307", "Mufrodat 26", "مَـغْـلُـوْبٌ", "مَغْلُوْبٌ", "Kalah"),
                    $this->data_kata("308", "Mufrodat 26", "ثِـقَّـةُ النَّـفْـسِ", "ثِقَّةُ النَّفْسِ",  "Percaya diri"),
                    $this->data_kata("309", "Mufrodat 26", "مُـقْـتَـنِـعٌ", "مُقْتَنِعٌ", "Puas"),
                    $this->data_kata("310", "Mufrodat 26", "مُـسْـتَـعْـجِـلٌ", "مُسْتَعْجِلٌ", "Terburu-buru"),
                    $this->data_kata("311", "Mufrodat 26", "جَادٌّ", "جَادٌّ", "Serius"),
                    $this->data_kata("312", "Mufrodat 26", "مُـحْـبِـطٌ", "مُحْبِطٌ", "Frustasi"),
                    $this->data_kata("313", "Mufrodat 26", "فُـضُـوْلِـيٌّ", "فُضُوْلِيٌّ", "Penasaran "),
                    $this->data_kata("314", "Mufrodat 26", "مُـتَـفَـهِّـمٌ", "مُتَفَهِّمٌ", "Perhatian"),

                    $this->data_kata("315", "Mufrodat 27", "مُـبَالِـغٌ", "مُبَالِغٌ", "Lebay"),
                    $this->data_kata("316", "Mufrodat 27", "قَـلِـقٌ", "قَلِقٌ", "Galau"),
                    $this->data_kata("317", "Mufrodat 27", "مُـخْـجِـلٌ", "مُخْجِلٌ", "Malu-maluin"),
                    $this->data_kata("318", "Mufrodat 27", "مُـمْـتِـعٌ", "مُمْتِعٌ", "Menyenangkan"),
                    $this->data_kata("319", "Mufrodat 27", "مُـجْـرِمٌ", "مُجْرِمٌ", "Jahat"),
                    $this->data_kata("320", "Mufrodat 27", "مُـثِـيْـرٌ", "مُثِيْرٌ", "Menggemaskan"),
                    $this->data_kata("321", "Mufrodat 27", "مَـمْـسُـوْسٌ", "مَمْسُوْسٌ", "Tersentuh"),
                    $this->data_kata("322", "Mufrodat 27", "مَـلَـلٌ", "مَلَلٌ", "Bosan"),
                    $this->data_kata("323", "Mufrodat 27", "مُـمِـلٌّ", "مُمِلٌّ", "Membosankan "),
                    $this->data_kata("324", "Mufrodat 27", "مُـرْتَاحٌ", "مُرْتَاحٌ", "Betah "),
                    $this->data_kata("325", "Mufrodat 27", "مُـتَأَكِّـدٌ", "مُتَأَكِّدٌ", "Yakin"),
                    $this->data_kata("326", "Mufrodat 27", "مُـتَـرَدِّدٌ", "مُتَرَدِّدٌ", "Ragu-ragu"),
                    $this->data_kata("327", "Mufrodat 27", "مُـتَـفَاجِـئٌ", "مُتَفَاجِئٌ", "Kaget"),
                    $this->data_kata("328", "Mufrodat 27", "تَائِـبٌ", "تَائِبٌ", "Kapok"),
                    $this->data_kata("329", "Mufrodat 27", "مُـتَـحَـيِّـرٌ", "مُتَحَيِّرٌ", "Bingung"),

                    $this->data_kata("330", "Mufrodat 28", "زَعْـلَانُ", "زَعْلَانُ", "Ngambek"),
                    $this->data_kata("331", "Mufrodat 28", "مُـسْـتَـسْـلِـمٌ", "مُسْتَسْلِمٌ", "Menyerah"),
                    $this->data_kata("332", "Mufrodat 28", "سَـرِيْـعُ الـنِّـسْـيَانِ", "سَرِيْعُ النِّسْيَانِ", "Pelupa"),

                    $this->data_kata("333", "Mufrodat 29", "جِـدَارٌ", "جِدَارٌ", "Tembok "),
                    $this->data_kata("334", "Mufrodat 29", "سُـوْرٌ", "سُوْرٌ", "Pagar"),
                    $this->data_kata("335", "Mufrodat 29", "صُـوْرَةٌ", "صُوْرَةٌ", "Gambar"),
                    $this->data_kata("336", "Mufrodat 29", "سَاعَـةٌ", "سَاعَةٌ", "Jam"),
                    $this->data_kata("337", "Mufrodat 29", "سَاعَـةُ الْـجِـدَارِ", "سَاعَةُ الْجِدَارِ", "Jam dinding"),
                    $this->data_kata("338", "Mufrodat 29", "مَـكْـتَـبٌ", "مَكْتَبٌ", "Kantor"),
                    $this->data_kata("339", "Mufrodat 29", "كُـرْسِـيٌّ", "كُرْسِيٌّ", "Kursi"),
                    $this->data_kata("340", "Mufrodat 29", "خِـزَانَـةٌ", "خِزَانَةٌ", "Almari"),
                    $this->data_kata("341", "Mufrodat 29", "دَوْلَـبٌ", "دَوْلَبٌ", "Bupet"),
                    $this->data_kata("342", "Mufrodat 29", "مِـرْوَحَـةٌ", "مِرْوَحَةٌ", "Kipas angin"),
                    $this->data_kata("343", "Mufrodat 29", "بَابٌ", "بَابٌ", "Pintu"),
                    $this->data_kata("344", "Mufrodat 29", "نَافِـذَةٌ", "نَافِذَةٌ", "Jendela"),

                    
                    $this->data_kata("345", "Mufrodat 30", "غُـرْفَـةٌ", "غُرْفَةٌ", "Kamar"),
                    $this->data_kata("346", "Mufrodat 30", "شُـرْفَـةٌ", "شُرْفَةٌ", "Teras"),
                    $this->data_kata("347", "Mufrodat 30", "سَاحَـةٌ", "سَاحَةٌ", "Halaman "),
                    $this->data_kata("348", "Mufrodat 30", "أَرِيْـكَـةٌ", "أَرِيْكَةٌ", "Sofa"),
                    $this->data_kata("349", "Mufrodat 30", "مِـكْـنَـسَـةٌ", "مِكْنَسَةٌ", "Sapu"),
                    $this->data_kata("350", "Mufrodat 30", "غَالُـوْنٌ", "غَالُوْنٌ", "Galon"),
                    $this->data_kata("351", "Mufrodat 30", "بِـلَاطٌ", "بِلَاطٌ", "Lantai"),
                    $this->data_kata("352", "Mufrodat 30", "بِـسَاطٌ", "بِسَاطٌ", "Karpet"),
                    $this->data_kata("353", "Mufrodat 30", "حَـصِـيْـرَةٌ", "حَصِيْرَةٌ", "Keset"),
                    $this->data_kata("354", "Mufrodat 30", "مِـصْـبَاحٌ", "مِصْبَاحٌ", "Lampu"),
                    $this->data_kata("355", "Mufrodat 30", "سِـلْـكٌ", "سِلْكٌ", "Kabel "),
                    $this->data_kata("356", "Mufrodat 30", "مَـنْـفَـضَّـةُ السَّـجَائِـرِ", "مَنْفَضَّةُ السَّجَائِرِ", "Asbak"),
                    $this->data_kata("357", "Mufrodat 30", "تَـقْـوِيْـمٌ", "تَقْوِيْمٌ", "Kalender"),
                    $this->data_kata("358", "Mufrodat 30", "ثَـلَّاجَـةٌ", "ثَلَّاجَةٌ", "Kulkas"),
                    $this->data_kata("359", "Mufrodat 30", "سُـلَّـمٌ", "سُلَّمٌ", "Tangga"),
                    
                    $this->data_kata("360", "Mufrodat 31", "شَـمْـعٌ", "شَمْعٌ", "Lilin"),
                    $this->data_kata("361", "Mufrodat 31", "مِـفْـتَاحٌ", "مِفْتَاحٌ", "Kunci"),
                    $this->data_kata("362", "Mufrodat 31", "قُـفْـلٌ", "قُفْلٌ", "Gembok"),
                    $this->data_kata("363", "Mufrodat 31", "تِـلْـفَازٌ", "تِلْفَازٌ", "Televisi"),
                    $this->data_kata("364", "Mufrodat 31", "بَـوَّابَـةٌ", "بَوَّابَةٌ", "Gerbang"),
                    $this->data_kata("365", "Mufrodat 31", "سَـقْـفٌ", "سَقْفٌ", "Atap"),
                    $this->data_kata("366", "Mufrodat 31", "مِـكْـوَاةٌ", "مِكْوَاةٌ", "Setrika"),
                    $this->data_kata("367", "Mufrodat 31", "خُـوْذَةٌ", "خُوْذَةٌ", "Helm"),
                    $this->data_kata("368", "Mufrodat 31", "عُـلْـبَـةٌ", "عُلْبَةٌ", "Kardus"),
                    $this->data_kata("369", "Mufrodat 31", "رَفٌّ", "رَفٌّ", "Rak"),
                    $this->data_kata("370", "Mufrodat 31", "زُقَاقٌ", "زُقَاقٌ", "Gang"),
                    
                    $this->data_kata("371", "Mufrodat 32", "كَـنَـسَ - يَـكْـنُـسُ - كَـنْـسًا", "كَنَسَ-يَكْنُسُ-كَنْسًا", "Menyapu"),
                    $this->data_kata("372", "Mufrodat 32", "نَـظَّـفَ - يُـنَـظِّـفُ - تَـنْـظِـيْـفًا", "نَظَّفَ-يُنَظِّفُ-تَنْظِيْفًا", "Membersihkan"),
                    $this->data_kata("373", "Mufrodat 32", "وَسَّـخَ - يُـوَسِّـخُ - تَـوْسِـيْـخًا", "وَسَّخَ-يُوَسِّخُ-تَوْسِيْخًا", "Mengotori"),


                    $this->data_kata("374", "Mufrodat 32", "دَخَّـنَ - يُـدَخِّـنُ - تَـدْخِـيْـنًا", "دَخَّنَ-يُدَخِّنُ-تَدْخِيْنًا", "Merokok"),
                    $this->data_kata("375", "Mufrodat 32", "جَـلَـسَ - يَـجْـلِـسُ - جُـلُـوْسًا", "جَلَسَ-يَجْلِسُ-جُلُوْسًا", "Duduk"),
                    $this->data_kata("376", "Mufrodat 32", "قَـعَـدَ - يَـقْـعُـدُ - قُـعُـودًا", "قَعَدَ-يَقْعُدُ-قُعُودًا", "Duduk"),
                    $this->data_kata("377", "Mufrodat 32", "قَامَ - يَـقُـوْمُ - قِـيَامًا", "قَامَ-يَقُوْمُ-قِيَامًا", "Berdiri"),
                    $this->data_kata("378", "Mufrodat 32", "دَخَـلَ - يَـدْخُـلُ - دُخُـوْلًا", "دَخَلَ-يَدْخُلُ-دُخُوْلًا", "Masuk"),
                    $this->data_kata("379", "Mufrodat 32", "خَـرَجَ - يَـخْـرُجُ - خُـرُوْجًا", "خَرَجَ-يَخْرُجُ-خُرُوْجًا", "Keluar"),
                    $this->data_kata("380", "Mufrodat 32", "وَضَـعَ - يَـضَـعُ - وَضْـعًا", "وَضَعَ-يَضَعُ-وَضْعًا", "Meletakkan"),
                    $this->data_kata("381", "Mufrodat 32", "نَـقَـلَ - يَـنْـقُـلُ - نَـقْـلًا", "نَقَلَ-يَنْقُلُ-نَقْلًا", "Memindahkan"),
                    $this->data_kata("382", "Mufrodat 32", "بَـدَّلَ - يُـبَـدِّلُ - تَـبْـدِيْـلًا", "بَدَّلَ-يُبَدِّلُ-تَبْدِيْلًا", "Mengganti"),
                    $this->data_kata("383", "Mufrodat 32", "أَشْـعَـلَ - يُـشْـعِـلُ - إِشْـعَالًا", "أَشْعَلَ-يُشْعِلُ-إِشْعَالًا", "Menyalakan"),
                    $this->data_kata("384", "Mufrodat 32", "اِنْـشَـعَـلَ - يَـنْـشَـعِـلُ - اِنْـشِـعَالًا", "اِنْشَعَلَ-يَنْشَعِلُ-اِنْشِعَالًا", "Menyala"),
                    $this->data_kata("385", "Mufrodat 32", "أَطْـفَأَ - يُـطْـفِـئُ - إِطْـفَاءً", "أَطْفَأَ-يُطْفِئُ-إِطْفَاءً", "Memadamkan"),
                    $this->data_kata("386", "Mufrodat 32", "اِنْـطَـفَأَ - يَـنْـطَـفِـئُ - اِنْـطِـفَاءً", "اِنْطَفَأَ-يَنْطَفِئُ-اِنْطِفَاءً", "Padam"),
                    $this->data_kata("387", "Mufrodat 32", "صَـعِـدَ - يَـصْـعَـدُ - صُـعُـوْدًا", "صَعِدَ-يَصْعَدُ-صُعُوْدًا", "Naik"),
                    $this->data_kata("388", "Mufrodat 32", "نَـزَلَ - يَـنْـزِلُ - نُـزُوْلًا", "نَزَلَ-يَنْزِلُ-نُزُوْلًا", "Turun"),

                    $this->data_kata("389", "Mufrodat 33", "كَـنَـسَ - يَـكْـنُـسُ - كَـنْـسًا", "كَنَسَ-يَكْنُسُ-كَنْسًا", "Menyapu"),
                    $this->data_kata("390", "Mufrodat 33", "شَاهَـدَ - يُـشَاهِـدُ - مُـشَاهَـدَةً", "شَاهَدَ-يُشَاهِدُ-مُشَاهَدَةً", "Menonton"),
                    $this->data_kata("391", "Mufrodat 33", "هَـجَـرَ - يَـهْـجُـرُ - هَـجْـرًا", "هَجَرَ-يَهْجُرُ-هَجْرًا", "Berpindah"),
                    $this->data_kata("392", "Mufrodat 33", "فَـضَّـلَ - يُـفَـضِّـلُ - تَـفْـضِـيْـلًا", "فَضَّلَ-يُفَضِّلُ-تَفْضِيْلًا", "Mengutamakan"),
                    $this->data_kata("393", "Mufrodat 33", "وَاجَـهَ - يُـوَاجِـهُ - مُـوَاجَـهَـةً", "وَاجَهَ-يُوَاجِهُ-مُوَاجَهَةً", "Menghadapi"),

                    $this->data_kata("394", "Mufrodat 34", "أَسْـوَدُ", "أَسْوَدُ", "Hitam"),
                    $this->data_kata("395", "Mufrodat 34", "أَبْـيَـضُ", "أَبْيَضُ", "Putih"),
                    $this->data_kata("396", "Mufrodat 34", "أَحْـمَـرُ", "أَحْمَرُ", "Merah"),
                    $this->data_kata("397", "Mufrodat 34", "وَرْدِيٌّ", "وَرْدِيٌّ", "Pink"),
                    $this->data_kata("398", "Mufrodat 34", "أَصْـفَـرُ", "أَصْفَرُ", "Kuning"),
                    $this->data_kata("399", "Mufrodat 34", "أَزْرَقُ", "أَزْرَقُ", "Biru"),
                    $this->data_kata("400", "Mufrodat 34", "أَخْـضَـرُ", "أَخْضَرُ", "Hijau"),
                    $this->data_kata("401", "Mufrodat 34", "أَسْـمَـرُ", "أَسْمَرُ", "Coklat"),
                    $this->data_kata("402", "Mufrodat 34", "رَمَادِى", "رَمَادِى", "Abu-abu"),
                    $this->data_kata("403", "Mufrodat 34", "بُـرْتُـقَالِـيٌّ", "بُرْتُقَالِيٌّ", "Orange"),
                    $this->data_kata("404", "Mufrodat 34", "بَـنَـفْـسَـجِـيُّ", "بَنَفْسَجِيُّ", "Ungu"),
                    $this->data_kata("405", "Mufrodat 34", "ذَهَـبِـيٌّ", "ذَهَبِيٌّ", "Keemasan"),

                    $this->data_kata("406", "Mufrodat 35", "كَـبِـيْـرٌ", "كَبِيْرٌ", "Besar"),
                    $this->data_kata("407", "Mufrodat 35", "صَـغِـيْـرٌ", "صَغِيْرٌ", "Kecil"),
                    $this->data_kata("408", "Mufrodat 35", "طَـوِيْـلٌ", "طَوِيْلٌ", "Panjang"),
                    $this->data_kata("409", "Mufrodat 35", "قَـصِـيْـرٌ", "قَصِيْرٌ", "Pendek"),
                    $this->data_kata("410", "Mufrodat 35", "وَاسِـعٌ", "وَاسِعٌ", "Luas"),
                    $this->data_kata("411", "Mufrodat 35", "ضَـيِّـقٌ", "ضَيِّقٌ", "Sempit"),
                    $this->data_kata("412", "Mufrodat 35", "عَـمِـيْـقٌ", "عَمِيْقٌ", "Dalam"),
                    $this->data_kata("413", "Mufrodat 35", "ضَـحْـلٌ", "ضَحْلٌ", "Dangkal"),
                    $this->data_kata("414", "Mufrodat 35", "كَـثِـيْـرٌ", "كَثِيْرٌ", "Banyak"),
                    $this->data_kata("415", "Mufrodat 35", "قَـلِـيْـلٌ", "قَلِيْلٌ", "Sedikit"),
                    $this->data_kata("416", "Mufrodat 35", "نَـظِـيْـفٌ", "نَظِيْفٌ", "Bersih"),
                    $this->data_kata("417", "Mufrodat 35", "وَسِـخٌ", "وَسِخٌ", "Kotor"),

                    $this->data_kata("418", "Mufrodat 36", "رَخِـيْـصٌ", "رَخِيْصٌ", "Murah"),
                    $this->data_kata("419", "Mufrodat 36", "غَالٍ", "غَالٍ", "Mahal"),
                    $this->data_kata("420", "Mufrodat 36", "غَـلِـيْـظٌ", "غَلِيْظٌ", "Tebal"),
                    $this->data_kata("421", "Mufrodat 36", "رَقِـيْـقٌ", "رَقِيْقٌ", "Tipis"),
                    $this->data_kata("422", "Mufrodat 36", "رَطْـبٌ", "رَطْبٌ", "Basah"),
                    $this->data_kata("423", "Mufrodat 36", "يَابِـسٌ", "يَابِسٌ", "Kering"),
                    $this->data_kata("424", "Mufrodat 36", "جَامِـدٌ", "جَامِدٌ", "Keras"),
                    $this->data_kata("425", "Mufrodat 36", "مَائِـعٌ", "مَائِعٌ", "Cair"),
                    $this->data_kata("426", "Mufrodat 36", "نَاعِـمٌ", "نَاعِمٌ", "Halus"),
                    $this->data_kata("427", "Mufrodat 36", "خَـشِـنٌ", "خَشِنٌ", "Kasar"),
                    $this->data_kata("428", "Mufrodat 36", "قَـرِيْـبٌ", "قَرِيْبٌ", "Dekat"),
                    $this->data_kata("429", "Mufrodat 36", "بَـعِـيْـدٌ", "بَعِيْدٌ", "Jauh"),
                    $this->data_kata("430", "Mufrodat 36", "صَافٍ", "صَافٍ", "Jernih"),
                    $this->data_kata("431", "Mufrodat 36", "كَـدِرٌ", "كَدِرٌ", "Keruh"),
                    $this->data_kata("432", "Mufrodat 36", "سَـرِيْـعٌ", "سَرِيْعٌ", "Cepat"),

                    $this->data_kata("433", "Mufrodat 37", "بَـطِـيْـئٌ", "بَطِيْئٌ", "Lambat"),
                    $this->data_kata("434", "Mufrodat 37", "صَـعْـبٌ", "صَعْبٌ", "Sulit"),
                    $this->data_kata("435", "Mufrodat 37", "سَـهْـلٌ", "سَهْلٌ", "Mudah"),
                    $this->data_kata("436", "Mufrodat 37", "ثَـقِـيْـلٌ", "ثَقِيْلٌ", "Berat"),
                    $this->data_kata("437", "Mufrodat 37", "خَـفِـيْـفٌ", "خَفِيْفٌ", "Ringan"),
                    $this->data_kata("438", "Mufrodat 37", "كَامِـلٌ", "كَامِلٌ", "Lengkap"),
                    $this->data_kata("439", "Mufrodat 37", "نَاقِـصٌ", "نَاقِصٌ", "Kurang"),
                    $this->data_kata("440", "Mufrodat 37", "مُـنِـيْـرٌ", "مُنِيْرٌ", "Terang"),
                    $this->data_kata("441", "Mufrodat 37", "مُـظْـلِـمٌ", "مُظْلِمٌ", "Gelap"),
                    $this->data_kata("442", "Mufrodat 37", "آمِـنٌ", "آمِنٌ", "Aman"),
                    $this->data_kata("443", "Mufrodat 37", "خَـطِـيْـرٌ", "خَطِيْرٌ", "Bahaya"),
                    $this->data_kata("444", "Mufrodat 37", "لَائِقٌ", "لَائِقٌ", "Cocok"),
                    $this->data_kata("445", "Mufrodat 37", "حَـيٌّ", "حَيٌّ", "Hidup"),
                    $this->data_kata("446", "Mufrodat 37", "مَـيِّـتٌ", "مَيِّتٌ", "Mati"),
                    $this->data_kata("447", "Mufrodat 37", "مَـفْـتُـوْحٌ", "مَفْتُوْحٌ", "Terbuka"),

                    $this->data_kata("448", "Mufrodat 38", "مُـغْـلَـقٌ", "مُغْلَقٌ", "Tertutup"),
                    $this->data_kata("449", "Mufrodat 38", "أَصْـلِـيٌّ", "أَصْلِيٌّ", "Asli"),
                    $this->data_kata("450", "Mufrodat 38", "زَائِـفٌ", "زَائِفٌ", "Palsu"),
                    $this->data_kata("451", "Mufrodat 38", "مُـقْـلِـقٌ", "مُقْلِقٌ", "Khawatir"),
                    $this->data_kata("452", "Mufrodat 38", "عَامِـرٌ", "عَامِرٌ", "Ramai"),
                    $this->data_kata("453", "Mufrodat 38", "هَادِئٌ", "هَادِئٌ", "Tenang"),
                    $this->data_kata("454", "Mufrodat 38", "مُـسْـتَـرِيْـحٌ", "مُسْتَرِيْحٌ", "Santai"),
                    $this->data_kata("455", "Mufrodat 38", "صَـحِـيْـحٌ", "صَحِيْحٌ", "Benar"),
                    $this->data_kata("456", "Mufrodat 38", "خَـطَاءٌ", "خَطَاءٌ", "Salah"),

                    $this->data_kata("457", "Mufrodat 39", "ثَـوْبٌ", "ثَوْبٌ", "Baju"),
                    $this->data_kata("458", "Mufrodat 39", "قَـمِـيْـصٌ", "قَمِيْصٌ", "Kemeja"),
                    $this->data_kata("459", "Mufrodat 39", "بَـنْـطَـلُـوْنٌ", "بَنْطَلُوْنٌ", "Celana panjang"),
                    $this->data_kata("460", "Mufrodat 39", "سِـرْوَالٌ", "سِرْوَالٌ", "Celana pendek"),
                    $this->data_kata("461", "Mufrodat 39", "خِـمَارٌ", "خِمَارٌ", "Kerudung"),
                    $this->data_kata("462", "Mufrodat 39", "قَـلَـنْـسُـوَةٌ", "قَلَنْسُوَةٌ", "Peci"),
                    $this->data_kata("463", "Mufrodat 39", "فَـنِـيْـلَـةٌ", "فَنِيْلَةٌ", "Kaos dalam"),
                    $this->data_kata("464", "Mufrodat 39", "حَـرِيْـرٌ", "حَرِيْرٌ", "Sutera"),
                    $this->data_kata("465", "Mufrodat 39", "جَـوْرَبٌ", "جَوْرَبٌ", "Kaos kaki"),
                    $this->data_kata("466", "Mufrodat 39", "تَـنُّـوْرَةٌ", "تَنُّوْرَةٌ", "Rok"),
                    $this->data_kata("467", "Mufrodat 39", "لِـفَاعٌ", "لِفَاعٌ", "Selendang"),
                    $this->data_kata("468", "Mufrodat 39", "حَـمَّالَـةُ الـصَّـدْرِ", "حَمَّالَةُ الصَّدْرِ", "BH"),

                    $this->data_kata("469", "Mufrodat 40", "عِـمَامَـةٌ", "عِمَامَةٌ", "Serban"),
                    $this->data_kata("470", "Mufrodat 40", "إِزَارٌ", "إِزَارٌ", "Sarung"),
                    $this->data_kata("471", "Mufrodat 40", "جَاكِـيْـتٌ", "جَاكِيْتٌ", "Jaket"),
                    $this->data_kata("472", "Mufrodat 40", "كِـسَاءٌ", "كِسَاءٌ", "Jas"),
                    $this->data_kata("473", "Mufrodat 40", "مِـعْـطَـفٌ", "مِعْطَفٌ", "Rompi"),
                    $this->data_kata("474", "Mufrodat 40", "قُـبَّـعَـةٌ", "قُبَّعَةٌ", "Topi"),
                    $this->data_kata("475", "Mufrodat 40", "مِـظَـلَّـةٌ", "مِظَلَّةٌ", "Payung"),
                    $this->data_kata("476", "Mufrodat 40", "سِـرْوَالٌ دَاخِـلِـيٌّ", "سِرْوَالٌ دَاخِلِيٌّ", "Celana dalam"),
                    $this->data_kata("477", "Mufrodat 40", "نَـعْـلٌ", "نَعْلٌ", "Sandal"),
                    $this->data_kata("478", "Mufrodat 40", "حِـذَاءٌ", "حِذَاءٌ", "Sepatu"),
                    $this->data_kata("479", "Mufrodat 40", "لِـبَاسٌ رَسْـمِـيٌّ", "لِبَاسٌ رَسْمِيٌّ", "Seragam"),
                    $this->data_kata("480", "Mufrodat 40", "مِـنْـشَـفَـةٌ", "مِنْشَفَةٌ", "Handuk"),
                    $this->data_kata("481", "Mufrodat 40", "حِـزَامٌ", "حِزَامٌ", "Sabuk"),
                    $this->data_kata("482", "Mufrodat 40", "زِرٌّ", "زِرٌّ", "Kancing"),
                    $this->data_kata("483", "Mufrodat 40", "جَـيْـبٌ", "جَيْبٌ", "Saku"),
                    
                    $this->data_kata("484", "Mufrodat 41", "خَـيْـطٌ", "خَيْطٌ", "Benang"),
                    $this->data_kata("485", "Mufrodat 41", "إِبْـرَةٌ", "إِبْرَةٌ", "Jarum"),
                    $this->data_kata("486", "Mufrodat 41", "يَاقَـةٌ", "يَاقَةٌ", "Kerah"),
                    $this->data_kata("487", "Mufrodat 41", "رِبَاطٌ", "رِبَاطٌ", "Dasi"),
                    $this->data_kata("488", "Mufrodat 41", "سِـوَارٌ", "سِوَارٌ", "Gelang"),
                    $this->data_kata("489", "Mufrodat 41", "قِـلَادَةٌ", "قِلَادَةٌ", "Kalung"),
                    $this->data_kata("490", "Mufrodat 41", "حَـلْـقَـةٌ", "حَلْقَةٌ", "Anting-anting"),
                    $this->data_kata("491", "Mufrodat 41", "خَاتَـمٌ", "خَاتَمٌ", "Cincin"),
                    $this->data_kata("492", "Mufrodat 41", "ذَهَـبٌ", "ذَهَبٌ", "Emas"),
                    $this->data_kata("493", "Mufrodat 41", "فِـضَّـةٌ", "فِضَّةٌ", "Perak"),
                    $this->data_kata("494", "Mufrodat 41", "شِـبْـهَانٌ", "شِبْهَانٌ", "Kuningan"),
                    $this->data_kata("495", "Mufrodat 41", "مَاسَـةٌ", "مَاسَةٌ", "Berlian"),
                    $this->data_kata("496", "Mufrodat 41", "أَلْـمَاسٌ", "أَلْمَاسٌ", "Intan"),
                    $this->data_kata("497", "Mufrodat 41", "لُـؤْلُـؤٌ", "لُؤْلُؤٌ", "Mutiara"),

                    $this->data_kata("498", "Mufrodat 42", "لَـبِـسَ - يَـلْـبَـسُ - لُـبْـسًا", "لَبِسَ-يَلْبَسُ-لُبْسًا", "Memakai"),
                    $this->data_kata("499", "Mufrodat 42", "اِسْـتَـعْـمَـلَ - يَـسْـتَـعْـمِـلُ - اِسْـتِـعْـمَالًا", "اِسْتَعْمَلَ-يَسْتَعْمِلُ-اِسْتِعْمَالًا", "Menggunakan"),
                    $this->data_kata("500", "Mufrodat 42", "طَـوَى - يَـطْـوِي - طَـيًّا", "طَوَى-يَطْوِي-طَيًّا", "Melipat"),
                    $this->data_kata("501", "Mufrodat 42", "كَـوَى - يَـكْـوِي - كَـوًّا", "كَوَى-يَكْوِي-كَوًّا", "Menyetrika"),
                    $this->data_kata("502", "Mufrodat 42", "رَتَّـبَ - يُـرَتِّـبُ - تَـرْتِـيْـبًا", "رَتَّبَ-يُرَتِّبُ-تَرْتِيْبًا", "Merapikan"),
                    $this->data_kata("503", "Mufrodat 42", "طَـوَّلَ - يُـطَـوِّلُ - تَـطْـوِيْـلًا", "طَوَّلَ-يُطَوِّلُ-تَطْوِيْلًا", "Memanjangkan"),
                    $this->data_kata("504", "Mufrodat 42", "قَـصَّـرَ - يُـقَـصِّـرُ - تَـقْـصِـيْـرًا", "قَصَّرَ-يُقَصِّرُ-تَقْصِيْرًا", "Memendekkan"),
                    $this->data_kata("505", "Mufrodat 42", "كَـبَّـرَ - يُـكَـبِّـرُ - تَـكْـبِـيْـرًا", "كَبَّرَ-يُكَبِّرُ-تَكْبِيْرًا", "Membesarkan"),
                    $this->data_kata("506", "Mufrodat 42", "صَـغَّـرَ - يُـصَـغِّـرُ - تَـصْـغِـيْـرًا", "صَغَّرَ-يُصَغِّرُ-تَصْغِيْرًا", "Mengecilkan"),
                    $this->data_kata("507", "Mufrodat 42", "خَاطَ - يَـخِـيْـطُ - خَـيْـطًا", "خَاطَ-يَخِيْطُ-خَيْطًا", "Menjahit"),
                    $this->data_kata("508", "Mufrodat 42", "رَقَـعَ - يَـرْقَـعُ - رَقْـعًا", "رَقَعَ-يَرْقَعُ-رَقْعًا", "Menambal"),
                    $this->data_kata("509", "Mufrodat 42", "نَـسَـجَ - يَـنْـسُـجُ - نَـسْـجًا", "نَسَجَ-يَنْسُجُ-نَسْجًا", "Menenun"),

                    $this->data_kata("510", "Mufrodat 43", "سَـرِيْـرٌ", "سَرِيْرٌ", "Ranjang"),
                    $this->data_kata("511", "Mufrodat 43", "مُـلَاءَةُ الـسَّـرِيْـرِ", "مُلَاءَةُ السَّرِيْرِ", "Sprei"),
                    $this->data_kata("512", "Mufrodat 43", "فِـرَاشٌ", "فِرَاشٌ", "Kasur"),
                    $this->data_kata("513", "Mufrodat 43", "وِسَادَةٌ", "وِسَادَةٌ", "Bantal"),
                    $this->data_kata("514", "Mufrodat 43", "وِسَادَةٌ مُـسْـتَـطِـيْـلَـةٌ", "وِسَادَةٌ مُسْتَطِيْلَةٌ", "Guling"),
                    $this->data_kata("515", "Mufrodat 43", "لِـحَافٌ", "لِحَافٌ", "Selimut"),
                    $this->data_kata("516", "Mufrodat 43", "حَـصِـيْـرٌ", "حَصِيْرٌ", "Tikar"),
                    $this->data_kata("517", "Mufrodat 43", "سَـجَّادَةٌ", "سَجَّادَةٌ", "Sajadah"),
                    $this->data_kata("518", "Mufrodat 43", "مِـرْآةٌ", "مِرْآةٌ", "Kaca cermin"),
                    $this->data_kata("519", "Mufrodat 43", "مُـشْـطٌ", "مُشْطٌ", "Sisir"),
                    $this->data_kata("520", "Mufrodat 43", "مَـسْـحُـوْقٌ", "مَسْحُوْقٌ", "Bedak"),
                    $this->data_kata("521", "Mufrodat 43", "الْـقُـطْـنُ", "الْقُطْنُ", "Kapas"),
                    
                    $this->data_kata("522", "Mufrodat 44", "قَـطِـيْـفَـةٌ", "قَطِيْفَةٌ", "Permadani"),
                    $this->data_kata("523", "Mufrodat 44", "نَامُـوْسِـيَّـةٌ", "نَامُوْسِيَّةٌ", "Kelambu"),
                    $this->data_kata("524", "Mufrodat 44", "الـسَّاعَـةُ الْـمُـنَـبِّـهَـةُ", "السَّاعَةُ الْمُنَبِّهَةُ", "Jam Beker"),
                    $this->data_kata("525", "Mufrodat 44", "جَـوَّالٌ", "جَوَّالٌ", "HP"),

                    $this->data_kata("526", "Mufrodat 45", "نَامَ - يَـنَامُ - نَـوْمًا", "نَامَ-يَنَامُ-نَوْمًا", "Tidur"),
                    $this->data_kata("527", "Mufrodat 45", "اِسْـتَـلْـقَـى - يَـسْـتَـلْـقِـى - اِسْـتِـلْـقَاءً", "اِسْتَلْقَى-يَسْتَلْقِى-اِسْتِلْقَاءً", "Terlentang"),
                    $this->data_kata("528", "Mufrodat 45", "خَـرْخَـرَ - يُـخَـرْخِـرُ - خَـرْخَـرَةً", "خَرْخَرَ-يُخَرْخِرُ-خَرْخَرَةً", "Mendengkur"),
                    $this->data_kata("529", "Mufrodat 45", "هَـذَا - يَـهْـذِى - هَـذْيًا", "هَذَا-يَهْذِى-هَذْيًا", "Mengigau"),
                    $this->data_kata("530", "Mufrodat 45", "سَالَ - يَـسِـيْـلُ - سَـيْـلًا لُـعَابُـهُ", "سَالَ-يَسِيْلُ-سَيْلًا لُعَابُهُ", "Mengiler"),
                    $this->data_kata("531", "Mufrodat 45", "قَـرْفَـصَ - يُـقَـرْفِـصُ - قَـرْفَـصَـةً", "قَرْفَصَ-يُقَرْفِصُ-قَرْفَصَةً", "Jongkok"),
                    $this->data_kata("532", "Mufrodat 45", "تَـرَبَّـعَ - يَـتَـرَبَّـعُ - تَـرَبُّـعًا", "تَرَبَّعَ-يَتَرَبَّعُ-تَرَبُّعًا", "Bersila"),

                    $this->data_kata("533", "Mufrodat 46", "مَـوْقِـدٌ", "مَوْقِدٌ", "Kompor"),
                    $this->data_kata("534", "Mufrodat 46", "قِـدْرٌ", "قِدْرٌ", "Panci"),
                    $this->data_kata("535", "Mufrodat 46", "مِـقْـلَاةٌ", "مِقْلَاةٌ", "Wajan"),
                    $this->data_kata("536", "Mufrodat 46", "مَائِـدَةٌ", "مَائِدَةٌ", "Meja Makan"),
                    $this->data_kata("537", "Mufrodat 46", "مِـقْـلَـبٌ", "مِقْلَبٌ", "Spatula"),
                    $this->data_kata("538", "Mufrodat 46", "إِبْـرِيْـقٌ", "إِبْرِيْقٌ", "Teko"),
                    $this->data_kata("539", "Mufrodat 46", "كُـوْبٌ", "كُوْبٌ", "Gelas"),
                    $this->data_kata("540", "Mufrodat 46", "صَـحْـنٌ", "صَحْنٌ", "Piring"),
                    $this->data_kata("541", "Mufrodat 46", "إِنَاءٌ", "إِنَاءٌ", "Mangkok"),
                    $this->data_kata("542", "Mufrodat 46", "طَـبَـقٌ", "طَبَقٌ", "Nampan"),
                    $this->data_kata("543", "Mufrodat 46", "فِـنْـجَانٌ", "فِنْجَانٌ", "Cangkir"),
                    $this->data_kata("544", "Mufrodat 46", "مِـلْـعَـقَـةٌ", "مِلْعَقَةٌ", "Sendok"),

                    $this->data_kata("545", "Mufrodat 47", "كُـوْزٌ", "كُوْزٌ", "Kendi"),
                    $this->data_kata("546", "Mufrodat 47", "قَارُوْرَةٌ", "قَارُوْرَةٌ", "Botol"),
                    $this->data_kata("547", "Mufrodat 47", "مِـلْـعَـقَـةُ الـشَّايِ", "مِلْعَقَةُ الشَّايِ", "Sendok Teh"),
                    $this->data_kata("548", "Mufrodat 47", "مِـلْـعَـقَـةُ الـرُّزِّ", "مِلْعَقَةُ الرُّزِّ", "Sendok Nasi"),
                    $this->data_kata("549", "Mufrodat 47", "مِـلْـعَـقَـةُ الْـمَـرَقِ", "مِلْعَقَةُ الْمَرَقِ", "Sendok Kuah"),
                    $this->data_kata("550", "Mufrodat 47", "شَـوْكَـةٌ", "شَوْكَةٌ", "Garpu"),
                    $this->data_kata("551", "Mufrodat 47", "رَفُّ الـصُّـحُـوْنِ", "رَفُّ الصُّحُوْنِ", "Rak Piring"),
                    $this->data_kata("552", "Mufrodat 47", "تِـرْمُـسٌ", "تِرْمُسٌ", "Termos"),
                    $this->data_kata("553", "Mufrodat 47", "كِـبْـرِيْـتٌ", "كِبْرِيْتٌ", "Korek Kayu"),
                    $this->data_kata("554", "Mufrodat 47", "وَلَّاعَـةٌ", "وَلَّاعَةٌ", "Korek Gas", "لَّا"),
                    $this->data_kata("555", "Mufrodat 47", "غَازٌ", "غَازٌ", "Gas"),
                    $this->data_kata("556", "Mufrodat 47", "مِـصْـفَاةٌ", "مِصْفَاةٌ", "Saringan"),
                    $this->data_kata("557", "Mufrodat 47", "سِـكِّـيْـنٌ", "سِكِّيْنٌ", "Pisau"),
                    $this->data_kata("558", "Mufrodat 47", "مَاءٌ", "مَاءٌ", "Air"),
                    $this->data_kata("559", "Mufrodat 47", "رُزٌّ", "رُزٌّ", "Nasi"),

                    $this->data_kata("560", "Mufrodat 48", "قَـصْـعَـةُ الْـمِـدَقِّ", "قَصْعَةُ الْمِدَقِّ", "Cobek"),
                    $this->data_kata("561", "Mufrodat 48", "مِـدَقٌّ", "مِدَقٌّ", "Ulekan"),
                    $this->data_kata("562", "Mufrodat 48", "مِـقْـشَـطَـةٌ", "مِقْشَطَةٌ", "Parutan"),
                    $this->data_kata("563", "Mufrodat 48", "هَاوُنٌ", "هَاوُنٌ", "Lesung"),
                    $this->data_kata("564", "Mufrodat 48", "نَارٌ", "نَارٌ", "Api"),
                    $this->data_kata("565", "Mufrodat 48", "فَـحْـمٌ", "فَحْمٌ", "Arang"),
                    $this->data_kata("566", "Mufrodat 48", "جَـمْـرَةٌ", "جَمْرَةٌ", "Bara Api"),
                    $this->data_kata("567", "Mufrodat 48", "دُخَانٌ", "دُخَانٌ", "Asap"),
                    $this->data_kata("568", "Mufrodat 48", "بُـخَارٌ", "بُخَارٌ", "Uap"),
                    $this->data_kata("569", "Mufrodat 48", "حَـطَـبٌ", "حَطَبٌ", "Kayu Bakar"),
                    $this->data_kata("570", "Mufrodat 48", "رَمَادٌ", "رَمَادٌ", "Abu"),
                    $this->data_kata("571", "Mufrodat 48", "سُكَّرٌ","سُكَّرٌ", "Gula"),
                    $this->data_kata("572", "Mufrodat 48", "مِـلْـحٌ", "مِلْحٌ", "Garam"),
                    $this->data_kata("573", "Mufrodat 48", "قَـهْـوَةٌ", "قَهْوَةٌ", "Kopi"),
                    $this->data_kata("574", "Mufrodat 48", "بُـنٌّ", "بُنٌّ", "Biji Kopi"),

                    $this->data_kata("575", "Mufrodat 49", "شَايٌ", "شَايٌ", "Teh"),
                    $this->data_kata("576", "Mufrodat 49", "فِـلْـفِـلٌ", "فِلْفِلٌ", "Cabe"),
                    $this->data_kata("577", "Mufrodat 49", "بَـصَـلٌ", "بَصَلٌ", "Bawang Merah"),
                    $this->data_kata("578", "Mufrodat 49", "ثُـوْمٌ", "ثُوْمٌ", "Bawang Putih"),
                    $this->data_kata("579", "Mufrodat 49", "زَنْـجَـبِـيْـلٌ", "زَنْجَبِيْلٌ", "Jahe"),
                    $this->data_kata("580", "Mufrodat 49", "خَـوْلَـجَانٌ", "خَوْلَجَانٌ", "Lengkuas"),
                    $this->data_kata("581", "Mufrodat 49", "كُـزْبَـرَةٌ", "كُزْبَرَةٌ", "Ketumbar"),
                    $this->data_kata("582", "Mufrodat 49", "كَـرَفْـسٌ", "كَرَفْسٌ", "Seledri"),
                    $this->data_kata("583", "Mufrodat 49", "قَـرَنْـفِـلٌ", "قَرَنْفِلٌ", "Cengkeh"),
                    $this->data_kata("584", "Mufrodat 49", "كُـرْكُـمٌ", "كُرْكُمٌ", "Kunyit"),
                    $this->data_kata("585", "Mufrodat 49", "سَـبَانَـخٌ", "سَبَانَخٌ", "Bayam"),
                    $this->data_kata("586", "Mufrodat 49", "جَـزَرٌ", "جَزَرٌ", "Wortel"),
                    $this->data_kata("587", "Mufrodat 49", "بَـطَاطِـسٌ", "بَطَاطِسٌ", "Kentang"),
                    $this->data_kata("588", "Mufrodat 49", "خِـيَارٌ", "خِيَارٌ", "Timun"),
                    $this->data_kata("589", "Mufrodat 49", "بَاذِنْـجَانٌ", "بَاذِنْجَانٌ", "Terong"),

                    $this->data_kata("590", "Mufrodat 50", "كُـرْنُـبٌ", "كُرْنُبٌ", "Kubis"),
                    $this->data_kata("591", "Mufrodat 50", "جَـوْزُ الْـهِـنْـدِ", "جَوْزُ الْهِنْدِ", "Kelapa"),
                    $this->data_kata("592", "Mufrodat 50", "بُـنْـدُقٌ", "بُنْدُقٌ", "Kemiri"),
                    $this->data_kata("593", "Mufrodat 50", "تُـنْـبُـوْلٌ", "تُنْبُوْلٌ", "Sirih"),
                    $this->data_kata("594", "Mufrodat 50", "صَـلْـصَـةٌ حَارَّةٌ", "صَلْصَةٌ حَارَّةٌ", "Sambal"),
                    $this->data_kata("595", "Mufrodat 50", "كَـتْـشَابٌ", "كَتْشَابٌ", "Saus"),
                    $this->data_kata("596", "Mufrodat 50", "صَـلْـصَـةُ الـصُّـوْيَا", "صَلْصَةُ الصُّوْيَا", "Kecap"),
                    $this->data_kata("597", "Mufrodat 50", "دَقِـيْـقٌ", "دَقِيْقٌ", "Tepung"),
                    $this->data_kata("598", "Mufrodat 50", "زُبْـدَةٌ", "زُبْدَةٌ", "Mentega"),

                    $this->data_kata("599", "Mufrodat 51", "أَكَـلَ - يَأْكُـلُ - أَكْـلًا", "أَكَلَ-يَأْكُلُ-أَكْلًا", "Makan"),
                    $this->data_kata("600", "Mufrodat 51", "شَـرِبَ - يَـشْـرَبُ - شَـرَبًا", "شَرِبَ-يَشْرَبُ-شَرَبًا", "Minum"),
                    $this->data_kata("601", "Mufrodat 51", "طـبَـخَ - يَـطْـبَـخُ - طَـبْـخًا", "طَبَخَ-يَطْبَخُ-طَبْخًا", "Memasak"),
                    $this->data_kata("602", "Mufrodat 51", "قَـلَـى - يَـقْـلِـى - قَـلْـيًا", "قَلَى-يَقْلِى-قَلْيًا", "Menggoreng"),
                    $this->data_kata("603", "Mufrodat 51", "شَـوَى - يَـشْـوِى - شَـوَاءً", "شَوَى-يَشْوِى-شَوَاءً", "Memanggang"),
                    $this->data_kata("604", "Mufrodat 51", "لَـحِـسَ - يَـلْـحَـسُ - لَـحْـسًا", "لَحِسَ-يَلْحَسُ-لَحْسًا", "Menjilat"),
                    $this->data_kata("605", "Mufrodat 51", "بَـلَـعَ - يَـبْـلَـعُ - بَـلْـعًا", "بَلَعَ-يَبْلَعُ-بَلْعًا", "Menelan"),
                    $this->data_kata("606", "Mufrodat 51", "مَـضَـعَ - يَـمْـضَـعُ - مَـضْـعًا", "مَضَعَ-يَمْضَعُ-مَضْعًا", "Mengunyah"),
                    $this->data_kata("607", "Mufrodat 51", "عَـضَّ - يَـعَـضُّ - عَـضًّا", "عَضَّ-يَعَضُّ-عَضًّا", "Menggigit"),
                    $this->data_kata("608", "Mufrodat 51", "تَـذَوَّقَ - يَـتَـذَوَّقُ - تَـذَوُّقًا", "تَذَوَّقَ-يَتَذَوَّقُ-تَذَوُّقًا", "Mencicipi"),
                    $this->data_kata("609", "Mufrodat 51", "شَـرَّحَ - يُـشَـرِّحُ - تَـشْـرِيْـحًا", "شَرَّحَ-يُشَرِّحُ-تَشْرِيْحًا", "Mengiris"),
                    $this->data_kata("610", "Mufrodat 51", "قَـشَّـرَ-يُـقَـشِّـرُ-تَـقْـشِـيْـرًا", "قَشَّرَ-يُقَشِّرُ-تَقْشِيْرًا", "Mengupas"),

                    $this->data_kata("611", "Mufrodat 52", "قَـطَـعَ-يَـقْـطَـعُ-قَـطْـعًا", "قَطَعَ-يَقْطَعُ-قَطْعًا", "Memotong"),
                    $this->data_kata("612", "Mufrodat 52", "اِنْـقَـطَـعَ-يَـنْـقَـطِـعُ-اِنْـقِـطَاعًا", "اِنْقَطَعَ-يَنْقَطِعُ-اِنْقِطَاعًا", "Terpotong"),
                    $this->data_kata("613", "Mufrodat 52", "هَـيَّأَ-يُـهَـيِّءُ-تَـهْـيِـيْـئًا", "هَيَّأَ-يُهَيِّءُ-تَهْيِيْئًا", "Menghidangkan"),
                    $this->data_kata("614", "Mufrodat 52", "خَـلَـطَ-يَـخْـلِـطُ-خَـلْـطًا", "خَلَطَ-يَخْلِطُ-خَلْطًا", "Mencampur"),
                    $this->data_kata("615", "Mufrodat 52", "اِخْـتَـلَـطَ-يَـخْـتَـلِـطُ-اِخْـتِـلَاطًا", "اِخْتَلَطَ-يَخْتَلِطُ-اِخْتِلَاطًا", "Tercampur"),
                    $this->data_kata("616", "Mufrodat 52", "اِسْـتَـهْـلَـكَ-يَـسْـتَـهْـلِـكُ-اِسْـتِـهْـلَاكًا", "اِسْتَهْلَكَ-يَسْتَهْلِكُ-اِسْتِهْلَاكًا", "Mengkonsumsi"),
                    $this->data_kata("617", "Mufrodat 52", "قَـنَـعَ-يَـقْـنَـعُ-قَـنَاعَـةً", "قَنَعَ-يَقْنَعُ-قَنَاعَةً", "Puas"),
                    $this->data_kata("618", "Mufrodat 52", "مَـتَّـعَ-يُـمَـتِّـعُ-تَـمْـتِـيْـعًا", "مَتَّعَ-يُمَتِّعُ-تَمْتِيْعًا", "Menikmati"),
                    $this->data_kata("619", "Mufrodat 52", "مَـزَّقَ-يُـمَـزِّقُ-تَـمْـزِيْـقًا", "مَزَّقَ-يُمَزِّقُ-تَمْزِيْقًا", "Menyobek"),
                    $this->data_kata("620", "Mufrodat 52", "تَـسَـوَّقَ-يَـتَـسَـوَّقُ-تَـسَـوُّقًا", "تَسَوَّقَ-يَتَسَوَّقُ-تَسَوُّقًا", "Belanja"),

                    $this->data_kata("621", "Mufrodat 53", "طَـعْـمٌ", "طَعْمٌ", "Rasa"),
                    $this->data_kata("622", "Mufrodat 53", "حُـلْـوٌ", "حُلْوٌ", "Manis"),
                    $this->data_kata("623", "Mufrodat 53", "مَالِـحٌ", "مَالِحٌ", "Asin"),
                    $this->data_kata("624", "Mufrodat 53", "مُـرٌّ", "مُرٌّ", "Pahit"),
                    $this->data_kata("625", "Mufrodat 53", "حَـرٌّ", "حَرٌّ", "Panas"),
                    $this->data_kata("626", "Mufrodat 53", "بَارِدٌ", "بَارِدٌ", "Dingin"),
                    $this->data_kata("627", "Mufrodat 53", "حِـرِّيْـفٌ", "حِرِّيْفٌ", "Pedas"),
                    $this->data_kata("628", "Mufrodat 53", "حَامِـضٌ", "حَامِضٌ", "Asam"),
                    $this->data_kata("629", "Mufrodat 53", "مَـبْـلُـوْلٌ", "مَبْلُوْلٌ", "Basah"),
                    $this->data_kata("630", "Mufrodat 53", "جَافٌّ", "جَافٌّ", "Kering"),
                    $this->data_kata("631", "Mufrodat 53", "دَافِـئٌ", "دَافِئٌ", "Hangat"),
                    $this->data_kata("632", "Mufrodat 53", "رَيَّانٌ", "رَيَّانٌ", "Segar"),

                    $this->data_kata("633", "Mufrodat 54", "بِـرْكَـةٌ", "بِرْكَةٌ", "Bak mandi"),
                    $this->data_kata("634", "Mufrodat 54", "مِـرْحَاضٌ", "مِرْحَاضٌ", "WC"),
                    $this->data_kata("635", "Mufrodat 54", "مَاءٌ", "مَاءٌ", "Air"),
                    $this->data_kata("636", "Mufrodat 54", "صَابُـوْنٌ", "صَابُوْنٌ", "Sabun"),
                    $this->data_kata("637", "Mufrodat 54", "شَامْـبُـو", "شَامْبُو", "Shampo"),
                    $this->data_kata("638", "Mufrodat 54", "فِـرْجَـوْنٌ", "فِرْجَوْنٌ", "Sikat gigi"),
                    $this->data_kata("639", "Mufrodat 54", "مَـعْـجُـوْنٌ", "مَعْجُوْنٌ", "Pasta gigi"),
                    $this->data_kata("640", "Mufrodat 54", "فُـرْشَـةٌ", "فُرْشَةٌ", "Sikat"),
                    $this->data_kata("641", "Mufrodat 54", "مِـنْـشَـفَـةٌ", "مِنْشَفَةٌ", "Handuk"),
                    $this->data_kata("642", "Mufrodat 54", "مِـعْـلَاقٌ", "مِعْلَاقٌ", "Hanger"),
                    $this->data_kata("643", "Mufrodat 54", "دَلْـوٌ", "دَلْوٌ", "Ember"),
                    $this->data_kata("644", "Mufrodat 54", "مِـغْـرَفَـةٌ", "مِغْرَفَةٌ", "Gayung"),

                    $this->data_kata("645", "Mufrodat 55", "حَـنَـفِـيَّـةٌ", "حَنَفِيَّةٌ", "Kran"),
                    $this->data_kata("646", "Mufrodat 55", "أُنْـبُـوْبَـةٌ", "أُنْبُوْبَةٌ", "Pipa"),
                    $this->data_kata("647", "Mufrodat 55", "طُـلُـنْـبَـةٌ", "طُلُنْبَةٌ", "Pompa"),
                    $this->data_kata("648", "Mufrodat 55", "خُـرْطُـوْمٌ", "خُرْطُوْمٌ", "Selang"),
                    $this->data_kata("649", "Mufrodat 55", "مَـنْـبَـعٌ", "مَنْبَعٌ", "Sumber"),
                    $this->data_kata("650", "Mufrodat 55", "بِـئْـرٌ", "بِئْرٌ", "Sumur"),
                    $this->data_kata("651", "Mufrodat 55", "مِـيْـزَابٌ", "مِيْزَابٌ", "Shower"),

                    $this->data_kata("652", "Mufrodat 56", "اِغْـتَـسَـلَ-يَـغْـتَـسِـلُ-اِغْـتِـسَالًا", "اِغْتَسَلَ-يَغْتَسِلُ-اِغْتِسَالًا", "Mandi"),
                    $this->data_kata("653", "Mufrodat 56", "غَـسَـلَ-يَـغْـسِـلُ-غَـسْـلًا", "غَسَلَ-يَغْسِلُ-غَسْلًا", "Mencuci"),
                    $this->data_kata("654", "Mufrodat 56", "سَـوَّكَ-يُـسَـوِّكُ-تَـسْـوِيْـكًا", "سَوَّكَ-يُسَوِّكُ-تَسْوِيْكًا", "Sikat gigi"),
                    $this->data_kata("655", "Mufrodat 56", "مَـسَـحَ-يَـمْـسَـحُ-مَـسْـحًا", "مَسَحَ-يَمْسَحُ-مَسْحًا", "Menggosok"),
                    $this->data_kata("656", "Mufrodat 56", "رَمَـى-يَـرْمِـي-رَمْـيًا", "رَمَى-يَرْمِي-رَمْيًا", "Membuang"),
                    $this->data_kata("657", "Mufrodat 56", "حَـذَفَ-يَـحْـذَفُ-حَـذْفًا", "حَذَفَ-يَحْذَفُ-حَذْفًا", "Melempar"),
                    $this->data_kata("658", "Mufrodat 56", "وَضَـعَ-يَـضَـعُ-وَضْـعًا", "وَضَعَ-يَضَعُ-وَضْعًا", "Meletakkan"),
                    $this->data_kata("659", "Mufrodat 56", "بَـصَـقَ-يَـبْـصُـقُ-بَـصْـقًا", "بَصَقَ-يَبْصُقُ-بَصْقًا", "Meludah"),
                    $this->data_kata("660", "Mufrodat 56", "بَالَ-يَـبُـوْلُ-بَـوْلًا", "بَالَ-يَبُوْلُ-بَوْلًا", "Kencing"),
                    $this->data_kata("661", "Mufrodat 56", "تَـغَـوَّطَ-يَـتَـغَـوَّطُ-تَـغَـوُّطًا", "تَغَوَّطَ-يَتَغَوَّطُ-تَغَوُّطًا", "Buang hajat"),
                    $this->data_kata("662", "Mufrodat 56", "فَـتَـحَ-يَـفْـتَـحُ-فَـتْـحًا", "فَتَحَ-يَفْتَحُ-فَتْحًا", "Membuka"),
                    $this->data_kata("663", "Mufrodat 56", "غَـلَـقَ-يَـغْـلِـقُ-غَـلْـقًا", "غَلَقَ-يَغْلِقُ-غَلْقًا", "Menutup"),
                    
                    $this->data_kata("664", "Mufrodat 57", "ضَـغَـطَ-يَـضْـغَـطُ-ضَـغْـطًا", "ضَغَطَ-يَضْغَطُ-ضَغْطًا", "Mengetuk"),
                    $this->data_kata("665", "Mufrodat 57", "لَـوَّثَ-يُـلَـوِّثُ-تَـلْـوِيْـثًا", "لَوَّثَ-يُلَوِّثُ-تَلْوِيْثًا", "Mencemari"),
                    $this->data_kata("666", "Mufrodat 57", "سَـبَـحَ-يَـسْـبَـحُ-سِـبَاحَـةً", "سَبَحَ-يَسْبَحُ-سِبَاحَةً", "Berenang"),
                    $this->data_kata("667", "Mufrodat 57", "غَاصَ-يَـغُـوْصُ-غَـوْصًا", "غَاصَ-يَغُوْصُ-غَوْصًا", "Menyelam"),
                    $this->data_kata("668", "Mufrodat 57", "قَـطَـرَ-يَـقْـطُـرُ-قَـطْـرًا", "قَطَرَ-يَقْطُرُ-قَطْرًا", "Menetes"),
                    $this->data_kata("669", "Mufrodat 57", "اِنْـكَـبَّ-يَـنْـكَـبُّ-اِنْـكِـبَابًا", "اِنْكَبَّ-يَنْكَبُّ-اِنْكِبَابًا", "Tumpah "),
                    $this->data_kata("670", "Mufrodat 57", "سَـقَـى - يَـسْـقِـى - سَـقْـيًا", "سَقَى-يَسْقِى-سَقْيًا", "Mengairi "),
                    $this->data_kata("671", "Mufrodat 57", "رَسَـبَ - يَـرْسُـبُ - رُسُـوْبًا", "رَسَبَ-يَرْسُبُ-رُسُوْبًا", "Mengendap "),
                    $this->data_kata("672", "Mufrodat 57", "رَشَّ - يَـرُشُّ - رَشًّا", "رَشَّ-يَرُشُّ-رَشًّا", "Menyiram "),
                    $this->data_kata("673", "Mufrodat 57", "تَـجَـمَّـدَ - يَـتَـجَـمَّـدُ - تَـجَـمُّـدًا", "تَجَمَّدَ-يَتَجَمَّدُ-تَجَمُّدًا", "Membeku"),
                    $this->data_kata("674", "Mufrodat 57", "جَـمَّـدَ - يُـجَـمِّـدُ - تَـجْـمِـيْـدًا", "جَمَّدَ-يُجَمِّدُ-تَجْمِيْدًا", "Membekukan"),
                    $this->data_kata("675", "Mufrodat 57", "بَـلَّـلَ - يُـبَـلِّـلُ - تَـبْـلِـيْـلًا", "بَلَّلَ-يُبَلِّلُ-تَبْلِيْلًا", "Membasahi"),
                    $this->data_kata("676", "Mufrodat 57", "تَـسَـرَّبَ - يَـتَـسَـرَّبُ - تَـسَـرُّبًا", "تَسَرَّبَ-يَتَسَرَّبُ-تَسَرُّبًا", "Bocor"),
                    $this->data_kata("677", "Mufrodat 57", "ذَابَ - يَـذُوْبُ - ذَوْبًا", "ذَابَ-يَذُوْبُ-ذَوْبًا", "Mencair"),
                    $this->data_kata("678", "Mufrodat 57", "غَـرِقَ - يَـغْـرَقُ - غَـرَقًا", "غَرِقَ-يَغْرَقُ-غَرَقًا", "Tenggelam"),
                    
                    $this->data_kata("679", "Mufrodat 58", "سَالَ - يَـسِـيْـلُ - سَـيْـلًا", "سَالَ-يَسِيْلُ-سَيْلًا", "Banjir"),
                    $this->data_kata("680", "Mufrodat 58", "صَـبَّ - يَـصُـبُّ - صَـبًّا", "صَبَّ-يَصُبُّ-صَبًّا", "Menuangkan"),
                    
                    $this->data_kata("681", "Mufrodat 59", "مَـدْرَسَـةٌ حُـكُـوْمِـيَّـةٌ", "مَدْرَسَةٌ حُكُوْمِيَّةٌ", "Sekolah negeri"),
                    $this->data_kata("682", "Mufrodat 59", "مَـدْرَسَـةٌ أَهْـلِـيَّـةٌ", "مَدْرَسَةٌ أَهْلِيَّةٌ", "Sekolah swasta"),
                    $this->data_kata("683", "Mufrodat 59", "رَئِـيْـسُ الْـمَـدْرَسَـةِ", "رَئِيْسُ الْمَدْرَسَةِ", "Kepala sekolah"),
                    $this->data_kata("684", "Mufrodat 59", "وَلِـيُّ الْـفَـصْـلِ", "وَلِيُّ الْفَصْلِ", "Wali kelas"),
                    $this->data_kata("685", "Mufrodat 59", "وَلِـيُّ الـطَّالِـبِ", "وَلِيُّ الطَّالِبِ", "Walimurid"),
                    $this->data_kata("686", "Mufrodat 59", "فَـصْـلٌ", "فَصْلٌ", "Kelas"),
                    $this->data_kata("687", "Mufrodat 59", "مَـعْـهَـدٌ", "مَعْهَدٌ", "Pondok"),
                    $this->data_kata("688", "Mufrodat 59", "إِدَارَةٌ", "إِدَارَةٌ", "Kantor"),
                    $this->data_kata("689", "Mufrodat 59", "عَـمُـوْدٌ", "عَمُوْدٌ", "Tiang"),
                    $this->data_kata("690", "Mufrodat 59", "لِـوَاءٌ", "لِوَاءٌ", "Bendera"),
                    $this->data_kata("691", "Mufrodat 59", "مُـدَرِّسٌ", "مُدَرِّسٌ", "Guru lk"),
                    $this->data_kata("692", "Mufrodat 59", "مُـدَرِّسَـةٌ", "مُدَرِّسَةٌ", "Guru pr"),

                    $this->data_kata("693", "Mufrodat 60", "تِـلْـمِـيْـذٌ", "تِلْمِيْذٌ", "Murid lk"),
                    $this->data_kata("694", "Mufrodat 60", "تِـلْـمِـيْـذَةٌ", "تِلْمِيْذَةٌ", "Murid pr"),
                    $this->data_kata("695", "Mufrodat 60", "نُـقُـوْدٌ", "نُقُوْدٌ", "Uang"),
                    $this->data_kata("696", "Mufrodat 60", "مَـصْـرُوْفُ الْـجَـيْـبِ", "مَصْرُوْفُ الْجَيْبِ", "Uang jajan"),
                    $this->data_kata("697", "Mufrodat 60", "رَشْـوَةٌ", "رَشْوَةٌ", "Uang suap"),
                    $this->data_kata("698", "Mufrodat 60", "عُـرْبُـوْنٌ", "عُرْبُوْنٌ", "Uang muka"),
                    $this->data_kata("699", "Mufrodat 60", "طَالِـبٌ جَامِـعِـيٌّ", "طَالِبٌ جَامِعِيٌّ", "Mahasiswa"),
                    $this->data_kata("700", "Mufrodat 60", "مِـنْـحَـةٌ دِرَاسِـيَّـةٌ", "مِنْحَةٌ دِرَاسِيَّةٌ", "Beasiswa"),
                    $this->data_kata("701", "Mufrodat 60", "مُـحَاضِـرٌ", "مُحَاضِرٌ", "Dosen"),
                    $this->data_kata("702", "Mufrodat 60", "كُـلِّـيَّـةٌ", "كُلِّيَّةٌ", "Fakultas"),
                    $this->data_kata("703", "Mufrodat 60", "قِـسْـمٌ", "قِسْمٌ", "Jurusan"),
                    $this->data_kata("704", "Mufrodat 60", "سَـبُّـوْرَةٌ", "سَبُّوْرَةٌ", "Papan tulis"),
                    $this->data_kata("705", "Mufrodat 60", "حِـبْـرٌ", "حِبْرٌ", "Tinta"),
                    $this->data_kata("706", "Mufrodat 60", "مِـعْـلَـمَـةٌ", "مِعْلَمَةٌ", "Spidol"),
                    $this->data_kata("707", "Mufrodat 60", "كِـتَابٌ", "كِتَابٌ", "Buku"),
                    
                    $this->data_kata("708", "Mufrodat 61", "دَفْـتَـرٌ", "دَفْتَرٌ", "Buku tulis"),
                    $this->data_kata("709", "Mufrodat 61", "قَـلَـمٌ", "قَلَمٌ", "Pena"),
                    $this->data_kata("710", "Mufrodat 61", "مِـمْـسَـحَـةٌ", "مِمْسَحَةٌ", "Penghapus"),
                    $this->data_kata("711", "Mufrodat 61", "قَـلَـمُ الـرَّصَاصِ", "قَلَمُ الرَّصَاصِ", "Pensil"),
                    $this->data_kata("712", "Mufrodat 61", "شَـهَادَةٌ", "شَهَادَةٌ", "Ijazah"),
                    $this->data_kata("713", "Mufrodat 61", "شَـهَادَةُ الإِنْـجَازِ", "شَهَادَةُ الإِنْجَازِ", "Piagam"),
                    $this->data_kata("714", "Mufrodat 61", "كُـرَّةٌ أَرْضِـيَّـةٌ", "كُرَّةٌ أَرْضِيَّةٌ", "Globe"),
                    $this->data_kata("715", "Mufrodat 61", "خَـرِيْـطَـةٌ", "خَرِيْطَةٌ", "Peta"),
                    $this->data_kata("716", "Mufrodat 61", "رَوْضَـةُ الْأَطْـفَالِ", "رَوْضَةُ الْأَطْفَالِ", "TK"),
                    $this->data_kata("717", "Mufrodat 61", "مَـدْرَسَـةٌ إِبْـتِـدَائِـيَّـةٌ", "مَدْرَسَةٌ إِبْتِدَائِيَّةٌ", "SD"),
                    $this->data_kata("718", "Mufrodat 61", "مَـدْرَسَـةٌ مُـتَـوَسِّـطَـةٌ", "مَدْرَسَةٌ مُتَوَسِّطَةٌ", "SMP"),
                    $this->data_kata("719", "Mufrodat 61", "مَـدْرَسَـةٌ ثَانَـوِيَّـةٌ", "مَدْرَسَةٌ ثَانَوِيَّةٌ", "SMA"),
                    $this->data_kata("720", "Mufrodat 61", "جَامِـعَـةٌ", "جَامِعَةٌ", "Universitas"),
                    $this->data_kata("721", "Mufrodat 61", "دِرَاسَـةٌ أُوْلَـى", "دِرَاسَةٌ أُوْلَى", "S1"),
                    $this->data_kata("722", "Mufrodat 61", "دِرَاسَـةٌ عُـلْـيَا", "دِرَاسَةٌ عُلْيَا", "S2"),
                    
                    $this->data_kata("723", "Mufrodat 62", "مَـدْرَسَـةُ الْـهَـنْـدَسَـةِ", "مَدْرَسَةُ الْهَنْدَسَةِ", "SMK"),
                    $this->data_kata("724", "Mufrodat 62", "مَـكْـتَـبَـةٌ", "مَكْتَبَةٌ", "Perpustakaan"),
                    $this->data_kata("725", "Mufrodat 62", "صُـوْرَةٌ", "صُوْرَةٌ", "Gambar"),
                    $this->data_kata("726", "Mufrodat 62", "خَـتْـمٌ", "خَتْمٌ", "Stempel"),
                    $this->data_kata("727", "Mufrodat 62", "تَـوْقِـيْـعٌ", "تَوْقِيْعٌ", "Tanda tangan"),
                    $this->data_kata("728", "Mufrodat 62", "نَـشْـرَةٌ", "نَشْرَةٌ", "Brosur"),
                    $this->data_kata("729", "Mufrodat 62", "نَـتِـيْـجَـةٌ", "نَتِيْجَةٌ", "Nilai"),
                    $this->data_kata("730", "Mufrodat 62", "إِمْـتِـحَانٌ", "إِمْتِحَانٌ", "Ujian"),
                    $this->data_kata("731", "Mufrodat 62", "إِمْـتِـحَانٌ تَـحْـرِيْـرِيًّا", "إِمْتِحَانٌ تَحْرِيْرِيًّا", "Ujian tulis"),
                    $this->data_kata("732", "Mufrodat 62", "إِمْـتِـحَانٌ شَـفَـوِيًّا", "إِمْتِحَانٌ شَفَوِيًّا", "Ujian lisan"),
                    $this->data_kata("733", "Mufrodat 62", "لَـجْـنَـةُ الْإِمْـتِـحَانِ", "لَجْنَةُ الْإِمْتِحَانِ", "Panitia ujian"),
                    $this->data_kata("734", "Mufrodat 62", "رَقْـمُ دَفْـتَـرِ الْـقَـيْـدِ", "رَقْمُ دَفْتَرِ الْقَيْدِ", "No induk"),
                    $this->data_kata("735", "Mufrodat 62", "مُـصَـحِّـحٌ", "مُصَحِّحٌ", "Korektor"),

                    $this->data_kata("736", "Mufrodat 63", "ذَهَـبَ - يَـذْهَـبُ - ذِهَابًا", "ذَهَبَ-يَذْهَبُ-ذِهَابًا", "Pergi"),
                    $this->data_kata("737", "Mufrodat 63", "رَجَـعَ - يَـرْجِـعُ - رُجُـوعًا", "رَجَعَ-يَرْجِعُ-رُجُوعًا", "Pulang"),
                    $this->data_kata("738", "Mufrodat 63", "عَـلَّـمَ - يُـعَـلِّـمُ - تَـعْـلِـيْـمًا", "عَلَّمَ-يُعَلِّمُ-تَعْلِيْمًا", "Mengajar"),
                    $this->data_kata("739", "Mufrodat 63", "تَـعَـلَّـمَ - يَـتَـعَـلَّـمُ - تَـعَـلُّـمًا", "تَعَلَّمَ-يَتَعَلَّمُ-تَعَلُّمًا", "Belajar"),
                    $this->data_kata("740", "Mufrodat 63", "رَبَّـى - يُـرَبِّـي - تَـرْبِـيَـةً", "رَبَّى-يُرَبِّي-تَرْبِيَةً", "Mendidik"),
                    $this->data_kata("741", "Mufrodat 63", "أَيَّـدَ - يُـؤَيِّـدُ - تَـأْيِـيْـدًا", "أَيَّدَ-يُؤَيِّدُ-تَأْيِيْدًا", "Mendukung"),
                    $this->data_kata("742", "Mufrodat 63", "مَـثَّـلَ - يُـمَـثِّـلُ - تَـمْـثِـيْـلًا", "مَثَّلَ-يُمَثِّلُ-تَمْثِيْلًا", "Mencontohkan"),
                    $this->data_kata("743", "Mufrodat 63", "مَـرَّنَ - يُـمَـرِّنُ - تَـمْـرِيْـنًا", "مَرَّنَ-يُمَرِّنُ-تَمْرِيْنًا", "Latihan"),
                    $this->data_kata("744", "Mufrodat 63", "اِمْـتَـحَـنَ - يَـمْـتَـحِـنُ - اِمْـتِـحَانًا", "اِمْتَحَنَ-يَمْتَحِنُ-اِمْتِحَانًا", "Ujian"),
                    $this->data_kata("745", "Mufrodat 63", "اَفَادَ - يُـفِـيْـدُ - إِفَادَةً", "اَفَادَ-يُفِيْدُ-إِفَادَةً", "Memanfaatkan"),
                    $this->data_kata("746", "Mufrodat 63", "اِسْـتَـفَادَ - يَـسْـتَـفِـيْـدُ - اِسْـتِـفَادَةً", "اِسْتَفَادَ-يَسْتَفِيْدُ-اِسْتِفَادَةً", "Mengambil Faedah"),
                    $this->data_kata("747", "Mufrodat 63", "عَـمِـلَ - يَـعْـمَـلُ - عَـمَـلًا", "عَمِلَ-يَعْمَلُ-عَمَلًا", "Mengerjakan"),

                    $this->data_kata("748", "Mufrodat 64", "فَـهِـمَ - يَـفْـهَـمُ - فَـهْـمًا", "فَهِمَ-يَفْهَمُ-فَهْمًا", "Memahami"),
                    $this->data_kata("749", "Mufrodat 64", "عَـلِـمَ - يَـعْـلَـمُ - عِـلْـمًا", "عَلِمَ-يَعْلَمُ-عِلْمًا", "Mengerti"),
                    $this->data_kata("750", "Mufrodat 64", "عَـرَفَ - يَـعْـرِفُ - مَـعْـرِفَـةً", "عَرَفَ-يَعْرِفُ-مَعْرِفَةً", "Mengetahui"),
                    $this->data_kata("751", "Mufrodat 64", "شَـكَا - يَـشْـكُـو - شَـكْـوًا", "شَكَا-يَشْكُو-شَكْوًا", "Mengadukan"),
                    $this->data_kata("752", "Mufrodat 64", "صَـنَـعَ - يَـصْـنَـعُ - صِـنَاعَـةً", "صَنَعَ-يَصْنَعُ-صِنَاعَةً", "Membuat"),
                    $this->data_kata("753", "Mufrodat 64", "جَـرَّبَ - يُـجَـرِّبُ - تَـجْـرِيْـبًا", "جَرَّبَ-يُجَرِّبُ-تَجْرِيْبًا", "mencoba"),
                    $this->data_kata("754", "Mufrodat 64", "فَـتَّـشَ - يُـفَـتِّـشُ - تَـفْـتِـيْـشًا", "فَتَّشَ-يُفَتِّشُ-تَفْتِيْشًا", "Memeriksa"),
                    $this->data_kata("755", "Mufrodat 64", "صَـدَقَ - يَـصْـدُقُ - صِـدْقًا", "صَدَقَ-يَصْدُقُ-صِدْقًا", "Jujur"),
                    $this->data_kata("756", "Mufrodat 64", "كَـذَبَ - يَـكْـذِبُ - كِـذْبًا", "كَذَبَ-يَكْذِبُ-كِذْبًا", "Berbohong"),
                    $this->data_kata("757", "Mufrodat 64", "دَفَـعَ - يَـدْفَـعُ - دَفْـعًا", "دَفَعَ-يَدْفَعُ-دَفْعًا", "Membayar"),
                    $this->data_kata("758", "Mufrodat 64", "رَشَا - يَـرْشُـو - رَشْـوًا", "رَشَا-يَرْشُو-رَشْوًا", "Menyuap"),
                    $this->data_kata("759", "Mufrodat 64", "رَافَـقَ - يُـرَافِـقُ - مُـرَافَـقَـةً", "رَافَقَ-يُرَافِقُ-مُرَافَقَةً", "Menemani"),
                    $this->data_kata("760", "Mufrodat 64", "خَـدِمَ - يَـخْـدَمُ - خِـدْمَـةً", "خَدِمَ-يَخْدَمُ-خِدْمَةً", "Melayani"),
                    $this->data_kata("761", "Mufrodat 64", "سَاعَـدَ - يُـسَاعِـدُ - مُـسَاعَـدَةً", "سَاعَدَ-يُسَاعِدُ-مُسَاعَدَةً", "Membantu"),
                    $this->data_kata("762", "Mufrodat 64", "تَـعَاوَنَ - يَـتَـعَاوَنُ - تَـعَاوُنًا", "تَعَاوَنَ-يَتَعَاوَنُ-تَعَاوُنًا", "menolong"),

                    $this->data_kata("763", "Mufrodat 65", "تَـحَـمَّـسَ - يَـتَـحَـمَّـسُ - تَـحَـمُّـسًا", "تَحَمَّسَ-يَتَحَمَّسُ-تَحَمُّسًا", "Semangat"),
                    $this->data_kata("764", "Mufrodat 65", "فَـرِحَ - يَـفْـرَحُ - فَـرْحًا", "فَرِحَ-يَفْرَحُ-فَرْحًا", "Senang"),
                    $this->data_kata("765", "Mufrodat 65", "حَـزِنَ - يَـحْـزَنُ - حُـزْنًا", "حَزِنَ-يَحْزَنُ-حُزْنًا", "Sedih"),
                    $this->data_kata("766", "Mufrodat 65", "دَلَّ - يَـدُلُّ - دِلَالَـةً", "دَلَّ-يَدُلُّ-دِلَالَةً", "Menunjukkan"),
                    $this->data_kata("767", "Mufrodat 65", "أَخْـبَـرَ - يُـخْـبِـرُ - إِخْـبَارًا", "أَخْبَرَ-يُخْبِرُ-إِخْبَارًا", "Mengabarkan"),
                    // sampai sini
                    $this->data_kata("768", "Mufrodat 65", "قَرَأَ-يَقْرَأُ-قِرَائَةً", "قَرَأَ-يَقْرَأُ-قِرَائَةً", "Membaca"),
                    $this->data_kata("769", "Mufrodat 65", "كَتَبَ-يَكْتُبُ-كِتَابَةً", "كَتَبَ-يَكْتُبُ-كِتَابَةً", "Menulis"),
                    $this->data_kata("770", "Mufrodat 65", "رَسَمَ-يَرْسُمُ-رَسْمًا", "رَسَمَ-يَرْسُمُ-رَسْمًا", "Melukis"),
                    $this->data_kata("771", "Mufrodat 65", "سَجَّلَ-يُسَجِّلُ-تَسْجِيْلًا", "سَجَّلَ-يُسَجِّلُ-تَسْجِيْلًا", "Mendaftar"),
                    $this->data_kata("772", "Mufrodat 65", "قَلَّدَ-يُقَلِّدُ-تَقْلِيْدًا", "قَلَّدَ-يُقَلِّدُ-تَقْلِيْدًا", "Mengikuti"),
                    $this->data_kata("773", "Mufrodat 65", "اِشْتَرَكَ-يَشْتَرِكُ-اِشْتِرَاكًا", "اِشْتَرَكَ-يَشْتَرِكُ-اِشْتِرَاكًا", "Ikut Serta"),
                    $this->data_kata("774", "Mufrodat 65", "اِبْتَسَمَ-يَبْتَسِمُ-اِبْتِسَامًا", "اِبْتَسَمَ-يَبْتَسِمُ-اِبْتِسَامًا", "Tersenyum"),
                    $this->data_kata("775", "Mufrodat 65", "وَصَلَ-يَصِلُ-وُصُولًا", "وَصَلَ-يَصِلُ-وُصُولًا", "Sampai"),
                    $this->data_kata("776", "Mufrodat 65", "أَوْصَلَ-يُوْصِلُ-إِيْصَالًا", "أَوْصَلَ-يُوْصِلُ-إِيْصَالًا", "Mengantar"),
                    $this->data_kata("777", "Mufrodat 65", "اِسْتَقْبَلَ-يَسْتَقْبِلُ-اِسْتِقْبَالًا", "اِسْتَقْبَلَ-يَسْتَقْبِلُ-اِسْتِقْبَالًا", "Menjemput "),

                    $this->data_kata("778", "Mufrodat 66", "أَذِنَ-يَأْذَنُ-إِذْنًا", "أَذِنَ-يَأْذَنُ-إِذْنًا", "Memberi Izin"),
                    $this->data_kata("779", "Mufrodat 66", "اِسْتَأْذَنَ-يَسْتَأْذِنُ-اِسْتِئْذَانًا", "اِسْتَأْذَنَ-يَسْتَأْذِنُ-اِسْتِئْذَانًا", "Meminta izin"),
                    $this->data_kata("780", "Mufrodat 66", "أَعْلَنَ-يُعْلِنُ-اِعْلَانًا", "أَعْلَنَ-يُعْلِنُ-اِعْلَانًا", "Mengumumkan"),
                    $this->data_kata("781", "Mufrodat 66", "نَوَى-يَنْوِي-نِيَّةً", "نَوَى-يَنْوِي-نِيَّةً", "Berniat"),
                    $this->data_kata("782", "Mufrodat 66", "تَعَلَّقَ-يَتَعَلَّقُ-تَعَلُّقًا", "تَعَلَّقَ-يَتَعَلَّقُ-تَعَلُّقًا", "Tergantung"),
                    $this->data_kata("783", "Mufrodat 66", "أَطَاعَ-يُطِيْعُ-طَاعَةً", "أَطَاعَ-يُطِيْعُ-طَاعَةً", "Mentaati"),
                    $this->data_kata("784", "Mufrodat 66", "خَالَفَ-يُخَالِفُ-مُخَالَفَةً", "خَالَفَ-يُخَالِفُ-مُخَالَفَةً", "Melanggar"),
                    $this->data_kata("785", "Mufrodat 66", "دَلَّ-يَدُلُّ-دِلَالَةً", "دَلَّ-يَدُلُّ-دِلَالَةً", "Menunjukkan"),
                    $this->data_kata("786", "Mufrodat 66", "صَفَّقَ-يُصَفِّقُ-تَصْفِيْقًا", "صَفَّقَ-يُصَفِّقُ-تَصْفِيْقًا", "Tepuk Tangan"),
                    $this->data_kata("787", "Mufrodat 66", "وَزَّعَ-يُوَزِّعُ-تَوْزِيْعًا", "وَزَّعَ-يُوَزِّعُ-تَوْزِيْعًا", "membagi"),
                    $this->data_kata("788", "Mufrodat 66", "سَجَّلَ-يُسَجِّلُ-تَسْجِيْلًا", "سَجَّلَ-يُسَجِّلُ-تَسْجِيْلًا", "Mendaftar"),
                    $this->data_kata("789", "Mufrodat 66", "حَثَّ-يَحُثُّ-حَثًّا", "حَثَّ-يَحُثُّ-حَثًّا", "Terjadi"),
                    $this->data_kata("790", "Mufrodat 66", "أَجْرَأَ-يُجْرِئُ-إِجْرَاءً", "أَجْرَأَ-يُجْرِئُ-إِجْرَاءً", "Melaksanakan"),
                    $this->data_kata("791", "Mufrodat 66", "طَرَدَ-يَطْرُدُ-طَرَدًا", "طَرَدَ-يَطْرُدُ-طَرَدًا", "Mengusir"),
                    $this->data_kata("792", "Mufrodat 66", "شَرَحَ-يَشْرَحُ-شَرْحًا", "شَرَحَ-يَشْرَحُ-شَرْحًا", "Menjelaskan"),
                    
                    $this->data_kata("793", "Mufrodat 67", "اِسْتَرَاحَ-يَسْتَرِيْحُ-اِسْتِرَاحَةً", "اِسْتَرَاحَ-يَسْتَرِيْحُ-اِسْتِرَاحَةً", "Beristirahat"),
                    $this->data_kata("794", "Mufrodat 67", "أَزْعَجَ-يُزْعِجُ-إِزْعَاجًا", "أَزْعَجَ-يُزْعِجُ-إِزْعَاجًا", "Mengganggu"),
                    $this->data_kata("795", "Mufrodat 67", "تَخَيَّلَ-يَتَخَيَّلُ-تَخَيُّلًا", "تَخَيَّلَ-يَتَخَيَّلُ-تَخَيُّلًا", "Menghayal"),
                    $this->data_kata("796", "Mufrodat 67", "ظَنَّ-يَظُنُّ-ظَنًّا", "ظَنَّ-يَظُنُّ-ظَنًّا", "Menyangka"),
                    $this->data_kata("797", "Mufrodat 67", "غَضِبَ-يَغْضَبُ-غَضَبًا", "غَضِبَ-يَغْضَبُ-غَضَبًا", "Marah"),
                    
                    $this->data_kata("798", "Mufrodat 68", "دَرَّاجَةٌ", "دَرَّاجَةٌ", "Sepeda"),
                    $this->data_kata("799", "Mufrodat 68", "دَرَّاجَةٌ نَارِيَّةٌ", "دَرَّاجَةٌ نَارِيَّةٌ", "Sepeda Motor"),
                    $this->data_kata("800", "Mufrodat 68", "سَيَّارَةٌ", "سَيَّارَةٌ", "Mobil"),
                    $this->data_kata("801", "Mufrodat 68", "سَيَّارَةُ السِّبَاقِ", "سَيَّارَةُ السِّبَاقِ", "Mobil Balap"),
                    $this->data_kata("802", "Mufrodat 68", "سَيَّارَةُ الرُّكَّابِ", "سَيَّارَةُ الرُّكَّابِ", "Angkot"),
                    $this->data_kata("803", "Mufrodat 68", "حَافِلَةٌ", "حَافِلَةٌ", "Bus"),
                    $this->data_kata("804", "Mufrodat 68", "شَاحِنَةٌ", "شَاحِنَةٌ", "Truk"),
                    $this->data_kata("805", "Mufrodat 68", "بِتْشَا", "بِتْشَا", "Becak"),
                    $this->data_kata("806", "Mufrodat 68", "عَرَبَةٌ", "عَرَبَةٌ", "Dokar"),
                    $this->data_kata("807", "Mufrodat 68", "بَاخِرَةٌ", "بَاخِرَةٌ", "Kapal"),
                    $this->data_kata("808", "Mufrodat 68", "سَفِيْنَةٌ", "سَفِيْنَةٌ", "Perahu"),
                    $this->data_kata("809", "Mufrodat 68", "سَفِيْنَةٌ شِرَاعِيَّةٌ", "سَفِيْنَةٌ شِرَاعِيَّةٌ", "Perahu Layar"),
                    
                    $this->data_kata("810", "Mufrodat 69", "تَكْسِى", "تَكْسِى", "Taksi"),
                    $this->data_kata("811", "Mufrodat 69", "قِطَارٌ", "قِطَارٌ", "Kereta Api"),
                    $this->data_kata("812", "Mufrodat 69", "قَاطِرَةٌ", "قَاطِرَةٌ", "Lokomotif"),
                    $this->data_kata("813", "Mufrodat 69", "طَائِرَةٌ", "طَائِرَةٌ", "Pesawat Terbang"),
                    $this->data_kata("814", "Mufrodat 69", "دَبَّابَةٌ", "دَبَّابَةٌ", "Tank"),
                    $this->data_kata("815", "Mufrodat 69", "زَوْرَقٌ", "زَوْرَقٌ", "Sampan"),
                    $this->data_kata("816", "Mufrodat 69", "مِقْوَدٌ", "مِقْوَدٌ", "Setir"),
                    $this->data_kata("817", "Mufrodat 69", "فَرْمَلَةٌ", "فَرْمَلَةٌ", "Rem"),
                    $this->data_kata("818", "Mufrodat 69", "إِطَارٌ", "إِطَارٌ", "Ban"),
                    $this->data_kata("819", "Mufrodat 69", "عَجَلَةٌ", "عَجَلَةٌ", "Roda"),
                    $this->data_kata("820", "Mufrodat 69", "دَوَّاسَةٌ", "دَوَّاسَةٌ", "Pedal"),
                    $this->data_kata("821", "Mufrodat 69", "بُوْرٌ", "بُوْرٌ", "Klakson"),
                    $this->data_kata("822", "Mufrodat 69", "مَقْعَدٌ", "مَقْعَدٌ", "Sadel"),
                    $this->data_kata("823", "Mufrodat 69", "سِلْسِلَةٌ", "سِلْسِلَةٌ", "Rantai"),
                    $this->data_kata("824", "Mufrodat 69", "بِنْزِيْنٌ", "بِنْزِيْنٌ", "Bensin"),
                    
                    $this->data_kata("825", "Mufrodat 70", "إِشَارَةُ السَّيْرِ", "إِشَارَةُ السَّيْرِ", "Rambu Lalin"),
                    $this->data_kata("826", "Mufrodat 70", "مَثْلَثٌ", "مَثْلَثٌ", "Pertigaan"),
                    $this->data_kata("827", "Mufrodat 70", "مَرْبَعٌ", "مَرْبَعٌ", "Perempatan "),
                    $this->data_kata("828", "Mufrodat 70", "مَخْمَسٌ", "مَخْمَسٌ", "Simpang Lima"),
                    $this->data_kata("829", "Mufrodat 70", "تَذْكِرَةٌ", "تَذْكِرَةٌ", "Tiket"),
                    $this->data_kata("830", "Mufrodat 70", "تَأْشِيْرَةٌ", "تَأْشِيْرَةٌ", "Visa"),
                    $this->data_kata("831", "Mufrodat 70", "جَوَازُ السَّفَرِ", "جَوَازُ السَّفَرِ", "Paspor"),
                    $this->data_kata("832", "Mufrodat 70", "أُجْرَةٌ", "أُجْرَةٌ", "Ongkos"),
                    $this->data_kata("833", "Mufrodat 70", "دُوَارُ الْبَرِّ", "دُوَارُ الْبَرِّ", "Mabuk Darat"),
                    $this->data_kata("834", "Mufrodat 70", "دُوَارُ الْبَحْرِ", "دُوَارُ الْبَحْرِ", "Mabuk Laut"),
                    $this->data_kata("835", "Mufrodat 70", "هَدَايَا السَّفَرِ", "هَدَايَا السَّفَرِ", "Oleh-Oleh"),
                    $this->data_kata("836", "Mufrodat 70", "مَصَارِيْفُ السَّفَرِ", "مَصَارِيْفُ السَّفَرِ", "Biaya Perjalanan"),
                    $this->data_kata("837", "Mufrodat 70", "مَسَافَةُ السَّفَرِ", "مَسَافَةُ السَّفَرِ", "Jarak Perjalanan"),
                    
                    $this->data_kata("838", "Mufrodat 71", "قَادَ-يَقُودُ-قِيَادَةً", "قَادَ-يَقُودُ-قِيَادَةً", "Menyetir"),
                    $this->data_kata("839", "Mufrodat 71", "رَكِبَ-يَرْكَبُ-رُكُوْبًا", "رَكِبَ-يَرْكَبُ-رُكُوْبًا", "Mengendarai"),
                    $this->data_kata("840", "Mufrodat 71", "رَدِفَ-يَرْدَفُ-رَدْفًا", "رَدِفَ-يَرْدَفُ-رَدْفًا", "Membonceng"),
                    $this->data_kata("841", "Mufrodat 71", "فَرْمَلَ-يُفَرْمِلُ-فَرْمَلَةً", "فَرْمَلَ-يُفَرْمِلُ-فَرْمَلَةً", "Mengerem"),
                    $this->data_kata("842", "Mufrodat 71", "تَوَقَّفَ-يَتَوَقَّفُ-تَوَقُّفًا", "تَوَقَّفَ-يَتَوَقَّفُ-تَوَقُّفًا", "Berhenti"),
                    $this->data_kata("843", "Mufrodat 71", "وَقَّفَ-يُوَقِّفُ-تَوْقِيْفًا", "وَقَّفَ-يُوَقِّفُ-تَوْقِيْفًا", "Menghentikan"),
                    $this->data_kata("844", "Mufrodat 71", "اِنْعَطَفَ-يَنْعَطِفُ-اِنْعِطَافًا", "اِنْعَطَفَ-يَنْعَطِفُ-اِنْعِطَافًا", "Belok"),
                    $this->data_kata("845", "Mufrodat 71", "اِلْتَفَتَ-يَلْتَفِتُ-اِلْتِفَاتًا", "اِلْتَفَتَ-يَلْتَفِتُ-اِلْتِفَاتًا", "Menoleh"),
                    $this->data_kata("846", "Mufrodat 71", "صَدَمَ-يَصْدُمُ-صَدَامَةً", "صَدَمَ-يَصْدُمُ-صَدَامَةً", "Menabrak"),
                    $this->data_kata("847", "Mufrodat 71", "تَصَادَمَ-يَتَصَادَمُ-تَصَادُمًا", "تَصَادَمَ-يَتَصَادَمُ-تَصَادُمًا", "Tabrakan"),
                    $this->data_kata("848", "Mufrodat 71", "دَاهَمَ-يُدَاهِمُ-مُدَاهَمَةً", "دَاهَمَ-يُدَاهِمُ-مُدَاهَمَةً", "Mendobrak"),
                    $this->data_kata("849", "Mufrodat 71", "كَسَّرَ-يُكَسِّرُ-تَكْسِيْرًا", "كَسَّرَ-يُكَسِّرُ-تَكْسِيْرًا", "Memecahkan"),
                    
                    $this->data_kata("850", "Mufrodat 72", "جَرَّ-يَجُرُّ-جَرًّا", "جَرَّ-يَجُرُّ-جَرًّا", "Menarik"),
                    $this->data_kata("851", "Mufrodat 72", "سَيَّرَ-يُسَيِّرُ-تَسْيِيْرًا", "سَيَّرَ-يُسَيِّرُ-تَسْيِيْرًا", "Menjalankan"),
                    $this->data_kata("852", "Mufrodat 72", "عَبَرَ-يَعْبُرُ-عُبُوْرًا", "عَبَرَ-يَعْبُرُ-عُبُوْرًا", "Menyeberang"),
                    $this->data_kata("853", "Mufrodat 72", "أَبْحَرَ-يُبْحِرُ-إِبْحَارًا", "أَبْحَرَ-يُبْحِرُ-إِبْحَارًا", "Berlayar"),
                    
                    $this->data_kata("854", "Mufrodat 73", "طَبِيْبٌ", "طَبِيْبٌ", "Dokter (lk)"),
                    $this->data_kata("855", "Mufrodat 73", "طَبِيْبَةٌ", "طَبِيْبَةٌ", "Dokter (pr)"),
                    $this->data_kata("856", "Mufrodat 73", "مُمَرِّضٌ", "مُمَرِّضٌ", "Perawat"),
                    $this->data_kata("857", "Mufrodat 73", "مَرِيْضٌ", "مَرِيْضٌ", "Pasien"),
                    $this->data_kata("858", "Mufrodat 73", "طَبِيْبٌ اِخْتِصَاصِيٌّ", "طَبِيْبٌ اِخْتِصَاصِيٌّ", "Dokter Spesialis"),
                    $this->data_kata("859", "Mufrodat 73", "طَبِيْبُ الأَسْنَانِ", "طَبِيْبُ الأَسْنَانِ", "Dokter Gigi"),
                    $this->data_kata("860", "Mufrodat 73", "طَبِيْبُ الْجَرَاحِ", "طَبِيْبُ الْجَرَاحِ", "Dokter Bedah"),
                    $this->data_kata("861", "Mufrodat 73", "طَبِيْبٌ بَيْطَرِيٌّ", "طَبِيْبٌ بَيْطَرِيٌّ", "Dokter Hewan"),
                    $this->data_kata("862", "Mufrodat 73", "دَوَاءٌ", "دَوَاءٌ", "Obat"),
                    $this->data_kata("863", "Mufrodat 73", "دَاءٌ", "دَاءٌ", "Penyakit"),
                    $this->data_kata("864", "Mufrodat 73", "سَيَّارَةُ الْإِسْعَافِ", "سَيَّارَةُ الْإِسْعَافِ", "Ambulan"),
                    $this->data_kata("865", "Mufrodat 73", "حُقْنَةٌ", "حُقْنَةٌ", "Suntikan"),
                    
                    $this->data_kata("866", "Mufrodat 74", "مِيْزَانُ الْحَرَارَةِ", "مِيْزَانُ الْحَرَارَةِ", "Termometer"),
                    $this->data_kata("867", "Mufrodat 74", "سَمَّاعَةُ الطَّبِيْبِ", "سَمَّاعَةُ الطَّبِيْبِ", "Stetoskop"),
                    $this->data_kata("868", "Mufrodat 74", "حَمَّالَةٌ", "حَمَّالَةٌ", "Tandu"),
                    $this->data_kata("869", "Mufrodat 74", "مِيْزَانُ الْجِسْمِ", "مِيْزَانُ الْجِسْمِ", "Timbangan Badan"),
                    $this->data_kata("870", "Mufrodat 74", "كُرْسِيٌّ مُتَحَرِّكٌ", "كُرْسِيٌّ مُتَحَرِّكٌ", "Kursi Roda"),
                    $this->data_kata("871", "Mufrodat 74", "مِجْهَرٌ", "مِجْهَرٌ", "Mikroskop"),
                    $this->data_kata("872", "Mufrodat 74", "ضِيَاءٌ", "ضِيَاءٌ", "Sinar"),
                    $this->data_kata("873", "Mufrodat 74", "أَشِعَّةٌ", "أَشِعَّةٌ", "Sinar x"),
                    $this->data_kata("874", "Mufrodat 74", "مِقَصٌّ", "مِقَصٌّ", "Gunting"),
                    $this->data_kata("875", "Mufrodat 74", "ضِمَادٌ", "ضِمَادٌ", "Perban"),
                    $this->data_kata("876", "Mufrodat 74", "قُطْنٌ", "قُطْنٌ", "Kapas"),
                    $this->data_kata("877", "Mufrodat 74", "مَرِيْضٌ سُكَّرِيٌّ", "مَرِيْضٌ سُكَّرِيٌّ", "Diabetes"),
                    $this->data_kata("878", "Mufrodat 74", "جُدَرِيٌّ", "جُدَرِيٌّ", "Cacar"),
                    $this->data_kata("879", "Mufrodat 74", "دُمَّلٌ", "دُمَّلٌ", "Bisul"),
                    
                    $this->data_kata("880", "Mufrodat 75", "بَثْرَةٌ", "بَثْرَةٌ", "Jerawat"),
                    $this->data_kata("881", "Mufrodat 75", "مَغْصٌ", "مَغْصٌ", "Sakit Perut"),
                    $this->data_kata("882", "Mufrodat 75", "صُدَاعٌ", "صُدَاعٌ", "Pusing"),
                    $this->data_kata("883", "Mufrodat 75", "صُدَاعٌ نِصْفِيٌّ", "صُدَاعٌ نِصْفِيٌّ", "Migrain"),
                    $this->data_kata("884", "Mufrodat 75", "مَغْصٌ", "مَغْصٌ", "Mules"),
                    $this->data_kata("885", "Mufrodat 75", "تِيْفُوْئِيْدٌ", "تِيْفُوْئِيْدٌ", "Tifus"),
                    $this->data_kata("886", "Mufrodat 75", "حُمَّى", "حُمَّى", "Demam"),
                    $this->data_kata("887", "Mufrodat 75", "ذَيْلٌ", "ذَيْلٌ", "Usus Buntu"),
                    $this->data_kata("888", "Mufrodat 75", "مَلَارِيَا", "مَلَارِيَا", "Malaria"),
                    $this->data_kata("889", "Mufrodat 75", "سَرَطَانٌ", "سَرَطَانٌ", "Kanker"),
                    $this->data_kata("890", "Mufrodat 75", "إِسْهَالٌ", "إِسْهَالٌ", "Diare"),
                    $this->data_kata("891", "Mufrodat 75", "زُكَّامٌ", "زُكَّامٌ", "Flu"),
                    $this->data_kata("892", "Mufrodat 75", "أَنِيْمِيَا", "أَنِيْمِيَا", "Anemia"),
                    $this->data_kata("893", "Mufrodat 75", "رَاعِفٌ", "رَاعِفٌ", "Mimisan"),
                    $this->data_kata("894", "Mufrodat 75", "وَرَمٌ", "وَرَمٌ", "Tumor"),
                    
                    $this->data_kata("895", "Mufrodat 76", "اِرْتِفَاعُ ضَغْطِ الدَّمِ", "اِرْتِفَاعُ ضَغْطِ الدَّمِ", "Darah Tinggi"),
                    $this->data_kata("896", "Mufrodat 76", "اِنْخِفَاضُ ضَغْطِ الدَّمِ", "اِنْخِفَاضُ ضَغْطِ الدَّمِ", "Darah Rendah"),
                    $this->data_kata("897", "Mufrodat 76", "مُوَرَّمٌ", "مُوَرَّمٌ", "Bengkak"),
                    $this->data_kata("898", "Mufrodat 76", "كَسِيْحٌ", "كَسِيْحٌ", "Lumpuh"),
                    
                    $this->data_kata("899", "Mufrodat 77", "عَالَجَ-يُعَالِجُ-مُعَالَجَةً", "عَالَجَ-يُعَالِجُ-مُعَالَجَةً", "Mengobati"),
                    $this->data_kata("900", "Mufrodat 77", "أَزَالَ-يُزِيْلُ-إِزَالَةً", "أَزَالَ-يُزِيْلُ-إِزَالَةً", "Menghilangkan"),
                    $this->data_kata("901", "Mufrodat 77", "اِنْتَظَرَ-يَنْتَظِرُ-إِنْتِظَارًا", "اِنْتَظَرَ-يَنْتَظِرُ-إِنْتِظَارًا", "Menunggu"),
                    $this->data_kata("902", "Mufrodat 77", "حَقَنَ-يَحْقُنُ-حُقْنًا", "حَقَنَ-يَحْقُنُ-حُقْنًا", "Menyuntik"),
                    $this->data_kata("903", "Mufrodat 77", "مَسَحَ-يَمْسَحُ-مَسْحًا", "مَسَحَ-يَمْسَحُ-مَسْحًا", "Menghapus"),
                    $this->data_kata("904", "Mufrodat 77", "فَحَصَ-يَفْحَصُ-فَحْصًا", "فَحَصَ-يَفْحَصُ-فَحْصًا", "Memeriksa"),
                    $this->data_kata("905", "Mufrodat 77", "حَمَلَ-يَحْمِلُ-حَمْلًا", "حَمَلَ-يَحْمِلُ-حَمْلًا", "Membawa"),
                    $this->data_kata("906", "Mufrodat 77", "أَعْطَى-يُعْطِى-إِعْطَاءً", "أَعْطَى-يُعْطِى-إِعْطَاءً", "Memberi"),
                    $this->data_kata("907", "Mufrodat 77", "زَادَ-يَزِيْدُ-زِيَادَةً", "زَادَ-يَزِيْدُ-زِيَادَةً", "Menambah"),
                    $this->data_kata("908", "Mufrodat 77", "اِزْدَادَ-يَزْدَادُ-اِزْدِيَادًا", "اِزْدَادَ-يَزْدَادُ-اِزْدِيَادًا", "Bertambah"),
                    $this->data_kata("909", "Mufrodat 77", "قَاءَ-يَقِيْئُ-قَيْئًا", "قَاءَ-يَقِيْئُ-قَيْئًا", "Muntah"),
                    $this->data_kata("910", "Mufrodat 77", "سَعَلَ-يَسْعُلُ-سُعَالًا", "سَعَلَ-يَسْعُلُ-سُعَالًا", "Batuk"),
                    
                    $this->data_kata("911", "Mufrodat 78", "مَرَّضَ-يُمَرِّضُ-تَمْرِيْضًا", "مَرَّضَ-يُمَرِّضُ-تَمْرِيْضًا", "Merawat"),
                    $this->data_kata("912", "Mufrodat 78", "ضَمَّدَ-يُضَمِّدُ-تَضْمِيْدًا", "ضَمَّدَ-يُضَمِّدُ-تَضْمِيْدًا", "Memperban"),
                    $this->data_kata("913", "Mufrodat 78", "شُفِيَ-يُشْفَى/تَعَافَى", "شُفِيَ-يُشْفَى/تَعَافَى", "Sembuh"),
                    $this->data_kata("914", "Mufrodat 78", "أَعْدَى-يُعْدِي-إِعْدَاءً", "أَعْدَى-يُعْدِي-إِعْدَاءً", "Menular"),
                    $this->data_kata("915", "Mufrodat 78", "حَسَبَ-يَحْسُبُ-حِسَابًا", "حَسَبَ-يَحْسُبُ-حِسَابًا", "Menghitung"),
                    $this->data_kata("916", "Mufrodat 78", "حَسِبَ-يَحْسِبُ-حِسْبَانًا", "حَسِبَ-يَحْسِبُ-حِسْبَانًا", "Menyangka"),
                    
                    $this->data_kata("917", "Mufrodat 79", "كَلْبٌ", "كَلْبٌ", "Anjing"),
                    $this->data_kata("918", "Mufrodat 79", "قِطٌّ", "قِطٌّ", "Kucing"),
                    $this->data_kata("919", "Mufrodat 79", "أَرْنَبٌ", "أَرْنَبٌ", "Kelinci"),
                    $this->data_kata("920", "Mufrodat 79", "فَأْرٌ", "فَأْرٌ", "Tikus"),
                    $this->data_kata("921", "Mufrodat 79", "ثَوْرٌ", "ثَوْرٌ", "Banteng"),
                    $this->data_kata("922", "Mufrodat 79", "خَرُوْفٌ", "خَرُوْفٌ", "Domba"),
                    $this->data_kata("923", "Mufrodat 79", "خِنْزِيْرٌ", "خِنْزِيْرٌ", "Babi"),
                    $this->data_kata("924", "Mufrodat 79", "بَقَرٌ", "بَقَرٌ", "Sapi"),
                    $this->data_kata("925", "Mufrodat 79", "جَامُوْسٌ", "جَامُوْسٌ", "Kerbau"),
                    $this->data_kata("926", "Mufrodat 79", "ح��صَانٌ", "حِصَانٌ", "Kuda"),
                    $this->data_kata("927", "Mufrodat 79", "دَجَاجٌ", "دَجَاجٌ", "Ayam"),
                    $this->data_kata("928", "Mufrodat 79", "غَنَمٌ", "غَنَمٌ", "Kambing"),

                    $this->data_kata("929", "Mufrodat 80", "زَرَافَةٌ", "زَرَافَةٌ", "Jerapah"),
                    $this->data_kata("930", "Mufrodat 80", "نَحْلٌ", "نَحْلٌ", "Lebah"),
                    $this->data_kata("931", "Mufrodat 80", "ضِفْدَاعٌ", "ضِفْدَاعٌ", "Katak"),
                    $this->data_kata("932", "Mufrodat 80", "قُنْفُذٌ", "قُنْفُذٌ", "Landak"),
                    $this->data_kata("933", "Mufrodat 80", "سَرَطَانٌ", "سَرَطَانٌ", "Kepiting"),
                    $this->data_kata("934", "Mufrodat 80", "كَرْكَدَّانٌ", "كَرْكَدَّانٌ", "Badak"),
                    $this->data_kata("935", "Mufrodat 80", "نَمِرٌ", "نَمِرٌ", "Macan"),
                    $this->data_kata("936", "Mufrodat 80", "ذِئْبٌ", "ذِئْبٌ", "Srigala"),
                    $this->data_kata("937", "Mufrodat 80", "سِنْجَابٌ", "سِنْجَابٌ", "Tupai"),
                    $this->data_kata("938", "Mufrodat 80", "أَسَدٌ", "أَسَدٌ", "Singa"),
                    $this->data_kata("939", "Mufrodat 80", "فَرَسٌ", "فَرَسٌ", "Kuda Betina"),
                    $this->data_kata("940", "Mufrodat 80", "حِمَارٌ", "حِمَارٌ", "Keledai"),
                    $this->data_kata("941", "Mufrodat 80", "حِمَارُ الزَّرَدِ", "حِمَارُ الزَّرَدِ", "Zebra"),
                    $this->data_kata("942", "Mufrodat 80", "حَيَّةٌ", "حَيَّةٌ", "Ular"),
                    $this->data_kata("943", "Mufrodat 80", "وَرَلٌ", "وَرَلٌ", "Kadal"),

                    $this->data_kata("944", "Mufrodat 81", "قَمْلٌ", "قَمْلٌ", "Kutu"),
                    $this->data_kata("945", "Mufrodat 81", "ضَبٌّ", "ضَبٌّ", "Biawak"),
                    $this->data_kata("946", "Mufrodat 81", "حِرْبَاءٌ", "حِرْبَاءٌ", "Bunglon"),
                    $this->data_kata("947", "Mufrodat 81", "تِمْسَاحٌ", "تِمْسَاحٌ", "Buaya"),
                    $this->data_kata("948", "Mufrodat 81", "إِنْكِلِيْسٌ", "إِنْكِلِيْسٌ", "Belut"),
                    $this->data_kata("949", "Mufrodat 81", "دُبٌّ", "دُبٌّ", "Beruang"),
                    $this->data_kata("950", "Mufrodat 81", "صَرْصُوْرُ اللَّيْلِ", "صَرْصُوْرُ اللَّيْلِ", "Jangkrik"),
                    $this->data_kata("951", "Mufrodat 81", "وَزَغَةٌ", "وَزَغَةٌ", "Cicak"),
                    $this->data_kata("952", "Mufrodat 81", "فِيْلٌ", "فِيْلٌ", "Gajah"),
                    $this->data_kata("953", "Mufrodat 81", "نَمْلٌ", "نَمْلٌ", "Semut"),
                    $this->data_kata("954", "Mufrodat 81", "نَمْلَةٌ بَيْضَاءُ", "نَمْلَةٌ بَيْضَاءُ", "Rayap"),
                    $this->data_kata("955", "Mufrodat 81", "بَعُوْضَةٌ", "بَعُوْضَةٌ", "Nyamuk"),
                    $this->data_kata("956", "Mufrodat 81", "خُفَاشٌ", "خُفَاشٌ", "Kelelawar"),
                    $this->data_kata("957", "Mufrodat 81", "جَمَلٌ", "جَمَلٌ", "Unta"),
                    $this->data_kata("958", "Mufrodat 81", "غَزَالٌ", "غَزَالٌ", "Kijang"),

                    $this->data_kata("959", "Mufrodat 82", "قِرْدٌ", "قِرْدٌ", "Kera"),
                    $this->data_kata("960", "Mufrodat 82", "أُوْرَانْغُوْتَانْ", "أُوْرَانْغُوْتَانْ", "Orangutan"),
                    $this->data_kata("961", "Mufrodat 82", "عَقْرَبٌ", "عَقْرَبٌ", "Kalajengking"),
                    $this->data_kata("962", "Mufrodat 82", "حُنْفَسَاءُ", "حُنْفَسَاءُ", "Kumbang"),
                    $this->data_kata("963", "Mufrodat 82", "جَرَادٌ", "جَرَادٌ", "Belalang"),
                    $this->data_kata("964", "Mufrodat 82", "يَرَقَةٌ", "يَرَقَةٌ", "Ulat"),
                    $this->data_kata("965", "Mufrodat 82", "غُرَابٌ", "غُرَابٌ", "Burung gagak"),
                    $this->data_kata("966", "Mufrodat 82", "نُعَامَةٌ", "نُعَامَةٌ", "Burung onta"),
                    $this->data_kata("967", "Mufrodat 82", "بَطٌّ", "بَطٌّ", "Bebek"),
                    $this->data_kata("968", "Mufrodat 82", "خُطَّافٌ", "خُطَّافٌ", "Walet"),
                    $this->data_kata("969", "Mufrodat 82", "بِطْرِيْقٌ", "بِطْرِيْقٌ", "Pinguin"),
                    $this->data_kata("970", "Mufrodat 82", "بَبْغَاءٌ", "بَبْغَاءٌ", "Burung beo"),
                    $this->data_kata("971", "Mufrodat 82", "دِيْكٌ", "دِيْكٌ", "Ayam jago"),
                    $this->data_kata("972", "Mufrodat 82", "طَيْرٌ", "طَيْرٌ", "Burung"),
                    $this->data_kata("973", "Mufrodat 82", "وَزٌّ", "وَزٌّ", "Angsa"),

                    $this->data_kata("974", "Mufrodat 83", "بُوْمَةٌ", "بُوْمَةٌ", "Burung hantu"),
                    $this->data_kata("975", "Mufrodat 83", "طَاوُوْسٌ", "طَاوُوْسٌ", "Merak"),
                    $this->data_kata("976", "Mufrodat 83", "حَمَامَةٌ", "حَمَامَةٌ", "Merpati"),
                    $this->data_kata("977", "Mufrodat 83", "حَلَزُوْنٌ", "حَلَزُوْنٌ", "Keong, siput"),
                    $this->data_kata("978", "Mufrodat 83", "سُلَحْفَاةٌ", "سُلَحْفَاةٌ", "Kura-kura"),
                    $this->data_kata("979", "Mufrodat 83", "حَيْتَانٌ", "حَيْتَانٌ", "Ikan Paus"),
                    $this->data_kata("980", "Mufrodat 83", "قِرَشٌ", "قِرَشٌ", "Ikan Hiu"),
                    $this->data_kata("981", "Mufrodat 83", "صَدَفٌ", "صَدَفٌ", "Kerang"),
                    $this->data_kata("982", "Mufrodat 83", "قُرْمُوْطٌ", "قُرْمُوْطٌ", "Lele"),
                    $this->data_kata("983", "Mufrodat 83", "رِيْشٌ", "رِيْشٌ", "Bulu"),
                    $this->data_kata("984", "Mufrodat 83", "بِرَازٌ", "بِرَازٌ", "Kotoran"),
                    $this->data_kata("985", "Mufrodat 83", "جَنَاحٌ", "جَنَاحٌ", "Sayap"),
                    $this->data_kata("986", "Mufrodat 83", "ذَيْلٌ", "ذَيْلٌ", "Ekor"),
                    $this->data_kata("987", "Mufrodat 83", "خُرْطُوْمٌ", "خُرْطُوْمٌ", "Belalai"),

                    $this->data_kata("988", "Mufrodat 84", "أَطْعَمَ-يُطْعِمُ-إِطْعَامًا", "أَطْعَمَ-يُطْعِمُ-إِطْعَامًا", "Memberi makan"),
                    $this->data_kata("989", "Mufrodat 84", "نَبَحَ-يَنْبَحُ-نَبْحًا", "نَبَحَ-يَنْبَحُ-نَبْحًا", "Menggonggong"),
                    $this->data_kata("990", "Mufrodat 84", "شَكَّ-يَشُكُّ-شَكًّا", "شَكَّ-يَشُكُّ-شَكًّا", "Mencakar"),
                    $this->data_kata("991", "Mufrodat 84", "حَرَزَ-يَحْرُزُ-حَرْزًا", "حَرَزَ-يَحْرُزُ-حَرْزًا", "Memelihara"),
                    $this->data_kata("992", "Mufrodat 84", "لَسَعَ-يَلْسَعُ-لَسْعًا", "لَسَعَ-يَلْسَعُ-لَسْعًا", "Menyengat"),
                    $this->data_kata("993", "Mufrodat 84", "اِرْتَقَى-يَرْتَقِى-اِرْتِقَاءً", "اِرْتَقَى-يَرْتَقِى-اِرْتِقَاءً", "Memanjat"),
                    $this->data_kata("994", "Mufrodat 84", "تَسَلَّقَ-يَتَسَلَّقُ-تَسَلُّقًا", "تَسَلَّقَ-يَتَسَلَّقُ-تَسَلُّقًا", "Memanjat"),
                    $this->data_kata("995", "Mufrodat 84", "طَارَ-يَطِيْرُ-طَيْرًا", "طَارَ-يَطِيْرُ-طَيْرًا", "Terbang"),
                    $this->data_kata("996", "Mufrodat 84", "بَاضَ-يَبِيْضُ-بَيْضًا", "بَاضَ-يَبِيْضُ-بَيْضًا", "Bertelur"),
                    $this->data_kata("997", "Mufrodat 84", "تَغَرَّدَ-يَتَغَرَّدُ-تَغَرُّدًا", "تَغَرَّدَ-يَتَغَرَّدُ-تَغَرُّدًا", "Berkicau"),
                    $this->data_kata("998", "Mufrodat 84", "صَادَ-يَصِيْدُ-صَيْدًا", "صَادَ-يَصِيْدُ-صَيْدًا", "Berburu"),
                    $this->data_kata("999", "Mufrodat 84", "رَعَى-يَرْعَى-رَعْيًا", "رَعَى-يَرْعَى-رَعْيًا", "Menggembala"),
                    
                    $this->data_kata("1000", "Mufrodat 85", "نَطَحَ-يَنْطَحُ-نَطْحًا", "نَطَحَ-يَنْطَحُ-نَطْحًا", "Menanduk"),
                    $this->data_kata("1001", "Mufrodat 85", "مَاءَ-يَمُوْءُ-مُوَاءً", "مَاءَ-يَمُوْءُ-مُوَاءً", "Mengeong"),
                    
                    $this->data_kata("1002", "Mufrodat 86", "تُفَّاحٌ", "تُفَّاحٌ", "Apel"),
                    $this->data_kata("1003", "Mufrodat 86", "عِنَبٌ", "عِنَبٌ", "Anggur"),
                    $this->data_kata("1004", "Mufrodat 86", "كُمِثْرَى", "كُمِثْرَى", "Pir"),
                    $this->data_kata("1005", "Mufrodat 86", "مَوْزٌ", "مَوْزٌ", "Pisang"),
                    $this->data_kata("1006", "Mufrodat 86", "بَابَايَا", "بَابَايَا", "Pepaya"),
                    $this->data_kata("1007", "Mufrodat 86", "مَنْجَا", "مَنْجَا", "Mangga"),
                    $this->data_kata("1008", "Mufrodat 86", "نَرَاجِيْلُ", "نَرَاجِيْلُ", "Kelapa"),
                    $this->data_kata("1009", "Mufrodat 86", "اَفُوْكَادُوْ", "اَفُوْكَادُوْ", "Avokad"),
                    $this->data_kata("1010", "Mufrodat 86", "شَمَامٌ", "شَمَامٌ", "Melon"),
                    $this->data_kata("1011", "Mufrodat 86", "بِطِّيْخٌ", "بِطِّيْخٌ", "Semangka"),
                    $this->data_kata("1012", "Mufrodat 86", "جَوْزُ الجَنْدَمِ", "جَوْزُ الجَنْدَمِ", "Manggis"),
                    $this->data_kata("1013", "Mufrodat 86", "بُرْتُقَالٌ", "بُرْتُقَالٌ", "Jeruk"),

                    $this->data_kata("1014", "Mufrodat 87", "تَمْرٌ", "تَمْرٌ", "Kurma"),
                    $this->data_kata("1015", "Mufrodat 87", "فَرَاوَلِةٌ", "فَرَاوَلِةٌ", "Strawberry"),
                    $this->data_kata("1016", "Mufrodat 87", "رُمَّانٌ", "رُمَّانٌ", "Delima"),
                    $this->data_kata("1017", "Mufrodat 87", "فَاكِهَةُ التِّنِيْنَ", "فَاكِهَةُ التِّنِيْنَ", "Buah naga"),
                    $this->data_kata("1018", "Mufrodat 87", "أَنَانَاسُ", "أَنَانَاسُ", "Nanas"),
                    $this->data_kata("1019", "Mufrodat 87", "رَمْبُوْتَانْ", "رَمْبُوْتَانْ", "Rambutan"),
                    $this->data_kata("1020", "Mufrodat 87", "دُوْرِيَانْ", "دُوْرِيَانْ", "Durian"),
                    $this->data_kata("1021", "Mufrodat 87", "دُوْرِيَانْ", "دُوْرِيَانْ", "Durian"),
                    $this->data_kata("1022", "Mufrodat 87", "طَمَاطِمْ", "طَمَاطِمْ", "Tomat"),
                    $this->data_kata("1023", "Mufrodat 87", "جَوَّافَةٌ", "جَوَّافَةٌ", "Jambu"),
                    $this->data_kata("1024", "Mufrodat 87", "ذُرَّةٌ", "ذُرَّةٌ", "Jagung"),

                    $this->data_kata("1025", "Mufrodat 88", "حَصَدَ-يَحْصُدُ-حَصَادًا", "حَصَدَ-يَحْصُدُ-حَصَادًا", "Memanen"),
                    $this->data_kata("1026", "Mufrodat 88", "زَرَعَ-يَزْرَعُ-زَرْعًا / زِرَاعَةً", "زَرَعَ-يَزْرَعُ-زَرْعًا", "Menanam"),
                    $this->data_kata("1027", "Mufrodat 88", "تَحَفَّظَ-يَتَحَفَّظُ-تَحَفُّظًا", "تَحَفَّظَ-يَتَحَفَّظُ-تَحَفُّظًا", "Merawat"),
                    $this->data_kata("1028", "Mufrodat 88", "قَطَفَ-يَقْطُفُ-قَطْفًا", "قَطَفَ-يَقْطُفُ-قَطْفًا", "Memetik"),
                    $this->data_kata("1029", "Mufrodat 88", "سَمَّدَ-يُسَمِّدُ-تَسْمِيْدًا", "سَمَّدَ-يُسَمِّدُ-تَسْمِيْدًا", "Memupuk"),
                    $this->data_kata("1030", "Mufrodat 88", "عَزَقَ-يَعْزِقُ-عَزْقًا", "عَزَقَ-يَعْزِقُ-عَزْقًا", "Mencangkul"),
                    $this->data_kata("1031", "Mufrodat 88", "حَرَثَ-يَحْرِثُ-حَرْثًا", "حَرَثَ-يَحْرِثُ-حَرْثًا", "Membajak"),
                    
                    $this->data_kata("1032", "Mufrodat 89", "مَطْبَخٌ", "مَطْبَخٌ", "Dapur"),
                    $this->data_kata("1033", "Mufrodat 89", "صَيْدَلِيَّةٌ", "صَيْدَلِيَّةٌ", "Apotek"),
                    $this->data_kata("1034", "Mufrodat 89", "مَصْرَفٌ", "مَصْرَفٌ", "Bank"),
                    $this->data_kata("1035", "Mufrodat 89", "مَصْنَعٌ", "مَصْنَعٌ", "Pabrik"),
                    $this->data_kata("1036", "Mufrodat 89", "سُوْقٌ", "سُوْقٌ", "Pasar"),
                    $this->data_kata("1037", "Mufrodat 89", "مَوْلٌ", "مَوْلٌ", "Mall"),
                    $this->data_kata("1038", "Mufrodat 89", "مَوْقِفُ السَّيَّارَةِ", "مَوْقِفُ السَّيَّارَةِ", "Terminal"),
                    $this->data_kata("1039", "Mufrodat 89", "مَحَطَّةُ القِطَارِ", "مَحَطَّةُ القِطَارِ", "Stasiun"),
                    $this->data_kata("1040", "Mufrodat 89", "مَحَطَّةُ الْبِنْزِيْنِ", "مَحَطَّةُ الْبِنْزِيْنِ", "Pom bensin"),
                    $this->data_kata("1041", "Mufrodat 89", "مَطَارٌ", "مَطَارٌ", "Bandara"),
                    $this->data_kata("1042", "Mufrodat 89", "مِيْنَاءٌ", "مِيْنَاءٌ", "Pelabuhan"),
                    $this->data_kata("1043", "Mufrodat 89", "مُسْتَوْدَعٌ", "مُسْتَوْدَعٌ", "Gudang"),

                    $this->data_kata("1044", "Mufrodat 90", "مَكْتَبَةٌ", "مَكْتَبَةٌ", "Perpustakaan"),
                    $this->data_kata("1045", "Mufrodat 90", "فُنْدُقٌ", "فُنْدُقٌ", "Hotel"),
                    $this->data_kata("1046", "Mufrodat 90", "مَقْهَى", "مَقْهَى", "Café"),
                    $this->data_kata("1047", "Mufrodat 90", "مَمْلَكَةٌ", "مَمْلَكَةٌ", "Kerajaan"),
                    $this->data_kata("1048", "Mufrodat 90", "مَحْكَمَةٌ", "مَحْكَمَةٌ", "Pengadilan"),
                    $this->data_kata("1049", "Mufrodat 90", "حَبْسٌ", "حَبْسٌ", "Penjara"),
                    $this->data_kata("1050", "Mufrodat 90", "دَوْرَةٌ", "دَوْرَةٌ", "Kursusan"),
                    $this->data_kata("1051", "Mufrodat 90", "إِدَارَةٌ", "إِدَارَةٌ", "Kantor"),
                    $this->data_kata("1052", "Mufrodat 90", "حَانُوْتٌ", "حَانُوْتٌ", "Warung"),
                    $this->data_kata("1053", "Mufrodat 90", "مَقْصَفٌّ", "مَقْصَفٌّ", "Kantin"),
                    $this->data_kata("1054", "Mufrodat 90", "دُكَّانٌ", "دُكَّانٌ", "Toko"),
                    $this->data_kata("1055", "Mufrodat 90", "شَارِعٌ", "شَارِعٌ", "Jalan"),
                    $this->data_kata("1056", "Mufrodat 90", "مَتْحَفٌ", "مَتْحَفٌ", "Museum"),
                    $this->data_kata("1057", "Mufrodat 90", "مَعْمَلٌ", "مَعْمَلٌ", "Laboratorium"),
                    $this->data_kata("1058", "Mufrodat 90", "مَطْعَمٌ", "مَطْعَمٌ", "Rumah makan"),

                    $this->data_kata("1059", "Mufrodat 91", "حَدِيْقَةٌ", "حَدِيْقَةٌ", "Kebun"),
                    $this->data_kata("1060", "Mufrodat 91", "بُسْتَانٌ", "بُسْتَانٌ", "Taman"),
                    $this->data_kata("1061", "Mufrodat 91", "مَزْرَعَةٌ", "مَزْرَعَةٌ", "Sawah"),
                    $this->data_kata("1062", "Mufrodat 91", "حُجْرَةٌ", "حُجْرَةٌ", "Kamar"),
                    $this->data_kata("1063", "Mufrodat 91", "شُرْفَةٌ", "شُرْفَةٌ", "Teras"),
                    $this->data_kata("1064", "Mufrodat 91", "مَسْكَنٌ", "مَسْكَنٌ", "Asrama"),
                    $this->data_kata("1065", "Mufrodat 91", "مَأْوَى", "مَأْوَى", "Kost"),
                    $this->data_kata("1066", "Mufrodat 91", "شَقَّةٌ", "شَقَّةٌ", "Apartement"),
                    $this->data_kata("1067", "Mufrodat 91", "مَقْبَرَةٌ", "مَقْبَرَةٌ", "Kuburan"),
                    $this->data_kata("1068", "Mufrodat 91", "مَسْجِدٌ", "مَسْجِدٌ", "Masjid"),
                    $this->data_kata("1069", "Mufrodat 91", "مَعْهَدٌ", "مَعْهَدٌ", "Pondok"),
                    $this->data_kata("1070", "Mufrodat 91", "مَدْرَسَةٌ", "مَدْرَسَةٌ", "Sekolah"),
                    $this->data_kata("1071", "Mufrodat 91", "جَامِعَةٌ", "جَامِعَةٌ", "Universitas"),
                    $this->data_kata("1072", "Mufrodat 91", "كَنِيْسَةٌ", "كَنِيْسَةٌ", "Gereja"),
                    $this->data_kata("1073", "Mufrodat 91", "هَيْكَلٌ", "هَيْكَلٌ", "Candi"),

                    $this->data_kata("1074", "Mufrodat 92", "قَصْرٌ", "قَصْرٌ", "Istana"),
                    $this->data_kata("1075", "Mufrodat 92", "كُوْخٌ", "كُوْخٌ", "Gubuk"),
                    $this->data_kata("1076", "Mufrodat 92", "حَظِيْرَةٌ", "حَظِيْرَةٌ", "Kandang"),
                    $this->data_kata("1077", "Mufrodat 92", "مَيْدَانُ الْمَدِيْنَةِ", "مَيْدَانُ الْمَدِيْنَةِ", "Alun-alun"),
                    $this->data_kata("1078", "Mufrodat 92", "بُرْجٌ", "بُرْجٌ", "Menara"),

                    $this->data_kata("1079", "Mufrodat 93", "جَاءَ-يَجِيْئُ-مَجِيْئًا", "جَاءَ-يَجِيْئُ-مَجِيْئًا", "Datang"),
                    $this->data_kata("1080", "Mufrodat 93", "أَتَى-يَأْتِي-اِتْيَانًا", "أَتَى-يَأْتِي-اِتْيَانًا", "Datang"),
                    $this->data_kata("1081", "Mufrodat 93", "حَضَرَ-يَحْضُرُ-حُضُورًا", "حَضَرَ-يَحْضُرُ-حُضُورًا", "Hadir"),
                    $this->data_kata("1082", "Mufrodat 93", "طَلَبَ-يَطْلُبُ-طَلَبًا", "طَلَبَ-يَطْلُبُ-طَلَبًا", "Meminta"),
                    $this->data_kata("1083", "Mufrodat 93", "سَكَنَ-يَسْكُنُ-سُكُوْنًا", "سَكَنَ-يَسْكُنُ-سُكُوْنًا", "Tinggal"),
                    $this->data_kata("1084", "Mufrodat 93", "بَاتَ-يَبِيْتُ-بَيْتًا", "بَاتَ-يَبِيْتُ-بَيْتًا", "Menginap"),
                    $this->data_kata("1085", "Mufrodat 93", "بَنَى-يَبْنِي-بِنَاءً", "بَنَى-يَبْنِي-بِنَاءً", "Membangun"),
                    $this->data_kata("1086", "Mufrodat 93", "أَصْلَحَ-يُصْلِحُ-إِصْلَاحًا", "أَصْلَحَ-يُصْلِحُ-إِصْلَاحًا", "Memperbaiki"),
                    $this->data_kata("1087", "Mufrodat 93", "قَوَّضَ-يُقَوِّضُ-تَقْوِيْضًا", "قَوَّضَ-يُقَوِّضُ-تَقْوِيْضًا", "Membongkar"),
                    $this->data_kata("1088", "Mufrodat 93", "سَافَرَ-يُسَافِرُ-مُسَافَرَةً", "سَافَرَ-يُسَافِرُ-مُسَافَرَةً", "Bepergian"),
                    $this->data_kata("1089", "Mufrodat 93", "عَاشَ-يَعِيْشُ-عَيْشًا", "عَاشَ-يَعِيْشُ-عَيْشًا", "Hidup"),
                    $this->data_kata("1090", "Mufrodat 93", "حَيِيَ-يَحْيَى-حَيَاةً", "حَيِيَ-يَحْيَى-حَيَاةً", "Hidup"),
                    
                    $this->data_kata("1091", "Mufrodat 94", "شَمْسٌ", "شَمْسٌ", "Matahari"),
                    $this->data_kata("1092", "Mufrodat 94", "قَمَرٌ", "قَمَرٌ", "Bulan"),
                    $this->data_kata("1093", "Mufrodat 94", "جَبَلٌ", "جَبَلٌ", "Gunung"),
                    $this->data_kata("1094", "Mufrodat 94", "بَحْرٌ", "بَحْرٌ", "Laut"),
                    $this->data_kata("1095", "Mufrodat 94", "سَمَاءٌ", "سَمَاءٌ", "Langit"),
                    $this->data_kata("1096", "Mufrodat 94", "نَجْمٌ", "نَجْمٌ", "Bintang"),
                    $this->data_kata("1097", "Mufrodat 94", "كَوْكَبٌ", "كَوْكَبٌ", "Planet"),
                    $this->data_kata("1098", "Mufrodat 94", "جَوٌّ", "جَوٌّ", "Angkasa"),
                    $this->data_kata("1099", "Mufrodat 94", "قُزَحٍ", "قُزَحٍ", "Pelangi"),
                    $this->data_kata("1100", "Mufrodat 94", "أَرْضٌ", "أَرْضٌ", "Bumi"),
                    $this->data_kata("1101", "Mufrodat 94", "رَمْلٌ", "رَمْلٌ", "Pasir"),
                    $this->data_kata("1102", "Mufrodat 94", "مَشْلُوْلٌ", "مَشْلُوْلٌ", "Lumpur"),

                    $this->data_kata("1103", "Mufrodat 95", "حَصْبَاءُ", "حَصْبَاءُ", "Kerikil"),
                    $this->data_kata("1104", "Mufrodat 95", "صَحْرَاءُ", "صَحْرَاءُ", "Padang pasir"),
                    $this->data_kata("1105", "Mufrodat 95", "حَجَرٌ", "حَجَرٌ", "Batu"),
                    $this->data_kata("1106", "Mufrodat 95", "مَرْجَانٌ", "مَرْجَانٌ", "Karang"),
                    $this->data_kata("1107", "Mufrodat 95", "سَفْحٌ", "سَفْحٌ", "Lereng"),
                    $this->data_kata("1108", "Mufrodat 95", "قِمَّةُ الْجَبَلِ", "قِمَّةُ الْجَبَلِ", "Puncak gunung"),
                    $this->data_kata("1109", "Mufrodat 95", "جُرُفٌ", "جُرُفٌ", "Tebing"),
                    $this->data_kata("1110", "Mufrodat 95", "شِعْبٌ", "شِعْبٌ", "Lembah"),
                    $this->data_kata("1111", "Mufrodat 95", "جُرْفٌ", "جُرْفٌ", "Jurang"),
                    $this->data_kata("1112", "Mufrodat 95", "سَدِيْمٌ", "سَدِيْمٌ", "Kabut"),
                    $this->data_kata("1113", "Mufrodat 95", "مُغَيِّمٌ", "مُغَيِّمٌ", "Berawan"),
                    $this->data_kata("1114", "Mufrodat 95", "سَحَابٌ", "سَحَابٌ", "Awan"),
                    $this->data_kata("1115", "Mufrodat 95", "ثَلْجٌ", "ثَلْجٌ", "Salju"),
                    $this->data_kata("1116", "Mufrodat 95", "هَضْبَةٌ", "هَضْبَةٌ", "Bukit"),
                    $this->data_kata("1117", "Mufrodat 95", "بُخَارٌ", "بُخَارٌ", "Uap"),

                    $this->data_kata("1118", "Mufrodat 96", "دُخَانٌ", "دُخَانٌ", "Asap"),
                    $this->data_kata("1119", "Mufrodat 96", "شَلَالٌ", "شَلَالٌ", "Air Terjun"),
                    $this->data_kata("1120", "Mufrodat 96", "نَهْرٌ", "نَهْرٌ", "Sungai"),
                    $this->data_kata("1121", "Mufrodat 96", "سَيْلٌ", "سَيْلٌ", "Banjir"),
                    $this->data_kata("1122", "Mufrodat 96", "شَاطِئٌ", "شَاطِئٌ", "Pantai"),
                    $this->data_kata("1123", "Mufrodat 96", "قَارَةٌ", "قَارَةٌ", "Benua"),
                    $this->data_kata("1124", "Mufrodat 96", "مُحِيْطٌ", "مُحِيْطٌ", "Samudra"),
                    $this->data_kata("1125", "Mufrodat 96", "مَوْجٌ", "مَوْجٌ", "Ombak"),
                    $this->data_kata("1126", "Mufrodat 96", "جَزِيْرَةٌ", "جَزِيْرَةٌ", "Pulau"),
                    $this->data_kata("1127", "Mufrodat 96", "غَابَةٌ", "غَابَةٌ", "Hutan"),
                    $this->data_kata("1128", "Mufrodat 96", "غَارٌ", "غَارٌ", "Goa"),

                    $this->data_kata("1129", "Mufrodat 97", "خَلَقَ-يَخْلُقُ-خَلْقًا", "خَلَقَ-يَخْلُقُ-خَلْقًا", "Menciptakan"),
                    $this->data_kata("1130", "Mufrodat 97", "طَلَعَ-يَطْلُعُ-طُلُوْعًا", "طَلَعَ-يَطْلُعُ-طُلُوْعًا", "Muncul"),
                    $this->data_kata("1131", "Mufrodat 97", "غَرَبَ-يَغْرُبُ-غُرُوْبًا", "غَرَبَ-يَغْرُبُ-غُرُوْبًا", "Tenggelam"),
                    $this->data_kata("1132", "Mufrodat 97", "اِحْمَرَّ-يَحْمَرُّ-اِحْمِرَارًا", "اِحْمَرَّ-يَحْمَرُّ-اِحْمِرَارًا", "Memerah"),
                    $this->data_kata("1133", "Mufrodat 97", "اِصْفَرَّ-يَصْفَرُّ-اِصْفِرَارًا", "اِصْفَرَّ-يَصْفَرُّ-اِصْفِرَارًا", "Menguning"),
                    $this->data_kata("1134", "Mufrodat 97", "اِبْيَضَّ-يَبْيَضُّ-اِبْيِضَاضًا", "اِبْيَضَّ-يَبْيَضُّ-اِبْيِضَاضًا", "Memutih"),
                    $this->data_kata("1135", "Mufrodat 97", "اِسْوَدَّ-يَسْوَدُّ-اِسْوِدَادًا", "اِسْوَدَّ-يَسْوَدُّ-اِسْوِدَادًا", "Menghitam"),
                    $this->data_kata("1136", "Mufrodat 97", "أَشْرَقَ-يُشْرِقُ-إِشْرَاقًا", "أَشْرَقَ-يُشْرِقُ-إِشْرَاقًا", "Terbit"),
                    $this->data_kata("1137", "Mufrodat 97", "صَوَّرَ-يُصَوِّرُ-تَصْوِيْرًا", "صَوَّرَ-يُصَوِّرُ-تَصْوِيْرًا", "Memfoto"),
                    $this->data_kata("1138", "Mufrodat 97", "زَارَ-يَزُوْرُ-زِيَارَةً", "زَارَ-يَزُوْرُ-زِيَارَةً", "Mengunjungi"),
                    $this->data_kata("1139", "Mufrodat 97", "هَلَكَ-يَهْلِكُ-هَلَاكًا", "هَلَكَ-يَهْلِكُ-هَلَاكًا", "Hancur"),
                    $this->data_kata("1140", "Mufrodat 97", "أَهْلَكَ-يُهْلِكُ-اِهْلَاكًا", "أَهْلَكَ-يُهْلِكُ-اِهْلَاكًا", "Menghancurkan"),
                    
                    $this->data_kata("1141", "Mufrodat 98", "شَكَرَ-يَشْكُرُ-شُكْرًا", "شَكَرَ-يَشْكُرُ-شُكْرًا", "Bersyukur"),
                    $this->data_kata("1142", "Mufrodat 98", "اِسْتَخْدَمَ-يَسْتَخْدِمُ-اِسْتِخْدَامًا", "اِسْتَخْدَمَ-يَسْتَخْدِمُ-اِسْتِخْدَامًا", "Menggunakan"),
                    $this->data_kata("1143", "Mufrodat 98", "تَعَجَّبَ-يَتَعَجَّبُ-تَعَجُّبًا", "تَعَجَّبَ-يَتَعَجَّبُ-تَعَجُّبًا", "Kagum"),
                    $this->data_kata("1144", "Mufrodat 98", "تَسَلَّقَ-يَتَسَلَّقُ-تَسَلُّقًا", "تَسَلَّقَ-يَتَسَلَّقُ-تَسَلُّقًا", "Mendaki"),
                    
                    $this->data_kata("1145", "Mufrodat 99", "مُعَلِّمٌ", "مُعَلِّمٌ", "Pengajar"),
                    $this->data_kata("1146", "Mufrodat 99", "مُحَاضِرً", "مُحَاضِرً", "Dosen"),
                    $this->data_kata("1147", "Mufrodat 99", "طَالِبٌ", "طَالِبٌ", "Murid"),
                    $this->data_kata("1148", "Mufrodat 99", "طَبِيْبٌ", "طَبِيْبٌ", "Dokter"),
                    $this->data_kata("1149", "Mufrodat 99", "مُمَرِّضٌ", "مُمَرِّضٌ", "Perawat"),
                    $this->data_kata("1150", "Mufrodat 99", "جُنْدٌ", "جُنْدٌ", "Tentara"),
                    $this->data_kata("1151", "Mufrodat 99", "شُرْطِيٌّ", "شُرْطِيٌّ", "Polisi"),
                    $this->data_kata("1152", "Mufrodat 99", "مُخْتَطِفٌ", "مُخْتَطِفٌ", "Perampok"),
                    $this->data_kata("1153", "Mufrodat 99", "سَارِقٌ", "سَارِقٌ", "Pencuri"),
                    $this->data_kata("1154", "Mufrodat 99", "مُحَامٍ", "مُحَامٍ", "Pengacara"),
                    $this->data_kata("1155", "Mufrodat 99", "قَاطِعُ طَرِيْقٍ", "قَاطِعُ طَرِيْقٍ", "Pembegal"),
                    $this->data_kata("1156", "Mufrodat 99", "قَاضٍي", "قَاضٍي", "Hakim"),

                    $this->data_kata("1157", "Mufrodat 100", "مُدِيْرٌ", "مُدِيْرٌ", "Direktur"),
                    $this->data_kata("1158", "Mufrodat 100", "مُغَنِّى", "مُغَنِّى", "Penyanyi"),
                    $this->data_kata("1159", "Mufrodat 100", "فَلَّاحٌ", "فَلَّاحٌ", "Petani"),
                    $this->data_kata("1160", "Mufrodat 100", "صَيَّادُ السَّمَكِ", "صَيَّادُ السَّمَكِ", "Nelayan"),
                    $this->data_kata("1161", "Mufrodat 100", "صَيَّادٌ", "صَيَّادٌ", "Pemburu"),
                    $this->data_kata("1162", "Mufrodat 100", "بَحَّارٌ", "بَحَّارٌ", "Pelaut"),
                    $this->data_kata("1163", "Mufrodat 100", "نَجَّارٌ", "نَجَّارٌ", "Tukang Kayu"),
                    $this->data_kata("1164", "Mufrodat 100", "مِيْكَانِيْكٌ", "مِيْكَانِيْكٌ", "Teknisi"),
                    $this->data_kata("1165", "Mufrodat 100", "بُسْتَانِيٌّ", "بُسْتَانِيٌّ", "Tukang Kebun"),
                    $this->data_kata("1166", "Mufrodat 100", "حَلَّاقٌ", "حَلَّاقٌ", "Tukang Cukur"),
                    $this->data_kata("1167", "Mufrodat 100", "مُزَيِّنٌ", "مُزَيِّنٌ", "Perias"),
                    $this->data_kata("1168", "Mufrodat 100", "مُصَوِّرٌ", "مُصَوِّرٌ", "Fotografer"),
                    $this->data_kata("1169", "Mufrodat 100", "مُشَعْوِذٌ", "مُشَعْوِذٌ", "Pesulap"),
                    $this->data_kata("1170", "Mufrodat 100", "بَائِعٌ", "بَائِعٌ", "Penjual"),
                    $this->data_kata("1171", "Mufrodat 100", "مُضِيْفَةٌ", "مُضِيْفَةٌ", "Pramugari"),
                    
                    $this->data_kata("1172", "Mufrodat 101", "مُهَنْدِسٌ", "مُهَنْدِسٌ", "Insinyur"),
                    $this->data_kata("1173", "Mufrodat 101", "مُهَنْدِسٌ مِعْمَارِيٌّ", "مُهَنْدِسٌ مِعْمَارِيٌّ", "Arsitek"),
                    $this->data_kata("1174", "Mufrodat 101", "سَائِقٌ", "سَائِقٌ", "Sopir"),
                    $this->data_kata("1175", "Mufrodat 101", "مُخْبِرٌ", "مُخْبِرٌ", "Reporter"),
                    $this->data_kata("1176", "Mufrodat 101", "خَيَّاطٌ", "خَيَّاطٌ", "Penjahit"),
                    $this->data_kata("1177", "Mufrodat 101", "طَيَّارٌ", "طَيَّارٌ", "Pilot"),
                    $this->data_kata("1178", "Mufrodat 101", "رَسَّامٌ", "رَسَّامٌ", "Pelukis"),
                    $this->data_kata("1179", "Mufrodat 101", "عُمَّالٌ", "عُمَّالٌ", "Pegawai"),
                    $this->data_kata("1180", "Mufrodat 101", "عَالِمٌ", "عَالِمٌ", "Ilmuwan"),
                    $this->data_kata("1181", "Mufrodat 101", "خَادِمٌ", "خَادِمٌ", "Pelayan"),
                    $this->data_kata("1182", "Mufrodat 101", "نَادِلٌ", "نَادِلٌ", "Pramusaji"),
                    $this->data_kata("1183", "Mufrodat 101", "مُوَظَّفٌ", "مُوَظَّفٌ", "Pegawai"),
                    $this->data_kata("1184", "Mufrodat 101", "رِيَاضِيٌّ", "رِيَاضِيٌّ", "Olahragawan"),
                    $this->data_kata("1185", "Mufrodat 101", "رَئِيْسٌ", "رَئِيْسٌ", "Ketua"),
                    $this->data_kata("1186", "Mufrodat 101", "آمِنُ الصُّنْدُوْقِ", "آمِنُ الصُّنْدُوْقِ", "Bendahara"),
                    
                    $this->data_kata("1187", "Mufrodat 102", "سِكْرِتِيْرٌ", "سِكْرِتِيْرٌ", "Sekretaris"),
                    $this->data_kata("1188", "Mufrodat 102", "مُمَثِّلٌ", "مُمَثِّلٌ", "Artis"),
                    $this->data_kata("1189", "Mufrodat 102", "مُهَرِّجٌ", "مُهَرِّجٌ", "Pelawak"),
                    $this->data_kata("1190", "Mufrodat 102", "رَقَّاصٌ", "رَقَّاصٌ", "Penari"),
                    $this->data_kata("1191", "Mufrodat 102", "رَئِيْسُ الْجُمْهُوْرِيَّةِ", "رَئِيْسُ الْجُمْهُوْرِيَّةِ", "Presiden"),
                    $this->data_kata("1192", "Mufrodat 102", "نَائِبُ رَئِيْسُ الْجُمْهُوْرِيَّةِ", "نَائِبُ رَئِيْسُ الْجُمْهُوْرِيَّةِ", "Wapres"),
                    $this->data_kata("1193", "Mufrodat 102", "وَزِيْرٌ", "وَزِيْرٌ", "Menteri"),
                    $this->data_kata("1194", "Mufrodat 102", "مَجْلِسُ النَّوَابِ", "مَجْلِسُ النَّوَابِ", "DPR"),
                    $this->data_kata("1195", "Mufrodat 102", "مُحَافِظٌ", "مُحَافِظٌ", "Gubernur"),
                    $this->data_kata("1196", "Mufrodat 102", "عُمْدَةٌ", "عُمْدَةٌ", "Walikota"),
                    $this->data_kata("1197", "Mufrodat 102", "رَئِيْسُ الْمُقَاطَعَةِ", "رَئِيْسُ الْمُقَاطَعَةِ", "Bupati"),
                    $this->data_kata("1198", "Mufrodat 102", "رَئِيْسُ النَّاحِيَةِ", "رَئِيْسُ النَّاحِيَةِ", "Camat"),
                    $this->data_kata("1199", "Mufrodat 102", "رَئِيْسُ الْقَرْيَةِ", "رَئِيْسُ الْقَرْيَةِ", "Kades"),
                    
                    $this->data_kata("1200", "Mufrodat 103", "رَأَسَ-يَرْأَسُ-رَأْسًا", "رَأَسَ-يَرْأَسُ-رَأْسًا", "Mengepalai"),
                    $this->data_kata("1201", "Mufrodat 103", "نَابَ-يَنُوْبُ-نَوْبًا", "نَابَ-يَنُوْبُ-نَوْبًا", "Mewakili"),
                    $this->data_kata("1202", "Mufrodat 103", "وَكَّلَ-يُوَكِّلُ-تَوْكِيْلًا", "وَكَّلَ-يُوَكِّلُ-تَوْكِيْلًا", "Mewakilkan"),
                    $this->data_kata("1203", "Mufrodat 103", "شَاوَرَ-يُشَاوِرُ-مُشَاوَرَةً", "شَاوَرَ-يُشَاوِرُ-مُشَاوَرَةً", "Bermusyawarah"),
                    $this->data_kata("1204", "Mufrodat 103", "اِجْتَمَعَ-يَجْتَمِعُ-اِجْتِمَاعًا", "اِجْتَمَعَ-يَجْتَمِعُ-اِجْتِمَاعًا", "Berkumpul"),
                    $this->data_kata("1205", "Mufrodat 103", "جَمَعَ-يَجْمَعُ-جَمْعًا", "جَمَعَ-يَجْمَعُ-جَمْعًا", "Mengumpulkan"),
                    $this->data_kata("1206", "Mufrodat 103", "اِخْتَارَ-يَخْتَارُ-اِخْتِيَارًا", "اِخْتَارَ-يَخْتَارُ-اِخْتِيَارًا", "Memilih"),
                    $this->data_kata("1207", "Mufrodat 103", "أَخَّرَ-يُؤَخِّرُ-تَأْخِيْرًا", "أَخَّرَ-يُؤَخِّرُ-تَأْخِيْرًا", "mengakhirkan"),
                    $this->data_kata("1208", "Mufrodat 103", "أَجَّلَ-يُؤَجِّلُ-تَأْجِيْلًا", "أَجَّلَ-يُؤَجِّلُ-تَأْجِيْلًا", "Mengakhirkan", "", "off"),
                    $this->data_kata("1209", "Mufrodat 103", "عَجَّلَ-يُعَجِّلُ-تَعْجِيْلًا", "عَجَّلَ-يُعَجِّلُ-تَعْجِيْلًا", "menyegerakan"),
                    $this->data_kata("1210", "Mufrodat 103", "كَفَى-يَكْفِي-كِفَايَةً", "كَفَى-يَكْفِي-كِفَايَةً", "Cukup"),
                    
                    $this->data_kata("1211", "Mufrodat 104", "مَوْسِمُ الأَمْطَارِ", "مَوْسِمُ الأَمْطَارِ", "Musim Hujan"),
                    $this->data_kata("1212", "Mufrodat 104", "مَوْسِمُ الْجَفَافِ", "مَوْسِمُ الْجَفَافِ", "Musim Kemarau"),
                    $this->data_kata("1213", "Mufrodat 104", "فَصْلُ الشِّتَاءِ", "فَصْلُ الشِّتَاءِ", "Musim Dingin"),
                    $this->data_kata("1214", "Mufrodat 104", "فَصْلُ الصَّيْفِ", "فَصْلُ الصَّيْفِ", "Musim Panas"),
                    $this->data_kata("1215", "Mufrodat 104", "فَصْلُ الْخَرِيْفِ", "فَصْلُ الْخَرِيْفِ", "Musim Gugur"),
                    $this->data_kata("1216", "Mufrodat 104", "فَصْلُ الرَّبِيْعِ", "فَصْلُ الرَّبِيْعِ", "Musim Semi"),
                    
                    $this->data_kata("1217", "Mufrodat 105", "مَاءٌ ج مِيَاهٌ، أَمْوَاهٌ", "مَاءٌ ج مِيَاهٌ", "Air"),
                    $this->data_kata("1218", "Mufrodat 105", "دِيْنٌ ج أَدْيَانٌ", "دِيْنٌ ج أَدْيَانٌ", "Agama"),
                    $this->data_kata("1219", "Mufrodat 105", "عَقْلٌ ج عُقُوْلٌ", "عَقْلٌ ج عُقُوْلٌ", "Akal"),
                    $this->data_kata("1220", "Mufrodat 105", "حَاجِبٌ ج حُجَّابٌ", "حَاجِبٌ ج حُجَّابٌ", "Alis"),
                    $this->data_kata("1221", "Mufrodat 105", "وَلَدٌ ج أَوْلَادٌ", "وَلَدٌ ج أَوْلَادٌ", "Anak (lk)"),
                    $this->data_kata("1222", "Mufrodat 105", "إِبْنٌ ج أَبْنَاءٌ، بَنُوْنَ", "إِبْنٌ ج أَبْنَاءٌ", "Anak (lk)"),
                    $this->data_kata("1223", "Mufrodat 105", "بِنْتٌ ج بَنَاتٌ", "بِنْتٌ ج بَنَاتٌ", "Anak (pr)"),
                    $this->data_kata("1224", "Mufrodat 105", "طِفْلٌ ج أَطْفَالٌ", "طِفْلٌ ج أَطْفَالٌ", "Bayi"),
                    $this->data_kata("1225", "Mufrodat 105", "أَصْلٌ ج أُصُوْلٌ", "أَصْلٌ ج أُصُوْلٌ", "Asal"),
                    $this->data_kata("1226", "Mufrodat 105", "سَقْفٌ ج سُقُوْفٌ", "سَقْفٌ ج سُقُوْفٌ", "Atap"),
                    $this->data_kata("1227", "Mufrodat 105", "قَاعَةٌ ج قَاعَاتٌ", "قَاعَةٌ ج قَاعَاتٌ", "Aula"),

                    $this->data_kata("1228", "Mufrodat 106", "أَبٌ ج آبَاءٌ", "أَبٌ ج آبَاءٌ", "Ayah"),
                    $this->data_kata("1229", "Mufrodat 106", "جُزْءٌ ج أَجْزَاءٌ", "جُزْءٌ ج أَجْزَاءٌ", "Bagian"),
                    $this->data_kata("1230", "Mufrodat 106", "لُغَةٌ ج لُغَاتٌ", "لُغَةٌ ج لُغَاتٌ", "Bahasa"),
                    $this->data_kata("1231", "Mufrodat 106", "ثَوْبٌ ج ثِيَابٌ", "ثَوْبٌ ج ثِيَابٌ", "Baju"),
                    $this->data_kata("1232", "Mufrodat 106", "وِسَادَةٌ ج وَسَائِدُ", "وِسَادَةٌ ج وَسَائِدُ", "Bantal"),
                    $this->data_kata("1233", "Mufrodat 106", "حَجَرٌ ج أَحْجَارٌ", "حَجَرٌ ج أَحْجَارٌ", "Batu"),
                    $this->data_kata("1234", "Mufrodat 106", "شَكْلٌ ج أَشْكَالٌ", "شَكْلٌ ج أَشْكَالٌ", "Bentuk"),
                    $this->data_kata("1235", "Mufrodat 106", "نَجْمٌ ج نُجُوْمٌ", "نَجْمٌ ج نُجُوْمٌ", "Bintang"),
                    $this->data_kata("1236", "Mufrodat 106", "صَبِيٌّ ج صِبْيَانٌ", "صَبِيٌّ ج صِبْيَانٌ", "Anak kecil"),
                    $this->data_kata("1237", "Mufrodat 106", "كُرَةٌ ج كُرَاتٌ", "كُرَةٌ ج كُرَاتٌ", "Bola"),
                    $this->data_kata("1238", "Mufrodat 106", "قَارُوْرَةٌ ج قَوَارِيْرُ", "قَارُوْرَةٌ ج قَوَارِيْرُ", "Botol"),
                    $this->data_kata("1239", "Mufrodat 106", "كِتَابٌ ج كُتُبٌ", "كِتَابٌ ج كُتُبٌ", "Buku"),
                    $this->data_kata("1240", "Mufrodat 106", "دَفْتَرٌ ج دَفَاتِرُ", "دَفْتَرٌ ج دَفَاتِرُ", "Buku tulis"),
                    $this->data_kata("1241", "Mufrodat 106", "شَهْرٌ ج شُهُوْرٌ", "شَهْرٌ ج شُهُوْرٌ", "Bulan"),
                    $this->data_kata("1242", "Mufrodat 106", "قَمَرٌ ج أَقْمَارٌ", "قَمَرٌ ج أَقْمَارٌ", "Rembulan"),

                    $this->data_kata("1243", "Mufrodat 107", "نُوْرٌ ج أَنْوَارٌ", "نُوْرٌ ج أَنْوَارٌ", "Cahaya"),
                    $this->data_kata("1244", "Mufrodat 107", "فِنْجَانٌ ج فَنَاجِيْنُ", "فِنْجَانٌ ج فَنَاجِيْنُ", "Cangkir"),
                    $this->data_kata("1245", "Mufrodat 107", "مِعْزَقٌ ج مَعَازِقُ", "مِعْزَقٌ ج مَعَازِقُ", "Cangkul"),
                    $this->data_kata("1246", "Mufrodat 107", "مِرْآةٌ ج مَرَايَا", "مِرْآةٌ ج مَرَايَا", "Cermin"),
                    $this->data_kata("1247", "Mufrodat 107", "تُبَّانٌ ج تُبَّانَاتٌ، تَبَابِيْنُ", "تُبَّانٌ ج تُبَّانَاتٌ", "Celana dalam"),
                    $this->data_kata("1248", "Mufrodat 107", "بِنْطَالٌ ج بَنَاطِيْلُ", "بِنْطَالٌ ج بَنَاطِيْلُ", "Celana panjang"),
                    $this->data_kata("1249", "Mufrodat 107", "سِرْوَالٌ ج سَرَاوِيْلُ", "سِرْوَالٌ ج سَرَاوِيْلُ", "Celana pendek"),
                    $this->data_kata("1250", "Mufrodat 107", "قِصَّةٌ ج قِصَصٌ", "قِصَّةٌ ج قِصَصٌ", "Cerita"),
                    $this->data_kata("1251", "Mufrodat 107", "مِثَالٌ ج أَمْثِلَةٌ", "مِثَالٌ ج أَمْثِلَةٌ", "Contoh"),
                    $this->data_kata("1252", "Mufrodat 107", "مَطْبَخٌ ج مَطَابِخُ", "مَطْبَخٌ ج مَطَابِخُ", "Dapur"),
                    $this->data_kata("1253", "Mufrodat 107", "دَمٌ ج دِمَاءٌ", "دَمٌ ج دِمَاءٌ", "Darah"),
                    $this->data_kata("1254", "Mufrodat 107", "وَرَقٌ ج وَرَقَاتٌ", "وَرَقٌ ج وَرَقَاتٌ", "Daun"),
                    $this->data_kata("1255", "Mufrodat 107", "قَرْيَةٌ ج قُرَى", "قَرْيَةٌ ج قُرَى", "Desa"),
                    $this->data_kata("1256", "Mufrodat 107", "فِلْمٌ ج أَفْلَامٌ", "فِلْمٌ ج أَفْلَامٌ", "Film"),
                    
                    $this->data_kata("1257", "Mufrodat 108", "صُوْرَةٌ ج صُوَرٌ", "صُوْرَةٌ ج صُوَرٌ", "Gambar"),
                    $this->data_kata("1258", "Mufrodat 108", "كُوْبٌ ج أَكْوَابٌ", "كُوْبٌ ج أَكْوَابٌ", "Gelas"),
                    $this->data_kata("1259", "Mufrodat 108", "قُفْلٌ ج أَقْفَالٌ", "قُفْلٌ ج أَقْفَالٌ", "Gembok"),
                    $this->data_kata("1260", "Mufrodat 108", "كَنِيْسَةٌ ج كَنَائِسُ", "كَنِيْسَةٌ ج كَنَائِسُ", "Gereja"),
                    $this->data_kata("1261", "Mufrodat 108", "أُسْتَاذٌ ج أَسَاتِيْذُ", "أُسْتَاذٌ ج أَسَاتِيْذُ", "Guru"),
                    $this->data_kata("1262", "Mufrodat 108", "مِنْشَفَةٌ ج مَنَاشِفُ", "مِنْشَفَةٌ ج مَنَاشِفُ", "Handuk"),
                    $this->data_kata("1263", "Mufrodat 108", "يَوْمٌ ج أَيَّامٌ", "يَوْمٌ ج أَيَّامٌ", "Hari"),
                    $this->data_kata("1264", "Mufrodat 108", "قَلْبٌ ج قُلُوْبٌ", "قَلْبٌ ج قُلُوْبٌ", "Jantung"),
                    $this->data_kata("1265", "Mufrodat 108", "حَيَوَانٌ ج حَيَوَانَاتٌ", "حَيَوَانٌ ج حَيَوَانَاتٌ", "Hewan"),
                    $this->data_kata("1266", "Mufrodat 108", "حَرْفٌ ج حُرُوْفٌ", "حَرْفٌ ج حُرُوْفٌ", "Huruf"),
                    $this->data_kata("1267", "Mufrodat 108", "أُمٌّ ج أُمَّهَاتٌ", "أُمٌّ ج أُمَّهَاتٌ", "Ibu"),
                    $this->data_kata("1268", "Mufrodat 108", "عَاصِمَةٌ ج عَوَاصِمُ", "عَاصِمَةٌ ج عَوَاصِمُ", "Ibu kota"),
                    $this->data_kata("1269", "Mufrodat 108", "إِمَامٌ ج أَئِمَّةٌ", "إِمَامٌ ج أَئِمَّةٌ", "Imam"),
                    $this->data_kata("1270", "Mufrodat 108", "سَمَكٌ ج أَسْمَاكٌ", "سَمَكٌ ج أَسْمَاكٌ", "Ikan"),
                    $this->data_kata("1271", "Mufrodat 108", "قَصْرٌ ج قُصُوْرٌ", "قَصْرٌ ج قُصُوْرٌ", "Istana"),

                    $this->data_kata("1272", "Mufrodat 109", "سَبِيْلٌ ج سُبُلٌ", "سَبِيْلٌ ج سُبُلٌ", "Jalan"),
                    $this->data_kata("1273", "Mufrodat 109", "شَارِعٌ ج شَوَارِعُ", "شَارِعٌ ج شَوَارِعُ", "Jalan raya"),
                    $this->data_kata("1274", "Mufrodat 109", "سَاعَةٌ ج سَاعَاتٌ", "سَاعَةٌ ج سَاعَاتٌ", "Jam"),
                    $this->data_kata("1275", "Mufrodat 109", "خِصَّةٌ ج خِصَصٌ", "خِصَّةٌ ج خِصَصٌ", "Jam pelajaran"),
                    $this->data_kata("1276", "Mufrodat 109", "جَوَابٌ ج أَجْوِبَةٌ", "جَوَابٌ ج أَجْوِبَةٌ", "Jawaban"),
                    $this->data_kata("1277", "Mufrodat 109", "نَافِذَةٌ ج نَوَافِذُ", "نَافِذَةٌ ج نَوَافِذُ", "Jendela"),
                    $this->data_kata("1278", "Mufrodat 109", "جِسْرٌ ج جُسُوْرٌ", "جِسْرٌ ج جُسُوْرٌ", "Jembatan"),
                    $this->data_kata("1279", "Mufrodat 109", "رُوْحٌ ج أَرْوَاحٌ", "رُوْحٌ ج أَرْوَاحٌ", "Ruh"),
                    $this->data_kata("1280", "Mufrodat 109", "مِلْيُوْنٌ ج مَلَايِيْنَ", "مِلْيُوْنٌ ج مَلَايِيْنَ", "Juta"),
                    $this->data_kata("1281", "Mufrodat 109", "قَاعِدَةٌ ج قَوَاعِدُ", "قَاعِدَةٌ ج قَوَاعِدُ", "Kaidah"),
                    $this->data_kata("1282", "Mufrodat 109", "جَدٌّ ج أَجْدَادٌ", "جَدٌّ ج أَجْدَادٌ", "Kakek"),
                    $this->data_kata("1283", "Mufrodat 109", "رِجْلٌ ج أَرْجُلٌ", "رِجْلٌ ج أَرْجُلٌ", "Kaki"),
                    $this->data_kata("1284", "Mufrodat 109", "جُمْلَةٌ ج جُمَلٌ", "جُمْلَةٌ ج جُمَلٌ", "Kalimat"),
                    $this->data_kata("1285", "Mufrodat 109", "حُجْرَةٌ ج حُجُرَاتٌ", "حُجْرَةٌ ج حُجُرَاتٌ", "Kamar"),
                    $this->data_kata("1286", "Mufrodat 109", "غُرْفَةٌ ج غُرَفٌ", "غُرْفَةٌ ج غُرَفٌ", "Kamar"),
                    
                    $this->data_kata("1287", "Mufrodat 110", "جَيْبٌ ج جُيُوْبٌ", "جَيْبٌ ج جُيُوْبٌ", "Kantong"),
                    $this->data_kata("1288", "Mufrodat 110", "فِرَاشٌ ج فُرْشٌ", "فِرَاشٌ ج فُرْشٌ", "Kasur"),
                    $this->data_kata("1289", "Mufrodat 110", "فِعْلٌ ج أَفْعَالٌ", "فِعْلٌ ج أَفْعَالٌ", "Tindakan"),
                    $this->data_kata("1290", "Mufrodat 110", "حَالٌ ج أَحْوَالٌ", "حَالٌ ج أَحْوَالٌ", "Keadaan"),
                    $this->data_kata("1291", "Mufrodat 110", "حَدِيْقَةٌ ج حَدَائِقُ", "حَدِيْقَةٌ ج حَدَائِقُ", "Taman"),
                    $this->data_kata("1292", "Mufrodat 110", "مَزِيَّةٌ ج مَزَايَا", "مَزِيَّةٌ ج مَزَايَا", "Keuntungan"),
                    $this->data_kata("1293", "Mufrodat 110", "فَصْلٌ ج فُصُوْلٌ", "فَصْلٌ ج فُصُوْلٌ", "Kelas"),
                    $this->data_kata("1294", "Mufrodat 110", "أُسْرَةُ ج أُسَرٌ", "أُسْرَةُ ج أُسَرٌ", "Keluarga"),
                    $this->data_kata("1295", "Mufrodat 110", "قِرْدٌ ج قُرُوْدٌ", "قِرْدٌ ج قُرُوْدٌ", "Kera"),
                    $this->data_kata("1296", "Mufrodat 110", "قِرْطَاسٌ ج قَرَاطِيْسُ", "قِرْطَاسٌ ج قَرَاطِيْسُ", "Kertas"),
                    $this->data_kata("1297", "Mufrodat 110", "رَئِيْسٌ ج رُؤَسَاءُ", "رَئِيْسٌ ج رُؤَسَاءُ", "Kepala"),
                    $this->data_kata("1298", "Mufrodat 110", "مِرْوَحَةٌ ج مَرَاوِحُ", "مِرْوَحَةٌ ج مَرَاوِحُ", "Kipas angin"),
                    $this->data_kata("1299", "Mufrodat 110", "مَسْبَحٌ ج مَسَابِحُ", "مَسْبَحٌ ج مَسَابِحُ", "Kolam renang"),
                    $this->data_kata("1300", "Mufrodat 110", "صُنْدُوْقٌ ج صَنَادِيْقُ", "صُنْدُوْقٌ ج صَنَادِيْقُ", "Kotak"),
                    $this->data_kata("1301", "Mufrodat 110", "مَدِيْنَةٌ ج مُدُنٌ", "مَدِيْنَةٌ ج مُدُنٌ", "Kota"),

                    $this->data_kata("1302", "Mufrodat 111", "مَقْبَرَةٌ ج مَقَابِرُ", "مَقْبَرَةٌ ج مَقَابِرُ", "Kuburan"),
                    $this->data_kata("1303", "Mufrodat 111", "مِفْتَاحٌ ج مَفَاتِيْحُ", "مِفْتَاحٌ ج مَفَاتِيْحُ", "Kunci"),
                    $this->data_kata("1304", "Mufrodat 111", "ظُفْرٌ ج أَظْفَارٌ", "ظُفْرٌ ج أَظْفَارٌ", "Kuku"),
                    $this->data_kata("1305", "Mufrodat 111", "كُرْسِيٌّ ج كَرَاسِيُ", "كُرْسِيٌّ ج كَرَاسِيُ", "Kursi"),
                    $this->data_kata("1306", "Mufrodat 111", "رَجُلٌ ج رِجَالٌ", "رَجُلٌ ج رِجَالٌ", "Laki-laki"),
                    $this->data_kata("1307", "Mufrodat 111", "مِصْبَاحٌ ج مَصَابِيْحُ", "مِصْبَاحٌ ج مَصَابِيْحُ", "Lampu"),
                    $this->data_kata("1308", "Mufrodat 111", "مَيْدَانٌ ج مَيَادِيْنُ", "مَيْدَانٌ ج مَيَادِيْنُ", "Lapangan"),
                    $this->data_kata("1309", "Mufrodat 111", "بَحْرٌ ج بُحُوْرٌ", "بَحْرٌ ج بُحُوْرٌ", "Laut"),
                    $this->data_kata("1310", "Mufrodat 111", "شَمْعٌ ج شُمُوْعٌ", "شَمْعٌ ج شُمُوْعٌ", "Lilin"),
                    $this->data_kata("1311", "Mufrodat 111", "لِسَانٌ ج أَلْسِنَةٌ", "لِسَانٌ ج أَلْسِنَةٌ", "Lidah"),
                    $this->data_kata("1312", "Mufrodat 111", "مَعْرِفَةٌ ج مَعَارِفُ", "مَعْرِفَةٌ ج مَعَارِفُ", "Pengetahuan"),
                    $this->data_kata("1313", "Mufrodat 111", "نَوْعٌ ج أَنْوَاعٌ", "نَوْعٌ ج أَنْوَاعٌ", "Macam"),
                    $this->data_kata("1314", "Mufrodat 111", "عَسَلٌ ج أَعْسَالٌ", "عَسَلٌ ج أَعْسَالٌ", "Madu"),
                    $this->data_kata("1315", "Mufrodat 111", "مَسْجِدٌ ج مَسَاجِدُ", "مَسْجِدٌ ج مَسَاجِدُ", "Masjid"),
                    $this->data_kata("1316", "Mufrodat 111", "عَيْنٌ ج أَعْيُنٌ، عُيُوْنٌ", "عَيْنٌ ج أَعْيُنٌ", "Mata"),

                    $this->data_kata("1317", "Mufrodat 112", "مَكْتَبٌ ج مَكَاتِبُ", "مَكْتَبٌ ج مَكَاتِبُ", "Kantor"),
                    $this->data_kata("1318", "Mufrodat 112", "دَقِيْقَةٌ ج دَقَائِقُ", "دَقِيْقَةٌ ج دَقَائِقُ", "Menit"),
                    $this->data_kata("1319", "Mufrodat 112", "تِلْمِيْذٌ ج تَلَامِيْذُ", "تِلْمِيْذٌ ج تَلَامِيْذُ", "Murid"),
                    $this->data_kata("1320", "Mufrodat 112", "طَالِبٌ ج طُلَّابٌ", "طَالِبٌ ج طُلَّابٌ", "Siswa"),
                    $this->data_kata("1321", "Mufrodat 112", "مَتْحَفٌ ج مَتَاحِفُ", "مَتْحَفٌ ج مَتَاحِفُ", "Musium"),
                    $this->data_kata("1322", "Mufrodat 112", "نَبِيٌّ ج أَنْبِيَاءُ", "نَبِيٌّ ج أَنْبِيَاءُ", "Nabi"),
                    $this->data_kata("1323", "Mufrodat 112", "اِسْمٌ ج اَسْمَاءٌ", "اِسْمٌ ج اَسْمَاءٌ", "Nama"),
                    $this->data_kata("1324", "Mufrodat 112", "طَبَقٌ ج أَطْبَاقٌ", "طَبَقٌ ج أَطْبَاقٌ", "Nampan"),
                    $this->data_kata("1325", "Mufrodat 112", "بَلَدٌ ج بِلَادٌ", "بَلَدٌ ج بِلَادٌ", "Negara"),
                    $this->data_kata("1326", "Mufrodat 112", "نَصِيْحَةٌ ج نَصَائِحُ", "نَصِيْحَةٌ ج نَصَائِحُ", "Nasihat"),
                    $this->data_kata("1327", "Mufrodat 112", "نَتِيْجَةٌ ج نَتَائِجُ", "نَتِيْجَةٌ ج نَتَائِجُ", "Nilai"),
                    $this->data_kata("1328", "Mufrodat 112", "مَصْنَعٌ ج مَصَانِعُ", "مَصْنَعٌ ج مَصَانِعُ", "Pabrik"),
                    $this->data_kata("1329", "Mufrodat 112", "مَلْبَسٌ ج مَلَابِسُ", "مَلْبَسٌ ج مَلَابِسُ", "Pakaian"),
                    $this->data_kata("1330", "Mufrodat 112", "سُوْقٌ ج أَسْوَاقٌ", "سُوْقٌ ج أَسْوَاقٌ", "Pasar"),
                    $this->data_kata("1331", "Mufrodat 112", "مَنْظَرٌ ج مَنَاظِرُ", "مَنْظَرٌ ج مَنَاظِرُ", "Pemandangan"),
                    
                    $this->data_kata("1332", "Mufrodat 113", "قَلَمٌ ج أَقْلَامٌ", "قَلَمٌ ج أَقْلَامٌ", "Polpen"),
                    $this->data_kata("1333", "Mufrodat 113", "لِصٌّ ج لُصُوْصٌ", "لِصٌّ ج لُصُوْصٌ", "Pencuri"),
                    $this->data_kata("1334", "Mufrodat 113", "رَأْيٌ ج آرَاءٌ", "رَأْيٌ ج آرَاءٌ", "Pendapat"),
                    $this->data_kata("1335", "Mufrodat 113", "سَاكِنٌ ج سُكَّانٌ", "سَاكِنٌ ج سُكَّانٌ", "Penduduk"),
                    $this->data_kata("1336", "Mufrodat 113", "مِسْطَرَةٌ ج مَسَاطِرُ", "مِسْطَرَةٌ ج مَسَاطِرُ", "Penggaris"),
                    $this->data_kata("1337", "Mufrodat 113", "مِمْسَحَةٌ ج مَمَاسِحُ", "مِمْسَحَةٌ ج مَمَاسِحُ", "Penghapus"),
                    $this->data_kata("1338", "Mufrodat 113", "سِجْنٌ ج سُجُوْنٌ", "سِجْنٌ ج سُجُوْنٌ", "Penjara"),
                    $this->data_kata("1339", "Mufrodat 113", "كَاتِبٌ ج كُتَّابٌ،ون،ات", "كَاتِبٌ ج كُتَّابٌ", "Penulis"),
                    $this->data_kata("1340", "Mufrodat 113", "رَاكِبٌ ج رُكَّابٌ", "رَاكِبٌ ج رُكَّابٌ", "Penumpang"),
                    $this->data_kata("1341", "Mufrodat 113", "فَرْقٌ ج فُرُوْقٌ", "فَرْقٌ ج فُرُوْقٌ", "Perbedaan"),
                    $this->data_kata("1342", "Mufrodat 113", "أَمْرٌ ج أَوَامِرُ", "أَمْرٌ ج أَوَامِرُ", "Urusan"),
                    $this->data_kata("1343", "Mufrodat 113", "سُؤَالٌ ج أَسْئِلَةٌ", "سُؤَالٌ ج أَسْئِلَةٌ", "Pertanyaan"),
                    $this->data_kata("1344", "Mufrodat 113", "بَطْنٌ ج بُطُوْنٌ", "بَطْنٌ ج بُطُوْنٌ", "Perut"),
                    $this->data_kata("1345", "Mufrodat 113", "صَحْنٌ ج صُحُوْنٌ", "صَحْنٌ ج صُحُوْنٌ", "Piring"),
                    $this->data_kata("1346", "Mufrodat 113", "شَجَرَةٌ ج أَشْجَارٌ", "شَجَرَةٌ ج أَشْجَارٌ", "Pohon"),

                    $this->data_kata("1347", "Mufrodat 114", "كَوْكَبٌ ج كَوَاكِبُ", "كَوْكَبٌ ج كَوَاكِبُ", "Planet"),
                    $this->data_kata("1348", "Mufrodat 114", "مَعْهَدٌ ج مَعَاهِدُ", "مَعْهَدٌ ج مَعَاهِدُ", "Pondok"),
                    $this->data_kata("1349", "Mufrodat 114", "مَطْعَمٌ ج مَطَاعِمُ", "مَطْعَمٌ ج مَطَاعِمُ", "Restoran"),
                    $this->data_kata("1350", "Mufrodat 114", "أَلْفٌ ج آلَافٍ", "أَلْفٌ ج آلَافٍ", "Ribu"),
                    $this->data_kata("1351", "Mufrodat 114", "بَيْتٌ ج بُيُوْتٌ", "بَيْتٌ ج بُيُوْتٌ", "Rumah"),
                    $this->data_kata("1352", "Mufrodat 114", "صَاحِبٌ ج أَصْحَابٌ", "صَاحِبٌ ج أَصْحَابٌ", "Teman"),
                    $this->data_kata("1353", "Mufrodat 114", "نَعْلٌ ج نِعَالٌ", "نَعْلٌ ج نِعَالٌ", "Sandal"),
                    $this->data_kata("1354", "Mufrodat 114", "أَخٌ ج إِخْوَةٌ، إِخْوَانٌ", "أَخٌ ج إِخْوَةٌ", "Saudara (lk)"),
                    $this->data_kata("1355", "Mufrodat 114", "أُخْتٌ ج أَخَوَاتٌ", "أُخْتٌ ج أَخَوَاتٌ", "Saudara (pr)"),
                    $this->data_kata("1356", "Mufrodat 114", "مَزْرَعَةٌ ج مَزَارِعُ", "مَزْرَعَةٌ ج مَزَارِعُ", "Sawah"),
                    $this->data_kata("1357", "Mufrodat 114", "مَدْرَسَةٌ ج مَدَارِسُ", "مَدْرَسَةٌ ج مَدَارِسُ", "Sekolah"),
                    $this->data_kata("1358", "Mufrodat 114", "مِلْعَقَةٌ ج مَلَاعِقُ", "مِلْعَقَةٌ ج مَلَاعِقُ", "Sendok"),
                    $this->data_kata("1359", "Mufrodat 114", "شَخْصٌ ج أَشْخَاصٌ", "شَخْصٌ ج أَشْخَاصٌ", "Seseorang"),
                    $this->data_kata("1360", "Mufrodat 114", "صِفَةٌ ج صِفَاتٌ", "صِفَةٌ ج صِفَاتٌ", "Sifat"),
                    $this->data_kata("1361", "Mufrodat 114", "مِرْفَقٌ ج مَرَافِقُ", "مِرْفَقٌ ج مَرَافِقُ", "Siku"),

                    $this->data_kata("1362", "Mufrodat 115", "زَوْجٌ ج أَزْوَاجٌ", "زَوْجٌ ج أَزْوَاجٌ", "Pasangan"),
                    $this->data_kata("1363", "Mufrodat 115", "صَوْتٌ ج أَصْوَاتٌ", "صَوْتٌ ج أَصْوَاتٌ", "Suara"),
                    $this->data_kata("1364", "Mufrodat 115", "مَنْبَعٌ ج مَنَابِعُ", "مَنْبَعٌ ج مَنَابِعُ", "Sumber"),
                    $this->data_kata("1365", "Mufrodat 115", "شَرِيْعَةٌ ج شَرَائِعُ", "شَرِيْعَةٌ ج شَرَائِعُ", "Syariat"),
                    $this->data_kata("1366", "Mufrodat 115", "شَرْطٌ ج شُرُوْطٌ", "شَرْطٌ ج شُرُوْطٌ", "Syarat"),
                    $this->data_kata("1367", "Mufrodat 115", "سَنَةٌ ج سَنَوَاتٌ", "سَنَةٌ ج سَنَوَاتٌ", "Tahun"),
                    $this->data_kata("1368", "Mufrodat 115", "رَوْضَةُ ج رِيَاضٌ", "رَوْضَةُ ج رِيَاضٌ", "Taman"),
                    $this->data_kata("1369", "Mufrodat 115", "ضَيْفٌ ج ضُيُوْفٌ", "ضَيْفٌ ج ضُيُوْفٌ", "Tamu"),
                    $this->data_kata("1370", "Mufrodat 115", "يَدٌ ج أَيْدٍ", "يَدٌ ج أَيْدٍ", "Tangan"),
                    $this->data_kata("1371", "Mufrodat 115", "صَدِيْقٌ ج أَصْدِقَاءُ", "صَدِيْقٌ ج أَصْدِقَاءُ", "Teman"),
                    $this->data_kata("1372", "Mufrodat 115", "جِدَارٌ ج جُدُرٌ", "جِدَارٌ ج جُدُرٌ", "Tembok"),
                    $this->data_kata("1373", "Mufrodat 115", "مَلْعَبٌ ج مَلَاعِبُ", "مَلْعَبٌ ج مَلَاعِبُ", "Tempat bermain"),
                    $this->data_kata("1374", "Mufrodat 115", "مَسْكَنٌ ج مَسَاكِنُ", "مَسْكَنٌ ج مَسَاكِنُ", "Tempat tinggal"),
                    $this->data_kata("1375", "Mufrodat 115", "جَارٌ ج جِيْرَانٌ", "جَارٌ ج جِيْرَانٌ", "Tetangga"),
                    $this->data_kata("1376", "Mufrodat 115", "فِرْقَةٌ ج فِرَقٌ", "فِرْقَةٌ ج فِرَقٌ", "Golongan"),

                    $this->data_kata("1377", "Mufrodat 116", "دُكَّانٌ ج دَكَاكِيْنُ", "دُكَّانٌ ج دَكَاكِيْنُ", "Toko"),
                    $this->data_kata("1378", "Mufrodat 116", "هَدَفٌ ج أَهْدَافٌ", "هَدَفٌ ج أَهْدَافٌ", "Tujuan"),
                    $this->data_kata("1379", "Mufrodat 116", "عَظْمٌ ج عِظَامٌ", "عَظْمٌ ج عِظَامٌ", "Tulang"),
                    $this->data_kata("1380", "Mufrodat 116", "أُمَّةٌ ج أُمَمٌ", "أُمَّةٌ ج أُمَمٌ", "Umat"),
                    $this->data_kata("1381", "Mufrodat 116", "جَمَلٌ ج جِمَالٌ", "جَمَلٌ ج جِمَالٌ", "Unta"),
                    $this->data_kata("1382", "Mufrodat 116", "رَسُوْلٌ ج رُسُلٌ", "رَسُوْلٌ ج رُسُلٌ", "Rosul"),
                    $this->data_kata("1383", "Mufrodat 116", "وَجْهٌ ج أَوْجُهٌ، وُجُوْهٌ", "وَجْهٌ ج أَوْجُهٌ", "Wajah"),
                    $this->data_kata("1384", "Mufrodat 116", "نَائِبُ ج نُوَّابٌ", "نَائِبُ ج نُوَّابٌ", "Wakil"),
                    $this->data_kata("1385", "Mufrodat 116", "وَقْتٌ ج أَوْقَاتٌ", "وَقْتٌ ج أَوْقَاتٌ", "Waktu"),
                    $this->data_kata("1386", "Mufrodat 116", "لَوْنٌ ج أَلْوَانٌ", "لَوْنٌ ج أَلْوَانٌ", "Warna"),
                // 

            ];

            return $data;
        }

        public function tema(){
            $data = [
                $this->data_tema("", "1", "2", "مَا - مِنْ أَيْنَ", "9", "1"),
                $this->data_tema("1", "2", "3", "كَيْفَ - أَيُّ", "9", "1"),
                
                $this->data_tema("2", "3", "4", "أَمَامَ - هُنَاكَ", "9", "2"),
                
                $this->data_tema("3", "4", "5", "الْـيَـوْمَ - مَـسَاءً", "9", "3"),
                $this->data_tema("4", "5", "6", "لَـيْـلًا - السَّـنَـةُ الْآتِـيَـةُ", "9", "3"),

                $this->data_tema("5", "6", "7", "عَـقْـلٌ - حَاجِـبٌ", "9", "4"),
                $this->data_tema("6", "7", "8", "هُـدْبٌ - ذِرَاعٌ", "9", "4"),
                $this->data_tema("7", "8", "9", "بَطْـنٌ - كَـعْـبٌ", "9", "4"),
                $this->data_tema("8", "9", "10", "سَاقٌّ - شَامَـةٌ", "9", "4"),
                
                $this->data_tema("9", "10", "11", "رُوْحٌ - كَـبِـدٌ", "9", "5"),
                $this->data_tema("10", "11", "12", "عَـضَـلَـةٌ - ضِـلْـعٌ", "9", "5"),

                $this->data_tema("11", "12", "13", "أَخَـذَ - تَـكَـلَّـمَ", "9", "6"),
                $this->data_tema("12", "13", "14", "تَـلَا - غَـضَّ", "9", "6"),
                $this->data_tema("13", "14", "15", "فَـسَا - نَـقَـلَ", "9", "6"),
                $this->data_tema("14", "15", "16", "هَـمَـسَ", "9", "6"),

                $this->data_tema("15", "16", "17", "أَبٌ - عَـمَّـةٌ", "9", "7"),
                $this->data_tema("16", "17", "18", "خَالٌ - أَرْمَـلٌ", "9", "7"),
                $this->data_tema("17", "18", "19", "أَرْمَـلَـةٌ - فَـتَاةٌ", "9", "7"),

                $this->data_tema("18", "19", "20", "رَبَّـي - نَـصَـحَ", "9", "8"),
                $this->data_tema("19", "20", "21", "نَـصَـرَ - سَـكَـتَ", "9", "8"),
                
                $this->data_tema("20", "21", "22", "مُـتَـوَاضِـعٌ - مُـجْـتَـهِـدٌ", "9", "9"),
                $this->data_tema("21", "22", "23", "كَـسْـلَانٌ - خَـشِـنٌ", "9", "9"),
                $this->data_tema("22", "23", "24", "حَـقُـوْدٌ - طَـفْـشَانُ", "9", "9"),
                $this->data_tema("23", "24", "25", "نَـعْـسَانُ - بَـسِـيْـطٌ", "9", "9"),
                $this->data_tema("24", "25", "26", "مُـبَـذِّرٌ - هَـزِيْـلٌ", "9", "9"),
                $this->data_tema("25", "26", "27", "مَـشْـغُـوْلٌ - مُـتَـفَـهِّـمٌ", "9", "9"),
                $this->data_tema("26", "27", "28", "مُـبَالِـغٌ - مُـتَـحَـيِّـرٌ", "9", "9"),
                $this->data_tema("27", "28", "29", "زَعْـلَانُ - سَـرِيْـعُ الـنِّـسْـيَانِ", "9", "9"),

                $this->data_tema("28", "29", "30", "جِـدَارٌ - نَافِـذَةٌ", "9", "10"),
                $this->data_tema("29", "30", "31", "غُـرْفَـةٌ - سُـلَّـمٌ", "9", "10"),
                
                $this->data_tema("30", "31", "32", "شَـمْـعٌ - زُقَاقٌ", "9", "10"),
                $this->data_tema("31", "32", "33", "كَنَسَ - نَزَلَ", "9", "11"),
                $this->data_tema("32", "33", "34", "كَنَسَ - وَاجَهَ", "9", "11"),

                $this->data_tema("33", "34", "35", "أَسْـوَدُ - ذَهَـبِـيٌّ", "9", "12"),

                $this->data_tema("34", "35", "36", "كَـبِـيْـرٌ - وَسِـخٌ", "9", "13"),
                $this->data_tema("35", "36", "37", "رَخِـيْـصٌ - سَـرِيْـعٌ", "9", "13"),
                $this->data_tema("36", "37", "38", "بَـطِـيْـئٌ - مَـفْـتُـوْحٌ", "9", "13"),
                $this->data_tema("37", "38", "39", "مُـغْـلَـقٌ - خَـطَاءٌ", "9", "13"),

                $this->data_tema("38", "39", "40", "ثَـوْبٌ - حَـمَّالَـةُ الـصَّـدْرِ", "9", "14"),
                $this->data_tema("39", "40", "41", "عِـمَامَـةٌ - جَـيْـبٌ", "9", "14"),
                $this->data_tema("40", "41", "42", "خَـيْـطٌ - لُـؤْلُـؤٌ", "9", "14"),

                $this->data_tema("41", "42", "43", "لَـبِـسَ - نَـسَـجَ", "9", "15"),

                $this->data_tema("42", "43", "44", "سَـرِيْـرٌ - الْـقُـطْـنُ", "9", "16"),
                $this->data_tema("43", "44", "45", "قَـطِـيْـفَـةٌ - جَـوَّالٌ", "9", "16"),

                $this->data_tema("44", "45", "46", "نَامَ - تَـرَبَّـعَ", "9", "17"),

                $this->data_tema("45", "46", "47", "مَـوْقِـدٌ - مِـلْـعَـقَـةٌ", "9", "18"),
                $this->data_tema("46", "47", "48", "كُـوْزٌ - رُزٌّ", "9", "18"),
                $this->data_tema("47", "48", "49", "قَـصْـعَـةُ الْـمِـدَقِّ - بُـنٌّ", "9", "18"),
                $this->data_tema("48", "49", "50", "شَايٌ - بَاذِنْـجَانٌ", "9", "18"),
                $this->data_tema("49", "50", "51", "كُـرْنُـبٌ - زُبْـدَةٌ", "9", "18"),
                
                $this->data_tema("50", "51", "52", "أَكَـلَ - قَـشَّـرَ", "9", "19"),
                $this->data_tema("51", "52", "53", "قَـطَـعَ - تَـسَـوَّقَ", "9", "19"),

                $this->data_tema("52", "53", "54", "طَـعْـمٌ - رَيَّانٌ", "9", "20"),

                $this->data_tema("53", "54", "55", "بِـرْكَـةٌ - مِـغْـرَفَـةٌ", "9", "21"),
                $this->data_tema("54", "55", "56", "حَـنَـفِـيَّـةٌ - مِـيْـزَابٌ", "9", "21"),

                $this->data_tema("55", "56", "57", "اِغْـتَـسَـلَ - غَـلَـقَ", "9", "22"),
                $this->data_tema("56", "57", "58", "ضَـغَـطَ - غَـرِقَ", "9", "22"),
                $this->data_tema("57", "58", "59", "سَالَ - صَـبَّ", "9", "22"),

                $this->data_tema("58", "59", "60", "مَـدْرَسَـةٌ حُـكُـوْمِـيَّـةٌ - مُـدَرِّسَـةٌ", "9", "23"),
                $this->data_tema("59", "60", "61", "تِـلْـمِـيْـذٌ - كِـتَابٌ", "9", "23"),
                $this->data_tema("60", "61", "62", "دَفْـتَـرٌ - دِرَاسَـةٌ عُـلْـيَا", "9", "23"),
                $this->data_tema("61", "62", "63", "مَـدْرَسَـةُ الْـهَـنْـدَسَـةِ - مُـصَـحِّـحٌ", "9", "23"),

                $this->data_tema("62", "63", "64", "ذَهَـبَ - عَـمِـلَ", "9", "24"),
                $this->data_tema("63", "64", "65", "فَـهِـمَ - تَـعَاوَنَ", "9", "24"),
                $this->data_tema("64", "65", "66", "تَـحَـمَّـسَ - اِسْتَقْبَلَ", "9", "24"),
                $this->data_tema("65", "66", "67", "أَذِنَ - شَرَحَ", "9", "24"),
                $this->data_tema("66", "67", "68", "اِسْتَرَاحَ - غَضِبَ", "9", "24"),

                $this->data_tema("67", "68", "69", "دَرَّاجَةٌ - سَفِيْنَةٌ شِرَاعِيَّةٌ", "9", "25"),
                $this->data_tema("68", "69", "70", "تَكْسِى - بِنْزِيْنٌ", "9", "25"),
                $this->data_tema("69", "70", "71", "إِشَارَةُ السَّيْرِ - مَسَافَةُ السَّفَرِ", "9", "25"),
                
                $this->data_tema("70", "71", "72", "قَادَ - كَسَّرَ", "9", "26"),
                $this->data_tema("71", "72", "73", "جَرَّ - أَبْحَرَ", "9", "26"),

                $this->data_tema("72", "73", "74", "طَبِيْبٌ - حُقْنَةٌ", "9", "27"),
                $this->data_tema("73", "74", "75", "مِيْزَانُ الْحَرَارَةِ - دُمَّلٌ", "9", "27"),
                $this->data_tema("74", "75", "76", "بَثْرَةٌ - وَرَمٌ", "9", "27"),
                $this->data_tema("75", "76", "77", "اِرْتِفَاعُ ضَغْطِ الدَّمِ - كَسِيْحٌ", "9", "27"),

                $this->data_tema("76", "77", "78", "عَالَجَ - سَعَلَ", "9", "28"),
                $this->data_tema("77", "78", "79", "مَرَّضَ - حَسِبَ", "9", "28"),

                $this->data_tema("78", "79", "80", "كَلْبٌ - غَنَمٌ", "9", "29"),
                $this->data_tema("79", "80", "81", "زَرَافَةٌ - وَرَلٌ", "9", "29"),
                $this->data_tema("80", "81", "82", "قَمْلٌ - غَزَالٌ", "9", "29"),
                $this->data_tema("81", "82", "83", "قِرْدٌ - وَزٌّ", "9", "29"),
                $this->data_tema("82", "83", "84", "بُوْمَةٌ - خُرْطُوْمٌ", "9", "29"),

                $this->data_tema("83", "84", "85", "أَطْعَمَ - رَعَى", "9", "30"),
                $this->data_tema("84", "85", "86", "نَطَحَ - مَاءَ", "9", "30"),

                $this->data_tema("85", "86", "87", "تُفَّاحٌ - بُرْتُقَالٌ", "9", "31"),
                $this->data_tema("86", "87", "88", "تَمْرٌ - ذُرَّةٌ", "9", "31"),

                $this->data_tema("87", "88", "89", "حَصَدَ - حَرَثَ", "9", "32"),

                $this->data_tema("88", "89", "90", "مَطْبَخٌ - مُسْتَوْدَعٌ", "9", "33"),
                $this->data_tema("89", "90", "91", "مَكْتَبَةٌ - مَطْعَمٌ", "9", "33"),
                $this->data_tema("90", "91", "92", "حَدِيْقَةٌ - هَيْكَلٌ", "9", "33"),
                $this->data_tema("91", "92", "93", "قَصْرٌ - بُرْجٌ", "9", "33"),

                $this->data_tema("92", "93", "94", "جَاءَ - حَيِيَ", "9", "34"),

                $this->data_tema("93", "94", "95", "شَمْسٌ - مَشْلُوْلٌ", "9", "35"),
                $this->data_tema("94", "95", "96", "حَصْبَاءُ - بُخَارٌ", "9", "35"),
                $this->data_tema("95", "96", "97", "دُخَانٌ - غَارٌ", "9", "35"),

                $this->data_tema("96", "97", "98", "خَلَقَ - أَهْلَكَ", "9", "36"),
                $this->data_tema("97", "98", "99", "شَكَرَ - تَسَلَّقَ", "9", "36"),

                $this->data_tema("98", "99", "100", "مُعَلِّمٌ - قَاضٍي", "9", "37"),
                $this->data_tema("99", "100", "101", "مُدِيْرٌ - مُضِيْفَةٌ", "9", "37"),
                
                $this->data_tema("100", "101", "102", "مُهَنْدِسٌ - آمِنُ الصُّنْدُوْقِ", "9", "37"),
                $this->data_tema("101", "102", "103", "سِكْرِتِيْرٌ - رَئِيْسُ الْقَرْيَةِ", "9", "37"),

                $this->data_tema("102", "103", "104", "رَأَسَ - كَفَى", "9", "38"),

                $this->data_tema("103", "104", "105", "مَوْسِمُ الأَمْطَارِ - فَصْلُ الرَّبِيْعِ", "9", "39"),

                $this->data_tema("104", "105", "106", "مَاءٌ - قَاعَةٌ", "8", "40"),
                $this->data_tema("105", "106", "107", "أَبٌ - قَمَرٌ", "8", "40"),
                $this->data_tema("106", "107", "108", "نُوْرٌ - فِلْمٌ", "8", "40"),
                $this->data_tema("107", "108", "109", "صُوْرَةٌ - قَصْرٌ", "8", "40"),
                $this->data_tema("108", "109", "110", "سَبِيْلٌ - غُرْفَةٌ", "8", "40"),
                $this->data_tema("109", "110", "111", "جَيْبٌ - مَدِيْنَةٌ", "8", "40"),
                $this->data_tema("110", "111", "112", "مَقْبَرَةٌ - عَيْنٌ", "8", "40"),
                $this->data_tema("111", "112", "113", "مَكْتَبٌ - مَنْظَرٌ", "8", "40"),
                $this->data_tema("112", "113", "114", "قَلَمٌ - شَجَرَةٌ", "8", "40"),
                $this->data_tema("113", "114", "115", "كَوْكَبٌ - مِرْفَقٌ", "8", "40"),
                $this->data_tema("114", "115", "116", "زَوْجٌ - فِرْقَةٌ", "8", "40"),
                $this->data_tema("115", "116", "", "دُكَّانٌ - لَوْنٌ", "8", "40"),
            ];
            
            return $data;
        }

        public function bab(){
            $data = [
                $this->data_bab("كَلِمَاتُ اْلإِسْتِفْهَامِ", "Kata Tanya", "", "1", "2"),
                $this->data_bab("ظُرُوْفُ الْمَكَانِ", "Keterangan Tempat", "1", "2", "3"),
                $this->data_bab("ظُرُوْفُ الزَّمَانِ", "Keterangan Waktu", "2", "3", "4"),
                $this->data_bab("أَعْضَاءُ الْبَدَنِ", "Anggota Badan", "3", "4", "5"),
                $this->data_bab("أَعْضَاءٌ دَاخِلِيَّةٌ", "Anggota Dalam", "4", "5", "6"),
                $this->data_bab("الأَفْعَالُ عَنْ أَعْضَاءِ الْبَدَنِ", "Kata kerja tentang Anggota Badan", "5", "6", "7"),
                $this->data_bab("الأُسْرَةُ", "Keluarga", "6", "7", "8"),
                $this->data_bab("الأَفْعَالُ عَنِ اْلأُسْرَةِ", "Kata kerja tentang keluarga", "7", "8", "9"),
                $this->data_bab("الطَّبِيْعَةُ الْبَشَرِيَّةُ", "Sifat Manusia", "8", "9", "10"),
                $this->data_bab("آثَاثُ اْلبَيْتِ", "Perabotan Rumah", "9", "10", "11"),
                $this->data_bab("الأَفْعَالُ عَنِ اْلبَيْتِ", "Pekerjaan tentang rumah", "10", "11", "12"),
                $this->data_bab("الأَلْوَانُ", "Warna-warna", "11", "12", "13"),
                $this->data_bab("الصِّفَاتُ", "Sifat-sifat", "12", "13", "14"),
                $this->data_bab("مَلَابِسُ وَ جَوَاهِرُ", "Pakaian dan Perhiasan", "13", "14", "15"),
                $this->data_bab("الأَفْعَالُ عَنِ الْمَلَابِسِ", "Kata kerja tentang Pakaian", "14", "15", "16"),
                $this->data_bab("غُرْفَةُ النَّوْمِ", "Kamar tidur", "15", "16", "17"),
                $this->data_bab("الأَفْعَالُ عَنْ غُرْفَةِ النَّوْمِ", "Kata kerja ttg Kamar Tidur", "16", "17", "18"),
                $this->data_bab("الْمَطْبَخُ", "Dapur", "17", "18", "19"),
                $this->data_bab("الأَفْعَالُ عَنِ الْمَطْبَخِ", "Kata kerja ttg Dapur", "18", "19", "20"),
                $this->data_bab("الطُّعُوْمُ", "Rasa-rasa", "19", "20", "21"),
                $this->data_bab("الحَمَّامُ", "Kamar Mandi", "20", "21", "22"),
                $this->data_bab("الأَفْعَالُ عَنِ الْحَمَّامِ", "Kata kerja ttg Kamar Mandi", "21", "22", "23"),
                $this->data_bab("المَدْرَسَةُ", "Sekolah", "22", "23", "24"),
                $this->data_bab("الأَفْعَالُ عَنِ الْمَدْرَسَةِ", "Kata kerja ttg Sekolah", "23", "24", "25"),
                $this->data_bab("الْمَرْكُوْبَاتُ", "Kendaraan", "24", "25", "26"),
                $this->data_bab("الأَفْعَالُ  عَنِ الْمَرْكُوْبَاتِ", "Kata kerja ttg Kendaraan", "25", "26", "27"),
                $this->data_bab("الْمُسْتَشْفَى", "Rumah sakit", "26", "27", "28"),
                $this->data_bab("الأَفْعَالُ عَنِ الْمُسْتَشْفَى", "Kata kerja ttg Rumah sakit", "27", "28", "29"),
                $this->data_bab("أَسْمَاءُ الْحَيَوَانَاتِ", "Nama-nama hewan", "28", "29", "30"),
                $this->data_bab("الأَفْعَالُ عَنِ الْحَيَوَانِ", "Kata kerja ttg Hewan", "29", "30", "31"),
                $this->data_bab("أَسْمَاءُ اْلفَوَاكِهِ", "Nama-nama buah", "30", "31", "32"),
                $this->data_bab("الأَفْعَالُ عَنِ اْلفَوَاكِهِ", "Kata kerja ttg Buah-buahan", "31", "32", "33"),
                $this->data_bab("أَسْمَاءُ الْمَكَانِ", "Nama-nama tempat", "32", "33", "34"),
                $this->data_bab("الأَفْعَالُ عَنِ الْمَكَانِ", "Kata kerja ttg Tempat", "33", "34", "35"),
                $this->data_bab("العَالَمُ", "Dunia", "34", "35", "36"),
                $this->data_bab("الأَفْعَالُ عَنِ اْلعَالَمِ", "Kata kerja ttg Dunia", "35", "36", "37"),
                $this->data_bab("الْمِهْنَةُ", "Profesi", "36", "37", "38"),
                $this->data_bab("الأَفْعَالُ عَنِ الْمِهْنَةِ", "Kata kerja ttg Profesi", "37", "38", "39"),
                $this->data_bab("الفُصُوْلُ", "Musim-musim", "38", "39", "40"),
                $this->data_bab("جُمُوْعُ التَّكْسِيْرِ", "Jamak Taksir", "39", "40", ""),
            ];

            return $data;
        }

        public function data_bab($title, $title_arti, $back = "",$bab, $next = ""){
            if($back != ""){
                $back = "ft_1/mufrodat"."?tema=".MD5($back);
            }

            if($next != ""){
                $next = "ft_1/mufrodat"."?tema=".MD5($next);
            }
            
            $data = [
                "title" => $title,
                "title_arti" => $title_arti,
                "bab" => $bab,
                "back" => $back,
                "next" => $next,
            ];

            return $data;
        }

        public function data_tema($back, $tema, $next, $title, $kata, $bab){
            if($back != ""){
                $back = "ft_1/mufrodat"."?id=".MD5("Mufrodat $back");
            }

            if($next != ""){
                $next = "ft_1/mufrodat"."?id=".MD5("Mufrodat $next");
            }

            $data = [
                "tema" => "Mufrodat " . $tema,
                "back" => $back,
                "next" => $next,
                "title_arab" => $title,
                "kata" => $kata,
                "bab" => $bab
            ];

            return $data;
        }

        public function data_kata($id = "", $tema, $kata, $kata_arab, $arti, $cek = "", $status = "on"){
            $data = [
                "id" => $id,
                "tema" => $tema,
                "kata" => $kata,
                "kata_arab" => $kata_arab,
                "arti" => $arti,
                "huruf" => array_unique($this->huruf($kata_arab, $cek)),
                "status" => $status
            ];

            return $data;
        }

        public function huruf($kata, $cek = ""){
            $i = 0;
            $huruf = [];
            while ($kata != ""){
                if(substr($kata, -1) == "-"){
                    $huruf[$i] = substr($kata, -1);
                    $kata = substr($kata, 0, -1);
                } else if(substr($kata, -1) == " "){
                    $huruf[$i] = " ";
                    $kata = substr($kata, 0, -1);
                } else if(substr($kata, -1) == "/"){
                    $huruf[$i] = substr($kata, -1);
                    $kata = substr($kata, 0, -1);
                } else if (substr($kata, -8) == "اَلْ") {
                    $huruf[$i] = substr($kata, -8);
                    $kata = substr($kata, 0, -8);
                } else if (substr($kata, -6) == "اَل" || substr($kata, -6) == "الْ" ){
                    $huruf[$i] = substr($kata, -6);
                    $kata = substr($kata, 0, -6);
                } else if (substr($kata, -4) == "ال" ){
                    $huruf[$i] = substr($kata, -4);
                    $kata = substr($kata, 0, -4);
                } else if (substr($kata, -2, 2) == "ّ" || substr($kata, -4, 2) == "ّ"){
                    $huruf[$i] = substr($kata, -6);
                    $kata = substr($kata, 0, -6);
                } else if(substr($kata, -2) == "ا" || substr($kata, -2) == "ى" || substr($kata, -2) == "ج" || substr($kata, -2) == "-" || substr($kata, -2) == "_" || substr($kata, -2) == "ل" || substr($kata, -2) == "آ" || substr($kata, -2) == "ي" || substr($kata, -2) == "و"){
                    $huruf[$i] = substr($kata, -2);
                    $kata = substr($kata, 0, -2);
                } else {
                    $huruf[$i] = substr($kata, -4);
                    $kata = substr($kata, 0, -4);
                }

                $i++;
            }

            if($cek != ""){
                $huruf[$i] = $cek;
            }
            
            return $huruf;
        }

        public function mudzakkar_muannats(){
            $data = [
                $this->kata_mudzakkar_muannats("كِتَابٌ", "مُذَكَّرٌ", "1"),
                $this->kata_mudzakkar_muannats("مَجَلَّةٌ", "مُؤَنَّثٌ", "1"),
                $this->kata_mudzakkar_muannats("قَلَمٌ", "مُذَكَّرٌ", "1"),
                $this->kata_mudzakkar_muannats("مِمْسَحَةٌ", "مُؤَنَّثٌ", "1"),
                $this->kata_mudzakkar_muannats("قِرْطَاسٌ", "مُذَكَّرٌ", "1"),
                $this->kata_mudzakkar_muannats("حَقِيْبَةٌ", "مُؤَنَّثٌ", "1"),
                $this->kata_mudzakkar_muannats("مَكْتَبٌ", "مُذَكَّرٌ", "1"),
                $this->kata_mudzakkar_muannats("سَبُّوْرَةٌ", "مُؤَنَّثٌ", "1"),

                $this->kata_mudzakkar_muannats("بَابٌ", "مُذَكَّرٌ", "2"),
                $this->kata_mudzakkar_muannats("نَافِذَةٌ", "مُؤَنَّثٌ", "2"),
                $this->kata_mudzakkar_muannats("مِصْبَاحٌ", "مُذَكَّرٌ", "2"),
                $this->kata_mudzakkar_muannats("مِفْتَاحٌ", "مُذَكَّرٌ", "2"),
                $this->kata_mudzakkar_muannats("خِزَانَةٌ", "مُؤَنَّثٌ", "2"),
                $this->kata_mudzakkar_muannats("فِرَاشٌ", "مُذَكَّرٌ", "2"),
                $this->kata_mudzakkar_muannats("مِكْنَسَةٌ", "مُؤَنَّثٌ", "2"),
                $this->kata_mudzakkar_muannats("رَفٌّ", "مُذَكَّرٌ", "2"),

                $this->kata_mudzakkar_muannats("مَاءٌ", "مُذَكَّرٌ", "3"),
                $this->kata_mudzakkar_muannats("قَهْوَةٌ", "مُؤَنَّثٌ", "3"),
                $this->kata_mudzakkar_muannats("حَلِيْبٌ", "مُذَكَّرٌ", "3"),
                $this->kata_mudzakkar_muannats("سَاعَةٌ", "مُؤَنَّثٌ", "3"),
                $this->kata_mudzakkar_muannats("سَكَنٌ", "مُذَكَّرٌ", "3"),
                $this->kata_mudzakkar_muannats("غُرْفَةٌ", "مُؤَنَّثٌ", "3"),
                $this->kata_mudzakkar_muannats("مَعْهَدٌ", "مُذَكَّرٌ", "3"),
                $this->kata_mudzakkar_muannats("لِبَاسٌ", "مُذَكَّرٌ", "3"),

                $this->kata_mudzakkar_muannats("عَيْنٌ", "مُؤَنَّثٌ", "4"),
                $this->kata_mudzakkar_muannats("رِجْلٌ", "مُؤَنَّثٌ", "4"),
                $this->kata_mudzakkar_muannats("يَدٌ", "مُؤَنَّثٌ", "4"),
                $this->kata_mudzakkar_muannats("خَدٌّ", "مُؤَنَّثٌ", "4"),
                $this->kata_mudzakkar_muannats("خَاسِرٌ", "مُذَكَّرٌ", "4"),
                $this->kata_mudzakkar_muannats("رَابِحٌ", "مُذَكَّرٌ", "4"),
                $this->kata_mudzakkar_muannats("حِزَامٌ", "مُذَكَّرٌ", "4"),
                $this->kata_mudzakkar_muannats("جَيْبٌ", "مُذَكَّرٌ", "4"),

                $this->kata_mudzakkar_muannats("أُذُنٌ", "مُؤَنَّثٌ", "5"),
                $this->kata_mudzakkar_muannats("خَضْرَاءُ", "مُؤَنَّثٌ", "5"),
                $this->kata_mudzakkar_muannats("سَمْرَاءُ", "مُؤَنَّثٌ", "5"),
                $this->kata_mudzakkar_muannats("سُفْلَى", "مُؤَنَّثٌ", "5"),
                $this->kata_mudzakkar_muannats("زِرٌّ", "مُذَكَّرٌ", "5"),
                $this->kata_mudzakkar_muannats("خَاتَمٌ", "مُذَكَّرٌ", "5"),
                $this->kata_mudzakkar_muannats("رِبَاطٌ", "مُذَكَّرٌ", "5"),
                $this->kata_mudzakkar_muannats("خَيْطٌ", "مُذَكَّرٌ", "5"),

            ];

            return $data;
        }

        public function kata_mudzakkar_muannats($kata, $jenis, $latihan){
            $data = [
                "kata_arab" => $kata,
                "jawaban" => $jenis,
                "latihan" => $latihan
            ];

            return $data;
        }

        public function mufrod_mutsanna(){
            $data = [
                $this->kata_mufrod_mutsanna("1", "كِتَابٌ (Mufrod Subjek)", "كِتَابٌ", "كِتَابٌ"),
                $this->kata_mufrod_mutsanna("1", "كِتَابٌ (Mufrod Objek)", "كِتَابٌ", "كِتَابًا"),
                $this->kata_mufrod_mutsanna("1", "كِتَابٌ (Mutsanna Subjek)", "كِتَابٌ", "كِتَابَانِ"),
                $this->kata_mufrod_mutsanna("1", "كِتَابٌ (Mutsanna Objek)", "كِتَابٌ", "كِتَابَيْنِ"),
                $this->kata_mufrod_mutsanna("1", "سَيَّارَةٌ (Mufrod Subjek)", "سَيَّارَةٌ", "سَيَّارَةٌ"),
                $this->kata_mufrod_mutsanna("1", "سَيَّارَةٌ (Mufrod Objek)", "سَيَّارَةٌ", "سَيَّارَةً"),
                $this->kata_mufrod_mutsanna("1", "سَيَّارَةٌ (Mutsanna Subjek)", "سَيَّارَةٌ", "سَيَّارَتَانِ"),
                $this->kata_mufrod_mutsanna("1", "سَيَّارَةٌ (Mutsanna Objek)", "سَيَّارَةٌ", "سَيَّارَتَيْنِ"),
                
                $this->kata_mufrod_mutsanna("2", "سَقْفٌ (Mufrod Subjek)", "سَقْفٌ", "سَقْفٌ"),
                $this->kata_mufrod_mutsanna("2", "سَقْفٌ (Mufrod Objek)", "سَقْفٌ", "سَقْفًا"),
                $this->kata_mufrod_mutsanna("2", "سَقْفٌ (Mutsanna Subjek)", "سَقْفٌ", "سَقْفَانِ"),
                $this->kata_mufrod_mutsanna("2", "سَقْفٌ (Mutsanna Objek)", "سَقْفٌ", "سَقْفَيْنِ"),
                $this->kata_mufrod_mutsanna("2", "مِعْلَمَةٌ (Mufrod Subjek)", "مِعْلَمَةٌ", "مِعْلَمَةٌ"),
                $this->kata_mufrod_mutsanna("2", "مِعْلَمَةٌ (Mufrod Objek)", "مِعْلَمَةٌ", "مِعْلَمَةً"),
                $this->kata_mufrod_mutsanna("2", "مِعْلَمَةٌ (Mutsanna Subjek)", "مِعْلَمَةٌ", "مِعْلَمَتَانِ"),
                $this->kata_mufrod_mutsanna("2", "مِعْلَمَةٌ (Mutsanna Objek)", "مِعْلَمَةٌ", "مِعْلَمَتَيْنِ"),

                $this->kata_mufrod_mutsanna("3", "فَصْلٌ (Mufrod Subjek)", "فَصْلٌ", "فَصْلٌ"),
                $this->kata_mufrod_mutsanna("3", "فَصْلٌ (Mufrod Objek)", "فَصْلٌ", "فَصْلًا"),
                $this->kata_mufrod_mutsanna("3", "فَصْلٌ (Mutsanna Subjek)", "فَصْلٌ", "فَصْلَانِ"),
                $this->kata_mufrod_mutsanna("3", "فَصْلٌ (Mutsanna Objek)", "فَصْلٌ", "فَصْلَيْنِ"),
                $this->kata_mufrod_mutsanna("3", "تِلْمِيْذَةٌ (Mufrod Subjek)", "تِلْمِيْذَةٌ", "تِلْمِيْذَةٌ"),
                $this->kata_mufrod_mutsanna("3", "تِلْمِيْذَةٌ (Mufrod Objek)", "تِلْمِيْذَةٌ", "تِلْمِيْذَةً"),
                $this->kata_mufrod_mutsanna("3", "تِلْمِيْذَةٌ (Mutsanna Subjek)", "تِلْمِيْذَةٌ", "تِلْمِيْذَتَانِ"),
                $this->kata_mufrod_mutsanna("3", "تِلْمِيْذَةٌ (Mutsanna Objek)", "تِلْمِيْذَةٌ", "تِلْمِيْذَتَيْنِ"),

                $this->kata_mufrod_mutsanna("4", "عَيْنٌ (Mufrod Subjek)", "عَيْنٌ", "عَيْنٌ"),
                $this->kata_mufrod_mutsanna("4", "عَيْنٌ (Mufrod Objek)", "عَيْنٌ", "عَيْنًا"),
                $this->kata_mufrod_mutsanna("4", "عَيْنٌ (Mutsanna Subjek)", "عَيْنٌ", "عَيْنَانِ"),
                $this->kata_mufrod_mutsanna("4", "عَيْنٌ (Mutsanna Objek)", "عَيْنٌ", "عَيْنَيْنِ"),
                $this->kata_mufrod_mutsanna("4", "سَاعَةٌ (Mufrod Subjek)", "سَاعَةٌ", "سَاعَةٌ"),
                $this->kata_mufrod_mutsanna("4", "سَاعَةٌ (Mufrod Objek)", "سَاعَةٌ", "سَاعَةً"),
                $this->kata_mufrod_mutsanna("4", "سَاعَةٌ (Mutsanna Subjek)", "سَاعَةٌ", "سَاعَتَانِ"),
                $this->kata_mufrod_mutsanna("4", "سَاعَةٌ (Mutsanna Objek)", "سَاعَةٌ", "سَاعَتَيْنِ"),
                
                $this->kata_mufrod_mutsanna("5", "سِلْكٌ (Mufrod Subjek)", "سِلْكٌ", "سِلْكٌ"),
                $this->kata_mufrod_mutsanna("5", "سِلْكٌ (Mufrod Objek)", "سِلْكٌ", "سِلْكًا"),
                $this->kata_mufrod_mutsanna("5", "سِلْكٌ (Mutsanna Subjek)", "سِلْكٌ", "سِلْكَانِ"),
                $this->kata_mufrod_mutsanna("5", "سِلْكٌ (Mutsanna Objek)", "سِلْكٌ", "سِلْكَيْنِ"),
                $this->kata_mufrod_mutsanna("5", "مَدْرَسَةٌ (Mufrod Subjek)", "مَدْرَسَةٌ", "مَدْرَسَةٌ"),
                $this->kata_mufrod_mutsanna("5", "مَدْرَسَةٌ (Mufrod Objek)", "مَدْرَسَةٌ", "مَدْرَسَةً"),
                $this->kata_mufrod_mutsanna("5", "مَدْرَسَةٌ (Mutsanna Subjek)", "مَدْرَسَةٌ", "مَدْرَسَتَانِ"),
                $this->kata_mufrod_mutsanna("5", "مَدْرَسَةٌ (Mutsanna Objek)", "مَدْرَسَةٌ", "مَدْرَسَتَيْنِ"),
            ];

            return $data;
        }

        public function kata_mufrod_mutsanna($latihan, $soal, $kata, $jawaban){
            $data = [
                "latihan" => $latihan,
                "soal" => $soal,
                "jawaban" => $jawaban,
                "kata" => $this->kata_muf_muts($kata),
                "huruf" => array_unique(array_diff($this->huruf($this->huruf_mufrod_mutsanna($kata)), ["_"])),
            ];

            return $data;
        }

        public function huruf_mufrod_mutsanna($kata){
            if(strpos($kata, "ة") !== false){
                $ta = str_replace("ة", "ت", $kata);
                $mufrod_objek = substr($kata, 0, -2) . "ً";
                $mutsanna_subjek = substr($ta, 0, -2) . "َانِ";
                $mutsanna_objek = substr($ta, 0, -2) . "َيْنِ";
            } else{
                $mufrod_objek = substr($kata, 0, -2) . "ًا";
                $mutsanna_subjek = substr($kata, 0, -2) . "َانِ";
                $mutsanna_objek = substr($kata, 0, -2) . "َيْنِ";
            }

            $data = $kata . " " . $mufrod_objek . " " . $mutsanna_subjek . " " . $mutsanna_objek;

            return $data;
        }

        public function kata_muf_muts($kata){
            if(strpos($kata, "ة") !== false){
                $ta = str_replace("ة", "ت", $kata);
                $mufrod_objek = substr($kata, 0, -2) . "ً";
                $mutsanna_subjek = substr($ta, 0, -2) . "َانِ";
                $mutsanna_objek = substr($ta, 0, -2) . "َيْنِ";
            } else{
                $mufrod_objek = substr($kata, 0, -2) . "ًا";
                $mutsanna_subjek = substr($kata, 0, -2) . "َانِ";
                $mutsanna_objek = substr($kata, 0, -2) . "َيْنِ";
            }

            $data[0] = $kata;
            $data[1] = $mufrod_objek;
            $data[2] = $mutsanna_subjek;
            $data[3] = $mutsanna_objek;

            return $data;
        }

        public function mudzakkar_muannats_salim(){
            $data = [
                $this->kata_mudzakkar_muannats_salim("1", "مُعَلِّمٌ (Mufrod Muannats Subjek)", "مُعَلِّمٌ", "مُعَلِّمَةٌ"),
                $this->kata_mudzakkar_muannats_salim("1", "مُعَلِّمٌ (Jamak Mudzakkar Salim Subjek)", "مُعَلِّمٌ", "مُعَلِّمُوْنَ"),
                $this->kata_mudzakkar_muannats_salim("1", "مُعَلِّمٌ (Jamak Mudzakkar Salim Objek)", "مُعَلِّمٌ", "مُعَلِّمِيْنَ"),
                $this->kata_mudzakkar_muannats_salim("1", "مُعَلِّمٌ (Jamak Muannats Salim Subjek)", "مُعَلِّمٌ", "مُعَلِّمَاتٌ"),
                $this->kata_mudzakkar_muannats_salim("1", "مُعَلِّمٌ (Jamak Muannats Salim Objek)", "مُعَلِّمٌ", "مُعَلِّمَاتٍ"),
                $this->kata_mudzakkar_muannats_salim("1", "مُهَنْدِسٌ (Mufrod Muannats Subjek)", "مُهَنْدِسٌ", "مُهَنْدِسَةٌ"),
                $this->kata_mudzakkar_muannats_salim("1", "مُهَنْدِسٌ (Jamak Mudzakkar Salim Subjek)", "مُهَنْدِسٌ", "مُهَنْدِسُوْنَ"),
                $this->kata_mudzakkar_muannats_salim("1", "مُهَنْدِسٌ (Jamak Mudzakkar Salim Objek)", "مُهَنْدِسٌ", "مُهَنْدِسِيْنَ"),
                $this->kata_mudzakkar_muannats_salim("1", "مُهَنْدِسٌ (Jamak Muannats Salim Subjek)", "مُهَنْدِسٌ", "مُهَنْدِسَاتٌ"),
                $this->kata_mudzakkar_muannats_salim("1", "مُهَنْدِسٌ (Jamak Muannats Salim Objek)", "مُهَنْدِسٌ", "مُهَنْدِسَاتٍ"),

                
                $this->kata_mudzakkar_muannats_salim("2", "سَائِقٌ (Mufrod Muannats Subjek)", "سَائِقٌ", "سَائِقَةٌ"),
                $this->kata_mudzakkar_muannats_salim("2", "سَائِقٌ (Jamak Mudzakkar Salim Subjek)", "سَائِقٌ", "سَائِقُوْنَ"),
                $this->kata_mudzakkar_muannats_salim("2", "سَائِقٌ (Jamak Mudzakkar Salim Objek)", "سَائِقٌ", "سَائِقِيْنَ"),
                $this->kata_mudzakkar_muannats_salim("2", "سَائِقٌ (Jamak Muannats Salim Subjek)", "سَائِقٌ", "سَائِقَاتٌ"),
                $this->kata_mudzakkar_muannats_salim("2", "سَائِقٌ (Jamak Muannats Salim Objek)", "سَائِقٌ", "سَائِقَاتٍ"),
                $this->kata_mudzakkar_muannats_salim("2", "مُوَظَّفٌ (Mufrod Muannats Subjek)", "مُوَظَّفٌ", "مُوَظَّفَةٌ"),
                $this->kata_mudzakkar_muannats_salim("2", "مُوَظَّفٌ (Jamak Mudzakkar Salim Subjek)", "مُوَظَّفٌ", "مُوَظَّفُوْنَ"),
                $this->kata_mudzakkar_muannats_salim("2", "مُوَظَّفٌ (Jamak Mudzakkar Salim Objek)", "مُوَظَّفٌ", "مُوَظَّفِيْنَ"),
                $this->kata_mudzakkar_muannats_salim("2", "مُوَظَّفٌ (Jamak Muannats Salim Subjek)", "مُوَظَّفٌ", "مُوَظَّفَاتٌ"),
                $this->kata_mudzakkar_muannats_salim("2", "مُوَظَّفٌ (Jamak Muannats Salim Objek)", "مُوَظَّفٌ", "مُوَظَّفَاتٍ"),
                
                $this->kata_mudzakkar_muannats_salim("3", "عَالِمٌ (Mufrod Muannats Subjek)", "عَالِمٌ", "عَالِمَةٌ"),
                $this->kata_mudzakkar_muannats_salim("3", "عَالِمٌ (Jamak Mudzakkar Salim Subjek)", "عَالِمٌ", "عَالِمُوْنَ"),
                $this->kata_mudzakkar_muannats_salim("3", "عَالِمٌ (Jamak Mudzakkar Salim Objek)", "عَالِمٌ", "عَالِمِيْنَ"),
                $this->kata_mudzakkar_muannats_salim("3", "عَالِمٌ (Jamak Muannats Salim Subjek)", "عَالِمٌ", "عَالِمَاتٌ"),
                $this->kata_mudzakkar_muannats_salim("3", "عَالِمٌ (Jamak Muannats Salim Objek)", "عَالِمٌ", "عَالِمَاتٍ"),
                $this->kata_mudzakkar_muannats_salim("3", "مُمَثِّلٌ (Mufrod Muannats Subjek)", "مُمَثِّلٌ", "مُمَثِّلَةٌ"),
                $this->kata_mudzakkar_muannats_salim("3", "مُمَثِّلٌ (Jamak Mudzakkar Salim Subjek)", "مُمَثِّلٌ", "مُمَثِّلُوْنَ"),
                $this->kata_mudzakkar_muannats_salim("3", "مُمَثِّلٌ (Jamak Mudzakkar Salim Objek)", "مُمَثِّلٌ", "مُمَثِّلِيْنَ"),
                $this->kata_mudzakkar_muannats_salim("3", "مُمَثِّلٌ (Jamak Muannats Salim Subjek)", "مُمَثِّلٌ", "مُمَثِّلَاتٌ"),
                $this->kata_mudzakkar_muannats_salim("3", "مُمَثِّلٌ (Jamak Muannats Salim Objek)", "مُمَثِّلٌ", "مُمَثِّلَاتٍ"),

                
                $this->kata_mudzakkar_muannats_salim("4", "مُهَرِّجٌ (Mufrod Muannats Subjek)", "مُهَرِّجٌ", "مُهَرِّجَةٌ"),
                $this->kata_mudzakkar_muannats_salim("4", "مُهَرِّجٌ (Jamak Mudzakkar Salim Subjek)", "مُهَرِّجٌ", "مُهَرِّجُوْنَ"),
                $this->kata_mudzakkar_muannats_salim("4", "مُهَرِّجٌ (Jamak Mudzakkar Salim Objek)", "مُهَرِّجٌ", "مُهَرِّجِيْنَ"),
                $this->kata_mudzakkar_muannats_salim("4", "مُهَرِّجٌ (Jamak Muannats Salim Subjek)", "مُهَرِّجٌ", "مُهَرِّجَاتٌ"),
                $this->kata_mudzakkar_muannats_salim("4", "مُهَرِّجٌ (Jamak Muannats Salim Objek)", "مُهَرِّجٌ", "مُهَرِّجَاتٍ"),
                $this->kata_mudzakkar_muannats_salim("4", "مُصَوِّرٌ (Mufrod Muannats Subjek)", "مُصَوِّرٌ", "مُصَوِّرَةٌ"),
                $this->kata_mudzakkar_muannats_salim("4", "مُصَوِّرٌ (Jamak Mudzakkar Salim Subjek)", "مُصَوِّرٌ", "مُصَوِّرُوْنَ"),
                $this->kata_mudzakkar_muannats_salim("4", "مُصَوِّرٌ (Jamak Mudzakkar Salim Objek)", "مُصَوِّرٌ", "مُصَوِّرِيْنَ"),
                $this->kata_mudzakkar_muannats_salim("4", "مُصَوِّرٌ (Jamak Muannats Salim Subjek)", "مُصَوِّرٌ", "مُصَوِّرَاتٌ"),
                $this->kata_mudzakkar_muannats_salim("4", "مُصَوِّرٌ (Jamak Muannats Salim Objek)", "مُصَوِّرٌ", "مُصَوِّرَاتٍ"),

                
                $this->kata_mudzakkar_muannats_salim("5", "خَادِمٌ (Mufrod Muannats Subjek)", "خَادِمٌ", "خَادِمَةٌ"),
                $this->kata_mudzakkar_muannats_salim("5", "خَادِمٌ (Jamak Mudzakkar Salim Subjek)", "خَادِمٌ", "خَادِمُوْنَ"),
                $this->kata_mudzakkar_muannats_salim("5", "خَادِمٌ (Jamak Mudzakkar Salim Objek)", "خَادِمٌ", "خَادِمِيْنَ"),
                $this->kata_mudzakkar_muannats_salim("5", "خَادِمٌ (Jamak Muannats Salim Subjek)", "خَادِمٌ", "خَادِمَاتٌ"),
                $this->kata_mudzakkar_muannats_salim("5", "خَادِمٌ (Jamak Muannats Salim Objek)", "خَادِمٌ", "خَادِمَاتٍ"),
                $this->kata_mudzakkar_muannats_salim("5", "مُمَرِّضٌ (Mufrod Muannats Subjek)", "مُمَرِّضٌ", "مُمَرِّضَةٌ"),
                $this->kata_mudzakkar_muannats_salim("5", "مُمَرِّضٌ (Jamak Mudzakkar Salim Subjek)", "مُمَرِّضٌ", "مُمَرِّضُوْنَ"),
                $this->kata_mudzakkar_muannats_salim("5", "مُمَرِّضٌ (Jamak Mudzakkar Salim Objek)", "مُمَرِّضٌ", "مُمَرِّضِيْنَ"),
                $this->kata_mudzakkar_muannats_salim("5", "مُمَرِّضٌ (Jamak Muannats Salim Subjek)", "مُمَرِّضٌ", "مُمَرِّضَاتٌ"),
                $this->kata_mudzakkar_muannats_salim("5", "مُمَرِّضٌ (Jamak Muannats Salim Objek)", "مُمَرِّضٌ", "مُمَرِّضَاتٍ"),
            ];

            return $data;

        }

        public function kata_mudzakkar_muannats_salim($latihan, $soal, $kata, $jawaban){
            $data = [
                "latihan" => $latihan,
                "soal" => $soal,
                "jawaban" => $jawaban,
                "kata" => $this->kata_mudz_mua_salim($kata),
                "huruf" => array_unique(array_diff($this->huruf($this->huruf_mudzakkar_muannats_salim($kata)), ["_"])),
            ];

            return $data;
        }

        public function huruf_mudzakkar_muannats_salim($kata){
            $mudz_sal_sub = substr($kata, 0, -2) . "ُوْنَ";
            $mudz_sal_obj = substr($kata, 0, -2) . "ِيْنَ";
            $mua_sal_sub = substr($kata, 0, -2) . "َاتٌ";
            $mua_sal_obj = substr($kata, 0, -2) . "َاتٍ";
            $mua_muf = substr($kata, 0, -2) . "َةٌ";

            $data = $kata . " " . $mua_muf . " " . $mudz_sal_sub . " " . $mudz_sal_obj . " " . $mua_sal_sub . " " . $mua_sal_obj;

            return $data;
        }

        public function kata_mudz_mua_salim($kata){
            $mudz_sal_sub = substr($kata, 0, -2) . "ُوْنَ";
            $mudz_sal_obj = substr($kata, 0, -2) . "ِيْنَ";
            $mua_sal_sub = substr($kata, 0, -2) . "َاتٌ";
            $mua_sal_obj = substr($kata, 0, -2) . "َاتٍ";
            $mua_muf = substr($kata, 0, -2) . "َةٌ";

            $data[0] = $kata;
            $data[1] = $mua_muf;
            $data[2] = $mudz_sal_sub;
            $data[3] = $mudz_sal_obj;
            $data[4] = $mua_sal_sub;
            $data[5] = $mua_sal_obj;

            return $data;
        }

        public function dhomir_munfashil(){
            $data = [
                $this->data_kata("", "Mufrodat 1", "هُـوَ", "هُوَ", "Dia (lk) 1"),
                $this->data_kata("", "Mufrodat 1", "هُـمَا", "هُمَا", "Dia (lk) 2"),
                $this->data_kata("", "Mufrodat 1", "هُـمْ", "هُمْ", "Mereka (lk)"),
                $this->data_kata("", "Mufrodat 1", "هِـيَ", "هِيَ", "Dia (pr) 1"),
                $this->data_kata("", "Mufrodat 1", "هُـمَا", "هُمَا", "Dia (pr) 2"),
                $this->data_kata("", "Mufrodat 1", "هُـنَّ", "هُنَّ", "Mereka (pr)"),
                $this->data_kata("", "Mufrodat 1", "أَنْـتَ", "أَنْتَ", "Kamu (lk) 1"),
                $this->data_kata("", "Mufrodat 1", "أنْـتُـمَا", "أَنْتُمَا", "Kamu (lk) 2"),
                $this->data_kata("", "Mufrodat 1", "أَنْـتُـمْ", "أَنْتُمْ", "Kalian (lk)"),
                $this->data_kata("", "Mufrodat 1", "أَنْـتِ", "أَنْتِ", "Kamu (pr) 1"),
                $this->data_kata("", "Mufrodat 1", "أنْـتُـمَا", "أنْتُمَا", "Kamu (pr) 2"),
                $this->data_kata("", "Mufrodat 1", "أَنْـتُـنَّ", "أَنْتُنَّ", "Kalian (pr)"),
                $this->data_kata("", "Mufrodat 1", "أَنَا", "أَنَا", "Saya"),
                $this->data_kata("", "Mufrodat 1", "نَـحْـنُ", "نَحْنُ", "Kita"),
            ];

            return $data;
        }

        public function dhomir_muttashil(){
            $data = [
                $this->data_kata("", "Mufrodat 1", "ـهُ/ـهِ", "هُ/هِ", "Dia (lk) 1"),
                $this->data_kata("", "Mufrodat 1", "ـهُـمَا/ـهِـمَا", "هُمَا/هِمَا", "Dia (lk) 2"),
                $this->data_kata("", "Mufrodat 1", "ـهُـمْ/ـهِـمْ", "هُمْ/هِمْ", "Mereka (lk)"),
                $this->data_kata("", "Mufrodat 1", "ـهَا", "هَا", "Dia (pr) 1"),
                $this->data_kata("", "Mufrodat 1", "ـهُـمَا/ـهِـمَا", "هُمَا/هِمَا", "Dia (pr) 2"),
                $this->data_kata("", "Mufrodat 1", "ـهُـنَّ/ـهِـنَّ", "هُنَّ/هِنَّ", "Mereka (pr)"),
                $this->data_kata("", "Mufrodat 1", "ـكَ", "كَ", "Kamu (lk) 1"),
                $this->data_kata("", "Mufrodat 1", "ـكُـمَا", "كُمَا", "Kamu (lk) 2"),
                $this->data_kata("", "Mufrodat 1", "ـكُـمْ", "كُمْ", "Kalian (lk)"),
                $this->data_kata("", "Mufrodat 1", "ـكِ", "كِ", "Kamu (pr) 1"),
                $this->data_kata("", "Mufrodat 1", "ـكُـمَا", "كُمَا", "Kamu (pr) 2"),
                $this->data_kata("", "Mufrodat 1", "ـكُـنَّ", "كُنَّ", "Kalian (pr)"),
                $this->data_kata("", "Mufrodat 1", "ـيْ/يَ/نِـيْ", "يْ/يَ/نِيْ", "Saya"),
                $this->data_kata("", "Mufrodat 1", "نَا", "نَا", "Kita"),
            ];

            return $data;
        }

        public function dhomir_muttashil_milki(){
            $data = [
                $this->kata_dhomir_muttashil_milki("1", "مَعْهَدٌ + هُوَ", "مَعْهَدٌ", "مَعْهَدُهُ"),
                $this->kata_dhomir_muttashil_milki("1", "مَعْهَدٌ + هُمَا", "مَعْهَدٌ", "مَعْهَدُهُمَا"),
                $this->kata_dhomir_muttashil_milki("1", "مَعْهَدٌ + هُمْ", "مَعْهَدٌ", "مَعْهَدُهُمْ"),
                $this->kata_dhomir_muttashil_milki("1", "نَعْلٌ + هِيَ", "نَعْلٌ", "نَعْلُهَا"),
                $this->kata_dhomir_muttashil_milki("1", "نَعْلٌ + هُنَّ", "نَعْلٌ", "نَعْلُهُنَّ"),
                $this->kata_dhomir_muttashil_milki("1", "نَعْلٌ + أَنْتَ", "نَعْلٌ", "نَعْلُكَ"),
                $this->kata_dhomir_muttashil_milki("1", "صَوْتٌ + أنْتُمَا", "صَوْتٌ", "صَوْتُكُمَا"),
                $this->kata_dhomir_muttashil_milki("1", "صَوْتٌ + أَنْتُمْ", "صَوْتٌ", "صَوْتُكُمْ"),
                $this->kata_dhomir_muttashil_milki("1", "صَوْتٌ + أَنْتِ", "صَوْتٌ", "صَوْتُكِ"),
                $this->kata_dhomir_muttashil_milki("1", "ضَيْفٌ + أَنْتُنَّ", "ضَيْفٌ", "ضَيْفُكُنَّ"),
                $this->kata_dhomir_muttashil_milki("1", "ضَيْفٌ + أَنَا", "ضَيْفٌ", "ضَيْفِيْ"),
                $this->kata_dhomir_muttashil_milki("1", "ضَيْفٌ + نَحْنُ", "ضَيْفٌ", "ضَيْفُنَا"),

                $this->kata_dhomir_muttashil_milki("2", "قَلْبٌ + هُوَ", "قَلْبٌ", "قَلْبُهُ"),
                $this->kata_dhomir_muttashil_milki("2", "قَلْبٌ + هُمَا", "قَلْبٌ", "قَلْبُهُمَا"),
                $this->kata_dhomir_muttashil_milki("2", "قَلْبٌ + هُمْ", "قَلْبٌ", "قَلْبُهُمْ"),
                $this->kata_dhomir_muttashil_milki("2", "مَسْكَنٌ + هِيَ", "مَسْكَنٌ", "مَسْكَنُهَا"),
                $this->kata_dhomir_muttashil_milki("2", "مَسْكَنٌ + هُنَّ", "مَسْكَنٌ", "مَسْكَنُهُنَّ"),
                $this->kata_dhomir_muttashil_milki("2", "مَسْكَنٌ + أَنْتَ", "مَسْكَنٌ", "مَسْكَنُكَ"),
                $this->kata_dhomir_muttashil_milki("2", "دَفْتَرٌ + أنْتُمَا", "دَفْتَرٌ", "دَفْتَرُكُمَا"),
                $this->kata_dhomir_muttashil_milki("2", "دَفْتَرٌ + أَنْتُمْ", "دَفْتَرٌ", "دَفْتَرُكُمْ"),
                $this->kata_dhomir_muttashil_milki("2", "دَفْتَرٌ + أَنْتِ", "دَفْتَرٌ", "دَفْتَرُكِ"),
                $this->kata_dhomir_muttashil_milki("2", "مُدَرِّسٌ + أَنْتُنَّ", "مُدَرِّسٌ", "مُدَرِّسُكُنَّ"),
                $this->kata_dhomir_muttashil_milki("2", "مُدَرِّسٌ + أَنَا", "مُدَرِّسٌ", "مُدَرِّسِيْ"),
                $this->kata_dhomir_muttashil_milki("2", "مُدَرِّسٌ + نَحْنُ", "مُدَرِّسٌ", "مُدَرِّسُنَا"),
                
                $this->kata_dhomir_muttashil_milki("3", "عِنَبَانِ + هُوَ", "عِنَبَانِ", "عِنَبَاهُ"),
                $this->kata_dhomir_muttashil_milki("3", "عِنَبَانِ + هُمَا", "عِنَبَانِ", "عِنَبَاهُمَا"),
                $this->kata_dhomir_muttashil_milki("3", "عِنَبَانِ + هُمْ", "عِنَبَانِ", "عِنَبَاهُمْ"),
                $this->kata_dhomir_muttashil_milki("3", "حِبْرَانِ + هِيَ", "حِبْرَانِ", "حِبْرَاهَا"),
                $this->kata_dhomir_muttashil_milki("3", "حِبْرَانِ + هُنَّ", "حِبْرَانِ", "حِبْرَاهُنَّ"),
                $this->kata_dhomir_muttashil_milki("3", "حِبْرَانِ + أَنْتَ", "حِبْرَانِ", "حِبْرَاكَ"),
                $this->kata_dhomir_muttashil_milki("3", "فِنْجَانَانِ + أنْتُمَا", "فِنْجَانَانِ", "فِنْجَانَاكُمَا"),
                $this->kata_dhomir_muttashil_milki("3", "فِنْجَانَانِ + أَنْتُمْ", "فِنْجَانَانِ", "فِنْجَانَاكُمْ"),
                $this->kata_dhomir_muttashil_milki("3", "فِنْجَانَانِ + أَنْتِ", "فِنْجَانَانِ", "فِنْجَانَاكِ"),
                $this->kata_dhomir_muttashil_milki("3", "كِبْرِيْتَانِ + أَنْتُنَّ", "كِبْرِيْتَانِ", "كِبْرِيْتَاكُنَّ"),
                $this->kata_dhomir_muttashil_milki("3", "كِبْرِيْتَانِ + نَحْنُ", "كِبْرِيْتَانِ", "كِبْرِيْتَانَا"),

                $this->kata_dhomir_muttashil_milki("4", "مُحَاضِرُوْنَ + هُوَ", "مُحَاضِرُوْنَ", "مُحَاضِرُوْهُ"),
                $this->kata_dhomir_muttashil_milki("4", "مُحَاضِرُوْنَ + هُمَا", "مُحَاضِرُوْنَ", "مُحَاضِرُوْهُمَا"),
                $this->kata_dhomir_muttashil_milki("4", "مُحَاضِرُوْنَ + هُمْ", "مُحَاضِرُوْنَ", "مُحَاضِرُوْهُمْ"),
                $this->kata_dhomir_muttashil_milki("4", "خَادِمُوْنَ + هِيَ", "خَادِمُوْنَ", "خَادِمُوْهَا"),
                $this->kata_dhomir_muttashil_milki("4", "خَادِمُوْنَ + هُنَّ", "خَادِمُوْنَ", "خَادِمُوْهُنَّ"),
                $this->kata_dhomir_muttashil_milki("4", "خَادِمُوْنَ + أَنْتَ", "خَادِمُوْنَ", "خَادِمُوْكَ"),
                $this->kata_dhomir_muttashil_milki("4", "مُصَوِّرُوْنَ + أنْتُمَا", "مُصَوِّرُوْنَ", "مُصَوِّرُوْكُمَا"),
                $this->kata_dhomir_muttashil_milki("4", "مُصَوِّرُوْنَ + أَنْتُمْ", "مُصَوِّرُوْنَ", "مُصَوِّرُوْكُمْ"),
                $this->kata_dhomir_muttashil_milki("4", "مُصَوِّرُوْنَ + أَنْتِ", "مُصَوِّرُوْنَ", "مُصَوِّرُوْكِ"),
                $this->kata_dhomir_muttashil_milki("4", "مُهَنْدِسُوْنَ + أَنْتُنَّ", "مُهَنْدِسُوْنَ", "مُهَنْدِسُوْكُنَّ"),
                $this->kata_dhomir_muttashil_milki("4", "مُهَنْدِسُوْنَ + نَحْنُ", "مُهَنْدِسُوْنَ", "مُهَنْدِسُوْنَا"),
                
                $this->kata_dhomir_muttashil_milki("5", "مُوْسَى + أَنَا", "مُوْسَى", "مُوْسَيَّ"),
                $this->kata_dhomir_muttashil_milki("5", "مُسْتَشْفَى + أَنَا", "مُسْتَشْفَى", "مُسْتَشْفَيَّ"),
                $this->kata_dhomir_muttashil_milki("5", "عَصَا + أَنَا", "عَصَا", "عَصَايَ"),
                $this->kata_dhomir_muttashil_milki("5", "دُنْيَا + أَنَا", "دُنْيَا", "دُنْيَايَ"),
                $this->kata_dhomir_muttashil_milki("5", "كِتَابَانِ + أَنَا", "كِتَابَانِ", "كِتَابَايَ"),
                $this->kata_dhomir_muttashil_milki("5", "قَلَمَانِ + أَنَا", "قَلَمَانِ", "قَلَمَايَ"),
                $this->kata_dhomir_muttashil_milki("5", "جَوَّالَانِ + أَنَا", "جَوَّالَانِ", "جَوَّالَايَ"),
                $this->kata_dhomir_muttashil_milki("5", "فِرَاشَانِ + أَنَا", "فِرَاشَانِ", "فِرَاشَايَ"),
                $this->kata_dhomir_muttashil_milki("5", "مُحَاضِرُوْنَ + أَنَا", "مُحَاضِرُوْنَ", "مُحَاضِرِيَّ"),
                $this->kata_dhomir_muttashil_milki("5", "خَادِمُوْنَ + أَنَا", "خَادِمُوْنَ", "خَادِمِيَّ"),
                $this->kata_dhomir_muttashil_milki("5", "مُصَوِّرُوْنَ + أَنَا", "مُصَوِّرُوْنَ", "مُصَوِّرِيَّ"),
                $this->kata_dhomir_muttashil_milki("5", "مُهَنْدِسُوْنَ + أَنَا", "مُهَنْدِسُوْنَ", "مُهَنْدِسِيَّ"),
                
                
            ];

            return $data;
        }

        public function kata_dhomir_muttashil_milki($latihan, $soal, $kata, $jawaban){
            $data = [
                "latihan" => $latihan,
                "soal" => $soal,
                "jawaban" => $jawaban,
                "kata" => $this->kata_dho_mut_milki($kata),
                "huruf" => array_unique(array_diff($this->huruf($this->huruf_dhomir_muttashil_milki($kata)), ["_"])),
            ];

            return $data;
        }

        public function kata_dho_mut_milki($kata){
            if(substr($kata, -6, 6) == "انِ"){
                $huwa = substr($kata, 0, -4) . "هُ";
                $huma = substr($kata, 0, -4) . "هُمَا";
                $hum = substr($kata, 0, -4) . "هُمْ";
                $hiya = substr($kata, 0, -4) . "هَا";
                $hunna = substr($kata, 0, -4) . "هُنَّ";
                $anta = substr($kata, 0, -4) . "كَ";
                $antuma = substr($kata, 0, -4) . "كُمَا";
                $antum = substr($kata, 0, -4) . "كُمْ";
                $anti = substr($kata, 0, -4) . "كِ";
                $antunna = substr($kata, 0, -4) . "كُنَّ";
                $ana = substr($kata, 0, -4) . "يَ";
                $nahnu = substr($kata, 0, -4) . "نَا";
            } else if(substr($kata, -8, 8) == "وْنَ"){
                $huwa = substr($kata, 0, -4) . "هُ";
                $huma = substr($kata, 0, -4) . "هُمَا";
                $hum = substr($kata, 0, -4) . "هُمْ";
                $hiya = substr($kata, 0, -4) . "هَا";
                $hunna = substr($kata, 0, -4) . "هُنَّ";
                $anta = substr($kata, 0, -4) . "كَ";
                $antuma = substr($kata, 0, -4) . "كُمَا";
                $antum = substr($kata, 0, -4) . "كُمْ";
                $anti = substr($kata, 0, -4) . "كِ";
                $antunna = substr($kata, 0, -4) . "كُنَّ";
                $ana = substr($kata, 0, -10) . "ِيَّ";
                $nahnu = substr($kata, 0, -4) . "نَا";
            } else if(substr($kata, -2) == "ى" || substr($kata, -2) == "ا"){
                $huwa = substr($kata, 0, -2) . "اهُ";
                $huma = substr($kata, 0, -2) . "اهُمَا";
                $hum = substr($kata, 0, -2) . "اهُمْ";
                $hiya = substr($kata, 0, -2) . "اهَا";
                $hunna = substr($kata, 0, -2) . "اهُنَّ";
                $anta = substr($kata, 0, -2) . "اكَ";
                $antuma = substr($kata, 0, -2) . "اكُمَا";
                $antum = substr($kata, 0, -2) . "اكُمْ";
                $anti = substr($kata, 0, -2) . "اكِ";
                $antunna = substr($kata, 0, -2) . "اكُنَّ";
                if(substr($kata, -2) == "ا"){
                    $ana = substr($kata, 0, -2) . "ايَ";
                } else {
                    $ana = substr($kata, 0, -2) . "يَّ";
                }
                $nahnu = substr($kata, 0, -2) . "انَا";
            } else {
                $huwa = substr($kata, 0, -2) . "ُهُ";
                $huma = substr($kata, 0, -2) . "ُهُمَا";
                $hum = substr($kata, 0, -2) . "ُهُمْ";
                $hiya = substr($kata, 0, -2) . "ُهَا";
                $hunna = substr($kata, 0, -2) . "ُهُنَّ";
                $anta = substr($kata, 0, -2) . "ُكَ";
                $antuma = substr($kata, 0, -2) . "ُكُمَا";
                $antum = substr($kata, 0, -2) . "ُكُمْ";
                $anti = substr($kata, 0, -2) . "ُكِ";
                $antunna = substr($kata, 0, -2) . "ُكُنَّ";
                $ana = substr($kata, 0, -2) . "ِيْ";
                $nahnu = substr($kata, 0, -2) . "ُنَا";
            }

            $data[0] = $huwa;
            $data[1] = $huma;
            $data[2] = $hum;
            $data[3] = $hiya;
            $data[4] = $hunna;
            $data[5] = $anta;
            $data[6] = $antuma;
            $data[7] = $antum;
            $data[8] = $anti;
            $data[9] = $antunna;
            $data[10] = $ana;
            $data[11] = $nahnu;

            return $data;
        }

        public function huruf_dhomir_muttashil_milki($kata){
            if(substr($kata, -6, 6) == "انِ"){
                $huwa = substr($kata, 0, -4) . "هُ";
                $huma = substr($kata, 0, -4) . "هُمَا";
                $hum = substr($kata, 0, -4) . "هُمْ";
                $hiya = substr($kata, 0, -4) . "هَا";
                $hunna = substr($kata, 0, -4) . "هُنَّ";
                $anta = substr($kata, 0, -4) . "كَ";
                $antuma = substr($kata, 0, -4) . "كُمَا";
                $antum = substr($kata, 0, -4) . "كُمْ";
                $anti = substr($kata, 0, -4) . "كِ";
                $antunna = substr($kata, 0, -4) . "كُنَّ";
                $ana = substr($kata, 0, -4) . "يَ";
                $nahnu = substr($kata, 0, -4) . "نَا";
            } else if(substr($kata, -8, 8) == "وْنَ"){
                $huwa = substr($kata, 0, -4) . "هُ";
                $huma = substr($kata, 0, -4) . "هُمَا";
                $hum = substr($kata, 0, -4) . "هُمْ";
                $hiya = substr($kata, 0, -4) . "هَا";
                $hunna = substr($kata, 0, -4) . "هُنَّ";
                $anta = substr($kata, 0, -4) . "كَ";
                $antuma = substr($kata, 0, -4) . "كُمَا";
                $antum = substr($kata, 0, -4) . "كُمْ";
                $anti = substr($kata, 0, -4) . "كِ";
                $antunna = substr($kata, 0, -4) . "كُنَّ";
                $ana = substr($kata, 0, -10) . "ِيَّ";
                $nahnu = substr($kata, 0, -4) . "نَا";
            } else if(substr($kata, -2) == "ى" || substr($kata, -2) == "ا"){
                $huwa = substr($kata, 0, -2) . "اهُ";
                $huma = substr($kata, 0, -2) . "اهُمَا";
                $hum = substr($kata, 0, -2) . "اهُمْ";
                $hiya = substr($kata, 0, -2) . "اهَا";
                $hunna = substr($kata, 0, -2) . "اهُنَّ";
                $anta = substr($kata, 0, -2) . "اكَ";
                $antuma = substr($kata, 0, -2) . "اكُمَا";
                $antum = substr($kata, 0, -2) . "اكُمْ";
                $anti = substr($kata, 0, -2) . "اكِ";
                $antunna = substr($kata, 0, -2) . "اكُنَّ";
                if(substr($kata, -2) == "ا"){
                    $ana = substr($kata, 0, -2) . "ايَ";
                } else {
                    $ana = substr($kata, 0, -2) . "يَّ";
                }
                $nahnu = substr($kata, 0, -2) . "انَا";
            } else {
                $huwa = substr($kata, 0, -2) . "ُهُ";
                $huma = substr($kata, 0, -2) . "ُهُمَا";
                $hum = substr($kata, 0, -2) . "ُهُمْ";
                $hiya = substr($kata, 0, -2) . "ُهَا";
                $hunna = substr($kata, 0, -2) . "ُهُنَّ";
                $anta = substr($kata, 0, -2) . "ُكَ";
                $antuma = substr($kata, 0, -2) . "ُكُمَا";
                $antum = substr($kata, 0, -2) . "ُكُمْ";
                $anti = substr($kata, 0, -2) . "ُكِ";
                $antunna = substr($kata, 0, -2) . "ُكُنَّ";
                $ana = substr($kata, 0, -2) . "ِيْ";
                $nahnu = substr($kata, 0, -2) . "ُنَا";
            }

            $data = $huwa . " " . $huma . " " . $hum . " " . $hiya . " " . $huma . " " . $hunna . " " . $anta . " " . $antuma . " " . $antum . " " . $anti . " " . $antunna . " " . $ana . " " . $nahnu;

            return $data;
        }

        public function dhomir_muttashil_maful(){
            $data = [
                $this->kata_dhomir_muttashil_maful("1", "اِضْرِبْ + هُوَ", "اِضْرِبْ", "اِضْرِبْهُ"),
                $this->kata_dhomir_muttashil_maful("1", "اِضْرِبْ + هُمَا", "اِضْرِبْ", "اِضْرِبْهُمَا"),
                $this->kata_dhomir_muttashil_maful("1", "اِضْرِبْ + هُمْ", "اِضْرِبْ", "اِضْرِبْهُمْ"),
                $this->kata_dhomir_muttashil_maful("1", "يَنْظُرُ + هِيَ", "يَنْظُرُ", "يَنْظُرُهَا"),
                $this->kata_dhomir_muttashil_maful("1", "يَنْظُرُ + هُنَّ", "يَنْظُرُ", "يَنْظُرُهُنَّ"),
                $this->kata_dhomir_muttashil_maful("1", "نَظَرَ + أَنْتَ", "نَظَرَ", "نَظَرَكَ"),
                $this->kata_dhomir_muttashil_maful("1", "نَظَرَ + أَنْتُمَا", "نَظَرَ", "نَظَرَكُمَا"),
                $this->kata_dhomir_muttashil_maful("1", "نَظَرَ + أَنْتُمْ", "نَظَرَ", "نَظَرَكُمْ"),
                $this->kata_dhomir_muttashil_maful("1", "رَدِفَ + أَنْتِ", "رَدِفَ", "رَدِفَكِ"),
                $this->kata_dhomir_muttashil_maful("1", "رَدِفَ + أَنْتُنَّ", "رَدِفَ", "رَدِفَكُنَّ"),
                $this->kata_dhomir_muttashil_maful("1", "رَدِفَ + أَنَا", "رَدِفَ", "رَدِفَنِيْ"),
                $this->kata_dhomir_muttashil_maful("1", "رَدِفَ + نَحْنُ", "رَدِفَ", "رَدِفَنَا"),
                
                $this->kata_dhomir_muttashil_maful("2", "سَاعِدْ + هُوَ", "سَاعِدْ", "سَاعِدْهُ"),
                $this->kata_dhomir_muttashil_maful("2", "سَاعِدْ + هُمَا", "سَاعِدْ", "سَاعِدْهُمَا"),
                $this->kata_dhomir_muttashil_maful("2", "سَاعِدْ + هُمْ", "سَاعِدْ", "سَاعِدْهُمْ"),
                $this->kata_dhomir_muttashil_maful("2", "يَصْدُمُ + هِيَ", "يَصْدُمُ", "يَصْدُمُهَا"),
                $this->kata_dhomir_muttashil_maful("2", "يَصْدُمُ + هُنَّ", "يَصْدُمُ", "يَصْدُمُهُنَّ"),
                $this->kata_dhomir_muttashil_maful("2", "أَزْعَجَ + أَنْتَ", "أَزْعَجَ", "أَزْعَجَكَ"),
                $this->kata_dhomir_muttashil_maful("2", "أَزْعَجَ + أَنْتُمَا", "أَزْعَجَ", "أَزْعَجَكُمَا"),
                $this->kata_dhomir_muttashil_maful("2", "أَزْعَجَ + أَنْتُمْ", "أَزْعَجَ", "أَزْعَجَكُمْ"),
                $this->kata_dhomir_muttashil_maful("2", "شَاهَدَ + أَنْتِ", "شَاهَدَ", "شَاهَدَكِ"),
                $this->kata_dhomir_muttashil_maful("2", "شَاهَدَ + أَنْتُنَّ", "شَاهَدَ", "شَاهَدَكُنَّ"),
                $this->kata_dhomir_muttashil_maful("2", "شَاهَدَ + أَنَا", "شَاهَدَ", "شَاهَدَنِيْ"),
                $this->kata_dhomir_muttashil_maful("2", "شَاهَدَ + نَحْنُ", "شَاهَدَ", "شَاهَدَنَا"),
                
                $this->kata_dhomir_muttashil_maful("3", "أُحِبُّ + هُوَ", "أُحِبُّ", "أُحِبُّهُ"),
                $this->kata_dhomir_muttashil_maful("3", "أُحِبُّ + هُمَا", "أُحِبُّ", "أُحِبُّهُمَا"),
                $this->kata_dhomir_muttashil_maful("3", "أُحِبُّ + هُمْ", "أُحِبُّ", "أُحِبُّهُمْ"),
                $this->kata_dhomir_muttashil_maful("3", "أَرْحَمُ + هِيَ", "أَرْحَمُ", "أَرْحَمُهَا"),
                $this->kata_dhomir_muttashil_maful("3", "أَرْحَمُ + هُنَّ", "أَرْحَمُ", "أَرْحَمُهُنَّ"),
                $this->kata_dhomir_muttashil_maful("3", "أَمَرَ + أَنْتَ", "أَمَرَ", "أَمَرَكَ"),
                $this->kata_dhomir_muttashil_maful("3", "أَمَرَ + أَنْتُمَا", "أَمَرَ", "أَمَرَكُمَا"),
                $this->kata_dhomir_muttashil_maful("3", "أَمَرَ + أَنْتُمْ", "أَمَرَ", "أَمَرَكُمْ"),
                $this->kata_dhomir_muttashil_maful("3", "أَهَانَ + أَنْتِ", "أَهَانَ", "أَهَانَكِ"),
                $this->kata_dhomir_muttashil_maful("3", "أَهَانَ + أَنْتُنَّ", "أَهَانَ", "أَهَانَكُنَّ"),
                $this->kata_dhomir_muttashil_maful("3", "أَهَانَ + أَنَا", "أَهَانَ", "أَهَانَنِيْ"),
                $this->kata_dhomir_muttashil_maful("3", "أَهَانَ + نَحْنُ", "أَهَانَ", "أَهَانَنَا"),
            ];

            return $data;
        }

        public function kata_dhomir_muttashil_maful($latihan, $soal, $kata, $jawaban){
            $data = [
                "latihan" => $latihan,
                "soal" => $soal,
                "jawaban" => $jawaban,
                "kata" => $this->kata_dho_mut_maful($kata),
                "huruf" => array_unique(array_diff($this->huruf($this->huruf_dhomir_muttashil_maful($kata)), ["_"])),
            ];

            return $data;
        }

        public function kata_dho_mut_maful($kata){
            $huwa = $kata . "هُ";
            $huma = $kata . "هُمَا";
            $hum = $kata . "هُمْ";
            $hiya = $kata . "هَا";
            $hunna = $kata . "هُنَّ";
            $anta = $kata . "كَ";
            $antuma = $kata . "كُمَا";
            $antum = $kata . "كُمْ";
            $anti = $kata . "كِ";
            $antunna = $kata . "كُنَّ";
            $ana = $kata . "نِيْ";
            $nahnu = $kata . "نَا";

            $data[0] = $huwa;
            $data[1] = $huma;
            $data[2] = $hum;
            $data[3] = $hiya;
            $data[4] = $hunna;
            $data[5] = $anta;
            $data[6] = $antuma;
            $data[7] = $antum;
            $data[8] = $anti;
            $data[9] = $antunna;
            $data[10] = $ana;
            $data[11] = $nahnu;

            return $data;
        }

        public function huruf_dhomir_muttashil_maful($kata){
            $huwa = $kata . "هُ";
            $huma = $kata . "هُمَا";
            $hum = $kata . "هُمْ";
            $hiya = $kata . "هَا";
            $hunna = $kata . "هُنَّ";
            $anta = $kata . "كَ";
            $antuma = $kata . "كُمَا";
            $antum = $kata . "كُمْ";
            $anti = $kata . "كِ";
            $antunna = $kata . "كُنَّ";
            $ana = $kata . "نِيْ";
            $nahnu = $kata . "نَا";
            

            $data = $huwa . " " . $huma . " " . $hum . " " . $hiya . " " . $huma . " " . $hunna . " " . $anta . " " . $antuma . " " . $antum . " " . $anti . " " . $antunna . " " . $ana . " " . $nahnu;

            return $data;
        }

        public function fiil_madhi(){
            $data = [
                $this->kata_fiil_madhi("1", "هُوَ + ضَرَبَ", "ضَرَبَ", "ضَرَبَ"),
                $this->kata_fiil_madhi("1", "هُمَا (مذكر) + ضَرَبَ", "ضَرَبَ", "ضَرَبَا"),
                $this->kata_fiil_madhi("1", "هُمْ + ضَرَبَ", "ضَرَبَ", "ضَرَبُوْا"),
                $this->kata_fiil_madhi("1", "هِيَ + ضَرَبَ", "ضَرَبَ", "ضَرَبَتْ"),
                $this->kata_fiil_madhi("1", "هُمَا (مؤنث) + ضَرَبَ", "ضَرَبَ", "ضَرَبَتَا"),
                $this->kata_fiil_madhi("1", "هُنَّ + ضَرَبَ", "ضَرَبَ", "ضَرَبْنَ"),
                $this->kata_fiil_madhi("1", "أَنْتَ + ضَرَبَ", "ضَرَبَ", "ضَرَبْتَ"),
                $this->kata_fiil_madhi("1", "أَنْتُمَا + ضَرَبَ", "ضَرَبَ", "ضَرَبْتُمَا"),
                $this->kata_fiil_madhi("1", "أَنْتُمْ + ضَرَبَ", "ضَرَبَ", "ضَرَبْتُمْ"),
                $this->kata_fiil_madhi("1", "أَنْتِ + ضَرَبَ", "ضَرَبَ", "ضَرَبْتِ"),
                $this->kata_fiil_madhi("1", "أَنْتُنَّ + ضَرَبَ", "ضَرَبَ", "ضَرَبْتُنَّ"),
                $this->kata_fiil_madhi("1", "أَنَا + ضَرَبَ", "ضَرَبَ", "ضَرَبْتُ"),
                $this->kata_fiil_madhi("1", "نَحْنُ + ضَرَبَ", "ضَرَبَ", "ضَرَبْنَا"),

                
                $this->kata_fiil_madhi("2", "هُوَ + رَكِبَ", "رَكِبَ", "رَكِبَ"),
                $this->kata_fiil_madhi("2", "هُمَا (مذكر) + رَكِبَ", "رَكِبَ", "رَكِبَا"),
                $this->kata_fiil_madhi("2", "هُمْ + رَكِبَ", "رَكِبَ", "رَكِبُوْا"),
                $this->kata_fiil_madhi("2", "هِيَ + رَكِبَ", "رَكِبَ", "رَكِبَتْ"),
                $this->kata_fiil_madhi("2", "هُمَا (مؤنث) + رَكِبَ", "رَكِبَ", "رَكِبَتَا"),
                $this->kata_fiil_madhi("2", "هُنَّ + رَكِبَ", "رَكِبَ", "رَكِبْنَ"),
                $this->kata_fiil_madhi("2", "أَنْتَ + رَكِبَ", "رَكِبَ", "رَكِبْتَ"),
                $this->kata_fiil_madhi("2", "أَنْتُمَا + رَكِبَ", "رَكِبَ", "رَكِبْتُمَا"),
                $this->kata_fiil_madhi("2", "أَنْتُمْ + رَكِبَ", "رَكِبَ", "رَكِبْتُمْ"),
                $this->kata_fiil_madhi("2", "أَنْتِ + رَكِبَ", "رَكِبَ", "رَكِبْتِ"),
                $this->kata_fiil_madhi("2", "أَنْتُنَّ + رَكِبَ", "رَكِبَ", "رَكِبْتُنَّ"),
                $this->kata_fiil_madhi("2", "أَنَا + رَكِبَ", "رَكِبَ", "رَكِبْتُ"),
                $this->kata_fiil_madhi("2", "نَحْنُ + رَكِبَ", "رَكِبَ", "رَكِبْنَا"),
                
                $this->kata_fiil_madhi("3", "هُوَ + دَخَلَ", "دَخَلَ", "دَخَلَ"),
                $this->kata_fiil_madhi("3", "هُمَا (مذكر) + دَخَلَ", "دَخَلَ", "دَخَلَا"),
                $this->kata_fiil_madhi("3", "هُمْ + دَخَلَ", "دَخَلَ", "دَخَلُوْا"),
                $this->kata_fiil_madhi("3", "هِيَ + دَخَلَ", "دَخَلَ", "دَخَلَتْ"),
                $this->kata_fiil_madhi("3", "هُمَا (مؤنث) + دَخَلَ", "دَخَلَ", "دَخَلَتَا"),
                $this->kata_fiil_madhi("3", "هُنَّ + دَخَلَ", "دَخَلَ", "دَخَلْنَ"),
                $this->kata_fiil_madhi("3", "أَنْتَ + دَخَلَ", "دَخَلَ", "دَخَلْتَ"),
                $this->kata_fiil_madhi("3", "أَنْتُمَا + دَخَلَ", "دَخَلَ", "دَخَلْتُمَا"),
                $this->kata_fiil_madhi("3", "أَنْتُمْ + دَخَلَ", "دَخَلَ", "دَخَلْتُمْ"),
                $this->kata_fiil_madhi("3", "أَنْتِ + دَخَلَ", "دَخَلَ", "دَخَلْتِ"),
                $this->kata_fiil_madhi("3", "أَنْتُنَّ + دَخَلَ", "دَخَلَ", "دَخَلْتُنَّ"),
                $this->kata_fiil_madhi("3", "أَنَا + دَخَلَ", "دَخَلَ", "دَخَلْتُ"),
                $this->kata_fiil_madhi("3", "نَحْنُ + دَخَلَ", "دَخَلَ", "دَخَلْنَا"),
            ];

            return $data;
        }

        public function kata_fiil_madhi($latihan, $soal, $kata, $jawaban){
            $data = [
                "latihan" => $latihan,
                "soal" => $soal,
                "jawaban" => $jawaban,
                "kata" => $this->kata_madhi($kata),
                "huruf" => array_unique(array_diff($this->huruf($this->huruf_fiil_madhi($kata)), ["_"])),
            ];

            return $data;
        }

        public function kata_madhi($kata){
            $huwa = $kata;
            $huma_l = $kata . "ا";
            $hum = substr($kata, 0, -2) . "ُوْا";

            $hiya = $kata . "تْ";
            $huma_p = $kata . "تَا";
            $hunna = substr($kata, 0, -2) . "ْنَ";

            $anta = substr($kata, 0, -2) . "ْتَ";
            $antuma = substr($kata, 0, -2) . "ْتُمَا";
            $antum = substr($kata, 0, -2) . "ْتُمْ";

            $anti = substr($kata, 0, -2) . "ْتِ";
            $antunna = substr($kata, 0, -2) . "ْتُنَّ";

            $ana = substr($kata, 0, -2) . "ْتُ";
            $nahnu = substr($kata, 0, -2) . "ْنَا";

            $data[0] = $huwa;
            $data[1] = $huma_l;
            $data[2] = $hum;
            $data[3] = $hiya;
            $data[4] = $huma_p;
            $data[5] = $hunna;
            $data[6] = $anta;
            $data[7] = $antuma;
            $data[8] = $antum;
            $data[9] = $anti;
            $data[10] = $antunna;
            $data[11] = $ana;
            $data[12] = $nahnu;

            return $data;
        }

        public function huruf_fiil_madhi($kata){
            $huwa = $kata;
            $huma_l = $kata . "ا";
            $hum = substr($kata, 0, -2) . "ُوْا";

            $hiya = $kata . "تْ";
            $huma_p = $kata . "تَا";
            $hunna = substr($kata, 0, -2) . "ْنَ";

            $anta = substr($kata, 0, -2) . "ْتَ";
            $antuma = substr($kata, 0, -2) . "ْتُمَا";
            $antum = substr($kata, 0, -2) . "ْتُمْ";

            $anti = substr($kata, 0, -2) . "ْتِ";
            $antunna = substr($kata, 0, -2) . "ْتُنَّ";

            $ana = substr($kata, 0, -2) . "ْتُ";
            $nahnu = substr($kata, 0, -2) . "ْنَا";

            $data = $huwa . " " . $huma_l . " " . $hum . " " . $hiya . " " . $huma_p . " " . $hunna . " " . $anta . " " . $antuma . " " . $antum . " " . $anti . " " . $antunna . " " . $ana . " " . $nahnu;

            return $data;
        }
        
        public function fiil_mudhori(){
            $data = [
                $this->kata_fiil_mudhori("1", "هُوَ + يَضْرِبُ", "يَضْرِبُ", "يَضْرِبُ"),
                $this->kata_fiil_mudhori("1", "هُمَا (مذكر) + يَضْرِبُ", "يَضْرِبُ", "يَضْرِبَانِ"),
                $this->kata_fiil_mudhori("1", "هُمْ + يَضْرِبُ", "يَضْرِبُ", "يَضْرِبُوْنَ"),
                $this->kata_fiil_mudhori("1", "هِيَ + يَضْرِبُ", "يَضْرِبُ", "تَضْرِبُ"),
                $this->kata_fiil_mudhori("1", "هُمَا (مؤنث) + يَضْرِبُ", "يَضْرِبُ", "تَضْرِبَانِ"),
                $this->kata_fiil_mudhori("1", "هُنَّ + يَضْرِبُ", "يَضْرِبُ", "يَضْرِبْنَ"),
                $this->kata_fiil_mudhori("1", "أَنْتَ + يَضْرِبُ", "يَضْرِبُ", "تَضْرِبُ"),
                $this->kata_fiil_mudhori("1", "أَنْتُمَا + يَضْرِبُ", "يَضْرِبُ", "تَضْرِبَانِ"),
                $this->kata_fiil_mudhori("1", "أَنْتُمْ + يَضْرِبُ", "يَضْرِبُ", "تَضْرِبُوْنَ"),
                $this->kata_fiil_mudhori("1", "أَنْتِ + يَضْرِبُ", "يَضْرِبُ", "تَضْرِبِيْنَ"),
                $this->kata_fiil_mudhori("1", "أَنْتُنَّ + يَضْرِبُ", "يَضْرِبُ", "تَضْرِبْنَ"),
                $this->kata_fiil_mudhori("1", "أَنَا + يَضْرِبُ", "يَضْرِبُ", "أَضْرِبُ"),
                $this->kata_fiil_mudhori("1", "نَحْنُ + يَضْرِبُ", "يَضْرِبُ", "نَضْرِبُ"),
                
                $this->kata_fiil_mudhori("2", "هُوَ + يَنْصَحُ", "يَنْصَحُ", "يَنْصَحُ"),
                $this->kata_fiil_mudhori("2", "هُمَا (مذكر) + يَنْصَحُ", "يَنْصَحُ", "يَنْصَحَانِ"),
                $this->kata_fiil_mudhori("2", "هُمْ + يَنْصَحُ", "يَنْصَحُ", "يَنْصَحُوْنَ"),
                $this->kata_fiil_mudhori("2", "هِيَ + يَنْصَحُ", "يَنْصَحُ", "تَنْصَحُ"),
                $this->kata_fiil_mudhori("2", "هُمَا (مؤنث) + يَنْصَحُ", "يَنْصَحُ", "تَنْصَحَانِ"),
                $this->kata_fiil_mudhori("2", "هُنَّ + يَنْصَحُ", "يَنْصَحُ", "يَنْصَحْنَ"),
                $this->kata_fiil_mudhori("2", "أَنْتَ + يَنْصَحُ", "يَنْصَحُ", "تَنْصَحُ"),
                $this->kata_fiil_mudhori("2", "أَنْتُمَا + يَنْصَحُ", "يَنْصَحُ", "تَنْصَحَانِ"),
                $this->kata_fiil_mudhori("2", "أَنْتُمْ + يَنْصَحُ", "يَنْصَحُ", "تَنْصَحُوْنَ"),
                $this->kata_fiil_mudhori("2", "أَنْتِ + يَنْصَحُ", "يَنْصَحُ", "تَنْصَحِيْنَ"),
                $this->kata_fiil_mudhori("2", "أَنْتُنَّ + يَنْصَحُ", "يَنْصَحُ", "تَنْصَحْنَ"),
                $this->kata_fiil_mudhori("2", "أَنَا + يَنْصَحُ", "يَنْصَحُ", "أَنْصَحُ"),
                $this->kata_fiil_mudhori("2", "نَحْنُ + يَنْصَحُ", "يَنْصَحُ", "نَنْصَحُ"),
                
                $this->kata_fiil_mudhori("3", "هُوَ + يَضْحَكُ", "يَضْحَكُ", "يَضْحَكُ"),
                $this->kata_fiil_mudhori("3", "هُمَا (مذكر) + يَضْحَكُ", "يَضْحَكُ", "يَضْحَكَانِ"),
                $this->kata_fiil_mudhori("3", "هُمْ + يَضْحَكُ", "يَضْحَكُ", "يَضْحَكُوْنَ"),
                $this->kata_fiil_mudhori("3", "هِيَ + يَضْحَكُ", "يَضْحَكُ", "تَضْحَكُ"),
                $this->kata_fiil_mudhori("3", "هُمَا (مؤنث) + يَضْحَكُ", "يَضْحَكُ", "تَضْحَكَانِ"),
                $this->kata_fiil_mudhori("3", "هُنَّ + يَضْحَكُ", "يَضْحَكُ", "يَضْحَكْنَ"),
                $this->kata_fiil_mudhori("3", "أَنْتَ + يَضْحَكُ", "يَضْحَكُ", "تَضْحَكُ"),
                $this->kata_fiil_mudhori("3", "أَنْتُمَا + يَضْحَكُ", "يَضْحَكُ", "تَضْحَكَانِ"),
                $this->kata_fiil_mudhori("3", "أَنْتُمْ + يَضْحَكُ", "يَضْحَكُ", "تَضْحَكُوْنَ"),
                $this->kata_fiil_mudhori("3", "أَنْتِ + يَضْحَكُ", "يَضْحَكُ", "تَضْحَكِيْنَ"),
                $this->kata_fiil_mudhori("3", "أَنْتُنَّ + يَضْحَكُ", "يَضْحَكُ", "تَضْحَكْنَ"),
                $this->kata_fiil_mudhori("3", "أَنَا + يَضْحَكُ", "يَضْحَكُ", "أَضْحَكُ"),
                $this->kata_fiil_mudhori("3", "نَحْنُ + يَضْحَكُ", "يَضْحَكُ", "نَضْحَكُ"),
            ];

            return $data;
        }

        public function kata_fiil_mudhori($latihan, $soal, $kata, $jawaban){
            $data = [
                "latihan" => $latihan,
                "soal" => $soal,
                "jawaban" => $jawaban,
                "kata" => $this->kata_mudhori($kata),
                "huruf" => array_unique(array_diff($this->huruf($this->huruf_fiil_mudhori($kata)), ["_"])),
            ];

            return $data;
        }

        public function kata_mudhori($kata){
            $huwa = $kata;
            $huma_l = substr($kata, 0, -2) . "َانِ";
            $hum = substr($kata, 0, -2) . "ُوْنَ";
            $hiya = "تَ" . substr($kata, 4);
            $huma_p = "تَ" . substr($kata, 4, -2) . "َانِ";
            $hunna = substr($kata, 0, -2) . "ْنَ";
            $anta = "تَ" . substr($kata, 4);
            $antuma = "تَ" . substr($kata, 4, -2) . "َانِ";
            $antum = "تَ" . substr($kata, 4, -2) . "ُوْنَ";
            $anti = "تَ" . substr($kata, 4, -2) . "ِيْنَ";
            $antunna = "تَ" . substr($kata, 4, -2) . "ْنَ";
            $ana = "أَ" . substr($kata, 4);
            $nahnu = "نَ" . substr($kata, 4);

            $data[0] = $huwa;
            $data[1] = $huma_l;
            $data[2] = $hum;
            $data[3] = $hiya;
            $data[4] = $huma_p;
            $data[5] = $hunna;
            $data[6] = $anta;
            $data[7] = $antuma;
            $data[8] = $antum;
            $data[9] = $anti;
            $data[10] = $antunna;
            $data[11] = $ana;
            $data[12] = $nahnu;

            return $data;
        }

        public function huruf_fiil_mudhori($kata){
            $huwa = $kata;
            $huma_l = substr($kata, 0, -2) . "َانِ";
            $hum = substr($kata, 0, -2) . "ُوْنَ";
            $hiya = "تَ" . substr($kata, 4);
            $huma_p = "تَ" . substr($kata, 4, -2) . "َانِ";
            $hunna = substr($kata, 0, -2) . "ْنَ";
            $anta = "تَ" . substr($kata, 4);
            $antuma = "تَ" . substr($kata, 4, -2) . "َانِ";
            $antum = "تَ" . substr($kata, 4, -2) . "ُوْنَ";
            $anti = "تَ" . substr($kata, 4, -2) . "ِيْنَ";
            $antunna = "تَ" . substr($kata, 4, -2) . "ْنَ";
            $ana = "أَ" . substr($kata, 4);
            $nahnu = "نَ" . substr($kata, 4);

            $data = $huwa . " " . $huma_l . " " . $hum . " " . $hiya . " " . $huma_p . " " . $hunna . " " . $anta . " " . $antuma . " " . $antum . " " . $anti . " " . $antunna . " " . $ana . " " . $nahnu;

            return $data;
        }
        
        public function fiil_amr(){
            $data = [
                $this->kata_fiil_amr("1", "أَنْتَ + اُسْكُتْ", "اُسْكُتْ", "اُسْكُتْ"),
                $this->kata_fiil_amr("1", "أَنْتُمَا + اُسْكُتْ", "اُسْكُتْ", "اُسْكُتَا"),
                $this->kata_fiil_amr("1", "أَنْتُمْ + اُسْكُتْ", "اُسْكُتْ", "اُسْكُتُوْا"),
                $this->kata_fiil_amr("1", "أَنْتِ + اُسْكُتْ", "اُسْكُتْ", "اُسْكُتِيْ"),
                $this->kata_fiil_amr("1", "أَنْتُنَّ + اُسْكُتْ", "اُسْكُتْ", "اُسْكُتْنَ"),
                
                $this->kata_fiil_amr("2", "أَنْتَ + اِضْحَكْ", "اِضْحَكْ", "اِضْحَكْ"),
                $this->kata_fiil_amr("2", "أَنْتُمَا + اِضْحَكْ", "اِضْحَكْ", "اِضْحَكَا"),
                $this->kata_fiil_amr("2", "أَنْتُمْ + اِضْحَكْ", "اِضْحَكْ", "اِضْحَكُوْا"),
                $this->kata_fiil_amr("2", "أَنْتِ + اِضْحَكْ", "اِضْحَكْ", "اِضْحَكِيْ"),
                $this->kata_fiil_amr("2", "أَنْتُنَّ + اِضْحَكْ", "اِضْحَكْ", "اِضْحَكْنَ"),
                
                $this->kata_fiil_amr("3", "أَنْتَ + اُخْرُجْ", "اُخْرُجْ", "اُخْرُجْ"),
                $this->kata_fiil_amr("3", "أَنْتُمَا + اُخْرُجْ", "اُخْرُجْ", "اُخْرُجَا"),
                $this->kata_fiil_amr("3", "أَنْتُمْ + اُخْرُجْ", "اُخْرُجْ", "اُخْرُجُوْا"),
                $this->kata_fiil_amr("3", "أَنْتِ + اُخْرُجْ", "اُخْرُجْ", "اُخْرُجِيْ"),
                $this->kata_fiil_amr("3", "أَنْتُنَّ + اُخْرُجْ", "اُخْرُجْ", "اُخْرُجْنَ"),
            ];

            return $data;
        }

        public function kata_fiil_amr($latihan, $soal, $kata, $jawaban){
            $data = [
                "latihan" => $latihan,
                "soal" => $soal,
                "jawaban" => $jawaban,
                "kata" => $this->kata_amr($kata),
                "huruf" => array_unique(array_diff($this->huruf($this->huruf_fiil_amr($kata)), ["_"])),
            ];

            return $data;
        }

        public function kata_amr($kata){
            $anta = $kata;
            $antuma = substr($kata, 0, -2) . "َا";
            $antum = substr($kata, 0, -2) . "ُوْا";
            $anti = substr($kata, 0, -2) . "ِيْ";
            $antunna = substr($kata, 0, -2) . "ْنَ";

            $data[0] = $anta;
            $data[1] = $antuma;
            $data[2] = $antum;
            $data[3] = $anti;
            $data[4] = $antunna;

            return $data;
        }

        public function huruf_fiil_amr($kata){
            $anta = $kata;
            $antuma = substr($kata, 0, -2) . "َا";
            $antum = substr($kata, 0, -2) . "ُوْا";
            $anti = substr($kata, 0, -2) . "ِيْ";
            $antunna = substr($kata, 0, -2) . "ْنَ";

            $data = $anta . " " . $antuma . " " . $antum . " " . $anti . " " . $antunna;

            return $data;
        }
        
        public function jar_majrur(){
            $data = [
                $this->kata_jar_majrur("1", "Dengan Pulpen", "بِالْقَلَمِ", "بِالْقَلَمِ"),
                $this->kata_jar_majrur("1", "Di dalam kamar", "فِى الْغُرْفَةِ", "فِى الْغُرْفَةِ"),
                $this->kata_jar_majrur("1", "Dari kamar mandi", "مِنْ الْحَمَّامِ", "مِنْ الْحَمَّامِ"),
                $this->kata_jar_majrur("1", "Ke sekolah", "اِلَى الْمَدْرَسَةِ", "اِلَى الْمَدْرَسَةِ"),
                $this->kata_jar_majrur("1", "Seperti pondok", "كَالْمَعْهَدِ", "كَالْمَعْهَدِ"),
                $this->kata_jar_majrur("1", "Untuk guru", "لِلْمُدَرِّسِ", "لِلْمُدَرِّسِ"),
                $this->kata_jar_majrur("1", "Di atas kasur", "عَلَى الْفِرَاشِ", "عَلَى الْفِرَاشِ"),
                $this->kata_jar_majrur("1", "Sampai subuh", "حَتَّى الصُّبْحِ", "حَتَّى الصُّبْحِ"),
            ];

            return $data;
        }

        public function dhorof_madhruf(){
            $data = [
                $this->kata_jar_majrur("1", "Di depan masjid", "أَمَامَ الْمَسْجِدِ", "أَمَامَ الْمَسْجِدِ"),
                $this->kata_jar_majrur("1", "Di belakang tembok", "وَرَاءَ الْجِدَارِ", "وَرَاءَ الْجِدَارِ"),
                $this->kata_jar_majrur("1", "Di bawah meja", "تَحْتَ الْمَكْتَبِ", "تَحْتَ الْمَكْتَبِ"),
                $this->kata_jar_majrur("1", "Di samping warung", "جَانِبَ الْحَانُوْتِ", "جَانِبَ الْحَانُوْتِ"),
                $this->kata_jar_majrur("1", "Sebelum subuh", "قَبْلَ الصُّبْحِ", "قَبْلَ الصُّبْحِ"),
                $this->kata_jar_majrur("1", "Setelah pelajaran", "بَعْدَ الدِّرَاسَةِ", "بَعْدَ الدِّرَاسَةِ"),
                $this->kata_jar_majrur("1", "Bersama teman-teman", "مَعَ الْأَصْدِقَاءِ", "مَعَ الْأَصْدِقَاءِ"),
            ];

            return $data;
        }

        public function kata_jar_majrur($latihan, $soal, $kata, $jawaban){
            $data = [
                "latihan" => $latihan,
                "soal" => $soal,
                "jawaban" => $jawaban,
                "kata" => $this->kata_jar($kata),
                "huruf" => array_unique($this->huruf($this->huruf_kata_jar($kata), " ")),
            ];

            return $data;
        }

        public function kata_jar($kata){
            $data[0] = substr($kata, 0, -2) . "ُ";
            $data[1] = substr($kata, 0, -2) . "َ";
            $data[2] = substr($kata, 0, -2) . "ِ";

            return $data;
        }

        public function huruf_kata_jar($kata){
            $data[0] = substr($kata, 0, -2) . "ُ";
            $data[1] = substr($kata, 0, -2) . "َ";
            $data[2] = substr($kata, 0, -2) . "ِ";

            return $data[0] . " " . $data[1] . " " . $data[2];
        }
        
        public function mausuf_sifat(){
            $data = [
                $this->kata_mausuf_sifat("1", "مَرْأَةٌ", "صَالِحٌ", "صَالِحَةٌ"),
                $this->kata_mausuf_sifat("1", "مَسْجِدٌ", "كَبِيْرٌ", "كَبِيْرٌ"),
                $this->kata_mausuf_sifat("1", "نَافِذَةٌ", "جَدِيْدٌ", "جَدِيْدَةٌ"),
                $this->kata_mausuf_sifat("1", "طَالِبٌ", "ذَكِيٌّ", "ذَكِيٌّ"),
                $this->kata_mausuf_sifat("1", "حَقِيْبَةٌ", "قَبِيْحٌ", "قَبِيْحَةٌ"),
                $this->kata_mausuf_sifat("1", "خِزَانَةٌ", "طَوِيْلٌ", "طَوِيْلَةٌ"),
                $this->kata_mausuf_sifat("1", "بَوَّابَةٌ", "مَفْتُوْحٌ", "مَفْتُوْحَةٌ"),
                $this->kata_mausuf_sifat("1", "مَكْتَبٌ", "نَظِيْفٌ", "نَظِيْفٌ"),
                $this->kata_mausuf_sifat("1", "كِتَابٌ", "رَخِيْصٌ", "رَخِيْصٌ"),
            ];

            return $data;
        }

        public function kata_mausuf_sifat($latihan, $soal, $kata, $jawaban){
            $data = [
                "latihan" => $latihan,
                "soal" => $soal,
                "jawaban" => $jawaban,
                "kata" => $this->kata_mausuf($kata),
                "huruf" => "",
            ];

            return $data;
        }

        public function kata_mausuf($kata){
            $data[0] = $kata;
            $data[1] = substr($kata, 0, -2) . "َةٌ";

            return $data;
        }
        
        public function isyarah_musyar(){
            $data = [
                $this->kata_isyarah_musyar("1", "هَذَا", "بَابٌ الْبَابُ نَافِذَةٌ النَّافِذَةُ", "الْبَابُ"),
                $this->kata_isyarah_musyar("1", "هَذِهِ", "بَابٌ الْبَابُ نَافِذَةٌ النَّافِذَةُ", "النَّافِذَةُ"),
                $this->kata_isyarah_musyar("1", "ذَالِكَ", "بَابٌ الْبَابُ نَافِذَةٌ النَّافِذَةُ", "الْبَابُ"),
                $this->kata_isyarah_musyar("1", "تِلْكَ", "بَابٌ الْبَابُ نَافِذَةٌ النَّافِذَةُ", "النَّافِذَةُ"),
            ];

            return $data;
        }

        public function kata_isyarah_musyar($latihan, $soal, $kata, $jawaban){
            $data = [
                "latihan" => $latihan,
                "soal" => $soal,
                "jawaban" => $jawaban,
                "kata" => $this->kata_musyar($kata),
                "huruf" => "",
            ];

            return $data;
        }

        public function kata_musyar($kata){
            $data = explode(" ", $kata);
            return $data;
        }

        public function idhafah(){
            $data = [
                $this->kata_idhafah("1", "بَابٌ + فَصْلٌ", "بَابٌ فَصْلٌ", "بَابُ الْفَصْلِ", "qamariyah", "marifat"),
                $this->kata_idhafah("1", "كِتَابٌ + أُسْتَاذٌ", "كِتَابٌ أُسْتَاذٌ", "كِتَابُ أُسْتَاذٍ", "qamariyah", ""),
            ];

            return $data;
        }

        public function kata_idhafah($latihan, $soal, $kata, $jawaban, $al, $marifat = ""){
            $data = [
                "latihan" => $latihan,
                "soal" => $soal,
                "jawaban" => $jawaban,
                "kata" => $this->kata_idhaf($kata, $al, $marifat),
                "huruf" => "",
            ];

            return $data;
        }

        public function kata_idhaf($kata, $al, $marifat){
            $cek = explode(" ", $kata);
            $data[] = $cek[0];
            $data[] = substr($cek[0], 0, -2) . "ُ";
            $data[] = $cek[1];
            if($marifat){
                if($al == "syamsiah"){
                    $data[] = "ال" . substr($cek[1], 0, 2) . "ّ" . substr($cek[1], 0, -2) . "ُ";
                    $data[] = "ال" . substr($cek[1], 0, 2) . "ّ" . substr($cek[1], 0, -2) . "ِ";
                } else {
                    $data[] = "الْ" . substr($cek[1], 0, -2) . "ُ";
                    $data[] = "الْ" . substr($cek[1], 0, -2) . "ِ";
                }
            } else {
                $data[] = substr($cek[1], 0, -2) . "ُ";
                $data[] = substr($cek[1], 0, -2) . "ٍ";
            }

            return $data;
        }

        
        public function mausul(){
            $data = [
                $this->mausul_fiil_madhi("1", "الَّذِيْ + ضَرَبَ", "ضَرَبَ", "ضَرَبَ"),
                $this->mausul_fiil_madhi("1", "اللَّذَانِ + ضَرَبَ", "ضَرَبَ", "ضَرَبَا"),
                $this->mausul_fiil_madhi("1", "الَّذِيْنَ + ضَرَبَ", "ضَرَبَ", "ضَرَبُوْا"),
                $this->mausul_fiil_madhi("1", "الَّتَيْ + ضَرَبَ", "ضَرَبَ", "ضَرَبَتْ"),
                $this->mausul_fiil_madhi("1", "اللَّتَانِ + ضَرَبَ", "ضَرَبَ", "ضَرَبَتَا"),
                $this->mausul_fiil_madhi("1", "اللَّآتِيْ + ضَرَبَ", "ضَرَبَ", "ضَرَبْنَ"),

                
                $this->mausul_fiil_mudhori("2", "الَّذِيْ + يَضْرِبُ", "يَضْرِبُ", "يَضْرِبُ"),
                $this->mausul_fiil_mudhori("2", "اللَّذَانِ + يَضْرِبُ", "يَضْرِبُ", "يَضْرِبَانِ"),
                $this->mausul_fiil_mudhori("2", "الَّذِيْنَ + يَضْرِبُ", "يَضْرِبُ", "يَضْرِبُوْنَ"),
                $this->mausul_fiil_mudhori("2", "الَّتَيْ + يَضْرِبُ", "يَضْرِبُ", "تَضْرِبُ"),
                $this->mausul_fiil_mudhori("2", "اللَّتَانِ + يَضْرِبُ", "يَضْرِبُ", "تَضْرِبَانِ"),
                $this->mausul_fiil_mudhori("2", "اللَّآتِيْ + يَضْرِبُ", "يَضْرِبُ", "يَضْرِبْنَ"),
            ];
            return $data;
        }

        public function mausul_fiil_madhi($latihan, $soal, $kata, $jawaban){
            $data = [
                "latihan" => $latihan,
                "soal" => $soal,
                "jawaban" => $jawaban,
                "kata" => $this->mausul_kata_madhi($kata),
                "huruf" => array_unique(array_diff($this->huruf($this->huruf_fiil_madhi($kata)), ["_"])),
            ];

            return $data;
        }

        public function mausul_kata_madhi($kata){
            $huwa = $kata;
            $huma_l = $kata . "ا";
            $hum = substr($kata, 0, -2) . "ُوْا";

            $hiya = $kata . "تْ";
            $huma_p = $kata . "تَا";
            $hunna = substr($kata, 0, -2) . "ْنَ";

            $data[] = $huwa;
            $data[] = $huma_l;
            $data[] = $hum;
            $data[] = $hiya;
            $data[] = $huma_p;
            $data[] = $hunna;

            return $data;
        }

        public function mausul_fiil_mudhori($latihan, $soal, $kata, $jawaban){
            $data = [
                "latihan" => $latihan,
                "soal" => $soal,
                "jawaban" => $jawaban,
                "kata" => $this->mausul_kata_mudhori($kata),
                "huruf" => array_unique(array_diff($this->huruf($this->huruf_fiil_mudhori($kata)), ["_"])),
            ];

            return $data;
        }

        public function mausul_kata_mudhori($kata){
            $huwa = $kata;
            $huma_l = substr($kata, 0, -2) . "َانِ";
            $hum = substr($kata, 0, -2) . "ُوْنَ";
            $hiya = "تَ" . substr($kata, 4);
            $huma_p = "تَ" . substr($kata, 4, -2) . "َانِ";
            $hunna = substr($kata, 0, -2) . "ْنَ";

            $data[] = $huwa;
            $data[] = $huma_l;
            $data[] = $hum;
            $data[] = $hiya;
            $data[] = $huma_p;
            $data[] = $hunna;

            return $data;
        }

        public function nakirah_marifat(){
            $data = [
                $this->kata_mudzakkar_muannats("كِتَابٌ", "النَّكِرَةُ", "1"),
                $this->kata_mudzakkar_muannats("الْقَلَمُ", "الْمَعْرِفَةُ", "1"),
            ];

            return $data;
        }

        public function jumlah(){
            $data = [
                $this->kata_mudzakkar_muannats("هُوَ طَالِبٌ", "جُمْلَةٌ اِسْمِيَّةٌ", "1"),
                $this->kata_mudzakkar_muannats("قَامَ مُحَمَّدٌ", "جُمْلَةٌ فِعْلِيَّةٌ", "1"),
            ];

            return $data;
        }
    }