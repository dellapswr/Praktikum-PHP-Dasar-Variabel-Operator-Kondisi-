<?php
include "koneksi.php";
$id = $_GET['id'];

// Ambil data mahasiswa
$result = $conn->query("SELECT * FROM mahasiswa WHERE id='$id'");
if ($result->num_rows == 0) {
  die("<h3 style='text-align:center;color:#b35454;'>❌ Data mahasiswa tidak ditemukan.</h3>");
}
$data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Daftar Nilai Mahasiswa</title>
<link rel="stylesheet" href="style/daftar-nilai.css">
</head>
<body>
<div class="container">
  <h2>📚 Daftar Nilai Mahasiswa</h2>

  <p>
    <b>Nama:</b> <?= htmlspecialchars($data['nama']) ?><br>
    <b>NIM:</b> <?= htmlspecialchars($data['nim']) ?><br>
    <b>Program Studi:</b> <?= htmlspecialchars($data['prodi']) ?>
  </p>

  <a href="tambah-nilai.php?id=<?= $id ?>" class="btn-tambah">+ Tambah Nilai</a>

  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Mata Kuliah</th>
        <th>SKS</th>
        <th>Nilai Angka</th>
        <th>Nilai Huruf</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody id="tabel-nilai">
      <tr><td colspan="6" class="no-data">Memuat data nilai...</td></tr>
    </tbody>
  </table>

  <a href="index.php" class="back">← Kembali ke Menu Utama</a>
</div>

<script>
const idMahasiswa = <?= $id ?>;
const tabelNilai = document.querySelector("#tabel-nilai");

function ambilNilai() {
  fetch(`fetch-nilai.php?id=${idMahasiswa}`)
    .then(res => res.json())
    .then(data => {
      let isi = "";
      if (data.length === 0) {
        isi = `<tr><td colspan="6" class="no-data">Belum ada data nilai.</td></tr>`;
      } else {
        data.forEach((n, i) => {
          isi += `
            <tr>
              <td>${i + 1}</td>
              <td>${n.mata_kuliah}</td>
              <td>${n.sks}</td>
              <td>${parseFloat(n.nilai_angka).toFixed(2)}</td>
              <td>${n.nilai_huruf}</td>
              <td class="aksi">
                <a href="edit-nilai.php?id_nilai=${n.id}&id=${idMahasiswa}" class="btn btn-edit">✏️ Edit</a>
                <a href="hapus-nilai.php?id_nilai=${n.id}&id=${idMahasiswa}" class="btn btn-hapus" onclick="return confirm('Yakin ingin menghapus nilai ini?')">🗑️ Hapus</a>
              </td>
            </tr>`;
        });
      }
      tabelNilai.innerHTML = isi;
    })
    .catch(err => {
      console.error("Error:", err);
      tabelNilai.innerHTML = `<tr><td colspan="6" class="no-data">⚠️ Gagal memuat data.</td></tr>`;
    });
}

ambilNilai();
</script>
</body>
</html>