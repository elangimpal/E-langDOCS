<?php

class inputModel extends CI_Model{
	function inputBarang($table, $data){
		$this->db->insert_batch($table, $data);
	}

	function notifKetemu($username, $penemu){
		
	}
}