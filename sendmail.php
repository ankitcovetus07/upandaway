<?php 
 
if(isset($_POST['sendmail']))
{ 
    //echo "<pre>";  print_r($_POST['DepartLocation']);  echo "</pre>";
	//echo "<pre>";  print_r($_POST['ArrivalLocation']);  echo "</pre>";
	//echo "<pre>";  print_r($_POST['datepicker_depar']);  echo "</pre>";
	//echo "<pre>";  print_r($_POST['datepicker_arrival']);  echo "</pre>";
 
	$FIRSTNAME=$_POST['inputfname'];
	$LASTNAME=$_POST['inputlname'];
	$EMAIL=$_POST['inputEmail'];
	$CONTACTNUM=$_POST['inputphone'];
	$CLASS=$_POST['class_category'];
	
	
	$DEP_LOC=$_POST['DepartLocation'];
	
	$ARR_LOC= $_POST['ArrivalLocation']; 
	 $DATE_DEPAR= $_POST['datepicker_depar'];
	 
	
	 $DATE_ARR= $_POST['datepicker_arrival'];
	 //print_r($DATE_ARR);
	
	$ADULT=$_POST['txt_adult'];
	$CHILDE =$_POST['txt_children'];
	$LAP= $_POST['txt_lap'];
	$SENIOR=$_POST['txt_senior']; 
	$SEAT=$_POST['txt_seat'];
	$TOTAL=$_POST['subtotal'];
	
	$msg.="<br/> <table width='30%' border='1'><tr><td>First Name</td><td>".$FIRSTNAME."</td></tr>";
	$msg.="<tr><td>Last Name</td><td>".$LASTNAME."</td></tr>";
	$msg.="<tr><td>Contact Number</td><td>".$CONTACTNUM."</td></tr>";
	$msg.="<tr><td>Preferred Class</td><td>".$CLASS."</td></tr></table><br/><br/>";
	
	      
    $msg.='<table width="80%" border="1"><tr>
	        <th scope="col">S NO.</th>
			<th scope="col">FROM</th>
			<th scope="col">TO</th>
			<th scope="col">DEPARTURE DAY</th>
			<th scope="col">RETURN DAY</th>
			<th scope="col">PASSENGER</th>
		  </tr>';
		  
	//foreach ($_POST['DepartLocation'] as $location)	  
	$i=1;
	//echo count($DEP_LOC);
	//die;
	for($j=0;$j<count($DEP_LOC);$j++ )
	{
        $msg.= '<tr><td>'.$i++.'</td>';
	    $msg.= '<td>'.$DEP_LOC[$j].'</td>';
		$msg.= '<td>'.$ARR_LOC[$j].'</td>';
		$msg.= '<td>'.$DATE_DEPAR[$j].'</td>';
		$msg.= '<td>'.$DATE_ARR[$j].'</td>';
		$msg.= '<td>ADULT:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$ADULT[$j].'<br/>';
		$msg.= 'SENIOR:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$SENIOR[$j].'<br/>';		  	  
		$msg.= 'CHILDERN:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$CHILDE[$j].'<br/>';
	    $msg.= 'INFANT(lap):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$LAP[$j].'<br/>';
		$msg.= 'INFANT(seat):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$SEAT[$j].'<br/><hr>';
		$msg.= 'TOTAL:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$TOTAL[$j].'</td>';		  
			
		
		 $msg.='</tr>';
		 
    
	}
	  
	  $msg.='</table>';
 

	 $headers  = 'MIME-Version: 1.0' . "\r\n";
     $headers .= 'Content-type: text/html;' . "\r\n";
	 $headers .= "From:".$EMAIL. "\r\n";
	
	 //$headers="From:".$EMAIL. "\r\n";
	 
	 $to= "nyc@upandaway.com,hi@upandaway.in";   
	 
     //$headers  = "From:<test@gmail.com>". "\r\n";;
      $subject= $_POST['sendmail'];
	 
	  mail($to, $subject, $msg, $headers);
	 
     header('Location: index.php?sendmail=2');
}
else
   header('Location: index.php?sendmail=0');

 
?>