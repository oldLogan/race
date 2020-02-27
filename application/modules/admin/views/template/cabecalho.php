<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Drivycar Admin | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?=base_url("assets/css/bootstrap.min.css")?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url("assets/admin/dist/css/AdminLTE.min.css") ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url("assets/admin/dist/css/skins/_all-skins.min.css") ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url("assets/admin/plugins/iCheck/flat/blue.css") ?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?=base_url("assets/admin/plugins/morris/morris.css") ?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?=base_url("assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css") ?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?=base_url("assets/admin/plugins/datepicker/datepicker3.css") ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=base_url("assets/admin/plugins/daterangepicker/daterangepicker.css") ?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?=base_url("assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css") ?>">

  <link rel="stylesheet" href="<?=base_url("assets/admin/css/admin.css") ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->



<!-- jQuery 2.2.3 -->
<script src="<?=base_url("assets/admin/plugins/jQuery/jquery-2.2.3.min.js") ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?=base_url("assets/js/bootstrap.min.js") ?>"></script>
<!-- Morris.js charts -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?=base_url("assets/admin/plugins/morris/morris.min.js") ?>"></script> -->
<!-- Sparkline -->
<script src="<?=base_url("assets/admin/plugins/sparkline/jquery.sparkline.min.js") ?>"></script>
<!-- jvectormap -->
<script src="<?=base_url("assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js") ?>"></script>
<script src="<?=base_url("assets/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js") ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?=base_url("assets/admin/plugins/knob/jquery.knob.js") ?>"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?=base_url("assets/admin/plugins/daterangepicker/daterangepicker.js") ?>"></script>
<!-- datepicker -->
<script src="<?=base_url("assets/admin/plugins/datepicker/bootstrap-datepicker.js") ?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?=base_url("assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js") ?>"></script>
<!-- Slimscroll -->
<script src="<?=base_url("assets/admin/plugins/slimScroll/jquery.slimscroll.min.js") ?>"></script>
<!-- FastClick -->
<script src="<?=base_url("assets/admin/plugins/fastclick/fastclick.js") ?>"></script>
<!-- AdminLTE App -->
<script src="<?=base_url("assets/admin/dist/js/app.min.js") ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=base_url("assets/admin/dist/js/pages/dashboard.js") ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url("assets/admin/dist/js/demo.js") ?>"></script>
<script src="<?=base_url("assets/js/main.js")?>"></script>



</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="/admin/" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>D</b>VC</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Drivycar</b>Admin</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <!-- <span class="label label-success">4</span> -->
            </a>
            <ul class="dropdown-menu">
              <li class="header">Você tem 0 mensagem</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
             <!--      <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?=base_url("/assets/admin/dist/img/user3-128x128.jpg")?>" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li> -->
                </ul>
              </li>
              <li class="footer"><a href="#">Ver todas</a></li>
            </ul>
          </li>
          
          <!-- Notifications: style can be found in dropdown.less -->
          <!-- <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Você tem 0 notificações</li>
              <li>
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">Ver todas</a></li>
            </ul>
          </li> -->

          <!-- Tasks: style can be found in dropdown.less -->
          <!-- <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Você tem 0 tarefas</li>
              <li>
                <ul class="menu">
                  <li>
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer">
                <a href="#">View todas</a>
              </li>
            </ul>
          </li> -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url("/assets/images/sem-foto.jpg")?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?=$usuarioLogado["nome"]?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url("/assets/images/sem-foto.jpg")?>" class="img-circle" alt="User Image">

                <p>
                  <?=$usuarioLogado["nome"]?>
                  <!-- <small>Member since Nov. 2012</small> -->
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Meus dados</a>
                </div>
                <div class="pull-right">
                  <a href="/admin/login/logout" class="btn btn-default btn-flat"><i class="fa fa-power-off"></i> Sair</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>