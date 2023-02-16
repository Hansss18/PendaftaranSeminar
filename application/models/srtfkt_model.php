<?php
class srtfkt_model extends CI_Model{
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
 	public function getAll() {
 		$this->db->select("srtfkt.no,absn.anmpst,absn.anmsmnr,srtfkt.srtfktt");
 		$this->db->join('absn', 'srtfkt.no=absn.no');
 		$this->db->from('srtfkt');
 		$query = $this->db->get();
 		return $query->result();
 	}

 }
 ?> 	 			