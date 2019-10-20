<?php
class M_kategori extends CI_Model{

	function get_invoice(){
		$hasil=$this->db->query("SELECT * FROM tbl_invoice");
		return $hasil;
	}

	function get_sisa($id){
		$hasil=$this->db->query("SELECT * FROM tbl_invoice WHERE id_invoice='$id'");
		return $hasil->result();
	}
}