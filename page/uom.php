<?php
/**
 * Created by PhpStorm.
 * User: aris
 * Date: 1/27/16
 * Time: 12:26 AM
 */

?>

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
        <h1>Unit Of Measurement
            <small>Add</small>
        </h1>

    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->

        <div class="row">
            <div class="col-lg-12">
                <div class="box box-info">

                    <!-- form start -->
                    <form id="frmUom" method="post" action="" class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">UOM Code</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="x_uom_id" placeholder="Unit Of Measurement Code">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Description</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="x_uom_desc" placeholder="Unit Of Measurement Description">
                                </div>
                            </div>

                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-default">Cancel</button>
                            <button id="btnSaveUom" type="submit" class="btn btn-info pull-right">Save UOM</button>
                        </div><!-- /.box-footer -->
                    </form>
                </div><!-- /.box -->
            </div>

        </div>

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


