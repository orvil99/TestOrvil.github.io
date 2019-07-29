<!DOCTYPE html>
<html>
<head>
	<title>Transaksi Baru</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div class="transaction">

	<form action="send-to-db.php" method="post">
		<p class="p-3">Transaki Baru</p>
		<button class="btn-beranda"><a href="../index.html">Beranda</a></button>
		<hr class="hr-transaction-edit">
		<table>
			<tr>
				<input type="hidden" name="ID_transaksi" value="<?php echo $ID_transaksi; ?>">
				<label form="tanggal">Tanggal</label><br>
				<input type="date" name="tanggal"><br>
				<label>Nama Pelanggan</label><br>
				<input type="text" name="nama_pelanggan"><br>
				<label>Nama Barang</label><br>
				<input type="text" name="nama_barang"><br>
				<label>Kategori</label><br>
					<select name="kategori">
						<option  value="komputer">Komputer</option>
						<option  value="laptop">Laptop</option>
						<option  value="cpu">CPU</option>
						<option  value="charger">Charger Laptop</option>
					</select><br>
				<label>Harga</label><br>
				<input type="number" name="harga"><br>
				<label>Jumlah</label><br>
				<input type="number" name="jumlah"><br>

			</tr>
		</table>
		<input type="submit" name="submit" class="btn-submit-save" value="Simpan">
		<input type="reset" name="reset" class="btn-submit-reset" value="Ulangi">
	</form>
	</div>

</body>
</html>