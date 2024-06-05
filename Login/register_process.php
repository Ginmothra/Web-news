<?php
include_once '../database.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$insert = $db->query("INSERT INTO user (id, username, email, password) 
values (null, '$username', '$email', '$password')
");

header('Location: login.php')
?>