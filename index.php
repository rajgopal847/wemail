<?php 
include('header.php');
?>
	
<div class="jumbotron jumbotron-fluid text-center" style="background-image: url(https://images.pexels.com/photos/1591062/pexels-photo-1591062.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260)">
			  <div class="container">
				<h1 class="display-6">WELCOME TO WEMAIL</h1><br>
				<h2 >A SIMPLE EMAIL SOLUTIONS</h2>
				  <h2>FOR</h2>
				  <h2>SMALL BUSINESSES</h2><br><br>

			  </div>
			</div>
			
			
			<center><p id="text">If you are a new user , please register and create your user account. You need to know the your recipient user name to send email to him. Your recipient need to login to this server to get your email.</p></center>
	
	
	  <tr>
    <td height="613" valign="top" style="padding:10px">
	
	<?php
	@$chk=$_REQUEST['chk'];
	if($chk=="")
	{
	?>	<br>
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
  <!--<tr>
    <td height="47" colspan="2">
	<h2 align="center">WEMAIL</h2>	</td>
  </tr>-->
</table>

<?php include('footer.php') ?>
</body>
</html>
