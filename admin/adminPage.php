<?php
@include 'config.php';
if(isset($_POST['add_game'])){
    $game_name = $_POST['game_name'];
    $game_image = $_FILES['game_image']['name'];
    $game_image_tmp_name = $_FILES['game_image']['tmp_name'];
    $game_image_folder = 'upload_image/'.$game_image;

    if(empty($game_name) || empty($game_image)){
        $message[] = 'Please fill out all!';
    } else{
        $insert = "INSERT INTO gameList(name, image) VALUES ('$game_name', '$game_image')";
        $upload = mysqli_query($conn, $insert);
        if($upload){
            move_uploaded_file($game_image_tmp_name, $game_image_folder);
            $message[] = 'New game added successfully';
        }else {
            $message[] = 'Could not add the game';
        }
    }
};

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM gameList WHERE id = $id");
    header('location:./adminPage.php');
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width = title, initial-scale=1.0">
<script src="https://kit.fontawesome.com/a3c4741b90.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="./style.css?v=<?php echo time(); ?>">
<title>Admin page</title>
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
    <div class="header">
        <img src="../Styles/NES_logo.svg" alt="">
        <h2>Choose game according to your personality</h2>
    </div>
    <div class="search">
        <input type="text" id="search" placeholder="Search">
        <span class="search-icon">
            <i class="fa-solid fa-magnifying-glass"></i>
        </span>
            <i class="fa-solid fa-xmark"></i>
    </div>

    <script>
        let search = document.querySelector(".search"),
        searchIcon = document.querySelector(".search-icon"),
        closeIcon = document.querySelector(".fa-xmark");

        console.log(search, searchIcon, closeIcon)
        searchIcon.addEventListener("click", () => search.classList.add("open"));
        closeIcon.addEventListener("click", () => search.classList.remove("open"));
    </script>
</header>

<section class="body">
    <div class="name">
        <h1>Edit game</h1>
    </div>


    <section class="add-games">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="flex">
                <input type="text" name="game_name" class="box" required placeholder="enter game name">
            </div>
            <div class="inputBox">
                <input type="file" name="game_image" required class="box" accept="image/jpg, image/jpeg, image/png">
            </div>
            <input type="submit" class="btn" value="add product" name="add_game">
        </form>
    </section>

    <?php
    $select_games = mysqli_query($conn, "SELECT * FROM gameList");
    ?>

    <section class="show-product">
        <div class="list">
            <?php
            while($row = mysqli_fetch_assoc($select_games)){
                ?>
                <div class="game-display-table">
                    <img src="upload_image/<?php echo $row['image'];?>" alt="" width="200" height="150">
                    <div class="nameG"><?php echo $row['name'];?></div>
                    <div class="star"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                    <div class="flex-btn">
                        <a href="./adminUpdate.php?edit=<?php echo $row ['id']?>" class="btn"><i class="fas fa-edit"></i> Edit </a>
                        <a href="./adminPage.php?delete=<?php echo $row ['id']?>" class="btn"><i class="fas fa-trash"></i> Delete </a>
                    </div>
                </div>
                <?php
            };
            ?>
        </div>
    </section>
</section>

<section class="footer">
    <div class="col">
        <img class="logo" src="image/logo.png" alt="">
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
</section>
</body>
</html>
