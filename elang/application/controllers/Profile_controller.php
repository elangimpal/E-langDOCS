<?php 


class Profile_controller extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('ProfileModel');
		$this->load->helper('url');

	}

	function index(){
		$username = $this->session->userdata("nama");
		// $query = $this->db->where('username', $username)->get();
		// $query = $this->db->get_where('user', array('username' => $username));
		$data['datauser'] = $this->db->get_where('user', array('username' => $username));
		
		// $query = $this->db->query('SELECT name FROM my_table LIMIT 1');
		// echo $row->name;
		// $data['user'] = $this->ProfileModel->tampil_data()->result();
		$this->load->view('Profile',$data);
	}
	
	function updateProfile(){
		$data = [
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'no_handphone' => $this->input->post('no_handphone'),
            'alamat' => $this->input->post('alamat'),
		];
		$username = $this->input->post('username');
        $this->db->where('username', $username);
		$this->db->update('user', $data);

		$data['datauser'] = $this->db->get_where('user', array('username' => $username));
		$this->load->view('Profile',$data);
	}
}