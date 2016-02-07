<?php
session_start();
include "connect.php";

$USERNAME = trim($_POST['username']);
$PASSWORD = trim($_POST['password']);



//$PASSWORD = password_hash($PASSWORD, PASSWORD_DEFAULT);


$query = mysql_query("select password from user where username='$USERNAME'", $connection) or die();
$row = mysql_fetch_array($query) or die(mysql_error());
if(password_verify($PASSWORD, $row['password']))
{
	echo "ok";
	$_SESSION['user_session'] = $USERNAME;
	//header("location: profile.php");
}
else{
	echo "Invalid Username or password";
	
}


?>