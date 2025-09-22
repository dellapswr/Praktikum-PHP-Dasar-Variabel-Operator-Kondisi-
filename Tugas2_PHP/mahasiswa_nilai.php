<?php
// mahasiswa_nilai.php
// Same structure, now include 'nilai' (0-100)
$mahasiswa = [
  ["nim"=>"2105551001","nama"=>"Dewi Saraswati","umur"=>20,"prodi"=>"Teknologi Informasi","nilai"=>85],
  ["nim"=>"2105551002","nama"=>"Made Arya Pratama","umur"=>21,"prodi"=>"Teknologi Informasi","nilai"=>68],
  ["nim"=>"2105551003","nama"=>"Ni Putu Sari","umur"=>19,"prodi"=>"Teknologi Informasi","nilai"=>74],
  ["nim"=>"2105551004","nama"=>"I Gede Arya","umur"=>20,"prodi"=>"Teknologi Informasi","nilai"=>90],
  ["nim"=>"2105551005","nama"=>"Kadek Rahayu","umur"=>22,"prodi"=>"Teknologi Informasi","nilai"=>55],
  ["nim"=>"2105551006","nama"=>"Yoga Saputra","umur"=>18,"prodi"=>"Teknologi Informasi","nilai"=>77],
  ["nim"=>"2105551007","nama"=>"Siti Nurhaliza","umur"=>20,"prodi"=>"Teknologi Informasi","nilai"=>61],
  ["nim"=>"2105551008","nama"=>"Andi Wijaya","umur"=>21,"prodi"=>"Teknologi Informasi","nilai"=>45],
  ["nim"=>"2105551009","nama"=>"Putra Gunawan","umur"=>19,"prodi"=>"Teknologi Informasi","nilai"=>72],
  ["nim"=>"2105551010","nama"=>"Nina Larasati","umur"=>20,"prodi"=>"Teknologi Informasi","nilai"=>88]
];
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Mahasiswa & Nilai</title>
  <link rel="stylesheet" href="style.css">
  <style>
    .status-lulus {
      color: #2e7d32;           
      font-weight: bold;
      padding: 4px 8px;
      border-radius: 6px;
      text-align: center;
    }
    .status-gagal {
      color: #c62828;           
      font-weight: bold;
      padding: 4px 8px;
      border-radius: 6px;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="container form-container">
    <h2>Data Mahasiswa dengan Nilai</h2>
    <p>Menampilkan tabel nilai dan status kelulusan (Lulus jika nilai ≥ 70).</p>

    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>NIM</th>
          <th>Nama</th>
          <th style="text-align:right">Umur</th>
          <th>Prodi</th>
          <th style="text-align:right">Nilai</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <?php $i=1; foreach ($mahasiswa as $m): 
          $nilai = (int)$m['nilai'];
          $statusClass = ($nilai >= 70) ? "status-lulus" : "status-gagal";
          $statusText = ($nilai >= 70) ? "Lulus" : "Tidak Lulus";
        ?>
          <tr>
            <td><?=$i++?></td>
            <td><?=htmlspecialchars($m['nim'])?></td>
            <td><?=htmlspecialchars($m['nama'])?></td>
            <td class="number"><?=htmlspecialchars((string)$m['umur'])?></td>
            <td><?=htmlspecialchars($m['prodi'])?></td>
            <td class="number"><?=htmlspecialchars((string)$nilai)?></td>
            <td class="<?=$statusClass?>"><?=$statusText?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <a href="index.php" class="back">← Kembali ke Menu</a>
  </div>
</body>
</html>