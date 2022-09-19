<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Login</title>
</head>
<body>
    <main>
        <form action="" class="formLogin">
            <fieldset class="containerLogin">
                <legend>LOGIN</legend>
                <input type="email" placeholder="Digite seu Email">
                
                <div class="passwordField">
                    <input type="password" placeholder="Digite sua Senha" id="passwordInput"><span class="material-symbols-outlined" id="showPassword">visibility</span>
                </div>

                <input type="submit" value="Entrar">
            </fieldset>
        </form>

        <form action="">
            <fieldset>
                <legend>Não é cadastrado? Faça agora!</legend>
                <input type="text" placeholder="Seu Nome">
                <input type="text" placeholder="Seu Email">
                <input type="text" placeholder="Sua Senha">
                <input type="text" placeholder="Telefone">
                <input type="text" placeholder="CPF">

                <hr>

                <input type="text" placeholder="CEP">
                <input type="text" placeholder="Cidade">
                <input type="text" placeholder="Estado">
                <input type="text" placeholder="Bairro">
                <input type="text" placeholder="Rua">
                <input type="text" placeholder="Número">
                <input type="submit" value="Cadastrar">
            </fieldset>
        </form>
    </main>

    <script src="script.js"></script>
</body>
</html>