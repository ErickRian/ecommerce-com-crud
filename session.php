<?php
    session_start();
    include_once './server/connection.php';
    
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    $query = $conn->prepare("SELECT email, senha FROM cadastro WHERE email=?");
    $query->bind_param("s", $login);


    if($query->execute()) {
        $result = $query->get_result();
        $data = $result->fetch_assoc();

        if (password_verify($senha, $data["senha"])) {
            $_SESSION["login"] = $login;
            $_SESSION["password"] = $data["senha"];
            header("location: perfil.php");
        }
        else {
            unset ($_SESSION['login']);
            unset ($_SESSION['senha']);
            header("location: login.php?incorrect=true");
        }
        
     }
    
?>     
    