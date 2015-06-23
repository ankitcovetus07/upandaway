<!--top red color-->

<div class="header top">

  <div class="container"> </div>

</div>

<!--top red color--> 



<!--logo and button-->

<div class="header logo">

  <div class="container">

    <div class="nav nav-pills pull-right"> 

    <span type="button" class="btn btn-lg btn-default contact"><a href="contactus.php"><i class="fa fa-phone contact_inner"></i>Contact</a></span> 

    

    <span type="button" class="log">

		<a target="_new" href=" https://www.facebook.com/up.and.away.travel.inc">

		 <img src="images/fb.png" />

		</a>

		<a target="_new" href="http://www.tripadvisor.in/members/UpandAwayTravel30">

		 <img src="images/trip_adviso1.png" />

		</a> 

		<a target="_new" href="https://twitter.com/upandawayusa" > 

		  <img src="images/tw.png" />

		</a>  

		 <a target="_new" href="https://www.linkedin.com/profile/view?id=390456707&trk=nav_responsive_tab_profile" > 	

				<img src="images/linkdin.png" />

		 </a>

		 <a target="_new" href="http://instagram.com/upandawaytravel/ ">	 

			<img src="images/instagram_1.png" />

		</a>	

    </span>

     

      </div>

    <h3 class="text-muted"><a href="index.php"><img src="images/logo.png" /></a></h3>

  </div>

</div>

<!--logo and button-->



<div class="clearfix"></div>



<!--navigation-->

<nav class="navbar navbar-inverse my_nav" role="navigation">

<div class="container">

<div class="navbar-header">

  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

  <!--      <a class="navbar-brand" href="index_home.html">Home</a> </div>

-->

  <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">

    <ul class="nav navbar-nav">

	  <?php

        $full_name = $_SERVER['PHP_SELF'];

        $name_array = explode('/',$full_name);

        $count = count($name_array);

        $page_name = $name_array[$count-1];

    ?>

      <li class="<?php echo ($page_name=='index.php')?'active':'';?>"><a href="index.php">HOME</a></li>

      <li class="<?php echo ($page_name=='maritime.php')?'active':'';?>"><a href="maritime.php">MARITIME TRAVEL</a></li>

      <li class="<?php echo ($page_name=='missiontravel.php')?'active':'';?>"><a href="missiontravel.php">MISSION / HUMANITARIAN TRAVEL</a></li>

      <li class="<?php echo ($page_name=='mice.php')?'active':'';?>"><a href="mice.php">MICE</a></li>

      <li class="<?php echo ($page_name=='corporate.php')?'active':'';?>"><a href="corporate.php">CORPORATE</a></li>

        <li style="background-color:#ed1b24;" class=""
            <?php echo ($page_name=='ourstory.php')?'active':'';?>"><a href="ourstory.php">WATCH OUR VIDEO</a>
        </li>
    </ul>

  </div>

  <!--/.nav-collapse --> 

</div>

</nav>

<!--navigation-->