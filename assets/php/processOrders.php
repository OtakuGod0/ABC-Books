<?php
require("config.php");
require("productsDB.php");
require("ordersDB.php");


$list = json_decode($_POST["itemsList"], true);


// session data
$username = $_COOKIE["username"];
$contact = $_COOKIE["user_contact"];
$address = $_COOKIE["user_address"];


// inserting optained data
foreach ($list as $product => $quantity) {
    $sqlselect = $conn->query("SELECT PRICE FROM ABC_PRODUCTS WHERE NAME = '$product'");
    $pricedata = $sqlselect->fetch_assoc();
    $price = $pricedata['PRICE'];
    $sqlinsert = "INSERT INTO $tbname (PRODUCT_NAME, PRODUCT_PRICE, USERNAME, USER_ADDRESS, USER_CONTACT, QUANTITY)
            VALUES ('$product', $price, '$username', '$address', '$contact', $quantity)";

    if ($conn->query($sqlinsert) === FALSE) {
        echo "Error inserting data" . $conn->error;
    }

}
header("Location: ../../sub-pages/orders.php#orders-table");
exit;
?>