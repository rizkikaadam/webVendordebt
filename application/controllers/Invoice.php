<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {

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
		$this->load->model("invoice_model"); //constructor yang dipanggil ketika memanggil profil.php untuk melakukan pemanggilan pada model : profil_model.php yang ada di folder models
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
		$data['data_invoice'] = $this->invoice_model->tampil();
		//$data['data_tanggal'] = $this->invoice_model->tampil_tanggal();
		$this->load->view('invoice.php',$data);
		$this->load->view('footer_tambah_data.php');
	}
	
	public function tambah_data(){
		$this->load->view('header_tambah_data.php');
		$this->load->view('left.php');
		$this->load->view('top.php');

		$data['data_vendor'] = $this->Vendor_model->tampil_detail();
		$data['data_berkas'] = $this->invoice_model->tampil_kode_berkas();
		$data['data_fp'] = $this->invoice_model->tampil_fp();
		$this->load->view('tambah_data_invoice.php',$data);
		$this->load->view('footer_tambah_data.php');
	}

	public function tambahdata_proses()
	{
			//$tgl_inaktif = date('Y-m-d', strtotime('+5 year', strtotime( $this->input->post('berobat_terakhir') )));
			//$berobat_terakhir = nice_date($this->input->post('berobat_terakhir'), 'Y-m-d');
			//$tgl_lahir = nice_date($this->input->post('tgl_lahir'), 'Y-m-d');
			//$no_rak = substr($this->input->post('no_rekammedis'), 14, 2);


				/* jika menggunakan image hapus komen ini 
				$this->load->library('upload');
					$config['upload_path']          = './assets/file/'; //path folder
					$config['allowed_types']        = 'gif|jpg|png|jpeg|bmp|png';
					//$config['allowed_types'] = 'gif|jpg|png|pdf|rar|docx|xlsx|doc|xls|ppt|pptx|zip';
					//$config['max_size']     = '2048';
					//$config['max_width'] = '0';
					//$config['max_height'] = '0';
					$this->upload->initialize($config);

					$this->load->library('upload', $config);

					if ( ! $this->upload->do_upload('image')){
						$error = array('error' => $this->upload->display_errors());
						$this->load->view('invoice', $error);
					}else{
						$gbr = $this->upload->data();
						$data = array(
												'image' =>$gbr['file_name'],
												'kd_invoice'=>$this->input->post('kd_invoice'),
												'keterangan'=>$this->input->post('keterangan'),
												'id_vendor'=>$this->input->post('id_vendor')
											);

							$this->invoice_model->tambah_proses($data); //passing variable $data ke products_model
							$this->session->set_flashdata('message', 'tambah');
							redirect('invoice'); //redirect page ke halaman utama controller products
						}*/
						$datestring = '%Y-%m-%d';
						$time = time();
						$human= mdate($datestring, $time);

						$data = array(
												'kd_invoice'=>$this->input->post('kd_invoice'),
												'id_kode_berkas'=>$this->input->post('kd_berkas'),
												'id_faktur_pajak'=>$this->input->post('kd_faktur_pajak'),
												'id_detail_vendor'=>$this->input->post('id_detail_vendor'),
												'nilai_invoice'=>$this->input->post('nilai_invoice'),
												'sisa'=>$this->input->post('nilai_invoice'),
												'keterangan'=>$this->input->post('keterangan'),
												'bahan_baku_vendor'=>$this->input->post('keterangan'),
												'tanggal'=>$human
											);

							$this->invoice_model->tambah_proses($data); //passing variable $data ke products_model
							$this->session->set_flashdata('message', 'tambah');
							redirect('invoice'); //redirect page ke halaman utama controller products

	}

	public function edit($id_invoice)
	{
		$this->load->view('header_tambah_data.php');
		$this->load->view('left.php');
		$this->load->view('top.php');
		$data['data_invoice'] = $this->invoice_model->edit($id_invoice);
		$data['data_berkas'] = $this->invoice_model->tampil_kode_berkas();
		$data['data_fp'] = $this->invoice_model->tampil_fp();
		$this->load->view('edit_data_invoice.php',$data);
		$this->load->view('footer_tambah_data.php');
	}

	public function edit_proses()
	{
			$data = array(
						'kd_invoice'=>$this->input->post('kd_invoice'),
						'image'=>$this->input->post('image'),
						'keterangan'=>$this->input->post('keterangan'),
						'id_vendor'=>$this->input->post('id_vendor')
				);

			
			$id_invoice = $this->input->post('id_invoice');
			$this->invoice_model->edit_proses($data,$id_invoice);

			$this->session->set_flashdata('message', 'edit');
			redirect('invoice'); //redirect page ke halaman utama controller products
	}

	public function hapus($id_invoice)
	{
		$this->invoice_model->hapus_proses($id_invoice); //passing variable $data ke products_model

		$this->session->set_flashdata('message', 'hapus');
		redirect('invoice'); //redirect page ke halaman utama controller products
	}

}
