<?php
include "connect.php";

$connection = @mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Failed to connect to MYSQL" . mysql_error());
$db = mysql_select_db(DB_NAME, $connection) or die("Failed to connect to database" . mysql_error());

$USERNAME = $_GET['username'];
$PASSWORD = $_GET['password'];

session_start();
$_SESSION['login_user'] = $USERNAME ;

//$PASSWORD = password_hash($PASSWORD, PASSWORD_DEFAULT);


$query = mysql_query("select password from user where username='$USERNAME'", $connection) or die();
$row = mysql_fetch_array($query) or die(mysql_error());
if(password_verify($PASSWORD, $row['password']))
{
	//echo '<h4>Login Successfull';
	print "Login";
	header("location: profile.html");
}
else{
	//echo '<h4>Invalid Username or password';
	print "Invalid Username or password";
	header("location: i.html");
}


/*echo $USERNAME;
echo $PASSWORD;


echo "<br>\n logedin user ".$_SESSION['login_user'];

echo "<br>\n" . hash("sha256", "anshu");



$pas = '01234567';
$a = password_hash($pas, PASSWORD_DEFAULT);

$hash = '$2y$10$H4Pd4x8RL/MTAqsI8U1sdf2HeWO8d7XBDiLMXeBbdr/byFdXai5UKQGK';

echo "<br>".hash("sha512", "anshu");


if (password_verify($pas, $a)) {
    echo '<br><br>Password is valid!';
} else {
    echo '<br><br>Invalid password.';
}
*/

?>