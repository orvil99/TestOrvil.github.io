<?php
    
include'../conn/connection.php';

if(!isset($_GET['ID_transaksi']) ){
     header('Location:../report/report.php');
}

$ID_transaksi = $_GET['ID_transaksi'];

$sql = "SELECT * FROM transaksi WHERE ID_transaksi=$ID_transaksi";
$query = mysqli_query($db, $sql);
@$row = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) == 0 ){
    die("data tidak ditemukan...");
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Transaksi</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <div class="transaction">

    <form action="proses.php" method="post">
        <p class="p-3">Edit Data Transaksi</p>
        <button class="btn-beranda" disabled=""><a href="../index.html">Beranda</a></button>
        <hr class="hr-transaction-edit">
        <table>
            <tr>
                <input type="hidden" name="ID_transaksi" value="<?php echo $row['ID_transaksi'] ?>">
                <label form="tanggal">Tanggal</label><br>
                <input type="date" name="tanggal" value="<?php echo $d['tanggal'] ?>"><br>
                <label>Nama Pelanggan</label><br>
                <input type="text" name="nama_pelanggan" value="<?php echo $row['nama_pelanggan'] ?>"><br>
                <label>Nama Barang</label><br>
                <input type="text" name="nama_barang" value="<?php echo $row['nama_barang'] ?>"><br>
                <label>Kategori</label><br>
                <?php $kategori = $row['kategori']; ?>
                    <select name="kategori">
                        <option <?php echo ($kategori == 'Komputer') ? "selected": "" ?>>Komputer</option>
                        <option <?php echo ($kategori == 'Laptop') ? "selected": "" ?>>Laptop</option>
                        <option <?php echo ($kategori == 'CPU') ? "selected": "" ?>>CPU</option>
                        <option <?php echo ($kategori == 'Charger Laptop') ? "selected": "" ?>>Charger Laptop</option>
                    </select><br>
                <label>Harga</label><br>
                <input type="number" name="harga" value="<?php echo $row['harga'] ?>"><br>
                <label>Jumlah</label><br>
                <input type="number" name="jumlah" value="<?php echo $row['jumlah'] ?>"><br>
                <input type="hidden" name="subtotal" value="<?php echo $row['subtotal']; ?>" />
                <input type="hidden" name="ppn" value="<?php echo $row['ppn']; ?>" />
                <input type="hidden" name="total" value="<?php echo $row['total']; ?>" />

            </tr>
        </table>
        <button type="submit" name="edit" class="btn-update">Edit</button>
    </form>
    </div>
</body>
</html>