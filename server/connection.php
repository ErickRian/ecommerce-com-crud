<?php

    include_once "connection_settings.php";
            
    $conn = mysqli_connect($host, $username, $password, $database);

    if (mysqli_connect_error()) {
        echo "erro na conexão".mysqli_connect_error();
    }


?>