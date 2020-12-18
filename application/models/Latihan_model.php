<?php
class Latihan_model extends CI_MODEL{
    public function add_latihan_mufrodat($data){
        $this->db->insert("kata_user", $data);
    }

    public function add_latihan($data){
        $this->db->insert("latihan", $data);
    }
    
    // other function
        public function cek_latihan_mufrodat($id_user, $id_mufrodat, $latihan){
            $this->db->from("kata_user");
            $this->db->where("id_user", $id_user);
            $this->db->where("id_mufrodat", $id_mufrodat);
            $this->db->where("latihan", $latihan);
            return $this->db->get()->row_array();
        }

        public function cek_latihan($id, $latihan, $mustawa, $materi){
            $this->db->from("latihan");
            $this->db->where("id_user", $id);
            $this->db->where("latihan", $latihan);
            $this->db->where("mustawa", $mustawa);
            $this->db->where("materi", $materi);
            return $this->db->get()->row_array();
        }
    // other function
}