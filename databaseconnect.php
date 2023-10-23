<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Local MAMMP Server
$servername = "localhost";
$username = "root";
$password = "root";
$database = "american_staircrafters";

// Hostmonster SQL Server
// $servername = "localhost";
// $username = "ameridg3_jrmuller1027";
// $password = "Sprint#05";
// $database = "ameridg3_contact";
 
// Create connection
$connection = mysqli_connect($servername, $username, $password, $database);
 
// Check connection
 
if (!$connection) {
 
    die("Connection failed: " . mysqli_connect_error());

} else {
    echo "<script>";
    echo "console.log('Database connection successful')";
    echo "</script>";
}
// mysqli_close($connection);
?>