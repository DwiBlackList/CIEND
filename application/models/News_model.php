<?php

class News_model extends CI_Model
{
	private $_tabel = "news";

	public $id;
	public $nama;
	public $kategori;
	public $harga;
	public $stok;
	public $deskripsi;
	public function __construct()
	{
		$this->load->database();
	}

	public function get_news()
	{
		$query = $this->db->get('news');
		return $query->result_array();
	}

	public function rules()
	{
		return [
			['field' => 'nama',
			'label' => 'nama',
			'rules' => 'required']
		];
	}

	public function getbyid($id)
	{
		return $this->db->get_where($this->_tabel, ["id" => $id])->row();
	}

	public function set_news()
	{
		$post = $this->input->post();
		$this->nama = $post['nama'];
		$this->kategori = $post['kategori'];
		$this->harga = $post['harga'];
		$this->stok = $post['stok'];
		$this->deskripsi = $post['deskripsi'];
		$this->image = $this->aupload();
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
		$config['file_name']			= $this->nama;
		
		$this->load->library('upload',$config);

		if ($this->upload->do_upload('image')) {
			return $this->upload->data("file_name");
		}
		return "Unknown.png";
	}
	public function update_news()
	{
		$post = $this->input->post();
		$this->id = $post['id'];
		$this->nama = $post['nama'];
		$this->kategori = $post['kategori'];
		$this->harga = $post['harga'];
		$this->stok = $post['stok'];
		$this->deskripsi = $post['deskripsi'];

		if (!empty($FILES["image"]["name"])) {
			$this->image = $this->upload();
		}
		$this->db->update($this->_tabel,$this,array('id' =>$post['id']));
	}
}