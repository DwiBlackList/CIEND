<?php

class Blog_model extends CI_Model
{
	private $_tabel = "blog";

	public $id;
	public $category;
	public $date;
	public $title;
	public $text;
	public function __construct()
	{
		$this->load->database();
	}

	public function get_blog()
	{
		$query = $this->db->get('blog');
		return $query->result_array();
	}

	public function rules()
	{
		return [
			['field' => 'category',
			'label' => 'category',
			'rules' => 'required']

			// ['field' => 'date',
			// 'label' => 'date',
			// 'rules' => 'required'],

			// ['field' => 'title',
			// 'label' => 'title',
			// 'rules' => 'required'],

			// ['field' => 'text',
			// 'label' => 'text',
			// 'rules' => 'required']
		];
	}

	public function getbyid($id)
	{
		return $this->db->get_where($this->_tabel, ["id" => $id])->row();
	}

	public function set_blog()
	{
		$post = $this->input->post();
		$this->category = $post['category'];
		$this->date = $post['date'];
		$this->title = $post['title'];
		$this->text = $post['text'];
		$this->picture = $this->aupload();
		$this->db->insert($this->_tabel,$this);
	}
	public function aupload()
	{
		$config['upload_path']          = './upload/img';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 2048;
		$config['overwrite']			= true;
		//$config['max_width']            = 2058;
		//$config['max_height']           = 768;
		$config['file_name']			= $this->category;
		
		$this->load->library('upload',$config);

		if ($this->upload->do_upload('picture')) {
			return $this->upload->data("file_name");
		}
		return "Unknown.png";
	}
	public function update_blog()
	{
		$post = $this->input->post();
		$this->id = $post['id'];
		$this->category = $post['category'];
		$this->date = $post['date'];
		$this->title = $post['title'];
		$this->text = $post['text'];

		if (!empty($FILES["picture"]["name"])) {
			$this->image = $this->upload();
		}
		$this->db->update($this->_tabel,$this,array('id' =>$post['id']));
	}
	public function delete($id)
	{
		return $this->db->delete($this->_tabel,array('id' => $id ));
	}
}