<div class="footer foot_bg">
  <div class="container">
    <div class="col-lg-12">
      <div class="col-lg-12 pull-left subscribe">
        
         <div class="col-xs-12 col-lg-7">
  <h3>Fly for less anywhere, join our smart list</h3>
  </div>
     <form name="subscrform" action="index.php?mailsend=2" method="post" onsubmit="javascript:void(0);">
            <div class="col-xs-12 col-lg-4">
			
    <input type="text" id="submailbox" name="sub_mail" class="form-control" placeholder="Subscribe To Our Newsletter">
	
  </div>
           <div class="col-xs-12 col-lg-1">
    <!--<button type="sub" class="btn btn-lg btn-primary">submit</button>-->
	<input type="button" name="suscrib" class="btn-news btn btn-lg btn-primary" value="submit"> 
  </div>
  </form>
      </div>
      
      <div class="clearfix"></div>
    </div>
    <div class="clearfix"> &nbsp;</div>
    <div class="col-lg-12 foot_4box">
      <div class="col-lg-3 foot_box1 foot_box4">
        <h3><span class="fa fa-arrow-circle-o-right"></span>ABOUT</h3>
        <ul>
          <li><a href="about.php"><strong>About Us</strong></a></li>
          <li><a href="ourstory.php"><strong>Our Story</strong></a></li>
          <li><a href="contactus.php"><strong>Contact Us</strong></a></li>
          <li><a href="weguarantee.php"><strong>We Guarantee</strong></a></li>
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
              +1 212-889-2345<br>
              
              Email: nyc@upandaway.com
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
            +1 305-666-4450<br>
           
            Email: mia@upandaway.com
            <br> <br>
            <strong>Washington D.C. Address:</strong><br>
            1010 Vermont Street ,Suite 1011<br>
            Washington, D.C. 20005<br>
            +1 202-639-0520<br>
            Email: was@upandaway.com
            </li>
        </ul>
      </div>
      <div class="col-lg-3 foot_box4">
        <h3><span class="fa fa-arrow-circle-o-right"></span>India Office</h3>
        <ul>
          <li> <strong>Goa Address:</strong> <br>
            302, Suyash Complex,<br>
            3rd Floor,  S.V Road,<br>
            Panjim, Goa 403001<br>
            +91 832 2236270<br>
            +91 9209733404<br>
            +1-212-810-1331<br> 
            Email: hi@upandaway.in
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
    <div class="container copyfoot"> <span class="pull-left col-lg-5 text-left">The Copyright ® Up and Away Travel <?php echo date("Y"); ?> </span> <span class="pull-right col-lg-5 text-right">Designed By Covetus</span> </div>
    <div class="clearfix"></div>
  </div>
  
  <script>
  $(document).ready(function(){
     
  });
  
  function formvalide()
  {
   
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
	
	
  }	
  
  
  </script>
  

  
<script type="text/javascript" defer="defer" src="https://mylivechat.com/chatinline.aspx?hccid=42108570"></script>



