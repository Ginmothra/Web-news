<?php
include_once('../navbar.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Page</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<?php
include_once "../Login/check_login.php";
include_once "../database.php";
$user = $_SESSION['user_login'];
$id_user  = $user['id'];
$news = $db->query("SELECT * FROM news WHERE id_user = $id_user");
$data = $news->fetch_all(MYSQLI_ASSOC);
?>
<!-- table start -->
<div class="table-wrapper">
    <table class="fl-table">
        <!-- thead start -->
        <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Picture</th>
            <th>Description</th>
            <th>Date</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <!-- thead end -->
        <!-- tbody start -->
        <tbody>
        <?php
        foreach ($data as $v) {
        ?>
        <tr>
            <td><?= htmlspecialchars($v['id']) ?></td>
            <td><?= htmlspecialchars($v['title']) ?></td>
            <!-- Ubah jalur gambar sesuai dengan jalur yang benar -->
            <td><img src="../assets/news_pictures/<?= htmlspecialchars($v['picture']) ?>" width="100px" alt=""></td>
            <td><?= htmlspecialchars($v['description']) ?></td>
            <td><?= htmlspecialchars($v['date']) ?></td>
            <td><a href="edit.php?id_news=<?= htmlspecialchars($v['id']) ?>" style="color:black; font-size: 1rem;">Edit</a></td>
            <td><a href="delete.php?id_news=<?= htmlspecialchars($v['id']) ?>" style="color:black; font-size: 1rem;">Delete</a></td>

        </tr>
        <?php
        }
        ?>
        </tbody>
        <!-- tbody end -->
    </table>
</div>
</body>
</html>
