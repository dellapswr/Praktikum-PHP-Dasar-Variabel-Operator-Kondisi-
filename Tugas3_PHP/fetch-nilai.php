<?php
include "koneksi.php";

$id_mahasiswa = isset($_GET['id']) ? $_GET['id'] : 0;

$sql = "SELECT * FROM nilai WHERE mahasiswa_id = '$id_mahasiswa'";
$result = $conn->query($sql);

$data = [];
while ($row = $result->fetch_assoc()) {
  $data[] = $row;
}

header('Content-Type: application/json');
echo json_encode($data);
?>
