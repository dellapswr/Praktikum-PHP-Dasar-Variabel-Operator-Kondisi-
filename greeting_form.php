<?php
// greeting_form.php
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Form Ucapan</title>
  <link rel="stylesheet" href="style.css">
  <script>
    function validateForm(e) {
      const name = document.getElementById('name').value.trim();
      const regex = /^[a-zA-Z\s]+$/u; // hanya huruf dan spasi

      if (name === "") {
        alert("Nama tidak boleh kosong.");
        e.preventDefault();
        return false;
      }
      if (!regex.test(name)) {
        alert("Nama hanya boleh berisi huruf dan spasi (tanpa angka/tanda baca).");
        e.preventDefault();
        return false;
      }
      return true;
    }
  </script>
</head>
<body>
  <div class="container form-container">
    <h2>Form Ucapan</h2>
    <form action="greeting_result.php" method="post" onsubmit="return validateForm(event)">
      <label for="name">Nama lengkap</label>
      <input id="name" name="name" type="text" maxlength="100" required placeholder="Tuliskan nama kamu..." />
      <small class="small">Nama hanya boleh huruf dan spasi.</small>
      <button type="submit">Kirim Ucapan</button>
    </form>
    <a class="back" href="index.php">← Kembali ke Menu</a>
  </div>
</body>
</html>
