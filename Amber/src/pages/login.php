<?php
session_start()

    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <title>Amber Premium.INC</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link href="../styles/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../styles/login.css">
</head>

<body>
    <section id="header">
        <div class="lavender">
            <a href="/Amber/index.php"><img src="../assets/images/logo1.png" alt="main-logo"></a>
            <a href="/Amber/index.php">Amber Premium.Inc</a>
        </div>
        <!-------------navbar---------------->
        <div>
            <ul id="navbar">
                <li><a href="/Amber/index.php">Home</a></li>
                <li><a href="/Amber/src/pages/shop.php">Shop</a></li>
                <li><a href="/Amber/about.php">About Us</a></li>
                <li><a href="#"><i class="fa-regular fa-solid fa-magnifying-glass"></i></a></li>
                <li><a href="/Amber/src/pages/login.php" class="active"><i class="fa-regular fa-user"></i></a></li>
                <li><a href="/Amber/src/pages/cart.php"><i class="fa fa-cart-shopping"></i></a></li>
            </ul>
        </div>
    </section>
    <h1>&nbsp;</h1>
    <center>
        <div class="wrapper">
            <div class="form-box login">
                <h2>Sign In</h2>
                <form action="../scripts/php/auth.php" method="POST">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon>
                        </span>
                        <input type="email" id="userid1" name="userid1" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" id="password1" name="password1" required>
                        <label>Password</label>
                    </div>
                    <div class=" remember-forgot">
                        <label><input type="checkbox" value="r" name="rem" id="rem">Remember me</label>
                        <a href="#">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn1">Sign In</button>
                    <div class="login-register">
                        <p>Don't have an account? <a href="#" class="register-link">Sign Up</a> </p>
                    </div>
                </form>
            </div>

            <div class="form-box register">
                <h2>Sign Up</h2>
                <form action="../scripts/php/reg.php" method="POST">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="person"></ion-icon>
                        </span>
                        <input type="text" id="name" name="name" required>
                        <label>Full Name</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon>
                        </span>
                        <input type="email" id="userid" name="userid" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" id="password" name="password" required>
                        <label>Password</label>
                    </div>
                    <div class=" remember-forgot">
                        <label><input type="checkbox">I Agree To The Terms & Conditions</label>
                    </div>
                    <button type="submit" class="btn1">Sign Up</button>
                    <div class="login-register">
                        <p>Already have an account? <a href="#" class="login-link">Sign In</a> </p>
                    </div>
                </form>
            </div>

        </div>
        </div>
        <h1>&nbsp;</h1>
        <!-------------footer---------------->
        <footer id="footer">
            <div class="footerrow container">
                <div class="footer-one">
                    <div class="F-lavender">
                        <a href="index.html"><img src="/Amber/src/assets/images/admin/logo.png" alt=""></a>
                        <a href="index.html">Amber Premium.INC</a>
                    </div>
                </div>
                <div class="footer-one">
                    <h5>Featured</h5>
                    <ul>
                        <li><a href="boutiquewoman1.html">LADIES</a></li>
                        <li><a href="boutiqueman1.html">GENTS</a></li>
                        <li><a href="boutiquekid1.html">KIDS</a></li>
                        <li><a href="/Amber/src/pages/login.php">LOGIN</a></li>
                        <li><a href="#">.</a></li>
		        <li><a href="#">.</a></li>
		        <li><a href="#">.</a></li>

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



        <script src="../scripts/js/login.js"></script>
        <script src="../scripts/js/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script src="../scripts/js/jquery-3.4.1.min.js"></script>
        <script src="../scripts/js/popper.min.js"></script>
        <script src="../scripts/js/bootstrap-4.4.1.js"></script>
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