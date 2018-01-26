<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categori_model extends CI_Model {

	public function view_all_categori() {
		$this->db->select('*');
		return $this->db->get('tbl_kategori');
	}

	public function add_categori($table, $data) {
		$this->db->insert($table, $data);
	}

	public function edit_categori($table, $key_kode, $data) {
		$this->db->where('kode_kategori', $key_kode);
		$this->db->update($table, $data);
	}

	public function delete_categori($table, $key_kode, $data) {
		$this->db->where('kode_kategori', $key_kode);
		$this->db->delete($data);
	}	
	

}

/* End of file Categori_model.php */
/* Location: ./application/models/Categori_model.php */