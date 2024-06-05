<?php
include_once ('../database.php');
$email = $_POST['email'];
$password = $_POST['password'];

$user = $db
    ->query("SELECT * FROM user where email = '$email' && password = '$password'")
    ->fetch_assoc();

if (!$user) {
    session_start();
    $_SESSION['error_message'] = "Email atau password kamu salah, silahkan ulangi";
    header("Location: login.php");
    exit();
} else {
    session_start();
    $_SESSION['user_login'] = $user;
    header("Location: ../index.php");
    exit();
}
?>
