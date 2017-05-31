<?php 
 
class M_login extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}

	function getBarang() {
		$query=$this->db->get('barang');
		return $query->result_array();
	}
	//function getMenu(){
	//$query=$this->db->get('menu');
	//return $query->result_array();  
	//}
}




	

