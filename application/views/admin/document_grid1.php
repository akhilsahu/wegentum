<?php

$complete_structure='';

foreach($users as $user)
{
	
  $complete_structure.='<tr role="row" class="odd">

                       
						<td>'.$user['txt_title'].'</td>
						<td>'.$user['txt_description'].'</td>
  						<td>'.$user['Uploaded_File'].'</td>
						
						
						

                        <td><a href="'.site_url().'/admin/download?id='.$user['int_user_id'].'">Download</a>

                            &nbsp;&nbsp;&nbsp;

                            <a class="del_confirm" href="'.site_url().'/admin/delete_doc?id='.$user['int_user_id'].'">Delete</a>

                        </td>
						
                      </tr>';

}


?>


<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<!--<head>
     <meta charset="UTF-8" />
    <title>Wegentum -App | Data Tables</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
    <!--<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/theme.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
   <!-- <link href="<?php echo base_url();?>assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- END PAGE LEVEL  STYLES -->
       <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
<!--</head>
     <!-- END HEAD -->
     <!-- BEGIN BODY -->
<!--<body class="padTop53 " >

     <!-- MAIN WRAPPER -->
   <!-- <div id="wrap">-->



       

        

        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner">
                <div class="row">
                    <div class="col-lg-12">


                        <h2> Document's Table </h2>
                        
                    </div>
                </div>

                <hr />


                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
						
						<form action="<?php echo site_url();?>/admin/search" method="post" enctype="multipart/form-data">	
                         <input type="search" id="search" name="search" onclick="display_err" placeholder="What are you looking for?">		    	
							<button>Search</button>
							</form>	
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
											<th>Description</th>
											<th>File</th>
											 <th>Actions</th>
                                        </tr>
                                    </thead>

                                    <tbody>
									<?php echo $complete_structure;?>
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            

            </div>




        </div>
		
       <!--END PAGE CONTENT -->


    </div>

 <!--<script>
function display_err()
{
var r=confirm("Please enter some value in the Search Box");
if(r==true) 
{
}	
}
</script>-->
