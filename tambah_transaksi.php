<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Kasir | Naraya</title>
</head>

<body>
    <header>
        <h3>Tambah Transaksi Baru</h3>
    </header>

    <form action="proses_tambah_transaksi.php" method="POST">

        <fieldset>

        <p>
            <label for="namaPelanggan">Nama Pelanggan: </label>
            <input type="text" name="namaPelanggan" required placeholder="nama pelanggan" />
        </p>

        <p>
            <label for="namaBarang">Nama Barang: </label>
            <input type="text" name="namaBarang" required placeholder="nama barang" />
        </p>

        <p>
            <label for="hargaBarang">Harga Barang: </label>
            <input type="number" name="hargaBarang" required placeholder="harga barang" />
        </p>

        <p>
            <label for="jumlahBarang">Jumlah Barang: </label>
            <input type="number" name="jumlahBarang" required placeholder="jumlah barang" />
        </p>
        
        <p>
            <input type="submit" value="Tambah" name="tambah" />
        </p>

        </fieldset>

    </form>

    <br>
    <a href="transaksi.php"><= Kembali</a>
    
    </body>
</html>