<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Products extends CI_Controller {
		public function index() {
			$data["page_title"] = "Products";
			$data["returned_products"] = $this->ProductModel->getProducts();

			// load templates and then the page requested
			$this->load->view("templates/header", $data);
			$this->load->view("pages/products", $data);
			$this->load->view("templates/footer");
		}


		/**
		 * Show view to insert new product
		 */
		public function create() {
			$data["page_title"] = "Insert new product";
			$data["categories"] = $this->ProductModel->getCategories(); // load model to display all categories

			// load views and pass the data
			$this->load->view("templates/header", $data);
			$this->load->view("pages/product_insert", $data);
			$this->load->view("templates/footer");

			// check to see if something was submitted
			if ($_POST) {

				// handle image upload
				$config = array(
					"upload_path" => "./assets/uploads/",
					"allowed_types" => "jpg|jpeg|png",
					"max_size" => 5000, // in KB
					"overwrite" => true // overwrite file with the same name
				);
				$this->load->library("upload", $config);

				// check to see if the user uploaded an image
				if (!$this->upload->do_upload()) {

					// if not, use a default image
					$prodImgId = "noimage.jpg";

					// ProductModel is autoloaded in config/autoload -> $autoload['model']
					$this->ProductModel->insertNewProd($prodImgId);
				}
				else {
					// every piece of data from the file
					$data = array("upload_data" => $this->upload->data());

					// name of the file ([name], [tmp_name], [size], etc)
					$prodImgId = $_FILES["userfile"]["name"];
					
					// ProductModel is autoloaded in config/autoload -> $autoload['model']
					$this->ProductModel->insertNewProd($prodImgId);
				}
			}
		}


		/**
		 * Show product information on new page, passing the ID of said product
		 */
		public function viewProduct($id) {
			$data["returned_products"] = $this->ProductModel->getProducts($id);
			$data["page_title"] = $data["returned_products"]["p_name"];

			$this->load->view("templates/header", $data);
			$this->load->view("pages/product_info", $data);
			$this->load->view("templates/footer");
		}
	}
?>