<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RolesController extends MY_Controller {

	function __construct() {
		parent::__construct();
		# Set Content Header
		$this->template->set('contentHeader', 'Role');
	}

	public function index() {
		$this->load->model('role');
		$roles = $this->role->all();

		$this->template->load('layout/master', 'roles/index',["roles"=>$roles]);
	}
}
