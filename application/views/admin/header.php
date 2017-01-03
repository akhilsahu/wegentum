<?php

$user=$this->session->userdata('user');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <!--<meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">-->
    <title>DadDirectory | <?php echo $page_title;?></title>

    <!--<link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">-->

   
    <link href="<?php echo base_url();?>assets_admin/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo base_url();?>assets_admin/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">  
    <link href="<?php echo base_url();?>assets_admin/css/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">   
    <link href="<?php echo base_url();?>assets_admin/css/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">


    <link href="<?php echo base_url();?>assets_admin/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo base_url();?>assets_admin/js/plugins/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo base_url();?>assets_admin/js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    
    <link href="<?php echo base_url();?>assets_admin/js/plugins/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    
    <link href="<?php echo base_url();?>assets_admin/js/plugins/select2/select2.min.css" type="text/css" rel="stylesheet">
    
     <link href="../../../../cdn.datatables.net/1.10.6/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- jQuery Library -->
    <script type="text/javascript" src="<?php echo base_url();?>assets_admin/js/jquery-1.11.2.min.js"></script>        

</head>

<body>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>        
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="cyan">
                <div class="nav-wrapper">                    
                    
                    <ul class="left">                      
                      <li><a href="<?php echo base_url()?>" class="brand-logo darken-1"><img src="<?php echo base_url()."images/logo.png"?>"></a></li>
                    </ul>
<!--                    <div class="header-search-wrapper hide-on-med-and-down">
                        <i class="mdi-action-search"></i>
                        <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore IndoScreen"/>
                    </div>-->
                    <!--<ul class="right hide-on-med-and-down">                        
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light"><i class="mdi-navigation-apps"></i></a>
                        </li>                        
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light"><i class="mdi-social-notifications"></i></a>
                        </li>                        
                        <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a>
                        </li>
                    </ul>-->
                </div>
            </nav>
        </div>
        <!-- end header nav-->
    </header>
	<div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">