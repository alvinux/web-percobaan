<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');




class Admin extends CI_Controller {

public function index()
	{

		// $config['base_url'] = site_url('home/index');




		//load View
		$this->load->view('base/head_adm');
		
		
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar_kiri');
		$this->load->view('admin/sisi_kanan');
		
		
		$this->load->view('base/tail_adm');
	}
}
?>