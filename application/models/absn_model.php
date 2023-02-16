<?php
class absn_model extends CI_Model{
 	function construct(){
 		parent:: construct();
 	}
 	public function insert($data){
 		if ($this->db->insert("absn", $data)) {
 			return true;
 		}
 	}
 	public function update($data,$old_no){
 		$this->db->set($data);
 		$this->db->where("no", $old_no);
 		$this->db->update("absn", $data);
 	}
 	public function delete($no){
 		if ($this->db->delete("absn", "no = " .$no)) {
 			return true;
 		}
 	}
 	public function GetAll() {
 		$this->db->select("absn.no,absn.anmpst,dftrsmnr.namasmnr,dftrsmnr.tglsminar");
 		$this->db->join('dftrsmnr', 'absn.anmsmnr=dftrsmnr.namasmnr');
 		$this->db->from('absn');
 		$query = $this->db->get();
 		return $query->result();
 	}


 }
 ?> 	 			