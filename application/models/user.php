<?php
Class User extends CI_Model
{
 function login($username, $password)
 {
   $this -> db -> select('int_user_id, txt_email, txt_password, int_user_type');
   $this -> db -> from('tab_users');
   $this -> db -> where('txt_email', $username);
   $this -> db -> where('txt_password', MD5($password));
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


 function change_password(){
    $data = array(
    'txt_password'=> MD5($this->input->post('new_password'))
    );
    $username=$this->session->userdata['logged_in']['txt_email'];
    $this->db->where('txt_email', $username);
    $this->db->update('tab_users', $data);
    redirect('/home/change_password/', 'refresh');
 }

 function getsettings(){
    $sql="select * from tbl_settings where id=1 ";
    $query=$this->db->query($sql);
    $result=$query->result_array();
    return $result;
 }

 function settings(){
      $sql="select * from tbl_settings where id=1 ";
      $query=$this->db->query($sql);
      $result=$query->result_array();
      if(count($result)>0){
          $data = array(
            'name'=>$this->input->post('name'),
            'phone'=>$this->input->post('phone'),
            'address'=>$this->input->post('address'),
            'email'=>$this->input->post('email')
          );
          $this->db->where('id', 1);
          $this->db->update('tbl_settings', $data);    
      }else{
           $data = array(
            'name'=>$this->input->post('name'),
            'phone'=>$this->input->post('phone'),
            'address'=>$this->input->post('address'),
            'email'=>$this->input->post('email')
          );
           $this->db->insert('tbl_settings', $data);
      }
      if(($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg")|| ($_FILES["file"]["type"] == "image/jpg")|| ($_FILES["file"]["type"] == "image/pjpeg")|| ($_FILES["file"]["type"] == "image/x-png")|| ($_FILES["file"]["type"] == "image/png")){
        $ext=explode(".",$_FILES["file"]["name"]);      
        $filename="logo.".$ext[count($ext)-1];
        move_uploaded_file($_FILES["file"]["tmp_name"],"image/".$filename);
        $this->load->helper('createlogo');
        createlogo('logo',$ext[count($ext)-1]);
        $data3 = array('logo' => "logo.".$ext[count($ext)-1]);
        $this->db->where('id', 1);
        $this->db->update('tbl_settings', $data3);
      } 
        redirect('/home/settings/', 'refresh');
 }
}
?>
