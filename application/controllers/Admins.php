<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admins extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		$this->load->view('adminLogin');
	}
	public function dashboard(){
		$this->load->library("form_validation");
	    $this->form_validation->set_rules("email", "Email", "trim|required");
		$this->form_validation->set_rules("password", "Password", "trim|required");
	    if($this->form_validation->run() === FALSE){
		    $this->session->set_userdata('errorsA', validation_errors());
		    redirect('admin');
		}
		else{
		$this->load->model('Admin');
		$admin = $this->input->post();
		$this->session->set_userdata('current', $this->Admin->getAdmin($admin['email']));
		if($admin['password'] == $this->session->userdata('current')['password']){
			$this->load->view('adminDashboard');
		}
		else{
			$this->session->set_userdata('errorsA', 'User or Password does not match');
			redirect('admin');
		}
		}
	}
	public function addEdit(){
		$this->load->view('addEditItem');
	}
}