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

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Desa Wisata Padarincang</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="admin-container">
        <?php if(isset($success_message)): ?>
            <div class="success-message">
                <span>✨</span> <?php echo $success_message; ?>
            </div>
        <?php endif; ?>

        <h2>Tambah Berita Baru</h2>
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Judul Berita</label>
                <input type="text" id="title" name="title" required placeholder="Masukkan judul berita...">
            </div>
            
            <div class="form-group">
                <label for="image">Foto Berita</label>
                <div class="file-input-wrapper">
                    <div class="file-input-label">
                        <span>Masukkan Foto</span>
                    </div>
                    <input type="file" id="image" name="image" accept="image/*" required onchange="previewImage(this);">
                    <div id="imagePreview" class="image-preview"></div>
                </div>
            </div>
            
            <div class="form-group">
                <label for="content">Isi Berita</label>
                <textarea id="content" name="content" required placeholder="Tulis isi berita di sini..."></textarea>
            </div>
            
            <button type="submit">Simpan Berita</button>
        </form>
    </div>
    <script>
        function previewImage(input) {
            const preview = document.getElementById('imagePreview');
            preview.innerHTML = '';
            
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.classList.add('preview-img');
                    preview.appendChild(img);
                    preview.style.display = 'block';
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>
</html>