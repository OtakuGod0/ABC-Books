<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="../assets/css/global.css">
    <style>
        :root {
            background-image: url('../assets/img/login-background.png');
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
            color: white;
        }

        body {
            display: grid;
            place-items: center;
            min-height: 100vh;
        }

        main {
            display: flex;
            justify-content: center;
            align-items: center;
            width: auto;
            border-radius: 25px;
            padding: 20px;
        }


        h1 {
            font-size: 45px;
            color: white;
            text-align: center;
            margin: auto auto 15px auto !important;
        }

        form {
            width: 40vw;
            margin-top: 30px;
            display: flex;
            flex-direction: column;
            text-align: center;
        }

        #name_wrapper {
            display: flex;
            gap: 10px;
            width: 100%;
        }

        #name_wrapper>* {
            width: 50%;
        }

        input {
            border-radius: 10px;
            padding: 10px;
            font-size: 18px;
            margin-bottom: 15px;
            border: 1px solid#ccc;
        }

        #submit {
            display: block;
            margin: 0 auto;
            border-radius: 30px;
            height: 52px;
            width: 160px;
            text-align: center;
            font-size: 23px;
        }

        #submit:hover {
            background-color: black;
            color: white;
        }

        label {
            font-size: 23px;
        }

        #gender_wrapper,
        #birth_date_wrapper {
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            margin-bottom: 20px;
        }

        input[type='radio'] {
            height: 20px;
            width: 20px;
            margin: 0;
        }

        input[type='date'] {
            width: 100%;
            margin: 0px;
        }

        label[for='date'] {
            width: 250px;
        }

        input::placeholder {
            font-family: Montserrat;
        }

        .form-wrapper {
            margin-top: 100px;
            padding: 20px;
            border-radius: 40px;
            background-color: rgba(0, 0, 0, 0.8);

        }

        @media only screen and (max-width: 767px) {
            main {
                width: 100%;
            }

            main>* {
                margin: 10px 5%;
            }

        }
    </style>
    <script src="../assets/js/script.js"></script>
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
            </ul>
        </nav>
        <div class="login-wrapper">
            <a href="login.php" id="login" class="rounded-button">
                <?php
                echo isset($_SESSION["username"]) ? $_SESSION["username"] : "Login"; ?>
            </a>
        </div>

    </header>
    <main>
        <div class="form-wrapper">
            <div>
                <h1>Signup</h1>
            </div>
            <hr>
            <form action="../assets/php/processSignup.php" onsubmit="return validate()" method="POST">
                <div id="name_wrapper">
                    <input type="text" placeholder="First name" id="firstname" name="firstname" required>
                    <input type="text" placeholder="Last name" id="lastname" name="lastname" required>
                </div>
                <input type="text" id="address" placeholder="Address" name="address" required>
                <input type="text" id="Contact" placeholder="Contact Number" name="contact" required>
                <input type="text" placeholder="Username" id="username" name="username" required>
                <input type="password" placeholder="Create password" id="password" name="password" required>
                <input type="password" placeholder="Confirm password" id="password2" name="password2" required>
                <div id="gender_wrapper">
                    <label>Gender:</label>
                    <input type="radio" name="gender" value="male" id="male" required><label for="male">Male</label>
                    <input type="radio" name="gender" value="female" id="female"><label for="female">Female</label>
                    <input type="radio" name="gender" value="others" id="others"><label for="others">Others</label>
                </div>
                <div id="birth_date_wrapper">
                    <label for="date">Birth Date: </label>
                    <input type="date" id="dob" name="dob" required>
                </div>
                <input type="submit" id="submit" value="Submit">
            </form>
            <script>
                function validate() {
                    var password = document.getElementById("password")
                    var password2 = document.getElementById("password2")

                    let isValid = true;

                    if (!password.value === password2.value) {
                        password.classList.add("error");
                        password2.classList.add("error");
                        password.value = "";
                        password2.value = "";
                        isValid = false;
                    }
                    return isValid;
                }
            </script>
        </div>
    </main>
</body>

</html>