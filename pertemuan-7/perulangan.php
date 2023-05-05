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

    <?php
        include "navbar.php";
    ?>

    <div class="container mt-5">
        <h1>Perulangan</h1>

        <hr>

        <h4>Perulangan For</h4>
        <?php
            for ($i=1; $i <= 5 ; $i++) 
            { 
                echo
                "
                    <div class='card m-1' style='width: 18rem; display:inline-block'>
                            <img src='gambar/parfum.jpg' class='card-img-top' alt='...'>
                            <div class='card-body'>
                            <h5 class='card-title'>Product $i</h5>
                            <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href='#' class='btn btn-primary'>Go somewhere</a>
                        </div>
                    </div>                
                ";
            }
            //while - do while
            //youtube : xo-pixel
            //market theme : themewagon, themeforest, bootstrapmade
        ?>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>