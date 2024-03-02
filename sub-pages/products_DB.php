<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/global.css">
    <style>
        #home {
            height: 100vh;
            margin: 0px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .background {
            background-image: url("../assets/img/home-page/background.jpg");
        }

        .home-content-wrapper,
        .home-content-wrapper .learn-more-button-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .content-wrapper {
            padding: 40px;
        }

        .content-wrapper a {
            text-decoration: none;
            color: black;
        }

        .content-wrapper a:hover {
            text-decoration: underline;
        }

        .content-wrapper p {
            text-align: justify;
        }

        /* Products table css */
        #products {
            display: flex;
            justify-content: center;
            min-height: 100vh;

        }

        #products-table-wrappar {
            padding: 10px;

            margin: 80px;
        }

        #products-table-wrappar>div {
            display: flex;
            justify-content: space-between;
            margin: 10px;
        }

        #search-bar-wrappar {
            background-color: #e3e3fa;
            border-radius: 20px;
            padding: 1px 20px;
            display: flex;
        }

        #products-table-wrappar input,
        #products-table-wrappar select,
        #products-table-wrappar button {
            border: none;
            outline: none;
            background: none;
        }

        #products-table-wrappar tbody tr:hover {
            background-color: black;
            color: white;
            cursor: pointer;
            border-radius: 5px;
            outline: 3px solid black;
        }

        #products-top-bar-wrappar {
            height: 50px;
        }

        #products-top-bar-wrappar button {
            padding: 0px 30px;
            margin: 5px 0px;
            color: white;
            background-color: black;
            border-radius: 10px;
        }

        #products-top-bar-wrappar button:hover {
            cursor: pointer;
        }

        #products-table-wrappar th,
        td {
            padding: 5px 40px;
        }

        #products-table-wrappar #search-logo {
            background: url('https://upload.wikimedia.org/wikipedia/commons/c/ca/VisualEditor_-_Icon_-_Search.svg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            margin-right: 10px;
            aspect-ratio: 1/1;
        }

        #products-table-wrappar table {
            border-collapse: collapse;
        }

        #products-table-wrappar table thead {
            background-color: #e3e3fa;
            border: 5px solid transparent;
            border-radius: 50px;
        }

        #products-table-wrappar table td>div {
            display: flex;
            justify-content: space-between;

        }

        #edit,
        #delete {
            display:block;
            height: 100%;
            aspect-ratio: 1 / 1;
        }

        #products-table-wrappar #icon-wrappar {
            display: flex;
            gap: 10px;
            align-items: center;
            margin: 5px 40px;
        }

        #products-table-wrappar tr:hover #delete {
            background: url("../assets/img/icons/delete.svg") no-repeat center / cover;
        }

        #products-table-wrappar tr:hover #edit {
            background: url("../assets/img/icons/edit.svg") no-repeat center / cover;
        }


        /* Add Product Css */
        #add-product-form-wrappar {
            overflow: hidden;
            height: 100vh;
            width: 100vw;
            position: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #add-product-form-wrappar #blurred-background {
            z-index: -1;
            position: absolute;
            margin: 0px;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            background-color: black;
            filter: blur(220px);
        }

        #add-product-form-wrappar form div {
            display: flex;
            justify-content: space-between;
        }

        #add-product-form-wrappar form {
            display: flex;
            width: 40vw !important;
            flex-direction: column;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 40px;
            border-radius: 30px;
            color: white;
        }

        #add-product-form-wrappar input[type="text"] {
            border: 5px solid white;
            border-radius: 7px;
            background: white;
            height: 20px;
            padding: 5px;
        }

        #add-product-form-wrappar form>* {
            margin: 5px 0;
        }

        #add-product-form-wrappar form div:last-child {
            display: flex;
            justify-content: right;
            gap: 5px;
        }

        #add-product-form-wrappar form div:last-child>* {
            padding: 9px 15px;
            border: 3px solid black;
            border-radius: 7px;
            color: white;
            background-color: black;
        }

        #add-product-form-wrappar form div:last-child>*:hover {
            outline: 1px solid white;
            cursor: pointer;
        }

        #add-product-form-wrappar select {
            padding: 5px;
            border: 3px solid white;
            border-radius: 7px;
            margin: none;
        }


        /* update Product Css */
        #update-product-form-wrappar {
            overflow: hidden;
            height: 100vh;
            width: 100vw;
            position: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #update-product-form-wrappar #blurred-background {
            z-index: -1;
            position: absolute;
            margin: 0px;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            background-color: black;
            filter: blur(220px);
        }

        #update-product-form-wrappar form div {
            display: flex;
            justify-content: space-between;
        }

        #update-product-form-wrappar form {
            display: flex;
            flex-direction: column;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 40px;
            border-radius: 30px;
            color: white;
        }

        #update-product-form-wrappar input[type="text"] {
            border: 5px solid white;
            border-radius: 7px;
            background: white;
            height: 20px;
            padding: 5px;
        }

        #update-product-form-wrappar form>* {
            margin: 5px 0;
        }

        #update-product-form-wrappar form div:last-child {
            display: flex;
            justify-content: right;
            gap: 5px;
        }

        #update-product-form-wrappar form div:last-child>* {
            padding: 9px 15px;
            border: 3px solid black;
            border-radius: 7px;
            color: white;
            background-color: black;
        }

        #update-product-form-wrappar form div:last-child>*:hover {
            outline: 1px solid white;
            cursor: pointer;
        }

        #update-product-form-wrappar select {
            padding: 5px;
            border: 3px solid white;
            border-radius: 7px;
            margin: none;
        }
    </style>
    <script src="../assets/js/script.js"></script>
    <script>
        function processEdit(element) {
            var id = element.getAttribute('data-id');
            var name = element.getAttribute('data-name');
            var price = element.getAttribute('data-price');
            var stock_quantity = element.getAttribute('data-stock');
            var category = element.getAttribute('data-category'); 
            var product_pic = element.getAttribute('data-pic');

            console.log(name, price, stock_quantity, category);
            document.getElementById("productId").value = id;
            document.getElementById("productName").value = name;
            document.getElementById("productPrice").value = price;
            document.getElementById("stockQuantity").value = stock_quantity;
            document.getElementById("productCategory").value = category;
            document.getElementById("productPic").value = product_pic;

            document.getElementById("update-product-form-wrappar").style.display = 'flex';
        }

    </script>
    <script>
        function processDelete() {
            document.getElementById("delete").submit();
        }

    </script>
</head>

<body>
    <header class="content-margin">
        <div class="logo-wrapper">
            <a href="../index.php">
                <div class="logo" id="header-logo"></div>
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="products_DB.php#products">Products_DB</a></li>
                <li><a href="orders_DB.php#orders">Orders_DB</a></li>
            </ul>
        </nav>
        <div class="login-wrapper">
        <a href="login.php" id="login" class="rounded-button"> 
                <?php 
                    echo isset($_COOKIE["username"]) ? $_COOKIE["username"]: "Login" ; ?>
            </a>
        </div>
    </header>
    <main>
        <section id="home" class="background">
            <div class="home-content-wrapper" style="text-align:center;">
                <h1 class="company-name" style="font-size:50px; margin:0px;height:80px;">ABC BOOKS</h1>
                <h6 class="company-quote" style="font-size:20px; margin:0px;margin-bottom:10px;">Your satisfaction is
                    our priority</h6>
                <div class="learn-more-button-wrapper"><a href="#contact" class="rounded-button">
                        Learn more
                    </a>
                </div>
            </div>
        </section>
        <section id="products">
            <div id="products-table-wrappar">
                <div id="products-top-bar-wrappar">
                    <div id="search-bar-wrappar">
                        <div id="search-logo"></div>
                        <input type="text" name="search-bar" placeholder="search" id="search-bar">
                        <select name="search-by" id="search-by">
                            <option value="name">Name</option>
                            <option value="id">Id</option>
                            <option value="price">Price</option>
                        </select>
                    </div>
                    <button onclick="addProduct()">Add Product</button>

                    <script>
                        function addProduct() {
                            document.getElementById("add-product-form-wrappar").style.display = "flex";
                        }

                    </script>
                </div>
                <table id="products-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>PRICE</th>
                            <th>STOCK QUANTITY</th>
                            <th>CATEGORY </th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        require("../assets/php/config.php");
                        require("../assets/php/productsDB.php");

                        $sqlselect = "SELECT ID, NAME, PRICE, STOCK_QUANTITY, CATEGORY, PRODUCT_PIC FROM $tbname";
                        $result = $conn->query($sqlselect);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["ID"] . "</td>";
                                echo "<td>" . $row["NAME"] . "</td>";
                                echo "<td> Rs. " . $row["PRICE"] . "</td>";
                                echo "<td>" . $row["STOCK_QUANTITY"] . "</td>";
                                echo "<td> <div> <div> " . $row["CATEGORY"] . "</div>";
                                echo "<div id=icon-wrappar>"; 
                                    echo "<div id='delete' onclick= 'processDelete(". $row["ID"] . ")'> </div>";  
                                    echo "<div id='edit' data-id='" . $row['ID'] . "' data-name='" . $row['NAME'] . "' data-pic='" . $row['PRODUCT_PIC'] . "' data-price='" . $row['PRICE'] . "' data-stock='" . $row['STOCK_QUANTITY'] . "' data-category='" . $row['CATEGORY'] . "' onclick='processEdit(this)'></div>";
                                echo "
                                    </div>
                                    </div>
                                    </td> 
                                ";

                                echo "</tr>";
                            }


                        } else {
                            echo "<tr><td colspan='4'>NO DATA FOUND</td></tr>";
                        }
                        ?>

                        <!-- processing delete -->
                        <form id = "delete_form" action="../assets/php/processDelete.php" style="display:none;" method = "POST">
                            <input type="text" name="product_id" id="product_id">
                        </form>
                        <script> 
                            function processDelete(id){
                                input = document.getElementById("product_id");
                                form = document.getElementById("delete_form");

                                input.value = id;
                                form.submit(); 
                                

                            }
                        </script>
                    </tbody>
                </table>
            </div>
        </section>
        <section id="add-product-form-wrappar" style="display:none;">
            <div id="blurred-background"></div>
            <form action="../assets/php/processAddProduct.php" method="POST">
                <h1 style="margin: 0;">ADD PRODUCT</h1>
                <hr style="border:1px solid white;" width="100%">
                <input type="text" name="name" placeholder="Product Name" required>
                <input type="text" name="price" placeholder="Product Price" required>
                <input type="text" name="stock_quantity" placeholder="Stock Quantity">
                <div>
                    <label for="category">Category:</label><select name="category" id="category" required>
                        <option value="Writing">Writing</option>
                        <option value="Paper">Paper</option>
                        <option value="Organization">Organization</option>
                        <option value="Correction">Correction</option>
                        <option value="Measurement">Measurement</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
                <input type="text" name="product_pic" placeholder="Product Picture link">
                <div>

                    <button type="button" onclick="addProductCancel()">Cancel</button>
                    <script>
                        function addProductCancel() {
                            document.getElementById("add-product-form-wrappar").style.display = "none";
                        }
                    </script>
                    <input type="submit" value="Add Product">
                </div>
            </form>
        </section>

        <section id="update-product-form-wrappar" style="display:none;">
            <div id="blurred-background"></div>
            <form action="../assets/php/processUpdateProduct.php" method="POST">
                <h1 style="margin: 0;">UPDATE PRODUCT</h1>
                <hr style="border:1px solid white;" width="100%">
                <input type="hidden" id="productId" name ="id">
                <input type="text" id="productName" name="name" placeholder="Product Name" required>
                <input type="text" id="productPrice" name="price" placeholder="Product Price" required>
                <input type="text" id="stockQuantity" name="stock_quantity" placeholder="Stock Quantity">
                <div>
                    <label for="category">Category:</label>
                    <select id="productCategory" name="category" required>
                        <option value="Writing">Writing</option>
                        <option value="Paper">Paper</option>
                        <option value="Organization">Organization</option>
                        <option value="Correction">Correction</option>
                        <option value="Measurement">Measurement</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
                <input type="text" id="productPic" name="product_pic" placeholder="Product Picture link">

                <div>

                    <button type="button" onclick="updateProductCancel()">Cancel</button>
                    <script>
                        function updateProductCancel() {
                            document.getElementById("update-product-form-wrappar").style.display = "none";
                        }
                    </script>
                    <input type="submit" value="Update Product">
                </div>
            </form>
        </section>

        <div class="foooter-wrapper">
            <div class="footer-logo-wrapper">
                <div class="logo" id="footer-logo"></div>
            </div>
            <footer>
                <div class="footer-content-wrapper">
                    <section class="footer-content" id="opening-time">
                        <h1>OPENING TIME</h1>
                        <article>
                            <p><span>Sun - Thu</span><span>5:00am - 7:00pm</span></p>
                            <p><span>Friday</span><span>8:00am - 6:00pm</span></p>
                            <p><span>Saturday</span><span>Closed</span></p>
                        </article>
                    </section>
                    <section class="footer-content">
                        <div class="subscription-form-wrapper">
                            <h1>SUBSCRIBE NOW TO GET OUR SPECIAL OFFERS</h1>
                            <form action="assets/php/processEmail.php" method="POST" onsubmit="return  validateEmail()">
                                <input type="email" placeholder="Email" id="email" name="email">
                                <input type="submit" value="Submit">
                            </form>
                            <script>
                                function validateEmail() {
                                    email = document.getElementById("email")
                                    if (!emailRegex.test(email.value)) {
                                        email.classLists.add("error");
                                        return false;

                                    }
                                    else return true;
                                }
                            </script>
                        </div>
                        <div class="social-media-link-wrapper">
                            <a href="https://www.facebook.com" id="facebook" class="social-media-link"
                                target="_blank"></a>
                            <a href="https://www.instagram.com" id="instagram" class="social-media-link"
                                target="_blank"></a>
                            <a href="https://www.twitter.com" id="twitter" class="social-media-link"
                                target="_blank"></a>
                        </div>
                    </section>
                    <section class="footer-content" id="contact">
                        <h1>CONTACT</h1>
                        <article style="text-align:center;">
                            <p>(977+)9232132123123
                                <br>abclainchour0@gmail.com
                            </p>
                            <p>Lainchour, Kathmandu</p>
                        </article>
                    </section>
                </div>
            </footer>
        </div>
</body>

</html>