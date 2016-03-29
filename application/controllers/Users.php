<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}

	public function register()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("first_name", "First Name", "trim|required");
		$this->form_validation->set_rules("last_name", "Last Name", "trim|required");
		$this->form_validation->set_rules("email", "Email", "trim|valid_email|is_unique[users.email]|required");
		$this->form_validation->set_rules("password", "Password", "trim|min_length[8]|required|matches[confirm_password]|md5");
		$this->form_validation->set_rules("confirm_password", "Confirm Password", "trim|required|md5");

		if($this->form_validation->run() === FALSE)
		{
			$this->session->set_flashdata("registration_errors", validation_errors());
			$this->load->view('storeView');
		}

		else 
		{
			$this->load->model("User");
			$user_input = $this->input->post();			
			$insert_user = $this->User->insert_user($user_input);
			
			if($insert_user)
			{				
				$this->session->set_userdata("user_session", $user_input);
				redirect(base_url("/Users/storeView"));
			}
			else
			{
				$this->session->set_flashdata("registration_errors", "registration failed");
				$this->load->view('storeView');
			}
		}
	}

	public function login()
	{		
		$this->load->library("form_validation");
		$this->form_validation->set_rules("email", "Email", "trim|valid_email|required");
		$this->form_validation->set_rules("password", "Password", "trim|min_length[8]|required|md5");
		
		if($this->form_validation->run() === FALSE)
		{
			$this->session->set_flashdata("login_errors", validation_errors());
			redirect(base_url('/User/storeView'));
		}
		else
		{
			$this->load->model("User");							   
			$get_user = $this->User->get_user($this->input->post());

			if ($get_user)
			{
				$this->session->set_userdata("user_session", $get_user);
				redirect(base_url("/Users/storeView"));
			}
			else
			{
				$this->session->set_flashdata("login_errors", "Invalid email and/or password");
				redirect(base_url('/Users/storeView'));
			}
		}
	}


	public function signOut() {
		
		$this->session->sess_destroy();
		
		redirect(base_url("/Users/storeView"));

	}

	public function storeView() {
		$this->load->view('storeView');
	}
}























