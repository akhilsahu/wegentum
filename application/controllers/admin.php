<?php  (defined('BASEPATH')) OR exit('No direct script access allowed');

require_once('Admin_Controller.php');

class Admin extends Admin_Controller{
	
    function __construct()
    {
            parent::__construct();
    }
    
   
    function index(){
        
        $data['page_title']="Home";
        $data['page']="home";
        $this->load->view('admin/page',$data);
        
    }
    
    function addCategory(){
        $this->load->model('category_model');
        $this->form_validation->set_rules('txt_name', 'Title', 'required');
        if($this->form_validation->run())
        {		
            $this->category_model->categoryadd();
        }
        else
        {	
            $data['categories']=$this->category_model->categorylist();
            $data['page_title']='Category';
            $data['page']='category_add';
            $this->load->view('admin/page',$data);
        }	
    }
    
    function editCategory($id=''){
        $this->load->model('category_model');
        $this->form_validation->set_rules('txt_name', 'Title', 'required');
        $this->form_validation->set_rules('int_category_id', 'Category', 'required');
        if($this->form_validation->run())
        {	
//            print_r($_POST);die();
            $this->category_model->categoryedit();
            redirect('/admin/manageCategory/', 'refresh');
        }
        else
        {
            $data['category_detail']=$this->category_model->getCategoryDetail($id);
//            print_r($data);die();
            $data['categories']=$this->category_model->categorylist();
            $data['page_title']='Category';
            $data['page']='category_edit';
            $this->load->view('admin/page',$data);
        }
    }
    
    function manageCategory(){
        $this->load->model('category_model');
        $data['categories']=$this->category_model->allCategorylist();
//        echo "<pre>";print_r($data);die();
        $data['page_title']='Category';
        $data['page']='category_manage';
        $this->load->view('admin/page',$data);
    }
    
    function deleteCategory($id){
        $this->load->model('category_model');
        if($id){
            $this->category_model->categorydelete($id);
        }
        redirect('/admin/manageCategory/', 'refresh');
    }
    
    function addBrand(){
        $this->load->model('brand_model');
        $this->form_validation->set_rules('txt_name', 'Title', 'required');
        if($this->form_validation->run())
        {		
            $this->brand_model->brandadd();
        }
        else
        {
            $data['page_title']='Brand';
            $data['page']='brand_add';
            $this->load->view('admin/page',$data);
        }	
    }
    
    function manageBrand(){
        $this->load->model('brand_model');
        $data['brands']=$this->brand_model->allBrandlist();
//        echo "<pre>";print_r($data);die();
        $data['page_title']='Brand';
        $data['page']='brand_manage';
        $this->load->view('admin/page',$data);
    }
    
    function deleteBrand($id){
        $this->load->model('brand_model');
        if($id){
            $this->brand_model->branddelete($id);
        }
        redirect('/admin/manageBrand/', 'refresh');
    }
    
    function editBrand($id=''){
        $this->load->model('brand_model');
        $this->form_validation->set_rules('txt_name', 'Title', 'required');
        $this->form_validation->set_rules('int_brand_id', 'Brand', 'required');
        if($this->form_validation->run())
        {	
//            print_r($_POST);die();
            $this->brand_model->brandedit();
            redirect('/admin/manageBrand/', 'refresh');
        }
        else
        {
            $data['brand_detail']=$this->brand_model->getBrandDetail($id);
//            print_r($data);die();
            $data['page_title']='Brand';
            $data['page']='brand_edit';
            $this->load->view('admin/page',$data);
        }
    }
    
    function manageSeller(){
        $this->load->model('user_model');
        $data['sellers']=$this->user_model->allSellerlist();
//        echo "<pre>";print_r($data);die();
        $data['page_title']='Seller';
        $data['page']='seller_manage';
        $this->load->view('admin/page',$data);
    }
    
    function deleteSeller($id){
        $this->load->model('user_model');
        if($id){
            $this->user_model->sellerdelete($id);
        }
        redirect('/admin/manageSeller/', 'refresh');
    }
    
    function changeStatus(){
        $this->load->model('user_model');
        $data=array(
                'int_is_active'=>$this->input->post('int_status')
            );
        $this->db->where('int_user_id',$this->input->post('int_user_id'));
        $this->db->update('tab_user',$data);
        echo "Success";
    }
    
    function manageCustomer(){
        $this->load->model('user_model');
        $data['customers']=$this->user_model->allCustomerlist();
//        echo "<pre>";print_r($data);die();
        $data['page_title']='Customer';
        $data['page']='customer_manage';
        $this->load->view('admin/page',$data);
    }
    
    function deleteCustomer($id){
        $this->load->model('user_model');
        if($id){
            $this->user_model->customerdelete($id);
        }
        redirect('/admin/manageCustomer/', 'refresh');
    }
	
}

?>