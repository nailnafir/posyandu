<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_model');
	}

	public function index()
	{
		if($this->session->userdata('username') == "") {
			redirect('Login','refresh');
		}

		$data['content'] = 'content/dashboard';
		$data['title'] = "Dashboard - Posyandu";
		$data['count'] = $this->M_model->countBayi();
		$this->load->view('home', $data);
	}
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */