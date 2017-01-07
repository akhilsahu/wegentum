<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Admin_Controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
                $usersession=$this->session->userdata('logged_in');
				print_r($usersession);exit;
                if($this->session->userdata('logged_in')==false || $usersession['int_user_type']!=1)
		   {
			 redirect('user/adminlogin', 'refresh');
		   }

	}
	
	
	function index() 
	{
        parent::__construct();
		
        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		$usersession=$this->session->userdata('logged_in');
				print_r($usersession);exit;
                if($this->session->userdata('logged_in')==false || $usersession['int_user_type']!=1)
		   {
			 redirect('login', 'refresh');
		   }
    }
}
