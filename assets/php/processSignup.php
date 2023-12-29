<?php 
    include("config.php");

    $tbname = "abc_users";
    $sqlcreatetb = "CREATE TABLE IF NOT EXISTS $tbname (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(30) NOT NULL,
        password VARCHAR(30) NOT NULL, 
        name VARCHAR(30) NOT NULL, 
        email VARCHAR(30) NOT NULL,
        DOB DATE, 
        gender ENUM('Male', 'Female', 'Others') NOT NULL
    )";

    if($conn->query($sqlcreatetb) === true){
        echo "Table create sucessfully <br>";
    }
    else {
        echo "Error creating table". $conn->error . "<br>";
    }
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["firstname"] . " " . $_POST["lastname"];
        $user_name = $_POST["username"];
        $user_password = $_POST["password"];
        $user_email = $_POST["email"];
        $user_gender = $_POST["gender"];
        $user_dob = $_POST["dob"];
    
        // Use prepared statements to prevent SQL injection
        $sqlinsert = $conn->prepare("INSERT INTO $tbname (name, username, password, email, gender, dob) VALUES (?, ?, ?, ?, ?, ?)");
        $sqlinsert->bind_param("ssssss", $name, $user_name, $user_password, $user_email, $user_gender, $user_dob);
    
        if ($sqlinsert->execute()) {
            echo "Data inserted successfully";
        } else {
            echo "Error inserting data" . $sqlinsert->error . "<br>";
        }

    }
    
?>
    