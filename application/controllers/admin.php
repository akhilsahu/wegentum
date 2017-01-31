<?php (defined('BASEPATH')) OR exit('No direct script access allowed');
class Admin extends CI_Controller{
public $user=array();
function Admin() 
	{
        parent::__construct();
		$this->load->model('adminmodel');
		$this->load->model('logmodel');
		$this->user=$this->session->userdata('user');
		//print_r($this->user['isloggedin']);exit;
		if($this->user['int_user_id']=='' && $this->user['int_user_group']!=1 )
		{
			redirect('auth/index', 'refresh');	
		}		
			
        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    }
	
	function dashboard()
	{ 
	if($this->user['isloggedin']=='')
		{
			redirect('auth/lock_screen', 'refresh');	
		}
		else{
			
		
			$data['log']=$this->logmodel->top_five();
			$data['records_emp']=$this->adminmodel->no_emp_records($this->user['int_user_id']);
			$data['records_cli']=$this->adminmodel->no_cli_records($this->user['int_user_id']);
			$data["page"]="admdashboard";
			$this->load->view('admin/page',$data);
	}}
	
	function log_grid()
	{
				$data['log']=$this->logmodel->top_five();		
				$data["page"]="log_grid";
				$data['users']=$this->logmodel->log_details($pqr);
				$data=$this->load->view('admin/page',$data);
			
	}
	function import()
	{	
		$data['log']=$this->logmodel->top_five();
		$data['page']="import";
		$this->load->view('admin/page',$data);
	}
	function upload_stocks()
	{	
		$data['log']=$this->logmodel->top_five();
		$data['page']="upload_stocks";
		$this->load->view('admin/page',$data);
	}
	
	function profile()
	{	
		$data['log']=$this->logmodel->top_five();
		$user=$this->session->userdata('user');
		//print_r($user);exit;
		if(isset($user['int_user_id']) && $user['int_user_id']!='')
		{
			$data["page"]="profile";
			$this->load->view('admin/page',$data);	
		}
		else
		{
			$this->load->view('login');	
		}	
	}

	function profile_update()
	{
		$data['log']=$this->logmodel->top_five();
		$data=$this->input->post();	
		$data['file_name']='';
		if($_FILES['profile_image']['name']!='')
		{
			if (($_FILES["profile_image"]["type"] == "image/gif") || ($_FILES["profile_image"]["type"] == "image/jpeg")|| ($_FILES["profile_image"]["type"] == "image/jpg")|| ($_FILES["profile_image"]["type"] == "image/pjpeg")|| ($_FILES["profile_image"]["type"] == "image/x-png")|| ($_FILES["profile_image"]["type"] == "image/png")){
				$ext=explode(".",$_FILES["profile_image"]["name"]);		
				$file_name=date("YmdHis").".".$ext[count($ext)-1];
				move_uploaded_file($_FILES['profile_image'][tmp_name],"upload/".$file_name);
				$data['file_name']=$file_name;
			}
		}
		$status=$this->adminmodel->update_profile($data);
		$data["page"]="profile";
		redirect('admin/dashboard', 'refresh');
	}
	
	function settings()
	{
		$data['log']=$this->logmodel->top_five();
		$this->load->library('form_validation');		
		$this->form_validation->set_rules('site_name', 'Site Name', 'required');
		$this->form_validation->set_rules('site_email', 'Email', 'required');					
		if($this->form_validation->run())
		{	
			$data=array('txt_meta_value'=>$this->input->post('site_name'));
			$this->db->where('txt_meta_key','site_name');
			$this->db->update('tab_settings',$data);

			$data=array('txt_meta_value'=>$this->input->post('site_email'));
			$this->db->where('txt_meta_key','site_email');
			$this->db->update('tab_settings',$data);

			if($_FILES['image1']['tmp_name']!=''){
				$ext=explode(".",$_FILES["image1"]["name"]);		
				$file_name="logo.".$ext[count($ext)-1];

				$data=array('txt_meta_value'=>$file_name);
				$this->db->where('txt_meta_key','site_logo');
				$this->db->update('tab_settings',$data);
				
				move_uploaded_file($_FILES['image1']['tmp_name'],"upload/".$file_name);
			}
			
			$data=array('txt_meta_value'=>$this->input->post('contact_no'));
			$this->db->where('txt_meta_key','company_no');
			$this->db->update('tab_settings',$data);
			
			redirect('admin/settings', 'refresh');
		}
		else
		{
			$query = $this->db->get('tab_settings');
			$data['settings'] = $query->result_array();
			$data["page"]="settings";
			//print_r($data['settings']);exit;
			$this->load->view('admin/page',$data);
		}
	}
	function search()
			{
				$data=$this->input->post();
				//print_r($data);exit;
				if($data[search]!='')
				{
				$data['users'] = $this->adminmodel->getSearchBook($data['search']);
				$data["page"]="document_grid1";
				 $this->load->view('admin/page',$data);
				}
			}
			
			
			
	function addemp()
	{
				$data['log']=$this->logmodel->top_five();
				$data["page"]="addemp";
				$data=$this->load->view('admin/page',$data);
			
	}
	
	
	function submit_employee()
	{
		
		$data=$this->input->post();
		//print_r($data);exit;
		$pqr=$this->adminmodel->submit_emp($data);
		$action="Employee"." ".$data['name']." "."Added"." "."By"." ".$this->user['txt_name'];
		$abc=$this->logmodel->insertlog($action,$this->user['int_user_id'],$this->user['int_user_group']);
		//print_r($abc);exit;
		redirect('admin/emp_list','refresh');
	}
	function emp_list()
	{		
			$data['log']=$this->logmodel->top_five();		
			$user=$this->user;
			$data["page"]="emp_grid";
			$data['user']=$user;
			$data["users"]=$this->adminmodel->get_all_users($user['int_user_id']);
			$this->load->view('admin/page',$data);	
	}
	
	function edit_emp()
	{
			$data['log']=$this->logmodel->top_five();
			$id=$this->input->get(id);
			$data["page"]="employee_edit";
			$data["details"]=$this->adminmodel->user_details($id);
			$this->load->view('admin/page',$data);	
	}
	function update_emp()
	{
			$data['log']=$this->logmodel->top_five();
			$data=$this->input->post();
			$data["users"]=$this->adminmodel->update_indv($data);
			$action="Employee"." ".$data['name']." "."Updated"." "."By"." ".$this->user['txt_name'];
			$abc=$this->logmodel->insertlog($action,$this->user['int_user_id'],$this->user['int_user_group']);
			redirect('admin/emp_list','refresh');
	}
	function delete_emp()
	{	
			$data['log']=$this->logmodel->top_five();
			$id=$this->input->get(id);
			$data["users"]=$this->adminmodel->delete_emp_records($id);
			$action="Employee"." "."Deleted"." "."By"." ".$this->user['txt_name'];
			$abc=$this->logmodel->insertlog($action,$this->user['int_user_id'],$this->user['int_user_group']);
			
			redirect('admin/emp_list','refresh');
	}
	function addcli()
	{
				$data['log']=$this->logmodel->top_five();
				$data["page"]="addclient";
				$data=$this->load->view('admin/page',$data);
			
	}
	
	function submit_cli()
	{	
		$data['log']=$this->logmodel->top_five();
		$data=$this->input->post();
		//print_r($data);exit;
		//print_r($_FILES);exit;
		if($_FILES['photo']['name']!='')
		{
			$image_name_string=$_FILES['photo']['name'];
			$image_name_array=explode(".",$image_name_string);
			$ext=$image_name_array[count($image_name_array)-1];
		
			$filename='upload/'.date("YmdHis").".".$ext;
			move_uploaded_file($_FILES['photo']['tmp_name'],$filename);
			$data['filename']=$filename;
		}
		else
		{
			$data['filename']='';
		}
		/*elseif($_FILES['img2']['name']!='')
		{
			$image_name_string=$_FILES['img2']['name'];
			$image_name_array=explode(".",$image_name_string);
			$ext=$image_name_array[count($image_name_array)-1];
			$filename='upload/'.date("YmdHis").".".$ext;
			move_uploaded_file($_FILES['img2']['tmp_name'],$filename);
			$data['filename']=$filename;
		}
		
		elseif($_FILES['img3']['name']!='')
		{
			$image_name_string=$_FILES['img3']['name'];
			$image_name_array=explode(".",$image_name_string);
			$ext=$image_name_array[count($image_name_array)-1];
			$filename='upload/'.date("YmdHis").".".$ext;
			move_uploaded_file($_FILES['img3']['tmp_name'],$filename);
			$data['filename']=$filename;
		}
		
		elseif($_FILES['img4']['name']!='')
		{
			$image_name_string=$_FILES['img4']['name'];
			$image_name_array=explode(".",$image_name_string);
			$ext=$image_name_array[count($image_name_array)-1];
			$filename='upload/'.date("YmdHis").".".$ext;
			move_uploaded_file($_FILES['img4']['tmp_name'],$filename);
			$data['filename']=$filename;
		}
		
		elseif($_FILES['img5']['name']!='')
		{
			$image_name_string=$_FILES['img5']['name'];
			$image_name_array=explode(".",$image_name_string);
			$ext=$image_name_array[count($image_name_array)-1];
			$filename='upload/'.date("YmdHis").".".$ext;
			move_uploaded_file($_FILES['img5']['tmp_name'],$filename);
			$data['filename']=$filename;
		}
		
		else
		{
			$data['filename']='';
		}*/
		
			
		$pqr=$this->adminmodel->submit_cli($data);
		$action="Client"." ".$data['fname']." ".$data['mname']." ".$data['lname']." "."Added"."By"." ".$this->user['txt_name'];
		$abc=$this->logmodel->insertlog($action,$this->user['int_user_id'],$this->user['int_user_group']);
		echo "Data Inserted successfully";
		
			
	}
	
	function cli_list()
	{
		$data['log']=$this->logmodel->top_five();
		$data["page"]="client_grid";
		$user=$this->user;
		$data['users']=$this->adminmodel->get_all_clients($user['int_user_id']);
		$data=$this->load->view('admin/page',$data);
			
	}
	
	function edit_client()
	{	
		$data['log']=$this->logmodel->top_five();
		$id=$this->input->get(id);
		//print_r($id);exit;
		$data["page"]="client_edit";
		$data['details']=$this->adminmodel->client_details($id);
		$data=$this->load->view('admin/page',$data);
			
	}
	function update_client()
	{	
		$data['log']=$this->logmodel->top_five();
		$data=$this->input->post();
		$result=$this->adminmodel->update_client_ind($data);
		$action="Client"." ".$data['name']." "."Updated"." "."By"." ".$this->user['txt_name'];
		$abc=$this->logmodel->insertlog($action,$this->user['int_user_id'],$this->user['int_user_group']);
		redirect('admin/cli_list','refresh');
		
	}
	function delete_client($id)
	{
		//print_r($id);exit;
		$data['log']=$this->logmodel->top_five();
		$data=$this->adminmodel->delete_records($id);
		$action="Client"." "."Deleted"." "."By"." ".$this->user['txt_name'];
		$abc=$this->logmodel->insertlog($action,$this->user['int_user_id'],$this->user['int_user_group']);
		echo "success";
	}
	
	function add_doc()
	{
				$data['log']=$this->logmodel->top_five();
				$data["page"]="add_document";
				$data=$this->load->view('admin/page',$data);	
	}
	
	function submit_doc()	
	{	
		$data['log']=$this->logmodel->top_five();
		$data=$this->input->post();
		//print_r($data);exit;
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
		$action="Document"." ".$data['title']." "."Added"."By"." ".$this->user['txt_name'];
		$abc=$this->logmodel->insertlog($action,$this->user['int_user_id'],$this->user['int_user_group']);
		redirect('admin/doc_list','refresh');
	}
	function download($id)
	{
		$data['log']=$this->logmodel->top_five();
		$data['result'] = $this->adminmodel->download_doc($id);		
		 $this->load->helper('download');
		   force_download($data['result']['Uploaded_File'], NULL);
		  $action="Document"." "."Downloaded"."By"." ".$this->user['txt_name']; 
		 $abc=$this->logmodel->insertlog($action,$this->user['int_user_id'],$this->user['int_user_group']);
	}
	
	function doc_list()
	{	 
		$data['log']=$this->logmodel->top_five();
		$data["page"]="document_grid1";
		$data['users']=$this->adminmodel->get_all_documents($this->user['int_user_id']);
		$data=$this->load->view('admin/page',$data);
			
	}
	
	function delete_doc($id)
	{
		$data['log']=$this->logmodel->top_five();
		$data=$this->adminmodel->delete_doc($id);
		$action="Document"." "."Deleted"." "."By"." ".$this->user['txt_name'];
		$abc=$this->logmodel->insertlog($action,$this->user['int_user_id'],$this->user['int_user_group']);
		redirect('admin/doc_list','refresh');
	}
	
	function view_feedback($id)
	{
		//print_r($id);exit;
		$data['log']=$this->logmodel->top_five();
		$data['page']="feedback_grid";
		$data['users']=$this->adminmodel->get_all_feedback($this->user['int_user_id']);
		$this->load->view('admin/page',$data);
	}
	function get_feedback($id)
	{
		$data['details']=$this->adminmodel->get_feedback($id);
		echo json_encode($data['details']);		
	}
}
?>
