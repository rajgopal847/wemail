<?php session_start();
error_reporting(1);
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>WEMAIL</title>
<script language="JavaScript1.1">
		<!--

		/*
		JavaScript Image slideshow:
		By JavaScript Kit (www.javascriptkit.com)
		Over 200+ free JavaScript here!
		*/

		var slideimages=new Array()
		var slidelinks=new Array()
		function slideshowimages(){
		for (i=0;i<slideshowimages.arguments.length;i++){
		slideimages[i]=new Image()
		slideimages[i].src=slideshowimages.arguments[i]
		}
		}

		function slideshowlinks(){
		for (i=0;i<slideshowlinks.arguments.length;i++)
		slidelinks[i]=slideshowlinks.arguments[i]
		}

		function gotoshow(){
		if (!window.winslide||winslide.closed)
		winslide=window.open(slidelinks[whichlink])
		else
		winslide.location=slidelinks[whichlink]
		winslide.focus()
		}

		//-->
		</script>	
	<style type="text/css">
		
		body{
			padding: 0;
			margin: 0;
		}
	
		#main{
			background-color: aliceblue;
			height: 100%;
			width: 100%;
			
			
		}
		.nav-item{
			padding-left: 55px;
			
		}
		.jumbotron{
			
			background-color: transparent;
			background-size: cover;
			height: auto;
			color: black;
			
		}
		h1{
			font-size: 80px;
			font-weight: 400;
		}
		h2{
			font-weight: 400;
		}
		#text{
			position: relative;
			top: -20px;
			font-weight: 600;
		}
	
	</style>
</head>

<body bgcolor="#ccffff" style= "font-family: Calibri">
   
   <div id="main">
   				<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">WeMail</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php" class="headings">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.php" class="headings">About Us</a>
      </li>
      <?php
		if($_SESSION['sid'] == '')
		{ ?>
		 <li class="nav-item">
        <a class="nav-link" href="login.php" class="headings">Login</a>
      </li>
  <?php } ?>
		<?php

		if($_SESSION['sid'] != '')
		{ ?>
         <li class="nav-item">
        <a class="nav-link" href="HomePage.php" class="headings">Welcome, <?= $_SESSION['sid']; ?>!</a>
      </li>
		<?php }
		else
		{ ?>
            <li class="nav-item">
        <a class="nav-link" href="regis.php" class="headings">NewUser?</a>
      </li>
	<?php	}

		?>
    
     
     
      
    </ul>
  
  </div>
</nav>
   </div>


	
<!--<h2 style="background:#99FF33;padding:5px" style= "font-family: Calibri" align="center">WELCOME TO WEMAIL</h2><style>p.small {  line-height: 2;}</style>-->