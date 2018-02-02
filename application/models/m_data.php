<?php

class M_data extends CI_Model{
	function tampil_data_user(){
		return $this->db->get('user');
	}

	function tampil_data_customer(){
		return $this->db->get('customer');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function edit_data_user($where,$table){		
	return $this->db->get_where($table,$where);
	}

	function edit_data_customer($where,$table){		
	return $this->db->get_where($table,$where);
	}

	function update_data_user($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function update_data_customer($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function hapus_data_user($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
	}

	function hapus_data_customer($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
	}

	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
}