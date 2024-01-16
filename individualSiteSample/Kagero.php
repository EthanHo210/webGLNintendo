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
                <img src="./img/Kagero_eur.webp" alt="">
                <div class="text">1/3</div>
            </div>
            <div class="slide">
                <img src="./img/kagerogastone.jpg" alt="">
                <div class="text">2/3</div>
            </div>
            <div class="slide">
                <img src="./img/kageromclord.jpg" alt="">
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
            <h4>Kagero deception 2</h4>
            <span>Release date: July 23, 1998</span>
            <br>
            <span>Genre: Action, Role-playing Video game, Stategy Video game</span>
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
            <span>PlayStation Portable, Playstation, PlayStation Vita</span>
            <br>
        </div>
    </div>
</section>

<div class="detail-review">
    <h3>Overview</h3>
    <span>
        Shifting the viewpoint to third-person and the emphasis to trap combos, Kagero: Deception II formed the foundation of current Deception titles and would be built upon in future titles, coming out two years after its predecessor. In it, players assume the role of Millennia, a young girl being used as a puppet and guard for a race known as Timenoids, who are like humans except immortal, and whose power is desired by the humans whose lives they govern. Millennia finds herself in the middle of the war between her own race and her captors, with her chosen side dictated by the player. <br><br>
        One of the endings to the game heavily implies that Kagero is a prequel to Tecmo's Deception, and that Millennia will grow up to become Astarte from the first game; this interpretation is supported by the fact that naming the main character in Kagero "Astarte" lets you start with a hefty sum of extra Ark (the game's currency). However, Tecmo has not made it clear if that ending is canon. <br><br>
        The change in how traps functioned gave this game a much more strategic edge than the first game, with traps able to interact with one another in long strings that could be likened to Rube Goldberg set-ups, just much more lethal and involving other people. Instead of using items such as medicinal herbs, healing was accomplished via glowing blue crystals called "loons" which could only be touched once before breaking, never to be used again in a given chapter. Trap improvement was conducted by using the points earned after successfully killing each invader, called Ark, and by following a somewhat logical "tree"—improving an Arrow Slit after a Lightning Rod was created could make a Laser Arrow, for instance. <br><br>
        Six secret traps (one of which depicted Suezo, a popular monster from Tecmo's own Monster Rancher titles) could be unlocked in future replays by completing the game and achieving all four endings in the game, as well. Traps, when constructed, could be used as often as the player liked, but required a recharge time between uses in any given level. Game saves are one block in size.</span>
</div>

<section id="review1" class="section-p1">
    <h2>Read more related review here</h2>
    <div class="pro-container">
        <div class="pro">
            <a href="./Conker.php"><img src="./img/Conkersbfdbox.jpg" alt=""></a>
            <div class="des">
                <div class="name">
                    <span>2022 Sit Back and Relax</span>
                    <h5>Conker Bad Fur Day</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
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