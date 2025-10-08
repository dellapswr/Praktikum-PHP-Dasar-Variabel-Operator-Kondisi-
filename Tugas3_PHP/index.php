<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>📘 Data Mahasiswa</title>
  <link rel="stylesheet" href="style/index.css">
</head>
<body>
  <div class="container">
    <h2>🎓 Data Mahasiswa</h2>
    <input type="text" id="keyword" placeholder="🔍 Ketik nama, NIM, atau prodi mahasiswa...">
    <a href="tambah.php" class="tambah">+ Tambah Mahasiswa</a>

    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>NIM</th>
          <th>Nama</th>
          <th>Prodi</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody id="hasil">
        <tr><td colspan="5" class="no-data">Memuat data mahasiswa...</td></tr>
      </tbody>
    </table>
  </div>

  <footer>🌿 Praktikum Pemrograman Internet — Tugas 3 (AJAX + PHP + JSON)</footer>

  <script>
    const inputCari = document.querySelector("#keyword");
    const hasilTabel = document.querySelector("#hasil");

    // Fungsi ambil data dari server
    function ambilData(keyword = "") {
      fetch(`cari-mahasiswa.php?keyword=${encodeURIComponent(keyword)}`)
        .then(res => res.json())
        .then(data => {
          let isi = "";

          if (data.length === 0) {
            isi = `<tr><td colspan="5" class="no-data">⚠️ Tidak ada data ditemukan</td></tr>`;
          } else {
            data.forEach(m => {
              isi += `
                <tr>
                  <td>${m.id}</td>
                  <td>${m.nim}</td>
                  <td>${m.nama}</td>
                  <td>${m.prodi}</td>
                  <td class="aksi">
                    <a href="daftar-nilai.php?id=${m.id}" class="btn btn-input">🧾 Nilai</a>
                    <a href="edit.php?id=${m.id}" class="btn btn-edit">✏️ Edit</a>
                    <a href="hapus.php?id=${m.id}" class="btn btn-hapus" onclick="return confirm('Yakin ingin menghapus data ini?')">🗑️ Hapus</a>
                  </td>
                </tr>`;
            });
          }

          hasilTabel.innerHTML = isi;
        })
        .catch(err => {
          console.error("Terjadi kesalahan:", err);
          hasilTabel.innerHTML = `<tr><td colspan="5" class="no-data">Gagal memuat data!</td></tr>`;
        });
    }

    // Tampilkan semua data saat pertama kali dibuka
    ambilData();

    // Jalankan fungsi setiap kali user mengetik
    inputCari.addEventListener("input", () => {
      const keyword = inputCari.value.trim();
      ambilData(keyword);
    });
  </script>
</body>
</html>
