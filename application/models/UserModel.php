<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class UserModel extends CI_Model {
		public function __construct() {
			$this->load->database();
		}

		public function login() {
			$user = array(
				"u_username" => $this->input->post("username"),
				"u_password" => password_hash($this->input->post("password"), PASSWORD_BCRYPT)
			);
			
			$query = $this->db->select("*")->from("users")->where("u_username", $user["u_username"], "u_password", $user["u_password"])->get();
			return $query->row_array();
		}
	}
?>