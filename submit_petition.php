<?php
header('Location: thankyou.php');
include 'dbconnect.php';

$name = $_POST['name'];
$address_line_1 = $_POST['address_line_1'];
$address_line_2 = $_POST['address_line_2'];
$request_type = $_POST['request_type'];
$message = $_POST['message'];

$query = "INSERT INTO petitions (name, address_line_1, address_line_2, request_type, message) VALUES ('$name', '$address_line_1', '$address_line_2','$request_type', '$message')";

$result = mysql_query( $query, $conn );

if(! $result ) {
   die('Error sending message: ' . mysql_error());
}

echo "Thank you for your message!";

mysql_close($conn);
?>