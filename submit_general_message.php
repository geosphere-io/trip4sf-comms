<?php
header('Location: thankyou.php');
include 'dbconnect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$category = $_POST['category'];
$message = $_POST['message'];

$query = "INSERT INTO contact_us (name, email, phone, category, message) VALUES ('$name', '$email', '$phone', '$category', '$message')";

$result = mysql_query( $query, $conn );

if(! $result ) {
   die('Error sending message: ' . mysql_error());
}

echo "Thank you for your message!";

mysql_close($conn);
?>