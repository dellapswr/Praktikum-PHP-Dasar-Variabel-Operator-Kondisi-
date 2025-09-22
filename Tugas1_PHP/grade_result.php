<?php
// grade_result.php - pastikan file ini adalah file hasil konversi nilai
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: grade_form.php');
    exit;
}

// ambil raw input (terima juga koma sebagai pemisah desimal jika pengguna pakai)
$score_raw = trim((string)filter_input(INPUT_POST, 'score', FILTER_UNSAFE_RAW));

if ($score_raw === '') {
    $error = "Nilai wajib diisi.";
} elseif (!is_numeric(str_replace(',', '.', $score_raw))) {
    $error = "Nilai harus berupa angka (contoh: 87 atau 87.5).";
} else {
    // normalisasi: ubah koma ke titik untuk float
    $score = (float) str_replace(',', '.', $score_raw);
    if ($score < 0 || $score > 100) {
        $error = "Nilai harus berada antara 0 dan 100.";
    } else {
        // konfigurasi rentang grade (ubah sesuai kebutuhan)
        $grades = [
            ['min'=>80, 'max'=>100, 'label'=>'A'],
            ['min'=>70, 'max'=>79.99, 'label'=>'B+'],
            ['min'=>60, 'max'=>69.99, 'label'=>'B'],
            ['min'=>50, 'max'=>59.99, 'label'=>'C+'],
            ['min'=>40, 'max'=>49.99, 'label'=>'C'],
            ['min'=>30, 'max'=>39.99, 'label'=>'D'],
            ['min'=>0,  'max'=>29.99, 'label'=>'E'],
        ];
        $label = 'N/A';
        foreach ($grades as $g) {
            if ($score >= $g['min'] && $score <= $g['max']) {
                $label = $g['label'];
                break;
            }
        }
    }
}
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Hasil Konversi Nilai</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container form-container">
    <h2>Hasil Konversi Nilai</h2>

    <?php if (!empty($error)): ?>
      <div class="error"><?=htmlspecialchars($error)?></div>
      <a class="back" href="grade_form.php">← Kembali</a>
    <?php else: ?>
      <div class="result">
        <p>Nilai angka: <strong><?=htmlspecialchars((string)$score)?></strong></p>
        <p>Nilai huruf: <strong><?=htmlspecialchars($label)?></strong></p>
        <p class="small">Catatan: rentang grade telah disesuaikan dengan rentang nilai Teknologi Informasi</p>
      </div>
      <a class="back" href="grade_form.php">← Konversi lagi</a>
    <?php endif; ?>

  </div>
</body>
</html>
