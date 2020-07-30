<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penimbangan extends CI_Controller {

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

		$data['content'] = "content/penimbangan/penimbangan";
		$data['title'] = "Penimbangan - Posyandu";
		$data['bayi'] = $this->M_model->showBayi();
		$this->load->view('home', $data);
	}

	public function penimbangan_bayi($id)
	{
		if($this->session->userdata('username') == "") {
			redirect('Login','refresh');
		}

		if($this->input->post('simpan')) {
			$berat = $this->input->post('berat');
			$tinggi = $this->input->post('tinggi');
			$tanggal = date('Y-m-d');
			$obj = array(
				"id_bayi" => $id,
				"berat_bayi" => $berat,
				"tinggi_bayi" => $tinggi,
				"tanggal" => $tanggal
			);
			$this->M_model->insertPenimbangan($obj);
			redirect('Penimbangan/penimbangan_bayi/'.$id,'refresh');
		} else {
			$data['content'] = "content/penimbangan/penimbangan_bayi";
			$res = $this->M_model->getBayi($id);
			$data['title'] = "Data Penimbangan ".$res->nama_bayi." - Posyandu";
			$data['bayi'] = $this->M_model->getBayi($id);
			$data['penimbangan'] = $this->M_model->showPenimbangan($id)->result_object();
			$this->load->view('home', $data);
		}
	}

	public function edit_penimbangan($id) {
		if($this->session->userdata('username') == "") {
			redirect('Login','refresh');
		}

		if($this->input->post('edit')) {
			$id_bayi = $this->input->post("id");
			$berat = $this->input->post('berat');
			$tinggi = $this->input->post('tinggi');
			$obj = array(
				"berat_bayi" => $berat,
				"tinggi_bayi" => $tinggi
			);
			$this->db->where('id_penimbangan', $id);
			$this->M_model->updatePenimbangan($obj);
			redirect('Penimbangan/penimbangan_bayi/'.$id,'refresh');
		}
	}

	public function penimbangan_grafik($id) {
		if($this->session->userdata('username') == "") {
			redirect('Login','refresh');
		}

		$data['content'] = 'content/penimbangan/grafik_berat';
		$res = $this->M_model->getBayi($id);
		$data['title'] = "Data Penimbangan ".$res->nama_bayi." - Posyandu";
		$data['bayi'] = $this->M_model->getBayi($id);
		$data['penimbangan'] = $this->M_model->showPenimbangan($id)->result_object();
		$this->load->view('home', $data);
	}

	public function grafik_tinggibadan($id) {
		if($this->session->userdata('username') == "") {
			redirect('Login','refresh');
		}

		$data['content'] = 'content/penimbangan/grafik_tinggi';
		$res = $this->M_model->getBayi($id);
		$data['title'] = "Data Penimbangan ".$res->nama_bayi." - Posyandu";
		$data['bayi'] = $this->M_model->getBayi($id);
		$data['penimbangan'] = $this->M_model->showPenimbangan($id)->result_object();
		$this->load->view('home', $data);
	}
	
	public function imunisasi_bayi($id) {
		if($this->session->userdata('username') == "") {
			redirect('Login','refresh');
		}

		if($this->input->post('simpan')) {
			$imunisasi = $this->input->post('imunisasi');
			$tanggal = date('Y-m-d');
			$obj = array(
				'id_bayi' => $id,
				'tanggal' => $tanggal,
				'nama_imunisasi' => $imunisasi,
			);
			$this->M_model->insertImunisasi($obj);
			redirect('Penimbangan/imunisasi_bayi/'.$id,'refresh');
		} else {
			$data['content'] = "content/imunisasi/imunisasi";
			$res = $this->M_model->getBayi($id);
			$data['title'] = "Imunisasi ".$res->nama_bayi." - Posyandu";
			$data['bayi'] = $this->M_model->getBayi($id);
			$data['imunisasi'] = $this->M_model->showImunisasi($id)->result_object();
			$this->load->view('home', $data);
		}
	}

	public function edit_imunisasi($id){
		if($this->session->userdata('username') == "") {
			redirect('Login','refresh');
		}
		
		if($this->input->post('edit')) {
			$id_bayi = $this->input->post("id");
			$jimunisasi = $this->input->post('jimunisasi');
			$obj = array(
				"nama_imunisasi" => $jimunisasi
			);
			$this->db->where('id_imunisasi', $id);
			$this->M_model->updateImunisasi($obj);
			redirect('Penimbangan/imunisasi_bayi/'.$id_bayi,'refresh');
		}
	}
	
}

/* End of file Penimbangan.php */
/* Location: ./application/controllers/Penimbangan.php */