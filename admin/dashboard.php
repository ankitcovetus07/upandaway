<?php
session_start();
include("functions.php");
if($_SESSION['user_name'])
{
?>
<html>
<head> 
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
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

  <br/>
  <div  id="topoftop">
  <!--
    <form name="frmUser" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"  enctype="multipart/form-data" >
		<table  cellspacing="1" width="40%" align="center">
			<tr class="tableheader">
			  <td align="center" colspan="2">Top Of The Top</td>
			</tr>
			<tr class="tablerow">
			  <td align="right">Main Title</td>
			    <td>
				 <input class="textbox" type="text" name="maintitle" id='maintitle' value="<?php  ?>">
			    </td>
			</tr>
			<tr class="tablerow">
			  <td align="right">Title Description</td>
			  <td> 
				<textarea rows="2" cols="30" name="titledescr" id='titledescr'></textarea>
			  </td>
			</tr>
			<tr class="tablerow">
			  <td align="right">Image</td>
			    <td>
				 <input class="textbox" type="file" name="imageupload" id='imageupload' value="<?php  ?>">
			    </td>
			</tr>
			<tr class="tablerow">
			  <td align="right">SubTitle</td>
			  <td> 
				<textarea rows="2" cols="30" name="subtitle" id='subtitle'></textarea>
			  </td>
			</tr>
			<tr class="tablerow">
			  <td align="right">Description</td>
			  <td> 
				<textarea rows="2" cols="30" name="description" id='description'></textarea>
			  </td>
			</tr>
			
			<tr class="tableheader">
			  <td align="center" colspan="2"><input type="submit" name="submit_topoftop" value="Submit"></td>
			</tr>
		</table>
	</form> -->
   
  </div>

 
</body>
</html>
<?php
 }
 else
 {
   header('Location: index.php');
 }
 
 if(isset($_POST['submit_topoftop']))
 {
   $validextensions = array("jpeg", "jpg", "png");
   $temporary = explode(".", $_FILES["imageupload"]["name"]);
   echo $file_extension = end($temporary);
   
   if ((($_FILES["imageupload"]["type"] == "image/png")|| ($_FILES["imageupload"]["type"] == "image/jpg")
         || ($_FILES["imageupload"]["type"] == "image/jpeg")))
	{
	  
	  if (file_exists("upload/" . $_FILES["imageupload"]["name"])) 
	  {
		echo $_FILES["imageupload"]["name"] . " <b>already exists.</b> ";
	  }
	  else 
	  {
	    move_uploaded_file($_FILES["imageupload"]["tmp_name"],"upload/" . $_FILES["imageupload"]["name"]);
	    echo "<b>Stored in:</b> " . "upload/" . $_FILES["imageupload"]["name"];
		 insert_topoftop($_POST['maintitle'],$_POST['titledescr'],$_FILES["imageupload"]["name"],$_POST['subtitle'],$_POST['description']);
	  }
	}
	else
	{
	   echo "<span>***Invalid file Type or file Size Exceeded***<span>";
	}
	
   $image_path='';
   //$descrip=$_POST[''];
  //die;
    
 }
 
 
?>

 