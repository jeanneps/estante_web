<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/models/livros.php';

$livros = livros::mostrarLivros();
if (!is_array($livros)) {
    $livros = [];
}

?>

<main id="index">
    <div id="livros_conteiner">
        <?php if ($livros): ?>
            <?php foreach ($livros as $livro): ?>
                <div class="livro-item">
                    <a href="/jeane/estante_web/views/exp_livro.php?id=0<?= htmlspecialchars($livro['id_livro']); ?>">
                        <img id="capa" src="data:image/jpeg;base64, <?= base64_encode($livro['capa']); ?>" alt="capa de livro">
                        <h2 id="titulo"><?= htmlspecialchars($livro['titulo']); ?></h2>

                    </a>
                    <img src="/jeane/estante_web/imgs/favorito.svg" alt="Favorito">
                </div>


            <?php endforeach; ?>
        <?php else: ?>
            <p>Nenhum livro encontrado.</p>
        <?php endif; ?>
    </div>
</main>







    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_rodape.php';
    ?>