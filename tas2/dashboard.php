<?php
include("auth.php");
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>TeacAttSys | SRITI</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="./style-file/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Font Awesome Icons -->
    <link href="./style-file/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Ionicons -->
    <link href="./style-file/ionicons.min.css" rel="stylesheet" type="text/css">
    <!-- DATA TABLES -->
    <link href="./style-file/dataTables.bootstrap.css" rel="stylesheet" type="text/css">
    <!-- Theme style -->
    <link href="./style-file/AdminLTE.min.css" rel="stylesheet" type="text/css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="./style-file/_all-skins.min.css" rel="stylesheet" type="text/css">
    <!-- iCheck -->
    <link href="./style-file/blue.css" rel="stylesheet" type="text/css">
    <link href="./style-file/custom.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./style-file/datepicker3.css" type="text/css">
	
	<!-- fonr awesome -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <style></style>
    <style></style>
    <style></style>
    <style></style>
    <style></style>
</head>

<body class="skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <!-- HEADER SECTION -->
        <header class="main-header">
            <!-- Logo -->
            <a href="dashboard.php" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">
                <!--<img src="" width="50px"></img>-->            
            </span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">                  
<!--                <img src="template/images/jata.png" width="50px"></img>
                &nbsp;&nbsp;-->
                <img src="images/logo/sriti_png_logo.png" width="50px" height="45px">
                &nbsp;&nbsp;&nbsp;
                <!--<img src="template/images/eSmartBlue.png" width="60px" height="50px"></img>-->
            </span>

            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                    <div style="font-size:large;font-weight:bold;color: #d8e4fd;margin-left:45px;margin-top:-20px;position:absolute;z-index:1;">
                        <font color="white"><strong>Sistem Kehadiran Guru</strong></font>
                    </div>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="" class="user-image" alt="">
                                <span class="hidden-xs">user name</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="./style-file/ImagePhoto" class="user-image" alt="">
                                    <p>
                                       name - info <small>info2</small>

                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-right">
                                        <a href="logout.php" class="btn btn-default btn-flat">Log out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER SECTION -->

        <!-- =============================================== -->

        <!-- Left side column. contains the sidebar -->
        <!-- MENU SECTION -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar" style="height: auto;">
                <!-- Sidebar user panel -->
                <div class="logo">
                    <span class="logo-lg">
                    <b>
                        <font color="white">                                    
                        <div id="date" align="center"></div>
                        <div id="txt" align="center"></div>
                        </font>
                    </b>
                </span>

                </div>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header">MENU UTAMA</li>

                    <li class="treeview active">
                        <a href="dashboard.php">
                            <i class="fa fa-dashboard"></i>  <span>Paparan utama</span>
                        </a>
                    </li>
					<li class="treeview">
                        <a href="takeAttend.php">
                            <i class="fa fa-dashboard"></i>  <span>Kehadiran</span>
                        </a>
                    </li>
					<li class="treeview">
                        <a href="#">
                            <i class="fa fa-user"></i>  <span>Kelas Ganti</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu" style="display: none;">
                            <li class="">
                                <a href="listReliefCless.php">
                                    <i class="fa fa-long-arrow-right"></i>Senarai Kelas Ganti</a>
                            </li>
                            <li class="">
                                <a href="addReliefClass.php">
                                    <i class="fa fa-long-arrow-right"></i>Tambah Kelas Ganti</a>
                            </li>
							<li class="">
                                <a href="timeTableView.php">
                                    <i class="fa fa-long-arrow-right"></i>Semak Jadual Kelas</a>
                            </li>

                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-user"></i>  <span>Pengurusan</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu" style="display: none;">
                            <li class="">
                                <a href="teacherList.php">
                                    <i class="fa fa-long-arrow-right"></i>Senarai Guru</a>
                            </li>
                            <li class="">
                                <a href="addUser.php">
                                    <i class="fa fa-long-arrow-right"></i>Tambah Guru</a>
                            </li>

                        </ul>
                    </li>
					<li class="treeview">
                        <a href="report.php">
                            <i class="fa fa-dashboard"></i>  <span>Laporan Kehadiran</span>
                        </a>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
        <!--END MENU SECTION -->
        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <!--PAGE CONTENT -->
        <div class="content-wrapper" style="min-height: 652px;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
					Paparan utama 
				</h1> 
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
							<div class="col-md-12">
								<div class="box box-info">
									<div class="box-header with-border">
										<h3 class="box-title"></h3>
										
									</div>
									<div class="box-body">
										<table class="table table-bordered table-hover">
											<div class="alert alert-success alert-dismissable">                            
												<h4>SELAMAT DATANG, NAMA ADMIN</h4>
												<p>Pastikan perkara dibawah dilakukan :</p>
												<p><i class="icon fa fa-check"></i>Pastikan panel kehadiran dibuka untuk pengambilan kehadiran masuk dan keluar.</p>
												<p><i class="icon fa fa-check"></i>Semak senarai guru yang terkini dan tambah guru baru daftar.</p>
												<p><i class="icon fa fa-check"></i>Maklumat kehadiran guru boleh disemak dan dicetak dalam bahagian laporan kehadiran.</p>
											</div>
										</table>
									</div>
									<div class="overlay" id="overlay" style="display: none;">
										<i class="fa fa-spinner fa-spin"></i>
									</div>
								</div>
							</div>
                    <!-- /.col -->
                </div>


            </section>
            <!-- /.content -->
        </div>
        <div class="control-sidebar-bg" style="position: fixed; height: auto;"></div>
    </div>
    <!-- ./wrapper -->
	
	
    <!-- jQuery 2.1.4 -->
    <script src="./style-file/jQuery-2.1.4.min.js.download"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="./style-file/bootstrap.min.js.download" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="./style-file/jquery.dataTables.min.js.download" type="text/javascript"></script>
    <script src="./style-file/dataTables.bootstrap.min.js.download" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="./style-file/jquery.slimscroll.min.js.download" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="./style-file/fastclick.min.js.download"></script>
    <!-- AdminLTE App -->
    <script src="./style-file/app.min.js.download" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="./style-file/icheck.min.js.download" type="text/javascript"></script>
    <script src="./style-file/highcharts.js.download"></script>
    <script src="./style-file/highcharts-3d.js.download"></script>
    <script src="./style-file/exporting.js.download"></script>
    <!-- datepicker -->
    <script src="./style-file/bootstrap-datepicker.js.download"></script>
    <!-- Demo -->
    <script src="./style-file/demo.js.download" type="text/javascript"></script>





</body>

</html>