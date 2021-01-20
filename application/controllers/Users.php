<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Users extends CI_Controller {
		public function login() {			
			$data["page_title"] = "Login";
			$this->load->view("templates/header", $data);
			$this->load->view("pages/login");
			$this->load->view("templates/footer");

			if ($_POST) {
				$result = $this->UserModel->login();

				$_SESSION["id_user"] = $result["id_user"];
				$_SESSION["name"] = $result["u_name"];
				$_SESSION["privileges"] = $result["id_user_privilege"];
				redirect(base_url());
			}
		}


		public function logout() {
			$_SESSION = array();
			session_destroy(); // needs fix
			
			// redirect(base_url());
		}
	}
?>