<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authex{

 function Authex()
 {
     $CI =& get_instance();

     //load libraries
     //$CI->load->database();
     $CI->load->library("session");
 }

 function get_userdata()
 {
     $CI =& get_instance();

     if( ! $this->logged_in())
     {
         return false;
     }
     else
     {
          //$query = $CI->db->get_where("users", array("ID" => $CI->session->userdata("user_id")));
          //return $query->row();	
	  $user = $this->doctrine->em->find('Entities\User', $CI->session->userdata("user_id"));
     }
 }

 function logged_in()
 {
     $CI =& get_instance();
     return ($CI->session->userdata("user_id")) ? true : false;
 }

 function login($email, $password)
 {
     $CI =& get_instance();

     $data = array(
         "email" => $email,
         "password" => sha1($password)
     );

     //$query = $CI->db->get_where("users", $data);
	$user = $this->doctrine->em->getRepository('Entities\User')->findOneBy($data);

     if($user == false)
     {
         /* their username and password combination
         * were not found in the databse */

         return false;
     }
     else
     {
         //update the last login time
         $last_login = date("Y-m-d H-i-s");

	$user->last_login = $last_login;
	$user->save();

         //store user id in the session
         $CI->session->set_userdata("user_id", $user->getId());

         return true;
     }
 }

 function logout()
 {
     $CI =& get_instance();
     $CI->session->unset_userdata("user_id");
 }

 function register($email, $password)
 {
     $CI =& get_instance();

     //ensure the email is unique
     if($this->can_register($email))
     {
	$user = new Entities\User;
	$user->setEmail($email);
	$user->setPassword(sha1($password));
	$user->setCreated(new DateTime());
	$this->doctrine->em->persist($user);
	$this->doctrine->em->flush();
         return true;
     }

     return false;
 }

 function can_register($email)
 {
     $CI =& get_instance();

	$user = $this->doctrine->em->getRepository('Entities\User')->findOneBy(array('email' => $email));

     return (is_null($user)) ? true : false;
 }
}
