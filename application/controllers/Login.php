<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_login');
	}

	public function index()
	{
		$this->load->view('V_login');
	}

	function do_login() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$yrael = array(
			'username' => $username,
			'password' => base64_encode($password) 
		);

		$cek = $this->M_login->cek_login("user", $yrael)->num_rows();

		if ($cek > 0) {
			
			$data_session = array(
				'nama' => $username,
				'status' => "login" 
			);

			$this->session->set_userdata($data_session);

			redirect('user');

		} else {
			echo "Username atau password salah!";
		}
	}

	function do_logout() {
		$this->session->sess_destroy();
		redirect('login');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */