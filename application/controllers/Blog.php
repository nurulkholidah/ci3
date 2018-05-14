<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

		function __construct()
	{
		parent::__construct();

		// Supaya lebih efisien, kita dapat me-load model, library, helper 
		// yang sering digunakan pada class ini pada __construct sehingga
		// dapat dipanggil oleh semua method yang ada pada class ini
		$this->load->helper('MY');

		$this->load->model('artikel');
		$this->load->model('Kategori_model');

	}

	public function index()
	{
		$limit_per_page = 6;

		// URI segment untuk mendeteksi "halaman ke berapa" dari URL
		$start_index = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : 0;

		// Dapatkan jumlah data 
		$total_records = $this->artikel->get_total();
		
		if ($total_records > 0) {
			// Dapatkan data pada halaman yg dituju
			$data["artikel"] = $this->artikel->get_all_artikel($limit_per_page, $start_index);
			
			// Konfigurasi pagination
			$config['base_url'] = base_url() . 'blog/index';
			$config['total_rows'] = $total_records;
			$config['per_page'] = $limit_per_page;
			$config["uri_segment"] = 3;
			
			$this->pagination->initialize($config);
				
			// Buat link pagination
			$data["links"] = $this->pagination->create_links();
		}
		
		$this->load->view('blog', $data);
	}

		public function lihat_detail($kategori, $id)
	{
		// Jika kita akses:
		// http://localhost/ci3-course/blog/lihat_detail/berita/2
		// Maka "lihat_detail" adalah fungsi ini, "berita" adalah "kategori" dan 2 dianggap id berita
		echo $kategori;
		echo '<br>';
		echo $id;
	}
 
	public function view($id)
	{
		$data['view'] = $this->artikel->get_single($id);
		$this->load->view('blog_view', $data);
	}

	public function tambah()
	{

		//$data['page_title'] = 'Tulis Artikel';

		// Kita butuh helper dan library berikut
	    $this->load->helper('form');
		$this->load->library('form_validation');

		// Gunakan fungsi dari model untuk mengisi data dalam dropdown
		$data['categories'] = $this->Kategori_model->generate_cat_dropdown();

	    // Kita validasi input sederhana, sila cek http://localhost/ci3/user_guide/libraries/form_validation.html
	    $this->form_validation->set_rules('input_judul', 'Judul', 'required|is_unique[blog.judul]',
			array(
				'required' 		=> 'Silahkan isi %s .',
				'is_unique' 	=> 'Judul <strong>' .$this->input->post('input_judul'). '</strong> sudah ada.'
			));

		$this->form_validation->set_rules('input_content', 'Konten', 'required|min_length[8]',
			array(
				'required' 		=> 'Silahkan isi %s .',
				'min_length' 	=> 'Konten %s kurang panjang.',
			));

	    // Cek apakah input valid atau tidak
	    if ($this->form_validation->run() === FALSE)
	    {
	        //$this->load->view('templates/header');
	        $this->load->view('Add', $data);
	        //$this->load->view('templates/footer');

	    } else {

    		// Apakah user upload gambar?
    		if ( isset($_FILES['image']) && $_FILES['image']['size'] > 0 )
    		{
    			// Konfigurasi folder upload & file yang diijinkan
    			// Jangan lupa buat folder uploads di dalam ci3-course
    			$config['upload_path']          = './img/';
    	        $config['allowed_types']        = 'gif|jpg|png';
    	        $config['max_size']             = 100;
    	        $config['max_width']            = 1024;
    	        $config['max_height']           = 768;

    	        // Load library upload
    	        $this->load->library('upload', $config);

    	        // Apakah file berhasil diupload?
    	        if ( ! $this->upload->do_upload('image'))
    	        {
    	        	$data['upload_error'] = $this->upload->display_errors();

    	        	$image = '';

    	        	// Kita passing pesan error upload ke view supaya user mencoba upload ulang
    	            //$this->load->view('templates/header');
    	            $this->load->view('Add', $data);
    	            //$this->load->view('templates/footer'); 

    	        } else {

    	        	// Simpan nama file-nya jika berhasil diupload
    	            $img_data = $this->upload->data();
    	            $image = $img_data['file_name'];
    	        	
    	        }
    		} else {

    			// User tidak upload gambar, jadi kita kosongkan field ini
    			$image = '';
    		}

	    	// Memformat slug sebagai alamat URL, 
	    	// Misal judul: "Hello World", kita format menjadi "hello-world"
	    	// Nantinya, URL blog kita menjadi mudah dibaca 
	    	// http://localhost/ci3-course/blog/hello-world
	    	$slug = url_title($this->input->post('input_judul'), 'dash', TRUE);

	    	$post_data = array(
				'jenis_cat' => $this->input->post('cat_id'),
	    	    'judul' => $this->input->post('input_judul'),
	    	   	//'post_date' => date("Y-m-d H:i:s"),
	    	    //'post_slug' => $slug,
	    	    'content' => $this->input->post('input_content'),
	    	    'image' => $image,
	    	   	//'date_created' => date("Y-m-d H:i:s"),
	    	);

	    	// Jika tidak ada error upload gambar, maka kita insert ke database via model Blog 
	    	if( empty($data['upload_error']) ) {
		        $this->artikel->create_artikel($post_data);

		        //$this->load->view('templates/header');
		        $this->load->view('blog_success', $data);
		        //$this->load->view('templates/footer'); 
	    	}
	    }


		
	}


	public function edit($id = NULL)
	{

		//$data['page_title'] = 'Edit Artikel';

		// Get artikel dari model berdasarkan $id
		$data['artikel'] = $this->artikel->get_artikel_by_id($id);

		// Jika id kosong atau tidak ada id yg dimaksud, lempar user ke halaman blog
		if ( empty($id) || !$data['artikel'] ) redirect('blog');

		// Gunakan fungsi dari model untuk mengisi data dalam dropdown
		$data['categories'] = $this->Kategori_model->generate_cat_dropdown();

		// Kita simpan dulu nama file yang lama
		$old_image = $data['artikel']->image;

		// Kita butuh helper dan library berikut
	    $this->load->helper('form');
	    $this->load->library('form_validation');

	    // Kita validasi input sederhana, sila cek http://localhost/ci3/user_guide/libraries/form_validation.html
		$this->form_validation->set_rules('input_judul', 'Judul', 'required',
			array('required' => 'Isi %s donk, males amat.'));
	    $this->form_validation->set_rules('input_content', 'Konten', 'required|min_length[8]',
			array(
				'required' 		=> 'Isi %s lah, hadeeh.',
				'min_length' 	=> 'Isi %s kurang panjang bosque.',
			));

	    // Cek apakah input valid atau tidak
	    if ($this->form_validation->run() === FALSE)
	    {
	        //$this->load->view('templates/header');
	        $this->load->view('edit', $data);
	        //$this->load->view('templates/footer');

	    } else {

    		// Apakah user upload gambar?
    		if ( isset($_FILES['image']) && $_FILES['image']['size'] > 0 )
    		{
    			// Konfigurasi folder upload & file yang diijinkan
    			// Jangan lupa buat folder uploads di dalam ci3-course
    			$config['upload_path']          = './img/';
    	        $config['allowed_types']        = 'gif|jpg|png';
    	        $config['max_size']             = 100;
    	        $config['max_width']            = 1024;
    	        $config['max_height']           = 768;

    	        // Load library upload
    	        $this->load->library('upload', $config);

    	        // Apakah file berhasil diupload?
    	        if ( ! $this->upload->do_upload('image'))
    	        {
    	        	$data['upload_error'] = $this->upload->display_errors();

    	        	$image = '';

    	        	// Kita passing pesan error upload ke view supaya user mencoba upload ulang
    	            //$this->load->view('templates/header');
    	            $this->load->view('edit', $data);
    	            //$this->load->view('templates/footer'); 

    	        } else {

    	        	// Hapus file image yang lama jika ada
    	        	if( !empty($old_image) ) {
    	        		if ( file_exists( './img/'.$old_image ) ){
    	        		    unlink( './img/'.$old_image );
    	        		} else {
    	        		    echo 'File tidak ditemukan.';
    	        		}
    	        	}

    	        	// Simpan nama file-nya jika berhasil diupload
    	            $img_data = $this->upload->data();
    	            $image = $img_data['file_name'];
    	        	
    	        }
    		} else {

    			// User tidak upload gambar, jadi kita kosongkan field ini, atau jika sudah ada, gunakan image sebelumnya
    			$image = ( !empty($old_image) ) ? $old_image : '';

    		}

	    	$post_data = array(
	    	    'jenis_cat' => $this->input->post('cat_id'),
	    	    'judul' => $this->input->post('input_judul'),
	    	    'content' => $this->input->post('input_content'),
	    	    'image' => $image,
	    	);

	    	// Jika tidak ada error upload gambar, maka kita update datanya 
	    	if( empty($data['upload_error']) ) {

	    		// Update artikel sesuai post_data dan id-nya
		        $this->artikel->update_artikel($post_data, $id);

		        //$this->load->view('templates/header');
		        $this->load->view('blog_success', $data);
		        //$this->load->view('templates/footer'); 
	    	}
	    }
	}



		public function delete($id)
	{
				//$data['page_title'] = 'Delete artikel';

		// Get artikel dari model berdasarkan $id
		$data['artikel'] = $this->artikel->get_artikel_by_id($id);

		// Jika id kosong atau tidak ada id yg dimaksud, lempar user ke halaman blog
		if ( empty($id) || !$data['artikel'] ) show_404();

		// Kita simpan dulu nama file yang lama
		$old_image = $data['artikel']->image;

    	// Hapus file image yang lama jika ada
    	if( !empty($old_image) ) {
    		if ( file_exists( './img/'.$old_image ) ){
    		    unlink( './img/'.$old_image );
    		} else {
    		    echo 'File tidak ditemukan.';
    		}
    	}

		// Hapus artikel sesuai id-nya
        if( ! $this->artikel->delete_artikel($id) )
        {
        	// Jika gagal, tampilkan failnya
	        //$this->load->view('templates/header');
	        $this->load->view('blog_failed', $data);
	        //$this->load->view('templates/footer'); 
	    } else {
	    	// Ok, sudah terhapus
	    	//$this->load->view('templates/header');
	        $this->load->view('blog_success', $data);
	        //$this->load->view('templates/footer'); 
	    }


	}

}