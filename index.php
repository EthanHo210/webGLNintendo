<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sign_in.css?v=<?php echo time(); ?>">
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
                    </div>
                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel rightcontainer">
                <img src="./Styles/NES_logo.svg" class="image" alt="btn">
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
        if($uname == "admin") {
            if($pass == "Password01"){
                $error = "";
                $success = "welcome admin";
                header("location:./admin/adminPage.php");
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
        if($uname == "user") {
            if($pass == "Password02"){
                $error = "";
                $success = "welcome customer";
                header("location:./user/home.php");
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
