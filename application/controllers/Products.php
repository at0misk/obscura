<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}

	public function loadProduct()
	{
		$this->load-view('productView', $productID);
	}
}






















