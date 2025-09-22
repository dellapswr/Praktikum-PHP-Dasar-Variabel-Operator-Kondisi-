<?php
// genap_form.php
?>
<!doctype html>
<html lang="id">
<head><meta charset="utf-8"><title>Menampilkan Bilangan Genap</title><link rel="stylesheet" href="style.css">
<script>
function validateForm(e) {
  const n1 = document.getElementById('n1').value;
  const n2 = document.getElementById('n2').value;
  if (n1 === '' || n2 === '') { alert('Masukkan nilai n1 dan n2.'); e.preventDefault(); return false; }
  if (!Number.isInteger(Number(n1)) || !Number.isInteger(Number(n2))) { alert('Masukkan bilangan bulat.'); e.preventDefault(); return false; }
  if (Number(n1) >= Number(n2)) { alert('Syarat: n1 < n2.'); e.preventDefault(); return false; }
  return true;
}
</script>
</head>
<body>
  <div class="container form-container">
    <h2>Menampilkan Bilangan Genap</h2>
    <p>Masukkan <strong>Bilangan Awal</strong> dan <strong>Bilangan Akhir</strong> (syarat: Awal &lt; Akhir). Sistem akan menampilkan semua bilangan genap antara Bilangan Awal dan Bilangan Akhir (inklusif jika genap).</p>
    <form action="genap_result.php" method="post" onsubmit="return validateForm(event)">
      <label for="n1">Batas Awal (bilangan bulat)</label>
      <input id="n1" name="n1" type="number" step="1" required>
      <label for="n2">Batas Akhir (bilangan bulat)</label>
      <input id="n2" name="n2" type="number" step="1" required>
      <button type="submit">Tampilkan Bilangan Genap</button>
    </form>
    <a href="index.php" class="back">← Kembali ke Menu</a>
  </div>
</body>
</html>
