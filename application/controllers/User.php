<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('user_model');
		$this->load->helper('url_helper');
	}
	public function index()
	{
		$data['user'] = $this->user_model->get_user();
		$this->load->view('utama/header');
		$this->load->view('user/index',$data);
		$this->load->view('utama/footer');
	}
	public function input()
	{
		$user = $this->user_model;
		$validasi = $this->form_validation;
		$validasi->set_rules($user->rules());

		if ($validasi->run()) {
			$user->set_user();
			$this->session->set_flashdata('success','Berhasil Di Tambahkan');
				//redirect('news','refresh');
		}
		$this->load->view('utama/header');
		$this->load->view('user/input');		
		$this->load->view('utama/footer');

	}
	public function edit($id)
	{
		if (!isset($id)); //redirect('news/index');
		$user = $this->user_model;
		$validasi = $this->form_validation;
		$validasi->set_rules($user->rules());

		if ($validasi->run()) {
			$user->update_user();
			$this->session->set_flashdata('success','successfully updated');
		}
		$data['user_item']=$this->user_model->getbyid($id);
		if (!$data['user_item']) show_404();
		$this->load->view('utama/header');
		$this->load->view('user/edit', $data);
		$this->load->view('utama/footer');
	}
	public function delete($id=null){
		if ($this->user_model->delete($id)) {
			redirect(base_url());
		}
	}
}
