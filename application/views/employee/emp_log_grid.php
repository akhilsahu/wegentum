<?php

$complete_structure='';

foreach($users as $user)
{
	
  $complete_structure.='<tr role="row" class="odd">

                        <td>'.$user['txt_msg'].'</td>
						<td>'.$user['dt_timestamp'].'</td>
                        
						
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
    <!--<link href="<?php echo base_url();?>assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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
   <!-- <div id="wrap">


       

        

        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner">
                <div class="row">
                    <div class="col-lg-12">


                        <h2> Employee Log Table </h2>



                    </div>
                </div>

                <hr />


                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Message</th>
                                            <th>Date and Time</th>
											 
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

     <!--END MAIN WRAPPER -->

   
     <!-- GLOBAL SCRIPTS -->
   <!-- <script src="<?php echo base_url();?>assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
        <!-- PAGE LEVEL SCRIPTS -->
    <!--<script src="<?php echo base_url();?>assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/dataTables/dataTables.bootstrap.js"></script>
     <script>
         $(document).ready(function () {
             $('#dataTables-example').dataTable();
         });
    </script>
     <!-- END PAGE LEVEL SCRIPTS -->
<!--</body>
     <!-- END BODY -->
<!--</html>-->
