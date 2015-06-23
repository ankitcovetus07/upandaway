<?php 
 include("admin/functions.php");
  $sql="select * FROM topoftop";
  $result=mysql_query($sql);
  $sql_home="select * FROM hometitle";
  $result_home=mysql_query($sql_home);  
  $sql_whats="select * FROM whatshottitle";
  $result_whats=mysql_query($sql_whats);  
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">
<title>UAA-HOME</title>

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/jumbotron-narrow.css" rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy this line! -->
<!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

<link href="css/my_style.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="font/css/font-awesome.min.css" rel="stylesheet">
<link href="font/css/font-awesome.css" rel="stylesheet">
<!--search box css-->
<link href="search/search_st.css" rel="stylesheet" type="text/css" />
<link href="search/calender.css" rel="stylesheet" type="text/css"  />
<link href="search/dropdown.css" rel="stylesheet" type="text/css"   />
<link href="search/menu.css" rel="stylesheet" type="text/css"  />
<link href="search/style.css" rel="stylesheet" type="text/css" />
<!--search box css-->
<link href="css/bootstrap.vertical-tabs.css" rel="stylesheet" type="text/css" />

<!--datetimepicker  -->
<link rel="stylesheet" href="dattimepicker/jquery-ui.css" rel="stylesheet" type="text/css" >
<!--datetimepicker -->

<!-- city search  -->
<link href="js/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<!-- city search  -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<!-- popup -->
<script type="text/javascript" src="js/css-pop.js"></script>
<!-- popup -->


<script>

$(document).ready(function()
{
/*
   url = window.location.href;
   way=url.split('#');
   	if(way[1]=="oneway")
	 {
  	  
	  alert(One Way);
	 } 
*/	
   
    var d = new Date();
	var weekday = new Array(7);
	weekday[0]=  "Sunday";
	weekday[1] = "Monday";
	weekday[2] = "Tuesday";
	weekday[3] = "Wednesday";
	weekday[4] = "Thursday";
	weekday[5] = "Friday";
	weekday[6] = "Saturday";
	
	if(d.getMonth()==11)     date_month= 'DEC';
	if(d.getMonth()== 10)		 date_month="NOV";
	if(d.getMonth()== 9)		 date_month="OCT"; 
	if(d.getMonth()==8)		 date_month="SEPT";
	if(d.getMonth()==7)		 date_month="AUG";
	if(d.getMonth()==6)		date_month="JUL";
	if(d.getMonth()==5)		date_month="JUN";
	if(d.getMonth()==4)		 date_month="MAY";
	if(d.getMonth()== 3)		date_month="APR";
	if(d.getMonth()==2)		date_month="MAR";
	if(d.getMonth()==1)		date_month="FEB";
	if(d.getMonth()==0)		 date_month="JAN";

	document.getElementById("depar_day").innerHTML  = weekday[d.getDay()];
	 document.getElementById("depar_date").innerHTML = d.getDate();
	 document.getElementById("depar_month").innerHTML= date_month ;
	 document.getElementById("depar_year").innerHTML = d.getFullYear();
	  
    document.getElementById("arrival_day").innerHTML = weekday[d.getDay()];
	document.getElementById("arrival_date").innerHTML = d.getDate();
	document.getElementById("arrival_month").innerHTML = date_month ;
	document.getElementById("arrival_year").innerHTML =d.getFullYear();
    
});

  function mytotal(obj)
  {
      var sum=0;
	  
	  if(document.getElementById("txt_adult").value)
	     sum +=  parseInt(document.getElementById("txt_adult").value);
	  if(document.getElementById("txt_senior").value)
	    sum+=parseInt(document.getElementById("txt_senior").value);
	  if(document.getElementById("txt_children").value)
		 sum+= parseInt(document.getElementById("txt_children").value)
	  if(document.getElementById("txt_lap").value)
	     sum+= parseInt(document.getElementById("txt_lap").value);
	  if(document.getElementById("txt_seat").value)
	     sum+= parseInt(document.getElementById("txt_seat").value);
	  
	  // var addition= parseInt(document.getElementById("txt_adult").value)+
	   //+parseInt(document.getElementById("txt_senior").value)
	  
	  document.getElementById("alltotal").innerHTML=sum;
	   document.getElementById("subtotal").value=sum;
    
  }
  
  function citysearch(obj)
	{
	
	     var textboxid = obj.id.toString();
		 //alert(textboxid);
		//$(document).ready(function(){
		$('#'+textboxid).focus();
		$('#'+textboxid).focus();
		
		//});

	   // (b) jquery ajax autocomplete implementation
		 // $(document).ready(function() {
			// tell the autocomplete function to get its data from our php script
			$('#'+textboxid).autocomplete({
			 
			  source: 'response.php'
			});
			 $('#'+textboxid).autocomplete({
			  source: 'response.php'
			});
			
		 // });
  
  }   
  
  //pop up ////////
  
      $('#popupBoxClose').click( function() {            
            unloadPopupBox();
        });
        
        $('#container').click( function() {
            unloadPopupBox();
        });

        function unloadPopupBox() {    // TO Unload the Popupbox
            $('#popup_box').fadeOut("slow");
            $("#container").css({ // this is just for style        
                "opacity": "1"  
            }); 
        }    
        
        
		
		//pop up ////////
</script>


</head >

<body>
 

 <?php include('header.php'); ?>

<div class="clearfix"></div>

<!--searchbox-->

<form name="mailform" method="post" action="sendmail.php" onsubmit="return validateForm();"  enctype="multipart/form-data" > 
<div class="container my_search">
  <div id="flightSearchBox">
  
    <div class="my_box1">
      <!--<div class="styled-select blue">
        <select><option>Round Trip</option>
          <option>One Way</option>
          <option>Multi Cities</option>
        </select>
      </div>-->
	  <div class="styled-select blue">
	    
		<div class=" col-lg-6 text-left"> <a  href="#roundtrip" id="roundtrip">Round-Trip</a>  
		  <div class="clearfix"></div></div>
		<div class=" col-lg-6 text-right"> <a href="#oneway" id="oneway">One-Way</a> <div class="clearfix"></div></div>
        <br>
		<div class=" col-lg-12 text-center"> <a href="multicity.php" id="multicity">Multi-Cities</a> <div class="clearfix"></div></div>
		</ul>
	 </div>
	 
	   
	 
      <div class="input-group from_outer">
        <input type="text" id="txtflightDepartLocation" name="DepartLocation[]" placeholder="From" class="form-control from_inner" onkeyup="citysearch(this);"/>
        <span class="input-group-addon from_inner_bt"><img src="images/map.png" ></span> </div>
      <div class="input-group to_outer">
        <input type="text" id="txtflightArrivalLocation" name="ArrivalLocation[]" placeholder="To" class="form-control to_inner" onkeyup="citysearch(this);" />
        <span class="input-group-addon to_inner_bt"><img src="images/map.png" ></span> </div>
    </div>
    <div class="my_box2_departure">
      <div id="hideoneway" class="departureDate">
        <div class="sub_title"> Departure Date </div>
        <a href="javascript:void(0)"  id="departureDate">
		 <input style="background-color:transparent; border:0px solid" size="1" type="hidden"  id="datepicker_depar" name="datepicker_depar[]"  value="">
		<div class="sub_departureDate" >
          <div class="day" id="depar_day">  </div>
          <div class="date" id="depar_date">  </div>
          <div class="month" id="depar_month">  </div>
          <div class="year" id="depar_year">  </div>
        </div><div></div></a>
      </div>
    </div>
    <div class="my_box3_departure" id="my_box3_arrival">
	
      <div class="departureDate" >
        <div class="sub_title">Return Date</div>
		<a href="javascript:void(0)" id="arrivalDate" >
		 <input style="background-color:transparent; border:0px solid;" size="1"  type="hidden"   id="datepicker_arrival" name="datepicker_arrival[]"  value="">
		<div class="sub_departureDate"  >
		  <div class="day" id="arrival_day">   </div>
          <div class="date" id="arrival_date">  </div>
          <div class="month" id="arrival_month">  </div>
          <div class="year" id="arrival_year"> </div>
        </div><div></div></a>
		 
      </div>
    </div>
    <div class="passengerCount my_box4_passanger">
      <div class="passengerCount_subtitle">PASSENGERS</div>
      <div style="margin-top: -38px;margin-left: 30px;">
        <div class="adultCount passengerSubCount" style="display:block"> <span class="title" style="display:inline-block">ADULT</span> <input type="text" size="1" value="" id="txt_adult" name="txt_adult[]" onkeyup="mytotal(this)"></div><!--<span class="count" style="display:inline-block">1</span>  -->
        <div class="seniorCount passengerSubCount" style="display:block"> <span class="title" style="display:inline-block">SENIOR</span><input type="text" size="1" value="" id="txt_senior"  name="txt_senior[]" onkeyup="mytotal(this)"></div><!--<span class="count" style="display:inline-block">0</span>  -->
        <div class="childrenCount passengerSubCount" style="display:block"> <span class="title" style="display:inline-block">CHILDREN</span><input type="text" size="1" value="" id="txt_children"  name="txt_children[]" onkeyup="mytotal(this)"></div><!--<span class="count" style="display:inline-block">0</span>  -->
        <div class="infantLapCount passengerSubCount" style="display:block"> <span class="title" style="display:inline-block">INFANT(lap)</span><input type="text" size="1" value="" id="txt_lap"  name="txt_lap[]" onkeyup="mytotal(this)"></div><!--<span class="count" style="display:inline-block">0</span>  -->
        <div class="infantSeatCount passengerSubCount" style="display:block"> <span class="title" style="display:inline-block">INFANT(seat)</span> <input type="text" size="1" value="" id="txt_seat"  name="txt_seat[]" onkeyup="mytotal(this)"></div><!--<span class="count" style="display:inline-block">0</span>  -->
      </div>
      <div class="passengerCount_total "> <span class="passengerCount_total_title">TOTAL</span> <span id= "alltotal" class="passengerCount_total_number"></span><input type="hidden" name="subtotal[]" id="subtotal"/> </div>
    </div>
    <div class="clearfix"></div>
	
   <div class="moreOptions" ><a href="javascript:void()" id="moreoption" >PASSENGERS DETAILS</a></div>
	
		<!--<div class="divSearchButton"  ><input type="button" class="btn btn-danger add_field_button" value="Add More Fields"/></div>-->
		
		<div class="clearfix"></div>
		
	  <div class="col-lg-12" id="optiondiv">
		<div class="col-lg-4 ileft">
			  <input type="text" name="inputfname" class="form-control" id="inputfname" placeholder="First Name">
			</div>
		<div class="col-lg-4">
			  <input type="text" name="inputlname" class="form-control" id="inputlname" placeholder="Last Name">
			</div>
		<div class="col-lg-4 iright">
		  <input type="text" name="inputEmail" class="form-control" id="inputEmail" placeholder="Email">
		</div>
	  	<div class="col-lg-4 ileft">
			  <input type="text" name="inputphone" class="form-control" id="inputphone" placeholder="Contact number">
			</div>
		<div class="col-lg-4 prefer">
		<select class="form-control" name= "class_category" id="class_category">
		 <option value=" ">Preferred Class</option>
		  <?php //echo select_category_value(); ?>
		  <option value="First Class">First Class</option>
		  <option value="Economy">Economy</option>
		  <option value="Premium">Premium</option>
		  <option value="Business">Business</option>
		</select>
		</div>
        <div class="col-lg-4 sear">
		 <div class="divSearchButton"  >
		  <input type="submit" value="SUBMIT" name="sendmail" class="btn btn-danger" id="sendmail"><input type="hidden" value="" name="sendmail" class="btn btn-danger" id="sendmail2"> 
			</div>
		</div>
		 
        <div class="clearfix"></div>
     </div>
    
	  
	
    <div class="clearfix"></div>
  </div>
   
  <div class="clearfix"></div>
</div>
</form>
<!--searchbox-->
<?php
	  $row=mysql_fetch_array($result);
	  $row_home=mysql_fetch_array($result_home);
	  $row_whats=mysql_fetch_array($result_whats);
	  
	  
?>
<div class="clearfix">&nbsp;</div>
<div class="header content">
  <div class="container">
    <div class="col-md-12">
      <h1><?php echo $row_home['maintitle'];?></h1>
      <h3><?php echo $row_home['main_titile_descr'];?></h3>
    </div>
	
    <div class="col-md-12">
      <div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail pic1"> 
           <?php if($row['imagelink']) 
             echo '<a href="http://www.upandaway.com/travelsite.php?msg=1">';
		   ?>
          <img src="<?php echo "admin/upload/".$row['image'];?>">
          <?php if($row['imagelink']) 
		     echo '</a>';
		  ?>
          </div>
          <div class="caption details">
            <h3><strong><?php echo $row['subtitle'];?></strong></h3>
            <p><?php echo $row['descriptioin'];?></p>
          </div>
        </div>
<?php $row=mysql_fetch_array($result);?>		
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail pic1">
           <?php if($row['imagelink']) 
             echo '<a href="http://www.upandaway.com/travelsite.php?msg=2">';
		  ?>
           <img src="<?php echo "admin/upload/".$row['image'];?>">
          <?php if($row['imagelink']) 
		     echo '</a>';
		  ?>
          </div>
          <div class="caption details">
             <h3><strong><?php echo $row['subtitle'];?></strong></h3>
            <p><?php echo $row['descriptioin'];?></p>
          </div>
        </div>
<?php $row=mysql_fetch_array($result);?>				
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail pic1">
           <?php if($row['imagelink']) 
             echo '<a href="http://www.upandaway.com/travelsite.php?msg=2">';
		  ?>
           <img src="<?php echo "admin/upload/".$row['image'];?>">
          <?php if($row['imagelink']) 
		     echo '</a>';
		  ?>
          </div>
          <div class="caption details">
              <h3><strong><?php echo $row['subtitle'];?></strong></h3>
            <p><?php echo $row['descriptioin'];?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix">&nbsp;</div>
    <!--<div class="col-md-12 news_lett">
      <div class="col-lg-8">
        <h4>Travel everywhere. Get exclusive prices.</h4>
      </div>
      <div class="col-lg-4">
        <div class="input-group">
          <input type="text" class="form-control">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button"><i class="fa fa-angle-right"></i></button>
          </span>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>-->
  </div>
</div>


<div class="clearfix">&nbsp;</div>
<div class="container contnt2">
  <div class="col-sm-12">
   <h1><?php echo $row_whats['maintitle'];?></h1>
      <h3><?php echo $row_whats['main_titile_descr'];?></h3>
     <!-- <h1>What's  Hot</h1>
      <h3>Our Airfare, Are Super Hot Today !</h3> --> 
    <div class="col-sm-12 board_bg">
      <div class="col-xs-2 fligt_left_4"> <!-- required for floating --> 
        <!-- Nav tabs -->
		
        <ul class="nav nav-tabs tabs-left">
		  <?php 
		    echo select_category_index();
		  ?>
          
        </ul>
      </div>
      <div class="col-xs-10"> 
        <!-- Tab panes -->
		<div class="tab-content">
        <?php select_flightdetail();?>
                
            
          </div>
		  <div class="clearfix"></div>
        </div>
		<div class="clearfix"></div>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<div class="clearfix">&nbsp;</div>
</div>
<?php include('footer.php');?>

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> --> 
<script src="dattimepicker/jquery-1.10.2.js"></script>
  <script src="dattimepicker/jquery-ui.js"></script>
  

<script src="css/bootstrap.min.js"></script>
</body>
</html>

  <script>
 
  
  
 
      
  
  /* This is the function that will get executed after the DOM is fully loaded */
 $(function() { 
    
   $('#departureDate').click(function(){
     // alert('dd');
 	     $( "#datepicker_depar" ).datepicker("show");
       });  
	
	   $('#arrivalDate').click(function(){
     // alert('dd');
 	     $( "#datepicker_arrival" ).datepicker("show");
       });  
   	
  	  var date = new Date();
    var currentMonth = date.getMonth();
    var currentDate = date.getDate();
    var currentYear = date.getFullYear();
    $( "#datepicker_depar" ).datepicker({
	 //$(this).datepicker({
	 
      //showOn: "button",
      //buttonImage: "images/map.png",
      //buttonImageOnly: false,
      //buttonText: "Select date",
	  dateFormat: 'DD, d MM, yy',
	 
	  
	   minDate: 0, 
	   maxDate: "+12M +10D" ,
	  onSelect: function(date) {
	  
	    	  var str = date.toString();
			  var arr = str.split(",");
			  var datemonth=arr[1].split(' ');
			 
			   select_month= datemonth[2].toString();
			   if(select_month=="December")     datemonth[2]= 'DEC';
				 if(select_month== "November")		 datemonth[2]="NOV";
				if(select_month==  "October")		 datemonth[2]="OCT"; 
				if(select_month=="September")		 datemonth[2]="SEPT";
				if(select_month=="August")		 datemonth[2]="AUG";
				if(select_month=="July")		 datemonth[2]="JUL";
				if(select_month=="June")		 datemonth[2]="JUN";
				if(select_month=="May")		 datemonth[2]="MAY";
				if(select_month== "April")		 datemonth[2]="APR";
				if(select_month=="March")		 datemonth[2]="MAR";
				if(select_month=="February")		 datemonth[2]="FEB";
				if(select_month=="January")		 datemonth[2]="JAN";
			  
			   document.getElementById("depar_day").innerHTML = arr[0].toString();
			   document.getElementById("depar_date").innerHTML = datemonth[1].toString();
			   document.getElementById("depar_month").innerHTML = datemonth[2];//.toString();
			   document.getElementById("depar_year").innerHTML = arr[2].toString();
			   
		   }
        });
	
	$( "#datepicker_arrival" ).datepicker({
      //showOn: "button",
      //buttonImage: "images/cal.gif",
      //buttonImageOnly: true,
     // buttonText: "Select date",
	  dateFormat: 'DD, d MM, yy',
	  //altField: '#datepicker', 
	  //altFormat: 'mm-dd-yy',
	  minDate: 0, 
	  maxDate: "+12M +10D" ,
	  onSelect: function(date) {
		    
			  var str = date.toString();
			  var arr = str.split(",");
			  
			  var datemonth=arr[1].split(' ');
			   
			 
			   select_month= datemonth[2].toString();
			   //alert(select_month);
			  if(select_month=="December")     datemonth[2]= 'DEC';
				 if(select_month== "November")		 datemonth[2]="NOV";
				if(select_month==  "October")		 datemonth[2]="OCT"; 
				if(select_month=="September")		 datemonth[2]="SEPT";
				if(select_month=="August")		 datemonth[2]="AUG";
				if(select_month=="July")		 datemonth[2]="JUL";
				if(select_month=="June")		 datemonth[2]="JUN";
				if(select_month=="May")		 datemonth[2]="MAY";
				if(select_month== "April")		 datemonth[2]="APR";
				if(select_month=="March")		 datemonth[2]="MAR";
				if(select_month=="February")		 datemonth[2]="FEB";
				if(select_month=="January")		 datemonth[2]="JAN";

			  	  
			  
			   document.getElementById("arrival_day").innerHTML = arr[0].toString();
			   document.getElementById("arrival_date").innerHTML = datemonth[1].toString();
			   document.getElementById("arrival_month").innerHTML = datemonth[2];//.toString();
			   document.getElementById("arrival_year").innerHTML = arr[2].toString();
			  
			 
		    
		   }
    });
	
  });
  
  
  $(document).ready(function(){
  
  url = window.location.href;
   way=url.split('#');
   
	if(way[1]=="oneway")
	{
	  
       $("#my_box3_arrival").hide();
	}
  document.getElementById("sendmail2").value="Round Trip";
	 // alert(document.getElementById("sendmail1").value);
   $("#oneway").click(function(){
   
     document.getElementById("sendmail2").value="One Way ";
	  //alert(document.getElementById("sendmail1").value);
   $("#my_box3_arrival").hide();
	});
	  $("#roundtrip").click(function(){
	  
	  $("#my_box3_arrival").show();
	});
    $("#optiondiv").hide();
	$("#moreoption").click(function(){
		$("#optiondiv").toggle();
	  });
});
function validateForm() 
{
    
  url = window.location.href;
   way=url.split('#');
   
     fname = document.forms["mailform"]["inputfname"].value;//document.getElementById('inputfname').value;
	 email = document.forms["mailform"]["inputEmail"].value;//document.getElementById('inputEmail').value;
	 conphone =document.getElementById('inputphone').value;
	 cat_class = document.forms["mailform"]["class_category"].value;//document.getElementById('class_category').value;


     depar_loc = document.getElementsByName('DepartLocation[]');
	 arrv_loc = document.getElementsByName('ArrivalLocation[]');
	 depar_day = document.getElementsByName('datepicker_depar[]');
	 arrv_day = document.getElementsByName('datepicker_arrival[]');
	 adult_txt = document.getElementsByName('txt_adult[]');
	 senior_txt = document.getElementsByName('txt_senior[]');
	 childern_txt = document.getElementsByName('txt_children[]');
	 lap_txt = document.getElementsByName('txt_lap[]');
	 seat_txt = document.getElementsByName('txt_seat[]');
	 
	 
    for(i=0;i<depar_loc.length;i++) 
    {
	  
	  if(depar_loc[i].value=="")
	  {
  	    alert("Please fill departure location"); 
		depar_loc[i].focus();
		return false;
	  }	
	 
	  if(arrv_loc[i].value=="")
	  {
	   alert("Please fill Arrival location");
	   arrv_loc[i].focus();
	   	return false;
	  }	
	   /*
	  if(depar_day[i].value=="")
	  { 
	   alert("Please select departure date");
	   depar_day[i].focus();
	   	return false;
	  }	
	  if(arrv_day[i].value=="" && way[1]!='oneway')
	  {
	   alert("Please select arrival date");
	   arrv_day[i].focus();
	  	return false;
	  }	 
	  */
	  if(adult_txt[i].value=="" && senior_txt[i].value=="" && childern_txt[i].value=="" && lap_txt[i].value=="" && seat_txt[i].value=="")
	  { 
	     alert("Please fill type of passengers");
		 adult_txt[i].focus();
			return false;
	  }	
	 
	}



    if (fname == "") {
        alert("First name must be filled out");
        return false;
    }
	
    if (document.forms["mailform"]["inputphone"].value == " ") {
        alert("phone must be filled out");
        return false;
    }
	 
	var numericExpression = /^[0-9]+$/;
	 
	if(conphone.match(numericExpression))
	{
	}
	else
	 { alert("Add Contact Number");
        return false;
	 } 
	
	if ( document.forms["mailform"]["class_category"].value == " " )
     {
  	   alert('Select Preferred Class !');
	    return false;
	 }  
	
	//var x = document.forms["myForm"]["email"].value;
    var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");
    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=email.length) {
        alert("Add Valid Email Address");
        return false;
    }
	if (email == "") {
        alert("Email id must be filled out");
        return false;
    }
	
	 
  
  
} 
   
   
   
</script>
<!--Add the following script at the bottom of the web page (before </body></html>)-->
<!-- Popup Div   -->  
    <div id="toPopup">
     
        <div class="close"> close</div>
          <span class="ecs_tooltip">Press Esc to close <span class="arrow"></span></span>
        <div id="popup_content" > <!--your content start
		  
		    <p style="text-align:center"> Thank You </p> 
            <br />
            <p style="text-align:center;font-weight:bold">Back to you in a Jiffy!</p>
			-->
        </div> <!--your content end-->
    
    </div> <!--toPopup end-->
    
    <div class="loader"></div>
       <div id="backgroundPopup"></div>
	        
<!-- Popup Div   -->  

