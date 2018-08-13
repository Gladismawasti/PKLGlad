<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged') == 1) {
            redirect('mycontroller');
        }
		$this->load->library('session');
		$this->load->model('model_admin');
	}

	public function index()
	{
		$this->load->view('/login/login.php');
	}

	public function auth ()
	{
		$login = $this->model_admin->login($this->input->post('username'), md5($this->input->post('password')));
		if($login == 1)
		{
			$row =  $this->model_admin->data_login($this->input->post('username'), md5($this->input->post('password')));
			$data = array(
			'logged' => TRUE,
			'username' => $row->username
			);
			$this->session->set_userdata($data);
			redirect('mycontroller');
		} else{
			$error = $this->session->set_flashdata('alert', 'Gagal Login !');
			$this->index($error);
		}
	}
	public function logout()
	{	
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('password');
		$this->session->sess_destroy();
		redirect('login');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */