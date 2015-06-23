<?php

session_start();

include("functions.php");



if(isset($_REQUEST['edit_id']))

{

   $sql="select * FROM topoftop where id=".$_REQUEST['edit_id'];

   $result=mysql_query($sql);

   $editrow=mysql_fetch_array($result);

}  



  $sql="select * FROM topoftop";

  $result=mysql_query($sql);

  







$message='';

 if(isset($_POST['submit_topoftop']))

 {

   $validextensions = array("jpeg", "jpg", "png");

   $temporary = explode(".", $_FILES["imageupload"]["name"]);

   $file_extension = end($temporary);

   

   if($_FILES["imageupload"]["name"])

   {

   

	   if ((($_FILES["imageupload"]["type"] == "image/png")|| ($_FILES["imageupload"]["type"] == "image/jpg")

			 || ($_FILES["imageupload"]["type"] == "image/jpeg"))

			 && ($_FILES["imageupload"]["size"] < 10000000000)//approx. 1000kb files can be uploaded

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

			 update_topoftop($_POST['id'],$_FILES["imageupload"]["name"],mysql_real_escape_string($_POST['subtitle']),$_POST['image_hyperlink'],mysql_real_escape_string($_POST['description']));

		  }

		}

		else

		{

		  

		   

		   $message="<span>***Invalid file Type or file Size Exceeded***<span>";

		}

	}

	else

	{

	 

	  update_topoftop($_POST['id'],$_FILES["imageupload"]["name"],mysql_real_escape_string($_POST['subtitle']),$_POST['image_hyperlink'],mysql_real_escape_string($_POST['description']));

	}

   $image_path='';

 

    

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

			  <td align="center" colspan="2">Top Of The Top<input type="hidden" value="<?php echo $editrow['id']?>" name='id'></td>

			</tr>

				 

			 

			<tr class="tablerow">

			  <td align="right">Image</td>

			    <td>

				 <input class="textbox"  type="file" name="imageupload" id='imageupload' value="">

			    </td>

			</tr>
           
            <tr class="tablerow">
			  <td align="right">Link to Redirect</td>
			  <td> 
				<input  type="text" id="image_hyperlink"  name="image_hyperlink" value='<?php echo $editrow['imagelink'] ?>' />
			  </td>
			</tr> 
            
 			<tr class="tablerow">

			  <td align="right">SubTitle</td>

			  <td> 

				<input  type="text" id="subtitle"  name="subtitle" value='<?php echo $editrow['subtitle'] ?>' />

			  </td>

			</tr>

			<tr class="tablerow">

			  <td align="right">Description</td>

			  <td> 

				<textarea rows="2" cols="30" name="description" id='description'><?php echo $editrow['descriptioin']; ?></textarea>

			  </td>

			</tr>

			

			<tr class="tableheader">

			  <td align="center" colspan="2"><input type="submit" name="submit_topoftop" value="Submit"></td>

			</tr>

			 

		</table>

	</form>

	 

	

	<table cellspacing="1" width="80%" align="center">

	  <tr class="tablerow">

	   <td align="center">ID</td>

	   <td align="center">TITLE</td>

	   <td align="center">IMAGE</td>

	   <td align="center">DESCRIPTION</td>
       
       <td align="center">IMAGE LINK</td>

	   <td align="center">ACTION</td>

	  </tr>

	  <?php 

	   $i=1;

	   while($row=mysql_fetch_array($result))

	   {

 	   echo "<tr class='tableheader'>

		     <td align='center'>".$i++."</td>

		     <td align='center'>".$row['subtitle']."</td>

			 <td align='center'><img width='100px' height='100px' src='upload/".$row['image']."'></td>

		     <td align='center'>".$row['descriptioin']."</td>
			 
			 <td align='center'>".$row['imagelink']."</td>

		     <td align='center'><a href='top_of_top.php?edit_id=".$row['id']."'><img src='images/edit-icon.png'/></a></td>

		    </tr>";

			

	   }

	  ?>

	</table>

</body>



</html>

<?php

 }

 else

 {

   header('Location: index.php');

 }



 

?>



 