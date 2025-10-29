<?php
$servername = "localhost";
$username = "root";   // default XAMPP user
$password = "";       // leave blank
$dbname = "user";  // your database name

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
