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
    require("userDB.php");

    $user = $_POST["username"];
    $pass = $_POST["password"];

    $sqlGetUser = "SELECT id, username, password, contact, address FROM $tbname";
    $result = $conn->query($sqlGetUser);


    if ($user == "admin" && $pass == "admin") { 
        setcookie("username", "admin", time() + 3600, "/");
        setcookie("user_id", 0, time() + 3600, "/");
        setcookie("user_address", "Lainchour, Kathmandu", time() + 3600, "/");
        setcookie("user_contact", "01-4523706", time() + 3600, "/");

        
        header("Location: ../../sub-pages/products_DB.php#products");
        exit;
    } elseif ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row["username"] == $user && $row["password"] == $pass) {
                //setting session to store user data 
    
                setcookie("username", $row["username"], time() + 3600, "/");
                setcookie("user_id", $row["id"], time() + 3600, "/");
                setcookie("user_address", $row["address"], time() + 3600, "/");
                setcookie("user_contact", $row["contact"], time() + 3600, "/");


                header("Location: ../../index.php");
                exit;
            }
        }
        echo
            "<script> 
            alert(\" Incorrect Username or Password \");
            window.location.href = '../../sub-pages/login.php' ; 
        </script>";
        exit;
    }
    ?>
</body>

</html>