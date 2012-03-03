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
		$query = $this->doctrine->em->createQuery("Select n,u.id as uid,u.firstName,u.lastName From Entities\Note n,Entities\User u WHERE n.user = u.id AND n.permission>0 ORDER BY n.created");
		$rs = $query->getArrayResult();
		$data['notes'] = $rs;
		$data['javascript'] = array("jquery.masonry.min.js");
		$this->parser->parse("portal.tpl",$data);	
	}
}
?>
