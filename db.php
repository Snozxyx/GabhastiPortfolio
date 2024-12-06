<?php
$servername = "localhost"; // or your server name
$username = "root"; // replace with your MySQL username
$password = ""; // replace with your MySQL password
$dbname = "gabhasti"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
