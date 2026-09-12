const dataBarang = {
            "A001": { nama: "Televisi Samsung 50", harga: 5000000 },
            "A002": { nama: "VCD Player Sony", harga: 750000 },
            "A003": { nama: "Mini Compo", harga: 2300000 }
        };
        function cariBarang() {
            const kodeBarang = document.getElementById("kode-barang").value;
            const barang = dataBarang[kodeBarang];
            if (barang) {
                document.getElementById("nama-barang").value = barang.nama;
                document.getElementById("harga-barang").value = barang.harga;
            } else {
                alert("Kode barang tidak ditemukan!");
                document.getElementById("nama-barang").value = "";
                document.getElementById("harga-barang").value = "";
            }
        }
        function hitungTotal() {
            const hargaBarang = parseFloat(document.getElementById("harga-barang").value) || 0;
            const jumlahBarang = parseInt(document.getElementById("jumlah-barang").value) || 0;

            if (hargaBarang === 0 || jumlahBarang === 0) {
                alert("Pastikan harga dan jumlah barang valid!");
                return;
            }
            const totalHarga = hargaBarang * jumlahBarang;
            let diskon = 0;
            if (jumlahBarang >= 10) {
                diskon = totalHarga * 0.12;
            }
            document.getElementById("total-harga").value = totalHarga;
            document.getElementById("diskon").value = diskon;
            document.getElementById("total-bayar").value = totalHarga - diskon;
    }
    function cetakStruk(){
        window.print();
}