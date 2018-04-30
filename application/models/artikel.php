<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Model {

	    function __construct()
    {
    	parent::__construct();
    }

	public function get_all_artikel(){
        $this->db->join('categories', 'categories.cat_id = blog.jenis_cat');
		$query = $this->db->get('blog');
		return $query->result();
	}	

	public function get_single($id)
	{
		$query = $this->db->query('select * from blog where id='.$id);
		return $query->result();
	}

	public function get_artikel_by_id($id)
    {
         // Inner Join dengan table Categories
        $this->db->select ( '
            blog.*, 
            categories.cat_id as category_id, 
            categories.cat_name,
            categories.cat_description,
        ' );
        $this->db->join('categories', 'categories.cat_id = blog.jenis_cat');

    	$query = $this->db->get_where('blog', array('blog.id' => $id));
    	            
		return $query->row();
    }

        public function create_artikel($data)
    {  
        return $this->db->insert('blog', $data);
    }

    public function update_artikel($data, $id) 
    {
        if ( !empty($data) && !empty($id) ){
            $update = $this->db->update( 'blog', $data, array('id'=>$id) );
            return $update ? true : false;
        } else {
            return false;
        }
    }

    public function delete_artikel($id)
    {
    	if ( !empty($id) ){
	    	$delete = $this->db->delete('blog', array('id'=>$id) );
	        return $delete ? true : false;
    	} else {
    		return false;
    	}
    }

    public function get_artikel_by_category($category_id)
    {

        $this->db->order_by('blog.id', 'DESC');

        $this->db->join('categories', 'categories.cat_id = blog.jenis_cat');
        $query = $this->db->get_where('blog', array('cat_id' => $category_id));
  
        return $query->result();
    }


	
}