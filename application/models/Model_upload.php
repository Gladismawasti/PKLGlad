<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_upload extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	 /* olah file */
        function uploadGambar($nama_file='',$folder='') {
            $this->pathgambar= realpath(APPPATH . "../$folder");

            $config = array(
		'allowed_types' => 'jpg|png|gif|jpeg|pdf|doc|docx|ppt|pptx',
                'upload_path' => $this->pathgambar
            );
            
            $this->load->library('upload', $config);
            $this->upload->do_upload($nama_file);
            $file_data = $this->upload->data();
            $nama_file = $file_data['file_name'];

            return $nama_file;
        }

        function namaGambar($tabel='',$where='',$id = ''){
            $data = array();
            $this->db->select("*");
            $this->db->from($tabel);
            $this->db->where($where,$id);
            $hasil = $this->db->get();
            if($hasil->num_rows() > 0){
                return $hasil->row_array();
            }
        } 

        function deleteGambar($namagambar='',$folder=''){
            $this->pathgambar = realpath(APPPATH . "../$folder");
            unlink($this->pathgambar."/".$namagambar);
        }

       
        /* end olah file */

	

}

/* End of file Model_upload.php */
/* Location: ./application/models/Model_upload.php */