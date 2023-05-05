<?php

    include 'konfig/koneksi.php';
    include 'konfig/tools.php';

    $kode = $_GET['nilai'];

    $sql = "DELETE FROM `produk` WHERE kode = '$kode'";

    $query = mysqli_query($koneksi, $sql);

    if ($query) 
    {
        pindahHalaman("Data Produk Berhasil Dihapus", "index.php");
    }
    else
    {
        pindahHalaman("Data Produk Gagal Dihapus", "index.php");
    }
?>