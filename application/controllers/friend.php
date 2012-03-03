<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Friend extends CI_Controller {
	
	function __construct()
	{
        	parent::__construct();

		//load the library
		$this->load->helper('url');
		$this->load->helper('security');
	}

	public function index(){
	}

	public function request(){
	}

}

?>
