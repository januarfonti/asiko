<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Surat_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	function get()
	{
		return $this->db->get('tbl_suratmasuk')->result();
	}

	function cari($parameter,$berdasarkan)
	{
		return $this->db->query("select * from tbl_suratmasuk where $berdasarkan = '$parameter'")->result();
	}

	function upload($data)
	{
		$this->db->insert('tbl_suratmasuk',$data);
	}
}