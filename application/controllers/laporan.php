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

	
}