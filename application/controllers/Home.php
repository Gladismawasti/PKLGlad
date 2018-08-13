<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['content'] ='main/main';
		$this->load->view('/main/home', $data);
	}

	public function profile()
	{
		$data['content'] ='main/profile';
		$this->load->view('/main/home', $data);
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */