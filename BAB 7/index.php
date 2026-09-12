<!DOCTYPE html>
<html lang="id">
<head>
    <title>Form Penjualan Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Form Penjualan Barang</h1>
        </div>
        <div class="form-body">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="kode_barang">Kode Barang:</label>
                    <input type="text" id="kode_barang" name="kode_barang" style="width: 50px;" required>
                </div>
                <div class="form-group">
                    <label for="nama_barang">Nama Barang:</label>
                    <input type="text" id="nama_barang" name="nama_barang" style="width: 100px;" required>
                </div>
                <div class="form-group">
                    <label for="harga_barang">Harga Barang:</label>
                    <input type="text" id="harga_barang" name="harga_barang" style="width: 50px;" required>
                </div>
                <div class="form-group">
                    <label>Jumlah Barang:</label>
                    <div class="radio-group">
                        <label><input type="radio" name="jumlah_barang" value="10" required></label>
                        10
                        <label><input type="radio" name="jumlah_barang" value="20" required></label>
                        20
                        <label><input type="radio" name="jumlah_barang" value="30" required></label>
                        30
                        <label><input type="radio" name="jumlah_barang" value="40" required></label>
                        40
                    </div>
                </div>
                <div class="form-group">
                    <label for="metode-bayar">Metode Bayar:</label>
                    <select id="metode-bayar" name="metode_bayar" required>
                        <option value="">Pilih Metode Bayar</option>
                        <option value="cash">Cash</option>
                        <option value="kredit">Kredit</option>
                    </select>
                    <button type="submit" name="proses">PROSES</button>
                </div>
            </form>
        </div>
    </div>
</body>

<?php
if (isset($_POST['proses'])){
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $harga_barang = $_POST['harga_barang'];
    $jumlah_barang = $_POST['jumlah_barang']; 
    $metode_bayar = $_POST['metode_bayar'];

    echo"<h2><p>FORM PENJUALAN BARANG</p></h2>";
    echo"<p>Kode Barang:$kode_barang</p>";
    echo"<p>Nama Barang:$nama_barang</p>";
    echo"<p>Harga Barang:$harga_barang</p>";
    echo"<p>Jumlah Baarang:$jumlah_barang</p>";
    echo"<p>Metode Bayar:$metode_bayar</p>";
}
?>