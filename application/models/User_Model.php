<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends MY_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	protected function validate_login( $email, $password ) {

	}
}