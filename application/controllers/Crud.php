<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller{
	public function tambah(){
		$this->load->view('tambah');
	}
	public function proses_tambah(){
		$nama = $this->input->post('nama');
		$ket = $this->input->post('keterangan');
		$harga = $this->input->post('harga');
		$jumlah = $this->input->post('jumlah');

		$data = array(
				'id'			=>	'',
				'nama_produk'	=>	$nama,
				'keterangan'	=>	$ket,
				'harga'			=>	$harga,
				'jumlah'		=>	$jumlah,
			);
		$this->model_crud->tambah($data);
		redirect(base_url(''));
	}
	public function edit(){
		$this->load->view('edit');
	}
	public function proses_edit(){
		$id = $this->input->get('id');
			$data = array(
				'nama_produk'	=>	$this->input->post('nama'),
				'keterangan'	=>	$this->input->post('keterangan'),
				'harga'			=>	$this->input->post('harga'),
				'jumlah'		=>	$this->input->post('jumlah'),
			);
		$this->model_crud->edit($data, $id);
		redirect('');
	}
	public function hapus(){
		$id = $this->input->get('id');
		$this->model_crud->hapus($id);
		redirect(base_url(''));
	}
}
 ?>
