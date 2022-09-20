<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/home.css">
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Login</title>
</head>
<body>
    <main class="mainLogin">
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
        <a href="cadastro.php">Não tem uma conta? Crie uma aqui!</a>
    </main>

    <script src="scripts/login.js"></script>
</body>
</html>