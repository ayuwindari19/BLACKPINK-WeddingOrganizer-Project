<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	private $_table = "users";

	public $user_id;
	public $username;
	public $password;
	public $nama;
	public $level;

	public function rules()
	{
		
	}
}