<?php
// example_barang.php - contoh menampilkan daftar barang dengan foreach
$barang = [
  "Buku Tulis", 
  "Pulpen", 
  "Penggaris",
  "Penghapus",
  "Kotak Pensi",
  "Meja",
  "Kursi",
  "Laptop",
  "Mouse",
  "Stabilo",
  "Amplop",
  "Spidol",
  "Ransel",
  "Buku"
];
?>


<!doctype html>
<html lang="id">
<head><meta charset="utf-8"><title>Daftar Barang</title><link rel="stylesheet" href="style.css"></head>
<body>
    <div class="container form-container">
    <h2>Daftar Barang</h2>
    <p>Menampilkan daftar barang dari indexed array menggunakan foreach.</p>
    <h3>Daftar Barang:</h3>
    <ul>
      <?php foreach ($barang as $b): ?>
        <li><?=htmlspecialchars($b)?></li>
      <?php endforeach; ?>
    </ul>
    <a href="index.php" class="back">← Kembali ke Menu</a>
  </div>
</body>
</html>
