<?php 
require("config.php");
require("productsDB.php");

$sqlinsert = "INSERT INTO $tbname (ID, NAME, PRICE, STOCK_QUANTITY, CATEGORY, PRODUCT_PIC)
VALUES 
  (1, 'Pencil', 10, 100, 'Writing', '../assets/img/products-img/pencil.png'),
  (2, 'Ballpoint Pen', 20, 150, 'Writing', '../assets/img/products-img/ballpoint pen.jpg'),
  (3, 'Highlighter', 30, 80, 'Writing', '../assets/img/products-img/highlighter.jpg'),
  (4, 'Fountain Pen', 300, 50, 'Writing', '../assets/img/products-img/fountain pen.jpg'),
  (5, 'Notebook', 150, 120, 'Paper', '../assets/img/products-img/notebook.webp'),
  (6, 'Notepad', 100, 100, 'Paper', '../assets/img/products-img/notepad.jpg'),
  (7, 'Sticky Notes', 80, 200, 'Organization', '../assets/img/products-img/sticky notes.jpg'),
  (8, 'Binder Clips', 40, 150, 'Organization', '../assets/img/products-img/binder clips.webp'),
  (9, 'Paper Clips', 25, 120, 'Organization', '../assets/img/products-img/paper clips.jpg'),
  (10, 'Sticky Memo Pads', 60, 100, 'Organization', '../assets/img/products-img/sticky memo pads.webp'),
  (11, 'Desk Organizer', 200, 80, 'Organization', '../assets/img/products-img/desk organizer.jpg'),
  (12, 'Eraser', 5, 200, 'Correction', '../assets/img/products-img/eraser.webp'),
  (13, 'Correction Tape', 50, 100, 'Correction', '../assets/img/products-img/correction tape.webp'),
  (14, 'Ruler', 15, 150, 'Measurement', '../assets/img/products-img/ruler.webp'),
  (16, 'Markers', 80, 120, 'Writing', '../assets/img/products-img/marker.webp'), 
  (17, 'Whiteboard Markers', 50, 100, 'Writing', '../assets/img/products-img/board marker.jpg'), 
  (18, 'Glue Stick', 20, 180, 'Others', '../assets/img/products-img/glue stick.jpg'),
  (19, 'Stapler', 120, 70, 'Others', '../assets/img/products-img/stapler.jpg'), 
  (20, 'Compass', 20, 10, 'Measurement', '../assets/img/products-img/compass.webp'), 
  (21, 'Protactor', 15, 30, 'Measurement', '../assets/img/products-img/protractor.jpg'),
  (22, 'Printing Paper', 100, 12, 'Paper', '../assets/img/products-img/printing paper.jpg'), 
  (23, 'Sketch Book', 180, 142, 'Paper', '../assets/img/products-img/sketch book.jpg'), 
  (24, 'Correction Fluid', 40, 242, 'Correction', '../assets/img/products-img/correction fluid.webp') 
  ON DUPLICATE KEY UPDATE
NAME = VALUES(NAME),
PRICE = VALUES(PRICE),
STOCK_QUANTITY = VALUES(STOCK_QUANTITY),
CATEGORY = VALUES(CATEGORY),
PRODUCT_PIC = VALUES(PRODUCT_PIC)";


if ($conn->query($sqlinsert) === FALSE) {
    echo "" . $conn->error;

}

?>