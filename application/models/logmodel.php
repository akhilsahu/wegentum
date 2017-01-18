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
		
		//echo $msg;
		
		
	}

} 

?>