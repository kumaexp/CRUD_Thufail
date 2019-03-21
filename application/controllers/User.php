<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('status') != "login") {
			redirect('login');
		}

		$this->load->model('M_user');
	}

	public function index()
	{
		$data['user'] = $this->M_user->get_user();
		$this->load->view('V_dashboard', $data);
	}

	public function hapus($id_user='')
	{
		$hapus = $this->M_user->hapus($id_user);
		if ($hapus) {
			#flashdata
		} else {
			echo '<script>alert("Hapus gagal!");</script>';
		}
		redirect(base_url('index.php/user'));
	}

	public function uri_edit()
	{
		$id_user = $this->uri->segment(3);
		$data['user'] = $this->db->where('id_user', $id_user)->get('user')->row();
		$this->load->view('V_edit', $data);
	}

	public function edit()
	{
		$id_q = $this->uri->segment(3);
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array(
			'username' => $username, 
			'password' => base64_encode($password)
		);
		$this->db->where('id_user', $id_q)->update('user', $data);
		if ($this->db->affected_rows() > 0) {
			#flashdata
		} else {
			echo "error";
		}
		redirect(base_url('index.php/user'));
	}

	public function tambah()
	{
		$this->load->view('V_tambah');
	}

	public function do_tambah() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array(
			'username' => $username, 
			'password' => base64_encode($password)
		);

		$this->db->insert('user', $data);

		if ($this->db->affected_rows() > 0) {
			echo '<script>alert("Daftar berhasil!");
			window.location.href="'.base_url("index.php/user").'";</script>';
		} else {
			return FALSE;
		}
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */