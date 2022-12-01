<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Getintouch_model extends CI_Model
{
	private $_tabel = "getintouch";

	public $id;
	public $name;
	public $category;
	public $when;
	public $phone;
	public $email;
	public $address;
	
	public function __construct()
	{
		$this->load->database();
	}

	public function get_getintouch()
	{
		$query = $this->db->get('getintouch');
		return $query->result_array();
	}

	public function rules()
	{
		return [
			['field' => 'name',
			'label' => 'name',
			'rules' => 'required'],
			
			['field' => 'category',
			'label' => 'category',
			'rules' => 'required'],
			
			['field' => 'when',
			'label' => 'when',
			'rules' => 'required'],
			
			['field' => 'phone',
			'label' => 'phone',
			'rules' => 'required'],
			
			['field' => 'email',
			'label' => 'email',
			'rules' => 'required'],
			
			['field' => 'address',
			'label' => 'address',
			'rules' => 'required']
		];
	}

	public function getbyid($id)
	{
		return $this->db->get_where($this->_tabel, ["id" => $id])->row();
	}

	public function set_getintouch()
	{
		$post = $this->input->post();
		$this->name = $post['name'];
		$this->category = $post['category'];
		$this->when = $post['when'];
		$this->phone = $post['phone'];
		$this->email = $post['email'];
		$this->address = $post['address'];
		$this->db->insert($this->_tabel,$this);
	}
	// public function _UploadImage()
	// {
	// 	$config['upload_path']          = './upload/img';
	// 	$config['allowed_types']        = 'gif|jpg|png';
	// 	$config['max_size']             = 200;
	// 	//$config['max_width']            = 1024;
	// 	//$config['max_height']           = 768;

	// 	$this->load->library('upload',$config);
	// 	if ($this->upload->do_upload('image')) {
	// 		return $this->upload->data("file_name");
	// 	}
	// 	return "Unknown.jpg";

	// }
	public function update_getintouch()
	{
		$post = $this->input->post();
		$this->id = $post['id'];
		$this->name = $post['name'];
		$this->category = $post['category'];
		$this->when = $post['when'];
		$this->phone = $post['phone'];
		$this->email = $post['email'];
		$this->address = $post['address'];

		$this->db->update($this->_tabel,$this,array('id' =>$post['id']));
	}
	public function delete($id)
	{
		return $this->db->delete($this->_tabel,array('id' => $id ));
	}
}