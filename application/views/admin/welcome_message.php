<!DOCTYPE html>
<html lang="en">
<head>
	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: wh ite; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
<!-- <div class="jumbotron">
	<h1>Welcome <?php echo $username; ?>!</h1>
</div> -->
<div style="min-height:300px;background:lavender;padding:25px;" class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">                    
                    <div class="col-xs-9 text-center">
                       <i class="fa fa-home fa-4x"></i>	                    
                    </div>
                </div>
            </div>
            <a href="home">
                <div class="panel-footer">
                    <span class="pull-left">HOME</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <?php if(in_array($session_data['int_user_type'],array(1,2))){?>
    <div class="col-lg-3 col-md-6">
	    <div class="panel panel-primary">
	        <div class="panel-heading">
	            <div class="row">
	                
	                <div class="col-xs-9 text-center">	                    
	                    <i class="fa fa-cog fa-4x"></i>
	                </div>
	            </div>
	        </div>
	        <a href="users/managemanagers">
	            <div class="panel-footer">
	                <span class="pull-left">MANAGE MANAGERS</span>
	                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                <div class="clearfix"></div>
	            </div>
	        </a>
	    </div>
	</div>    
	<div class="col-lg-3 col-md-6">
	    <div class="panel panel-primary">
	        <div class="panel-heading">
	            <div class="row">	                
	                <div class="col-xs-9 text-center">
	                   <i class="fa fa-users fa-4x"></i>
	                    <!-- <div class="huge"><img alt="HOME" src="images/staff.jpg" style="width:50px;height:50"></div>
	                    <div></div> -->
	                </div>
	            </div>
	        </div>
	        <a href="users/managebidders">
	            <div class="panel-footer">
	                <span class="pull-left">MANAGE BIDDERS</span>
	                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                <div class="clearfix"></div>
	            </div>
	        </a>
	    </div>
	</div>
	<div class="col-lg-3 col-md-6">
	    <div class="panel panel-primary">
	        <div class="panel-heading">
	            <div class="row">	                
	                <div class="col-xs-9 text-center">
	                   <i class="fa fa-info-circle fa-4x"></i>
	                </div>
	            </div>
	        </div>
	        <a href="users/managemembers">
	            <div class="panel-footer">
	                <span class="pull-left">MANAGE MEMBERS</span>
	                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                <div class="clearfix"></div>
	            </div>
	        </a>
	    </div>
	</div>
	<div class="col-lg-3 col-md-6">
	    <div class="panel panel-primary">
	        <div class="panel-heading">
	            <div class="row">	                
	                <div class="col-xs-9 text-center">
	                   <i class="fa fa-info-circle fa-4x"></i>
	                </div>
	            </div>
	        </div>
	        <a href="skill/addskills">
	            <div class="panel-footer">
	                <span class="pull-left">MANAGE SKILLS</span>
	                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                <div class="clearfix"></div>
	            </div>
	        </a>
	    </div>
	</div>
	<?php }?>
	<div class="col-lg-3 col-md-6">
	    <div class="panel panel-primary">
	        <div class="panel-heading">
	            <div class="row">	                
	                <div class="col-xs-9 text-center">
	                    <i class="fa fa-book fa-4x"></i>
	                </div>
	            </div>
	        </div>
	        <a href="project/manageproject">
	            <div class="panel-footer">
	                <span class="pull-left">MANAGE PROJECT</span>
	                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                <div class="clearfix"></div>
	            </div>
	        </a>
	    </div>
	</div>    		
		
	</div>
</div>

</body>
</html>