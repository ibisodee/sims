<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>ITECHQUEEN INTERNATIONAL SCHOOL</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gold Bridge" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/jquery.countdown.css" />

<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<style type="text/css">
  .style1 {font-size: 18px}
</style>

</head>
<body>
<nav class="navbar navbar-default" role="navigation">
	<div class="container">
      <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
            <div align="center"><a href="/" class="navbar-brand style1"><img src="images/logo.png" width="53" height="50" >ITECHQUEEN INTERNATIONAL SCHOOL</a></div>
      </div>
      <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
        <ul class="nav navbar-nav">
          <li class="dropdown"> <a href="{{ route('login') }}"><i class="fa fa-user"></i><span>Login</span></a> </li>
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list"></i><span>Curricullum</span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Creche </a></li>
              <li><a href="#">Nursery </a></li>
              <li><a href="#">Primary</a></li>
              <li><a href="#">Secondary</a></li>
            </ul>
          </li>
          
        </ul>
      </div>
	    <!--/.navbar-header-->
	    <div class="clearfix"> </div>
  </div>
	    <!--/.navbar-collapse-->
</nav>
<nav class="navbar nav_bottom" role="navigation">
 <div class="container">
 <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
   </div> 
  <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
       <ul class="nav navbar-nav nav_1">
            <li><a href="/">Home</a></li>
            <li><a href="/about">About Us</a></li>
    		    <li><a href="/facilities">Facilities</a></li>
			      <li><a href="/staff">Best of Staff</a></li>
            <li><a href="/gallery">Gallery</a></li>  
            <li><a href="/admission">Admission</a></li>
            <li class="last"><a href="/contact">Contact</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>