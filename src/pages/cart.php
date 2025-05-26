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
<?php

// Remove product from the cart
if (isset($_POST['remove'])) {
    $product_id = $_POST['product_id'];
    unset($_SESSION['cart'][$product_id]);
}

// Clear the cart
if (isset($_POST['clear'])) {
    unset($_SESSION['cart']);
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link href="../styles/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
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
                <li><a href="searchbar.html"><i class="fa-regular fa-solid fa-magnifying-glass"></i></a></li>
                <li><a href="/Amber/src/pages/login.php"><i class="fa-regular fa-user"></i></a></li>
                <li><a href="/Amber/src/pages/cart.php" class="active"><i class="fa fa-cart-shopping"></i></a></li>
            </ul>
        </div>
    </section>


    <!-------------cart itrms details---------------->
    

    <!-- Cart Items Section -->
	<h1>&nbsp;</h1>
  <h1><?php echo$userid."'s" ?> Cart</h1>

<?php if (!empty($_SESSION['cart'])): ?>
    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $total = 0; ?>
            <?php foreach ($_SESSION['cart'] as $product_id => $product): ?>
                <tr>
                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo '$' . $product['price']; ?></td>
                    <td><?php echo $product['quantity']; ?></td>
                    <td><?php echo '$' . $product['price'] * $product['quantity']; ?></td>
                    <td>
                        <form method="post" action="">
                            <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                            <button type="submit" name="remove">Remove</button>
                        </form>
                    </td>
                </tr>
                <?php $total += $product['price'] * $product['quantity']; ?>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Total: <?php echo '$' . $total; ?></h2>

    <form method="post" action="">
        <button type="submit" name="clear">Clear Cart</button>
    </form>
<?php else: ?>
    <p>Your cart is empty.</p>
<?php endif; ?>

<div class="backTo"><button><a href="/Amber/src/pages/shop.php">Continue Shopping</a></button></div>

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
            </div>
        </div>
        <div class="copyright">
            <div class="footerrow container">
                <div style="margin-left:auto;margin-right:auto;">
                    <p> AMBER PREMIUM.INC © 2024 ALL RIGHTS RESERVED </p>
                </div>

            </div>
        </div>
    </footer>

    <script src="/Amber/src/scripts/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="/Amber/src/scripts/js/jquery-3.4.1.min.js"></script>
    <script src="/Amber/src/scripts/js/popper.min.js"></script>
    <script src="/Amber/src/scripts/js/bootstrap-4.4.1.js"></script>
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