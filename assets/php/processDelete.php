<?php 
require("config.php");
require("productsDB.php");

if (isset($_POST["product_id"])) {
    $id = $_POST["product_id"]; 

    $sqldelete = "DELETE FROM $tbname WHERE ID = $id"; 

    if($conn->query($sqldelete)){
        header("Location: ../../sub-pages/products_DB.php#products");
        exit;
    }   
    else {
        echo "Error deleting data: " . $conn->error; 
    }
} else {
    echo "Product ID not set in POST data.";
}
?>
