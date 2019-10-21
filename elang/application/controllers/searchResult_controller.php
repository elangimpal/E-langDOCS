<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class searchResult_controller extends CI_Controller {

	public function index()
	{
		$this->load->view('searchResult');
	}
}
