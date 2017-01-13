<!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" />
    <title>Wegentum| Login Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!-- PAGE LEVEL STYLES -->
     <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/login.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/magic/magic.css" />
     <!-- END PAGE LEVEL STYLES -->
</head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
<body >
   <!-- PAGE CONTENT --> 
    <div class="container">
    <div class="text-center">
        <img src="<?php echo base_url();?>assets/img/logo.png" id="logoimg" alt=" Logo">
    </div>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
            <form action="<?php echo site_url(); ?>/auth/verify" class="form-signin" enctype="multipart/form-data" method="post">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">
                    Enter your Username and Password
                </p>
                <input type="text" placeholder="Username" class="form-control" name="email" />
                <input type="password" placeholder="Password" class="form-control" name="password" />
                <button class="btn text-muted text-center btn-danger" type="submit">Login As</button>
				<input type="radio" id="login_emp" name="login" value="employee"/><label for="login_emp">Employee</label>
				<input type="radio" id="login_cli" name="login" value="client"/><label for="login_cli">Client</label>
            </form>
        </div>
        <div id="forgot" class="tab-pane">
            <form action="<?php echo site_url(); ?>/auth/forget_password" class="form-signin">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">Enter your valid e-mail</p>
                <input type="email"  required="required" placeholder="Your E-mail"  class="form-control" required/>
                <br />
                <button class="btn text-muted text-center btn-success" type="submit">Recover Password</button>
            </form>
        </div>
    </div>
    <div class="text-center">
        <ul class="list-inline">
            <li><a class="text-muted" href="#login" data-toggle="tab">Login</a></li>
            <li><a class="text-muted" href="#forgot" data-toggle="tab">Forgot Password</a></li>
            
        </ul>
    </div>
</div>
	  <!--END PAGE CONTENT -->     	      
      <!-- PAGE LEVEL SCRIPTS -->
      <script src="<?php echo base_url();?>assets/plugins/jquery-2.0.3.min.js"></script>
      <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.js"></script>
   <script src="<?php echo base_url();?>assets/js/login.js"></script>
      <!--END PAGE LEVEL SCRIPTS -->
</body>
    <!-- END BODY -->
</html>
