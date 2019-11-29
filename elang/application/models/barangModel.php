<?php

class BarangModel extends CI_Model{

	function get_product_keyword($keyword){
		$this->db->select('*');
		$this->db->from('barang');
		$this->db->like('nama_barang',$keyword);
		$this->db->or_like('detail_barang',$keyword);
        return $this->db->get()->result();
        echo "masuk";
    }
}