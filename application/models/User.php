<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model
{
	public function getUser($id)
	{
		$sql = "select * from users where id = ?";
		$query = $this->db->query($sql, [$id]);
		return $query->row();
	}

	public function byUsername($username)
	{
		$sql = "select * from users where email = ?";
		$query = $this->db->query($sql, [$username]);
		return $query->row();
	}

	public function add($data)
	{
		$this->db->insert('users', $data);
		$id = $this->db->insert_id();

		$fields = [
			"user_id" => $id,
			"role_id" => 6,
		];
		return $this->db->insert('roles_users', $fields);
	}
}
