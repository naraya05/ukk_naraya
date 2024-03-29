<?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: pelanggan.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM pelanggan WHERE id=$id";
$query = mysqli_query($db, $sql);
$pelanggan = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit Pelanggan</title>
</head>

<body>
    <header>
        <h3>Edit Pelanggan</h3>
    </header>

    <form action="proses_edit_pelanggan.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $pelanggan['id'] ?>" />

        <p>
            <label for="nama">Nama Pelanggan: </label>
            <input type="text" required name="nama" value="<?php echo $pelanggan['nama'] ?>" />
        </p>

        <p>
            <label for="jenisKelamin">Jenis Kelamin: </label>
            <?php $jenisKelamin = $pelanggan['jenisKelamin']; ?>
            <select name="jenisKelamin">
                <option <?php echo ($jenisKelamin == 'Makanan') ? "selected": "" ?>>pria</option>
                <option <?php echo ($jenisKelamin == 'Minuman') ? "selected": "" ?>>wanita</option>
            </select>
        </p>
        
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    <br>
    <a href="pelanggan.php"><= Kembali</a>

    </body>
</html>