<?php
session_start();
if(!isset($_SESSION['user_session']))
{
	header("Location: index.php");
}
include "connect.php";
$logged_user = $_SESSION['user_session'];
$query = mysql_query("select username from user where username='$logged_user'", $connection) or die();
$row = mysql_fetch_array($query) or die(mysql_error());

?>

<!DOCTYPE html >
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">	
<title>Profile</title>
</head>
<body>
<h1>VOila!!!!!</h1>

Welcome <?php echo $row['username']; ?>

</body>
</html>