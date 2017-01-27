<?php
class Excel_data_insert_model extends CI_Model {

    public function  __construct() {
        parent::__construct();
		//echo "hii";exit;
        
    }
	
public function Add_User($data_user){
	//echo "hii";exit;
$this->db->insert('tab_stocks', $data_user);
   }
  
	
}

?>