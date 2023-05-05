<?php

    function pindahHalaman($pesan, $halTujuan)
    {
        echo
        "
            <script>
                alert('$pesan');
                window.location = '$halTujuan';
            </script>
        ";
    }
    
?>