<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>List Data Barang</title>
</head>

<body>
    <header>
        <h3>List Data Barang</h3>
    </header>

    <nav>
        <a href="data-barang.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Jumlah</th>
            <th>Harga</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM tb_barang";
        $query = mysqli_query($db, $sql);

        while($barang = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$barang['id_barang']."</td>";
            echo "<td>".$barang['nama_barang']."</td>";
            echo "<td>".$barang['jumlah_barang']."</td>";
            echo "<td>".$barang['harga_barang']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$barang['id_barang']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$barang['id_barang']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>