<?php
	$config = array(
		"signup" => array(
			array(
				"field" => "email", 
				"label" => "Email Address",
				"rules" => "required|is_unique[customer.email]|valid_email"
			),
			array(
				"field" => "firstname",
				"label" => "First Name",
				"rules" => "required"
			),
			array(
				"field" => "lastname",
				"label" => "Last Name",
				"rules" => "required"
			),
			array(
				"field" => "password",
				"label" => "Password",
				"rules" => "required|matches[confirmpass]"
			),
			array(
				"field" => "confirmpass",
				"label" => "Confim Password",
				"rules" => "required"
			),
			array(
				"field" => "address",
				"label" => "Address",
				"rules" => "required"
			),
			array(
				"field" => "city",
				"label" => "City",
				"rules" => "required",
			),
			array(
				"field" => "state",
				"label" => "State",
				"rules" => "required",
			),
			array(
				"field" => "zip",
				"label" => "Zip Code",
				"rules" => "required",
			),
			array(
				"field" => "phone",
				"label" => "Phone",
				"rules" => "required",
			)
	
		)	
	);

?>