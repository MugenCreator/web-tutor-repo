<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "e_comp";

    $koneksi = mysqli_connect($server, $username, $password, $database);

    if(!$koneksi)
    {
        echo
        "
            <h1>Tidak ada koneksi database</h1>
        ";
    }

?>