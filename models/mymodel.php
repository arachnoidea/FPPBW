<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mymodel extends CI_Model {
	
	public function GetBarang(){
		$query=$this->db->get('barang');
	 	return $query->result_array();  
	}

	public function GetTesti(){
		$query=$this->db->get('testi');
	 	return $query->result_array();  
	}

	public function GetBarangUp($where=""){
		$data = $this->db->query('select * from barang '.$where);
		return $data->result_array();
	}
	public function InsertData($tableName, $data){
		$res = $this->db->insert($tableName, $data);
		return $res;
	}

	public function UpdateData($tableName, $data, $where){
		$res = $this->db->update($tableName, $data, $where);
		return $res;
	}

	public function DeleteData($tableName, $data, $where){
		$res = $this->db->delete($tableName, $data, $where);
		return $res;
	}

	function get_barang($where){
		$this->db->get_where('barang',$where);
		return $data->result_array();
	}

	function insert_upload($table,$where,$data){
		$this->db->update($table,$data,$where);
	}
}
