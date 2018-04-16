<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Model {

	public function get_artikels(){
		$query = $this->db->get('blog');
		return $query->result();
	}	

	public function get_single($a)
	{
		$query = $this->db->query('select * from blog where id='.$a);
		return $query->result();
	}
	public function upload()
	{
		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size']  = '2048';
		$config['remove_space']  = TRUE;
		
		$this->load->library('upload', $config);
		
		if ($this->upload->do_upload('input_gambar')){
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		} else {
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	} 

	public function insert($upload)
	{
		$data = array(
			'id' => '',
			'judul' => $this->input->post('input_judul'),
			'content' => $this->input->post('input_content'),
			//'tanggal' => $this->input->post('input_tanggal'),
			'image' => $upload['file']['file_name']
		);

		$this->db->insert('blog', $data);
	}

	public function hapus($a){
		$query = $this->db->query('DELETE from blog WHERE id= '.$a);
	}

	
	public function edit_data($table,$data,$a)
	{  
		$this->db->where('id',$a);
		$edit = $this->db->update($table,$data);
		return $edit;

	}

	public function update_data($table,$a)
	{
		$this->db->where('id',$a);
		$query = $this->db->get($table);
		return $query->row();
	}

}

/* End of file blog.php */
/* Location: ./application/models/blog.php */