<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('m_kajian');
		$this->load->library('pagination');
	}

	public function index()
	{
		$data['title']	= 'Home';
		$data['kajian'] 	= $this->db->order_by('id','desc')->get('tb_kajian',3)->result();
		$data['kajian1'] 	= $this->db->order_by('id','desc')->get('tb_kajian',1)->row_array();
		$data['kontak'] 	= $this->db->where('id','1')->get('tb_kontak')->row_array();
		$data['tentang'] 	= $this->db->where('id','1')->get('tb_sejarah')->row_array();
		$data['berita1']   = $this->db->order_by('id','desc')->get('tb_blog',2)->result();
		$data['kajian2'] 	= $this->db->order_by('id','desc')->get('tb_kajian',2)->result();
		$this->load->view('frontend/index',$data);
	}

	public function kajian(){
		$data['title']			= 'Jadwal Kajian';
		$data['kajian0'] 		= $this->db->order_by('id','desc')->get('tb_kajian')->result();
		$data['kajian1'] 		= $this->db->order_by('id','desc')->get('tb_kajian',1)->row_array();
		$data['kontak'] 		= $this->db->where('id','1')->get('tb_kontak')->row_array();
		$data['tentang'] 		= $this->db->where('id','1')->get('tb_sejarah')->row_array();
		$data['berita1']  		= $this->db->order_by('id','desc')->get('tb_blog',2)->result();
		$data['kajian2'] 		= $this->db->order_by('id','desc')->get('tb_kajian',2)->result();
		//konfigurasi pagination
        $config['base_url'] = base_url('home/kajian'); //site url
        $config['total_rows'] = $this->db->count_all('tb_kajian'); //total row
        $config['per_page'] = 2;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['kajian'] = $this->m_kajian->get_kajian($config["per_page"], $data['page'])->result();           

        $data['pagination'] = $this->pagination->create_links();

        //load view mahasiswa view
        $data['pagination'] = $this->pagination->create_links();
		$this->load->view('frontend/kajian',$data);
	}

	public function baca_kajian($slug){
		$title 				= $this->db->where('slug',$slug)->get('tb_kajian')->row_array();
		$data['title']		= $title['nama'] ;
		$data['kajian'] 	= $this->db->where('slug',$slug)->get('tb_kajian')->row_array();
		$data['kontak'] 	= $this->db->where('id','1')->get('tb_kontak')->row_array();
		$data['tentang'] 	= $this->db->where('id','1')->get('tb_sejarah')->row_array();
		$data['berita1']   = $this->db->order_by('id','desc')->get('tb_blog',2)->result();
		$data['kajian2'] 	= $this->db->order_by('id','desc')->get('tb_kajian',2)->result();
		$this->load->view('frontend/baca_kajian',$data);
	}

	public function kontak(){
		$data['title']	= 'Kontak';
		$data['kontak'] 	= $this->db->where('id','1')->get('tb_kontak')->row_array();
		$data['tentang'] 	= $this->db->where('id','1')->get('tb_sejarah')->row_array();
		$data['berita1']   = $this->db->order_by('id','desc')->get('tb_blog',2)->result();
		$data['kajian2'] 	= $this->db->order_by('id','desc')->get('tb_kajian',2)->result();
		$this->load->view('frontend/kontak',$data);
	}

	public function berita(){
		$data['title']	= 'Berita';
		$data['berita']   = $this->db->order_by('id','desc')->get('tb_blog');
		$data['kontak'] 	= $this->db->where('id','1')->get('tb_kontak')->row_array();
		$data['tentang'] 	= $this->db->where('id','1')->get('tb_sejarah')->row_array();
		$data['berita1']   = $this->db->order_by('id','desc')->get('tb_blog',2)->result();
		$data['kajian2'] 	= $this->db->order_by('id','desc')->get('tb_kajian',2)->result();
		$this->load->view('frontend/berita',$data);
	}

	public function baca_berita($slug){
		$title = $this->db->where('slug',$slug)->get('tb_blog')->row_array();
		$data['title']		= $title['judul'] ;
		$data['berita'] 	= $this->db->where('slug',$slug)->get('tb_blog')->row_array();
		$data['kategori']   = $this->db->order_by('id','desc')->get('tb_blogkategori')->result();
		$data['kontak'] 	= $this->db->where('id','1')->get('tb_kontak')->row_array();
		$data['tentang'] 	= $this->db->where('id','1')->get('tb_sejarah')->row_array();
		$data['berita1']   = $this->db->order_by('id','desc')->get('tb_blog',2)->result();
		$data['kajian2'] 	= $this->db->order_by('id','desc')->get('tb_kajian',2)->result();
		$this->load->view('frontend/baca_berita',$data);
	}

	public function gallery(){
		$data['title']	= 'Gallery';
		$data['foto']   = $this->db->order_by('id','desc')->get('tb_foto');
		$data['kontak'] 	= $this->db->where('id','1')->get('tb_kontak')->row_array();
		$data['tentang'] 	= $this->db->where('id','1')->get('tb_sejarah')->row_array();
		$data['berita1']   = $this->db->order_by('id','desc')->get('tb_blog',2)->result();
		$data['kajian2'] 	= $this->db->order_by('id','desc')->get('tb_kajian',2)->result();
		$this->load->view('frontend/gallery',$data);
	}
}
