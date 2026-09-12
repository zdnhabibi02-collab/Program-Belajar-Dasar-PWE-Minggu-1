<?php
$tipe = $_GET['tipe'] ?? 'matakuliah';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
    <link rel="stylesheet" href="formtmbh.css">
</head>
<body>

<div class="form-box">
    <h2>Tambah Data <?= ucfirst($tipe) ?></h2><br>
    <form action="tambah.php?tipe=<?= $tipe ?>" method="POST">
        <?php if ($tipe == 'matakuliah'): ?>
            <div class="form-group"><label>Kode MK</label><input type="text" name="Kode_MK" required></div>
            <div class="form-group"><label>Nama MK</label><input type="text" name="Nama_MK" required></div>
            <div class="form-group"><label>SKS</label><input type="number" name="SKS" required></div>
            <div class="form-group"><label>Semester</label><input type="number" name="Semester" required></div>
        <?php else: ?>
            <div class="form-group"><label>Nama Pengguna</label><input type="text" name="Nama_pengguna" required></div>
            <div class="form-group"><label>Alamat</label><textarea name="alamat" required></textarea></div>
            <div class="form-group"><label>Username</label><input type="text" name="User_name" required></div>
            <div class="form-group"><label>Password</label><input type="password" name="Password" required></div>
        <?php endif; ?>
        <button type="submit" class="form-button btn-submit">Simpan</button>
        <button type="button" class="form-button btn-batal" onclick="window.location.href='index.php?tab=<?= $tipe ?>'">Batal</button>
    </form>
</div>
</body>
</html>