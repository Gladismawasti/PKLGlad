<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		
	}

		public function data_unitkerja() {

			return $this->db->query('SELECT * FROM tbl_unitkerja ORDER BY nama_unitkerja ASC');
		}
		public function tampil_datappk() {
			
			return $this->db->query("SELECT * FROM pendaftaran where jenis_permohonan='PPK'");
		}
		public function tampil_datappk_2017() {
			
			return $this->db->query("SELECT * FROM pendaftaran where jenis_permohonan='PPK' AND Tahun='2017'");
		}
		public function tampil_datappk_2018() {
			
			return $this->db->query("SELECT * FROM pendaftaran where jenis_permohonan='PPK' AND Tahun='2018'");
		}

		public function tampil_datapa() {
			
			return $this->db->query("SELECT * FROM pendaftaran where jenis_permohonan='PA'");
		}
		public function tampil_datapa_2017() {
			
			return $this->db->query("SELECT * FROM pendaftaran where jenis_permohonan='PA' AND Tahun='2017'");
		}
		public function tampil_datapa_2018() {
			
			return $this->db->query("SELECT * FROM pendaftaran where jenis_permohonan='PA' AND Tahun='2018'");
		}
		public function tampil_datappb() {
			
			return $this->db->query("SELECT * FROM pendaftaran where jenis_permohonan='PPB'");
		}
		public function tampil_datappb_2017() {
			
			return $this->db->query("SELECT * FROM pendaftaran where jenis_permohonan='PPB' AND Tahun='2017'");
		}
		public function tampil_datappb_2018() {
			
			return $this->db->query("SELECT * FROM pendaftaran where jenis_permohonan='PPB' AND Tahun='2018'");
		}
		public function tampil_datapanitiapokja() {
			
			return $this->db->query("SELECT * FROM pendaftaran where jenis_permohonan='Panitia Pokja'");
		}
		public function tampil_datapanitiapokja_2017() {
			
			return $this->db->query("SELECT * FROM pendaftaran where jenis_permohonan='Panitia Pokja' AND Tahun='2017'");
		
		}
		public function tampil_datapanitiapokja_2018() {
			
			return $this->db->query("SELECT * FROM pendaftaran where jenis_permohonan='Panitia Pokja' AND Tahun='2018'");
		}
		public function tampil_dataadminpa() {
			
			return $this->db->query("SELECT * FROM pendaftaran where jenis_permohonan='Admin PA'");
		}
		public function tampil_dataadminwebsite() {
			
			return $this->db->query("SELECT * FROM pendaftaran where jenis_permohonan='Admin Website'");
		}
		public function tampil_dataadminwebsite_2017() {
			
			return $this->db->query("SELECT * FROM pendaftaran where jenis_permohonan='Admin Website' AND Tahun='2017'");
		}
		public function tampil_dataadminwebsite_2018() {
			
			return $this->db->query("SELECT * FROM pendaftaran where jenis_permohonan='Admin Website' AND Tahun='2018'");
		}
		public function hapus_by_id($id) {
			$this->db->where('id_unitkerja', $id)->delete('tbl_unitkerja');

		}
		public function edit_by_id($id) {
			$this->db->where('id_unitkerja', $id)->delete('tbl_unitkerja');

		}
		public function edit_pa($id) {
			$this->db->where('id_pendaftaran', $id)->edit('pendaftaran');

		}

		public function hapus_pa($id) {
			$this->db->where('id_pendaftaran', $id)->delete('pendaftaran');

		}



		public function tambah_data()
		{
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

		public function tambah_unit_kerja()
		{
			$a = $this->input->post('nama_unitkerja');
			$object['nama_unitkerja'] = $a;
			return $this->db->insert('tbl_unitkerja', $object);
		}

		public function hapus()
		{
			$a = $this->hapus->post('nama_unitkerja');
			$object['nama_unitkerja'] = $a;
			return $this->db->insert('tbl_unitkerja', $object);
		}
		public function edit()
		{
			$a = $this->edit->post('nama_unitkerja');
			$object['nama_unitkerja'] = $a;
			return $this->db->insert('tbl_unitkerja', $object);
		}

		public function data_login($username, $password)
		{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('admin')->row();
		}

		public function login($username, $password)
		{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('admin');
		return $query->num_rows();

		}
}	

/* End of file model_admin.php */
/* Location: ./application/models/model_admin.php */