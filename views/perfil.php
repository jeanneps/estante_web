<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_cabecalho.php';
?>
    <main class="perfil">
       <section class="container_perfil">
            <h1>Meu Perfil</h1>
            <form>
                <div>
                    <label for="foto_de_perfil">Foto de Perfil:</label>
                    <input type="file" name="foto_de_perfil" id="foto_de_perfil" accept="image/*">
                </div>
               
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" placeholder="Nome..." required>

                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" placeholder="Email..." required>
               
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha" placeholder="senha..." required>
            
                    <label for="Contato">Contato:</label>
                    <input type="tel" id="Contato" name="Contato" placeholder="(XX) XXXX-XXXX" pattern="[0-9]{2} [0-9]{4}-[0-9]{4}" required>
            
               


                    <button type="submit" value="Gravar">Gravar</button>

                   <div><button type="submit" value="Gerenciar Categorias">Gerenciar Categorias</button></div>
                   <div> <button type="submit" value="Gerenciar livros">Gerenciar livros</button></div>
      
    
         </form>

        </section>

      
    </main>
    <?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_rodape.php';
?>
