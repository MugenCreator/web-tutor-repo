<?php

    include 'konfig/koneksi.php';
    include 'konfig/tools.php';

    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $sql = "UPDATE `produk` 
    SET `kode`='$kode',
    `nama_produk`='$nama',
    `harga`='$harga',
    `stok`='$stok' 
    WHERE kode = '$kode'";

    $query = mysqli_query($koneksi, $sql);

    if ($query) 
    {
        pindahHalaman("Data Produk Berhasil Diubah", "index.php");
    }
    else
    {
        pindahHalaman("Data Produk Gagal Diubah", "produk-edit.php?nilai=$kode");
    }
?>