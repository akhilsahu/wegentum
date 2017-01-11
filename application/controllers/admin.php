<?php (defined('BASEPATH')) OR exit('No direct script access allowed');
class Admin extends CI_Controller{
    public $user=array();
    function Admin(){
        parent::__construct();
        $this->load->model('adminmodel');
        $this->user=$this->session->userdata('user');
        if($this->user['int_user_id']=='' && $this->user['int_user_group']!=1 )
        {
            redirect('auth/index', 'refresh');	
        }		
        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    }
		
	
	function addemp()
	{
		
				$data["page"]="addemp";
				//$data['user']=$user;
				$data=$this->load->view('admin/page',$data);
			
	}
		
	
	function submit_employee()
	{
		$data=$this->input->post();
		$pqr=$this->adminmodel->submit_emp($data);
		echo "Data Inserted Successfully";
		redirect('admin/addemp','refresh');
	}
	function emp_list()
	{
			$user=$this->user;
			$data["page"]="emp_grid";
			$data['user']=$user;
			$data["users"]=$this->adminmodel->get_all_users($user['int_user_id']);
			$this->load->view('admin/page',$data);	
	}
	
	function edit_emp()
	{
			$id=$this->input->get(id);
			$data["page"]="employee_edit";
			$data["details"]=$this->adminmodel->user_details($id);
			$this->load->view('admin/page',$data);	
	}
	function update_emp()
	{
			$data=$this->input->post();
			$data["users"]=$this->adminmodel->update_indv($data);
			//echo "Data Updated Successfully";exit;
			redirect('admin/emp_list','refresh');
	}
	function delete_emp()
	{
			$id=$this->input->get(id);
			$data["users"]=$this->adminmodel->delete_emp_records($id);
			//echo "Data Updated Successfully";exit;
			redirect('admin/emp_list','refresh');
	}
	function addcli()
	{
		
				$data["page"]="addclient";
				$data=$this->load->view('admin/page',$data);
			
	}
	
	function submit_cli()
	{
		$data=$this->input->post();
		//print_r($_FILES);exit;
		/*if($_FILES['image']['name']!='')
		{
			$image_name_string=$_FILES['image']['name'];
			$image_name_array=explode(".",$image_name_string);
			$ext=$image_name_array[count($image_name_array)-1];
			$filename='upload/'.date("YmdHis").".".$ext;
			move_uploaded_file($_FILES['image']['tmp_name'],$filename);
			$data['filename']=$filename;
		}
		else
		{
			$data['filename']='';
		}*/
		
			If ($_FILES)
			{
			foreach ($_FILES ['image']['name'] as $Key => $Name) 
			    {
						move_uploaded_file(
						$_FILES['image']['tmp_name'][$Key], 
						$_FILES['image']['name'][$Key] 
						) or die("Move from Temp area Failed");
						$filename= $_FILES['image']['name'][$Key];
						$data['filename']=$filename;
						//print_r($filename);exit;
						echo "<P>$filename: Uploaded";
			    }
			}
			
		$pqr=$this->adminmodel->submit_cli($data);
		echo "Data Inserted successfully";
			
	}
	
	function cli_list()
	{

		$data["page"]="client_grid";
		$user=$this->user;
		$data['users']=$this->adminmodel->get_all_clients($user['int_user_id']);
		$data=$this->load->view('admin/page',$data);
			
	}
	
	function edit_client()
	{
		$id=$this->input->get(id);
		//print_r($id);exit;
		$data["page"]="client_edit";
		$data['details']=$this->adminmodel->client_details($id);
		$data=$this->load->view('admin/page',$data);
			
	}
	function update_client()
	{
		$data=$this->input->post();
		$result=$this->adminmodel->update_client_ind($data);
		redirect('admin/cli_list','refresh');
		
	}
	function delete_client()
	{
		$id=$this->input->get(id);
		$data=$this->adminmodel->delete_records($id);
		redirect('admin/cli_list','refresh');
		//redirect('admin/cli_list','refresh');
	}
    function index(){		
        $data["page"]="admdashboard";
        $this->load->view('admin/page',$data);
    }	
    
    function profile(){
        
        //if()
    }
    		
   /* function submit_cli()
    {
        $data=$this->input->post();
        $pqr=$this->adminmodel->submit_cli($data);
        if($pqr){
            echo "Client successfully added";
        }
        else{
            echo "Failed to add Client";
        }
    }*/
}
?>
