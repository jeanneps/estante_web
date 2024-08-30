<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_cabecalho.php';
?>

    <main class="adicionar_categorias">

        <section class="ad_livros">
            <h2 class="box">Editar Livro <img src="../imgs/config.svg" alt="ícone seta" width="40px" height="40px"></h2>

            <form action="">
                <div>
                    <label for="adicionar imagem">Imagem:</label>
                    <input type="file" name="adicionar imagem" id="adicionar_imagem" accept="image/*">
                </div>
                    <label for="adicionar titulo">Titulo:</label>
                    <input type="text" name="adicionar titulo" id="adicionar titulo" value="" placeholder="Digite o Titulo...">

                    <label for="adicionar autor">Autor:</label>
                    <input type="text" name="adicionar autor" id="adicionar autor" value="" placeholder="Digite o Autor...">

                    <label for="adicionar categoria">Categoria:</label>
                    <input type="text" name="adicionar categoria" id="adicionar categoria" value="" placeholder="Digite a Categoria...">

                    <label for="sinopse">Sinopse:</label>
                    <textarea name="Digite a sinopse" id="sinopse" cols="58" rows="10">Digite a Sinopse...</textarea placeholder="Digite a Sinopse ">
               

               <button type="submit" value="Salvar">Salvar</button>
               <button type="submit" value="Deletar">Deletar</button>
            </form>
        </section>
    </main>
    <?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_rodape.php';
?>