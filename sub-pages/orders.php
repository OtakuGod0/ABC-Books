<!DOCTYPE html>
<html lang="en">

<head>
    <title>ABC Books</title>
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
        #orders-table-wrapper #add-order-button-wrappar {
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

        #orders-top-bar-wrapper #add-order-button-wrappar {
            background-color: black;
            border-radius: 10px;
        }

        #add-order-button-wrappar a {
            margin: 0px 20px;
            margin-top: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;

        }

        #orders-top-bar-wrapper #add-order-button-wrappar:hover {
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
    </style>
    <script src="assets/js/script.js"></script>
</head>

<body>
    <header class="content-margin">
        <div class="logo-wrapper"><a href="index.html">
                <div class="logo" id="header-logo"></div>
            </a>
        </div>
        <nav>

            <ul>
                <li><a href="../index.php#home">Home</a></li>
                <li><a href="../index.php#about-us">About Us</a></li>
                <li><a href="../index.php#services">Services</a></li>
                <li><a href="../index.php#contact">Contact</a></li>
                <li><a href="products.php#products">Products</a></li>
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
                    <div id="add-order-button-wrappar">
                        <a href="products.php#products">Add Order</a>
                    </div>

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
                            <th>USER CONTACT</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        require("../assets/php/config.php");

                        $ordersTableName = "ABC_ORDERS";
                        $sqlselect = "SELECT ID, PRODUCT_NAME, PRODUCT_PRICE, QUANTITY, USERNAME, USER_ADDRESS, USER_CONTACT FROM $ordersTableName";
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
                                echo "<td>" . $row["USER_CONTACT"];
                                echo "
                           
                                <div>
                                    
                                    <div id='icon-wrapper'> 
                                        <form action='../assets/php/processDeleteOrder.php' method='post' id='delete' onclick='processDeleteOrder()'>
                                            <input type='hidden' name='order_id' value='" . $row["ID"] . "'> 
                                        </form>
                                        <div id='edit' data-id='" . $row['ID'] . "' data-name='" . $row['PRODUCT_NAME'] . "' data-price='" . $row['PRODUCT_PRICE'] . "' data-quantity='" . $row['QUANTITY'] . "' data-username='" . $row['USERNAME'] . "' data-address='" . $row['USER_ADDRESS'] . "' data-contact='" . $row['USER_CONTACT'] . "' onclick='processEditOrder(this)'></div>
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
                </table>
            </div>
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