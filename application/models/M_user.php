<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	public function get_user() {
		return $this->db->get('user')->result();
	}

	public function hapus($id_user)
	{
		return $this->db->where('id_user', $id_user)->delete('user');
	}

}

/* End of file M_user.php */
/* Location: ./application/models/M_user.php */