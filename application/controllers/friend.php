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
      if($this->authex->logged_in()){
          $user = $this->authex->get_userdata();
          $data['user'] = $user;
      }
      $friends = $request = '';
      $tmp = $this->doctrine->em->getRepository('Entities\Friends')->findBy(array('user' => $user['id']));
      if(is_array($tmp)){
        foreach($tmp as $t){
          $tmpfriend = $t->getFriend();
          $friends[] = array('uid'=>$tmpfriend->getId(),'firstname'=>$tmpfriend->getFirstName(),'lastname'=>$tmpfriend->getLastName());
        }
      }
      $tmp = $this->doctrine->em->getRepository('Entities\FriendRequest')->findBy(array('to' => $user['id']));
      if(is_array($tmp)){
        foreach($tmp as $t){
          $tmprequest = $t->getFrom();
          $request[] = array('id'=>$t->getId,'uid'=>$tmprequest->getId(),'firstname'=>$tmprequest->getFirstName(),'lastname'=>$tmprequest->getLastName());
        }
      }
      $data['friends'] = $friends;
      $data['request'] = $request;
      $this->parser->parse("friend.tpl",$data);
	}

    public function removeFriend(){
      if($this->authex->logged_in()){
          $user = $this->authex->get_userdata();
      }
      $touid = $this->input->post('touid');
      $touid = 2;
      if($user['id'] && $touid){
        $query = $this->doctrine->em->createQuery("Select f.id From Entities\Friends f WHERE f.user='".$user['id']."' AND f.friend='$touid'");
        $rs = $query->getResult();
        if($rs){
          $query = $this->doctrine->em->createQuery("Select f.id From Entities\Friends f WHERE f.user='$touid' AND f.friend='".$user['id']."'");
          $rs2 = $query->getResult();
          // remove friend bothside
          $friend =  $this->doctrine->em->find('Entities\Friends', $rs[0]['id']);
          $this->doctrine->em->remove($friend);
          if(isset($rs2)){
            $friend2 =  $this->doctrine->em->find('Entities\Friends', $rs2[0]['id']);
            $this->doctrine->em->remove($friend2);
          }
          // remove request
          $r1 = $this->doctrine->em->getRepository('Entities\FriendRequest')->findOneBy(array('to' => $user['id'],'from'=>$touid));
          $r2 = $this->doctrine->em->getRepository('Entities\FriendRequest')->findOneBy(array('to' => $touid,'from'=>$user['id'])); 
          if(isset($r1)){
            $this->doctrine->em->remove($r1);
          }
          if(isset($r2)){
            $this->doctrine->em->remove($r2);
          } 
          $this->doctrine->em->flush();
        }
      }
    }

    public function requestFriend(){
      if($this->authex->logged_in()){
          $user = $this->authex->get_userdata();
      } 
      $touid = $this->input->post('touid'); 
      if($user['id'] && $touid){
        $query = $this->doctrine->em->createQuery("Select r.id From Entities\FriendRequest r WHERE r.from='".$user['id']."' AND r.to='$touid'");
        $rs = $query->getResult();
        if(!$rs){
          //send request
          $from =  $this->doctrine->em->find('Entities\User', $user['id']);
          $to = $this->doctrine->em->find('Entities\User', $touid);
          $request = new Entities\FriendRequest;
          $request->setFrom($from);
          $request->setTo($to);
          $request->setRequestTime(new DateTime());
          
          $this->doctrine->em->persist($request);
          $this->doctrine->em->flush();
        }
      }
    }

    public function addFriend(){
      if($this->authex->logged_in()){
          $user = $this->authex->get_userdata();
      }
      $request_id = $this->input->post('request_id');
      if($user['id'] && $request_id){
        $r = $this->doctrine->em->find('Entities\FriendRequest', $request_id);
        if(isset($r) && !$r->getComplete()){
          if($r->getTo()->getId() == $user['id']){
            $from_id = $r->getFrom()->getId();
            $u1 = $this->doctrine->em->find('Entities\User', $user['id']);
            $u2 = $this->doctrine->em->find('Entities\User', $from_id);
            $friend = new Entities\Friends;
            $friend->setUser($u1);
            $friend->setFriend($u2);
            $this->doctrine->em->persist($friend);

            $friend = new Entities\Friends;
            $friend->setUser($u2);
            $friend->setFriend($u1);
            $this->doctrine->em->persist($friend);
          
            $r->setComplete(1);
            $r->setRequestTime(new DateTime());
            $this->doctrine->em->persist($r);
            $this->doctrine->em->flush();
          }
        }
      }
    }

    public function follow(){
      if($this->authex->logged_in()){
          $user = $this->authex->get_userdata();
      }
      $touid = $this->input->post('touid');
      if($user['id'] && $touid){
        $query = $this->doctrine->em->createQuery("Select f.id From Entities\Follow f WHERE f.user='".$user['id']."' AND f.follow='$touid'");
        $rs = $query->getResult();
        if(!$rs){
          $u1 = $this->doctrine->em->find('Entities\User', $user['id']);
          $u2 = $this->doctrine->em->find('Entities\User', $touid);
          $follow = new Entities\Follow;
          $follow->setUser($u1);
          $follow->setFollow($u2);
          $this->doctrine->em->persist($follow);
          $this->doctrine->em->flush();
        }
      }
    }

    public function unfollow(){
      if($this->authex->logged_in()){
          $user = $this->authex->get_userdata();
      }
      $touid = $this->input->post('touid');
      if($user['id'] && $touid){
        $query = $this->doctrine->em->createQuery("Select f.id From Entities\Follow f WHERE f.user='".$user['id']."' AND f.follow='$touid'");
        $rs = $query->getResult();
        if($rs){
          $follow = $this->doctrine->em->find('Entities\Follow', $rs[0]['id']);
          $this->doctrine->em->remove($follow);
          $this->doctrine->em->flush();
        }  
      }
    }
}

?>
