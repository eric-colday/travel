<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

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

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>Reservation</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">RESERVEZ VOTRE VOYAGE !</h1>

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>nom :</span>
            <input type="text" placeholder="entrez votre nom" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="entrez votre email" name="email">
         </div>
         <div class="inputBox">
            <span>Tel :</span>
            <input type="number" placeholder="entrez votre numéro" name="phone">
         </div>
         <div class="inputBox">
            <span>adresse :</span>
            <input type="text" placeholder="entrez votre adresse" name="address">
         </div>
         <div class="inputBox">
            <span>Où Aller :</span>
            <input type="text" placeholder="lieu à visite" name="location">
         </div>
         <div class="inputBox">
            <span>Combien :</span>
            <input type="number" placeholder="nombre de personnes" name="guests">
         </div>
         <div class="inputBox">
            <span>Arrivée :</span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>Départ :</span>
            <input type="date" name="leaving">
         </div>
      </div>

      <input type="submit" value="envoi" class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->

















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