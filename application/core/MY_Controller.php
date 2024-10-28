<?php
defined('BASEPATH') OR exit('No direct script access allowed');

abstract class MY_Controller extends CI_Controller {
	function __construct() {
		parent::__construct();

		if(!$this->aauth->isLoggedin()) {
			redirect('auth','refresh');
		}

	}
}
