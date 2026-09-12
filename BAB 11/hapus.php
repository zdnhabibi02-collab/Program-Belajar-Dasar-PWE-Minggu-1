<?php
include __DIR__.'/koneksi.php';

$tipe = $_GET['tipe'];
$id   = $_GET['id'];

if ($tipe == 'matakuliah') {
    mysqli_query($koneksi, "DELETE FROM matakuliah WHERE Kode_MK='$id'");
} elseif ($tipe == 'user') {
    mysqli_query($koneksi, "DELETE FROM user WHERE Id='$id'");
}

header("location:index.php?tab=$tipe");
exit;
?>