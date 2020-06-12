<br>
<?php
include_once('connection.php');
error_reporting(1);
$id=$_SESSION['sid'];
$op=$_POST['op'];
$np=$_POST['np'];
$cp=$_POST['cp'];
if(isset($_POST['chngP']))
{
	if($op=="" || $np=="" || $cp=="")
	{
	$err="Enter the below details";
	}
	else
	{
		$sql="select * from userinfo where user_name ='$id'";
		$d=mysqli_query($con,$sql);
		list($a,$b,$c)=mysqli_fetch_array($d);
		if($c==$op)
		{
			if($np==$cp)
			{
			$sql="update userinfo set password='$np' where user_name='$id'";
		$d=mysqli_query($sql);
		echo "Password updated...";
			}
			
			else
			{
			echo "New password doesn't match to confirm password";
			}
		}
		else
		{
		echo "Wrong old password";
		}
	}
		
}
?><style>.button {  border-radius: 4px;  background-color: #660066;  border: none;  color: #FFFFFF;  text-align: center;  font-size: 18px;  padding: 10px;  width: 250px;  transition: all 0.5s;  cursor: pointer;  margin: 5px;}.button {  cursor: pointer;  display: inline-block;  position: relative;  transition: 0.5s;}.button :after {  content: '\00bb';  position: absolute;  opacity: 0;  top: 0;  right: -20px;  transition: 0.5s;}.button:hover  {  padding-right: 25px;}.button:hover  {	background: #0000ff;color: #ffffff;   opacity: 1;  right: 0;}</style>
<body>
<form method="post">
<table class='table'>
  <tr>
  <center><font color="red"><?php echo $err; ?></font></center>
    <th width="173" scope="row">Old Password </th>
    <td width="176">
		<input type="password" class="form-control" name="op"/>
	</td>
  </tr>
  <tr>
    <th scope="row">New Password </th>
    <td>
			<input type="password" class="form-control" name="np"/>
	</td>
  </tr>
  <tr>
      <th scope="row">Confirm Password </th>
    <td><input type="password" class="form-control" name="cp"/></td>
  </tr>
<tr>
    <td colspan="2" align="center">
	<center><input type="submit" name="chngP" class="button" value="Change Password"/></center></td>
  </tr>
  
</table>
</form>
</body>
