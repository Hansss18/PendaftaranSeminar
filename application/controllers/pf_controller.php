<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

Class pf_controller extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->model("select_model");
	}

	public function index() {
		$this->load->model("pf_model");
		$data['records'] = $this->pf_model->getAll();
		$this->load->helper('url');
		$this->load->view('pf_view',$data);
}
	public function add_pf_view(){
		$this->load->helper('form');
		$data['seminar'] = $this->select_model->seminar();
		$this->load->view('add_pf', $data);
	}
	public function add_pf(){
		$this->load->model('pf_model');
		$data = array (
							'nmpst' => $this->input->post('nmpst'),
							'nmsmnr' => $this->input->post('nmsmnr')
		);
		$this->pf_model->insert($data);
		$query =  $this->db->get("dtpst");
		$data['records'] = $query->result();
		$data['records'] = $this->pf_model->getAll();
		$this->load->view('pf_view',$data);
	}
	public function update_pf_view(){
		$this->load->helper('form');
		$data['seminar'] = $this->select_model->seminar();		
		$no = $this->uri->segment('3');
		$query = $this->db->get_where("dtpst",array("no"=>$no));
		$data['records'] = $query->result();
		$data['old_no'] = $no;
		$this->load->view('edit_pd', $data);
	}

	public function update_pf(){
		$this->load->model('pf_model');
		$data = array(
						'nmpst' => $this->input->post('nmpst'),
						'nmsmnr' => $this->input->post('nmsmnr'),
		);
		$old_no = $this->input->post('old_no');
		$this->pf_model->update($data, $old_no);
		$query = $this->db->get("dtpst");
		$data['records'] = $query->result();
		$data['records'] = $this->pf_model->getAll();
		$this->load->view('pf_view', $data);
	}

	public function delete_pf(){
		$this->load->model('pf_model');
		$no = $this->uri->segment('3');
		$this->pf_model->delete($no);
		$query = $this->db->get("dtpst");
		$data['records'] = $query->result();
		$data['records'] = $this->pf_model->getAll();
		$this->load->view('pf_view', $data);
	}
}

?>	