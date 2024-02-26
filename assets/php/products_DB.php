<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require("config.php");
        
        $tbname = "abc_products"; 
        $sqlcreatetb = "CREATE TABLE IF NOT EXISTS PRODUCTS (
            ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL, 
            NAME VARCHAR(30) NOT NULL, 
            PRIZE VARCHAR(30) NOT NULL, 
            STOCK_QUANTITY INT
            )"; 

        if($conn->query($sqlcreatetb){
            echo "Table created successfully";
        } eles{
            echo "Error creating table" . $conn->error . "<br>"; 
        }
    ?>


</body>
</html>