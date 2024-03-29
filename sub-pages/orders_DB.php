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

        #orders {
            display: flex;
            justify-content: center;
            min-height: 100vh;
        }

        #orders-table-wrapper {
            padding: 10px;
            margin: 80px;
        }

        #orders-table-wrapper>div {
            display: flex;
            justify-content: space-between;
            margin: 10px;
        }

        #search-bar-wrapper {
            background-color: #e3e3fa;
            border-radius: 20px;
            padding: 1px 20px;
            display: flex;
        }

        #orders-table-wrapper input,
        #orders-table-wrapper select,
        #orders-table-wrapper button {
            border: none;
            outline: none;
            background: none;
        }

        #orders-table-wrapper tbody tr:hover {
            background-color: black;
            color: white;
            cursor: pointer;
            border-radius: 5px;
            outline: 3px solid black;
        }

        #orders-top-bar-wrapper {
            height: 50px;
        }

        #orders-top-bar-wrapper button {
            padding: 0px 30px;
            margin: 5px 0px;
            color: white;
            background-color: black;
            border-radius: 10px;
        }

        #orders-top-bar-wrapper button:hover {
            cursor: pointer;
        }

        #orders-table-wrapper th,
        td {
            padding: 5px 40px;
        }

        #orders-table-wrapper #search-logo {
            background: url('https://upload.wikimedia.org/wikipedia/commons/c/ca/VisualEditor_-_Icon_-_Search.svg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            margin-right: 10px;
            aspect-ratio: 1/1;
        }

        #orders-table-wrapper table {
            border-collapse: collapse;
        }

        #orders-table-wrapper table thead {
            background-color: #e3e3fa;
            border: 5px solid transparent;
            border-radius: 50px;
        }

        #orders-table-wrapper table td>div {
            display: flex;
            justify-content: space-between;
        }

        #edit,
        #delete {
            height: 100%;
            aspect-ratio: 1 / 1;
        }

        #orders-table-wrapper #icon-wrapper {
            display: flex;
            flex-grow: 1;
            gap: 10px;
            align-items: center;
            margin: 5px 40px;
        }

        #orders-table-wrapper tr:hover #delete {
            background: url("../assets/img/icons/delete.svg") no-repeat center / cover;
        }

        #orders-table-wrapper tr:hover #edit {
            background: url("../assets/img/icons/edit.svg") no-repeat center / cover;
        }

        /* Add Orders Css */
        #add-orders-form-wrapper {
            overflow: hidden;
            height: 100vh;
            width: 100vw;
            position: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #add-orders-form-wrapper #blurred-background {
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

        #add-orders-form-wrapper form div {
            display: flex;
            justify-content: space-between;
        }

        #add-orders-form-wrapper form {
            display: flex;
            width: 25vw !important;
            flex-direction: column;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 40px;
            border-radius: 30px;
            color: white;
        }


        #add-orders-form-wrapper input[type="text"] {
            border: 5px solid white;
            border-radius: 7px;
            background: white;
            height: 20px;
            padding: 5px;
        }

        #add-orders-form-wrapper form>* {
            margin: 5px 0;
        }

        #add-orders-form-wrapper form div:last-child {
            display: flex;
            justify-content: right;
            gap: 5px;
        }

        #add-orders-form-wrapper form div:last-child>* {
            padding: 9px 15px;
            border: 3px solid black;
            border-radius: 7px;
            color: white;
            background-color: black;
        }

        #add-orders-form-wrapper form div:last-child>*:hover {
            outline: 1px solid white;
            cursor: pointer;
        }

        /* Update Order CSS */
        #update-order-form-wrappar {
            overflow: hidden;
            height: 100vh;
            width: 100vw;
            position: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #update-order-form-wrappar #blurred-background {
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

        #update-order-form-wrappar form div {
            display: flex;
            justify-content: space-between;
        }

        #update-order-form-wrappar form {
            display: flex;
            flex-direction: column;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 40px;
            border-radius: 30px;
            color: white;
        }

        #update-order-form-wrappar input[type="text"] {
            border: 5px solid white;
            border-radius: 7px;
            background: white;
            height: 20px;
            padding: 5px;
        }

        #update-order-form-wrappar form>* {
            margin: 5px 0;
        }

        #update-order-form-wrappar form div:last-child {
            display: flex;
            justify-content: right;
            gap: 5px;
        }

        #update-order-form-wrappar form div:last-child>* {
            padding: 9px 15px;
            border: 3px solid black;
            border-radius: 7px;
            color: white;
            background-color: black;
        }

        #update-order-form-wrappar form div:last-child>*:hover {
            outline: 1px solid white;
            cursor: pointer;
        }

        #update-order-form-wrappar select {
            padding: 5px;
            border: 3px solid white;
            border-radius: 7px;
            margin: none;
        }
    </style>
    <script src="../assets/js/script.js"></script>
    <script>
        function processEditOrder(element) {
            var id = element.getAttribute('data-id');
            var name = element.getAttribute('data-name');
            var price = element.getAttribute('data-price');
            var username = element.getAttribute('data-username');
            var address = element.getAttribute('data-address');
            var contact = element.getAttribute('data-contact');
            var quantity = element.getAttribute('data-quantity');

            console.log(name, price, username, address, contact, quantity);
        }
    </script>

    <script>


        function processEditOrder(element) {
            var id = element.getAttribute('data-id');
            var name = element.getAttribute('data-name');
            var price = element.getAttribute('data-price');
            var username = element.getAttribute('data-username');
            var address = element.getAttribute('data-address');
            var contact = element.getAttribute('data-contact');
            var quantity = element.getAttribute('data-quantity');

            document.getElementById("orderId").value = id;
            document.getElementById("productName").value = name;
            document.getElementById("productPrice").value = price;
            document.getElementById("username").value = username;
            document.getElementById("userAddress").value = address;
            document.getElementById("userContact").value = contact;
            document.getElementById("quantity").value = quantity;

            // Display the order update form
            document.getElementById("update-order-form-wrappar").style.display = "flex";
        }
    </script>

</head>

<body>
    <header class="content-margin">
        <div class="logo-wrapper"><a href="../index.php">
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
                echo isset($_COOKIE["username"]) ? $_COOKIE["username"] : "Login"; ?>
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
        <section id="orders">
            <div id="orders-table-wrapper">

                <div id="orders-top-bar-wrapper">
                    <div id="search-bar-wrapper">
                        <div id="search-logo"></div>
                        <input type="text" name="search-bar" placeholder="search" id="search-bar">
                        <select name="search-by" id="search-by">
                            <option value="product_name">Product Name</option>
                            <option value="id">Id</option>
                            <option value="product_price">Product Price</option>
                        </select>
                    </div>
                    <button onclick="addOrder()">Add Order</button>

                    <script>
                        function addOrder() {
                            var addOrdersSection = document.getElementById("add-orders-form-wrapper");
                            addOrdersSection.style.display = "flex";
                        }
                    </script>

                </div>
                <table id="orders-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>PRODUCT NAME</th>
                            <th>PRODUCT PRICE</th>
                            <th>QUANTITY</th>
                            <th>USERNAME</th>
                            <th>USER ADDRESS</th>
                            <th style= "text-align:left;">USER CONTACT</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        require("../assets/php/config.php");
                        require("../assets/php/ordersDB.php");
                       
                        $sqlselect = "SELECT ID, PRODUCT_NAME, PRODUCT_PRICE, QUANTITY, USERNAME, USER_ADDRESS, USER_CONTACT FROM $tbname";
                        $result = $conn->query($sqlselect);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["ID"] . "</td>";
                                echo "<td>" . $row["PRODUCT_NAME"] . "</td>";
                                echo "<td> Rs. " . $row["PRODUCT_PRICE"] . "</td>";
                                echo "<td>" . $row["QUANTITY"] . "</td>";
                                echo "<td>" . $row["USERNAME"] . "</td>";
                                echo "<td>" . $row["USER_ADDRESS"] . "</td>";
                                echo "<td> <div style='height:100%; width:100%;'> <div>" . $row["USER_CONTACT"] . "</div>";
                                echo "                                   
                                <div id='icon-wrapper'>
                                    <div id='delete' onclick='processDeleteOrder(" . $row['ID'] . ")'></div>
                                    <div id='edit' data-id='" . $row['ID'] . "' data-name='" . $row['PRODUCT_NAME'] . "' data-price='" . $row['PRODUCT_PRICE'] . "' data-username='" . $row['USERNAME'] . "' data-address='" . $row['USER_ADDRESS'] . "' data-contact='" . $row['USER_CONTACT'] . "' data-quantity='" . $row['QUANTITY'] . "' onclick='processEditOrder(this)'></div>
                                </div>
                                
                                </div></td>
                           
                        ";


                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='7'>NO DATA FOUND</td></tr>";
                        }
                        ?>
                    </tbody>
                    <!-- processing delete -->
                    <form id = "delete_form" action="../assets/php/processDeleteOrder.php" style="display:none;" method = "POST">
                            <input type="text" name="order_id" id="order_id">
                        </form>
                        <script> 
                            function processDeleteOrder(id){
                                input = document.getElementById("order_id");
                                form = document.getElementById("delete_form");

                                input.value = id;
                                form.submit(); 
                                

                            }
                        </script>
                </table>
            </div>
        </section>

        <section id="add-orders-form-wrapper" style="display:none;">
            <div id="blurred-background"></div>
            <form action="../assets/php/processAddOrder.php" method="POST">
                <h1 style="margin: 0; text-align:center;">ADD ORDER</h1>
                <hr style="border:1px solid white;" width="100%">
                <input type="text" name="product_name" placeholder="Product Name" required>
                <input type="text" name="product_price" placeholder="Product Price" required>
                <input type="text" name="username" placeholder="Username" required>
                <input type="text" name="user_address" placeholder="User Address" required>
                <input type="text" name="user_contact" placeholder="User Contact" required>
                <input type="text" name="quantity" placeholder="Quantity" required>
                <div>
                    <button type="button" onclick="addOrderCancel()">Cancel</button>
                    <script>
                        function addOrderCancel() {
                            document.getElementById("add-orders-form-wrapper").style.display = "none";
                        }
                    </script>
                    <input type="submit" value="Add Order">
                </div>
            </form>
        </section>
        <section id="update-order-form-wrappar" style="display:none;">
            <div id="blurred-background"></div>
            <form action="../assets/php/processUpdateOrder.php" method="POST">
                <h1 style="margin: 0;">UPDATE ORDER</h1>
                <hr style="border:1px solid white;" width="100%">
                <input type="hidden" id="orderId" name="id">
                <input type="text" id="productName" name="name" placeholder="Product Name" required>
                <input type="text" id="productPrice" name="price" placeholder="Product Price" required>
                <input type="text" id="username" name="username" placeholder="Username" required>
                <input type="text" id="userAddress" name="user_address" placeholder="User Address" required>
                <input type="text" id="userContact" name="user_contact" placeholder="User Contact" required>
                <input type="text" id="quantity" name="quantity" placeholder="Quantity" required>
                <div>
                    <button type="button" onclick="updateOrderCancel()">Cancel</button>
                    <script>
                        function updateOrderCancel() {
                            document.getElementById("update-order-form-wrappar").style.display = "none";
                        }
                    </script>
                    <input type="submit" value="Update Order">
                </div>
            </form>
        </section>


    </main>
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
                        <a href="https://www.facebook.com" id="facebook" class="social-media-link" target="_blank"></a>
                        <a href="https://www.instagram.com" id="instagram" class="social-media-link"
                            target="_blank"></a>
                        <a href="https://www.twitter.com" id="twitter" class="social-media-link" target="_blank"></a>
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