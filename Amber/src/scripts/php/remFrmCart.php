<?php

require 'conn.php';


session_start();
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // user is logged in 
    $userid = $_SESSION['user_id'];

} else {
    // user not logged in
    echo "<script> alert('Please login to continue');</script>";
}



?>