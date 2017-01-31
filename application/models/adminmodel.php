<?php

class adminmodel extends CI_Model 
{


    function adminmodel()
	
	{
        parent::__construct();
    }

	function check_lockscreen($data) 
	{
		//print_r($user);exit;
		$user=$this->session->userdata('user');
        $sql = "select * from tab_users where txt_password='".md5($data['password'])."' and txt_email='".$user['txt_email']."'";
        $query = $this->db->query($sql);
		//print_r($query);exit;
         $result = $query->row_array();
		// print_r($result);exit;
		return $result;

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
	
	function no_emp_records()
	{
		$sql="select int_user_id from tab_users";
		//print_r($sql);exit;
		$result=$this->db->query($sql);
		$response=count($result->result_array());
		//print_r($response);exit;
		return $response;
	}
	function no_cli_records()
	{
		$sql="select int_client_id from tab_clients";
		//print_r($sql);exit;
		$result=$this->db->query($sql);
		$response=count($result->result_array());
		//print_r($response);exit;
		return $response;
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
	function settings()
	{
		$select_query = "Select * from tab_settings";
			$query = $this->db->query($select_query);
			//print_r($query);exit;
			$result=$query->result_array();
			//	print_r($result);exit;
			return $result;
	}
	
	
		function getSearchBook($data) 
		{
			$select_query = "Select * from tab_documents where txt_title like '%$data%'";
			$query = $this->db->query($select_query);
			//print_r($query);exit;
			$result=$query->result_array();
			//	print_r($result);exit;
			return $result;
		}
	
	function submit_emp($data)
	{
		
		$ename=$data['name'];
		$email=$data['email'];
		$ephone=$data['phone'];
		$epassword=md5($data['password']);
		$edesignation=$data['designation'];
		$eaddress=$data['address'];
		$elpackage=$data['lcpackage'];
		$elcname=$data['lcname'];
		$egender=$data['gender'];
		$edate=$data['date'];
		
		
		$sql="insert into tab_users values(DEFAULT,'$ename','$email','$ephone','$epassword','$edesignation','$eaddress','$elpackage','$elcname','$egender','2','$edate','','','')";
		//print_r($sql);exit;
		$result=$this->db->query($sql);
		return $result;
		
		
		
	}
	
	function get_all_users($user_id)
	{
		$sql="select * from tab_users where int_user_group='2' and int_user_id!='$user_id'";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
	}
	function user_details($user_id)
	{
		$sql="select * from tab_users where int_user_id='$user_id'";
		$query=$this->db->query($sql);
		$result=$query->result_array();
		return $result;
	}
	function update_indv($data)
	{
		$user_id=$data['user_id'];
		//print_r($user_id);exit;
		$name=$data['name'];
		$email=$data['email'];
		$phone_no=$data['phone_no'];
		$designation=$data['designation'];
		$address=$data['address'];
		$lcpackage=$data['lcpackage'];
		$lcname=$data['lcname'];
		$gender=$data['gender'];
		$phone_no=$data['phone_no'];
		$date=$data['date'];
		
		$sql="update tab_users set txt_name='$name',txt_email='$email',txt_cell_no='$phone_no',txt_designation='$designation',txt_address='$address',int_last_package='$lcpackage',txt_last_company='$lcname',txt_gender='$gender',dt_added='$date' where int_user_id='$user_id'";
		//print_r($sql);exit;
		$query=$this->db->query($sql);
		return $query;
	}
	
	function delete_emp_records($user_id)
	{
		$sql="delete from tab_users where int_user_id='$user_id'";
		$query=$this->db->query($sql);
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
		$pswd=$data['password'];
		//$photo=$data['filename'];
		//$filename1=$data['filename'];
		$photo=$data['photo'];
		/*$sig_photo=$data['img2'];
		$pan_photo=$data['img3'];
		$id_photo=$data['img4'];
		$id_back_photo=$data['img5'];
		$cheque_photo=$data['img6'];*/
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
		
		$sql="insert into tab_clients values(DEFAULT,'$fname','$mname','$lname','$current_address1','$current_address2','$city','$pincode','$state','$country','$dob','$landline','$phone_no','$email','$pswd','$photo','$sig_photo','$pan_photo','$id_photo','$id_back_photo','$cheque_photo','$father_name','$mother_name','$gender','$status','$nationality','$pan_no','$annual_income','$nominee_name','$nominee_relation','$nominee_allocation','$bank_name','$bank_type','$bank_acc_no','$bank_ifsc_code','$bank_address','$permanent_address','$alternate_address','$permanent_city','$permanent_zip_code','$permanent_state','$permanent_country','','','')";
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
	//	print_r($query);exit;
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
		$sql="select * from tab_documents where int_user_id!='$document_id'";
		//print_r($sql);exit;
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
	
	function get_all_feedback($id)
	{
		//print_r($document_id);exit;
		$sql="select * from tab_feedback where int_feedback_id!='$id'";
		//print_r($sql);exit;
		$query=$this->db->query($sql);
		$result=$query->result_array();
		//print_r($result);exit;
		return $result;
	}
	
	function get_feedback($id)
	{
		$sql="select * from tab_feedback where int_feedback_id='$id'";
		$query=$this->db->query($sql);
		$result=$query->row_array();
		return $result;
	}
	
}

?>