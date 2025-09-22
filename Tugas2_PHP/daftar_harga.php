<?php
// daftar_harga.php
$harga = [
  "Buku Tulis" => 12000,
  "Pulpen" => 3000,
  "Pensil" => 2500,
  "Penggaris" => 2000,
  "Penghapus" => 1500,
  "Kotak Pensi" => 20000,
  "Meja" => 500000,
  "Kursi" => 400000,
  "Laptop" => 15000000,
  "Mouse" => 250000,
  "Stabilo" => 10000,
  "Amplop" => 2000,
  "Spidol" => 15000,
  "Ransel" => 500000,
  "Buku" => 150000
];
?>
<!doctype html>
<html lang="id">
<head><meta charset="utf-8"><title>Daftar Harga Barang</title><link rel="stylesheet" href="style.css"></head>
<body>
  <div class="container form-container">
    <h2>Daftar Harga Barang</h2>
    <p>Tabel berikut menampilkan nama barang dan harga.</p>

    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Barang</th>
          <th style="text-align:right">Harga (Rp)</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1; foreach ($harga as $item => $price): ?>
          <tr>
            <td><?= $i++ ?></td>
            <td><?= htmlspecialchars($item) ?></td>
            <td class="number"><?= number_format((int)$price,0,',','.') ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <a href="index.php" class="back">← Kembali ke Menu</a>
  </div>
</body>
</html>
