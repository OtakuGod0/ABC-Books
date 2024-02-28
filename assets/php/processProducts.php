<?php
require("../assets/php/config.php");

$tbname = "ABC_PRODCUTS";
$sqlcreatetb = "CREATE TABLE IF NOT EXISTS $tbname (
                ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                NAME VARCHAR(30) NOT NULL, 
                PRICE INT NOT NULL, 
                STOCK_QUANTITY INT, 
                CATEGORY VARCHAR(30) NOT NULL,
                PRODUCT_PIC VARCHAR(30)
                )";
if ($conn->query($sqlcreatetb) === FALSE) {
    echo "Error create tb" . $conn->error;
}

$sqlinsert = "INSERT INTO $tbname (ID, NAME, PRICE, STOCK_QUANTITY, CATEGORY)
    VALUES 
      (1, 'Pencil', 10, 100, 'Writing'),
      (2, 'Ballpoint Pen', 20, 150, 'Writing'),
      (3, 'Highlighter', 30, 80, 'Writing'),
      (4, 'Fountain Pen', 300, 50, 'Writing'),
      (5, 'Notebook', 150, 120, 'Paper'),
      (6, 'Notepad', 100, 100, 'Paper'),
      (7, 'Sticky Notes', 80, 200, 'Organization'),
      (8, 'Binder Clips', 40, 150, 'Organization'),
      (9, 'Paper Clips', 25, 120, 'Organization'),
      (10, 'Sticky Memo Pads', 60, 100, 'Organization'),
      (11, 'Desk Organizer', 200, 80, 'Organization'),
      (12, 'Eraser', 5, 200, 'Correction'),
      (13, 'Correction Tape', 50, 100, 'Correction'),
      (14, 'Ruler', 15, 150, 'Measurement'),
      (15, 'Scissors', 150, 90, 'Cutting Tools'),
      (16, 'Markers', 80, 120, 'Writing'),
      (17, 'Whiteboard Markers', 50, 100, 'Writing'),
      (18, 'Glue Stick', 20, 180, 'Adhesive'),
      (19, 'Stapler', 120, 70, 'Desk Tools'),
      (20, 'Paper Shredder', 1800, 20, 'Security')
      ON DUPLICATE KEY UPDATE
    NAME = VALUES(NAME),
    PRICE = VALUES(PRICE),
    STOCK_QUANTITY = VALUES(STOCK_QUANTITY),
    CATEGORY = VALUES(CATEGORY);";

if ($conn->query($sqlinsert) === FALSE) {
    echo "" . $conn->error;

}


?>