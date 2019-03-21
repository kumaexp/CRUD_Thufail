<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_daftar');
	}

	public function index()
	{
		$this->load->view('V_daftar');
	}

	public function do_daftar() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array(
			'username' => $username, 
			'password' => base64_encode($password)
		);

		$this->db->insert('user', $data);

		if ($this->db->affected_rows() > 0) {
			echo '<script>alert("Daftar berhasil!");
			window.location.href="'.base_url("index.php/login").'";</script>';
		} else {
			return FALSE;
		}
	}

}

/* End of file Daftar.php */
/* Location: ./application/controllers/Daftar.php */