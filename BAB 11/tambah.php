<?php
include __DIR__ . '/koneksi.php';

$tipe = $_GET['tipe'];

if ($tipe == 'matakuliah') {
    $kode = $_POST['Kode_MK'];
    $nama = $_POST['Nama_MK'];
    $sks  = $_POST['SKS'];
    $smt  = $_POST['Semester'];
    
    mysqli_query($koneksi, "INSERT INTO matakuliah VALUES('$kode', '$nama', '$sks', '$smt')");
} elseif ($tipe == 'user') {
    $nama   = $_POST['Nama_pengguna'];
    $alamat = $_POST['alamat'];
    $user   = $_POST['User_name'];
    $pass   = $_POST['Password'];
    
    mysqli_query($koneksi, "INSERT INTO user VALUES(NULL, '$nama', '$alamat', '$user', '$pass')");
}
header("location:index.php?tab=$tipe");
exit;
?>