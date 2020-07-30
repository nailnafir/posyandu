<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('M_model');
	}

	public function index() {
        $this->load->view('login');
    }

    public function ceklogin() {
        if($this->input->post("login")) {
            $user = $this->input->post("username");
            $pass = $this->input->post("password");
            if($this->M_model->userlogin($user, $pass)) {
                $session_data = array('username' => $user);
                $this->session->set_userdata($session_data);
                redirect('Dashboard','refresh');
            } else {
                
                redirect('Login','refresh');
            }
        }
    }

    public function logout() {
        $this->session->unset_userdata('username');
		redirect('Login');
    }
    
    public function createuser() {
        $nama = "Nailul Firdaus";
        $user = "admin";
        $pass = "1234";
        $hash = sha1(md5($pass));
        echo $user."<br>";
        echo $hash."<br>";
        $data = array(
            "nama" => $nama,
            "username" => $user,
            "password" => $hash
        );
        $query = $this->db->insert('tb_user', $data);
        if(!$query) {
            echo "Failed";
        } else {
            echo "Success";
        }
    }

}

/* End of file Laporan.php */
/* Location: ./application/controllers/Laporan.php */
