<?php // parity_form.php ?>
<!doctype html>
<html lang="id"><head><meta charset="utf-8"><title>Ganjil/Genap</title><link rel="stylesheet" href="style.css"></head>
<body>
  <div class="container form-container">
    <h2>Tentukan Ganjil / Genap + Check Bilangan Prima </h2>
    <form action="parity_result.php" method="post">
      <label for="num">Masukkan bilangan bulat</label>
      <input id="num" name="num" type="number" step="1" required placeholder="Contoh: 17" />
      <button type="submit">Check</button>
    </form>
    <a class="back" href="index.php">← Kembali ke Menu</a>
  </div>
</body></html>
