<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni_model extends CI_Model {

	
	private $_tabel = "testimoni";

	public $id;
	public $name;
	public $text;
	public $image;
	public function __construct()
	{
		$this->load->database();
	}
	public function get_testimoni(){
		$query = $this->db->get('testimoni');
		return $query->result_array();
	}
	public function rules(){
		return [
			['field' =>'name',
			'label'=>'name',
			'rules'=>'required'],

			['field' =>'text',
			'label'=>'text',
			'rules'=>'required']
		];
	}
	public function getbyid($id){
		return $this->db->get_where($this->_tabel,["id"=>$id])->row();
	}
	public function set_testimoni()
	{
		$post =$this->input->post();

		$this->name = $post['name'];
		$this->text = $post['text'];
		$this->image =$this->_UploadImage();
		$this->db->insert($this->_tabel,$this);
	}
	public function update_testimoni()
	{

		$post =$this->input->post();
		$this->id = $post['id'];
		$this->name =$post["name"];
		$this->text = $post['text'];
		
		if (!empty($_FILES["image"]["name"])) {
			$this->image=$this->_UploadImage();
		}else{
			$this->image=$post["old_image"];
		}
		$this->db->update($this->_tabel,$this,array('id'=>$post['id']));
	}
	public function _UploadImage()
	{
		$config['upload_path']          = './upload/img';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 1024;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload',$config);
		if ($this->upload->do_upload('image')) {
			return $this->upload->data("file_name");
		}else{
			echo $this->upload->display_errors();
			// return "Unknown.jpg";
		}
		
	}
	public function delete($id)
	{
		return $this->db->delete($this->_tabel,array('id' => $id ));
	}
}