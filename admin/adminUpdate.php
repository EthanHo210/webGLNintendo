<?php
@include 'config.php';

$id = $_GET['edit'];

if(isset($_POST['update_game'])){
    $game_name = $_POST['game_name'];
    $game_image = $_FILES['game_image']['name'];
    $game_image_tmp_name = $_FILES['game_image']['tmp_name'];
    $game_image_folder = 'upload_image/'.$game_image;

    if(empty($game_name) || empty($game_image)){
        $message[] = 'Please fill out all!';
    } else{
        $update = "UPDATE gameList SET name='$game_name', image='$game_image' WHERE id = $id";
        $upload = mysqli_query($conn, $update);
        if($upload){
            move_uploaded_file($game_image_tmp_name, $game_image_folder);
        }else {
            $message[] = 'Could not add the product';
        }
    }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css?v=<?php echo time(); ?>">

    <script src="https://kit.fontawesome.com/a3c4741b90.js" crossorigin="anonymous"></script>
    <title>Admin update</title>
</head>
<body>

<?php
if(isset($message)){
    foreach($message as $message){
        echo '<span class = "message">'.$message.'</span>';
    }
}
?>

<header>
    <a href="#"><img src="../Styles/NES_logo.svg" class="logo" alt=""></a>
    <div>
        <ul id="navbar">
            <a href="./adminPage.php">Home</a>
            <a href="../about/index.php">About</a>
            <a href="../index.php">Login</a>
        </ul>
    </div>
</header>

<div class="container">
    <div class="admin-game-form-container centered">

    <?php 
    $select = mysqli_query($conn, "SELECT *FROM gameList WHERE id = $id");
    while($row = mysqli_fetch_assoc($select)){

    ?>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
            <h3>Update game<i class="fa-solid fa-pen-to-square"></i></h3>
            <input type="text" placeholder="enter game name" value="<?php $row['name']; ?>" name="game_name" class="box">
            <input type="file" accept="image/png, image/jpeg, image/jpg" name="game_image" class="box">
            <input type="submit" class="btn" name="update_game" value="update game">
            <a href="./adminPage.php" class="btn">Go back</a>
        </form>

        <?php
    };
        ?>
    </div>

</div>


<section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletter</h4>
            <p>Get E-mail updates about latest games and <span>special offers</span>.</p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="./img/logo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address:</strong> 702 Nguyen Van Linh District 7, Ho Chi Minh City</p>
            <p><strong>Tel:</strong> (+84) 28 3776 1369</p>
            <p><strong>Hours:</strong> Monday to Saturday from 8am to 5pm (GMT+7)</p>
        </div>
        <div class="follow">
            <h4>Follow and support us</h4>
            <div class="icon">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-youtube"></i>
                <i class="fa-brands fa-twitter"></i>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="../about/index.php">About us</a>
            <a href="#">Contact Us</a>
        </div>
        <div class="col">
          <h4>My Account</h4>
          <a href="../index.php">Sign In</a>
      </div>
    </footer>
</body>
</html>