<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifikasi_controller extends CI_Controller {

	public function ___construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('Notifikasi');
	}

	public function h()
	{
		$this->load->view('Notifikasi');
	}
}

?>
