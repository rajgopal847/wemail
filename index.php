<?php session_start();
error_reporting(1);
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>WEMAIL SERVER</title>
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
		<style>
			a:hover{color:#00FF66;}
			a{font-size:18px;margin-left:5%;}
			table,td{padding:5px;broder-radius:5px}
		</style>
</head>

<body bgcolor="#ccffff" style= "font-family: Calibri">

  	
  <tr>
    <td height="38" colspan="2">		<br>		<img src="images/logo1.PNG" alt="Logo" width="80" height="80" style="float:left"><br>
		<a href="index.php">HOME</a>
		<a href="index.php?chk=about">ABOUT US</a>
		<a href="index.php?chk=login">LOGIN</a>
		<a href="index.php?chk=registraion">NEW USER?</a>
		<a href="index.php?chk=5"></a><br>
		</td>
  </tr>
  <tr>
    <td height="613" valign="top" style="padding:10px">
	
	<?php
	@$chk=$_REQUEST['chk'];
	if($chk=="")
	{
	?>	<br>
	
	<h2 style="background:#99FF33;padding:5px" style= "font-family: Calibri" align="center">WELCOME TO WEMAIL</h2><style>p.small {  line-height: 2;}</style>
	
	<br>		<img src="images/wemail.png" alt="fron1" width="1250" height="500" style="float:center"><br>
	
<p><h4>If you are a new user , please register and create your user account. You need to know the your receipient user name to send email to him. Your receipient need to login to this server to get your email.</h4></p>
	
	
	
	<?php
	}
	if($chk=="registraion")
	{
	include_once('regis.php');
	}
	if($chk=="login")
	{
	include_once('login.php');
	}
	if($chk==5)
	{
	include_once('welcome.php');
	}
	if($chk=="about")
	{
	include_once('aboutus.php');
	}
	if($chk=="contact")
	{
	include_once('contactus.php');
	}

	if($chk=="about")
	{
	include_once('about.php');
	}
	
	
	?>	</td>
    <td width="130">
	<marquee direction="up" behavior="alternate" onmouseover="stop()" onmouseout="start()">
</marquee>
	</td>
  </tr>
  <tr>
    <td height="47" colspan="2">
	<h2 align="center">WEMAIL</h2>	</td>
  </tr>
</table>

</body>
</html>
