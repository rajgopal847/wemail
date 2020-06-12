<?php
session_start();
$id=$_SESSION['sid'];
include_once('connection.php');

if(isset($_POST['delete'])) 
{

foreach($_POST['ch'] as $v)
{
//echo $v;
$sql=mysqli_query($con,"SELECT * FROM usermail where mail_id='$v'");
while($dd=mysqli_fetch_array($sql))
	{
		
	  mysqli_query($con,"DELETE FROM usermail where mail_id='$v'");

	}
	
}
echo "<script>alert('msg deleted');window.location='HomePage.php?chk=sent'</script>";
}
?>