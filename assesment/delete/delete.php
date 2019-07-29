<?php

include("../conn/connection.php");

if( isset($_GET['ID_transaksi']) ){

    // ambil id dari query string
    $ID_transaksi = $_GET['ID_transaksi'];

    // buat query hapus
    $sql = "DELETE FROM transaksi WHERE ID_transaksi=$ID_transaksi";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: ../report/report.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>