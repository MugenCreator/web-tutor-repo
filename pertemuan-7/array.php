<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <?php
        include "navbar.php";
    ?>

    <div class="container">
        <h1>Array</h1>

        <h4>Contoh</h4>

        <?php
            $nama = array("Bambang", "Danny", "Adit");

            //array --> 1 variable bisa lebih dari satu value

            echo
            "
                <p>Disini ada siswa bernama $nama[0]</p>
                <h6>Data Siswa Keseluruhan : </h6>
            ";

            for ($i=0; $i <= 2; $i++) 
            { 
                echo
                "
                    <p>$nama[$i]</p>
                ";
            }
        ?>

        <h4>Produk</h4>

        <?php
            
            $produk = array("Parfum","Lotion", "Cologne");
            $harga  = array("50.000", "30.000", "25.000");
            $foto   = array("parfum.jpg", "lotion.jpg", "cologne.jpg");

            for ($i=0; $i <= 2 ; $i++) 
            { 
                echo
                "
                    <div class='card m-1' style='width: 18rem; display:inline-block'>
                        <img src='gambar/$foto[$i]' class='card-img-top' alt='...'>
                        <div class='card-body'>
                            <h5 class='card-title'>$produk[$i]</h5>
                            <p class='card-text'>$harga[$i]</p>
                            <a href='#' class='btn btn-primary'>Go somewhere</a>
                        </div>
                    </div>                
                ";
            }
        ?>
    </div>
  </body>
</html>