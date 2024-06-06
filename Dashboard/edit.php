<?php
include_once('../database.php');
include_once('../navbar.php');
include_once('../Login/check_login.php');
$user = $_SESSION['user_login'];
$id_user  = $user['id'];

$id_news = isset($_GET['id_news']) ? intval($_GET['id_news']) : 0;

if ($id_news == 0) {
    die("ID berita tidak valid.");
}

$db_news = $db->query("SELECT * FROM news WHERE id = $id_news AND id_user = $id_user");

if ($db_news->num_rows == 0) {
    die("Berita tidak ditemukan atau Anda tidak memiliki akses untuk mengedit berita ini.");
}

$news = $db_news->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    
    if (!empty($_FILES["picture"]["name"])) {
        $target_dir = "../assets/news_pictures/";
        $target_file = $target_dir . basename($_FILES["picture"]["name"]);
        move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file);
        $picture_sql = ", picture='$target_file'";
    } else {
        $picture_sql = "";
    }

    $sql = "UPDATE news SET title='$title', description='$description' $picture_sql WHERE id=$id_news AND id_user=$id_user";

    if ($db->query($sql) === TRUE) {
        echo "<script>alert('Berita berhasil diperbarui'); window.location.href='dashboard.php';</script>";
    } else {
        echo "<script>alert('Error memperbarui berita: " . $db->error . "');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit News Form</title>
    <link rel="stylesheet" type="text/css" href="../css/news.css">
</head>
<body>
    <form method="post" enctype="multipart/form-data" style="margin-top: 1rem;">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" placeholder="Enter title" value="<?= htmlspecialchars($news['title']) ?>" required>
        <label for="picture">Picture:</label>
        <input type="file" id="picture" name="picture">
        <?php if (!empty($news['picture'])): ?>
            <img src="<?= htmlspecialchars($news['picture']) ?>" width="100px" alt="">
        <?php endif; ?>
        <label for="description">Description:</label>
        <textarea id="description" name="description" placeholder="Enter description" required><?= htmlspecialchars($news['description']) ?></textarea>
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" value="<?= htmlspecialchars($news['date']) ?>" required>
        <button type="submit">Update news</button>
    </form>
</body>
</html>
