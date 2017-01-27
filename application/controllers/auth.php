<?php (defined('BASEPATH')) OR exit('No direct script access allowed');
class auth extends CI_Controller{

    function auth(){
        parent::__construct();
		//$this->load->library('session');
        //$this->load->database();
		$this->load->model('adminmodel');
		$this->load->model('clientmodel');
		$this->load->model('logmodel');
		//$this->load->helper('url');
		//print_r($user);exit;
		
        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		
    }

    function index(){
		
        $this->load->view('admin/login');
    }
	function lock_screen(){
        $this->load->view('admin/lockscreen');
    }
	
	function verify1()
	{
	$data=$this->input->post();	
		//print_r($data);exit;
	
			$response=$this->adminmodel->check_lockscreen($data);
			if(count($response)>1)
			{			
				$this->session->set_userdata('user',$response);
				redirect('admin/dashboard',refresh);

		
			}
			else
			{
				echo  "Invalid Password";
			}
	}

function verify2()
	{
	$data=$this->input->post();	
		//print_r($data);exit;
	
			$response=$this->employeemodel->check_lockscreen($data);
			if(count($response)>1)
			{			
				$this->session->set_userdata('user',$response);
				redirect('admin/dashboard',refresh);

		
			}
			else
			{
				echo  "Invalid Password";
			}
	}

function verify3()
	{
	$data=$this->input->post();	
		//print_r($data);exit;
	
			$response=$this->clientmodel->check_lockscreen($data);
			if(count($response)>1)
			{			
				$this->session->set_userdata('user',$response);
				redirect('admin/dashboard',refresh);

		
			}
			else
			{
				echo  "Invalid Password";
			}
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
				$response['isloggedin']=1;
				$this->session->set_userdata('user',$response);
				//$data['log']=$this->logmodel->emp_top_five($this->user['int_user_id']);
				//$this->session->set_userdata('log',$response);
				
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
            redirect('auth/index',refresh);
    }
}
	?>
