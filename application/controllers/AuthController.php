<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {
	private $redirect="/auth";

	public function index()
	{
		$data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);

		$this->load->view('auth/login',$data);
	}

	public function store()
	{
		if($this->aauth->attempt($this->input->post('email'),$this->input->post('password')))
		{
			redirect(base_url('dashboard'));
		}

		$this->load->view('auth/login');
	}

	public function logout()
	{
		$this->aauth->destroy();
		redirect($this->redirect,'refresh');
	}
}
