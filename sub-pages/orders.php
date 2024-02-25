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

        #orders-table {
            min-height: 70vh;
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
                <li><a href="products.php">Products</a></li>
            </ul>

        </nav>
        <div class="login-wrapper">
            <a href="sub-pages/login.html" id="login" class="rounded-button"> Login </a>
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
        <section id="orders-table"></section>
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