<?php
/**
 * Created by PhpStorm.
 * User: aris
 * Date: 1/28/16
 * Time: 8:40 PM
 */

include ('config.php');
session_start();

// Unset all of the session variables.
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finally, destroy the session.
session_destroy();
header("Location:".G_URL); /* Redirect browser */
exit();
?>
<script type="application/javascript">
						var gToken='';
						var gComp='';
				</script>
				