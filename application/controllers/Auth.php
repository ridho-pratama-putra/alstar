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
		$this->load->view('statis/header');
		$this->load->view('statis/menux');
		$this->load->view('auth/registrasi');
		$this->load->view('statis/footerx');
	}

	/*
	* function untuk handle form registrasi
	*/
	function registrasiProses()
	{
		// ambillin input data dari form
		$queryInsert['nama'] 					= ucwords($this->input->post('nama'));
		$queryInsert['tempat_tanggal_lahir'] 	= ucwords($this->input->post('tempat_lahir')).", ".$this->input->post('tanggal_lahir');
		$queryInsert['alamat'] 					= ucwords($this->input->post('alamat'));
		$queryInsert['email'] 					= $this->input->post('email');
		$queryInsert['no_tlp'] 					= $this->input->post('no_tlp');
		$queryInsert['kecamatan'] 				= $this->input->post('kecamatan');
		$cabor 									= $this->input->post('cabor');
		
		// ekstrak string dengan delimiter koma, dan masuk ke array cabor_
		$cabor_ = explode(", ",$cabor);

		// masukkan ke queryInsert
		if (sizeof($cabor_) > 2) {
			$queryInsert['cabor_induk'] = $cabor_[0];
			$queryInsert['cabor_kelas'] = $cabor_[1];
			$queryInsert['cabor_keterangan'] = $cabor_[2];
		}elseif (sizeof($cabor_) == 2) {
			$queryInsert['cabor_induk'] = $cabor_[0];
			$queryInsert['cabor_kelas'] = $cabor_[1];
		}

		// cek jika ada pilihan cabang ke dua
		if ($this->input->post('cabor2') !== '') {
			$cabor2 = $this->input->post('cabor2');
			$cabor2_ = explode(", ",$cabor2);
			if (sizeof($cabor2_) > 2) {
				$queryInsert['cabor2_kelas'] = $cabor2_[1];
				$queryInsert['cabor2_keterangan'] = $cabor2_[2];
			}elseif (sizeof($cabor2_) == 2) {
				$queryInsert['cabor2_kelas'] = $cabor2_[1];
			}
		}

		$insertNow = $this->model->create('participants',$queryInsert);
		$insertNow = json_decode($insertNow);
		if ($insertNow->status) {
			redirect();
		}else{
			echo "<pre>";
			var_dump($queryInsert);
			var_dump($insertNow->message);
		}
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


}