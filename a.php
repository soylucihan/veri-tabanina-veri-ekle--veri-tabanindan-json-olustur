<?php
$servername = "localhost";
$database = "jsondeneme";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
echo "Connected successfully";
mysqli_query($conn,"SET NAMES UTF8");
}
?>