<?php 
     //connecting to sql db  
     require("config.php");

     // Create table if not exists
     $tbname = "ABC_ORDERS"; 
     $sqlcreatetb = "CREATE TABLE IF NOT EXISTS $tbname (
         ID INT PRIMARY KEY UNIQUE AUTO_INCREMENT, 
         PRODUCT_NAME VARCHAR(30) NOT NULL, 
         PRODUCT_PRICE INT NOT NULL, 
         USERNAME VARCHAR(30) NOT NULL,
         USER_ADDRESS VARCHAR(30) NOT NULL,
         USER_CONTACT VARCHAR(30) NOT NULL,
         QUANTITY INT NOT NULL
     )";

     if($conn->query($sqlcreatetb) === FALSE){
         echo "Error creating table" . $conn->error; 
     }
?>