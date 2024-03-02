<?php
require("config.php");

$tbname = "ABC_PRODUCTS";
$sqlcreatetb = "CREATE TABLE IF NOT EXISTS $tbname (
                ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                NAME VARCHAR(30) NOT NULL, 
                PRICE INT NOT NULL, 
                STOCK_QUANTITY INT, 
                CATEGORY ENUM('Writing', 'Paper', 'Organization', 'Correction', 'Measurement', 'Others') NOT NULL,
                PRODUCT_PIC VARCHAR(255) DEFAULT '/ABC-Books/assets/img/products-img/default-img.jpg'
                )";
if ($conn->query($sqlcreatetb) === FALSE) {
    echo "Error create tb" . $conn->error;
}

?>