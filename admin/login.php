<?php
include_once("db_connect.php");
 session_start();



 
    $username = $_POST["username"];
  $password = $_POST["pasw"];
 

if(count($_POST)>0) 
{
	 
	$username = mysql_real_escape_string($username);
	 $query = "SELECT id, username, password FROM login_user WHERE username = '$username' AND password='$password'";
	 
	$result = mysql_query($query);
	
	 $num= mysql_num_rows($result);
	if(mysql_num_rows($result) == 0) // User not found. So, redirect to login_form again.
	{
		header('Location: index.php');
	}
   
	if($row=mysql_fetch_array($result)) 
				{
				
				 
				    
					$_SESSION['user_id'] = $row["id"];
					$_SESSION['user_name'] =$row["username"];
				} 
				else 
				{
					$message = "Invalid Username or Password!";
				}
	 
}

if(isset($_SESSION['user_id'])) 
{
	header("Location:dashboard.php");
}
?>