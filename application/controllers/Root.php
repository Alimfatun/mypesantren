<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Root extends CI_Controller {
	function __construct()
	{
	 parent::__construct();
	 $this->load->model('mdata', '', TRUE);
	 $this->load->helper(array('form', 'url'));

	}
	public function index()
	{
		$data['title'] ="Login Admin";
		$this->load->view('header',$data);
		$this->load->view('navbar');
		$this->load->view('login');
		$this->load->view('footer2nd');
	}

	public function verifikasi_login() {
		$nama = $this->input->post('nama');
		$pass =  $this->input->post('pass');

		//query chek database admin atau anggota
		$where = array ('nama' =>$nama, 'password' => $pass); 	 $limit =1;
		$data = $this->mdata->check_all('tbroot',$where,$limit);

		if($data) {
				foreach ($data as $row) { $nama = $row->nama;	}
        $session_data = array ('nama' => $nama);
				$this->session->set_userdata('logged_in', $session_data);
				redirect('root/dashboard', 'refresh');
				return TRUE;
		} else {
		 $this->session->set_flashdata('error', 'nama &  password');
		redirect('root', 'refresh'); 	return FALSE;
		}

	}


	public function dashboard()	{
		if($this->session->userdata('logged_in'))
			{
				$session_data = $this->session->userdata('logged_in');
				$data['name'] = $session_data['nama'];
				$data['list'] = $this->mdata->tampil_data('tbdata');

				$data['title'] ="Dashboard Admin";
				$this->load->view('header',$data);
				$this->load->view('navbar2');
				$this->load->view('croot');
				$this->load->view('footer2nd');

			}
			else {
				redirect('root', 'refresh');
			}
	}

	public function guru()	{
		if($this->session->userdata('logged_in'))
			{
				$session_data = $this->session->userdata('logged_in');
				$data['name'] = $session_data['nama'];
				$data['list'] = $this->mdata->tampil_data('tbguru');

				$data['title'] ="Data Guru";
				$this->load->view('header',$data);
				$this->load->view('navbar2');
				$this->load->view('gururoot');
				$this->load->view('footer2nd');

			}
			else {
				redirect('root', 'refresh');
			}
	}

	public function insert_data() {

		$kin = $this->input->post('nama');
		$where = array ('nama_guru'=>$kin);
		$mf = $this->mdata->check_all('tbguru',$where,1);

		if($mf) {
			$this->session->set_flashdata('error', 'Nama sudah ada');
			redirect('root/guru', 'refresh');
		} else {

			$data = array (
								'nama_guru'=>$this->input->post('nama'),
								'alamat_guru'=>$this->input->post('alamat'),
								'mapel_guru'=>$this->input->post('mapel'),
								'status_guru'=>$this->input->post('status')
			);

			$this->mdata->insert_all('tbguru',$data);
			redirect('root/guru', 'refresh');
		}

	}

	public function insert_tenp() {

		$kin = $this->input->post('nop');
		$where = array ('anop'=>$kin);
		$mf = $this->mdata->check_all('tbangsuran',$where,1);

		if($mf) {

			$data = array (
								'anop'=>$this->input->post('nop'),
								'jumlah'=>$this->input->post('biaya'),
								'date'=>date("Y-m-d")
			);

			$this->mdata->update_all($where,$data,'tbangsuran');
			redirect('root/guru', 'refresh');
		} else {

			$data = array (
								'anop'=>$this->input->post('nop'),
								'jumlah'=>$this->input->post('biaya'),
								'date'=>date("Y-m-d")
			);

			$this->mdata->insert_all('tbangsuran',$data);
			redirect('root/guru', 'refresh');
		}

	}

	public function logout() {
	$this->session->unset_userdata('logged_in');
	session_destroy();
	redirect('root', 'refresh');
}


	public function deta($d) {
		if($this->session->userdata('logged_in'))
			{
				$session_data = $this->session->userdata('logged_in');
				$data['name'] = $session_data['nama'];
				$data['list'] = $this->mdata->check_all('tbdata',array ('nop'=>$d),1);

				$data['title'] ="Print Data";
				$this->load->view('header',$data);
				$this->load->view('navbar2');
				$this->load->view('proot');
				$this->load->view('footer2nd');
			}
			else {
				redirect('root', 'refresh');
			}

	}


	public function edata($d) {
		if($this->session->userdata('logged_in'))
			{
				$session_data = $this->session->userdata('logged_in');
				$data['name'] = $session_data['nama'];
				$data['list'] = $this->mdata->check_all('tbdata',array ('nop'=>$d),1);

				$data['title'] ="Update Data Peserta";
				$this->load->view('header',$data);
				$this->load->view('navbar2');
				$this->load->view('formed');
				$this->load->view('footer2nd');
			}
			else {
				redirect('root', 'refresh');
			}

	}


	public function manual() {
		if($this->session->userdata('logged_in'))
			{
				$session_data = $this->session->userdata('logged_in');
				$data['name'] = $session_data['nama'];

				$data['title'] ="Manual Book";
				$this->load->view('header',$data);
				$this->load->view('navbar2');
				$this->load->view('manual');
				$this->load->view('footer2nd');
			}
			else {
				redirect('root', 'refresh');
			}

	}


	public function udata() {

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

			$this->mdata->update_all(array ('nop'=>$this->input->post('nop')),$data,'tbdata');
			redirect('root/dashboard', 'refresh');

	}


	public function profile()	{
		if($this->session->userdata('logged_in'))
			{
				$session_data = $this->session->userdata('logged_in');
				$data['name'] = $session_data['nama'];

				$data['title'] ="Data Profile";
				$this->load->view('header',$data);
				$this->load->view('navbar2');
				$this->load->view('prof');
				$this->load->view('footer2nd');

			}
			else {
				redirect('root', 'refresh');
			}
	}


	public function do_upload()
        {
                $nd = $this->input->post('nama');
				$config['upload_path']          = './upload/';
				$config['allowed_types']        = 'png';
				$config['max_size']             = 500;
				$config['max_width']            = 1024;
				$config['max_height']           = 768;
				$config['file_name'] = $nd;

				$this->load->library('upload', $config);
				if ( ! $this->upload->do_upload('image'))
				{
					$this->session->set_flashdata('error', 'maaf upload gagal');
					redirect('root/profile', 'refresh');
				}
				else
				{
					$this->session->set_flashdata('success', 'upload berhasil');
					redirect('root/profile', 'refresh');
				}
        }




}
