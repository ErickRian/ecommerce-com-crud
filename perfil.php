<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<body>
<?php
    session_start();
    include_once "./server/connection.php";
    if (!isset($_SESSION["login"]) || !isset($_SESSION["senha"])) {
        header("location: login.php");
    }
    else {
        $query = $conn->prepare("SELECT * FROM cadastro WHERE email=? and senha=?");
        $query->bind_param("ss", $_SESSION["login"], $_SESSION["senha"]);

        $query->execute();
        $result = $query->get_result();
        $data = $result->fetch_assoc();

    }
?>

    <main>
        <div>
            <p><?php echo $data["nome"]; ?></p>
            <p><?php echo $data["email"]; ?></p>

            <p><?php echo $data["telefone"]; ?></p>
            <p><?php echo $data["CPF"]; ?></p>
            <p><?php echo $data["cidade"]; ?></p>
            <p><?php echo $data["CEP"]; ?></p>
            <p><?php echo $data["estado"]; ?></p>
            <p><?php echo $data["bairro"]; ?></p>
            <p><?php echo $data["rua"]; ?></p>
            <p><?php echo $data["numero"]; ?></p>
        </div>
    </main>
</body>
</html>