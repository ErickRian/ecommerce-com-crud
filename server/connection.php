<?php

    include_once "connection_settings.php";
            
    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        echo "erro na conexão<br/>erro: <code>$conn->connect_error</code>";
    }


?>