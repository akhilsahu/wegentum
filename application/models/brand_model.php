<?php

class Brand_model extends CI_Model{
	public $table='tab_brand';
        function Brand_model(){
		parent::__construct();	
	}

        
	function brandadd(){
            $session_data=$this->session->userdata('logged_in');
            $data = array(
                    'txt_name'=>$this->input->post('txt_name'),
                    'int_is_active'=>$this->input->post('int_is_active')
              );		
              $this->db->insert($this->table,$data);
              $brandId=$this->db->insert_id();
              for($i=0;$i<count($_FILES['image_file']['name']);$i++){	
                    if($_FILES['image_file']['name'][$i]!=''){
                         if (($_FILES["image_file"]["type"][$i] == "image/jpeg") || ($_FILES["image_file"]["type"][$i] == "image/jpg")|| ($_FILES["image_file"]["type"][$i] == "image/png")){
                            $ext=explode(".",$_FILES["image_file"]["name"][$i]);		
                            $filename=$brandId."_".$i."_".date('YmdHis');
                            $imgtype=$_FILES["image_file"]["type"][$i];
                            $file_name="uploads/brand/".$filename.".".$ext[count($ext)-1];
                            move_uploaded_file($_FILES['image_file']['tmp_name'][$i],$file_name);
                            $data=array(
                                    'txt_filename'=>$file_name		
                                );
                            $this->db->where('int_brand_id',$brandId);
                            $this->db->update($this->table,$data);
                         }
                    }
		}
             redirect('/admin/manageBrand/', 'refresh');	
	}
        
        function brandedit(){
            $session_data=$this->session->userdata('logged_in');
            $brandId=$this->input->post('int_brand_id');
            
            $data = array(
                    'txt_name'=>$this->input->post('txt_name'),
                    'int_is_active'=>($this->input->post('int_is_active'))?"1":"0"
              );
            for($i=0;$i<count($_FILES['image_file']['name']);$i++){	
                    if($_FILES['image_file']['name'][$i]!=''){
                         if (($_FILES["image_file"]["type"][$i] == "image/jpeg") || ($_FILES["image_file"]["type"][$i] == "image/jpg")|| ($_FILES["image_file"]["type"][$i] == "image/png")){
                            $ext=explode(".",$_FILES["image_file"]["name"][$i]);		
                            $filename=$brandId."_".$i."_".date('YmdHis');
                            $imgtype=$_FILES["image_file"]["type"][$i];
                            $file_name="uploads/brand/".$filename.".".$ext[count($ext)-1];
                            move_uploaded_file($_FILES['image_file']['tmp_name'][$i],$file_name);
                            $data['txt_filename']=$file_name;
                         }
                    }
		}
            $this->db->where('int_brand_id',$brandId);
            $this->db->update($this->table,$data);
        }
        
	function branddelete($id){
            $this->db->delete($this->table, array('int_brand_id' => $id));
	}
	
	function brandlist(){
		$sql="Select * from ".$this->table." where int_is_active=1";
		$query=$this->db->query($sql);
		return $query->result_array();				
	}
        
        function allBrandlist(){
            $sql="Select * from ".$this->table." where 1";
            $query=$this->db->query($sql);
            return $query->result_array();
        }

	function getBrandDetail($id){
            $query = $this->db->get_where($this->table, array('int_brand_id' => $id));
            return $query->result_array();
	}	
				
}

?>