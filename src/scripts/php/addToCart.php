<?php
require 'conn.php';


session_start();
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // user is logged in 
    $userid = $_SESSION['user_id'];
    echo $userid;

} else {
    // user not logged in
    echo "<script> alert('Please login to continue');</script>";
}

$itemid = $_POST["itemID"];

$sql1 = 
    "INSERT INTO cartitems ( 'cart_idcart', 'cart_customer_user_iduser', 'item_iditem', 'quantitiy', 'price', 'addedTime')
    VALUES (
        '(SELECT idcart FROM cart WHERE customer_user_iduser = (SELECT iduser FROM user WHERE user.email = '$userid'))',
        '(SELECT customer_idcustomer FROM cart WHERE customer_user_iduser = (SELECT iduser FROM user WHERE user.email = '$userid'))',
        '$userid',
        '$itemid',
        '1',
        '(SELECT itemPrice FROM item WHERE iditem = $itemid)',
        'NOW()'
    );";

$sql2 = "UPDATE item SET itemQuantity = itemQuantity - 1 WHERE iditem = $itemid;";

try {
    $conn -> query($sql1);
    $conn -> query($sql2);
    echo "data inserted!";
} catch (PDOException $e) {
    echo '<script>alert("Registration Error! '. $e ->getMessage().')</script>;';
}

?>