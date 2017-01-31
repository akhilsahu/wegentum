<?php

class employeemodel extends CI_Model 
{


    function employeemodel()
	
	{
        parent::__construct();
    }

    function check($data) 
	{
		//print_r($data);exit;
        $sql = "select * from tab_users where lower(txt_email)='".strtolower($data['email'])."' and txt_password='".md5($data['password'])."'";
        $query = $this->db->query($sql);
		//print_r($query);exit;
         $result = $query->row_array();
		// print_r($result);exit;
		return $result;

    }
	
	
	function update_profile($data)
	{
		if($data['old_password']!=$data['password'])
		{
			$password=md5($data['password']);
		}
		else
		{
			$password=$data['old_password'];
		}
		$extra_query='';
		if($data['file_name']!='')
		{
			$extra_query=",upload_img='".$data['file_name']."'";
		}
		$sql="update tab_users set txt_name='".$data['name']."',txt_password='$password',txt_designation='".$data['designation']."',txt_cell_no='".$data['cell_no']."'".$extra_query." where int_user_id=".$data['user_id']."";
		$query=$this->db->query($sql);
		//print_r($query);exit;
		$sql_sel="select * from tab_users where int_user_id=".$data['user_id']."";
		$query=$this->db->query($sql_sel);
		//print_r($query);exit;
		$result=$query->result_array();
		//print_r($result);exit;
		$this->session->set_userdata('user', $result[0]);
		return $query?1:0;
		
	}
	
	
		function getSearchBook($data,$abc) 
		{
			$select_query = "Select * from tab_documents where txt_title like '%$data%' and int_id='$abc'";
			$query = $this->db->query($select_query);
			//print_r($query);exit;
			$result=$query->result_array();
			//print_r($result);exit;
			return $result;
		}
	
	
	
	function submit_cli($data)
	{
		$fname=$data['fname'];
		$mname=$data['mname'];
		$lname=$data['lname'];
		$current_address1=$data['current_address1'];
		$current_address2=$data['current_address2'];
		$city=$data['city'];
		$pincode=$data['pincode'];
		$state=$data['state'];
		$country=$data['country'];
		$dob=$data['dob'];
		$landline=$data['landline'];
		$phone_no=$data['phone_no'];
		$email=$data['email'];
		$filename=$data['filename'];
		//$filename1=$data['filename'];
		//$photo=$data['photo'];
		//$sig_photo=$data['sig_photo'];
		//$pan_photo=$data['pan_photo'];
		//$id_photo=$data['id_photo'];
		//$id_back_photo=$data['id_back_photo'];
		//$cheque_photo=$data['cheque_photo'];
		$father_name=$data['father_name'];
		$mother_name=$data['mother_name'];
		$gender=$data['gender'];
		$status=$data['status'];
		$nationality=$data['nationality'];
		$pan_no=$data['pan_no'];
		$annual_income=$data['annual_income'];
		$nominee_name=$data['nominee_name'];
		$nominee_relation=$data['nominee_relation'];
		$nominee_allocation=$data['nominee_allocation'];
		$bank_name=$data['bank_name'];
		$bank_type=$data['bank_type'];
		$bank_acc_no=$data['bank_acc_no'];
		$bank_ifsc_code=$data['bank_ifsc_code'];
		$bank_address=$data['bank_address'];
		$permanent_address=$data['permanent_address'];
		$alternate_address=$data['alternate_address'];
		$permanent_city=$data['permanent_city'];
		$permanent_zip_code=$data['permanent_zip_code'];
		$permanent_state=$data['permanent_state'];
		$permanent_country=$data['permanent_country'];
		
		$sql="insert into tab_clients values(DEFAULT,'$fname','$mname','$lname','$current_address1','$current_address2','$city','$pincode','$state','$country','$dob','$landline','$phone_no','$email','$filename','$filename','$filename','$filename','$filename','$filename','$father_name','$mother_name','$gender','$status','$nationality','$pan_no','$annual_income','$nominee_name','$nominee_relation','$nominee_allocation','$bank_name','$bank_type','$bank_acc_no','$bank_ifsc_code','$bank_address','$permanent_address','$alternate_address','$permanent_city','$permanent_zip_code','$permanent_state','$permanent_country','','','')";
		//print_r($sql);exit;
		$result=$this->db->query($sql);
	//	print_r($result);exit;
		return $result;
		
		
	}
	
	function get_all_clients($client_id)
	{
		$sql="select * from tab_clients where int_client_id!='$client_id'";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
	}
	
	function client_details($id)
	{
		//print_r($id);exit;
		$query="select * from tab_clients where int_client_id='$id'";
		$abc=$this->db->query($query);
		//print_r($abc);exit;
		//$query=$this->db->query($abc)
		$result=$abc->result_array();
		//print_r($result);exit;
		return $result;
	}
	
	
	function update_client_ind($data)
	{
		$name=$data['name'];
		$email=$data['email'];
		$address=$data['address'];
		$phone_no=$data['phone_no'];
		$pan_no=$data['pan_no'];
		$nominee_name=$data['nominee_name'];
		$nominee_relation=$data['nominee_relation'];
		$bank_name=$data['bank_name'];
		$bank_acc_no=$data['bank_acc_no'];
		
		$sql="UPDATE tab_clients SET txt_fname='$name',txt_email='$email',txt_cell_no='$phone_no',txt_pan_no='$pan_no',txt_nominee_name='$nominee_name',txt_nominee_relation='$nominee_relation',txt_bank_name='$bank_name',txt_bank_acccount_no='$bank_acc_no' WHERE int_client_id=".$data['client_id']." ";
		$result=$this->db->query($sql);
		return $result;	
	}
	
	function delete_records($id)
	{
		$query="DELETE FROM tab_clients where int_client_id='$id'";
		$result=$this->db->query($query);
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
	
}

?>