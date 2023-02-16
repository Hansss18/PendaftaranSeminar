<?php
class ds_model extends CI_Model{
 	function construct(){
 		parent:: construct();
 	}
 	public function insert($data){
 		if ($this->db->insert("dftrsmnr", $data)) {
 			return true;
 		}
 	}
 	public function update($data,$old_no){
 		$this->db->set($data);
 		$this->db->where("no", $old_no);
 		$this->db->update("dftrsmnr", $data);
 	}
 	public function delete($no){
 		if ($this->db->delete("dftrsmnr", "no = " .$no)) {
 			return true;
 		}
 	}

 }
 ?> 	 			