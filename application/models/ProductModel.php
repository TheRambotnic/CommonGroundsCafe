<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class ProductModel extends CI_Model {
		public function __construct() {

			// connect to database (set in config/database.php)
			$this->load->database();
		}


		/**
		 * Return all products from the database
		 */
		public function getProducts($id = "") {

			// check to see if the $id passed is empty
			if (empty($id)) {
				$query = $this->db->get("products");
				return $query->result_array(); // result_array() to return everything
			}

			// if an $id was passed, return only the product specified
			$query = $this->db->select("products.*, categories.*")->from("products")->join("categories", "categories.id_category = products.id_category")->where("id_product", $id)->get();
			return $query->row_array(); // row_array() to return only 1 row found
		}


		/**
		 * Return all categories from the database
		 */
		public function getCategories() {
			$query = $this->db->get("categories");
			return $query->result_array(); // result_array() to return everything
		}


		/**
		 * Insert a new product into the database
		 */
		public function insertNewProd($prodImgId) {
			$product = array(
				"p_name" => $this->input->post("name"),
				// preg_replace() - remove a pattern of chars that aren't numbers from the string, in case the user inserts any
				"p_price" => preg_replace("/[^0-9.]/", "", $this->input->post("price")),
				"p_img_id" => $prodImgId,
				"id_category" => $this->input->post("category")
			);

			return $this->db->insert("products", $product);
			echo "<script>alert('The product " .$this->input->post("name"). " was inserted successfully!');</script>";
		}
	}
?>