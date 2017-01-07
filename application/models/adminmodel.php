<?php

class adminmodel extends CI_Model 
{


    function adminmodel()
	
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
	
	function submit_emp($data)
	
	{
		//$key=
		$ename=$data['name'];
		//print_r($ename);exit;
		
		$email=$data['email'];
		
		$ephone=$data['phone'];
		
		$epassword=$data['password'];
		
		$edesignation=$data['designation'];
		
		$eaddress=$data['address'];
		
		$elpackage=$data['lpackage'];
		
		$elcname=$data['lcname'];
		
		$egender=$data['gender'];
		
		$edate=$data['date'];
		
		
		$sql="insert into tab_users values(DEFAULT,'$ename','$email','$ephone','$epassword','$edesignation','$eaddress','$elpackage','$elcname','$egender','2','$edate','','')";
		//echo $sql;exit;
		$result=$this->db->query($sql);
		//print_r($result);exit;
		$last_id= $this->db->insert_id();
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
		$photo=$data['photo'];
		$sig_photo=$data['sig_photo'];
		$pan_photo=$data['pan_photo'];
		$id_photo=$data['id_photo'];
		$id_back_photo=$data['id_back_photo'];
		$cheque_photo=$data['cheque_photo'];
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
		
		
		
		
		$sql="insert into tab_clients values(DEFAULT,'$fname','$mname','$lname','$current_address1','$current_address2,'$city','$pincode','$state','$country','$dob','$landline','$phone_no','$email','$photo','$sig_photo',''$pan_photo,'$id_photo','$id_back_photo','$cheque_photo','$father_name','$mother_name','$gender','$status','$nationality','$pan_no','$annual_income','$nominee_name','$nominee_relation','$nominee_allocation','$bank_name','$bank_type','$bank_acc_no','$bank_ifsc_code','$bank_address','$permanent_address','$alternate_address','$permanent_city','$permanent_zip_code','$permanent_state','$permanent_country','','','')";
		
		$result=$this->db->query($sql);
		//print_r($result);exit;
		return $result;
		
		
	}
	
	function addcli($data)
	
	{
		
		$cname=$data['name'];
		$cmail=$data['email'];
		$cpassword=$data['password'];
		$cphone=$data['phone'];
		$caddress=$data['address'];
		$camount=$data['amount'];
		$cstatus=$data['status'];
		$cgender=$data['gender'];
		
		
		$sql="insert into tab_clients values(DEFAULT,'$cname','$cphone','$caddress','$camount','$cstatus','$cgender')";
		$result=$this->db->query($sql);
		
		$last_id= $this->db->insert_id();
		
		
		return $result;
		
	}
	
	function get_all_emp($user_id)
	{
		//print_r($user_id);exit;
		$abc="select tab1.int_user_id,tab1.txt_name,tab1.int_phoneno,tab1.address,tab1.int_lpackage,tab1.txt_lcomp,tab1.txt_gender, tab2.txt_email from tab_emp as tab1 left join tab_users as tab2 on tab2.int_resourceid=tab1.int_user_id where tab2.int_user_type=2"; 
		//print_r($abc);exit;
		$query=$this->db->query($abc);
		//print_r($query);exit;
		$result=$query->result_array();
		//print_r($result);exit;
		
		return $result;
	}
	
	function get_all_cli($user_id)
	{
		$abc="select tab1.int_user_id,tab1.txt_name,tab1.int_phoneno,tab1.txt_address,tab1.int_amount,tab1.txt_status,tab1.txt_gender, tab2.txt_email from tab_cli as tab1 left join tab_users as tab2 on tab2.int_resourceid=tab1.int_user_id where tab2.int_user_type=3";
          
		$query=$this->db->query($abc);
		
		$result=$query->result_array();
		//print_r($result);exit;
		return $result;
	}
	
	function edit_cli($id)
	{
		$query="select tab1.int_user_id,tab1.txt_name,tab1.int_phoneno,tab1.txt_address,tab1.int_amount,tab1.txt_status,
		tab1.txt_gender, tab2.txt_email from tab_cli as tab1 left join tab_users as tab2 on tab2.int_resourceid=tab1.int_user_id where tab1.int_user_id=$id";
		$abc=$this->db->query($query);
		//print_r($abc);exit;
		//$query=$this->db->query($abc)
		$result=$abc->result_array();
		//print_r($result);exit;
		return $result;
	}
	
	function edit_emp($id)
	{
		$query="select tab1.int_user_id,tab1.txt_name,tab1.int_phoneno,tab1.address,tab1.int_lpackage,tab1.txt_lcomp,tab1.txt_gender, tab2.txt_email from tab_emp as tab1 left join tab_users as tab2 on tab2.int_resourceid=tab1.int_user_id where tab1.int_user_id=$id";
		$abc=$this->db->query($query);
		//print_r($abc);exit;
		//$query=$this->db->query($abc)
		$result=$abc->result_array();
		//print_r($result);exit;
		return $result;
	}
	
	function update_cli($data)
	
	{
		
		$cname=$data['name'];
		//$cmail=$data['email'];
		//$cpassword=$data['password'];
		$cphone=$data['phone'];
		$caddress=$data['address'];
		$camount=$data['amount'];
		$cstatus=$data['status'];
		$cgender=$data['gender'];
		
		$sql="UPDATE tab_cli SET txt_name='$cname',int_phoneno='$cphone',txt_address='$caddress',int_amount='$camount',txt_status='$cstatus',txt_gender='$cgender' WHERE int_user_id=".$data['user_id']." ";
		//echo $sql;exit;
		$result=$this->db->query($sql);
		//$pqr="UPDATE tab_users SET txt_email='$cmail',WHERE int_user_id=".$data['user_id']." ";
		//$output=$this->db->query($pqr);
		return $result;
		
	}
	
	function update_emp($data)
	
	{
		
		$ename=$data['name'];
		//$eemail=$data['email'];
		//$epassword=$data['password'];
		$ephone=$data['phone'];
		$eaddress=$data['address'];
		$epackage=$data['package'];
		$ecompany=$data['company'];
		$egender=$data['gender'];
		
		$sql="UPDATE tab_emp SET txt_name='$ename',int_phoneno='$ephone',address='$eaddress',int_lpackage='$epackage',txt_lcomp='$ecompany',txt_gender='$egender' WHERE int_user_id=".$data['user_id']." ";
		$result=$this->db->query($sql);
		//$pqr="UPDATE tab_users SET txt_email='$eemail', WHERE int_user_id=".$data['user_id']." ";
		//$output=$this->db->query($pqr);
		return $result;
		
	}
	
	function delete_emp($id)
	{
		$query="DELETE FROM tab_emp where int_user_id=$id";
		//print_r($query);exit;
		$abc=$this->db->query($query);
		$output="DELETE FROM tab_users where int_resourceid=$id and int_user_type='2'";
		//print_r($query);exit;
		$pqr=$this->db->query($output);
		return $abc;
	}
	
	function delete_cli($id)
	{
		$query="DELETE FROM tab_cli where int_user_id=$id";
	//	print_r($query);exit;
		$abc=$this->db->query($query);
		$output="DELETE FROM tab_users where int_resourceid=$id and int_user_type='3'";
		//print_r($query);exit;
		$pqr=$this->db->query($output);
		return $abc;
	}
	
	function cli_transac_get($user_id)
	{
		//print_r($user_id);exit;
		
		$sql="select * from tab_cli where int_user_id!=$user_id";
		
		$result=$this->db->query($sql);
		$res=$result->result_array();
		//$last_id= $this->db->insert_id();
		
		//$pqr="insert into tab_users values(DEFAULT,'$cmail','$cpassword','3','$last_id')";
		//$output=$this->db->query($pqr);
		return $res;
	}
	
	
	function cli_transac_submit($data)
	{
		//print_r($data);exit;
		$date=$data['date'];
		$camount=$data['amount'];
		$cmode=$data['mode'];
		$sql="insert into tab_cli_transac values(DEFAULT,'$date','$camount','$cmode')";
		$result=$this->db->query($sql);
		return $result;
	}
	function cli_return_submit($data)
	{
		$date=$data['date'];
		$investedin=$data['investedin'];
		$return=$data['return'];
		$sql="insert into tab_cli_returns values(DEFAULT,'$date','$investedin','$return')";
		//print_r($sql);exit;
		$result=$this->db->query($sql);
		return $result;
	}
}

?>