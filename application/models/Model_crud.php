<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_crud extends CI_Model{
	public function hapus($id){
		$this->db->delete('produk',array('id'=>$id));
	}
	public function tambah($data){
		return $this->db->insert('produk', $data);
	}
	public function edit($data, $id){
		return $this->db->update('produk', $data, array('id' => $id)); 
	}
}

?>