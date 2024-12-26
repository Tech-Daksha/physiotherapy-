<?php
// Replace 'root' and '' with your MySQL username and password
$mysqli = new mysqli("localhost", 'root', "", 'roshanra_roshan_db');

// Check connection
if ($mysqli->connect_errno) {
    // Output the error message if the connection fails
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
} else {
    // echo 'Connected successfully';
}
?>
