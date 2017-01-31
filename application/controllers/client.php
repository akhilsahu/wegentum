<?php (defined('BASEPATH')) OR exit('No direct script access allowed');
class client extends CI_Controller{
public $user=array();
function client() 
	{
        parent::__construct();
		$this->load->model('clientmodel');
		$this->load->model('logmodel');
		$this->user=$this->session->userdata('user');
		//print_r($this->user);exit;
        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    }
	
	function dashboard()
	{
			$data['log']=$this->logmodel->cli_top_five($this->user['int_client_id']);
			$data["page"]="clidashboard";
			//$data['user']=$user;
			$this->load->view('client/page',$data);
		
	}
	
	function log_grid()
	{
				$data['log']=$this->logmodel->cli_top_five($this->user['int_client_id']);
				$data["page"]="cli_log_grid";
				$data['users']=$this->logmodel->cli_log_details($this->user['int_client_id']);
				$data=$this->load->view('client/page',$data);
			
	}
	
	function profile()
	{
		$data['log']=$this->logmodel->cli_top_five($this->user['int_client_id']);
		$user=$this->session->userdata('user');
		//print_r($user);exit;
		if(isset($user['int_client_id']) && $user['int_client_id']!='')
		{
			$data["page"]="profile";
			$this->load->view('client/page',$data);	
		}
		else
		{
			$this->load->view('login');	
		}	
	}

	function profile_update()
	{
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
		$status=$this->clientmodel->update_profile($data);
		$data["page"]="profile";
		redirect('client/dashboard', 'refresh');
	}
	function search()
			{
				$data=$this->input->post();
				if($data[search]!='')
				{
				$abc=$this->user['int_client_id'];
				$data['users'] = $this->clientmodel->getSearchBook($data['search'],$abc);
				$data["page"]="document_grid";
				$this->load->view('client/page',$data);
				}
			}
	
	
	function add_doc()
	{
				$data['log']=$this->logmodel->cli_top_five($this->user['int_client_id']);
				$data["page"]="add_document";
				$data=$this->load->view('client/page',$data);
			
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
		
		$pqr=$this->clientmodel->submit_doc($data);
		$action="Document"." ".$data['title']." "."Added"." "."By"." ".$this->user['txt_fname']." ".$this->user['txt_mname']." ".$this->user['txt_lname'];
		$abc=$this->logmodel->insertlog($action,$this->user['int_client_id'],3);
		redirect('client/doc_list','refresh');
		
	}
	public function download($id)
	{
		$data['result'] = $this->clientmodel->download_doc($id);		
		$this->load->helper('download');
		force_download($data['result']['Uploaded_File'], NULL);
		$action="Document Downloaded";
	}
	
	function doc_list()
	{
		$data['log']=$this->logmodel->cli_top_five($this->user['int_client_id']);
		$data["page"]="document_grid";
		$data['users']=$this->clientmodel->get_all_documents($this->user['int_client_id']);
		$data=$this->load->view('client/page',$data);
			
	}
	
	function delete_doc($id)
	{
		$data=$this->clientmodel->delete_doc($id);
		//print_r($data);exit;
		$action="Document"." "."Deleted"." "."By"." ".$this->user['txt_fname']." ".$this->user['txt_mname']." ".$this->user['txt_lname'];
		$abc=$this->logmodel->insertlog($action,$this->user['int_client_id'],3);
		redirect('client/doc_list','refresh');
	}
	function add_feedback()
	{
		$data['log']=$this->logmodel->cli_top_five($this->user['int_client_id']);
		$data['page']="feedback";
		$this->load->view('client/page',$data);
	}
	function submit_feedback()
	{
		$data=$this->input->post();
		$data['result']=$this->clientmodel->add_feedback($data);
		$action="Feedback"." ".$data['name']." "."Added"." "."By"." ".$this->user['txt_fname']." ".$this->user['txt_mname']." ".$this->user['txt_lname'];
		$abc=$this->logmodel->insertlog($action,$this->user['int_client_id'],3);
		redirect('client/dashboard','refresh');
	}
}
?>

