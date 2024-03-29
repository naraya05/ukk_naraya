<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Kasir | Naraya</title>
</head>

<body>
    <header>
        <h3>Tambah Pelanggan Baru</h3>
    </header>

    <form action="proses_tambah_pelanggan.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama Pelanggan: </label>
            <input type="text" name="nama" required placeholder="nama pelanggan" />
        </p>
    
        <p>
            <label for="jenisKelamin">Jenis Kelamin: </label>
            <select name="jenisKelamin">
                <option>pria</option>
                <option>wanita</option>
            </select>
        </p>
        
        <p>
            <input type="submit" value="Tambah" name="tambah" />
        </p>

        </fieldset>

    </form>

    <br>
    <a href="pelanggan.php"><= Kembali</a>

    </body>
</html>