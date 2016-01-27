<?php
include ('config.php');
ini_set('user_agent', $_SERVER['HTTP_USER_AGENT']);
ini_set('default_socket_timeout',120);
$qs=array();

if(isset($_SERVER['QUERY_STRING'])){ parse_str($_SERVER['QUERY_STRING'],$qs); }
$xs=array_merge($_POST,$_GET,$qs);
if(isset($xs['page']) && $xs['page']){
	if($_SESSION['userid'] && $xs['page']=='login'){
			define('G_ACTIVE_PAGE','home');
	}
	else{
		if(file_exists(G_APP_PATH.'page/'.$xs['page'].'.php')){
			if (!isset($_SESSION['userid'])){
				define('G_ACTIVE_PAGE','login');
				?>
				<script type="application/javascript">
						var gToken='';
						var gComp='';
				</script>
				<?php
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

		<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
		<?php 
			echo '<link rel="stylesheet" href="style/skins/skin-blue.css">';
		?>
		
	</head>
	<div id='x_session_write'></div>
	<?php 
		if (G_ACTIVE_PAGE=='login'){
			include(G_APP_PATH.'/page/login.php');
	?>
			
	<?php	
		}else{
			include(G_APP_PATH.'page/'.G_ACTIVE_PAGE.'.php');
		}
	?>



	<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/iCheck/icheck.min.js"></script>
	<script src="plugins/datatables/jquery.dataTables.js"></script>
	<script src="plugins/datatables/dataTables.bootstrap.js"></script>

	<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
	<!-- FastClick -->
	<script src="plugins/fastclick/fastclick.min.js"></script>



	<script src="scripts/admin.js"></script>
	<script src="scripts/config.js"></script>
	<script src="scripts/preloader.js"></script>
	<script src="scripts/ajax.js"></script>

	<!-- for page -->
	<script src="scripts/login.js"></script>
	<script src="scripts/uom.js"></script>
	</body>
</html>