<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function index()
	{
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}
		$data['judul']  = 'Laporan | Aplikasi Kearsipan dan Korespondensi';
		$data['laporan'] = $this->Surat_model->get();
		$data['output'] = $this->load->view('laporan',$data,TRUE);
		$this->load->view('wrapper',$data);
	}

	public function cari()
	{
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}

		$parameter                = $this->input->post('parameter');
		//$berdasarkan            = $this->input->post('berdasarkan');
		$berdasarkan              = 'tgl_masuk';
		$sess_data['parameter']   = $parameter;
		$sess_data['berdasarkan'] = $berdasarkan;
        
        $this->session->set_userdata($sess_data);

		$data['laporan'] = $this->Surat_model->cari($parameter,$berdasarkan);
		$data['judul']   = 'Laporan | Aplikasi Kearsipan dan Korespondensi';
		$data['output']  = $this->load->view('laporan',$data,TRUE);
		$this->load->view('wrapper',$data);
	}

	public function excel()
	{
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}
		$parameter       = $this->session->all_userdata()['parameter'];
		$berdasarkan     = $this->session->all_userdata()['berdasarkan'];
		$data['laporan'] = $this->Surat_model->cari($parameter,$berdasarkan);
		$this->load->view('excel',$data);
	}

	public function pdf()
	{
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}
		$parameter       = $this->session->all_userdata()['parameter'];
		$berdasarkan     = $this->session->all_userdata()['berdasarkan'];
		$data['laporan'] = $this->Surat_model->cari($parameter,$berdasarkan);
		$this->load->view('pdf',$data);
	}

	
}