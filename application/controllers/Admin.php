<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');

		$this->load->model('getintouch_model');
		$this->load->model('blog_model');
		$this->load->model('testimoni_model');
		$this->load->model('user_model');

		$this->load->helper('url_helper');
	}
	public function index()
	{
		$this->load->view('utama/headeradmin');
							// Get In Touch input
		$getintouch=$this->getintouch_model;
		$validation=$this->form_validation;
		$validation->set_rules($getintouch->rules());

		if ($validation->run() AND $this->input->post('simpan1')) {
			$getintouch->set_getintouch();
			$this->session->set_flashdata('success','Thank you, wait for an admin reply with email');
		}
		$this->load->view('getintouch/index');
							// Views GIT
		$data['getintouch'] = $this->getintouch_model->get_getintouch();
		$this->load->view('getintouch/views',$data);
							// Testimoni Input
		$testimoni = $this->testimoni_model;
		$validasi = $this->form_validation;
		$validasi->set_rules($testimoni->rules());

		if ($validasi->run() AND $this->input->post('simpan2')) {
			$testimoni->set_testimoni();
			$this->session->set_flashdata('success','Berhasil Di Tambahkan');
		}
		$this->load->view('testimoni/input');
							// Views Testimoni
		$data['testimoni'] = $this->testimoni_model->get_testimoni();
		$this->load->view('testimoni/index',$data);

							// User Input
		$user = $this->user_model;
		$validasi = $this->form_validation;
		$validasi->set_rules($user->rules());

		if ($validasi->run() AND $this->input->post('simpan3')) {
			$user->set_user();
			$this->session->set_flashdata('success','Berhasil Di Tambahkan');
		}
		$this->load->view('user/input');
							// Views User
		$data['user'] = $this->user_model->get_user();
		$this->load->view('user/index',$data);
		// Blog input
		$blog = $this->blog_model;
		$validasi = $this->form_validation;
		$validasi->set_rules($blog->rules());

		if ($validasi->run() AND $this->input->post('simpan4')) {
			$blog->set_blog();
			$this->session->set_flashdata('success','Berhasil Di Tambahkan');
				//redirect('news','refresh');
		}else{
			$this->load->view('blog/input');
		}
							// BLOG Views
		$data['blog'] = $this->blog_model->get_blog();
		$this->load->view('blog/index',$data);

		$this->load->view('utama/footeradmin');
	}
}