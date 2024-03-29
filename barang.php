<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Kasir | Naraya</title>
</head>

<body>
    <header>
        <h3>Tambah Barang Baru</h3>
    </header>

    <form action="proses_tambah.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama Barang: </label>
            <input type="text" required name="nama" placeholder="nama barang" />
        </p>

        <p>
            <label for="nama">Stok Barang: </label>
            <input type="number" required name="stok" placeholder="stok barang" />
        </p>

        <p>
            <label for="harga">Harga Barang: </label>
            <input type="number" required name="harga" placeholder="harga barang" />
        </p>
    
        <p>
            <label for="kategori">Kategori Barang: </label>
            <select name="kategori">
                <option>Makanan</option>
                <option>Minuman</option>
                <option>Pakaian</option>
                <option>Alat Tulis</option>
                <option>Alat Elektronik</option>
                <option>Alat Rumah Tangga</option>
            </select>
        </p>
        
        <p>
            <input type="submit" value="Tambah" name="tambah" />
        </p>

        </fieldset>

    </form>
    <br>
    <a href="tambah_barang.php"><= Kembali</a>

    </body>
</html>