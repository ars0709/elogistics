<?php 
session_start();
if (isset($_GET['session_api_key'])) {
	$_SESSION['api_key'] = $_GET['session_api_key'];
	$_SESSION['userid'] = $_GET['session_user_name'];
	$_SESSION['comp'] = $_GET['session_comp'];
}

?>


			