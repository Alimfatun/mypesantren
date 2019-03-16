<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{
	 parent::__construct();
	 $this->load->model('mdata', '', TRUE);
	 $this->load->helper(array('form', 'url'));

	}
	public function index()
	{
		$data['title'] ="Home";
		$this->load->view('header',$data);
		$this->load->view('navbar');
		$this->load->view('content');
		$this->load->view('footer2nd');
	}


	public function gallery()
	{
		$data['title'] ="Gallery";
		$this->load->view('header',$data);
		$this->load->view('navbar');
		$this->load->view('gallery');
		$this->load->view('footer2nd');
	}


	public function daftar()
	{
		$data['title'] ="Daftar Online";
		$this->load->view('header',$data);
		$this->load->view('navbar');
		$this->load->view('form');
		$this->load->view('footer2nd');
	}

	public function tentang()
	{
		$data['title'] ="Tentang mypesantren";
		$this->load->view('header',$data);
		$this->load->view('navbar');
		$this->load->view('tentang');
		$this->load->view('footer2nd');
	}

	public function program()
	{
		$data['title'] ="Progam";
		$this->load->view('header',$data);
		$this->load->view('navbar');
		$this->load->view('program');
		$this->load->view('footer2nd');
	}


	public function insert_data() {

		$kin = $this->input->post('nop');
		$where = array ('nop'=>$kin);
		$mf = $this->mdata->check_all('tbdata',$where,1);

		if($mf) {
			$this->session->set_flashdata('error', 'Nomor Pendaftaran sudah ada');
			redirect('home/daftar', 'refresh');
		} else {

			$data = array (
								'nop'=>$this->input->post('nop'),
								'nama'=>$this->input->post('nama'),
								'gender'=>$this->input->post('gender'),
								'tempat'=>$this->input->post('tempat'),
								'lahir' =>$this->input->post('tgl'),
								'anak'=>$this->input->post('anak').",".$this->input->post('anak1'),
								'alamat'=>$this->input->post('alamat'),
								'nohp'=>$this->input->post('nom'),
								'sekolah'=>$this->input->post('sekolah'),
								'program'=>$this->input->post('optradio'),
								'namay'=>$this->input->post('namay'),
								'namab'=>$this->input->post('namab'),
								'joby'=>$this->input->post('joby'),
								'jobb'=>$this->input->post('jobb'),
								'alamat1'=>$this->input->post('alamat1'),
								'nohp1'=>$this->input->post('nom1'),
								'date'=>date("Y-m-d")
			);

			$this->mdata->insert_all('tbdata',$data);
			$this->session->set_flashdata('success',$kin);
			redirect('home/layout', 'refresh');
		}

	}

	public function layout()
	{
			$data['title'] ="Kartu Daftar";
			$this->load->view('header',$data);
			$this->load->view('navbar');

		if($this->session->flashdata('success')) {
		    $nop = $this->session->flashdata('success');
			$where = array ('nop'=>$nop);
			$data['psb'] = $this->mdata->check_all('tbdata',$where,1);
			$this->load->view('kartu',$data);
		  } else {
		    $this->load->view('404');
		  }
		  	$this->load->view('footer2nd');
	}

	public function cek() {
		$kin = $this->input->post('nik');
		$where = array ('nikr'=>$kin);
		$cek = $this->mdata->check_all('tbrpt',$where,1);

		if($cek) {

			$awal = date("Y-m-d");
			$akhir = $this->mdata->getuno('tbrpt',$where,'akhir');

			if($awal<$akhir) {
				$this->session->set_flashdata('success', 'Aktif');
				redirect('home', 'refresh');
			} else {
				$this->session->set_flashdata('error', 'Tidak Aktif');
				redirect('home', 'refresh');
			}

		} else {
			$this->session->set_flashdata('invalid', 'NIK Tidak ditemukan');
			redirect('home', 'refresh');
		}

	}


	public function cetak() {

		$data['title'] ="Cetak Registrasi";
		$this->load->view('header',$data);
		$this->load->view('navbar');

	if($this->session->flashdata('success')){
		$nik = $this->session->flashdata('success');
		$where = array ('nikd'=>$nik);
		$data['skck'] = $this->mdata->check_all('tbdata',$where,1);
		$this->load->view('cetak',$data);
	 } else {
	  $this->load->view('404');
	 }
	 $this->load->view('footer2nd'
 );

	}


	public function cmanual() {

				$data['title'] ="Manual Book";
				$this->load->view('header',$data);
				$this->load->view('navbar');
				$this->load->view('cmanual');
				$this->load->view('footer2nd');


	}




}
