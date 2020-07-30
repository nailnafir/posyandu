<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('pdf');
		$this->load->model('M_model');
	}

	public function index() {
		if($this->session->userdata('username') == "") {
			redirect('Login','refresh');
		}

	// echo "<title>Laporan</title>";
		$pdf = new FPDF('l','mm','A5');
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(190,7,'LAPORAN PERKEMBANGAN BAYI',0,1,'C');
		$pdf->Output();
	}

	public function laporan_bayi($id) {
		if($this->session->userdata('username') == "") {
			redirect('Login','refresh');
		}

		$res = $this->M_model->getBayi($id);
		$pdf = new FPDF('P','mm','A4');
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(190,7,'LAPORAN PERKEMBANGAN '.strtoupper($res->nama_bayi),0,1,'C');
		$pdf->Cell(10,7,'',0,1);
		$pdf->SetFont('Arial','',12);
		$pdf->Cell(100,6,'Nama : '.$res->nama_bayi,0,1);
		$pdf->Cell(100,6,'Tanggal Lahir  : '.$res->tanggal_lahir,0,1);
		$pdf->Cell(100,6,'Nama Ayah  : '.$res->nama_ayah,0,1);
		$pdf->Cell(100,6,'Nama Ibu  : '.$res->nama_ibu,0,1);
		$pdf->Cell(10,7,'',0,1);
		$pdf->SetFont('Arial','B',10);
		$pdf->Cell(50,6,'Bulan',1,0,'C');
		$pdf->Cell(40,6,'Tanggal',1,0,'C');
		$pdf->Cell(40,6,'Berat Badan',1,0,'C');
		$pdf->Cell(40,6,'Tinggi Badan',1,1,'C');
		$pdf->SetFont('Arial','',10);
		$result = $this->M_model->showPenimbangan($res->id_bayi)->result_object();
		$no = 0;
		foreach ($result as $v) {
			$pdf->Cell(50,6,"Bulan Ke-".$no,1,0);
			$pdf->Cell(40,6,$v->tanggal,1,0);
			$pdf->Cell(40,6,$v->berat_bayi." Kg",1,0);
			$pdf->Cell(40,6,$v->tinggi_bayi." CM",1,1);
			$no++;
		}
		$pdf->Output();
	}

	public function Laporanbulanan() {
		if($this->session->userdata('username') == "") {
			redirect('Login','refresh');
		}

		$data['content'] = 'content/laporan/laporan';
		$data['title'] = "Laporan Bulanan - Posyandu";
		$this->load->view('home', $data);
	}

	public function laporan_Bulanann() {
		if($this->session->userdata('username') == "") {
			redirect('Login','refresh');
		}
		
		if($this->input->post('cari')) {
			$tanggal = $this->input->post('tanggal');
			$pdf = new FPDF('P','mm','A4');
			$pdf->AddPage();
			$pdf->SetFont('Arial','B',14);
			$pdf->Cell(190,7,"LAPORAN BULANAN POSYANDU",0,1,'C');
			$pdf->Cell(10,10,'',0,1);
			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(20,6,"No",1,0,'C');
			$pdf->Cell(40,6,"Nama",1,0,'C');
			$pdf->Cell(40,6,"Tanggal Lahir",1,0,'C');
			$pdf->Cell(40,6,"Berat Badan",1,0,'C');
			$pdf->Cell(40,6,"Tinggi Badan",1,1,'C');
			$pdf->SetFont('Arial','',10);
			$no = 1;
			$result = $this->M_model->LaporanBulanan($tanggal)->result_object();
			foreach($result as $r) {
				$pdf->Cell(20,6,$no,1,0,'C');
				$res = $this->M_model->showBayi2($r->id_bayi);
				foreach($res as $b) {
					$pdf->Cell(40,6,$b->nama_bayi,1,0,'C');
					$pdf->Cell(40,6,$b->tanggal_lahir,1,0,'C');
				}
				$pdf->Cell(40,6,$r->berat_bayi." Kg",1,0,'C');
				$pdf->Cell(40,6,$r->tinggi_bayi." CM",1,1,'C');
				$no++;
			}
			$pdf->Output();
		}
	}
}

/* End of file Laporan.php */
/* Location: ./application/controllers/Laporan.php */