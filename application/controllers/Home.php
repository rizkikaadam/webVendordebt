<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->model("Vendor_model");
		$this->load->model("Histori_model");
		$this->load->model("Pembayaran_model");
		$this->load->model("Invoice_model"); //constructor yang dipanggil ketika memanggil profil.php untuk melakukan pemanggilan pada model : profil_model.php yang ada di folder models
	}

	public function index()
	{
		$this->load->view('header.php');
		$this->load->view('left.php');
		$this->load->view('top.php');
		//$this->load->view('left.php');
		$data['hitung_vendor'] = $this->Vendor_model->hitung_vendor();
		$data['hitung_invoice'] = $this->Invoice_model->hitung_invoice();
		//$data['hitung_rekammedis_aktif'] = $this->Dretensi_model->hitung_rekammedis_aktif();
		//$data['hitung_rekammedis_inaktif'] = $this->Dretensi_model->hitung_rekammedis_inaktif();
		//$data['hitung_rekammedis_tindak_lanjut'] = $this->Dretensi_model->hitung_rekammedis_tindak_lanjut();
		//$this->load->view('berita.php',$data);
		$data['data_pembayaran'] = $this->Pembayaran_model->tampil();
		$this->load->view('home.php',$data);
		$this->load->view('footer.php');
	}

	public function home_user()
	{
		//$this->load->view('header.php');
		//$this->load->view('left_user.php');
		//$this->load->view('top.php');
		//$data['hitung_vendor'] = $this->Vendor_model->hitung_vendor();
		//$data['hitung_invoice'] = $this->Invoice_model->hitung_invoice();
		//$data['hitung_rekammedis_aktif'] = $this->Dretensi_model->hitung_rekammedis_aktif();
		//$data['hitung_rekammedis_inaktif'] = $this->Dretensi_model->hitung_rekammedis_inaktif();
		//$data['hitung_rekammedis_tindak_lanjut'] = $this->Dretensi_model->hitung_rekammedis_tindak_lanjut();
		//$this->load->view('berita.php',$data);
		$data['data_pembayaran'] = $this->Pembayaran_model->tampil();
		//$this->load->view('home_user.php',$data);
		//$this->load->view('footer.php');
		$this->load->view('user.php',$data);
	}

}
