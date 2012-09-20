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
        $update = $this->input->post('update');
        if($update){
          $email = $this->input->post('email');
          $firstname = $this->input->post('first_name');
          $lastname = $this->input->post('last_name');
          $location = $this->input->post('location');
          $about = $this->input->post('about');
          $imgname = $this->input->post('imgname');
          $u =  $this->doctrine->em->find('Entities\User', $user['id']);
          if($email != '')
            $u->setEmail($email);
          if($firstname != '' && $lastname !=''){
            $u->setFirstName($firstname);
            $u->setLastName($lastname);
          }
          $u->getProfile()->setLocation($location);
          $u->getProfile()->setAbout($about);
          if($imgname != '')
            $u->getProfile()->setProfilePic($imgname);
          $this->doctrine->em->persist($u);
          $this->doctrine->em->flush(); 
          $user = $this->authex->get_userdata();
          $data['user'] = $user; 
       }

        $data['form'] = form_open('/user/profile',array('id'=>'userProfile','class'=>'Form StaticForm'));
		$data['javascript'] = array('ajaxfileupload.js');
        $this->parser->parse("profile.tpl",$data);
	}

	public function changePassword(){
	}

}

?>
