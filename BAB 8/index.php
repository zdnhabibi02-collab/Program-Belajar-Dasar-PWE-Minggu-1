<?php
$kode_barang   = $_POST['kode_barang']?? '';
$nama_barang   = $_POST['nama_barang']?? '';
$harga_barang  = $_POST['harga_barang']?? '';
$jumlah_barang = $_POST['jumlah_barang']?? '';
$metode_bayar  = $_POST['metode_bayar']?? '';
$total_harga   = $_POST['total_harga']?? '';
$diskon        = $_POST['diskon']?? '';
$total_bayar   = $_POST['total_bayar']?? '';

$data_barang = [
    'A001' => ['nama' => 'Mouse', 'harga' => 5000000],
    'A002' => ['nama' => 'Headphone', 'harga' => 750000],
    'A003' => ['nama' => 'CPU', 'harga' => 2300000]
];

if (isset($_POST['cari'])) {
    if (array_key_exists($kode_barang, $data_barang)) {
        $nama_barang  = $data_barang[$kode_barang]['nama'];
        $harga_barang = $data_barang[$kode_barang]['harga'];
    } else {
        echo "<script>alert('Kode barang tidak ditemukan!');</script>";
    }
}

if (isset($_POST['proses'])) {
    if (array_key_exists($kode_barang, $data_barang)) {
        $nama_barang  = $data_barang[$kode_barang]['nama'];
        $harga_barang = $data_barang[$kode_barang]['harga'];
    }
    
    $jml = (int)$jumlah_barang;
    $hrg = (float)$harga_barang;

    $total_harga = $hrg * $jml;

    if ($metode_bayar == "Cash" || $jml > 5) {
        $diskon = 0.12 * $hrg;
    } elseif ($metode_bayar == "Kredit" && $jml > 20) {
        $diskon = 0.05 * $total_harga;
    } else {
        $diskon = 0;
    }
    $total_bayar = $total_harga - $diskon;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Penjualan Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="header">
        <h2>FORM PENJUALAN BARANG</h2>
    </div>
    <div class="form-body">
        <form method="POST" action="">
            <div class="form-group">
                <label for="kode_barang">Kode Barang</label>
                <input type="text" id="kode_barang" name="kode_barang" value="<?= htmlspecialchars($kode_barang) ?>" style="width: 110px;" required>
                <button type="submit" name="cari" class="btn-cari">Cari</button>
            </div>

            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" id="nama_barang" name="nama_barang" value="<?= htmlspecialchars($nama_barang) ?>" style="width: 230px;" readonly>
            </div>

            <div class="form-group">
                <label for="harga_barang">Harga Barang</label>
                <input type="text" id="harga_barang" name="harga_barang" value="<?= htmlspecialchars($harga_barang) ?>" style="width: 160px;" readonly>
            </div>

            <div class="form-group">
                <label for="jumlah_barang">Jumlah Barang</label>
                <input type="number" id="jumlah_barang" name="jumlah_barang" value="<?= htmlspecialchars($jumlah_barang) ?>" style="width: 80px;" required>
            </div>

            <div class="form-group">
                <label for="metode_bayar">Metode Bayar</label>
                <select id="metode_bayar" name="metode_bayar" style="width: 100px;">
                    <option value="Cash" <?= $metode_bayar == 'Cash' ? 'selected' : '' ?>>Cash</option>
                    <option value="Kredit" <?= $metode_bayar == 'Kredit' ? 'selected' : '' ?>>Kredit</option>
                </select>
                <button type="submit" name="proses" class="btn-proses">Proses</button>
            </div>

            <div class="form-group">
                <label for="total_harga">Total Harga</label>
                <input type="text" id="total_harga" name="total_harga" value="<?= htmlspecialchars($total_harga) ?>" style="width: 160px;" readonly>
            </div>

            <div class="form-group">
                <label for="diskon">Diskon</label>
                <input type="text" id="diskon" name="diskon" value="<?= htmlspecialchars($diskon) ?>" style="width: 160px;" readonly>
            </div>

            <div class="form-group">
                <label for="total_bayar">Total Bayar</label>
                <input type="text" id="total_bayar" name="total_bayar" value="<?= htmlspecialchars($total_bayar) ?>" style="width: 160px;" readonly>
            </div>
            <button type="button" name="cetak" class="btn-cetak" onclick="window.print()">Cetak</button>
        </form>
    </div>
</div>
</body>
</html>