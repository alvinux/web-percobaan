<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');




class Proses extends CI_Controller {

		public function __construct(){
		parent::__construct();
		$this->load->library(array('session', 'upload', 'user_agent','form_validation'));
		$this->load->helper(array('form', 'url'));
        // memanggil model m_beranda
		$this->load->model(array('m_user'));
	}

	public function proses_login_user()
	{

		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_cek_data_user');

		$run = $this->form_validation->run();

		// $con 

		if ($run == FALSE) {
			echo '<script>';
			echo "alert('Email dan password tidak sesuai');";
			echo "window.location='../home/index.php'";
			echo '</script>';
		} else {
			// bisa juga menggunakan redirect ini
			// redirect('beranda/biodata');
			// menggunakan javascript lebih cepat
			echo '<script>';
			echo "alert('Login Berhasil');";
			echo "window.location='".$this->agent->referrer()."'";
			echo '</script>';

		}
	}
	//dipanggil melalui form_validation password (callback_cek_data)
	public function cek_data_user($password) {
        //validasi field terhadap database 
		$email = $this->input->post('email');

        //query ke database
		$result = $this->m_user->proses_masuk($email, $password);

		if ($result) {
			$sess_array = array();
			foreach ($result as $row) {
				$sess_array = array(
					'id_user' => $row->id_user,
					'nama' => $row->nama,
					'email' => $row->email,
					// 'foto' => $row->foto
					);
				$this->session->set_userdata('login_user', $sess_array);
			}
			return TRUE;
		} else {
			$this->form_validation->set_message('cek_data', 'Email dan password tidak sesuai');
			return FALSE;
		}
	}
	/////////////////////////////////////////////////////////
// 	public function proses_login_admin()
// 	{
// 		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
// 		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_cek_data_admin');

// 		$run = $this->form_validation->run();

// 		// $con
// 	if ($run == FALSE) {
// 			echo '<script>';
// 			echo "alert('Email dan password tidak sesuai');";
// 			echo "window.location='../beranda/daftar'";
// 			echo '</script>';
// 		} else {
// 			// bisa juga menggunakan redirect ini
// 			// redirect('beranda/biodata');
// 			// menggunakan javascript lebih cepat
// 			echo '<script>';
// 			echo "alert('Login Berhasil');";
// 			echo "window.location='".$this->agent->referrer()."'";
// 			echo '</script>';

// 		}
// 	}
// 	//dipanggil melalui form_validation password (callback_cek_data)
// 	public function cek_data_admin($password) {
//         //validasi field terhadap database 
// 		$email = $this->input->post('email');

//         //query ke database
// 		$result = $this->m_user->proses_masuk($email, $password);

// 		if ($result) {
// 			$sess_array = array();
// 			foreach ($result as $row) {
// 				$sess_array = array(
// 					'id_user' => $row->id_user,
// 					'nama' => $row->nama,
// 					'email' => $row->email,
// 					'foto' => $row->foto
// 					);
// 				$this->session->set_userdata('login_user', $sess_array);
// 			}
// 			return TRUE;
// 		} else {
// 			$this->form_validation->set_message('cek_data', 'Email dan password tidak sesuai');
// 			return FALSE;
// 		}
// 	}
// 	public function proses_login_penjual()
// 	{
// 		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
// 		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_cek_data');

// 		$run = $this->form_validation->run();

// 		// $con
// 	}
// if ($run == FALSE) {
// 			echo '<script>';
// 			echo "alert('Email dan password tidak sesuai');";
// 			echo "window.location='../beranda/daftar'";
// 			echo '</script>';
// 		} else {
// 			// bisa juga menggunakan redirect ini
// 			// redirect('beranda/biodata');
// 			// menggunakan javascript lebih cepat
// 			echo '<script>';
// 			echo "alert('Login Berhasil');";
// 			echo "window.location='".$this->agent->referrer()."'";
// 			echo '</script>';

// 		}
// 	}
// 	//dipanggil melalui form_validation password (callback_cek_data)
// 	public function cek_data($password) {
//         //validasi field terhadap database 
// 		$email = $this->input->post('email');

//         //query ke database
// 		$result = $this->m_user->proses_masuk($email, $password);

// 		if ($result) {
// 			$sess_array = array();
// 			foreach ($result as $row) {
// 				$sess_array = array(
// 					'id_user' => $row->id_user,
// 					'nama' => $row->nama,
// 					'email' => $row->email,
// 					'foto' => $row->foto
// 					);
// 				$this->session->set_userdata('login_user', $sess_array);
// 			}
// 			return TRUE;
// 		} else {
// 			$this->form_validation->set_message('cek_data', 'Email dan password tidak sesuai');
// 			return FALSE;
// 		}
// 	}




}
?>