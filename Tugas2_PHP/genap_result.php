<?php
// genap_result.php - proses form genap
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: genap_form.php'); exit;
}

// validasi server-side: integer & n1 < n2
$n1 = filter_input(INPUT_POST, 'n1', FILTER_VALIDATE_INT);
$n2 = filter_input(INPUT_POST, 'n2', FILTER_VALIDATE_INT);

if ($n1 === false || $n2 === false || $n1 === null || $n2 === null) {
    $error = "Masukkan harus bilangan bulat.";
} elseif ($n1 >= $n2) {
    $error = "Syarat tidak terpenuhi: n1 harus lebih kecil dari n2.";
} else {
    $evens = [];
    // gunakan for sesuai instruksi
    for ($i = $n1; $i <= $n2; $i++) {
        if ($i % 2 === 0) $evens[] = $i;
    }
}
?>
<!doctype html><html lang="id"><head><meta charset="utf-8"><title>Hasil Bilangan Genap</title><link rel="stylesheet" href="style.css"></head>
<body>
  <div class="container form-container">
    <h2>Hasil Bilangan Genap</h2>

    <?php if (!empty($error)): ?>
      <div class="error"><?=htmlspecialchars($error)?></div>
      <a class="back" href="genap_form.php">← Kembali</a>
    <?php else: ?>
      <div class="result">
        <p>Rentang: <strong><?=htmlspecialchars($n1)?> sampai <?=htmlspecialchars($n2)?></strong></p>
        <?php if (count($evens) === 0): ?>
          <p>Tidak ada bilangan genap pada rentang ini.</p>
        <?php else: ?>
          <p>Bilangan genap yang ditemukan:</p>
          <p><?=implode(', ', array_map('htmlspecialchars', $evens))?></p>
        <?php endif; ?>
      </div>
      <a href="genap_form.php" class="back">← Check Kembali</a>
    <?php endif; ?>

  </div>
</body></html>
