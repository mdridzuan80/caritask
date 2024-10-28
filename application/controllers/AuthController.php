<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {
	private $redirect="/auth";

	public function index()
	{
		$this->load->view('auth/login');
	}

	public function store()
	{
		if($this->aauth->attempt($this->input->post('email'),$this->input->post('password')))
		{
			redirect(base_url());
		}

		$this->load->view('auth/login');
	}

	public function logout()
	{
		$this->aauth->destroy();
		redirect($this->redirect,'refresh');
	}
}
