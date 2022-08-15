<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photos of Manakamana</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylephotos.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <!--link to font awesome-->
		<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
<header>
        <img class="logo" src="img/logor.png" alt="logo" width="60px">
                <nav class="head">
                    <ul class="nav_links">
                        </li>
                        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="photos.php"><i class="fa fa-camera"></i> Photos</a></li>
                        <li><a href="aboutus.php"><i class="fa fa-question-circle"></i> About Us</a></li>
                        <li><a href="admin.php"><i class="fa fa-group"></i> Admin Login</a></li>
                      </ul>
                </nav>
            <div id="nav-button">
                <a href="register.php" class="cts"><button>Booking</button></a>
             </div>
</header>
<div class="contain">
<!-- Slider main container -->
<div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <!-- <div class="swiper-slide"><img src="img/base.jpg" width="800px"></div> -->
    <div class="swiper-slide"><img src="img/box.jpg"></div>
    <div class="swiper-slide"><img src="img/view.jpg"></div>
    <div class="swiper-slide"><img src="img/group.jpg"></div>
    <div class="swiper-slide"><img src="img/girls.jpg"></div>
    <div class="swiper-slide"><img src="img/mana.jpg"></div>
    <div class="swiper-slide"><img src="img/clouds.jpg"></div>
    <div class="swiper-slide"><img src="img/water.jpg"></div>
    <div class="swiper-slide"><img src="img/fb.jpg"></div>
    <div class="swiper-slide"><img src="img/goddess.jpg"></div>


   
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  
</div>
</div>
    <footer class="footer">
        <div class="content">
            <div class="row">
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Get Help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Report</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Booking</h4>
                    <ul>
                        <li><a href="#">Book Now</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Follow Us</h4>
                    <div class="social-links">
                  <a href="https://www.facebook.com/cablecarmanakamana/"><i class="fa fa-facebook-f"></i></a>
                 <a href="https://www.instagram.com/cablecarmanakamana/?hl=en"><i class="fa fa-instagram"></i></a>
                <a href="https://www.tripadvisor.com/Attraction_Review-g1934802-d2154069-Reviews-Manakamana_Cable_Car-Kurintar_Narayani_Zone_Central_Region.html"><i class="fa fa-tripadvisor"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copy"> <p>Copyright &copy;Eima Lama All Rights Reserved</p></div>

  
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper', {
        autoplay:{
            delay:3000,
            disabaleOnInteraction:false,
        },
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },


});
</script>
</body>
</html>