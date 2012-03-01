<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	
	function __construct()
	{
        	parent::__construct();

		//load the library
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('security');
	}

	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		if($username && $password){
			if($this->authex->login($username,$password)){
			}
			else{
				$data['error'] = "login error";
				$data['title'] = "login";
                        	$data['sitename'] = "sample site login";
                        	$data['css'] = array('login.css');
                        	$data['bodyclass'] = "login";
                        	$data['form'] = form_open('user/login');
                        	$this->parser->parse("login.tpl",$data);	
			}
		}
		else{
			$data['title'] = "login";
			$data['sitename'] = "sample site login";
			$data['css'] = array('login.css');
			$data['bodyclass'] = "login";
			$data['form'] = form_open('user/login');
			$this->parser->parse("login.tpl",$data);
		}
	}

	public function logout(){
		$this->authex->logout();
	}
}

?>
