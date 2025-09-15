<?php // grade_form.php ?>
<!doctype html>
<html lang="id"><head><meta charset="utf-8"><title>Konversi Nilai</title><link rel="stylesheet" href="style.css">
<script>
function validateForm(e){
  const val = document.getElementById('score').value;
  if (val === '' || isNaN(val)) { alert('Masukkan nilai numerik 0-100'); e.preventDefault(); return false;}
  const vnum = parseFloat(val);
  if (vnum < 0 || vnum > 100) { alert('Nilai harus antara 0 dan 100'); e.preventDefault(); return false;}
  return true;
}
</script>
</head>
<body>
  <div class="container form-container">
    <h2>Konversi Nilai → Huruf</h2>
    <form action="grade_result.php" method="post" onsubmit="return validateForm(event)">
      <label for="score">Masukkan nilai (0 - 100)</label>
      <input id="score" name="score" type="number" step="0.01" min="0" max="100" required placeholder="Contoh: 87.5" />
      <button type="submit">Konversi</button>
    </form>
    <a class="back" href="index.php">← Kembali ke Menu</a>
  </div>
</body></html>