<?php
//File products_model.php

class Vendor_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}


	function hitung_vendor()
	{
		$this->db->select("*");
		$this->db->from("tbl_vendor");
		return $this->db->get();
	}
	

	function tampil()
	{
    //select semua data yang ada pada table kelas
		$this->db->select("*");
		$this->db->from("tbl_vendor");
		//$this->db->join('tbl_retensi', 'tbl_retensi.no_rekammedis = tbl_rekammedis.no_rekammedis');		
    	//$this->db->order_by("tbl_retensi.berobat_terakhir", "desc");
		return $this->db->get();
	}

	function tampil_detail()
	{
    //select semua data yang ada pada table kelas
		$this->db->select("*");
		$this->db->from("tbl_detail_vendor");
		$this->db->join('tbl_vendor', 'tbl_vendor.id_vendor = tbl_detail_vendor.id_vendor');	
		$this->db->join('tbl_kode_vendor', 'tbl_kode_vendor.id_kode_vendor = tbl_detail_vendor.id_kode_vendor');	
    	//$this->db->order_by("tbl_retensi.berobat_terakhir", "desc");
		return $this->db->get();
	}


	//awal kode faktur pajak
	function tampil_fp()
	{
		$this->db->select("*");
		$this->db->from("tbl_faktur_pajak");

		return $this->db->get();
	}

	function add_kode_faktur_pajak_proses($data)
	{
		$this->db->insert('tbl_faktur_pajak', $data);
	}

	function edit_kode_faktur_pajak($id_kode_faktur_pajak){
		$this->db->select("*");
		$this->db->from("tbl_faktur_pajak");
    	$this->db->where('tbl_faktur_pajak.id_faktur_pajak', $id_faktur_pajak);
		return $this->db->get();
	}

	function edit_kode_fp_proses($data, $id_faktur_pajak)
	{
		//update produk
    $this->db->where('id_faktur_pajak', $id_faktur_pajak);
    $this->db->update('tbl_faktur_pajak', $data); //Melakukan update terhadap table msProduct sesuai dengan data yang telah diterima dari controller
	}

	function hapus_fp_proses($id_faktur_pajak)
	{
		//delete produk berdasarkan id
	    $this->db->where('id_faktur_pajak', $id_faktur_pajak);
	    $this->db->delete('tbl_faktur_pajak');
	}

	//akhir kode faktur pajak

	//awal kode vendor
	function tampil_kode_vendor()
	{
		$this->db->select("*");
		$this->db->from("tbl_kode_vendor");
		return $this->db->get();
	}

	function add_kode_vendor_proses($data)
	{
		$this->db->insert('tbl_kode_vendor', $data);
	}

	function edit_kode_vendor($id_kode_vendor){
		$this->db->select("*");
		$this->db->from("tbl_kode_vendor");
    	$this->db->where('tbl_kode_vendor.id_kode_vendor', $id_kode_vendor);
		return $this->db->get();
	}

	function edit_kode_proses($data, $id_kode_vendor)
	{
		//update produk
    $this->db->where('id_kode_vendor', $id_kode_vendor);
    $this->db->update('tbl_kode_vendor', $data); //Melakukan update terhadap table msProduct sesuai dengan data yang telah diterima dari controller
	}

	function hapus_kode_vendor($id_kode_vendor)
	{
		//delete produk berdasarkan id
	    $this->db->where('id_kode_vendor', $id_kode_vendor);
	    $this->db->delete('tbl_kode_vendor');
	}

	//akhir kode vendor

	//awal kode berkas
	function tampil_kode_berkas()
	{
		$this->db->select("*");
		$this->db->from("tbl_kode_berkas");
		return $this->db->get();
	}

	function add_kode_berkas_proses($data)
	{
		$this->db->insert('tbl_kode_berkas', $data);
	}

	function edit_kode_berkas($id_kode_berkas){
		$this->db->select("*");
		$this->db->from("tbl_kode_berkas");
    	$this->db->where('tbl_kode_berkas.id_kode_berkas', $id_kode_berkas);
		return $this->db->get();
	}

	function edit_kode_berkas_proses($data, $id_kode_berkas)
	{
		//update produk
    $this->db->where('id_kode_berkas', $id_kode_berkas);
    $this->db->update('tbl_kode_berkas', $data); //Melakukan update terhadap table msProduct sesuai dengan data yang telah diterima dari controller
	}

	function hapus_kode_berkas($id_kode_berkas)
	{
		//delete produk berdasarkan id
	    $this->db->where('id_kode_berkas', $id_kode_berkas);
	    $this->db->delete('tbl_kode_berkas');
	}

	//akhir kode berkas

	function tambah_proses($data)
	{
		$this->db->insert('tbl_vendor', $data);
	}


	function tambah_kode_vendor_proses($data)
	{
		$this->db->insert('tbl_detail_vendor', $data);
	}


	function edit($id_vendor){
		$this->db->select("*");
		$this->db->from("tbl_vendor");
    	$this->db->where('tbl_vendor.id_vendor', $id_vendor);
		return $this->db->get();
	}

	function kode_vendor($id_vendor){
		$this->db->select("*");
		$this->db->from("tbl_detail_vendor");
		$this->db->join('tbl_kode_vendor', 'tbl_kode_vendor.id_kode_vendor = tbl_detail_vendor.id_kode_vendor');		
    	$this->db->where('tbl_detail_vendor.id_vendor', $id_vendor);
		return $this->db->get();
	}

	function edit_proses($data, $id_vendor)
	{
		//update produk
    $this->db->where('id_vendor', $id_vendor);
    $this->db->update('tbl_vendor', $data); //Melakukan update terhadap table msProduct sesuai dengan data yang telah diterima dari controller
	}

	function hapus_proses($id_vendor)
	{
		//delete produk berdasarkan id
	    $this->db->where('id_vendor', $id_vendor);
	    $this->db->delete('tbl_vendor');
	}
}
