<?php
include "koneksi.php";

$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';

$sql = "SELECT * FROM mahasiswa 
        WHERE nama LIKE '%$keyword%' 
           OR nim LIKE '%$keyword%' 
           OR prodi LIKE '%$keyword%'";

$result = $conn->query($sql);

$data = [];
while ($row = $result->fetch_assoc()) {
  $data[] = $row;
}

// ubah hasil query menjadi format JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
