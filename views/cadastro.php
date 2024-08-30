<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_cabecalho.php';
?>

    <main class="cadastro">
     <section class="box_cadastro">

        <h1>Crie sua conta</h1>

        <form action="/jeane/estante_web/controllers/usuarios_controller.php" method="post">

        <div>
            <label for="foto">Foto de Perfil:</label>
            <input type="file" name="foto_perfil" id="foto" accept="image/*">
        </div>
        
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Seu nome..." required>

        
             <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Seu email..." required>
        
        
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" placeholder="Crie uma senha..." required>

       
           <button type="submit" value="Criar">Criar</button>
         </form>
    

        </section>
        <!-- <div class="box2">já tem cadastrado?
            acesse sua conta
            </div> -->


    </main>
    

    <?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_rodape.php';
?>