
<!DOCTYPE html>
<?php
    session_start();
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="styles/home.css">
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

    ?>

    <section>
        <h2>Destaques</h2>
        <div class="item-container">
            <button class="btn backward"><i class="fa-solid fa-angle-left"></i></button>
            
            <?php 
                for ($i=0; $i < 20; $i++) { 
                    itemCard("R$$i", "PRODUTO $i", "O Incrível produto $i");
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

                            <h3>Exemplo</h3>
                        </div>
                    </a>
                    <a href="#">
                        <div class="category">

                            <h3>Exemplo</h3>
                        </div>
                    </a>
                    <a href="#">
                        <div class="category">

                            <h3>Exemplo</h3>
                        </div>
                    </a>
                    <a href="#">
                        <div class="category">

                            <h3>Exemplo</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="responsive-feed">
                <h2>Recomendados</h2>

                <div class="feed-container">

                    <a href="#">
                        <div class="feed">
                            <article>
                            <div class="display-item">
                                    <div class="rate"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star-half-stroke"></i></div>
                                </div>
                                <div class="display-price">
                                    <h3>R$0,00</h3>
                                    <button>
                                        <span class="material-symbols-outlined wish-list">favorite</span>
                                    </button>
                                </div>

                                
                                <h3 class="display-name">Lorem ipsum dolor sit amet consectetur
                                    adipisicing.casncaosnasconascnacsonasconascoascnosc
                                </h3>
                            </article>
                        </div>
                    </a>
                    <a href="#">
                        <div class="feed">
                            <article>
                                <div class="display-price">
                                    <h3>R$0,00</h3>
                                    <button><span class="material-symbols-outlined wish-list">
                                            favorite</span></button>
                                </div>
                                <div class="display-item">
                                    <div class="rate"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star-half-stroke"></i></div>
                                </div>
                                <h3 class="display-name">
                            </article>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <h2>Promoções</h2>
        <div class="item-container">
            <button class="btn backward"><i class="fa-solid fa-angle-left"></i></button>
            <a href="#">
                <div class="item">
                    <article>
                        <div class="display-price">
                            <h3>R$0,00</h3>
                            <button><span class="material-symbols-outlined wish-list">
                                    favorite</span></button>
                        </div>
                        <div class="display-item">
                            <h3 class="promocao">0% OFF</h3>
                            <div class="rate"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star-half-stroke"></i></div>
                        </div>
                        <h3 class="display-name">Lorem ipsum dolor sit amet consectetur adipisicing
                        </h3>
                    </article>
                </div>
            </a>
            <a href="#">
                <div class="item">
                    <article>
                        <div class="display-price">
                            <h3>R$0,00</h3>
                            <button><span class="material-symbols-outlined wish-list">
                                    favorite</span></button>
                        </div>
                        <div class="display-item">
                            <h3 class="promocao">0% OFF</h3>
                            <div class="rate"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star-half-stroke"></i></div>
                        </div>
                        <h3 class="display-name">Lorem ipsum dolor sit amet consectetur adipisicing
                        </h3>
                    </article>
                </div>
            </a>

            <a href="#">
                <div class="item">
                    <article>
                        <div class="display-price">
                            <h3>R$0,00</h3>
                            <button><span class="material-symbols-outlined wish-list">
                                    favorite</span></button>
                        </div>
                        <div class="display-item">
                            <h3 class="promocao">0% OFF</h3>
                            <div class="rate"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star-half-stroke"></i></div>
                        </div>
                        <h3 class="display-name">Lorem ipsum dolor sit amet consectetur adipisicing
                        </h3>
                    </article>
                </div>
            </a>

            <a href="#">
                <div class="item">
                    <article>
                        <div class="display-price">
                            <h3>R$0,00</h3>
                            <button><span class="material-symbols-outlined wish-list">
                                    favorite</span></button>
                        </div>
                        <div class="display-item">
                            <h3 class="promocao">0% OFF</h3>
                            <div class="rate"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star-half-stroke"></i></div>
                        </div>
                        <h3 class="display-name">Lorem ipsum dolor sit amet consectetur adipisicing
                        </h3>
                    </article>
                </div>
            </a>
            <a href="#">
                <div class="item">
                    <article>
                        <div class="display-price">
                            <h3>R$0,00</h3>
                            <button><span class="material-symbols-outlined wish-list">
                                    favorite</span></button>
                        </div>
                        <div class="display-item">
                            <h3 class="promocao">0% OFF</h3>
                            <div class="rate"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star-half-stroke"></i></div>
                        </div>
                        <h3 class="display-name">Lorem ipsum dolor sit amet consectetur adipisicing
                        </h3>
                    </article>
                </div>
            </a>
            <a href="#">
                <div class="item">
                    <article>
                        <div class="display-price">
                            <h3>R$0,00</h3>
                            <button><span class="material-symbols-outlined wish-list">
                                    favorite</span></button>
                        </div>
                        <div class="display-item">
                            <h3 class="promocao">0% OFF</h3>
                            <div class="rate"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star-half-stroke"></i></div>
                        </div>
                        <h3 class="display-name">Lorem ipsum dolor sit amet consectetur adipisicing
                        </h3>
                    </article>
                </div>
            </a>
            <a href="#">
                <div class="item">
                    <article>
                        <div class="display-price">
                            <h3>R$0,00</h3>
                            <button><span class="material-symbols-outlined wish-list">
                                    favorite</span></button>
                        </div>
                        <div class="display-item">
                            <h3 class="promocao">0% OFF</h3>
                            <div class="rate"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star-half-stroke"></i></div>
                        </div>
                        <h3 class="display-name">Lorem ipsum dolor sit amet consectetur adipisicing
                        </h3>
                    </article>
                </div>
            </a>
            <a href="#">
                <div class="item">
                    <article>
                        <div class="display-price">
                            <h3>R$0,00</h3>
                            <button><span class="material-symbols-outlined wish-list">
                                    favorite</span></button>
                        </div>
                        <div class="display-item">
                            <h3 class="promocao">0% OFF</h3>
                            <div class="rate"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star-half-stroke"></i></div>
                        </div>
                        <h3 class="display-name">Lorem ipsum dolor sit amet consectetur adipisicing
                        </h3>
                    </article>
                </div>
            </a>
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
            <a href="?logout">sair</a>
        </nav>
    </footer>
    <script src="scripts/home.js"></script>
</body>

</html>