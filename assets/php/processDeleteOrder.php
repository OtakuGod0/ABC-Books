<?php 
require("config.php");
require("ordersDB.php");

if (isset($_POST["order_id"])) {
    $id = $_POST["order_id"]; 

    $sqldelete = "DELETE FROM $tbname WHERE ID = '$id'"; 

    if($conn->query($sqldelete)){
        header("Location: ../../sub-pages/orders_DB.php#orders");
        exit;
    }   
    else {
        echo "Error deleting data: " . $conn->error; 
    }
} else {
    echo "Order ID not set in POST data.";
}
?>
