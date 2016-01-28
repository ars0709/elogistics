
<?php

error_reporting(E_ALL ^ E_NOTICE);
header('Access-Control-Allow-Origin: *');  

include ('config.php');
ini_set('user_agent', $_SERVER['HTTP_USER_AGENT']);
ini_set('default_socket_timeout',120);
$qs=array();
if(isset($_SERVER['QUERY_STRING'])){ parse_str($_SERVER['QUERY_STRING'],$qs); }
$xs=array_merge($_POST,$_GET,$qs);
if(isset($xs['page']) && $xs['page']){
	if($_SESSION['userid'] && $xs['page']=='login'){
			define('G_ACTIVE_PAGE','login');
	}
	else{
		if(file_exists(G_APP_PATH.'page/'.$xs['page'].'.php')){
			if (!isset($_SESSION['userid'])){
				define('G_ACTIVE_PAGE','login');
			} else{
				?>
				<script type="application/javascript">
						var gToken='<?php echo $_SESSION['api_key'];  ?>';
						var gComp='<?php echo $_SESSION['comp'];  ?>';
				</script>
				<?php
				define('G_ACTIVE_PAGE',$xs['page']);

			}
			
		} else {
			define('G_ACTIVE_PAGE','login');
		}
	}
} else{
	define('G_ACTIVE_PAGE','login');
}
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
	<head lang="en">
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php echo G_APP; ?> </title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="font/css/font-awesome.min.css">
		<link rel="stylesheet" href="style/admin.css">
		<link rel="stylesheet" href="style/mystyle.css">
		<link rel="stylesheet" href="plugins/iCheck/square/blue.css">

		<link href="plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css" rel="stylesheet" type="text/css">
		<link href="plugins/datatables/plugins/bootstrap/responsive.bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="plugins/datatables/plugins/bootstrap/responsive.dataTables.min.css" rel="stylesheet" type="text/css">
		<link href="plugins/datatables/plugins/bootstrap/buttons.dataTables.min.css" rel="stylesheet" type="text/css">
		<?php 
			echo '<link rel="stylesheet" href="style/skins/skin-blue.css">';
		?>
		
	</head>
	<div id='x_session_write'></div>

	<?php 
		if (G_ACTIVE_PAGE=='login'){
			include(G_APP_PATH.'/page/login.php');
		}
		else{
			// skin-blue fixed sidebar-mini
			// echo '<body class="hold-transition skin-blue sidebar-mini">
			echo '<body class="hold-transition skin-blue sidebar-mini">
				<div id="preloader">
				    <div id="status">&nbsp;</div>
				</div>';
				echo '<div class="wrapper">';
     		include(G_APP_PATH.'template/header.php');
    		include(G_APP_PATH.'template/sidemenu.php'); 
			include(G_APP_PATH.'page/'.G_ACTIVE_PAGE.'.php');

    
    		include (G_APP_PATH.'template/footer.php');
    		include (G_APP_PATH.'template/sidemenu2.php');
    		echo '<div class="control-sidebar-bg"></div></div>';

		}
	?>

	<div class="modal-loading"></div>


	<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/iCheck/icheck.min.js"></script>
	<script src="plugins/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="plugins/datatables/media/js/dataTables.bootstrap.js"></script>
	<script src="plugins/datatables/media/js/dataTables.responsive.min.js"></script>
	<script src="plugins/datatables/media/js/responsive.bootstrap.min.js"></script>
	<script src="plugins/datatables/media/js/dataTables.buttons.min.js"></script>
	<script src="plugins/datatables/media/js/buttons.flash.min.js"></script>
	<script src="plugins/datatables/media/js/jszip.min.js"></script>
	<script src="plugins/datatables/media/js/pdfmake.min.js"></script>
	<script src="plugins/datatables/media/js/vfs_fonts.js"></script>
	<script src="plugins/datatables/media/js/buttons.html5.min.js"></script>
	<script src="plugins/datatables/media/js/buttons.print.min.js"></script>
	<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
	<!-- FastClick -->
	<script src="plugins/fastclick/fastclick.min.js"></script>

	<script src="scripts/admin.js"></script>
	<script src="scripts/config.js"></script>
	<script src="scripts/preloader.js"></script>
	<script src="scripts/ajax.js"></script>

	<!-- for page -->
	<script src="scripts/login.js"></script>

	<?php
		if(file_exists(G_APP_PATH.'scripts/'.G_ACTIVE_PAGE.'.js')){
		echo '<script src="scripts/'.G_ACTIVE_PAGE.'.js"></script>';
		}
			// switch (G_ACTIVE_PAGE) {
		// 	case 'uom':
		// 		echo '<script src="scripts/uom.js"></script>';
		// 		break;
			
		// 	default:
		// 		# code...
		// 		break;
		// }
		
	?>

	</body>
</html>