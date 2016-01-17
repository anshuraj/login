<?php

include "connect.php";

$connection = @mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Failed to connect to MYSQL" . mysql_error());
$db = mysql_select_db(DB_NAME, $connection) or die("Failed to connect to database" . mysql_error());

$USERNAME = $_POST['username'];
$NAME = $_POST['name'];
$PASSWORD = $_POST['password'];
$EMAIL = $_POST['email'];

$PASSWORD = password_hash($PASSWORD, PASSWORD_DEFAULT);

$create = mysql_query("INSERT INTO user (username, name, email, password, created) VALUES ('$USERNAME', '$NAME', '$EMAIL', '$PASSWORD', NOW())" ) or die(mysql_error());
if($create){
	echo "<h3>Account successfully created</h3>";
	header("location: profile.html");
}
else {
	echo "Failed";
	echo $create ;
}

?>