<div class="row">
    <div class="col s12 m12">
              <div class="col s12 m12 ">
                <div class="card-panel">
                  <h4 class="header2">Edit Category</h4>
                  <div class="row">
                    <form class="col s12" method="POST" action="<?php echo site_url()."/admin/editCategory";?>" enctype="multipart/form-data">
                        <input type="hidden" id="int_category_id" name="int_category_id" value="<?php echo $category_detail[0]['int_category_id']?>"> 
                        <div class="row">
                        <div class="input-field col s12">
<!--                          <i class="mdi-action-account-circle prefix"></i>-->
                          <input id="name3" type="text" name="txt_name" value="<?php echo $category_detail[0]['txt_name']?>">
<!--                          <label for="first_name">Title</label>-->
                        </div>                          
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
<!--                          <i class="mdi-action-question-answer prefix"></i>-->
                          <textarea id="message3" class="materialize-textarea" name="txt_description"><?php echo $category_detail[0]['txt_description']?></textarea>
<!--                          <label for="message">Description</label>-->
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
<!--                          <i class="mdi-action-account-circle prefix"></i>-->
                         <select name="int_parent_id" id="int_parent_id" >
                              <option value="" disabled selected>Choose Parent Category</option>
                              <?php foreach($categories as $val){?>
                              <option value="<?php echo $val['int_category_id'];?>" <?php echo ($val['int_category_id']==$category_detail[0]['int_parent_id'])?"selected":"";?> ><?php echo $val['txt_name']?></option>
                              <?php }?>
                        </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                         <input type="checkbox" class="filled-in" id="filled-in-box" name="int_is_active" value="1"   <?php echo ($category_detail[0]['int_is_active']==1)?'checked="checked"':"";?> />
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
                    <div<br><br>
                        <div class="input-field col s12">
                        <?php if($category_detail[0]['txt_filename']){?>
                            <img class="responsive-img" width="150px" height="150px" src="<?php echo base_url().$category_detail[0]['txt_filename'];?>">
                            <?php }?>
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
   / $("#int_parent_id").select2();
});
</script>