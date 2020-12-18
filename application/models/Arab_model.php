<?php
class Arab_model extends CI_MODEL{
    // get all
        public function get_all_mufrodat(){
            $this->db->from("mufrodat");
            $this->db->order_by("id_mufrodat", "ASC");
            return $this->db->get()->result_array();
        }
        
        public function get_mufrodat_by_id_mufrodat_id_user($id_mufrodat, $id_user){
            $this->db->from("kata_user");
            $this->db->where("id_mufrodat", $id_mufrodat);
            $this->db->where("id_user", $id_user);
            return $this->db->get()->result_array();
        }

        public function get_all_kata_by_id_mufrodat($id){
            $this->db->from("kata");
            $this->db->where("id_mufrodat", $id);
            return $this->db->get()->result_array();
        }

        public function get_data_mufrodat_by_id($id){
            $this->db->from("mufrodat");
            $this->db->where("id_mufrodat", $id);
            return $this->db->get()->row_array();
        }

        public function get_data_mufrodat($id){
            $this->db->from("mufrodat");
            $this->db->where("id_mufrodat", $id);
            return $this->db->get()->row_array();
        }

        public function get_data_kata($id){
            $this->db->from("kata as a");
            $this->db->join("kata_kalimat as b", "a.id_kata = b.id_kata");
            $this->db->where("b.id_kalimat", $id);
            return $this->db->get()->result_array();
        }

        public function get_kalimat_by_id($id){
            $this->db->from("kalimat");
            $this->db->where("id_kalimat", $id);
            return $this->db->get()->row_array();
        }

        public function get_detail_kata_kalimat($id){
            $this->db->from("detail_kata");
            $this->db->where("id_kalimat", $id);
            return $this->db->get()->result_array();
        }

        public function get_all_kata(){
            $this->db->from("kata");
            return $this->db->get()->result_array();
        }

        public function get_data_kata_by_id($id){
            $this->db->from("kata");
            $this->db->where("id_kata", $id);
            return $this->db->get()->row_array();
        }

        public function get_all_kata_by_search(){
            $kata = $this->input->post("kata");
            $this->db->from("kata");
            $this->db->like('kata_arab', $kata, 'both');
            $this->db->or_like('arti', $kata, 'both');
            return $this->db->get()->result_array();
        }

        public function get_all_saran(){
            $this->db->from("saran");
            return $this->db->get()->result_array();
        }

        public function get_all_materi(){
            $this->db->from("materi");
            return $this->db->get()->result_array();
        }
        
        public function get_all_materi_by_level($id){
            $this->db->from("materi");
            $this->db->where("id_level", $id);
            return $this->db->get()->result_array();
        }

        public function get_all_level(){
            $this->db->from("level");
            return $this->db->get()->result_array();
        }
    // get all
    
    // get by id
        public function get_all_latihan_by_id($id){
            $this->db->from("latihan");
            $this->db->where("id_user", $id);
            return $this->db->get()->result_array();
        }

        public function get_tujuan_by_id_materi($id){
            $this->db->from("materi as a");
            $this->db->join("tujuan_pembelajaran as b", "a.id_materi = b.id_materi");
            $this->db->where("b.id_materi", $id);
            return $this->db->get()->result_array();
        }
        
        public function get_all_materi_by_id_user($id){
            $this->db->from("materi_user as a");
            $this->db->join("materi as b", "a.id_materi = b.id_materi");
            $this->db->where("id_user", $id);
            return $this->db->get()->result_array();
        }

        public function get_materi_by_id_user_id_materi($id_user, $id_materi){
            $this->db->from("materi_user");
            $this->db->where("id_user", $id_user);
            $this->db->where("id_materi", $id_materi);
            return $this->db->get()->row_array();
        }

        public function get_latihan_by_id_user_id_materi($id_user, $id_materi){
            $this->db->from("latihan");
            $this->db->where("id_user", $id_user);
            $this->db->where("id_materi", $id_materi);
            return $this->db->get()->result_array();
        }
        
        public function get_latihan_by_id_user_latihan_materi($id_user, $latihan, $materi){
            $this->db->from("latihan");
            $this->db->where("id_user", $id_user);
            $this->db->where("latihan", $latihan);
            $this->db->where("materi", $materi);
            return $this->db->get()->row_array();
        }

        public function get_latihan_by_id_user_by_materi($id, $materi){
            $this->db->from("latihan");
            $this->db->where("id_user", $id);
            $this->db->where("materi", $materi);
            return $this->db->get()->result_array();
        }

        public function get_user_by_username($username){
            $this->db->from("user");
            $this->db->where("username", $username);
            return $this->db->get()->row_array();
        }

        public function get_user_by_email($email){
            $this->db->from("user");
            $this->db->where("email", $email);
            return $this->db->get()->row_array();
        }

        public function get_materi_by_id_level($id){
            $this->db->from("level as a");
            $this->db->join("materi as b", "a.id_level = b.id_level");
            return $this->db->get()->result_array();
        }

        public function get_all_level_by_id_user($id){
            $this->db->select("level, b.id_level, status, link");
            $this->db->from("level_user as a");
            $this->db->join("level as b", "a.id_level = b.id_level");
            $this->db->where('a.id_user', $id);
            return $this->db->get()->result_array();
        }

        public function get_all_level_not_by_id_user($id_level){
            $this->db->select("level, id_level, min_kata, harga");
            $this->db->from("level", "a.id_level = b.id_level");
            $this->db->where_not_in('id_level', $id_level);
            return $this->db->get()->result_array();
        }

        public function get_user_by_id($id){
            $this->db->from("user");
            $this->db->where("id_user", $id);
            return $this->db->get()->row_array();
        }

        public function get_all_level_when_not_id($id){
            $level = $this->get_all_level_by_id_user($id);
            if($level){
                foreach ($level as $i => $level) {
                    $data[$i] = $level['level'];
                }
    
                $this->db->from("level");
                $this->db->where_not_in("id_level", $data);
                return $this->db->get()->result_array();
            } else {
                return $this->get_all_level();
            }
        }

        public function get_user_by_id_by_name($id, $name){
            $this->db->from("user");
            $this->db->where("MD5(id_user)", $id);
            $this->db->where("MD5(nama)", $name);
            $this->db->where("reset", "1");
            return $this->db->get()->row_array();
        }

        public function get_user_by_id_hash($id){
            $this->db->from("user");
            $this->db->where("MD5(id_user)", $id);
            return $this->db->get()->row_array();
        }

        public function get_kata_user_by_id_user($id){
            $this->db->select("id_user, a.id_mufrodat, tema, COUNT(latihan) as latihan, kata");
            $this->db->from("kata_user as a");
            $this->db->join("mufrodat as b", "a.id_mufrodat = b.id_mufrodat");
            $this->db->where("id_user", $id);
            $this->db->group_by(["a.id_mufrodat"]);
            return $this->db->get()->result_array();
        }

        public function get_last_id_user(){
            $this->db->from("user");
            $this->db->order_by("id_user", "DESC");
            $id = $this->db->get()->row_array();
            return $id['id_user'] + 1;
        }

        public function get_detail_kalimat_by_id_kalimat($id_kalimat){
            $this->db->select("kata, jenis");
            $this->db->from("detail_kalimat as a");
            $this->db->join("kalimat as b", "a.id_kalimat = b.id_kalimat");
            $this->db->where("a.id_kalimat", $id_kalimat);
            return $this->db->get()->result_array();
        }

        public function get_detail_kalimat_by_jenis_by_id_tema($jenis, $id){
            $this->db->select("kata");
            $this->db->from("detail_kalimat as a");
            $this->db->join("kalimat as b", "a.id_kalimat = b.id_kalimat");
            $this->db->where("jenis", $jenis);
            $this->db->where("id_tema", $id);
            $this->db->group_by("kata");
            $data = $this->db->get()->result_array();
            return $data;
        }

        public function get_level_by_id_level($id){
            $this->db->from("level");
            $this->db->where("id_level", $id);
            return $this->db->get()->row_array();
        }

        public function get_level_user_by_id_user_id_level($id_user, $id_level){
            $this->db->from("level_user");
            $this->db->where("id_user", $id_user);
            $this->db->where("id_level", $id_level);
            return $this->db->get()->row_array();
        }

        public function get_all_pembelian_by_id_user($id){
            $this->db->from("pembelian");
            $this->db->where("id_user", $id);
            $this->db->where("status !=", "batal");
            $this->db->order_by("status", "DESC");
            return $this->db->get()->result_array();
        }

        public function cek_latihan_mufrodat_by_latihan($id_user, $id_mufrodat, $latihan){
            $this->db->from("kata_user");
            $this->db->where("id_user", $id_user);
            $this->db->where("id_mufrodat", $id_mufrodat);
            $this->db->where("latihan", $latihan);
            return $this->db->get()->row_array();
        }

        public function get_all_kata_by_id_tema($id){
            $this->db->select("*, a.arti");
            $this->db->from("kata as a");
            $this->db->join("kata_kalimat as b", "a.id_kata = b.id_kata");
            $this->db->join("kalimat as c", "b.id_kalimat = c.id_kalimat");
            $this->db->where("id_tema", $id);
            $this->db->group_by("a.id_kata");
            return $this->db->get()->result_array();
        }

        public function get_mufrodat_by_mustawa($mustawa){
            $this->db->from("mufrodat");
            $this->db->where("mustawa", $mustawa);
            $this->db->order_by("id_mufrodat");
            return $this->db->get()->result_array();
        }
    // get by id
    
    // get last id
        public function get_last_id_pembelian(){
            $this->db->from("pembelian");
            $this->db->order_by("id_pembelian", "DESC");
            $id = $this->db->get()->row_array();
            return $id['id_pembelian'] + 1;
        }
    // get last id

    // add
        public function add_tema(){
            $this->db->insert("tema", ["tema" => $this->input->post("tema")]);
        }

        public function add_kalimat(){
            $data = [
                "kalimat_arab" => $this->input->post("kalimat_arab"),
                "arti" => $this->input->post("kalimat_indo"),
                "id_tema" => $this->input->post("id_tema")
            ];

            $this->db->insert("kalimat", $data);
        }

        public function add_kata_kalimat(){
            $id = $this->input->post("id");
            $data = $this->input->post("kata");
            foreach ($data as $data) {
                $kata = [
                    "id_kata" => $data,
                    "id_kalimat" => $id
                ];

                $this->db->insert("kata_kalimat", $kata);
            }
        }

        public function add_kata(){
            $data = [
                "kata_arab" => $this->input->post("kata_arab"),
                "arti" => $this->input->post("kata_indo")
            ];

            $this->db->insert("kata", $data);
        }

        public function add_saran(){
            $data = [
                "nama" => $this->input->post("nama", TRUE),
                "email" => $this->input->post("email", TRUE),
                "text" => $this->input->post("saran", TRUE)
            ];

            $this->db->insert("saran", $data);
        }

        public function add_user($id){
            $data = [
                "id_user" => $id,
                "nama" => $this->input->post("nama", TRUE),
                "tgl_lahir" => $this->input->post("tgl_lahir", TRUE),
                "email" => $this->input->post("email", TRUE),
                "jk" => $this->input->post("jk", TRUE),
                "tgl_masuk" => date('Y-m-d'),
                "password" => MD5($this->input->post("password", TRUE)),
                "status" => 1,
            ];

            $this->db->insert("user", $data);

            // for ($i=1; $i < 7; $i++) { 
            //     $this->db->insert("kata_user", ["id_user" => $id, "id_tema" => $i]);
            // }
        }

        public function add_pembelian(){
            $user = $this->get_user_by_id($this->session->userdata("id"));

            $data = [
                "tgl_pembelian" => date("Y-m-d H:i:s"),
                "nama" => $user['nama'],
                "harga" => $this->nominal($this->input->post("harga")),
                "id_user" => $user['id_user'],
                "id_level" => $this->input->post("id_level"),
                "status" => "waiting",
                "level" => $this->input->post("level")
            ];

            $this->db->insert("pembelian", $data);
        }

    // add

    // edit
        public function edit_kalimat(){
            $id = $this->input->post("id");

            $data = [
                "kalimat_arab" => $this->input->post("kalimat", TRUE),
                "arti" => $this->input->post("arti", TRUE)
            ];

            $this->db->where("id_kalimat", $id);
            $this->db->update("kalimat", $data);
        }

        public function edit_kata(){
            $id = $this->input->post("id_kata");

            $data = [
                "kata_arab" => $this->input->post("kata_arab", TRUE),
                "arti" => $this->input->post("kata_indo")
            ];

            $this->db->where("id_kata", $id);
            $this->db->update("kata", $data);
        }

        public function edit_user_by_id($id){
            $this->db->where("id_user", $id);
            $data = [
                "nama" => $this->input->post("nama", TRUE),
                "jk" => $this->input->post("jk", TRUE),
                "tgl_lahir" => $this->input->post("tgl_lahir", TRUE)
            ];

            $this->db->update("user", $data);
        }

        public function edit_password($id){
            $password = $this->input->post("password");
            $username = $this->input->post("username");
            $this->db->where("id_user", $id);
            $this->db->update("user", ["password" => MD5($password), "username" => $username]);
        }
        
        public function edit_reset_password_by_id($id, $reset){
            $this->db->where("id_user", $id);
            $this->db->update("user", ["reset" => $reset]);
        }
        
        public function edit_pembelian_by_id($id, $foto){
            $this->db->where("id_pembelian", $id);
            $this->db->update("pembelian", ["foto" => $foto, "status" => "konfirm"]);
        }
    // edit

    // delete
        public function delete_kata_kalimat(){
            $kata = $this->input->post("kata", TRUE);

            foreach ($kata as $kata) {
                $this->db->where("id", $kata);
                $this->db->delete("kata_kalimat");
            }
        }

        public function hapus_pembelian_by_id($id){
            $this->db->where("id_pembelian", $id);
            $this->db->update("pembelian", ["status" => "batal"]);
        }
    // delete
    
    // other function
        public function nominal($data){
            $data = str_replace("Rp. ", "", $data);
            $data = str_replace(".", "", $data);
            return $data;
        }
    // other function
}