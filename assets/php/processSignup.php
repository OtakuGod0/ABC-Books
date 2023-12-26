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

    $tbname = "abc_users";
    $sqlcreatetb = "CREATE TABLE IF NOT EXISTS $tbname (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(30) NOT NULL,
        password VARCHAR(30) NOT NULL, 
        name VARCHAR(30) NOT NULL, 
        email VARCHAR(30) NOT NULL,
        DOB DATE, 
        gender ENUM('Male', 'Female', 'Others') NOT NULL
    )";

    if($conn->query($sqlcreatetb) === true){
        echo "Table create sucessfully <br>";
    }
    else {
        echo "Error creating table". $conn->error . "<br>";
    }
    
    if($_SERVER["REQUET_METHOD"] == "POST"){
        $name = $_POST["firstname"] + $_POST("lastname");
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];
        $dob = $_POST["dob"];

        $sqlinsert = "INSERT INTO $tbname (name, username, password, email, gender, dob) VALUES ($name, $username, $password, $email, $gender, $dob) ";
        if($conn->query($sqlinsert) === true){
            echo "Data inserted successfuly";
        }
        else {
            echo "Error inserting data". $conn->error . "<br>";
        }
        
    }
    
?>
    