<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
	public function getUser($id)
	{
		$sql = "select * from users where id = ?";
		$query = $this->db->query($sql,[$id]);
		return $query->row();
	}

	public function byUsername($username)
	{
		$sql = "select * from users where email = ?";
		$query = $this->db->query($sql,[$username]);
		return $query->row();
	}
}
