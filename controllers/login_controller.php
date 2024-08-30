<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/auth/auth.php';

$email = $_POST['email'];
$senha = $_POST['senha'];


Auth::login($email, $senha);
?>