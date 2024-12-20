<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RolesController extends MY_Controller {

	function __construct() {
		parent::__construct();
		# Set Content Header
		$this->template->set('contentHeader', 'Role');
		$this->template->set('script', $this->load->view('roles/script', NULL, TRUE));
		$this->load->model('role');
	}

	public function index() {
		$this->load->model('role');
		$roles = $this->role->all();

		$this->template->load('layout/master', 'roles/index',["roles"=>$roles]);
	}

	public function create() {
		$data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);
		$this->template->load('layout/master', 'roles/create', $data);
	}

	public function store() {

		$fields = [
			'name' => $this->input->post('txtName'),
			'display_name' => $this->input->post('txtDisplayName'),
			'description' => $this->input->post('txtDescription'),
		];
		
		if($this->role->add($fields)) {
			$response = ['status'=>true, 'message'=>'The operation was successful'];
		} else {
			$response = ['status'=>false, 'message' => 'The operation was not successful'];
		}

		$this->session->set_flashdata('response', $response);
		redirect("roles");
	}

}
