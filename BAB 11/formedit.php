<?php
include __DIR__ .'/koneksi.php';

$tipe = $_GET['tipe'] ?? 'matakuliah';
$id   = $_GET['id'] ?? '';

if ($tipe == 'matakuliah') {
    $id = mysqli_real_escape_string($koneksi, $id);
    $data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM matakuliah WHERE Kode_MK='$id'"));
} else {
    $id = (int) $id;
    $data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM user WHERE Id='$id'"));
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <link rel="stylesheet" href="formedit.css">
</head>
<body>

<div class="form-box">
    <h2>Edit Data <?= ucfirst($tipe) ?></h2><br>
    <form action="edit.php?tipe=<?= $tipe ?>" method="POST">
        <?php if ($tipe == 'matakuliah'): ?>
            <input type="hidden" name="Kode_MK_old" value="<?= $data['Kode_MK'] ?>">
            <div class="form-group"><label>Kode MK</label><input type="text" name="Kode_MK" value="<?= $data['Kode_MK'] ?>" required></div>
            <div class="form-group"><label>Nama MK</label><input type="text" name="Nama_MK" value="<?= $data['Nama_MK'] ?>" required></div>
            <div class="form-group"><label>SKS</label><input type="number" name="SKS" value="<?= $data['SKS'] ?>" required></div>
            <div class="form-group"><label>Semester</label><input type="number" name="Semester" value="<?= $data['Semester'] ?>" required></div>
        <?php else: ?>
            <input type="hidden" name="Id" value="<?= $data['id'] ?>">
            <div class="form-group"><label>Nama Pengguna</label><input type="text" name="Nama_pengguna" value="<?= $data['Nama_pengguna'] ?>" required></div>
            <div class="form-group"><label>Alamat</label><textarea name="alamat" required><?= $data['alamat'] ?></textarea></div>
            <div class="form-group"><label>Username</label><input type="text" name="User_name" value="<?= $data['User_name'] ?>" required></div>
            <div class="form-group"><label>Password</label><input type="text" name="Password" value="<?= $data['Password'] ?>" required></div>
        <?php endif; ?>
        <button type="submit" class="form-button btn-submit">Update</button>
        <button type="button" class="form-button btn-batal" onclick="window.location.href='index.php?tab=<?= $tipe ?>'">Batal</button>
    </form>
</div>
</body>
</html>