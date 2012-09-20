<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Portal extends CI_Controller {

	public function __construct(){
        	
		parent::__construct();

                //load the library
                $this->load->helper('url');
	}

	public function index(){
		$data['title'] = "welcome";
		if($this->authex->logged_in()){
                        $data['user'] = $this->authex->get_userdata();
                }
		//$qb = $this->doctrine->em->createQueryBuilder();
		$query = $this->doctrine->em->createQuery("Select n,u.id as uid,u.firstName,u.lastName,p.profile_pic From Entities\Note n,Entities\User u, Entities\UserProfile p WHERE n.user = u.id AND u.profile_id = p.id AND n.permission=3 ORDER BY n.created DESC");
		$rs = $query->getArrayResult();
		$data['notes'] = $rs;
		$data['javascript'] = array("jquery.masonry.min.js");
		$this->parser->parse("portal.tpl",$data);	
	}
}
?>
