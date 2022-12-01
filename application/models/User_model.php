<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
	private $_tabel = "user";

	public $id;
	public $name;
	public $datebirth;
	public $email;
	public $password;
	public $level;
	
	public function __construct()
	{
		$this->load->database();
	}

	public function get_user()
	{
		$query = $this->db->get('user');
		return $query->result_array();
	}

	public function rules()
	{
		return [
			['field' => 'name',
			'label' => 'name',
			'rules' => 'required'],
			
			['field' => 'datebirth',
			'label' => 'datebirth',
			'rules' => 'required'],
			
			['field' => 'email',
			'label' => 'email',
			'rules' => 'required'],
			
			['field' => 'password',
			'label' => 'password',
			'rules' => 'required'],
			
			['field' => 'level',
			'label' => 'level',
			'rules' => 'required']
		];
	}

	public function getbyid($id)
	{
		return $this->db->get_where($this->_tabel, ["id" => $id])->row();
	}

	public function set_user()
	{
		$post = $this->input->post();
		$this->name = $post['name'];
		$this->datebirth = $post['datebirth'];
		$this->email = $post['email'];
		$this->password = $post['password'];
		$this->level = $post['level'];
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
	public function update_user()
	{
		$post = $this->input->post();
		$this->id = $post['id'];
		$this->name = $post['name'];
		$this->datebirth = $post['datebirth'];
		$this->email = $post['email'];
		$this->password = $post['password'];
		$this->level = $post['level'];

		$this->db->update($this->_tabel,$this,array('id' =>$post['id']));
	}
	public function delete($id)
	{
		return $this->db->delete($this->_tabel,array('id' => $id ));
	}
}