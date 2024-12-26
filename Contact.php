<?php
include 'connect.php';
$user_name=$_POST['user_name'];
$user_email=$_POST['user_email'];
$user_phone_number=$_POST['user_phone_number'];

// echo $user_name;

// echo $from."<br>";
// echo $ip."<br>";
// echo $date."<br>";
// echo "<pre>";
// print_r($_POST);
// die();

// echo" hello";
// die ();
$mysqli -> query("INSERT INTO Appointment_db (Name, Email, phone_number) VALUES ('$user_name', '$user_email', '$user_phone_number')");

?>