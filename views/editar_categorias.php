<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_cabecalho.php';
?>

    <main class="adicionar_categorias">

       <section class="ad_categorias">
            <h2 class="box">Editar Categoria <img src="..jeane//imgs/config.svg" alt="ícone de seta" width="30px" height="30px"></h2>
                <form action="">
                <label for="editar categoria"> Edite a categoria:</label>
                <input type="text" name="editar categoria" id="editar categoria" value="" placeholder="Categoria...">
           

            <button type="submit" value="Editar">Editar</button>
              </form>
         </section>
    </main>
    <?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_rodape.php';
?>