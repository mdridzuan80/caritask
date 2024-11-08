<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends CI_Model
{
    /**
     * Role constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Find data.
     *
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->db->get_where("tasks", array("id" => $id, "deleted_at" => null))->row(0);
    }

    /**
     * Read all data.
     *
     * @return mixed
     */
    public function all()
    {
		return $this->getTask()
            ->get()->result();
    }

	public function available()
    {
		return $this->getTask()
			->join("task_user", "task_user.task_id = tasks.id", "left outer")
			->where('task_user.task_id is null')
            ->get()->result();
    }

	public function accepted()
    {
		return $this->getTask()
			->join("task_user", "tasks.id = task_user.task_id", "inner")
            ->get()->result();
    }

	public function acceptedBy($username)
    {
		return $this->getTask()
			->join("task_user", "tasks.id = task_user.task_id", "inner")
			->join("users", "users.id = task_user.user_id", "inner")
			->where('users.email',$username)
            ->get()->result();
    }
    /**
     * Insert data.
     *
     * @param $data
     * @return mixed
     */
    public function add($data)
    {
        return $this->db->insert('tasks', $data);
    }

    /**
     * Edit data.
     *
     * @param $data
     * @return mixed
     */
    public function edit($data)
    {
        return $this->db->update('tasks', $data, array('id' => $data['id']));
    }

    /**
     * Delete data.
     *
     * @param $id
     * @return int
     */
    public function delete($id)
    {
        $data['deleted_at'] = date("Y-m-d H:i:s");

        return $this->find($id) ? $this->db->update('tasks', $data, array('id' => $id)) : 0;
    }

	private function getTask() {
		return $this->db->select("tasks.id,tasks.date,tasks.time,tasks.amount,services.name as sname,sub_services.name as ssname")
		->from("tasks")
		->join("services", "tasks.service_id = services.id", "inner")
		->join("sub_services", "tasks.sub_service_id = sub_services.id", "inner");
	}

	public function accept($data) {
		return $this->db->insert('task_user', $data);
	}
}
