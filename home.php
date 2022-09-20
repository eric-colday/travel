<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Accueil</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">Agence de voyage .</a>

   <nav class="navbar">
      <a href="home.php">Accueil</a>
      <a href="about.php">A propos</a>
      <a href="package.php">Services</a>
      <a href="book.php">Reservation</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
            <div class="content">
               <span>explorer, découvrir, voyager</span>
               <h3>Faire le tour du monde</h3>
               <a href="package.php" class="btn">découvrir plus</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
            <div class="content">
               <span>explorer, découvrir, voyager</span>
               <h3>découvrez les nouveaux lieux</h3>
               <a href="package.php" class="btn">découvrir plus</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
               <span>explorer, découvrir, voyager</span>
               <h3>rendez votre visite intéressante</h3>
               <a href="package.php" class="btn">découvrir plus</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> Nos services </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>aventure</h3>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>guide touristique</h3>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>randonnée</h3>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>feu de camp</h3>
      </div>

      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>Auto stop</h3>
      </div>

      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>camping</h3>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/about-img.jpg" alt="">
   </div>

   <div class="content">
      <h3>A propos</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita et, recusandae nobis fugit modi quibusdam ea assumenda, nulla quisquam repellat rem aliquid sequi maxime sapiente autem ipsum? Nobis, provident voluptate?</p>
      <a href="about.php" class="btn">Lire plus</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> nos offres </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/img-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>aventure et visite</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="book.php" class="btn">reserver</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>aventure et visite</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="book.php" class="btn">reserver</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/img-3.jpg" alt="">
         </div>
         <div class="content">
            <h3>adventure & tour</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="book.php" class="btn">reserver</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">Recharger plus</a> </div>

</section>

<!-- home packages section ends -->

<!-- home offer section starts  -->

<section class="home-offer">
   <div class="content">
      <h3>OBTENEZ 50 % DE RÉDUCTION</h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure tempora assumenda, debitis aliquid nesciunt maiores quas! Magni cumque quaerat saepe!</p>
      <a href="book.php" class="btn">reserver</a>
   </div>
</section>

<!-- home offer section ends -->

















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>Liens rapides</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> Accueil</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> A propos</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> Services</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i>reservation</a>
      </div>

      <div class="box">
         <h3> Extras liens</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> Faq</a>
         <a href="#"> <i class="fas fa-angle-right"></i> A propos</a>
         <a href="#"> <i class="fas fa-angle-right"></i>politique de confidentialité</a>
         <a href="#"> <i class="fas fa-angle-right"></i> conditions d'utilisation</a>
      </div>

      <div class="box">
         <h3>contact</h3>
         <a href="#"> <i class="fas fa-phone"></i> + 33 698342060 </a>
         <a href="#"> <i class="fas fa-phone"></i> + 33 698342060 </a>
         <a href="#"> <i class="fas fa-envelope"></i> noubissi10@yahoo.fr </a>
         <a href="#"> <i class="fas fa-map"></i> 3 rue Oberlin, 67000 Strasbourg </a>
      </div>

      <div class="box">
         <h3>Nous suivre</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> © 2022, <span>Noubissi Eric Colday</span> </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>