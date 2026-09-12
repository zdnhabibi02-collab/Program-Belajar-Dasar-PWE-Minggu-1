<?php
require_once __DIR__ . '/koneksi.php';

$Kode_MK = $_GET['Kode_MK'];

mysqli_query($koneksi, "DELETE FROM matakuliah WHERE Kode_MK='$Kode_MK'");

header("Location: index.php");
exit();
?>