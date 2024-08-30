<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/configs/conexao.php';

class usuario {
public $id_usuario;
public $email;
public $senha;
public $foto_perfil;
public $nome;



public function cadastrarUsuario()
{
    try {
        $conn = Conexao::conectar();
        $sql = 'INSERT INTO usuarios (email, senha, foto_perfil, nome) VALUES (:email, :senha, :foto_perfil, :nome)';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':senha', $this->senha);
        $stmt->bindValue(':foto_perfil', $this->foto_perfil);
        $stmt->bindValue(':nome', $this->nome);

        $stmt->execute();
    } catch (PDOException $erro) {
        echo $erro->getMessage();
    }
}
}