<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function aauth()
{
	$instance =& get_instance();
	return $instance->aauth;
}

if(! function_exists("check")) {

    /**
     * Check if current user is logged in.
     *
     * @return bool
     */
    function check()
    {
        $instance =& get_instance();
        return $instance->aauth->isLoggedin();
    }
}

if(! function_exists("can")) {

    /**
     * Check if current user has a permission by its name.
     *
     * @param $permissions
     * @return bool
     */
    function can($permissions)
    {
		$instance =& get_instance();
        return $instance->aauth->can($permissions);
    }
}

if(! function_exists("hasRole")) {

    /**
     * Checks if the current user has a role by its name.
     *
     * @param $roles
     * @return bool
     */
    function hasRole($roles)
    {
        $instance =& get_instance();
        return $instance->aauth->hasRole($roles);
    }
}
