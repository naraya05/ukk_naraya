<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Aplikasi Kasir | Naraya</title>
</head>

<body>
    <header>
        <h1>Data Transaksi Barang</h1>
    </header>

    <nav>
        <a href="tambah_transaksi.php">Tambah Transaksi +</a>
    </nav>

    <?php if (isset($_GET['status'])) : ?>
        <p>
            <?php
            if ($_GET['status'] == 'sukses') {
                echo "Tambah transaksi baru berhasil!";
            } else {
                echo "Tambah transaksi gagal!";
            }
            ?>
        </p>
    <?php endif; ?>

    <br>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama pelanggan</th>
                <th>Nama Barang</th>
                <th>Total Harga</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = "SELECT * FROM transaksi";
            $query = mysqli_query($db, $sql);
            $i = 1;

            while ($transaksi = mysqli_fetch_array($query)) {
                echo "<tr>";

                echo "<td>" . $i . "</td>";
                echo "<td>" . $transaksi['namaPelanggan'] . "</td>";
                echo "<td>" . $transaksi['namaBarang'] . "</td>";
                echo "<td>" . $transaksi['totalHarga'] . "</td>";

                echo "<td>";
                echo "<a href='hapus_transaksi.php?id=" . $transaksi['id'] . "'>Hapus</a>";
                echo "</td>";

                echo "</tr>";

                $i++;
            }
            ?>

        </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    <br>

    <a href="index.php"><= Kembali</a>

</body>

</html>