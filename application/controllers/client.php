<?php (defined('BASEPATH')) OR exit('No direct script access allowed');
class client extends CI_Controller{
public $user=array();
function client() 
	{
        parent::__construct();
		$this->load->model('clientmodel');
		$this->load->model('logmodel');
		$this->user=$this->session->userdata('user');
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
		
				$data["page"]="cli_log_grid";
				$data['users']=$this->logmodel->cli_log_details($pqr);
				$data=$this->load->view('client/page',$data);
			
	}
	
	function search()
			{
				$data=$this->input->post();
				//print_r($data);exit;
				if($data[search]!='')
				{
					$abc=$this->user[int_client_id];
				$data['users'] = $this->clientmodel->getSearchBook($data['search'],$abc);
				
				//print_r($abc);exit;
				$data["page"]="document_grid";
				$this->load->view('client/page',$data);
				}
				
				 else
				 {
					 echo 'Please enter some value in the Serach Box';
				 }
			}
	
	
	function add_doc()
	{
		
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
		$action="Document Added";
		$abc=$this->logmodel->insertlog($action,$this->user['int_client_id'],3);
		echo "Data Inserted successfully";
		
	}
	public function download()
	{
		$id=$this->input->get(id);
		$data['result'] = $this->clientmodel->download_doc($id);		
		$this->load->helper('download');
		force_download($data['result']['Uploaded_File'], NULL);
	}
	
	function doc_list()
	{
		$data["page"]="document_grid";
		//$user=$this->user[''];
		//print_r($this->user['int_user_id']);exit;
		$data['users']=$this->clientmodel->get_all_documents($this->user['int_client_id']);
		$data=$this->load->view('client/page',$data);
			
	}
	
	function delete_doc()
	{
		$id=$this->input->get(id);
		$data=$this->clientmodel->delete_doc($id);
		redirect('client/doc_list','refresh');
		$action="Document Deleted";
		$abc=$this->logmodel->insertlog($action,$this->user['int_client_id'],3);
		//redirect('client/cli_list','refresh');
	}
}
?>