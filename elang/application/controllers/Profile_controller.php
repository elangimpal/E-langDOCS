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

	function tambah_aksi(){
		$username = $this->input->post('username');
		$nama = $this->input->post('fullName');
		$pass = $this->input->post('password');
		$tglahir = $this->input->post('tglahir');
		$no_handphone = $this->input->post('handphone');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		
		$data = array(
			'username' => $username,
			'nama' => $nama,
			'password' => md5($pass),
			'tanggal_lahir' => $tglahir,
			'no_handphone' => $no_handphone,
			'email' => $email,
			'alamat' => $alamat,
		);
		$this->ProfileModel->input_data($data,'user');
		redirect(base_url("index.php/Home_controller"));
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

	function updateProfile(){
		$data= array(
			$nama = $this->input->post('nama'),
			$username = $this->input->post('username'),
			$email = $this->input->post('email'),
			$no_handphone = $this->input->post('no_handphone'),
			$alamat = $this->input->post('alamat')
		);
		$username = $this->input->post('username');
		$this->ProfileModel->update_data($username, $data, 'user');
		echo "berhasil";

	}
}