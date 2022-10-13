<?php

$servername = "localhost";
$username = "group5";
$password = "QZBk9bG3MvxN";
$dbname = "group5";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}