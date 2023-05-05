<?php

    include 'konfig/koneksi.php';
    include 'konfig/tools.php';

    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $sql = "INSERT INTO `produk`(`kode`, `nama_produk`, `harga`, `stok`) 
    VALUES ('$kode','$nama','$harga','$stok')";

    $query = mysqli_query($koneksi, $sql);

    if ($query) 
    {
        pindahHalaman("Data Produk Berhasil Ditambahkan", "index.php");
    }
    else
    {
        pindahHalaman("Data Produk Gagal Ditambahkan", "produk-tambah.php");
    }
?>