<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_cabecalho.php';
?>
    <main id="adicionar_livros">
        <section class="ad_livros">
            <h2 class="box" >Adicionar Livro <img src="../imgs/config.svg" alt="Ícone de Configuração" width="40px" height="40px"></h2>
            <form action="">
                <label for="adicionar_imagem">Imagem:</label>
                <input type="file" name="adicionar_imagem" id="adicionar_imagem" accept="image/*">

        
                    <label for="adicionar_titulo">Título:</label>
                    <input type="text" name="adicionar_titulo" id="adicionar_titulo" placeholder="Digite o Título">

                    <label for="adicionar_autor">Autor:</label>
                    <input type="text" name="adicionar_autor" id="adicionar_autor" placeholder="Digite o Autor">

                    <label for="adicionar_categoria">Categoria:</label>
                    <input type="text" name="adicionar_categoria" id="adicionar_categoria" placeholder="Digite a Categoria">

                    <label for="sinopse">Sinopse:</label>
                    <textarea name="sinopse" id="sinopse" cols="58" rows="10" placeholder="Digite a Sinopse"></textarea>
               

                <button type="submit" value="Salvar">Salvar</button>
                <button type="reset" value="Apagar">Apagar</button>
            </form>
        </section>
    </main>

    <?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_rodape.php';
?>
