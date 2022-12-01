<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Getintouch extends CI_Controller {
	// public function index()
	// {
	// 	$this->load->view('welcome_message');
	// }
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('getintouch_model');
		$this->load->helper('url_helper');
	}
	public function index()
	{

		// if (!file_exists(APPPATH.'views/getintouch/'.$a.'.php')) {
		// 	show_404();
		// }


		$getintouch=$this->getintouch_model;
		$validation=$this->form_validation;
		$validation->set_rules($getintouch->rules());

		if ($validation->run()) {
			$getintouch->set_getintouch();
			$this->session->set_flashdata('success','Thank you, wait for an admin reply with email');
		}
		//$this->load->view('input');

		//$data['judul'] = $a ;

		$this->load->view('utama/header');
		$this->load->view('getintouch/index');
		$this->load->view('utama/footer');
	}
	public function views()
	{
		$data['getintouch'] = $this->getintouch_model->get_getintouch();
		//$data['title'] = "Arsip Berita";
		$this->load->view('utama/header');
		$this->load->view('getintouch/views',$data);
		$this->load->view('utama/footer');
	}
	public function edit($id)
	{
		if (!isset($id)); //redirect('news/index');
		$getintouch = $this->getintouch_model;
		$validasi = $this->form_validation;
		$validasi->set_rules($getintouch->rules());

		if ($validasi->run()) {
			$getintouch->update_getintouch();
			$this->session->set_flashdata('success','successfully updated');
		}
		$data['getintouch_item']=$this->getintouch_model->getbyid($id);
		if (!$data['getintouch_item']) show_404();
		$this->load->view('utama/header');
		$this->load->view('getintouch/edit', $data);
		$this->load->view('utama/footer');
	}
	public function delete($id=null){
		if ($this->getintouch_model->delete($id)) {
			redirect(base_url());
		}
	}
}