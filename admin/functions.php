<?php
include_once("db_connect.php");
//session_start(); 
 
function insert_topoftop($main_title,$title_des,$image_path,$subtitle,$descrip) 
{
    
	 $sql="INSERT INTO `topoftop`(`maintitle`, `main_titile_descr`, `image`, `subtitle`, `descriptioin`)
		VALUES ('$main_title','$title_des','$image_path','$subtitle','$descrip')";
	
	$result=mysql_query($sql);	
	return true;
} 
function update_topoftop($id,$image_path,$subtitle,$imagelink,$descrip) 
{
 
   if($image_path)
     $sql= "UPDATE `topoftop` SET `image`='$image_path',`subtitle`='$subtitle',`imagelink`='$imagelink',`descriptioin`='$descrip' WHERE `id`=$id";
   else	
     $sql= "UPDATE `topoftop` SET `subtitle`='$subtitle',`imagelink`='$imagelink',`descriptioin`='$descrip' WHERE `id`=$id";
   
	$result=mysql_query($sql);	
	
	return true;
}
function update_hometitle($main_title,$title_des,$table) 
{
     $sql= "UPDATE $table SET maintitle='$main_title', main_titile_descr='$title_des'";
    
	$result=mysql_query($sql);	
	
	return true;
} 

 
function select_category() 
{
     $sql="select * FROM flightcategory";
	 $result=mysql_query($sql);	
	 $data='';
	 while($row=mysql_fetch_array($result))
     {
	    $data.="<option value=".$row['id'].">".$row['category_name']."</option>" ;
     }	
	  
   return $data; 
} 

function select_category_value() 
{
     $sql="select * FROM flightcategory";
	 $result=mysql_query($sql);	
	 $data='';
	 while($row=mysql_fetch_array($result))
     {
	    $data.="<option value=".$row['category_name'].">".$row['category_name']."</option>" ;
     }	
   return $data; 
} 
 

function insert_flightdetail($category_id,$cat_name,$flightfrom,$flightto,$price)
{
 
    $sql="INSERT INTO `flightdetail`(`cate_id`,`cate_name`, `flightfrom`, `flightto`, `price`)
	VALUES ('$category_id','$cat_name','$flightfrom','$flightto','$price')";
	$result=mysql_query($sql);	
	return true;
} 

function update_flightdetail($category_id,$id, $flightfrom,$flightto,$price)
{
  $sql="select * FROM  flightcategory where id=".$category_id;
  
  $result=mysql_query($sql);	
  $result_cat=mysql_fetch_array($result);
   
  $cat_id=$result_cat['id'];
  $cat_name=$result_cat['category_name'];
  
  $sql= "UPDATE flightdetail SET cate_id='$cat_id', cate_name='$cat_name',flightfrom='$flightfrom',flightto='$flightto' ,price=$price WHERE id=$id";
  $result=mysql_query($sql);	 
	return true;
}

function select_flightdetail() 
{
  $sql="SELECT * FROM  `flightcategory`";
	 $resultMain=mysql_query($sql);	
	
	$count =0;
	
	 while($rowMain=mysql_fetch_array($resultMain))
     {
     $innercount=1;
	 
		  $sql='SELECT * FROM `flightdetail`  where cate_id='.$rowMain['id'];//. ' order by cate_id' ;
		  $result=mysql_query($sql);
		if($count ==0)
			echo '<div class="tab-pane active" id="'.$rowMain[category_name].'">';
		else
			echo '<div class="tab-pane" id="'.$rowMain[category_name].'">';
			
              $total_item= mysql_num_rows($result);   
          // echo 
		    while($row=mysql_fetch_array($result))
			 {  
			   
			   if($innercount==1)
			   {
			     
 			     echo ' <div class="row flights_first"><ul>';
			   } 	 
		       
			    echo  '<li><a href="javascript:void(0)"><span class="dest">'.$row['flightfrom'].'-'.$row['flightto'].'</span> <span class="price">$'.$row['price'].'</span></a></li>';
				
				$innercount++;
				
				if($innercount>3 ||$total_item+1==$innercount)
                {
 				  echo '</ul></div>';
				  $innercount=1;  
				} 
				
              }
			echo '</div>';	 	   
	$count++;
	}
	 
//return $data; 
} 


function select_category_index() 
{
     $sql="SELECT * FROM  `flightcategory`";
	 $result=mysql_query($sql);	
	 $data='';
	 $i=0;
	
	 while($row=mysql_fetch_array($result))
     {
	if( $i==0)
	     $data.="<li class='active' ><a href='#".$row['category_name']."' data-toggle='tab'><i class='fa fa-location-arrow'></i><br>".$row['category_name']."</a></li>";
	 else
		$data.="<li  ><a href='#".$row['category_name']."' data-toggle='tab'><i class='fa fa-location-arrow'></i><br>".$row['category_name']."</a></li>";
	
	   $i++; 
     }

   return $data; 
} 

function delet_row($id,$table) 
{
  $sql="DELETE FROM '".$table."' WHERE id=".$id;
  
  $result=mysql_query($sql);	
  return ;
}
function mailsubscrib($mail)
{

   date_default_timezone_set('Asia/Kolkata');
   $date = date("l F j, Y, g:i a");
   
  	  $sql="INSERT INTO mailsubscrib(mailid,dateofsubs) VALUES ('$mail','$date')";
      $result=mysql_query($sql);	
	 
   return ;
}
function listmailsubscrib()
{
   $sql="select* FROM mailsubscrib  order by id DESC ";
   $result=mysql_query($sql);	
   $i=1;
   echo '<table cellspacing="1" width="80%" align="center">
		  <tr class="tablerow">
		    <th align="center">No.</th>
			
		    <th align="center">MAIL ID</th>
			<th align="center" width="380px">DATE OF SUBSCRIPTION</th>
			<th align="center" width="50px">ACTION</th>
		  </tr>';
	   while($row=mysql_fetch_array($result))
	   {
 	     echo "<tr class='tableheader'>";
		 echo "<td align='center'>".$i++."</td>";
		 echo "<td align='center'>".$row['mailid']."</td>";
		 echo "<td align='center'>".$row['dateofsubs']."</td>";
		 echo "<td align='center'><a href='mailsubscr.php?del_id=".$row['id']."' onclick=\"return confirm('Are you sure you want to delete?')\"><img src='images/delet.png'/></a></td>";
		 echo "<tr>";
	   }
	 echo "<table>";  
}


