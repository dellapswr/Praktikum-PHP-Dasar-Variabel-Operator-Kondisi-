<?php
// parity_result.php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: parity_form.php'); exit; }
$num_raw = filter_input(INPUT_POST, 'num', FILTER_VALIDATE_INT);
if ($num_raw === false || $num_raw === null) {
    $error = "Masukkan harus bilangan bulat yang valid.";
} else {
    $n = (int)$num_raw;
    $parity = ($n % 2 === 0) ? 'Genap' : 'Ganjil';
    // cek apakah prima
    function is_prime($x) {
        if ($x <= 1) return false;
        if ($x <= 3) return true;
        if ($x % 2 === 0) return false;
        $limit = (int)floor(sqrt($x));
        for ($i = 3; $i <= $limit; $i += 2) {
            if ($x % $i === 0) return false;
        }
        return true;
    }
    $isPrime = is_prime(abs($n)); // prima hanya untuk bilangan >1, gunakan abs untuk negatif
}
?>
<!doctype html><html lang="id"><head><meta charset="utf-8"><title>Hasil Ganjil/Genap</title><link rel="stylesheet" href="style.css"></head>
<body>
  <div class="container form-container">
    <h2>Hasil Check</h2>
    <?php if (!empty($error)): ?>
      <div class="error"><?=htmlspecialchars($error)?></div>
      <a class="back" href="parity_form.php">← Kembali</a>
    <?php else: ?>
      <div class="result">
        <p>Bilangan: <strong><?=htmlspecialchars((string)$n)?></strong></p>
        <p>Jenis: <strong><?=$parity?></strong></p>
        <p>Bilangan prima: <strong><?=($isPrime ? 'Ya' : 'Bukan')?></strong></p>
        <?php if ($n <= 1): ?>
          <p class="small">Catatan: bilangan prima hanya didefinisikan untuk bilangan bulat > 1.</p>
        <?php endif;?>
      </div>
      <a class="back" href="parity_form.php">← Check lagi</a>
    <?php endif; ?>
  </div>
</body></html>
