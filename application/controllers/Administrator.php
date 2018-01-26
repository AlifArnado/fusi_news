<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

	public function index()
	{
		
		$this->load->view('adminpage/page/home_index_view');
	}

	public function view_all_post() {
		$this->load->view('adminpage/page/data_post_view');
	}

	public function input_new_post() {
		$this->load->model('Categori_model');
		$m_categori = new Categori_model();
		$data['data_categori'] = $m_categori->view_all_categori()->result();
		$this->load->view('adminpage/page/input_new_post_view', $data);
	}

	public function input_new_categories_post() {
		$this->load->model('Categori_model');
		$m_categori = new Categori_model();
		$data['data_categori'] = $m_categori->view_all_categori()->result();

		$this->load->view('adminpage/page/input_new_categories_view', $data);
	}

	public function input_tags_view() {
		$this->load->view('adminpage/page/input_tags_view');
	}

	public function home_default() {
		$this->load->view('adminpage/page/home_default_view');
	}

	public function action_insert_new_post() {

	}

	public function action_update_post() {

	}

	public function action_delete_post() {

	}

	public function action_insert_categories() {

	}

	public function action_edit_categories() {

	}

	public function action_delete_categories() {

	}
	

}

/* End of file Administrator.php */
/* Location: ./application/controllers/Administrator.php */