
 <?php 
 include("admin/functions.php");
  $sql="select * FROM `topoftop";
  $result=mysql_query($sql);
  $sql_home="select * FROM hometitle";
  $result_home=mysql_query($sql_home);  
  
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

<!-- city search -->
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
 <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<!-- city search -->

<script>
var dynamic_total=0;
$(document).ready(function() 
  {
    
		var max_fields      = 10; //maximum input boxes allowed
		var wrapper         = $(".input_fields_wrap"); //Fields wrapper
		var add_button      = $(".add_field_button"); //Add button ID
	     var dynamictabid=1;
	   
		var x = 1; //initlal text box count
		$(add_button).click(function(e){ //on add input button click
			e.preventDefault();
			if(x < max_fields){ //max input box allowed
				x++; //text box increment
				 dynamictabid=x;
				//$(wrapper).append('<div id="flightSearchBox" class="dynamicbox'+x+'" > <div class="my_box1"> <div class="input-group from_outer"> <input type="text" id="dynamicbox'+x+'-txtflightDepartLocation" name="DepartLocation[]" placeholder="From" class="form-control from_inner"  onkeyup="citysearch(this);" /> <span class="input-group-addon from_inner_bt"><img src="images/map.png" ></span> </div> <div class="input-group to_outer"> <input type="text" id="dynamicbox'+x+'-txtflightArrivalLocation" name="ArrivalLocation[]" placeholder="To" class="form-control to_inner"  onkeyup="citysearch(this);"  /> <span class="input-group-addon to_inner_bt"><img src="images/map.png" ></span> </div> </div> <div class="my_box2_departure"> <div class="departureDate"> <div class="sub_title"><input style="background-color:transparent; border:0px solid" size="1" type="hidden" id="dynamicbox'+x+'-datepicker_depar" name="datepicker_depar[]" value=""> Departure Date </div> <a href=""><div class="sub_departureDate" > <div class="day" id="dynamicbox'+x+'-depar_day">THURSDAY </div> <div class="date" id="dynamicbox'+x+'-depar_date"> 24 </div> <div class="month" id="dynamicbox'+x+'-depar_month"> Dec </div> <div class="year" id="dynamicbox'+x+'-depar_year"> 2014 </div> </div></a> </div> </div> <div class="my_box3_departure" id="my_box3_departure"> <div class="departureDate" > <div class="sub_title"><input style="background-color:transparent; border:0px solid;" size="1" type="hidden" id="dynamicbox'+x+'-datepicker_arrival" name="datepicker_arrival[]" value="">Return Date</div> <a href=""><div class="sub_departureDate" > <div class="day" id="dynamicbox'+x+'-arrival_day"> THURSDAY </div> <div class="date" id="dynamicbox'+x+'-arrival_date"> 24 </div> <div class="month" id="dynamicbox'+x+'-arrival_month"> Dec </div> <div class="year" id="dynamicbox'+x+'-arrival_year"> 2014 </div> </div></a> </div> </div> <div class="passengerCount my_box4_passanger"> <div class="passengerCount_subtitle">PASSANGERS</div> <div style="margin-top: -38px;margin-left: 30px;"> <div class="adultCount passengerSubCount" style="display:block"> <span class="title" style="display:inline-block">ADULT</span> <input type="text" size="1" value="" id="dynamicbox'+x+'-txt_adult" name="txt_adult[]" onkeyup="mytotalDynamic(this)"></div> <div class="seniorCount passengerSubCount" style="display:block"> <span class="title" style="display:inline-block">SENIOR</span><input type="text" size="1" value="" id="dynamicbox'+x+'-txt_senior" name="txt_senior[]" onkeyup="mytotalDynamic(this)"></div> <div class="childrenCount passengerSubCount" style="display:block"> <span class="title" style="display:inline-block">CHILDREN</span><input type="text" size="1" value="" id="dynamicbox'+x+'-txt_children" name="txt_children[]" onkeyup="mytotalDynamic(this)"></div> <div class="infantLapCount passengerSubCount" style="display:block"> <span class="title" style="display:inline-block">INFANT(lap)</span><input type="text" size="1" value="" id="dynamicbox'+x+'-txt_lap" name="txt_lap[]" onkeyup="mytotalDynamic(this)"></div> <div class="infantSeatCount passengerSubCount" style="display:block"> <span class="title" style="display:inline-block">INFANT(seat)</span> <input type="text" size="1" value="" id="dynamicbox'+x+'-txt_seat" name="txt_seat[]" onkeyup="mytotalDynamic(this)"></div> </div> <div class="passengerCount_total "> <span class="passengerCount_total_title">TOTAL</span> <span id= "dynamicbox'+x+'-alltotal" class="passengerCount_total_number"></span><input type="hidden" id="dynamicbox'+x+'-subtotal"/> </div> </div> <div class="clearfix"></div> <a href="#" class="remove_field">Remove</a> </div> ');
				//$(wrapper).append(' <div id="flightSearchBox" class="dynamicbox'+x+'" > <div class="my_box1"> <div class="input-group from_outer"> <input type="text" id="dynamicbox'+x+'-txtflightDepartLocation" name="DepartLocation[]" placeholder="From" class="form-control from_inner" onclick="citysearch(this);"/> <span class="input-group-addon from_inner_bt"><img src="images/map.png" ></span> </div> <div class="input-group to_outer"> <input type="text" id="dynamicbox'+x+'-txtflightArrivalLocation" name="ArrivalLocation[]" placeholder="To" class="form-control to_inner" onclick="citysearch(this);" /> <span class="input-group-addon to_inner_bt"><img src="images/map.png" ></span> </div> </div> <div class="my_box2_departure"> <div class="departureDate"> <div class="sub_title"> Departure Date </div> <a href="javascript:void(0)" id="dynamicbox'+x+'-departureDate" onclick="calendar_deparsearch(this);"> <input style="background-color:transparent; border:0px solid" size="1" type="hidden" id="dynamicbox'+x+'-datepicker_depar" name="datepicker_depar[]" value=""> <div class="sub_departureDate" > <div class="day" id="dynamicbox'+x+'-depar_day">THURSDAY </div> <div class="date" id="dynamicbox'+x+'-depar_date"> 24 </div> <div class="month" id="dynamicbox'+x+'-depar_month"> Dec </div> <div class="year" id="dynamicbox'+x+'-depar_year"> 2014 </div> </div><div></div></a> </div> </div> <div class="my_box3_departure" id="my_box3_departure"> <div class="departureDate" > <div class="sub_title">Return Date</div> <a href="javascript:void(0)" id="dynamicbox'+x+'-arrivalDate" onclick="calendar_arrivsearch(this);" > <input style="background-color:transparent; border:0px solid;" size="1" type="hidden" id="dynamicbox'+x+'-datepicker_arrival" name="datepicker_arrival[]" value=""> <div class="sub_departureDate" > <div class="day" id="dynamicbox'+x+'-arrival_day"> THURSDAY </div> <div class="date" id="dynamicbox'+x+'-arrival_date"> 24 </div> <div class="month" id="dynamicbox'+x+'-arrival_month"> Dec </div> <div class="year" id="dynamicbox'+x+'-arrival_year"> 2014 </div> </div><div></div></a> </div> </div> <div class="passengerCount my_box4_passanger"> <div class="passengerCount_subtitle">PASSENGERS</div> <div style="margin-top: -38px;margin-left: 30px;"> <div class="adultCount passengerSubCount" style="display:block"> <span class="title" style="display:inline-block">ADULT</span> <input type="text" size="1" value="" id="dynamicbox'+x+'-txt_adult" name="txt_adult[]" onkeyup="mytotalDynamic(this)"></div> <div class="seniorCount passengerSubCount" style="display:block"> <span class="title" style="display:inline-block">SENIOR</span><input type="text" size="1" value="" id="dynamicbox'+x+'-txt_senior" name="txt_senior[]" onkeyup="mytotalDynamic(this)"></div> <div class="childrenCount passengerSubCount" style="display:block"> <span class="title" style="display:inline-block">CHILDREN</span><input type="text" size="1" value="" id="dynamicbox'+x+'-txt_children" name="txt_children[]" onkeyup="mytotalDynamic(this)"></div> <div class="infantLapCount passengerSubCount" style="display:block"> <span class="title" style="display:inline-block">INFANT(lap)</span><input type="text" size="1" value="" id="dynamicbox'+x+'-txt_lap" name="txt_lap[]" onkeyup="mytotalDynamic(this)"></div> <div class="infantSeatCount passengerSubCount" style="display:block"> <span class="title" style="display:inline-block">INFANT(seat)</span> <input type="text" size="1" value="" id="dynamicbox'+x+'-txt_seat" name="txt_seat[]" onkeyup="mytotalDynamic(this)"></div> </div> <div class="passengerCount_total "> <span class="passengerCount_total_title">TOTAL</span> <span id= "dynamicbox'+x+'-alltotal" class="passengerCount_total_number"></span><input type="hidden" id="dynamicbox'+x+'-subtotal" name="subtotal[]"/> </div> </div> <div class="clearfix"></div> <a href="#" class="remove_field">Remove</a> </div>');
			 $(wrapper).append(' <div id="flightSearchBox" class="dynamicbox'+x+'" > <div class="my_box1"> <div class="input-group from_outer"> <input type="text" id="dynamicbox'+x+'-txtflightDepartLocation" name="DepartLocation[]" placeholder="From" class="form-control from_inner" onclick="citysearch(this);"/> <span class="input-group-addon from_inner_bt"><img src="images/map.png" ></span> </div> <div class="input-group to_outer"> <input type="text" id="dynamicbox'+x+'-txtflightArrivalLocation" name="ArrivalLocation[]" placeholder="To" class="form-control to_inner" onclick="citysearch(this);" /> <span class="input-group-addon to_inner_bt"><img src="images/map.png" ></span> </div> </div> <div class="my_box2_departure"> <div class="departureDate"> <div class="sub_title"> Departure Date </div> <a href="javascript:void(0)" id="dynamicbox'+x+'-departureDate" onclick="calendar_deparsearch(this);"> <input style="background-color:transparent; border:0px solid" size="1" type="hidden" class="dynamicbox'+x+'-departureDate" id="dynamicbox'+x+'-datepicker_depar" name="datepicker_depar[]" value="" > <div class="sub_departureDate" > <div class="day" id="dynamicbox'+x+'-depar_day">THURSDAY </div> <div class="date" id="dynamicbox'+x+'-depar_date"> 24 </div> <div class="month" id="dynamicbox'+x+'-depar_month"> Dec </div> <div class="year" id="dynamicbox'+x+'-depar_year"> 2014 </div> </div><div></div></a> </div> </div> <div class="my_box3_departure" id="my_box3_departure"> <div class="departureDate" > <div class="sub_title">Return Date</div> <a href="javascript:void(0)" id="dynamicbox'+x+'-arrivalDate" onclick="calendar_arrivsearch(this);" > <input style="background-color:transparent; border:0px solid;" size="1" type="hidden" class="dynamicbox'+x+'-arrivalDate" id="dynamicbox'+x+'-datepicker_arrival" name="datepicker_arrival[]" value="" > <div class="sub_departureDate" > <div class="day" id="dynamicbox'+x+'-arrival_day"> THURSDAY </div> <div class="date" id="dynamicbox'+x+'-arrival_date"> 24 </div> <div class="month" id="dynamicbox'+x+'-arrival_month"> Dec </div> <div class="year" id="dynamicbox'+x+'-arrival_year"> 2014 </div> </div><div></div></a> </div> </div> <div class="passengerCount my_box4_passanger"> <div class="passengerCount_subtitle">PASSANGERS</div> <div style="margin-top: -38px;margin-left: 30px;"> <div class="adultCount passengerSubCount" style="display:block"> <span class="title" style="display:inline-block">ADULT</span> <input type="text" size="1" value="" id="dynamicbox'+x+'-txt_adult" name="txt_adult[]" onkeyup="mytotalDynamic(this)"></div> <div class="seniorCount passengerSubCount" style="display:block"> <span class="title" style="display:inline-block">SENIOR</span><input type="text" size="1" value="" id="dynamicbox'+x+'-txt_senior" name="txt_senior[]" onkeyup="mytotalDynamic(this)"></div> <div class="childrenCount passengerSubCount" style="display:block"> <span class="title" style="display:inline-block">CHILDREN</span><input type="text" size="1" value="" id="dynamicbox'+x+'-txt_children" name="txt_children[]" onkeyup="mytotalDynamic(this)"></div> <div class="infantLapCount passengerSubCount" style="display:block"> <span class="title" style="display:inline-block">INFANT(lap)</span><input type="text" size="1" value="" id="dynamicbox'+x+'-txt_lap" name="txt_lap[]" onkeyup="mytotalDynamic(this)"></div> <div class="infantSeatCount passengerSubCount" style="display:block"> <span class="title" style="display:inline-block">INFANT(seat)</span> <input type="text" size="1" value="" id="dynamicbox'+x+'-txt_seat" name="txt_seat[]" onkeyup="mytotalDynamic(this)"></div> </div> <div class="passengerCount_total "> <span class="passengerCount_total_title">TOTAL</span> <span id= "dynamicbox'+x+'-alltotal" class="passengerCount_total_number"></span><input type="hidden" id="dynamicbox'+x+'-subtotal"/> </div> </div> <div class="clearfix"></div> <a href="#" class="remove_field">Remove</a> </div> ');
			var leftid  = ".dynamicbox"+x+"-departureDate";
			var rightid  = ".dynamicbox"+x+"-arrivalDate";
		            	$(leftid).datepicker();
	                 	$(rightid).datepicker(); 
			 }
		});
	   
		$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
			e.preventDefault(); $(this).parent('div').remove(); x--;
		})
		
	
		$(".dynamicbox1-departureDate").datepicker();
		$(".dynamicbox1-arrivalDate").datepicker();

   });
   

var tempArr= ['txt_adult','txt_senior','txt_children','txt_lap','txt_seat'];

function mytotalDynamic(obj)
  {
     //alert(obj.id);
	 var arrTemp =obj.id.toString().split('-');
		var total=0;
		//alert(tempArr.length);
		for(var i=0;i < tempArr.length;i++)
		{
			var str ="#"+arrTemp[0]+"-"+tempArr[i];
			
			 if($(str).val() !='')
			 {
			 //alert($(str).val());
				total +=parseInt($(str).val());
			 }
		}
		$("#"+arrTemp[0]+"-alltotal").text(total);
		 $("#"+arrTemp[0]+"-subtotal").val(total);
  }


function mytotal()
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
	  
	  document.getElementById("alltotal").innerHTML=sum;
	   document.getElementById("subtotal").value=subtotal;
  }
 
    // (a) put default input focus on the state field
function citysearch(obj)
	{
	
	     var textboxid = obj.id.toString();
		// alert(textboxid);
		//$(document).ready(function(){
		$('#'+textboxid).focus();
		$('#'+textboxid).focus();
		
		//});

	   // (b) jquery ajax autocomplete implementation
		 // $(document).ready(function() {
			// tell the autocomplete function to get its data from our php script
			$('#'+textboxid).autocomplete({
			 
			  source: '/upandaway/response.php'
			});
			 $('#'+textboxid).autocomplete({
			  source: '/upandaway/response.php'
			});
			
		 // });
  
  }
function calendar_deparsearch(obj)
{
     calendarid = obj.id.toString();
	//alert(calendarid);
	 temcalendar=obj.id.toString().split('-');
	  //alert("#"+temcalendar[0]+"-datepicker_depar");
 
	  $("."+calendarid).datepicker("show");
	
	  
    $( "#"+temcalendar[0]+"-datepicker_depar" ).datepicker({
	  dateFormat: 'DD, d MM, yy',
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
			  
			   document.getElementById(temcalendar[0].toString()+"-depar_day").innerHTML = arr[0].toString();
			   document.getElementById(temcalendar[0].toString()+"-depar_date").innerHTML = datemonth[1].toString();
			   document.getElementById(temcalendar[0].toString()+"-depar_month").innerHTML = datemonth[2];//.toString();
			   document.getElementById(temcalendar[0].toString()+"-depar_year").innerHTML = arr[2].toString();
			    
		   }
        }); 
	  
}
  
function calendar_arrivsearch(obj)
{
    calendarid = obj.id.toString();
	//alert(calendarid);
	 temcalendar=obj.id.toString().split('-');
	  //alert("#"+temcalendar[0]+"-datepicker_arrival");
	 
    

  $("."+calendarid).datepicker("show");   
  
  //alert(temcalendar[0].toString()+"-arrival_day");
  
  
  
    $("."+calendarid).datepicker({
      //showOn: "button",
      //buttonImage: "images/cal.gif",
      //buttonImageOnly: true,
     // buttonText: "Select date",
	  dateFormat: 'DD, d MM, yy',
	  //altField: '#datepicker', 
	  //altFormat: 'mm-dd-yy',
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

			  	  
			  
			   document.getElementById(temcalendar[0].toString()+"-arrival_day").innerHTML = arr[0].toString();
			   document.getElementById(temcalendar[0].toString()+"-arrival_date").innerHTML = datemonth[1].toString();
			   document.getElementById(temcalendar[0].toString()+"-arrival_month").innerHTML = datemonth[2];//.toString();
			   document.getElementById(temcalendar[0].toString()+"-arrival_year").innerHTML = arr[2].toString();
			  
			 
		    
		   }
    });
  
}  
</script>


</head>

<body>

 <?php include('header.php'); ?>

<div class="clearfix"></div>

<!--searchbox-->

<form name="mailform" method="post" action="sendmail.php" onsubmit="return validateForm();" enctype="multipart/form-data"> 
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
	    
		 <a  href="#roundtrip" id="roundtrip">Round Trip</a> 
		 <a href="#oneway" id="oneway">One Way</a><br>
		 <a href="#multicity" id="multicity">Multi Cities</a>
		</ul>
	 </div>
    
     <div class="input-group from_outer">
        <input type="text" id="dynamicbox1-txtflightDepartLocation" name="DepartLocation[]" placeholder="From" class="form-control from_inner" onkeyup="citysearch(this);" />
        <span class="input-group-addon from_inner_bt"><img src="images/map.png" ></span> </div>
      <div class="input-group to_outer">
        <input type="text" id="dynamicbox1-txtflightArrivalLocation" name="ArrivalLocation[]" placeholder="To" class="form-control to_inner" onkeyup="citysearch(this);" />
        <span class="input-group-addon to_inner_bt"><img src="images/map.png" ></span> </div>
	  
	  
	 
	  
    </div>
    <div class="my_box2_departure">
      <div class="departureDate">
        <div class="sub_title"> Departure Date </div>
        <a href="javascript:void(0)"  id="dynamicbox1-departureDate" onclick="calendar_deparsearch(this);">
		 <input style="background-color:transparent; border:0px solid" size="1" type="hidden" class="dynamicbox1-departureDate"  id="dynamicbox1-datepicker_depar" name="datepicker_depar[]"  value="">
		<div class="sub_departureDate" >
          <div class="day" id="dynamicbox1-depar_day"> THURSDAY </div>
          <div class="date" id="dynamicbox1-depar_date"> 24 </div>
          <div class="month" id="dynamicbox1-depar_month"> Dec  </div>
          <div class="year" id="dynamicbox1-depar_year">  2014 </div>
        </div><div></div></a>
      </div>
    </div>
    <div class="my_box3_departure" id="my_box3_departure">
	
      <div class="departureDate" >
        <div class="sub_title">Return Date</div>
		<a href="javascript:void(0)" id="dynamicbox1-arrivalDate" onclick="calendar_arrivsearch(this);" >
		 <input style="background-color:transparent; border:0px solid;" size="1"  class="dynamicbox1-arrivalDate"   id="dynamicbox1-datepicker_arrival" name="datepicker_arrival[]"  value="">
		<div class="sub_departureDate" style="margin-top: -46px !important;"  >
		  <div class="day" id="dynamicbox1-arrival_day"> THURSDAY </div>
          <div class="date" id="dynamicbox1-arrival_date"> 24 </div>
          <div class="month" id="dynamicbox1-arrival_month"> Dec </div>
          <div class="year" id="dynamicbox1-arrival_year"> 2014 </div>
        </div><div></div></a>
		 
      </div>
    </div>
    <div class="passengerCount my_box4_passanger">
      <div class="passengerCount_subtitle">PASSENGERS</div>
      <div style="margin-top: -38px;margin-left: 30px;">
        <div class="adultCount passengerSubCount" style="display:block"> <span class="title" style="display:inline-block">ADULT</span> <input type="text" size="1" value="" id="dynamicbox1-txt_adult" name="txt_adult[]" onkeyup="mytotalDynamic(this)"></div><!--<span class="count" style="display:inline-block">1</span>  -->
        <div class="seniorCount passengerSubCount" style="display:block"> <span class="title" style="display:inline-block">SENIOR</span><input type="text" size="1" value="" id="dynamicbox1-txt_senior"  name="txt_senior[]" onkeyup="mytotalDynamic(this)"></div><!--<span class="count" style="display:inline-block">0</span>  -->
        <div class="childrenCount passengerSubCount" style="display:block"> <span class="title" style="display:inline-block">CHILDREN</span><input type="text" size="1" value="" id="dynamicbox1-txt_children"  name="txt_children[]" onkeyup="mytotalDynamic(this)"></div><!--<span class="count" style="display:inline-block">0</span>  -->
        <div class="infantLapCount passengerSubCount" style="display:block"> <span class="title" style="display:inline-block">INFANT(lap)</span><input type="text" size="1" value="" id="dynamicbox1-txt_lap"  name="txt_lap[]" onkeyup="mytotalDynamic(this)"></div><!--<span class="count" style="display:inline-block">0</span>  -->
        <div class="infantSeatCount passengerSubCount" style="display:block"> <span class="title" style="display:inline-block">INFANT(seat)</span> <input type="text" size="1" value="" id="dynamicbox1-txt_seat"  name="txt_seat[]" onkeyup="mytotalDynamic(this)"></div><!--<span class="count" style="display:inline-block">0</span>  -->
      </div>
      <div class="passengerCount_total "> <span class="passengerCount_total_title">TOTAL</span> <span id= "dynamicbox1-alltotal" class="passengerCount_total_number"></span><input type="hidden" id="dynamicbox1-subtotal" name="subtotal[]"/> </div>
    </div>
	
    <div class="clearfix"></div>
	 
    <div class="moreOptions" ><a href="javascript:void()" id="moreoption" >MORE OPTIONS </a></div>
	
		<div class="divSearchButton"  ><input type="button" class="btn btn-danger add_field_button" value="Add More Fields"/></div>
		
		<div class="clearfix"></div>
		
	<div class="col-lg-12" id="optiondiv">
		<div class="col-lg-6">
		  <input type="text" name="inputEmail" class="form-control" id="inputEmail" placeholder="Email">
		</div>
		<div class="col-lg-6">
			  <input type="text" name="inputfname" class="form-control" id="inputfname" placeholder="First Name">
			</div>
		<div class="col-lg-6">
			  <input type="text" name="inputlname"  class="form-control" id="inputlname" placeholder="Last Name">
			</div>
	  <div class="col-lg-6">
			  <input type="text" name="inputphone"  class="form-control" id="inputphone" placeholder="Contact number">
			</div>
	
		<select class="form-control" name= "class_category" id="class_category">
		 <option value=" ">Preferred Class</option>
		  <?php echo select_category_value(); ?>
		</select>

		 <div class="divSearchButton"  >
			  <input type="submit" value="SUBMIT" name="sendmail" class="btn btn-danger"   >
			</div>

     </div>
	<!--
    <div class="divSearchButton"  >
 	  <input type="submit" value="SUBMIT" name="sendmail" class="btn btn-danger" >
    </div>
	-->
	
    <div class="clearfix"></div>
	
	 
  </div>
   
  <div class="clearfix"></div>
  <div class="input_fields_wrap"></div>
  <div class="clearfix"></div>
 
</div>

</form>
<!--searchbox-->
<?php
	  $row=mysql_fetch_array($result);
	  $row_home=mysql_fetch_array($result_home);
	  
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
          <div class="thumbnail pic1"> <img src="<?php echo "admin/upload/".$row['image'];?>"></div>
          <div class="caption details">
            <h3><?php echo $row['subtitle'];?></h3>
            <p><?php echo $row['descriptioin'];?></p>
          </div>
        </div>
<?php $row=mysql_fetch_array($result);?>		
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail pic1"> <img src="<?php echo "admin/upload/".$row['image'];?>"></div>
          <div class="caption details">
            <h3><?php echo $row['subtitle'];?></h3>
            <p><?php echo $row['descriptioin'];?></p>
          </div>
        </div>
<?php $row=mysql_fetch_array($result);?>				
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail pic1"> <img src="<?php echo "admin/upload/".$row['image'];?>"></div>
          <div class="caption details">
            <h3><?php echo $row['subtitle'];?></h3>
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
      <h1>What's  Hot</h1>
      <h3>Our Airfare, Are Super Hot Today !</h3>
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
<div class="footer foot_bg">
  <div class="container">
    <div class="col-lg-12">
      <div class="col-lg-12 pull-left subscribe">
        <h3>Get exclusive offers. Subscribe!</h3>
         <div class="col-xs-3">
    <input type="text" class="form-control" placeholder="Name">
  </div>
   <div class="col-xs-3">
    <input type="text" class="form-control" placeholder="Email Id">
  </div>
   <div class="col-xs-3">
    <input type="text" class="form-control" placeholder="Contact Us">
  </div>
   <div class="col-xs-3">
    <button type="button" class="btn btn-lg btn-primary">submit</button>
  </div>
      </div>
      
      <div class="clearfix"></div>
    </div>
    <div class="clearfix"> &nbsp;</div>
    <div class="col-lg-12 foot_4box">
      <div class="col-lg-3 foot_box1 foot_box4">
        <h3><span class="fa fa-arrow-circle-o-right"></span>ABOUT</h3>
        <ul>
          <li><a href="about.html"><strong>About Us</strong></a></li>
          <li><a href="ourstory.html"><strong>Our Story</strong></a></li>
          <li><a href="contactus.html"><strong>Contact Us</strong></a></li>
          <li><a href="weguarantee.html"><strong>We Guarantee</strong></a></li>
          <li style="display: none;"><a href="#"><strong>Best Price Guarantee</strong></a></li>
        </ul>
      </div>
      <div class="col-lg-3 foot_box4">
        <h3><span class="fa fa-arrow-circle-o-right"></span>Main Office</h3>
        <ul>
          <li>
            <p><strong>Up and Away Travel</strong><br>
              347 Fifth Avenue, Suite 610<br>
              New York, NY 10016<br>
              +1 212-889-2345,<br>
              +1 212-889-2350<br>
              Email : nyc@upandaway.com
              </p>
          </li>
        </ul>
      </div>
      <div class="col-lg-3 foot_box3">
        <h3><span class="fa fa-arrow-circle-o-right"></span>Branch Offices</h3>
        <ul>
          <li> <strong>Miami Address:</strong><br>
            9719 S Dixie Hwy, Suite 15<br>
            Miami, FL 33156<br>
            +1 305-666-4450,<br>
            +1 305-666-8767<br>
            Email : mia@upandaway.com
            <br> <br>
            <strong>Washington D.C. Address:</strong><br>
            1010 Vermont Street ,Suite 1011<br>
            Washington, D.C. 20005<br>
            +1 202-639-0520,<br>
            +1 202-639-0525<br> 
            Email : was@upandaway.com
            </li>
        </ul>
      </div>
      <div class="col-lg-3 foot_box4">
        <h3><span class="fa fa-arrow-circle-o-right"></span>India Office</h3>
        <ul>
          <li> <strong>Goa Address:</strong> <br>
            302, Suyash Complex,<br>
            3rd Floor,  S.V Road,<br>
            Pamjim, Goa 403001<br>
            +91 832 2236270<br>
            +91 9209733404<br>
            +1-212-810-1331<br> 
            Email : hi@upandaway.in
            </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="clearfix">&nbsp;</div>
  <div class="col-lg-12  botom_foot">
    <h3><span><i class="fa fa-phone-square ph"></i></span> <span class="give_us">Call us at</span> <span class="no">1-(800) 275 8001</span></h3>
    <div class="container"> <img src="images/footerlogo.png"> </div>
    <div class="clearfix"></div>
    <div class="container copyfoot"> <span class="pull-left col-lg-5 text-left">The Copyright ® Up and Away Travel 2014 </span> <span class="pull-right col-lg-5 text-right">Designed By Covetus</span> </div>
    <div class="clearfix"></div>
  </div>
</div>

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster -->

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> --> 

<script src="dattimepicker/jquery-1.10.2.js"></script>
  <script src="dattimepicker/jquery-ui.js"></script>
  

<script src="css/bootstrap.min.js"></script>
</body>
</html>
<script>
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

	document.getElementById("dynamicbox1-depar_day").innerHTML  = weekday[d.getDay()];
	 document.getElementById("dynamicbox1-depar_date").innerHTML = d.getDate();
	 document.getElementById("dynamicbox1-depar_month").innerHTML= date_month ;
	 document.getElementById("dynamicbox1-depar_year").innerHTML = d.getFullYear();
	 
    document.getElementById("dynamicbox1-arrival_day").innerHTML = weekday[d.getDay()];
	document.getElementById("dynamicbox1-arrival_date").innerHTML = d.getDate();
	document.getElementById("dynamicbox1-arrival_month").innerHTML = date_month ;
	document.getElementById("dynamicbox1-arrival_year").innerHTML =d.getFullYear();
      
  
  /* This is the function that will get executed after the DOM is fully loaded */

  
$(document).ready(function(){

   $("#oneway").click(function(){
  
	  $("#my_box3_departure").hide();
	});
	  $("#roundtrip").click(function(){
	  
	  $("#my_box3_departure").show();
	});

	$("#moreoption").click(function(){
		$("#optiondiv").toggle();
	  });
});
function validateForm() 
{
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
	  if(depar_day[i].value=="")
	  { 
	   alert("Please select departure date");
	   depar_day[i].focus();
	   	return false;
	  }	
	  if(arrv_day[i].value=="")
	  {
	   alert("Please select arrival date");
	   arrv_day[i].focus();
	  	return false;
	  }	 
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
	 { alert("Required Number only");
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
        alert("Not a valid e-mail address");
        return false;
    }
	if (email == "") {
        alert("Email id must be filled out");
        return false;
    }
	
	if(depar_loc.length<2)	
	{
        alert("For multicity must be two trip required");
        return false;
    }
  
  
} 
  
</script>
