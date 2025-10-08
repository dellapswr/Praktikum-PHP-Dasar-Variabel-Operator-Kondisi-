<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $nim   = trim($_POST['nim']);
    $nama  = trim($_POST['nama']);
    $prodi = trim($_POST['prodi']);

    // Validasi server-side (untuk keamanan)
    if (strlen($nim) < 5) {
        echo "<script>alert('⚠️ NIM minimal 5 karakter!');</script>";
    } elseif (empty($nama) || empty($prodi)) {
        echo "<script>alert('⚠️ Nama dan Prodi tidak boleh kosong!');</script>";
    } else {
        $sql = "INSERT INTO mahasiswa (nim, nama, prodi) VALUES ('$nim','$nama','$prodi')";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('✅ Data berhasil disimpan!'); window.location='index.php';</script>";
        } else {
            echo "<script>alert('❌ Gagal menyimpan data: " . addslashes($conn->error) . "');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Mahasiswa</title>
  <link rel="stylesheet" href="style/tambah.css">
</head>
<body>
  <div class="container">
    <h2>➕ Tambah Mahasiswa</h2>

    <form method="post" onsubmit="return validasi()">
      <label for="nim">NIM:</label>
      <input type="number" id="nim" name="nim" placeholder="Masukkan NIM mahasiswa">

      <label for="nama">Nama:</label>
      <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap">

      <label for="prodi">Prodi:</label>
      <input type="text" id="prodi" name="prodi" placeholder="Masukkan program studi">

      <input type="submit" name="simpan" value="Simpan">
    </form>

    <p id="pesan"></p>

    <a href="index.php" class="back">← Kembali</a>
  </div>

  <script>
  function validasi() {
      const nim   = document.querySelector("#nim").value.trim();
      const nama  = document.querySelector("#nama").value.trim();
      const prodi = document.querySelector("#prodi").value.trim();
      const pesan = document.querySelector("#pesan");

      if (nim.length < 5) {
          pesan.innerHTML = "⚠️ NIM minimal 5 karakter!";
          return false;
      }

      if (nama === "" || prodi === "") {
          pesan.innerHTML = "⚠️ Nama dan Prodi tidak boleh kosong!";
          return false;
      }

      pesan.innerHTML = "";
      return true;
  }
  </script>
</body>
</html>
