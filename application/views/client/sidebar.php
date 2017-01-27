<div id="left" >
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                    <?php if(isset($user['txt_photo']) && $user['txt_photo']!='')
						{ ?>
              <img src="<?php echo base_url().$user['txt_photo'];?>" style="width:230px;height:180px;"  alt="User Image">
				<?php }
				else
				
			{?>
              <img src="<?php echo base_url();?>upload/no-image.png" class="img-circle" alt="User Image">
            <?php 
			}?>     
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading">
					<?php echo $user['txt_fname'];?>
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
                    <a href="<?php echo site_url();?>/client/dashboard" >
                        <i class="icon-table"></i> Dashboard
	   
                       
                    </a>                   
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
                        <li><a href="<?php echo site_url();?>/client/add_doc"><i class="icon-angle-right"></i> Add </a></li>
                        <li><a href="<?php echo site_url();?>/client/doc_list"><i class="icon-angle-right"></i> Manage </a></li>
                        
                    </ul>
                </li>
				
				
				<li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#chart-nav">
                        <i class="icon-bar-chart"></i> Feedback
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-danger">4</span>&nbsp;
                    </a>
                    <ul class="collapse" id="chart-nav">



                        <li><a href="<?php echo site_url();?>/client/add_feedback"><i class="icon-angle-right"></i> Add </a></li>
                        
                    </ul>
                </li>

				
				
				 
            </ul>
			
		  

				</div>