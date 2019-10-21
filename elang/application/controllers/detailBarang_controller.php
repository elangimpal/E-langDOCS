<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class detailBarang_controller extends CI_Controller {

	public function index()
	{
		$this->load->view('detailBarang');
	}

	public function verifikasiBarangD()
	{
		$this->load->view('verifikasiBarangDitemukan');
	}
	public function verifikasiBarangDS()
	{
		$this->load->view('verifikasiBarangDSukses');
	}

}
