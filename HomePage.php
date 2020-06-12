<?php
error_reporting(0);
session_start();
if($_SESSION['sid']=="")
{
  header('Location:index.php');
}
$id=$_SESSION['sid'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}


#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>WEMAIL</title>
</head>



<?php include('header.php'); ?>
<?php include('connection.php'); ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #4CAF50;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
</head>
<body>
<?php
		@$id=$_SESSION['sid'];
		@$chk=$_REQUEST['chk'];
		@$value=$_REQUEST['conTheme'];
			if($chk=="vprofile")
			{?>
			
				<div class="sidebar">
				<a href="HomePage.php?chk=Compose">Compose</a>
				<a href="HomePage.php?chk=Inbox">Inbox</a>
				<a href="HomePage.php?chk=Sent">Sent</a>
				<a href="HomePage.php?chk=Trash">Trash</a>
				<a href="HomePage.php?chk=Draft">Draft</a>
				<a href="HomePage.php?chk=Changetheme">Theme</a>
				<a href="HomePage.php?chk=ChangePass">Change Password</a>
				<a class="active" href="HomePage.php?chk=vprofile">Profile</a>
				<a href="HomePage.php?chk=logout">Logout</a>
				</div>

			<?php }
			elseif($chk=="Compose")
			{?>
				<div class="sidebar">
				<a class="active" href="HomePage.php?chk=Compose">Compose</a>
				<a href="HomePage.php?chk=Inbox">Inbox</a>
				<a href="HomePage.php?chk=Sent">Sent</a>
				<a href="HomePage.php?chk=Trash">Trash</a>
				<a href="HomePage.php?chk=Draft">Draft</a>
				<a href="HomePage.php?chk=Changetheme">Theme</a>
				<a href="HomePage.php?chk=ChangePass">Change Password</a>
				<a href="HomePage.php?chk=vprofile">Profile</a>
				<a href="HomePage.php?chk=logout">Logout</a>
				</div>
			<?php }
			elseif($chk=="Sent")
			{?>
				<div class="sidebar">
				<a href="HomePage.php?chk=Compose">Compose</a>
				<a href="HomePage.php?chk=Inbox">Inbox</a>
				<a class="active" href="HomePage.php?chk=Sent">Sent</a>
				<a href="HomePage.php?chk=Trash">Trash</a>
				<a href="HomePage.php?chk=Draft">Draft</a>
				<a href="HomePage.php?chk=Changetheme">Theme</a>
				<a href="HomePage.php?chk=ChangePass">Change Password</a>
				<a href="HomePage.php?chk=vprofile">Profile</a>
				<a href="HomePage.php?chk=logout">Logout</a>
				</div>
			<?php }
			elseif($chk=="Trash")
			{?>			  
				<div class="sidebar">
				  <a href="HomePage.php?chk=Compose">Compose</a>
				  <a href="HomePage.php?chk=Inbox">Inbox</a>
				  <a href="HomePage.php?chk=Sent">Sent</a>
				  <a class="active" href="HomePage.php?chk=Trash">Trash</a>
				  <a href="HomePage.php?chk=Draft">Draft</a>
				  <a href="HomePage.php?chk=Changetheme">Theme</a>
				  <a href="HomePage.php?chk=ChangePass">Change Password</a>
				  <a href="HomePage.php?chk=vprofile">Profile</a>
				  <a href="HomePage.php?chk=logout">Logout</a>
				</div>
			<?php }
			elseif($chk=="Inbox")
			{?>
				<div class="sidebar">
				<a href="HomePage.php?chk=Compose">Compose</a>
				<a class="active" href="HomePage.php?chk=Inbox">Inbox</a>
				<a href="HomePage.php?chk=Sent">Sent</a>
				<a href="HomePage.php?chk=Trash">Trash</a>
				<a href="HomePage.php?chk=Draft">Draft</a>
				<a href="HomePage.php?chk=Changetheme">Theme</a>
				<a href="HomePage.php?chk=ChangePass">Change Password</a>
				<a href="HomePage.php?chk=vprofile">Profile</a>
				<a href="HomePage.php?chk=logout">Logout</a>
				</div>
			<?php }
			elseif($chk=="setting")
			{?>
				<div class="sidebar">
				<a href="HomePage.php?chk=Compose">Compose</a>
				<a href="HomePage.php?chk=Inbox">Inbox</a>
				<a href="HomePage.php?chk=Sent">Sent</a>
				<a href="HomePage.php?chk=Trash">Trash</a>
				<a href="HomePage.php?chk=Draft">Draft</a>
				<a href="HomePage.php?chk=Changetheme">Theme</a>
				<a href="HomePage.php?chk=ChangePass">Change Password</a>
				<a href="HomePage.php?chk=vprofile">Profile</a>
				<a href="HomePage.php?chk=logout">Logout</a>
				</div>
			<?php }
			elseif($chk=="ChangePass")
			{?>
				<div class="sidebar">
				<a href="HomePage.php?chk=Compose">Compose</a>
				<a href="HomePage.php?chk=Inbox">Inbox</a>
				<a href="HomePage.php?chk=Sent">Sent</a>
				<a href="HomePage.php?chk=Trash">Trash</a>
				<a href="HomePage.php?chk=Draft">Draft</a>
				<a href="HomePage.php?chk=Changetheme">Theme</a>
				<a class="active" href="HomePage.php?chk=ChangePass">Change Password</a>
				<a href="HomePage.php?chk=vprofile">Profile</a>
				<a href="HomePage.php?chk=logout">Logout</a>
				</div>
			<?php }
			elseif($chk=="Changetheme")
			{?>
			
<div class="sidebar">
  <a href="HomePage.php?chk=Compose">Compose</a>
  <a href="HomePage.php?chk=Inbox">Inbox</a>
  <a href="HomePage.php?chk=Sent">Sent</a>
  <a href="HomePage.php?chk=Trash">Trash</a>
  <a href="HomePage.php?chk=Draft">Draft</a>
  <a class="active" href="HomePage.php?chk=Changetheme">Theme</a>
  <a href="HomePage.php?chk=ChangePass">Change Password</a>
  <a href="HomePage.php?chk=vprofile">Profile</a>
  <a href="HomePage.php?chk=logout">Logout</a>
</div>
			<?php }
			elseif($chk=="Draft")
			{?>
			<div class="sidebar">
  <a href="HomePage.php?chk=Compose">Compose</a>
  <a href="HomePage.php?chk=Inbox">Inbox</a>
  <a href="HomePage.php?chk=Sent">Sent</a>
  <a href="HomePage.php?chk=Trash">Trash</a>
  <a class="active" href="HomePage.php?chk=Draft">Draft</a>
  <a href="HomePage.php?chk=Changetheme">Theme</a>
  <a href="HomePage.php?chk=ChangePass">Change Password</a>
  <a href="HomePage.php?chk=vprofile">Profile</a>
  <a href="HomePage.php?chk=logout">Logout</a>
</div>
			<?php }
				elseif($_GET['coninb']>0)
			{?>
		     <div class="sidebar">
  <a href="HomePage.php?chk=Compose">Compose</a>
  <a href="HomePage.php?chk=Inbox">Inbox</a>
  <a href="HomePage.php?chk=Sent">Sent</a>
  <a href="HomePage.php?chk=Trash">Trash</a>
  <a href="HomePage.php?chk=Draft">Draft</a>
  <a href="HomePage.php?chk=Changetheme">Theme</a>
  <a href="HomePage.php?chk=ChangePass">Change Password</a>
  <a href="HomePage.php?chk=vprofile">Profile</a>
  <a href="HomePage.php?chk=logout">Logout</a>
</div>
			<?php }
			elseif($chk==null)
			{?>
		     <div class="sidebar">
  <a href="HomePage.php?chk=Compose">Compose</a>
  <a class="active" href="HomePage.php?chk=Inbox">Inbox</a>
  <a href="HomePage.php?chk=Sent">Sent</a>
  <a href="HomePage.php?chk=Trash">Trash</a>
  <a href="HomePage.php?chk=Draft">Draft</a>
  <a href="HomePage.php?chk=Changetheme">Theme</a>
  <a href="HomePage.php?chk=ChangePass">Change Password</a>
  <a href="HomePage.php?chk=vprofile">Profile</a>
  <a href="HomePage.php?chk=logout">Logout</a>
</div>
			<?php }

			elseif($chk=='DraftView')
			{?>
		     <div class="sidebar">
  <a href="HomePage.php?chk=Compose">Compose</a>
  <a href="HomePage.php?chk=Inbox">Inbox</a>
  <a href="HomePage.php?chk=Sent">Sent</a>
  <a href="HomePage.php?chk=Trash">Trash</a>
  <a class="active" href="HomePage.php?chk=Draft">Draft</a>
  <a href="HomePage.php?chk=Changetheme">Theme</a>
  <a href="HomePage.php?chk=ChangePass">Change Password</a>
  <a href="HomePage.php?chk=vprofile">Profile</a>
  <a href="HomePage.php?chk=logout">Logout</a>
</div>
			<?php }


			
		?>

<?php
@$value=$_REQUEST['conTheme'];
if($value!='')
{
$_SESSION['conTheme'] = $_GET['conTheme'];
//include_once("compose.php");
}
			
			

?>
<div class="content" style="background-image:url('theme/<?=
		$conTheme=$_SESSION['conTheme'];
			?>');">
 <?php
		@$id=$_SESSION['sid'];
		@$chk=$_REQUEST['chk'];
		@$value=$_REQUEST['conTheme'];
		@$value1=$_REQUEST['coninb'];
			if($chk=="vprofile")
			{
			include_once("editProfile.php");
			}
			elseif($chk=="Compose")
			{
			include_once('compose.php');
			}
			elseif($chk=="Sent")
			{
			include_once('sent.php');
			}
			elseif($chk=="Trash")
			{
			include_once('trash.php');
			}
			elseif($chk=="Inbox")
			{
			include_once('inbox.php');
			}
			elseif($chk=="setting")
			{
			include_once('setting.php');
			}
			elseif($chk=="ChangePass")
			{
			include_once('ChangePass.php');
			}
			elseif($chk=="Changetheme")
			{
			 include_once('Changetheme.php');
			}
			elseif($chk=="Draft")
			{
			include_once('draft.php');
			}
			elseif($chk=='DraftView')
			{
		     include_once('inboxView.php');
			}
			elseif($chk=='logout')
			{
				session_destroy();
				echo "<script>alert('Logout Successfull');window.location='login.php'</script>";
		        
			}
			elseif($value1>0)
			{
		     //include_once('compose.php');
			}
			elseif($chk==null)
			{
		     include_once('inbox.php');
			}

			
		?>
		
		<!--inbox -->
		<?php
		$id=$_SESSION['sid'];
		@$coninb=$_GET['coninb'];
			
			if($coninb)
			{
			$sql="SELECT * FROM usermail where rec_id='$id' and mail_id='$coninb'";
$dd=mysqli_query($con,$sql);
			$row=mysqli_fetch_object($dd);
			echo "<br><h4><center>Sender Name :".$row->sen_id;
			echo "<br><h4><center>Reciever Name :".$row->rec_id;
			echo "<br><h4><center>Subject :".$row->sub."<br/>";
			echo "Message :".$row->msg;
			}
			
			
	@$cheklist=$_REQUEST['ch'];
	if(isset($_GET['delete']))
	{
		foreach($cheklist as $v)
		{
		
		$d="DELETE from usermail where mail_id='$v'";
		mysqli_query($con,$d);
		}
		echo "msg deleted";
	}
			
		?>
		
		
		
	<!--sent box-->
	<br><br><h2><center>
	<?php
		$id=$_SESSION['sid'];
		@$consent=$_GET['consent'];
			
			if($consent)
			{
			$sql="SELECT * FROM usermail where sen_id='$id' and mail_id='$consent'";
$dd=mysqli_query($con,$sql);
			$row=mysql_fetch_object($dd);
			echo "<br><h4><center>Sender Name : ".$row->sen_id;
			echo "<br><h4><center>Reciever Name : ".$row->rec_id;
			echo "<br><h4><center>Subject :".$row->sub."<br/>";
			echo "Message :".$row->msg;
			}
			
		?></h2></center><?php	
	@$cheklist=$_REQUEST['ch'];
	if(isset($_GET['delete']))
	{
		foreach($cheklist as $v)
		{
		$d="DELETE from usermail where mail_id='$v'";
		mysqli_query($con,$d);
		}
		echo "msg deleted";
	}
			
		?>	
</div>

</body>
</html>



<!-- <br><table id="customers" width="100%" border="1" align="center">
  
  <tr>

  </tr>
  <tr>
    <td height="38" colspan="3">
    	<div class="row">
    		<div class="col-md-2"></div>
    	</div>
    	<input type="text" class="form-control" placeholder="Search.." name="search">
		<a style="margin-left:50px"  href="HomePage.php?chk=changetheme">CHANGE THEME</a>
		<a style="margin-left:50px"  href="HomePage.php?chk=chngPass">CHANGE PASSWORD</a>
		
		<a style="margin-left:50px" href="HomePage.php?chk=vprofile">EDIT YOUR PROFILE</a>
			
		<a style="margin-left:50px" href="HomePage.php?chk=logout">LOGOUT</a> 
		
      
		
	</td>
  </tr>
  <tr>
    <td width="158" height="572" valign="top">
	<div style="margin-top:50px"><a href="HomePage.php?chk=compose">COMPOSE</a><br/><br/>
	<a href="HomePage.php?chk=inbox">INBOX</a><br/><br/>
	<a href="HomePage.php?chk=sent">SENT</a><br/><br/>
	<a href="HomePage.php?chk=trash">TRASH</a><br/><br/>
	<a href="HomePage.php?chk=draft">DRAFT</a>
	
	</div>
	</td>
    <td width="660" valign="top">
			
			
		
		
	</td>
    <td width="135">&nbsp;</td>
  </tr>

</table>
 -->
</body>
</html>

