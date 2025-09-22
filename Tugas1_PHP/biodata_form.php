<?php // biodata_form.php ?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Biodata</title>
  <link rel="stylesheet" href="style.css">
  <script>
    function validateBiodata(e){
      const name = document.getElementById('name').value.trim();
      const regex = /^[a-zA-Z\s]+$/u; // hanya huruf dan spasi

      if(name === ""){
        alert("Nama tidak boleh kosong.");
        e.preventDefault();
        return false;
      }
      if(!regex.test(name)){
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
    <h2>Form Biodata Singkat</h2>
    <form action="biodata_result.php" method="post" onsubmit="return validateBiodata(event)">
      <label for="name">Nama</label>
      <input id="name" name="name" type="text" maxlength="120" required />
      
      <label for="age">Umur (tahun)</label>
      <input id="age" name="age" type="number" min="0" max="150" required />
      
      <label>Jenis Kelamin</label>
      <select name="gender" required>
        <option value="">--Pilih--</option>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
        <option value="Lainnya">Lainnya</option>
      </select>
      
      <label for="addr">Alamat</label>
      <textarea id="addr" name="address" rows="3" required placeholder="Alamat lengkap..."></textarea>
      
      <button type="submit">Kirim Biodata</button>
    </form>
    <a class="back" href="index.php">← Kembali ke Menu</a>
  </div>
</body>
</html>
