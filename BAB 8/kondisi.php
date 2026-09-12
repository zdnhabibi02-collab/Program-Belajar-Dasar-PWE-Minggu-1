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
