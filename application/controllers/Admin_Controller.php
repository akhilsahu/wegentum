<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Admin_Controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
                $usersession=$this->session->userdata('logged_in');
                if($this->session->userdata('logged_in')==false || $usersession['int_user_type']!=1)
		   {
			 redirect('user/adminlogin', 'refresh');
		   }

	}
}
