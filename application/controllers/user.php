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
		$next = $this->input->get('next');
		if(!isset($next)){
			$next = "/";
		}
		$data['title'] = "login";
                $data['css'] = array('login.css');
                $data['bodyclass'] = "login";
                $data['form'] = form_open('user/login',array('class'=>'Form FancyForm AuthForm'));	
		if($username && $password){
			if($this->authex->login($username,$password)){
				redirect($this->input->post("next"));	
			}
			else{
				$data['error'] = "login error";
                        	$this->parser->parse("login.tpl",$data);	
			}
		}
		else{
			$data['next'] = $next;
			$this->parser->parse("login.tpl",$data);
		}
	}

     public function logout(){
        $this->authex->logout();
        redirect("/");
    }

	public function index(){
	
	}

	public function profile(){
		$data['title'] = "User Profile";
                if($this->authex->logged_in()){
			$user = $this->authex->get_userdata();
			$data['user'] = $user;
                }

                $data['form'] = form_open('/user/profile',array('id'=>'userProfile','class'=>'Form StaticForm'));
		$this->parser->parse("profile.tpl",$data);
	}

	public function changePassword(){
	}

}

?>
