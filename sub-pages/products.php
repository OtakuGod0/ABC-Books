<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC Products</title>
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
            background-image: url(../assets/img/background.jpg)
        }

        .home-content-wrapper,
        .home-content-wrapper .learn-more-button-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .product-wrapper>div {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 10px;
            padding: 10px;
        }

        .product-wrapper>div>div {
            background: url("../assets/img/searchd image/cinthia-becher-OIBJaiLnMsU-unsplash.jpg") no-repeat center / cover;
            display: flex;
            flex-direction: column;
            border-radius: 12px;
            overflow: hidden;
        }

        .product-wrapper>div>div>div {
            display: flex;
            gap: 10px;
            padding: 10px 20px;
        }

        .product-wrapper .product-footer {
            align-items: center;
            background-color: rgba(1, 1, 1, 0.8);
            color: white;
        }

        .product-wrapper #product-name {
            height: 35vh;
            justify-content: center;
            font-size: 25px;
            font-weight: bold;
            align-items: center;
        }

        .product-wrapper #shop-icon {
            height: 80%;
            box-sizing: border-box;
            aspect-ratio: 1/1;
            background: url(../assets/img/shop-icon.png) no-repeat center / cover;
            cursor: pointer;
        }

        .product-wrapper #product-prize {
            text-align: center;
            flex-grow: 1;
        }

        /* cart css */
        #cart {
            position: fixed;
            display: none;
            flex-direction: column;
            place-items: center;
            width: 24%;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            right: 80px;
            bottom: 30px;
            border-radius: 20px;
            padding: 10px 15px;
        }

        #cart hr {
            width: 100%;
        }

        #cart h3 {
            margin-bottom: 0px;
        }

        #cart #cart-items-wrappar {
            min-height: 60px;
        }

        #cart #cart-footer {
            margin: 5px auto;
        }

        #cart input[type = "submit"] {
            padding: 10px 20px;
            border-radius: 100px;
            border: none;
            background-color: black;
            color: white;
            font-size: 1em;
        }

        #cart input[type = "submit"]:hover {
            cursor: pointer;
            outline: 1px solid white;
        }
        #cart #cart-items-wrappar{
            width:100%;
        }
        #cart #cart-items-wrappar div {
            display:flex;
            justify-content: space-evenly;
        }
    </style>
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
                <li><a href="orders.php#orders-table">Orders</a></li>
            </ul>
        </nav>
        <div class="login-wrapper">
            <a href="login.html" id="login" class="rounded-button">
                Login </a>
        </div>
    </header>
    <main>
        <section id="home" class="background">
            <div class="home-content-wrapper" style="text-align:center;">
                <h1 class="company-name" style="font-size:50px; margin:5px; height:75px;">ABC BOOKS</h1>
                <h6 class="company-quote" style="font-size:20px; margin:1px;">Your satisfaction is our priority</h6>
                <div class="learn-more-button-wrapper"><a href="#contact" class="rounded-button">
                        Learn more
                    </a>
                </div>
            </div>
        </section>
        <!-- products-html  -->
        <!-- New collections  -->
        <section class="product-wrapper content-margin">
            <h1>New collection</h1>
            <hr>
            <div>
                <div>
                    <div id="product-name">Stick File</div>
                    <div class="product-footer">
                        <div id="shop-icon" onclick="processCart('stick_file', 20)"></div>
                        <div id="product-prize">Rs 20</div>
                    </div>
                </div>
                <div>
                    <div id="product-name">Stick File</div>
                    <div class="product-footer">
                        <div id="shop-icon"></div>
                        <div id="product-prize">Rs 20</div>
                    </div>
                </div>
                <div>
                    <div id="product-name">Stick File</div>
                    <div class="product-footer">
                        <div id="shop-icon"></div>
                        <div id="product-prize">Rs 20</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="product-wrapper content-margin">
            <h1>New collection</h1>
            <hr>
            <div>
                <div>
                    <div id="product-name">Stick File</div>
                    <div class="product-footer">
                        <div id="shop-icon"></div>
                        <div id="product-prize">Rs 20</div>
                    </div>
                </div>
                <div>
                    <div id="product-name">Stick File</div>
                    <div class="product-footer">
                        <div id="shop-icon"></div>
                        <div id="product-prize">Rs 20</div>
                    </div>
                </div>
                <div>
                    <div id="product-name">Stick File</div>
                    <div class="product-footer">
                        <div id="shop-icon"></div>
                        <div id="product-prize">Rs 20</div>
                    </div>
                </div>
            </div>
        </section>

        <form action = "../assets/php/ProcessOrders.php" id="cart">
            <h3>CART</h3>
            <hr>
            <div id="cart-items-wrappar">
                <script>
                    list = {};
                    a = 1; 
                    function processCart(x, y){
                        document.getElementById("cart").style.display = "flex";
                        check = false
                        for(let key in list){
                            if(key == x){
                                check = true;
                            }
                        }
                        if(check){
                            document.getElementById(`cart-item-${x}-quantity`).innerHTML = ++list[x];
                        }
                        else{
                            list[x] = 1; 
                            document.getElementById("cart-items-wrappar").innerHTML += `
                                <div class="cart-item-${x}"> 
                                    <span> ${a}. </span>
                                    <span> ${x} </span>
                                    <span> Rs. ${y} </span>
                                    <span id="cart-item-${x}-quantity"> 1 </span> 
                            `;
                            a++;

                        }
                    }
                </script>
            </div>
            <hr>
            <div id="cart-footer">
                <input type="submit" value="ORDER NOW">
            </div>
        </form>
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
                        <form>
                            <input type="email" placeholder="Email">
                            <input type="submit" value="Submit">
                        </form>
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