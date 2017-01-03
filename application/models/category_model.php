<?php

class Category_model extends CI_Model{
	public $table='tab_categories';
        function Category_model(){
		parent::__construct();	
	}

	function check_email($email){
		$query=$this->db->get_where($this->table,array('txt_name'=>$email));
		return $query->num_rows();
	}

       
	function categoryadd(){
            $session_data=$this->session->userdata('logged_in');
            $data = array(
                    'txt_name'=>$this->input->post('txt_name'),
                    'txt_description'=>$this->input->post('txt_description'),
                    'int_parent_id'=>$this->input->post('int_parent_id'),
                    'int_is_active'=>$this->input->post('int_is_active')
              );		
              $this->db->insert($this->table,$data);
              $categoryId=$this->db->insert_id();
              for($i=0;$i<count($_FILES['image_file']['name']);$i++){	
                    if($_FILES['image_file']['name'][$i]!=''){
                         if (($_FILES["image_file"]["type"][$i] == "image/jpeg") || ($_FILES["image_file"]["type"][$i] == "image/jpg")|| ($_FILES["image_file"]["type"][$i] == "image/png")){
                            $ext=explode(".",$_FILES["image_file"]["name"][$i]);		
                            $filename=$categoryId."_".$i."_".date('YmdHis');
                            $imgtype=$_FILES["image_file"]["type"][$i];
                            $file_name="uploads/category/".$filename.".".$ext[count($ext)-1];
                            move_uploaded_file($_FILES['image_file']['tmp_name'][$i],$file_name);
                            $data=array(
                                    'txt_filename'=>$file_name		
                                );
                            $this->db->where('int_category_id',$categoryId);
                            $this->db->update($this->table,$data);
                         }
                    }
		}
             redirect('/admin/manageCategory/', 'refresh');	
	}
        
        function categoryedit(){
            $session_data=$this->session->userdata('logged_in');
            $categoryId=$this->input->post('int_category_id');
            
            $data = array(
                    'txt_name'=>$this->input->post('txt_name'),
                    'txt_description'=>$this->input->post('txt_description'),
                    'int_parent_id'=>$this->input->post('int_parent_id'),
                    'int_is_active'=>($this->input->post('int_is_active'))?"1":"0"
              );
            for($i=0;$i<count($_FILES['image_file']['name']);$i++){	
                    if($_FILES['image_file']['name'][$i]!=''){
                         if (($_FILES["image_file"]["type"][$i] == "image/jpeg") || ($_FILES["image_file"]["type"][$i] == "image/jpg")|| ($_FILES["image_file"]["type"][$i] == "image/png")){
                            $ext=explode(".",$_FILES["image_file"]["name"][$i]);		
                            $filename=$categoryId."_".$i."_".date('YmdHis');
                            $imgtype=$_FILES["image_file"]["type"][$i];
                            $file_name="uploads/category/".$filename.".".$ext[count($ext)-1];
                            move_uploaded_file($_FILES['image_file']['tmp_name'][$i],$file_name);
                            $data['txt_filename']=$file_name;
                         }
                    }
		}
            $this->db->where('int_category_id',$categoryId);
            $this->db->update($this->table,$data);
        }
        
	function categorydelete($id){
            $this->db->delete($this->table, array('int_parent_id' => $id));
            $this->db->delete($this->table, array('int_category_id' => $id));
	}
	
	function categorylist(){
		$sql="Select * from ".$this->table." where int_is_active=1";
		$query=$this->db->query($sql);
		return $query->result_array();				
	}
        
        function getHomeCategories(){
            $sql="Select * from ".$this->table." where int_is_active=1 And int_parent_id=0 ORDER BY RAND() LIMIT 12";
            $query=$this->db->query($sql);
            return $query->result_array();
        }
        
        function allCategorylist(){
            $sql="Select a.*,b.txt_name as parent_name from ".$this->table." a left join ".$this->table." b on a.int_parent_id=b.int_category_id where 1";
            $query=$this->db->query($sql);
            return $query->result_array();
        }

	function getCategoryDetail($id){
            $query = $this->db->get_where($this->table, array('int_category_id' => $id));
            return $query->result_array();
	}
		
				
}

?>