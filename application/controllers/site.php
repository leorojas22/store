<?php

	class Site extends CI_Controller {

		public function __construct() {
			
			parent::__construct();

		}
		
		
		public function index() {			
			
			$data['loginView'] = "templates/login_form";
			$this->load->view("templates/header.php", $data);
			$this->load->view("templates/footer.php");
			
		}		
		
	}


?>