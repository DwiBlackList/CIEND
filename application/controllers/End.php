<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class End extends CI_Controller {
	public function index()
	{
		// if (!file_exists(APPPATH.'views/1/'.$a.'.php')) {
		// 	show_404();
		// }

		//$data['judul'] = $a ;

		$this->load->view('utama/header');
		$this->load->view('1/index');
		$this->load->view('utama/footer');
	}
}