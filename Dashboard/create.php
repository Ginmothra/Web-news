<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create News Page</title>
</head>
<body>
    <?php
    include_once '../navbar.php';
    include_once "../Login/check_login.php";
    ?>
    <form action="news_process.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="">Title</label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="">Picture</label>
            <input type="file" name="picture">
        </div>
        <div>
            <label for="">Description</label>
            <textarea name="description">




            
            </textarea>
        </div>
        <div>
            <label for="">date</label>
            <input type="date" name="date">
        </div>
        <div>
            <button type="submit">Add news</button>
        </div>
    </form>
</body>
</html>