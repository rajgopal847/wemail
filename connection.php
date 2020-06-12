<?php
ob_start();
$con= mysqli_connect("localhost","queper_main","Queper515253@","queper_mailserver") or die (mysqli_error());session_start();
//mysqli_select_db("server",$con);
?>