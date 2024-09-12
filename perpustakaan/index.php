<?php
require_once 'app/buku.php'; // Menghubungkan ke buku.php untuk menambah buku
require_once 'views/show.php'; // Menghubungkan ke show.php untuk menampilkan data buku
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Link ke file CSS -->
</head>
<body>
    <div class="container">
        <!-- Memanggil form buku.php untuk menambah data buku -->
        <?php include 'buku.php'; ?>
    </div>
</body>
</html>
