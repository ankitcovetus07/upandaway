<?php
session_start();
include("functions.php");
$message='';
 if(isset($_POST['submit_economy']))
 {
   $validextensions = array("jpeg", "jpg", "png");
   $temporary = explode(".", $_FILES["imageupload"]["name"]);
   $file_extension = end($temporary);
   
   if ((($_FILES["imageupload"]["type"] == "image/png")|| ($_FILES["imageupload"]["type"] == "image/jpg")
         || ($_FILES["imageupload"]["type"] == "image/jpeg"))
		 && ($_FILES["imageupload"]["size"] < 1000000)//approx. 1000kb files can be uploaded
          //&& in_array($file_extension, $validextentions)
		  )
	{
	  
	  if (file_exists("upload/" . $_FILES["imageupload"]["name"])) 
	  {
		$message= $_FILES["imageupload"]["name"] . " <b>already exists. </b> ";
	  }
	  else 
	  {
	    move_uploaded_file($_FILES["imageupload"]["tmp_name"],"upload/" . $_FILES["imageupload"]["name"]);
	    //echo "<b>Stored in:</b> " . "upload/" . $_FILES["imageupload"]["name"];
		$message="Data Saved Successfully";
		 //insert_topoftop($_POST['maintitle'],$_POST['titledescr'],$_FILES["imageupload"]["name"],$_POST['subtitle'],$_POST['description']);
		 update_topoftop($_POST['id'],$_POST['maintitle'],$_POST['titledescr'],$_FILES["imageupload"]["name"],$_POST['subtitle'],$_POST['description']);
	  }
	}
	else
	{
	   $message="<span>***Invalid file Type or file Size Exceeded***<span>";
	}
	
   $image_path='';
   //$descrip=$_POST[''];
  //die;
    
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
    <tr class="tableheader">
    <td  colspan='2' align="center">User Dashboard</td>
    </tr>
    <tr class="tablerow">
    <td  colspan='2'  align="right">
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
       <a href="top_of_top.php" id="ttp" tite="Logout">Top Of The Top</a>
    </td>
	 <td>
       <a href="flighteconomy.php" id="ttp" tite="Logout">Economy Flights</a>
    </td>
    </tr>
	<!-- Menu's -->
	
 </table>  

 <table cellspacing="1" width="40%" align="center">
	<tr><td class="tableheader" align="center"><?php echo $message;?></td></tr>
   </table>
   
    <form name="frmUser" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"  enctype="multipart/form-data" >
		<table  cellspacing="10" width="40%" align="center">
			<tr class="tableheader">
			  <td  colspan='5' align="center" colspan="2">Economy Flights</td>
			</tr>
			 
			<tr class="tablerow">
			    <td>
				 <input class="textbox" type="text" name="maintitle" id='maintitle' value="<?php  ?>">
			    </td>
			    <td>
				 <input class="textbox" type="text" name="maintitle" id='maintitle' value="<?php  ?>">
			    </td>
				<td>
				 <input class="textbox" type="text" name="maintitle" id='maintitle' value="<?php  ?>">
			    </td>
				<td>
				 <input class="textbox" type="text" name="maintitle" id='maintitle' value="<?php  ?>">
			    </td>
				<td>
				 <input class="textbox" type="text" name="maintitle" id='maintitle' value="<?php  ?>">
			    </td>
			</tr>
			<tr class="tablerow">
			    <td>
				 <input class="textbox" type="text" name="maintitle" id='maintitle' value="<?php  ?>">
			    </td>
			    <td>
				 <input class="textbox" type="text" name="maintitle" id='maintitle' value="<?php  ?>">
			    </td>
				<td>
				 <input class="textbox" type="text" name="maintitle" id='maintitle' value="<?php  ?>">
			    </td>
				<td>
				 <input class="textbox" type="text" name="maintitle" id='maintitle' value="<?php  ?>">
			    </td>
				<td>
				 <input class="textbox" type="text" name="maintitle" id='maintitle' value="<?php  ?>">
			    </td>
			</tr>
			<tr class="tablerow">
			    <td>
				 <input class="textbox" type="text" name="maintitle" id='maintitle' value="<?php  ?>">
			    </td>
			    <td>
				 <input class="textbox" type="text" name="maintitle" id='maintitle' value="<?php  ?>">
			    </td>
				<td>
				 <input class="textbox" type="text" name="maintitle" id='maintitle' value="<?php  ?>">
			    </td>
				<td>
				 <input class="textbox" type="text" name="maintitle" id='maintitle' value="<?php  ?>">
			    </td>
				<td>
				 <input class="textbox" type="text" name="maintitle" id='maintitle' value="<?php  ?>">
			    </td>
			</tr>
			<tr class="tablerow">
			    <td>
				 <input class="textbox" type="text" name="maintitle" id='maintitle' value="<?php  ?>">
			    </td>
			    <td>
				 <input class="textbox" type="text" name="maintitle" id='maintitle' value="<?php  ?>">
			    </td>
				<td>
				 <input class="textbox" type="text" name="maintitle" id='maintitle' value="<?php  ?>">
			    </td>
				<td>
				 <input class="textbox" type="text" name="maintitle" id='maintitle' value="<?php  ?>">
			    </td>
				<td>
				 <input class="textbox" type="text" name="maintitle" id='maintitle' value="<?php  ?>">
			    </td>
			</tr>
			<tr class="tablerow">
			    <td>
				 <input class="textbox" type="text" name="maintitle" id='maintitle' value="<?php  ?>">
			    </td>
			    <td>
				 <input class="textbox" type="text" name="maintitle" id='maintitle' value="<?php  ?>">
			    </td>
				<td>
				 <input class="textbox" type="text" name="maintitle" id='maintitle' value="<?php  ?>">
			    </td>
				<td>
				 <input class="textbox" type="text" name="maintitle" id='maintitle' value="<?php  ?>">
			    </td>
				<td>
				 <input class="textbox" type="text" name="maintitle" id='maintitle' value="<?php  ?>">
			    </td>
			</tr>
			
			<tr class="tableheader">
			  <td  colspan='5' align="center" colspan="2"><input type="submit" name="submit_economy" value="Submit"></td>
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



<script>