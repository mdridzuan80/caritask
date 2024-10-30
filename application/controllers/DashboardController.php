<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends MY_Controller {

	function __construct() {
		parent::__construct();
		
		# Set Content Header
		$this->template->set('contentHeader', 'Dashboard');
	}

	public function index()
	{
		$this->template->load('layout/master', 'dashboard/index');
	}
}
