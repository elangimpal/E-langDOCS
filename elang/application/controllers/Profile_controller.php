<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_controller extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('ProfileModel');
		$this->load->helper('url');
	}
	public function index()
	{
		$where = array('username' => $this->session->userdata('username'));
		$data['users'] = $this->ProfileModel->edit_data($where,'user');
		$this->load->view('Profile',$data);
	}

	function edit($username){
		$where = array('username' => $username);
		$data['users'] = $this->ProfileModel->edit_data($where,'user');
		$this->load->view('Profile',$data);
	}

	function update(){
		$last_name = $this->input->post('nama');
		$email = $this->input->post('email');

		$data = array(
			'nama' => $nama,
			'email' => $email
		);

		$where = array(
			'username' => $this->session->userdata('username')
		);

		$this->ProfileModel->update_data($where,$data,'user');
		redirect('ProfileController');

	}
}
