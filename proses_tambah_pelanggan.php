<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['tambah'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $jenisKelamin = $_POST['jenisKelamin'];

    // buat query
    $sql = "INSERT INTO pelanggan (nama, jenisKelamin) VALUE ('$nama', '$jenisKelamin')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: pelanggan.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: pelanggan.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>