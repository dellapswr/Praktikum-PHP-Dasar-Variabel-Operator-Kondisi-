<?php
// biodata_result.php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { 
    header('Location: biodata_form.php'); 
    exit; 
}

$name_raw = filter_input(INPUT_POST, 'name', FILTER_UNSAFE_RAW);
$name = trim((string)$name_raw);
$age_raw = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
$gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$address = trim((string)filter_input(INPUT_POST, 'address', FILTER_SANITIZE_FULL_SPECIAL_CHARS));

// validasi nama
if ($name === '') {
    $error = "Nama tidak boleh kosong.";
} elseif (!preg_match("/^[a-zA-Z\s]+$/u", $name)) {
    $error = "Nama hanya boleh berisi huruf dan spasi (tanpa angka/tanda baca).";
} elseif ($age_raw === false || $age_raw === null || $age_raw < 0 || $age_raw > 150) {
    $error = "Umur tidak valid.";
} elseif ($gender === '' || $address === '') {
    $error = "Jenis kelamin dan alamat wajib diisi.";
} else {
    $age = (int)$age_raw;
}
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Hasil Biodata</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container form-container">
    <h2>Biodata</h2>
    <?php if (!empty($error)): ?>
      <div class="error"><?=htmlspecialchars($error)?></div>
      <a class="back" href="biodata_form.php">← Kembali</a>
    <?php else: ?>
      <div class="result">
        <p>Halo, nama saya <strong><?=htmlspecialchars($name)?></strong>.</p>
        <p>Umur saya <strong><?=htmlspecialchars((string)$age)?> tahun</strong>.</p>
        <p>Saya seorang <strong><?=htmlspecialchars($gender)?></strong>.</p>
        <p>Saya tinggal di <strong><?=nl2br(htmlspecialchars($address))?></strong>.</p>
      </div>
      <a class="back" href="biodata_form.php">← Edit biodata</a>
    <?php endif; ?>
  </div>
</body>
</html>
