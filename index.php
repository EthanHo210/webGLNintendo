<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sign_in.css">
    <script src="https://kit.fontawesome.com/f6af0088ad.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signout">
                <form method="post" class="sign-in-form">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="username" value="" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="password" placeholder="Password" name="password" value="" required>
                    </div>
                    <input type="submit" name="submit" value="LOGIN"><br>
                    <p class="account-text">Don't have an account?<a href="#" id="sign-up-btn2">Sign up</a></p>
                </form>

                <form action="" class="sign-up-form">
                    <h2 class="title">Sign up</h2>
                    <div class="roles">
                        <p><a href="./customer_login.php">Customer</a></p>
                        <p><a href="./vendor_login.php">Vendor</a></p>
                        <p><a href="./shipper_login.php">Shipper</a></p>
                    </div>
                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel leftcontainer">
                <div class="content">
                    <p>ALREADY HAVE AN ACCOUNT</p>
                    <button class="btn" id="sign-in-btn">Sign in</button>
                </div>
                <img src="./image/undraw_progressive_app_m-9-ms (1).svg" class="image" alt="btn" >
            </div>
            <div class="panel rightcontainer">
                <div class="content">
                    <p>CREATE A NEW ACCOUNT</p>
                    <button class="btn" id="sign-up-btn">Sign up</button>
                </div>
                <img src="./image/undraw_web_devices_re_m8sc.svg" class="image" alt="btn">
            </div>
        </div>
    </div>

    <script src="app.js"></script>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $uname = $_POST["username"];
    $pass = $_POST["password"];
    $error = "";
    $success = "";

    if (isset($_POST["submit"])){
        if($uname == "customer") {
            if($pass == "Password01"){
                $error = "";
                $success = "welcome admin";
                header("location:sample/home.php");
            }
            else{
                $error = "invalid password";
                $success = "";
            }
        }
        else{
            $error = "invalid username";
            $success = "";
        }
    }
    if (isset($_POST["submit"])){
        if($uname == "vendor") {
            if($pass == "Password02"){
                $error = "";
                $success = "welcome admin";
                header("location:sample/home.php");
            }
            else{
                $error = "invalid password";
                $success = "";
            }
        }
        else{
            $error = "invalid username";
            $success = "";
        }
    }
    if (isset($_POST["submit"])){
        if($uname == "shipper") {
            if($pass == "Password03"){
                $error = "";
                $success = "welcome admin";
                header("location:sample/home.php");
            }
            else{
                $error = "invalid password";
                $success = "";
            }
        }
        else{
            $error = "invalid username";
            $success = "";
        }
    }
}

?>