<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_cabecalho.php';
?>
<main class="gerenciar_categorias">
    <section class="categorias">
        <h2 class="box"> <img src="../jeane/imgs/setting.svg" alt="ícone de configuração" width="40px">Gerenciar Categorias
            <button type="submit" value="Adicionar">Adicionar</button>
        </h2>

        <div class="categorias2">Categorias # 1
            <img src="../jeane/imgs/editar.svg" alt="ícone de editar" width="30px" height="30px"> <img src="../jeane/imgs/lixeira.svg" alt="ícone de apagar" width="30px" height="30px">
        </div>
        <div class="categorias2">Categorias # 2</div>
        <div class="categorias2">Categorias # 3</div>
        <div class="categorias2">Categorias # 4</div>
        <div class="categorias2">Categorias # 5</div>
    </section>

    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_rodape.php';
    ?>