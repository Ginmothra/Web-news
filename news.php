<?php
include_once('navbar.php');
include_once('database.php');

if (isset($_GET['id'])) {
    $news_id = intval($_GET['id']);

    $sql = "SELECT news.title, news.description, news.creator, news.picture, news.date, user.username AS creator_name
            FROM news
            JOIN user ON news.creator = user.username
            WHERE news.id = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param('i', $news_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $news = $result->fetch_assoc();
    } else {
        echo "<p>Berita tidak ditemukan.</p>";
        exit;
    }
} else {
    echo "<p>ID berita tidak diberikan.</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($news['title']); ?></title>
    <link rel="stylesheet" href="css/detail.css">
</head>
<body>
    <article>
        <h1><?php echo htmlspecialchars($news['title']); ?></h1>
        <p>Dibuat Oleh: <?php echo htmlspecialchars($news['creator']); ?></p>
        <p style="opacity:0.6;"><?php echo htmlspecialchars($news['date']); ?></p>
        <div class="img-news"><img src="assets/news_pictures/<?php echo htmlspecialchars($news['picture']); ?>" alt=""></div>
        <p><?php echo nl2br(htmlspecialchars($news['description'])); ?></p>
    </article>
</body>
</html>

<?php
// Tutup koneksi
$db->close();
?>
