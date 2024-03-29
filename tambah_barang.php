<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Aplikasi Kasir | Naraya</title>
</head>

<body>
    <header>
        <h1>Data Barang</h1>
    </header>

    <nav>
        <a href="barang.php">Tambah Barang +</a>
    </nav>

    <?php if (isset($_GET['status'])) : ?>
        <p>
            <?php
            if ($_GET['status'] == 'sukses') {
                echo "Tambah barang baru berhasil!";
            } else {
                echo "Tambah barang gagal!";
            }
            ?>
        </p>
    <?php endif; ?>

    <br>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Kategori</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = "SELECT * FROM barang";
            $query = mysqli_query($db, $sql);
            $i = 1;

            while ($siswa = mysqli_fetch_array($query)) {
                echo "<tr>";

                echo "<td>" . $i . "</td>";
                echo "<td>" . $siswa['nama'] . "</td>";
                echo "<td>" . $siswa['stok'] . "</td>";
                echo "<td>" . $siswa['harga'] . "</td>";
                echo "<td>" . $siswa['kategori'] . "</td>";

                echo "<td>";
                echo "<a href='edit.php?id=" . $siswa['id'] . "'>Edit</a> | ";
                echo "<a href='hapus.php?id=" . $siswa['id'] . "'>Hapus</a>";
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