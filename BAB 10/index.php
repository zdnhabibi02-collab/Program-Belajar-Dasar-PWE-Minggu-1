<?php
require_once __DIR__ . '/koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tabel Matakuliah</title>
</head>
<body>

    <h2 align="center">Tabel Matakuliah</h2>

    <p align="center">
         <button type="button" onclick="window.location.href='form_tmbh.php'">Tambah Data Mahasiswa</button>
    </p>

    <table border="1" align="center" cellpadding="8" cellspacing="0">
        <tr>
            <th>Kode_MK</th>
            <th>Nama_MK</th>
            <th>SKS</th>
            <th>Semester</th>
            <th>OPSI</th>
        </tr>

        <?php
        $data = mysqli_query($koneksi, "SELECT * FROM matakuliah");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $d['Kode_MK']; ?></td>
                <td><?php echo $d['prodi']; ?></td>
                <td><?php echo $d['SKS']; ?></td>
                <td><?php echo $d['Semester']; ?></td>
                <td>
                    <button type="button" onclick="window.location.href='form_edit.php?Kode_MK=<?php echo $d['Kode_MK']; ?>'">Edit</button> | 
                    <a href="hapus.php?Kode_MK=<?php echo $d['Kode_MK']; ?>" onclick="return confirm('Hapus Gan?')">
                        <button type="button">Hapus</button></a>
                </td>
            </tr>
        <?php 
        }
        ?>
    </table>
</body>
</html>