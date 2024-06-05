<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!$_SESSION['user_login']) {
    header("Location: login.php");
}

?>