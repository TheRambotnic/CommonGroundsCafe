<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Pages extends CI_Controller {

		/**
		 * Default function for displaying our pages
		 *
		 * @param $page
		 * Pass "home" as default page if none was specified
		 */
		public function show_page($page = "home") {

			// check to see if the page exists
			if (!file_exists(APPPATH."views/pages/".$page.".php")) {

				// if it doesn't exist, show 404 error
				show_404();
			}

			// replace underscores with white spaces and capitalize first letter
			$data["page_title"] = str_replace("_", " ", ucfirst($page));

			// load templates and then the page requested
			$this->load->view("templates/header", $data);
			$this->load->view("pages/".$page, $data);
			$this->load->view("templates/footer");
		}
	}
?>