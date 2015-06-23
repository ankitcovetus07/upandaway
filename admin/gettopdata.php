<?php 

include("db_connect.php");
  $q = $_REQUEST['q'];
$sql="select * FROM topoftop where id=".$q;

$result=mysql_query($sql);

 while($rows=mysql_fetch_array($result))
 {
  
   	 echo $rows['subtitle'];
  }
  
?>