<?php
session_start();
include("functions.php");
$message='';

if(isset($_REQUEST['del_id']))
{
  	
	 
	 
	 $sqledit="delete  FROM mailsubscrib where id=".$_REQUEST['del_id'];
	  
	 $resultedit=mysql_query($sqledit);
	 //$message='Mail Id Deleted Successfully';
	 
}

  $sql="select * FROM flightdetail ORDER BY cate_name ";
  $result=mysql_query($sql);
  
 
 

if($_SESSION['user_name'])
{
?>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="styles.css" />

<link rel="stylesheet" type="text/css" href="styles.css" />

<script type="javascript">
function deleletconfig()
{
  var del=confirm("Are you sure you want to delete this record?");
	if (del==true){
	   alert ("record deleted")
	}
  return del;
}

</script>
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
	<tr><td class="tableheader" align="center"><?php echo $message="Subscribe Mail List";?></td></tr>
   </table>
   
     <?php  listmailsubscrib();?>
 
</body>
</html>
<?php
 }
 else
 {
   header('Location: index.php');
 }
?>




 