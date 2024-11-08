<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends MY_Controller {

	function __construct() {
		parent::__construct();
		
		# Set Content Header
		$this->template->set('contentHeader', 'Dashboard');
		$this->load->model('task');
	}

	public function index()
	{
		$this->template->set('script', $this->load->view('dashboard/script', NULL, TRUE));

		$data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);
		$data['tasks'] = $this->task->available();
		
		if(hasRole(['worker'])) {
			$data['accepted_tasks'] = $this->task->acceptedBy($this->aauth->user()->email);
		}

		$this->template->load('layout/master', 'dashboard/index', $data);
	}
}
