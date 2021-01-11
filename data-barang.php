<!DOCTYPE html>
<html>
<head>
	<title>Data Barang Test Wadas</title>
</head>

<body>
	<header>
		<h3>Pendataan Barang</h3>
	</header>
	
	<form action="proses-data-barang.php" method="POST">
		
		<fieldset>
		
        <p>
			<label for="id_barang">ID Barang: </label>
			<input type="text" name="id_barang" placeholder="..." />
		</p>
		<p>
			<label for="nama_barang">Nama Barang: </label>
			<input type="text" name="nama_barang" placeholder="..." />
		</p>
		<p>
			<label for="jumlah_barang">Jumlah Barang: </label>
			<input type="text" name="jumlah_barang" placeholder="..." />
		</p>
        <p>
			<label for="harga_barang">Harga Barang: </label>
			<input type="number" name="harga_barang" placeholder="..." />
		</p>
		<p>
			<input type="submit" value="Tambahkan" name="tambahkan" />
		</p>
		
		</fieldset>
	
	</form>
	
	</body>
</html>
