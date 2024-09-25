<?php
$server = "localhost";
$username = "bluebird_user";
$password = "password";  // Make sure this is correct
$database = "bluebirdhotel";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("<script>alert('Connection Failed: " . mysqli_connect_error() . "')</script>");
}
?>
