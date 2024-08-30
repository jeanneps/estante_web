<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/auth/auth.php';
// if (!Auth::estarLogado()) {
//     header('Location: /jeane/estante_web/views/login.php');
// }

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estante Web</title>
    <link rel="stylesheet" href="/jeane/estante_web/css/style.css">
    <link rel="shortcut icon" href="/jeane/estante_web/imgs/favicon.icon.jpg" type="image/x-icon">
</head>

<body>
    <header>
        <div class="logo-busca">
            <h1>Estante Web</h1>
            <form action="">
                <label for="busca">Buscar</label>
                <input type="search" name="busca" id="busca" style="width: 200px; height: 25px;">
            </form>
           <a href="/jeane/estante_web/controllers/logout_controller.php ">Sair</a>

        </div>

    </header>
    <nav aria-label="Navegação principal">
        <a href="/jeane/estante_web/index.php">inicio</a>
        <a href="/jeane/estante_web/views/quem_somos.php">Quem somos</a>
        <a href="/jeane/estante_web/views/contato.php">Contato</a>
        <a href="/jeane/estante_web/views/favoritos.php" 
            class="alinhar">
            <img src="/jeane/estante_web/imgs/star.png.png" alt="ícone de favoritos" width="20px" height="20px">
            Favoritos
        </a>
        <a href="/jeane/estante_web/views/login.php">Login</a>

        
    </nav>
    
 