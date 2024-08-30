<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/models/livro.php';
session_start();


$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$sinopse = $_POST['sinopse'];
$categoria = $_POST['categoria'];

if(!empty($_FILES['capa']['tmp_name'])){
    $capa = file_get_contents($_FILES['capa']['tmp_name']);
};

$livro = new livros();
$livro->titulo = $titulo;
$livro->autor = $autor;
$livro->sinopse = $sinopse;
if(isset($capa)){
    $livro->capa= $capa;
} else {
    $livro->capa = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/imgs/favicon.icon.jpg');
}


$livro->mostrarLivros();
$livro->selecionarLivro($id_livro);
header('Location: /jeane/estante_web/views/exp_livro.php');
exit();