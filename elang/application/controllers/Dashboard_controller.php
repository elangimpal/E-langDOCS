<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 function __construct(){
	 		parent::__construct();

	 		if($this->session->userdata('status') != "login"){
	 			redirect(base_url("Login_controller"));
	 		}
	 	}


	public function index()
	{
		$this->load->view('Dashboard');
	}


	public function search(){
		$this->load->model('barangModel');
		$keyword = $this->input->post('keyword');
		$data['barang']=$this->barangModel->get_product_keyword($keyword);
		// $this->load->view('searchResult1',$data);
		$this->load->view('hasilPencarian',$data);
	}


}
