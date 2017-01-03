
<div class="col s12 m8 l9">
      <table id="data-table-simple" class="responsive-table display" cellspacing="0">
        <thead>
            <tr>
                <th>Name</th>
                <th>Details</th>
                <th>Bank Details</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>

        <tfoot>
            <tr>
                <th>Name</th>
                <th>Details</th>
                <th>Email</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </tfoot>

        <tbody>
            <?php foreach($customers as $val){?>
            <tr>
                <td><?php echo $val['txt_name'];?></td>
                <td>
                    <strong>Description : </strong><?php echo $val['txt_description']."<br>";?>
                    <strong>Phone1 : </strong><?php echo $val['txt_phone1']."<br>";?>
                    <strong>Phone2 : </strong><?php echo $val['txt_phone2']."<br>";?>
                    <strong>Address : </strong><?php echo $val['txt_address1']."<br>".$val['txt_city1'].", ".$val['txt_state1'].", ".$val['txt_country1']."<br>";?>
                    <strong>Gender : </strong><?php echo ($val['int_gender']==1)?"Male":"Female";?>
                </td>                
                <td><?php echo $val['txt_email'];?></td>
                <td>
                    <select name="int_is_active" id="status_<?php echo $val['int_user_id'];?>" class="txt_status browser-default <?php echo ($val['int_is_active']==1)?"green":"red";?>">
                        <option value="0" <?php echo ($val['int_is_active']==0)?"selected":"";?>>Inactive</option>
                        <option value="1" <?php echo ($val['int_is_active']==1)?"selected":"";?> >Active</option>
                    </select>
                </td>
                <td>
                     <a class="btn red" href="<?php echo site_url()."/admin/deleteCustomer/".$val['int_user_id'];?>">Delete</a>
                </td>
            </tr>
           <?php }?>
        </tbody>
      </table>
</div>
<script>
    $(document).ready(function(){
        $(".txt_status").change(function(){
          var idname=this.id;
          id=idname.split("_");
         var int_status=$(this).val();
         var r = confirm("Are you sure you want to change status");
         if (r == true) { 
          $.ajax({
              url: '<?php echo site_url()."/admin/changeStatus"?>',
              type: "POST",
              data:{int_user_id:id[1],int_status:int_status},
              success: function(result){
                if(result=="Success"){
                	$("#"+idname).removeClass("red green");
                    if(int_status==0) $("#"+idname).addClass("red")
                    if(int_status==1) $("#"+idname).addClass("green");
                    alert("Status Updated");  
                }                
              }
          });
        }else{
        }
      });
    });
</script>                    