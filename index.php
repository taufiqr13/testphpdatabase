<!DOCTYPE html>
<html>
<head>
    <title>Test Wadas</title>
</head>

<body>
    <header>
        <h1>Aplikasi Sederhana</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="list-data-barang.php">Data Barang</a></li>
            <li><a href="data-perusahaan.php">Data Perusahaan</a></li>
            <li><a href="data-transaksi.php">Data Transaksi</a></li>
            <li><a href="report.php">Laporan</a></li>
        </ul>
    </nav>

    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>

    </body>
</html>