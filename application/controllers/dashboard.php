<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}
		$data['judul']  = 'Dashboard | Asiko';
		$data['output'] = $this->load->view('dashboard',$data,TRUE);
		$this->load->view('wrapper',$data);
		
	}
}