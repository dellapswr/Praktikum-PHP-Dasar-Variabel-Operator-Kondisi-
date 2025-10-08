<?php
include "koneksi.php";

$id_nilai = $_GET['id_nilai'];
$id_mhs = $_GET['id'];

$sql = "DELETE FROM nilai WHERE id='$id_nilai'";

if ($conn->query($sql)) {
  echo "<script>alert('Data nilai berhasil dihapus!'); window.location='daftar-nilai.php?id=$id_mhs';</script>";
} else {
  echo "Error: " . $conn->error;
}
?>
