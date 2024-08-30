<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/models/usuarios.php';



$email = $_POST['email'];
$senha = $_POST['senha'];
$senha = password_hash($senha, PASSWORD_DEFAULT);
if(!empty($_FILES['foto_perfil']['tmp_name'])){
    $foto_perfil = file_get_contents($_FILES['foto_perfil']['tmp_name']);
};
$nome = $_POST['nome'];


$usuario = new usuario();
$usuario->email = $email;
$usuario->senha = $senha;
$usuario->nome = $nome;
if(isset($foto_perfil)){
    $usuario->foto_perfil = $foto_perfil;
} else {
    $usuario->foto_perfil = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/imgs/favicon.icon.jpg');
}


$usuario->cadastrarUsuario();
header('Location: /jeane/estante_web/views/login.php');
exit();