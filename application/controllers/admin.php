<?php (defined('BASEPATH')) OR exit('No direct script access allowed');
class Admin extends CI_Controller{
public $user=array();
function Admin() 
	{
        parent::__construct();
		//$this->load->library('session');
        //$this->load->database();
		$this->load->model('adminmodel');
		//$this->load->controller('auth');
		//$this->load->helper('url');
		$this->user=$this->session->userdata('user');
		//$username=$this->user['txt_name'];
		//print_r($username);exit;
		if($this->user['int_user_id']=='' && $this->user['int_user_group']!=1 )
		{
			redirect('auth/index', 'refresh');	
		}
		
        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    }
	function index()
	{
		echo 'hi';
	}
	
	
	function dashboard()
	{
		
			$data["page"]="admdashboard";
			//$data['user']=$user;
			$this->load->view('admin/page',$data);
		
	}
	
	
	function addemp()
	{
		
				$data["page"]="addemp1";
				//$data['user']=$user;
				$data=$this->load->view('admin/page',$data);
			
	}
		
	
	function submit_employee()
	{
		$data=$this->input->post();
	//	print_r($data);exit;
		$pqr=$this->adminmodel->submit_emp($data);
		if($pqr)
		{
			echo "Employee successfully added";
		}
		else
		{
			echo "Failed to add Employee";
		}
	}
	function addcli()
	{
		
				$data["page"]="addcli";
				//$data['user']=$user;
				$data=$this->load->view('admin/page',$data);
			
	}
	function submit_cli()
	{
		$data=$this->input->post();
		//print_r($data);exit;
		$pqr=$this->adminmodel->submit_cli($data);
		if($pqr)
		{
			echo "Client successfully added";
		}
		else
		{
			echo "Failed to add Client";
		}
			
	}
}
?>