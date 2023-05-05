<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<?php
    include 'konfig/koneksi.php';
?>

<body>
    <div class="container mt-5">
        <h1 class="mb-5">Data Produk</h1>

        <a class="btn btn-primary" href="produk-tambah.php" role="button">
            Tambah Produk
        </a>

        <div class="table-responsive">
            <table class="table mt-2">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Kode Barang</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                        $sql = "SELECT * FROM produk";
                        $query = mysqli_query($koneksi, $sql);

                        //perulangan
                        $no = 1;
                        while ($data = mysqli_fetch_array($query)) 
                        {
                            $kode = $data['kode'];
                            $nama = $data['nama_produk'];
                            $harga = $data['harga'];
                            $stok = $data['stok'];

                            echo
                            "
                                <tr class=''>
                                    <td scope='row'>$no</td>
                                    <td>$kode</td>
                                    <td>$nama</td>
                                    <td>$harga</td>
                                    <td>$stok</td>
                                    <td>
                                    <a class='btn btn-warning' href='produk-edit.php?nilai=$kode' role='button'>
                                        Edit
                                    </a>
                                    <a class='btn btn-danger' href='produk-hapus.php?nilai=$kode' role='button'>
                                        Hapus
                                    </a>
                                    </td>
                                </tr>
                            ";
                            $no++;
                        }

                    ?>
                </tbody>
            </table>
        </div>

        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>

    </div>
</body>
</html>