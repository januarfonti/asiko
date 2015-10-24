<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Surat extends CI_Controller {

	public function index()
	{
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}
		$data['judul']  = 'Surat | Aplikasi Kearsipan dan Korespondensi';
		$data['output'] = $this->load->view('surat',$data,TRUE);
		$this->load->view('wrapper',$data);
	}

	public function simpan()
	{
		$config['upload_path']   = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']      = '10000';
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			redirect('surat');
		}
		else
		{
			$data_file = $this->upload->data();
		}
		
		$data['no_urut']         = $this->input->post('no_urut');
		$data['no_agenda']       = $this->input->post('no_agenda');
		$data['no_surat']        = $this->input->post('no_surat');
		$data['pengirim']        = $this->input->post('pengirim');
		$data['tgl_surat']       = $this->input->post('tgl_surat');
		$data['tgl_masuk']       = $this->input->post('tgl_masuk');
		$data['perihal']         = $this->input->post('perihal');
		if (!empty($this->input->post('subperihal')))
		{
			$data['subperihal']      = $this->input->post('subperihal');
		}
		$data['disposisi_a']     = $this->input->post('disposisi_a');
		$data['tgl_a']           = $this->input->post('tgl_a');
		$data['isi_disposisi_a'] = $this->input->post('isi_disposisi_a');
		$data['disposisi_b']     = $this->input->post('disposisi_b');
		$data['tgl_b']           = $this->input->post('tgl_b');
		$data['isi_disposisi_b'] = $this->input->post('isi_disposisi_b');
		$data['disposisi_c']     = $this->input->post('disposisi_c');
		$data['tgl_c']           = $this->input->post('tgl_c');
		$data['isi_disposisi_c'] = $this->input->post('isi_disposisi_c');
		$data['isi_surat']       = $this->input->post('isi_surat');
		$data['uraian_singkat']  = $this->input->post('uraian_singkat');
		$data['nominal']         = $this->input->post('nominal');
		$data['pelaksana']       = $this->input->post('pelaksana');
		$data['tgl_pelaksana']   = $this->input->post('tgl_pelaksana');
		$data['keterangan']      = $this->input->post('keterangan');
		$data['upload']          = $data_file['file_name'];
		$this->Surat_model->upload($data);
		$this->session->set_flashdata("pesan","
			<div class='alert alert-info alert-dismissible' role='alert'>
			  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
			  <strong>Sukses !</strong> Surat masuk berhasil ditambahkan.
			</div>
		");
		redirect('surat');

	}
}