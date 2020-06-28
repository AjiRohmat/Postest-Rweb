<?php

class M_berita extends CI_Model{
	
	function data_berita(){
		return $this->db->get('berita');
	}
	function simpan_data($data){
		$this->db->insert('berita',$data);
	}
	function eberita($where){
		return $this->db->get_where('berita', $where);  
	}
	function update_berita($where, $data){
		$this->db->where($where);
		$this->db->update('berita', $data);
	}
	function hapus_berita($where){
		$this->db->where($where);
		$this->db->delete('berita',$where);
	}
}