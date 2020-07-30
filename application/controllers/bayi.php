<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Bayi extends CI_Controller {

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

		$data['bayi'] = $this->M_model->showBayi();
		$data['content'] = 'content/bayi/bayi';
		$data['title'] = "Data Balita/Bayi - Posyandu";
		$this->load->view('home', $data);
	}

	public function tambah_data_bayi()
	{
		if($this->session->userdata('username') == "") {
			redirect('Login','refresh');
		}

		if($this->input->post('simpan')) 
		{
			$this->form_validation->set_message('required', 'Tidak Boleh Kosong');
			$this->form_validation->set_rules('nama', 'Nama Bayi', 'trim|required|alpha_numeric_spaces');
			$this->form_validation->set_rules('tanggal', 'Tanggal Lahir', 'trim|required');
			$this->form_validation->set_rules('jkelamin', 'Jenis Kelamin', 'trim|required');
			$this->form_validation->set_rules('ayah', 'Nama Ayah', 'trim|required|alpha_numeric_spaces');
			$this->form_validation->set_rules('ibu', 'Nama ibu', 'trim|required|alpha_numeric_spaces');
			$this->form_validation->set_rules('nik', 'NIK ibu', 'trim|required|numeric');
			if ($this->form_validation->run() == FALSE)
			{
				$data['content'] = 'content/bayi/tambah_bayi';
				$data['title'] = "Tambah Data Balita/Bayi - Posyandu";
				$this->load->view('home', $data);			
			}
			else
			{
				$config['upload_path'] = './assets/foto';
				$config['allowed_types'] = 'jpg|png';
				$config['max_size'] = '4096';

				$this->load->library('upload', $config);
				if($this->upload->do_upload('foto'))
				{
					$file = array('upload_data' => $this->upload->data());

					$nama = $this->input->post('nama');
					$tl = $this->input->post('tanggal');
					$jkelamin = $this->input->post('jkelamin');
					$ayah = $this->input->post('ayah');
					$ibu = $this->input->post('ibu');
					$nik = $this->input->post('nik');
					$image = $file['upload_data']['file_name'];
					$obj = array(
						'nama_bayi' => $nama,
						'tanggal_lahir' => $tl,
						'jenis_kelamin' => $jkelamin,
						'nama_ayah' => $ayah,
						'nama_ibu' => $ibu,
						'NIK_ibu' => $nik,
						'foto_bayi' => $image,
					);
					$this->M_model->insertBayi($obj);
					$this->session->set_flashdata('alert',"Berhasil Disimpan");
					redirect('Bayi','refresh');
				}
			}
		}
		else 
		{
			$data['content'] = 'content/bayi/tambah_bayi';
			$data['title'] = "Tambah Data Balita/Bayi - Posyandu";
			$this->load->view('home', $data);
		}
	}

	public function detail_bayi($id)
	{
		if($this->session->userdata('username') == "") {
			redirect('Login','refresh');
		}

		$res = $this->M_model->getBayi($id);
		$data['content'] = 'content/bayi/detail_bayi';
		$data['title'] = "Detail ".$res->nama_bayi." - Posyandu";
		$data['bayi'] = $this->M_model->getBayi($id);
		$this->load->view('home', $data);
	}

	public function edit_data_bayi($id)
	{
		if($this->session->userdata('username') == "") {
			redirect('Login','refresh');
		}

		if($this->input->post('simpan'))
		{
			if(empty($_FILES['foto']['name'])) 
			{
				$this->form_validation->set_message('required', 'Tidak Boleh Kosong');
				$this->form_validation->set_rules('nama', 'Nama Bayi', 'trim|required|alpha_numeric_spaces');
				$this->form_validation->set_rules('tanggal', 'Tanggal Lahir', 'trim|required');
				$this->form_validation->set_rules('jkelamin', 'Jenis Kelamin', 'trim|required');
				$this->form_validation->set_rules('ayah', 'Nama Ayah', 'trim|required|alpha_numeric_spaces');
				$this->form_validation->set_rules('ibu', 'Nama ibu', 'trim|required|alpha_numeric_spaces');
				if($this->form_validation->run() == FALSE)
				{
					$data['content'] = 'content/bayi/edit_bayi';
					$data['title'] = "Edit Data Bayi - Posyandu";
					$data['bayi'] = $this->M_model->getBayi($id); 
					$this->load->view('home', $data);
				} 
				else
				{
					$nama = $this->input->post('nama');
					$tl = $this->input->post('tanggal');
					$jkelamin = $this->input->post('jkelamin');
					$ayah = $this->input->post('ayah');
					$ibu = $this->input->post('ibu');
					$nik = $this->input->post('nik');
					$obj3 = array(
						'nama_bayi' => $nama,
						'tanggal_lahir' => $tl,
						'jenis_kelamin' => $jkelamin,
						'nama_ayah' => $ayah,
						'nama_ibu' => $ibu,
						'NIK_ibu' => $nik
					);
					$this->db->where('id_bayi', $id);
					$this->M_model->updateBayi($obj3);
					$this->session->set_flashdata('alert',"Berhasil Diedit");
					redirect('Bayi');
				}
			}
			else
			{
				$this->form_validation->set_message('required', 'Tidak Boleh Kosong');
				$this->form_validation->set_rules('nama', 'Nama Bayi', 'trim|required|alpha_numeric_spaces');
				$this->form_validation->set_rules('tanggal', 'Tanggal Lahir', 'trim|required');
				$this->form_validation->set_rules('jkelamin', 'Jenis Kelamin', 'trim|required');
				$this->form_validation->set_rules('ayah', 'Nama Ayah', 'trim|required|alpha_numeric_spaces');
				$this->form_validation->set_rules('ibu', 'Nama ibu', 'trim|required|alpha_numeric_spaces');
				$this->form_validation->set_rules('nik', 'NIK ibu', 'trim|required|numeric');
				if($this->form_validation->run() == FALSE)
				{
					$data['content'] = 'content/bayi/edit_bayi';
					$data['title'] = "Edit Data Bayi - Posyandu";
					$data['bayi'] = $this->M_model->getBayi($id); 
					$this->load->view('home', $data);
				}
				else
				{
					$obj2 = $this->M_model->getBayi($id);
					unlink('./assets/foto/'.$obj2->foto_bayi);

					$config['upload_path'] = './assets/foto';
					$config['allowed_types'] = 'jpg|png';
					$config['max_size'] = '4096';

					$this->load->library('upload', $config);
					if($this->upload->do_upload('foto'))
					{
						$file = array('upload_data' => $this->upload->data());

						$nama = $this->input->post('nama');
						$tl = $this->input->post('tanggal');
						$jkelamin = $this->input->post('jkelamin');
						$ayah = $this->input->post('ayah');
						$ibu = $this->input->post('ibu');
						$nik = $this->input->post('nik');
						$image = $file['upload_data']['file_name'];
						$obj = array(
							'nama_bayi' => $nama,
							'tanggal_lahir' => $tl,
							'jenis_kelamin' => $jkelamin,
							'nama_ayah' => $ayah,
							'nama_ibu' => $ibu,
							'NIK_ibu' => $nik,
							'foto_bayi' => $image,
						);
						$this->db->where('id_bayi', $id);
						$this->M_model->updateBayi($obj);
						$this->session->set_flashdata('alert',"Berhasil Diedit");
						redirect('Bayi','refresh');
					}
				}
			}
		} 
		else
		{
			$data['content'] = 'content/bayi/edit_bayi';
			$data['title'] = "Edit Data Bayi - Posyandu";
			$data['bayi'] = $this->M_model->getBayi($id); 
			$this->load->view('home', $data);
		}
	}

	public function hapus_data_bayi($id)
	{
		if($this->session->userdata('username') == "") {
			redirect('Login','refresh');
		}
		
		$obj2 = $this->M_model->getBayi($id);
		unlink('./assets/foto/'.$obj2->foto_bayi);

		$this->M_model->deleteBayi($id);
		$this->session->set_flashdata('alert',"Berhasil Dihapus");
		redirect('Bayi');
	}
}
/* End of file bayi.php */
/* Location: ./application/controllers/bayi.php */