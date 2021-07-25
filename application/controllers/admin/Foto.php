<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Foto extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
    }

    public function index()
        {
        	$data['foto']  	 	= $this->db->order_by('id','desc')->get('tb_foto');
			$data['kategori']	= $this->db->order_by('kategori','asc')->get('tb_kategori_galeri')->result();
            $this->load->view('admin/v_foto',$data);
        }

    public function store(){
        $upload_foto = $_FILES['file'];
            if ($upload_foto) {
                $config['allowed_types'] = 'jpg|png|gif|jpeg';
                $config['max_size'] = '0';
                $config['upload_path'] = './uploads/galery/';
                $this->upload->initialize($config);
                if ($this->upload->do_upload('file')) {
                    $foto = $this->upload->data('file_name');
                } else {
                    $this->upload->display_errors();
                }
            }

        $data = [
            'nama'			=> $this->input->post('nama'),
            'deskripsi'		=> $this->input->post('deskripsi'),  
			'kategori'		=> $this->input->post('kategori'),
            'file'          => $foto
        ];
        $this->db->insert('tb_foto',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil menambahkan Foto !</div>');
        redirect(base_url('admin/foto'));
    }


    public function update($id){
        $foto = $_FILES['file']['name'];

        $data = [
            'nama'         => $this->input->post('nama'),
            'deskripsi'     => $this->input->post('deskripsi'),
			'kategori'		=> $this->input->post('kategori'),

        ];
        $config['allowed_types'] = 'jpg|png|gif|jfif';
        $config['max_size'] = '0';
        $config['upload_path'] = './uploads/galery/';
        $this->upload->initialize($config);
        if ($this->upload->do_upload('file')) {
            $gambarLama = $this->input->post('file_old');
            if ($gambarLama != 'default.jpg') {
                unlink(FCPATH . '/uploads/galery/' . $gambarLama);
            }
            $gambarBaru = $this->upload->data('file_name');
            $this->db->set('file', $gambarBaru);
        } else {
            // echo $this->upload->display_errors();
        }
        $this->db->where('id',$id);
        $this->db->update('tb_foto',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil Memperbahrui Foto !</div>');
        redirect(base_url('admin/foto'));
    }

    public function delete($id){
        $data = $this->db->query("SELECT * FROM tb_foto where id='$id'");
        foreach ($data->result() as $u){
            unlink('uploads/galery/'.$u->file);
        } 
        $this->db->where('id',$id)->delete('tb_foto');
        $this->session->set_flashdata('sukses','<div class="alert alert-success"> Berhasil Menghapus Foto !</div>');
        redirect(base_url('admin/foto'));
    }

	public function store_kategori(){
		$data = [
			'kategori'	= $this->input->post('kategori'),
		];

		$this->db->insert('tb_kategori_galeri');
	}

}
        
    /* End of file  User.php */
        
                            

		 