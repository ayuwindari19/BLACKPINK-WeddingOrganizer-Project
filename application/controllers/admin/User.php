<?php

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("user_model");
		$this->load->library("form_validation");
	}

	public function index()
	{
		$this->load->view("admin/account/register");
	}
}