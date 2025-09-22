<?php
// calculator_result.php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: calculator_form.php'); exit; }
$a_raw = filter_input(INPUT_POST, 'a', FILTER_DEFAULT);
$b_raw = filter_input(INPUT_POST, 'b', FILTER_DEFAULT);
$op = filter_input(INPUT_POST, 'operator', FILTER_SANITIZE_STRING);

// validasi numeric
if ($a_raw === null || $b_raw === null || $op === null) {
    $error = "Input tidak lengkap.";
} else {
    // gunakan strict numeric check
    if (!is_numeric($a_raw) || !is_numeric($b_raw)) {
        $error = "Masukkan angka yang valid.";
    } else {
        $a = (float)$a_raw;
        $b = (float)$b_raw;
        switch ($op) {
            case 'add': $res = $a + $b; $opSign = '+'; break;
            case 'sub': $res = $a - $b; $opSign = '-'; break;
            case 'mul': $res = $a * $b; $opSign = '×'; break;
            case 'div':
                if ($b == 0.0) { $error = "Kesalahan: pembagian dengan nol tidak diperbolehkan."; }
                else { $res = $a / $b; $opSign = '÷'; }
                break;
            default: $error = "Operator yang dipilih tidak valid."; break;
        }
    }
}
?>
<!doctype html><html lang="id"><head><meta charset="utf-8"><title>Hasil Kalkulator</title><link rel="stylesheet" href="style.css"></head>
<body>
  <div class="container form-container">
    <h2>Hasil Perhitungan</h2>
    <?php if (!empty($error)): ?>
      <div class="error"><?=htmlspecialchars($error)?></div>
      <a class="back" href="calculator_form.php">← Kembali</a>
    <?php else: ?>
      <div class="result">
        <p><strong>Operasi:</strong> <?=htmlspecialchars((string)$a)?> <?=htmlspecialchars($opSign)?> <?=htmlspecialchars((string)$b)?></p>
        <p><strong>Hasil:</strong> <?=is_float($res) ? rtrim(rtrim(number_format($res, 10, '.', ''), '0'), '.') : $res?></p>
      </div>
      <a class="back" href="calculator_form.php">← Hitung lagi</a>
    <?php endif; ?>
  </div>
</body></html>
