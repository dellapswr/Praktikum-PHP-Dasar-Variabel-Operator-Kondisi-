<?php
// index.php
?>
<!doctype html>
<html lang="id"> <!-- Bahasa dokumen diset ke Indonesia -->
<head>
  <meta charset="utf-8"> <!-- Cara komputer nyimpen huruf, angka, simbol, dan emoji -->
  <title>Praktik PHP - Menu</title> <!-- Judul tab browser -->
  <link rel="stylesheet" href="style.css"> <!-- Ngehubungin file CSS untuk tampilan halaman -->
</head>
<body>
   <!-- Semua isi halaman dibungkus dalam div "container" -->
  <div class="container">
    <h1>Praktik PHP — Menu Tugas</h1>
    <!-- Bagian menu pilihan ditaruh dalam div "cards" -->
    <div class="cards">
      <a class="card" href="greeting_form.php">1. Form Ucapan</a>
      <a class="card" href="calculator_form.php">2. Kalkulator Sederhana</a>
      <a class="card" href="parity_form.php">3. Menentukan Ganjil / Genap + Prima</a>
      <a class="card" href="grade_form.php">4. Konversi Nilai → Huruf</a>
      <a class="card" href="menu_form.php">5. Menu Makanan</a>
      <a class="card" href="biodata_form.php">6. Biodata Singkat</a>
    </div>

    <!-- Paragraf sambutan, ditaruh di tengah -->
    <p style="text-align:center">
  Selamat datang di Tugas Praktik: PHP Dasar (Variabel, Operator, Kondisi)
</p>
  </div>
</body>
</html>
