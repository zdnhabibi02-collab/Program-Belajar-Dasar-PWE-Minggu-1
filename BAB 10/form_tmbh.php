<!DOCTYPE html>
<html>
<head>
    <title>Tambah Matakuliah</title>
</head>
<body>

    <h2 align="center">Tambah Data Matakuliah</h2>

    <form action="tambah.php" method="POST">
        <table align="center" cellpadding="5">
            <tr>
                <td>Kode MK</td>
                <td>: <input type="text" name="Kode_MK" required></td>
            </tr>
            <tr>
                <td>Nama MK</td>
                <td>: <input type="text" name="Nama_MK" required></td>
            </tr>
            <tr>
                <td>SKS</td>
                <td>: <input type="number" name="SKS" required></td>
            </tr>
            <tr>
                <td>Semester</td>
                <td>: <input type="number" name="Semester" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Simpan">
                    <button type="button" onclick="window.location.href='index.php'">Batal Mas</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>