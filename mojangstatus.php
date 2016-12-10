<?php

session_start();
require("MojangAPI/mojang-api.class.php");

//if (!isset($_SESSION["username"])) {
 // header("Location: index.php");
//}

?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Edward | Staff Panel </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="home.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>I</b>MC</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Island</b>MC</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><b><?php echo $_SESSION["username"]; ?></b></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION["username"] ?> - Logged in
                  <small>User Control Panel</small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">Dashboard</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="home.php"><i class="fa fa-link"></i> <span>Home</span></a></li>
      </ul>
      
       <ul class="sidebar-menu">
        <li class="header">Staff Controls</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="status.php"><i class="fa fa-link"></i> <span>Status</span></a></li>
      </ul>

        <ul class="sidebar-menu">
            <li class="header">Mojang</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="mojangstatus.php"><i class="fa fa-link"></i> <span>Services</span></a></li>
        </ul>



        <ul class="sidebar-menu">
            <li class="header">Links</li>
            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>IslandMC</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="http://islandmc.com/index.php">Forums</a></li>
                    <li><a href="http://store.islandmc.com/">Store</a></li>
                    <li><a href="#">IP</a></li>
                </ul>
            </li>
        </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Server Status
        <small>This page refreshes every 30 seconds!</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Edward</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    
          <!-- Your Page Content Here -->
    
    <br>

        <div class="box box-default box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Minecraft.net</h3>
            <small>Account Management</small>
            <div class="box-tools pull-right">
              <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div><!-- /.box-tools -->
          </div><!-- /.box-header -->
          <div class="box-body">
            <center>

              <?php $status = MojangAPI::getStatus();
              if ($status['minecraft.net'] == 'green') {
                echo '<span class="label label-success">Online</span>';
              } else {
                echo '<span class="label label-danger">Offline</span>';
              }
              ?>

            </center>
          </div><!-- /.box-body -->
        </div><!-- /.box -->

<div class="container">

  <div class="col-lg-2">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Public API</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <center>

            <?php $status = MojangAPI::getStatus();
            if ($status['api.mojang.com'] == 'green') {
                echo '<span class="label label-success">Online</span>';
            } else {
                echo '<span class="label label-danger">Offline</span>';
            }
            ?>

            </center>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
  </div>

  <div class="col-lg-2">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">MP Services</h3>
      </div><!-- /.box-header -->
      <div class="box-body">
          <center>

              <?php $status = MojangAPI::getStatus();
              if ($status['sessionserver.mojang.com'] == 'green') {
                  echo '<span class="label label-success">Online</span>';
              } else {
                  echo '<span class="label label-danger">Offline</span>';
              }
              ?>

          </center>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>

  <div class="col-lg-2">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Mojang</h3>
      </div><!-- /.box-header -->
      <div class="box-body">
        <center>

          <?php $status = MojangAPI::getStatus();
          if ($status['account.mojang.com'] == 'green') {
            echo '<span class="label label-success">Online</span>';
          } else {
            echo '<span class="label label-danger">Offline</span>';
          }
          ?>

        </center>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>

  <div class="col-lg-2">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Authentication</h3>
      </div><!-- /.box-header -->
      <div class="box-body">
        <center>

          <?php $status = MojangAPI::getStatus();
          if ($status['authserver.mojang.com'] == 'green') {
            echo '<span class="label label-success">Online</span>';
          } else {
            echo '<span class="label label-danger">Offline</span>';
          }
          ?>

        </center>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>

  <div class="col-lg-2">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Skins</h3>
      </div><!-- /.box-header -->
      <div class="box-body">
        <center>

          <?php $status = MojangAPI::getStatus();
          if ($status['textures.minecraft.net'] == 'green') {
            echo '<span class="label label-success">Online</span>';
          } else {
            echo '<span class="label label-danger">Offline</span>';
          }
          ?>

        </center>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>

</div>
	
	</br>
    </section>
    
    
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      IslandMC | Skyblock
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">IslandMC</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent News</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Panel Progress</h4>

                <p>30%</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <h4 class="control-sidebar-subheading">
              Percentage
                <span class="pull-right-container">
                  <span class="label label-danger pull-right">30%</span>
                </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 30%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">Welcome!</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              We are pleased to have you!
            </label>

            <p>
              You will be taught how to use this panel!
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->


<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>


<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
