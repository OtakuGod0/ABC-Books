<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include("config.php");
    $tbname = "abc_emailList";
    $sqlcreatetb = "CREATE TABLE IF NOT EXISTS $tbname (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        email VARCHAR(30) NOT NULL
    )";
    if ($conn->query($sqlcreatetb)) {
        echo "Table create successfully";
    } else {
        echo "Error creating table" . $conn->error . "<br>";
    }

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $email = $_POST["email"];

        $sqlinsert = $conn->prepare("INSERT INTO $tbname (email) VALUES (?)");
        $sqlinsert->bind_param("s", $email);
        if ($sqlinsert->execute()) {
            echo "Data inserted successfully";
        } else {
            echo "Error inserting data" . $sqlinsert->error . "<br>";
        }
    }
    ?>

</body>

</html>