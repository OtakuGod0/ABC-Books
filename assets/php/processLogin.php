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
        header("Location: ../../sub-pages/products_DB.php");
        exit;
    } elseif ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row["username"] == $user && $row["password"] == $pass) {
                //setting session to store user data 
                session_start();
                $_SESSION['username'] = $row["username"];
                $_SESSION['user_id'] = $row["id"];
                $_SESSION['user_address'] = $row["address"];
                $_SESSION['user_contact'] = $row["contact"];

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