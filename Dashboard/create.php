<!DOCTYPE html>
<html>
<head>
    <title>News Form</title>
    <link rel="stylesheet" type="text/css" href="../css/news.css">
</head>
<body>
    <?php
    include_once('../navbar.php');
    include_once('../Login/check_login.php');
    ?>
    <form action="news_proccess.php" method="post" enctype="multipart/form-data" style="margin-top: 1rem;">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" placeholder="Enter title" required>
        <label for="picture">Picture:</label>
        <input type="file" id="picture" name="picture" required>
        <label for="description">Description:</label>
        <textarea id="description" name="description" placeholder="Enter description" required></textarea>
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>
        <button type="submit">Add news</button>
    </form>
</body>
</html>