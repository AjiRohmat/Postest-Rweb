<?php 

class M_login extends CI_Model{
	
	public function cek_akun($username, $password){
		$this->db->select('*');
		$this->db->from('login');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		if($query = $this->db->get()){
			return $query->row_array();
		}else{
			return false;
		}
	}
}

?>
