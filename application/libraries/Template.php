<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template {
	private $topmenu = "layout/topmenu";
	private $sidemenu = "layout/sidemenu";
	private $template_data = array();
	
	function set($name, $value)
	{
		$this->template_data[$name] = $value;
	}

	function load($template = '', $view = '' , $view_data = array(), $return = FALSE)
	{               
		$this->CI =& get_instance();
		$this->set('topmenu', $this->CI->load->view($this->topmenu, $view_data, TRUE));
		$this->set('sidemenu', $this->CI->load->view($this->sidemenu, $view_data, TRUE));
		$this->set('contents', $this->CI->load->view($view, $view_data, TRUE));

		return $this->CI->load->view($template, $this->template_data, $return);
	}
}

/* End of file Template.php */
/* Location: ./system/application/libraries/Template.php */
