<?php
require_once __DIR__ . '/koneksi.php';

$Kode_MK  = $_POST['Kode_MK'];
$Nama_MK  = $_POST['Nama_MK'];
$SKS      = $_POST['SKS'];
$Semester = $_POST['Semester'];

mysqli_query($koneksi, "UPDATE matakuliah SET Nama_MK='$Nama_MK', SKS='$SKS', Semester='$Semester' WHERE Kode_MK='$Kode_MK'");

header("Location: index.php");
exit();
?>