<?php 
    require("config.php");
    require("productsDB.php");

    $productId = $_POST["id"];
    $productName = $_POST["name"];
    $productPrice = $_POST["price"];
    $stockQuantity = $_POST["stock_quantity"];
    $productCategory = $_POST["category"];
    $productPic = $_POST["product_pic"];

    $sqlupdate = "UPDATE $tbname 
                  SET NAME = '$productName', 
                      PRICE = '$productPrice', 
                      STOCK_QUANTITY = '$stockQuantity', 
                      CATEGORY = '$productCategory', 
                      PRODUCT_PIC = '$productPic'
                  WHERE ID = $productId";

    if ($conn->query($sqlupdate)) {
        header("Location: ../../sub-pages/products_DB.php");
        exit;
    } else {
        echo "Error updating product: " . $conn->error;
    }
?>
