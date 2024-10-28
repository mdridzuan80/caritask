<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aauth {

	private $CI;
	private $provider;
	private $user;
	//private $method;

	public function __construct()
	{
		$this->CI =& get_instance();
		$this->CI->config->load('auth');
		
		$this->CI->load->library('bcrypt');
		$this->CI->load->library($this->CI->config->item('method'));

		$this->CI->load->model($this->CI->config->item('provider'),'provider');

		$this->provider = $this->CI->provider;

		$this->init();

	}

	/**
     * Initialization the Auth class
     */
    protected function init()
    {
        if ($this->CI->session->has_userdata("user") && $this->CI->session->loginStatus) {
            $this->user = $this->user();
            $this->roles = $this->roles();
            $this->loginStatus = true;
        }

        return;
    }


	public function attempt($username,$password)
	{
		$this->user = $this->provider->byUsername($username);

		if(!$this->user || !$this->CI->bcrypt->verify($password, $this->user->password)) {

			return FALSE;
		}

		unset($this->user->password);

		$this->setUser();

		return TRUE;
	}

	public function destroy() {
		$this->CI->session->sess_destroy();
	}

	public function isLoggedin() {
		return !is_null($this->CI->session->userdata('loginStatus'));
	}

	public function user()
	{
		return $this->CI->session->userdata('user');
	}

	public function roles()
	{
		return $this->CI->session->userdata('roles');
	}

	 /**
     * Read the current user roles ID
     *
     * @param $userID
     * @return string
     */
    protected function userWiseRoles()
    {
        return array_map(function ($item) {
            return $item["role_id"];
        }, $this->CI->db->get_where("roles_users", array("user_id" => $this->user->id))->result_array());
    }

	/**
     * Setting session for authenticated user
     */
    protected function setUser()
    {
        $this->CI->session->set_userdata(array(
            "user" => $this->user,
            "roles" => $this->userWiseRoles(),
            "loginStatus" => true
        ));
    }

	/**
     * Read the current user roles name
     *
     * @return array
     */
    public function userRoles()
    {
        return array_map(function ($item) {
            return $item["name"];
        }, $this->CI->db
            ->select("roles.*")
            ->from("roles")
            ->join("roles_users", "roles.id = roles_users.role_id", "inner")
            ->where(array("roles_users.user_id" => $this->user->id,"roles.status" => 1, "deleted_at" => null))
            ->get()->result_array());
    }

	/**
     * Read current user permissions name
     *
     * @return mixed
     */
    public function userPermissions()
    {
        return array_map(function ($item) {
            return $item["name"];
        }, $this->CI->db
        ->select("permissions.*")
        ->from("permissions")
        ->join("permission_roles", "permissions.id = permission_roles.permission_id", "inner")
        ->where_in("permission_roles.role_id", $this->roles())
        ->where(array("permissions.status" => 1, "deleted_at" => null))
        ->group_by("permission_roles.permission_id")
        ->get()->result_array());
    }

    /**
     * Determine if the current user is authenticated for specific methods.
     *
     * @param array $methods
     * @return bool
     */
    public function only($methods = array())
    {
        if (is_array($methods) && count(is_array($methods))) {
            foreach ($methods as $method) {
                if ($method == (is_null($this->CI->uri->segment(2)) ? "index" : $this->CI->uri->segment(2))) {
                    return $this->route_access();
                }
            }
        }

        return true;
    }

    /**
     * Determine if the current user is authenticated except specific methods.
     *
     * @param array $methods
     * @return bool
     */
    public function except($methods = array())
    {
        if (is_array($methods) && count(is_array($methods))) {
            foreach ($methods as $method) {
                if ($method == (is_null($this->CI->uri->segment(2)) ? "index" : $this->CI->uri->segment(2))) {
                    return true;
                }
            }
        }

        return $this->route_access();
    }

    /**
     * Determine if the current user is authenticated to view the route/url
     *
     * @return bool|void
     */
    public function route_access()
    {
        $this->check();

        $routeName = (is_null($this->CI->uri->segment(2)) ? "index" : $this->CI->uri->segment(2)) . "-" . $this->CI->uri->segment(1);

        if ($this->CI->uri->segment(1) == 'home')
            return true;

        if($this->can($routeName))
            return true;

        return redirect('exceptions/custom_404', 'refresh');
    }

    /**
     * Checks if the current user has a role by its name.
     *
     * @param $roles
     * @param bool $requireAll
     * @return bool
     */
    public function hasRole($roles, $requireAll = false)
    {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->checkRole($role) && !$requireAll)
                    return true;
                elseif (!$this->checkRole($role) && $requireAll) {
                    return false;
                }
            }
        }
        else {
            return $this->checkRole($roles);
        }
        // If we've made it this far and $requireAll is FALSE, then NONE of the perms were found
        // If we've made it this far and $requireAll is TRUE, then ALL of the perms were found.
        // Return the value of $requireAll;
        return $requireAll;
    }

    /**
     * Check current user has specific role
     *
     * @param $role
     * @return bool
     */
    public function checkRole($role)
    {
        return in_array($role, $this->userRoles());
    }

    /**
     * Check if current user has a permission by its name.
     *
     * @param $permissions
     * @param bool $requireAll
     * @return bool
     */
    public function can($permissions, $requireAll = false)
    {
        if (is_array($permissions)) {
            foreach ($permissions as $permission) {
                if ($this->checkPermission($permission) && !$requireAll)
                    return true;
                elseif (!$this->checkPermission($permission) && $requireAll) {
                    return false;
                }
            }
        }
        else {
            return $this->checkPermission($permissions);
        }
        // If we've made it this far and $requireAll is FALSE, then NONE of the perms were found
        // If we've made it this far and $requireAll is TRUE, then ALL of the perms were found.
        // Return the value of $requireAll;
        return $requireAll;
    }

    /**
     * Check current user has specific permission
     *
     * @param $permission
     * @return bool
     */
    public function checkPermission($permission)
    {
        return in_array($permission, $this->userPermissions());
    }
}
