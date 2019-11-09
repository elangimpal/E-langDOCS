<?php 


class Profile_controller extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('ProfileModel');
		$this->load->helper('url');

	}

	function index(){
		$data['user'] = $this->ProfileModel->tampil_data()->result();
		$this->load->view('Profile',$data);
	}

	// function tambah(){
	// 	$this->load->view('v_input');
	// }

	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$email = $this->input->post('email');

		$data = array(
			'nama' => $nama,
			'username' => $username,
			'email' => $email
			);
		$this->ProfileModel->input_data($data,'user');
		redirect('crud/index');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->ProfileModel->hapus_data($where,'user');
		redirect('crud/index');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['user'] = $this->ProfileModel->edit_data($where,'user')->result();
		$this->load->view('v_edit',$data);
	}

}