<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Note extends CI_Controller {
	
	function __construct()
	{
        	parent::__construct();

		//load the library
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('security');
	}

	public function index(){
		$data['title'] = "Notes";
                if($this->authex->logged_in()){
                        $user = $this->authex->get_userdata();
                        $data['user'] = $user;
			$tmp = $this->doctrine->em->getRepository('Entities\Note')->findBy(array('user' => $user['id']));
                	if(isset($tmp)){
				foreach($tmp as $t){
					$note[] = array('title'=>$t->getTitle(),'content'=>$t->getContent(),'id'=>$t->getId());
				}
			}
			if(isset($note)){
				$data['notes'] = $note;
			}
		}
		else{
			redirect("user/login/?next=note");
		}
		$this->parser->parse('mynote.tpl',$data);
	}

	public function create(){
		$data['title'] = "create new note";
                if($this->authex->logged_in()){
                        $user = $this->authex->get_userdata();
			$data['user'] = $user;
                }

		$title = $this->input->post('title');
		$content =  $this->input->post('content');
		$permission = $this->input->post('permission');

		if($title && $content && $permission && $user['id']){
			// create note
			$u =  $this->doctrine->em->find('Entities\User', $user['id']);
			$note = new Entities\Note;
			$note->setTitle($title);
			$note->setContent($content);
			$note->setPermission($permission);
			$note->setCreated(new DateTime());
			$note->setUser($u);
			
			$this->doctrine->em->persist($note);
			$this->doctrine->em->flush();
			redirect('/note');
		}

		$data['form'] = form_open('/note/create',array('id'=>'createNote','class'=>'Form StaticForm'));
		$this->parser->parse("createnote.tpl",$data);
	}

	public function edit(){
	}

}

?>
