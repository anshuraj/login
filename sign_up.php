<?php

include "connect.php";

$USERNAME = $_POST['username'];
$NAME = $_POST['name'];
$PASSWORD = $_POST['password'];
$EMAIL = $_POST['email'];

$PASSWORD = password_hash($PASSWORD, PASSWORD_DEFAULT);

$create = mysql_query("INSERT INTO user (username, name, email, password, created) VALUES ('$USERNAME', '$NAME', '$EMAIL', '$PASSWORD', NOW())" );// or die(mysql_error());
if($create){
	echo "ok";
	//header("location: profile.html");
}
else {
	echo "fail";
	//echo $create ;
}

?>