<?php
require 'conn.php';

$email = $_POST["userid1"];
$password = $_POST["password1"];


$sql = "SELECT passhash, salt, type FROM user WHERE email='$email';";
try {
    $res = $conn->query($sql);

    if ($res->num_rows > 0) {
        $row = $res->fetch_assoc();
        $stored_hashb64 = $row["passhash"];
        $stored_saltb64 = $row["salt"];
        $user_type = $row["type"];
    } else {
        echo "no reulst found";
    }

    $stored_hash = base64_decode($stored_hashb64);
    $stored_salt = base64_decode($stored_saltb64);
    $input_hash = hash('sha256', $stored_salt . $password);

    if (hash_equals($stored_hash, $input_hash)) {
        // Password is correct, Initialize user session
        session_start();
        $_SESSION['user_id'] = $email;
        $_SESSION['logged_in'] = true;
        ini_set('session.gc_maxlifetime', 36000);

        //Remember user
        if (isset($_POST['rem'])) {
            $secret = hash('sha256', $email . $stored_salt);
            $cookie_val = base64_encode('user_param:'.$secret);
            setcookie('logged-in', $cookie_val, time() + (86400*30), "/"); // Set logged in for 30 days
        }

        if ($user_type == "A"){
            header('Location: /Amber/src/pages/admin.php');
            
        } else {
            header('Location: /Amber/index.php');
            exit();
        }

    } else {
        echo "Invalid Username of Password!";
        header('Location: /Amber/src/pages/login.php');
        exit();

    }

} catch (PDOException $e) {
    echo $e;
}

?>