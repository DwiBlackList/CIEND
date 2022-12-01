<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('blog_model');
		$this->load->helper('url_helper');
	}
	public function index()
	{
		$data['blog'] = $this->blog_model->get_blog();
		$this->load->view('utama/header',$data);
		$this->load->view('blog/index',$data);
		$this->load->view('utama/footer');
	}
	public function input()
	{
		$blog = $this->blog_model;
		$validasi = $this->form_validation;
		$validasi->set_rules($blog->rules());

		if ($validasi->run()) {
			$blog->set_blog();
			$this->session->set_flashdata('success','Berhasil Di Tambahkan');
				//redirect('news','refresh');
		}else{
			$this->load->view('utama/header');
			$this->load->view('blog/input');
			$this->load->view('utama/footer');
		}
		
	}
	public function edit($id)
	{
		if (!isset($id)); //redirect('news/index');
		$blog = $this->blog_model;
		$validasi = $this->form_validation;
		$validasi->set_rules($blog->rules());

		if ($validasi->run()) {
			$blog->update_blog();
			$this->session->set_flashdata('success','Berhasil Di Update');
		}
		$data['blog_item']=$blog->getbyid($id);
		//if (!$data['news_item']) show_404();
		$this->load->view('blog/edit', $data);
	}
	public function delete($id=null)
	{
		if ($this->blog_model->delete($id))
			redirect(base_url());
	}
}
