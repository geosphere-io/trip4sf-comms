<?php
header('Location: survey.php');
include 'dbconnect.php';

$name = $_POST['name'];
$address_line_1 = $_POST['address_line_1'];
$address_line_2 = $_POST['address_line_2'];
$satisfaction_level = $_POST['satisfaction_level'];
$message = $_POST['message'];

$query = "INSERT INTO survey_responses (name, address_line_1, address_line_2, satisfaction_level, message) VALUES ('$name', '$address_line_1', '$address_line_2','$satisfaction_level', '$message')";

$result = mysql_query( $query, $conn );

if(! $result ) {
   die('Error sending message: ' . mysql_error());
}

echo "Thank you for your message!";

mysql_close($conn);
?>