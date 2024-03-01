<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    require("config.php");
    require("productsDB.php");
    require("ordersDB.php");

    $list = json_decode($_POST["itemsList"], true);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    // session data
    $username = $_SESSION["username"];
    $contact = $_SESSION["user_contact"];
    $address = $_SESSION["user_address"];



    // inserting optained data
    foreach ($list as $product => $quantity) {
        $price = $conn->query("SELECT PRICE FROM ABC_PRODUCTS WHERE NAME = $product");
        $sqlinsert = "INSERT INTO $tbname (PRODUCT_NAME, PRODUCT_PRICE, USERNAME, USER_ADDRESS, USER_CONTACT, QUANTITY)
            VALUES ('$product', $price, '$username', '$address', '$contact', $quantity)";

        if ($conn->query($sqlinsert) === FALSE) {
            echo "Error inserting data" . $conn->error;
        }

    }
    ?>
</body>

</html>