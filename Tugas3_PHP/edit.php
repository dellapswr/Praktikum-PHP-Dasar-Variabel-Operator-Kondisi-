<?php
include "koneksi.php";

$id = $_GET['id'];

// Ambil data mahasiswa
$result = $conn->query("SELECT * FROM mahasiswa WHERE id=$id");
$data = $result->fetch_assoc();

// Proses update
if (isset($_POST['update'])) {
  $nim   = trim($_POST['nim']);
  $nama  = trim($_POST['nama']);
  $prodi = trim($_POST['prodi']);

  // Validasi server-side
  if (strlen($nim) < 5) {
    echo "<script>alert('⚠️ NIM minimal 5 karakter!');</script>";
  } elseif (empty($nama) || empty($prodi)) {
    echo "<script>alert('⚠️ Nama dan Prodi tidak boleh kosong!');</script>";
  } else {
    $sql = "UPDATE mahasiswa 
            SET nim='$nim', nama='$nama', prodi='$prodi' 
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
      echo "<script>alert('✅ Data berhasil diperbarui!'); window.location='index.php';</script>";
    } else {
      echo "<script>alert('❌ Gagal memperbarui data: " . addslashes($conn->error) . "');</script>";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Mahasiswa</title>
  <link rel="stylesheet" href="style/edit.css">
</head>
<body>
  <div class="container">
    <h2>✏️ Edit Data Mahasiswa</h2>

    <form method="post" onsubmit="return validasi()">
      <label for="nim">NIM:</label>
      <input type="number" id="nim" name="nim" value="<?= htmlspecialchars($data['nim']) ?>">

      <label for="nama">Nama:</label>
      <input type="text" id="nama" name="nama" value="<?= htmlspecialchars($data['nama']) ?>">

      <label for="prodi">Prodi:</label>
      <input type="text" id="prodi" name="prodi" value="<?= htmlspecialchars($data['prodi']) ?>">

      <input type="submit" name="update" value="Simpan Perubahan">
    </form>

    <p id="pesan"></p>

    <a href="index.php" class="back">← Kembali</a>
  </div>

  <script>
    function validasi() {
      const nim = document.querySelector("#nim").value.trim();
      const nama = document.querySelector("#nama").value.trim();
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
