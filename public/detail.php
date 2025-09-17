<?php
$conn = new mysqli("localhost", "root", "", "padarincang");
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM news WHERE id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($row['title']) ?> - Berita Desa Padarincang</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="detail-news">
        <h1><?= htmlspecialchars($row['title']) ?></h1>
        <div class="meta">
            Diposting pada <?= date('d M Y', strtotime($row['created_at'])) ?>
        </div>
        <img src="uploads/<?= htmlspecialchars($row['image']) ?>" alt="<?= htmlspecialchars($row['title']) ?>">
        <div class="content">
            <?= nl2br(htmlspecialchars($row['content'])) ?>
        </div>
        <a href="main.php" class="back-link">&larr; Kembali ke Berita</a>
    </div>
</body>
</html>
