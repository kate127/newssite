<?php
// Connection

$servername = "kmiller8";
$username = "kmiller8";
$password = "kmiller8";
$dbname = "kmiller8";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>