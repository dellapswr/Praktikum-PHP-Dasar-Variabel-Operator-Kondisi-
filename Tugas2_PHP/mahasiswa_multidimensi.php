<?php
// mahasiswa_multidimensi.php
$mahasiswa = [
  ["nim"=>"2105551001","nama"=>"Dewi Saraswati","umur"=>20,"prodi"=>"Teknologi Informasi"],
  ["nim"=>"2105551002","nama"=>"Made Arya Pratama","umur"=>21,"prodi"=>"Teknologi Informasi"],
  ["nim"=>"2105551003","nama"=>"Ni Putu Sari","umur"=>19,"prodi"=>"Teknologi Informasi"],
  ["nim"=>"2105551004","nama"=>"I Gede Arya","umur"=>20,"prodi"=>"Teknologi Informasi"],
  ["nim"=>"2105551005","nama"=>"Kadek Rahayu","umur"=>22,"prodi"=>"Teknologi Informasi"],
  ["nim"=>"2105551006","nama"=>"Yoga Saputra","umur"=>18,"prodi"=>"Teknologi Informasi"],
  ["nim"=>"2105551007","nama"=>"Siti Nurhaliza","umur"=>20,"prodi"=>"Teknologi Informasi"],
  ["nim"=>"2105551008","nama"=>"Andi Wijaya","umur"=>21,"prodi"=>"Teknologi Informasi"],
  ["nim"=>"2105551009","nama"=>"Putra Gunawan","umur"=>19,"prodi"=>"Teknologi Informasi"],
  ["nim"=>"2105551010","nama"=>"Nina Larasati","umur"=>20,"prodi"=>"Teknologi Informasi"]
];
?>
<!doctype html>
<html lang="id"><head><meta charset="utf-8"><title>Array Multidimensi - Mahasiswa</title><link rel="stylesheet" href="style.css"></head>
<body>
  <div class="container form-container">
    <h2>Array Multidimensi: Data 10 Mahasiswa</h2>
    <p>Menampilkan data mahasiswa (NIM, Nama, Umur, Program Studi) dalam tabel menggunakan <code>foreach</code>.</p>

    <table>
      <thead>
        <tr><th>No</th><th>NIM</th><th>Nama</th><th style="text-align:right">Umur</th><th>Prodi</th></tr>
      </thead>
      <tbody>
        <?php $i=1; foreach ($mahasiswa as $m): ?>
          <tr>
            <td><?=$i++?></td>
            <td><?=htmlspecialchars($m['nim'])?></td>
            <td><?=htmlspecialchars($m['nama'])?></td>
            <td class="number"><?=htmlspecialchars((string)$m['umur'])?></td>
            <td><?=htmlspecialchars($m['prodi'])?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <a href="index.php" class="back">← Kembali ke Menu</a>
  </div>
</body></html>
