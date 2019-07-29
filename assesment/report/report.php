<!DOCTYPE html>
<html>
<head>
	<title>Laporan Transaksi</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div class="report">
		
	<p class="p-4">Laporan Transaksi Penjualan</p>
	<button class="btn-beranda"><a href="../index.html">Beranda</a></button>
	<button class="btn-add"><a href="../transaction/new_transaction.php">Tambah Data</a></button>
	<button class="btn-print"><a href="../print/print.php">Cetak</a></button>
	<button class="btn-export"><a href="../export/export.php">Export to Excel</a></button>
	<hr class="hr-report">
		<table class="table-report">
			<thead>
				<tr>
					<th>ID Transaksi</th>
					<th>Tanggal</th>
					<th>Nama Pelanggan</th>
					<th>Nama Barang</th>
					<th>Kategori</th>
					<th>Harga</th>
					<th>Jumlah</th>
					<th>Subtotal</th>
					<th>PPN 10%</th>
					<th>Total</th>
					<th>Aksi</th>
				</tr>
			</thead>

		<tbody>
			<?php
			require_once '../conn/connection.php';
			$query = $db->prepare("SELECT * FROM transaksi");
			$query->execute();
			$result = $query->get_result();

			while($row=$result->fetch_assoc()){
				?>
				<tr>
					<td><?php echo $row['ID_transaksi'];?></td>
					<td><?php echo $row['tanggal'];?></td>
					<td><?php echo $row['nama_pelanggan'];?></td>
					<td><?php echo $row['nama_barang'];?></td>
					<td><?php echo $row['kategori'];?></td>
					<td><?php echo $row['harga'];?></td>
					<td><?php echo $row['jumlah'];?></td>
					<td><?php echo $row['subtotal'];?></td>
					<td><?php echo $row['ppn'];?></td>
					<td><?php echo $row['total'];?></td>
					<td><button class="btn-edit"><a href="../update/edit.php?ID_transaksi=<?php echo $row['ID_transaksi'];?>" ">Edit</a></button>
						<button class="btn-delete" onclick="Yakin Hapus"><a href="../delete/delete.php?ID_transaksi=<?php echo $row['ID_transaksi'];?>" >Hapus</a></button>
					</td>
				</tr>
				<?php
			}
			?>
		</tbody>
	</table>
	<p class="p-5">Dibuat oleh : Orvil Anggy Zofar - DTS 2019</p>
</div>

</body>
</html>