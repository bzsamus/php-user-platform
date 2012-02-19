<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Portal extends CI_Controller {

	public function __construct(){
        	
		parent::__construct();

                //load the library
                $this->load->library("authex");
                $this->load->helper('url');
                if(! $this->authex->logged_in()){
                        redirect("/user/login");
                }
	}
}
?>
