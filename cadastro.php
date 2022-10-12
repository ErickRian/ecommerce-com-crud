<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/globals.css">
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="styles/cadastro.css">
    <title>Cadastrar Usuário</title>
</head>
<body>
    <main class="mainLogin">
        <form action="./cadastrarcliente.php" method="post" class="formLogin">
            <fieldset class="containerLogin">
                <legend>Não é cadastrado? Faça agora!</legend>
                <div>
                    <input type="text" placeholder="Seu Nome" name="nome" required>
                    <input type="email" placeholder="Seu Email" name="email" required>
                </div>
                <input type="password" placeholder="Sua Senha" name="senha" required>
                <div>
                    <input type="tel" placeholder="Telefone" name="telefone" required max="11">
                    <input type="int" placeholder="CPF" name="cpf" required max="11">
                </div>

                <hr>

                <input type="int" placeholder="CEP" name="cep" required max="8">
                <div>
                    <input type="text" placeholder="Cidade" name="cidade" required>
                    <input type="text" placeholder="Estado" name="estado" required>
                </div>
                <input type="text" placeholder="Bairro" name="bairro" required>
                <div>
                    <input type="text" placeholder="Rua" name="rua" required>
                    <input type="int" placeholder="Número" name="numero" required>
                </div>
                <input type="submit" value="Cadastrar">
            </fieldset>
        </form>
    </main>
</body>
</html>