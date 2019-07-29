<?php

include("../conn/connection.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['edit'])){

    // ambil data dari formulir
    $ID_transaksi       = $_POST['ID_transaksi'];
    $tanggal            = $_POST['tanggal'];
    $nama_pelanggan     = $_POST['nama_pelanggan'];
    $nama_barang        = $_POST['nama_barang'];
    $kategori           = $_POST['kategori'];
    $harga              = $_POST['harga'];
    $jumlah             = $_POST['jumlah'];
    $subtotal           = $_POST['subtotal'];
    $ppn                = $_POST['ppn'];
    $total              = $_POST['total'];

    $subtotal = $jumlah*$harga;

    $ppn = ($subtotal*10)/100;

    $total = $subtotal+$ppn;

    // buat query update
    $sql = "UPDATE transaksi SET tanggal='$tanggal', nama_pelanggan='$nama_pelanggan', nama_barang='$nama_barang', kategori='$kategori', harga='$harga', jumlah='$jumlah',subtotal='$subtotal',ppn='$ppn',total=$total WHERE ID_transaksi=$ID_transaksi";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        header('Location: ../report/report.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>