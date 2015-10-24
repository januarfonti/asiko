<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		$this->lang->load('auth');
	}

	public function index()
	{
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}
		$data['judul']   = 'Users | Asiko';
		$data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
		$data['users']   = $this->ion_auth->users()->result();
		foreach ($data['users'] as $k => $user)
		{
			$data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
		}
		$data['output']  = $this->load->view('users',$data,TRUE);
		$this->load->view('wrapper',$data);
		
	}
}