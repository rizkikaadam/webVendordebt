<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Histori extends CI_Controller {

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
		$this->load->model("histori_model");
		$this->load->model("Invoice_model"); //constructor yang dipanggil ketika memanggil profil.php untuk melakukan pemanggilan pada model : profil_model.php yang ada di folder models
	}

	public function tambah_data_home(){
		
		$this->load->view('header_tambah_data.php');
		$this->load->view('left.php');
		$this->load->view('top.php');
		$data['data_invoice'] = $this->Invoice_model->tampil();
		$this->load->view('tambah_data_histori.php',$data);
		$this->load->view('footer_tambah_data.php');
	}

	public function tampil($id_invoice)
	{
		$this->load->view('header_tambah_data.php');
		$this->load->view('left.php');
		$this->load->view('top.php');
		//$datestring = '%Y-%m-%d';
		//$time = time();
		//$human= mdate($datestring, $time);
		//$data['tanggal_sekarang'] = $human;
		$data['data_invoice'] = $this->Invoice_model->tampil();
		$data['data_histori'] = $this->histori_model->tampil($id_invoice);
		$this->load->view('histori.php',$data);
		$this->load->view('footer_tambah_data.php');
	}

	public function get_sisa()
	{
		$id=$this->input->post('id');
        $data=$this->Histori_model->get_sisa($id);
        echo json_encode($data);
	}

	public function tambah_proses()
	{
			//$tgl_inaktif = date('Y-m-d', strtotime('+5 year', strtotime( $this->input->post('berobat_terakhir') )));
			//$berobat_terakhir = nice_date($this->input->post('berobat_terakhir'), 'Y-m-d');
			//$tgl_lahir = nice_date($this->input->post('tgl_lahir'), 'Y-m-d');
			//$no_rak = substr($this->input->post('no_rekammedis'), 14, 2);
				$datestring = '%Y-%m-%d';
						$time = time();
						$human= mdate($datestring, $time);

				
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
												'id_invoice'=>$this->input->post('id_invoice'),
												'nilai_bayar'=>$this->input->post('nilai_bayar'),
												'keterangan'=>$this->input->post('keterangan'),
												'tanggal'=>$human
											);

							$this->histori_model->tambah_proses($data); //passing variable $data ke products_model
							$this->session->set_flashdata('message', 'tambah');
							redirect('invoice'); //redirect page ke halaman utama controller products
						}
	}

	public function tambah_proses_home()
	{
			//$tgl_inaktif = date('Y-m-d', strtotime('+5 year', strtotime( $this->input->post('berobat_terakhir') )));
			//$berobat_terakhir = nice_date($this->input->post('berobat_terakhir'), 'Y-m-d');
			//$tgl_lahir = nice_date($this->input->post('tgl_lahir'), 'Y-m-d');
			//$no_rak = substr($this->input->post('no_rekammedis'), 14, 2);


				
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
												'image_histori' =>$gbr['file_name'],
												'id_invoice'=>$this->input->post('id_invoice'),
												'keterangan'=>$this->input->post('keterangan'),
												'tanggal'=>$this->input->post('tanggal')
											);

							$this->histori_model->tambah_proses($data); //passing variable $data ke products_model
							$this->session->set_flashdata('message', 'tambah');
							redirect('invoice'); //redirect page ke halaman utama controller products
						}
	}
}
