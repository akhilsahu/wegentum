<div id="left">
            <div class="media user-media well-small">
                <a class="user-link" href="#">
               <?php if(isset($user['upload_img']) && $user['upload_img']!='')
						{?>
              <img src="<?php echo base_url()."upload/".$user['upload_img'];?>" style="width:230px;height:180px;"  alt="User Image">
				<?php }
				else
			{?>
              <img src="<?php echo base_url();?>upload/no-image.jpg" width="230px" height="150px" alt="User Image">
            <?php 
			}?>     
						</a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading">
					<?php echo $user['txt_name'];?>
					</h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                           
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>
		
            <ul id="menu" class="collapse">

                
                <li class="panel active">
                    <a href="<?php echo site_url();?>/admin/dashboard" >
                        <i class="icon-table"></i> Dashboard
	   
                       
                    </a>                   
                </li>



                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                        <i class="icon-tasks"> </i> Employee     
	   
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                    </a>
                    <ul class="collapse" id="component-nav">
                       
                        <li class=""><a href="<?php echo site_url();?>/admin/addemp"><i class="icon-angle-right"></i> Add </a></li>
                         <li class=""><a href="<?php echo site_url();?>/admin/emp_list"><i class="icon-angle-right"></i>Manage </a></li>
                       
                    </ul>
                </li>
				
				
				
                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                        <i class="icon-pencil"></i> Clients
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp;
                    </a>
                    <ul class="collapse" id="form-nav">
                        <li class=""><a href="<?php echo site_url();?>/admin/addcli"><i class="icon-angle-right"></i> Add</a></li>
                        <li class=""><a href="<?php echo site_url();?>/admin/cli_list"><i class="icon-angle-right"></i> Manage </a></li>
                 
                    </ul>
                </li>
				
				
				<li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-nav">
                        <i class="icon-table"></i> Documents
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; 
                    </a>
                    <ul class="collapse" id="pagesr-nav">
                        <li><a href="<?php echo site_url();?>/admin/add_doc"><i class="icon-angle-right"></i> Add </a></li>
                        <li><a href="<?php echo site_url();?>/admin/doc_list"><i class="icon-angle-right"></i> Manage </a></li>
                        
                    </ul>
                </li>
				
				 <li class="panel active">
                    <a href="<?php echo site_url();?>/admin/import">
                        <i class="icon-table"></i> Import
                    </a>                   
                </li>
				<li class="panel active">
                    <a href="<?php echo site_url();?>/admin/view_feedback">
                        <i class="icon-table"></i> View Feedback
                    </a>                   
                </li>
            </ul>
				</div>
        <!--END MENU SECTION -->