<?php 
 include("admin/functions.php");

   if(isset($_POST['sub_mail']))
	   {
		 
		 $sql_subs="select* FROM mailsubscrib where mailid='".$_POST['sub_mail']."'";
		 $result_subs=mysql_query($sql_subs);
			 
		 if( $row_subs=mysql_fetch_array($result_subs))  
		 {
		  echo '3'; 
		 }
		 else
		 {  mailsubscrib($_POST['sub_mail']);
           echo '1';
		 }	 
	 }	

 
?>