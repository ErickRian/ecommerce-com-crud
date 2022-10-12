<?php

    class BancoDados {
        public function start() {
            $env = parse_ini_file("../.env");
            
            $HOST = $env["HOST"];
            $USERNAME = $env["USERNAME"];
            $PASSWORD = $env["PASSWORD"];
            $DATABASE = $env["DATABASE"];


            $conn = new mysqli($HOST, $USERNAME, $PASSWORD, $DATABASE);

            if ($conn->connect_error) {
                echo "erro na conexão<br/>erro: <code>$conn->connect_error</code>";
            }
            else {
                echo "Conectado com sucesso!";
            }
        }


    }
    

?>