<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function login () {
		return $this->db->query('SELECT * FROM admin');
	}

}

/* End of file Model_login.php */
/* Location: ./application/models/Model_login.php */