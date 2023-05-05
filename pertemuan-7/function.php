<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>

    <?php
        include "navbar.php";
    ?>

    <div class="container mt-5">
        <?php
            function tampilkan_nama($nm)
            {
                echo
                "
                    <p>Nama saya $nm</p>
                ";
            }

            function penjumlahan($a,$b)
            {
                $c = $a + $b;
                return $c;
            }

            $namaku = "Bambang";

            tampilkan_nama($namaku);
            tampilkan_nama('Roxas');

            $nilai1 = 100;
            $nilai2 = 200;

            $hasil = penjumlahan($nilai1, $nilai2);

            $hasil2 = $hasil * 2;

            echo 
            "
                <p>a = $hasil </p>
                <p>b = $hasil2 </p>
            ";
        ?>
    </div>
</body>

</html>