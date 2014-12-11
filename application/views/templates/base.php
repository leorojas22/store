<?php

	$this->load->view("templates/header", $headerData);
	
	$this->load->view($main_content, $mainContentData);
	
	$this->load->view("templates/footer", $footerData);
	
?>