<?php

require '../scripts/php/conn.php';


session_start();
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // user is logged in 
    $userid = $_SESSION['user_id'];

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
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/woman.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link href="../styles/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
</head>

<script>
    function addToCart() {
        let data = new FormData("itemID","6");
        let request = new XMLHttpRequest();
        request.open("POST", "../scripts/php/addToCart.php");
        request.send(data);
        console.log('request sent');
        return false;
    }
</script>

<body>
    <section id="header">
        <div class="lavender">
            <a href="index.html"><img src="../assets/images/logo1.png" alt="main-logo"></a>
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
    </section>

    <section id="produit" class="section-p1">
        <p class="h3">Welcome to the Amber Store</p>
        
        <div class="procontainer">
            <div class="pro">
                <img src="../assets/images/hat/hat1.jpg" alt="">
                <div class="des">
                    <span>CALVIN KLEIN</span>
                    <h5>Black Beanie</h5>
                    <div class="star1">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>80DT</h4>
                </div>
                <button type="button" class="shopping-button fa-solid fa-cart-shopping" onclick="addToCart()"></button>
            </div>

            <div class="pro">
                <img src="../assets/images/hat/hat2.jpg" alt="">
                <div class="des">
                    <span>BERSHKA</span>
                    <h5>beanie maroon</h5>
                    <div class="star1">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>80DT</h4>
                </div>
                <button type="button" class="shopping-button fa-solid fa-cart-shopping" onclick="addToCart()"></button>
            </div>

            <div class="pro">
                <img src="../assets/images/caps/cap2.jpg" alt="">
                <div class="des">
                    <span>PLAYBOY</span>
                    <h5>White Beanie</h5>
                    <div class="star1">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>60DT</h4>
                </div>
                <button type="button" class="shopping-button fa-solid fa-cart-shopping" onclick="addToCart()"></button>
            </div>

            <div class="pro">
                <img src="../assets/images/hat/hat2.jpg" alt="">
                <div class="des">
                    <span>ZARA</span>
                    <h5>Beanie</h5>
                    <div class="star1">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>50DT</h4>
                </div>
                <button type="button" class="shopping-button fa-solid fa-cart-shopping" onclick="addToCart()"></button>
            </div>

            <div class="pro">
                <img src="../assets/images/hat/hat2.jpg" alt="">
                <div class="des">
                    <span>MICHAEL KORS</span>
                    <h5>Belt beige</h5>
                    <div class="star1">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>80DT</h4>
                </div>
                <button type="button" class="shopping-button fa-solid fa-cart-shopping" onclick="addToCart()"></button>
            </div>

            <div class="pro">
                <img src="../assets/images/hat/hat2.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>belt</h5>
                    <div class="star1">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>180DT</h4>
                </div>
                <button type="button" class="shopping-button fa-solid fa-cart-shopping" onclick="addToCart()"></button>
            </div>

            <div class="pro">
                <img src="../assets/images/hat/hat2.jpg" alt="">
                <div class="des">
                    <span>VERSACE</span>
                    <h5>Bracelet</h5>
                    <div class="star1">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>70DT</h4>
                </div>
                <button type="button" class="shopping-button fa-solid fa-cart-shopping" onclick="addToCart()"></button>
            </div>

            <div class="pro">
                <img src="../assets/images/hat/hat2.jpg" alt="">
                <div class="des">
                    <span>CALVIN KLEIN</span>
                    <h5>hat</h5>
                    <div class="star1">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>150DT</h4>
                </div>
                <button type="button" class="shopping-button fa-solid fa-cart-shopping" onclick="addToCart()"></button>
            </div>

            <div class="pro">
                <img src="../assets/images/hat/hat2.jpg " alt="">
                <div class="des">
                    <span>GUCCI</span>
                    <h5>Shades</h5>
                    <div class="star1">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>180DT</h4>
                </div>
                <button type="button" class="shopping-button fa-solid fa-cart-shopping" onclick="addToCart()"></button>
            </div>
        </div>
    </section>

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
            </div>
        </div>
        <div class="copyright">
            <div class="footerrow container">
                <div class="payment">
                </div>
                <div style="margin-left:auto;margin-right:auto;">
                    <p> AMBER PREMIUM.INC © 2024 ALL RIGHTS RESERVED </p>
                </div>
            </div>
        </div>
    </footer>



    <script src="../scripts/js/contact.js"></script>
    <script src="../scripts/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.4.1.js"></script>
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


    <style>
        .shopping-button {
            font-size: 1rem;
            font-weight: 700;
            color: #25be36;
            border: 2px solid #25be36;
            border-radius: 25px;
            background-color: white;
            padding: 13px 30px;
            margin: 15px;
            text-transform: uppercase;
            text-decoration: none;
        }

        .shopping-button:hover {
            transition: all 0.5s ease-in-out;
            font-size: 1rem;
            font-weight: 700;
            color: white;
            border: 2px solid white;
            border-radius: 25px;
            background-color: #25be36;
            padding: 13px 30px;
            margin: 15px;
            text-transform: uppercase;
            text-decoration: none;
        }
    </style>

</body>

</html>