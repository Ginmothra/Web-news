<?php
include_once '../database.php';
include_once "../Login/check_login.php";
$user = $_SESSION['user_login'];


function phpAlert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}


$title = $_POST['title'];
$picture = $_FILES['picture'];
$description = $_POST['description'];
$date = $_POST['date'];
$id_user = $user['id'];


$rename = md5(date("Y-m-d H:i:s")).basename($picture['name']);
$imagePath = '../assets/news_pictures/'.$rename;


if (!is_dir('../assets/news_pictures')) {
    mkdir('../assets/news_pictures', 0777, true);
}

if (move_uploaded_file($picture['tmp_name'], $imagePath)) {
    $sql = "INSERT INTO news (title, picture, description, date, id_user) 
    VALUES ('$title', '$rename', '$description', '$date', $id_user)";

    if ($db->query($sql)) {
        phpAlert("Berita baru ditambahkan");
    } else {
        phpAlert("Berita gagal ditambahkan: " . $db->error);
    }
} else {
    phpAlert("Failed to upload the image.");
}

echo "<script type='text/javascript'>window.location.href = 'dashboard.php';</script>";
exit();
?>