<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('testimoni_model');
		$this->load->helper('url_helper');
	}
	public function index()
	{
		$data['testimoni'] = $this->testimoni_model->get_testimoni();
		$this->load->view('utama/header');
		$this->load->view('testimoni/index',$data);
		$this->load->view('utama/footer');
	}
	public function input()
	{
		$testimoni = $this->testimoni_model;
		$validasi = $this->form_validation;
		$validasi->set_rules($testimoni->rules());

		if ($validasi->run()) {
			$testimoni->set_testimoni();
			$this->session->set_flashdata('success','Berhasil Di Tambahkan');
				//redirect('news','refresh');
		}
		$this->load->view('utama/header');
		$this->load->view('testimoni/input');		
		$this->load->view('utama/footer');

	}
	public function edit($id)
	{
		if (!isset($id)); //redirect('news/index');
		$testimoni = $this->testimoni_model;
		$validasi = $this->form_validation;
		$validasi->set_rules($testimoni->rules());

		if ($validasi->run()) {
			$testimoni->update_testimoni();
			$this->session->set_flashdata('success','successfully updated');
		}
		$data['testimoni_item']=$this->testimoni_model->getbyid($id);
		if (!$data['testimoni_item']) show_404();
		$this->load->view('utama/header');
		$this->load->view('testimoni/edit', $data);
		$this->load->view('utama/footer');
	}
	public function delete($id=null){
		if ($this->testimoni_model->delete($id)) {
			redirect(base_url());
		}
	}
}
