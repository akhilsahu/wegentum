<div class="row">
    <div class="col s12 m12">
              <div class="col s12 m12 ">
                <div class="card-panel">
                  <h4 class="header2">Add Brand</h4>
                  <div class="row">
                    <form class="col s12" method="POST" action="<?php echo site_url()."/admin/addBrand";?>" enctype="multipart/form-data">
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-action-account-circle prefix"></i>
                          <input id="name3" type="text" name="txt_name">
                          <label for="first_name">Name</label>
                        </div>                          
                      </div>
                     <div class="row">
                        <div class="input-field col s12">
                         <input type="checkbox" class="filled-in" id="filled-in-box" name="int_is_active" value="1"  checked="checked" />
                         <label for="filled-in-box">Is Active</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="file-field input-field">
                          <div class="btn">
                            <span>File</span>
                            <input type="file" id="image_file" name="image_file[]" />
                          </div>
                        </div>
                      </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                          <i class="mdi-content-send right"></i>
                        </button>
                      </div>
                    </div>
                   
                    </form>
                  </div>
                </div>
              </div>
    
    </div>
</div>

<script>
$(document).ready(function(){
    $("#int_parent_id").select2();
});
</script>