<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <!--<meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">-->
  <title>Login Page | DadDirectory</title>

  <!-- Favicons-->
  <!--<link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">-->


  
  
  <link href="<?php echo base_url();?>assets_admin/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url();?>assets_admin/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">   
    <link href="<?php echo base_url();?>assets_admin/css/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url();?>assets_admin/css/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url();?>assets_admin/css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url();?>assets_admin/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  
</head>

<body class="cyan">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->



  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form id="login_form" class="login-form" method="post" action="<?php echo site_url();?>/user/adminlogin" enctype="multipart/form-data">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="<?php echo base_url()."images/logo.png"?>" alt="" class=" responsive-img">
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" type="text" name="txt_email"  class="required">
            <label for="username" class="center-align">Username</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password" name="txt_password" class="required">
            <label for="password">Password</label>
          </div>
        </div>
        <!--<div class="row">          
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="remember-me" />
              <label for="remember-me">Remember me</label>
          </div>
        </div>-->
        <div class="row">
          <div class="input-field col s12">
            <a id="login_btn" href="#" class="btn waves-effect waves-light col s12">Login</a>
          </div>
        </div>
        <div class="row">
          <!--<div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="page-register.html">Register Now!</a></p>
          </div>
          <div class="input-field col s6 m6 l6">
              <p class="margin right-align medium-small"><a href="page-forgot-password.html">Forgot password ?</a></p>
          </div>-->          
        </div>

      </form>
    </div>
  </div>



  
  <script type="text/javascript" src="<?php echo base_url();?>assets_admin/js/jquery-1.11.2.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
	$("#login_btn").click(function(){
		if($("#username").val()==""){$("#username").focus();return false;}
		if($("#password").val()==""){$("#password").focus();return false;}
		$("#login_form").submit();
	});
  });
  </script>
  <script type="text/javascript" src="<?php echo base_url();?>assets_admin/js/materialize.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets_admin/js/prism.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets_admin/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets_admin/js/plugins.js"></script>
  

</body>
</html>