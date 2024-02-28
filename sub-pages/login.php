<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="../assets/css/global.css">
  <style>

    :root {
      font-family: Montserrat;
      background-image: url('../assets/img/login-background.png');
      background-attachment: fixed;
      background-position: center;
      background-size: cover;
      color: white;
    }

    body {
      display: grid;
      place-items: center;
      height: 100vh;
    }

    main {
      display:flex;
      justify-content:center;
      align-items:center;
      width:auto;
      background-color: rgba(0, 0, 0, 0.8);
      border-radius: 25px;
      padding: 20px;
    }

    h1 {
      font-size: 45px;
      color: white;
      text-align: center;
      margin: auto auto 0px auto !important;
    }

    form {
      width:20vw;
      margin-top: 30px;
      display: flex;
      flex-direction: column;
      text-align: center;
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
      margin-bottom:10px;
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

    input::placeholder {
      font-family: Montserrat;
    }
    #submit:hover{
      cursor:grab;      
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
  <?php require("../assets/php/processProducts.php"); ?>
  
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
        <a href="#" id="login" class="rounded-button">
            Login </a>
    </div>
</header>
  <main>
    <div class="form-wrapper">
    <div>
      <h1>Login</h1>
    </div>
    <hr>
    <form action="../assets/php/processLogin.php" method="POST">
      <input type="text" placeholder="Username" id="username" name="username" required>
      <input type="password" placeholder="Enter your password" id="password" name="password" required>
      <input type="submit" id="submit" value="Log in">
  </form>
  
    <div>Don't have an account? <a href="signup.html" style="color:white;">  Sign up</a></div>
    </div>
  </main>
</body>

</html>