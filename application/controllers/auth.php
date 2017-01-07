<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class auth extends CI_Controller{

function auth() 
	{
        parent::__construct();
		
		//$this->load->library('session');
        //$this->load->database();
		$this->load->model('adminmodel');
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
		$response=$this->adminmodel->check($data);
		if(count(response)==1)
		{			
			$this->session->set_userdata('user',$response);
			//print_r($this->session->userdata('user'));die();
			redirect('admin/dashboard',refresh);
		}
		else
		{
			redirect('auth/index',refresh);
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