<?php 
     //connecting to sql db  
     require("config.php");

     // Create table if not exists
     $tbname = "ABC_ORDERS"; 
     $sqlcreatetb = "CREATE TABLE IF NOT EXISTS $tbname (
         ID INT PRIMARY KEY UNIQUE AUTO_INCREMENT, 
         PRODUCT_NAME VARCHAR(30) NOT NULL, 
         PRODUCT_ID INT, 
         CUSTOMER_ID INT,
         QUANTITY INT NOT NULL
     )";

     if($conn->query($sqlcreatetb) === FALSE){
         echo "Error creating table" . $conn->error; 
     }
?>