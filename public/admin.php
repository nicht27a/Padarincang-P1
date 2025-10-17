<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: admin-login.php');
    exit();
}

require_once 'config.php';
$conn = getDBConnection();

$success_message = "";
$error_message = "";

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['action'])) {
        $action = $_POST['action'];
        
        if ($action == 'create') {
            // Create new news
            $title = mysqli_real_escape_string($conn, $_POST['title']);
            $content = mysqli_real_escape_string($conn, $_POST['content']);

            if (!empty($_FILES['image']['name'])) {
                $image = $_FILES['image']['name'];
                $target = "uploads/" . basename($image);
                move_uploaded_file($_FILES['image']['tmp_name'], $target);
            } else {
                $image = "";
            }

            $result = $conn->query("INSERT INTO news (title, content, image) 
                          VALUES ('$title', '$content', '$image')");
            
            if ($result) {
                $success_message = "✅ Berita berhasil ditambahkan!";
            } else {
                $error_message = "❌ Gagal menambahkan berita!";
            }
        }
        
        if ($action == 'update') {
            // Update existing news
            $id = (int)$_POST['id'];
            $title = mysqli_real_escape_string($conn, $_POST['title']);
            $content = mysqli_real_escape_string($conn, $_POST['content']);

            if (!empty($_FILES['image']['name'])) {
                // Delete old image if exists
                $old_image_query = $conn->query("SELECT image FROM news WHERE id = $id");
                if ($old_image_query && $old_image_query->num_rows > 0) {
                    $old_image = $old_image_query->fetch_assoc()['image'];
                    if ($old_image && file_exists("uploads/" . $old_image)) {
                        unlink("uploads/" . $old_image);
                    }
                }
                
                $image = $_FILES['image']['name'];
                $target = "uploads/" . basename($image);
                move_uploaded_file($_FILES['image']['tmp_name'], $target);
                
                $result = $conn->query("UPDATE news SET title='$title', content='$content', image='$image' WHERE id=$id");
            } else {
                $result = $conn->query("UPDATE news SET title='$title', content='$content' WHERE id=$id");
            }
            
            if ($result) {
                $success_message = "✅ Berita berhasil diperbarui!";
            } else {
                $error_message = "❌ Gagal memperbarui berita!";
            }
        }
    }
}

// Handle delete action
if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    
    // Get image filename to delete
    $image_query = $conn->query("SELECT image FROM news WHERE id = $id");
    if ($image_query && $image_query->num_rows > 0) {
        $image = $image_query->fetch_assoc()['image'];
        if ($image && file_exists("uploads/" . $image)) {
            unlink("uploads/" . $image);
        }
    }
    
    $result = $conn->query("DELETE FROM news WHERE id = $id");
    
    if ($result) {
        $success_message = "✅ Berita berhasil dihapus!";
    } else {
        $error_message = "❌ Gagal menghapus berita!";
    }
}

// Get all news for listing
$news_result = $conn->query("SELECT * FROM news ORDER BY created_at DESC");

// Get news for editing
$edit_news = null;
if (isset($_GET['action']) && $_GET['action'] == 'edit' && isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $edit_result = $conn->query("SELECT * FROM news WHERE id = $id");
    if ($edit_result && $edit_result->num_rows > 0) {
        $edit_news = $edit_result->fetch_assoc();
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Desa Wisata Padarincang</title>
    <link rel="stylesheet" href="admin.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="admin-container">
        <?php if($success_message): ?>
            <div class="success-message">
                <span>✨</span> <?php echo $success_message; ?>
            </div>
        <?php endif; ?>
        
        <?php if($error_message): ?>
            <div class="error-message">
                <span>❌</span> <?php echo $error_message; ?>
            </div>
        <?php endif; ?>

        <!-- Navigation Tabs -->
        <div class="admin-tabs">
            <button class="tab-btn active" onclick="showTab('news-list')">Daftar Berita</button>
            <button class="tab-btn" onclick="showTab('add-news')"><?php echo $edit_news ? 'Edit Berita' : 'Tambah Berita'; ?></button>
            <a href="logout.php" class="logout-btn">
                <i class="fas fa-sign-out-alt"></i>
                Logout
            </a>
        </div>

        <!-- News List Tab -->
        <div id="news-list" class="tab-content active">
            <h2>Daftar Berita</h2>
            <div class="news-list">
                <?php if($news_result && $news_result->num_rows > 0): ?>
                    <?php while($news = $news_result->fetch_assoc()): ?>
                        <div class="news-item">
                            <div class="news-item-image">
                                <img src="uploads/<?= htmlspecialchars($news['image']) ?>" alt="<?= htmlspecialchars($news['title']) ?>">
                            </div>
                            <div class="news-item-content">
                                <h3><?= htmlspecialchars($news['title']) ?></h3>
                                <p class="news-excerpt"><?= htmlspecialchars(mb_substr(strip_tags($news['content']), 0, 150)) ?>...</p>
                                <p class="news-date"><?= date('d M Y H:i', strtotime($news['created_at'])) ?></p>
                            </div>
                            <div class="news-item-actions">
                                <a href="?action=edit&id=<?= $news['id'] ?>" class="btn-edit">Edit</a>
                                <a href="?action=delete&id=<?= $news['id'] ?>" class="btn-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">Hapus</a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <div class="no-news">
                        <p>Belum ada berita. <a href="?action=add">Tambah berita pertama</a></p>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- Add/Edit News Tab -->
        <div id="add-news" class="tab-content">
            <h2><?php echo $edit_news ? 'Edit Berita' : 'Tambah Berita Baru'; ?></h2>
            <form method="POST" enctype="multipart/form-data">
                <input type="hidden" name="action" value="<?php echo $edit_news ? 'update' : 'create'; ?>">
                <?php if($edit_news): ?>
                    <input type="hidden" name="id" value="<?= $edit_news['id'] ?>">
                <?php endif; ?>
                
                <div class="form-group">
                    <label for="title">Judul Berita</label>
                    <input type="text" id="title" name="title" required 
                           value="<?= $edit_news ? htmlspecialchars($edit_news['title']) : '' ?>" 
                           placeholder="Masukkan judul berita...">
                </div>
                
                <div class="form-group">
                    <label for="image">Foto Berita</label>
                    <div class="file-input-wrapper">
                        <div class="file-input-label">
                            <span><?= $edit_news ? 'Ganti Foto' : 'Masukkan Foto'; ?></span>
                        </div>
                        <input type="file" id="image" name="image" accept="image/*" 
                               <?= !$edit_news ? 'required' : '' ?> onchange="previewImage(this);">
                        <div id="imagePreview" class="image-preview">
                            <?php if($edit_news && $edit_news['image']): ?>
                                <img src="uploads/<?= htmlspecialchars($edit_news['image']) ?>" alt="Current image">
                                <p>Foto saat ini</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="content">Isi Berita</label>
                    <textarea id="content" name="content" required placeholder="Tulis isi berita di sini..."><?= $edit_news ? htmlspecialchars($edit_news['content']) : '' ?></textarea>
                </div>
                
                <div class="form-actions">
                    <button type="submit"><?php echo $edit_news ? 'Perbarui Berita' : 'Simpan Berita'; ?></button>
                    <?php if($edit_news): ?>
                        <a href="admin.php" class="btn-cancel">Batal</a>
                    <?php endif; ?>
                </div>
            </form>
        </div>
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

        function showTab(tabName) {
            // Hide all tab contents
            const tabContents = document.querySelectorAll('.tab-content');
            tabContents.forEach(content => {
                content.classList.remove('active');
            });
            
            // Remove active class from all tab buttons
            const tabButtons = document.querySelectorAll('.tab-btn');
            tabButtons.forEach(button => {
                button.classList.remove('active');
            });
            
            // Show selected tab content
            document.getElementById(tabName).classList.add('active');
            
            // Add active class to clicked button
            event.target.classList.add('active');
        }

        // Auto-show add news tab if editing
        <?php if($edit_news): ?>
        document.addEventListener('DOMContentLoaded', function() {
            showTab('add-news');
            // Update the tab button text
            const tabButtons = document.querySelectorAll('.tab-btn');
            tabButtons[1].textContent = 'Edit Berita';
        });
        <?php endif; ?>
    </script>
</body>
</html>