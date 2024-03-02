<?php 
    require("config.php");
    require("userDB.php");

    //inserting optained user data from form (signup.html)
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["firstname"] . " " . $_POST["lastname"];
        $user_name = $_POST["username"];
        $user_password = $_POST["password"];
        $user_address = $_POST["address"];
        $user_gender = $_POST["gender"];
        $user_dob = $_POST["dob"];
        $user_contact = $_POST["contact"];
        
        // Use prepared statements to prevent SQL injection
        $sqlinsert = $conn->prepare("INSERT INTO $tbname (name, username, password, address, contact, gender, dob) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $sqlinsert->bind_param("sssssss", $name, $user_name, $user_password, $user_address, $user_contact, $user_gender, $user_dob);
    
        if ($sqlinsert->execute()) {
            header("Location: ../../sub-pages/login.php");
            exit;
        } else {
            echo "Error inserting data" . $sqlinsert->error . "<br>";
        }

        

    }
    
?>
    