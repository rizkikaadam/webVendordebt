<?php
//File products_model.php

class Invoice_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}


	function hitung_invoice()
	{
		$this->db->select("*");
		$this->db->from("tbl_invoice");
		return $this->db->get();
	}

	function tampil()
	{
    //select semua data yang ada pada table kelas
		$this->db->select("*,DATEDIFF(CURRENT_DATE,tbl_invoice.tanggal) AS umur");
		$this->db->from("tbl_invoice");
		$this->db->join('tbl_detail_vendor', 'tbl_detail_vendor.id_detail_vendor = tbl_invoice.id_detail_vendor');
		$this->db->join('tbl_kode_berkas', 'tbl_kode_berkas.id_kode_berkas = tbl_invoice.id_kode_berkas');		
		$this->db->join('tbl_faktur_pajak', 'tbl_faktur_pajak.id_faktur_pajak = tbl_invoice.id_faktur_pajak');	
		$this->db->join('tbl_vendor', 'tbl_vendor.id_vendor = tbl_detail_vendor.id_vendor');		
    	//$this->db->order_by("tbl_retensi.berobat_terakhir", "desc");
		return $this->db->get();
	}

	function tampil_detail_vendor($id_vendor)
	{
		$this->db->from("tbl_invoice");
		$this->db->join('tbl_detail_vendor', 'tbl_detail_vendor.id_detail_vendor = tbl_invoice.id_detail_vendor');
		$this->db->join('tbl_vendor', 'tbl_vendor.id_vendor = tbl_detail_vendor.id_vendor');	
		$this->db->where('tbl_vendor.id_vendor', $id_vendor);	
    	$this->db->order_by("tbl_invoice.tanggal", "desc");
		return $this->db->get();
	}


	function tampil_kode_berkas()
	{
		$this->db->select("*");
		$this->db->from("tbl_kode_berkas");

		return $this->db->get();
	}

	function tampil_fp()
	{
		$this->db->select("*");
		$this->db->from("tbl_faktur_pajak");

		return $this->db->get();
	}

	function tampil_kode_faktur_pajak()
	{
		$this->db->select("*");
		$this->db->from("tbl_faktur_pajak");

		return $this->db->get();
	}

	function tampil_tanggal()
	{
    //select semua data yang ada pada table kelas
		$this->db->select("*");
		$this->db->from("tbl_invoice");
		$this->db->join('tbl_histori', 'tbl_histori.id_invoice = tbl_invoice.id_invoice');		
    	//$this->db->order_by("tbl_retensi.berobat_terakhir", "desc");
		return $this->db->get();
	}

	function tambah_proses($data)
	{
		$this->db->insert('tbl_invoice', $data);
	}

	function edit($id_invoice){
		$this->db->select("*");
		$this->db->from("tbl_invoice");
    	$this->db->where('tbl_invoice.id_invoice', $id_invoice);
		return $this->db->get();
	}

	function edit_proses($data, $id_invoice)
	{
		//update produk
    $this->db->where('id_invoice', $id_invoice);
    $this->db->update('tbl_invoice', $data); //Melakukan update terhadap table msProduct sesuai dengan data yang telah diterima dari controller
	}

	function hapus_proses($id_invoice)
	{
		//delete produk berdasarkan id
	    $this->db->where('id_invoice', $id_invoice);
	    $this->db->delete('tbl_invoice');
	}

}
