<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersController extends MY_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$this->template->load('layout/master', 'users/index');
	}
}
