<?php
$conn = new mysqli("localhost", "root", "", "padarincang");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $image = $_FILES['image']['name'];
    $target = "uploads/" . basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'], $target);


    $conn->query("INSERT INTO news (title, content, image) 
                  VALUES ('$title', '$content', '$image')");

    echo "✅ Berita berhasil ditambahkan!";
}
?>

<h2>Tambah Berita</h2>
<form method="POST" enctype="multipart/form-data">
    Judul: <input type="text" name="title"><br><br>
    Foto: <input type="file" name="image"><br><br>
    Isi: <textarea name="content"></textarea><br><br>
    <button type="submit">Simpan</button>
</form>