<?php 

 include("admin/functions.php");

 $sql="select imagelink FROM topoftop where id=".$_GET['msg'];



  $result=mysql_query($sql);

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
<title>UAA-Mice</title>

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
</head>

<body>
<?php include('header.php'); ?>

 
<!--navigation-->

<div class="clearfix"></div>

<!--Content start-->
<div class="#">
  <?php $row=mysql_fetch_array($result);?>		

   <iframe width="100%" height="1250px"   src="<?php  echo  $row['imagelink']; ?>"></iframe>
</div>
<!--Content End-->

<div class="clearfix"></div>
<?php include('footer.php');?>

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="css/bootstrap.min.js"></script>
</body>
</html>
