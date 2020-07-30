<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_model extends CI_Model {

	public function showBayi()
	{
		return $this->db->get('tb_bayi')->result_object();
	}

	public function showBayi2($id)
	{
		return $this->db->get_where('tb_bayi', array('id_bayi' => $id))->result_object();
	}

	public function insertBayi($data)
	{
		return $this->db->insert("tb_bayi", $data);
	}	

	public function getBayi($id)
	{
		return $this->db->get_where('tb_bayi', array('id_bayi' => $id))->row();
	}

	public function updateBayi($data)
	{
		return $this->db->update('tb_bayi', $data);
	}

	public function deleteBayi($id)
	{
		return $this->db->delete('tb_bayi', array('id_bayi' => $id));
	}

	public function countBayi()
	{
		return $this->db->count_all('tb_bayi');
	}

	// Penimbangan
	public function showPenimbangan($id) {
		return $this->db->get_where('tb_penimbangan', array('id_bayi' => $id));
	}

	public function insertPenimbangan($data) {
		return $this->db->insert('tb_penimbangan', $data);
	}

	public function updatePenimbangan($data) {
		return $this->db->update('tb_penimbangan', $data);
	}

	public function LaporanBulanan($data) {
		return $this->db->get_where('tb_penimbangan', array('tanggal' => $data));
	}

	// Imunisasi
	public function showImunisasi($id) {
		return $this->db->get_where('tb_imunisasi', array('id_bayi' => $id));
	}

	public function insertImunisasi($data) {
		return $this->db->insert('tb_imunisasi', $data);
	}

	public function updateImunisasi($data) {
		return $this->db->update('tb_imunisasi', $data);
	}

	public function userlogin($user, $pass) {
		$hash = sha1(md5($pass));
		$this->db->where("username", $user);
		$this->db->where("password", $hash);
		$query = $this->db->get("tb_user");
		if($query->num_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
}

/* End of file m_model.php */
/* Location: ./application/models/m_model.php */