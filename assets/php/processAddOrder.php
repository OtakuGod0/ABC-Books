<?php
require("config.php");
require("ordersDB.php"); 

$product_name = $_POST["product_name"];
$product_price = $_POST["product_price"];
$username = $_POST["username"];
$user_address = $_POST["user_address"];
$user_contact = $_POST["user_contact"];
$quantity = $_POST["quantity"];

$sqlinsert = "INSERT INTO $tbname (PRODUCT_NAME, PRODUCT_PRICE, USERNAME, USER_ADDRESS, USER_CONTACT, QUANTITY) 
              VALUES ('$product_name', $product_price, '$username', '$user_address', '$user_contact', $quantity)";

if ($conn->query($sqlinsert) === FALSE) {
    echo "error inserting values" . $conn->error;
} else {
    header("Location: ../../sub-pages/orders_DB.php#orders.php");
    exit;
}
?>
