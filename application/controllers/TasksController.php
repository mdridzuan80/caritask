<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Carbon\Carbon;

class TasksController extends MY_Controller
{

	function __construct()
	{
		parent::__construct();
		# Set Content Header
		$this->template->set('contentHeader', 'Task');
		/* $this->template->set('script', $this->load->view('roles/script', NULL, TRUE)); */
		$this->load->model('task');
	}

	public function index()
	{
		/* $this->load->model('role');
		$roles = $this->role->all();

		$this->template->load('layout/master', 'roles/index',["roles"=>$roles]); */
	}

	public function create()
	{
		$data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);

		$this->template->load('layout/master', 'tasks/create', $data);
	}

	public function store()
	{
		$fields = [
			'service_id' => $this->input->post('comService'),
			'sub_service_id' => $this->input->post('comSubService'),
			'date' => Carbon::parse($this->input->post('txtDate') . ' ' . $this->input->post('txtTime')),
			'time' => Carbon::parse($this->input->post('txtDate') . ' ' . $this->input->post('txtTime')),
			'amount' => $this->input->post('comAmount'),
			'create_by' => $this->aauth->user()->id,
		];

		if ($this->task->add($fields)) {
			$response = ['status' => true, 'message' => 'The operation was successful'];
		} else {
			$response = ['status' => false, 'message' => 'The operation was not successful'];
		}

		$this->session->set_flashdata('response', $response);
		redirect("dashboard");
	}

	public function accept()
	{
		$response = array('status' => 'OK');

		$fields = [
			'task_id' => $this->input->post('taskid'),
			'user_id' => $this->aauth->user()->id
		];

		$this->task->accept($fields);

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
	}
}
