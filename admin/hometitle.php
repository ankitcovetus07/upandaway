<?php
session_start();
include("functions.php");
$table="hometitle";
$sql="select * FROM ".$table;
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$message='';
 if(isset($_POST['submit_topoftop']))
 {
 
   if($_POST['maintitle'])
      $title=mysql_real_escape_string($_POST['maintitle']);
	 
  if($_POST['titledescr'])
      $desc=mysql_real_escape_string($_POST['titledescr']);
	 
	  
 
   //insert_topoftop($_POST['maintitle'],$_POST['titledescr'],$_FILES["imageupload"]["name"],$_POST['subtitle'],$_POST['description']);
	update_hometitle( $title,$desc,$table);
 }
 
 

if($_SESSION['user_name'])
{
?>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="styles.css" />

<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<table border="0" cellpadding="10" cellspacing="1" width="100%" align="center">
    <tr class="tableheader" >
    <td  align="center">User Dashboard</td>
    </tr>
    <tr class="tablerow" >
    <td   align="right">
        <?php
        if($_SESSION['user_name']) {
        ?>
        Welcome <?php echo $_SESSION["user_name"]; ?>.   <a href="logout.php" tite="Logout">Logout
        <?php
        }
        ?>
        </a>
    </td>
    </tr>
	<!-- Menu's -->
	<tr class="tablerow">
	<td>
	 <ul id="nav">
	   <li>
        <a href="dashboard.php">Home</a>
       </li>
	   <li>
			<a href="#"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Title &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
			<ul>
				<li> <a href="hometitle.php" id="ttp" tite="Logout">Top Of Top</a></li>

				<li><a href="whats_hot_title.php">What's Hot</a></li>
			</ul>
       </li>
	   
	   <li>
          <a href="top_of_top.php" id="ttp" tite="Logout">Top Of The Top</a>
       </li>
	   <li>
        <a href="flightdetail.php" id="ttp" tite="Logout">Flights Detail</a>
       </li>
	   <li>
        <a href="mailsubscr.php" id="ttp" tite="Logout">Subscribed Mail</a>
       </li>
	 </ul>
    </td>
     
    </tr>
	<!-- Menu's -->
	
 </table>  

 <table cellspacing="1" width="40%" align="center">
	<tr><td class="tableheader" align="center"><?php echo $message;?></td></tr>
   </table>
   
    <form name="frmUser" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"  enctype="multipart/form-data" >
		<table  cellspacing="1" width="40%" align="center">
			<tr class="tableheader">
			  <td align="center" colspan="2">Top Of The Top</td>
			</tr>
			 
			<tr class="tablerow">
			  <td align="right">Main Title</td>
			    <td>
				 <input class="textbox" type="text" name="maintitle" id='maintitle' value="<?php echo $row['maintitle'] ?>">
			    </td>
			</tr>
			<tr class="tablerow">
			  <td align="right">Title Description</td>
			  <td> 
				<textarea rows="2" cols="30" name="titledescr" id='titledescr'><?php echo $row['main_titile_descr']; ?></textarea>
			  </td>
			</tr>
			 
			
			<tr class="tableheader">
			  <td align="center" colspan="2"><input type="submit" name="submit_topoftop" value="UPDATE"></td>
			</tr>
			 
		</table>
	</form>
	
 
 
</body>
</html>
<?php
 }
 else
 {
   header('Location: index.php');
 }
 

?>



