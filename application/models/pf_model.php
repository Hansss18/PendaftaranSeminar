<?php
class pf_model extends CI_Model{
 	function construct(){
 		parent:: construct();
 	}
 	public function insert($data){
 		if ($this->db->insert("dtpst", $data)) {
 			return true;
 		}
 	}
 	public function update($data,$old_no){
 		$this->db->set($data);
 		$this->db->where("no", $old_no);
 		$this->db->update("dtpst", $data);
 	}
 	public function delete($no){
 		if ($this->db->delete("dtpst", "no = " .$no)) {
 			return true;
 		}
 	}
 	public function GetAll() {
 		$this->db->select("dtpst.no,dtpst.nmpst,dftrsmnr.namasmnr,dftrsmnr.tglsminar");
 		$this->db->join('dftrsmnr', 'dtpst.nmsmnr=dftrsmnr.namasmnr');
 		$this->db->from('dtpst');
 		$query = $this->db->get();
 		return $query->result();
 	}

 }
 ?> 	 			