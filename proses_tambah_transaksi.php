<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['tambah'])){

    // ambil data dari formulir
    $namaPelanggan = $_POST['namaPelanggan'];
    $namaBarang = $_POST['namaBarang'];
    $hargaBarang = $_POST['hargaBarang'];
    $jumlahBarang = $_POST['jumlahBarang'];
    $totalHarga = $hargaBarang * $jumlahBarang;

    // buat query
    $sql = "INSERT INTO transaksi (namaPelanggan, namaBarang, totalHarga) VALUE ('$namaPelanggan', '$namaBarang', '$totalHarga')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: transaksi.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: transaksi.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>