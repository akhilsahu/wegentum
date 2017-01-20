<?php

class Logmodel extends CI_Model 
{
    function logmodel()
	
	{
        parent::__construct();
    }
	
	function insertlog($msg,$userid,$usertype)
	{
		$sql="insert into tab_log values(DEFAULT,'$msg','".date('Y-m-d H:i:s')."','$userid','$usertype')";
		//print_r($sql);exit;
		$result=$this->db->query($sql);
		return $result;
	}
	function top_five($logid)
	{
		$sql="SELECT txt_msg,dt_timestamp FROM tab_log
		ORDER BY int_log_id DESC
		LIMIT 5";
		//print_r($sql);exit;
		$query=$this->db->query($sql);
		$response=$query->result_array();
		//print_r($response);exit;
		return $response;
	}
	function emp_top_five($logid)
	{
		$sql="SELECT txt_msg FROM tab_log where int_user_id='$logid'
		ORDER BY int_log_id DESC
		LIMIT 5 ";
		//print_r($sql);exit;
		$query=$this->db->query($sql);
		$response=$query->result_array();
		//print_r($response);exit;
		return $response;
	}
	function cli_top_five($logid)
	{
		$sql="SELECT txt_msg FROM tab_log where int_user_id='$logid'
		ORDER BY int_log_id DESC
		LIMIT 5 ";
		//print_r($sql);exit;
		$query=$this->db->query($sql);
		$response=$query->result_array();
		//print_r($response);exit;
		return $response;
	}
	function log_details($logid)
	{
		$sql="select * from tab_log";
		//print_r($sql);exit;
		$query=$this->db->query($sql);
		$response=$query->result_array();
		//print_r($response);exit;
		return $response;
	}
	function emp_log_details($logid)
	{
		$sql="select * from tab_log where int_user_id='$logid'";
		//print_r($sql);exit;
		$query=$this->db->query($sql);
		$response=$query->result_array();
		//print_r($response);exit;
		return $response;
	}
	function cli_log_details($logid)
	{
		$sql="select * from tab_log where int_user_id='$logid'";
		//print_r($sql);exit;
		$query=$this->db->query($sql);
		$response=$query->result_array();
		//print_r($response);exit;
		return $response;
	}
} 

?>