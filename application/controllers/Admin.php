<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{

		$this->load->model('Siswa_model') ;
		$data['tb_siswa'] = $this->Siswa_model->getSiswa() ;

		$this->load->view('Templates/header');
		$this->load->view('admin' , $data);
		$this->load->view('Templates/footer');
	}

	public function hapus($nis) {
		$this->db->delete('tb_siswa', ['nis'=> $nis]);
		redirect('admin');
	}

	public function edit($nis)
	{
		$this->load->model('siswa_model');
		$data['edit'] = $this->siswa_model->getSiswaByNis($nis);
		$data['alamat'] = ['Batang', 'Pekalongan', 'Pemalang', 'Tegal'];

		$this->load->view('Templates/header');
		$this->load->view('edit_siswa');
		$this->load->view('Templates/footer');
	}

	public function update()
	{
		$data =
		[
			"nama" => $this->input->post('nama_siswa', true),
			"alamat" => $this->input->post('alamat_siswa', true),
			"no_telp" => $this->input->post('no_telp', true)
		];
		
		$this->db->where('nis', $this->input->post('nis'));
		$this->db->update('tb_siswa', $data);
		redirect('admin');
	}
}