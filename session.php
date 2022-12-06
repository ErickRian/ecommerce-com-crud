<?php
    session_start();
    //conecxão
    require_once 'server/connection.php';
    
    //botão enviar
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        $sql = "SELECT email, senha FROM cadastro WHERE email = '$login' AND senha = '$senha'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) == 1):
            $_SESSION['logado'] = true;
            header('location: index.php');
        endif;       
    
?>     
    