<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->helper(array('Cookie', 'String'));
	}

	/*
	* function untuk tampilkan haalaman all category
	*/
	function allCategory()
	{
		$this->load->view('statis/header');
		$this->load->view('statis/menux');
		$this->load->view('admin/all-category');
		$this->load->view('statis/footerx');
	}

	function category(){
		if ($this->input->get('q')== '') {
			redirect('semua-kategori');
		}
		$record['participants'] = $this->model->read('participants',array("cabor_induk"=>$this->input->get('q')));
		if ($record['participants']->num_rows() != 0) {
			$record['participants'] = $record['participants']->result();
		}else{
			$record['participants'] = array();
		}
		$this->load->view('statis/header');
		$this->load->view('statis/menux');
		$this->load->view('admin/category',$record);
		$this->load->view('statis/footerx');
	}

	/*
	* function untuk eksekusi tombol hapus
	*/
	function hapusParticipant($origin,$id)
	{
		$delete = $this->model->delete("participants",array("id"=>$id));
		if ($delete)
			alert('category','success','Berhasil!','Data berhasil dihapus');
		else
			alert('category','danger','Gagal!','Data gagal dihapus');
		redirect('kategori/?q='.$origin);
	}

	/*
	* function untuk render halaman edit
	*/
	function editParticipant($id)
	{
		$record['participants'] = $this->model->read('participants',array('id'=>$id));
		if ($record['participants']->num_rows() != 0) {
			$record['participants'] = $record['participants']->result();
		}else{
			$record['participants'] = array();
		}
		$this->load->view('statis/header');
		$this->load->view('statis/menux');
		$this->load->view('admin/edit',$record);
		$this->load->view('statis/footerx');	
	}

	/*
	* cari nama cabor via ajax
	*/
	function getCabor()
	{
		if ($this->input->get() != NULL) {
			$dataForm = $this->input->get();
			$dataReturn = $this->model->rawQuery("SELECT cabor FROM master WHERE cabor LIKE '%".$dataForm['term']['term']."%' LIMIT 1")->result();
			$data = array();
			foreach ($dataReturn as $key => $value) {
				$data[$key]['id'] = $value->cabor;
				$data[$key]['text'] = $value->cabor;
			}
			echo json_encode($data);
		}else{
			redirect(base_url());
		}
	}

	/*
	* function untuk handle form edit participants
	*/
	function submitEdit()
	{
		$dataForm['nama'] 			= $this->input->post('nama');
		$dataForm['alamat'] 		= $this->input->post('alamat');
		$dataForm['tempat_lahir'] 	= $this->input->post('tempat_lahir');
		$dataForm['tanggal_lahir'] 	= $this->input->post('tanggal_lahir');
		$dataForm['email'] 			= $this->input->post('email');
		$dataForm['no_tlp'] 		= $this->input->post('no_tlp');
		$dataForm['kecamatan'] 		= $this->input->post('kecamatan');
		$cabor						= $this->input->post('cabor');
				
		// ekstrak string dengan delimiter koma, dan masuk ke array cabor_
		$cabor_ = explode(",",$cabor);

		// masukkan ke queryInsert
		if (sizeof($cabor_) == 4) {
			$dataForm['cabor_induk'] = $cabor_[0];
			$dataForm['cabor_jenis'] = $cabor_[1];
			$dataForm['cabor_kelas'] = $cabor_[2];
			$dataForm['cabor_keterangan'] = $cabor_[3];
		}elseif (sizeof($cabor_) == 3) {
			$dataForm['cabor_induk'] = $cabor_[0];
			$dataForm['cabor_jenis'] = $cabor_[1];
			$dataForm['cabor_kelas'] = $cabor_[2];
		}elseif (sizeof($cabor_) == 2) {
			$dataForm['cabor_induk'] = $cabor_[0];
			$dataForm['cabor_kelas'] = $cabor_[1];
		}elseif (sizeof($cabor_) == 1) {
			$dataForm['cabor_induk'] = $cabor_[0];
		}

		// cek jika ada pilihan cabang ke dua
		if ($this->input->post('cabor2') !== '') {
			$cabor2 = $this->input->post('cabor2');
			$cabor2_ = explode(",",$cabor2);
			if (sizeof($cabor2_) == 4) {
				$dataForm['cabor2_jenis'] = $cabor2_[1];
				$dataForm['cabor2_kelas'] = $cabor2_[2];
				$dataForm['cabor2_keterangan'] = $cabor2_[3];
			}elseif (sizeof($cabor2_) == 3) {
				$dataForm['cabor2_jenis'] = $cabor2_[1];
				$dataForm['cabor2_kelas'] = $cabor2_[2];
			}elseif (sizeof($cabor2_) == 2) {
				$dataForm['cabor2_kelas'] = $cabor2_[1];
			}
		}
			
		$queryUpdate = $this->model->update('participants',array('id' => $this->input->post('id')), $dataForm);
		redirect('kategori/?q='.$dataForm['cabor_induk']);
	}
}