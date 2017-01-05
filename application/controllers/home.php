<?php
  
  class Home extends CI_Controller{
	  
	  function Home()
	  {
		  parent::__construct();
		  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		  
	  }
	  function index()
	  {
		  
		  //$data["page"]="content";
		  $this->load->view('page',$data);
		  
		  
	  }
	  
	  
  }
?>