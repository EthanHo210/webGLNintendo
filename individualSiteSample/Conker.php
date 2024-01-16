<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Review</title>
    <link rel="stylesheet" href="review.css?v=<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/0f37397caf.js" crossorigin="anonymous"></script>
</head>    

<body>
<header>
    <a href="#"><img src="../Styles/NES_logo.svg" class="logo" alt=""></a>
    <div>
        <ul id="navbar">
            <a href="../user/home.php">Home</a>
            <a href="../user/home.php">Reviews</a>
            <a href="../index.php">Login</a>
        </ul>
    </div>
</header>

<section id="game-detail" class="section-p1">
    <div class="slideShow-review">
        <div class="slideShow">
            <div class="slide">
                <img src="./img/Conkersbfdbox.jpg" alt="">
                <div class="text">1/3</div>
            </div>
            <div class="slide">
                <img src="./img/MV5BMjI1ODJjNDUtNDM4MC00N2FiLTllMTMtNTk5Mjg3N2EyZTk3XkEyXkFqcGdeQXVyMjU2NDgzODU@.webp" alt="">
                <div class="text">2/3</div>
            </div>
            <div class="slide">
                <img src="./img/MV5BMmIwOTE2MDYtYzFlNC00NGM2LWJhZmItN2Q5Zjk3MjU2MGI4XkEyXkFqcGdeQXVyMjU2NDgzODU@.webp" alt="">
                <div class="text">3/3</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
        </div>
    </div>
    
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("slide");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}    
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
            }
            for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
        }
    </script>
    
    <div class="review">
        <div class="review-info">
            <h3>Home/Action - Adventure</h3>
            <h4>Conker Bad Fur Day</h4>
            <span>Release date: March 5, 2001</span>
            <br>
            <span>Genre: Platform, Fighting, Action-adventure</span>
            <br>
            <div class="star">
                <span>Ratings: 
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>                
                </span>
                <br>
            </div>
            <span>Available in: N64</span>
            <br>
        </div>
    </div>
</section>

<div class="detail-review">
    <h3>Overview</h3>
<span>
The opening cut scene of the game shows Conker, seated on a large, golden throne drinking a glass of milk. Inside Conker's throne room are several bizarre creatures; it is only after introductions are done that Conker tells his story. <br><br>
After a night of heavy drinking, Conker, extremely drunk, ends-up wandering away into the night in the direction opposite of his house. Passing out, Conker wakes up later in a strange land. During that day Conker just wants to find his way home but he keeps getting dragged into crazy situations by characters that he has never met before. Conker does tasks from returning a bee- hive to its rightful owner to fighting in a war between the Squirrel High Command and the Tediz, led by the evil Panther King.</span>
</div>

<section id="review1" class="section-p1">
    <h2>Read more related review here</h2>
    <div class="pro-container">
        <div class="pro">
            <a href="./Sonic.php"><img src="./img/download.jpg" alt=""></a>
            <div class="des">
                <div class="name">
                    <span>2022 Outstanding Story-rich Game</span>
                    <h5>Sonic the hedgehog 2</h5>
                </div>
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
            </div>
        </div>
        <div class="pro">
            <a href="./Mario.php"><img src="./img/Super_Mario_64_Boxart.png" alt=""></a>
            <div class="des">
                <div class="name">
                    <span>2022 Best Game on the go</span>
                    <h5>Super Mario</h5>
                </div>
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
            </div>
        </div>
        <div class="pro">
            <a href="./Kagero.php"><img src="./img/Kagero_eur.webp" alt=""></a>
            <div class="des">
                <div class="name">
                    <span>2022 Most Innovative Gameplay</span>
                    <h5>Kagero deception 2</h5>
                </div>
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
            </div>
        </div>
        <div class="pro">
            <a href="./Shaolin.php"><img src="./img/shaolinj.jpg" alt=""></a>
            <div class="des">
                <div class="name">
                    <span>2022 Outstanding Story-rich Game</span>
                    <h5>Shaolin</h5>
                </div>
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
            </div>
        </div>
    </div>
</section>

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
        <img class="logo" src="img/logo.png" alt="">
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