<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'amberdb';

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//else {
//    echo "connection success!";
//}

?>