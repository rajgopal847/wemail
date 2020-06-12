<br>
<?php
error_reporting(1);
$sid=$_SESSION['sid'];
include_once('connection.php');

$r=mysqli_query($con,"select * from userinfo where user_name='$sid'");
echo "<table class='table'>";
$row=mysqli_fetch_object($r);
$p=$row->password;
$m=$row->mobile;
$e=$row->email;
echo "<tr height='40'>";
echo "<td><b>Your userId :</td>";
echo "<td>".$row->user_jd."</td>";
echo "</tr>";

echo "<tr height='40'>";
echo "<td><b>Your username :</td>";
echo "<td>".$row->user_name."</td>";
echo "</tr>";

echo "<tr height='40'>";
echo "<td><b>Your Password :</td>";
echo "<td><input class = 'form-control' type='password'  name='' value='$p'/></td>";
echo "</tr>";

echo "<tr height='40'>";
echo "<td><b>Your Mobile :</td>";
echo "<td><input class = 'form-control' type='text'  name='' value='$m'/></td>";
echo "</tr>";



echo "<tr height='40'>";
echo "<td><b>Your gender is :</td>";
echo "<td> ".$row->gender."</td>";
echo "</tr>";



echo "<tr height='40'>";
echo "<td><b>Your DOB is :</td>";
echo "<td>".$row->dob."</td>";
echo "</tr>";

echo "<tr height='40'>";
echo "<td><b>Your Picture  :</td>";
echo "<td><img alt='image not upload' src='userImages/$id/$file' height='80' width='80'/></td>";
echo "</tr>";

echo "</table>";
?>
