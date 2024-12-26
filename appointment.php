<?php
include 'connect.php';
$user_name=$_POST['user_name'];
$user_email=$_POST['user_email'];
$user_phone_number=$_POST['user_phone_number'];
// $user_optradio=$_POST['user_optradio'];
$optradio=$_POST['optradio'];
$user_select_slot=$_POST['user_select_slot'];
$user_Date=$_POST['user_Date'];
// echo $user_name;

// echo $from."<br>";
// echo $ip."<br>";
// echo $date."<br>";
// echo "<pre>";
// print_r($_POST);
// die();

// echo" hello";
// die ();
$mysqli -> query("INSERT INTO appointment_db (id, Name, Email, Phone_number,gender, select_slot,calendre) VALUES ('$user_name', '$user_email', '$user_phone_number', '$optradio','$user_select_slot','$user_Date')");


?>