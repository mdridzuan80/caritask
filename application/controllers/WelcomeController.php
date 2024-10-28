<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WelcomeController extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index()
	{

		$this->load->view('main');


		//var_dump($_SESSION);
		//$this->load->view('welcome_message');
		//$user = $this->aauth->attempt('demo@demo.com','123');
	}

	public function cubaan()
	{
		var_dump($this->aauth->isLoggedin());
	}

	public function logout() {
		$this->aauth->destroy();
	}
}
