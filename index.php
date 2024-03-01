<!DOCTYPE html>
<html lang="en">

<head>
    <title>ABC Books</title>
    <?php 
        session_start();
        if (isset($_SESSION["name"])){
            header('Location: sub-pages/login.php');
            exit;
        }
        ?>
    <link rel="stylesheet" href="assets/css/global.css">
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
            background-image: url("assets/img/home-page/background.jpg");
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
        #about-us-img{
            background: url("assets/img/home-page/About-us-side.jpg") no-repeat center / cover;
        }
        #services-img { 
            background: url("assets/img/home-page/services-side.jpg") no-repeat center / cover;

        }
    </style>
    <script src="assets/js/script.js"></script>
</head>

<body>
    <header class="content-margin">
        <div class="logo-wrapper"><a href="index.php">
                <div class="logo" id="header-logo"></div>
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about-us">About Us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="sub-pages/products.php#products">Products</a></li>
                <li><a href="sub-pages/orders.php#orders-table">Orders</a></li>
            </ul>
        </nav>
        <div class="login-wrapper">
            <a href="sub-pages/login.php" id="login" class="rounded-button"> 
                <?php 
                    session_start();
                    echo isset($_SESSION["username"]) ? $_SESSION["username"]: "Login" ; ?>
            </a>
        </div>
    </header>
    <main>
        <section id="home" class="background">
            <div class="home-content-wrapper" style="text-align:center;">
                <h1 class="company-name" style="font-size:50px; margin:0px;height:80px;">ABC BOOKS</h1>
                <h6 class="company-quote" style="font-size:20px; margin:0px;margin-bottom:10px;">Your satisfaction is our priority</h6>
                <div class="learn-more-button-wrapper"><a href="#contact" class="rounded-button">
                        Learn more
                    </a>
                </div>
            </div>
        </section>

        <section id="about-us" class="content content-margin">
            <div class="content-img-wrapper" id="about-us-img"></div>
            <div class="content-wrapper">
                <article>
                    <h1>ABOUT US</h1>
                    <p>Welcome to ABC Books - your one-stop-shop for all things literary and printing-related! We offer
                        a wide variety of books, with a special focus on educational materials for grades 11 and 12. Our
                        dedicated team is committed to providing excellent customer service and high-quality printing
                        services for all your personal and professional needs. Thank you for choosing ABC Books!</p>
                </article>
            </div>
        </section>

        <section id="services" class="content content-margin">
            <div class="content-wrapper">
                <article>
                    <h1 style="text-align:right;">OUR SERVICES</h1>
                    <nav>
                    <ul>
                        <li><a href="sub-pages/survey.html">Join our survey</a></li>
                        <li><a href="sub-pages/products.php#products">Products</a></li>
                        <li><a href="sub-pages/preordered-printing.html">Pre ordered printing</a></li>
                        <li><a href="sub-pages/orders.php">Orders</a></li>
                    </ul></nav>
                </article>
            </div>
            <div class="content-img-wrapper" id="services-img"></div>
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
                        <form action="assets/php/processEmail.php" method="POST" onsubmit= "return  validateEmail()">
                            <input type="email" placeholder="Email" id="email" name="email">
                            <input type="submit" value="Submit">
                        </form>
                        <script>
                            function validateEmail(){
                                email = document.getElementById("email")
                                if(!emailRegex.test(email.value)) {
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