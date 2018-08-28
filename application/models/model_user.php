<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function add_form_pendaftaran() {
		$this->load->model('Model_upload');

			$a = $this->input->post('nama');
			$b = $this->input->post('nip');
			$c = $this->input->post('unit_kerja');
			$d = $this->input->post('alamat');
			$f = $this->input->post('no_hp');
			$g = $this->input->post('pangkat');
			$h = $this->input->post('golongan');
			$i = $this->input->post('jabatan');
			$j = $this->input->post('email');
			$k = $this->input->post('jenis_permohonan');

			$Tahun = $this->input->post('Tahun');

			$object['nama'] = $a;
			$object['nip'] = $b;
			$object['unit_kerja'] = $c;
			$object['alamat'] = $d;
			$object['no_hp'] = $f;
			$object['pangkat'] = $g;
			$object['golongan'] = $h;
			$object['jabatan'] = $i;
			$object['email'] = $j;
			$object['jenis_permohonan'] = $k;
			$object['surat_permohonan'] = $this->Model_upload->uploadGambar("surat_permohonan","permohonan");
			$object['sk_pengangkatan'] = $this->Model_upload->uploadGambar("sk_pengangkatan","pengangkatan");
			$object['sertifikat_pengadaan'] = $this->Model_upload->uploadGambar("sertifikat_pengadaan","pengadaan");
			$object['Tahun'] = $Tahun;
			return $this->db->insert('pendaftaran', $object);

	}

}

/* End of file model_user.php */
/* Location: ./application/models/model_user.php */