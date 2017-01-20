<?php
$user=$this->session->userdata('user');
?>
<div class="content-wrapper">
<div class="row">
    <div class="col-md-8">
      <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Profile</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form method="post" action="<?php echo site_url();?>/client/profile_update" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-4 control-label" for="inputEmail3">First Name</label>
                      <div class="col-sm-8">
                        <input type="hidden" id="user_id" name="user_id" value="<?php echo $user['int_client_id']; ?>">
                        <input type="text" placeholder="Username" value="<?php echo $user['txt_fname']; ?>" id="name" name="fname" class="form-control">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-4 control-label" for="inputEmail3">Middle Name</label>
                      <div class="col-sm-8">
                       
                        <input type="text" placeholder="Username" value="<?php echo $user['txt_mname']; ?>" id="name" name="mname" class="form-control">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-4 control-label" for="inputEmail3">Last Name</label>
                      <div class="col-sm-8">
                        
                        <input type="text" placeholder="Username" value="<?php echo $user['txt_lname']; ?>" id="name" name="lname" class="form-control">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-4 control-label" for="inputEmail3">Current Address</label>
                      <div class="col-sm-8">
                        
                        <input type="text" placeholder="Current Address" value="<?php echo $user['txt_address1']; ?>" id="name" name="add1" class="form-control">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-4 control-label" for="inputEmail3">Permanent Address</label>
                      <div class="col-sm-8">
                        
                        <input type="text" placeholder="Permanent Address" value="<?php echo $user['txt_address2']; ?>" id="name" name="add2" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label" for="inputEmail3">E-mail</label>
                      <div class="col-sm-8">
                        <input type="text" placeholder="email" id="email" name="email" readonly="readonly" value="<?php echo $user['txt_email'] ?>" class="form-control">
                      </div>
                    </div>
                  
                   
					<div class="form-group">
                      <label class="col-sm-4 control-label" for="inputPassword3">Phone No.</label>
                      <div class="col-sm-8">
                          <input type="text" id="cell_no" name="cell_no" value="<?php echo $user['txt_cell_no'] ?>" class="form-control">                        
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-4 control-label" for="inputPassword3">Profile Image</label>
                      <div class="col-sm-8">
                        <input type="file" id="profile_image" name="profile_image" class="form-control">
                       <?php if($user[txt_photo]!=''){?>
                        <img src="<?php echo base_url()."upload/".$user[txt_photo]; ?>" alt="profile-image" class="img-circle" style="width:100px;height:100px;">  
                        <?php }?>
                      </div>
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button id="save_profile" class="btn btn-info pull-right" type="submit">Update Profile</button>
                  </div><!-- /.box-footer -->
                </form>
              </div>
          </div>
      </div>
</div>
<script>
$(document).ready(function(){
  $("#save_profile").click(function(){
    if($("#mname").val()=="")
    {
      alert("Please enter middle name");
      $("#mname").focus();
      return false;
    }
    if($("#fname").val()=="")
    {
      alert("Please enter first name");
      $("#fname").focus();
      return false;
    }
    if($("#lname").val()=="")
    {
      alert("Please enter last name");
      $("#lname").focus();
      return false;
    }
    
    // if($("#email").val()!="" && !isEmail($("#email").val()))
    // {
    //     alert("Please enter proper email address");
    //     $("#email").focus();
    //     return false;
    // }
  });
  // function isEmail(email)
  // {
  //   var regex=/^\w+([\.-]?\w+)*@w+;
  //   return regex.test();
  // }
});
</script>