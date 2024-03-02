<?php 
    require("config.php");
    require("productsDB.php");

    $name = $_POST["name"];
    $price = $_POST["price"];
    $stock_quantity = $_POST["stock_quantity"];
    $category = $_POST["category"];
    $product_pic = $_POST["product_pic"];

    $sqlinsert = "INSERT INTO $tbname (NAME, PRICE, STOCK_QUANTITY, CATEGORY, PRODUCT_PIC) VALUES ('$name', $price, $stock_quantity, '$category', '$product_pic')";

    if($conn->query($sqlinsert) === FALSE) {
        echo "error inserting values" . $conn->error;
    }

    else{
        header("Location: ../../sub-pages/products_DB.php#products");
        exit;
    }

?>