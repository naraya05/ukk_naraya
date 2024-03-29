<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Aplikasi Kasir | Naraya</title>
</head>

<body>
    <header>
        <h1>Data Pelanggan</h1>
    </header>

    <nav>
        <a href="tambah_pelanggan.php">Tambah Pelanggan +</a>
    </nav>

    <?php if (isset($_GET['status'])) : ?>
        <p>
            <?php
            if ($_GET['status'] == 'sukses') {
                echo "Tambah pelanggan baru berhasil!";
            } else {
                echo "Tambah pelanggan gagal!";
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
                <th>Jenis Kelamin</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = "SELECT * FROM pelanggan";
            $query = mysqli_query($db, $sql);
            $i = 1;

            while ($siswa = mysqli_fetch_array($query)) {
                echo "<tr>";

                echo "<td>" . $i . "</td>";
                echo "<td>" . $siswa['nama'] . "</td>";
                echo "<td>" . $siswa['jenisKelamin'] . "</td>";

                echo "<td>";
                echo "<a href='edit_pelanggan.php?id=" . $siswa['id'] . "'>Edit</a> | ";
                echo "<a href='hapus_pelanggan.php?id=" . $siswa['id'] . "'>Hapus</a>";
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