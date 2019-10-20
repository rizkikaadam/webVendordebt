<?php
//File products_model.php

class Pembayaran_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function tampil()
	{
    //select semua data yang ada pada table kelas
		$this->db->select("*,DATEDIFF(CURRENT_DATE,tbl_invoice.tanggal) AS umur");
		$this->db->from("tbl_pembayaran");
		$this->db->join('tbl_invoice', 'tbl_invoice.id_invoice = tbl_pembayaran.id_invoice');		
    	//$this->db->order_by("tbl_retensi.berobat_terakhir", "desc");
		return $this->db->get();
	}

	function tambah_proses($data)
	{
		$this->db->insert('tbl_pembayaran', $data);
	}

}
