
<div class="content-wrapper">
<div class="row">
    <div class="col-md-8">
      <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Settings</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form method="post" action="<?php echo site_url();?>/admin/settings" enctype="multipart/form-data">
                  <div class="box-body">  
                    <div class="form-group">
                      <label class="col-sm-4 control-label" for="inputEmail3">Site Name<span style="color:#f00;">*</span></label>
                      <div class="col-sm-8">
                        <div class="form-group">
                          <input type="text" id="site_name" name="site_name" value="<?php echo $settings[0]['txt_meta_value']?>" class="form-control">
                        </div><!-- /.form-group -->
                      </div>
                    </div>
					   <div class="form-group">
                      <label class="col-sm-4 control-label" for="inputEmail3">Site Email<span style="color:#f00;">*</span></label>
                      <div class="col-sm-8">
                        <div class="form-group">
                          <input type="text" id="site_email" name="site_email" value="<?php echo $settings[1]['txt_meta_value']?>" class="form-control">
                        </div><!-- /.form-group -->
                      </div>
                    </div>
					  <div class="form-group">
                      <label class="col-sm-4 control-label" for="inputEmail3">Site Logo</label>
                      <div class="col-sm-8">
                        <input type="file" id="image1" name="image1" value="" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label" for="inputEmail3">Logo</label>
                      <div class="col-sm-8">
                        <img src="<?php echo base_url().'upload/'.$settings[2]['txt_meta_value']?>" alt="<?php echo $settings[2]['txt_meta_value']?>">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-4 control-label" for="inputEmail3">Company Contact No.<span style="color:#f00;">*</span></label>
                      <div class="col-sm-8">
                        <div class="form-group">
                          <input type="text" id="contact_no" name="contact_no" value="<?php echo $settings[3]['txt_meta_value']?>" class="form-control">
                        </div><!-- /.form-group -->
                      </div>
                    </div>
					
					
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button id="save_db" class="btn btn-info pull-right" type="submit">Save</button>
                  </div><!-- /.box-footer -->
                </form>
              </div>
          </div>
      </div>
</div>
<!--<script>
$(document).ready(function(){
  // $("#save_db").click(function(){
    
  // });
  // $("#db_joining_date").datepicker();
  //$(".select").select2();
});
</script>-->