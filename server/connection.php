<?php
$servername = "localhost";
$username = "root";
$password = "";  // Default is usually empty for XAMPP
$dbname = "ecommerce_app";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
