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
	
	function search()
			{
				$data=$this->input->post();
				//print_r($data['search']);exit;
				if($data[search]!='')
				{
				$data['users'] = $this->adminmodel->getSearchBook($data['search']);
				//print_r($users);exit;
				$data["page"]="document_grid1";
				 $this->load->view('admin/page',$data);
				}
				else
				 {
					 echo 'Please enter some value in the Serach Box';
				 }
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
	
	function add_doc()
	{
		
				$data["page"]="add_document";
				$data=$this->load->view('admin/page',$data);
			
	}
	
	function submit_doc()
	{
		$data=$this->input->post();
		if($_FILES['file']['name']!='')
		{
			$image_name_string=$_FILES['file']['name'];
			$image_name_array=explode(".",$image_name_string);
			$ext=$image_name_array[count($image_name_array)-1];
			$filename='upload/'.date("YmdHis").".".$ext;
			move_uploaded_file($_FILES['file']['tmp_name'],$filename);
			$data['filename']=$filename;
		}
		else
		{
			$data['filename']='';
		}
		
		$pqr=$this->adminmodel->submit_doc($data);
		echo "Data Inserted successfully";
	}
	public function download()
	{
		$id=$this->input->get(id);
		$data['result'] = $this->adminmodel->download_doc($id);		
		 $this->load->helper('download');
		   force_download($data['result']['Uploaded_File'], NULL);
	}
	
	function doc_list()
	{
		$data["page"]="document_grid1";
		//$user=$this->user[''];
		//print_r($this->user['int_user_id']);exit;
		$data['users']=$this->adminmodel->get_all_documents($this->user['int_user_id']);
		$data=$this->load->view('admin/page',$data);
			
	}
	
	function delete_doc()
	{
		$id=$this->input->get(id);
		$data=$this->adminmodel->delete_doc($id);
		redirect('admin/doc_list','refresh');
		//redirect('admin/cli_list','refresh');
	}
}
?>
