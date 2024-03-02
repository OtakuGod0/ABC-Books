<?php 
require("config.php");
require("ordersDB.php");

$orderId = $_POST["id"];
$productName = $_POST["name"];
$productPrice = $_POST["price"];
$username = $_POST["username"];
$userAddress = $_POST["user_address"];
$userContact = $_POST["user_contact"];
$quantity = $_POST["quantity"];


$sqlupdate = "UPDATE $tbname 
              SET PRODUCT_NAME = '$productName', 
                  PRODUCT_PRICE = '$productPrice', 
                  USERNAME = '$username', 
                  USER_ADDRESS = '$userAddress', 
                  USER_CONTACT = '$userContact', 
                  QUANTITY = '$quantity'
              WHERE ID = $orderId";

if ($conn->query($sqlupdate)) {
    header("Location: ../../sub-pages/orders_DB.php#orders");
    exit;
} else {
    echo "Error updating order: " . $conn->error;
}
?>
