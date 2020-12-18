<?php
class Login_model extends CI_MODEL{
	function cekLogin($table,$where){		
		return $this->db->get_where($table,$where);
	}

	public function cek_login(){
        $username = $this->input->post('username', TRUE);
		$password = $this->input->post('password', TRUE);

		$this->db->from("admin as a");
		$this->db->join("kpq as b", "a.id_admin = b.nip");
		$this->db->where("id_admin", $username);
		$this->db->where("password", $password);
		$this->db->where("level", "kpq");
		return $this->db->get()->row_array();
	}

	public function cek_login_user(){
		$email = $this->input->post("email");
		$password = md5($this->input->post("password", TRUE));

		$this->db->from("user");
		$this->db->where("email", $email);
		$this->db->where("password", $password);
		return $this->db->get()->row_array();
	}
}