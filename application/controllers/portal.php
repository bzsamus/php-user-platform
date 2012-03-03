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
		$qb = $this->doctrine->em->createQueryBuilder();
		$qb->add('select','n')
			->add('from','Entities\Note n')
			->add('where','n.permission = 3')
			->add('orderBy','n.created')
			->setMaxResults(20);
		$query = $qb->getQuery();
		$rs = $query->getArrayResult();
		$data['notes'] = $rs;
		$this->parser->parse("portal.tpl",$data);	
	}
}
?>
