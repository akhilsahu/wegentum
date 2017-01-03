<?php
class User_model extends CI_Model{
	public $table='tab_seller';
        public $table_user='tab_user';
        public $table_custome='tab_customer';
	function User_model(){
		parent::__construct();	
	}

	function check_email($email){
		$query=$this->db->get_where('tab_users',array('txt_email'=>$email));
		return $query->num_rows();
	}

	function login(){
           
            $formdata=$this->input->post();
            $this -> db -> select('int_user_id, txt_email, txt_password, int_user_type');
               $this -> db -> from('tab_user');
               
               $this -> db -> where('txt_email', $formdata['txt_email']);
               $this->db->where('int_is_active',1);
               $this -> db -> where('txt_password', md5($formdata['txt_password']));
               $this -> db -> limit(1);

               $query = $this -> db -> get();

               if($query -> num_rows() == 1)
               {
                 return $query->result();
               }
               else
               {
                 return false;
               }
           
        }
        
        function adminlogin(){
           
            $formdata=$this->input->post();
            $this -> db -> select('int_user_id, txt_email, txt_password, int_user_type');
               $this -> db -> from('tab_user');
               
               $this -> db -> where('txt_email', $formdata['txt_email']);
               $this -> db -> where('int_user_type', 1);
               $this -> db -> where('txt_password', md5($formdata['txt_password']));
               $this -> db -> limit(1);

               $query = $this -> db -> get();

               if($query -> num_rows() == 1)
               {
                 return $query->result();
               }
               else
               {
                 return false;
               }
           
        }
        
        public function customer_register(){
            $formdata = $this->input->post();
            $userData=array(
                'txt_email'=>$formdata['txt_email'],
                'txt_password'=>$formdata['txt_password'],
                'int_user_type'=>'3',
                'txt_email'=>'customer',
                'int_verified'=>1,
                'dt_created_on'=>date('Y-m-d H:i:s')
            );
            $this->db->insert('tab_user',$userData);
            $userId=$this->db->insert_id();
            $data=array(
                'int_user_id'=>$userId,
                'txt_name'=>$formdata['txt_name'],
                'txt_phone1'=>$formdata['txt_phone1'],
                'txt_phone2'=>$formdata['txt_phone2'],
                'int_gender'=>$formdata['int_gender'],                
                'txt_address1'=>$formdata['txt_address1'],
                'txt_city1'=>$formdata['txt_city1'],
                'txt_state1'=>$formdata['txt_state1'],
                'txt_country1'=>$formdata['txt_country1'],
                'txt_pincode1'=>$formdata['txt_pincode1'],
                'txt_address2'=>$formdata['txt_address2'],
                'txt_city2'=>$formdata['txt_city2'],
                'txt_state2'=>$formdata['txt_state2'],
                'txt_country2'=>$formdata['txt_country2'],                
                'txt_pincode2'=>$formdata['txt_pincode2'],
                'txt_description'=>$formdata['txt_description']
            );
            $this->db->insert('tab_customer',$data);
            redirect('/content','refresh');
        }

        public function register($param) {
	//            echo '<pre>';print_r($param);exit;
	//            $this->db->set($param);
	    return $this->db->insert($this->table,$param);
	}    

        function allSellerlist(){
            $sql="Select a.*,b.* from ".$this->table." a left join ".$this->table_user." b on a.int_user_id=b.int_user_id where b.int_user_type=2";
            $query=$this->db->query($sql);
            return $query->result_array();
        }
        
        function allCustomerlist(){
            $sql="Select a.*,b.* from ".$this->table_custome." a left join ".$this->table_user." b on a.int_user_id=b.int_user_id where b.int_user_type=3";
            $query=$this->db->query($sql);
            return $query->result_array();
        }
        
        function sellerdelete($id){
             $this->db->delete($this->table, array('int_user_id' => $id));
             $this->db->delete($this->table_user, array('int_user_id' => $id));
        }
        
        function customerdelete($id){
            $this->db->delete($this->table_custome, array('int_user_id' => $id));
            $this->db->delete($this->table_user, array('int_user_id' => $id));
        }
        
        function getCitylist(){
            $sql="Select Distinct txt_city1 from ".$this->table;
            $query=$this->db->query($sql);
            return $query->result_array();
        }
        
        function getSellerSearchList($offset=''){
            $search_data=$this->session->userdata('search');
 //            $search_data['search_city'],
//            $search_data['search_product'],
            $sql="Select a.int_seller_id,a.txt_name,a.txt_description,a.txt_phone1,a.txt_phone2,a.txt_address1,a.txt_pincode1,a.txt_city1,a.txt_state1,a.txt_country1,a.txt_organization_name,a.txt_website_url,a.int_home_delivery,a.txt_rating,a.txt_establish_year,a.txt_org_logo,a.int_no_of_ratings";               
            $sql.=" from ".$this->table." a inner join ".$this->table_user." u on a.int_user_id=u.int_user_id ";
            $sql.=" inner join tab_products p on a.int_seller_id=p.int_seller_id ";
            $sql.=" where u.int_is_active=1 ";
            if($search_data['search_city'])
                $sql.=" And a.txt_city1='".$search_data['search_city']."' ";
            if($search_data['search_product'])
                $sql.=" And ( a.txt_keywords like '%".$search_data['search_product']."%' OR p.txt_product_name like '%".$search_data['search_product']."%' ) ";
            $sql.=" group by a.int_seller_id";
            if($offset!=''){
                $limit=1;
                $offset=$offset*$limit;
                $sql.=" LIMIT ".$offset.",".$limit;
            }
            $query=$this->db->query($sql);
            return $query->result_array();
        }
        
        public function getSellerById($param) {
            $sql="SELECT * FROM tab_seller WHERE int_seller_id = $param";
            $query=$this->db->query($sql);
            return $query->result_array();
        }
			
				
}

?>