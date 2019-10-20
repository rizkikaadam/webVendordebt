<?php
//File products_model.php

class Histori_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}


	function hitung_histori()
	{
		$this->db->select("*");
		$this->db->from("tbl_pembayaran");
		return $this->db->get();
	}

	function tampil($id_invoice)
	{
    //select semua data yang ada pada table kelas
		$this->db->select("*");
		$this->db->from("tbl_pembayaran");
		//$this->db->join('tbl_retensi', 'tbl_retensi.no_rekammedis = tbl_rekammedis.no_rekammedis');	
		$this->db->where('tbl_pembayaran.id_invoice', $id_invoice);	
    	$this->db->order_by("tbl_pembayaran.tanggal", "desc");
		return $this->db->get();
	}

	function get_sisa($id)
	{
		$hasil=$this->db->query("SELECT * FROM tbl_invoice WHERE id_invoice='$id'");
		return $hasil->result();
	}


	function tampil_home()
	{
    //select semua data yang ada pada table kelas
		$this->db->select("*");
		$this->db->from("tbl_pembayaran");	
		$this->db->join('tbl_invoice', 'tbl_invoice.id_invoice = tbl_pembayaran.id_invoice');
		$this->db->join('tbl_detail_vendor', 'tbl_detail_vendor.id_detail_vendor = tbl_invoice.id_detail_vendor');
		$this->db->join('tbl_vendor', 'tbl_vendor.id_vendor = tbl_detail_vendor.id_vendor');
		//$this->db->where('tbl_pembayaran.id_invoice', $id_invoice);	
    	$this->db->order_by("tbl_pembayaran.tanggal", "desc");
		return $this->db->get();
	}

	function tambah_proses($data)
	{
		$this->db->insert('tbl_pembayaran', $data);
	}

	function edit($id_histori){
		$this->db->select("*");
		$this->db->from("tbl_pembayaran");
    	$this->db->where('tbl_pembayaran.id_histori', $id_histori);
		return $this->db->get();
	}

	function edit_proses($data, $id_histori)
	{
		//update produk
    $this->db->where('id_histori', $id_histori);
    $this->db->update('tbl_pembayaran', $data); //Melakukan update terhadap table msProduct sesuai dengan data yang telah diterima dari controller
	}

	function hapus_proses($id_histori)
	{
		//delete produk berdasarkan id
	    $this->db->where('id_histori', $id_histori);
	    $this->db->delete('tbl_pembayaran');
	}
}
