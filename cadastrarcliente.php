<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Cliente</title>
</head>
<body>
    <?php
    include_once "./server/connection.php";
    session_start();

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
    $telefone = $_POST["telefone"];
    $cpf = $_POST["cpf"];
    $cidade = $_POST["cidade"];
    $cep = $_POST["cep"];
    $estado = $_POST["estado"];
    $bairro = $_POST["bairro"];
    $rua = $_POST["rua"];
    $numero = $_POST["numero"];

    if (isset($nome, $email, $senha, $telefone, $cpf, $cidade, $cep, $estado, $bairro, $rua, $numero)) {
        if (strlen($telefone) == 15) {
                if (strlen($cpf) == 14) {
                $query = $conn->prepare("INSERT INTO cadastro (nome, email, senha, telefone, CPF, cidade, CEP, estado, bairro, rua, numero)
                values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

                $query->bind_param("ssssssisssi", $nome, $email, $senha, $telefone, $cpf, $cidade, $cep, $estado, $bairro, $rua, $numero);
                try  {
                    $query->execute();
                    $_SESSION["login"] = $email;
                    $_SESSION["senha"] = $senha;
                    header("location: perfil.php");
                }
                catch (Exception $err) {
        	        if (str_contains($query->error, "email")) {
        	            header("location: cadastro.php?already_exists=email");
        	        }
        	        else if (str_contains($query->error, "CPF")) {
        	            header("location: cadastro.php?already_exists=cpf");
        	        }
                    else {
                        header("location: cadastro.php?error=true");
                    }
                }
            }
            else {
                header("location: cadastro.php?empty=cpf");
            }
        }
        else {
            header("location: cadastro.php?empty=tel");
        }
    }
    else {
        header("location: cadastro.php?empty=all");
    }


    ?>
</body>
</html>