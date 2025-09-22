<?php
// daftar_mahasiswa_assoc.php
$mahasiswa = [
  "2105551001" => "Dewi Saraswati",
  "2105551002" => "Made Arya Pratama",
  "2105551003" => "Ni Putu Sari",
  "2105551004" => "I Gede Arya",
  "2105551005" => "Kadek Rahayu"
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Styling tabel tema coklat */
        .table-container {
            max-width: 600px;
            margin: 30px auto;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 6px 18px rgba(0,0,0,0.08);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }
        th {
            background: #6b4226; /* coklat tua */
            color: #fff;
            padding: 12px;
        }
        td {
            padding: 12px;
            border-bottom: 1px solid #eee;
        }
        tr:nth-child(even) td {
            background: #f7efe9; /* coklat pastel */
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #6b4226; /* coklat tua */
        }
        .back {
            display: block;
            width: fit-content;
            margin: 20px auto;
            padding: 8px 16px;
            background: #6b4226;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            transition: 0.3s;
        }
        .back:hover {
            background: #8c5c3b; /* coklat lebih terang saat hover */
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Daftar Mahasiswa</h2>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mahasiswa as $nim => $nama): ?>
                    <tr>
                        <td><?= htmlspecialchars($nim) ?></td>
                        <td><?= htmlspecialchars($nama) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <a href="index.php" class="back">← Kembali ke Menu</a>
</div>
</body>
</html>