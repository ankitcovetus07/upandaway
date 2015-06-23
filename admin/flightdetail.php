<?php
session_start();
include("functions.php");
$message='';
if(isset($_POST['EDIT_flight']))
{
	   if(isset($_POST['EDIT_flight'])) 
		 $id =$_POST['EDIT_flight'] ;
		
	   if(isset($_POST['category'])) 
		 $category_id =$_POST['category'] ;		 
	   if(isset($_POST['flightfrom'])) 
		 $flightfrom =$_POST['flightfrom'] ;	 
	   if(isset($_POST['flightto'])) 
		 $flightto =$_POST['flightto'] ;
	   if(isset($_POST['price'])) 
		 $price = $_POST['price'] ;	
		 
		 
		 update_flightdetail($category_id,$id,$flightfrom,$flightto,$price);
}	
else
if(isset($_POST['submit_flight']))
 {
   if(isset($_POST['category'])) 
     $category_id =$_POST['category'] ;
   if(isset($_POST['category'])) 
     $category_id =$_POST['category'] ;
   if(isset($_POST['flightfrom'])) 
     $flightfrom =$_POST['flightfrom'] ;	 
   if(isset($_POST['flightto'])) 
     $flightto =$_POST['flightto'] ;
   if(isset($_POST['price'])) 
     $price = $_POST['price'] ;	 
	if($price && $flightto && $flightfrom && $category_id)
    {
    	$sql="select category_name from flightcategory where id=$category_id";	 
        $result= mysql_query($sql) ;
	    $row=mysql_fetch_array($result);
	    $cat_name=$row['category_name'];	
	 
     	$message="Data Saved Successfully";
	    insert_flightdetail($category_id,$cat_name,$flightfrom,$flightto,$price);
	}
    else	
	  $message="Please Fill  Mandatory detail";
	
}
 
if(isset($_REQUEST['edit_id']))
{
  	
	 
	 $sqledit="select * FROM flightdetail where id=".$_REQUEST['edit_id'];
	 $resultedit=mysql_query($sqledit);
	 $rowedit=mysql_fetch_array($resultedit);
	 
	 
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

<script>

 function validateForm() 
{

     from = document.forms["frmUser"]["flightfrom"].value;//document.getElementById('inputfname').value;
	 to = document.forms["frmUser"]["flightto"].value;//document.getElementById('inputfname').value;
	 
	 //email = document.forms["mailform"]["inputEmail"].value;//document.getElementById('inputEmail').value;
	 price =document.getElementById('price').value;
	 cat_class = document.forms["frmUser"]["category"].value;//document.getElementById('class_category').value;
 

    if (from == "") {
        alert("Departure location must be filled out");
        return false;
    }
	
    if (to == "") {
        alert("Arrival location must be filled out");
        return false;
    }
	 
	if (price == "") {
        alert("Price must be filled out");
        return false;
    }
   var numericExpression = /^[0-9]+$/;
	 
	if(price.match(numericExpression))
	{
	}
	else
	 { alert("Required Number only");
        return false;
	 } 
	
	if ( document.forms["frmUser"]["category"].value == " " )
     {
  	   alert('Select flight category !');
	    return false;
	 }  
} 
</script>
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
	<tr><td class="tableheader" align="center"><?php echo $message;?></td></tr>
   </table>
   
    <form name="frmUser" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"  enctype="multipart/form-data" onsubmit="return validateForm();" >
		<table  cellspacing="1" width="40%" align="center">
			<tr class="tableheader">
			  <td  colspan='5' align="center" colspan="2">Flights Detail</td>
			</tr>
			<tr class="tablerow">
			  <td align="right"> Flight Category <span class="validate_txt" >*</span></td>
			  <td>
			    <select id="category" name="category"  >
				  <option value="<?php echo ($rowedit['cate_name'])?$rowedit['cate_id']:' '  ?>  " ><?php echo ($rowedit['cate_name'])?$rowedit['cate_name']:'Select Flight Category'  ?> </option>
				  <?php  
				     echo $category= select_category();
					 
				   ?>
				</select>
			  </td>
			 </tr>
			 
			<tr class="tablerow">
			  <td align="right"> Flight Rout <span class="validate_txt" >*</span></td>
			    <td>
				 <input placeholder="From" class="textbox" type="text" name="flightfrom" value="<?php echo $rowedit['flightfrom']?>">
				  <input  placeholder="To" class="textbox" type="text" name="flightto" value="<?php echo $rowedit['flightto']?>">
			    </td>
			</tr>
            <tr class="tablerow">
			  <td align="right"> Price <span class="validate_txt" >*</span></td>
			    <td>
				 $<input  size="5" class="textbox" id="price" type="text" name="price" value="<?php echo $rowedit['price']?>">
			    </td>
			</tr>
		 
						
			<tr class="tableheader">
			<?php if(isset($_REQUEST['edit_id'])){ ?>
			<td align="center" colspan="2"><input type="submit" name="EDIT_flight" value="UPDATE"><input type="hidden" name="EDIT_flight" onclick="check_validate()"  value="<?php echo $rowedit['id']?> "></td>
			 <?php }else{ ?>
			  <td align="center" colspan="2"><input type="submit" name="submit_flight" value="Submit" onclick="check_validate();"></td>
			 <?php }?> 
			</tr>
			 
		</table>
	</form>
	
 <table cellspacing="1" width="80%" align="center">
	  <tr class="tablerow">
	   <td align="center">No.</td>
	   <td align="center">FLIGHT CATEHORY</td>
	   <td align="center">FROM</td>
	    <td align="center">TO</td>
	   <td align="center">PRICE</td>
	   <td align="center">ACTION</td>
	  </tr>
 
	  
	  <?php 
	   $i=1;
	   while($row=mysql_fetch_array($result))
	   {
 	   echo "<tr class='tableheader'>
		     <td align='center'>".$i++."</td>
		     <td align='center'>".$row['cate_name']."</td>
			 <td align='center'>".$row['flightfrom']."</td>
		     <td align='center'>".$row['flightto']."</td>
			  <td align='center'>$ ".$row['price']."</td>
		     <td align='center'><a id='link'  href='flightdetail.php?edit_id=".$row['id']."'><img src='images/edit-icon.png'/></a>&nbsp;&nbsp;&nbsp;
			 <a href='delet_record.php?del_id=".$row['id']."' onclick=\"return confirm('Are you sure you want to delete?')\"><img src='images/delet.png'/></a></td>
			 
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




 