<?php
// require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/models/livros.php';

$id_livro = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$livro = livros::selecionarLivro($id_livro);
if (!$livro) {
  echo "Livro não encontrado.";
  exit;
}
?>

<div>
  <img src="data:image/jpeg;base64,<?= base64_encode($livro['capa']);?>" alt="">
    <h1><?= htmlspecialchars($livro['autor']); ?></h1>
    <h1><?= htmlspecialchars($livro['titulo']); ?></h1>
    <h1><?= htmlspecialchars($livro['categoria']); ?></h1>
  </div>
  
    <p><?= htmlspecialchars($livro['sinopse']) ?></p>



  <?php
  // require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_rodape.php';
  ?>