<?php
	class Users extends CI_Model
	{
		public $user;
		
		function __construct()
		{
			parent::__construct();
		}
		
		public function get_user($user_info)
		{
			return $this->db->query("SELECT * FROM users WHERE email = '{$user_info['email']}'
									 AND password = '{$user_info['password']}'")->row_array();
		}
		
		public function insert_user($user_info)
		{
			$insert_query = "INSERT INTO users (first_name, last_name, email, password, created_at, updated_at)
								VALUES (?, ?, ?, ?,NOW(), NOW())";
			$values = (array($user_info['first_name'], $user_info['last_name'], $user_info['email'], $user_info['password']));
			$this->db->query($insert_query, $values);
			return $this->db->insert_id();
		}
	
	}

?>