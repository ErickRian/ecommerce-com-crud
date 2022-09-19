<?php

function itemCard($preco, $imagem, $descricao) {
    ?>
    <a href="#">
    <div class="item">
        <article>
            <div class="display-price">
                <h3><?php echo $preco?></h3>
                <button><span class="material-symbols-outlined wish-list">
                        favorite</span></button>
            </div>
            <div class="display-item" style="background-image: url(<?php echo $imagem?>);">
                <div class="rate"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star-half-stroke"></i></div>
            </div>
            <h3 class="display-name"><?php echo $descricao?></h3>
        </article>
    </div>
</a>
<?php
}


?>