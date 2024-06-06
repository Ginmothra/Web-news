<?php
session_start();
include_once('../database.php');


if (!isset($_SESSION['user_login'])) {
    die("User tidak login.");
}

$user = $_SESSION['user_login'];
$id_user  = $user['id'];


$id_news = isset($_GET['id_news']) ? intval($_GET['id_news']) : 0;

if ($id_news == 0) {
    die("ID berita tidak valid.");
}


$db_news = $db->query("SELECT * FROM news WHERE id = $id_news AND id_user = $id_user");

if ($db_news->num_rows == 0) {
    die("Berita tidak ditemukan atau Anda tidak memiliki akses untuk menghapus berita ini.");
}


$sql = "DELETE FROM news WHERE id = $id_news AND id_user = $id_user";

if ($db->query($sql) === TRUE) {
    echo "<script>alert('Berita berhasil dihapus'); window.location.href='dashboard.php';</script>";
} else {
    echo "<script>alert('Error menghapus berita: " . $db->error . "'); window.location.href='dashboard.php';</script>";
}


$db->close();
?>
