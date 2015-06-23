jQuery(function($) {


   $('.btn-news').click(function(){
     
	 email = document.forms["subscrform"]["sub_mail"].value;
	  
	if (email == "") {
        alert("Email id must be filled out");
        return false;
    }
    var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");
    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=email.length) {
        alert("Not a valid e-mail address");
        return false;
    }
	else
	{
	  $.ajax({method: 'POST', url : 'ajax-newsletter.php',data : { sub_mail : email } 
	  }).done(function(msg){ 
	  		 
	 if(msg==3)
     {
	
	   $('#popup_content').html("<p style='text-align:center'><br/>Mailid Alreay Subscribed<br/> </p>");
	   $('#submailbox').val('');
	   loading(); // loading
            setTimeout(function(){ // then show popup, deley in .5 second
                loadPopup(); // function show popup
            }, 500); 
			  
	 }
	 else if(msg==1)
	 {
	   $('#popup_content').html("<p style='text-align:center'><br/>Welcome to Smart list<br/></p>");
	   $('#submailbox').val('');
	   loading(); // loading
            setTimeout(function(){ // then show popup, deley in .5 second
                loadPopup(); // function show popup
            }, 500); 
			  
	 }
	  
	  });
	}
   
   });
   
   /* 
    $("a.topopup").click(function() {
            loading(); // loading
            setTimeout(function(){ // then show popup, deley in .5 second
                loadPopup(); // function show popup
            }, 500); // .5 second
    return false;
    });   
    
    /* event for close the popup */
    $("div.close").hover(
                    function() {
                        $('span.ecs_tooltip').show();
                    },
                    function () {
                        $('span.ecs_tooltip').hide();
                      }
                );
    
    $("div.close").click(function() {
        disablePopup();  // function close pop up
    });
    
    $(this).keyup(function(event) {
        if (event.which == 27) { // 27 is 'Ecs' in the keyboard
            disablePopup();  // function close pop up
        }      
    });
    
    $("div#backgroundPopup").click(function() {
        disablePopup();  // function close pop up
    });
    
    $('a.livebox').click(function() {
        alert('Hello World!');
    return false;
    });
    

     /************** start: functions. **************/
    function loading() {
        $("div.loader").show();  
    }
    function closeloading() {
        $("div.loader").fadeOut('normal');  
    }
    
    var popupStatus = 0; // set value
    
    function loadPopup() {
        if(popupStatus == 0) { // if value is 0, show popup
            closeloading(); // fadeout loading
            $("#toPopup").fadeIn(0500); // fadein popup div
            $("#backgroundPopup").css("opacity", "0.7"); // css opacity, supports IE7, IE8
            $("#backgroundPopup").fadeIn(0001);
            popupStatus = 1; // and set value to 1
        }    
    }
        
    function disablePopup() {
        if(popupStatus == 1) { // if value is 1, close popup
            $("#toPopup").fadeOut("normal");  
            $("#backgroundPopup").fadeOut("normal");  
            popupStatus = 0;  // and set value to 0
        }
    }
  //var response=getParam("sendmail");
   pathArray = document.URL.split( '?' );
   if(pathArray[1])
   { 
     msg = pathArray[1].split( "=" );
	 
     if(msg[1]==2)
     {
	
	   document.getElementById('popup_content').innerHTML = "<p style='text-align:center'> Thank You </p> <br /><p style='text-align:center;font-weight:bold'>Back to you in a Jiffy!</p>";
	  
	   loading(); // loading
            setTimeout(function(){ // then show popup, deley in .5 second
                loadPopup(); // function show popup
            }, 500); 
			  
	 }	
   }

	function getParam( name )
	{
	 
	 name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
	 //alert(name);  
	 var regexS = "[\\?&]"+name+"=([^&#]*)";
	 var regex = new RegExp( regexS );
	 
	 var results = regex.exec( window.location.href ); 
	  
	 //alert(results);  
	 if( results == null )
	  return -1;
	else
	 return results[1];
	}

    /************** end: functions. **************/
}); // jQuery End