<?php

	class SignUp extends CI_Controller {
		
		
		public function __construct() {

			parent::__construct();
			$this->load->helper("form");
			$this->load->helper("breadcrumb");
			
			$this->load->library("encrypt");
			
			$this->load->model("customer_model");
			
		}
		
		public function index() {

			$this->load->library("form_validation");
			
			// Page Setup
			$data['loginView'] = "templates/login_form";
			
			$breadcrumb = array(
				array("link" => base_url(), "title" => "Home"),
				array("title" => "Sign Up")
			);
			
			$data['pageTitle'] = "Sign Up - ";
			$data['breadCrumb'] = format_breadcrumb($breadcrumb);
			$data['breadCrumbTitle'] = "Sign Up";
			
			$this->load->view("templates/header", $data);
			$this->load->view("templates/breadcrumb", $data);
			
			// Validation Rules
			
			$this->form_validation->set_message("is_unique", "There is already a registered user with that %s!");	
			
			if($this->form_validation->run("signup") == false) {
				
				if($this->input->post("submit")) {
					$this->load->view("templates/form_errors");	
				}
				
				$this->load->view("signup/signup");
				
			}
			else {
				
				$customerInfo = array(
					"firstname" => $this->input->post("firstname"),
					"lastname" => $this->input->post("lastname"),
					"address" => $this->input->post("address"),
					"city" => $this->input->post("city"),
					"state" => $this->input->post("state"),
					"zipcode" => $this->input->post("zip"),
					"phone" => $this->input->post("phone"),
					"email" => $this->input->post("email"),
					"password" => $this->input->post("password")
				);
				
				$this->customer_model->create($customerInfo);
				$this->load->view("signup/signup_complete");
			}
			
			$this->load->view("templates/footer");
			
		}
		
		
	}


?>