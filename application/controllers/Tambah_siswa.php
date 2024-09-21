<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_siswa extends CI_Controller {

	
public function index()
 {
		$this->load->view('tambah_siswa');
 }
	public function tambah()
	{
		//mengambil semua data dari tabel siswa
		$this->load->view('Siswa_model');

		$data['siswa'] = $this->Siswa_model->tambahSiswa();

		redirect('admin');

	}
}
