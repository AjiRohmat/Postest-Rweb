<?php

class M_anggota extends CI_Model{
	
	function data_anggota(){
		return $this->db->get('anggota');

	}
	function data_berita(){
		return $this->db->get('berita');
	}
	function simpan_data($data){
		$this->db->insert('anggota',$data);
	}
	function edit_data($where){
		return $this->db->get_where('anggota',$where);  
	}
	function update_data($where, $data){
		$this->db->where($where);
		$this->db->update('anggota', $data);
	}
	function hapus_data($where){
		$this->db->where($where);
		$this->db->delete('anggota',$where);
	}
}