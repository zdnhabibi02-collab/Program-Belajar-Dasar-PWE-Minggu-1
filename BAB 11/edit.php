<?php
include __DIR__ .'/koneksi.php';

$tipe = $_GET['tipe'];

if ($tipe == 'matakuliah') {
    $old_kode = $_POST['Kode_MK_old'];
    $kode     = $_POST['Kode_MK'];
    $nama     = $_POST['Nama_MK'];
    $sks      = $_POST['SKS'];
    $smt      = $_POST['Semester'];

    mysqli_query($koneksi, "UPDATE matakuliah SET Kode_MK='$kode', Nama_MK='$nama', SKS='$sks', Semester='$smt' WHERE Kode_MK='$old_kode'");
} elseif ($tipe == 'user') {
    $id     = $_POST['Id'];
    $nama   = $_POST['Nama_pengguna'];
    $alamat = $_POST['alamat'];
    $user   = $_POST['User_name'];
    $pass   = $_POST['Password'];

    mysqli_query($koneksi, "UPDATE user SET Nama_pengguna='$nama', alamat='$alamat', User_name='$user', Password='$pass' WHERE Id='$id'");
}

header("location:index.php?tab=$tipe");
exit;
?>