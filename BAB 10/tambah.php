<?php
require_once __DIR__ . '/koneksi.php';

$Kode_MK  = $_POST['Kode_MK'];
$Nama_MK  = $_POST['Nama_MK'];
$SKS      = $_POST['SKS'];
$Semester = $_POST['Semester'];

mysqli_query($koneksi, "INSERT INTO matakuliah VALUES ('$Kode_MK', '$Nama_MK', '$SKS', '$Semester')");

header("Location: index.php");
exit();
?>