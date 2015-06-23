<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
	<form name="frmUser" method="post" action="login.php">
		<div class="message"><?php //if($message!="") { //echo $message;} ?></div>
		<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
		<tr class="tableheader">
		<td align="center" colspan="2">Enter Login Details</td>
		</tr>
		<tr class="tablerow">
		<td align="right">Username</td>
		<td><input class="textbox" type="text" name="username" id='uName'></td>
		</tr>
		<tr class="tablerow">
		<td align="right">Password</td>
		<td><input class="textbox" type="password" name="pasw"></td>
		</tr>
		<tr class="tableheader">
		<td align="center" colspan="2"><input type="submit" name="submit" value="Submit"></td>
		</tr>
		</table>
	</form>
</body>
</html>