<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

Class srtfkt_controller extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->model("select_model");
	}

	public function index() {
		$this->load->model('srtfkt_model');
	    $data['ser'] = $this->select_model->seminar();
		$data['records'] =  $this->srtfkt_model->getAll();
		$this->load->view('srtfkt_view',$data);
}
	public function add_srtfkt_view(){
		$this->load->helper('form');
		$this->load->view('add_srtfkt', $data);
	}
	public function add_srtfkt(){
		$this->load->model('srtfkt_model');
		$data = array (
							'nmseminr' => $this->input->post('nmseminr'),
							'srtfktt' => $this->input->post('srtfktt'),
		);
		$this->absn_model->insert($data);
		$query =  $this->db->get("srtfkt");
		$data['records'] = $query->result();
		$this->load->view('absn_view',$data);
	}
	public function update_srtfkt_view(){
		$this->load->helper('form');
		$no = $this->uri->segment('3');
		$query = $this->db->get_where("srtfkt",array("no"=>$no));
		$data['records'] = $query->result();
		$data['old_no'] = $no;
		$this->load->view('edit_srtfkt', $data);
	}

	public function update_srtfkt(){
		$this->load->model('srtfkt_model');
		$data = array(
						'nmseminr' => $this->input->post('nmseminr'),
						'srtfktt' => $this->input->post('srtfktt'),
		);
		$old_no = $this->input->post('old_no');
		$this->srtfkt_model->update($data, $old_no);
		$query = $this->db->get("srtfkt");
		$data['records'] = $query->result();
		$this->load->view('srtfkt_view', $data);
	}

	public function delete_srtfkt(){
		$this->load->model('srtfkt_model');
		$no = $this->uri->segment('3');
		$this->absn_model->delete($no);
		$query = $this->db->get("srtfkt");
		$data['records'] = $query->result();
		$this->load->view('srtfkt_view', $data);
	}
}

?>	