<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="styles/globals.css">
    <link rel="stylesheet" href="styles/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4155e89186.js" crossorigin="anonymous"></script>
    <title>E-Commerce</title>
</head>

<body>

    <?php
    include_once "header.php";
    include_once "components/itemCard.php";
    include_once "server/connection.php";
    ?>

    <section>
        <h2>Destaques</h2>
        <div class="item-container">
            <button class="btn backward"><i class="fa-solid fa-angle-left"></i></button>
            
            <?php

                $query = $conn->query("SELECT nome, imagem, preco FROM produtos");
                
                if ($query->num_rows > 0) {
                    while ($product = $query->fetch_assoc()) {
                       itemCard("R$" . number_format($product["preco"], 2, ",", "."), "image/" . $product["imagem"], $product["nome"]);
                    }
                }
            ?>

            <button class="btn forward"><i class="fa-solid fa-angle-right"></i></button>
        </div>
        <div class="responsive-grid">
            <div class="responsive-category">
                <h2>Categorias</h2>
                <div class="category-container">
                    <a href="#">
                        <div class="category">
                            <h3>Processadores</h3>
                        </div>
                    </a>
                    <a href="#">
                        <div class="category">

                            <h3>Gabinetes</h3>
                        </div>
                    </a>
                    <a href="#">
                        <div class="category">

                            <h3>Monitores</h3>
                        </div>
                    </a>
                    <a href="#">
                        <div class="category">

                            <h3>GPU's</h3>
                        </div>
                    </a>
                </div>
            </div>
            
        </div>

        <h2>Promoções</h2>
        <div class="item-container">
            <button class="btn backward"><i class="fa-solid fa-angle-left"></i></button>
            
            <?php

                $query = $conn->query("SELECT nome, imagem, preco FROM produtos where promocao=1");
                
                if ($query->num_rows > 0) {
                    while ($product = $query->fetch_assoc()) {
                       itemCard("R$" . number_format($product["preco"], 2, ",", "."), "image/" . $product["imagem"], $product["nome"]);
                    }
                }
            ?>

            <button class="btn forward"><i class="fa-solid fa-angle-right"></i></button>
        </div>

        <div class="notification">
            <h2>Notificação</h2>

            <input type="text" placeholder="Seu Nome">
            <input type="text" placeholder="Seu Email">
            <button>Cadastrar</button>
        </div>
    </section>

    <footer>
        <nav>
            <div class="rodape-container">
                <div class="rodape">
                    <a href="#">Conta</a>
                    <a href="#">Lista de Desejos</a>
                    <a href="#">Contato</a>
                    <a href="#">Políticas de Privacidade</a>
                    <a href="#">Ajuda</a>
                </div>

                <div class="rodape">
                    <h5>Redes Sociais</h5>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                </div>

                <div class="rodape">
                    2022 © Todos os Direitos Reservados
                </div>
            </div>
        </nav>
    </footer>
    <script src="scripts/home.js"></script>
</body>

</html>