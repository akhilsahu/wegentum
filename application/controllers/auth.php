<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class auth extends CI_Controller{

function auth() 
	{
        parent::__construct();
		
		//$this->load->library('session');
        //$this->load->database();
		$this->load->model('adminmodel');
		$this->load->model('clientmodel');
		//$this->load->helper('url');
		//$this->user=$this->session->userdata('user');
		//print_r($user);exit;
		
        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    }

function index()
	{
			$this->load->view('admin/login');
		
	}
	
	function verify()
	{
		$data=$this->input->post();	
		//print_r($data);exit;
		if($data['login']=="employee")
		{
			$response=$this->adminmodel->check($data);
			if(count($response)>1)
			{			
				$this->session->set_userdata('user',$response);
				if($response['int_user_group']==1)
				{
				redirect('admin/dashboard',refresh);
				
				}
				else
				{
					redirect('employee/dashboard',refresh);
				}
			}
			else
			{
				redirect('auth/index',refresh);
			}
		}
		else
		{
			$response=$this->clientmodel->check($data);
			//print_r($response);die();
			if(count($response)>1)
		{			
			$this->session->set_userdata('user',$response);
			redirect('client/dashboard',refresh);
		}
		
		}
}
	
	function logout()
	{
		$this->session->unset_userdata('user');
		$this->session->sess_destroy();
		//print_r($user);exit;
		redirect('auth/index',refresh);
	}
}
	?>