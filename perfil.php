<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/globals.css">
    <link rel="stylesheet" href="styles/login.css">
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

    <main class="mainLogin">
        <h1>Perfil</h1>
        <div class="formLogin profileContainer">
            <div>
                <div class="field">
                    <p>Nome:</p>
                    <p><?php echo $data["nome"]; ?></p>
                </div>
                <div class="field">
                    <p>Email:</p>
                    <p><?php echo $data["email"]; ?></p>
                </div>
            </div>

            <div>
                <div class="field">
                    <p>Telefone:</p>
                    <p><?php echo $data["telefone"]; ?></p>
                </div>

                <div class="field">
                    <p>CPF:</p>
                    <p><?php echo $data["CPF"]; ?></p>
                </div>
            </div>

            <div class="field">
                <p>CEP:</p>
                <p><?php echo $data["CEP"]; ?></p>
            </div>

            <div class="lineInformation">
                <div class="field">
                    <p>Cidade:</p>
                    <p><?php echo $data["cidade"]; ?></p>
                </div>

                <div class="field">
                    <p>Estado:</p>
                    <p><?php echo $data["estado"]; ?></p>
                </div>
            </div>

            <div class="lineInformation field">

                <p><?php echo $data["bairro"]; ?></p>
                <p><?php echo $data["rua"]; ?></p>
                <p><?php echo $data["numero"]; ?></p>
            </div>
        </div>
    </main>
</body>
</html>