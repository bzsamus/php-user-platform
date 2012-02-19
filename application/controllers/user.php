<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	
	function __construct()
	{
        	parent::__construct();

		//load the library
		$this->load->helper('url');
	}

	public function login(){
		$data['title'] = "login";
		$this->parser->parse("login.tpl",$data);
	}
}

?>
