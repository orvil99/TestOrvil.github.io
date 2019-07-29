<?php		
		require_once '../conn/connection.php';

		$nom = mysqli_query($db, "SELECT max(ID_transaksi) as maxkode from transaksi");
		@$arr = mysqli_fetch_array($nom);
		$ID_transaksi = $arr['maxkode'];
		$nourut = (int) substr($ID_transaksi, 3, 3);
		$nourut++;
		$char = "TRX";
		$ID_transaksi = $char . sprintf("%03s", $nourut);

		$tanggal			= $_POST['tanggal'];
		$nama_pelanggan		= $_POST['nama_pelanggan'];
		$nama_barang		= $_POST['nama_barang'];
		$kategori			= $_POST['kategori'];
		$harga				= $_POST['harga'];
		$jumlah				= $_POST['jumlah'];

		$subtotal = $jumlah*$harga;
		$ppn = ($subtotal*10)/100;
		$total = $subtotal+$ppn;

		$query="insert into transaksi values('$ID_transaksi','$tanggal','$nama_pelanggan','$nama_barang','$kategori','$harga','$jumlah','$subtotal','$ppn','$total')";

		if(mysqli_query($db, $query) 	)
		{
			echo "Berhasil menambahkan data";
		}else{
			echo "Gagal..";
		}

		header("location:../transaction/new_transaction.php");
		exit;
?>