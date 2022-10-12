<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once "./server/connection.php";

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $telefone = $_POST["telefone"];
    $cpf = $_POST["cpf"];
    $cidade = $_POST["cidade"];
    $cep = $_POST["cep"];
    $estado = $_POST["estado"];
    $bairro = $_POST["bairro"];
    $rua = $_POST["rua"];
    $numero = $_POST["numero"];

    $query = $conn->prepare("INSERT INTO cadastro(nome, email, senha, telefone, cpf, cidade, cep, estado, bairro, rua, numero)
    values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $query->bind_param("sssiisisssi", $nome, $email, $senha, $telefone, $cpf, $cidade, $cep, $estado, $bairro, $rua, $numero);
    if ($query->execute()) {
        echo "legal";
    }
    else {
        echo "triste";
    }


    ?>
</body>
</html>