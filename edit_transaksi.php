<?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: tambah_barang.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM transaksi WHERE id=$id";
$query = mysqli_query($db, $sql);
$barang = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit Transaksi</title>
</head>

<body>
    <header>
        <h3>Edit Transaksi</h3>
    </header>

    <form action="proses_edit_transaksi.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $barang['id'] ?>" />

        <p>
            <label for="nama">Nama Barang: </label>
            <input type="text" required name="nama" value="<?php echo $barang['nama'] ?>" />
        </p>
        <p>
            <label for="stok">Stok Barang: </label>
            <input type="number" required name="stok" value="<?php echo $barang['stok'] ?>" />
        </p>
        <p>
            <label for="harga">Harga Barang: </label>
            <input type="number" required name="harga" value="<?php echo $barang['harga'] ?>" />
        </p>
        <p>
            <label for="kategori">Kategori Barang: </label>
            <?php $kategori = $barang['kategori']; ?>
            <select name="kategori">
                <option <?php echo ($kategori == 'Makanan') ? "selected": "" ?>>Makanan</option>
                <option <?php echo ($kategori == 'Minuman') ? "selected": "" ?>>Minuman</option>
                <option <?php echo ($kategori == 'Alat Rumah Tangga') ? "selected": "" ?>>Alat Rumah Tangga</option>
            </select>
        </p>
        
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>