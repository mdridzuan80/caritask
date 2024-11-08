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
		$data['tasks'] = $this->task->all();
		$this->template->load('layout/master', 'dashboard/index', $data);
	}
}
