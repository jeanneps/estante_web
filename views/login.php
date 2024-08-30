<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_cabecalho.php';
?>
 <?php if(isset($_COOKIE['aviso'])):?>
        <h1><?= $_COOKIE['aviso']?></h1>
        <?php
            setcookie('aviso', '', time() - 3600, '/jeane/estante_web/');
        ?>
    <?php endif;?>


    <main class="usuario">
       <section class="box_usuario">

            <h1>Acesse sua conta</h1>

            <form action="/jeane/estante_web/controllers/login_controller.php" method="post" >
               <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required autocomplete="email">
           

                
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha" required>
                


                <button type="submit" value="Entrar">Entrar</button>


                <div>Esqueceu sua senha </div>

            </form>

        </section>

      
        <h4>Ainda não é cadastrado?</h4>
        <h4><a href="/jeane/estante_web/views/cadastro.php">Crie sua conta</a></h4>



    </main>
    <?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_rodape.php';
?>