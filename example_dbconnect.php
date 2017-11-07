<?php

$dbhost = 'localhost:3000';
$dbuser = 'INSERT_DB_USER';
$dbpass = 'INSERT_DB_PASS';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

if(! $conn ) {
   die('Could not connect: ' . mysql_error());
}
mysql_select_db('INSERT_DB_NAME');

?>
