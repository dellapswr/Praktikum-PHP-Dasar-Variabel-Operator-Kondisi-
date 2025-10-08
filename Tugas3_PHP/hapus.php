<?php
include "koneksi.php";

$id = $_GET['id'];
$sql = "DELETE FROM mahasiswa WHERE id=$id";

$berhasil = false;

if ($conn->query($sql) === TRUE) {
    $berhasil = true;
} else {
    $error = $conn->error;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Hapus Data Mahasiswa</title>
<link rel="stylesheet" href="style/hapus.css">
</head>
<body>
<div class="container">
  <?php if ($berhasil): ?>
    <div class="card success">
      <h2>✅ Data Berhasil Dihapus</h2>
      <p>Data mahasiswa telah berhasil dihapus dari sistem.</p>
      <a href="index.php" class="btn">← Kembali ke Daftar Mahasiswa</a>
    </div>
  <?php else: ?>
    <div class="card error">
      <h2>❌ Gagal Menghapus Data</h2>
      <p>Terjadi kesalahan: <?= htmlspecialchars($error) ?></p>
      <a href="index.php" class="btn">← Kembali</a>
    </div>
  <?php endif; ?>
</div>
</body>
</html>
