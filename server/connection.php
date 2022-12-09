<?php

    include_once "connection_settings.php";
    $conn = new mysqli($host, $username, $password, $database);
    $conn->set_charset("utf8");
    if ($conn->connect_error) {
        echo "erro na conexão<br/>erro: <code>$conn->connect_error</code>";
    }


?>