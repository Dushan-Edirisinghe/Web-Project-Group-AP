<?php
require 'conn.php';

$full_name = $_POST["name"];
$email = $_POST["userid"];
$password = $_POST["password"];

if (preg_match('/^(\S+)\s+(.+)$/', $full_name, $matches)) {
    $fname = $matches[1]; // First name
    $lname = $matches[2]; // Last name
} else {
    $fname = $full_name;
    $lname = ''; // No last name provided
}

$salt = bin2hex(random_bytes(16));
$hashedPassword = hash('sha256', $salt . $password);
$encodedPassword = base64_encode($hashedPassword);
$encodedSalt = base64_encode($salt);

$sql = "INSERT INTO user (fnameUser, lnameUser, email, type, passhash, salt) VALUES ('$fname', '$lname', '$email', 'U', '$encodedPassword', '$encodedSalt'); ";

try {
    $conn -> query($sql);
    echo '<script>alert("User Registered Successfully!);</script>';
    $reg_state = 1;    
} catch (PDOException $e) {
    echo '<script>alert("Registration Error! '. $e ->getMessage().')</script>;';
    $reg_state = 0;
}

if ($reg_state == 1) {
    header('Location: /Amber/index.php');
    exit();
} else {
    header('Location: /Amber/src/pages/login.php');
}

?>