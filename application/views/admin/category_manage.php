
<div class="col s12 m8 l9">
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Parent Category</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                 
                    <tfoot>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Parent Category</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                 
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    <tbody>
                        <?php foreach($categories as $val){?>
                        <tr>
                            <td><?php echo $val['txt_name'];?></td>
                            <td><?php echo $val['txt_description'];?></td>
                            <td><?php echo $val['parent_name'];?></td>
                            <td><?php echo ($val['int_is_active']==1)?"Active":"Inactive";?></td>
                            <td>
                                <a class="btn waves-effect waves-light indigo" href="<?php echo site_url()."/admin/editCategory/".$val['int_category_id'];?>">EDIT</a>
                                / <a class="btn waves-effect waves-light red" href="<?php echo site_url()."/admin/deleteCategory/".$val['int_category_id'];?>">Delete</a>
                            </td>
                        </tr>
                       <?php }?>
                    </tbody>
                  </table>
</div>
                    