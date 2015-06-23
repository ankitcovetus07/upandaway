<?php
$to = "priyajain016@gmail.com";//"nyc@upandaway.com";
$subject = "My subject";
$txt = "Hello world!";
//$headers = "From: ankitcovetus07@gmail.com" . "\r\n" ."CC: sankitcovetus07@gmail.com";

$send = mail($to,$subject,$txt);


if($send)
{
    echo "Your Account is Successfully Created. You must Activate your account.";
}
else
    echo "Failed to send";
	
	
    print phpinfo();  
	
	error_reporting(-1);
ini_set('display_errors', 'On');
?>