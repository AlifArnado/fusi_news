<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontpage extends CI_Controller {

	public function index()
	{
		$this->load->view('frontpage/page/home_index_view');		
	}

	public function home_default() {
		$this->load->view('frontpage/page/home_default_view');
	}

}

/* End of file Frontpage.php */
/* Location: ./application/controllers/Frontpage.php */