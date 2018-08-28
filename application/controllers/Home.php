<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['content'] ='main/main';
		$this->load->view('/main/home', $data);
	}

	public function beranda()
	{
		$data['content'] ='main/beranda';
		$this->load->view('/main/home', $data);
	}

	public function profile()
	{
		$data['content'] ='main/profile';
		$this->load->view('/main/home', $data);
	}

	public function about()
	{
		$data['content'] ='main/about';
		$this->load->view('/main/home', $data);
	}

	public function tambah_permohonan()
	{
		if($this->input->post('submit'))
		{
			$query= $this->model_user->add_form_pendaftaran();
			if($query)
			{
				{
					$this->session->set_flashdata('alert', 'Data Berhasil Ditambahkan!');
					redirect('Home/');
				}
			} else {
				{
					$this->session->set_flashdata('alert1', 'Gagal Ditambahkan!');
					redirect('Home/');
				}
			}
		}
		$this->load->view('head');
		$data['data'] = $this->model_user->data_unitkerja()->result_object();
		$this->load->view('tambah_permohonan',$data);
		$this->load->view('foot');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */