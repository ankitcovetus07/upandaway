<?php
include_once 'db_connect.php';
 
 
function login($email, $password) {
    
		session_start();
		$message="";
		if(count($_POST)>0) 
		{
		   	$result = mysql_query("SELECT * FROM login_user WHERE username='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
			$row  = mysql_fetch_array($result);
			if(is_array($row)) 
			{
				$_SESSION["user_id"] = $row[user_id];
				$_SESSION["user_name"] = $row[user_name];
			} 
			else 
			{
				$message = "Invalid Username or Password!";
			}
		}
		if(isset($_SESSION["user_id"])) {
		   header("Location:user_dashboard.php");
		}
 
		
} 
 
function sec_session_start() {
    $session_name = 'sec_session_id';   // Set a custom session name
    $secure = SECURE;
    // This stops JavaScript being able to access the session id.
    $httponly = true;
    // Forces sessions to only use cookies.
    if (ini_set('session.use_only_cookies', 1) === FALSE) {
        header("Location: ../error.php?err=Could not initiate a safe session (ini_set)");
        exit();
    }
    // Gets current cookies params.
    $cookieParams = session_get_cookie_params();
    session_set_cookie_params($cookieParams["lifetime"],
        $cookieParams["path"], 
        $cookieParams["domain"], 
        $secure,
        $httponly);
    // Sets the session name to the one set above.
    session_name($session_name);
    session_start();            // Start the PHP session 
    session_regenerate_id(true);    // regenerated the session, delete the old one. 
}

