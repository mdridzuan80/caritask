<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthController extends CI_Controller
{
	private $redirect = "/auth";

	public function index()
	{
		$data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);

		$this->load->view('auth/login', $data);
	}

	public function store()
	{
		if ($this->aauth->attempt($this->input->post('email'), $this->input->post('password'))) {
			redirect(base_url('dashboard'));
		}

		$this->load->view('auth/login');
	}

	public function logout()
	{
		$this->aauth->destroy();
		redirect($this->redirect, 'refresh');
	}

	public function register()
	{
		$data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);

		$this->load->view('auth/register', $data);
	}

	public function registered()
	{
		$this->load->library('form_validation');

		$data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);

		$config = array(
			array(
				'field' => 'name',
				'label' => 'Name',
				'rules' => 'required'
			),
			array(
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required',
				'errors' => array(
					'required' => 'You must provide a %s.',
				),
			),
			array(
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required'
			),
			array(
				'field' => 'repassword',
				'label' => 'Password Confirmation',
				'rules' => 'required|matches[password]'
			)
		);
		$this->form_validation->set_rules($config);

		if ($this->form_validation->run()) {
			$this->load->library('bcrypt');
			$this->load->model($this->config->item('provider'), 'provider');


			$fields = [
				"nama" => $this->input->post('name'),
				"email" => $this->input->post('email'),
				"password" => $this->bcrypt->hash($this->input->post('password')),
			];

			if ($this->provider->add($fields)) {
				$response = ['status' => true, 'message' => 'The operation was successful'];
			}

			$this->session->set_flashdata('response', $response);
			redirect("auth");
		}

		$this->load->view('auth/register', $data);
	}
}
