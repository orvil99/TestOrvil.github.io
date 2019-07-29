<!DOCTYPE html>
<html>
<head>
	<title>Laporan Transaksi</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div class="report">
		
	<p class="p-6">Laporan Transaksi Penjualan</p>
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
				</tr>
				<?php
			}
			?>
		</tbody>
	</table>

	<script type="text/javascript">
		window.print();
	</script>

</div>

</body>
</html>