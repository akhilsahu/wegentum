<?php
$user=$details[0];
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

 <!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" />
    <title>BCORE Admin Dashboard Template | Data Tables</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/theme.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="<?php echo base_url();?>assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- END PAGE LEVEL  STYLES -->
       <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
     <!-- END HEAD -->
     <!-- BEGIN BODY -->
<body class="padTop53 " >

     <!-- MAIN WRAPPER -->
    <div id="wrap">
        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner">
                <div class="row">
                    <div class="col-lg-12">


                        <h2> Update Tables </h2>



                    </div>
                </div>

                <hr />


                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Update Employee List
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
							<form id="form1" name="update_users" action="<?php echo site_url();?>/admin/update_emp" method="POST" enctype="multipart/form-data">
							
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                   
                                    <tbody>
                                       <tr>
									   <td><label>Name</label></td>
									   <td><input type="hidden" id="user_id" name="user_id" value="<?php echo $user['int_user_id']?>"/>
									   <input type="text" id="name" name="name" value="<?php echo $user['txt_name']?>"/></td>
									   </tr>
									    <tr>
									   <td><label>Email</label></td>
									   <td><input type="text" id="email" name="email" value="<?php echo $user['txt_email']?>" readonly="readonly"/></td>
									   </tr>
									    <tr>
									   <td><label>Phone No.</label></td>
									   <td><input type="text" id="phone_no" name="phone_no" value="<?php echo $user['txt_cell_no']?>"/></td>
									   </tr>
									    <tr>
									   <td><label>Designation</label></td>
									   <td><input type="text" id="designation" name="designation" value="<?php echo $user['txt_designation']?>"/></td>
									   </tr>
									    <tr>
									   <td><label>Address</label></td>
									   <td><input type="text" id="address" name="address" value="<?php echo $user['txt_address']?>"/></td>
									   </tr>
									    <tr>
									   <td><label>Last Company Package</label></td>
									   <td><input type="text" id="lcpackage" name="lcpackage" value="<?php echo $user['int_last_package']?>"/></td>
									   </tr>
									    <tr>
									   <td><label>Last Company Name</label></td>
									   <td><input type="text" id="lcname" name="lcname" value="<?php echo $user['txt_last_company']?>"/></td>
									   </tr>
									    <tr>
									   <td><label>Gender</label></td>
									   <td><input type="text" id="gender" name="gender" value="<?php echo $user['txt_gender']?>"/></td>
									   </tr>
									    <tr>
									   <td><label>Date</label></td>
									   <td><input type="text"id="date" name="date" value="<?php echo $user['dt_added']?>"/></td>
									   </tr>
									   <tr>
									   <td><button type="submit" id="submit" name="submit">Update User</button></td>
									   </tr>
									   
                                    </tbody>
                                </table>
                            </div>
                           
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
    <script src="<?php echo base_url();?>assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
        <!-- PAGE LEVEL SCRIPTS -->
    <script src="<?php echo base_url();?>assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/dataTables/dataTables.bootstrap.js"></script>
     <script>
         $(document).ready(function () {
             $('#dataTables-example').dataTable();
         });
    </script>
     <!-- END PAGE LEVEL SCRIPTS -->
</body>
     <!-- END BODY -->
</html>
