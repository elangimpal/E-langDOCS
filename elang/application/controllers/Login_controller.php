<?php
class Login_controller extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('LoginModel');
		// Load form helper library
		$this->load->helper('form');

		// Load form validation library
		$this->load->library('form_validation');

		// Load session library
		$this->load->library('session');
	}

	function index()
	{
		$this->load->view('Home');
	}

	function aksi_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			//	'password' => md5($password)  //di mySQL blm di encrypt
			'password' => $password  //di mySQL blm di encrypt

		);
		$cek = $this->LoginModel->cek_login("user", $where)->num_rows();
		if ($cek > 0) {

			$data_session = array(
				'nama' => $username,
				'status' => "login"
			);

			$this->session->set_userdata($data_session);

			redirect(base_url("index.php/Dashboard_controller"));
		} else {
			// redirect(base_url("index.php/Home"));
			echo $username, " ";
			echo md5($password), " ";
			echo "Username dan password salah !";
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
