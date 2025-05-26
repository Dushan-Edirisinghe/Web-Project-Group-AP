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
  <link rel="stylesheet" href="./src/styles/about.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link href="src/styles/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
</head>

<body>
  <section id="header">
    <div class="lavender">
      <a href="/Amber/index.php"><img src="src/assets/images/logo1.png" alt="main-logo"></a>
      <a href="/Amber/index.php">Amber Premium.Inc</a>
    </div>

    <div>
      <ul id="navbar">
        <li><a href="/Amber/index.php">Home</a></li>
        <li><a href="/Amber/src/pages/shop.php">Shop</a></li>
        <li><a href="/Amber/about.php" class="active">About Us</a></li>
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
<!-- start about section -->
	<section class="about_section layout_padding ">
      <div class="container  ">
        <div class="row">
          <div class="col-md-6">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                About Amber Premium&nbsp;&nbsp;</h2>
              </div>
              <p>
				  <ul type="square">
					  <li>
						  About Us
						  <ul>
						  <li><p>At Amber Premium, we are passionate about creating high-quality, sustainable textile products that not only meet the needs of our customers but also positively impact our planet. With a dedication to innovation, craftsmanship, and sustainability, we strive to set new standards in the textile industry.</p></li>
						  </ul>
					  </li>
					  <li>
						  Our Vision
						  <ul>
						  <li><p>To be a global leader in the textile industry, renowned for our commitment to quality, sustainability, and innovation. We aim to inspire and empower individuals and communities through our products, fostering a better, more sustainable world.</p></li>
						  </ul>
					  </li>
					  <li>
						  Our Mission
						  <ul type="disc">
						  <li>
							  Quality First
							  <ul type="circle">
							  <li><p>To deliver superior textile products that exceed our customers expectations.</p></li>
							  </ul>
							  </li>
							  <li>
								  Sustainable Practices
							  <ul type="circle">
							  <li><p>To minimize our environmental footprint through eco-friendly materials and processes.</p></li>
							  </ul>
							  </li>
							  <li>
								  Innovation
							  <ul type="circle">
							  <li><p>To continuously innovate and improve our products and practices.</p></li>
							  </ul>
							  </li>
							  <li>
								  Customer Satisfaction
							  <ul type="circle">
							  <li><p>To prioritize our customers needs and provide exceptional service.</p></li>
							  </ul>
							  </li>
							  <li>
								  Community Engagement
							  <ul type="circle">
							  <li><p>To contribute positively to the communities we serve and support initiatives that make a difference.</p></li>
							  </ul>
							  </li>
						  </ul>
					  </li>
					  <li>
						  Our Values
					  <ul type="disc">
						  <li>
							  Integrity
						  <ul type="circle">
							  <li><p>We uphold the highest standards of integrity in all our actions.</p></li>
							  </ul>
						  </li>
						  <li>
							  Excellence
						  <ul type="circle">
							  <li><p>We pursue excellence in everything we do.</p></li>
							  </ul>
						  </li>
						  <li>
							  Responsibility
						  <ul type="circle">
							  <li><p>We take responsibility for our actions and their impact on the environment and society.</p></li>
							  </ul>
						  </li>
						  <li>
							  Collaboration
						  <ul type="circle">
							  <li><p>We believe in the power of collaboration and work closely with our partners, customers, and communities.</p></li>
							  </ul>
						  </li>
						  <li>
							  Innovation
						  <ul type="circle">
							  <li><p>We embrace change and are always looking for new ways to improve.</p></li>
							  </ul>
						  </li>
						  </ul>
					  </li>
					  <li>
						  Our Story
					  <ul>
						  <li><p>Founded in 2024, Amber Premium began with a simple idea: to create high-quality textiles that are kind to the planet. Our journey started with a small team of passionate individuals who believed in making a difference. Today, we have grown into a reputable brand known for our commitment to quality, sustainability, and innovation.
</p></li>
						  </ul>
					  </li>
					  <li>
						  What We Offer
					  <ul type="disc">
						  <li>
							  Eco-Friendly Fabrics
						  <ul type="circle">
							  <li><p>Our fabrics are made from sustainable materials, ensuring minimal environmental impact.</p></li>
							  </ul>
						  </li>
						  <li>
							  Innovative Designs
						  <ul type="circle">
							  <li><p>We offer a wide range of textile products featuring modern designs and innovative solutions.</p></li>
							  </ul>
						  </li>
						  <li>
							  Custom Solutions
						  <ul type="circle">
							  <li><p>We provide tailored solutions to meet the unique needs of our customers.</p></li>
							  </ul>
						  </li>
						  <li>
							  Exceptional Service
						  <ul type="circle">
							  <li><p>Our dedicated team is always ready to assist you with any inquiries or concerns.</p></li>
							  </ul>
						  </li>
						  </ul>
					  </li>
					  <li>
						  Join Us on Our Journey
						  <ul>
						  <li><p>At Ape Products, we believe that together, we can create a better future. We invite you to join us on our journey towards sustainability and excellence. Whether you are a customer, partner, or supporter, we value your contribution and look forward to making a positive impact together.</p></li>
						  </ul>
					  </li>
				</ul>
                 </p>
            </div>
          </div>
		  
		  <!-- start about images section -->
          <div class="col-md-6">
            <div class="img-box">
              <img class="im" src="images/index1.jpg" alt="">
				<p></p>
				<img  class="im" src="images/index2.jpg" alt="">
				<p></p>
				<img class="im" src="images/index3.jpg" alt="">
				<p></p>
            </div>
          </div>
        </div>
      </div>
    </section>
		  <!-- end about section -->

  
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