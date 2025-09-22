<?php // calculator_form.php ?>
<!doctype html>
<html lang="id">
<head><meta charset="utf-8"><title>Kalkulator Sederhana</title><link rel="stylesheet" href="style.css"></head>
<body>
  <div class="container form-container">
    <h2>Kalkulator Sederhana (POST + switch-case)</h2>
    <form action="calculator_result.php" method="post">
      <label for="a">Angka pertama</label>
      <input id="a" name="a" type="number" step="any" required placeholder="Contoh: 12.5" />
      <label for="b">Angka kedua</label>
      <input id="b" name="b" type="number" step="any" required placeholder="Contoh: 3" />
      <label for="op">Operator</label>
      <select id="op" name="operator" required>
        <option value="">--Pilih operator--</option>
        <option value="add">Tambah (+)</option>
        <option value="sub">Kurang (-)</option>
        <option value="mul">Kali (×)</option>
        <option value="div">Bagi (÷)</option>
      </select>
      <button type="submit">Hitung</button>
    </form>
    <a class="back" href="index.php">← Kembali ke Menu</a>
  </div>
</body>
</html>
