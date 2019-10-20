<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends CI_Controller {

	function __construct(){
		parent::__construct();
		date_default_timezone_set( 'Asia/Jakarta' );
		if($this->session->userdata('status') != "login"){
		$this->session->set_flashdata('message', '0');
			redirect('Login');
		}
		$this->load->database();
		$this->load->helper('date');
		$this->load->library('session');
		$this->load->library('pdf_report');
		$this->load->model("Invoice_model");
		$this->load->model("Vendor_model"); //constructor yang dipanggil ketika memanggil profil.php untuk melakukan pemanggilan pada model : profil_model.php yang ada di folder models
	}

	public function index()
	{
		$this->load->view('header_tambah_data.php');
		$this->load->view('left.php');
		$this->load->view('top.php');
		//$datestring = '%Y-%m-%d';
		//$time = time();
		//$human= mdate($datestring, $time);
		//$data['tanggal_sekarang'] = $human;
		$data['data_vendor'] = $this->Vendor_model->tampil();
		$this->load->view('vendor.php',$data);
		$this->load->view('footer_tambah_data.php');
	}
	
	public function tambah_data(){
		$this->load->view('header_tambah_data.php');
		$this->load->view('left.php');
		$this->load->view('top.php');
		$data['data_fp'] = $this->Vendor_model->tampil_fp();
		$this->load->view('tambah_data_vendor.php',$data);
		$this->load->view('footer_tambah_data.php');
	}

	//clas donwload pdf
	public function D_pdf()
	{
		$this->load->view("v_report");
	}

	// awal kode vendor
	public function kode_vendor(){
		$this->load->view('header_tambah_data.php');
		$this->load->view('left.php');
		$this->load->view('top.php');
		$data['data_kode_vendor'] = $this->Vendor_model->tampil_kode_vendor();
		$this->load->view('kode_vendor.php',$data);
		$this->load->view('footer_tambah_data.php');
	}

	public function edit_kode_vendor($id_kode_vendor){
		$this->load->view('header_tambah_data.php');
		$this->load->view('left.php');
		$this->load->view('top.php');
		$data['data_kode_vendor'] = $this->Vendor_model->edit_kode_vendor($id_kode_vendor);
		$this->load->view('edit_data_kode_vendor.php',$data);
		$this->load->view('footer_tambah_data.php');
	}

	public function tambah_data_kode_vendor(){
		$this->load->view('header_tambah_data.php');
		$this->load->view('left.php');
		$this->load->view('top.php');
		$this->load->view('add_kode_vendor.php');
		$this->load->view('footer_tambah_data.php');
	}

	public function add_kode_vendor_proses()
	{
			//$tgl_inaktif = date('Y-m-d', strtotime('+5 year', strtotime( $this->input->post('berobat_terakhir') )));
			//$berobat_terakhir = nice_date($this->input->post('berobat_terakhir'), 'Y-m-d');
			//$tgl_lahir = nice_date($this->input->post('tgl_lahir'), 'Y-m-d');
			//$no_rak = substr($this->input->post('no_rekammedis'), 14, 2);
			$data = array(
						'kode_vendor'=>$this->input->post('kode_vendor'),
						'deskripsi'=>$this->input->post('deskripsi')
					);

				$this->Vendor_model->add_kode_vendor_proses($data); //passing variable $data ke products_model
			
				$this->session->set_flashdata('message', 'tambah');
				redirect('Vendor/kode_vendor'); //redirect page ke halaman utama controller products
	}

	public function edit_kode_vendor_proses()
	{
			//$tgl_inaktif = date('Y-m-d', strtotime('+5 year', strtotime( $this->input->post('berobat_terakhir') )));
			//$berobat_terakhir = nice_date($this->input->post('berobat_terakhir'), 'Y-m-d');
			//$tgl_lahir = nice_date($this->input->post('tgl_lahir'), 'Y-m-d');
			//$no_rak = substr($this->input->post('no_rekammedis'), 14, 2);
			$data = array(
						'kode_vendor'=>$this->input->post('kode_vendor'),
						'deskripsi'=>$this->input->post('deskripsi')
					);

				$id_kode_vendor = $this->input->post('id_kode_vendor');
				$this->Vendor_model->edit_kode_proses($data,$id_kode_vendor); //passing variable $data ke products_model
			
				$this->session->set_flashdata('message', 'tambah');
				redirect('Vendor/kode_vendor'); //redirect page ke halaman utama controller products
	}

	public function hapus_kode_vendor($id_kode_vendor)
	{
		$this->Vendor_model->hapus_kode_vendor($id_kode_vendor); //passing variable $data ke products_model

		$this->session->set_flashdata('message', 'hapus');
		redirect('Vendor/kode_vendor'); //redirect page ke halaman utama controller products
	}

	//akhir kode vendor


	public function detail_vendor($id_vendor){
		$this->load->view('header_tambah_data.php');
		$this->load->view('left.php');
		$this->load->view('top.php');
		$data['kode_vendor'] = $this->Vendor_model->kode_vendor($id_vendor);
		$data['data_vendor'] = $this->Vendor_model->edit($id_vendor);
		$data['data_invoice'] = $this->Invoice_model->tampil_detail_vendor($id_vendor);
		$this->load->view('detail_vendor.php',$data);
		$this->load->view('footer_tambah_data.php');
	}

	public function tambah_kode_vendor($id_vendor){
		$this->load->view('header_tambah_data.php');
		$this->load->view('left.php');
		$this->load->view('top.php');
		$data['data_vendor'] = $this->Vendor_model->edit($id_vendor);
		$data['kode_vendor'] = $this->Vendor_model->tampil_kode_vendor();
		$this->load->view('tambah_kode_vendor.php',$data);
		$this->load->view('footer_tambah_data.php');
	}

	public function tambah_kode_vendor_proses()
	{
			//$tgl_inaktif = date('Y-m-d', strtotime('+5 year', strtotime( $this->input->post('berobat_terakhir') )));
			//$berobat_terakhir = nice_date($this->input->post('berobat_terakhir'), 'Y-m-d');
			//$tgl_lahir = nice_date($this->input->post('tgl_lahir'), 'Y-m-d');
			//$no_rak = substr($this->input->post('no_rekammedis'), 14, 2);
			$data = array(
						'id_vendor'=>$this->input->post('id_vendor'),
						'id_kode_vendor'=>$this->input->post('id_kode_vendor')
					);

				$this->Vendor_model->tambah_kode_vendor_proses($data); //passing variable $data ke products_model
			
				$this->session->set_flashdata('message', 'tambah');
				$id_vendor = $this->input->post('id_vendor');
				redirect('Vendor/detail_vendor/'.$id_vendor); //redirect page ke halaman utama controller products
	}
	
	


	public function tambahdata_proses()
	{
			//$tgl_inaktif = date('Y-m-d', strtotime('+5 year', strtotime( $this->input->post('berobat_terakhir') )));
			//$berobat_terakhir = nice_date($this->input->post('berobat_terakhir'), 'Y-m-d');
			//$tgl_lahir = nice_date($this->input->post('tgl_lahir'), 'Y-m-d');
			//$no_rak = substr($this->input->post('no_rekammedis'), 14, 2);
			$data = array(
						'nama_vendor'=>$this->input->post('nama_vendor'),
						'alamat_vendor'=>$this->input->post('alamat_vendor'),
						'pj_vendor'=>$this->input->post('pj_vendor'),
						'telp_vendor'=>$this->input->post('telp_vendor'),
						'kota_vendor'=>$this->input->post('kota_vendor'),
						'no_rekening'=>$this->input->post('no_rek'),
						'email_vendor'=>$this->input->post('email'),
						'id_faktur_pajak'=>$this->input->post('id_faktur_pajak'),
						'ket'=>$this->input->post('ket')
					);

				$this->Vendor_model->tambah_proses($data); //passing variable $data ke products_model
			
				$this->session->set_flashdata('message', 'tambah');
				redirect('Vendor'); //redirect page ke halaman utama controller products
	}

	public function edit($id_vendor)
	{
		$this->load->view('header_tambah_data.php');
		$this->load->view('left.php');
		$this->load->view('top.php');
		$data['data_vendor'] = $this->Vendor_model->edit($id_vendor);
		$this->load->view('edit_data_vendor.php',$data);
		$this->load->view('footer_tambah_data.php');
	}

	public function edit_proses()
	{
			$data = array(
						'nama_vendor'=>$this->input->post('nama_vendor'),
						'alamat_vendor'=>$this->input->post('alamat_vendor'),
						'pj_vendor'=>$this->input->post('pj_vendor'),
						'telp_vendor'=>$this->input->post('telp_vendor'),
						'kota_vendor'=>$this->input->post('kota_vendor'),
						'no_rekening'=>$this->input->post('no_rek'),
						'email_vendor'=>$this->input->post('email'),
						'ket'=>$this->input->post('ket')
				);

			
			$id_vendor = $this->input->post('id_vendor');
			$this->Vendor_model->edit_proses($data,$id_vendor);

			$this->session->set_flashdata('message', 'edit');
			redirect('Vendor'); //redirect page ke halaman utama controller products
	}

	public function hapus($id_vendor)
	{
		$this->Vendor_model->hapus_proses($id_vendor); //passing variable $data ke products_model

		$this->session->set_flashdata('message', 'hapus');
		redirect('Vendor'); //redirect page ke halaman utama controller products
	}

	// awal kode berkas
	public function kode_berkas(){
		$this->load->view('header_tambah_data.php');
		$this->load->view('left.php');
		$this->load->view('top.php');
		$data['data_kode_berkas'] = $this->Vendor_model->tampil_kode_berkas();
		$this->load->view('kode_berkas.php',$data);
		$this->load->view('footer_tambah_data.php');
	}

	public function edit_kode_berkas($id_kode_berkas){
		$this->load->view('header_tambah_data.php');
		$this->load->view('left.php');
		$this->load->view('top.php');
		$data['data_kode_berkas'] = $this->Vendor_model->edit_kode_berkas($id_kode_berkas);
		$this->load->view('edit_data_kode_berkas.php',$data);
		$this->load->view('footer_tambah_data.php');
	}

	public function tambah_data_kode_berkas(){
		$this->load->view('header_tambah_data.php');
		$this->load->view('left.php');
		$this->load->view('top.php');
		$this->load->view('add_kode_berkas.php');
		$this->load->view('footer_tambah_data.php');
	}

	public function add_kode_berkas_proses()
	{
			//$tgl_inaktif = date('Y-m-d', strtotime('+5 year', strtotime( $this->input->post('berobat_terakhir') )));
			//$berobat_terakhir = nice_date($this->input->post('berobat_terakhir'), 'Y-m-d');
			//$tgl_lahir = nice_date($this->input->post('tgl_lahir'), 'Y-m-d');
			//$no_rak = substr($this->input->post('no_rekammedis'), 14, 2);
			$data = array(
						'kode_berkas'=>$this->input->post('kode_berkas'),
						'deskripsi'=>$this->input->post('deskripsi')
					);

				$this->Vendor_model->add_kode_berkas_proses($data); //passing variable $data ke products_model
			
				$this->session->set_flashdata('message', 'tambah');
				redirect('Vendor/kode_berkas'); //redirect page ke halaman utama controller products
	}

	public function edit_kode_berkas_proses()
	{
			//$tgl_inaktif = date('Y-m-d', strtotime('+5 year', strtotime( $this->input->post('berobat_terakhir') )));
			//$berobat_terakhir = nice_date($this->input->post('berobat_terakhir'), 'Y-m-d');
			//$tgl_lahir = nice_date($this->input->post('tgl_lahir'), 'Y-m-d');
			//$no_rak = substr($this->input->post('no_rekammedis'), 14, 2);
			$data = array(
						'kode_berkas'=>$this->input->post('kode_berkas'),
						'deskripsi'=>$this->input->post('deskripsi')
					);

				$id_kode_berkas = $this->input->post('id_kode_berkas');
				$this->Vendor_model->edit_kode_berkas_proses($data,$id_kode_berkas); //passing variable $data ke products_model
			
				$this->session->set_flashdata('message', 'tambah');
				redirect('Vendor/kode_berkas'); //redirect page ke halaman utama controller products
	}

	public function hapus_kode_berkas($id_kode_berkas)
	{
		$this->Vendor_model->hapus_kode_berkas($id_kode_berkas); //passing variable $data ke products_model

		$this->session->set_flashdata('message', 'hapus');
		redirect('Vendor/kode_berkas'); //redirect page ke halaman utama controller products
	}


	//akhir kode berkas


	// awal kode faktur pajak
	public function kode_faktur_pajak(){
		$this->load->view('header_tambah_data.php');
		$this->load->view('left.php');
		$this->load->view('top.php');
		$data['data_fp'] = $this->Vendor_model->tampil_fp();
		$this->load->view('kode_faktur_pajak.php',$data);
		$this->load->view('footer_tambah_data.php');
	}


		public function edit_kode_faktur_pajak($id_faktur_pajak){
		$this->load->view('header_tambah_data.php');
		$this->load->view('left.php');
		$this->load->view('top.php');
		$data['data_kode_faktur_pajak'] = $this->Vendor_model->edit_kode_faktur_pajak($id_faktur_pajak);
		$this->load->view('edit_data_kode_faktur_pajak.php',$data);
		$this->load->view('footer_tambah_data.php');
	}

	public function tambah_data_kode_faktur_pajak(){
		$this->load->view('header_tambah_data.php');
		$this->load->view('left.php');
		$this->load->view('top.php');
		$this->load->view('add_kode_faktur_pajak.php');
		$this->load->view('footer_tambah_data.php');
	}

	public function add_kode_faktur_pajak_proses()
	{
			//$tgl_inaktif = date('Y-m-d', strtotime('+5 year', strtotime( $this->input->post('berobat_terakhir') )));
			//$berobat_terakhir = nice_date($this->input->post('berobat_terakhir'), 'Y-m-d');
			//$tgl_lahir = nice_date($this->input->post('tgl_lahir'), 'Y-m-d');
			//$no_rak = substr($this->input->post('no_rekammedis'), 14, 2);
			$nilaipajak=$this->input->post('nilai_pajak');
			$pajak=$nilaipajak/100;
			$data = array(
						'kd_faktur_pajak'=>$this->input->post('kode_faktur_pajak'),
						'nilai_pajak'=>$pajak,
						'pasal'=>$this->input->post('pasal'),
						'deskripsi'=>$this->input->post('deskripsi')
					);

				$this->Vendor_model->add_kode_faktur_pajak_proses($data); //passing variable $data ke products_model
			
				$this->session->set_flashdata('message', 'tambah');
				redirect('Vendor/kode_faktur_pajak'); //redirect page ke halaman utama controller products
	}

	public function edit_kode_faktur_pajak_proses()
	{
			//$tgl_inaktif = date('Y-m-d', strtotime('+5 year', strtotime( $this->input->post('berobat_terakhir') )));
			//$berobat_terakhir = nice_date($this->input->post('berobat_terakhir'), 'Y-m-d');
			//$tgl_lahir = nice_date($this->input->post('tgl_lahir'), 'Y-m-d');
			//$no_rak = substr($this->input->post('no_rekammedis'), 14, 2);
			$nilaipajak=$this->input->post('nilai_pajak');
			$pajak=$nilaipajak/100;
			$data = array(
						'kd_faktur_pajak'=>$this->input->post('kode_faktur_pajak'),
						'nilai_pajak'=>$this->$pajak,
						'pasal'=>$this->input->post('pasal'),
						'deskripsi'=>$this->input->post('deskripsi')
					);

				$id_faktur_pajak = $this->input->post('id_faktur_pajak');
				$this->Vendor_model->edit_kode_fp_proses($data,$id_faktur_pajak); //passing variable $data ke products_model
			
				$this->session->set_flashdata('message', 'tambah');
				redirect('Vendor/kode_faktur_pajak'); //redirect page ke halaman utama controller products
	}

	public function hapus_kode_faktur_pajak($id_faktur_pajak)
	{
		$this->Vendor_model->hapus_fp_proses($id_faktur_pajak); //passing variable $data ke products_model

		$this->session->set_flashdata('message', 'hapus');
		redirect('Vendor/kode_faktur_pajak'); //redirect page ke halaman utama controller products
	}

	//akhir kode faktur pajak
}
