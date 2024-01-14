<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width = title, initial-scale=1.0">
   <script src="https://kit.fontawesome.com/a3c4741b90.js" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <link rel="stylesheet" href="./style.css?v=<?php echo time(); ?>">
   <link rel="stylesheet" href="./style1.css?v=<?php echo time(); ?>">
   <title>Software project</title>
</head>
<body>
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

   <div class="body">
      <div class="name">
         <h1>Recommend game</h1>
      </div>
      <div class="input-group">
         <form class="filter">
            <h2>Choose option</h2>
            <div class="items">
               <select name="age" id="recommend_option">
                  <option value="" selected>Age</option>
                  <option value="From 5 to 16">From 5 to 16</option>
                  <option value="From 11 to 16">From 11 to 16</option>
                  <option value=">16">>16</option>
               </select>
            </div>
            <div class="items">
               <select name="type" id="recommend_option">
                  <option value="" selected>Type of game</option>
                  <option value="Action">Action</option>
                  <option value="Adventure">Adventure</option>
                  <option value="Puzzle">Puzzle</option>
                  <option value="Racing">Racing</option>
                  <option value="Kid">Kid</option>
               </select>
            </div>
            <div class="items">
               <select name="time" id="recommend_option">
                  <option value="" selected>Length of time</option>
                  <option value="Less than 3 hours">Less than 3 hours</option>
                  <option value="From 3 to 5 hours">From 3 to 5 hours</option>
                  <option value="From 5 to 8 hours">From 5 to 8 hours</option>
               </select> 
            </div>
            <div class="items">
               <select name="rate" id="recommend_option">
                  <option value="" selected>Rating </option>
                  <option value="5 Stars">5 stars</option>
                  <option value="4 Stars">4 stars</option>
                  <option value="3 Stars">3 stars</option>
                  <option value="2 Stars">2 stars</option>
                  <option value="1 Stars">1 stars</option>
               </select> 
            </div>
            <div class="items">
               <select name="platform" id="recommend_option">
                  <option value="" selected>Platform </option>
                  <option value="PS 1">PS 1</option>
                  <option value="N64">N64</option>
                  <option value="From 5 to 8 hours">Xbox</option>
               </select> 
            </div>
            <br>
            <div class="button" id="button">
               <input type="Submit" value="submit" id="submit">   
               <input type="Reset" value="reset" id="reset">
            </div>
         </form>
         <div id="list">
            <!-- list of game -->
            <!-- <div class="">
               <img src="./image/Conkersbfdbox.jpg" alt="btn">
               <div class="items">
                  <div class="title">
                     <div class="nameG">
                     Name
                     </div>
                  <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                  </div>
               </div>
            </div> -->
         </div>
      </div>
   </div>
   <script src="./script.js"></script>
   
   <footer class="section-p1">
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
         <a href="../about/index.html">About us</a>
         <a href="#">Contact Us</a>
      </div>
   </footer>
</body>
</html>