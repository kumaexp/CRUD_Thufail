<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	function cek_login($table, $yrael) {
		return $this->db->get_where($table, $yrael);
	}

}

/* End of file M_login.php */
/* Location: ./application/models/M_login.php */