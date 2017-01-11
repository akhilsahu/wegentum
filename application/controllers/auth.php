<?php (defined('BASEPATH')) OR exit('No direct script access allowed');
class auth extends CI_Controller{

    function auth(){
        parent::__construct();
        $this->load->model('adminmodel');
        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    }

    function index(){
        $this->load->view('admin/login');
    }
	
    function verify()
    {
        $data=$this->input->post();	
        $response=$this->adminmodel->check($data);
        if(count($response)>1)
        {			
            $this->session->set_userdata('user',$response);
            if($response['int_user_group']==1){
                redirect('admin/',refresh);
            }else{
                redirect('employee/index',refresh);
            }
        }
        else
        {
            redirect('auth/index',refresh);
        }
    }
	
    function logout()
    {
            $this->session->unset_userdata('user');
            $this->session->sess_destroy();
            redirect('auth/index',refresh);
    }
}
	?>