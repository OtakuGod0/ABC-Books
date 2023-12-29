<?php
$server = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($server, $username, $password);
    if ($conn->connect_error) {
        die("Connection Error: ". $conn->connect_error);
    } 
    
    $dbname = "abc_books";
    $sqlcreatedb = "CREATE DATABASE IF NOT EXISTS $dbname";
    if($conn->query($sqlcreatedb) === true){
        echo "Database create successfully <br>";
    }
    else {
        echo "Error creating database". $conn->error . "<br>";
    }

    $conn->select_db($dbname);

?>