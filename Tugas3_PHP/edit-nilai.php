<?php
include "koneksi.php";

$id_nilai = $_GET['id_nilai'];
$id_mhs = $_GET['id'];

// Ambil data nilai yang ingin diedit
$result = $conn->query("SELECT * FROM nilai WHERE id='$id_nilai'");
$data = $result->fetch_assoc();

// Ambil data mahasiswa untuk ditampilkan di atas form
$mhs = $conn->query("SELECT * FROM mahasiswa WHERE id='$id_mhs'")->fetch_assoc();

// Update nilai jika form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $mata_kuliah = trim($_POST['mata_kuliah']);
  $sks = (int)$_POST['sks'];
  $nilai_angka = floatval($_POST['nilai']); // ubah input ke desimal

  // Validasi input
  if ($mata_kuliah === '' || $sks < 1 || $sks > 4) {
    echo "<script>alert('Isi semua kolom dengan benar! SKS harus antara 1–4.');</script>";
  } elseif ($nilai_angka < 0 || $nilai_angka > 4) {
    echo "<script>alert('Nilai harus antara 0.00 sampai 4.00!');</script>";
  } else {
    // Konversi nilai angka → huruf
    if ($nilai_angka >= 3.75) $huruf = "A";
    elseif ($nilai_angka >= 3.00) $huruf = "B";
    elseif ($nilai_angka >= 2.00) $huruf = "C";
    elseif ($nilai_angka >= 1.00) $huruf = "D";
    else $huruf = "E";

    // Update ke database
    $sql = "UPDATE nilai 
            SET mata_kuliah='$mata_kuliah', sks='$sks', nilai_angka='$nilai_angka', nilai_huruf='$huruf' 
            WHERE id='$id_nilai'";

    if ($conn->query($sql)) {
      echo "<script>alert('Data nilai berhasil diperbarui!'); window.location='daftar-nilai.php?id=$id_mhs';</script>";
    } else {
      echo "Error: " . $conn->error;
    }
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Edit Nilai Mahasiswa</title>
<link rel="stylesheet" href="style/edit-nilai.css">
</head>
<body>
<div class="container">
  <h2>✏️ Edit Nilai Mahasiswa</h2>

  <p>
    <b>Nama:</b> <?= htmlspecialchars($mhs['nama']) ?><br>
    <b>NIM:</b> <?= htmlspecialchars($mhs['nim']) ?>
  </p>

  <form method="POST" onsubmit="return validasiForm()">
    <label>Mata Kuliah:</label>
    <input type="text" id="mata_kuliah" name="mata_kuliah" value="<?= htmlspecialchars($data['mata_kuliah']) ?>" required>

    <label>SKS (1–4):</label>
    <input type="number" id="sks" name="sks" min="1" max="4" value="<?= htmlspecialchars($data['sks']) ?>" required>

    <label>Nilai Angka (0.00–4.00):</label>
    <input type="number" id="nilai" name="nilai" step="0.01" min="0" max="4" value="<?= htmlspecialchars($data['nilai_angka']) ?>" required>

    <input type="submit" value="💾 Simpan Perubahan">
  </form>

  <a href="daftar-nilai.php?id=<?= $id_mhs ?>" class="back">← Kembali ke Daftar Nilai</a>
</div>

<script>
function validasiForm() {
  const mk = document.getElementById("mata_kuliah").value.trim();
  const sks = parseInt(document.getElementById("sks").value);
  const nilai = parseFloat(document.getElementById("nilai").value);

  if (mk === "" || isNaN(sks) || sks < 1 || sks > 4) {
    alert("⚠️ Lengkapi data dan pastikan SKS 1–4!");
    return false;
  }
  if (isNaN(nilai) || nilai < 0 || nilai > 4) {
    alert("⚠️ Nilai harus antara 0.00–4.00!");
    return false;
  }
  return true;
}
</script>
</body>
</html>