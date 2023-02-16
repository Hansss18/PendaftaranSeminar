<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

Class ds_controller extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->helper('url');
		$this->load->database();
	}

	public function index() {
		$query = $this->db->get("dftrsmnr");
		$data['records'] =  $query->result();
		$this->load->helper('url');
		$this->load->view('ds_view',$data);
}
	public function add_ds_view(){
		$this->load->helper('form');
		$this->load->view('add_ds');
	}
	public function add_ds(){
		$this->load->model('ds_model');
		$data = array (
							'namasmnr' => $this->input->post('namasmnr'),
							'tglsminar' => $this->input->post('tglsminar'),
		);
		$this->ds_model->insert($data);
		$query =  $this->db->get("dftrsmnr");
		$data['records'] = $query->result();
		$this->load->view('ds_view',$data);
	}
	public function update_ds_view(){
		$this->load->helper('form');
		$no = $this->uri->segment('3');
		$query = $this->db->get_where("dftrsmnr",array("no"=>$no));
		$data['records'] = $query->result();
		$data['old_no'] = $no;
		$this->load->view('edit_ds', $data);
	}

	public function update_ds(){
		$this->load->model('ds_model');
		$data = array(
							'namasmnr' => $this->input->post('namasmnr'),
							'tglsminar' => $this->input->post('tglsminar'),
		);
		$old_no = $this->input->post('old_no');
		$this->ds_model->update($data, $old_no);
		$query = $this->db->get("dftrsmnr");
		$data['records'] = $query->result();
		$this->load->view('ds_view', $data);
	}

	public function delete_ds(){
		$this->load->model('ds_model');
		$no = $this->uri->segment('3');
		$this->pf_model->delete($no);
		$query = $this->db->get("dftrsmnr");
		$data['records'] = $query->result();
		$this->load->view('ds_view', $data);
	}
}

?>	