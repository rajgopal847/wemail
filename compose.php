<br><?php
include_once('connection.php');
@$to=$_POST['to'];
@$sub=$_POST['sub'];
@$msg=$_POST['msg'];
$file=$_FILES['file']['name'];

$id=$_SESSION['sid'];

if(@$_REQUEST['send'])
{
	if($to=="" || $sub=="" || $msg=="")
	{
	$err= "Enter the below details";
	}
	
	else
	{
	$d=mysqli_query($con,"SELECT * FROM userinfo where user_name='$to' OR email = '$to'");
	$row=mysqli_num_rows($d);
	if($row==1)
		{
		mysqli_query($con,"INSERT INTO `usermail`(`rec_id`, `sen_id`, `sub`, `msg`, `attachement`, `recDT`) values('$to','$id','$sub','$msg','',sysdate())");
		$err= "Message sent...";

		}
	else
		{
		$sub=$sub."--"."msg failed";
		mysqli_query($con,"INSERT INTO `usermail`(`mail_id`, `rec_id`, `sen_id`, `sub`, `msg`, `attachement`, `recDT`) values('$id','$id','$sub','$msg','',sysdate())");
		$err= "Message failed...";

		}	
	}
}	


if(@$_REQUEST['save'])
{
	if($sub=="" || $msg=="")
	{
	$err= "<font color='red'>fill subject and msg first</font>";
	}
	
	else
	{
	$query="INSERT INTO `draft`(`user_id`, `sub`, `attach`, `msg`, `date`) VALUES ('$id','$sub','$file','$msg',sysdate())";
	mysqli_query($con,$query);
	$err= "Message saved...";
	}
}	

	
?>
<head><style>.button {  border-radius: 4px;  background-color: #660066;  border: none;  color: #FFFFFF;  text-align: center;  font-size: 18px;  padding: 10px;  width: 100px;  transition: all 0.5s;  cursor: pointer;  margin: 5px;}.button {  cursor: pointer;  display: inline-block;  position: relative;  transition: 0.5s;}.button :after {  content: '\00bb';  position: absolute;  opacity: 0;  top: 0;  right: -20px;  transition: 0.5s;}.button:hover  {  padding-right: 25px;}.button:hover  {	background: #0000ff;color: #ffffff;   opacity: 1;  right: 0;}</style>
	<style>
	input[type=text]
	{
	width:200px;
	height:35px;
	}	.buttonStyle:hover { background: #0000ff;color: #ffffff; font-size="12px";}
</style>
</head>
<body>
<form method="post" enctype="multipart/form-data">
<table width="100%" class="table">
  <center><font color="red"><?php echo $err; ?></font></center>
  <tr>
    <th width="213" height="35" scope="row">To</th>
    <td width="277">
	<input type="text" class="form-control" name="to" />	</td>
  </tr>
  <tr>
    <th height="36" scope="row">Cc</th>
    <td><input type="text" class="form-control" name="cc"/></td>
  </tr>
  <tr>
    <th height="36" scope="row">Subject</th>
    <td><input type="text" class="form-control" name="sub" /></td>
  </tr>
  <tr>
    <th height="36" scope="row">Upload your file</th>
    <td><input type="file" name="file" id="file"/></td>
  </tr>
  <tr>
    <th height="52" scope="row">Message</th>
    <td><textarea rows="8" class="form-control" cols="40" name="msg"></textarea></td>
  </tr>
  <tr>
    <th height="35" colspan="4" scope="row">	
	<center><input type="submit" class="button" name="send"  value="Send" class="buttonStyle"/>
	<input type="submit" name="save" class="button" value="Save" class="buttonStyle"/>
	<input type="reset" value="Cancel" class="button" class="buttonStyle"/></center>	</th>
  </tr>
</table>

</body>
</form>
</html>
