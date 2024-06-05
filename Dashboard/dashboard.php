<?php
include_once ('../navbar.php');
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
    $news = $db->query("select * from news where id_user = $id_user");
    $data = $news->fetch_all();
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
            <td><?= $v[0] ?></td>
            <td><?= $v[2] ?></td>
            <td><img src="../assets/news_pictures/<?= $v[3] ?>" width="100px" alt=""></td>
            <td><?= $v[4] ?></td>
            <td><?= $v[5] ?></td>
            <td>Edit</td>
            <td>Delete</td>
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
