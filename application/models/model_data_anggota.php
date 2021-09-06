<?php 
 
class Model_data_anggota extends CI_Model{

	public function tampil_data(){
		return $this->db->get('tb_data_pkl');
	}
	// public function tampil_data(){
	// 	return $this->db->get('tb_brg');
	// } 
}