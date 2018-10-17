<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->helper(array('Cookie', 'String'));
	}

	/*
	* function untuk tampilkan haalaman register
	*/
	function registrasi()
	{
		if ($this->input->post() != array()) {
			// ambillin input data dari form
			$this->form_validation->set_rules('nama','Nama','trim|required');
			$this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[participants.email]');
			$this->form_validation->set_rules('no_tlp','Nomor Telepon','trim|required|numeric');
			if ($this->form_validation->run()==TRUE) {
				$queryInsert['nama'] 					= ucwords($this->input->post('nama'));
				$queryInsert['tempat_lahir'] 			= ucwords($this->input->post('tempat_lahir'));
				$queryInsert['tanggal_lahir']			= $this->input->post('tanggal_lahir');
				$queryInsert['alamat'] 					= ucwords($this->input->post('alamat'));
				$queryInsert['email'] 					= $this->input->post('email');
				$queryInsert['no_tlp'] 					= $this->input->post('no_tlp');
				$queryInsert['kecamatan'] 				= $this->input->post('kecamatan');
				$cabor 									= $this->input->post('cabor');
				
				// ekstrak string dengan delimiter koma, dan masuk ke array cabor_
				$cabor_ = explode(",",$cabor);

				// masukkan ke queryInsert
				$queryInsert['cabor_induk'] = $cabor_[0];
				if (sizeof($cabor_) == 4) {
					if ($cabor_[1] !== 'NULL') {
						$queryInsert['cabor_jenis'] = $cabor_[1];
					}
					if ($cabor_[2] !== 'NULL') {
						$queryInsert['cabor_kelas'] = $cabor_[2];
					}
					if ($cabor_[3] !== 'NULL') {
						$queryInsert['cabor_keterangan'] = $cabor_[3];
					}
				}elseif (sizeof($cabor_) == 3) {
					if ($cabor_[1] !== 'NULL') {
						$queryInsert['cabor_jenis'] = $cabor_[1];
					}
					if ($cabor_[2] !== 'NULL') {
						$queryInsert['cabor_kelas'] = $cabor_[2];
					}
				}elseif (sizeof($cabor_) == 2) {
					$queryInsert['cabor_kelas'] = $cabor_[1];
				}

				// cek jika ada pilihan cabang ke dua
				if ($this->input->post('cabor2') !== '') {
					$cabor2 = $this->input->post('cabor2');
					$cabor2_ = explode(",",$cabor2);
					$queryInsert['cabor_induk'] = $cabor_[0];
					if (sizeof($cabor2_) == 4) {
						if ($cabor2_[1] !== 'NULL') {
							$queryInsert['cabor_jenis'] = $cabor2_[1];
						}
						if ($cabor2_[2] !== 'NULL') {
							$queryInsert['cabor_kelas'] = $cabor2_[2];
						}
						if ($cabor2_[3] !== 'NULL') {
							$queryInsert['cabor_keterangan'] = $cabor2_[3];
						}
					}elseif (sizeof($cabor2_) == 3) {
						if ($cabor2_[1] !== 'NULL') {
							$queryInsert['cabor_jenis'] = $cabor2_[1];
						}
						if ($cabor2_[2] !== 'NULL') {
							$queryInsert['cabor_kelas'] = $cabor2_[2];
						}
					}elseif (sizeof($cabor2_) == 2) {
						$queryInsert['cabor_kelas'] = $cabor2_[1];
					}
				}

				// echo "<pre>";
				// var_dump($queryInsert);
				// die();

				$insertNow = $this->model->create('participants',$queryInsert);
				$insertNow = json_decode($insertNow);
				if ($insertNow->status) {
					$register = "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button> Anda berhasil terdaftar pada sistem</div>";
						$this->session->set_flashdata('registrasi', $register);
				}else{
					if ($insertNow->error_message->code == 1062) {
						$register = "<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button> ".$insertNow->error_message->message."</div>";
						$this->session->set_flashdata('registrasi', $register);
					}
				}
			}else{
					$register = validation_errors("<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>",
						'</div>');
					$this->session->set_flashdata('registrasi', $register);
				}
		}
		$record['cabor'] = $this->model->rawQuery("SELECT DISTINCT cabor FROM master")->result();
		$this->load->view('statis/header');
		$this->load->view('statis/menux');
		$this->load->view('auth/registrasi',$record);
		$this->load->view('statis/footerx');
	}


	/*
	* function untuk tampilkan haalaman login
	*/
	function login()
	{
		$this->load->view('statis/header');
		$this->load->view('statis/menux');
		$this->load->view('auth/login');
		$this->load->view('statis/footer');
	}

	function submitLogin()
	{
		$record = $this->model->read('users',array('username'=>$this->input->post('username'),'password'=>md5($this->input->post('password'))));
		if ($record->num_rows() == 1) {
			$newdata = array(
				'username'     				=> $recordPengguna[0]->username,
			);
			$this->session->set_userdata('loginSession',$newdata);
			redirect('semua-kategori');
		}else{
			redirect();
		}
	}

	function logout()
	{
		$this->session->unset_userdata('loginSession',$newdata);
		redirect();
	}


}