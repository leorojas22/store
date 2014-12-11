<html>
	<head>
		<title><?php echo $pageTitle; ?>Leo's Book Store</title>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
		<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>css/style.css'>
	</head>
	<body>
	
		<div class='headerDiv'>
		
			<div class='headerTitleText'>
				LEO'S
				<div class='headerSubText'>BOOK STORE</div>	
			</div>
			
			<?php $this->load->view($loginView); ?>
			
			<div class='clear'></div>
		</div>
		
		<div class='bodyDiv'>