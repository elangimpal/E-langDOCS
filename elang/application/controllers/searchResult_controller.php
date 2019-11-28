<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class searchResult_controller extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('resultModel');
   }

	public function index() 
	{
		// $this->load->view('searchResult');
		$data['barang'] = $this->resultModel->tampil_data();
		$this->load->view('hasilPencarian',$data);

	}
}
