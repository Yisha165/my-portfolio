<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mylogin";
// Connect to the database
$connection = mysqli_connect($server, $username, $password, $dbname);

if (!$connection) {
    // Display an error message if the connection fails
    die("Error: " . mysqli_connect_error());
} else {
    echo "Connection OK";
}
?>