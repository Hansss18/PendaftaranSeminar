<?php

class select_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function seminar(){
		$this->db->order_by('no');
		$absn = $this->db->get('dftrsmnr');

		return $absn->result_array();
	}
}