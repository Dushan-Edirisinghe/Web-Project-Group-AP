<?php
session_start();
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
  // user is logged in 
} else {
  // user not logged in
  echo "<script> alert('Please login to purcase items');</script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <title>Amber Premium.INC</title>
  <link rel="stylesheet" href="./src/styles/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link href="src/styles/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
</head>

<body>
  <section id="header">
    <div class="lavender">
      <a href="index.html"><img src="src/assets/images/logo1.png" alt="main-logo"></a>
      <a href="index.html">Amber Premium.Inc</a>
    </div>

    <div>
      <ul id="navbar">
        <li><a href="/Amber/index.php" class="active">Home</a></li>
        <li><a href="/Amber/src/pages/shop.php">Shop</a></li>
        <li><a href="about.html">About Us</a></li>
        <li><a href="searchbar.html"><i class="fa-regular fa-solid fa-magnifying-glass"></i></a></li>
        <li><a href="/Amber/src/pages/login.php"><i class="fa-regular fa-user"></i></a></li>
        <li><a href="/Amber/src/pages/cart.php"><i class="fa fa-cart-shopping"></i></a></li>
      </ul>
    </div>
    <div id="cartPopup" class="cart-popup">
      <div class="cart-popup-content">
        <span class="close-btn">&times;</span>

        <!-- Add more cart details here -->
      </div>
    </div>
  </section>
  <div class="container-fluid">
    <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel" style="background-color: #FDFFF7">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active"><img class="d-block mx-auto" src="src/assets/images/banners/apmainbanner1.png"
            alt="First slide" width:"800px" height="800px">
          <div class="carousel-caption">
            <section id="hero">

            </section>
          </div>
        </div>
        <div class="carousel-item"><img class="d-block mx-auto" src="src/assets/images/banners/apmainbanner 2.png"
            alt="Second slide" width="1600px" height="800px">
          <div class="carousel-caption">
            <section id="hero1">
            </section>
          </div>
        </div>
        <div class="carousel-item"><a href="boutique1.html"><img class="d-block mx-auto"
              src="src/assets/images/banners/apmainbanner3.png" alt="Third slide" width="1600px" height="800px">
            <div class="carousel-caption">
              <section id="hero2">
              </section>
            </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev"> <span
          class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span>
      </a> <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span>
      </a>
    </div>
    <h1>&nbsp;</h1>
  </div>

  <section id="brand" class="container">
    <a href="branded.html">
      <div class="row">
        <img class="img-fluid col-lg-2 col-md-4 col-6" src="src/assets/images/brand/calvin.jpg" alt=""
          max-height="150px" width="100px">
        <img class="img-fluid col-lg-2 col-md-4 col-6" src="src/assets/images/brand/dior.jpg" alt="" max-height="150px"
          width="100px">
        <img class="img-fluid col-lg-2 col-md-4 col-6" src="src/assets/images/brand/tiffany.jpg" alt=""
          max-height="150px" width="100px">
        <img class="img-fluid col-lg-2 col-md-4 col-6" src="src/assets/images/brand/versace.jpg" alt=""
          max-height="150px" width="100px">
        <img class="img-fluid col-lg-2 col-md-4 col-6" src="src/assets/images/brand/fendi.jpg" alt="" max-height="150px"
          width="100px">
      </div>
    </a>
  </section>
  <h1>&nbsp;</h1>
  <section id="brand1" class="container-fluid">
    <div class="row">
      <div class="col-lg-4">
        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel"
          style="background-color:#FDFFF7">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active"> <img class="d-block mx-auto" src="src/assets/images/hoodie/hoodie2.jpg"
                alt="First slide">
              <div class="carousel-caption">
                <section id="banner">
                  <div class="container">
                    <h4>Hoodies</h4>
                    <h1>Gents Section</h1>
                    <button><a href="boutiqueman1.html"> Shop Now</a></button>
                  </div>
                </section>
              </div>
            </div>
            <div class="carousel-item"> <img class="d-block mx-auto carousel-img"
                src="src/assets/images/jackets/jacket1.jpg" alt="Second slide">
              <div class="carousel-caption">
                <section id="banner1">
                  <div class="container">
                    <h4>Jackets</h4>
                    <h1>Gents Section</h1>
                    <button><a href="boutiqueman1.html"> Shop Now</a></button>
                  </div>
                </section>
              </div>
            </div>
            <div class="carousel-item"> <img class="d-block mx-auto carousel-img"
                src="src/assets/images/tops/tshirt2.jpg" alt="Third slide">
              <div class="carousel-caption">
                <section id="banner2">
                  <div class="container">
                    <h4>T-Shirts</h4>
                    <h1>Gents Section</h1>
                    <button><a href="boutiqueman1.html"> Shop Now</a></button>
                  </div>
                </section>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span>
          </a> <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
        </div>
      </div>
      <div class="col-lg-4">
        <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel"
          style="background-color: #FDFFF7">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active"> <img class="d-block mx-auto carousel-img"
                src="src/assets/images/hoodie/hoodie1.jpg" alt="First slide">
              <div class="carousel-caption">
                <section id="banner3">
                  <div class="container">
                    <h4>Hoodies</h4>
                    <h1>Ladies Section</h1>
                    <button><a href="boutiquewoman1.html"> Shop Now</a></button>
                  </div>
                </section>
              </div>
            </div>
            <div class="carousel-item"> <img class="d-block mx-auto" src="src/assets/images/jackets/jacket2.jpg"
                alt="Second slide">
              <div class="carousel-caption">
                <section id="banner4">
                  <div class="container">
                    <h4>Jackets</h4>
                    <h1>Ladies Section</h1>
                    <button><a href="boutiquewoman1.html"> Shop Now</a></button>
                  </div>
                </section>
              </div>
            </div>
            <div class="carousel-item"> <img class="d-block mx-auto" src="src/assets/images/tops/tshirt1.jpg"
                alt="Third slide">
              <div class="carousel-caption">
                <section id="banner5">
                  <div class="container">
                    <h4>T-Shirts</h4>
                    <h1>Ladies Section</h1>
                    <button><a href="boutiquewoman1.html"> Shop Now</a></button>
                  </div>
                </section>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span>
          </a> <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
        </div>
      </div>
      <div class="col-lg-4">
        <div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel"
          style="background-color: #FDFFF7">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators4" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators4" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators4" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active"> <img class="d-block mx-auto" src="src/assets/images/kids/kid2.jpg"
                alt="First slide">
              <div class="carousel-caption">
                <section id="banner6">
                  <div class="container">
                    <h4>Hoodies</h4>
                    <h1>Kids Section</h1>
                    <button><a href="boutiquekid1.html"> Shop Now</a></button>
                  </div>
                </section>
              </div>
            </div>
            <div class="carousel-item"> <img class="d-block mx-auto" src="src/assets/images/kids/kid1.jpg"
                alt="Second slide">
              <div class="carousel-caption">
                <section id="banner7">
                  <div class="container">
                    <h4>T-Shirt</h4>
                    <h1>Kids Section</h1>
                    <button><a href="boutiquekid1.html"> Shop Now</a></button>
                  </div>
                </section>
              </div>
            </div>
            <div class="carousel-item"> <img class="d-block mx-auto" src="src/assets/images/caps/cap1.jpg"
                alt="Third slide">
              <div class="carousel-caption">
                <section id="banner8">
                  <div class="container">
                    <h4>Caps</h4>
                    <h1>Kids Section</h1>
                    <button><a href="boutiquekid1.html"> Shop Now</a></button>
                  </div>
                </section>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators4" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span>
          </a> <a class="carousel-control-next" href="#carouselExampleIndicators4" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
        </div>
      </div>
    </div>
  </section>

  <section id="feedback">
    <div class="text">
      <h3><a href="formulaire.html">Happy Cutomers</a></h3>
    </div>
    <div id="services">
      <div class="service">
        <h4>Satisfaction Guaranteed</h4>
        <img src="src/assets/images/index1.jpg" alt="" class="rounded-circle img-fluid">
        <p>"Best offers to exist"</p>
        <p>-Maria Rojo</p>
        <p class="star"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-star-half" aria-hidden="true"></i></a>
        </p>
      </div>
      <div class="service">
        <h4>Fast Delevery</h4>
        <img src="src/assets/images/index1.jpg" alt="" class="rounded-circle img-fluid">
        <p>"Very efficient delevery service"</p>
        <p>-Marwane King</p>
        <p class="star"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
        </p>
      </div>
      <div class="service">
        <h4>Secure Payment</h4>
        <img src="src/assets/images/index1.jpg" alt="" class="rounded-circle img-fluid">
        <p>"Never been robbed"</p>
        <p>-Haftari</p>
        <p class="star"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-star-half" aria-hidden="true"></i></a>
        </p>
      </div>
    </div>
  </section>

  <footer id="footer">
    <div class="footerrow container">
      <div class="footer-one">
        <div class="F-lavender">
          <a href="index.html"><img src="src/assets/images/admin/logo.png" alt=""></a>
          <a href="index.html">Amber Premium.INC</a>
        </div>
      </div>
      <div class="footer-one">
        <h5>Featured</h5>
        <ul>
          <li><a href="boutiquewoman1.html">LADIES</a></li>
          <li><a href="boutiqueman1.html">GENTS</a></li>
          <li><a href="boutiquekid1.html">KIDS</a></li>
          <li><a href="blog.html">REVIEW</a></li>
          <li><a href="searchbar.html">SEARCH</a></li>
          <li><a href="contact.html">CONTACT US</a></li>
          <li><a href="login.html">LOGIN</a></li>

        </ul>
      </div>
      <div class="footer-one">
        <h5>Contact us</h5>
        <div>
          <h6>Address</h6>
          <p>No:123 <br>Abc road <br>Colombo</p>
        </div>
        <div>
          <h6>phone</h6>
          <p>+94-778272524</p>
        </div>
        <div>
          <h6>Email</h6>
          <p>AmberPremium@gmail.com</p>
        </div>
      </div>
      <div class="footer-one" id="blacandwhite">
        <div class="fontawesome" style="margin: 20px;width: 1cm; height: 1cm; filter: grayscale(100%);">
          <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
          <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
        </div>
        <!-- <h5>Instagram</h5>
        <div>
          <img src="blackandwhite/elle.jpg" alt="">
          <img src="blackandwhite/pose.jpg" alt="">
        </div>
        <div>
          <img src="blackandwhite/tay.jpeg" alt="">
          <img src="blackandwhite/taylor.jpg" alt="">
        </div> -->
      </div>
    </div>
    <div class="copyright">
      <div class="footerrow container">
        <div class="payment">
          <!-- <img src="payment/MasterCard.jpg" alt="">
          <img src="payment/Edinar.jpg" alt="">
          <img src="payment/Visa.jpg" alt=""> -->
        </div>
        <div style="margin-left:auto;margin-right:auto;">
          <p> AMBER PREMIUM.INC © 2024 ALL RIGHTS RESERVED </p>
        </div>

      </div>
    </div>
  </footer>



  <script src="src/scripts/js/contact.js"></script>
  <script src="src/scripts/js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="src/scripts/js/jquery-3.4.1.min.js"></script>
  <script src="src/scripts/js/popper.min.js"></script>
  <script src="src/scripts/js/bootstrap-4.4.1.js"></script>
  <script>
    const swiper = new Swiper('.swiper', {
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },


    });
  </script>

</body>

</html>