
<?php
include_once('navbar.php');
include_once('database.php');

$search = isset($_GET['search']) ? $db->real_escape_string($_GET['search']) : '';

$sql = "SELECT news.id, news.title, news.description, news.creator, news.picture, news.date
        FROM news
        JOIN user ON news.creator = user.username";

if (!empty($search)) {
    $sql .= " WHERE news.title LIKE '%$search%'";
}

$sql .= " ORDER BY news.date DESC";

$result = $db->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/home.css">
    <style>
        marquee {
            background-color: #4681f0;
            padding: 2px;
            font-size: 1.2rem;
            color: white;
        }
    </style>
</head>
<body>
<marquee behavior="scroll" direction="right" scrollamount="15" id="marquee">
        Selamat Datang! (●'◡'●)
</marquee>

<script>
    const messages = [
        "Selamat Datang! (●'◡'●)",
        "Selamat Membaca! (¬‿¬)",
        "Have a great day! (❁´◡`❁)",
        "Semoga Enjoy (☞ﾟヮﾟ)☞",
        "Rajinlah Membaca Berita ╰(*°▽°*)╯",
        "Membaca Dapat Menambah Pengetahuan (⌐■_■)"
    ];
    
    let index = 0;
    const marquee = document.getElementById('marquee');

    setInterval(() => {
        index = (index + 1) % messages.length;
        marquee.textContent = messages[index];
    }, 8700); 
</script>
<main>
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { ?>
            <article>
            <h2><?php echo htmlspecialchars($row['title']); ?></h2>
            <div class="img-news"><img src="assets/news_pictures/<?php echo htmlspecialchars($row['picture']); ?>" width="75px" alt=""></div>
            <p>Oleh: <?php echo htmlspecialchars($row['creator']); ?> pada <?php echo htmlspecialchars($row['date']); ?></p>
            <a href="news.php?id=<?php echo htmlspecialchars($row['id']); ?>" style="color:blue; font-size: 1rem;">Read More</a>
            </article>
    <?php   }
    } else {
        echo "<p>Tidak ada berita yang ditemukan.</p>";
    }
    ?>
</main>
</body>
</html>

<?php
// Tutup koneksi
$db->close();
?>
