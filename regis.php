<?php  include('header.php') ?>

<?php
include_once('connection.php');
error_reporting(1);
$y=$_POST['y'];
$m=$_POST['m'];
$d=$_POST['d'];
$dob=$y."-".$m."-".$d;
$ch=$_POST['ch'];
$hobbies=implode(",",$ch);
$imgpath=$_FILES['file']['name'];
$un=$_POST['un'];
if($_POST['reg'])
{
	if($_POST['un']=="" || $_POST['pwd']=="")
	{
	$err="fill your user name first";
	}
	else
	{
	$r=mysqli_query($con,"SELECT * FROM userinfo where user_name='{$_POST['un']}'");
	$t=mysqli_num_rows($r);
		if($t==1)
		{
		$err="user aleready exists choose another";
		}
		else
		{
		mysqli_query($con,"INSERT INTO `userinfo`(`user_name`, `password`, `mobile`, `email`, `gender`, `hobbies`, `dob`, `image`) values('{$_POST['un']}','{$_POST['pwd']}','{$_POST['mob']}','{$_POST['eid']}','{$_POST['gen']}','$hobbies','$dob',
		'$imgpath')");
		mkdir("userImages/$un");
		move_uploaded_file($_FILES["file"]["tmp_name"], "userImages/$un/" . $_FILES["file"]["name"]);
		$_SESSION['sname']=$_POST['un'];
		//header('location:index.php?chk=5');
		echo "<script>window.location='index.php?chk=5'</script>";
		}
	}
}

?>
<style>
	table{padding:5px;border-radius:5px}
	td{padding:10px}
	.buttonStyle:hover { background: #0000ff;
color: #ffffff; 
font-size="12px";}
</style>
<style>
.button {
  border-radius: 4px;
  background-color: #660066;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 18px;
  padding: 10px;
  width: 100px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button :after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover  {
  padding-right: 25px;
}

.button:hover  {
	background: #0000ff;
color: #ffffff; 
  opacity: 1;
  right: 0;
}
</style>
<form method="post" enctype="multipart/form-data"><br><br>
<br><br><h2 style= "margin-top: -50px;" align="center"> Sign Up</h2><style>p.small {  line-height: 2;}</style><br>
<table  class = "table" style = "width:65%;" align="center">
  <font color="#FF0000"><center><?php echo $err; ?></center></font>
  <tr>
    <td width="204" height="47">Enter Your User Name <font color="red">*</font> </td>
    <td width="218"><input type="text" name="un" required/></td>
  </tr>
  <tr>
    <td height="39">Enter Your Password <font color="red">*</font> </td>
    <td><input type="password" name="pwd" required/></td>
  </tr>
  <tr>
    <td height="47">Enter Your Mobile <font color="red">*</font>  </td>
    <td><input type="text" name="mob"  required/></td>
  </tr>
  <!--<tr>
    <td height="39">Enter Your Email </td>
    <td><input type="email" name="eid"/></td>
  </tr>
  <tr>-->
    <td height="33">Select Your Gender </td>
    <td>
		Male<input type="radio" class="buttonStyle" name="gen" value="m"/>
		Female<input type="radio" class="buttonStyle" name="gen" value="f"/>
	</td>
  </tr>
 <!-- <tr>
    <td height="41">Select Your Hobbies </td>
    <td>
		Cricket<input type="checkbox" name="ch[]" value="cricket"/>
		Football<input type="checkbox" name="ch[]" value="football"/>
		Reading<input type="checkbox" name="ch[]" value="reading"/>
	</td>
  </tr> -->
  <tr>
    <td height="38">Select Your DOB <font color="red">*</font>  </td>
    <td>
		<select name="y" class="buttonStyle" required>
			<option value="">Year</option>
			<?php
			for($i=1900;$i<=2013;$i++)
			{
			echo "<option value='$i'>$i</option>";
			}
			?>
		</select>
		<select name="m" class="buttonStyle" required>
			<option value="">Month</option>
			<?php
			for($i=1;$i<=12;$i++)
			{
			echo "<option value='$i'>$i</option>";
			}
			?>
		</select>
		<select name="d" class="buttonStyle" required>
			<option value="">Date</option>
			<?php
			for($i=1;$i<=31;$i++)
			{
			echo "<option value='$i'>$i</option>";
			}
			?>
		</select>
	</td>
  </tr>
  <tr>
    <td height="55">Upload Your Picture</td>
    <td>
	<input type="file" name="file" class="buttonStyle" />
	</td>
  </tr>
 <!-- <tr>
    <td height="36">Insert Your image</td>
    <td>
	
	</td>
  </tr>-->
  <tr>
    <td height="30">I accept terms & conditions<font color="red">*</font> </td>
    <td>
	<input type="checkbox" name="checklist" class="buttonStyle" required/>
	</td>
  </tr>
  <tr>
    <td align="center" colspan="2">
	<input type="submit" class="button" name="reg" value="Register"/>
	<input type="reset" class="button" value="Reset"/>
	</td>
  </tr>
</table>
</form>