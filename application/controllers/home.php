<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');




class Home extends CI_Controller {



	public function index()
	{

		// $config['base_url'] = site_url('home/index');




		//load View
		$this->load->view('base/head');
		
		
		$this->load->view('general/navbar');
		$this->load->view('general/slider');
		$this->load->view('general/katagori');
		$this->load->view('general/slide_terlaris');
		$this->load->view('general/hotlist');
		$this->load->view('general/bottom_menu');
		$this->load->view('general/footer');
		$this->load->view('general/modal/modal_login');
		$this->load->view('general/modal/modal_register');
		
		
		$this->load->view('base/tail');
	}
	
	public function katagori()
	{
	
		//load View
		$this->load->view('base/head');

			$this->load->view('general/navbar');
		$this->load->view('general/head_katagori');
		$this->load->view('general/content_list_katagori');
	
		$this->load->view('general/bottom_menu');
		$this->load->view('general/footer');
		$this->load->view('general/modal/modal_login');
		$this->load->view('general/modal/modal_register');
		
		$this->load->view('base/tail');
	}
	
	
	public function detailproduk()
	{
	
		//load View
		$this->load->view('base/head');

		$this->load->view('general/navbar');
		$this->load->view('general/head_katagori');
		$this->load->view('general/detail_item');
	
		$this->load->view('general/bottom_menu');
		$this->load->view('general/footer');
		$this->load->view('general/modal/modal_login');
		$this->load->view('general/modal/modal_register');
		
		$this->load->view('base/tail');
	}
	
	
	public function profile_user()
	{
	
		//load View
		$this->load->view('base/head');

		$this->load->view('general/navbar');
		$this->load->view('general/head_katagori');
		$this->load->view('general/profile_user');
	
		$this->load->view('general/bottom_menu');
		$this->load->view('general/footer');
		$this->load->view('general/modal/modal_login');
		$this->load->view('general/modal/modal_register');	
		$this->load->view('general/modal/modal_ganti_password');
		
		$this->load->view('base/tail');
	}
	
	public function keranjang()
	{
	
		//load View
		$this->load->view('base/head');

		$this->load->view('general/navbar');
		
		$this->load->view('general/head_katagori');
		$this->load->view('general/keranjang');
	
		$this->load->view('general/bottom_menu');
		$this->load->view('general/footer');
		$this->load->view('general/modal/modal_login');
		$this->load->view('general/modal/modal_register');	
		$this->load->view('general/modal/modal_ganti_password');
		
		$this->load->view('base/tail');
	}
	
	
	
	
	public function list_produk()
	{
	
		//load View
		$this->load->view('base/head');

		$this->load->view('general/navbar');
		
		$this->load->view('general/head_katagori');
		$this->load->view('general/content_list_produk');
	
		$this->load->view('general/bottom_menu');
		$this->load->view('general/footer');
		$this->load->view('general/modal/modal_login');
		$this->load->view('general/modal/modal_register');	
		$this->load->view('general/modal/modal_ganti_password');
		
		$this->load->view('base/tail');
	}
	
}

?>