<?php
 $server = "localhost";
 $user = "root";
 $password ="";
 $nama_database = "penjualan";

$db= mysqli_connect($server,$user,$password,$nama_database);
 if(!$db) {
 	die( "Gagal Terhubung dengan Database :".mysqli_connect_error());
 }
 ?>