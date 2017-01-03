<?php 

class User extends CI_Controller{
	function User(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('user_model');
		$this->load->model('product_model');
                
                
	}
        
        function login(){
            $this->form_validation->set_rules('txt_email', 'Email', 'required|xss_clean');
            $this->form_validation->set_rules('txt_password', 'Password', 'required|xss_clean');		
            if($this->form_validation->run())
            {				
                $result=$this->user_model->login();
                if($result)
                   {
                     $sess_array = array();
                     foreach($result as $row)
                     {
                       $sess_array = array(
                         'int_user_id' => $row->int_user_id,
                         'txt_email' => $row->txt_email,
                         'int_user_type' => $row->int_user_type
                       );
                       $this->session->set_userdata('logged_in', $sess_array);
                     }
                     redirect('seller/index', 'refresh');
                   }
                   else
                   {
                     redirect('user/login', 'refresh');
                   }
            }
            else
            {	
                    $data['page_title']="Login";
                    $data['page']='login';
                    $this->load->view('customer/page',$data);
            }	
        }
        
        function adminlogin(){
            $this->form_validation->set_rules('txt_email', 'Email', 'required|xss_clean');
            $this->form_validation->set_rules('txt_password', 'Password', 'required|xss_clean');		
            //if($this->form_validation->run())
             if($this->input->post())
            {			

                $result=$this->user_model->adminlogin();
                if($result)
                   {
                     $sess_array = array();
                     foreach($result as $row)
                     {
                       $sess_array = array(
                         'int_user_id' => $row->int_user_id,
                         'txt_email' => $row->txt_email,
                         'int_user_type' => $row->int_user_type
                       );
                       $this->session->set_userdata('logged_in', $sess_array);
                     }
                     redirect('admin/index', 'refresh');
                   }
                   else
                   {
                     redirect('admin/login', 'refresh');
                   }
            }
            else
            {	
                $this->load->view('admin/login');
            }            
        }
        
        
        
        function register(){
            $this->form_validation->set_rules('txt_email', 'Email', 'required');
            $this->form_validation->set_rules('txt_password', 'Password', 'required');	
            $this->form_validation->set_rules('txt_name', 'Name', 'required');
            if($this->form_validation->run())
            {				
                 $this->user_model->customer_register();
            }
            else
            {	
                    $data['page_title']="Register";
                    $data['page']='register';
                    $this->load->view('customer/page',$data);
            }	
        }
        
         function logout()
         {
           $this->session->unset_userdata('logged_in');
           $this->session->sess_destroy();
           redirect('content', 'refresh');
         }


    function sellerRegister() {
        $data['page_title']="Seller Registration";
        $data["page"] = "register_front";
        $this->load->view('seller/page', $data);
    }

    public function listing_register() {
        $this->load->model('location_model');
        $data['countries']=$this->location_model->get_all_countries();
        $data["page"] = "register";
        $this->load->view('seller/page', $data);
    }

    public function product_register() {
        $this->load->model('location_model');
        $data['countries']=$this->location_model->get_all_countries();
        $data["page"] = "product_register";
        $this->load->view('seller/page', $data);
    }

    
    public function seller_product() {
        $formdata = $this->input->post();
//        echo '<pre>';print_r($formdata);exit;
        $userData=array(
            'txt_email'=>$formdata['txt_email'],
            'txt_password'=>md5($formdata['txt_password']),
            'int_user_type'=>'2',
            'txt_email'=>'seller',
            'int_verified'=>1,
            'dt_created_on'=>date('Y-m-d H:i:s')
        );
        $this->db->insert('tab_user',$userData);
        $formdata['int_user_id']=$this->db->insert_id();
        $formdata['txt_close_day']=  implode(',', $formdata['close_day']);
        $formdata['txt_target_age']=  implode(',', $formdata['target_age']);
        $formdata['txt_target_crowd']=  implode(',', $formdata['target_crowd']);
        unset($formdata['close_day']);
        unset($formdata['target_age']);
        unset($formdata['target_crowd']);
        unset($formdata['txt_email']);
        unset($formdata['txt_password']);
        $formdata['txt_reg_date'] = date('Y-m-d');

        $this->user_model->register($formdata);
        $data['sup_id'] = $this->db->insert_id();
        $data["page"] = "add_products";

        $this->load->view('seller/page', $data);
    }
    public function seller_reg() {
        $formdata = $this->input->post();
//        echo '<pre>';print_r($formdata);exit;
        $userData=array(
            'txt_email'=>$formdata['txt_email'],
            'txt_password'=>md5($formdata['txt_password']),
            'int_user_type'=>'2',
            'txt_email'=>'seller',
            'int_verified'=>1,
            'dt_created_on'=>date('Y-m-d H:i:s')
        );
        $this->db->insert('tab_user',$userData);
        $formdata['int_user_id']=$this->db->insert_id();
        $formdata['txt_close_day']=  implode(',', $formdata['close_day']);
        $formdata['txt_target_age']=  implode(',', $formdata['target_age']);
        $formdata['txt_target_crowd']=  implode(',', $formdata['target_crowd']);
        unset($formdata['close_day']);
        unset($formdata['target_age']);
        unset($formdata['target_crowd']);
        unset($formdata['txt_email']);
        unset($formdata['txt_password']);
        $formdata['txt_reg_date'] = date('Y-m-d');

        $this->user_model->register($formdata);
        $data['msg'] = 'registered succefuly';
        $data["page"] = "register_front";

        $this->load->view('seller/page', $data);
    }

    public function save_product() {
        $formdata = $this->input->post();

        if (!is_dir(base_url() . 'uploads')) {
            mkdir(base_url() . '/uploads', 0777, true);
        }
        $image_result = array();
        $video_result = 1;
        $upload_path = './uploads';
        $extension = array("jpeg", "jpg", "png", "gif");
        foreach ($_FILES["txt_image"]["tmp_name"] as $key => $temp_name) {

            if ((($_FILES["txt_image"]["type"][$key] == "image/jpg") || ($_FILES["txt_image"]["type"][$key] == "image/jpeg") || ($_FILES["txt_image"]["type"][$key] == "image/png"))) {
                if ($_FILES["txt_image"]["error"][$key] > 0) {
                    $image_result = "Return Code: " . $_FILES["txt_image"]["error"][$key];
                } else {
                    if (file_exists("upload/" . $_FILES["txt_image"]["name"][$key])) {
                        $image_result = $_FILES["txt_image"]["name"][$key] . " already exists. ";
                    } else {
                        move_uploaded_file($_FILES["txt_image"]["tmp_name"][$key], $upload_path . '/' . strtotime(date('Y-m-d H:i:s')) . '_' . $_FILES["txt_image"]["name"][$key]);
                        $txt_image[] = base_url() . 'uploads/' . strtotime(date('Y-m-d H:i:s')) . '_' . $_FILES["txt_image"]["name"][$key];
                    }
                }
            } else {
                $image_result[] = "Invalid txt_image";
            }
        }
        $formdata['txt_image'] = json_encode($txt_image);
        $allowedExts_video = array("mp4", "mpeg", "avi");
        $extension = pathinfo($_FILES['txt_video']['name'], PATHINFO_EXTENSION);

        if ((($_FILES["txt_video"]["type"] == "video/mp4") || ($_FILES["txt_video"]["type"] == "video/avi") || ($_FILES["txt_video"]["type"] == "video/mpeg")) && ($_FILES["txt_video"]["size"] < 20000) && in_array($extension, $allowedExts_video)) {
            if ($_FILES["txt_video"]["error"] > 0) {
                $video_result = "Return Code: " . $_FILES["txt_video"]["error"];
            } else {
                if (file_exists("upload/" . $_FILES["txt_video"]["name"])) {
                    $video_result = $_FILES["txt_video"]["name"] . " already exists. ";
                } else {
                    move_uploaded_file($_FILES["txt_video"]["tmp_name"], $upload_path . '/' . strtotime(date('Y-m-d H:i:s')) . '_' . $_FILES["txt_video"]["name"]);
                    $formdata['txt_video'] = $upload_path . '/' . strtotime(date('Y-m-d H:i:s')) . '_' . $_FILES["txt_video"]["name"];
                }
            }
        } else {
            $video_result = "Invalid txt_video";
        }
        $formdata['created_on']=date('Y-m-d');
        $this->product_model->save_product($formdata);
        $data['products'] = $this->product_model->product_list($formdata['int_seller_id']);
        $data['sup_id'] = $formdata['int_seller_id'];
        $data['msg'] = "Added Successfuly";
        $data["page"] = "add_products";

        $this->load->view('seller/page', $data);
    }


	
	

	function addmembers(){
		$this->load->model('skill_model');
		$this->form_validation->set_rules('txt_name', 'Bidder Name', 'required');
		$this->form_validation->set_rules('txt_email', 'Bidder Email', 'required');
		$this->form_validation->set_rules('txt_password', 'Password', 'required');		
		if($this->form_validation->run())
		{				
			$this->user_model->memberadd();
		}
		else
		{	
			$data['skills']=$this->skill_model->skillList();
			$data['page_title']='Add Member';
			$data['title']=' - Member Management';
			$data['page']='member_add';
			$this->load->view('templates/page',$data);
		}			
	}
	
	function managemembers(){
		$data['manager_details'] = $this->user_model->memberlist();
		//print_r($data);die();
		$data['page_title']='Manage Members';
		$data['title']=' - Member Management';
	    $data['page']='manage_members';
		$this->load->view('templates/page', $data);
	}

	function deletemember($id){
		$this->user_model->memberdelete($id);
	}

	
	function memberedit($id=''){
		$this->load->model('skill_model');
		$data['member_detail']=$this->user_model->getUserDetail($id);
		$skill_detail = $this->user_model->getUserSkills($id);
		$skill=array();
		foreach($skill_detail as $val){
			$skill[]=$val['int_skill_id'];
		}
		$data['user_skill']=$skill;
		$data['skills']=$this->skill_model->skillList();
		$this->form_validation->set_rules('txt_name', 'Manager Name', 'required');
		$this->form_validation->set_rules('txt_email', 'Manager Email', 'required');
		$this->form_validation->set_rules('txt_password', 'Password', 'required');
		if($this->form_validation->run())
		{	
			$data1 = array(
				'txt_name'=>$this->input->post('txt_name'),
				'txt_email'=>$this->input->post('txt_email'),
				'txt_password'=>MD5($this->input->post('txt_password')),
				'txt_cell_no'=>$this->input->post('txt_cell_no'),
				'int_experience_years'=>$this->input->post('int_experience_years'),
				'is_commission'=>$this->input->post('is_commission'),
				'int_commission_rate'=>$this->input->post('int_commission_rate'),
				'int_fixed_amount'=>$this->input->post('int_fixed_amount')			
			 );
			if(($this->input->post('txt_password')!=$data['bidder_detail'][0]['txt_password']) && ($this->input->post('txt_password')!=''))
				$data1['txt_password']=MD5($this->input->post('txt_password'));
			$this->db->where('int_user_id', $id);
			$this->db->update('tab_users', $data1);

			$this->db->delete('tab_skills_link', array('int_user_id' => $id));
			$memberId=$id;
		   	$skills=$this->input->post('txt_skills');	
		  	foreach ($skills as $val) {
		  		$data1=array(
		  			'int_user_id'=>$memberId,
		  			'int_skill_id'=>$val
		  			);
		   		$this->db->insert('tab_skills_link',$data1);	  	
		 	} 
			redirect('/users/managemembers/', 'refresh');
		}
		else
		{
			$data['page_title']='Edit Member';
			$data['title']=' - Member Management';
			$data['page']='mamber_edit';
			$this->load->view('templates/page',$data);
		}				
	}
	
	
	function check_email(){
		$val=$this->user_model->check_email($this->input->post('email'));
		if($val > 0)
			echo "no";
		else 
			echo "yes";	
	}

}

?>