<?php
require_once __DIR__ . '/koneksi.php';

$Kode_MK = $_GET['Kode_MK'];
$data    = mysqli_query($koneksi, "SELECT * FROM matakuliah WHERE Kode_MK='$Kode_MK'");
$d       = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Matakuliah</title>
</head>
<body>

    <h2 align="center">Edit Data Matakuliah</h2>
    <form action="edit.php" method="POST">
        <table align="center" cellpadding="5">
            <tr>
                <td>Kode MK</td>
                <td>: <input type="text" name="Kode_MK" value="<?php echo $d['Kode_MK']; ?>" readonly></td>
            </tr>
            <tr>
                <td>Nama MK</td>
                <td>: <input type="text" name="Nama_MK" value="<?php echo $d['Nama_MK']; ?>" required></td>
            </tr>
            <tr>
                <td>SKS</td>
                <td>: <input type="number" name="SKS" value="<?php echo $d['SKS']; ?>" required></td>
            </tr>
            <tr>
                <td>Semester</td>
                <td>: <input type="number" name="Semester" value="<?php echo $d['Semester']; ?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Edit">
                    <button type="button" onclick="window.location.href='index.php'">Batal Mas</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>