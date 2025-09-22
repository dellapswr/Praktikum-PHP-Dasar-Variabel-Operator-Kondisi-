<?php
// greeting_result.php - proses dan tampilkan ucapan
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: greeting_form.php'); exit;
}
// ambil & sanitasi
$name = trim((string)filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
if ($name === '') {
    $error = "Nama tidak boleh kosong. Silakan kembali dan isi nama.";
}
?>
<!doctype html>
<html lang="id">
<head><meta charset="utf-8"><title>Hasil Ucapan</title><link rel="stylesheet" href="style.css"></head>
<body>
  <div class="container form-container">
    <h2>Hasil Ucapan</h2>
    <?php if (!empty($error)): ?>
      <div class="error"><?=htmlspecialchars($error)?></div>
      <a class="back" href="greeting_form.php">← Kembali</a>
    <?php else: ?>
      <div class="result">
        <!-- variasi tampilan ucapan -->
        <h3>Halo, <?=htmlspecialchars($name)?> — selamat belajar PHP! 🎉</h3>
        <p>Semangat ya. Semoga mudah paham alur <em>form → proses → output</em>.</p>
      </div>
      <a class="back" href="greeting_form.php">← Buat ucapan lain</a>
    <?php endif; ?>
  </div>
</body>
</html>
