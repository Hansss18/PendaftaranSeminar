<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

Class absn_controller extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->model("select_model");		
	}

	public function index() {
		$this->load->model("absn_model");
		$data['records'] = $this->absn_model->getAll();
		$this->load->helper('url');
		$this->load->view('absn_view',$data);
}
	public function add_absn_view(){
		$this->load->helper('form');
		$data['seminar'] = $this->select_model->seminar();		
		$this->load->view('add_absn', $data);
	}
	public function add_absn(){
		$this->load->model('absn_model');
		$data = array (
							'anmpst' => $this->input->post('anmpst'),
							'anmsmnr' => $this->input->post('anmsmnr')
		);
		$this->absn_model->insert($data);
		$query =  $this->db->get("absn");
		$data['records'] = $query->result();
		$data['records'] = $this->absn_model->getAll();		
		$this->load->view('absn_view',$data);
	}
	public function update_absn_view(){
		$this->load->helper('form');
		$data['seminar'] = $this->select_model->seminar();			
		$no = $this->uri->segment('3');
		$query = $this->db->get_where("absn",array("no"=>$no));
		$data['records'] = $query->result();
		$data['old_no'] = $no;
		$this->load->view('edit_absn', $data);
	}

	public function update_absn(){
		$this->load->model('absn_model');
		$data = array(
						'anmpst' => $this->input->post('anmpst'),
						'anmsmnr' => $this->input->post('anmsmnr')
		);
		$old_no = $this->input->post('old_no');
		$this->absn_model->update($data, $old_no);
		$query = $this->db->get("absn");
		$data['records'] = $query->result();
		$data['records'] = $this->absn_model->getAll();		
		$this->load->view('absn_view', $data);
	}

	public function delete_absn(){
		$this->load->model('absn_model');
		$no = $this->uri->segment('3');
		$this->absn_model->delete($no);
		$query = $this->db->get("absn");
		$data['records'] = $query->result();
		$data['records'] = $this->absn_model->getAll();		
		$this->load->view('absn_view', $data);
	}
}

?>	