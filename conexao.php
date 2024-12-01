<?php
$servername = "localhost";
$database = "u788874988_cafeteria";
$username = "u788874988_admin";
$password = "Admin@123";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else {
    //echo "Connected successfully";
}

?>