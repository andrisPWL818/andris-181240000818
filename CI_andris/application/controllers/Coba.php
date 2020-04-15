<?php 

class Coba extends CI_Controller
{
	public function index()
	{
		$data = array(
			'caption'=>'Tabel Teman'
		);
		$this->load->view('v_coba');
	}
}