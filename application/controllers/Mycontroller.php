<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class Mycontroller extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->model('model_admin');
	$this->load->helper('url','download');
	$this->load->library('session');

}
	public function index()
	{
		$this->load->view('head');
		$this->load->view('index');
		$this->load->view('foot');
	}

	public function flot()
	{
		$this->load->view('head');
		$this->load->view('flot');
		$this->load->view('foot');
	}
	public function morris()
	{
		$this->load->view('head');
		$this->load->view('morris');
		$this->load->view('foot');
	}
	public function forms()
	{
		$this->load->view('head');
		$this->load->view('forms');
		$this->load->view('foot');
	}
    public function grid()
	{
		$this->load->view('head');
		$this->load->view('grid');
		$this->load->view('foot');
	}	
	public function edit()
	{
		if($this->input->post('submit'))
		{
			$query= $this->model_admin->tambah_unit_kerja();
			if($query)
			{
				{
					$this->session->set_flashdata('alert', 'Data Berhasil Diedit!');
					redirect('mycontroller/tambahpermohonan');
				}
			} else {
				{
					$this->session->set_flashdata('alert1', 'Gagal Diedit!');
					redirect('mycontroller/tambahpermohonan');
				}
			}
		}
		$this->load->view('head');
		$data['data'] = $this->model_admin->edit()->result_object();
		$this->load->view('edit',$data);
		$this->load->view('foot');
	}	
	public function hapus()
	{
		if($this->input->post('submit'))
		{
			$query= $this->model_admin->tambah_unit_kerja();
			if($query)
			{
				{
					$this->session->set_flashdata('alert', 'Data Berhasil Dihapus!');
					redirect('mycontroller/tambahpermohonan');
				}
			} else {
				{
					$this->session->set_flashdata('alert1', 'Gagal Dihapus!');
					redirect('mycontroller/tambahpermohonan');
				}
			}
		}
		$this->load->view('head');
		$data['data'] = $this->model_admin->hapus()->result_object();
		$this->load->view('hapus',$data);
		$this->load->view('foot');
	}	
	public function icons()
	{
		$this->load->view('head');
		$this->load->view('icons');
		$this->load->view('foot');
	}	
	public function login()
	{
		$this->load->view('head');
		$this->load->view('login');
		$this->load->view('foot');
	}	
	public function notifications()
	{
		$this->load->view('head');
		$this->load->view('notifications');
		$this->load->view('foot');
	}	
	public function panelswells()
	{
		$this->load->view('head');
		$this->load->view('panels-wells');
		$this->load->view('foot');
	}	
	public function tables()
	{
		$this->load->view('head');
		$this->load->view('tables');
		$this->load->view('foot');
	}	
	public function typography()
	{
		$this->load->view('head');
		$this->load->view('typography');
		$this->load->view('foot');
	}	
	public function buttons()
	{
		$this->load->view('head');
		$this->load->view('buttons');
		$this->load->view('foot');
	}	
	public function blank()
	{
		$this->load->view('head');
		$this->load->view('blank');
		$this->load->view('foot');
	}
	public function tambahpanitipokja()
	{
		$this->load->view('head');
		$this->load->view('tambahpanitipokja');
		$this->load->view('foot');
	}	
	public function tambahpa()
	{
		$this->load->view('head');
		$this->load->view('tambahpa');
		$this->load->view('foot');
	}		
	public function tambahadminpa()
	{
		$this->load->view('head');
		$this->load->view('tambahadminpa');
		$this->load->view('foot');
	}	
	public function tambahpermohonan()
	{
		if($this->input->post('submit'))
		{
			$query= $this->model_admin->tambah_data();
			if($query)
			{
				{
					$this->session->set_flashdata('alert', 'Data Berhasil Ditambahkan!');
					redirect('mycontroller/tambahpermohonan');
				}
			} else {
				{
					$this->session->set_flashdata('alert1', 'Gagal Ditambahkan!');
					redirect('mycontroller/tambahpermohonan');
				}
			}
		}

		$this->load->view('head');
		$data['data'] = $this->model_admin->data_unitkerja()->result_object();
		$this->load->view('tambahpermohonan',$data);
		$this->load->view('foot');
	}
	public function hapusunitkerja($id) {
		$this->model_admin->hapus_by_id($id);
		redirect($_SERVER['HTTP_REFERER']);
	}
	public function editunitkerja($id) {
		$this->model_admin->edit_by_id($id);
		redirect($_SERVER['HTTP_REFERER']);
	}
	public function hapuspendaftaran($id) {
		$this->model_admin->hapus_pa($id);
		redirect($_SERVER['HTTP_REFERER']);
	}
	public function editpendaftaran($id) {
		$this->model_admin->edit_by_id($id);
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function tambahunitkerja()
	{
		if($this->input->post('submit'))
		{
			$query= $this->model_admin->tambah_unit_kerja();
			if($query)
			{
				{
					$this->session->set_flashdata('alert', 'Data Berhasil Ditambahkan!');
					redirect('mycontroller/tambahpermohonan');
				}
			} else {
				{
					$this->session->set_flashdata('alert1', 'Gagal Ditambahkan!');
					redirect('mycontroller/tambahpermohonan');
				}
			}
		}

		$this->load->view('head');
		$data['data'] = $this->model_admin->data_unitkerja()->result_object();
		$this->load->view('tambahunitkerja', $data);
		$this->load->view('foot');
	}
	
	public function tampil_data_ppk()
	{
		$this->load->view('head');
		$data['data'] = $this->model_admin->tampil_datappk()->result_object();
		$this->load->view('data_ppk',$data);
		$this->load->view('foot');
	}	
	public function tampil_data_ppk_2017()
	{
		$this->load->view('head');
		$data['data'] = $this->model_admin->tampil_datappk_2017()->result_object();
		$this->load->view('lap_ppk2017',$data);
		$this->load->view('foot');
	}
		public function tampil_data_ppk_2018()
	{
		$this->load->view('head');
		$data['data'] = $this->model_admin->tampil_datappk_2018()->result_object();
		$this->load->view('lap_ppk2018',$data);
		$this->load->view('foot');
	}
	public function tampil_data_pa()
	{
		$this->load->view('head');
		$data['data'] = $this->model_admin->tampil_datapa()->result_object();
		$this->load->view('data_pa',$data);
		$this->load->view('foot');
	}	
	public function tampil_data_pa_2017()
	{
		$this->load->view('head');
		$data['data'] = $this->model_admin->tampil_datapa_2017()->result_object();
		$this->load->view('lap_pa2017',$data);
		$this->load->view('foot');
	}
		public function tampil_data_pa_2018()
	{
		$this->load->view('head');
		$data['data'] = $this->model_admin->tampil_datapa_2018()->result_object();
		$this->load->view('lap_pa2018',$data);
		$this->load->view('foot');
	}
	public function tampil_data_ppb()
	{
		$this->load->view('head');
		$data['data'] = $this->model_admin->tampil_datappb()->result_object();
		$this->load->view('data_ppb',$data);
		$this->load->view('foot');
	}	
	public function tampil_data_ppb_2017()
	{
		$this->load->view('head');
		$data['data'] = $this->model_admin->tampil_datappb_2017()->result_object();
		$this->load->view('lap_ppb2017',$data);
		$this->load->view('foot');
	}
		public function tampil_data_ppb_2018()
	{
		$this->load->view('head');
		$data['data'] = $this->model_admin->tampil_datappb_2018()->result_object();
		$this->load->view('lap_ppb2018',$data);
		$this->load->view('foot');
	}
	public function tampil_data_panitiapokja()
	{
		$this->load->view('head');
		$data['data'] = $this->model_admin->tampil_datapanitiapokja()->result_object();
		$this->load->view('data_panitiapokja',$data);
		$this->load->view('foot');
	}	
	public function tampil_data_panitiapokja_2017()
	{
		$this->load->view('head');
		$data['data'] = $this->model_admin->tampil_datapanitiapokja_2017()->result_object();
		$this->load->view('lap_panitiapokja2017',$data);
		$this->load->view('foot');
	}	
	public function tampil_data_panitiapokja_2018()
	{
		$this->load->view('head');
		$data['data'] = $this->model_admin->tampil_datapanitiapokja_2018()->result_object();
		$this->load->view('lap_panitiapokja2018',$data);
		$this->load->view('foot');
	}	
	public function tampil_data_adminpa()
	{
		$this->load->view('head');
		$data['data'] = $this->model_admin->tampil_dataadminpa()->result_object();
		$this->load->view('data_adminpa',$data);
		$this->load->view('foot');
	}		
	public function tampil_data_adminwebsite()
	{
		$this->load->view('head');
		$data['data'] = $this->model_admin->tampil_dataadminwebsite()->result_object();
		$this->load->view('data_adminwebsite',$data);
		$this->load->view('foot');
	}
	public function tampil_data_adminwebsite_2017()
	{
		$this->load->view('head');
		$data['data'] = $this->model_admin->tampil_dataadminwebsite_2017()->result_object();
		$this->load->view('lap_2017',$data);
		$this->load->view('foot');
	}
		public function tampil_data_adminwebsite_2018()
	{
		$this->load->view('head');
		$data['data'] = $this->model_admin->tampil_dataadminwebsite_2018()->result_object();
		$this->load->view('lap_2018',$data);
		$this->load->view('foot');
	}

	public function send_email_view() {
		$this->load->view('head');
		$this->load->view('send_email');
		$this->load->view('foot');
	}

	public function send_email() {		
		require APPPATH . 'third_party\PHPMailer-master\src\PHPMailer.php';
		require APPPATH . 'third_party\PHPMailer-master\src\Exception.php';
		require APPPATH . 'third_party\PHPMailer-master\src\SMTP.php';
		$mail = new PHPMailer(true);                              // Passing `true` enables exceptions

		require_once(APPPATH . 'third_party\api_sms_class_reguler_json.php'); // class  

		ob_start();
		// setting 
		$apikey      = 'be74b84f330b301942881c9f4ba8e36a'; // api key 
		$ipserver    = 'http://45.32.118.255'; // url server sms 
		$callbackurl = 'http://localhost'; // url callback get status sms 

		// create header json  
		$senddata = array(
			'apikey' => $apikey,  
			'callbackurl' => $callbackurl, 
			'datapacket'=>array()
		);
		$this->load->model('model_historisms');
		if($this->input->post('to_hp')) 
			$tujuan=$this->input->post('to_hp');
		else
			$tujuan=$this->input->post('to');
		$this->model_historisms->insert(array('tujuan'=>$tujuan));



		if($this->input->post('to_hp')) {
			// create detail data json 
			// data 1
			$number1=$this->input->post('to_hp');
			$message1=$this->input->post('title') . "\n\n" . $this->input->post('body');
			$sendingdatetime1 =""; 
			array_push($senddata['datapacket'],array(
				'number' => trim($number1),
				'message' => urlencode(stripslashes(utf8_encode($message1))),
				'sendingdatetime' => $sendingdatetime1));

			// class sms 
			$sms = new sms_class_reguler_json();
			$sms->setIp($ipserver);
			$sms->setData($senddata);
			$responjson = $sms->send();
		}			

		if($this->input->post('to')) {
			try {
			    //Server settings
			    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
			    $mail->isSMTP();                                      // Set mailer to use SMTP
			    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			    $mail->SMTPAuth = true;                               // Enable SMTP authentication
			    $mail->Username = 'helpdesk.lpsepurbalingga@gmail.com';                 // SMTP username
			    $mail->Password = '98o21o3rlasdf9i';                           // SMTP password
			    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			    $mail->Port = 587;                                    // TCP port to connect to

			    //Recipients
			    $mail->setFrom('helpdesk.lpsepurbalingga@gmail.com', 'LPSE Purbalingga');
			    $mail->addAddress($this->input->post('to'), $this->input->post('to'));     // Add a recipient

			    //Content
			    $mail->isHTML(true);                                  // Set email format to HTML
			    $mail->Subject = $this->input->post('title');
			    $body = $this->input->post('body') . "\n\n\n" . '[' . date('Y:m:d H:i:s') . ']';
			    $mail->Body    = str_replace("\n", '<br />', $body);

			    $mail->send();
			    echo 'Message has been sent';
			} catch (Exception $e) {
			    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
			}
		}

		redirect($_SERVER['HTTP_REFERER']);
	}
}



