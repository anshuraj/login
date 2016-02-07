<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'login');
define('DB_USER', 'root');
define('DB_PASSWORD', 'anshu');

$connection = @mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Failed to connect to MYSQL" . mysql_error());
$db = mysql_select_db(DB_NAME, $connection) or die("Failed to connect to database" . mysql_error());

?>