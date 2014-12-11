<?php


	class Customer_Model extends CI_Model {
		
		public function __construct() {

			$this->load->database();
			
		}
		
		
		function create($data) {
			
			if(isset($data['password'])) {

				$data['passwordkey'] = md5(uniqid(time(),true));
				$data['password'] = $this->encrypt->encode($data['password'], $data['passwordkey']);
				
			}
			
			$this->db->insert("customer", $data);
			
		}
		
		
		function login($username, $password) {
			
			$loggedInStatus = false;
			$query = $this->db->get_where("customer", array("email" => $username), 1);
						
			if($query->num_rows() == 1) {
				$result = $query->row_array();
				$checkPassword = $this->encrypt->encode($password, $result['passwordkey']);
				
				if($checkPassword == $result['password']) {

					$loggedInStatus = true;
					
				}				
			}
			
			
			return $loggedInStatus;
		}
		
		
	}

?>