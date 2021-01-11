<?php

include("config.php");

if(isset($_POST['tambahkan'])){
	
	$id = $_POST['id_barang'];
	$nama = $_POST['nama_barang'];
	$jumlah = $_POST['jumlah_barang'];
	$harga = $_POST['harga_barang'];
	
	$sql = "INSERT INTO data_barang (id_barang, nama_barang, jumlah_barang, harga_barang) VALUE ('$id', '$nama', '$jumlah', '$harga')";
	$query = mysqli_query($db, $sql);
	

	if( $query ) {
		
		header('Location: index.php?status=sukses');
	} else {
		
		header('Location: index.php?status=gagal');
	}
	
	
} else {
	die("Akses dilarang");
}

?>
