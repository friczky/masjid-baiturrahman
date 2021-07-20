<?php 

class M_Kajian extends CI_Model{
	//ambil data mahasiswa dari database
    function get_kajian($limit, $start){
        $query = $this->db->order_by('id','desc')->get('tb_kajian', $limit, $start);
        return $query;
    }
}
