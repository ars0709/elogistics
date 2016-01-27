
<body class="hold-transition skin-blue sidebar-mini">
		<div id="preloader">
			<div id="status">&nbsp;</div>
		</div>
	<div class="wrapper">
      <!-- Main Header -->
      <?php include(G_APP_PATH.'template/header.php');?>
      <!-- Left side column. contains the logo and sidebar -->
     <?php include(G_APP_PATH.'template/sidemenu.php'); ?>
      <!-- Content Wrapper. Contains page content -->



     <!-- aslinya dari sini contennya-->
	<div class="content-wrapper">
	        <!-- Content Header (Page header) -->
	        <section class="content-header">
	          <h1>Page Header
	            <small>Optional description</small>
	          </h1>
	          <ol class="breadcrumb">
	            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
	            <li class="active">Here</li>
	          </ol>
	        </section>

	        <!-- Main content -->
	        <section class="content">
	          <!-- Your Page Content Here -->

	          <?php print_r($_SESSION); ?>
	          
	        </section><!-- /.content -->
	</div>

	<!-- sampe sini -->



      <!-- Main Footer -->
    
      <?php include (G_APP_PATH.'template/footer.php'); ?>
      <!-- Control Sidebar -->
      <?php include (G_APP_PATH.'template/sidemenu2.php'); ?>
      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->


