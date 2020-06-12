<?php
session_start();
$id=$_SESSION['sid'];
include_once('connection.php');

if(isset($_POST['delete'])) 
{

foreach($_POST['ch'] as $v)
{
//echo $v;
$sql=mysqli_query($con,"SELECT * FROM trash where rec_id='$id' and trash_id='$v'");
while($dd=mysqli_fetch_array($sql))
	{
		
	   mysqli_query($con,"DELETE FROM trash where rec_id='$id' AND trash_id='$v'");

	}
	
}
echo "<script>alert('msg deleted');window.location='HomePage.php?chk=trash'</script>";
}
?>