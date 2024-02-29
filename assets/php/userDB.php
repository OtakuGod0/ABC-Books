<?php 
    require("config.php");
     
    //creating users table if not exists
    $tbname = "abc_users";
    $sqlcreatetb = "CREATE TABLE IF NOT EXISTS $tbname (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(30) NOT NULL,
        password VARCHAR(30) NOT NULL, 
        name VARCHAR(30) NOT NULL, 
        address VARCHAR(30) NOT NULL,
        contact VARCHAR(30) NOT NULL, 
        DOB DATE, 
        gender ENUM('Male', 'Female', 'Others') 
    )";

    if($conn->query($sqlcreatetb) === FALSE){
        echo "Error creating table". $conn->error . "<br>";
    }

     //default user
     $sqlinsert = "INSERT INTO $tbname (username, name, password, contact, address) VALUES('default', 'default', 'default' , 'xxxx', 'xxxxx')
     ON DUPLICATE KEY UPDATE username = 'default', name = 'default', password = 'default', contact = 'xxxx', address='xxxxx'";

     if($conn->query($sqlinsert) === FALSE){
       echo "Error insert default user" . $conn->error;
     }

?>