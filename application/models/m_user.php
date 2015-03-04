<?php if (!defined('BASEPATH'))	exit('No direct script access allowed');

Class M_user extends CI_Model {

	function __construct() {
		parent::__construct();
		$this->load->database();
	}

	function proses_masuk($email, $password) {
		$this->db->select('*');
		$this->db->from('data_user');
		$this->db->where('email', $email);
		$this->db->where('pass_user', MD5($password));

		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}

}	
?>