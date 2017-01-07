<?php
class employee extends employee_controller
{

function login()
{
	
	$data['page']="dashboard";
	$this->load->view('admin/page',$data);
}

}
?>