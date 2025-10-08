<?php
include "koneksi.php";

$id = $_GET['id'] ?? 0;

// Ambil data mahasiswa
$result = $conn->query("SELECT * FROM mahasiswa WHERE id='$id'");
$data = $result->fetch_assoc();

// Proses simpan nilai baru
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $mata_kuliah = trim($_POST['mata_kuliah']);
  $sks = intval($_POST['sks']);
  $nilai_angka = floatval($_POST['nilai']);

  // Validasi nama mata kuliah: hanya huruf, spasi, dan karakter dasar
  if (!preg_match("/^[a-zA-Z\s]+$/u", $mata_kuliah)) {
    echo "<script>alert('⚠️ Nama mata kuliah hanya boleh berisi huruf dan spasi!');</script>";
  } elseif ($sks < 1 || $sks > 4) {
    echo "<script>alert('⚠️ SKS harus antara 1–4!');</script>";
  } elseif ($nilai_angka < 0 || $nilai_angka > 4) {
    echo "<script>alert('⚠️ Nilai harus antara 0.00 sampai 4.00!');</script>";
  } else {
    // Konversi nilai angka → huruf
    if ($nilai_angka >= 3.75) $huruf = "A";
    elseif ($nilai_angka >= 3.00) $huruf = "B";
    elseif ($nilai_angka >= 2.00) $huruf = "C";
    elseif ($nilai_angka >= 1.00) $huruf = "D";
    else $huruf = "E";

    $sql = "INSERT INTO nilai (mahasiswa_id, mata_kuliah, sks, nilai_angka, nilai_huruf)
            VALUES ('$id', '$mata_kuliah', '$sks', '$nilai_angka', '$huruf')";

    if ($conn->query($sql)) {
      echo "<script>alert('✅ Nilai berhasil ditambahkan!'); window.location='daftar-nilai.php?id=$id';</script>";
    } else {
      echo "<script>alert('❌ Gagal menambah nilai: " . addslashes($conn->error) . "');</script>";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Nilai Mahasiswa</title>
  <link rel="stylesheet" href="style/tambah-nilai.css">
</head>
<body>
  <div class="container">
    <h2>🧾 Tambah Nilai Mahasiswa</h2>
    <p><b>Nama:</b> <?= htmlspecialchars($data['nama']) ?><br>
       <b>NIM:</b> <?= htmlspecialchars($data['nim']) ?></p>

    <form method="POST" onsubmit="return validasi()">
      <label for="mata_kuliah">Mata Kuliah:</label>
      <input type="text" name="mata_kuliah" id="mata_kuliah" placeholder="Contoh: Basis Data">

      <label for="sks">SKS:</label>
      <input type="number" name="sks" id="sks" min="1" max="4" placeholder="1 - 4">

      <label for="nilai">Nilai Angka (0.00–4.00):</label>
      <input type="number" name="nilai" id="nilai" step="0.01" min="0" max="4" placeholder="Contoh: 3.75">

      <input type="submit" value="Simpan Nilai">
    </form>

    <p id="pesan"></p>

    <a href="daftar-nilai.php?id=<?= $id ?>" class="back">← Kembali ke Daftar Nilai</a>
  </div>

  <script>
    function validasi() {
      const mk = document.getElementById("mata_kuliah").value.trim();
      const sks = parseFloat(document.getElementById("sks").value);
      const nilai = parseFloat(document.getElementById("nilai").value);
      const pesan = document.getElementById("pesan");

      // Validasi nama mata kuliah: hanya huruf dan spasi
      const regexHuruf = /^[a-zA-Z\s]+$/;

      if (mk === "") {
        pesan.innerHTML = "⚠️ Nama mata kuliah tidak boleh kosong!";
        return false;
      }
      if (!regexHuruf.test(mk)) {
        pesan.innerHTML = "⚠️ Nama mata kuliah hanya boleh berisi huruf dan spasi!";
        return false;
      }
      if (isNaN(sks) || sks < 1 || sks > 4) {
        pesan.innerHTML = "⚠️ SKS harus antara 1–4!";
        return false;
      }
      if (isNaN(nilai) || nilai < 0 || nilai > 4) {
        pesan.innerHTML = "⚠️ Nilai angka harus di antara 0.00–4.00!";
        return false;
      }

      pesan.innerHTML = "";
      return true;
    }
  </script>
</body>
</html>