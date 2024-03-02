<?php
$server = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($server, $username, $password);
if ($conn->connect_error) {
    die("Connection Error: " . $conn->connect_error);
}

$dbname = "abc_books";
$sqlcreatedb = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sqlcreatedb) === FALSE) {
    echo "Error creating database" . $conn->error . "<br>";
}

$conn->select_db($dbname);

//displaying errors if any
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


?>