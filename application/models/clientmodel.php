<?php

class clientmodel extends CI_Model 
{


    function clientmodel()
	
	{
        parent::__construct();
    }

	function check_lockscreen($data) 
	{
		//print_r($data);exit;
        $sql = "select * from tab_clients where txt_password='".md5($data['password'])."'";
        $query = $this->db->query($sql);
		//print_r($query);exit;
         $result = $query->row_array();
		// print_r($result);exit;
		return $result;

    }
	
    function check($data) 
	{
		//print_r($data);exit;
        $sql = "select * from tab_clients where lower(txt_email)='".strtolower($data['email'])."'";
		
        $query = $this->db->query($sql);
		//print_r($query);exit;
         $result = $query->row_array();
		// print_r($result);exit;
		return $result;

    }
	
	function update_profile($data)
	{
		/*if($data['old_password']!=$data['password'])
		{
			$password=md5($data['password']);
		}
		else
		{
			$password=$data['old_password'];
		}*/
		$extra_query='';
		if($data['file_name']!='')
		{
			$extra_query=",txt_photo='".$data['file_name']."'";
		}
		$sql="update tab_clients set txt_fname='".$data['fname']."',txt_mname='".$data['mname']."',txt_fname='".$data['fname']."',txt_cell_no='".$data['cell_no']."'".$extra_query." where int_client_id=".$data['user_id']."";
		$query=$this->db->query($sql);
		//print_r($query);exit;
		$sql_sel="select * from tab_clients where int_client_id=".$data['user_id']."";
		$query=$this->db->query($sql_sel);
		//print_r($query);exit;
		$result=$query->result_array();
		//print_r($result);exit;
		$this->session->set_userdata('user', $result[0]);
		return $query?1:0;
		
	}
	
	
		function getSearchBook($data,$abc) 
		{
			//print_r($abc);exit;
			$select_query = "Select * from tab_documents where txt_title like '%$data%'
			and int_id='$abc'";
			$query = $this->db->query($select_query);
			//print_r($query);exit;
			$result=$query->result_array();
			//print_r($result);exit;
			return $result;
		}
	
	
	
	
	
	function submit_doc($data)
	{
		
		$title=$data['title'];
		$descrip=$data['descrip'];
		$filename=$data['filename'];
		$id=$data['id'];
		$sql="insert into tab_documents values(DEFAULT,'$title','$descrip','$filename','".date('Y-m-d H:i:s')."','$id')";
		//print_r($sql);exit;
		$result=$this->db->query($sql);
		return $result;
		
		
	}
	function download_doc($id)
	{
		
		 $sql="select * from tab_documents where int_user_id='$id'";
		//print_r($sql);exit;
		$query=$this->db->query($sql);
		$result=$query->row_array();
		//print_r($result);exit;
		return $result;
		
		
	}
	
	function get_all_documents($document_id)
	{
		//print_r($document_id);exit;
		$sql="select * from tab_documents where int_id='$document_id'";
	//	print_r($sql);exit;
		$query=$this->db->query($sql);
		$result=$query->result_array();
		//print_r($result);exit;
		return $result;
	}
	
	function delete_doc($id)
	{
		$query="DELETE FROM tab_documents where int_user_id='$id'";
		$result=$this->db->query($query);
		return $result;
	}
	function add_feedback($data)
	{
		$name=$data['name'];
		$title=$data['title'];
		$email=$data['email'];
		$description=$data['description'];
		$sql="insert into tab_feedback values(Default,'$name','$title','$email','$description','".date('Y-m-d H:i:s')."')";
		$result=$this->db->query($sql);
		return $result;
		$result=$this->db->query($query);
		return $result;
	}
	
}

?>