<?php
session_start();
include("functions.php");
  if(isset($_REQUEST['del_id']))
  {
     //echo $delid=$_REQUEST['del_id'];
   $sql="DELETE FROM flightdetail WHERE id=".$_REQUEST['del_id'];
   $result=mysql_query($sql);	
	 //delet_row($_REQUEST['del_id'],'flightdetail');
	 //die;
  }	 

 header('Location: flightdetail.php');
 
  
  
 
?>